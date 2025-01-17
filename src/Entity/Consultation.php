<?php


namespace App\Entity;

use App\Repository\ConsultationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ConsultationRepository::class)]
class Consultation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Groups(['consultation:read'])]
    private ?int $clique = 0;

    private ?Animal $animal = null;

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getClique(): ?int
    {
        return $this->clique;
    }

    public function setClique(): self
    {
        $this->clique++;
        return $this;
    }

    public function getAnimal(): ?Animal
    {
        return $this->animal;
    }

    public function setAnimal(?Animal $animal): self
    {
        $this->animal = $animal;
        return $this;
    }

    public function incrementationClique(): self
    {
        $this->clique++;
        return $this;
    }
}
