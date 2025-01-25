<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Entity\Role;

use App\Service\MailerService;
use Symfony\Component\Mailer\MailerInterface;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[Route('admin/utilisateur')]
class UtilisateurController extends AbstractController
{
    private $entityManager;


    public function __construct(EntityManagerInterface $entityManager, private MailerInterface $mailer)
    {
        $this->entityManager = $entityManager;
        $this->mailer = $mailer;
    }

    // Liste des utilisateurs
    #[Route('', name: 'app_utilisateur_index', methods: ['GET'])]
    public function index(): Response
    {
        $utilisateurs = $this->entityManager->getRepository(Utilisateur::class)->findAll();
        return $this->render('admin/utilisateur/index.html.twig', [
            'utilisateurs' => $utilisateurs,
        ]);
    }

// Ajouter un nouvel utilisateur
#[Route('/new', name: 'app_utilisateur_new', methods: ['GET', 'POST'])]
public function new(Request $request, UserPasswordHasherInterface $passwordHasher, MailerService $mailerService): Response
{
    $utilisateur = new Utilisateur();
    $form = $this->createForm(RegistrationFormType::class, $utilisateur);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $role = $form->get('role')->getData();
        $utilisateur->setRole($role);

        $hashedPassword = $passwordHasher->hashPassword($utilisateur, $form->get('plainPassword')->getData());
        $utilisateur->setPassword($hashedPassword);

        $this->entityManager->persist($utilisateur);
        $this->entityManager->flush();

        $this->addFlash('success', 'Utilisateur créé avec succès.');

        $emailPersonnel = $form->get('emailPersonnel')->getData();
        try {
            $mailerService->sendEmail(
                'arcadiazoo@outlook.fr',
                $emailPersonnel,
                'Votre compte Arcadia Zoo est prêt !',
                '<p>Bonjour,</p><p>Votre compte sur Arcadia Zoo est maintenant prêt. Vous pouvez vous connecter avec l\'email associé à votre compte.</p>'
            );
        } catch (\Exception $e) {
            $this->addFlash('error', 'Une erreur est survenue lors de l\'envoi de l\'email de confirmation.');
        }

        return $this->redirectToRoute('app_utilisateur_index');
    }

    return $this->render('admin/utilisateur/new.html.twig', [
        'form' => $form->createView(),
    ]);
}


    // Afficher les détails d'un utilisateur
    #[Route('/{id}', name: 'app_utilisateur_show', methods: ['GET'])]
    public function show(Utilisateur $utilisateur): Response
    {
        return $this->render('admin/utilisateur/show.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }

    // Modifier un utilisateur
    #[Route('/{id}/edit', name: 'app_utilisateur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Utilisateur $utilisateur, UserPasswordHasherInterface $passwordHasher): Response
    {
        // Créer le formulaire d'édition à partir de l'entité Utilisateur
        $form = $this->createForm(RegistrationFormType::class, $utilisateur);
        $form->handleRequest($request);

        // Vérifier si le formulaire a été soumis et est valide
        if ($form->isSubmitted() && $form->isValid()) {
            // Si un nouveau mot de passe est défini, le hacher
            $plainPassword = $form->get('plainPassword')->getData();
            if ($plainPassword) {
                $utilisateur->setPassword($passwordHasher->hashPassword($utilisateur, $plainPassword));
            }

            // Enregistrer les modifications dans la base de données
            $this->entityManager->flush();

            // Message flash pour confirmer la modification
            $this->addFlash('success', 'Utilisateur modifié avec succès !');

            // Rediriger vers la liste des utilisateurs après la modification
            return $this->redirectToRoute('app_utilisateur_index');
        }

        // Afficher le formulaire d'édition
        return $this->render('admin/utilisateur/edit.html.twig', [
            'form' => $form->createView(),
            'utilisateur' => $utilisateur,
        ]);
    }

    // Supprimer un utilisateur
    #[Route('/{id}/delete', name: 'app_utilisateur_delete', methods: ['POST'])]
    public function delete(Request $request, Utilisateur $utilisateur): Response
    {
        // Vérification du token CSRF pour la suppression
        $csrfToken = $request->request->get('_token');
        if ($this->isCsrfTokenValid('delete' . $utilisateur->getId(), $csrfToken)) {
            $this->entityManager->remove($utilisateur);
            $this->entityManager->flush();

            // Message flash pour confirmer la suppression
            $this->addFlash('success', 'Utilisateur supprimé avec succès !');
        }

        // Rediriger vers la liste des utilisateurs après la suppression
        return $this->redirectToRoute('app_utilisateur_index');
    }
}
