<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class ChangePasswordFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'options' => [
                    'attr' => [
                        'autocomplete' => 'new-password',
                        'class' => 'form-control password-field',
                        'data-toggle' => 'password',
                    ],
                    'toggle' => true,
                ],
                'first_options' => [
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Please enter a password',
                        ]),
                        new Length([
                            'min' => 8,
                            'minMessage' => 'Your password should be at least {{ limit }} characters',
                            'max' => 4096,
                        ]),
                        new Regex([
                            'pattern' => '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
                            'message' => 'Password must contain at least one uppercase letter, one lowercase letter, one number and one special character'
                        ])
                    ],
                    'label' => 'New password',
                    'help' => 'Minimum 8 characters with at least one uppercase, one lowercase, one number and one special character',
                    'attr' => [
                        'placeholder' => 'Enter your new password',
                    ],
                    'row_attr' => [
                        'class' => 'mb-3 password-field-container',
                    ],
                ],
                'second_options' => [
                    'label' => 'Confirm new password',
                    'attr' => [
                        'placeholder' => 'Repeat your new password',
                    ],
                    'row_attr' => [
                        'class' => 'mb-3',
                    ],
                ],
                'invalid_message' => 'The password fields must match.',
                'mapped' => false,
                'row_attr' => [
                    'class' => 'mb-4',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'attr' => [
                'novalidate' => 'novalidate',
                'class' => 'needs-validation',
            ],
        ]);
    }
}