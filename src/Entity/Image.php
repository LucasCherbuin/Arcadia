<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Image
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $path = null;

    #[ORM\OneToMany(mappedBy: 'image', targetEntity: Animal::class)]
    private $animal;

    #[ORM\OneToMany(mappedBy: 'image', targetEntity: Habitat::class)]
    private $habitat;

    #[ORM\OneToMany(mappedBy: 'image', targetEntity: Service::class)]
    private $service;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): static
    {
        $this->path = $path;
        return $this;
    }

    public function getAnimal()
    {
        return $this->animal;
    }

    public function setAnimal($animal): static
    {
        $this->animal = $animal;
        return $this;
    }

    public function getHabitat()
    {
        return $this->habitat;
    }

    public function setHabitat($habitat): static
    {
        $this->habitat = $habitat;
        return $this;
    }

    public function getService()
    {
        return $this->service;
    }

    public function setService($service): static
    {
        $this->service = $service;
        return $this;
    }
}
