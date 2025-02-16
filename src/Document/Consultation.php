<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

//entité nosql
#[ODM\Document]
class Consultation
{
    #[ODM\Id]
    private ?string $id = null;

    #[ODM\Field(type: "string")]
    private string $animalId;

    #[ODM\Field(type: "int")]
    private int $clicks = 0;

    public function __construct(string $animalId)
    {
        $this->animalId = $animalId;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getAnimalId(): string
    {
        return $this->animalId;
    }

    public function getClicks(): int
    {
        return $this->clicks;
    }

    public function incrementClicks(): void
    {
        $this->clicks++;
    }
}
