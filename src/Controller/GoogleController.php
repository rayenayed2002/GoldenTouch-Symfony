<?php

namespace App\Controller;

use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GoogleController extends AbstractController
{
    /**
     * Link to this controller to start the "connect" process
     */
    #[Route('/connect/google', name: 'connect_google')]
    public function connectAction(ClientRegistry $clientRegistry, Request $request): Response
    {
        // For debugging: let's see the exact redirect URL
        $redirectUrl = $request->getSchemeAndHttpHost() . '/connect/google/check';
        
        // Uncomment this to debug the redirect URL
        // return new Response('Redirect URL: ' . $redirectUrl);
        
        // will redirect to Google!
        return $clientRegistry
            ->getClient('google') // key used in config/packages/knpu_oauth2_client.yaml
            ->redirect([
                'profile', 'email' // the scopes you want to access
            ]);
    }

    /**
     * After going to Google, you're redirected back here
     * because this is the "redirect_route" you configured
     * in config/packages/knpu_oauth2_client.yaml
     */
    #[Route('/connect/google/check', name: 'connect_google_check')]
    public function connectCheckAction(Request $request, ClientRegistry $clientRegistry): Response
    {
        // This method will not be executed, as the authenticator will handle the request
        return new Response('Should not be reached');
    }
} 