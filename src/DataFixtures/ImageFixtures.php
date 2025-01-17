<?php

namespace App\DataFixtures;

use App\Entity\Image;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ImageFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 100; $i++) {
            $image = (new Image())
                ->setPath('images/' . $faker->word() . '.jpg');

            $manager->persist($image);
            $this->addReference("image" . $i, $image);
        }

        $manager->flush();
    }
}

