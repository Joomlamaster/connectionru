<?php
/**
 * Created by PhpStorm.
 * User: vpinzaru
 * Date: 7/2/14
 * Time: 5:14 PM
 */

namespace Connection\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\DependencyInjection\Container;

class RegistrationType extends AbstractType {

    private $container;
    public function __construct (Container $container)
    {
        $this->container = $container;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // Add listeners
        $builder->addEventListener(FormEvents::PRE_SET_DATA, array($this, 'onPreSetData'));
        $builder->addEventListener(FormEvents::PRE_SUBMIT, array($this, 'onPreSubmit'));
    }

    protected function addElements($form) {
        $form->add('username','text')
            ->add('birthDate', 'date')
            ->add('aboutMe', 'textarea')
            ->add('interestsAndHobbies', 'textarea', array(
                'label' => 'form.interests_and_hobbies',
                'translation_domain' => 'FOSUserBundle'
            ))
            ->add('gender', 'choice', array(
                'choices' => $this->container->getParameter('gender'),
                'expanded' => true
            ))
            ->add('location', 'connection_registration_address', array(
                'mapped' => false
            ))
            ->add('originallyFrom', 'connection_registration_address', array(
                'country_only' => true
            ))
            ->add('seek', 'choice', array(
                'label' => 'form.seek',
                'translation_domain' => 'FOSUserBundle',
                'choices' => $this->container->getParameter('seek'),
                'expanded' => true
            ))
            ->add('lookingFor', 'choice', array(
                'choices' => $this->container->getParameter('looking_for'),
                'expanded' => true
            ))
            ->add('maritalStatus', 'choice', array(
                'label' => 'form.marital_status',
                'translation_domain' => 'FOSUserBundle',
                'choices' => $this->container->getParameter('marital_status'),
                'expanded' => true
            ))
            ->add('height', 'text')
            ->add('weight', 'text')
            ->add('eyeColor', 'choice', array(
                'choices' => $this->container->getParameter('eye_color')
            ))->add('hairColor', 'choice', array(
                'choices' => $this->container->getParameter('hair_color')
            ))
            ->add('smoking', 'choice', array(
                'choices' => $this->container->getParameter('smoking'),
                'expanded' => true
            ))
            ->add('drinking', 'choice', array(
                'choices' => $this->container->getParameter('smoking'),
                'expanded' => true
            ))
            ->add('education', 'choice', array(
                'choices' => $this->container->getParameter('education'),
            ))
            ->add('profession', 'choice', array(
                'choices' => $this->container->getParameter('profession'),
            ))
            ->add('languages', 'entity', array(
                'label' => 'form.languages_spoken',
                'translation_domain' => 'FOSUserBundle',
                'class' => 'Connection\CoreBundle\Entity\Language',
                'multiple'=> true
            ))
            ->add('haveChildren', 'choice', array(
                'label' => 'form.have_children',
                'translation_domain' => 'FOSUserBundle',
                'choices' => $this->container->getParameter('have_children'),
                'expanded' => true
            ))
            ->add('wantChildren', 'choice', array(
                'label' => 'form.want_children',
                'translation_domain' => 'FOSUserBundle',
                'choices' => $this->container->getParameter('want_children'),
                'expanded' => true
            ))
            ->add('openToPersonWithKids', 'choice', array(
                'label' => 'form.open_to_person_with_kids',
                'translation_domain' => 'FOSUserBundle',
                'choices' => $this->container->getParameter('open_to_person_with_kids'),
                'expanded' => true
            ))
            ->add('religion', 'choice', array(
                'choices' => $this->container->getParameter('religion')
            ))
            ->add('ethnicity', 'choice', array(
                'choices' => $this->container->getParameter('ethnicity')
            ))
            ->add('plainPassword', 'repeated', array(
               'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'form.password'),
                'second_options' => array('label' => 'form.password_confirmation'),
                'invalid_message' => 'fos_user.password.mismatch',
                'cascade_validation' => true,
                'constraints' => array(
                ),
                'required' => true

            ))
            ->add('email', 'email', array(
                'label' => 'form.email',
                'translation_domain' => 'FOSUserBundle'
            ))
            ->add('emailConfirmation', 'email', array(
                'label' => 'form.email_confirmation',
                'mapped' => false
            ));

    }

    function onPreSubmit(FormEvent $event) {
        $form = $event->getForm();
        $data = $event->getData();
        $this->addElements($form);
    }


    function onPreSetData(FormEvent $event) {
        $account = $event->getData();
        $form = $event->getForm();
        $this->addElements($form);
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Connection\CoreBundle\Entity\User'
        ));
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'connection_user_registration';
    }
}