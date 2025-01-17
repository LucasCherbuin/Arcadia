<?php

namespace App\DataFixtures;

use App\Entity\Veterinaire;
use App\DataFixtures\AnimalFixtures;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class VeterinaireFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $passwordHasher)
    {
    }

    /** @throws Exception */
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        $animalCount = 100;

        for ($i = 1; $i <= 20; $i++) {
            $animalReferenceIndex = rand(1, $animalCount);
            $animalReference = "animal" . $animalReferenceIndex;

            // Vérifiez si la référence existe
            if ($this->hasReference($animalReference)) {
                // Utilisez getReference pour récupérer l'objet Animal
                $animal = $this->getReference($animalReference);

                $veterinaire = (new Veterinaire())
                    ->setAnimal($animal)  // Passez l'objet Animal ici
                    ->setDate(new DateTimeImmutable())
                    ->setDetail($faker->text());

                $manager->persist($veterinaire);
                $this->addReference("veterinaire" . $i, $veterinaire);
            } else {
                // Si la référence n'existe pas, continuez à la suivante
                continue;
            }
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            AnimalFixtures::class,
        ];
    }
}
