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
    //age range
    public static $ageFrom             = 18;
    public static $ageTo               = 99;
    public static $defaultSelectedFrom = 24;
    public static $defaultSelectedTo   = 40;

    //height range
    public static $heightFrom  = 1;
    public static $heightTo    = 99;

    //weight range
    public static $weightFrom  = 1;
    public static $weightTo    = 99;

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
                'required' => true,
                'label' => 'I am'
            ))

            ->add('seek', 'entity', array(
                'constraints' => new NotBlank(),
                'class' => 'ConnectionUserBundle:Profile\Gender',
                'property' => 'name',
                'expanded' =>  true,
                'required' => true,
                'label' => 'Seeking'

            ));

            $values = range(self::$ageFrom, self::$ageTo);
            $ageArray = array_combine($values, $values);

            $builder->add('ageFrom', 'choice', array(
                'constraints' => new NotBlank(),
                'choices'   => $ageArray,
                'data' => self::$defaultSelectedFrom,
                'required' => true
            ))

            ->add('ageTo', 'choice', array(
                'constraints' => new NotBlank(),
                'choices'   => $ageArray,
                'data' => self::$defaultSelectedTo,
                'required' => true
            ))

            ->add('lookingFor', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\LookingFor',
                'property' => 'name',
                'empty_value' =>'Anything',
                'required' => false
            ))

            ->add('languages', 'entity', array(
                'class' => 'ConnectionCoreBundle:Language',
                'property' => 'name',
                'multiple' => true,
                'required' => false
            ))

            ->add('education', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Education',
                'property' => 'name',
                'empty_value' =>'Any education',
                'required' => false,
            ))

            ->add('profession', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Profession',
                'property' => 'name',
                'empty_value' =>'Any profession',
                'required' => false
            ))

            ->add('income', 'number', array(
                'required' => false
            ))

            ->add('religion', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Religion',
                'property' => 'name',
                'label' => 'My religion',
                'empty_value' =>'Any religion',
                'required' => false
            ))

            ->add('maritalStatus', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\MaritalStatus',
                'property' => 'name',
                'expanded' => true
            ));

            $heightValues = range(self::$heightFrom, self::$heightTo);
            $heightArray = array_combine($heightValues, $heightValues);
            $builder->add('heightFrom', 'choice', array(
                'choices'   => $heightArray,
                'empty_value' =>'Select height from',
                'required' => false
            ))

            ->add('heightTo', 'choice', array(
                'choices'   => $heightArray,
                'empty_value' =>'Select height to',
                'required' => false
            ));

            $weightValues = range(self::$weightFrom, self::$weightTo);
            $weightArray = array_combine($weightValues, $weightValues);
            $builder->add('weightFrom', 'choice', array(
                'choices'   => $weightArray,
                'empty_value' =>'Select weight from',
                'required' => false
            ))

            ->add('weightTo', 'choice', array(
                'choices'   => $weightArray,
                'empty_value' =>'Select weight to',
                'required' => false
            ))

            ->add('eyeColor', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\EyeColor',
                'property' => 'name',
                'empty_value' =>'Any color',
                'required' => false
            ))

            ->add('hairColor', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\HairColor',
                'property' => 'name',
                'empty_value' =>'Any color',
                'required' => false
            ))

            ->add('smoking', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Smoking',
                'property' => 'name',
                'label' => 'Smoking?',
                'empty_value' =>'Not important',
                'required' => false
            ))

            ->add('drinking', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Drinking',
                'property' => 'name',
                'label' => 'Drinking?',
                'empty_value' =>'Not important',
                'required' => false
            ))

            ->add('haveChildren', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\HaveChildren',
                'property' => 'name',
                'label' => 'Do you have children?',
                'empty_value' =>'Not important',
                'required' => false
            ))

            ->add('wantChildren', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\WantChildren',
                'property' => 'name',
                'label' => 'Do you want children?',
                'empty_value' =>'Not important',
                'required' => false
            ))

            ->add('livesWithChildren', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\LivesWithChildren',
                'property' => 'name',
                'label' => 'Do you live with your children?',
                'empty_value' =>'Not important',
                'required' => false
            ))

            ->add('openToPersonWithKids', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\OpenToPersonWithKids',
                'property' => 'name',
                'label' => 'Are you open to dating a person with kids?',
                'empty_value' =>'No preference',
                'required' => false
            ))

            ->add('ethnicity', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Ethnicity',
                'property' => 'name',
                'empty_value' =>'Any ethnicity',
                'required' => false
            ));

//            ->add('zipCode', 'text', array(
//                'required' => true
//            ))
//
//            ->add('miles', 'choice', array(
//                'constraints' => new NotBlank(),
//                'label' => "Radius search",
//                'choices'   => array(
//                    "5"     => "5 miles",
//                    "8"     => "8 miles",
//                    "10"    => "10 miles",
//                    "15"    => "15 miles",
//                    "25"    => "25 miles",
//                    "35"    => "35 miles",
//                    "50"    => "50 miles",
//                    "75"    => "75 miles",
//                    "100"   => "100 miles",
//                    "150"   => "150 miles",
//                    "200"   => "200 miles",
//                ),
//                'required' => true
//            ))
            $builder->add('search', 'submit');
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