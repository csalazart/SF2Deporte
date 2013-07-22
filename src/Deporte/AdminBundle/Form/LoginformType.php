<?php
namespace Deporte\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LoginformType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
         $builder
            ->add('user','text',array('label'=>'Usuario'))
            ->add ('clave','password',array('label'=>'Clave'))
          ;       
    }

//    public function setDefaultOptions(OptionsResolverInterface $resolver)
//    {
//        //$resolver->setDefaults(array(
//        //    'data_class' => 'Deporte\AdminBundle\Entity\DatAcad'
//       // ));
//    }

    public function getName()
    {
        return 'adminbundle_loginform';
    }
}

