<?php

namespace Deporte\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Deporte\Adminbundle\Entity\TipoDeporte;

class DeporteController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $deportes = $em->getRepository('AdminBundle:TipoDeporte')->findAll();
        return $this->render('AdminBundle:Deportes:index.html.twig', array('Deportes' => $deportes));
    }
    /**
     *  Editar Deporte
     * @param type $id
     * @return type Render Template o redirect
     */
    public function editAction($id)
    {
        $request = $this->getRequest();
       $em = $this->getDoctrine()->getEntityManager();
       $Deporte = $em->getRepository('AdminBundle:TipoDeporte')->find($id);
       if($request->getMethod() == 'POST')
        {
           $Deporte->setDeporte($request->get('deporte')  );
           $em->persist($Deporte);
           $em->flush();
           return $this->redirect($this->generateUrl('admin_deporte'));
       }
       return $this->render('AdminBundle:Deportes:edit.html.twig',array('rowDeporte'=>$Deporte) );    
    }
    /**
     *  Eliminar Elemento
     * @param type $id
     * @return type Redirect
     */
    public function delAction($id)
    {
      return $this->redirect($this->generateUrl('admin_deporte'));
       //return $this->render('AdminBundle:Deportes:index.html.twig',array('Deporte'=>$deporte) );    
    }
   /**
    *  Nuevo Registro de Deporte
    * @return type Render Template
    */
   public function newAction()
    {
       $datos = new TipoDeporte();
       return $this->render('AdminBundle:Deportes:nuevo.html.twig',array('form'=>$datos) );    
    }

}




