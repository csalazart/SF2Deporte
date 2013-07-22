<?php

namespace Deporte\AtletasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AtletasBundle:Default:index.html.twig', array('name' => $name));
    }
}
