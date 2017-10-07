<?php

namespace FootBundle\Controller;

use Doctrine\ORM\EntityRepository;
use FootBundle\Entity\Flashnews;
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

class FlashnewsController extends Controller
{

    public function flashnewsAddAction(Request $request)
    {


        $flashnews = new Flashnews();

        $form = $this->createFormBuilder($flashnews)

            ->add("flashnews_category",EntityType::class, array(
                'class' => 'FootBundle\Entity\Category',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.categoryParent = 0')
                        ->orderBy('u.categoryName', 'ASC');
                },
                'choice_label' => 'category name',
                'attr'=> array('class'=>'form-control')
            ) )


            ->add("news_id" ,EntityType::class ,array(
                'class' => 'FootBundle\Entity\News',
                'query_builder' => function (EntityRepository $repo) {
                    return $repo->createQueryBuilder('f')
                         ->orderBy('f.newsTitle', 'DESC');
                },
                'choice_label' => 'news Title',
                'attr'=> array('class'=>'form-control')
            ))

            ->add("flashnews_urgent"	,ChoiceType::class,array(
                'choices'  => array(   'No' => 0, 'Oui' => 1),
                'attr'=> array('class'=>'form-control')
            ))

            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted()&& $form->isValid())
        {

            $flashnews=$form->getData();



            $flashnews->setIsdeleted(0);

            $this->getDoctrine()->getManager()->persist($flashnews);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute("foot_list_flashnews");
        }
        return $this->render("@Foot/Flashnews/addFlashnews.html.twig",array("form"=>$form->createView()));

    }

    public function flashnewsEditAction(Flashnews $flashnews,Request $request)
    {

            $form = $this->createFormBuilder($flashnews)

                ->add("flashnews_category",EntityType::class, array(
                    'class' => 'FootBundle\Entity\Category',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                            ->where('u.categoryParent = 0')
                            ->orderBy('u.categoryName', 'ASC');
                    },
                    'choice_label' => 'category name',
                    'attr'=> array('class'=>'form-control')
                ) )


                ->add("news_id" ,EntityType::class ,array(
                    'class' => 'FootBundle\Entity\News',
                    'query_builder' => function (EntityRepository $repo) {
                        return $repo->createQueryBuilder('f')
                            ->orderBy('f.newsTitle', 'DESC');
                    },
                    'choice_label' => 'news Title',
                    'attr'=> array('class'=>'form-control')
                ))

                ->add("flashnews_urgent"	,ChoiceType::class,array(
                    'choices'  => array(   'No' => 0, 'Oui' => 1),
                    'attr'=> array('class'=>'form-control')
                ))

                ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid())
        {
            $flashFom=$form->getData();


            $this->getDoctrine()->getManager()->persist($flashFom);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute("foot_list_flashnews");
        }
        return $this->render("@Foot/Flashnews/editFlashnews.html.twig",array("form"=>$form->createView(),"id"=>$flashnews->getFlashnewsId()));

    }


    public function flashnewsListAction()
    {
        $em=$this->getDoctrine()->getManager();
        $news=$em->getRepository("FootBundle:Flashnews")->findAll();
        return $this->render("@Foot/Flashnews/listFlashnews.html.twig",array("flash"=>$news));
    }


}