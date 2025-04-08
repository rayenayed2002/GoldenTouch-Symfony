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

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Section de taille des entrées
            ->add('nom', TextType::class, [
                'label' => 'Nom de l\'événement',
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'placeholder' => 'Saisissez le nom de l\'événement'
                ]
            ])
            
            // Menu déroulant des catégories
            ->add('categorie', EnumType::class, [
                'class' => CategorieEvent::class,
                'label' => 'Catégorie de l\'événement',
                'attr' => [
                    'class' => 'form-select form-select-lg'
                ],
                'placeholder' => 'Sélectionnez une catégorie',
            ])
            
            // Section de téléchargement de fichier
            ->add('photo', FileType::class, [
                'label' => 'Photo de l\'événement',
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'mapped' => false ,
                 'constraints' => [
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
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            
            // Bouton de soumission
            ->add('save', SubmitType::class, [
                'label' => 'Créer l\'événement',
                'attr' => [
                    'class' => 'btn btn-primary mt-4'
                ]
            ])
            
    ->add('type', HiddenType::class, [
        'data' => 'EVENT', // Always set to "EVENT"
        'mapped' => true // Ensures it's saved to the entity
    ]);
    }
}