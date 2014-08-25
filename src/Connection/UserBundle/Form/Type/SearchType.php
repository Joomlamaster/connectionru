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
            'query_builder' => function(EntityRepository $er) {
                    return $er
                        ->createQueryBuilder('c')
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
                'query_builder' => function(EntityRepository $er) {
                    return $er
                        ->createQueryBuilder('l')
                        ->orderBy('l.priority', 'DESC');

                },
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
                'label' => 'User religion',
                'empty_value' =>'Any religion',
                'required' => false
            ))

            ->add('maritalStatus', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\MaritalStatus',
                'property' => 'name',
                'expanded' => true
            ));

            $heightArray = $this->_getHeightArray();
            $builder->add('minimumHeight', 'choice', array(
                'choices'   => $heightArray,
                'empty_value' =>'Any height',
                'required' => false
            ))

            ->add('maximumHeight', 'choice', array(
                'choices'   => $heightArray,
                'empty_value' =>'Any height',
                'required' => false
            ));

            $weightValues = range(self::$weightFrom, self::$weightTo);
            $weightArray = $this->_getWeightArray();
            $builder->add('minimumWeight', 'choice', array(
                'choices'   => $weightArray,
                'empty_value' =>'Any weight',
                'required' => false
            ))

            ->add('maximumWeight', 'choice', array(
                'choices'   => $weightArray,
                'empty_value' =>'Any weight',
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
                'label' => 'User has children?',
                'empty_value' =>'Not important',
                'required' => false
            ))

            ->add('wantChildren', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\WantChildren',
                'property' => 'name',
                'label' => 'User wants children?',
                'empty_value' =>'Not important',
                'required' => false
            ))

            ->add('livesWithChildren', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\LivesWithChildren',
                'property' => 'name',
                'label' => 'User lives with children?',
                'empty_value' =>'Not important',
                'required' => false
            ))

            ->add('openToPersonWithKids', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\OpenToPersonWithKids',
                'property' => 'name',
                'label' => 'User is open to dating a person with kids?',
                'empty_value' =>'No preference',
                'required' => false
            ))

            ->add('ethnicity', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Ethnicity',
                'property' => 'name',
                'empty_value' =>'Any ethnicity',
                'required' => false
            ))
            ->add('zodiacSign', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Zodiac',
                'property' => 'name',
                'empty_value' =>'Any sign',
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
            $builder->add('captcha', 'captcha');
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

    /**
     * Get height values inch/cm.
     *
     * @return array
     */
    private function _getHeightArray(){
        return array(
            "0" => "< 5' (< 152 cm)",
            "152" => "5' 0\" (152 cm)",
            "155" => "5' 1\" (155 cm)",
            "157" => "5' 2\" (157 cm)",
            "160" => "5' 3\" (160 cm)",
            "163" => "5' 4\" (163 cm)",
            "165" => "5' 5\" (165 cm)",
            "168" => "5' 6\" (168 cm)",
            "170" => "5' 7\" (170 cm)",
            "173" => "5' 8\" (173 cm)",
            "175" => "5' 9\" (175 cm)",
            "178" => "5' 10\" (178 cm)",
            "180" => "5' 11\" (180 cm)",
            "183" => "6' 0\" (183 cm)",
            "185" => "6' 1\" (185 cm)",
            "188" => "6' 2\" (188 cm)",
            "191" => "6' 3\" (191 cm)",
            "193" => "6' 4\" (193 cm)",
            "196" => "6' 5\" (196 cm)",
            "198" => "6' 6\" (198 cm)",
            "201" => "6' 7\" (201 cm)",
            "203" => "6' 8\" (203 cm)",
            "206" => "6' 9\" (206 cm)",
            "208" => "6' 10\" (208 cm)",
            "211" => "6' 11\" (211 cm)",
            "213" => "7' 0\" (213 cm)",
            "999" => "> 7' (> 213 cm)"
        );
    }

    /**
     * Get weight values kg/pounds.
     *
     * @return array
     */
    private function _getWeightArray(){
        return array(
            "0" => "< 48 kg (< 105.6 pounds)",
            "48" => "48 kg (105.6 pounds)",
            "53" => "53 kg (105.6 pounds)",
            "56" => "56 kg (123.3 pounds)",
            "58" => "58 kg (116.6 pounds)",
            "62" => "62 kg (123.2 pounds)",
            "63" => "63 kg (127.6 pounds)",
            "69" => "69 kg (138.6 pounds)",
            "75" => "75 kg (151.8 pounds)",
            "77" => "77 kg (151.8 pounds)",
            "85" => "85 kg (169.4 pounds)",
            "94" => "94 kg (187 pounds)",
            "105" => "105 kg (206.8 pounds)",
            "999" => ">105 kg (> 206.8 pounds)"
        );
    }
}