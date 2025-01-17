<?php

namespace App\DataFixtures;

use App\Entity\Horaire;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class HoraireFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();


        for ($i = 0; $i < 20; $i++) {
            $horaire = (new Horaire())
                ->setJour($faker->word())
                ->setOuverture($faker->dateTime())
                ->setFermeture($faker->dateTime());


            $manager->persist($horaire);


            $this->addReference("habitat" . ($i + 1), $horaire);
        }

        $manager->flush();
    }
}
