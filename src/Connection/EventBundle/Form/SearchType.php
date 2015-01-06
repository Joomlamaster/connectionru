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

class SearchType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//        $builder->add('country', 'entity', array(
//            'class' => 'ConnectionCoreBundle:Country',
//            'property' => 'name',
//            'attr' => array('class' => 'master')
//        ));
//
//        $formModifier = function (FormInterface $form, Country $country = null) {
//            if ( $country ) {
//                $form->add('state', 'entity', array(
//                    'class' => 'ConnectionCoreBundle:State',
//                    'property' => 'name',
//                    'attr' => array('class' => 'slave'),
//                    'query_builder' => function(EntityRepository $er) use ($country) {
//                            return $er
//                                ->createQueryBuilder('s')
//                                ->where('s.country = :country')
//                                ->setParameter('country', $country)
//                                ;
//                        }
//                ));
//            }
//        };
//
//        $builder->get('country')->addEventListener(
//            FormEvents::POST_SUBMIT,
//            function (FormEvent $event) use ($formModifier) {
//                $country = $event->getForm()->getData();
//                $formModifier($event->getForm()->getParent(), $country);
//            }
//        );
//
//        $builder->addEventListener(
//            FormEvents::PRE_SET_DATA,
//            function (FormEvent $event) use ($formModifier) {
//                $data = $event->getData();
//                $formModifier($event->getForm(), $data->getCountry());
//            }
//        );
        $builder
            ->add('search', 'text', array(
                'attr' => array(
                    'placeholder' => 'Search'
                ),
                'required' => false
            ))
            ->add('eventDatePeriod', 'choice', array(
                'choices'   => $this->getEventPeriods(),
                'empty_value' => 'Any',
                'required' => false,
            ))
            ->add('eventDateFrom', 'date', array(
                'widget'    => 'single_text',
                'format'    => 'MM/dd/yyyy',
                'attr'      => array(
                    'class' => 'input-append datepicker'
                ),
                'required' => false,
            ))
            ->add('eventDateTo', 'date', array(
                'widget'    => 'single_text',
                'format'    => 'MM/dd/yyyy',
                'attr'      => array(
                    'class' => 'input-append datepicker'
                ),
                'required' => false
            ))
            ->add('category', 'entity', array(
                'class' => 'ConnectionEventBundle:Category',
                'property' => 'name',
                'multiple' => true,
                'expanded' => true,
                'attr'     => array(
                    'class' => 'checkbox'
                ),
                'required' => false
            ));
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'csrf_protection' => false
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'event_search';
    }

    private function getEventPeriods()
    {
        return array(
            'now'        => 'Today',
            'this_week'  => 'This Week',
            'next_week'  => 'Next Week',
            'last_week'  => 'Last Week',
            'this_moth'  => 'This Month',
            'next_moth'  => 'Next Month',
            'last_month' => 'Last Month'
        );
    }
}
