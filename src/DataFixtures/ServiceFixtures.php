<?php

namespace App\DataFixtures;

use App\Entity\Service;
use App\Entity\Image;
use Faker\Factory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Exception;

class ServiceFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < 20; $i++) {

        $image = (new Image())
            ->setPath($faker->imageUrl(640, 480, 'nature'));
        //** @var Service $service */
        $service = (new Service())
                ->setNom($faker->name())
                ->setDescription($faker->paragraph());
                                

        $manager->persist($image);
        $manager->persist($service);

        $this->addReference("Service".$i, $service);
        }
        
        $manager->flush();
    }
}