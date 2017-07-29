<?php

namespace FootBundle\Controller;

use Doctrine\ORM\EntityRepository;
use FootBundle\Entity\News;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class NewsController extends Controller
{

    public function newsAddAction(Request $request)
    {

        $news = new News();
        $date = new \DateTime();
        $news->setNewsDate($date->format('m/d/Y'));
        $form = $this->createFormBuilder($news)

            ->add("category_id",EntityType::class, array(
                'class' => 'FootBundle\Entity\Category',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.categoryParent = 0')
                        ->orderBy('u.categoryName', 'ASC');
                },
                'choice_label' => 'category name',
                'attr'=> array('class'=>'form-control')
            ) )

            ->add("news_title"	,TextType::class,array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add("news_content" ,TextareaType::class ,array(
                'attr'=> array('class'=>'summernote')
            ))
            ->add("news_image_file"	,FileType::class,array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add("news_date"	,TextType::class,array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add("news_video"	,TextType::class,array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add("_featured"	,ChoiceType::class, array( 'choices'  => array( 'Featured' => 1,    'No Featured' => 0),'attr'=> array('class'=>'form-control')))
            ->add("_published"	,ChoiceType::class, array( 'choices'  => array( 'Published' => 1,    'No Published' => 0),'attr'=> array('class'=>'form-control')))
            ->add("_isdeleted"	,ChoiceType::class, array( 'choices'  => array( 'Public' => 1,    'No Public' => 0),'attr'=> array('class'=>'form-control')))
            ->add('save', SubmitType::class, array('label' => 'add news'))
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted()&& $form->isValid())
        { var_dump($news);
            $news=$form->getData();
            $file = $news->getNewsImageFile();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('upload_news_directory'),
                $fileName
            );

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $news->setNewsImageFile($fileName);
            $date = date_create_from_format('m/d/Y', $news->getNewsDate());
            $news->setNewsDate($date->getTimestamp());

            $this->getDoctrine()->getManager()->persist($news);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute("foot_list_news");
        }
        return $this->render("@Foot/News/addNews.html.twig",array("form"=>$form->createView()));


    }

    public function newsEditAction(News $news,Request $request)
    {

        $image= new File($this->getParameter('upload_news_directory')."/".$news->getNewsImageFile());
        $oldImage=$news->getNewsImageFile();
        $news->setNewsImageFile($image);


        $form = $this->createFormBuilder($news)

            ->add("category_id",EntityType::class, array(
                'class' => 'FootBundle\Entity\Category',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.categoryParent = 0')
                        ->orderBy('u.categoryName', 'ASC');
                },
                'choice_label' => 'category name',
                'attr'=> array('class'=>'form-control')
            ) )

            ->add("news_title"	,TextType::class,array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add("news_content" ,TextareaType::class ,array(
                'attr'=> array('class'=>'summernote')
            ))
            ->add("news_image_file"	,FileType::class,array(
                'attr'=> array('class'=>'form-control'),
                'required'   => false,
                'empty_data' => $image
            ))
            ->add("news_date"	,TextType::class,array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add("news_video"	,TextType::class,array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add("_featured"	,ChoiceType::class, array( 'choices'  => array( 'Featured' => 1,    'No Featured' => 0),'attr'=> array('class'=>'form-control')))
            ->add("_published"	,ChoiceType::class, array( 'choices'  => array( 'Published' => 1,    'No Published' => 0),'attr'=> array('class'=>'form-control')))
            ->add("_isdeleted"	,ChoiceType::class, array( 'choices'  => array( 'Public' => 1,    'No Public' => 0),'attr'=> array('class'=>'form-control')))
            ->add('save', SubmitType::class, array('label' => 'add news'))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid())
        {
            $news=$form->getData();

            if($image->getFilename().".".$image->guessExtension()==$oldImage)
            {}else
                {
                    $file = $news->getNewsImageFile();
                    $fileName = md5(uniqid()).'.'.$file->guessExtension();

                    // Move the file to the directory where brochures are stored
                    $file->move(
                        $this->getParameter('upload_news_directory'),
                        $fileName
                    );

                    // Update the 'brochure' property to store the PDF file name
                    // instead of its contents

                    $news->setNewsImageFile($fileName);
                }

            $date = date_create_from_format('m/d/Y', $news->getNewsDate());
            $news->setNewsDate($date->getTimestamp());

            $this->getDoctrine()->getManager()->persist($news);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute("foot_list_news");
        }
        return $this->render("@Foot/News/editNews.html.twig",array("form"=>$form->createView(),"id"=>$news->getNewsId()));

    }

    public function newsListAction()
    {
        $em=$this->getDoctrine()->getManager();
        $news=$em->getRepository("FootBundle:News")->findAll();
        return $this->render("@Foot/News/listNews.html.twig",array("news"=>$news));
    }

    public function getByIdAction(News $news)
    {
       if($news)
        return $response = new JsonResponse(array($news->getNewsVu(),$news->getCategoryId()->getCategoryName(),$news->getNewsDate(),$news->getNewsContent()));

    }
}