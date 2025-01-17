<?php

namespace App\Tests\Controller;

use App\Controller\PagesController;
use App\Entity\Animal;
use App\Repository\AnimalRepository;
use App\Repository\HabitatRepository;
use App\Repository\ServiceRepository;
use App\Repository\AvisRepository;
use Doctrine\ORM\EntityManagerInterface;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Twig\Environment;

class PagesControllerTest extends TestCase
{
    public function testAccueil(): void
    {
        // Simuler les dépendances
        $entityManager = $this->createMock(EntityManagerInterface::class);
        $normalizer = $this->createMock(NormalizerInterface::class);

        $animalRepository = $this->createMock(AnimalRepository::class);
        $habitatRepository = $this->createMock(HabitatRepository::class);
        $serviceRepository = $this->createMock(ServiceRepository::class);
        $avisRepository = $this->createMock(AvisRepository::class);

        // Simuler les données renvoyées par les repositories
        $animalRepository->method('findAll')->willReturn([
            (new Animal())->setPrenom('Léo')->setId(1), // Simule un animal
        ]);
        $habitatRepository->method('findAll')->willReturn([]);
        $serviceRepository->method('findAll')->willReturn([]);
        $avisRepository->method('findAll')->willReturn([]);

        // Instancier le contrôleur
        $controller = new PagesController($entityManager, $normalizer);

        // Simuler la requête
        $request = new Request();

        // Appeler la méthode et récupérer la réponse
        $response = $controller->accueil(
            $entityManager,
            $animalRepository,
            $habitatRepository,
            $serviceRepository,
            $avisRepository,
            $request
        );

        // Assertions sur la réponse
        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(200, $response->getStatusCode());
        $this->assertStringContainsString('Léo', $response->getContent());
    }
}
