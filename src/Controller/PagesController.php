<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Form\AvisType;
use App\Entity\Animal;

use App\Form\ContactType;
use App\Repository\AnimalRepository;
use App\Repository\HabitatRepository;
use App\Repository\AvisRepository;
use App\Repository\ServiceRepository;
use App\Repository\UtilisateurRepository;
use App\Repository\VeterinaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use App\Service\PredisService;
use App\Service\MailerService;
use Symfony\Component\Mime\Address;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class PagesController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private NormalizerInterface $normalizer;

    private MailerInterface $mailer;
    private PredisService $predisService;
    
    public function __construct(EntityManagerInterface $entityManager, NormalizerInterface $normalizer, MailerInterface $mailer, PredisService $predisService)
    {
        $this->entityManager = $entityManager;
        $this->normalizer = $normalizer;
        $this->mailer = $mailer;
        $this->predisService = $predisService;
    }

    #[Route('/accueil', name: 'app_accueil', methods: ['GET', 'POST'])]
    public function accueil(
        EntityManagerInterface $entityManager,
        AnimalRepository $animalRepository,
        HabitatRepository $habitatRepository,
        ServiceRepository $serviceRepository,
        AvisRepository $avisRepository,
        Request $request
    ): Response {
        $animals = $animalRepository->findAll();
        $habitats = $habitatRepository->findAll();
        $services = $serviceRepository->findAll();
        $avis = $avisRepository->findAll();

        // Préparation des données
        $preparedAnimals = array_map(fn($animal) => [
            'id' => $animal->getId(),
            'prenom' => $animal->getPrenom(),
            'race' => $animal->getRace() ? $animal->getRace()->getLabel() : 'Inconnue',
            'habitat' => $animal->getHabitat() ? $animal->getHabitat()->getNom() : 'Inconnu',
            'image' => $animal->getImage() ? $animal->getImage()->getPath() : null,
        ], $animals);

        $preparedHabitats = array_map(fn($habitat) => [
            'id' => $habitat->getId(),
            'nom' => $habitat->getNom(),
            'description' => $habitat->getDescription(),
            'image' => $habitat->getImage() ? $habitat->getImage()->getPath() : null,
        ], $habitats);

        $preparedServices = array_map(fn($service) => [
            'id' => $service->getId(),
            'nom' => $service->getNom(),
            'description' => $service->getDescription(),
            'image' => $service->getImage() ? $service->getImage()->getPath() : null,
        ], $services);

        $preparedAvis = array_map(fn($avis) => [
            'id' => $avis->getId(),
            'pseudo' => $avis->getPseudo(),
            'commentaire' => $avis->getCommentaire(),
            'is_visible' => $avis->getisVisible(),
        ], array_filter($avis, fn($avis) => $avis->getIsVisible() === true));

        // Gestion du formulaire d'avis
        $avis = new Avis(); // Création d'un nouvel objet Avis
        $form = $this->createForm(AvisType::class, $avis); // Création du formulaire
        $form->handleRequest($request); // Traitement de la soumission du formulaire

        if ($form->isSubmitted() && $form->isValid()) {
            $avis = $form->getData(); // Récupère les données du formulaire

            // S'assurer que l'avis est marqué comme non visible dès l'ajout
            $avis->setIsVisible(false); // Définit 'isVisible' à false (par défaut)

            // Persister l'avis dans la base de données
            $this->entityManager->persist($avis);
            $this->entityManager->flush(); // Envoie les données en base

            // Ajouter un message flash de succès
            $this->addFlash('success', 'Avis ajouté avec succès.');

            // Redirige vers la page d'accueil (ou toute autre page de ton choix)
            return $this->redirectToRoute('app_accueil');
        }

        return $this->render('pages_visiteurs/accueil.html.twig', [
            'animals' => $preparedAnimals,
            'habitats' => $preparedHabitats,
            'services' => $preparedServices,
            'avis' => $preparedAvis,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/habitatVisiteur', name: 'app_habitat_visiteur', methods: ['GET'])]
    public function habitatVisiteur(HabitatRepository $habitatRepository, AnimalRepository $animalRepository): Response
    {
        $habitats = $habitatRepository->findAll();
        
        // Préparation de la récupération des animaux en fonction des habitats
        $preparedAnimals = [];
        foreach ($habitats as $habitat) {
            // Récupérer les animaux associés à cet habitat
            $animalsInHabitat = $animalRepository->findBy(['habitat' => $habitat]);

            // Ajouter les animaux à la liste
            $preparedAnimals[$habitat->getId()] = array_map(function ($animal) {
                return [
                    'race' => $animal->getRace(),
                    // Ajoutez d'autres informations pertinentes sur l'animal
                ];
            }, $animalsInHabitat);
        }

        // Définition des couleurs en fonction du nom de l'habitat
        $colorMap = [
            'jungle' => ['#37873C', '#86A934'],  // Exemple : couleur verte pour "Forêt"
            'desert' => ['#B67B0E', '#7D550B'], // Exemple : couleur jaune pour "Savane"
            'montagne' => ['#0B87FB','#B0C5DD'], // Exemple : couleur bleue pour "Montagne"
            // Ajoute d'autres correspondances selon tes besoins
        ];

        $preparedHabitats = array_map(function($habitat) use ($colorMap) {
            // Récupérer la couleur ou un dégradé pour l'habitat
            $color = $colorMap[strtolower($habitat->getNom())] ?? ['#000000', '#555555']; // Valeur par défaut : gris
            // Créer un dégradé CSS si deux couleurs sont définies
            $gradient = count($color) == 2 ? "linear-gradient(to right, {$color[0]}, {$color[1]})" : $color[0];
            
            return [
                'id' => $habitat->getId(),
                'nom' => $habitat->getNom(),
                'description' => $habitat->getDescription(),
                'image' => $habitat->getImage() ? $habitat->getImage()->getPath() : null,
                'linkColor' => $gradient,  // Application du dégradé ou de la couleur simple
            ];
        }, $habitats);

        return $this->render('pages_visiteurs/habitats.html.twig', [
            'habitats' => $preparedHabitats,
            'animals' => $preparedAnimals,
        ]);
    }

    #[Route('/habitatVisiteur/{id}/animal', name: 'app_animal_visiteur', methods: ['GET'])]
    public function animalVisiteur(
        AnimalRepository $animalRepository,
        HabitatRepository $habitatRepository,
        VeterinaireRepository $veterinaireRepository,
        PredisService $predisService,  // Injection du service Predis
        int $id
    ): Response {
        // Récupérer l'habitat par son ID
        $habitat = $habitatRepository->find($id);
    
        // Vérifier si l'habitat existe
        if (!$habitat) {
            $this->addFlash('error', 'Habitat non trouvé.');
            return $this->redirectToRoute('app_habitat_visiteur');
        }
    
        // Récupérer les animaux associés à cet habitat
        $animals = $animalRepository->findBy(['habitat' => $habitat]);
    
        // Préparer les données des animaux avec leurs vétérinaires et clics
        $preparedAnimals = array_map(function ($animal) use ($veterinaireRepository, $predisService) {
            // Récupérer les vétérinaires associés à cet animal
            $veterinaires = $veterinaireRepository->findBy(['animal' => $animal]);
    
            // Préparer les données des vétérinaires
            $preparedVeterinaires = array_map(fn($vet) => [
                'id' => $vet->getId(),
                'details' => $vet->getDetail(),
                'email' => $vet->getUtilisateur() ? $vet->getUtilisateur()->getEmail() : 'Inconnu',
            ], $veterinaires);
    
            // Utiliser le service Predis pour obtenir le nombre de clics
            $clicks = $predisService->getClick('animal:' . $animal->getId() . ':clicks');
    
            return [
                'id' => $animal->getId(),
                'prenom' => $animal->getPrenom(),
                'race' => $animal->getRace() ? $animal->getRace()->getLabel() : 'Inconnue',
                'habitat' => $animal->getHabitat()->getNom(),
                'image' => $animal->getImage() ? $animal->getImage()->getPath() : 'default_image.jpg',
                'veterinaires' => $preparedVeterinaires,
                'clicks' => $clicks,  // Ajouter le nombre de clics à l'animal
                'animal_click_route' => $this->generateUrl('animal_click', ['id' => $animal->getId()]),  // Générer dynamiquement l'URL
            ];
        }, $animals);
    
        // Rendre la vue avec les données
        return $this->render('pages_visiteurs/animal.html.twig', [
            'animals' => $preparedAnimals,
            'habitat' => $habitat->getNom(),
        ]);
    }

    #[Route('/animal/click/{id}', name: 'animal_click', methods: ['POST'])]
    public function incrementClick(Animal $animal): JsonResponse
    {
        $key = 'animal_click_' . $animal->getId(); // Génère une clé unique pour l'animal

        // Utilisez le service Predis pour incrémenter le compteur de clics dans Redis
        $clicks = $this->predisService->incrementClick($key);

        // Mettre à jour le nombre de clics dans la base de données (si nécessaire)
        // $animal->setClickCount($clicks);
        // $this->entityManager->flush();

        return new JsonResponse(['clicks' => $clicks]);
    }
}
