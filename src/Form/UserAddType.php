<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Form\CallbackTransformer;

class UserAddType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, [
                'label' => "Prénom",
                'attr' => [
                    'placeholder' => "Prénom",
                    'class' => "form-control-user"
                ]
            ])
            ->add('lastName', TextType::class, [
                'label' => "Nom",
                'attr' => [
                    'placeholder' => "Nom",
                    'class' => "form-control-user"
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => "Email",
                'attr' => [
                    'placeholder' => "Adresse email",
                    'class' => "form-control-user"
                ]
            ])
            ->add('username', TextType::class, [
                'label' => "Nom d'utilisateur",
                'attr' => [
                    'placeholder' => "Nom d'utilisateur",
                    'class' => "form-control-user"
                ]
            ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe doivent être identiques.',
                'required' => true,
                'first_name' => "password",
                'first_options'  => [
                    'label' => "Mot de passe",
                    'attr' => [
                        'placeholder' => "Mot de passe",
                        'class' => "form-control-user"
                    ]
                ],
                'second_name' => "passwordRepeat",
                'second_options' => [
                    'label' => "Répéter le mot de passe",
                    'attr' => [
                        'placeholder' => "Répéter le mot de passe",
                        'class' => "form-control-user"
                    ]
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
                'label' => "Créer",
                'attr' => [
                    'class' => "btn btn-primary btn-user btn-block"
                ]
            ]);

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
        ]);
    }
}