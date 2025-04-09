<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    #[Route('/', name: 'front_index')]
    public function index(): Response
    {
        return $this->render('Front/index.html');
    }

    #[Route('/about', name: 'front_about')]
    public function about(): Response
    {
        return $this->render('Front/about.html');
    }

    #[Route('/blog', name: 'front_blog')]
    public function blog(): Response
    {
        return $this->render('Front/blog.html');
    }

    #[Route('/blog-details', name: 'front_blog_details')]
    public function blogDetails(): Response
    {
        return $this->render('Front/blog-details.html');
    }

    #[Route('/booking', name: 'front_booking')]
    public function booking(): Response
    {
        return $this->render('Front/booking.html');
    }

    #[Route('/cart', name: 'front_cart')]
    public function cart(): Response
    {
        return $this->render('Front/cart.html');
    }

    #[Route('/checkout', name: 'front_checkout')]
    public function checkout(): Response
    {
        return $this->render('Front/checkout.html');
    }

    #[Route('/contact', name: 'front_contact')]
    public function contact(): Response
    {
        return $this->render('Front/contact.html');
    }

    #[Route('/faq', name: 'front_faq')]
    public function faq(): Response
    {
        return $this->render('Front/faq.html');
    }

    #[Route('/service', name: 'front_service')]
    public function service(): Response
    {
        return $this->render('Front/service.html');
    }

    #[Route('/service-details', name: 'front_service_details')]
    public function serviceDetails(): Response
    {
        return $this->render('Front/service-details.html');
    }

    #[Route('/shop', name: 'front_shop')]
    public function shop(): Response
    {
        return $this->render('Front/shop.html');
    }

    #[Route('/shop-details', name: 'front_shop_details')]
    public function shopDetails(): Response
    {
        return $this->render('Front/shop-details.html');
    }

    #[Route('/taxi', name: 'front_taxi')]
    public function taxi(): Response
    {
        return $this->render('Front/taxi.html');
    }

    #[Route('/taxi-details', name: 'front_taxi_details')]
    public function taxiDetails(): Response
    {
        return $this->render('Front/taxi-details.html');
    }

    #[Route('/team', name: 'front_team')]
    public function team(): Response
    {
        return $this->render('Front/team.html');
    }

    #[Route('/team-details', name: 'front_team_details')]
    public function teamDetails(): Response
    {
        return $this->render('Front/team-details.html');
    }

    #[Route('/wishlist', name: 'front_wishlist')]
    public function wishlist(): Response
    {
        return $this->render('Front/wishlist.html');
    }

    #[Route('/error', name: 'front_error')]
    public function error(): Response
    {
        return $this->render('Front/error.html');
    }
}