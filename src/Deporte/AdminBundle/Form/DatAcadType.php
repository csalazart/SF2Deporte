<?php

namespace Deporte\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DatAcadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $year=array();
        for ($i=(date("Y")-5);$i<=date("Y");$i++ ) $year[$i]=$i; 
        
        $builder
            ->add('cedula',null,array('label'=>'Cédula'))
            ->add('aingreso','choice',array(
                    'label'  => 'Año de Ingreso',
                    'choices' =>$year
                ))
            ->add('escuela', 'entity',array(
                'label'=>'Escuela',
                'class'=>'AdminBundle:TipoEscuela',
                'property'=> 'escuela',
                'empty_value' =>'Seleccione Escuela'
                ))
            ->add('especialidad','choice', array(
                    'label'=>'Especialidad',
                    'choices'=> array('empty_value' => 'Seleccione Especialidad'),
                ))
            ->add('semestre',null,array('label'=>'Semestre'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Deporte\AdminBundle\Entity\DatAcad'
        ));
    }

    public function getName()
    {
        return 'adminbundle_datacadtype';
    }
}
