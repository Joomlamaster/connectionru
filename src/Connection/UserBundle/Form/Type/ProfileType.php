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

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('country', 'entity', array(
            'class' => 'ConnectionCoreBundle:Country',
            'property' => 'name',
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

        // add your custom field
        $builder
            ->add('gender', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Gender',
                'property' => 'name',
            ))

            ->add('seek', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Gender',
                'property' => 'name',
            ))

            ->add('birthdate', 'date', array(
                'years' => range(date('Y'), date('Y') - 100),
                'input'  => 'datetime',
                'widget' => 'choice',
            ))

            ->add('languages', 'entity', array(
                'class' => 'ConnectionCoreBundle:Language',
                'property' => 'name',
                'multiple' => true
            ))

            ->add('education', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Education',
                'property' => 'name',
            ))

            ->add('profession', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Profession',
                'property' => 'name',
            ))

            ->add('income', 'number')

            ->add('religion', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Religion',
                'property' => 'name',
            ))

            ->add('telephone', 'number')

            ->add('mobile', 'number')

            ->add('interestsAndHobbies', 'textarea')

            ->add('maritalStatus', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\MaritalStatus',
                'property' => 'name',
            ))

            ->add('height', 'number')

            ->add('weight', 'number')

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
            ))

            ->add('drinking', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Drinking',
                'property' => 'name',
            ))

            ->add('haveChildren', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\HaveChildren',
                'property' => 'name',
            ))

            ->add('wantChildren', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\WantChildren',
                'property' => 'name',
            ))

            ->add('livesWithChildren', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\LivesWithChildren',
                'property' => 'name',
            ))

            ->add('openToPersonWithKids', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\OpenToPersonWithKids',
                'property' => 'name',
            ))

            ->add('ethnicity', 'entity', array(
                'class' => 'ConnectionUserBundle:Profile\Ethnicity',
                'property' => 'name',
            ))

            ->add('aboutMe', 'textarea')

            ->add('amazonId', 'text')

            ->add('facebookId', 'text')

            ->add('googleId', 'text')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Connection\UserBundle\Entity\Profile'
        ));
    }

    public function getName()
    {
        return 'connection_user_profile';
    }
}