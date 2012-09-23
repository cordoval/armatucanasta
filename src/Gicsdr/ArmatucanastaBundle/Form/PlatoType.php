<?php

namespace Gicsdr\ArmatucanastaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PlatoType extends AbstractType
{
    public function __construct($cocinas)
    {
        $this->cocinas = $cocinas;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id_cocina')
            ->add('nombre')
            ->add('descripcion','choice',array('choices' => $this->cocinas, 'expanded' => false, 'required' => true, 'label' => 'Tipo'))
            ->add('num_personas')
            ->add('preparacion')
            ->add('img_path')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gicsdr\ArmatucanastaBundle\Entity\Plato'
        ));
    }

    public function getName()
    {
        return 'gicsdr_armatucanastabundle_platotype';
    }
}
