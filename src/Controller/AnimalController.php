<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Entity\Image;
use App\Entity\Race;
use App\Service\ImageUploadService;
use App\Form\AnimalType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\File\Exception\FileException;


#[Route(path: 'admin/animal')]
class AnimalController extends AbstractController
{
    private ImageUploadService $imageUploadService;

    public function __construct(ImageUploadService $imageUploadService)
    {
        $this->imageUploadService = $imageUploadService;
    }


    #[Route(path: '', name: 'app_animal_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $animals = $entityManager->getRepository(Animal::class)->findAll();

        return $this->render('admin/animal/index.html.twig', [
            'animals' => $animals,
        ]);
    }

    #[Route(path: '/new', name: 'app_animal_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, ImageUploadService $imageUploadService): Response
    {
        $animal = new Animal();
        $form = $this->createForm(AnimalType::class, $animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Traiter la nouvelle race
            $nouvelleRaceInput = $form->get('nouvelleRace')->getData();
            if ($nouvelleRaceInput && strlen(trim($nouvelleRaceInput)) > 0) {
                $existingRace = $entityManager->getRepository(Race::class)->findOneBy(['label' => $nouvelleRaceInput]);
                if (!$existingRace) {
                    $newRace = new Race();
                    $newRace->setLabel($nouvelleRaceInput);
                    $entityManager->persist($newRace);
                    $animal->setRace($newRace);
                } else {
                    $animal->setRace($existingRace);
                }
            }

            // Gestion de l'image
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                try {
                    // Charger le fichier et récupérer le chemin relatif
                    $filePath = $imageUploadService->upload($imageFile, 'animaux');
            
                    // Créer une nouvelle entité Image
                    $image = new Image();
                    $image->setPath($filePath);
                    $entityManager->persist($image);
            
                    // Associer l'image à l'animal
                    $animal->setImage($image);
                } catch (\RuntimeException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image');
                }
            }

            // Sauvegarde de l'animal
            $entityManager->persist($animal);
            $entityManager->flush();

            $this->addFlash('success', 'Animal ajouté avec succès !');
            return $this->redirectToRoute('app_animal_index');
        }

        return $this->render('admin/animal/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }



    #[Route(path: '/{id}', name: 'app_animal_show', methods: ['GET'])]
    public function show(Animal $animal): Response
    {
        return $this->render('admin/animal/show.html.twig', [
            'animal' => $animal,
        ]);
    }

    #[Route(path: '/{id}/edit', name: 'app_animal_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Animal $animal, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AnimalType::class, $animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Animal modifié avec succès !');
            return $this->redirectToRoute('app_animal_index');
        }

        return $this->render('admin/animal/edit.html.twig', [
            'form' => $form->createView(),
            'animal' => $animal,
        ]);
    }

    #[Route(path: '/{id}/delete', name: 'app_animal_delete', methods: ['POST'])]
    public function delete(Request $request, Animal $animal, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $animal->getId(), $request->request->get('_token'))) {
            $entityManager->remove($animal);
            $entityManager->flush();
            $this->addFlash('success', 'Animal supprimé avec succès !');
        }

        return $this->redirectToRoute('app_animal_index');
    }
}
