<?php

namespace Connection\WebBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints;

class ContactType extends AbstractType
{
    public function buildForm( FormBuilderInterface $builder, array $options )
    {
        $builder
            ->add('name', 'text')
            ->add('email', 'text')
            ->add('subject','text')
            ->add('message','textarea')
            ->add('submit', 'submit');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Connection\WebBundle\Entity\ContactUs'
        ));
    }

    public function getName()
    {
        return 'connection_contact_us';
    }
}
?>