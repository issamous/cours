<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 22/07/2017
 * Time: 12:05
 */

namespace SettingsBundle\Service;


use Doctrine\ORM\EntityManager;

class MessageGenerator
{
    private $em;

    public function __construct( EntityManager $em)
    {
        $this->em = $em;
    }
    public function getHappyMessage()
    {


        $user=$this->em->getRepository("SettingsBundle:User")->find(1);
        return $user;
    }
}