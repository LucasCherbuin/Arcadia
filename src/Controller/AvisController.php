<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Form\AvisType;
use App\Repository\AvisRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path: '/avis')]
class AvisController extends AbstractController
{
  
    #[Route(path: '/', name: 'app_avis_index', methods: ['GET'])]
    public function index(AvisRepository $avisRepository): Response
    {
        // Récupérer les avis non validés (isVisible == false)
        $avisList = $avisRepository->findBy(['isVisible' => false]);

        return $this->render('employee/avis/index.html.twig', [
            'avisList' => $avisList,  // Passe la liste des avis à valider à la vue
        ]);
    }


    //soumission des formulaires par un visiteur
    #[Route('/new', name: 'app_avis_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $avis = new Avis();
        $form = $this->createForm(AvisType::class, $avis);
        $form->handleRequest($request);

        // Gestion du formulaire pour une requête POST
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($avis);
            $entityManager->flush();

            $this->addFlash('success', 'Avis ajouté avec succès.');

            return $this->redirectToRoute('avis_index');
        }

        // Gestion de l'affichage du formulaire (GET)
        return $this->render('/accueil', [
            'form' => $form->createView(),
        ]);
    }

    // Afficher une entité
    #[Route('/{id}', name: 'app_avis_show', methods: ['GET'])]
    public function show(Avis $avis): Response
    {
        return $this->render('employee/avis/show.html.twig', [
            'avis' => $avis,
        ]);
    }

    

    // Suppression de l'entité par l'employé.e sur son menu
    #[Route('/{id}/delete', name: 'app_avis_delete', methods: ['POST'])]
    public function delete(Request $request, Avis $avis, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $avis->getId(), $request->request->get('_token'))) {
            $entityManager->remove($avis);
            $entityManager->flush();

            $this->addFlash('success', 'Avis supprimé avec succès.');
        }

        return $this->redirectToRoute('app_avis_index');
    }

    #[Route('/{id}/validate', name: 'app_avis_validate', methods: ['GET', 'POST'])]
    public function validate(Avis $avis, EntityManagerInterface $entityManager): Response
    {
        // Modifier la propriété isVisible pour la rendre visible
        $avis->setIsVisible(true);
    
        // Sauvegarder les modifications dans la base de données
        $entityManager->flush();
    
        // Ajouter un message flash pour indiquer le succès
        $this->addFlash('success', 'Avis validé avec succès.');
    
        // Rediriger vers la liste des avis
        return $this->redirectToRoute('app_avis_index');
    }
}
