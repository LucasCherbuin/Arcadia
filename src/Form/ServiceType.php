<?php

namespace App\Form;

use App\Entity\Service;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ServiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', null, [
                'attr' => ['class' => 'form-control form-floating'] // Ajout des classes CSS
            ])
            ->add('description', null, [
                'attr' => ['class' => 'form-control form-floating'] // Ajout des classes CSS
            ])
            ->add('image', FileType::class, [
                'label' => 'Image du service',
                'required' => false, // Le champ image est optionnel
                'mapped' => false, // Nous le gérons séparément dans le contrôleur
                'attr' => [
                    'class' => 'form-control form-floating',
                    'accept' => 'image/png, image/jpeg', // Types d'images acceptés
                ],
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Service::class,
        ]);
    }
}
