<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

//controller de test pour les échanges d'e-mail sur le site

class TestEmailController extends AbstractController
{
    #[Route('/test-mailtrap', name: 'test_mailtrap')]
    public function testMailtrap(MailerInterface $mailer): Response
    {
        $email = (new Email())
            ->from('arcadiazoo@outlook.fr')
            ->to('lucas.cherbuin@gmail.com') 
            ->subject('Test Email')
            ->text('This is a test email sent via Mailtrap.');

        try {
            $mailer->send($email);
            return $this->json(['message' => 'Email sent successfully!']);
        } catch (\Exception $e) {
            return $this->json(['error' => $e->getMessage()]);
        }
    }
}
