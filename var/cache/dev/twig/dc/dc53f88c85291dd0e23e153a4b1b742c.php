<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* pack/reserver_pack.html.twig */
class __TwigTemplate_aef951475b04cbf483fcf81fa3f75b05 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pack/reserver_pack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pack/reserver_pack.html.twig"));

        // line 1
        yield "<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Taxiar - Online Taxi Service HTML Template - Pack Reservation</title>
    <meta name=\"author\" content=\"Taxiar\">
    <meta name=\"description\" content=\"Taxiar - Online Taxi Service HTML Template\">
    <meta name=\"keywords\" content=\"Taxiar - Online Taxi Service HTML Template\">
    <meta name=\"robots\" content=\"INDEX,FOLLOW\">

    <!-- Mobile Specific Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-57x57.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-60x60.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-72x72.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-76x76.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-114x114.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-120x120.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-144x144.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-152x152.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-180x180.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/android-icon-192x192.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/favicon-32x32.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/favicon-96x96.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/favicon-16x16.png"), "html", null, true);
        yield "\">
    <link rel=\"manifest\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/manifest.json"), "html", null, true);
        yield "\">
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/ms-icon-144x144.png"), "html", null, true);
        yield "\">
    <meta name=\"theme-color\" content=\"#ffffff\">

    <!--==============================
\t  Google Fonts
\t============================== -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Radio+Canada:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

    <!--==============================
\t    All CSS File
\t============================== -->
    <link rel=\"stylesheet\" href=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/bootstrap.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/fontawesome.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/magnific-popup.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/slick.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/jquery.datetimepicker.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/style.css"), "html", null, true);
        yield "\">

</head>

<body class=\"\">

    <!--[if lte IE 9]>
    \t<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!--********************************
   \t\tCode Start From Here 
\t******************************** -->

    <!--==============================
    preloader
    ============================== -->
    <div class=\"preloader\">
        <button class=\"th-btn style3 preloaderCls\">Cancel Preloader </button>
        <div class=\"preloader-inner\">
            <div class=\"loading-window\">
                <div class=\"car\">
                    <div class=\"strike\"></div>
                    <div class=\"strike strike2\"></div>
                    <div class=\"strike strike3\"></div>
                    <div class=\"strike strike4\"></div>
                    <div class=\"strike strike5\"></div>
                    <div class=\"car-detail spoiler\"></div>
                    <div class=\"car-detail back\"></div>
                    <div class=\"car-detail center\"></div>
                    <div class=\"car-detail center1\"></div>
                    <div class=\"car-detail front\"></div>
                    <div class=\"car-detail wheel\"></div>
                    <div class=\"car-detail wheel wheel2\"></div>
                </div>
            </div>
        </div>
    </div> 

    <!--==============================
    Mobile Menu
    ============================== -->
    <div class=\"th-menu-wrapper\">
        <div class=\"th-menu-area text-center\">
            <button class=\"th-menu-toggle \"><i class=\"fal fa-times\"></i></button>
            <div class=\"mobile-logo\">
                <a href=\"index.html\"><img src=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo.svg"), "html", null, true);
        yield "\" alt=\"Taxiar\"></a>
            </div>
            <div class=\"th-mobile-menu\">
                <ul>
                    <li class=\"menu-item-has-children\">
                        <a href=\"index.html\">Home</a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"index.html\">Home One </a></li>
                            <li><a href=\"index-2.html\">Home Two </a></li>
                            <li><a href=\"index-3.html\">Home Three </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"about.html\">About Us</a>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <a href=\"#\">Service</a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"service.html\">Service</a></li>
                            <li><a href=\"service-details.html\">Service Details</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <a href=\"#\">Blog</a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"blog.html\">Blog</a></li>
                            <li><a href=\"blog-details.html\">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <a href=\"#\">Pages</a>
                        <ul class=\"sub-menu\">
                            <li class=\"menu-item-has-children\"><a href=\"#\">Shop</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"shop.html\">Shop</a></li>
                                    <li><a href=\"shop-details.html\">Shop Details</a></li>
                                    <li><a href=\"cart.html\">Cart Page</a></li>
                                    <li><a href=\"checkout.html\">Checkout</a></li>
                                    <li><a href=\"wishlist.html\">Wishlist</a></li>
                                </ul>
                            </li>
                            <li><a href=\"team.html\">Driver</a></li>
                            <li><a href=\"team-details.html\">Driver Details</a></li>
                            <li><a href=\"taxi.html\">Taxi</a></li>
                            <li><a href=\"taxi-details.html\">Taxi Details</a></li>
                            <li><a href=\"booking.html\">Booking Ride</a></li>
                            <li><a href=\"faq.html\">Faq</a></li>
                            <li><a href=\"error.html\">Error</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"contact.html\">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <!--==============================
    Sidemenu
    ============================== -->
    <div class=\"sidemenu-wrapper shopping-cart d-none d-lg-block\">
        <div class=\"sidemenu-content\">
            <button class=\"closeButton sideMenuCls\"><i class=\"far fa-times\"></i></button>
            <div class=\"widget woocommerce widget_shopping_cart\">
                <h3 class=\"widget_title\">Shopping cart</h3>
                <div class=\"widget_shopping_cart_content\">
                    <ul class=\"woocommerce-mini-cart cart_list product_list_widget\">
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/product/product_thumb_1_1.jpg"), "html", null, true);
        yield "\" alt=\"Cart Image\">Suspension-Coil</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>94</span>,
                            </span>
                        </li>
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/product/product_thumb_1_2.jpg"), "html", null, true);
        yield "\" alt=\"Cart Image\">absorbers Brake</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>89</span>
                            </span>
                        </li>
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/product/product_thumb_1_3.jpg"), "html", null, true);
        yield "\" alt=\"Cart Image\">Motorcycle-Shock</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>75</span>
                            </span>
                        </li>
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/product/product_thumb_1_4.jpg"), "html", null, true);
        yield "\" alt=\"Cart Image\">Body Spring</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>72</span>
                            </span>
                        </li>
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/product/product_thumb_1_5.jpg"), "html", null, true);
        yield "\" alt=\"Cart Image\">Body Spring</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>81</span>
                            </span>
                        </li>
                    </ul>
                    <p class=\"woocommerce-mini-cart__total total\">
                        <strong>Subtotal:</strong>
                        <span class=\"woocommerce-Price-amount amount\">
                            <span class=\"woocommerce-Price-currencySymbol\">\$</span>318.00</span>
                    </p>
                    <p class=\"woocommerce-mini-cart__buttons buttons\">
                        <a href=\"cart.html\" class=\"th-btn style1 wc-forward\">View cart</a>
                        <a href=\"checkout.html\" class=\"th-btn style1 checkout wc-forward\">Checkout</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <!--==============================
    Sidemenu
    ============================== -->
    <div class=\"sidemenu-wrapper d-none d-lg-block\">
        <div class=\"sidemenu-content bg-title\">
            <button class=\"closeButton sideMenuCls\"><i class=\"far fa-times\"></i></button>
            <div class=\"widget footer-widget\">
                <h3 class=\"widget_title\">About Company</h3>
                <div class=\"th-widget-about\">
                    <p class=\"footer-text\">Centric aplications productize before front end vortals visualize front end is results and value added</p>
                    <h4 class=\"footer-info-title\">WE ARE AVAILABLE</h4>
                    <p class=\"footer-text\">Mon-Sat: 09.00 am to 6.30 pm</p>
                    <a href=\"contact.html\" class=\"th-btn style3\"><span class=\"btn-text\">Contact Us</span></a>
                </div>
            </div>
            <div class=\"widget footer-widget\">
                <h3 class=\"widget_title\">Recent Posts</h3>
                <div class=\"recent-post-wrap\">
                    <div class=\"recent-post\">
                        <div class=\"media-img\">
                            <a href=\"blog-details.html\"><img src=\"";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog/recent-post-1-2.jpg"), "html", null, true);
        yield "\" alt=\"Blog Image\"></a>
                        </div>
                        <div class=\"media-body\">
                            <div class=\"recent-post-meta\">
                                <a href=\"blog.html\"><i class=\"far fa-calendar-days\"></i>22th May, 2023</a>
                            </div>
                            <h4 class=\"post-title\"><a class=\"text-inherit\" href=\"blog-details.html\">How To Start Car Engine Faster</a></h4>
                            <a class=\"line-btn\" href=\"blog.html\">Read More<i class=\"fa-regular fa-arrow-right\"></i></a>
                        </div>
                    </div>
                    <div class=\"recent-post\">
                        <div class=\"media-img\">
                            <a href=\"blog-details.html\"><img src=\"";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog/recent-post-1-3.jpg"), "html", null, true);
        yield "\" alt=\"Blog Image\"></a>
                        </div>
                        <div class=\"media-body\">
                            <div class=\"recent-post-meta\">
                                <a href=\"blog.html\"><i class=\"far fa-calendar-days\"></i>25th May, 2023</a>
                            </div>
                            <h4 class=\"post-title\"><a class=\"text-inherit\" href=\"blog-details.html\">How to start car engine slowly</a></h4>
                            <a class=\"line-btn\" href=\"blog.html\">Read More<i class=\"fa-regular fa-arrow-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"widget footer-widget\">
                <h4 class=\"widget_title\">Get Newsletter</h4>
                <div class=\"newsletter-widget\">
                    <p class=\"md-20\">Sign up today for hints, tips & latest car overview and news</p>
                    <form class=\"newsletter-form\">
                        <input class=\"form-control\" type=\"email\" placeholder=\"Email Address\" required=\"\">
                        <button type=\"submit\" class=\"newsletter-btn\"><i class=\"fas fa-envelope\"></i></button>
                    </form>
                    <div class=\"th-social style2\">
                        <a target=\"_blank\" href=\"https://facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                        <a target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                        <a target=\"_blank\" href=\"https://linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"popup-search-box d-none d-lg-block\">
        <button class=\"searchClose\"><i class=\"fal fa-times\"></i></button>
        <form action=\"#\">
            <input type=\"text\" placeholder=\"What are you looking for\">
            <button type=\"submit\"><i class=\"fal fa-search\"></i></button>
        </form>
    </div>

    <!--============================== 
\tHeader Area
    ==============================-->
     <header class=\"th-header header-layout7\">
        <div class=\"header-top\">
            <div class=\"container\">
                <div class=\"row justify-content-center justify-content-md-between align-items-center gy-2\">
                    <div class=\"col-auto d-none d-md-block\">
                        <div class=\"header-links\">
                            <ul>
                                <li><i class=\"fa-thin fa-envelope\"></i><a
                                        href=\"mailto:GoldenTouch@gmail.com\">GoldenTouch@gmail.com</a>
                                </li>
                                <li><i class=\"fa-thin fa-phone\"></i><a href=\"tel:+468254762443\">(+468) 254 762 443</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-auto\">
                        <div class=\"header-right\">
                            <div class=\"langauge\">
                                <select class=\"form-select nice-select\">
                                    <option selected=\"\">English</option>
                                    <option>Hindi</option>
                                </select>
                            </div>
                            <div class=\"header-social\">
                                <span class=\"social-title\">Follow Us On:</span>
                                <a href=\"https://www.facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"https://www.twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"https://www.linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                <a href=\"https://www.instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                                <a href=\"https://www.youtube.com/\"><i class=\"fa-brands fa-youtube\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class=\"sticky-wrapper\">
    <div class=\"menu-area\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-between\">
                <div class=\"col-auto\">
                    <div class=\"header-logo\">
<img src=\"";
        // line 336
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo44.png"), "html", null, true);
        yield "\" alt=\"GoldenTouch\" style=\"height: 130px;\">
                    </div>
                </div>
                <div class=\"col-auto me-xl-auto\">
                    <nav class=\"main-menu d-none d-lg-block\">
                        <ul>
                            <li>
                                <a href=\"index.html\">Pack</a>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\">Event Planner</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"#\">Ajout Event</a></li>
                                    <li><a href=\"#\">Liste Event</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\">Materielles</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"#\">Ajout Materielles</a></li>
                                    <li><a href=\"#\">Liste Materielles</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\">Personnel</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"#\">Ajout Personnel</a></li>
                                    <li><a href=\"#\">Liste Personnel</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\">Lieu</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"#\">Ajout Lieu</a></li>
                                    <li><a href=\"#\">Liste Lieu</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\">Autre</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"#\">Commandes</a></li>
                                    <li><a href=\"#\">Reclamation</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <button class=\"th-menu-toggle d-inline-block d-lg-none\"><i class=\"far fa-bars\"></i></button>
                </div>
                <div class=\"col-auto d-none d-xl-block\">
                    <div class=\"header-button\">
                        <button type=\"button\" class=\"icon-btn searchBoxToggler\"><i class=\"far fa-search\"></i></button>
                        <a href=\"#\" class=\"icon-btn sideMenuToggler2\"><i class=\"fa-regular fa-bag-shopping\"></i>
                            <span class=\"badge\">5</span></a>
                        <a href=\"#\" class=\"icon-btn sideMenuToggler\"><i class=\"far fa-bars\"></i></a>
                        <a href=\"booking.html\" class=\"th-btn\">BOOK A TAXI<i class=\"fa-regular fa-arrow-right ms-2\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"logo-shape\"><img src=\"";
        // line 397
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo-shape.svg"), "html", null, true);
        yield "\" alt=\"\"></div>
    </header>


    <!--==============================
    Breadcumb
    ============================== -->
    <div class=\"breadcumb-wrapper \" data-bg-src=\"assets/img/breadcumb/breadcumb-bg.jpg\">
        <div class=\"container z-index-common\">
            <h1 class=\"breadcumb-title\">Shop Details</h1>
            <ul class=\"breadcumb-menu\">
                <li><a href=\"index.html\">Home</a></li>
                <li>Shop Details</li>
            </ul>
        </div>
    </div>
    <!--==============================
    Product Details
    ==============================-->
    <section class=\"th-product-wrapper product-details space-top space-extra-bottom\">
        <div class=\"container\">
            <div class=\"row gx-60\">
                <div class=\"col-lg-6\">
                    <div class=\"product-big-img\">
                        <div class=\"img\"><img src=\"";
        // line 421
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("Front/img/packs/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 421, $this->source); })()), "id", [], "any", false, false, false, 421)) . ".jpg")), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 421, $this->source); })()), "description", [], "any", false, false, false, 421), "html", null, true);
        yield "\" onerror=\"this.src='";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/packs/default.jpg"), "html", null, true);
        yield "'\"></div>
                    </div>
                </div>
                <div class=\"col-lg-6 align-self-center\">
                    <div class=\"product-about\">
                        <p class=\"price\">";
        // line 426
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 426, $this->source); })()), "prix", [], "any", false, false, false, 426), "html", null, true);
        yield " DT<del>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 426, $this->source); })()), "prix", [], "any", false, false, false, 426) * 1.5), "html", null, true);
        yield " DT</del></p>
                        <h2 class=\"product-title\">";
        // line 427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 427, $this->source); })()), "description", [], "any", false, false, false, 427), "html", null, true);
        yield "</h2>
                        <div class=\"product-rating\">
                            <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\"><span style=\"width:100%\">Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span></div>
                            <a href=\"shop-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">3</span> customer reviews)</a>
                        </div>
                        <div class=\"product-meta\">
                            <p><strong>Capacity:</strong> ";
        // line 433
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 433, $this->source); })()), "capacite", [], "any", false, false, false, 433), "html", null, true);
        yield " people</p>
                            <p><strong>Duration:</strong> ";
        // line 434
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 434, $this->source); })()), "duree", [], "any", false, false, false, 434), "html", null, true);
        yield " hours</p>
                            <p><strong>Available until:</strong> ";
        // line 435
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 435, $this->source); })()), "endDate", [], "any", false, false, false, 435), "Y-m-d"), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"checklist style3\">
                            <ul>
                                <li>Lifetime structural, one year face finish warranty</li>
                                <li>Mapped from “Center Caps” under ” tment” tab</li>
                                <li>Fully copatible with OEM equimpent</li>
                            </ul>
                        </div>
                        <div class=\"actions\">
                            <div class=\"quantity\">
                                <input type=\"number\" class=\"qty-input\" step=\"1\" min=\"1\" max=\"100\" name=\"quantity\" value=\"1\" title=\"Qty\">
                                <button class=\"quantity-plus qty-btn\"><i class=\"far fa-chevron-up\"></i></button>
                                <button class=\"quantity-minus qty-btn\"><i class=\"far fa-chevron-down\"></i></button>
                            </div>
                            <button class=\"th-btn\">Add to Cart</button>
                        </div>
                        <div class=\"product_meta\">
                            <span class=\"sku_wrapper\">SKU: <span class=\"sku\">wheel-fits-chevy-camaro</span></span>
                            <span class=\"posted_in\">Category: <a href=\"shop.html\" rel=\"tag\">Tires & Wheels</a></span>
                            <span>Tags: <a href=\"shop.html\">automotive parts</a><a href=\"shop.html\">wheels</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <ul class=\"nav product-tab-style1\" id=\"productTab\" role=\"tablist\">
                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link th-btn\" id=\"description-tab\" data-bs-toggle=\"tab\" href=\"#description\" role=\"tab\" aria-controls=\"description\" aria-selected=\"false\">description</a>
                </li>
                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link th-btn active\" id=\"reviews-tab\" data-bs-toggle=\"tab\" href=\"#reviews\" role=\"tab\" aria-controls=\"reviews\" aria-selected=\"true\">reviews</a>
                </li>
            </ul>
            <div class=\"tab-content\" id=\"productTabContent\">
                <div class=\"tab-pane fade\" id=\"description\" role=\"tabpanel\" aria-labelledby=\"description-tab\">
                    <p>Conveniently build adaptive users with front-end human capital. Appropriately unleash team building technology for goal-oriented paradigms. Dynamically generate interoperable e-business vis-a-visgoal-oriented value. Completely pursue fully tested content whereas multifunctional core competencies. Progressively scale team driven process improvements before premier functionalities. Holisticly cultivate intermandated methodologies rather than virtual technology. Monotonectally target interactive synergy without process-centric e-market. Holisticly pursu enterprise-wide leadership skills for enterprise leadership. Collaboratively underwhelm standardized expertise after effective bandwidth. Conveniently productivate holistic collaboration and idea-sharing rather than granular strategic theme areas. </p>
                    <p>Enthusiastically aggregate ethical systems for standardized mindshare. Energistically target resource maximizing leadership skills without backward-compatible action items. Credibly impact alternative expertise vis-a-vis economically sound results. Dynamically synergize empowered benefits through functional partnerships. Authoritatively empower prospective infomediaries for interactive content. Synergistically embrace 2.0 paradigms through professional intellectual capital. Interactively strategize parallel growth strategies without out-of-the-box web services. Assertively reinvent installed base.</p>
                </div>
                <div class=\"tab-pane fade show active\" id=\"reviews\" role=\"tabpanel\" aria-labelledby=\"reviews-tab\">
                    <div class=\"woocommerce-Reviews\">
                        <div class=\"th-comments-wrap  \">
                            <ul class=\"comment-list\">
                                <li class=\"review th-comment-item\">
                                    <div class=\"th-post-comment\">
                                        <div class=\"comment-avater\">
                                            <img src=\"assets/img/blog/comment-author-3.jpg\" alt=\"Comment Author\">
                                        </div>
                                        <div class=\"comment-content\">
                                            <h4 class=\"name\">Mark Jack</h4>
                                            <span class=\"commented-on\"><i class=\"fal fa-calendar-alt\"></i>22 March, 2023</span>
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\">
                                                <span style=\"width:100%\">Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span>
                                            </div>
                                            <p class=\"text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod magna aliqua.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"review th-comment-item\">
                                    <div class=\"th-post-comment\">
                                        <div class=\"comment-avater\">
                                            <img src=\"assets/img/blog/comment-author-2.jpg\" alt=\"Comment Author\">
                                        </div>
                                        <div class=\"comment-content\">
                                            <h4 class=\"name\">Alexa Deo</h4>
                                            <span class=\"commented-on\"><i class=\"fal fa-calendar-alt\"></i>26 March, 2023</span>
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\">
                                                <span style=\"width:100%\">Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span>
                                            </div>
                                            <p class=\"text\">Completely build enabled web-readiness and distributed customer service. Proactively customize.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"review th-comment-item\">
                                    <div class=\"th-post-comment\">
                                        <div class=\"comment-avater\">
                                            <img src=\"assets/img/blog/comment-author-1.jpg\" alt=\"Comment Author\">
                                        </div>
                                        <div class=\"comment-content\">
                                            <h4 class=\"name\">Tara sing</h4>
                                            <span class=\"commented-on\"><i class=\"fal fa-calendar-alt\"></i>26 March, 2023</span>
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\">
                                                <span style=\"width:100%\">Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span>
                                            </div>
                                            <p class=\"text\">The passage experienced a surge in popularity during the 1960s when dry-transfer sheets.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"review th-comment-item\">
                                    <div class=\"th-post-comment\">
                                        <div class=\"comment-avater\">
                                            <img src=\"assets/img/blog/comment-author-4.jpg\" alt=\"Comment Author\">
                                        </div>
                                        <div class=\"comment-content\">
                                            <h4 class=\"name\">Tara sing</h4>
                                            <span class=\"commented-on\"><i class=\"fal fa-calendar-alt\"></i>26 March, 2023</span>
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\">
                                                <span style=\"width:100%\">Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span>
                                            </div>
                                            <p class=\"text\">Completely build enabled web-readiness and distributed customer service. Proactively customize.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- Comment Form -->
                        <div class=\"th-comment-form  \">
                            <div class=\"form-title\">
                                <h3 class=\"blog-inner-title \">Add a review</h3>
                            </div>
                            <div class=\"row\">
                                <div class=\"form-group rating-select d-flex align-items-center\">
                                    <label>Your Rating</label>
                                    <p class=\"stars\">
                                        <span>
                                            <a class=\"star-1\" href=\"#\">1</a>
                                            <a class=\"star-2\" href=\"#\">2</a>
                                            <a class=\"star-3\" href=\"#\">3</a>
                                            <a class=\"star-4\" href=\"#\">4</a>
                                            <a class=\"star-5\" href=\"#\">5</a>
                                        </span>
                                    </p>
                                </div>
                                <div class=\"col-12 form-group\">
                                    <textarea placeholder=\"Write a Message\" class=\"form-control\"></textarea>
                                    <i class=\"text-title far fa-pencil-alt\"></i>
                                </div>
                                <div class=\"col-md-6 form-group\">
                                    <input type=\"text\" placeholder=\"Your Name\" class=\"form-control\">
                                    <i class=\"text-title far fa-user\"></i>
                                </div>
                                <div class=\"col-md-6 form-group\">
                                    <input type=\"text\" placeholder=\"Your Email\" class=\"form-control\">
                                    <i class=\"text-title far fa-envelope\"></i>
                                </div>
                                <div class=\"col-12 form-group\">
                                    <input id=\"reviewcheck\" name=\"reviewcheck\" type=\"checkbox\">
                                    <label for=\"reviewcheck\">Save my name, email, and website in this browser for the next time I comment.<span class=\"checkmark\"></span></label>
                                </div>
                                <div class=\"col-12 form-group mb-0\">
                                    <button class=\"th-btn\">Post Review</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--==============================
\t\tRelated Product  
\t\t==============================-->
            <div class=\"space-extra-top mb-30\">
                <div class=\"title-area text-center\">
                    <h2 class=\"sec-title\">Related Products</h2>
                </div>
                <div class=\"row th-carousel\" data-slide-show=\"4\" data-lg-slide-show=\"3\" data-md-slide-show=\"2\" data-sm-slide-show=\"2\" data-xs-slide-show=\"1\" data-arrows=\"true\">
                    ";
        // line 589
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 589, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pack"]) {
            // line 590
            yield "                    <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                <img src=\"";
            // line 593
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . ((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "photo", [], "any", true, true, false, 593)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "photo", [], "any", false, false, false, 593), "default.jpg")) : ("default.jpg")))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "nom", [], "any", false, false, false, 593), "html", null, true);
            yield "\">
                                <div class=\"actions\">
                                    <a href=\"#QuickView\" class=\"icon-btn popup-content\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"";
            // line 596
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_reserver", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 596)]), "html", null, true);
            yield "\" class=\"icon-btn\"><i class=\"far fa-cart-plus\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <h3 class=\"product-title\"><a href=\"";
            // line 600
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 600)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "nom", [], "any", false, false, false, 600), "html", null, true);
            yield "</a></h3>
                                <p>";
            // line 601
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "description", [], "any", false, false, false, 601), "html", null, true);
            yield "</p>
                                <p><strong>Capacity:</strong> ";
            // line 602
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "capacite", [], "any", false, false, false, 602), "html", null, true);
            yield " people</p>
                                <span class=\"price\">";
            // line 603
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "prix", [], "any", false, false, false, 603), "html", null, true);
            yield " DT</span>
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pack'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 608
        yield "
                    <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                <img src=\"assets/img/product/product_1_2.jpg\" alt=\"Product Image\">
                                <div class=\"actions\">
                                    <a href=\"#QuickView\" class=\"icon-btn popup-content\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"cart.html\" class=\"icon-btn\"><i class=\"far fa-cart-plus\"></i></a>
                                    <a href=\"wishlist.html\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\">
                                    <span>Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span>
                                </div>
                                <h3 class=\"product-title\"><a href=\"shop-details.html\">Air Filter</a></h3>
                                <span class=\"price\">\$190.85</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                <img src=\"assets/img/product/product_1_3.jpg\" alt=\"Product Image\">
                                <div class=\"actions\">
                                    <a href=\"#QuickView\" class=\"icon-btn popup-content\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"cart.html\" class=\"icon-btn\"><i class=\"far fa-cart-plus\"></i></a>
                                    <a href=\"wishlist.html\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\">
                                    <span>Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span>
                                </div>
                                <h3 class=\"product-title\"><a href=\"shop-details.html\">CSK Red Wheel</a></h3>
                                <span class=\"price\">\$160.85</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                <img src=\"assets/img/product/product_1_4.jpg\" alt=\"Product Image\">
                                <div class=\"actions\">
                                    <a href=\"#QuickView\" class=\"icon-btn popup-content\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"cart.html\" class=\"icon-btn\"><i class=\"far fa-cart-plus\"></i></a>
                                    <a href=\"wishlist.html\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\">
                                    <span>Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span>
                                </div>
                                <h3 class=\"product-title\"><a href=\"shop-details.html\">Cools Led Light</a></h3>
                                <span class=\"price\">\$170.85</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                <img src=\"assets/img/product/product_1_5.jpg\" alt=\"Product Image\">
                                <div class=\"actions\">
                                    <a href=\"#QuickView\" class=\"icon-btn popup-content\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"cart.html\" class=\"icon-btn\"><i class=\"far fa-cart-plus\"></i></a>
                                    <a href=\"wishlist.html\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\">
                                    <span>Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span>
                                </div>
                                <h3 class=\"product-title\"><a href=\"shop-details.html\">Allion Brake Pad</a></h3>
                                <span class=\"price\">\$120.85</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                <img src=\"assets/img/product/product_1_6.jpg\" alt=\"Product Image\">
                                <div class=\"actions\">
                                    <a href=\"#QuickView\" class=\"icon-btn popup-content\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"cart.html\" class=\"icon-btn\"><i class=\"far fa-cart-plus\"></i></a>
                                    <a href=\"wishlist.html\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\">
                                    <span>Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span>
                                </div>
                                <h3 class=\"product-title\"><a href=\"shop-details.html\">USB Ports</a></h3>
                                <span class=\"price\">\$100.85</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                <img src=\"assets/img/product/product_1_7.jpg\" alt=\"Product Image\">
                                <div class=\"actions\">
                                    <a href=\"#QuickView\" class=\"icon-btn popup-content\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"cart.html\" class=\"icon-btn\"><i class=\"far fa-cart-plus\"></i></a>
                                    <a href=\"wishlist.html\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\">
                                    <span>Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span>
                                </div>
                                <h3 class=\"product-title\"><a href=\"shop-details.html\">Engine Solt</a></h3>
                                <span class=\"price\">\$120.85</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                <img src=\"assets/img/product/product_1_8.jpg\" alt=\"Product Image\">
                                <div class=\"actions\">
                                    <a href=\"#QuickView\" class=\"icon-btn popup-content\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"cart.html\" class=\"icon-btn\"><i class=\"far fa-cart-plus\"></i></a>
                                    <a href=\"wishlist.html\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\">
                                    <span>Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span>
                                </div>
                                <h3 class=\"product-title\"><a href=\"shop-details.html\">Oil Filter</a></h3>
                                <span class=\"price\">\$100.85</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                <img src=\"assets/img/product/product_1_9.jpg\" alt=\"Product Image\">
                                <div class=\"actions\">
                                    <a href=\"#QuickView\" class=\"icon-btn popup-content\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"cart.html\" class=\"icon-btn\"><i class=\"far fa-cart-plus\"></i></a>
                                    <a href=\"wishlist.html\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\">
                                    <span>Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span>
                                </div>
                                <h3 class=\"product-title\"><a href=\"shop-details.html\">BMW Brake Liver</a></h3>
                                <span class=\"price\">\$120.85</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Booking Section -->
    <div class=\"card booking-card mb-4 shadow\" id=\"bookingSection\">
        <div class=\"ribbon ribbon-top-right\"><span>Réserver</span></div>
        <div class=\"card-header\">
            <h5 class=\"mb-0\">Réserver ce pack</h5>
        </div>
        <div class=\"card-body\">
            <form id=\"bookingForm\" class=\"row g-3\" action=\"";
        // line 779
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_reserver", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 779, $this->source); })()), "id", [], "any", false, false, false, 779)]), "html", null, true);
        yield "\" method=\"POST\">
                <input type=\"hidden\" name=\"pack_id\" value=\"";
        // line 780
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 780, $this->source); })()), "id", [], "any", false, false, false, 780), "html", null, true);
        yield "\">
                <div class=\"col-12\">
                    <label class=\"form-label\">Date de l'événement</label>
                    <div class=\"position-relative\">
                        <input type=\"text\" 
                               name=\"dateEvent\" 
                               class=\"form-control flatpickr-input\" 
                               required
                               data-input
                               placeholder=\"Choisissez une date\">
                        <div class=\"flatpickr-calendar\"></div>
                    </div>
                </div>
                <div class=\"col-12\">
                    <label class=\"form-label\">Nombre de personnes</label>
                    <input type=\"number\" name=\"nbPersonnes\" class=\"form-control\" min=\"1\" max=\"";
        // line 795
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 795, $this->source); })()), "capacite", [], "any", false, false, false, 795), "html", null, true);
        yield "\" required>
                </div>
                <div class=\"col-12\">
                    <label class=\"form-label\">Notes spéciales</label>
                    <textarea name=\"notes\" class=\"form-control\" rows=\"3\"></textarea>
                </div>
                <div class=\"col-12\">
                    <button type=\"submit\" class=\"btn btn-primary w-100 booking-btn\">
                        <i class=\"ti ti-calendar-plus me-1\"></i> Réserver maintenant
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <!--==============================
    Footer Area
    ==============================-->
    
 <footer class=\"footer-wrapper footer-layout7\" data-bg-src=\"assets/img/bg/footer_bg_1.jpg\">
    <div class=\"widget-area\">
        <div class=\"container\">
            <div class=\"row justify-content-between\">
                <div class=\"col-md-6 col-xl-auto\">
                    <div class=\"widget footer-widget\">
                        <div class=\"th-widget-about\">
                            <div class=\"about-logo\">
                                <a href=\"index.html\"><img src=\"assets/img/logo-white3.svg\" alt=\"GoldenTouch\"></a>
                            </div>
                            <p class=\"about-text\">GoldenTouch révolutionne la planification d'événements avec des solutions tout-en-un pour des expériences inoubliables.</p>
                            <div class=\"working-time\">
                                <span class=\"title\">HORAIRES D'OUVERTURE</span>
                                <p class=\"desc\">Lun-Sam : 09h00 à 18h30</p>
                            </div>
                            <div class=\"th-social footer-social\">
                                <a href=\"https://www.facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"https://www.twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"https://www.linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                <a href=\"https://www.instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-2\">
                    <div class=\"widget widget_nav_menu footer-widget\">
                        <h3 class=\"widget_title\">Liens rapides</h3>
                        <div class=\"menu-all-pages-container\">
                            <ul class=\"menu\">
                                <li><a href=\"about.html\">À propos</a></li>
                                <li><a href=\"gallery.html\">Galerie</a></li>
                                <li><a href=\"testimonials.html\">Témoignages</a></li>
                                <li><a href=\"services.html\">Nos Services</a></li>
                                <li><a href=\"team.html\">Notre Équipe</a></li>
                                <li><a href=\"contact.html\">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-auto\">
                    <div class=\"widget footer-widget\">
                        <h3 class=\"widget_title\">Coordonnées</h3>
                        <div class=\"th-widget-about\">
                            <h4 class=\"footer-info-title\">Téléphone</h4>
                            <p class=\"footer-info\"><i class=\"fa-sharp fa-solid fa-phone\"></i><a class=\"text-inherit\"
                                    href=\"tel:+33123456789\">+33 1 23 45 67 89</a></p>
                            <h4 class=\"footer-info-title\">Email</h4>
                            <p class=\"footer-info\"><i class=\"fas fa-envelope\"></i><a class=\"text-inherit\"
                                    href=\"mailto:contact@goldentouch.com\">contact";
        // line 862
        yield "@";
        yield "goldentouch.com</a></p>
                            <h4 class=\"footer-info-title\">Adresse</h4>
                            <p class=\"footer-info\"><i class=\"fas fa-map-marker-alt\"></i>123 Rue des Événements, 75001 Paris, France</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-3\">
                    <div class=\"widget footer-widget\">
                        <h4 class=\"widget_title\">Newsletter</h4>
                        <div class=\"newsletter-widget\">
                            <p class=\"md-20\">Abonnez-vous pour recevoir nos actualités et offres exclusives. Soyez les premiers informés de nos dernières prestations.</p>
                            <div class=\"footer-search-contact mt-25\">
                                <form>
                                    <input class=\"form-control\" type=\"email\" placeholder=\"Votre email\">
                                </form>
                                <div class=\"footer-btn mt-10\">
                                    <button type=\"submit\" class=\"th-btn style3 fw-btn\">S'abonner <i
                                            class=\"fa-regular fa-arrow-right\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"copyright-wrap\">
        <div class=\"container\">
            <p class=\"copyright-text\">© 2023 <a href=\"#\">GoldenTouch</a>. Tous droits réservés.</p>
        </div>
    </div>
    <div class=\"footer-shape\"><img src=\"assets/img/shape/footer_shape.png\" alt=\"forme\">
    </div>
</footer>

    <!--********************************
    Code End Here 
    ******************************** -->

    <!-- Scroll To Top -->
    <div class=\"scroll-top\">
        <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
            <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\"></path>
        </svg>
    </div>

    <!--==============================
    All Js File
    ============================== -->
    <script src=\"";
        // line 911
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/vendor/jquery-3.6.0.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 912
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/slick.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 913
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 914
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 915
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.counterup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 916
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/imagesloaded.pkgd.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 917
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/isotope.pkgd.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 918
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/nice-select.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 919
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.datetimepicker.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 920
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/wow.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 921
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/main.js"), "html", null, true);
        yield "\"></script>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pack/reserver_pack.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1161 => 921,  1157 => 920,  1153 => 919,  1149 => 918,  1145 => 917,  1141 => 916,  1137 => 915,  1133 => 914,  1129 => 913,  1125 => 912,  1121 => 911,  1069 => 862,  999 => 795,  981 => 780,  977 => 779,  804 => 608,  793 => 603,  789 => 602,  785 => 601,  779 => 600,  772 => 596,  764 => 593,  759 => 590,  755 => 589,  598 => 435,  594 => 434,  590 => 433,  581 => 427,  575 => 426,  563 => 421,  536 => 397,  472 => 336,  384 => 251,  369 => 239,  325 => 198,  314 => 190,  303 => 182,  292 => 174,  281 => 166,  208 => 96,  159 => 50,  155 => 49,  151 => 48,  147 => 47,  143 => 46,  139 => 45,  123 => 32,  118 => 30,  114 => 29,  110 => 28,  106 => 27,  102 => 26,  98 => 25,  94 => 24,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Taxiar - Online Taxi Service HTML Template - Pack Reservation</title>
    <meta name=\"author\" content=\"Taxiar\">
    <meta name=\"description\" content=\"Taxiar - Online Taxi Service HTML Template\">
    <meta name=\"keywords\" content=\"Taxiar - Online Taxi Service HTML Template\">
    <meta name=\"robots\" content=\"INDEX,FOLLOW\">

    <!-- Mobile Specific Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"{{ asset('Front/img/favicons/apple-icon-57x57.png') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"{{ asset('Front/img/favicons/apple-icon-60x60.png') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{ asset('Front/img/favicons/apple-icon-72x72.png') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('Front/img/favicons/apple-icon-76x76.png') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{ asset('Front/img/favicons/apple-icon-114x114.png') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"{{ asset('Front/img/favicons/apple-icon-120x120.png') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"{{ asset('Front/img/favicons/apple-icon-144x144.png') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"{{ asset('Front/img/favicons/apple-icon-152x152.png') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('Front/img/favicons/apple-icon-180x180.png') }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"{{ asset('Front/img/favicons/android-icon-192x192.png') }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('Front/img/favicons/favicon-32x32.png') }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"{{ asset('Front/img/favicons/favicon-96x96.png') }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('Front/img/favicons/favicon-16x16.png') }}\">
    <link rel=\"manifest\" href=\"{{ asset('Front/img/favicons/manifest.json') }}\">
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
    <meta name=\"msapplication-TileImage\" content=\"{{ asset('Front/img/favicons/ms-icon-144x144.png') }}\">
    <meta name=\"theme-color\" content=\"#ffffff\">

    <!--==============================
\t  Google Fonts
\t============================== -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Radio+Canada:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

    <!--==============================
\t    All CSS File
\t============================== -->
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/fontawesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/magnific-popup.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/slick.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/jquery.datetimepicker.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/style.css') }}\">

</head>

<body class=\"\">

    <!--[if lte IE 9]>
    \t<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!--********************************
   \t\tCode Start From Here 
\t******************************** -->

    <!--==============================
    preloader
    ============================== -->
    <div class=\"preloader\">
        <button class=\"th-btn style3 preloaderCls\">Cancel Preloader </button>
        <div class=\"preloader-inner\">
            <div class=\"loading-window\">
                <div class=\"car\">
                    <div class=\"strike\"></div>
                    <div class=\"strike strike2\"></div>
                    <div class=\"strike strike3\"></div>
                    <div class=\"strike strike4\"></div>
                    <div class=\"strike strike5\"></div>
                    <div class=\"car-detail spoiler\"></div>
                    <div class=\"car-detail back\"></div>
                    <div class=\"car-detail center\"></div>
                    <div class=\"car-detail center1\"></div>
                    <div class=\"car-detail front\"></div>
                    <div class=\"car-detail wheel\"></div>
                    <div class=\"car-detail wheel wheel2\"></div>
                </div>
            </div>
        </div>
    </div> 

    <!--==============================
    Mobile Menu
    ============================== -->
    <div class=\"th-menu-wrapper\">
        <div class=\"th-menu-area text-center\">
            <button class=\"th-menu-toggle \"><i class=\"fal fa-times\"></i></button>
            <div class=\"mobile-logo\">
                <a href=\"index.html\"><img src=\"{{ asset('Front/img/logo.svg') }}\" alt=\"Taxiar\"></a>
            </div>
            <div class=\"th-mobile-menu\">
                <ul>
                    <li class=\"menu-item-has-children\">
                        <a href=\"index.html\">Home</a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"index.html\">Home One </a></li>
                            <li><a href=\"index-2.html\">Home Two </a></li>
                            <li><a href=\"index-3.html\">Home Three </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"about.html\">About Us</a>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <a href=\"#\">Service</a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"service.html\">Service</a></li>
                            <li><a href=\"service-details.html\">Service Details</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <a href=\"#\">Blog</a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"blog.html\">Blog</a></li>
                            <li><a href=\"blog-details.html\">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <a href=\"#\">Pages</a>
                        <ul class=\"sub-menu\">
                            <li class=\"menu-item-has-children\"><a href=\"#\">Shop</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"shop.html\">Shop</a></li>
                                    <li><a href=\"shop-details.html\">Shop Details</a></li>
                                    <li><a href=\"cart.html\">Cart Page</a></li>
                                    <li><a href=\"checkout.html\">Checkout</a></li>
                                    <li><a href=\"wishlist.html\">Wishlist</a></li>
                                </ul>
                            </li>
                            <li><a href=\"team.html\">Driver</a></li>
                            <li><a href=\"team-details.html\">Driver Details</a></li>
                            <li><a href=\"taxi.html\">Taxi</a></li>
                            <li><a href=\"taxi-details.html\">Taxi Details</a></li>
                            <li><a href=\"booking.html\">Booking Ride</a></li>
                            <li><a href=\"faq.html\">Faq</a></li>
                            <li><a href=\"error.html\">Error</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"contact.html\">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <!--==============================
    Sidemenu
    ============================== -->
    <div class=\"sidemenu-wrapper shopping-cart d-none d-lg-block\">
        <div class=\"sidemenu-content\">
            <button class=\"closeButton sideMenuCls\"><i class=\"far fa-times\"></i></button>
            <div class=\"widget woocommerce widget_shopping_cart\">
                <h3 class=\"widget_title\">Shopping cart</h3>
                <div class=\"widget_shopping_cart_content\">
                    <ul class=\"woocommerce-mini-cart cart_list product_list_widget\">
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"{{ asset('Front/img/product/product_thumb_1_1.jpg') }}\" alt=\"Cart Image\">Suspension-Coil</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>94</span>,
                            </span>
                        </li>
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"{{ asset('Front/img/product/product_thumb_1_2.jpg') }}\" alt=\"Cart Image\">absorbers Brake</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>89</span>
                            </span>
                        </li>
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"{{ asset('Front/img/product/product_thumb_1_3.jpg') }}\" alt=\"Cart Image\">Motorcycle-Shock</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>75</span>
                            </span>
                        </li>
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"{{ asset('Front/img/product/product_thumb_1_4.jpg') }}\" alt=\"Cart Image\">Body Spring</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>72</span>
                            </span>
                        </li>
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"{{ asset('Front/img/product/product_thumb_1_5.jpg') }}\" alt=\"Cart Image\">Body Spring</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>81</span>
                            </span>
                        </li>
                    </ul>
                    <p class=\"woocommerce-mini-cart__total total\">
                        <strong>Subtotal:</strong>
                        <span class=\"woocommerce-Price-amount amount\">
                            <span class=\"woocommerce-Price-currencySymbol\">\$</span>318.00</span>
                    </p>
                    <p class=\"woocommerce-mini-cart__buttons buttons\">
                        <a href=\"cart.html\" class=\"th-btn style1 wc-forward\">View cart</a>
                        <a href=\"checkout.html\" class=\"th-btn style1 checkout wc-forward\">Checkout</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <!--==============================
    Sidemenu
    ============================== -->
    <div class=\"sidemenu-wrapper d-none d-lg-block\">
        <div class=\"sidemenu-content bg-title\">
            <button class=\"closeButton sideMenuCls\"><i class=\"far fa-times\"></i></button>
            <div class=\"widget footer-widget\">
                <h3 class=\"widget_title\">About Company</h3>
                <div class=\"th-widget-about\">
                    <p class=\"footer-text\">Centric aplications productize before front end vortals visualize front end is results and value added</p>
                    <h4 class=\"footer-info-title\">WE ARE AVAILABLE</h4>
                    <p class=\"footer-text\">Mon-Sat: 09.00 am to 6.30 pm</p>
                    <a href=\"contact.html\" class=\"th-btn style3\"><span class=\"btn-text\">Contact Us</span></a>
                </div>
            </div>
            <div class=\"widget footer-widget\">
                <h3 class=\"widget_title\">Recent Posts</h3>
                <div class=\"recent-post-wrap\">
                    <div class=\"recent-post\">
                        <div class=\"media-img\">
                            <a href=\"blog-details.html\"><img src=\"{{ asset('Front/img/blog/recent-post-1-2.jpg') }}\" alt=\"Blog Image\"></a>
                        </div>
                        <div class=\"media-body\">
                            <div class=\"recent-post-meta\">
                                <a href=\"blog.html\"><i class=\"far fa-calendar-days\"></i>22th May, 2023</a>
                            </div>
                            <h4 class=\"post-title\"><a class=\"text-inherit\" href=\"blog-details.html\">How To Start Car Engine Faster</a></h4>
                            <a class=\"line-btn\" href=\"blog.html\">Read More<i class=\"fa-regular fa-arrow-right\"></i></a>
                        </div>
                    </div>
                    <div class=\"recent-post\">
                        <div class=\"media-img\">
                            <a href=\"blog-details.html\"><img src=\"{{ asset('Front/img/blog/recent-post-1-3.jpg') }}\" alt=\"Blog Image\"></a>
                        </div>
                        <div class=\"media-body\">
                            <div class=\"recent-post-meta\">
                                <a href=\"blog.html\"><i class=\"far fa-calendar-days\"></i>25th May, 2023</a>
                            </div>
                            <h4 class=\"post-title\"><a class=\"text-inherit\" href=\"blog-details.html\">How to start car engine slowly</a></h4>
                            <a class=\"line-btn\" href=\"blog.html\">Read More<i class=\"fa-regular fa-arrow-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"widget footer-widget\">
                <h4 class=\"widget_title\">Get Newsletter</h4>
                <div class=\"newsletter-widget\">
                    <p class=\"md-20\">Sign up today for hints, tips & latest car overview and news</p>
                    <form class=\"newsletter-form\">
                        <input class=\"form-control\" type=\"email\" placeholder=\"Email Address\" required=\"\">
                        <button type=\"submit\" class=\"newsletter-btn\"><i class=\"fas fa-envelope\"></i></button>
                    </form>
                    <div class=\"th-social style2\">
                        <a target=\"_blank\" href=\"https://facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                        <a target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                        <a target=\"_blank\" href=\"https://linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"popup-search-box d-none d-lg-block\">
        <button class=\"searchClose\"><i class=\"fal fa-times\"></i></button>
        <form action=\"#\">
            <input type=\"text\" placeholder=\"What are you looking for\">
            <button type=\"submit\"><i class=\"fal fa-search\"></i></button>
        </form>
    </div>

    <!--============================== 
\tHeader Area
    ==============================-->
     <header class=\"th-header header-layout7\">
        <div class=\"header-top\">
            <div class=\"container\">
                <div class=\"row justify-content-center justify-content-md-between align-items-center gy-2\">
                    <div class=\"col-auto d-none d-md-block\">
                        <div class=\"header-links\">
                            <ul>
                                <li><i class=\"fa-thin fa-envelope\"></i><a
                                        href=\"mailto:GoldenTouch@gmail.com\">GoldenTouch@gmail.com</a>
                                </li>
                                <li><i class=\"fa-thin fa-phone\"></i><a href=\"tel:+468254762443\">(+468) 254 762 443</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-auto\">
                        <div class=\"header-right\">
                            <div class=\"langauge\">
                                <select class=\"form-select nice-select\">
                                    <option selected=\"\">English</option>
                                    <option>Hindi</option>
                                </select>
                            </div>
                            <div class=\"header-social\">
                                <span class=\"social-title\">Follow Us On:</span>
                                <a href=\"https://www.facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"https://www.twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"https://www.linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                <a href=\"https://www.instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                                <a href=\"https://www.youtube.com/\"><i class=\"fa-brands fa-youtube\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class=\"sticky-wrapper\">
    <div class=\"menu-area\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-between\">
                <div class=\"col-auto\">
                    <div class=\"header-logo\">
<img src=\"{{ asset('Front/img/logo44.png') }}\" alt=\"GoldenTouch\" style=\"height: 130px;\">
                    </div>
                </div>
                <div class=\"col-auto me-xl-auto\">
                    <nav class=\"main-menu d-none d-lg-block\">
                        <ul>
                            <li>
                                <a href=\"index.html\">Pack</a>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\">Event Planner</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"#\">Ajout Event</a></li>
                                    <li><a href=\"#\">Liste Event</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\">Materielles</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"#\">Ajout Materielles</a></li>
                                    <li><a href=\"#\">Liste Materielles</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\">Personnel</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"#\">Ajout Personnel</a></li>
                                    <li><a href=\"#\">Liste Personnel</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\">Lieu</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"#\">Ajout Lieu</a></li>
                                    <li><a href=\"#\">Liste Lieu</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\">Autre</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"#\">Commandes</a></li>
                                    <li><a href=\"#\">Reclamation</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <button class=\"th-menu-toggle d-inline-block d-lg-none\"><i class=\"far fa-bars\"></i></button>
                </div>
                <div class=\"col-auto d-none d-xl-block\">
                    <div class=\"header-button\">
                        <button type=\"button\" class=\"icon-btn searchBoxToggler\"><i class=\"far fa-search\"></i></button>
                        <a href=\"#\" class=\"icon-btn sideMenuToggler2\"><i class=\"fa-regular fa-bag-shopping\"></i>
                            <span class=\"badge\">5</span></a>
                        <a href=\"#\" class=\"icon-btn sideMenuToggler\"><i class=\"far fa-bars\"></i></a>
                        <a href=\"booking.html\" class=\"th-btn\">BOOK A TAXI<i class=\"fa-regular fa-arrow-right ms-2\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"logo-shape\"><img src=\"{{ asset('Front/img/logo-shape.svg') }}\" alt=\"\"></div>
    </header>


    <!--==============================
    Breadcumb
    ============================== -->
    <div class=\"breadcumb-wrapper \" data-bg-src=\"assets/img/breadcumb/breadcumb-bg.jpg\">
        <div class=\"container z-index-common\">
            <h1 class=\"breadcumb-title\">Shop Details</h1>
            <ul class=\"breadcumb-menu\">
                <li><a href=\"index.html\">Home</a></li>
                <li>Shop Details</li>
            </ul>
        </div>
    </div>
    <!--==============================
    Product Details
    ==============================-->
    <section class=\"th-product-wrapper product-details space-top space-extra-bottom\">
        <div class=\"container\">
            <div class=\"row gx-60\">
                <div class=\"col-lg-6\">
                    <div class=\"product-big-img\">
                        <div class=\"img\"><img src=\"{{ asset('Front/img/packs/' ~ pack.id ~ '.jpg') }}\" alt=\"{{ pack.description }}\" onerror=\"this.src='{{ asset('Front/img/packs/default.jpg') }}'\"></div>
                    </div>
                </div>
                <div class=\"col-lg-6 align-self-center\">
                    <div class=\"product-about\">
                        <p class=\"price\">{{ pack.prix }} DT<del>{{ pack.prix * 1.5 }} DT</del></p>
                        <h2 class=\"product-title\">{{ pack.description }}</h2>
                        <div class=\"product-rating\">
                            <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\"><span style=\"width:100%\">Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span></div>
                            <a href=\"shop-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">3</span> customer reviews)</a>
                        </div>
                        <div class=\"product-meta\">
                            <p><strong>Capacity:</strong> {{ pack.capacite }} people</p>
                            <p><strong>Duration:</strong> {{ pack.duree }} hours</p>
                            <p><strong>Available until:</strong> {{ pack.endDate|date('Y-m-d') }}</p>
                        </div>
                        <div class=\"checklist style3\">
                            <ul>
                                <li>Lifetime structural, one year face finish warranty</li>
                                <li>Mapped from “Center Caps” under ” tment” tab</li>
                                <li>Fully copatible with OEM equimpent</li>
                            </ul>
                        </div>
                        <div class=\"actions\">
                            <div class=\"quantity\">
                                <input type=\"number\" class=\"qty-input\" step=\"1\" min=\"1\" max=\"100\" name=\"quantity\" value=\"1\" title=\"Qty\">
                                <button class=\"quantity-plus qty-btn\"><i class=\"far fa-chevron-up\"></i></button>
                                <button class=\"quantity-minus qty-btn\"><i class=\"far fa-chevron-down\"></i></button>
                            </div>
                            <button class=\"th-btn\">Add to Cart</button>
                        </div>
                        <div class=\"product_meta\">
                            <span class=\"sku_wrapper\">SKU: <span class=\"sku\">wheel-fits-chevy-camaro</span></span>
                            <span class=\"posted_in\">Category: <a href=\"shop.html\" rel=\"tag\">Tires & Wheels</a></span>
                            <span>Tags: <a href=\"shop.html\">automotive parts</a><a href=\"shop.html\">wheels</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <ul class=\"nav product-tab-style1\" id=\"productTab\" role=\"tablist\">
                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link th-btn\" id=\"description-tab\" data-bs-toggle=\"tab\" href=\"#description\" role=\"tab\" aria-controls=\"description\" aria-selected=\"false\">description</a>
                </li>
                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link th-btn active\" id=\"reviews-tab\" data-bs-toggle=\"tab\" href=\"#reviews\" role=\"tab\" aria-controls=\"reviews\" aria-selected=\"true\">reviews</a>
                </li>
            </ul>
            <div class=\"tab-content\" id=\"productTabContent\">
                <div class=\"tab-pane fade\" id=\"description\" role=\"tabpanel\" aria-labelledby=\"description-tab\">
                    <p>Conveniently build adaptive users with front-end human capital. Appropriately unleash team building technology for goal-oriented paradigms. Dynamically generate interoperable e-business vis-a-visgoal-oriented value. Completely pursue fully tested content whereas multifunctional core competencies. Progressively scale team driven process improvements before premier functionalities. Holisticly cultivate intermandated methodologies rather than virtual technology. Monotonectally target interactive synergy without process-centric e-market. Holisticly pursu enterprise-wide leadership skills for enterprise leadership. Collaboratively underwhelm standardized expertise after effective bandwidth. Conveniently productivate holistic collaboration and idea-sharing rather than granular strategic theme areas. </p>
                    <p>Enthusiastically aggregate ethical systems for standardized mindshare. Energistically target resource maximizing leadership skills without backward-compatible action items. Credibly impact alternative expertise vis-a-vis economically sound results. Dynamically synergize empowered benefits through functional partnerships. Authoritatively empower prospective infomediaries for interactive content. Synergistically embrace 2.0 paradigms through professional intellectual capital. Interactively strategize parallel growth strategies without out-of-the-box web services. Assertively reinvent installed base.</p>
                </div>
                <div class=\"tab-pane fade show active\" id=\"reviews\" role=\"tabpanel\" aria-labelledby=\"reviews-tab\">
                    <div class=\"woocommerce-Reviews\">
                        <div class=\"th-comments-wrap  \">
                            <ul class=\"comment-list\">
                                <li class=\"review th-comment-item\">
                                    <div class=\"th-post-comment\">
                                        <div class=\"comment-avater\">
                                            <img src=\"assets/img/blog/comment-author-3.jpg\" alt=\"Comment Author\">
                                        </div>
                                        <div class=\"comment-content\">
                                            <h4 class=\"name\">Mark Jack</h4>
                                            <span class=\"commented-on\"><i class=\"fal fa-calendar-alt\"></i>22 March, 2023</span>
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\">
                                                <span style=\"width:100%\">Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span>
                                            </div>
                                            <p class=\"text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod magna aliqua.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"review th-comment-item\">
                                    <div class=\"th-post-comment\">
                                        <div class=\"comment-avater\">
                                            <img src=\"assets/img/blog/comment-author-2.jpg\" alt=\"Comment Author\">
                                        </div>
                                        <div class=\"comment-content\">
                                            <h4 class=\"name\">Alexa Deo</h4>
                                            <span class=\"commented-on\"><i class=\"fal fa-calendar-alt\"></i>26 March, 2023</span>
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\">
                                                <span style=\"width:100%\">Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span>
                                            </div>
                                            <p class=\"text\">Completely build enabled web-readiness and distributed customer service. Proactively customize.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"review th-comment-item\">
                                    <div class=\"th-post-comment\">
                                        <div class=\"comment-avater\">
                                            <img src=\"assets/img/blog/comment-author-1.jpg\" alt=\"Comment Author\">
                                        </div>
                                        <div class=\"comment-content\">
                                            <h4 class=\"name\">Tara sing</h4>
                                            <span class=\"commented-on\"><i class=\"fal fa-calendar-alt\"></i>26 March, 2023</span>
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\">
                                                <span style=\"width:100%\">Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span>
                                            </div>
                                            <p class=\"text\">The passage experienced a surge in popularity during the 1960s when dry-transfer sheets.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"review th-comment-item\">
                                    <div class=\"th-post-comment\">
                                        <div class=\"comment-avater\">
                                            <img src=\"assets/img/blog/comment-author-4.jpg\" alt=\"Comment Author\">
                                        </div>
                                        <div class=\"comment-content\">
                                            <h4 class=\"name\">Tara sing</h4>
                                            <span class=\"commented-on\"><i class=\"fal fa-calendar-alt\"></i>26 March, 2023</span>
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\">
                                                <span style=\"width:100%\">Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span>
                                            </div>
                                            <p class=\"text\">Completely build enabled web-readiness and distributed customer service. Proactively customize.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- Comment Form -->
                        <div class=\"th-comment-form  \">
                            <div class=\"form-title\">
                                <h3 class=\"blog-inner-title \">Add a review</h3>
                            </div>
                            <div class=\"row\">
                                <div class=\"form-group rating-select d-flex align-items-center\">
                                    <label>Your Rating</label>
                                    <p class=\"stars\">
                                        <span>
                                            <a class=\"star-1\" href=\"#\">1</a>
                                            <a class=\"star-2\" href=\"#\">2</a>
                                            <a class=\"star-3\" href=\"#\">3</a>
                                            <a class=\"star-4\" href=\"#\">4</a>
                                            <a class=\"star-5\" href=\"#\">5</a>
                                        </span>
                                    </p>
                                </div>
                                <div class=\"col-12 form-group\">
                                    <textarea placeholder=\"Write a Message\" class=\"form-control\"></textarea>
                                    <i class=\"text-title far fa-pencil-alt\"></i>
                                </div>
                                <div class=\"col-md-6 form-group\">
                                    <input type=\"text\" placeholder=\"Your Name\" class=\"form-control\">
                                    <i class=\"text-title far fa-user\"></i>
                                </div>
                                <div class=\"col-md-6 form-group\">
                                    <input type=\"text\" placeholder=\"Your Email\" class=\"form-control\">
                                    <i class=\"text-title far fa-envelope\"></i>
                                </div>
                                <div class=\"col-12 form-group\">
                                    <input id=\"reviewcheck\" name=\"reviewcheck\" type=\"checkbox\">
                                    <label for=\"reviewcheck\">Save my name, email, and website in this browser for the next time I comment.<span class=\"checkmark\"></span></label>
                                </div>
                                <div class=\"col-12 form-group mb-0\">
                                    <button class=\"th-btn\">Post Review</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--==============================
\t\tRelated Product  
\t\t==============================-->
            <div class=\"space-extra-top mb-30\">
                <div class=\"title-area text-center\">
                    <h2 class=\"sec-title\">Related Products</h2>
                </div>
                <div class=\"row th-carousel\" data-slide-show=\"4\" data-lg-slide-show=\"3\" data-md-slide-show=\"2\" data-sm-slide-show=\"2\" data-xs-slide-show=\"1\" data-arrows=\"true\">
                    {% for pack in packs %}
                    <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                <img src=\"{{ asset('uploads/packs/' ~ pack.photo|default('default.jpg')) }}\" alt=\"{{ pack.nom }}\">
                                <div class=\"actions\">
                                    <a href=\"#QuickView\" class=\"icon-btn popup-content\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"{{ path('app_pack_reserver', {'id': pack.id}) }}\" class=\"icon-btn\"><i class=\"far fa-cart-plus\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <h3 class=\"product-title\"><a href=\"{{ path('app_pack_details', {'id': pack.id}) }}\">{{ pack.nom }}</a></h3>
                                <p>{{ pack.description }}</p>
                                <p><strong>Capacity:</strong> {{ pack.capacite }} people</p>
                                <span class=\"price\">{{ pack.prix }} DT</span>
                            </div>
                        </div>
                    </div>
                    {% endfor %}

                    <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                <img src=\"assets/img/product/product_1_2.jpg\" alt=\"Product Image\">
                                <div class=\"actions\">
                                    <a href=\"#QuickView\" class=\"icon-btn popup-content\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"cart.html\" class=\"icon-btn\"><i class=\"far fa-cart-plus\"></i></a>
                                    <a href=\"wishlist.html\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\">
                                    <span>Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span>
                                </div>
                                <h3 class=\"product-title\"><a href=\"shop-details.html\">Air Filter</a></h3>
                                <span class=\"price\">\$190.85</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                <img src=\"assets/img/product/product_1_3.jpg\" alt=\"Product Image\">
                                <div class=\"actions\">
                                    <a href=\"#QuickView\" class=\"icon-btn popup-content\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"cart.html\" class=\"icon-btn\"><i class=\"far fa-cart-plus\"></i></a>
                                    <a href=\"wishlist.html\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\">
                                    <span>Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span>
                                </div>
                                <h3 class=\"product-title\"><a href=\"shop-details.html\">CSK Red Wheel</a></h3>
                                <span class=\"price\">\$160.85</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                <img src=\"assets/img/product/product_1_4.jpg\" alt=\"Product Image\">
                                <div class=\"actions\">
                                    <a href=\"#QuickView\" class=\"icon-btn popup-content\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"cart.html\" class=\"icon-btn\"><i class=\"far fa-cart-plus\"></i></a>
                                    <a href=\"wishlist.html\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\">
                                    <span>Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span>
                                </div>
                                <h3 class=\"product-title\"><a href=\"shop-details.html\">Cools Led Light</a></h3>
                                <span class=\"price\">\$170.85</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                <img src=\"assets/img/product/product_1_5.jpg\" alt=\"Product Image\">
                                <div class=\"actions\">
                                    <a href=\"#QuickView\" class=\"icon-btn popup-content\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"cart.html\" class=\"icon-btn\"><i class=\"far fa-cart-plus\"></i></a>
                                    <a href=\"wishlist.html\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\">
                                    <span>Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span>
                                </div>
                                <h3 class=\"product-title\"><a href=\"shop-details.html\">Allion Brake Pad</a></h3>
                                <span class=\"price\">\$120.85</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                <img src=\"assets/img/product/product_1_6.jpg\" alt=\"Product Image\">
                                <div class=\"actions\">
                                    <a href=\"#QuickView\" class=\"icon-btn popup-content\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"cart.html\" class=\"icon-btn\"><i class=\"far fa-cart-plus\"></i></a>
                                    <a href=\"wishlist.html\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\">
                                    <span>Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span>
                                </div>
                                <h3 class=\"product-title\"><a href=\"shop-details.html\">USB Ports</a></h3>
                                <span class=\"price\">\$100.85</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                <img src=\"assets/img/product/product_1_7.jpg\" alt=\"Product Image\">
                                <div class=\"actions\">
                                    <a href=\"#QuickView\" class=\"icon-btn popup-content\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"cart.html\" class=\"icon-btn\"><i class=\"far fa-cart-plus\"></i></a>
                                    <a href=\"wishlist.html\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\">
                                    <span>Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span>
                                </div>
                                <h3 class=\"product-title\"><a href=\"shop-details.html\">Engine Solt</a></h3>
                                <span class=\"price\">\$120.85</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                <img src=\"assets/img/product/product_1_8.jpg\" alt=\"Product Image\">
                                <div class=\"actions\">
                                    <a href=\"#QuickView\" class=\"icon-btn popup-content\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"cart.html\" class=\"icon-btn\"><i class=\"far fa-cart-plus\"></i></a>
                                    <a href=\"wishlist.html\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\">
                                    <span>Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span>
                                </div>
                                <h3 class=\"product-title\"><a href=\"shop-details.html\">Oil Filter</a></h3>
                                <span class=\"price\">\$100.85</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                <img src=\"assets/img/product/product_1_9.jpg\" alt=\"Product Image\">
                                <div class=\"actions\">
                                    <a href=\"#QuickView\" class=\"icon-btn popup-content\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"cart.html\" class=\"icon-btn\"><i class=\"far fa-cart-plus\"></i></a>
                                    <a href=\"wishlist.html\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\">
                                    <span>Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span>
                                </div>
                                <h3 class=\"product-title\"><a href=\"shop-details.html\">BMW Brake Liver</a></h3>
                                <span class=\"price\">\$120.85</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Booking Section -->
    <div class=\"card booking-card mb-4 shadow\" id=\"bookingSection\">
        <div class=\"ribbon ribbon-top-right\"><span>Réserver</span></div>
        <div class=\"card-header\">
            <h5 class=\"mb-0\">Réserver ce pack</h5>
        </div>
        <div class=\"card-body\">
            <form id=\"bookingForm\" class=\"row g-3\" action=\"{{ path('app_pack_reserver', {'id': pack.id}) }}\" method=\"POST\">
                <input type=\"hidden\" name=\"pack_id\" value=\"{{ pack.id }}\">
                <div class=\"col-12\">
                    <label class=\"form-label\">Date de l'événement</label>
                    <div class=\"position-relative\">
                        <input type=\"text\" 
                               name=\"dateEvent\" 
                               class=\"form-control flatpickr-input\" 
                               required
                               data-input
                               placeholder=\"Choisissez une date\">
                        <div class=\"flatpickr-calendar\"></div>
                    </div>
                </div>
                <div class=\"col-12\">
                    <label class=\"form-label\">Nombre de personnes</label>
                    <input type=\"number\" name=\"nbPersonnes\" class=\"form-control\" min=\"1\" max=\"{{ pack.capacite }}\" required>
                </div>
                <div class=\"col-12\">
                    <label class=\"form-label\">Notes spéciales</label>
                    <textarea name=\"notes\" class=\"form-control\" rows=\"3\"></textarea>
                </div>
                <div class=\"col-12\">
                    <button type=\"submit\" class=\"btn btn-primary w-100 booking-btn\">
                        <i class=\"ti ti-calendar-plus me-1\"></i> Réserver maintenant
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <!--==============================
    Footer Area
    ==============================-->
    
 <footer class=\"footer-wrapper footer-layout7\" data-bg-src=\"assets/img/bg/footer_bg_1.jpg\">
    <div class=\"widget-area\">
        <div class=\"container\">
            <div class=\"row justify-content-between\">
                <div class=\"col-md-6 col-xl-auto\">
                    <div class=\"widget footer-widget\">
                        <div class=\"th-widget-about\">
                            <div class=\"about-logo\">
                                <a href=\"index.html\"><img src=\"assets/img/logo-white3.svg\" alt=\"GoldenTouch\"></a>
                            </div>
                            <p class=\"about-text\">GoldenTouch révolutionne la planification d'événements avec des solutions tout-en-un pour des expériences inoubliables.</p>
                            <div class=\"working-time\">
                                <span class=\"title\">HORAIRES D'OUVERTURE</span>
                                <p class=\"desc\">Lun-Sam : 09h00 à 18h30</p>
                            </div>
                            <div class=\"th-social footer-social\">
                                <a href=\"https://www.facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"https://www.twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"https://www.linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                <a href=\"https://www.instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-2\">
                    <div class=\"widget widget_nav_menu footer-widget\">
                        <h3 class=\"widget_title\">Liens rapides</h3>
                        <div class=\"menu-all-pages-container\">
                            <ul class=\"menu\">
                                <li><a href=\"about.html\">À propos</a></li>
                                <li><a href=\"gallery.html\">Galerie</a></li>
                                <li><a href=\"testimonials.html\">Témoignages</a></li>
                                <li><a href=\"services.html\">Nos Services</a></li>
                                <li><a href=\"team.html\">Notre Équipe</a></li>
                                <li><a href=\"contact.html\">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-auto\">
                    <div class=\"widget footer-widget\">
                        <h3 class=\"widget_title\">Coordonnées</h3>
                        <div class=\"th-widget-about\">
                            <h4 class=\"footer-info-title\">Téléphone</h4>
                            <p class=\"footer-info\"><i class=\"fa-sharp fa-solid fa-phone\"></i><a class=\"text-inherit\"
                                    href=\"tel:+33123456789\">+33 1 23 45 67 89</a></p>
                            <h4 class=\"footer-info-title\">Email</h4>
                            <p class=\"footer-info\"><i class=\"fas fa-envelope\"></i><a class=\"text-inherit\"
                                    href=\"mailto:contact@goldentouch.com\">contact{{ '@' }}goldentouch.com</a></p>
                            <h4 class=\"footer-info-title\">Adresse</h4>
                            <p class=\"footer-info\"><i class=\"fas fa-map-marker-alt\"></i>123 Rue des Événements, 75001 Paris, France</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-3\">
                    <div class=\"widget footer-widget\">
                        <h4 class=\"widget_title\">Newsletter</h4>
                        <div class=\"newsletter-widget\">
                            <p class=\"md-20\">Abonnez-vous pour recevoir nos actualités et offres exclusives. Soyez les premiers informés de nos dernières prestations.</p>
                            <div class=\"footer-search-contact mt-25\">
                                <form>
                                    <input class=\"form-control\" type=\"email\" placeholder=\"Votre email\">
                                </form>
                                <div class=\"footer-btn mt-10\">
                                    <button type=\"submit\" class=\"th-btn style3 fw-btn\">S'abonner <i
                                            class=\"fa-regular fa-arrow-right\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"copyright-wrap\">
        <div class=\"container\">
            <p class=\"copyright-text\">© 2023 <a href=\"#\">GoldenTouch</a>. Tous droits réservés.</p>
        </div>
    </div>
    <div class=\"footer-shape\"><img src=\"assets/img/shape/footer_shape.png\" alt=\"forme\">
    </div>
</footer>

    <!--********************************
    Code End Here 
    ******************************** -->

    <!-- Scroll To Top -->
    <div class=\"scroll-top\">
        <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
            <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\"></path>
        </svg>
    </div>

    <!--==============================
    All Js File
    ============================== -->
    <script src=\"{{ asset('Front/js/vendor/jquery-3.6.0.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/slick.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/jquery.magnific-popup.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/jquery.counterup.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/imagesloaded.pkgd.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/isotope.pkgd.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/nice-select.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/jquery.datetimepicker.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/wow.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/main.js') }}\"></script>

</body>
</html>", "pack/reserver_pack.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\pack\\reserver_pack.html.twig");
    }
}
