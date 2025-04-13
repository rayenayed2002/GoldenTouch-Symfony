<?php

namespace App\Form;

use App\Entity\Pack;
use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PackType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('event', EntityType::class, [
                'class' => Event::class,
                'choice_label' => 'nom',
                'label' => 'Événement',
                'required' => true,
                'constraints' => [
                    new Assert\NotNull(['message' => 'L\'événement ne peut pas être vide']),
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La description ne peut pas être vide']),
                ],
            ])
            ->add('prix', NumberType::class, [
                'label' => 'Prix',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le prix ne peut pas être vide']),
                    new Assert\Positive(['message' => 'Le prix doit être un nombre positif']),
                ],
            ])
            ->add('capacite', NumberType::class, [
                'label' => 'Capacité',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La capacité ne peut pas être vide']),
                    new Assert\Positive(['message' => 'La capacité doit être un nombre positif']),
                ],
            ])
            ->add('duree', NumberType::class, [
                'label' => 'Durée',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La durée ne peut pas être vide']),
                    new Assert\Positive(['message' => 'La durée doit être un nombre positif']),
                ],
            ])
            ->add('endDate', DateType::class, [
                'label' => 'Date de Fin',
                'required' => false,
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'constraints' => [
                    new Assert\Date([
                        'message' => 'La date de fin n\'est pas valide'
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pack::class,
        ]);
    }
}
