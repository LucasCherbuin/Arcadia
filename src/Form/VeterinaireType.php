<?php

namespace App\Form;

use App\Entity\Animal;
use App\Entity\Veterinaire;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Utilisateur;


class VeterinaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date', null, [
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control form-floating'],
            ])
            ->add('detail', TextType::class, [
                'label' => 'Etat de santé',
                'attr' => ['class' => 'form-control form-floating'],
            ])
            ->add('animal', EntityType::class, [
                'class' => Animal::class,
                'choice_label' => 'prenom',
                'label' => 'Animal concerné',
                'attr' => ['class' => 'form-control form-floating'],
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
            'mapped' => false, // Pas lié à l'entité
            'data_class' => Veterinaire::class,
            'csrf_protection' => false,
        ]);
    }
}
