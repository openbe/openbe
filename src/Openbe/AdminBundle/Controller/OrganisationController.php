<?php

namespace Openbe\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OrganisationController extends Controller
{
    public function indexAction()
    {
        return $this->render('OpenbeAdminBundle:Organisation:index.html.twig');
    }

    public function addAction(){
    	return $this->render('OpenbeAdminBundle:Organisation:add.html.twig');
    }
}
