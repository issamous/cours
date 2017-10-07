<?php

namespace FootBundle\Controller;

use Doctrine\ORM\EntityRepository;
use FootBundle\Entity\Classement;

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

class ClassementController extends Controller
{

    public function classementAddAction(Request $request)
    {

        $Classement = new Classement();

        $form = $this->createFormBuilder($Classement)



            ->add("classement_equipe"	,TextType::class,array(
                'attr'=> array('class'=>'form-control')
            ))

            ->add("classement_image_file"	,FileType::class,array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add("classement_points"	,TextType::class,array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add("classement_rang"	,TextType::class,array(
                'attr'=> array('class'=>'form-control')
            ))
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted()&& $form->isValid())
        {


            $file = $Classement->getClassementImageFile();

            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('upload_classement_directory'),
                $fileName
            );

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $Classement->setClassementImageFile($fileName);


            $this->getDoctrine()->getManager()->persist($Classement);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute("foot_list_classement");
        }
        return $this->render("@Foot/Classement/addClassement.html.twig",array("form"=>$form->createView()));


    }

    public function classementEditAction(Classement $clasement,Request $request)
    {
        if($clasement->getClassementImageFile() == null){
            $image = null ;
            $clasement->setClassementImageFile(null);

        }else{

            $url = $this->getParameter('upload_classement_directory')."/".$clasement->getClassementImageFile() ;

            var_dump($url);

            if (file_exists($url)){
                $image= new File($this->getParameter('upload_classement_directory')."/".$clasement->getClassementImageFile());
                $clasement->setClassementImageFile($image);
            }else{
                $image = null ;
                $clasement->setClassementImageFile(null);
            }

        }

        var_dump($image);


        $form = $this->createFormBuilder($clasement)


            ->add("classement_equipe"	,TextType::class,array(
                'attr'=> array('class'=>'form-control')
            ))

            ->add("classement_image_file"	,FileType::class,array(
                'attr'=> array('class'=>'form-control'),

               'required'   => false,
               'empty_data' => $clasement->getClassementImageFile()
            ))
            ->add("classement_points"	,TextType::class,array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add("classement_rang"	,TextType::class,array(
                'attr'=> array('class'=>'form-control')
            ))
            ->getForm();


        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid())
        {
            $classementFom=$form->getData();
            $imagesub = $classementFom->getClassementImageFile();
            var_dump($imagesub);


    if ($imagesub != $image){

                 var_dump($imagesub->getClientOriginalName());

                    $file = $classementFom->getClassementImageFile();
                    $fileName = md5(uniqid()).'.'.$file->guessExtension();

                    // Move the file to the directory where brochures are stored
                    $file->move(
                        $this->getParameter('upload_classement_directory'),
                        $fileName
                    );

                    // Update the 'brochure' property to store the PDF file name
                    // instead of its contents

        $classementFom->setClassementImageFile($fileName);

                }else{

            if($image != null){
                $classementFom->setClassementImageFile($image->getFilename());
            }


    }


            $this->getDoctrine()->getManager()->persist($classementFom);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute("foot_list_classement");
        }
        return $this->render("@Foot/Classement/editClassement.html.twig",array("form"=>$form->createView(),"id"=>$clasement->getClassementId()));

    }


    public function classementListAction()
    {
        $em=$this->getDoctrine()->getManager();
        $classement=$em->getRepository("FootBundle:Classement")->findAll();
        return $this->render("@Foot/Classement/listClassement.html.twig",array("classement"=>$classement));
    }


}