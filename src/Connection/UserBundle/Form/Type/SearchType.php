<?php
/**
 * Created by PhpStorm.
 * User: vpinzaru
 * Date: 7/2/14
 * Time: 5:14 PM
 */

namespace Connection\UserBundle\Form\Type;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Connection\CoreBundle\Entity\Country;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('country', 'entity', array(
            'class' => 'ConnectionCoreBundle:Country',
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

//        $builder->addEventListener(
//            FormEvents::PRE_SET_DATA,
//            function (FormEvent $event) use ($formModifier) {
//                $data = $event->getData();
//                if ($data) {
//                    $formModifier($event->getForm(), $data->getCountry());
//                }
//            }
//        );

        // add your custom field
        $builder
            ->add('gender', 'entity', array(
                'constraints' => new NotBlank(),
                'class' => 'ConnectionUserBundle:Profile\Gender',
                'property' => 'name',
                'expanded' =>  true,
                'empty_value' => false,
                'required' => true
            ))

            ->add('seek', 'entity', array(
                'constraints' => new NotBlank(),
                'class' => 'ConnectionUserBundle:Profile\Gender',
                'property' => 'name',
                'expanded' =>  true,
                'required' => true
            ))

            ->add('age', 'choice', array(
                'constraints' => new NotBlank(),
                'choices'   => array(
                    '18_25'   => '18 - 25',
                    '25_30' => '25 - 30',
                    '30_40'   => '30 - 40',
                ),
                'required' => true
            ))

                ->add('lookingFor', 'entity', array(
                'constraints' => new NotBlank(),
                'class' => 'ConnectionUserBundle:Profile\LookingFor',
                'property' => 'name',
                'required' => true
            ))

            ->add('zipCode', 'text', array(
                'required' => true
            ))

            ->add('miles', 'choice', array(
                'constraints' => new NotBlank(),
                'label' => "Radius search",
                'choices'   => array(
                    "5"     => "5 miles",
                    "8"     => "8 miles",
                    "10"    => "10 miles",
                    "15"    => "15 miles",
                    "25"    => "25 miles",
                    "35"    => "35 miles",
                    "50"    => "50 miles",
                    "75"    => "75 miles",
                    "100"   => "100 miles",
                    "150"   => "150 miles",
                    "200"   => "200 miles",
                ),
                'required' => true
            ))
            ->add('submit', 'submit');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'csrf_protection'   => false
        ));
    }

    public function getName()
    {
        return 'search';
    }
}