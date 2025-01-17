<?php

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;

class MailerService
{
    private MailerInterface $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendEmail(
        string $from,
        string $to,
        string $subject,
        string $htmlBody = '',
        string $textBody = ''
    ): void {
        $email = (new Email())
            ->from(new Address($from))
            ->to(new Address($to))
            ->subject($subject);

        if ($htmlBody) {
            $email->html($htmlBody);
        }

        if ($textBody) {
            $email->text($textBody);
        }

        $this->mailer->send($email);
    }
}
