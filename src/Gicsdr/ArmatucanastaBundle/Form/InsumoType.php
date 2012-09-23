<?php

namespace Gicsdr\ArmatucanastaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InsumoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id_unidad')
            ->add('codigo')
            ->add('descripcion')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gicsdr\ArmatucanastaBundle\Entity\Insumo'
        ));
    }

    public function getName()
    {
        return 'gicsdr_armatucanastabundle_insumotype';
    }
}
