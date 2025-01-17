<?php

namespace App\DataFixtures;

use App\Entity\Race;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class RaceFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 20; $i++) {
            $race = (new Race())
                ->setLabel($faker->word());

            $manager->persist($race);
            $this->addReference("race" . $i, $race);
        }

        $manager->flush();
    }
}
