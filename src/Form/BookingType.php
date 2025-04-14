<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Constraints\Date;

class BookingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $tomorrow = new \DateTime('tomorrow');
        
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
                    new GreaterThan([
                        'value' => 0,
                        'message' => 'Le nombre de personnes doit être supérieur à 0'
                    ])
                ]
            ])
            ->add('eventDate', DateType::class, [
                'label' => 'Date de l\'événement',
                'widget' => 'single_text',
                'html5' => false,
                'format' => 'dd/MM/yyyy',
                'attr' => [
                    'class' => 'js-datepicker',
                    'autocomplete' => 'off'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'La date de l\'événement est requise'
                    ]),
                    new GreaterThan([
                        'value' => new \DateTime('today'),
                        'message' => 'La date doit être à partir de demain'
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
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
            'csrf_protection' => true,
            'attr' => ['novalidate' => 'novalidate']
        ]);
    }
}