<?php

namespace Connection\WebBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints;

class TellAFriendType extends AbstractType
{
    public function buildForm( FormBuilderInterface $builder, array $options )
    {
        $builder
            ->add('link', 'hidden')
            ->add('email', 'text', array(
                'attr' => array('class' => 'form-control')
            ))
            ->add('message','textarea', array(
                'attr' => array('class' => 'form-control')
            ))
            ->add('submit', 'submit');
    }

    public function getName()
    {
        return 'connection_tell_a_friend';
    }
}
?>