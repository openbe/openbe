<?php

namespace Openbe\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('OpenbeAdminBundle:Home:index.html.twig');
    }
}
