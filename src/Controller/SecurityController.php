<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccountStatusException;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends AbstractController
{
    #[Route(path: '/connexion', name: 'login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Redirect already logged-in users to appropriate dashboard
        if ($this->getUser()) {
            if ($this->isGranted('ROLE_ADMIN')) {
                return $this->redirectToRoute('admin_dashboard_index');
            } else {
                return $this->redirectToRoute('user_account_index');
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
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
    
    #[Route(path: '/connexion/succes', name: 'login_success')]
    public function onLoginSuccess(): Response
    {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('admin_dashboard_index');
        } else {
            return $this->redirectToRoute('user_account_index');
        }
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('admin_dashboard_index');
        } elseif ($this->isGranted('ROLE_PERSONNEL')) {
            return $this->redirectToRoute('front_home');
        } else {
            // Default redirect for clients and other roles
            return $this->redirectToRoute('front_home');
        }
    }
}
