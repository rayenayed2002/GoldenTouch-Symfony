<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ChangePasswordFormType;
use App\Form\ResetPasswordRequestFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\ResetPassword\Controller\ResetPasswordControllerTrait;
use SymfonyCasts\Bundle\ResetPassword\Exception\ResetPasswordExceptionInterface;
use SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelperInterface;
use Psr\Log\LoggerInterface;
use SymfonyCasts\Bundle\ResetPassword\Exception\TooManyPasswordRequestsException;
use SymfonyCasts\Bundle\ResetPassword\Model\ResetPasswordToken;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

#[Route('/mot-de-passe')]
class ResetPasswordController extends AbstractController
{
    use ResetPasswordControllerTrait;

    public function __construct(
        private ResetPasswordHelperInterface $resetPasswordHelper,
        private EntityManagerInterface $entityManager
    ) {
    }

    /**
     * Display & process form to request a password reset.
     */
    #[Route('', name: 'forgot_password')]
    public function request(Request $request, MailerInterface $mailer, TranslatorInterface $translator, LoggerInterface $logger): Response
    {
        $form = $this->createForm(ResetPasswordRequestFormType::class);
        $form->handleRequest($request);

        // Special parameter to force removing previous reset requests
        $forceReset = $request->query->has('force_reset');

        if ($form->isSubmitted() && $form->isValid()) {
            return $this->processSendingPasswordResetEmail(
                $form->get('email')->getData(),
                $mailer,
                $translator,
                $logger,
                $forceReset,
                $request
            );
        }

        return $this->render('security/forgot_password.html.twig', [
            'requestForm' => $form->createView(),
        ]);
    }

    /**
     * Confirmation page after a user has requested a password reset.
     */
    #[Route('/check-email', name: 'check_email')]
    public function checkEmail(): Response
    {
        try {
            // Generate a fake token if the user does not exist or someone hit this page directly.
            // This prevents exposing whether or not a user was found with the given email address or not
            if (null === ($resetToken = $this->getTokenObjectFromSession())) {
                $resetToken = $this->resetPasswordHelper->generateFakeResetToken();
            }

            return $this->render('reset_password/check_email.html.twig', [
                'resetToken' => $resetToken,
            ]);
        } catch (\Exception $e) {
            // Log and display any errors for debugging
            return new Response('Error: ' . $e->getMessage() . '<br>File: ' . $e->getFile() . '<br>Line: ' . $e->getLine());
        }
    }

    /**
     * Validates and process the reset URL that the user clicked in their email.
     */
    #[Route('/nouveau-mot-de-passe/{token}', name: 'reset_password')]
    public function resetPassword(Request $request, UserPasswordHasherInterface $passwordHasher, TranslatorInterface $translator, LoggerInterface $logger, string $token = null): Response
    {
        // Log incoming token information
        if ($token) {
            $logger->info('Received reset token in URL: ' . substr($token, 0, 5) . '...');
        } else {
            $logger->info('No token provided in URL, checking session');
            $token = $this->getTokenFromSession();
        }

        // If no token is available, redirect to forgot password
        if (null === $token) {
            $logger->error('No reset password token found in URL or session');
            $this->addFlash('reset_password_error', 'Aucun jeton de réinitialisation trouvé. Veuillez demander un nouveau lien de réinitialisation.');
            return $this->redirectToRoute('forgot_password');
        }

        try {
            // Attempt to validate the token and fetch the associated user
            $user = $this->resetPasswordHelper->validateTokenAndFetchUser($token);
            $logger->info('Token validated for user: ' . $user->getEmail());
            
            // Store the token in session for form processing
            if (!$this->getTokenFromSession()) {
                $this->storeTokenInSession($token);
                $logger->info('Token stored in session');
            }

            // Create the form for password reset
            $form = $this->createForm(ChangePasswordFormType::class);
            $form->handleRequest($request);

            // Process form submission
            if ($form->isSubmitted() && $form->isValid()) {
                $logger->info('Password reset form submitted and valid');
                
                // Remove the reset request as it should only be used once
                $this->resetPasswordHelper->removeResetRequest($token);
                $logger->info('Reset request removed');

                // Hash the new password and save it
                $encodedPassword = $passwordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                );

                $user->setPassword($encodedPassword);
                $this->entityManager->flush();
                $logger->info('New password saved for user');

                // Clean up the session
                $this->cleanSessionAfterReset();
                $logger->info('Session cleaned after reset');

                // Redirect to login with success message
                $this->addFlash('success', 'Votre mot de passe a été réinitialisé avec succès.');
                return $this->redirectToRoute('login');
            }

            // Display the form for changing password
            return $this->render('security/reset_password.html.twig', [
                'resetForm' => $form->createView(),
            ]);

        } catch (ResetPasswordExceptionInterface $e) {
            // Handle token validation errors
            $logger->error('Reset password exception: ' . $e->getReason());
            $this->addFlash('reset_password_error', sprintf(
                '%s - %s',
                $translator->trans(ResetPasswordExceptionInterface::MESSAGE_PROBLEM_VALIDATE, [], 'ResetPasswordBundle'),
                $translator->trans($e->getReason(), [], 'ResetPasswordBundle')
            ));
            return $this->redirectToRoute('forgot_password');
        } catch (\Exception $e) {
            // Handle any other errors
            $logger->error('Unexpected error in reset password: ' . $e->getMessage());
            $this->addFlash('reset_password_error', 'Une erreur inattendue s\'est produite. Veuillez réessayer ou contacter l\'administrateur.');
            return $this->redirectToRoute('forgot_password');
        }
    }

    /**
     * Force remove previous reset password requests for a user
     */
    private function removeExistingPasswordResetRequest(string $emailFormData, LoggerInterface $logger): void
    {
        try {
            $user = $this->entityManager->getRepository(User::class)->findOneBy([
                'email' => $emailFormData,
            ]);
            
            if ($user) {
                // First try using the reset password helper's method if available
                try {
                    $this->resetPasswordHelper->removeResetRequestByEmail($emailFormData);
                    $logger->info('Removed existing password reset requests using helper for user: ' . $emailFormData);
                } catch (\Exception $e) {
                    $logger->error('Error using resetPasswordHelper: ' . $e->getMessage());
                    
                    // Fallback to direct database operation if the helper fails
                    try {
                        $this->entityManager->getRepository('SymfonyCasts\Bundle\ResetPassword\Model\ResetPasswordRequestInterface')
                            ->createQueryBuilder('r')
                            ->delete()
                            ->where('r.user = :user')
                            ->setParameter('user', $user)
                            ->getQuery()
                            ->execute();
                            
                        $logger->info('Removed existing password reset requests using direct query for user: ' . $emailFormData);
                    } catch (\Exception $directError) {
                        $logger->error('Error with direct removal: ' . $directError->getMessage());
                    }
                }
            } else {
                $logger->info('No user found with email: ' . $emailFormData);
            }
        } catch (\Exception $e) {
            $logger->error('Error removing existing password reset requests: ' . $e->getMessage());
        }
    }

    private function processSendingPasswordResetEmail(
        string $emailFormData, 
        MailerInterface $mailer, 
        TranslatorInterface $translator, 
        LoggerInterface $logger,
        bool $forceReset = false,
        Request $request = null
    ): RedirectResponse {
        try {
            // If request is null, get it from the request stack
            if ($request === null) {
                $request = $this->container->get('request_stack')->getCurrentRequest();
            }
            
            $user = $this->entityManager->getRepository(User::class)->findOneBy([
                'email' => $emailFormData,
            ]);

            // Log the reset attempt for debugging
            $logger->info('Password reset requested for email: ' . $emailFormData);

            // Do not reveal whether a user account was found or not.
            if (!$user) {
                $logger->info('Password reset requested for non-existent email: ' . $emailFormData);
                return $this->redirectToRoute('check_email');
            }

            // If force reset is enabled, remove any existing reset request
            if ($forceReset) {
                $this->removeExistingPasswordResetRequest($emailFormData, $logger);
            }

            try {
                $resetToken = $this->resetPasswordHelper->generateResetToken($user);
                $logger->info('Reset token generated for user: ' . $emailFormData);
                
                // Generate the absolute URL with the correct token
                $resetUrl = $this->generateUrl(
                    'reset_password', 
                    ['token' => $resetToken->getToken()], 
                    UrlGeneratorInterface::ABSOLUTE_URL
                );
                
                // Log the generated URL
                $logger->info('Reset URL generated: ' . $resetUrl);
                
                // Validate the generated URL to ensure it's correct
                $urlParts = parse_url($resetUrl);
                $logger->info('URL path: ' . ($urlParts['path'] ?? 'not found'));
                $logger->info('URL query param: ' . ($urlParts['query'] ?? 'no query params'));
                
                // Direct debugging to confirm token
                $logger->info('Token from resetToken: ' . $resetToken->getToken());
                
                // Create a custom URL if needed (remove this in production)
                $host = $request->getSchemeAndHttpHost();
                $directUrl = $host . '/mot-de-passe/nouveau-mot-de-passe/' . $resetToken->getToken();
                $logger->info('Direct URL constructed: ' . $directUrl);
                
                // Use the same email address as configured in MAILER_DSN for consistency
                $fromEmail = 'souha.khelifi17@gmail.com';
                $fromName = 'SmartStep';
                
                // Create a well-formatted email with explicit configuration
                $email = (new TemplatedEmail())
                    ->from(new Address($fromEmail, $fromName))
                    ->to($user->getEmail())
                    ->subject('Réinitialisation de votre mot de passe')
                    ->htmlTemplate('emails/reset_password.html.twig')
                    ->context([
                        'resetToken' => $resetToken,
                        'url' => $directUrl, // Use direct URL for most reliable behavior
                        'date' => new \DateTime(),
                        'const_website_title' => 'SmartStep - Réinitialisation de mot de passe'
                    ])
                ;

                $logger->info('Attempting to send reset password email to: ' . $user->getEmail());
                
                // Send the email directly
                $mailer->send($email);
                
                $logger->info('Reset password email sent successfully');

                // Store the token object in session for retrieval in check-email route.
                $this->setTokenObjectInSession($resetToken);

                // Add a flash message for the user
                $this->addFlash('success', 'Un email a été envoyé à votre adresse email avec les instructions pour réinitialiser votre mot de passe.');
                
                return $this->redirectToRoute('check_email');
            } catch (TooManyPasswordRequestsException $e) {
                $logger->error('Too many password reset requests: ' . $e->getMessage());
                
                // Calculate remaining time before the user can make another request
                $availableAt = $e->getAvailableAt();
                $retryAfter = $e->getRetryAfter();
                $minutesRemaining = ceil($retryAfter / 60);
                
                $this->addFlash(
                    'reset_password_error',
                    sprintf(
                        'Vous avez déjà demandé un email de réinitialisation de mot de passe. Veuillez vérifier votre email ou réessayer dans %d minute(s).',
                        $minutesRemaining
                    )
                );
                
                // Add an option to force reset
                $this->addFlash(
                    'reset_password_hint',
                    sprintf(
                        '<a href="%s">Cliquez ici</a> pour forcer la création d\'une nouvelle demande de réinitialisation de mot de passe.',
                        $this->generateUrl('forgot_password', ['force_reset' => 1])
                    )
                );
                
                return $this->redirectToRoute('forgot_password');
            } catch (ResetPasswordExceptionInterface $e) {
                $logger->error('Reset password error: ' . $e->getReason() . ' - ' . $e->getMessage());
                
                // Provide feedback to the user
                $this->addFlash('reset_password_error', sprintf(
                    '%s - %s',
                    $translator->trans(ResetPasswordExceptionInterface::MESSAGE_PROBLEM_HANDLE, [], 'ResetPasswordBundle'),
                    $translator->trans($e->getReason(), [], 'ResetPasswordBundle')
                ));

                return $this->redirectToRoute('forgot_password');
            }
        } catch (\Exception $e) {
            // Log the detailed error
            $logger->error('General error in password reset: ' . $e->getMessage() . ' in ' . $e->getFile() . ' line ' . $e->getLine());
            
            // In development environment, show the detailed error
            if ($this->getParameter('kernel.environment') === 'dev') {
                return new RedirectResponse(
                    $this->generateUrl('forgot_password', [
                        'error' => $e->getMessage(),
                        'file' => $e->getFile(),
                        'line' => $e->getLine()
                    ])
                );
            }
            
            // In production, show a generic error
            $this->addFlash('reset_password_error', 'Une erreur est survenue lors de l\'envoi de l\'email. Veuillez réessayer plus tard.');
            return $this->redirectToRoute('forgot_password');
        }
    }

    /**
     * Test session functionality to diagnose issues
     */
    private function testSessionFunctionality(LoggerInterface $logger): bool
    {
        try {
            $session = $this->getSessionService();
            $testKey = 'reset_password_test_' . time();
            $testValue = 'test_' . bin2hex(random_bytes(10));
            
            // Try setting a value in the session
            $session->set($testKey, $testValue);
            $logger->info('Test value set in session: ' . $testKey . ' = ' . $testValue);
            
            // Try getting the value back
            $retrievedValue = $session->get($testKey);
            $logger->info('Test value retrieved from session: ' . $retrievedValue);
            
            // Compare values
            $result = ($testValue === $retrievedValue);
            $logger->info('Session test ' . ($result ? 'passed' : 'failed'));
            
            // Clean up
            $session->remove($testKey);
            
            return $result;
        } catch (\Exception $e) {
            $logger->error('Session test failed with exception: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * This method allows bypassing the throttling for password reset emails
     * and redirecting directly to the password reset page
     */
    #[Route('/force-reset', name: 'force_reset_password')]
    public function forceResetPassword(Request $request, MailerInterface $mailer, TranslatorInterface $translator, LoggerInterface $logger): Response
    {
        $email = $request->query->get('email');
        
        if (!$email) {
            $this->addFlash('reset_password_error', 'Adresse email manquante. Veuillez réessayer.');
            return $this->redirectToRoute('forgot_password');
        }
        
        // Find the user
        $user = $this->entityManager->getRepository(User::class)->findOneBy([
            'email' => $email,
        ]);
        
        if (!$user) {
            $logger->warning('Force reset password requested for non-existent email: ' . $email);
            $this->addFlash('reset_password_error', 'Aucun compte avec cette adresse email. Veuillez vérifier votre saisie.');
            return $this->redirectToRoute('forgot_password');
        }
        
        try {
            // Force remove any existing reset requests
            $this->removeExistingPasswordResetRequest($email, $logger);
            
            // Generate a new reset token
            $resetToken = $this->resetPasswordHelper->generateResetToken($user);
            $logger->info('Generated direct access reset token for user: ' . $email);
            
            // Generate the direct URL
            $host = $request->getSchemeAndHttpHost();
            $directUrl = $host . '/mot-de-passe/nouveau-mot-de-passe/' . $resetToken->getToken();
            $logger->info('Direct reset URL: ' . $directUrl);
            
            // Redirect directly to the reset password page
            return $this->redirect($directUrl);
        } catch (\Exception $e) {
            $logger->error('Error in direct password reset: ' . $e->getMessage());
            $this->addFlash('reset_password_error', 'Une erreur est survenue. Veuillez réessayer plus tard.');
            return $this->redirectToRoute('forgot_password');
        }
    }

    #[Route('/debug/reset-link/{email}', name: 'debug_reset_link')]
    public function debugGenerateResetLink(string $email, LoggerInterface $logger, Request $request): Response
    {
        // Only available in development environment
        if ($this->getParameter('kernel.environment') !== 'dev') {
            throw $this->createNotFoundException('Route not available in production');
        }
        
        $user = $this->entityManager->getRepository(User::class)->findOneBy([
            'email' => $email,
        ]);
        
        if (!$user) {
            return new Response('User not found: ' . $email);
        }
        
        try {
            // Remove any existing reset requests
            $this->removeExistingPasswordResetRequest($email, $logger);
            
            // Generate a new reset token
            $resetToken = $this->resetPasswordHelper->generateResetToken($user);
            
            // Generate URLs in both formats for comparison
            $standardUrl = $this->generateUrl(
                'reset_password',
                ['token' => $resetToken->getToken()],
                UrlGeneratorInterface::ABSOLUTE_URL
            );
            
            // Generate the direct URL
            $host = $request->getSchemeAndHttpHost();
            $directUrl = $host . '/mot-de-passe/nouveau-mot-de-passe/' . $resetToken->getToken();
            
            // Return debug information with both URLs for testing
            return new Response(
                '<html><body>
                    <h1>Debug Reset Password Link</h1>
                    <p>Email: ' . htmlspecialchars($email) . '</p>
                    <p>Token: ' . htmlspecialchars($resetToken->getToken()) . '</p>
                    <h2>Direct URL (Recommended)</h2>
                    <p><a href="' . htmlspecialchars($directUrl) . '">Click here to reset password</a></p>
                    <p>URL: ' . htmlspecialchars($directUrl) . '</p>
                    <h2>Standard URL</h2>
                    <p><a href="' . htmlspecialchars($standardUrl) . '">Alternative reset link</a></p>
                    <p>URL: ' . htmlspecialchars($standardUrl) . '</p>
                </body></html>'
            );
        } catch (\Exception $e) {
            return new Response('Error generating reset link: ' . $e->getMessage());
        }
    }
}
