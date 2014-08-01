<?php
/**
 * Created by PhpStorm.
 * User: vpinzaru
 * Date: 7/2/14
 * Time: 5:14 PM
 */

namespace Connection\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistrationType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder
            ->add('firstName', 'text')
            ->add('lastName', 'text')
            ->add('profile', new ProfileType(), array(
                'required' => false
            ))
            ->add('agree', 'checkbox', array(
                'label'     => 'I Agree to the terms of service',
                'required'  => true,
                'mapped'    => false
            ))
            ->add('submit', 'submit');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Connection\UserBundle\Entity\User',
            'cascade_persist' => true,
            'csrf_protection' => false
        ));
    }

    public function getName()
    {
        return 'connection_user_registration';
    }
}