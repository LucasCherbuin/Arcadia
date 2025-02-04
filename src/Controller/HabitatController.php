<?php

namespace App\Controller;

use App\Entity\Habitat;
use App\Entity\Image;
use App\Form\HabitatType;
use App\Repository\HabitatRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ImageUploadService;

#[Route(path: 'admin/habitat')]
class HabitatController extends AbstractController
{
    // Index des habitats disponibles
    #[Route('', name: 'app_habitat_index', methods: ['GET'])]
    public function index(HabitatRepository $habitatRepository): Response
    {
        $habitats = $habitatRepository->findAll();

        return $this->render('admin/habitat/index.html.twig', [
            'habitats' => $habitats,
        ]);
    }


    // Création d'un nouvel habitat
    #[Route('/new', name: 'app_habitat_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, ImageUploadService $imageUploadService): Response
    {
        $habitat = new Habitat();
        $form = $this->createForm(HabitatType::class, $habitat);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérer le fichier d'image
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                // Utiliser le service d'upload avec le type 'habitats'
                $newFilename = $imageUploadService->upload($imageFile, 'habitats');
            
                // Créer ou récupérer l'entité Image
                $image = new Image();
                $image->setPath($newFilename);
            
                // Associer l'image à l'habitat
                $habitat->setImage($image);
            }
            
    
            // Persister l'entité Habitat et l'entité Image
            $entityManager->persist($habitat);
            if (isset($image)) {
                $entityManager->persist($image); // Persister l'image si elle existe
            }
            $entityManager->flush(); // Sauvegarder les données
    
            $this->addFlash('success', 'Habitat ajouté avec succès.');
    
            return $this->redirectToRoute('app_habitat_index');
        }
    
        return $this->render('admin/habitat/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    

    



    // Modification d'un habitat
    #[Route('/{id}/edit', name: 'app_habitat_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Habitat $habitat, EntityManagerInterface $entityManager, ImageUploadService $imageUploadService): Response
    {
        $form = $this->createForm(HabitatType::class, $habitat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Vérification de l'image modifiée
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                // Supprimer l'ancienne image si elle existe
                $oldImage = $habitat->getImage();
                if ($oldImage) {
                    $imagePath = $oldImage->getPath();
                    $fullPath = $this->getParameter('habitats_images_directory') . '/' . $imagePath;
    
                    // Vérifier si l'image existe et la supprimer du dossier
                    if (file_exists($fullPath)) {
                        unlink($fullPath);
                    }
    
                    // Supprimer l'entité Image de la base de données
                    $entityManager->remove($oldImage);
                }
    
                try {
                    // Télécharger la nouvelle image et récupérer le chemin relatif
                    $filePath = $imageUploadService->upload($imageFile, 'habitats');
                    
                    // Créer une nouvelle entité Image
                    $image = new Image();
                    $image->setPath($filePath);
                    $entityManager->persist($image);
                    
                    // Associer la nouvelle image au service
                    $habitat->setImage($image);
                } catch (\RuntimeException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image');
                }
            }
            

            // Sauvegarder les modifications
            $entityManager->flush();

            $this->addFlash('success', 'Habitat modifié avec succès.');

            return $this->redirectToRoute('app_habitat_index');
        }

        return $this->render('admin/habitat/edit.html.twig', [
            'form' => $form->createView(),
            'habitat' => $habitat,
        ]);
    }

    // Suppression d'un habitat
    #[Route('/{id}/delete', name: 'app_habitat_delete', methods: ['POST'])]
    public function delete(Request $request, Habitat $habitat, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $habitat->getId(), $request->request->get('_token'))) {
            $entityManager->remove($habitat);
            $entityManager->flush();

            $this->addFlash('success', 'Habitat supprimé avec succès.');
        }

        return $this->redirectToRoute('app_habitat_index');
    }
}
