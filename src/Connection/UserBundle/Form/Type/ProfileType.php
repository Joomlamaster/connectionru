<?php
/**
 * Created by PhpStorm.
 * User: vpinzaru
 * Date: 7/2/14
 * Time: 5:14 PM
 */

namespace Connection\UserBundle\Form\Type;

use Connection\UserBundle\Entity\Profile;
use Connection\UserBundle\Validator\Constraints\DateTime;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Doctrine\ORM\EntityRepository;
use Connection\CoreBundle\Entity\Country;
use Symfony\Component\Validator\Constraints as Assert;

class ProfileType extends AbstractType
{
    private $profileCountryIso = array();
    private $converter;

    public function __construct($profileCountryIso = array(), $converter)
    {
        $this->profileCountryIso = $profileCountryIso;
        $this->converter = $converter;
    }

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
            'empty_value' => 'Select'
        ));

        $builder->add('originallyFrom', 'entity', array(
            'class' => 'ConnectionCoreBundle:Country',
            'query_builder' => function(EntityRepository $er) use ($profileCountryIso) {
                    return $er
                        ->createQueryBuilder('c')
                        ->where('c.iso IN (:iso)')
                        ->setParameter('iso', $profileCountryIso)
                        ->orderBy('c.priority', 'DESC');

                },
            'property' => 'name',
            'empty_value' => 'Select',
            'required' => false,
        ))
        ->add('originallyFromCity', 'text', array(
            'required' => false
        ));

        $formModifier = function (FormInterface $form, Country $country = null) {
            if ( $country ) {
                $form->add('state', 'entity', array(
                    'class' => 'ConnectionCoreBundle:State',
                    'property' => 'name',
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
                if ($data) {
                    $formModifier($event->getForm(), $data->getCountry());
                }
            }
        );

        // add your custom field
        $builder
            ->add('city', 'text', array(
                'required' => false,
            ))
            ->add('zip', 'text', array(
                'required' => false,
            ))

            ->add('gender', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Gender',
                'property' => 'name',
                'expanded' =>  true,
                'label' => 'I am',
                'required' => true
            ))

            ->add('seek', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Gender',
                'property' => 'name',
                'expanded' =>  true,
                'label' => 'Seeking',
                'required' => true
            ))

            ->add('lookingFor', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\LookingFor',
                'property' => 'name',
                'expanded' =>  true,
                'multiple' => true,
                'required' => true,
	            'empty_value' => 'Anything'
            ));

            $builder->add('birthdate', 'date', array(
                'widget' => 'single_text',
                'html5'  => false,
                'format' => 'dd-MM-yyyy',
            ));

            $builder->add('languages', 'entity', array(
                'class' => 'ConnectionCoreBundle:Language',
                'query_builder' => function(EntityRepository $er) {
                    return $er
                        ->createQueryBuilder('l')
                        ->orderBy('l.priority', 'DESC');

                },
                'property' => 'name',
                'multiple' => true,
                'expanded' => true

            ))

            ->add('education', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Education',
                'property' => 'name',
                'empty_value' => 'Select'
            ))

            ->add('educationIvyLeague', 'checkbox', array(
                'label' => 'Ivy league educated?',
                'attr'  => array(
                    'style' => 'width: auto;',
                    'class' => 'ivy-league-checkbox'
                ),
                'required' => false
            ))

            ->add('ivyLeagueUniversity', 'text', array(
                'required' => false
            ))

            ->add('profession', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Profession',
                'property' => 'name',
                'required' => true,
                'empty_value' => 'Select'
            ))

            ->add('income', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Income',
                'property' => 'name',
                'empty_value' => 'Select',
                'required' => false
            ))

            ->add('religion', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Religion',
                'query_builder' => function(EntityRepository $er) {
	                return $er
		                ->createQueryBuilder('r')
		                ->orderBy('r.priority', 'DESC');
                },
                'property' => 'name',
                'label' => 'My religion',
                'empty_value' => 'Select'
            ))

            ->add('telephone', 'number')

            ->add('mobile', 'number')

            ->add('interestsAndHobbies', 'textarea')

            ->add('maritalStatus', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\MaritalStatus',
                'property' => 'name',
                'expanded' => true
            ))

            ->add('height', 'choice', array(
                'choices' => $this->height(),
                //'data' => 182,
                'empty_value' => 'Select'
            ))

            ->add('bodyType', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\BodyType',
                'property' => 'name',
                'empty_value' => 'Select'
            ))

            ->add('eyeColor', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\EyeColor',
                'property' => 'name',
                'empty_value' => 'Select'
            ))

            ->add('hairColor', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\HairColor',
                'property' => 'name',
                'empty_value' => 'Select'
            ))

            ->add('smoking', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Smoking',
                'property' => 'name',
                'label' => 'Smoking?',
                'empty_value' => 'Select'
            ))

            ->add('drinking', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Drinking',
                'property' => 'name',
                'label' => 'Drinking?',
                'empty_value' => 'Select'
            ))

            ->add('haveChildren', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\HaveChildren',
                'property' => 'name',
                'label' => 'Do you have children?',
                'required' => false,
                'empty_value' => 'Select'
            ))

            ->add('wantChildren', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\WantChildren',
                'property' => 'name',
                'label' => 'Do you want children?',
                'empty_value' => 'Select'
            ))

            ->add('livesWithChildren', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\LivesWithChildren',
                'property' => 'name',
                'label' => 'Do you live with your children?',
                'required' => false,
                'empty_value' => 'Select'
            ))

            ->add('openToPersonWithKids', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\OpenToPersonWithKids',
                'property' => 'name',
                'label' => 'Are you open to dating a person with kids?',
                'required' => false,
                'empty_value' => 'Select'
            ))

            ->add('ethnicity', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Ethnicity',
                'property' => 'name',
                'empty_value' => 'Select'
            ))
            ->add('zodiac', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Zodiac',
                'property' => 'name',
                'required' => true,
                'empty_value' => 'Select'
            ));

            $builder->add('aboutMe', 'textarea');
            $builder->add('lookingForDescription', 'textarea', array(
                'label' => "What I’m looking for"
            ));


    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Connection\UserBundle\Entity\Profile',
            //'validation_groups' => array('profile')
        ));
    }

    public function getName()
    {
        return 'connection_user_profile';
    }

    private function height()
    {
        $result = array();
        for ($i = 100; $i <= 220; $i++) {
            $result[$i] = $this->converter->footViewFormat($this->converter->cmToFoot($i));
        }
        $result = array_unique($result);
        $result[] = 'Prefer not to say';
        return $result;
    }
}