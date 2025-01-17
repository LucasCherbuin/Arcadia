<?php

namespace App\Form;

use App\Entity\Commentaire;
use App\Entity\Utilisateur;
use App\Entity\Habitat; // Import de l'entité Habitat
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CommentaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('commentaire', TextType::class, [
                'label' => 'Commentaire',
                'attr' => [
                    'class' => 'form-control', // Ajout de classe Bootstrap si nécessaire
                    'placeholder' => 'Écrivez votre commentaire ici...', // Placeholder pour le champ
                ],
            ])
            ->add('habitat', EntityType::class, [
                'class' => Habitat::class, // Classe associée pour le champ habitat
                'choice_label' => 'nom',  // Propriété utilisée pour représenter chaque choix
                'label' => 'Habitat',
                'placeholder' => 'Sélectionnez un habitat', // Option vide par défaut
                'attr' => [
                    'class' => 'form-select', // Classe Bootstrap pour un menu déroulant
                ],
                'required' => true, // Rendre ce champ obligatoire
            ])
            ->add('utilisateur', EntityType::class, [
                'class' => Utilisateur::class, // Classe associée pour le champ utilisateur
                'choice_label' => 'email',    // Propriété utilisée pour représenter chaque choix
                'label' => 'Indiquez votre email',
                'attr' => [
                    'class' => 'form-select', // Classe Bootstrap pour un menu déroulant
                ],
                'required' => true, // Rendre ce champ obligatoire
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commentaire::class, // Associe ce formulaire à l'entité Commentaire
        ]);
    }
}
