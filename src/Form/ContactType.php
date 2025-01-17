<?php

// src/Form/ContactType.php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
{
    $builder
        ->add('email', EmailType::class, [
            'label' => 'Votre Email',
            'attr' => [
                'placeholder' => 'Entrez votre adresse email'
            ],
            'constraints' => [
                new Assert\NotBlank(['message' => 'L\'adresse email est obligatoire.']),
                new Assert\Email(['message' => 'Veuillez entrer une adresse email valide.'])
            ]
        ])
        ->add('Titre', TextType::class, [
            'label' => 'Titre de la demande',
            'constraints' => [
                new Assert\NotBlank(['message' => 'Le titre est obligatoire.']),
                new Assert\Length([
                    'max' => 255,
                    'maxMessage' => 'Le titre ne peut pas dépasser 255 caractères.'
                ])
            ]
        ])
        ->add('votre_demande', TextareaType::class, [
            'label' => 'Votre Message',
            'attr' => [
                'placeholder' => 'Écrivez votre message ici',
                'rows' => 5
            ],
            'constraints' => [
                new Assert\NotBlank(['message' => 'Le message est obligatoire.']),
                new Assert\Length([
                    'min' => 10,
                    'minMessage' => 'Le message doit contenir au moins 10 caractères.'
                ])
            ]
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Define the data class if you have a specific entity for this form, or leave empty for plain data
            'data_class' => null,
        ]);
    }
}

