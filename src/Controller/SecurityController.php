<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SecurityController extends AbstractController
{
    //page de connexion
    
    #[Route('/login', name: 'app_login')]
public function login(AuthenticationUtils $authenticationUtils): Response
{
    if ($this->getUser()) {
        // Rediriger en fonction du rôle
        if ($this->isGranted('ROLE_ADMIN')) {
            return new RedirectResponse($this->generateUrl('admin_menu'));
        }
        if ($this->isGranted('ROLE_EMPLOYEE')) {
            return new RedirectResponse($this->generateUrl('employee_menu'));
        }
        if ($this->isGranted('ROLE_VETERINAIRE')) {
            return new RedirectResponse($this->generateUrl('veterinaire_menu'));
        }
    }

    return $this->render('security/login.html.twig', [
        'last_username' => $authenticationUtils->getLastUsername(),
        'error' => $authenticationUtils->getLastAuthenticationError(),
    ]);
}


    //déconnexion de l'utilisateur
    #[Route('/logout', name: 'app_logout', methods: ['GET'])]
    public function logout(): void
    {
        // Cette méthode sera interceptée par le système de déconnexion de Symfony
        throw new \LogicException('This method will be intercepted by the logout key on your firewall.');
    }
}
