<?php

namespace App\Controller;

use App\Entity\Veterinaire;
use App\Form\VeterinaireType;
use App\Form\CommentaireType;
use App\Entity\Commentaire;
use App\Entity\Habitat;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path: '/veterinaire')]
class VeterinaireController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    // Index des entités
    #[Route(path: '', name: 'app_veterinaire_index')]
    public function index(Request $request): Response
    {
        // Récupérer les vétérinaires et les commentaires
        $veterinaires = $this->entityManager->getRepository(Veterinaire::class)->findAll();
        $commentaires = $this->entityManager->getRepository(Commentaire::class)->findAll(); // Récupération des commentaires

        if ($request->isXMLHttpRequest()) {
            return $this->render('veterinaire/RapportVeterinaire/index.html.twig', [
                'veterinaires' => $veterinaires,
                'Commentaires' => $commentaires,
            ]);
        }

        return $this->render('veterinaire/RapportVeterinaire/index.html.twig', [
            'veterinaires' => $veterinaires,
            'Commentaires' => $commentaires,
        ]);
    }

    // Nouvelle entrée pour le rapport vétérinaire
    #[Route(path: 'RapportVeterinaire/new', name: 'app_RapportVeterinaire_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $veterinaire = new Veterinaire();
        $form = $this->createForm(VeterinaireType::class, $veterinaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Associer l'utilisateur connecté
            $utilisateur = $this->getUser();
            if ($utilisateur) {
                $veterinaire->setUtilisateur($utilisateur);
            } else {
                $this->addFlash('error', 'Utilisateur non connecté.');
                return $this->redirectToRoute('app_login'); // Rediriger vers la connexion
            }

            $this->entityManager->persist($veterinaire);
            $this->entityManager->flush();

            $this->addFlash('success', 'Rapport créé avec succès !');
            return $this->redirectToRoute('veterinaire_menu');
        }

        return $this->render('veterinaire/RapportVeterinaire/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    // Ajouter un commentaire
    #[Route('/Commentaire', name: 'app_commentaire_new')]
    public function commentaire(Request $request, EntityManagerInterface $entityManager): Response
    {
        $commentaire = new Commentaire();

        // Récupérer l'utilisateur connecté
        $utilisateur = $this->getUser(); // Récupère l'utilisateur connecté

        // Vérifier que l'utilisateur est bien connecté
        if (!$utilisateur) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour ajouter un commentaire.');
        }

        // Récupérer l'habitat depuis la requête
        $habitatNom = $request->get('nom');
        $habitat = $entityManager->getRepository(Habitat::class)->findOneBy(['nom' => $habitatNom]);

        if ($habitat) {
            // Utilisez setHabitat pour associer l'habitat au commentaire
            $commentaire->setHabitat($habitat);
            $commentaire->setUtilisateur($utilisateur); // Associer l'utilisateur connecté
        }

        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Vérifier si la case de signature est cochée
            if (!$form->get('utilisateur')->getData()) {
                $this->addFlash('error', 'Vous devez confirmer que le commentaire est correct.');
                return $this->redirectToRoute('app_commentaire_new');
            }

            $entityManager->persist($commentaire);
            $entityManager->flush();

            $this->addFlash('success', 'Commentaire ajouté avec succès !');
            return $this->redirectToRoute('veterinaire_menu');
        }

        return $this->render('veterinaire/Commentaire/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
