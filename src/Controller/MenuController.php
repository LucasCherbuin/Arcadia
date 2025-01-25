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
        // Vérification des rôles de l'utilisateur connecté
        $user = $this->getUser();
        dump($user); // Affiche l'utilisateur
        dump($user ? $user->getRoles() : 'Utilisateur non connecté'); // Affiche les rôles de l'utilisateur

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
        // Vérification de l'utilisateur et des rôles
        $user = $this->getUser();
        dump($user);
        dump($user ? $user->getRoles() : 'Utilisateur non connecté');

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
        // Vérification de l'utilisateur et des rôles
        $user = $this->getUser();
        dump($user);
        dump($user ? $user->getRoles() : 'Utilisateur non connecté');

        if (!$this->isGranted('ROLE_VETERINAIRE')) {
            throw $this->createAccessDeniedException('Accès interdit');
        }

        return $this->render('veterinaire/veterinaire.html.twig', [
            'controller_name' => 'MenuController',
        ]);
    }
}

 