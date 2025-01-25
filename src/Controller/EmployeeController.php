<?php

namespace App\Controller;

use App\Entity\Employee;
use App\Form\EmployeeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/employee')]
class EmployeeController extends AbstractController
{

    // Création d'une fiche de repas par l'employe.e
    #[Route('/new', name: 'app_employeeRepas_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $employee = new Employee();
        $form = $this->createForm(EmployeeType::class, $employee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($employee);
            $entityManager->flush();

            $this->addFlash('success', 'Employé ajouté avec succès.');

            return $this->redirectToRoute('employee_menu');
        }

        return $this->render('employee/employeeRepas/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
 
}
