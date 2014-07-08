<?php
/**
 * Created by PhpStorm.
 * User: vpinzaru
 * Date: 7/3/14
 * Time: 4:36 PM
 */

namespace Connection\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;
use Connection\CoreBundle\Util\Location;

class RegistrationAddressType extends AbstractType
{
    private $container;
    private $em;

    public $country_only;
    public function __construct (Container $container)
    {
        $this->container = $container;
        $this->em = $container->get('doctrine')->getManager();
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->setAttribute('country_only', isset($options['country_only']) ? $options['country_only'] : false);
        // Add listeners
        $builder->addEventListener(FormEvents::PRE_SET_DATA, array($this, 'onPreSetData'));
        $builder->addEventListener(FormEvents::PRE_SUBMIT, array($this, 'onPreSubmit'));
    }

    protected function addElements(FormInterface $form) {
        $form->add('country', 'entity', array(
                'class' => 'Connection\CoreBundle\Entity\Country',
                'property' => 'name',
                'query_builder' => function(EntityRepository $er){
                        return $er->createQueryBuilder('c')
                            ->where('c.type = :type')->setParameter('type', Location::$typeCountry)
                            ->orderBy('c.name', 'ASC');
                    }
            ));
        $country_only = $form->getConfig()->getAttribute('country_only');
        if($country_only){
            return;
        }
        $country = $form->get('country')->getData();
        if(!isset($country)){
            $form->add('region', 'choice');
        }

        $region = $form->get('region')->getData();
        if(!isset($country)){
            $form->add('city', 'choice');
        }
        $form->add('zipCode', 'text');
    }

    function onPreSubmit(FormEvent $event) {
        $form = $event->getForm();
        $data = $event->getData();
    }


    function onPreSetData(FormEvent $event) {
        $form = $event->getForm();
        $this->addElements($form);
    }


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setOptional(array('country_only'));
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'connection_registration_address';
    }

    public function getParent()
    {
        return 'form';
    }
}