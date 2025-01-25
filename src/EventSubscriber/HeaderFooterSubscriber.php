<?php

// src/EventSubscriber/HeaderFooterSubscriber.php
namespace App\EventSubscriber;

use App\Controller\HeaderFooterController;
use App\Repository\HoraireRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;

//eventSubscriber pour afficher l'entité des horaires sur tout le projet
class HeaderFooterSubscriber implements EventSubscriberInterface
{
    private HoraireRepository $horaireRepository;

    public function __construct(HoraireRepository $horaireRepository)
    {
        $this->horaireRepository = $horaireRepository;
    }

    public function onKernelController(ControllerEvent $event)
    {
        $controller = $event->getController();

        // Vérifie si le contrôleur actuel est une instance de HeaderFooterController
        if (is_array($controller) && $controller[0] instanceof HeaderFooterController) {
            $controllerObject = $controller[0];

            // Récupère les horaires depuis le repository et prépare-les
            $horaires = $this->prepareHoraires($this->horaireRepository->findAll());

            // Modifie les horaires dans le contrôleur
            $controllerObject->setGlobalHoraires($horaires);
        }
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

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::CONTROLLER => 'onKernelController',
        ];
    }
}

