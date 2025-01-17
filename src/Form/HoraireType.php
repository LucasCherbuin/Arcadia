<?php

namespace App\Form;

use App\Entity\Horaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TimeType; // Ajouté pour gérer les heures
use Symfony\Component\Form\Extension\Core\Type\ChoiceType; // Ajouté pour le jour
use Symfony\Component\OptionsResolver\OptionsResolver;

class HoraireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Ouverture', TimeType::class, [
                'widget' => 'single_text',  // Permet d'afficher l'heure sous forme d'un champ de texte
                'input' => 'datetime',     // Spécifie que le format est une heure
                'attr' => ['class' => 'form-control form-floating'] // Ajout de la classe form-floating
            ])
            ->add('fermeture', TimeType::class, [
                'widget' => 'single_text',  // Permet d'afficher l'heure sous forme d'un champ de texte
                'input' => 'datetime',     // Spécifie que le format est une heure
                'attr' => ['class' => 'form-control form-floating'] // Ajout de la classe form-floating
            ])
            ->add('Jour', ChoiceType::class, [
                'choices'  => [
                    'Lundi' => 'Lundi',
                    'Mardi' => 'Mardi',
                    'Mercredi' => 'Mercredi',
                    'Jeudi' => 'Jeudi',
                    'Vendredi' => 'Vendredi',
                    'Samedi' => 'Samedi',
                    'Dimanche' => 'Dimanche',
                ],
                'attr' => ['class' => 'form-control form-floating'] // Ajout de la classe form-floating
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Horaire::class,
        ]);
    }
}
