<?php

// src/Form/AdminType.php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class AdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Email', // Label affiché pour le champ
                'attr' => [
                    'placeholder' => 'Entrez l\'email de l\'administrateur', // Placeholder pour le champ
                    'class' => 'form-control form-floating', // Classe CSS pour la mise en forme
                ],
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Mot de passe',
                'attr' => [
                    'placeholder' => 'Entrez un mot de passe', // Placeholder pour le mot de passe
                    'class' => 'form-control form-floating',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class, // Liaison avec l'entité Admin
        ]);
    }
}
