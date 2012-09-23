<?php

namespace Gicsdr\ArmatucanastaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConversionType extends AbstractType
{
    public function __construct($unidades)
    {
        $this->unidades = $unidades;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id_unidad_desde', 'choice', array('choices' => $this->unidades, 'expanded' => false, 'required' => true, 'label' => 'Desde'))
            ->add('id_unidad_hasta', 'choice', array('choices' => $this->unidades, 'expanded' => false, 'required' => true, 'label' => 'Desde'))
            ->add('factor')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gicsdr\ArmatucanastaBundle\Entity\Conversion'
        ));
    }

    public function getName()
    {
        return 'gicsdr_armatucanastabundle_conversiontype';
    }
}
