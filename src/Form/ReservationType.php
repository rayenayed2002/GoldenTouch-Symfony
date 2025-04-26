<?php

namespace App\Form;

use App\Entity\ReservationLieu;
use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom du lieu',
                'attr' => ['readonly' => true]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Notes spéciales',
                'required' => false
            ])
            ->add('prix', MoneyType::class, [
                'label' => 'Prix',
                'currency' => 'EUR',
                'attr' => ['readonly' => true]
            ])
            ->add('capacite', NumberType::class, [
                'label' => 'Nombre de personnes',
                'attr' => [
                    'min' => 1,
                    'max' => 1000
                ]
            ])
            ->add('date_reservation', DateType::class, [
                'label' => 'Date de réservation',
                'widget' => 'single_text',
                'html5' => true,
                'attr' => ['min' => (new \DateTime())->format('Y-m-d')]
            ])
            ->add('event', EntityType::class, [
                'class' => Event::class,
                'choice_label' => 'nom',
                'label' => 'Événement associé',
                'required' => true,
                'choices' => $options['events'],
                'placeholder' => 'Choisir un événement',
                'mapped' => false
            ])
            ->add('event_type', ChoiceType::class, [
                'label' => 'Type d\'événement',
                'choices' => [
                    'Mariage' => 'MARIAGE',
                    'Anniversaire' => 'ANNIVERSAIRE',
                    'Conférence' => 'CONFERENCE',
                    'Concert' => 'CONCERT',
                    'Autre' => 'AUTRE'
                ],
                'mapped' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ReservationLieu::class,
            'events' => []
        ]);
    }
}