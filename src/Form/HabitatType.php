<?php

namespace App\Form;

use App\Entity\Habitat;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class HabitatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom de l\'habitat',
                'attr' => [
                    'placeholder' => 'Entrez le nom de l\'habitat',
                    'class' => 'form-control form-floating', // Ajout de la classe form-floating
                ],
                'required' => true,  // Champ obligatoire
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => [
                    'placeholder' => 'Entrez une description',
                    'class' => 'form-control form-floating', // Ajout de la classe form-floating
                ],
                'required' => true,  // Champ obligatoire
            ])
            ->add('image', FileType::class, [
                'label' => 'Image de l\'habitat',
                'required' => false, // Le champ image est optionnel
                'mapped' => false, // Nous le gérons séparément dans le contrôleur
                'attr' => [
                    'class' => 'form-control form-floating',
                    'accept' => 'image/png, image/jpeg', // Types d'images acceptés
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Habitat::class,  // L'entité à laquelle le formulaire est lié
        ]);
    }
}

