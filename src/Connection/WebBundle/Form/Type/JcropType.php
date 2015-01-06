<?php

namespace Connection\WebBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints;

class JcropType extends AbstractType
{
    public function buildForm( FormBuilderInterface $builder, array $options )
    {
        $builder
            ->add('x', 'hidden')
            ->add('y', 'hidden')
            ->add('x2','hidden')
            ->add('y2','hidden')
            ->add('w', 'hidden')
            ->add('h', 'hidden');
    }

    public function getName()
    {
        return 'jcrop';
    }
}
?>