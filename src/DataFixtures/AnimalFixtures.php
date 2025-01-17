<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AnimalFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 20; $i++) {
            // Utilisation des références avec un seul argument
            $race = $this->getReference("race" . mt_rand(1, 20)); 
            $habitat = $this->getReference("habitat" . mt_rand(1, 20));
            $image = $this->getReference("image" . mt_rand(1, 100));
        
            if (!$race || !$habitat || !$image) {
                throw new \LogicException("Reference missing for race, habitat, or image.");
            }
        
            $animal = (new Animal())
                ->setPrenom($faker->firstName())
                ->setEtat($faker->word())
                ->setRace($race)  // Assurez-vous de passer un seul argument
                ->setHabitat($habitat)  // Assurez-vous de passer un seul argument
                ->setImage($image);  // Assurez-vous de passer un seul argument
        
            $manager->persist($animal);
        }
        
        
        

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            RaceFixtures::class,
            HabitatFixtures::class,
            ImageFixtures::class,
        ];
    }
}
