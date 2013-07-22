<?php

namespace Deporte\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Deporte\AdminBundle\Entity\TipoDeporte;

use Yepsua\GeneratorBundle\UI\Grid;
use Yepsua\CommonsBundle\Persistence\Dao;
use Yepsua\SmarTwigBundle\UI\Message\Notification;

use \YsJQuery as JQuery;
use \YsJQueryConstant as JQueryConstant;
use \YsGridField as GridField;
use \YsGridResponse as GridResponse;
use \YsGridRow as GridRow;


/**
 * TipoDeporte controller.
 *
 * @Route("/lstdeporte")
 */
class TipoDeporteController extends Controller
{
    /**
     * Lists all TipoDeporte entities.
     *
     * @Route("/", name="lstdeporte")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        JQuery::useComponent(JQueryConstant::COMPONENT_JQGRID);
        JQuery::usePlugin(JQueryConstant::PLUGIN_PNOTYFY);
        
        $grid = new Grid('tipodeporte','Listado de Deportes Disponibles');
        $grid->setUrl($this->generateUrl('lstdeporte_data'));
        $grid->setTranslator($this->get('translator'));
        $grid->noWriteActions();
        $grid->get();      
    
        $field = new GridField('tipodeporte.id', 'Id');      
        $field->setHidden(true);      
        $grid->addGridField($field);
            
        $field = new GridField('tipodeporte.deporte', 'Deporte');      
        $grid->addGridField($field);
            
        /* jqGrid options */
          $grid->setWidth("820px");
          //$grid->setDataType(\YsGridConstants::DATA_TYPE_LOCAL);
          $grid->setHeight('auto');
          $grid->setRowNum(30);
          $grid->setRowList(array(3,5,10));
          //$grid->setViewRecords(true);

        return array(
            'grid' => $grid
        );
    }
  
    /**
     * Public service - All TipoDeporte entities
     * @Route("/data", name="lstdeporte_data")
     * @Method("GET")
     */
    public function dataAction()
    {
        try{
            JQuery::useComponent(JQueryConstant::COMPONENT_JQGRID);
            
            $em = $this->getDoctrine()->getManager();
            $orderBy = $this->getRequest()->get('sidx');
            $page = $this->getRequest()->get("page", 1);
            $rows = $this->getRequest()->get("rows", 1);
            $sord = $this->getRequest()->get('sord', 'ASC');
            $filters = $this->getRequest()->get('filters', null);
            $response = new GridResponse();
            
            $repository = $em->getRepository('AdminBundle:TipoDeporte');
            $count = Dao::count($repository);
            
            if($count > 0){
                $query = Dao::buildQuery($repository, 'tipodeporte', $orderBy, $sord, $filters);
                $query->setMaxResults($rows)->setFirstResult(($page - 1) * $rows);
                $entities = $query->getQuery()->getResult();
                
                foreach ($entities as $entitie){
                    $row = new GridRow();
                    $row->setId($entitie->getId());                                            
                    $row->newCell($entitie->getId());                                                                                    
                    $row->newCell($entitie->getDeporte());    
                    $response->addGridRow($row);
                }
            }
            
            $totalRows = $count / $rows;
            $totalRows = is_real($totalRows) ? intval($totalRows) + 1 : intval($totalRows);
            $response->setPage($page);
            $response->setTotal($totalRows);
            $response->setRecords($count);

            return new Response($response->buildResponseAsJSON());    
        }catch(\Exception $e){
            $this->get('logger')->crit($e->getMessage());
            return new Response(Notification::error($e->getMessage()), 203);
        }
    }

    /**
     * Finds and displays a TipoDeporte entity.
     *
     * @Route("/{id}", name="lstdeporte_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        try{
            $em = $this->getDoctrine()->getManager();

            $entity = $em->getRepository('AdminBundle:TipoDeporte')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TipoDeporte entity.');
            }

            return array(
                'entity'      => $entity,
        );
        }catch(\Exception $e){
            $this->get('logger')->crit($e->getMessage());
            return new Response(Notification::error($e->getMessage()), 203);
        }
    }

}
