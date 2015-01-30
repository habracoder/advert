<?php

namespace App\UserBundle\Form;

use App\UserBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName', 'text', [
            'label' => 'property.firstName',
            'constraints' => [
                new NotBlank()
            ]
        ]);

        $builder->add('lastName', 'text', [
            'label' => 'property.lastName'
        ]);

        $builder->add('gender', 'text', [
            'label' => 'profile.gender'
        ]);

        $builder->add(
            'email',
            'email',
            array(
                'label' => 'property.email'
            )
        );

        $builder->add(
            'gender',
            'choice',
            array(

                'label' => 'Пол',
                'choices' => array(
                    User::GENDER_MALE => 'Мужской',
                    User::GENDER_FEMALE => 'Женский'
                )
            )
        );

        $builder->remove('username');

        $builder->add(
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

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'app_user_registration';
    }
}