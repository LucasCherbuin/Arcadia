<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\AnimalRepository;
use App\Repository\EmployeeRepository;
use App\Repository\ConsultationRepository;
use App\Repository\VeterinaireRepository;
use App\Repository\CommentaireRepository;
use App\Service\PredisService;

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
            $clicks = $this->predisService->getClick($key) ?: 0;

            $consultations[] = [
                'id' => $animal->getId(),
                'prenom' => $animal->getPrenom(),
                'clique' => $clicks,
            ];
        }

        return $consultations;
    }

    #[Route('/animal/click/{id}', name: 'increment_click', methods: ['POST'])]
    public function incrementClick(int $id): Response
    {
        $key = "animal:click:{$id}";
        $newClickCount = $this->predisService->incrementClick($key); // Utilisation de PredisService

        return $this->json([
            'clicks' => $newClickCount,
        ]);
    }


    #[Route('/veterinaire/dashboardAnimal', name: 'app_dashboard_animal')]
    public function dashboardAnimal(): Response
    {
        $animals = $this->animalRepository->findAll();
        $employees = $this->employeeRepository->findAll();

        $preparedAnimal = array_map(fn($animal) => [
            'prenom' => $animal->getPrenom() ?? 'Non spécifié',
            'race' => $animal->getRace() ?? 'Non spécifiée',
        ], $animals);

        $preparedEmployee = array_map(fn($employee) => [
            'nourriture' => $employee->getNourriture() ?? 'Non spécifiée',
            'quantite' => $employee->getQuantite() ?? 0,
            'date' => $employee->getDate()?->format('d/m/Y') ?? 'Non définie',
            'utilisateur' => $employee->getUtilisateur() ?? 'non spécifié',
        ], $employees);

        return $this->render('veterinaire/dashboardAnimal.html.twig', [
            'preparedAnimal' => $preparedAnimal,
            'preparedEmployee' => $preparedEmployee,
        ]);
    }

    #[Route('/admin/compteRendu', name: 'app_compte_rendu_veterinaire')]
    public function compteRendu(): Response
    {
        $veterinaires = $this->veterinaireRepository->findAll();
        $commentaires = $this->commentaireRepository->findAll();

        $preparedVeterinaire = array_map(fn($veterinaire) => [
            'animal' => $veterinaire->getAnimal(),
            'date' => $veterinaire->getDate()?->format('d/m/Y') ?? 'Non définie',
            'detail' => $veterinaire->getDetail(),
            'utilisateur' => $veterinaire->getUtilisateur() ?? 'Non spécifié',
        ], $veterinaires);

        $preparedCommentaires = array_map(fn($commentaire) => [
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
