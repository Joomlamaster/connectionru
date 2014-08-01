<?php
/**
 * Created by PhpStorm.
 * User: vpinzaru
 * Date: 7/2/14
 * Time: 5:14 PM
 */

namespace Connection\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\AbstractType;

class EditProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder
            ->add('firstName', 'text')
            ->add('lastName', 'text')
            ->add('profile', new ProfileType(array('validation_groups' => array('profile'))))
            ->add('submit', 'submit');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'        => 'Connection\UserBundle\Entity\User',
            'cascade_persist'   => true,
            'cascade_validation' => true,
            'validation_groups' => array('profile'),
            'csrf_protection'   => false
        ));
    }

    public function getName()
    {
        return 'connection_user_profile_edit';
    }
}