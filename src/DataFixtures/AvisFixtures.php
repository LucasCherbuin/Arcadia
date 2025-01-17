<?php

namespace App\DataFixtures;

use App\Entity\Avis;
use Faker\Factory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Exception;

class AvisFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < 20; $i++) {

        //** @var Service $service */
        $avis = (new Avis())
                ->setPseudo($faker->name())
                ->setcommentaire($faker->paragraph())
                ->setIsVisible($faker->boolean());
                                

   
        $manager->persist($avis);

        $this->addReference("avis".$i, $avis);
        }
        
        $manager->flush();
    }
}