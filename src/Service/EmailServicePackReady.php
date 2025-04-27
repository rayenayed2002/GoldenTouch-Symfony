<?php

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

class EmailServicePackReady
{
    private $mailer;
    private $senderEmail;

    public function __construct(MailerInterface $mailer, string $senderEmail)
    {
        $this->mailer = $mailer;
        $this->senderEmail = $senderEmail;
    }

    /**
     * Send an email to the client when their pack is ready.
     * @param $user
     * @param $packName
     * @param $recipientEmail
     */
    public function sendPackReadyNotification($user, $packName, $recipientEmail)
    {
        try {
            $emailBody = $this->generateEmailBody($user, $packName);

            $email = (new Email())
                ->from($this->senderEmail)
                ->to($recipientEmail)
                ->subject('Votre pack est prêt ! - GoldenTouch')
                ->html($emailBody);

            $this->mailer->send($email);
        } catch (TransportExceptionInterface $e) {
            throw new \RuntimeException(sprintf('Email failed: %s', $e->getMessage()));
        }
    }

    /**
     * Generate the email body for pack ready notification.
     * @param $user
     * @param $packName
     * @return string
     */
    private function generateEmailBody($user, $packName): string
    {
        return sprintf('
            <html>
            <head>
            <style>
                body { margin: 0; padding: 0; font-family: "Segoe UI", Roboto, Helvetica, Arial, sans-serif; color: #444; line-height: 1.6; }
                .container { max-width: 600px; margin: 20px auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; }
                .header { background-color: #f8f9fa; padding: 30px; text-align: center; border-bottom: 1px solid #e9ecef; }
                .content { padding: 30px; }
                h1 { color: #2C3E50; margin: 0 0 20px 0; font-size: 24px; }
                .details-table { width: 100%%; border-collapse: collapse; margin: 20px 0; box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
                .details-table td { padding: 15px; border-bottom: 1px solid #e9ecef; }
                .details-table td:first-child { font-weight: 600; color: #2C3E50; width: 40%%; }
                .logo { text-align: center; margin: 30px 0; }
                .footer { background-color: #f8f9fa; padding: 20px; text-align: center; font-size: 12px; color: #6c757d; }
                .highlight { color: #1ABC9C; font-weight: 600; }
            </style>
            </head>
            <body>
                <div class="container">
                    <div class="header">
                        <h2 style="color: #D4B870; margin: 0;">GoldenTouch</h2>
                        <p style="color: #6c757d; margin: 5px 0 0 0;">Votre événement, notre excellence</p>
                    </div>
                    <div class="content">
                        <h1>Bonjour %s !</h1>
                        <p>Nous avons le plaisir de vous informer que votre pack <span class="highlight">%s</span> est désormais prêt !</p>
                        <p>Vous pouvez dès à présent consulter les détails de votre pack ou nous contacter pour toute question supplémentaire.</p>
                    </div>
                    <div class="footer">
                        <p>© 2025 GoldenTouch. Tous droits réservés.</p>
                    </div>
                </div>
            </body>
            </html>',
            $user->getPrenom() ?? 'Cher Client',
            htmlspecialchars($packName)
        );
    }
}
