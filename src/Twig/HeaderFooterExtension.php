<?php

// src/Twig/HeaderFooterExtension.php
namespace App\Twig;

use App\Repository\HoraireRepository;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class HeaderFooterExtension extends AbstractExtension
{
    private HoraireRepository $horaireRepository;

    public function __construct(HoraireRepository $horaireRepository)
    {
        $this->horaireRepository = $horaireRepository;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('get_horaires', [$this, 'getHoraires']),
        ];
    }

    public function getHoraires(): array
    {
        $horaires = $this->horaireRepository->findAll();

        return array_map(function ($horaire) {
            return [
                'jour' => $horaire->getJour(),
                'ouverture' => $horaire->getOuverture()->format('H:i'),
                'fermeture' => $horaire->getFermeture()->format('H:i'),
            ];
        }, $horaires);
    }
}

