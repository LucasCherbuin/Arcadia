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

    // Création d'un nouvel employé
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

    // Affichage d'un employé
    #[Route('/{id}', name: 'app_employeeRepas_show', methods: ['GET'])]
    public function show(Employee $employee): Response
    {
        return $this->render('employee/employeeRepas/show.html.twig', [
            'employee' => $employee,
        ]);
    }

    // Modification d'un employé
    #[Route('/{id}/edit', name: 'app_employeeRepas_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Employee $employee, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EmployeeType::class, $employee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Employé mis à jour avec succès.');

            return $this->redirectToRoute('app_employeRepas_index');
        }

        return $this->render('employee/employeeRepas/edit.html.twig', [
            'form' => $form->createView(),
            'employee' => $employee,
        ]);
    }

    // Suppression d'un employé
    #[Route('/{id}/delete', name: 'app_employeeRepas_delete', methods: ['POST'])]
    public function delete(Request $request, Employee $employee, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $employee->getId(), $request->request->get('_token'))) {
            $entityManager->remove($employee);
            $entityManager->flush();

            $this->addFlash('success', 'Employé supprimé avec succès.');
        }

        return $this->redirectToRoute('app_employeeRepas_index');
    }
}
