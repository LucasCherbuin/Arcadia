<?php

namespace App\Form;

use App\Entity\Utilisateur;
use App\Entity\Role;
Use App\Repository\RoleRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Please enter an email address']),
                    new Email(['message' => 'Please enter a valid email address']),
                ],
                'attr' => ['class' => 'form-control form-floating']
            ])
            ->add('role', EntityType::class, [
                'class' => Role::class,
                'choice_label' => 'role',
                'query_builder' => function (RoleRepository $roleRepository) {
                    return $roleRepository->createQueryBuilder('r')
                        ->where('r.role IN (:roles)')
                        ->setParameter('roles', ['ROLE_EMPLOYEE', 'ROLE_VETERINAIRE']);
                },
                'multiple' => false,
                'expanded' => false,
                'attr' => ['class' => 'form-control'],
            ])
            
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password', 'class' => 'form-control form-floating'],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter a password']),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        'max' => 4096,
                    ])
                ]
            ])
            ->add('emailPersonnel', EmailType::class, [
                'label' => 'Email personnel',
                'mapped' => false,  // Ne pas mapper à une propriété de l'entité
                'attr' => [
                    'placeholder' => 'Indiquer l\'email personnel du nouvel utilisateur'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
