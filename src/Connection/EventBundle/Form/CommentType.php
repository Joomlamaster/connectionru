<?php

namespace Connection\EventBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('author', 'entity', array(
                'class' => 'ConnectionUserBundle:User',
                'property' => 'username',
            ))
            ->add('event', 'entity', array(
                'class' => 'ConnectionEventBundle:Event',
                'property' => 'id',
            ))
            ->add('comment', 'textarea', array(
                'constraints' => new NotBlank(),
                'required' => true
            ))
            ->add('submit', 'submit', array(
                'attr' => array('class' => 'add-comment-button'),
                'label' => 'Write comment'
            ));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Connection\EventBundle\Entity\EventComment'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'connection_eventbundle_category';
    }
}
