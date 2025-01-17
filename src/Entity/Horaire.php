<?php

namespace App\Entity;

use App\Repository\HoraireRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: HoraireRepository::class)]
class Horaire
{
    public function __toString(): string
    {
        $ouverture = $this->ouverture ? $this->ouverture->format('H:i') : 'Non défini';
        $fermeture = $this->fermeture ? $this->fermeture->format('H:i') : 'Non défini';

        return "Ouverture: $ouverture, Fermeture: $fermeture";
    }

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]  // Utiliser le type TIME
    #[Groups(['horaire:read'])]
    private ?\DateTimeInterface $ouverture = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]  // Utiliser le type TIME
    #[Groups(['horaire:read'])]
    private ?\DateTimeInterface $fermeture = null;

    #[ORM\Column(length: 10)]
    #[Groups(['horaire:read'])]
    private ?string $jour = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOuverture(): ?\DateTimeInterface
    {
        return $this->ouverture;
    }

    public function setOuverture(\DateTimeInterface $ouverture): static
    {
        $this->ouverture = $ouverture;

        return $this;
    }

    public function getFermeture(): ?\DateTimeInterface
    {
        return $this->fermeture;
    }

    public function setFermeture(\DateTimeInterface $fermeture): static
    {
        $this->fermeture = $fermeture;

        return $this;
    }

    public function getJour(): ?string
    {
        return $this->jour;
    }

    public function setJour(string $jour): static
    {
        $this->jour = $jour;

        return $this;
    }
}
