<?php

// src/Form/EventType.php
namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Enum\CategorieEvent;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\EnumType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class, [
            'label' => 'Nom de l\'événement',
            'constraints' => [
                new NotBlank(['message' => 'Le nom est obligatoire']),
                new Length([
                    'min' => 2,
                    'minMessage' => 'Le nom doit contenir au moins {{ limit }} caractères',
                ]),
            ],
            'attr' => [
                'class' => 'form-control form-control-lg',
                'placeholder' => 'Saisissez le nom de l\'événement',
                'minlength' => 2
            ]
        ])
            
            // Menu déroulant des catégories
            ->add('categorie', EnumType::class, [
                'class' => CategorieEvent::class,
                'label' => 'Catégorie de l\'événement',
                'constraints' => [
                    new NotBlank(['message' => 'La catégorie est obligatoire']),
                ],
                'attr' => [
                    'class' => 'form-select form-select-lg'
                ],
                'placeholder' => 'Sélectionnez une catégorie',
            ])
            
            // Section de téléchargement de fichier
            ->add('photo', FileType::class, [
                'label' => 'Photo de l\'événement',
                'required' => true, // Changé à true
                'constraints' => [
                    new NotBlank(['message' => 'La photo est obligatoire']),
                    new File([
            'maxSize' => '5M', // Limit file size (e.g., 5MB)
            'mimeTypes' => [ // Only allow image MIME types
                'image/jpeg',
                'image/png',
                'image/gif',
                'image/webp',
            ],
            'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG, PNG, GIF, WebP)',
        ])
    ],
    'attr' => [
        'class' => 'form-control',
        'accept' => 'image/*' // HTML attribute to filter file selection
    ]
            ])
            
            // Entrée de date
            ->add('date', DateType::class, [
                'label' => 'Date de l\'événement',
                'widget' => 'single_text',
                'html5' => false,
                'format' => 'dd/MM/yyyy',
                'attr' => [
                    'class' => 'date-picker', // Keep this class
                    'placeholder' => 'Cliquez pour choisir une date',
                    'autocomplete' => 'off',
                    'data-input' => true // Add this for Flatpickr
                ],
                'constraints' => [
                    new NotBlank(['message' => 'La date est obligatoire']),
                    new GreaterThanOrEqual([
                        'value' => 'today',
                        'message' => 'La date doit être ultérieure à aujourd\'hui'
                    ])
                ]
            ])
            
            // Bouton de soumission
            ->add('save', SubmitType::class, [
                'label' => 'Créer l\'événement',
                'attr' => [
                    'class' => 'btn btn-primary mt-4  btn-gold'
                ]
            ])
            
    ->add('type', HiddenType::class, [
        'data' => 'EVENT', // Always set to "EVENT"
        'mapped' => true // Ensures it's saved to the entity
    ]);
    }
}