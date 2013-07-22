<?php

namespace Deporte\AtletasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PanelController extends Controller
{
    public function indexAction()
    {
        return $this->render('AtletasBundle:Panel:indexPanel.html.twig');
    }
}
