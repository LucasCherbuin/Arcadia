<?php

// src/Controller/HeaderFooterController.php
namespace App\Controller;

use App\Repository\HoraireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


//controller gèrant le header et footer du site
class HeaderFooterController extends AbstractController
{
    private array $globalHoraires = [];

    public function __construct(HoraireRepository $horaireRepository)
    {
        $this->globalHoraires = $this->prepareHoraires($horaireRepository->findAll());
    }

    #[Route('/HeaderFooter', name: 'HeaderFooter')]
    public function headerFooter(): Response
    {
        // Exemple de page utilisant les horaires
        return $this->renderWithBase('headerFooter.html.twig', []);
    }

    protected function renderWithBase(string $view, array $parameters = []): Response
    {
        // Ajouter les horaires aux paramètres globaux
        $parameters['horaires'] = $this->globalHoraires;

        return $this->render($view, $parameters);
    }

    private function prepareHoraires(array $horaires): array
    {
        // Préparer les horaires pour un affichage propre
        $preparedHoraires = [];
        foreach ($horaires as $horaire) {
            $preparedHoraires[] = [
                'jour' => $horaire->getJour(),
                'ouverture' => $horaire->getOuverture()->format('H:i'),
                'fermeture' => $horaire->getFermeture()->format('H:i'),
            ];
        }

        return $preparedHoraires;
    }

    // Méthode pour modifier les horaires globalement depuis l'EventSubscriber
    public function setGlobalHoraires(array $horaires): void
    {
        $this->globalHoraires = $horaires;
    }
}

