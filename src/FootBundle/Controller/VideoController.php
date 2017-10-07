<?php

namespace FootBundle\Controller;

use Doctrine\ORM\EntityRepository;
use FootBundle\Entity\Video;
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

class VideoController extends Controller
{

    public function videoAddAction(Request $request)
    {

        $video = new Video();

        $form = $this->createFormBuilder($video)

            ->add("video_title"	,TextType::class,array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add("video_desc" ,TextareaType::class ,array(
                'attr'=> array('class'=>'summernote')
            ))

            ->add("video_youtube"	,TextType::class,array(
                'attr'=> array('class'=>'form-control')
            ))
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted()&& $form->isValid())
        {

            $video=$form->getData();

            $video->setIsdeleted(0);

            $this->getDoctrine()->getManager()->persist($video);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute("foot_list_video");
        }
        return $this->render("@Foot/Video/addVideo.html.twig",array("form"=>$form->createView()));


    }

    public function videoEditAction(Video $video,Request $request)
    {

        $form = $this->createFormBuilder($video)

            ->add("video_title"	,TextType::class,array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add("video_desc" ,TextareaType::class ,array(
                'attr'=> array('class'=>'summernote')
            ))

            ->add("video_youtube"	,TextType::class,array(
                'attr'=> array('class'=>'form-control')
            ))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid())
        {
            $videoFom=$form->getData();

            $this->getDoctrine()->getManager()->persist($videoFom);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute("foot_list_video");
        }
        return $this->render("@Foot/Video/editVideo.html.twig",array("form"=>$form->createView(),"id"=>$video->getVideoId()));

    }


    public function videoListAction()
    {
        $em=$this->getDoctrine()->getManager();
        $news=$em->getRepository("FootBundle:Video")->findAll();
        return $this->render("@Foot/Video/listVideo.html.twig",array("video"=>$news));
    }


}