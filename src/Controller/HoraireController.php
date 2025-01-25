<?php

namespace App\Controller;

use App\Entity\Horaire;
use App\Form\HoraireType;
use App\Repository\HoraireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

#[Route('admin/horaire')]
class HoraireController extends AbstractController
{
    // Index des  Horaires
    #[Route('/', name: 'app_horaire_index', methods: ['GET'])]
    public function index(HoraireRepository $horaireRepository): Response
    {
        $horaires = $horaireRepository->findAll();

        return $this->render('admin/horaire/index.html.twig', [
            'horaires' => $horaires,
        ]);
    }

    // Création d'un nouvel horaire
    #[Route('/new', name: 'horaire_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $horaire = new Horaire();
        $form = $this->createForm(HoraireType::class, $horaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($horaire);
            $entityManager->flush();

            $this->addFlash('success', 'Horaire ajouté avec succès.');

            return $this->redirectToRoute('app_horaire_index');
        }

        return $this->render('admin/horaire/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // Affichage d'un horaire spécifique
    #[Route('/{id}', name: 'horaire_show', methods: ['GET'])]
    public function show(Horaire $horaire): Response
    {
        return $this->render('admin/horaire/show.html.twig', [
            'horaire' => $horaire,
        ]);
    }

    // Modification d'un horaire
    #[Route('/{id}/edit', name: 'horaire_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Horaire $horaire, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(HoraireType::class, $horaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Horaire mis à jour avec succès.');

            return $this->redirectToRoute('app_horaire_index');
        }

        return $this->render('admin/horaire/edit.html.twig', [
            'form' => $form->createView(),
            'horaire' => $horaire,
        ]);
    }

    // Suppression d'un horaire
    #[Route('/{id}/delete', name: 'horaire_delete', methods: ['POST'])]
    public function delete(Request $request, Horaire $horaire, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $horaire->getId(), $request->request->get('_token'))) {
            $entityManager->remove($horaire);
            $entityManager->flush();

            $this->addFlash('success', 'Horaire supprimé avec succès.');
        }

        return $this->redirectToRoute('app_horaire_index');
    }
}
