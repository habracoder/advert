<?php

namespace App\UserBundle\Form;

use App\UserBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'firstName',
                null,
                array(
                    'label' => 'property.firstName'
                )
            )
            ->add(
                'lastName',
                null,
                array(
                    'label' => 'property.lastName'
                )
            )
            ->add(
                'gender',
                'choice',
                array(

                    'label' => 'Пол',
                    'choices' => array(
                        User::GENDER_MALE => 'Мужской',
                        User::GENDER_FEMALE => 'Женский'
                    )
                )
            )
            ->add(
                'email',
                null,
                array(
                    'label' => 'property.email'
                )
            )
            ->add(
                'plainPassword',
                'repeated',
                array(
                    'type' => 'password',
                    'first_options' => array('label' => 'property.new_password'),
                    'second_options' => array('label' => 'property.confirm_password'),
                    'invalid_message' => 'form.validate.match_password',
                    'required' => false,
                )
            );
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'App\UserBundle\Entity\User',
                'cascade_validation' => true,
                'translation_domain' => 'UserBundle'
            )
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'user_user';
    }
}
