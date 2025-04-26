<?php

namespace App\Form;

use App\Entity\Personnel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class PersonnelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomP', null, [
                'constraints' => [
                    new NotBlank(['message' => 'Le nom est obligatoire']),
                    new Length([
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => 'Le nom doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Le nom ne peut pas dépasser {{ limit }} caractères'
                    ]),
                ],
                'attr' => [
                    'placeholder' => 'Entrez le nom complet'
                ]
            ])
            ->add('prenomP', null, [
                'constraints' => [
                    new NotBlank(['message' => 'Le prénom est obligatoire']),
                    new Length([
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => 'Le prénom doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Le prénom ne peut pas dépasser {{ limit }} caractères'
                    ]),
                ],
                'attr' => [
                    'placeholder' => 'Entrez le prénom'
                ]
            ])
            ->add('serviceP', ChoiceType::class, [
                'choices' => [
                    'Sécurité' => 'Sécurité',
                    'Décorateur' => 'Décorateur',
                    'Serveur' => 'Serveur',
                    'Organisateur' => 'Organisateur',
                    'Fleuriste' => 'Fleuriste',
                    'Vidéaste' => 'Vidéaste',
                    'Chef' => 'Chef',
                    'Animateur' => 'Animateur',
                ],
                'label' => 'Service',
                'placeholder' => 'Sélectionnez un service',
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez sélectionner un service']),
                ],
                'attr' => ['class' => 'form-select']
            ])
            ->add('statutP', ChoiceType::class, [
                'choices' => [
                    'Disponible' => 'disponible',
                    'Non disponible' => 'non_disponible',
                ],
                'expanded' => true,
                'multiple' => false,
                'label' => 'Statut',
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez sélectionner un statut']),
                ],
            ])
            ->add('imageFile', FileType::class, [
                'label' => 'Photo du personnel',
                'required' => false,
                'mapped' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/gif',
                        ],
                        'mimeTypesMessage' => 'Veuillez uploader une image valide (JPEG, PNG ou GIF)',
                    ])
                ],
            ])
            ->add('descriptionP', null, [
                'constraints' => [
                    new NotBlank(['message' => 'La description est obligatoire']),
                    new Length([
                        'min' => 10,
                        'max' => 500,
                        'minMessage' => 'La description doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'La description ne peut pas dépasser {{ limit }} caractères'
                    ]),
                ],
                'attr' => [
                    'rows' => 4,
                    'placeholder' => 'Décrivez le personnel...'
                ]
            ])
            ->add('tarifP', null, [
                'constraints' => [
                    new NotBlank(['message' => 'Le tarif est obligatoire']),
                ],
                'attr' => [
                    'placeholder' => '0.00'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Personnel::class,
            'validation_groups' => ['Default'],
        ]);
    }
}