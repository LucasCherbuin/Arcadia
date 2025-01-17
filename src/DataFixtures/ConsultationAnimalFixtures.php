<?php

namespace App\DataFixtures;

use App\Entity\ConsultationAnimal;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Exception;
use Faker\Factory;

class ConsultationFixtures extends Fixture
{
    /** @throws Exception */
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 20; $i++) {
            $consultationAnimal = (new Consultation())
                ->setPrenom($faker->firstName())
                ->setNombresClique($faker->numberBetween(0, 100));
 
            $manager->persist($consultationAnimal);
            $this->addReference("consultationAnimal". $i, $consultation);
        }
        $manager->flush();
    }
}