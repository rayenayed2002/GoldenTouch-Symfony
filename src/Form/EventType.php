<?php

namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Enum\CategoryEnum;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\EnumType;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class, [
            'label' => 'Nom de l\'événement',
            'required' => false,
            'constraints' => [
                new Assert\NotBlank([
                    'message' => 'Le nom est obligatoire'
                ]),
                new Assert\Length([
                    'min' => 2,
                    'minMessage' => 'Le nom doit contenir au moins {{ limit }} caractères',
                    'max' => 255,
                    'maxMessage' => 'Le nom ne peut pas dépasser {{ limit }} caractères'
                ]),
                // Removed Regex constraint to allow all characters
            ],
            'attr' => [
                'class' => 'form-control form-control-lg',
                'placeholder' => 'Saisissez le nom de l\'événement',
                'formnovalidate' => 'formnovalidate'
            ]
        ])
            
            ->add('categorie', EnumType::class, [
                'class' => CategoryEnum::class,
                'label' => 'Catégorie de l\'événement',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'La catégorie est obligatoire'
                    ])
                ],
                'attr' => [
                    'class' => 'form-select form-select-lg'
                ],
                'placeholder' => 'Sélectionnez une catégorie',
            ])
            
            ->add('photo', FileType::class, [
                'label' => 'Photo de l\'événement',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'La photo est obligatoire'
                    ]),
                    new Assert\File([
                        'maxSize' => '5M',
                        'maxSizeMessage' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). La taille maximale autorisée est {{ limit }} {{ suffix }}',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/gif',
                            'image/webp',
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG, PNG, GIF, WebP)',
                        'uploadIniSizeErrorMessage' => 'Le fichier est trop volumineux',
                        'uploadFormSizeErrorMessage' => 'Le fichier est trop volumineux',
                        'uploadErrorMessage' => 'Erreur lors du téléchargement du fichier'
                    ])
                ],
                'attr' => [
                    'class' => 'form-control',
                    'accept' => 'image/*'
                ]
            ])
            
            ->add('date', DateType::class, [
                'label' => 'Date de l\'événement',
                'widget' => 'single_text',
                'html5' => false,
                'format' => 'dd/MM/yyyy',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'La date est obligatoire'
                    ]),
                    new Assert\GreaterThanOrEqual([
                        'value' => 'today',
                        'message' => 'La date doit être ultérieure à aujourd\'hui'
                    ]),
                    new Assert\LessThanOrEqual([
                        'value' => '+2 years',
                        'message' => 'La date ne peut pas être plus de 2 ans dans le futur'
                    ])
                ],
                'attr' => [
                    'class' => 'date-picker',
                    'placeholder' => 'Cliquez pour choisir une date',
                    'autocomplete' => 'off',
                    'data-input' => true
                ]
            ])
            
            ->add('save', SubmitType::class, [
                'label' => 'Créer l\'événement',
                'attr' => [
                    'class' => 'btn btn-primary mt-4 btn-gold'
                ]
            ])
            
            ->add('type', HiddenType::class, [
                'data' => 'EVENT',
                'mapped' => true
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id'   => 'event_item',
        ]);
    }
}