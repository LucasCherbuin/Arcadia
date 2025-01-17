<?php
namespace App\Entity;

use App\Repository\RaceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RaceRepository::class)]
class Race
{
    public function __toString(): string
    {
        return $this->name ?? ''; // Remplacez `$this->name` par la propriété appropriée
    }
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $label = null;

    #[ORM\OneToMany(mappedBy: 'race', targetEntity: Animal::class)]
    private $animals;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): static
    {
        $this->label = $label;
        return $this;
    }

    public function getAnimals()
    {
        return $this->animals;
    }

    public function setAnimals($animals): static
    {
        $this->animals = $animals;
        return $this;
    }
}
