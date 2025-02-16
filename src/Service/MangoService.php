<?php

namespace App\Service;

use App\Document\Consultation;
use Doctrine\ODM\MongoDB\DocumentManager;

class MangoService
{
    private DocumentManager $dm;

    public function __construct(DocumentManager $dm)
    {
        $this->dm = $dm;
    }

    public function incrementClick(string $animalId): int
    {
        $repo = $this->dm->getRepository(Consultation::class);
        $consultation = $repo->findOneBy(['animalId' => $animalId]);

        if (!$consultation) {
            $consultation = new Consultation($animalId);
            $this->dm->persist($consultation);
        }

        $consultation->incrementClicks();
        $this->dm->flush();

        return $consultation->getClicks();
    }

    public function getClick(string $animalId): int
    {
        $repo = $this->dm->getRepository(Consultation::class);
        $consultation = $repo->findOneBy(['animalId' => $animalId]);

        return $consultation ? $consultation->getClicks() : 0;
    }
}
