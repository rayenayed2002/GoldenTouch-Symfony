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

/* pack/booking.html.twig */
class __TwigTemplate_5c093f8c485c6e7340e5c9371bbf36db extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pack/booking.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pack/booking.html.twig"));

        // line 1
        yield "<!doctype html>
<html class=\"no-js\" lang=\"zxx\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta name=\"author\" content=\"Taxiar\">
    <meta name=\"description\" content=\"Taxiar - Online Taxi Service HTML Template\">
    <meta name=\"keywords\" content=\"Taxiar - Online Taxi Service HTML Template\">
    <meta name=\"robots\" content=\"INDEX,FOLLOW\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Favicons -->
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-57x57.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-60x60.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-72x72.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-76x76.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-114x114.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-120x120.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-144x144.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-152x152.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-180x180.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/android-icon-192x192.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/favicon-32x32.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/favicon-96x96.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/favicon-16x16.png"), "html", null, true);
        yield "\">
    <link rel=\"manifest\" href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/manifest.json"), "html", null, true);
        yield "\">
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/ms-icon-144x144.png"), "html", null, true);
        yield "\">

    <!-- Google Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Radio+Canada:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

    <!-- CSS Files -->
    <link rel=\"stylesheet\" href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/bootstrap.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/fontawesome.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/magnific-popup.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/slick.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/material_blue.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/style.css"), "html", null, true);
        yield "\">

    ";
        // line 45
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 46
        yield "</head>

<body class=\"\">
    <!--[if lte IE 9]>
        <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

   

    <!-- Mobile Menu -->
    <div class=\"th-menu-wrapper\">
        <div class=\"th-menu-area text-center\">
            <button class=\"th-menu-toggle\"><i class=\"fal fa-times\"></i></button>
            <div class=\"mobile-logo\">
                <a href=\"index.html\"><img src=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo.svg"), "html", null, true);
        yield "\" alt=\"Taxiar\"></a>
            </div>
            <div class=\"th-mobile-menu\">
                <ul>
                    <li class=\"menu-item-has-children\">
                        <a href=\"index.html\">Home</a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"index.html\">Home One</a></li>
                            <li><a href=\"index-2.html\">Home Two</a></li>
                            <li><a href=\"index-3.html\">Home Three</a></li>
                        </ul>
                    </li>
                    <li><a href=\"about.html\">About Us</a></li>
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
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\">Shop</a>
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
                    <li><a href=\"contact.html\">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Sidemenu -->
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
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/product/product_thumb_1_1.jpg"), "html", null, true);
        yield "\" alt=\"Cart Image\">Suspension-Coil</a>
                            <span class=\"quantity\">1 × <span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">\$</span>94</span></span>
                        </li>
                    </ul>
                    <p class=\"woocommerce-mini-cart__total total\">
                        <strong>Subtotal:</strong>
                        <span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">\$</span>318.00</span>
                    </p>
                    <p class=\"woocommerce-mini-cart__buttons buttons\">
                        <a href=\"cart.html\" class=\"th-btn style1 wc-forward\">View cart</a>
                        <a href=\"checkout.html\" class=\"th-btn style1 checkout wc-forward\">Checkout</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Another Sidemenu -->
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
        // line 160
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
        // line 172
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

    <!-- Search Box -->
    <div class=\"popup-search-box d-none d-lg-block\">
        <button class=\"searchClose\"><i class=\"fal fa-times\"></i></button>
        <form action=\"#\">
            <input type=\"text\" placeholder=\"What are you looking for\">
            <button type=\"submit\"><i class=\"fal fa-search\"></i></button>
        </form>
    </div>

    <!-- Header -->
    ";
        // line 213
        yield from $this->loadTemplate("Front/partials/header.html.twig", "pack/booking.html.twig", 213)->unwrap()->yield($context);
        // line 214
        yield "
    ";
        // line 215
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 339
        yield "
    <!-- Footer -->
    ";
        // line 341
        yield from $this->loadTemplate("Front/partials/footer.html.twig", "pack/booking.html.twig", 341)->unwrap()->yield($context);
        // line 342
        yield "
    <!-- Scroll To Top -->
    <div class=\"scroll-top\">
        <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
            <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\"></path>
        </svg>
    </div>

    <!-- JavaScript Files -->
    <script src=\"";
        // line 351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/vendor/jquery-3.6.0.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/slick.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 355
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.counterup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 356
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/imagesloaded.pkgd.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 357
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/isotope.pkgd.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/nice-select.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.datetimepicker.full.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/wow.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/main.js"), "html", null, true);
        yield "\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
    <script src=\"/js/toxicity-detection.js\"></script> <!-- Toxicity Detection for Notes -->
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js\"></script>
    <script src=\"/js/weather-forecast.js\"></script> <!-- Weather Forecast Integration -->

    ";
        // line 368
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 539
        yield "</body>



</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), "html", null, true);
        yield " - Réservation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 215
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 216
        yield "    <!-- Breadcrumb -->
    <div class=\"breadcumb-wrapper\" data-bg-src=\"";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 217, $this->source); })()), "photo", [], "any", false, false, false, 217))), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 217, $this->source); })()), "nom", [], "any", false, false, false, 217), "html", null, true);
        yield "\" data-overlay=\"title\" data-opacity=\"4\">
        <div class=\"container z-index-common\">
            <h1 class=\"breadcumb-title\">Réserver ";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 219, $this->source); })()), "nom", [], "any", false, false, false, 219), "html", null, true);
        yield "</h1>
            <ul class=\"breadcumb-menu\">
                <li><a href=\"";
        // line 221
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_packs");
        yield "\">Accueil</a></li>
                <li><a href=\"";
        // line 222
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index");
        yield "\">Packs</a></li>
                <li>Réservation</li>
            </ul>
        </div>
    </div>

    <!-- Booking Form -->
    <div class=\"position-relative space\">
        <div class=\"container\">
            <div class=\"booking-form\">
                <h3 class=\"mb-4\">Formulaire de réservation</h3>
                
                ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 234, $this->source); })()), "flashes", ["error"], "method", false, false, false, 234));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 235
            yield "                    <div class=\"alert alert-danger\">
                        ";
            // line 236
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_message"], "html", null, true);
            yield "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        yield "                
                ";
        // line 240
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), 'form_start', ["attr" => ["id" => "bookingForm", "class" => "needs-validation", "novalidate" => "novalidate"]]);
        // line 246
        yield "
                
                <div class=\"form-group\">
                    ";
        // line 249
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 249, $this->source); })()), "personCount", [], "any", false, false, false, 249), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nombre de personnes *"]);
        yield "
                    ";
        // line 250
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "personCount", [], "any", false, false, false, 250), 'widget', ["attr" => ["class" => "form-control", "required" => "required", "data-error" => "Veuillez indiquer le nombre de personnes"]]);
        // line 254
        yield "
                    <div class=\"invalid-feedback\" style=\"display: none;\">
                        ";
        // line 256
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 256, $this->source); })()), "personCount", [], "any", false, false, false, 256), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 256, $this->source); })()), "personCount", [], "any", false, false, false, 256), 'errors')) : ("Ce champ est obligatoire"));
        yield "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 261
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 261, $this->source); })()), "eventDate", [], "any", false, false, false, 261), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de l'événement *"]);
        yield "
                    <div class=\"input-group date-picker-container\">
                        ";
        // line 263
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 263, $this->source); })()), "eventDate", [], "any", false, false, false, 263), 'widget', ["attr" => ["class" => "form-control js-datepicker", "placeholder" => "Cliquez pour sélectionner une date", "readonly" => "readonly"]]);
        // line 269
        yield "
                        <div class=\"input-group-append\">
                            <span class=\"input-group-text calendar-icon\"><i class=\"far fa-calendar-alt\"></i></span>
                        </div>
                    </div>
                    <div class=\"invalid-feedback\" style=\"display: none;\">
                        ";
        // line 275
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 275, $this->source); })()), "eventDate", [], "any", false, false, false, 275), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 275, $this->source); })()), "eventDate", [], "any", false, false, false, 275), 'errors')) : ("Ce champ est obligatoire"));
        yield "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 280
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 280, $this->source); })()), "message", [], "any", false, false, false, 280), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Notes et détails *"]);
        yield "
                    ";
        // line 281
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 281, $this->source); })()), "message", [], "any", false, false, false, 281), 'widget', ["attr" => ["class" => "form-control", "rows" => 3, "required" => "required", "data-error" => "Veuillez ajouter des notes et détails", "placeholder" => "Ajoutez votre message et détails supplémentaires"]]);
        // line 287
        yield "
                    <div class=\"invalid-feedback\" style=\"display: none;\">
                        ";
        // line 289
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 289, $this->source); })()), "message", [], "any", false, false, false, 289), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 289, $this->source); })()), "message", [], "any", false, false, false, 289), 'errors')) : ("Ce champ est obligatoire"));
        yield "
                    </div>
                </div>

                <button type=\"submit\" class=\"th-btn style1\">Réserver</button>
                ";
        // line 294
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 294, $this->source); })()), 'form_end');
        yield "
            </div>

            <script>
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.getElementById('bookingForm');
                const invalidFeedbacks = document.querySelectorAll('.invalid-feedback');
                const formControls = form.querySelectorAll('.form-control');

                form.addEventListener('submit', function(event) {
                    let isValid = true;

                    formControls.forEach(function(control) {
                        if (!control.value) {
                            isValid = false;
                            control.classList.add('is-invalid');
                            control.nextElementSibling?.classList.add('d-block');
                            const feedback = control.parentElement.querySelector('.invalid-feedback');
                            if (feedback) {
                                feedback.style.display = 'block';
                            }
                        }
                    });

                    if (!isValid) {
                        event.preventDefault();
                    }
                });

                formControls.forEach(function(control) {
                    control.addEventListener('input', function() {
                        if (this.value) {
                            this.classList.remove('is-invalid');
                            const feedback = this.parentElement.querySelector('.invalid-feedback');
                            if (feedback) {
                                feedback.style.display = 'none';
                            }
                        }
                    });
                });
            });
            </script>
        </div>
    </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 368
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 369
        yield "    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Flatpickr with improved configuration
        const datePickers = document.querySelectorAll('.js-datepicker');
        if (datePickers.length > 0) {
            const tomorrow = new Date();
            tomorrow.setDate(tomorrow.getDate() + 1);
            
            datePickers.forEach(function(el) {
                const fp = flatpickr(el, {
                    dateFormat: \"d/m/Y\",
                    minDate: tomorrow,
                    locale: \"fr\",
                    disableMobile: false,
                    allowInput: false,
                    static: true,
                    monthSelectorType: \"static\",
                    showMonths: 1,
                    animate: true,
                    closeOnSelect: true,
                    onChange: function(selectedDates, dateStr) {
                        // Clear any validation error when a date is selected
                        el.classList.remove('is-invalid');
                        const errorEl = el.parentNode.nextElementSibling;
                        if (errorEl && errorEl.classList.contains('invalid-feedback')) {
                            errorEl.style.display = 'none';
                        }
                    }
                });
                
                // Make the calendar icon clickable to open the picker
                const iconContainer = el.parentNode.querySelector('.calendar-icon');
                if (iconContainer) {
                    iconContainer.addEventListener('click', function() {
                        if (fp) {
                            fp.open();
                        }
                    });
                }
            });
        }
        
        // Form validation and submission
        const bookingForm = document.getElementById('bookingForm');
        if (bookingForm) {
            // Variable pour empêcher les soumissions multiples
            let isSubmitting = false;
            
            bookingForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Empêcher les soumissions multiples
                if (isSubmitting) {
                    console.log('Formulaire déjà en cours de soumission');
                    return;
                }
                
                // Validate date field
                const dateField = bookingForm.querySelector('.js-datepicker');
                if (dateField && !dateField.value) {
                    dateField.classList.add('is-invalid');
                    const errorEl = dateField.parentNode.nextElementSibling;
                    if (errorEl && errorEl.classList.contains('invalid-feedback')) {
                        errorEl.textContent = 'Veuillez sélectionner une date';
                        errorEl.style.display = 'block';
                    }
                    return;
                }

                const submitBtn = bookingForm.querySelector('button[type=\"submit\"]');
                const formData = new FormData(bookingForm);

                // Marquer comme en cours de soumission
                isSubmitting = true;
                
                // Disable submit button and show loading state
                submitBtn.setAttribute('disabled', true);
                submitBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Traitement en cours...';

                fetch(bookingForm.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: \${response.status}`);
                    }
                    const contentType = response.headers.get('content-type');
                    if (contentType && contentType.includes('application/json')) {
                        return response.json();
                    } else {
                        // Si la réponse n'est pas du JSON, c'est probablement une redirection réussie
                        // Afficher SweetAlert avant la redirection
                        Swal.fire({
                            title: 'Succès!',
                            text: 'Votre demande a été enregistrée avec succès',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            window.location.href = response.url;
                        });
                        return null;
                    }
                })
                .then(data => {
                    if (!data) return; // Si null, la redirection a déjà été gérée
                    
                    if (data.success) {
                        // Réinitialiser le formulaire
                        bookingForm.reset();
                        
                        Swal.fire({
                            title: 'Succès!',
                            text: data.message || 'Votre demande a été enregistrée avec succès',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (data.redirect) {
                                window.location.href = '";
        // line 490
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_draft_events");
        yield "';
                            }
                        });
                    } else {
                        // Réactiver le bouton de soumission
                        submitBtn.removeAttribute('disabled');
                        submitBtn.innerHTML = 'Réserver';
                        isSubmitting = false;
                        
                        if (data.errors) {
                            Object.entries(data.errors).forEach(([field, messages]) => {
                                const fieldEl = bookingForm.querySelector(`[name=\"\${field}\"]`);
                                if (fieldEl) {
                                    fieldEl.classList.add('is-invalid');
                                    const errorEl = fieldEl.parentNode.nextElementSibling;
                                    if (errorEl && errorEl.classList.contains('invalid-feedback')) {
                                        errorEl.textContent = messages.join(', ');
                                        errorEl.style.display = 'block';
                                    }
                                }
                            });
                        } else {
                            Swal.fire({
                                title: 'Erreur!',
                                text: data.message || 'Une erreur est survenue lors de la réservation',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    }
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    submitBtn.removeAttribute('disabled');
                    submitBtn.innerHTML = 'Réserver';
                    isSubmitting = false;
                    
                    Swal.fire({
                        title: 'Erreur!',
                        text: 'Le serveur a rencontré un problème. Veuillez réessayer plus tard.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                });
            });
        }
    });
    </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pack/booking.html.twig";
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
        return array (  805 => 490,  682 => 369,  669 => 368,  613 => 294,  605 => 289,  601 => 287,  599 => 281,  595 => 280,  587 => 275,  579 => 269,  577 => 263,  572 => 261,  564 => 256,  560 => 254,  558 => 250,  554 => 249,  549 => 246,  547 => 240,  544 => 239,  535 => 236,  532 => 235,  528 => 234,  513 => 222,  509 => 221,  504 => 219,  497 => 217,  494 => 216,  481 => 215,  459 => 45,  435 => 6,  420 => 539,  418 => 368,  408 => 361,  404 => 360,  400 => 359,  396 => 358,  392 => 357,  388 => 356,  384 => 355,  380 => 354,  376 => 353,  372 => 352,  368 => 351,  357 => 342,  355 => 341,  351 => 339,  349 => 215,  346 => 214,  344 => 213,  300 => 172,  285 => 160,  247 => 125,  179 => 60,  163 => 46,  161 => 45,  156 => 43,  150 => 40,  146 => 39,  142 => 38,  138 => 37,  127 => 29,  122 => 27,  118 => 26,  114 => 25,  110 => 24,  106 => 23,  102 => 22,  98 => 21,  94 => 20,  90 => 19,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  59 => 6,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"zxx\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>{% block title %}{{ pack.nom }} - Réservation{% endblock %}</title>
    <meta name=\"author\" content=\"Taxiar\">
    <meta name=\"description\" content=\"Taxiar - Online Taxi Service HTML Template\">
    <meta name=\"keywords\" content=\"Taxiar - Online Taxi Service HTML Template\">
    <meta name=\"robots\" content=\"INDEX,FOLLOW\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Favicons -->
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

    <!-- Google Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Radio+Canada:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

    <!-- CSS Files -->
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/fontawesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/magnific-popup.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/slick.min.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/material_blue.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/style.css') }}\">

    {% block stylesheets %}{% endblock %}
</head>

<body class=\"\">
    <!--[if lte IE 9]>
        <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

   

    <!-- Mobile Menu -->
    <div class=\"th-menu-wrapper\">
        <div class=\"th-menu-area text-center\">
            <button class=\"th-menu-toggle\"><i class=\"fal fa-times\"></i></button>
            <div class=\"mobile-logo\">
                <a href=\"index.html\"><img src=\"{{ asset('Front/img/logo.svg') }}\" alt=\"Taxiar\"></a>
            </div>
            <div class=\"th-mobile-menu\">
                <ul>
                    <li class=\"menu-item-has-children\">
                        <a href=\"index.html\">Home</a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"index.html\">Home One</a></li>
                            <li><a href=\"index-2.html\">Home Two</a></li>
                            <li><a href=\"index-3.html\">Home Three</a></li>
                        </ul>
                    </li>
                    <li><a href=\"about.html\">About Us</a></li>
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
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\">Shop</a>
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
                    <li><a href=\"contact.html\">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Sidemenu -->
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
                            <span class=\"quantity\">1 × <span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">\$</span>94</span></span>
                        </li>
                    </ul>
                    <p class=\"woocommerce-mini-cart__total total\">
                        <strong>Subtotal:</strong>
                        <span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">\$</span>318.00</span>
                    </p>
                    <p class=\"woocommerce-mini-cart__buttons buttons\">
                        <a href=\"cart.html\" class=\"th-btn style1 wc-forward\">View cart</a>
                        <a href=\"checkout.html\" class=\"th-btn style1 checkout wc-forward\">Checkout</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Another Sidemenu -->
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

    <!-- Search Box -->
    <div class=\"popup-search-box d-none d-lg-block\">
        <button class=\"searchClose\"><i class=\"fal fa-times\"></i></button>
        <form action=\"#\">
            <input type=\"text\" placeholder=\"What are you looking for\">
            <button type=\"submit\"><i class=\"fal fa-search\"></i></button>
        </form>
    </div>

    <!-- Header -->
    {% include 'Front/partials/header.html.twig' %}

    {% block body %}
    <!-- Breadcrumb -->
    <div class=\"breadcumb-wrapper\" data-bg-src=\"{{ asset('uploads/packs/' ~ pack.photo) }}\" alt=\"{{ pack.nom }}\" data-overlay=\"title\" data-opacity=\"4\">
        <div class=\"container z-index-common\">
            <h1 class=\"breadcumb-title\">Réserver {{ pack.nom }}</h1>
            <ul class=\"breadcumb-menu\">
                <li><a href=\"{{ path('app_packs') }}\">Accueil</a></li>
                <li><a href=\"{{ path('app_pack_index') }}\">Packs</a></li>
                <li>Réservation</li>
            </ul>
        </div>
    </div>

    <!-- Booking Form -->
    <div class=\"position-relative space\">
        <div class=\"container\">
            <div class=\"booking-form\">
                <h3 class=\"mb-4\">Formulaire de réservation</h3>
                
                {% for flash_message in app.flashes('error') %}
                    <div class=\"alert alert-danger\">
                        {{ flash_message }}
                    </div>
                {% endfor %}
                
                {{ form_start(form, {
                    'attr': {
                        'id': 'bookingForm',
                        'class': 'needs-validation',
                        'novalidate': 'novalidate'
                    }
                }) }}
                
                <div class=\"form-group\">
                    {{ form_label(form.personCount, 'Nombre de personnes *', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.personCount, {'attr': {
                        'class': 'form-control',
                        'required': 'required',
                        'data-error': 'Veuillez indiquer le nombre de personnes'
                    }}) }}
                    <div class=\"invalid-feedback\" style=\"display: none;\">
                        {{ form_errors(form.personCount) ?: 'Ce champ est obligatoire' }}
                    </div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.eventDate, 'Date de l\\'événement *', {'label_attr': {'class': 'form-label'}}) }}
                    <div class=\"input-group date-picker-container\">
                        {{ form_widget(form.eventDate, {
                            'attr': {
                                'class': 'form-control js-datepicker',
                                'placeholder': 'Cliquez pour sélectionner une date',
                                'readonly': 'readonly'
                            }
                        }) }}
                        <div class=\"input-group-append\">
                            <span class=\"input-group-text calendar-icon\"><i class=\"far fa-calendar-alt\"></i></span>
                        </div>
                    </div>
                    <div class=\"invalid-feedback\" style=\"display: none;\">
                        {{ form_errors(form.eventDate) ?: 'Ce champ est obligatoire' }}
                    </div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.message, 'Notes et détails *', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.message, {'attr': {
                        'class': 'form-control',
                        'rows': 3,
                        'required': 'required',
                        'data-error': 'Veuillez ajouter des notes et détails',
                        'placeholder': 'Ajoutez votre message et détails supplémentaires'
                    }}) }}
                    <div class=\"invalid-feedback\" style=\"display: none;\">
                        {{ form_errors(form.message) ?: 'Ce champ est obligatoire' }}
                    </div>
                </div>

                <button type=\"submit\" class=\"th-btn style1\">Réserver</button>
                {{ form_end(form) }}
            </div>

            <script>
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.getElementById('bookingForm');
                const invalidFeedbacks = document.querySelectorAll('.invalid-feedback');
                const formControls = form.querySelectorAll('.form-control');

                form.addEventListener('submit', function(event) {
                    let isValid = true;

                    formControls.forEach(function(control) {
                        if (!control.value) {
                            isValid = false;
                            control.classList.add('is-invalid');
                            control.nextElementSibling?.classList.add('d-block');
                            const feedback = control.parentElement.querySelector('.invalid-feedback');
                            if (feedback) {
                                feedback.style.display = 'block';
                            }
                        }
                    });

                    if (!isValid) {
                        event.preventDefault();
                    }
                });

                formControls.forEach(function(control) {
                    control.addEventListener('input', function() {
                        if (this.value) {
                            this.classList.remove('is-invalid');
                            const feedback = this.parentElement.querySelector('.invalid-feedback');
                            if (feedback) {
                                feedback.style.display = 'none';
                            }
                        }
                    });
                });
            });
            </script>
        </div>
    </div>
    {% endblock %}

    <!-- Footer -->
    {% include 'Front/partials/footer.html.twig' %}

    <!-- Scroll To Top -->
    <div class=\"scroll-top\">
        <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
            <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\"></path>
        </svg>
    </div>

    <!-- JavaScript Files -->
    <script src=\"{{ asset('Front/js/vendor/jquery-3.6.0.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/slick.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/jquery.magnific-popup.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/jquery.counterup.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/imagesloaded.pkgd.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/isotope.pkgd.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/nice-select.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/jquery.datetimepicker.full.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/wow.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/main.js') }}\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
    <script src=\"/js/toxicity-detection.js\"></script> <!-- Toxicity Detection for Notes -->
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js\"></script>
    <script src=\"/js/weather-forecast.js\"></script> <!-- Weather Forecast Integration -->

    {% block javascripts %}
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Flatpickr with improved configuration
        const datePickers = document.querySelectorAll('.js-datepicker');
        if (datePickers.length > 0) {
            const tomorrow = new Date();
            tomorrow.setDate(tomorrow.getDate() + 1);
            
            datePickers.forEach(function(el) {
                const fp = flatpickr(el, {
                    dateFormat: \"d/m/Y\",
                    minDate: tomorrow,
                    locale: \"fr\",
                    disableMobile: false,
                    allowInput: false,
                    static: true,
                    monthSelectorType: \"static\",
                    showMonths: 1,
                    animate: true,
                    closeOnSelect: true,
                    onChange: function(selectedDates, dateStr) {
                        // Clear any validation error when a date is selected
                        el.classList.remove('is-invalid');
                        const errorEl = el.parentNode.nextElementSibling;
                        if (errorEl && errorEl.classList.contains('invalid-feedback')) {
                            errorEl.style.display = 'none';
                        }
                    }
                });
                
                // Make the calendar icon clickable to open the picker
                const iconContainer = el.parentNode.querySelector('.calendar-icon');
                if (iconContainer) {
                    iconContainer.addEventListener('click', function() {
                        if (fp) {
                            fp.open();
                        }
                    });
                }
            });
        }
        
        // Form validation and submission
        const bookingForm = document.getElementById('bookingForm');
        if (bookingForm) {
            // Variable pour empêcher les soumissions multiples
            let isSubmitting = false;
            
            bookingForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Empêcher les soumissions multiples
                if (isSubmitting) {
                    console.log('Formulaire déjà en cours de soumission');
                    return;
                }
                
                // Validate date field
                const dateField = bookingForm.querySelector('.js-datepicker');
                if (dateField && !dateField.value) {
                    dateField.classList.add('is-invalid');
                    const errorEl = dateField.parentNode.nextElementSibling;
                    if (errorEl && errorEl.classList.contains('invalid-feedback')) {
                        errorEl.textContent = 'Veuillez sélectionner une date';
                        errorEl.style.display = 'block';
                    }
                    return;
                }

                const submitBtn = bookingForm.querySelector('button[type=\"submit\"]');
                const formData = new FormData(bookingForm);

                // Marquer comme en cours de soumission
                isSubmitting = true;
                
                // Disable submit button and show loading state
                submitBtn.setAttribute('disabled', true);
                submitBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Traitement en cours...';

                fetch(bookingForm.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: \${response.status}`);
                    }
                    const contentType = response.headers.get('content-type');
                    if (contentType && contentType.includes('application/json')) {
                        return response.json();
                    } else {
                        // Si la réponse n'est pas du JSON, c'est probablement une redirection réussie
                        // Afficher SweetAlert avant la redirection
                        Swal.fire({
                            title: 'Succès!',
                            text: 'Votre demande a été enregistrée avec succès',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            window.location.href = response.url;
                        });
                        return null;
                    }
                })
                .then(data => {
                    if (!data) return; // Si null, la redirection a déjà été gérée
                    
                    if (data.success) {
                        // Réinitialiser le formulaire
                        bookingForm.reset();
                        
                        Swal.fire({
                            title: 'Succès!',
                            text: data.message || 'Votre demande a été enregistrée avec succès',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (data.redirect) {
                                window.location.href = '{{ path('app_draft_events') }}';
                            }
                        });
                    } else {
                        // Réactiver le bouton de soumission
                        submitBtn.removeAttribute('disabled');
                        submitBtn.innerHTML = 'Réserver';
                        isSubmitting = false;
                        
                        if (data.errors) {
                            Object.entries(data.errors).forEach(([field, messages]) => {
                                const fieldEl = bookingForm.querySelector(`[name=\"\${field}\"]`);
                                if (fieldEl) {
                                    fieldEl.classList.add('is-invalid');
                                    const errorEl = fieldEl.parentNode.nextElementSibling;
                                    if (errorEl && errorEl.classList.contains('invalid-feedback')) {
                                        errorEl.textContent = messages.join(', ');
                                        errorEl.style.display = 'block';
                                    }
                                }
                            });
                        } else {
                            Swal.fire({
                                title: 'Erreur!',
                                text: data.message || 'Une erreur est survenue lors de la réservation',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    }
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    submitBtn.removeAttribute('disabled');
                    submitBtn.innerHTML = 'Réserver';
                    isSubmitting = false;
                    
                    Swal.fire({
                        title: 'Erreur!',
                        text: 'Le serveur a rencontré un problème. Veuillez réessayer plus tard.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                });
            });
        }
    });
    </script>
    {% endblock %}
</body>



</html>", "pack/booking.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\pack\\booking.html.twig");
    }
}
