<?php

// src/Controller/AdminUtilisateurController.php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Entity\Role;
use App\Form\AdminType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class AdminUtilisateurController extends AbstractController
{
    #[Route(path: '/create', name: 'app_admin_create', methods: ['GET', 'POST'])]
    public function createAdmin(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager
    ): Response {
        $utilisateur = new Utilisateur();

        // Créer le formulaire AdminType
        $form = $this->createForm(AdminType::class, $utilisateur);
        $form->handleRequest($request);

        // Vérifier si le formulaire a été soumis et validé
        if ($form->isSubmitted() && $form->isValid()) {
            // Hasher le mot de passe
            $hashedPassword = $passwordHasher->hashPassword($utilisateur, $utilisateur->getPassword());
            $utilisateur->setPassword($hashedPassword);

            // Récupérer le rôle administrateur avec l'ID 1
            $roleAdmin = $entityManager->getRepository(Role::class)->find(1);
            if (!$roleAdmin) {
                throw new \Exception('Le rôle administrateur est introuvable dans la base de données.');
            }

            // Assigner le rôle à l'utilisateur
            $utilisateur->setRole($roleAdmin);

            // Persister l'utilisateur dans la base de données
            $entityManager->persist($utilisateur);
            $entityManager->flush();

            // Rediriger ou retourner un message de succès
            return $this->redirectToRoute('app_admin_success', ['id' => $utilisateur->getId()]);
        }

        // Afficher le formulaire
        return $this->render('admin_utilisateur/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route(path: '/adminSuccess/{id}', name: 'app_admin_success', methods: ['GET'])]
    public function success(int $id, EntityManagerInterface $entityManager): Response
    {
        $utilisateur = $entityManager->getRepository(Utilisateur::class)->find($id);

        if (!$utilisateur) {
            throw $this->createNotFoundException('Utilisateur introuvable.');
        }

        return $this->render('admin_utilisateur/success.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }
}

