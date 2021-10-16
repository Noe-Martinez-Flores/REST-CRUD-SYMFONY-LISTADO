<?php

namespace App\Form;

use App\Entity\Offices;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class OfficesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('city', TextType::class, [
                'label' => 'Ciudad',
                'attr' => [
                    'placeholder' => 'Nombre de la Ciudad',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('phone', NumberType::class, [
                'label' => 'Telefono',
                'attr' => [
                    'placeholder' => 'Telefono',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('addressline1')
            ->add('addressline2')
            ->add('state')
            ->add('country')
            ->add('postalcode')
            ->add('territory')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Offices::class,
        ]);
    }
}
