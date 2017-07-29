<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 22/07/2017
 * Time: 13:03
 */

namespace SettingsBundle\Twig;


class AppExtension extends  \Twig_Extension
{

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('isam',array($this,'isamFilter')),
        );
    }
        public function isamFilter($prix)
        {

               return $prix."$" ;
        }

}