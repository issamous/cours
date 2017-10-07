<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 22/07/2017
 * Time: 13:03
 */

namespace FootBundle\Twig;


class FootExtension extends  \Twig_Extension
{

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('yesorno', array($this, 'yesornoFilter')),
            new \Twig_SimpleFunction('EquipeObject', array($this, 'EquipeObjectFilter')),

        );
    }


    public function yesornoFilter($value)
    {
        if ($value == 1 ) {
            return "Yes";
        } else {
            return "No";
        }
    }

    public function EquipeObjectFilter($value)
    {
      // $em= $this->getDoctrine()->getManager();
    }


}