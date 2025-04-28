<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Gregwar\CaptchaBundle\Type\CaptchaType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\Image;

class UserEditProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, [
                'label' => "Prénom *",
                'required' => false, 
                'attr' => [
                    'placeholder' => "Entrez votre prénom",
                    'class' => "form-control form-control-user",
                    'autofocus' => true
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un prénom',
                    ]),
                ],
            ])
            ->add('lastName', TextType::class, [
                'label' => "Nom *",
                'attr' => [
                    'placeholder' => "Entrez votre nom",
                    'class' => "form-control form-control-user"
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un nom',
                    ]),
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => "Adresse email *",
                'attr' => [
                    'placeholder' => "exemple@domaine.com",
                    'class' => "form-control form-control-user"
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer une adresse email',
                    ]),
                ],
            ])
            ->add('username', TextType::class, [
                'label' => "Nom d'utilisateur *",
                'attr' => [
                    'placeholder' => "Choisissez un nom d'utilisateur unique",
                    'class' => "form-control form-control-user"
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un nom d\'utilisateur',
                    ]),
                ],
            ])
            
            ->add('photoFile', FileType::class, [
                'label' => 'Profile Photo',
                'required' => false,
                'mapped' => false, // Important: this field is not mapped directly
                'constraints' => [
                    new Image([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/gif'],
                        'mimeTypesMessage' => 'Please upload a valid image (JPEG, PNG, GIF)',
                    ])
                ],
            ])
            ->add('save', SubmitType::class, [
                'label' => "Enregistrer les modifications",
                'attr' => [
                    'class' => "btn btn-primary btn-user btn-block mt-4",
                    'data-loading-text' => "Enregistrement en cours..."
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'attr' => [
                'class' => 'user-edit-form',
                'novalidate' => 'novalidate'
            ]
        ]);
    }
}
