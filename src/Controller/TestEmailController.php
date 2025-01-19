<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class TestEmailController extends AbstractController
{
    #[Route('/test-mailtrap', name: 'test_mailtrap')]
    public function testMailtrap(MailerInterface $mailer)
    {
        $email = (new Email())
            ->from('zooarcadiareponse@gmail.com')
            ->to('lucas.cherbuin@gmail.com') // Remplacez par un email générique
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
