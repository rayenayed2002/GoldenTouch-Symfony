<?php

namespace App\Form;

use App\Entity\DemandePack;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class DemandePackType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('personCount', IntegerType::class, [
                'required' => true,
                'mapped' => false,
                'label' => 'Nombre de personnes'
            ])
            ->add('notes', TextareaType::class, [
                'required' => false,
                'mapped' => false,
                'label' => 'Notes spéciales'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DemandePack::class,
        ]);
    }
}