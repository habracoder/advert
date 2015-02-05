<?php

namespace App\AdvertBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdvertType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text', [
                'label' => 'advert.title',
                'error_bubbling' => true
            ])
            ->add('content', 'textarea', [
                'label' => 'advert.content',
                'error_bubbling' => true
            ])
            ->add('price', 'number', [
                'label' => 'advert.price',
                'error_bubbling' => true
            ])
            ->add('category', null, [
                'label' => 'Category of advert',
                'error_bubbling' => true
            ])
            ->add('submit', 'submit', [
                'label' => 'Save'
            ])
            ->setMethod('POST')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\AdvertBundle\Entity\Advert',
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'advert_advert_edit';
    }
}
