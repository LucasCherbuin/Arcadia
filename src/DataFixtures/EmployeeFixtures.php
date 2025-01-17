<?php

namespace App\DataFixtures;

use App\Entity\Employee;
use DateTime;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Exception;

class EmployeeFixtures extends Fixture
{
    /** @throws Exception */
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 20; $i++) {
            $employee = (new Employee())
                ->setNourriture($faker->word())
                ->setQuantite($faker->randomNumber())
                ->setDate(new DateTimeImmutable());

                
            $manager->persist($employee);
            $this->addReference("employee". $i, $employee);
        }
        $manager->flush();
    }

    public function getDepenencies(): array
    {
        return [
            RaceFixtures::class,
            ImageFixtures::class,
            HabitatFixtures::class,
        ];
    }
}