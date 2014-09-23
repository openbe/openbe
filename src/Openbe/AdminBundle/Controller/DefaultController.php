<?php

namespace Openbe\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OpenbeAdminBundle:Default:index.html.twig');
    }
}
