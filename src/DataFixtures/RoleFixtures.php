<?php

namespace App\DataFixtures;

use App\Entity\Role;
use Faker\Factory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RoleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        
        $existingRoles = $manager->getRepository(Role::class)->findAll();
        $userRole = [["ROLE_ADMIN"], ["ROLE_VETERINAIRE"], ["ROLE_EMPLOYEE"]];

        if (count($existingRoles) < 100) {
            for ($i = 0; $i < 20; $i++) {
                // Utilisez randomElements pour récupérer un tableau aléatoire de rôles
                $roles = $faker->randomElements($userRole, $faker->numberBetween(1, 3)); // tableau de 1 à 3 rôles

                // Concaténer le tableau en une chaîne séparée par des virgules
                $roleLabel = implode(',', $roles); // Crée une chaîne comme 'ROLE_USER,ROLE_ADMIN'

                // Passer la chaîne à setLabel
                $role = (new Role())
                    ->setRole($roleLabel);  // Maintenant, on passe une chaîne à setLabel()

                $manager->persist($role);
            
                // Ajout d'une référence pour chaque rôle
                $this->addReference("Role".$i, $role);
            }
        }
    
        $manager->flush();
    }
}
