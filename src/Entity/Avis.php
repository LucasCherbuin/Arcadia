<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
#[ORM\Entity(repositoryClass: AvisRepository::class)]
class Avis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Groups(['avis:read'])]
    private ?string $pseudo = null;

    #[ORM\Column(length: 50)]
    #[Groups(['avis:read'])]
    private ?string $commentaire = null;

    #[ORM\Column]
    private ?bool $isVisible = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): static
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): static
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getisVisible(): ?bool
    {
        return $this->isVisible;
    }

    public function setisVisible(bool $isVisible): self
    {
        $this->isVisible = $isVisible;

        return $this;
    }
}
