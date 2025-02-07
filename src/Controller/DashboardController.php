<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Service\PredisService;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\AnimalRepository;
use App\Repository\EmployeeRepository;
use App\Repository\ConsultationRepository;
use App\Repository\VeterinaireRepository;
use App\Repository\CommentaireRepository;
use Doctrine\ORM\EntityManagerInterface;

class DashboardController extends AbstractController
{
    private VeterinaireRepository $veterinaireRepository;
    private ConsultationRepository $consultationRepository;
    private AnimalRepository $animalRepository;
    private EmployeeRepository $employeeRepository;
    private CommentaireRepository $commentaireRepository;
    private PredisService $predisService;

    public function __construct(
        VeterinaireRepository $veterinaireRepository,
        ConsultationRepository $consultationRepository,
        AnimalRepository $animalRepository,
        EmployeeRepository $employeeRepository,
        CommentaireRepository $commentaireRepository,
        PredisService $predisService
    ) {
        $this->veterinaireRepository = $veterinaireRepository;
        $this->consultationRepository = $consultationRepository;
        $this->animalRepository = $animalRepository;
        $this->employeeRepository = $employeeRepository;
        $this->commentaireRepository = $commentaireRepository;
        $this->predisService = $predisService;
    }


    //dashboard pour la consultation des animeaux
    #[Route('/admin/consultation', name: 'app_consultation')]
    public function consultation(): Response
    {
        $animals = $this->animalRepository->findAll();
        $preparedConsultation = $this->getConsultationData($animals);

        return $this->render('admin/consultation.html.twig', [
            'preparedConsultation' => $preparedConsultation,
        ]);
    }

    private function getConsultationData($animals): array
    {
        $consultations = [];

        foreach ($animals as $animal) {
            $key = "animal:click:{$animal->getId()}";
            $clicks = is_numeric($this->predisService->getClick($key)) ? $this->predisService->getClick($key) : 0;

            $consultations[] = [
                'id' => $animal->getId(),
                'prenom' => $animal->getPrenom(),
                'clique' => $clicks,
            ];
        }

        return $consultations;
    }


    //dashboard des animaux et leurs aliementaion pour le vétérinaire

    #[Route('/veterinaire/dashboardAnimal', name: 'app_dashboard_animal')]
public function dashboardAnimal(): Response
{
    // Récupérer tous les animaux
    $animals = $this->animalRepository->findAll();

    // Préparer les animaux et les informations associées
    $preparedAnimal = array_map(function($animal) {
        // Initialiser une variable pour les informations des employés
        $employeeInfo = [];

        // Vérifier s'il y a des employés associés à cet animal
        foreach ($animal->getEmployees() as $employee) {
            // Vérifier si l'employé a un utilisateur
            $utilisateurEmail = $employee->getUtilisateur() ? $employee->getUtilisateur()->getEmail() : 'Non attribué';

            // Ajouter les informations de l'employé dans le tableau
            $employeeInfo[] = [
                'email' => $utilisateurEmail,
                'nourriture' => $employee->getNourriture() ?? 'Non attribué',
                'quantité' => $employee->getQuantite() ?? 'Non attribué',
                'date' => $employee->getDate() ? $employee->getDate()->format('d/m/Y H:i') : 'Non attribué',
            ];
        }

        // Retourner les données de l'animal avec les informations des employés
        return [
            'prenom' => $animal->getPrenom() ?? 'Non spécifié',
            'etat' => $animal->getEtat() ?? 'Non spécifié',
            'race' => $animal->getRace() ? $animal->getRace()->getLabel() : 'Non spécifiée',
            'habitat' => $animal->getHabitat() ? $animal->getHabitat()->getNom() : 'Non spécifié',
            'employees' => $employeeInfo, // Les informations des employés
        ];
    }, $animals);

    return $this->render('veterinaire/dashboardAnimal.html.twig', [
        'preparedAnimal' => $preparedAnimal,
    ]);
}

    


    


    // Dashboard pour les rapports du vétérianire pour l'admin
    #[Route('/admin/compteRendu', name: 'app_compte_rendu_veterinaire')]
    public function compteRendu(): Response
    {
        $veterinaires = $this->veterinaireRepository->findAll();
        $commentaires = $this->commentaireRepository->findAll();

        $preparedVeterinaire = array_map(fn($veterinaire) => [
            'id' => $veterinaire->getId(),
            'animal' => $veterinaire->getAnimal(),
            'date' => $veterinaire->getDate()?->format('d/m/Y') ?? 'Non définie',
            'detail' => $veterinaire->getDetail(),
            'utilisateur' => $veterinaire->getUtilisateur() ?? 'Non spécifié',
        ], $veterinaires);

        $preparedCommentaires = array_map(fn($commentaire) => [
            'id' => $commentaire->getId(),
            'habitat' => $commentaire->getHabitat(),
            'commentaire' => $commentaire->getCommentaire(),
            'utilisateur' => $commentaire->getUtilisateur(),
        ], $commentaires);

        return $this->render('admin/compteRendu.html.twig', [
            'veterinaires' => $preparedVeterinaire,
            'commentaires' => $preparedCommentaires,
        ]);
    }
}
