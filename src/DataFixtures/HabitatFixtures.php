<?php

namespace App\DataFixtures;

use App\Entity\Habitat;
use App\Entity\Image;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class HabitatFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 20; $i++) {
            $image = (new Image())
                ->setPath('images/' . $faker->word() . '.jpg');

            $manager->persist($image);

            $habitat = (new Habitat())
                ->setNom($faker->word())
                ->setDescription($faker->paragraph())
                ->addCommentaire($faker->string())
                ->setImage($image);

            $manager->persist($habitat);

            $this->addReference("habitat" . $i, $habitat);
        }

        $manager->flush();
    }
}

