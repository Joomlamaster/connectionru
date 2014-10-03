<?php
/**
 * Created by PhpStorm.
 * User: vpinzaru
 * Date: 7/2/14
 * Time: 5:14 PM
 */

namespace Connection\UserBundle\Form\Type;

use Connection\UserBundle\Entity\Profile;
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
    private $ivyLeagueAfirmativeId;

    public function __construct($profileCountryIso = array(), $converter, $ivyLeagueAfirmativeId)
    {
        $this->profileCountryIso = $profileCountryIso;
        $this->converter = $converter;
        $this->ivyLeagueAfirmativeId = $ivyLeagueAfirmativeId;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $profileCountryIso = $this->profileCountryIso;
        $ivyLeagueAfirmative = $this->ivyLeagueAfirmativeId;

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
            'empty_value' => 'Select country'
        ))
        ->add('originallyFromCity', 'text', array(
            'required' => false
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
                if ($data) {
                    $formModifier($event->getForm(), $data->getCountry());
                }
            }
        );

        // add your custom field
        $builder
            ->add('city', 'text')
            ->add('zip', 'text')

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
                'empty_value' =>'Anything',
                'required' => false
            ))

            ->add('birthdate', 'date', array(
                'years' => range(date('Y'), date('Y') - 100),
                'input'  => 'datetime',
                'widget' => 'choice',
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
            ))

            ->add('income', 'number')

            ->add('religion', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Religion',
                'property' => 'name',
                'label' => 'My religion'
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
                'choices' => $this->height()
            ))

            ->add('bodyType', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\BodyType',
                'property' => 'name',
            ))

            ->add('eyeColor', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\EyeColor',
                'property' => 'name',
            ))

            ->add('hairColor', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\HairColor',
                'property' => 'name',
            ))

            ->add('smoking', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Smoking',
                'property' => 'name',
                'label' => 'Smoking?',
            ))

            ->add('drinking', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Drinking',
                'property' => 'name',
                'label' => 'Drinking?'
            ))

            ->add('haveChildren', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\HaveChildren',
                'property' => 'name',
                'label' => 'Do you have children?'
            ))

            ->add('wantChildren', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\WantChildren',
                'property' => 'name',
                'label' => 'Do you want children?'
            ))

            ->add('livesWithChildren', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\LivesWithChildren',
                'property' => 'name',
                'label' => 'Do you live with your children?',
                'empty_value' =>'Prefer not to say',
                'required' => false,
            ))

            ->add('openToPersonWithKids', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\OpenToPersonWithKids',
                'property' => 'name',
                'label' => 'Are you open to dating a person with kids?'
            ))

            ->add('ethnicity', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Ethnicity',
                'property' => 'name',
            ))
            ->add('zodiac', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Zodiac',
                'property' => 'name'
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
            'validation_groups' => array('profile')
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

        return array_unique($result);
    }
}