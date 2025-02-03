<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController

// menu de l'adminisitaratieur
{
    #[Route('/admin', name: 'admin_menu')]
    public function admin(): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException('Accès interdit');
        }

        return $this->render('admin/admin.html.twig', [
            'controller_name' => 'MenuController',
        ]);
    }

    // menu de l'employe.e
    #[Route('/employee', name: 'employee_menu')]
    public function employee(): Response
    {


        if (!$this->isGranted('ROLE_EMPLOYEE')) {
            throw $this->createAccessDeniedException('Accès interdit');
        }

        return $this->render('employee/employee.html.twig', [
            'controller_name' => 'MenuController',
        ]);
    }

    //menu du vétérinaire
    
    #[Route('/veterinaire', name: 'veterinaire_menu')]
    public function veterinaire(): Response
    {


        if (!$this->isGranted('ROLE_VETERINAIRE')) {
            throw $this->createAccessDeniedException('Accès interdit');
        }

        return $this->render('veterinaire/veterinaire.html.twig', [
            'controller_name' => 'MenuController',
        ]);
    }
}

 