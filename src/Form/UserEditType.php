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
use Symfony\Component\Form\CallbackTransformer;

class UserEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, [
                'label' => "Prénom *",
                'required' => true,
                'empty_data' => '',
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
                'required' => true,
                'empty_data' => '',
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
                'required' => true,
                'empty_data' => '',
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
                'required' => true,
                'empty_data' => '',
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
            ->add('roles', ChoiceType::class, [
                'label' => 'Rôles *',
                'required' => true,
                'multiple' => false,
                'expanded' => true,
                'choices' => [
                    'Utilisateur standard' => 'ROLE_USER',
                    'Administrateur' => 'ROLE_ADMIN',
                    'Client' => 'ROLE_CLIENT',
                ],
                'attr' => [
                    'class' => 'role-checkboxes'
                ],
                'label_attr' => [
                    'class' => 'checkbox-inline'
                ]
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
            
        // Add data transformer for roles
        $builder->get('roles')
            ->addModelTransformer(new CallbackTransformer(
                // Transform from array to string (for the form display)
                function ($rolesArray) {
                    // Take the first role if it exists
                    if (is_array($rolesArray) && count($rolesArray) > 0) {
                        // Remove ROLE_USER as it's automatically added
                        if (($key = array_search('ROLE_USER', $rolesArray)) !== false && count($rolesArray) > 1) {
                            unset($rolesArray[$key]);
                        }
                        return current($rolesArray);
                    }
                    return 'ROLE_USER'; // Default role
                },
                // Transform from string back to array (when saving)
                function ($roleString) {
                    return [$roleString];
                }
            ));
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
