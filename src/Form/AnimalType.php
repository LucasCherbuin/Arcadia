<?php

namespace App\Form;

use App\Entity\Animal;
use App\Entity\Race;
use App\Entity\Habitat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class AnimalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenom', TextType::class, [
                'label' => 'Nom de l\'animal',
                'attr' => [
                    'placeholder' => 'Entrez le nom de l\'animal',
                    'class' => 'form-control form-floating'  // Ajout de la classe form-floating
                ]
            ])
            ->add('race', EntityType::class, [
                'label' => 'Race',
                'class' => Race::class,
                'choice_label' => 'label',
                'placeholder' => 'Choisissez une race existante',
                'required' => false,
                'attr' => [
                    'class' => 'form-control select2-enable', // Classe pour activer Select2
                ]
            ])
            ->add('nouvelleRace', TextType::class, [
                'label' => 'Nouvelle race',
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control select2-enable', // Permet à Select2 de s'appliquer
                    'placeholder' => 'Si la race n\'est pas présente, ajoutez-en une nouvelle',
                ]
            ])
            ->add('habitat', EntityType::class, [
                'label' => 'Habitat',
                'class' => Habitat::class,
                'choice_label' => 'nom',
                'attr' => ['class' => 'form-control form-floating'] // Ajout de la classe form-floating
            ])
            ->add('image', FileType::class, [
                'label' => 'Image de l\'animal',
                'required' => false, // Le champ image est optionnel
                'mapped' => false, // Nous le gérons séparément dans le contrôleur
                'attr' => [
                    'class' => 'form-control form-floating',
                    'accept' => 'image/png, image/jpeg', // Types d'images acceptés
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Animal::class,
        ]);
    }
}


