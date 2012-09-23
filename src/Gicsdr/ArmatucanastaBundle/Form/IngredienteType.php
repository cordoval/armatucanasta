<?php

namespace Gicsdr\ArmatucanastaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IngredienteType extends AbstractType
{
    public function __construct($unidades,$insumos)
    {
        $this->unidades = $unidades;
        $this->insumos = $insumos;
    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id_plato', 'hidden')
            ->add('id_unidad', 'choice', array('choices' => $this->unidades, 'expanded' => false, 'required' => true, 'label' => 'Unidad de Medida'))
            ->add('id_insumo', 'choice', array('choices' => $this->insumos, 'expanded' => false, 'required' => true, 'label' => 'Producto'))
            ->add('cantidad')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gicsdr\ArmatucanastaBundle\Entity\Ingrediente'
        ));
    }

    public function getName()
    {
        return 'gicsdr_armatucanastabundle_ingredientetype';
    }
}
