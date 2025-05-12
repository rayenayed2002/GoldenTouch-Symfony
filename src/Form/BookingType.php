<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Constraints\Positive;

class BookingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('personCount', NumberType::class, [
                'label' => 'Nombre de personnes',
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le nombre de personnes est requis'
                    ]),
                    new Type([
                        'type' => 'numeric',
                        'message' => 'Veuillez entrer un nombre valide'
                    ]),
                    new Positive([
                        'message' => 'Le nombre de personnes doit être supérieur à 0'
                    ])
                ],
                'attr' => [
                    'min' => 1
                ]
            ])
            ->add('eventDate', DateType::class, [
                'label' => 'Date de l\'événement',
                'widget' => 'single_text',
                'html5' => true,
                'format' => 'yyyy-MM-dd',
                'input' => 'datetime',
                'model_timezone' => 'UTC',
                'attr' => [
                    'class' => 'js-datepicker',
                    'autocomplete' => 'off',
                    'min' => (new \DateTime('tomorrow'))->format('Y-m-d')
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'La date de l\'événement est requise'
                    ]),
                    new GreaterThanOrEqual([
                        'value' => 'today',
                        'message' => 'La date doit être aujourd\'hui ou dans le futur'
                    ])
                ]
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Notes et détails',
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez ajouter un message ou des détails sur votre réservation'
                    ])
                ],
                'attr' => [
                    'rows' => 5,
                    'placeholder' => 'Décrivez vos besoins spécifiques...'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'booking_form',
            'attr' => [
                'novalidate' => 'novalidate',
                'class' => 'needs-validation'
            ]
        ]);
    }
}