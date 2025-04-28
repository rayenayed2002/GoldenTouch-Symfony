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

/* vitrine.html.twig */
class __TwigTemplate_ccd7f6006bbcaaf684765c338b7aaf01 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine.html.twig"));

        // line 1
        yield "<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Taxiar - Online Taxi Service HTML Template - Home 1</title>
    <meta name=\"author\" content=\"Taxiar\">
    <meta name=\"description\" content=\"Taxiar - Online Taxi Service HTML Template\">
    <meta name=\"keywords\" content=\"Taxiar - Online Taxi Service HTML Template\">
    <meta name=\"robots\" content=\"INDEX,FOLLOW\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-57x57.png"), "html", null, true);
        yield "\">
<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-60x60.png"), "html", null, true);
        yield "\">
<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-72x72.png"), "html", null, true);
        yield "\">
<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-76x76.png"), "html", null, true);
        yield "\">
<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-114x114.png"), "html", null, true);
        yield "\">
<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-120x120.png"), "html", null, true);
        yield "\">
<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-144x144.png"), "html", null, true);
        yield "\">
<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-152x152.png"), "html", null, true);
        yield "\">
<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-180x180.png"), "html", null, true);
        yield "\">
<link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/android-icon-192x192.png"), "html", null, true);
        yield "\">
<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/favicon-32x32.png"), "html", null, true);
        yield "\">
<link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/favicon-96x96.png"), "html", null, true);
        yield "\">
<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/favicon-16x16.png"), "html", null, true);
        yield "\">
<link rel=\"manifest\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/manifest.json"), "html", null, true);
        yield "\">
<meta name=\"msapplication-TileColor\" content=\"#ffffff\">
<meta name=\"msapplication-TileImage\" content=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/ms-icon-144x144.png"), "html", null, true);
        yield "\">
<meta name=\"theme-color\" content=\"#ffffff\">


    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link
        href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Radio+Canada:wght@300;400;500;600;700&display=swap\"
        rel=\"stylesheet\">


<link rel=\"stylesheet\" href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/bootstrap.min.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/fontawesome.min.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/magnific-popup.min.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/slick.min.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/jquery.datetimepicker.min.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/style.css"), "html", null, true);
        yield "\">

</head>

<body class=\"\">






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


    <div class=\"th-menu-wrapper\">
        <div class=\"th-menu-area text-center\">
            <button class=\"th-menu-toggle \"><i class=\"fal fa-times\"></i></button>
            <div class=\"mobile-logo\">
                <a href=\"index.html\"><img src=\"";
        // line 84
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

    <div class=\"sidemenu-wrapper shopping-cart d-none d-lg-block  \">
        <div class=\"sidemenu-content\">
            <button class=\"closeButton sideMenuCls\"><i class=\"far fa-times\"></i></button>
            <div class=\"widget woocommerce widget_shopping_cart\">
                <h3 class=\"widget_title\">Shopping cart</h3>
                <div class=\"widget_shopping_cart_content\">
                    <ul class=\"woocommerce-mini-cart cart_list product_list_widget\">
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/product/product_thumb_1_1.jpg"), "html", null, true);
        yield "\"
                                    alt=\"Cart Image\">Suspension-Coil</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>94</span>,
                            </span>
                        </li>
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/product/product_thumb_1_2.jpg"), "html", null, true);
        yield "\" alt=\"Cart Image\">absorbers
                                Brake</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>89</span>
                            </span>
                        </li>
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/product/product_thumb_1_3.jpg"), "html", null, true);
        yield "\"
                                    alt=\"Cart Image\">Motorcycle-Shock</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>75</span>
                            </span>
                        </li>
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/product/product_thumb_1_4.jpg"), "html", null, true);
        yield "\" alt=\"Cart Image\">Body
                                Spring</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>72</span>
                            </span>
                        </li>
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/product/product_thumb_1_5.jpg"), "html", null, true);
        yield "\" alt=\"Cart Image\">Body
                                Spring</a>
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

    <div class=\"sidemenu-wrapper d-none d-lg-block  \">
        <div class=\"sidemenu-content bg-title\">
            <button class=\"closeButton sideMenuCls\"><i class=\"far fa-times\"></i></button>
            <div class=\"widget footer-widget\">
                <h3 class=\"widget_title\">About Company</h3>
                <div class=\"th-widget-about\">
                    <p class=\"footer-text\">Centric aplications productize before front end vortals visualize front end
                        is results and value added</p>
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
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog/recent-post-1-2.jpg"), "html", null, true);
        yield "\"
                                    alt=\"Blog Image\"></a>
                        </div>
                        <div class=\"media-body\">
                            <div class=\"recent-post-meta\">
                                <a href=\"blog.html\"><i class=\"far fa-calendar-days\"></i>22th May, 2023</a>
                            </div>
                            <h4 class=\"post-title\"><a class=\"text-inherit\" href=\"blog-details.html\">How To Start Car
                                    Engine Faster</a></h4>
                            <a class=\"line-btn\" href=\"blog.html\">Read More<i class=\"fa-regular fa-arrow-right\"></i></a>
                        </div>
                    </div>
                    <div class=\"recent-post\">
                        <div class=\"media-img\">
                            <a href=\"blog-details.html\"><img src=\"";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog/recent-post-1-3.jpg"), "html", null, true);
        yield "\"
                                    alt=\"Blog Image\"></a>
                        </div>
                        <div class=\"media-body\">
                            <div class=\"recent-post-meta\">
                                <a href=\"blog.html\"><i class=\"far fa-calendar-days\"></i>25th May, 2023</a>
                            </div>
                            <h4 class=\"post-title\"><a class=\"text-inherit\" href=\"blog-details.html\">How to start car
                                    engine slowly</a></h4>
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
                    <div class=\"th-social  style2\">
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


    <header class=\"th-header header-layout7\">
        <div class=\"header-top\">
            <div class=\"container\">
                <div class=\"row justify-content-center justify-content-md-between align-items-center gy-2\">
                    <div class=\"col-auto d-none d-md-block\">
                        <div class=\"header-links\">
                            <ul>
                                <li><i class=\"fa-thin fa-envelope\"></i><a
                                        href=\"mailto:info@taxiar.com\">info@taxiar.com</a>
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
                        <a href=\"index.html\"><img src=\"";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo3.svg"), "html", null, true);
        yield "\" alt=\"Taxiar\"></a>
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
        // line 386
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo-shape.svg"), "html", null, true);
        yield "\" alt=\"\"></div>
    </header>

    <div class=\"th-hero-wrapper  hero-slider-7 th-carousel\" data-slide-show=\"1\" data-md-slide-show=\"1\" data-fade=\"true\"
        data-dots=\"true\" data-xl-dots=\"true\" data-ml-dots=\"true\" data-lg-dots=\"true\">

        <div class=\"th-hero-slide\">
            <div class=\"th-hero-bg \" data-bg-src=\"";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/hero/hero_bg_1_1.jpg"), "html", null, true);
        yield "\">
                <img src=\"assets/img/hero/hero_overlay_1.png\" alt=\"Hero Image\">
            </div>
            <div class=\"container\">
                <div class=\"hero-style7\">
                    <span class=\"hero-subtitle\" data-ani=\"slideinleft\" data-ani-delay=\"0.1s\">WELCOME TO TAXIAR</span>
                    <h1 class=\"hero-title\" data-ani=\"slideinleft\" data-ani-delay=\"0.3s\">The Best Way To Get Around Town.
                    </h1>
                    <p class=\"hero-text\" data-ani=\"slideinleft\" data-ani-delay=\"0.4s\">Online taxi service is a
                        convenient and affordable way to travel within a city or to nearby destinations. You can book a
                        cab online through various platforms.</p>
                    <div class=\"btn-group\" data-ani=\"slideinleft\" data-ani-delay=\"0.5s\">
                        <a href=\"about.html\" class=\"th-btn style3\">Discover More <i
                                class=\"fa-regular fa-arrow-right\"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"th-hero-slide\">
            <div class=\"th-hero-bg \" data-bg-src=\"";
        // line 413
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/hero/hero_bg_1_2.jpg"), "html", null, true);
        yield "\">
                <img src=\"";
        // line 414
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/hero/hero_overlay_1.png"), "html", null, true);
        yield "\" alt=\"Hero Image\">
            </div>
            <div class=\"container\">
                <div class=\"hero-style7\">
                    <span class=\"hero-subtitle\" data-ani=\"slideinleft\" data-ani-delay=\"0.1s\">Taxi Driver for Hire</span>
                    <h1 class=\"hero-title\" data-ani=\"slideinleft\" data-ani-delay=\"0.3s\">Need a Ride? Call us anytime!
                    </h1>
                    <p class=\"hero-text\" data-ani=\"slideinleft\" data-ani-delay=\"0.4s\">Online taxi service is a
                        convenient and affordable way to travel within a city or to nearby destinations. You can book a
                        cab online through various platforms.</p>
                    <div class=\"btn-group\" data-ani=\"slideinleft\" data-ani-delay=\"0.5s\">
                        <a href=\"about.html\" class=\"th-btn style3\">Discover More <i
                                class=\"fa-regular fa-arrow-right\"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"th-hero-slide\">
            <div class=\"th-hero-bg \" data-bg-src=\"";
        // line 433
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/hero/hero_bg_1_3.jpg"), "html", null, true);
        yield "\">
                <img src=\"";
        // line 434
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/hero/hero_overlay_1.png"), "html", null, true);
        yield "\" alt=\"Hero Image\">
            </div>
            <div class=\"container\">
                <div class=\"hero-style7\">
                    <span class=\"hero-subtitle\" data-ani=\"slideinleft\" data-ani-delay=\"0.1s\">24/7 Online Taxi Booking
                        Service</span>
                    <h1 class=\"hero-title\" data-ani=\"slideinleft\" data-ani-delay=\"0.3s\">A different kind of taxi company
                    </h1>
                    <p class=\"hero-text\" data-ani=\"slideinleft\" data-ani-delay=\"0.4s\">Online taxi service is a
                        convenient and affordable way to travel within a city or to nearby destinations. You can book a
                        cab online.</p>
                    <div class=\"btn-group\" data-ani=\"slideinleft\" data-ani-delay=\"0.5s\">
                        <a href=\"about.html\" class=\"th-btn style3\">Discover More <i
                                class=\"fa-regular fa-arrow-right\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"booking-section\">
        <div class=\"container\">
            <form action=\"mail.php\" method=\"POST\" class=\"booking-form ajax-contact wow fadeInUp\">
                <div class=\"input-wrap\">
                    <div class=\"row\">
                        <div class=\"form-group col-xl-3 col-lg-4 col-sm-6\">
                            <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"Your Name\">
                            <i class=\"fa-light fa-user\"></i>
                        </div>
                        <div class=\"form-group col-xl-3 col-lg-4 col-sm-6\">
                            <input type=\"number\" class=\"form-control\" name=\"phone\" id=\"phone\"
                                placeholder=\"Phone Number\">
                            <i class=\"fa-light fa-phone-rotary\"></i>
                        </div>
                        <div class=\"form-group col-xl-3 col-lg-4 col-sm-6\">
                            <select name=\"passenger\" id=\"passenger\" class=\"form-select nice-select\">
                                <option value=\"\" disabled selected hidden>passenger</option>
                                <option value=\"passenger1\">passenger 1</option>
                                <option value=\"passenger2\">passenger 2</option>
                                <option value=\"passenger3\">passenger 3</option>
                                <option value=\"passenger4\">passenger 4</option>
                            </select>
                        </div>
                        <div class=\"form-group col-xl-3 col-lg-4 col-sm-6\">
                            <input type=\"text\" class=\"form-control\" name=\"s-destination\" id=\"s-destination\"
                                placeholder=\"Start Destination\">
                            <i class=\"fa-sharp fa-regular fa-location-dot\"></i>
                        </div>
                        <div class=\"form-group col-xl-3 col-lg-4 col-sm-6\">
                            <input type=\"text\" class=\"form-control\" name=\"e-destination\" id=\"e-destination\"
                                placeholder=\"End Destination\">
                            <i class=\"fa-sharp fa-regular fa-location-dot\"></i>
                        </div>
                        <div class=\"form-group col-xl-3 col-lg-4 col-sm-6\">
                            <input type=\"text\" class=\"date-pick form-control\" name=\"date\" id=\"date-pick\"
                                placeholder=\"Select Date\">
                            <i class=\"fa-light fa-calendar-days\"></i>
                        </div>
                        <div class=\"form-group col-xl-3 col-lg-4 col-sm-6\">
                            <input type=\"text\" class=\"time-pick form-control\" name=\"time\" id=\"time-pick\"
                                placeholder=\"Select Time\">
                            <i class=\"fa-light fa-clock\"></i>
                        </div>
                        <div class=\"form-btn col-xl-3 col-lg-4 col-sm-6\">
                            <button class=\"th-btn\">Book Taxi Now <i class=\"fa-regular fa-arrow-right\"></i></button>
                        </div>
                    </div>
                    <p class=\"form-messages mb-0 mt-3\"></p>
                </div>
            </form>
        </div>
    </div>

    <div class=\"space\" id=\"about-sec\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-6 mb-5 mb-xl-0\">
                    <div class=\"img-box7 wow fadeInLeft\">
                        <div class=\"img1\">
                            <img src=\"";
        // line 513
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/normal/about_1_1.jpg"), "html", null, true);
        yield "\" alt=\"About\">
                        </div>
                        <div class=\"img2\">
                            <img src=\"";
        // line 516
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/normal/about_1_2.jpg"), "html", null, true);
        yield "\" alt=\"About\">
                        </div>
                        <div class=\"journey-box\">
                            <h3 class=\"journey-title\">Started Journey</h3>
                            <span class=\"journey-year\">1986</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-6\">
                    <div class=\"ps-xxl-5 ms-xl-4 wow fadeInRight\">
                        <div class=\"title-area mb-20\">
                            <span class=\"sub-title\">ABOUT OUR COMPANY</span>
                            <h2 class=\"sec-title\">Wherever You Need To Go We'll Take You There.</h2>
                        </div>
                        <p class=\"mb-30\">Authoritatively simplify open-source resources via
                            backend
                            visualize business e-markets before parallel convergence optimize sticky and idea-sharing
                            rather
                            than unique solutions.</p>
                        <div class=\"journey-wrap style2\">
                            <div class=\"journey-image\">
                                <img src=\"";
        // line 537
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/normal/map.jpg"), "html", null, true);
        yield "\" alt=\"\">
                            </div>
                            <div class=\"checklist\">
                                <ul>
                                    <li>Easy & Emergency Solutions Anytime</li>
                                    <li>Getting Affordable price upto 2 years</li>
                                    <li>More Reliable & Experienced Teams</li>
                                </ul>
                            </div>
                        </div>
                        <a href=\"about.html\" class=\"th-btn\"><span class=\"btn-text\">Discover More<i
                                    class=\"fa-regular fa-arrow-right ms-2\"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class=\"ser-area bg-smoke overflow-hidden space\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-8 col-xl-6\">
                    <div class=\"title-area text-center text-lg-start\">
                        <span class=\"sub-title\">Our Services</span>
                        <h2 class=\"sec-title\">Best Taxi Services For You</h2>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"sec-btn\">
                        <div class=\"icon-box\">
                            <button data-slick-prev=\"#serviceSlide\" class=\"slick-arrow default\"><i
                                    class=\"far fa-arrow-left\"></i></button>
                            <button data-slick-next=\"#serviceSlide\" class=\"slick-arrow default\"><i
                                    class=\"far fa-arrow-right\"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row slider-shadow th-carousel\" id=\"serviceSlide\" data-slide-show=\"3\" data-lg-slide-show=\"3\"
                data-md-slide-show=\"2\" data-sm-slide-show=\"1\" data-xs-slide-show=\"1\">

                <div class=\"col-md-6 col-lg-4 col-xl-3  \">
                    <div class=\"service-item wow fadeInUp\" data-bg-src=\"";
        // line 579
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/service/service_shape_1.jpg"), "html", null, true);
        yield "\">
                        <div class=\"service-item_img\">
                            <img src=\"";
        // line 581
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/service/service-6-1.jpg"), "html", null, true);
        yield "\" alt=\"service image\">
                        </div>
                        <div class=\"service-item_content\">
                            <h3 class=\"service-item_title\"><a href=\"service-details.html\">Rapid City Transfer</a></h3>
                            <p class=\"service-item_text\">Rapid city transfer is a term used by some taxi or cab services
                                to describe their service of bringing.</p>
                            <a href=\"service-details.html\" class=\"line-btn\">Learn More<i
                                    class=\"fa-regular fa-arrow-right ms-2\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-6 col-lg-4 col-xl-3  \">
                    <div class=\"service-item wow fadeInUp\" data-bg-src=\"";
        // line 594
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/service/service_shape_1.jpg"), "html", null, true);
        yield "\">
                        <div class=\"service-item_img\">
                            <img src=\"";
        // line 596
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/service/service-6-2.jpg"), "html", null, true);
        yield "\" alt=\"service image\">
                        </div>
                        <div class=\"service-item_content\">
                            <h3 class=\"service-item_title\"><a href=\"service-details.html\">Online Booking</a></h3>
                            <p class=\"service-item_text\">Online taxi service is a convenient and affordable way to
                                travel within a city or to nearby destinations.</p>
                            <a href=\"service-details.html\" class=\"line-btn\">Learn More<i
                                    class=\"fa-regular fa-arrow-right ms-2\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-6 col-lg-4 col-xl-3  \">
                    <div class=\"service-item wow fadeInUp\" data-bg-src=\"";
        // line 609
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/service/service_shape_1.jpg"), "html", null, true);
        yield "\">
                        <div class=\"service-item_img\">
                            <img src=\"";
        // line 611
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/service/service-6-3.jpg"), "html", null, true);
        yield "\" alt=\"service image\">
                        </div>
                        <div class=\"service-item_content\">
                            <h3 class=\"service-item_title\"><a href=\"service-details.html\">Airport Transport</a></h3>
                            <p class=\"service-item_text\">It can include different types of vehicles, such as taxis, car
                                hire, airport transfers, airport shuttles, airport buses, etc.</p>
                            <a href=\"service-details.html\" class=\"line-btn\">Learn More<i
                                    class=\"fa-regular fa-arrow-right ms-2\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-6 col-lg-4 col-xl-3  \">
                    <div class=\"service-item wow fadeInUp\" data-bg-src=\"";
        // line 624
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/service/service_shape_1.jpg"), "html", null, true);
        yield "\">
                        <div class=\"service-item_img\">
                            <img src=\"";
        // line 626
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/service/service-6-4.jpg"), "html", null, true);
        yield "\" alt=\"service image\">
                        </div>
                        <div class=\"service-item_content\">
                            <h3 class=\"service-item_title\"><a href=\"service-details.html\">Business Transport</a></h3>
                            <p class=\"service-item_text\">Business transport refers to the transportation services and
                                methods used by businesses to move goods, equipment.</p>
                            <a href=\"service-details.html\" class=\"line-btn\">Learn More<i
                                    class=\"fa-regular fa-arrow-right ms-2\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"shape-mockup d-none d-xxl-block\" data-top=\"0%\" data-right=\"-0.5%\"><img
                src=\"";
        // line 640
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/normal/service_shape_1.png"), "html", null, true);
        yield "
    </section>\" alt=\"shapes\"></div>

    <section class=\"space\">
        <div class=\"container\">
            <div class=\"title-area text-center\">
                <span class=\"sub-title\">Team Members<span class=\"double-line\"></span></span>
                <h2 class=\"sec-title\">Our Expert Drivers</h2>
            </div>
            <div class=\"row slider-shadow th-carousel\" data-slide-show=\"4\" data-lg-slide-show=\"3\" data-md-slide-show=\"2\"
                data-sm-slide-show=\"2\" data-arrows=\"true\">
      
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"team-item wow fadeInUp\">
                        <div class=\"team-img\">
    
<div class=\"row\">

    <div class=\"col-md-6 col-lg-4\">
        <div class=\"team-item wow fadeInUp\">
            <div class=\"team-img\">
                <img src=\"";
        // line 661
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/team/team_1_1.jpg"), "html", null, true);
        yield "\" alt=\"Team\">
            </div>
            <div class=\"team-item_content\">
                <span class=\"team-item_desig\">Expert Driver</span>
                <div class=\"th-social team-social\">
                    <a target=\"_blank\" href=\"https://facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                    <a target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                    <a target=\"_blank\" href=\"https://linkedin.com/\"><i class=\"fa-brands fa-linkedin-in\"></i></a>
                </div>
            </div>
            <div class=\"info-item\">
                <h3 class=\"team-item_title\"><a href=\"/a.html\">Sophia Isabella</a></h3>
                <span class=\"team-item_desig\">Expert Driver</span>
            </div>
        </div>
    </div>
    

    <div class=\"col-md-6 col-lg-4\">
        <div class=\"team-item wow fadeInUp\">
            <div class=\"team-img\">
                <img src=\"";
        // line 683
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/team/team_1_2.jpg"), "html", null, true);
        yield "\" alt=\"Team\">
            </div>
            <div class=\"team-item_content\">
                <h3 class=\"team-item_title\"><a href=\"/a.html\">Emma Margaret</a></h3>
                <span class=\"team-item_desig\">Senior Driver</span>
                <div class=\"th-social team-social\">
                    <a target=\"_blank\" href=\"https://facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                    <a target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                    <a target=\"_blank\" href=\"https://linkedin.com/\"><i class=\"fa-brands fa-linkedin-in\"></i></a>
                </div>
            </div>
            <div class=\"info-item\">
                <h3 class=\"team-item_title\"><a href=\"/a.html\">Emma Margaret</a></h3>
                <span class=\"team-item_desig\">Senior Driver</span>
            </div>
        </div>
    </div>
    

    <div class=\"col-md-6 col-lg-4\">
        <div class=\"team-item wow fadeInUp\">
            <div class=\"team-img\">
                <img src=\"";
        // line 706
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/team/team_1_3.jpg"), "html", null, true);
        yield "\" alt=\"Team\">
            </div>
            <div class=\"team-item_content\">
                <h3 class=\"team-item_title\"><a href=\"a.html\">Jacob Michael</a></h3>
                <span class=\"team-item_desig\">Junior Driver</span>
                <div class=\"th-social team-social\">
                    <a target=\"_blank\" href=\"https://facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                    <a target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                    <a target=\"_blank\" href=\"https://linkedin.com/\"><i class=\"fa-brands fa-linkedin-in\"></i></a>
                </div>
            </div>
            <div class=\"info-item\">
                <h3 class=\"team-item_title\"><a href=\"/a.html\">Jacob Michael</a></h3>
                <span class=\"team-item_desig\">Junior Driver</span>
            </div>
        </div>
    </div>
    
 
</div>


Taxi Area  

<section class=\"bg-top-center space\" data-bg-src=\"";
        // line 731
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/bg/taxi_bg_2.jpg"), "html", null, true);
        yield "\">
    <div class=\"container\">
        <div class=\"title-area text-center\">
            <span class=\"sub-title\">Our Taxi<span class=\"double-line\"></span></span>
            <h2 class=\"sec-title text-white text-capitalize\">Choose Our Taxi Collection</h2>
        </div>
        <div class=\"nav tab-menu4 style2\" id=\"tab-menu4\" role=\"tablist\">
            <button class=\"active\" id=\"nav-one-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-one\" type=\"button\" role=\"tab\" aria-controls=\"nav-one\" aria-selected=\"true\">Town Taxi</button>
            <button class=\"\" id=\"nav-two-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-two\" type=\"button\" role=\"tab\" aria-controls=\"nav-two\" aria-selected=\"false\">Limousine Taxi</button>
            <button class=\"\" id=\"nav-three-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-three\" type=\"button\" role=\"tab\" aria-controls=\"nav-three\" aria-selected=\"false\">Hybrid Taxi</button>
        </div>
        <div class=\"tab-content\">
     
            <div class=\"tab-pane fade show active\" id=\"nav-one\" role=\"tabpanel\" aria-labelledby=\"nav-one-tab\">
                <div class=\"row slider-shadow th-carousel\" data-slide-show=\"3\" data-lg-slide-show=\"2\" data-md-slide-show=\"2\" data-arrows=\"true\">
                    <div class=\"col-auto\">
                        <div class=\"taxi-item wow fadeInUp\">
                            <div class=\"taxi-item_img\">
                                <img src=\"";
        // line 749
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/taxi/taxi_1_1.png"), "html", null, true);
        yield "\" alt=\"service image\">
                            </div>
                            <h3 class=\"taxi-item_title\"><a href=\"a.html\">BMW X6 2023</a></h3>
                            <p class=\"taxi-item_subtitle\">\$0.85/km</p>
                            <div class=\"taxi-item_feature\">
                                <span><img src=\"";
        // line 754
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/icon/taxi_f_2_1.svg"), "html", null, true);
        yield "\" alt=\"\">Passengers</span>
                                <span class=\"taxi-item_info\">4</span>
                            </div>
                            <div class=\"taxi-item_feature\">
                                <span><img src=\"";
        // line 758
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/icon/taxi_f_2_2.svg"), "html", null, true);
        yield "\" alt=\"\">Luggage's:</span>
                                <span class=\"taxi-item_info\">2</span>
                            </div>
                            <div class=\"taxi-item_feature\">
                                <span><img src=\"";
        // line 762
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/icon/taxi_f_2_3.svg"), "html", null, true);
        yield "\" alt=\"\">Base Rate:</span>
<span class=\"taxi-item_info\">";
        // line 763
        yield "\$";
        yield "10.50</span>
                            </div>
                            <div class=\"taxi-item_feature\">
                                <span><img src=\"";
        // line 766
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/icon/taxi_f_2_4.svg"), "html", null, true);
        yield "\" alt=\"\">Air Conditioner:</span>
                                <span class=\"taxi-item_info\">yes</span>
                            </div>
                            <a href=\"a.html\" class=\"th-btn fw-btn\">book Now Taxi<i class=\"fa-regular fa-arrow-right ms-2\"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</section>
<div class=\"tab-pane fade\" id=\"nav-three\" role=\"tabpanel\" aria-labelledby=\"nav-three-tab\">
    <div class=\"row slider-shadow th-carousel\" data-slide-show=\"3\" data-lg-slide-show=\"2\"
        data-md-slide-show=\"2\" data-arrows=\"true\">
        <div class=\"col-auto\">
            <div class=\"taxi-item\">
                <div class=\"taxi-item_img\">
                    <img src=\"";
        // line 785
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/taxi/taxi_1_1.png"), "html", null, true);
        yield "\" alt=\"service image\">
                </div>
                <h3 class=\"taxi-item_title\"><a href=\"a.html\">BMW X6 2030</a></h3>
                <p class=\"taxi-item_subtitle\">";
        // line 788
        yield "\$";
        yield "0.88/km</p>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"";
        // line 790
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/icon/taxi_f_2_1.svg"), "html", null, true);
        yield "\" alt=\"\">Passengers</span>
                    <span class=\"taxi-item_info\">4</span>
                </div>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"";
        // line 794
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/icon/taxi_f_2_2.svg"), "html", null, true);
        yield "\" alt=\"\">Luggage's:</span>
                    <span class=\"taxi-item_info\">2</span>
                </div>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"";
        // line 798
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/icon/taxi_f_2_3.svg"), "html", null, true);
        yield "\" alt=\"\">Base Rate:</span>
                    <span class=\"taxi-item_info\">\$10.50</span>
                </div>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"";
        // line 802
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/icon/taxi_f_2_4.svg"), "html", null, true);
        yield "\" alt=\"\">Air Conditioner:</span>
                    <span class=\"taxi-item_info\">yes</span>
                </div>
                <a href=\"a.html\" class=\"th-btn fw-btn\">book Now Taxi<i
                        class=\"fa-regular fa-arrow-right ms-2\"></i></a>
            </div>
        </div>
        <div class=\"col-auto\">
            <div class=\"taxi-item\">
                <div class=\"taxi-item_img\">
                    <img src=\"";
        // line 812
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/taxi/taxi_1_4.png"), "html", null, true);
        yield "\" alt=\"service image\">
                </div>
                <h3 class=\"taxi-item_title\"><a href=\"a.html\">BMW M7 2031</a></h3>
                <p class=\"taxi-item_subtitle\">\$0.95/km</p>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"";
        // line 817
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/icon/taxi_f_2_1.svg"), "html", null, true);
        yield "\" alt=\"\">Passengers</span>
                    <span class=\"taxi-item_info\">4</span>
                </div>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"";
        // line 821
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/icon/taxi_f_2_2.svg"), "html", null, true);
        yield "\" alt=\"\">Luggage's:</span>
                    <span class=\"taxi-item_info\">2</span>
                </div>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"";
        // line 825
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/icon/taxi_f_2_3.svg"), "html", null, true);
        yield "\" alt=\"\">Base Rate:</span>
                    <span class=\"taxi-item_info\">";
        // line 826
        yield "\$";
        yield "10.50</span>
                </div>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"";
        // line 829
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/icon/taxi_f_2_4.svg"), "html", null, true);
        yield "\" alt=\"\">Air Conditioner:</span>
                    <span class=\"taxi-item_info\">yes</span>
                </div>
                <a href=\"a.html\" class=\"th-btn fw-btn\">book Now Taxi<i
                        class=\"fa-regular fa-arrow-right ms-2\"></i></a>
            </div>
        </div>
        <div class=\"col-auto\">
            <div class=\"taxi-item\">
                <div class=\"taxi-item_img\">
                    <img src=\"";
        // line 839
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/taxi/taxi_1_3.png"), "html", null, true);
        yield "\" alt=\"service image\">
                </div>
                <h3 class=\"taxi-item_title\"><a href=\"a.html\">BMW A5 2035</a></h3>
                <p class=\"taxi-item_subtitle\">";
        // line 842
        yield "\$";
        yield "0.89/km</p>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"";
        // line 844
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/icon/taxi_f_2_1.svg"), "html", null, true);
        yield "\" alt=\"\">Passengers</span>
                    <span class=\"taxi-item_info\">4</span>
                </div>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"";
        // line 848
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/icon/taxi_f_2_2.svg"), "html", null, true);
        yield "\" alt=\"\">Luggage's:</span>
                    <span class=\"taxi-item_info\">2</span>
                </div>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"";
        // line 852
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/icon/taxi_f_2_3.svg"), "html", null, true);
        yield "\" alt=\"\">Base Rate:</span>
                    <span class=\"taxi-item_info\">\$10.50</span>
                </div>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"";
        // line 856
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/icon/taxi_f_2_4.svg"), "html", null, true);
        yield "\" alt=\"\">Air Conditioner:</span>
                    <span class=\"taxi-item_info\">yes</span>
                </div>
                <a href=\"a.html\" class=\"th-btn fw-btn\">book Now Taxi<i
                        class=\"fa-regular fa-arrow-right ms-2\"></i></a>
            </div>
        </div>
        <div class=\"col-auto\">
            <div class=\"taxi-item\">
                <div class=\"taxi-item_img\">
                    <img src=\"";
        // line 866
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/taxi/taxi_1_5.png"), "html", null, true);
        yield "\" alt=\"service image\">
                </div>
                <h3 class=\"taxi-item_title\"><a href=\"a.html\">BMW A5 2036</a></h3>
                <p class=\"taxi-item_subtitle\">\$0.93/km</p>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"";
        // line 871
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/icon/taxi_f_2_1.svg"), "html", null, true);
        yield "\" alt=\"\">Passengers</span>
                    <span class=\"taxi-item_info\">4</span>
                </div>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"";
        // line 875
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/icon/taxi_f_2_2.svg"), "html", null, true);
        yield "\" alt=\"\">Luggage's:</span>
                    <span class=\"taxi-item_info\">2</span>
                </div>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"";
        // line 879
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/icon/taxi_f_2_3.svg"), "html", null, true);
        yield "\" alt=\"\">Base Rate:</span>
                    <span class=\"taxi-item_info\">";
        // line 880
        yield "\$";
        yield "10.50</span>
                </div>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"";
        // line 883
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/icon/taxi_f_2_4.svg"), "html", null, true);
        yield "\" alt=\"\">Air Conditioner:</span>
                    <span class=\"taxi-item_info\">yes</span>
                </div>
                <a href=\"a.html\" class=\"th-btn fw-btn\">book Now Taxi<i
                        class=\"fa-regular fa-arrow-right ms-2\"></i></a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>

    <section class=\"download-area3 overflow-hidden space-top\" data-bg-src=\"assets/img/bg/download_bg_3.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-6 text-center text-xl-start wow fadeInLeft\">
                    <div class=\"title-area mb-30\">
                        <span class=\"sub-title\">Download Taxiar App Now</span>
                        <h2 class=\"sec-title text-capitalize\">Get A Free Taxiar App From Online Store</h2>
                        <p class=\"sec-text\">Competently re-engineer cross-media meta-services whereas best of breed
                            processes matrix just in time content...</p>
                    </div>
                    <div class=\"download-btn-wrap style2\">
                        <a target=\"_blank\" href=\"https://play.google.com/\" class=\"download-btn\">
                            <i class=\"fa-brands fa-google-play\"></i>
                            <div class=\"text-group\">
                                <span class=\"small-text\">Download From</span>
                                <h6 class=\"big-text\">Google Play</h6>
                            </div>
                        </a>
                        <a target=\"_blank\" href=\"https://www.apple.com/store\" class=\"download-btn style2\">
                            <i class=\"fa-brands fa-apple\"></i>
                            <div class=\"text-group\">
                                <span class=\"small-text\">Download From</span>
                                <h6 class=\"big-text\">App Store</h6>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=\"col-xl-6\">
                    <div class=\"download-image wow fadeInRight\">
                        <img src=\"assets/img/bg/phone_1.png\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <div class=\"feature-area  \" data-bg-src=\"assets/img/bg/counter_bg_2.jpg\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-xl-5\">
                    <div class=\"feature-video wow fadeInLeft\">
                        <img src=\"assets/img/normal/video_1.jpg\" alt=\"cta bg\">
                        <a href=\"https://www.youtube.com/watch?v=CcpvU_pzR-s\" class=\"play-btn popup-video\"><i
                                class=\"fas fa-play\"></i></a>
                    </div>
                </div>
                <div class=\"col-xl-7\">
                    <div class=\"ps-xxl-5 ms-xl-5 wow fadeInRight\">
                        <div class=\"title-area text-center text-xl-start\">
                            <span class=\"sub-title\">Why Choose Us</span>
                            <h2 class=\"sec-title text-white\">We Ensure Your Happy To Taxi Journey</h2>
                        </div>
                        <div class=\"counter-wrap style2\">
                            <div class=\"counter-line\"></div>
                            <div class=\"counter-wrapper\">
                                <div class=\"counter-card style2\">
                                    <div class=\"counter-card_icon\">
                                        <img src=\"assets/img/icon/counter_2_1.svg\" alt=\"icon\">
                                    </div>
                                    <div class=\"counter-card_number\"><span class=\"counter-number\">32.5</span>k<span
                                            class=\"text-theme\">+</span>
                                    </div>
                                    <p class=\"counter-card_text\">Special Vehicles</p>
                                </div>
                                <div class=\"counter-card style2\">
                                    <div class=\"counter-card_icon\">
                                        <img src=\"assets/img/icon/counter_2_2.svg\" alt=\"icon\">
                                    </div>
                                    <div class=\"counter-card_number\"><span class=\"counter-number\">13.8</span>k<span
                                            class=\"text-theme\">+</span>
                                    </div>
                                    <p class=\"counter-card_text\">People Dropped</p>
                                </div>
                                <div class=\"counter-card style2\">
                                    <div class=\"counter-card_icon\">
                                        <img src=\"assets/img/icon/counter_2_3.svg\" alt=\"icon\">
                                    </div>
                                    <div class=\"counter-card_number\"><span class=\"counter-number\">65.2</span>k<span
                                            class=\"text-theme\">+</span>
                                    </div>
                                    <p class=\"counter-card_text\">Satisfied Clients</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"space overflow-hidden\">
        <div class=\"container\">
            <div class=\"title-area text-center\">
                <span class=\"brand-title\">
                    <span class=\"counter-card_number\"><span class=\"counter-number\">10</span>k+<span
                            class=\"counter-title\">Our Trusted Partner</span></span>
                </span>
            </div>
            <div class=\"row brand-slide th-carousel\" data-slide-show=\"5\" data-lg-slide-show=\"4\" data-md-slide-show=\"3\"
                data-sm-slide-show=\"2\" data-xs-slide-show=\"2\">
                <div class=\"col-auto brand-img style2  wow fadeInLeft\">
                    <img src=\"assets/img/brand/brand_1_1.png\" alt=\"Brand Logo\">
                </div>
                <div class=\"col-auto brand-img style2  wow fadeInLeft\">
                    <img src=\"assets/img/brand/brand_1_2.png\" alt=\"Brand Logo\">
                </div>
                <div class=\"col-auto brand-img style2  wow fadeInLeft\">
                    <img src=\"assets/img/brand/brand_1_3.png\" alt=\"Brand Logo\">
                </div>
                <div class=\"col-auto brand-img style2  wow fadeInLeft\">
                    <img src=\"assets/img/brand/brand_1_4.png\" alt=\"Brand Logo\">
                </div>
                <div class=\"col-auto brand-img style2  wow fadeInLeft\">
                    <img src=\"assets/img/brand/brand_1_5.png\" alt=\"Brand Logo\">
                </div>
            </div>
        </div>
    </div>

    <section class=\"bg-smoke space\" data-bg-src=\"assets/img/bg/testimonial_bg_1.jpg\">
        <div class=\"container\">
            <div class=\"row justify-content-center justify-content-lg-between align-items-center\">
                <div class=\"col-lg-8\">
                    <div class=\"title-area text-center text-lg-start\">
                        <span class=\"sub-title\">Client’s Testimonial</span>
                        <h2 class=\"sec-title\">Our Happy Client’s Review</h2>
                    </div>
                </div>
                <div class=\"col-auto\">
                    <div class=\"sec-btn\">
                        <div class=\"icon-item\">
                            <button data-slick-prev=\"#testiSlide\" class=\"slick-arrow default\"><i
                                    class=\"far fa-arrow-left\"></i></button>
                            <button data-slick-next=\"#testiSlide\" class=\"slick-arrow default\"><i
                                    class=\"far fa-arrow-right\"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row slider-shadow th-carousel\" id=\"testiSlide\" data-slide-show=\"3\" data-lg-slide-show=\"2\"
                data-md-slide-show=\"2\">
                <div class=\"col-md-6 col-xl-4\">
                    <div class=\"testi-item  wow fadeInUp\">
                        <p class=\"testi-item_text\">“Proactively synthesize schemas before foster like leveraged
                            expertise user friendly business low before open.”</p>
                        <div class=\"testi-item_wrapper\">
                            <div class=\"testi-item_profile\">
                                <div class=\"testi-item_img\">
                                    <img src=\"assets/img/testimonial/testi_3_1.jpg\" alt=\"Avater\">
                                </div>
                                <div class=\"media-body\">
                                    <h3 class=\"testi-item_name\">David Smith</h3>
                                    <p class=\"testi-item_desig\">Head Of Growth</p>
                                </div>
                            </div>
                            <div class=\"testi-item_quote\"><img src=\"assets/img/icon/quote_2.svg\" alt=\"quote\"></div>
                        </div>
                        <div class=\"testi-item_review\">
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-4\">
                    <div class=\"testi-item  wow fadeInUp\">
                        <p class=\"testi-item_text\">“Groactively synthesize schemas before foster like leveraged
                            expertise user friendly business source iterate.”</p>
                        <div class=\"testi-item_wrapper\">
                            <div class=\"testi-item_profile\">
                                <div class=\"testi-item_img\">
                                    <img src=\"assets/img/testimonial/testi_3_2.jpg\" alt=\"Avater\">
                                </div>
                                <div class=\"media-body\">
                                    <h3 class=\"testi-item_name\">Emily Isabella</h3>
                                    <p class=\"testi-item_desig\">Bank Manager</p>
                                </div>
                            </div>
                            <div class=\"testi-item_quote\"><img src=\"assets/img/icon/quote_2.svg\" alt=\"quote\"></div>
                        </div>
                        <div class=\"testi-item_review\">
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-4\">
                    <div class=\"testi-item  wow fadeInUp\">
                        <p class=\"testi-item_text\">“Troactively synthesize schemas before foster like leveraged
                            expertise user friendly business low before open.”</p>
                        <div class=\"testi-item_wrapper\">
                            <div class=\"testi-item_profile\">
                                <div class=\"testi-item_img\">
                                    <img src=\"assets/img/testimonial/testi_3_3.jpg\" alt=\"Avater\">
                                </div>
                                <div class=\"media-body\">
                                    <h3 class=\"testi-item_name\">Harry Callum</h3>
                                    <p class=\"testi-item_desig\">CEO Founder</p>
                                </div>
                            </div>
                            <div class=\"testi-item_quote\"><img src=\"assets/img/icon/quote_2.svg\" alt=\"quote\"></div>
                        </div>
                        <div class=\"testi-item_review\">
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-4\">
                    <div class=\"testi-item  wow fadeInUp\">
                        <p class=\"testi-item_text\">“Jroactively synthesize schemas before foster like leveraged
                            expertise user friendly open source schemas.”</p>
                        <div class=\"testi-item_wrapper\">
                            <div class=\"testi-item_profile\">
                                <div class=\"testi-item_img\">
                                    <img src=\"assets/img/testimonial/testi_3_4.jpg\" alt=\"Avater\">
                                </div>
                                <div class=\"media-body\">
                                    <h3 class=\"testi-item_name\">Marcos Manuel </h3>
                                    <p class=\"testi-item_desig\">Bank Manager</p>
                                </div>
                            </div>
                            <div class=\"testi-item_quote\"><img src=\"assets/img/icon/quote_2.svg\" alt=\"quote\"></div>
                        </div>
                        <div class=\"testi-item_review\">
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"space\">
        <div class=\"container\">
            <div class=\"title-area text-center\">
                <span class=\"sub-title ms-0\">Our News Update<span class=\"double-line\"></span></span>
                <h2 class=\"sec-title\">Latest News ";
        // line 1146
        yield "&";
        yield " Blog Post</h2>
            </div>
            <div class=\"row th-carousel slider-shadow\" data-slide-show=\"3\" data-lg-slide-show=\"2\" data-md-slide-show=\"2\"
                data-sm-slide-show=\"1\" data-arrows=\"true\" data-xl-arrows=\"true\" data-ml-arrows=\"true\">
                <div class=\"col-md-6 col-xl-4\">
                    <div class=\"blog-item wow fadeInUp\">
                        <div class=\"blog-img\">
                            <img src=\"assets/img/blog/blog_4_1.jpg\" alt=\"blog image\">
                            <a class=\"blog-date\" href=\"blog.html\"><span class=\"month\">15</span>
                                May, 2023</a>
                        </div>
                        <div class=\"blog-content\">
                            <div class=\"blog-meta style2\">
                                <a href=\"blog.html\">by Admin</a>
                                <a href=\"blog.html\">Comments(03)</a>
                            </div>
                            <h3 class=\"blog-item_title\"><a href=\"blog-details.html\">Tensive quality vectors life through
                                    strategis</a></h3>
                            <a href=\"blog-details.html\" class=\"link-btn\">Learn More <i
                                    class=\"fas fa-arrow-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-4\">
                    <div class=\"blog-item wow fadeInDown\">
                        <div class=\"blog-img\">
                            <img src=\"assets/img/blog/blog_4_2.jpg\" alt=\"blog image\">
                            <a class=\"blog-date\" href=\"blog.html\"><span class=\"month\">16</span>
                                May, 2023</a>
                        </div>
                        <div class=\"blog-content\">
                            <div class=\"blog-meta style2\">
                                <a href=\"blog.html\">by Admin</a>
                                <a href=\"blog.html\">Comments(03)</a>
                            </div>
                            <h3 class=\"blog-item_title\"><a href=\"blog-details.html\">How to start initiating an startup
                                    in few days.</a></h3>
                            <a href=\"blog-details.html\" class=\"link-btn\">Learn More <i
                                    class=\"fas fa-arrow-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-4\">
                    <div class=\"blog-item wow fadeInUp\">
                        <div class=\"blog-img\">
                            <img src=\"assets/img/blog/blog_4_3.jpg\" alt=\"blog image\">
                            <a class=\"blog-date\" href=\"blog.html\"><span class=\"month\">17</span>
                                May, 2023</a>
                        </div>
                        <div class=\"blog-content\">
                            <div class=\"blog-meta style2\">
                                <a href=\"blog.html\">by Admin</a>
                                <a href=\"blog.html\">Comments(03)</a>
                            </div>
                            <h3 class=\"blog-item_title\"><a href=\"blog-details.html\">Innovative business all over the
                                    world.</a></h3>
                            <a href=\"blog-details.html\" class=\"link-btn\">Learn More <i
                                    class=\"fas fa-arrow-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-4\">
                    <div class=\"blog-item wow fadeInDown\">
                        <div class=\"blog-img\">
                            <img src=\"assets/img/blog/blog_4_4.jpg\" alt=\"blog image\">
                            <a class=\"blog-date\" href=\"blog.html\"><span class=\"month\">18</span>
                                May, 2023</a>
                        </div>
                        <div class=\"blog-content\">
                            <div class=\"blog-meta style2\">
                                <a href=\"blog.html\">by Admin</a>
                                <a href=\"blog.html\">Comments(03)</a>
                            </div>
                            <h3 class=\"blog-item_title\"><a href=\"blog-details.html\">Motivate quality vectors life
                                    through vectoeris</a></h3>
                            <a href=\"blog-details.html\" class=\"link-btn\">Learn More <i
                                    class=\"fas fa-arrow-right\"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class=\"footer-wrapper footer-layout7\" data-bg-src=\"assets/img/bg/footer_bg_1.jpg\">
        <div class=\"widget-area\">
            <div class=\"container\">
                <div class=\"row justify-content-between\">
                    <div class=\"col-md-6 col-xl-auto\">
                        <div class=\"widget footer-widget\">
                            <div class=\"th-widget-about\">
                                <div class=\"about-logo\">
                                    <a href=\"index.html\"><img src=\"assets/img/logo-white3.svg\" alt=\"Taxiar\"></a>
                                </div>
                                <p class=\"about-text\">Centric applications productize front end portals visualize front
                                    end is results and value added</p>
                                <div class=\"working-time\">
                                    <span class=\"title\">WE ARE AVAILABLE</span>
                                    <p class=\"desc\">Mon-Sat: 09.00 am to 6.30 pm</p>
                                </div>
                                <div class=\"th-social  footer-social\">
                                    <a href=\"https://www.facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a href=\"https://www.twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                    <a href=\"https://www.linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                    <a href=\"https://www.behance.net/\"><i class=\"fa-brands fa-behance\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-xl-2\">
                        <div class=\"widget widget_nav_menu  footer-widget\">
                            <h3 class=\"widget_title\">Quick link</h3>
                            <div class=\"menu-all-pages-container\">
                                <ul class=\"menu\">
                                    <li><a href=\"about.html\">About Us</a></li>
                                    <li><a href=\"booking.html\">Work Gallery</a></li>
                                    <li><a href=\"service.html\">Client Feedback</a></li>
                                    <li><a href=\"service.html\">Our Services</a></li>
                                    <li><a href=\"team.html\">Our Team</a></li>
                                    <li><a href=\"contact.html\">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-xl-auto\">
                        <div class=\"widget footer-widget\">
                            <h3 class=\"widget_title\">Contact Details</h3>
                            <div class=\"th-widget-about\">
                                <h4 class=\"footer-info-title\">Phone Number</h4>
                                <p class=\"footer-info\"><i class=\"fa-sharp fa-solid fa-phone\"></i><a class=\"text-inherit\"
                                        href=\"tel:+468254762443\">+468 254 762 443</a></p>
                                <h4 class=\"footer-info-title\">Email Address</h4>
                                <p class=\"footer-info\"><i class=\"fas fa-envelope\"></i><a class=\"text-inherit\"
                                        href=\"mailto:info@Taxiar@email.com\">Taxiarinfo";
        // line 1280
        yield "@";
        yield "taxiar.com</a></p>
                                <h4 class=\"footer-info-title\">Office Location</h4>
                                <p class=\"footer-info\"><i class=\"fas fa-map-marker-alt\"></i>25 Street, 145 City Road New
                                    Town DD14, USA</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-xl-3\">
                        <div class=\"widget footer-widget\">
                            <h4 class=\"widget_title\">Newsletter</h4>
                            <div class=\"newsletter-widget\">
                                <p class=\"md-20\">Sign Up to get updates ";
        // line 1291
        yield "&";
        yield " news about us . Get Latest Deals from Walkers
                                    Inbox to our mail address.</p>
                                <div class=\"footer-search-contact mt-25\">
                                    <form>
                                        <input class=\"form-control\" type=\"email\" placeholder=\"Enter your email\">
                                    </form>
                                    <div class=\"footer-btn mt-10\">
                                        <button type=\"submit\" class=\"th-btn style3 fw-btn\">Subscribe Now <i
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
                <p class=\"copyright-text\">© 2023 <a href=\"https://themeforest.net/user/themeholy\">Taxiar</a>. All Rights
                    Reserved.</p>
            </div>
        </div>
        <div class=\"footer-shape\"><img src=\"assets/img/shape/footer_shape.png\" alt=\"shape\">
        </div>
    </footer>





    <div class=\"scroll-top\">
        <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
            <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\"
                style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\">
            </path>
        </svg>
    </div>



  <script src=\"";
        // line 1332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/vendor/jquery-3.6.0.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 1334
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/slick.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 1336
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 1338
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 1340
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.counterup.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 1342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/imagesloaded.pkgd.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/isotope.pkgd.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 1345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/nice-select.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 1347
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.datetimepicker.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 1349
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/wow.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 1351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/main.js"), "html", null, true);
        yield "\"></script>

</body>

</html>


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "vitrine.html.twig";
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
        return array (  1685 => 1351,  1680 => 1349,  1675 => 1347,  1670 => 1345,  1665 => 1343,  1661 => 1342,  1656 => 1340,  1651 => 1338,  1646 => 1336,  1641 => 1334,  1636 => 1332,  1592 => 1291,  1578 => 1280,  1441 => 1146,  1175 => 883,  1169 => 880,  1165 => 879,  1158 => 875,  1151 => 871,  1143 => 866,  1130 => 856,  1123 => 852,  1116 => 848,  1109 => 844,  1104 => 842,  1098 => 839,  1085 => 829,  1079 => 826,  1075 => 825,  1068 => 821,  1061 => 817,  1053 => 812,  1040 => 802,  1033 => 798,  1026 => 794,  1019 => 790,  1014 => 788,  1008 => 785,  986 => 766,  980 => 763,  976 => 762,  969 => 758,  962 => 754,  954 => 749,  933 => 731,  905 => 706,  879 => 683,  854 => 661,  830 => 640,  813 => 626,  808 => 624,  792 => 611,  787 => 609,  771 => 596,  766 => 594,  750 => 581,  745 => 579,  700 => 537,  676 => 516,  670 => 513,  588 => 434,  584 => 433,  562 => 414,  558 => 413,  535 => 393,  525 => 386,  461 => 325,  374 => 241,  357 => 227,  314 => 187,  302 => 178,  290 => 169,  278 => 160,  266 => 151,  196 => 84,  155 => 46,  151 => 45,  147 => 44,  143 => 43,  139 => 42,  135 => 41,  121 => 30,  116 => 28,  112 => 27,  108 => 26,  104 => 25,  100 => 24,  96 => 23,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  68 => 16,  64 => 15,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Taxiar - Online Taxi Service HTML Template - Home 1</title>
    <meta name=\"author\" content=\"Taxiar\">
    <meta name=\"description\" content=\"Taxiar - Online Taxi Service HTML Template\">
    <meta name=\"keywords\" content=\"Taxiar - Online Taxi Service HTML Template\">
    <meta name=\"robots\" content=\"INDEX,FOLLOW\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

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


    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link
        href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Radio+Canada:wght@300;400;500;600;700&display=swap\"
        rel=\"stylesheet\">


<link rel=\"stylesheet\" href=\"{{ asset('Front/css/bootstrap.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('Front/css/fontawesome.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('Front/css/magnific-popup.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('Front/css/slick.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('Front/css/jquery.datetimepicker.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('Front/css/style.css') }}\">

</head>

<body class=\"\">






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

    <div class=\"sidemenu-wrapper shopping-cart d-none d-lg-block  \">
        <div class=\"sidemenu-content\">
            <button class=\"closeButton sideMenuCls\"><i class=\"far fa-times\"></i></button>
            <div class=\"widget woocommerce widget_shopping_cart\">
                <h3 class=\"widget_title\">Shopping cart</h3>
                <div class=\"widget_shopping_cart_content\">
                    <ul class=\"woocommerce-mini-cart cart_list product_list_widget\">
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"{{ asset('Front/img/product/product_thumb_1_1.jpg') }}\"
                                    alt=\"Cart Image\">Suspension-Coil</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>94</span>,
                            </span>
                        </li>
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"{{ asset('Front/img/product/product_thumb_1_2.jpg') }}\" alt=\"Cart Image\">absorbers
                                Brake</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>89</span>
                            </span>
                        </li>
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"{{ asset('Front/img/product/product_thumb_1_3.jpg') }}\"
                                    alt=\"Cart Image\">Motorcycle-Shock</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>75</span>
                            </span>
                        </li>
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"{{ asset('Front/img/product/product_thumb_1_4.jpg') }}\" alt=\"Cart Image\">Body
                                Spring</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>72</span>
                            </span>
                        </li>
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"{{ asset('Front/img/product/product_thumb_1_5.jpg') }}\" alt=\"Cart Image\">Body
                                Spring</a>
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

    <div class=\"sidemenu-wrapper d-none d-lg-block  \">
        <div class=\"sidemenu-content bg-title\">
            <button class=\"closeButton sideMenuCls\"><i class=\"far fa-times\"></i></button>
            <div class=\"widget footer-widget\">
                <h3 class=\"widget_title\">About Company</h3>
                <div class=\"th-widget-about\">
                    <p class=\"footer-text\">Centric aplications productize before front end vortals visualize front end
                        is results and value added</p>
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
                            <a href=\"blog-details.html\"><img src=\"{{ asset('Front/img/blog/recent-post-1-2.jpg') }}\"
                                    alt=\"Blog Image\"></a>
                        </div>
                        <div class=\"media-body\">
                            <div class=\"recent-post-meta\">
                                <a href=\"blog.html\"><i class=\"far fa-calendar-days\"></i>22th May, 2023</a>
                            </div>
                            <h4 class=\"post-title\"><a class=\"text-inherit\" href=\"blog-details.html\">How To Start Car
                                    Engine Faster</a></h4>
                            <a class=\"line-btn\" href=\"blog.html\">Read More<i class=\"fa-regular fa-arrow-right\"></i></a>
                        </div>
                    </div>
                    <div class=\"recent-post\">
                        <div class=\"media-img\">
                            <a href=\"blog-details.html\"><img src=\"{{ asset('Front/img/blog/recent-post-1-3.jpg') }}\"
                                    alt=\"Blog Image\"></a>
                        </div>
                        <div class=\"media-body\">
                            <div class=\"recent-post-meta\">
                                <a href=\"blog.html\"><i class=\"far fa-calendar-days\"></i>25th May, 2023</a>
                            </div>
                            <h4 class=\"post-title\"><a class=\"text-inherit\" href=\"blog-details.html\">How to start car
                                    engine slowly</a></h4>
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
                    <div class=\"th-social  style2\">
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


    <header class=\"th-header header-layout7\">
        <div class=\"header-top\">
            <div class=\"container\">
                <div class=\"row justify-content-center justify-content-md-between align-items-center gy-2\">
                    <div class=\"col-auto d-none d-md-block\">
                        <div class=\"header-links\">
                            <ul>
                                <li><i class=\"fa-thin fa-envelope\"></i><a
                                        href=\"mailto:info@taxiar.com\">info@taxiar.com</a>
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
                        <a href=\"index.html\"><img src=\"{{ asset('Front/img/logo3.svg') }}\" alt=\"Taxiar\"></a>
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

    <div class=\"th-hero-wrapper  hero-slider-7 th-carousel\" data-slide-show=\"1\" data-md-slide-show=\"1\" data-fade=\"true\"
        data-dots=\"true\" data-xl-dots=\"true\" data-ml-dots=\"true\" data-lg-dots=\"true\">

        <div class=\"th-hero-slide\">
            <div class=\"th-hero-bg \" data-bg-src=\"{{ asset('Front/img/hero/hero_bg_1_1.jpg') }}\">
                <img src=\"assets/img/hero/hero_overlay_1.png\" alt=\"Hero Image\">
            </div>
            <div class=\"container\">
                <div class=\"hero-style7\">
                    <span class=\"hero-subtitle\" data-ani=\"slideinleft\" data-ani-delay=\"0.1s\">WELCOME TO TAXIAR</span>
                    <h1 class=\"hero-title\" data-ani=\"slideinleft\" data-ani-delay=\"0.3s\">The Best Way To Get Around Town.
                    </h1>
                    <p class=\"hero-text\" data-ani=\"slideinleft\" data-ani-delay=\"0.4s\">Online taxi service is a
                        convenient and affordable way to travel within a city or to nearby destinations. You can book a
                        cab online through various platforms.</p>
                    <div class=\"btn-group\" data-ani=\"slideinleft\" data-ani-delay=\"0.5s\">
                        <a href=\"about.html\" class=\"th-btn style3\">Discover More <i
                                class=\"fa-regular fa-arrow-right\"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"th-hero-slide\">
            <div class=\"th-hero-bg \" data-bg-src=\"{{ asset('Front/img/hero/hero_bg_1_2.jpg') }}\">
                <img src=\"{{ asset('Front/img/hero/hero_overlay_1.png') }}\" alt=\"Hero Image\">
            </div>
            <div class=\"container\">
                <div class=\"hero-style7\">
                    <span class=\"hero-subtitle\" data-ani=\"slideinleft\" data-ani-delay=\"0.1s\">Taxi Driver for Hire</span>
                    <h1 class=\"hero-title\" data-ani=\"slideinleft\" data-ani-delay=\"0.3s\">Need a Ride? Call us anytime!
                    </h1>
                    <p class=\"hero-text\" data-ani=\"slideinleft\" data-ani-delay=\"0.4s\">Online taxi service is a
                        convenient and affordable way to travel within a city or to nearby destinations. You can book a
                        cab online through various platforms.</p>
                    <div class=\"btn-group\" data-ani=\"slideinleft\" data-ani-delay=\"0.5s\">
                        <a href=\"about.html\" class=\"th-btn style3\">Discover More <i
                                class=\"fa-regular fa-arrow-right\"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"th-hero-slide\">
            <div class=\"th-hero-bg \" data-bg-src=\"{{ asset('Front/img/hero/hero_bg_1_3.jpg') }}\">
                <img src=\"{{ asset('Front/img/hero/hero_overlay_1.png') }}\" alt=\"Hero Image\">
            </div>
            <div class=\"container\">
                <div class=\"hero-style7\">
                    <span class=\"hero-subtitle\" data-ani=\"slideinleft\" data-ani-delay=\"0.1s\">24/7 Online Taxi Booking
                        Service</span>
                    <h1 class=\"hero-title\" data-ani=\"slideinleft\" data-ani-delay=\"0.3s\">A different kind of taxi company
                    </h1>
                    <p class=\"hero-text\" data-ani=\"slideinleft\" data-ani-delay=\"0.4s\">Online taxi service is a
                        convenient and affordable way to travel within a city or to nearby destinations. You can book a
                        cab online.</p>
                    <div class=\"btn-group\" data-ani=\"slideinleft\" data-ani-delay=\"0.5s\">
                        <a href=\"about.html\" class=\"th-btn style3\">Discover More <i
                                class=\"fa-regular fa-arrow-right\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"booking-section\">
        <div class=\"container\">
            <form action=\"mail.php\" method=\"POST\" class=\"booking-form ajax-contact wow fadeInUp\">
                <div class=\"input-wrap\">
                    <div class=\"row\">
                        <div class=\"form-group col-xl-3 col-lg-4 col-sm-6\">
                            <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"Your Name\">
                            <i class=\"fa-light fa-user\"></i>
                        </div>
                        <div class=\"form-group col-xl-3 col-lg-4 col-sm-6\">
                            <input type=\"number\" class=\"form-control\" name=\"phone\" id=\"phone\"
                                placeholder=\"Phone Number\">
                            <i class=\"fa-light fa-phone-rotary\"></i>
                        </div>
                        <div class=\"form-group col-xl-3 col-lg-4 col-sm-6\">
                            <select name=\"passenger\" id=\"passenger\" class=\"form-select nice-select\">
                                <option value=\"\" disabled selected hidden>passenger</option>
                                <option value=\"passenger1\">passenger 1</option>
                                <option value=\"passenger2\">passenger 2</option>
                                <option value=\"passenger3\">passenger 3</option>
                                <option value=\"passenger4\">passenger 4</option>
                            </select>
                        </div>
                        <div class=\"form-group col-xl-3 col-lg-4 col-sm-6\">
                            <input type=\"text\" class=\"form-control\" name=\"s-destination\" id=\"s-destination\"
                                placeholder=\"Start Destination\">
                            <i class=\"fa-sharp fa-regular fa-location-dot\"></i>
                        </div>
                        <div class=\"form-group col-xl-3 col-lg-4 col-sm-6\">
                            <input type=\"text\" class=\"form-control\" name=\"e-destination\" id=\"e-destination\"
                                placeholder=\"End Destination\">
                            <i class=\"fa-sharp fa-regular fa-location-dot\"></i>
                        </div>
                        <div class=\"form-group col-xl-3 col-lg-4 col-sm-6\">
                            <input type=\"text\" class=\"date-pick form-control\" name=\"date\" id=\"date-pick\"
                                placeholder=\"Select Date\">
                            <i class=\"fa-light fa-calendar-days\"></i>
                        </div>
                        <div class=\"form-group col-xl-3 col-lg-4 col-sm-6\">
                            <input type=\"text\" class=\"time-pick form-control\" name=\"time\" id=\"time-pick\"
                                placeholder=\"Select Time\">
                            <i class=\"fa-light fa-clock\"></i>
                        </div>
                        <div class=\"form-btn col-xl-3 col-lg-4 col-sm-6\">
                            <button class=\"th-btn\">Book Taxi Now <i class=\"fa-regular fa-arrow-right\"></i></button>
                        </div>
                    </div>
                    <p class=\"form-messages mb-0 mt-3\"></p>
                </div>
            </form>
        </div>
    </div>

    <div class=\"space\" id=\"about-sec\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-6 mb-5 mb-xl-0\">
                    <div class=\"img-box7 wow fadeInLeft\">
                        <div class=\"img1\">
                            <img src=\"{{ asset('Front/img/normal/about_1_1.jpg') }}\" alt=\"About\">
                        </div>
                        <div class=\"img2\">
                            <img src=\"{{ asset('Front/img/normal/about_1_2.jpg') }}\" alt=\"About\">
                        </div>
                        <div class=\"journey-box\">
                            <h3 class=\"journey-title\">Started Journey</h3>
                            <span class=\"journey-year\">1986</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-6\">
                    <div class=\"ps-xxl-5 ms-xl-4 wow fadeInRight\">
                        <div class=\"title-area mb-20\">
                            <span class=\"sub-title\">ABOUT OUR COMPANY</span>
                            <h2 class=\"sec-title\">Wherever You Need To Go We'll Take You There.</h2>
                        </div>
                        <p class=\"mb-30\">Authoritatively simplify open-source resources via
                            backend
                            visualize business e-markets before parallel convergence optimize sticky and idea-sharing
                            rather
                            than unique solutions.</p>
                        <div class=\"journey-wrap style2\">
                            <div class=\"journey-image\">
                                <img src=\"{{ asset('Front/img/normal/map.jpg') }}\" alt=\"\">
                            </div>
                            <div class=\"checklist\">
                                <ul>
                                    <li>Easy & Emergency Solutions Anytime</li>
                                    <li>Getting Affordable price upto 2 years</li>
                                    <li>More Reliable & Experienced Teams</li>
                                </ul>
                            </div>
                        </div>
                        <a href=\"about.html\" class=\"th-btn\"><span class=\"btn-text\">Discover More<i
                                    class=\"fa-regular fa-arrow-right ms-2\"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class=\"ser-area bg-smoke overflow-hidden space\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-8 col-xl-6\">
                    <div class=\"title-area text-center text-lg-start\">
                        <span class=\"sub-title\">Our Services</span>
                        <h2 class=\"sec-title\">Best Taxi Services For You</h2>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"sec-btn\">
                        <div class=\"icon-box\">
                            <button data-slick-prev=\"#serviceSlide\" class=\"slick-arrow default\"><i
                                    class=\"far fa-arrow-left\"></i></button>
                            <button data-slick-next=\"#serviceSlide\" class=\"slick-arrow default\"><i
                                    class=\"far fa-arrow-right\"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row slider-shadow th-carousel\" id=\"serviceSlide\" data-slide-show=\"3\" data-lg-slide-show=\"3\"
                data-md-slide-show=\"2\" data-sm-slide-show=\"1\" data-xs-slide-show=\"1\">

                <div class=\"col-md-6 col-lg-4 col-xl-3  \">
                    <div class=\"service-item wow fadeInUp\" data-bg-src=\"{{ asset('Front/img/service/service_shape_1.jpg') }}\">
                        <div class=\"service-item_img\">
                            <img src=\"{{ asset('Front/img/service/service-6-1.jpg') }}\" alt=\"service image\">
                        </div>
                        <div class=\"service-item_content\">
                            <h3 class=\"service-item_title\"><a href=\"service-details.html\">Rapid City Transfer</a></h3>
                            <p class=\"service-item_text\">Rapid city transfer is a term used by some taxi or cab services
                                to describe their service of bringing.</p>
                            <a href=\"service-details.html\" class=\"line-btn\">Learn More<i
                                    class=\"fa-regular fa-arrow-right ms-2\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-6 col-lg-4 col-xl-3  \">
                    <div class=\"service-item wow fadeInUp\" data-bg-src=\"{{ asset('Front/img/service/service_shape_1.jpg') }}\">
                        <div class=\"service-item_img\">
                            <img src=\"{{ asset('Front/img/service/service-6-2.jpg') }}\" alt=\"service image\">
                        </div>
                        <div class=\"service-item_content\">
                            <h3 class=\"service-item_title\"><a href=\"service-details.html\">Online Booking</a></h3>
                            <p class=\"service-item_text\">Online taxi service is a convenient and affordable way to
                                travel within a city or to nearby destinations.</p>
                            <a href=\"service-details.html\" class=\"line-btn\">Learn More<i
                                    class=\"fa-regular fa-arrow-right ms-2\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-6 col-lg-4 col-xl-3  \">
                    <div class=\"service-item wow fadeInUp\" data-bg-src=\"{{ asset('Front/img/service/service_shape_1.jpg') }}\">
                        <div class=\"service-item_img\">
                            <img src=\"{{ asset('Front/img/service/service-6-3.jpg') }}\" alt=\"service image\">
                        </div>
                        <div class=\"service-item_content\">
                            <h3 class=\"service-item_title\"><a href=\"service-details.html\">Airport Transport</a></h3>
                            <p class=\"service-item_text\">It can include different types of vehicles, such as taxis, car
                                hire, airport transfers, airport shuttles, airport buses, etc.</p>
                            <a href=\"service-details.html\" class=\"line-btn\">Learn More<i
                                    class=\"fa-regular fa-arrow-right ms-2\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-6 col-lg-4 col-xl-3  \">
                    <div class=\"service-item wow fadeInUp\" data-bg-src=\"{{ asset('Front/img/service/service_shape_1.jpg') }}\">
                        <div class=\"service-item_img\">
                            <img src=\"{{ asset('Front/img/service/service-6-4.jpg') }}\" alt=\"service image\">
                        </div>
                        <div class=\"service-item_content\">
                            <h3 class=\"service-item_title\"><a href=\"service-details.html\">Business Transport</a></h3>
                            <p class=\"service-item_text\">Business transport refers to the transportation services and
                                methods used by businesses to move goods, equipment.</p>
                            <a href=\"service-details.html\" class=\"line-btn\">Learn More<i
                                    class=\"fa-regular fa-arrow-right ms-2\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"shape-mockup d-none d-xxl-block\" data-top=\"0%\" data-right=\"-0.5%\"><img
                src=\"{{ asset('Front/img/normal/service_shape_1.png') }}
    </section>\" alt=\"shapes\"></div>

    <section class=\"space\">
        <div class=\"container\">
            <div class=\"title-area text-center\">
                <span class=\"sub-title\">Team Members<span class=\"double-line\"></span></span>
                <h2 class=\"sec-title\">Our Expert Drivers</h2>
            </div>
            <div class=\"row slider-shadow th-carousel\" data-slide-show=\"4\" data-lg-slide-show=\"3\" data-md-slide-show=\"2\"
                data-sm-slide-show=\"2\" data-arrows=\"true\">
      
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"team-item wow fadeInUp\">
                        <div class=\"team-img\">
    
<div class=\"row\">

    <div class=\"col-md-6 col-lg-4\">
        <div class=\"team-item wow fadeInUp\">
            <div class=\"team-img\">
                <img src=\"{{ asset('Front/img/team/team_1_1.jpg') }}\" alt=\"Team\">
            </div>
            <div class=\"team-item_content\">
                <span class=\"team-item_desig\">Expert Driver</span>
                <div class=\"th-social team-social\">
                    <a target=\"_blank\" href=\"https://facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                    <a target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                    <a target=\"_blank\" href=\"https://linkedin.com/\"><i class=\"fa-brands fa-linkedin-in\"></i></a>
                </div>
            </div>
            <div class=\"info-item\">
                <h3 class=\"team-item_title\"><a href=\"/a.html\">Sophia Isabella</a></h3>
                <span class=\"team-item_desig\">Expert Driver</span>
            </div>
        </div>
    </div>
    

    <div class=\"col-md-6 col-lg-4\">
        <div class=\"team-item wow fadeInUp\">
            <div class=\"team-img\">
                <img src=\"{{ asset('Front/img/team/team_1_2.jpg') }}\" alt=\"Team\">
            </div>
            <div class=\"team-item_content\">
                <h3 class=\"team-item_title\"><a href=\"/a.html\">Emma Margaret</a></h3>
                <span class=\"team-item_desig\">Senior Driver</span>
                <div class=\"th-social team-social\">
                    <a target=\"_blank\" href=\"https://facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                    <a target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                    <a target=\"_blank\" href=\"https://linkedin.com/\"><i class=\"fa-brands fa-linkedin-in\"></i></a>
                </div>
            </div>
            <div class=\"info-item\">
                <h3 class=\"team-item_title\"><a href=\"/a.html\">Emma Margaret</a></h3>
                <span class=\"team-item_desig\">Senior Driver</span>
            </div>
        </div>
    </div>
    

    <div class=\"col-md-6 col-lg-4\">
        <div class=\"team-item wow fadeInUp\">
            <div class=\"team-img\">
                <img src=\"{{ asset('Front/img/team/team_1_3.jpg') }}\" alt=\"Team\">
            </div>
            <div class=\"team-item_content\">
                <h3 class=\"team-item_title\"><a href=\"a.html\">Jacob Michael</a></h3>
                <span class=\"team-item_desig\">Junior Driver</span>
                <div class=\"th-social team-social\">
                    <a target=\"_blank\" href=\"https://facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                    <a target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                    <a target=\"_blank\" href=\"https://linkedin.com/\"><i class=\"fa-brands fa-linkedin-in\"></i></a>
                </div>
            </div>
            <div class=\"info-item\">
                <h3 class=\"team-item_title\"><a href=\"/a.html\">Jacob Michael</a></h3>
                <span class=\"team-item_desig\">Junior Driver</span>
            </div>
        </div>
    </div>
    
 
</div>


Taxi Area  

<section class=\"bg-top-center space\" data-bg-src=\"{{ asset('Front/img/bg/taxi_bg_2.jpg') }}\">
    <div class=\"container\">
        <div class=\"title-area text-center\">
            <span class=\"sub-title\">Our Taxi<span class=\"double-line\"></span></span>
            <h2 class=\"sec-title text-white text-capitalize\">Choose Our Taxi Collection</h2>
        </div>
        <div class=\"nav tab-menu4 style2\" id=\"tab-menu4\" role=\"tablist\">
            <button class=\"active\" id=\"nav-one-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-one\" type=\"button\" role=\"tab\" aria-controls=\"nav-one\" aria-selected=\"true\">Town Taxi</button>
            <button class=\"\" id=\"nav-two-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-two\" type=\"button\" role=\"tab\" aria-controls=\"nav-two\" aria-selected=\"false\">Limousine Taxi</button>
            <button class=\"\" id=\"nav-three-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-three\" type=\"button\" role=\"tab\" aria-controls=\"nav-three\" aria-selected=\"false\">Hybrid Taxi</button>
        </div>
        <div class=\"tab-content\">
     
            <div class=\"tab-pane fade show active\" id=\"nav-one\" role=\"tabpanel\" aria-labelledby=\"nav-one-tab\">
                <div class=\"row slider-shadow th-carousel\" data-slide-show=\"3\" data-lg-slide-show=\"2\" data-md-slide-show=\"2\" data-arrows=\"true\">
                    <div class=\"col-auto\">
                        <div class=\"taxi-item wow fadeInUp\">
                            <div class=\"taxi-item_img\">
                                <img src=\"{{ asset('Front/img/taxi/taxi_1_1.png') }}\" alt=\"service image\">
                            </div>
                            <h3 class=\"taxi-item_title\"><a href=\"a.html\">BMW X6 2023</a></h3>
                            <p class=\"taxi-item_subtitle\">\$0.85/km</p>
                            <div class=\"taxi-item_feature\">
                                <span><img src=\"{{ asset('Front/img/icon/taxi_f_2_1.svg') }}\" alt=\"\">Passengers</span>
                                <span class=\"taxi-item_info\">4</span>
                            </div>
                            <div class=\"taxi-item_feature\">
                                <span><img src=\"{{ asset('Front/img/icon/taxi_f_2_2.svg') }}\" alt=\"\">Luggage's:</span>
                                <span class=\"taxi-item_info\">2</span>
                            </div>
                            <div class=\"taxi-item_feature\">
                                <span><img src=\"{{ asset('Front/img/icon/taxi_f_2_3.svg') }}\" alt=\"\">Base Rate:</span>
<span class=\"taxi-item_info\">{{ '\$' }}10.50</span>
                            </div>
                            <div class=\"taxi-item_feature\">
                                <span><img src=\"{{ asset('Front/img/icon/taxi_f_2_4.svg') }}\" alt=\"\">Air Conditioner:</span>
                                <span class=\"taxi-item_info\">yes</span>
                            </div>
                            <a href=\"a.html\" class=\"th-btn fw-btn\">book Now Taxi<i class=\"fa-regular fa-arrow-right ms-2\"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</section>
<div class=\"tab-pane fade\" id=\"nav-three\" role=\"tabpanel\" aria-labelledby=\"nav-three-tab\">
    <div class=\"row slider-shadow th-carousel\" data-slide-show=\"3\" data-lg-slide-show=\"2\"
        data-md-slide-show=\"2\" data-arrows=\"true\">
        <div class=\"col-auto\">
            <div class=\"taxi-item\">
                <div class=\"taxi-item_img\">
                    <img src=\"{{ asset('Front/img/taxi/taxi_1_1.png') }}\" alt=\"service image\">
                </div>
                <h3 class=\"taxi-item_title\"><a href=\"a.html\">BMW X6 2030</a></h3>
                <p class=\"taxi-item_subtitle\">{{ '\$' }}0.88/km</p>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"{{ asset('Front/img/icon/taxi_f_2_1.svg') }}\" alt=\"\">Passengers</span>
                    <span class=\"taxi-item_info\">4</span>
                </div>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"{{ asset('Front/img/icon/taxi_f_2_2.svg') }}\" alt=\"\">Luggage's:</span>
                    <span class=\"taxi-item_info\">2</span>
                </div>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"{{ asset('Front/img/icon/taxi_f_2_3.svg') }}\" alt=\"\">Base Rate:</span>
                    <span class=\"taxi-item_info\">\$10.50</span>
                </div>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"{{ asset('Front/img/icon/taxi_f_2_4.svg') }}\" alt=\"\">Air Conditioner:</span>
                    <span class=\"taxi-item_info\">yes</span>
                </div>
                <a href=\"a.html\" class=\"th-btn fw-btn\">book Now Taxi<i
                        class=\"fa-regular fa-arrow-right ms-2\"></i></a>
            </div>
        </div>
        <div class=\"col-auto\">
            <div class=\"taxi-item\">
                <div class=\"taxi-item_img\">
                    <img src=\"{{ asset('Front/img/taxi/taxi_1_4.png') }}\" alt=\"service image\">
                </div>
                <h3 class=\"taxi-item_title\"><a href=\"a.html\">BMW M7 2031</a></h3>
                <p class=\"taxi-item_subtitle\">\$0.95/km</p>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"{{ asset('Front/img/icon/taxi_f_2_1.svg') }}\" alt=\"\">Passengers</span>
                    <span class=\"taxi-item_info\">4</span>
                </div>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"{{ asset('Front/img/icon/taxi_f_2_2.svg') }}\" alt=\"\">Luggage's:</span>
                    <span class=\"taxi-item_info\">2</span>
                </div>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"{{ asset('Front/img/icon/taxi_f_2_3.svg') }}\" alt=\"\">Base Rate:</span>
                    <span class=\"taxi-item_info\">{{ '\$' }}10.50</span>
                </div>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"{{ asset('Front/img/icon/taxi_f_2_4.svg') }}\" alt=\"\">Air Conditioner:</span>
                    <span class=\"taxi-item_info\">yes</span>
                </div>
                <a href=\"a.html\" class=\"th-btn fw-btn\">book Now Taxi<i
                        class=\"fa-regular fa-arrow-right ms-2\"></i></a>
            </div>
        </div>
        <div class=\"col-auto\">
            <div class=\"taxi-item\">
                <div class=\"taxi-item_img\">
                    <img src=\"{{ asset('Front/img/taxi/taxi_1_3.png') }}\" alt=\"service image\">
                </div>
                <h3 class=\"taxi-item_title\"><a href=\"a.html\">BMW A5 2035</a></h3>
                <p class=\"taxi-item_subtitle\">{{ '\$' }}0.89/km</p>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"{{ asset('Front/img/icon/taxi_f_2_1.svg') }}\" alt=\"\">Passengers</span>
                    <span class=\"taxi-item_info\">4</span>
                </div>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"{{ asset('Front/img/icon/taxi_f_2_2.svg') }}\" alt=\"\">Luggage's:</span>
                    <span class=\"taxi-item_info\">2</span>
                </div>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"{{ asset('Front/img/icon/taxi_f_2_3.svg') }}\" alt=\"\">Base Rate:</span>
                    <span class=\"taxi-item_info\">\$10.50</span>
                </div>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"{{ asset('Front/img/icon/taxi_f_2_4.svg') }}\" alt=\"\">Air Conditioner:</span>
                    <span class=\"taxi-item_info\">yes</span>
                </div>
                <a href=\"a.html\" class=\"th-btn fw-btn\">book Now Taxi<i
                        class=\"fa-regular fa-arrow-right ms-2\"></i></a>
            </div>
        </div>
        <div class=\"col-auto\">
            <div class=\"taxi-item\">
                <div class=\"taxi-item_img\">
                    <img src=\"{{ asset('Front/img/taxi/taxi_1_5.png') }}\" alt=\"service image\">
                </div>
                <h3 class=\"taxi-item_title\"><a href=\"a.html\">BMW A5 2036</a></h3>
                <p class=\"taxi-item_subtitle\">\$0.93/km</p>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"{{ asset('Front/img/icon/taxi_f_2_1.svg') }}\" alt=\"\">Passengers</span>
                    <span class=\"taxi-item_info\">4</span>
                </div>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"{{ asset('Front/img/icon/taxi_f_2_2.svg') }}\" alt=\"\">Luggage's:</span>
                    <span class=\"taxi-item_info\">2</span>
                </div>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"{{ asset('Front/img/icon/taxi_f_2_3.svg') }}\" alt=\"\">Base Rate:</span>
                    <span class=\"taxi-item_info\">{{ '\$' }}10.50</span>
                </div>
                <div class=\"taxi-item_feature\">
                    <span><img src=\"{{ asset('Front/img/icon/taxi_f_2_4.svg') }}\" alt=\"\">Air Conditioner:</span>
                    <span class=\"taxi-item_info\">yes</span>
                </div>
                <a href=\"a.html\" class=\"th-btn fw-btn\">book Now Taxi<i
                        class=\"fa-regular fa-arrow-right ms-2\"></i></a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>

    <section class=\"download-area3 overflow-hidden space-top\" data-bg-src=\"assets/img/bg/download_bg_3.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-6 text-center text-xl-start wow fadeInLeft\">
                    <div class=\"title-area mb-30\">
                        <span class=\"sub-title\">Download Taxiar App Now</span>
                        <h2 class=\"sec-title text-capitalize\">Get A Free Taxiar App From Online Store</h2>
                        <p class=\"sec-text\">Competently re-engineer cross-media meta-services whereas best of breed
                            processes matrix just in time content...</p>
                    </div>
                    <div class=\"download-btn-wrap style2\">
                        <a target=\"_blank\" href=\"https://play.google.com/\" class=\"download-btn\">
                            <i class=\"fa-brands fa-google-play\"></i>
                            <div class=\"text-group\">
                                <span class=\"small-text\">Download From</span>
                                <h6 class=\"big-text\">Google Play</h6>
                            </div>
                        </a>
                        <a target=\"_blank\" href=\"https://www.apple.com/store\" class=\"download-btn style2\">
                            <i class=\"fa-brands fa-apple\"></i>
                            <div class=\"text-group\">
                                <span class=\"small-text\">Download From</span>
                                <h6 class=\"big-text\">App Store</h6>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=\"col-xl-6\">
                    <div class=\"download-image wow fadeInRight\">
                        <img src=\"assets/img/bg/phone_1.png\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <div class=\"feature-area  \" data-bg-src=\"assets/img/bg/counter_bg_2.jpg\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-xl-5\">
                    <div class=\"feature-video wow fadeInLeft\">
                        <img src=\"assets/img/normal/video_1.jpg\" alt=\"cta bg\">
                        <a href=\"https://www.youtube.com/watch?v=CcpvU_pzR-s\" class=\"play-btn popup-video\"><i
                                class=\"fas fa-play\"></i></a>
                    </div>
                </div>
                <div class=\"col-xl-7\">
                    <div class=\"ps-xxl-5 ms-xl-5 wow fadeInRight\">
                        <div class=\"title-area text-center text-xl-start\">
                            <span class=\"sub-title\">Why Choose Us</span>
                            <h2 class=\"sec-title text-white\">We Ensure Your Happy To Taxi Journey</h2>
                        </div>
                        <div class=\"counter-wrap style2\">
                            <div class=\"counter-line\"></div>
                            <div class=\"counter-wrapper\">
                                <div class=\"counter-card style2\">
                                    <div class=\"counter-card_icon\">
                                        <img src=\"assets/img/icon/counter_2_1.svg\" alt=\"icon\">
                                    </div>
                                    <div class=\"counter-card_number\"><span class=\"counter-number\">32.5</span>k<span
                                            class=\"text-theme\">+</span>
                                    </div>
                                    <p class=\"counter-card_text\">Special Vehicles</p>
                                </div>
                                <div class=\"counter-card style2\">
                                    <div class=\"counter-card_icon\">
                                        <img src=\"assets/img/icon/counter_2_2.svg\" alt=\"icon\">
                                    </div>
                                    <div class=\"counter-card_number\"><span class=\"counter-number\">13.8</span>k<span
                                            class=\"text-theme\">+</span>
                                    </div>
                                    <p class=\"counter-card_text\">People Dropped</p>
                                </div>
                                <div class=\"counter-card style2\">
                                    <div class=\"counter-card_icon\">
                                        <img src=\"assets/img/icon/counter_2_3.svg\" alt=\"icon\">
                                    </div>
                                    <div class=\"counter-card_number\"><span class=\"counter-number\">65.2</span>k<span
                                            class=\"text-theme\">+</span>
                                    </div>
                                    <p class=\"counter-card_text\">Satisfied Clients</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"space overflow-hidden\">
        <div class=\"container\">
            <div class=\"title-area text-center\">
                <span class=\"brand-title\">
                    <span class=\"counter-card_number\"><span class=\"counter-number\">10</span>k+<span
                            class=\"counter-title\">Our Trusted Partner</span></span>
                </span>
            </div>
            <div class=\"row brand-slide th-carousel\" data-slide-show=\"5\" data-lg-slide-show=\"4\" data-md-slide-show=\"3\"
                data-sm-slide-show=\"2\" data-xs-slide-show=\"2\">
                <div class=\"col-auto brand-img style2  wow fadeInLeft\">
                    <img src=\"assets/img/brand/brand_1_1.png\" alt=\"Brand Logo\">
                </div>
                <div class=\"col-auto brand-img style2  wow fadeInLeft\">
                    <img src=\"assets/img/brand/brand_1_2.png\" alt=\"Brand Logo\">
                </div>
                <div class=\"col-auto brand-img style2  wow fadeInLeft\">
                    <img src=\"assets/img/brand/brand_1_3.png\" alt=\"Brand Logo\">
                </div>
                <div class=\"col-auto brand-img style2  wow fadeInLeft\">
                    <img src=\"assets/img/brand/brand_1_4.png\" alt=\"Brand Logo\">
                </div>
                <div class=\"col-auto brand-img style2  wow fadeInLeft\">
                    <img src=\"assets/img/brand/brand_1_5.png\" alt=\"Brand Logo\">
                </div>
            </div>
        </div>
    </div>

    <section class=\"bg-smoke space\" data-bg-src=\"assets/img/bg/testimonial_bg_1.jpg\">
        <div class=\"container\">
            <div class=\"row justify-content-center justify-content-lg-between align-items-center\">
                <div class=\"col-lg-8\">
                    <div class=\"title-area text-center text-lg-start\">
                        <span class=\"sub-title\">Client’s Testimonial</span>
                        <h2 class=\"sec-title\">Our Happy Client’s Review</h2>
                    </div>
                </div>
                <div class=\"col-auto\">
                    <div class=\"sec-btn\">
                        <div class=\"icon-item\">
                            <button data-slick-prev=\"#testiSlide\" class=\"slick-arrow default\"><i
                                    class=\"far fa-arrow-left\"></i></button>
                            <button data-slick-next=\"#testiSlide\" class=\"slick-arrow default\"><i
                                    class=\"far fa-arrow-right\"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row slider-shadow th-carousel\" id=\"testiSlide\" data-slide-show=\"3\" data-lg-slide-show=\"2\"
                data-md-slide-show=\"2\">
                <div class=\"col-md-6 col-xl-4\">
                    <div class=\"testi-item  wow fadeInUp\">
                        <p class=\"testi-item_text\">“Proactively synthesize schemas before foster like leveraged
                            expertise user friendly business low before open.”</p>
                        <div class=\"testi-item_wrapper\">
                            <div class=\"testi-item_profile\">
                                <div class=\"testi-item_img\">
                                    <img src=\"assets/img/testimonial/testi_3_1.jpg\" alt=\"Avater\">
                                </div>
                                <div class=\"media-body\">
                                    <h3 class=\"testi-item_name\">David Smith</h3>
                                    <p class=\"testi-item_desig\">Head Of Growth</p>
                                </div>
                            </div>
                            <div class=\"testi-item_quote\"><img src=\"assets/img/icon/quote_2.svg\" alt=\"quote\"></div>
                        </div>
                        <div class=\"testi-item_review\">
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-4\">
                    <div class=\"testi-item  wow fadeInUp\">
                        <p class=\"testi-item_text\">“Groactively synthesize schemas before foster like leveraged
                            expertise user friendly business source iterate.”</p>
                        <div class=\"testi-item_wrapper\">
                            <div class=\"testi-item_profile\">
                                <div class=\"testi-item_img\">
                                    <img src=\"assets/img/testimonial/testi_3_2.jpg\" alt=\"Avater\">
                                </div>
                                <div class=\"media-body\">
                                    <h3 class=\"testi-item_name\">Emily Isabella</h3>
                                    <p class=\"testi-item_desig\">Bank Manager</p>
                                </div>
                            </div>
                            <div class=\"testi-item_quote\"><img src=\"assets/img/icon/quote_2.svg\" alt=\"quote\"></div>
                        </div>
                        <div class=\"testi-item_review\">
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-4\">
                    <div class=\"testi-item  wow fadeInUp\">
                        <p class=\"testi-item_text\">“Troactively synthesize schemas before foster like leveraged
                            expertise user friendly business low before open.”</p>
                        <div class=\"testi-item_wrapper\">
                            <div class=\"testi-item_profile\">
                                <div class=\"testi-item_img\">
                                    <img src=\"assets/img/testimonial/testi_3_3.jpg\" alt=\"Avater\">
                                </div>
                                <div class=\"media-body\">
                                    <h3 class=\"testi-item_name\">Harry Callum</h3>
                                    <p class=\"testi-item_desig\">CEO Founder</p>
                                </div>
                            </div>
                            <div class=\"testi-item_quote\"><img src=\"assets/img/icon/quote_2.svg\" alt=\"quote\"></div>
                        </div>
                        <div class=\"testi-item_review\">
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-4\">
                    <div class=\"testi-item  wow fadeInUp\">
                        <p class=\"testi-item_text\">“Jroactively synthesize schemas before foster like leveraged
                            expertise user friendly open source schemas.”</p>
                        <div class=\"testi-item_wrapper\">
                            <div class=\"testi-item_profile\">
                                <div class=\"testi-item_img\">
                                    <img src=\"assets/img/testimonial/testi_3_4.jpg\" alt=\"Avater\">
                                </div>
                                <div class=\"media-body\">
                                    <h3 class=\"testi-item_name\">Marcos Manuel </h3>
                                    <p class=\"testi-item_desig\">Bank Manager</p>
                                </div>
                            </div>
                            <div class=\"testi-item_quote\"><img src=\"assets/img/icon/quote_2.svg\" alt=\"quote\"></div>
                        </div>
                        <div class=\"testi-item_review\">
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                            <i class=\"fa-solid fa-star-sharp\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"space\">
        <div class=\"container\">
            <div class=\"title-area text-center\">
                <span class=\"sub-title ms-0\">Our News Update<span class=\"double-line\"></span></span>
                <h2 class=\"sec-title\">Latest News {{ '&' }} Blog Post</h2>
            </div>
            <div class=\"row th-carousel slider-shadow\" data-slide-show=\"3\" data-lg-slide-show=\"2\" data-md-slide-show=\"2\"
                data-sm-slide-show=\"1\" data-arrows=\"true\" data-xl-arrows=\"true\" data-ml-arrows=\"true\">
                <div class=\"col-md-6 col-xl-4\">
                    <div class=\"blog-item wow fadeInUp\">
                        <div class=\"blog-img\">
                            <img src=\"assets/img/blog/blog_4_1.jpg\" alt=\"blog image\">
                            <a class=\"blog-date\" href=\"blog.html\"><span class=\"month\">15</span>
                                May, 2023</a>
                        </div>
                        <div class=\"blog-content\">
                            <div class=\"blog-meta style2\">
                                <a href=\"blog.html\">by Admin</a>
                                <a href=\"blog.html\">Comments(03)</a>
                            </div>
                            <h3 class=\"blog-item_title\"><a href=\"blog-details.html\">Tensive quality vectors life through
                                    strategis</a></h3>
                            <a href=\"blog-details.html\" class=\"link-btn\">Learn More <i
                                    class=\"fas fa-arrow-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-4\">
                    <div class=\"blog-item wow fadeInDown\">
                        <div class=\"blog-img\">
                            <img src=\"assets/img/blog/blog_4_2.jpg\" alt=\"blog image\">
                            <a class=\"blog-date\" href=\"blog.html\"><span class=\"month\">16</span>
                                May, 2023</a>
                        </div>
                        <div class=\"blog-content\">
                            <div class=\"blog-meta style2\">
                                <a href=\"blog.html\">by Admin</a>
                                <a href=\"blog.html\">Comments(03)</a>
                            </div>
                            <h3 class=\"blog-item_title\"><a href=\"blog-details.html\">How to start initiating an startup
                                    in few days.</a></h3>
                            <a href=\"blog-details.html\" class=\"link-btn\">Learn More <i
                                    class=\"fas fa-arrow-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-4\">
                    <div class=\"blog-item wow fadeInUp\">
                        <div class=\"blog-img\">
                            <img src=\"assets/img/blog/blog_4_3.jpg\" alt=\"blog image\">
                            <a class=\"blog-date\" href=\"blog.html\"><span class=\"month\">17</span>
                                May, 2023</a>
                        </div>
                        <div class=\"blog-content\">
                            <div class=\"blog-meta style2\">
                                <a href=\"blog.html\">by Admin</a>
                                <a href=\"blog.html\">Comments(03)</a>
                            </div>
                            <h3 class=\"blog-item_title\"><a href=\"blog-details.html\">Innovative business all over the
                                    world.</a></h3>
                            <a href=\"blog-details.html\" class=\"link-btn\">Learn More <i
                                    class=\"fas fa-arrow-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-4\">
                    <div class=\"blog-item wow fadeInDown\">
                        <div class=\"blog-img\">
                            <img src=\"assets/img/blog/blog_4_4.jpg\" alt=\"blog image\">
                            <a class=\"blog-date\" href=\"blog.html\"><span class=\"month\">18</span>
                                May, 2023</a>
                        </div>
                        <div class=\"blog-content\">
                            <div class=\"blog-meta style2\">
                                <a href=\"blog.html\">by Admin</a>
                                <a href=\"blog.html\">Comments(03)</a>
                            </div>
                            <h3 class=\"blog-item_title\"><a href=\"blog-details.html\">Motivate quality vectors life
                                    through vectoeris</a></h3>
                            <a href=\"blog-details.html\" class=\"link-btn\">Learn More <i
                                    class=\"fas fa-arrow-right\"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class=\"footer-wrapper footer-layout7\" data-bg-src=\"assets/img/bg/footer_bg_1.jpg\">
        <div class=\"widget-area\">
            <div class=\"container\">
                <div class=\"row justify-content-between\">
                    <div class=\"col-md-6 col-xl-auto\">
                        <div class=\"widget footer-widget\">
                            <div class=\"th-widget-about\">
                                <div class=\"about-logo\">
                                    <a href=\"index.html\"><img src=\"assets/img/logo-white3.svg\" alt=\"Taxiar\"></a>
                                </div>
                                <p class=\"about-text\">Centric applications productize front end portals visualize front
                                    end is results and value added</p>
                                <div class=\"working-time\">
                                    <span class=\"title\">WE ARE AVAILABLE</span>
                                    <p class=\"desc\">Mon-Sat: 09.00 am to 6.30 pm</p>
                                </div>
                                <div class=\"th-social  footer-social\">
                                    <a href=\"https://www.facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a href=\"https://www.twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                    <a href=\"https://www.linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                    <a href=\"https://www.behance.net/\"><i class=\"fa-brands fa-behance\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-xl-2\">
                        <div class=\"widget widget_nav_menu  footer-widget\">
                            <h3 class=\"widget_title\">Quick link</h3>
                            <div class=\"menu-all-pages-container\">
                                <ul class=\"menu\">
                                    <li><a href=\"about.html\">About Us</a></li>
                                    <li><a href=\"booking.html\">Work Gallery</a></li>
                                    <li><a href=\"service.html\">Client Feedback</a></li>
                                    <li><a href=\"service.html\">Our Services</a></li>
                                    <li><a href=\"team.html\">Our Team</a></li>
                                    <li><a href=\"contact.html\">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-xl-auto\">
                        <div class=\"widget footer-widget\">
                            <h3 class=\"widget_title\">Contact Details</h3>
                            <div class=\"th-widget-about\">
                                <h4 class=\"footer-info-title\">Phone Number</h4>
                                <p class=\"footer-info\"><i class=\"fa-sharp fa-solid fa-phone\"></i><a class=\"text-inherit\"
                                        href=\"tel:+468254762443\">+468 254 762 443</a></p>
                                <h4 class=\"footer-info-title\">Email Address</h4>
                                <p class=\"footer-info\"><i class=\"fas fa-envelope\"></i><a class=\"text-inherit\"
                                        href=\"mailto:info@Taxiar@email.com\">Taxiarinfo{{ '@' }}taxiar.com</a></p>
                                <h4 class=\"footer-info-title\">Office Location</h4>
                                <p class=\"footer-info\"><i class=\"fas fa-map-marker-alt\"></i>25 Street, 145 City Road New
                                    Town DD14, USA</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-xl-3\">
                        <div class=\"widget footer-widget\">
                            <h4 class=\"widget_title\">Newsletter</h4>
                            <div class=\"newsletter-widget\">
                                <p class=\"md-20\">Sign Up to get updates {{ '&' }} news about us . Get Latest Deals from Walkers
                                    Inbox to our mail address.</p>
                                <div class=\"footer-search-contact mt-25\">
                                    <form>
                                        <input class=\"form-control\" type=\"email\" placeholder=\"Enter your email\">
                                    </form>
                                    <div class=\"footer-btn mt-10\">
                                        <button type=\"submit\" class=\"th-btn style3 fw-btn\">Subscribe Now <i
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
                <p class=\"copyright-text\">© 2023 <a href=\"https://themeforest.net/user/themeholy\">Taxiar</a>. All Rights
                    Reserved.</p>
            </div>
        </div>
        <div class=\"footer-shape\"><img src=\"assets/img/shape/footer_shape.png\" alt=\"shape\">
        </div>
    </footer>





    <div class=\"scroll-top\">
        <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
            <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\"
                style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\">
            </path>
        </svg>
    </div>



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

</html>


", "vitrine.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\vitrine.html.twig");
    }
}
