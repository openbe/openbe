<?php

namespace Openbe\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NavigationController extends Controller
{
    public function indexAction()
    {
        return $this->render('OpenbeAdminBundle:Navigation:index.html.twig');
    }
}
