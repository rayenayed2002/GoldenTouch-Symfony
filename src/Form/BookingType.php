<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\NotBlank;

class BookingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('personCount', NumberType::class, [
                'label' => 'Nombre de personnes',
                'attr' => [
                    'min' => 1,
                    'max' => 100
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le nombre de personnes est requis']),
                    new GreaterThan(['value' => 0, 'message' => 'Le nombre de personnes doit être supérieur à 0'])
                ]
            ])
            ->add('eventDate', DateType::class, [
                'label' => 'Date de l\'événement',
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'html5' => false,
                'attr' => [
                    'class' => 'flatpickr-input',
                    'placeholder' => 'JJ/MM/AAAA'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'La date de l\'événement est requise'])
                ]
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message',
                'required' => true,
                'attr' => [
                    'rows' => 3,
                    'placeholder' => 'Ajoutez votre message et détails supplémentaires'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le message est requis'])
                ]
            ])
            ->add('admin_id', HiddenType::class, [
                'mapped' => false,
                'data' => 1
            ])
            ->add('utilisateur_id', HiddenType::class, [
                'mapped' => false,
                'data' => 25
            ])
        ;
    }
}
