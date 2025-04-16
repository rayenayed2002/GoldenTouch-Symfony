<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Materielle;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType; // ✅ Correct import

class MaterielleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_mat')
            ->add('description_mat')
            ->add('photo_mat', FileType::class, [
                'label' => 'Upload Image',
                'mapped' => false,  // This prevents Symfony from trying to store the file path directly in the entity
                'required' => false, // Allow form submission without an image
            ])
            
            ->add('quantite_mat')
            ->add('prix_mat')
            ->add('categorie', EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => 'nom_cat',
            ])
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Materielle::class,
        ]);
    }
}
