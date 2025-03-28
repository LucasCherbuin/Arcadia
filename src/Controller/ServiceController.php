<?php

namespace App\Controller;

use App\Entity\Service;
use App\Entity\Image;  // Ajout de l'importation de l'entité Image
use App\Form\ServiceType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ImageUploadService;  // Assurez-vous d'inclure ce service si nécessaire

#[Route(path: 'admin/service')]
class ServiceController extends AbstractController
{
    private EntityManagerInterface $entityManager;  // Déclaration explicite de EntityManagerInterface
    private ImageUploadService $imageUploadService;  // Déclaration du service d'upload d'image

    // Injection des dépendances dans le constructeur
    public function __construct(EntityManagerInterface $entityManager, ImageUploadService $imageUploadService)
    {
        $this->entityManager = $entityManager;  // Initialisation de l'EntityManager
        $this->imageUploadService = $imageUploadService;  // Initialisation du service d'upload
    }

    // Index des services
    #[Route(path: '', name: 'app_service_index', methods: ['GET'])]
    public function index(): Response
    {
        $services = $this->entityManager->getRepository(Service::class)->findAll();

        return $this->render('admin/service/index.html.twig', [
            'services' => $services,
        ]);
    }

    #[Route(path: '/employee/serviceIndex', name: 'app_serviceEmployee_index', methods: ['GET'])]
    public function indexEmployee(): Response
    {
        $services = $this->entityManager->getRepository(Service::class)->findAll();

        return $this->render('employee/serviceEdit/index.html.twig', [
            'services' => $services,
        ]);
    }


    // Création d'un service
    #[Route(path: '/new', name: 'app_service_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $service = new Service();
        $form = $this->createForm(ServiceType::class, $service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion de l'image téléchargée
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                try {
                    // Télécharger l'image et obtenir le chemin relatif
                    $filePath = $this->imageUploadService->upload($imageFile, 'services');
        
                    // Créer une nouvelle entité Image
                    $image = new Image();
                    $image->setPath($filePath);
                    $this->entityManager->persist($image);
        
                    // Associer l'image au service
                    $service->setImage($image);
                } catch (\RuntimeException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image');
                }
            }

            // Persister le service
            $this->entityManager->persist($service);
            $this->entityManager->flush();

            $this->addFlash('success', 'Service créé avec succès !');
            return $this->redirectToRoute('app_service_index');
        }

        return $this->render('admin/service/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    // Modification d'un service
    #[Route(path: '/{id}/edit', name: 'app_service_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Service $service, EntityManagerInterface $entityManager, ImageUploadService $imageUploadService): Response
{
    $form = $this->createForm(ServiceType::class, $service);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Vérification de l'image modifiée
        $imageFile = $form->get('image')->getData();

        if ($imageFile) {
            // Supprimer l'ancienne image si elle existe
            $oldImage = $service->getImage();
            if ($oldImage) {
                $imagePath = $oldImage->getPath();
                $fullPath = $this->getParameter('services_images_directory') . '/' . $imagePath;

                // Vérifier si l'image existe et la supprimer du dossier
                if (file_exists($fullPath)) {
                    unlink($fullPath);
                }

                // Supprimer l'entité Image de la base de données
                $entityManager->remove($oldImage);
            }

            try {
                // Télécharger la nouvelle image et récupérer le chemin relatif
                $filePath = $imageUploadService->upload($imageFile, 'services');
                
                // Créer une nouvelle entité Image
                $image = new Image();
                $image->setPath($filePath);
                $entityManager->persist($image);
                
                // Associer la nouvelle image au service
                $service->setImage($image);
            } catch (\RuntimeException $e) {
                $this->addFlash('error', 'Erreur lors du téléchargement de l\'image');
            }
        }

        // Sauvegarder les modifications du service (image incluse)
        $entityManager->flush();

        $this->addFlash('success', 'Service modifié avec succès !');
        return $this->redirectToRoute('app_service_index');
    }

    return $this->render('admin/service/edit.html.twig', [
        'form' => $form->createView(),
        'service' => $service,
    ]);
}


    #[Route(path: '/employee/serviceIndex/{id}/edit', name: 'app_serviceEmployee_edit', methods: ['GET', 'POST'])]
    public function editEmployee(Request $request, Service $service, EntityManagerInterface $entityManager, ImageUploadService $imageUploadService): Response
    {
        $form = $this->createForm(ServiceType::class, $service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Vérification de l'image modifiée
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                // Supprimer l'ancienne image si elle existe
                $oldImage = $service->getImage();
                if ($oldImage) {
                    $imagePath = $oldImage->getPath();
                    $fullPath = $this->getParameter('services_images_directory') . '/' . $imagePath;

                    // Vérifier si l'image existe et la supprimer du dossier
                    if (file_exists($fullPath)) {
                        unlink($fullPath);
                    }

                    // Supprimer l'entité Image de la base de données
                    $entityManager->remove($oldImage);
                }

                try {
                    // Télécharger la nouvelle image et récupérer le chemin relatif
                    $filePath = $imageUploadService->upload($imageFile, 'services');
                    
                    // Créer une nouvelle entité Image
                    $image = new Image();
                    $image->setPath($filePath);
                    $entityManager->persist($image);
                    
                    // Associer la nouvelle image au service
                    $service->setImage($image);
                } catch (\RuntimeException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image');
                }
            }

            // Sauvegarder les modifications du service (image incluse)
            $entityManager->flush();

            $this->addFlash('success', 'Service modifié avec succès !');
            return $this->redirectToRoute('app_serviceEmployee_index');
        }

        return $this->render('employee/serviceEdit/edit.html.twig', [
            'form' => $form->createView(),
            'service' => $service,
        ]);
    }


    // Suppression d'un service
    #[Route(path: '/{id}/delete', name: 'app_service_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        Service $service,
        EntityManagerInterface $entityManager,
        ImageUploadService $imageUploadService
    ): Response {
        if ($this->isCsrfTokenValid('delete' . $service->getId(), $request->request->get('_token'))) {
            // Récupérer le nom du fichier si le service a une image associée
            $imageName = $service->getImage()?->getPath(); // Adapte cette ligne selon ton entité Image

            // Supprimer l'entité Service
            $entityManager->remove($service);
            $entityManager->flush();

            // Supprimer l'image physique si elle existe
            if ($imageName) {
                $imageUploadService->delete($imageName, 'services');
            }

            $this->addFlash('success', 'Service supprimé avec succès !');
        }

        return $this->redirectToRoute('app_service_index');
    }
}
