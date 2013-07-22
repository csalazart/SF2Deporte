<?php

namespace Deporte\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Deporte\Adminbundle\Entity\DatAcad;

use Deporte\AdminBundle\Form\DatAcadType;
use Deporte\Adminbundle\Form\LoginformType;

class DemoController extends Controller
{
    public function indexAction()
    {
        //$datos = new DatAcad();
        //$form=$this->createForm(new DatAcadType(),$datos);
        $form=$this->createForm(new DatAcadType());
        return $this->render('AdminBundle:Default:demoform.html.twig', array('form' => $form->createView()));
    }
    public function loginAction()
    {
        $form=$this->createForm(new LoginformType());
        return $this->render('AdminBundle:Default:loginform.html.twig', array('form' => $form->createView()));
    }
}




