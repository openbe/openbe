<?php

namespace Openbe\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OpenbeUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
