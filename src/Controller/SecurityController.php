<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccountStatusException;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/connexion', name: 'login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Redirect already logged-in users to appropriate dashboard
        if ($this->getUser()) {
            if ($this->isGranted('ROLE_ADMIN')) {
                return $this->redirectToRoute('app_accueil');
            } else {
                return $this->redirectToRoute('app_accueil');
            }
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        if ($error && $error instanceof AccountStatusException) {
            $errorMessage = 'Votre compte est désactivé. Contactez l\'administrateur.';
        } else {
            $errorMessage = $error ? $error->getMessage() : null;
        }
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $errorMessage
        ]);
    }

    #[Route(path: '/deconnexion', name: 'logout')]
    public function logout(): Response  // Change return type from `void` to `Response`
    {
        // Manually redirect after logout (less clean than security.yaml config)
        return $this->redirectToRoute('login');
    }
    
    #[Route(path: '/connexion/succes', name: 'login_success')]
    public function onLoginSuccess(): Response
    {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('app_accueil');
        } else {
            return $this->redirectToRoute('app_accueil');
        }
    }
}
