<?php
// email_test.php - A simple script to test email sending

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Mailer;

// Load environment variables
$dotenv = new Dotenv();
$dotenv->loadEnv(__DIR__.'/.env');

// Get the DSN from environment variables
$dsn = $_ENV['MAILER_DSN'];
echo "Using DSN: " . $dsn . PHP_EOL;

try {
    // Create a transport
    $transport = Transport::fromDsn($dsn);
    
    // Create a mailer
    $mailer = new Mailer($transport);
    
    // Create an email
    $email = (new Email())
        ->from('souha.khelifi17@gmail.com')
        ->to('souha.khelifi17@gmail.com') // Send to the same account for testing
        ->subject('Test email from Symfony')
        ->text('This is a test email to verify that mail sending works correctly.')
        ->html('<p>This is a test email to verify that mail sending works correctly.</p>');
    
    // Send the email
    $mailer->send($email);
    
    echo "Email sent successfully!" . PHP_EOL;
} catch (\Exception $e) {
    echo "Error sending email: " . $e->getMessage() . PHP_EOL;
    echo "Stack trace: " . $e->getTraceAsString() . PHP_EOL;
} 