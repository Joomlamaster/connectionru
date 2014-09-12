<?php

namespace Connection\EventBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Doctrine\ORM\EntityRepository;
use Connection\CoreBundle\Entity\Country;

class EventType extends AbstractType
{
    private $profileCountryIso;

    public function __construct($profileCountryIso = array())
    {
        $this->profileCountryIso = $profileCountryIso;
    }


    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $profileCountryIso = $this->profileCountryIso;
        $builder->add('country', 'entity', array(
            'class' => 'ConnectionCoreBundle:Country',
            'query_builder' => function(EntityRepository $er) use ($profileCountryIso) {
                    return $er->createQueryBuilder('c')
                        ->where('c.iso IN (:iso)')
                        ->setParameter('iso', $profileCountryIso)
                        ->orderBy('c.priority', 'DESC');
                },
            'property' => 'name',
            'attr' => array('class' => 'master')
        ));

        $formModifier = function (FormInterface $form, Country $country = null) {
            if ( $country ) {
                $form->add('state', 'entity', array(
                    'class' => 'ConnectionCoreBundle:State',
                    'property' => 'name',
                    'attr' => array('class' => 'slave'),
                    'query_builder' => function(EntityRepository $er) use ($country) {
                            return $er
                                ->createQueryBuilder('s')
                                ->where('s.country = :country')
                                ->setParameter('country', $country)
                                ->orderBy('s.priority', 'DESC')
                                ;
                        }
                ));
            }
        };

        $builder->get('country')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                $country = $event->getForm()->getData();
                $formModifier($event->getForm()->getParent(), $country);
            }
        );

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                $data = $event->getData();
                $formModifier($event->getForm(), $data->getCountry());
            }
        );
        $builder
            ->add('title', 'text', array(
                'label' => 'Event  posting title:'
            ))
            ->add('description', 'textarea', array(
                    'attr' => array(
                        'placeholder' => "Example:  let's get together and celebrated it's cool Russian party in the style bits!"
                    )
                ))
            ->add('eventDate', 'date', array(
                'widget'    => 'single_text',
                'attr'      => array(
                    'class' => 'input-append date'
                )
            ))
            ->add('category', 'entity', array(
                'class' => 'ConnectionEventBundle:Category',
                'property' => 'name',
                'multiple' => true,
                'expanded' => true,
                'label'    => 'Select a category:'
            ))
            ->add('contactName')
            ->add('email')
            ->add('phone')
            ->add('lat', 'hidden')
            ->add('lng', 'hidden')
            ->add('save', 'submit', array(
                'label' => 'Submit'
            ));
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Connection\EventBundle\Entity\Event',
            'csrf_protection' => false
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'connection_event_type';
    }
}
