<?php

namespace FootBundle\Controller;

use Doctrine\ORM\EntityRepository;
use FootBundle\Entity\Equipe;

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

class EquipeController extends Controller
{

    public function EquipeAddAction(Request $request)
    {

        $Equipe = new Equipe();

        $form = $this->createFormBuilder($Equipe)

            ->add("equipe_nom"	,TextType::class,array(
                'attr'=> array('class'=>'form-control')
            ))

            ->add("equipe_image_file"	,FileType::class,array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add("equipe_sug"	,TextType::class,array(
                'attr'=> array('class'=>'form-control')
            ))

            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted()&& $form->isValid())
        {


            $file = $Equipe->getEquipeImageFile();

            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('upload_equipe_directory'),
                $fileName
            );

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $Equipe->setEquipeImageFile($fileName);
            $Equipe->setIsdeleted(0);

            $this->getDoctrine()->getManager()->persist($Equipe);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute("foot_list_equipe");
        }
        return $this->render("@Foot/Equipe/addEquipe.html.twig",array("form"=>$form->createView()));


    }

    public function EquipeEditAction(Equipe $equipe,Request $request)
    {
        if($equipe->getEquipeImageFile() == null){
            $image = null ;
            $equipe->setEquipeImageFile(null);

        }else{

            $url = $this->getParameter('upload_equipe_directory')."/".$equipe->getEquipeImageFile() ;

            var_dump($url);

            if (file_exists($url)){
                $image= new File($this->getParameter('upload_equipe_directory')."/".$equipe->getEquipeImageFile());
                $equipe->setEquipeImageFile($image);
            }else{
                $image = null ;
                $equipe->setEquipeImageFile(null);
            }

        }

        var_dump($image);


        $form = $this->createFormBuilder($equipe)
            ->add("equipe_nom"	,TextType::class,array(
                'attr'=> array('class'=>'form-control')
            ))

            ->add("equipe_image_file"	,FileType::class,array(
                'attr'=> array('class'=>'form-control'),
                           'required'   => false,
                'empty_data' => $equipe->getEquipeImageFile()
            ))
            ->add("equipe_sug"	,TextType::class,array(
                'attr'=> array('class'=>'form-control')
            ))

            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid())
        {
            $equipeFom=$form->getData();
            $imagesub = $equipeFom->getEquipeImageFile();
            var_dump($imagesub);


    if ($imagesub != $image){

                 var_dump($imagesub->getClientOriginalName());

                    $file = $equipeFom->getEquipeImageFile();
                    $fileName = md5(uniqid()).'.'.$file->guessExtension();

                    // Move the file to the directory where brochures are stored
                    $file->move(
                        $this->getParameter('upload_equipe_directory'),
                        $fileName
                    );

                    // Update the 'brochure' property to store the PDF file name
                    // instead of its contents

        $equipeFom->setEquipeImageFile($fileName);

                }else{

            if($image != null){
                $equipeFom->setEquipeImageFile($image->getFilename());
            }
    }

            $this->getDoctrine()->getManager()->persist($equipeFom);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute("foot_list_equipe");
        }
        return $this->render("@Foot/Equipe/editEquipe.html.twig",array("form"=>$form->createView(),"id"=>$equipe->getEquipeId()));

    }


    public function EquipeListAction()
    {
        $em=$this->getDoctrine()->getManager();
        $equipe=$em->getRepository("FootBundle:Equipe")->findAll();
        return $this->render("@Foot/Equipe/listEquipe.html.twig",array("Equipe"=>$equipe));
    }


}