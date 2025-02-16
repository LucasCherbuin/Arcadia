<?php

namespace App\Tests\Controller;

use App\Controller\DashboardController;
use App\Repository\AnimalRepository;
use App\Repository\EmployeeRepository;
use App\Repository\ConsultationRepository;
use App\Repository\VeterinaireRepository;
use App\Repository\CommentaireRepository;
use App\Service\MangoService;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class DashboardControllerTest extends WebTestCase
{
    private $animalRepositoryMock;
    private $employeeRepositoryMock;
    private $consultationRepositoryMock;
    private $veterinaireRepositoryMock;
    private $commentaireRepositoryMock;
    private $mangoServiceMock;

    protected function setUp(): void
    {
        $this->animalRepositoryMock = $this->createMock(AnimalRepository::class);
        $this->employeeRepositoryMock = $this->createMock(EmployeeRepository::class);
        $this->consultationRepositoryMock = $this->createMock(ConsultationRepository::class);
        $this->veterinaireRepositoryMock = $this->createMock(VeterinaireRepository::class);
        $this->commentaireRepositoryMock = $this->createMock(CommentaireRepository::class);
        $this->mangoServiceMock = $this->createMock(MangoService::class);
    }

    public function testConsultation(): void
    {
        $animal = (object) ['id' => 1, 'prenom' => 'Lion'];
        $this->animalRepositoryMock
            ->method('findAll')
            ->willReturn([$animal]);

        $this->mangoServiceMock
            ->method('getClick')
            ->with('animal:click:1')
            ->willReturn(5);

        $controller = new DashboardController(
            $this->veterinaireRepositoryMock,
            $this->consultationRepositoryMock,
            $this->animalRepositoryMock,
            $this->employeeRepositoryMock,
            $this->commentaireRepositoryMock,
            $this->mangoServiceMock
        );

        $response = $controller->consultation();
        $this->assertInstanceOf(Response::class, $response);
        $this->assertStringContainsString('Lion', $response->getContent());
        $this->assertStringContainsString('5', $response->getContent());
    }

    public function testDashboardAnimal(): void
    {
        $animal = (object) ['prenom' => 'Elephant', 'race' => 'African'];
        $employee = (object) [
            'nourriture' => 'Herbe',
            'quantite' => 100,
            'date' => new \DateTime('2025-01-01'),
            'utilisateur' => 'John Doe',
        ];

        $this->animalRepositoryMock
            ->method('findAll')
            ->willReturn([$animal]);

        $this->employeeRepositoryMock
            ->method('findAll')
            ->willReturn([$employee]);

        $controller = new DashboardController(
            $this->veterinaireRepositoryMock,
            $this->consultationRepositoryMock,
            $this->animalRepositoryMock,
            $this->employeeRepositoryMock,
            $this->commentaireRepositoryMock,
            $this->mangoServiceMock
        );

        $response = $controller->dashboardAnimal();
        $this->assertInstanceOf(Response::class, $response);
        $this->assertStringContainsString('Elephant', $response->getContent());
        $this->assertStringContainsString('Herbe', $response->getContent());
    }

    public function testCompteRendu(): void
    {
        $veterinaire = (object) [
            'id' => 1,
            'animal' => 'Tiger',
            'date' => new \DateTime('2025-01-01'),
            'detail' => 'Checkup',
            'utilisateur' => 'John Doe',
        ];

        $commentaire = (object) [
            'id' => 1,
            'habitat' => 'Savane',
            'commentaire' => 'Very clean',
            'utilisateur' => 'Jane Doe',
        ];

        $this->veterinaireRepositoryMock
            ->method('findAll')
            ->willReturn([$veterinaire]);

        $this->commentaireRepositoryMock
            ->method('findAll')
            ->willReturn([$commentaire]);

        $controller = new DashboardController(
            $this->veterinaireRepositoryMock,
            $this->consultationRepositoryMock,
            $this->animalRepositoryMock,
            $this->employeeRepositoryMock,
            $this->commentaireRepositoryMock,
            $this->mangoServiceMock
        );

        $response = $controller->compteRendu();
        $this->assertInstanceOf(Response::class, $response);
        $this->assertStringContainsString('Tiger', $response->getContent());
        $this->assertStringContainsString('Very clean', $response->getContent());
    }
}
