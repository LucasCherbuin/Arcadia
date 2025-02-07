<?php

namespace App\Form;

use App\Entity\Animal;
use App\Entity\Employee;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class EmployeeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('animals', EntityType::class, [
                'class' => Animal::class,
                'choice_label' => 'prenom',  // Affiche la propriété 'prenom' de l'entité Animal
                'label' => 'Animal concerné',
                'multiple' => true,  // Indique que c'est une collection d'animaux
                'attr' => ['class' => 'form-control form-floating']  // Ajout de la classe form-floating
            ])
            ->add('nourriture', TextType::class, [
                'label' => 'Nourriture',
                'attr' => [
                    'placeholder' => 'Entrez la nourriture',
                    'class' => 'form-control form-floating'  // Ajout de la classe form-floating
                ]
            ])
            ->add('quantite', NumberType::class, [
                'label' => 'Quantité',
                'attr' => [
                    'placeholder' => 'Entrez la quantité en gramme',
                    'class' => 'form-control form-floating'  // Ajout de la classe form-floating
                ]
            ])
            ->add('date', DateType::class, [
                'label' => 'Date',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control form-floating']  // Ajout de la classe form-floating
            ])
            ->add('utilisateur', EntityType::class, [
                'class' => Utilisateur::class,  // Utiliser l'entité Utilisateur
                'choice_label' => 'email',   // Remplacez 'username' par le champ approprié de votre entité
                'label' => 'Indiqué votre email',  // Modifiez ce label si nécessaire
                'attr' => ['class' => 'form-control form-floating'],
                'required' => true,  // Rendre le champ obligatoire si nécessaire
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Employee::class,
        ]);
    }
}
