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
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;

class EditProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder
            ->add('firstName', 'text')
            ->add('lastName', 'text')
            ->add('profile', 'connection_user_profile')
            ->add('submit', 'submit');

//        $builder->get('profile')->addEventListener(
//            FormEvents::PRE_SUBMIT,
//            function (FormEvent $event) {
//                $form = $event->getForm();
//
//                //remove birthdate or it will be set to null
//                //because we don't show this field in edit form
//                $form->remove('birthdate');
//            }
//        );
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