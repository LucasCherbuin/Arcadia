<?php

namespace App\DataFixtures;

use App\Entity\Utilisateur;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Exception;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UtilisateurFixtures extends Fixture
    {
        public function __construct(private UserPasswordHasherInterface $passwordHasher)
        {
        }

        /** @throws Exception */
        public function load(ObjectManager $manager): void
        {
            $faker = Factory::create();

                for ($i = 1; $i <= 20; $i++) {
                    $utilisateur = (new Utilisateur())
                    ->setEmail($faker->email());

                $utilisateur->setPassword($this->passwordHasher->hashPassword($utilisateur, 'password' . $i));

                $manager->persist($utilisateur);
            }
            $manager->flush();
        }
        public function getDependencies(): array
        {
            return [UtilisateurFixtures::class,
                ];
                
        }
    }
