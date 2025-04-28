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

/* pack/shop-details.html.twig */
class __TwigTemplate_6155be5c34f6b1a062a548169666792d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pack/shop-details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pack/shop-details.html.twig"));

        // line 1
        yield "<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>GoldenTouch - ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), "html", null, true);
        yield "</title>
    <meta name=\"author\" content=\"Taxiar\">
    <meta name=\"description\" content=\"Taxiar - Online Taxi Service HTML Template\">
    <meta name=\"keywords\" content=\"Taxiar - Online Taxi Service HTML Template\">
    <meta name=\"robots\" content=\"INDEX,FOLLOW\">

    <!-- Mobile Specific Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-57x57.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-60x60.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-72x72.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-76x76.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-114x114.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-120x120.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-144x144.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-152x152.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-180x180.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/android-icon-192x192.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/favicon-32x32.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/favicon-96x96.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/favicon-16x16.png"), "html", null, true);
        yield "\">
    <link rel=\"manifest\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/manifest.json"), "html", null, true);
        yield "\">
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 33
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
    <link rel=\"stylesheet\" href=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/review-validation.css"), "html", null, true);
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
    


    <!--==============================
    Mobile Menu
  ============================== -->
    <div class=\"th-menu-wrapper\">
        <div class=\"th-menu-area text-center\">
            <button class=\"th-menu-toggle \"><i class=\"fal fa-times\"></i></button>
            <div class=\"mobile-logo\">
                <a href=\"index.html\"><img src=\"";
        // line 81
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
    <div class=\"sidemenu-wrapper shopping-cart d-none d-lg-block  \">
        <div class=\"sidemenu-content\">
            <button class=\"closeButton sideMenuCls\"><i class=\"far fa-times\"></i></button>
            <div class=\"widget\">
                <h3 class=\"widget_title\">Pack Details</h3>
                <div class=\"widget_content\">
                    <ul class=\"pack-details-list\">
                        <li class=\"pack-detail-item\">
                            <span class=\"detail-label\">Description:</span>
                            <span class=\"detail-value\">";
        // line 150
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["pack"] ?? null), "description", [], "any", true, true, false, 150) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 150, $this->source); })()), "description", [], "any", false, false, false, 150)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 150, $this->source); })()), "description", [], "any", false, false, false, 150), "html", null, true)) : ("N/A"));
        yield "</span>
                        </li>
                        <li class=\"pack-detail-item\">
                            <span class=\"detail-label\">Price:</span>
                            <span class=\"detail-value\">";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 154, $this->source); })()), "prix", [], "any", false, false, false, 154), "html", null, true);
        yield " TND</span>
                        </li>
                        <li class=\"pack-detail-item\">
                            <span class=\"detail-label\">Capacity:</span>
                            <span class=\"detail-value\">";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 158, $this->source); })()), "capacite", [], "any", false, false, false, 158), "html", null, true);
        yield "</span>
                        </li>
                        <li class=\"pack-detail-item\">
                            <span class=\"detail-label\">Duration:</span>
                            <span class=\"detail-value\">";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 162, $this->source); })()), "duree", [], "any", false, false, false, 162), "html", null, true);
        yield " days</span>
                        </li>
                        <li class=\"pack-detail-item\">
                            <span class=\"detail-label\">End Date:</span>
                            <span class=\"detail-value\">";
        // line 166
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 166, $this->source); })()), "endDate", [], "any", false, false, false, 166)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 166, $this->source); })()), "endDate", [], "any", false, false, false, 166), "Y-m-d"), "html", null, true)) : ("N/A"));
        yield "</span>
                        </li>
                        <li class=\"pack-detail-item\">
                            <span class=\"detail-label\">Event:</span>
                            <span class=\"detail-value\">";
        // line 170
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["pack"] ?? null), "getNom", [], "method", true, true, false, 170) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 170, $this->source); })()), "getNom", [], "method", false, false, false, 170)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 170, $this->source); })()), "getNom", [], "method", false, false, false, 170), "html", null, true)) : ("N/A"));
        yield "</span>
                        </li>
                        ";
        // line 172
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 172, $this->source); })()))) {
            // line 173
            yield "                            <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                                <span>Il n'y a pas de commentaire</span>
                            </li>
                        ";
        } else {
            // line 177
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["avis"]);
            foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
                // line 178
                yield "                                <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                                    <span class=\"comment-author\">";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "utilisateur", [], "any", false, false, false, 179), "html", null, true);
                yield "</span>
                                    <span class=\"comment-date\">";
                // line 180
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "dateCreation", [], "any", false, false, false, 180), "d F, Y"), "html", null, true);
                yield "</span>
                                    <span class=\"comment-rating\">Rated ";
                // line 181
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "note", [], "any", false, false, false, 181), "html", null, true);
                yield " out of 5</span>
                                    <p class=\"comment-text\">";
                // line 182
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "commentaire", [], "any", false, false, false, 182), "html", null, true);
                yield "</p>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['avis'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            yield "                        ";
        }
        // line 186
        yield "                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Sidemenu
============================== -->
    <div class=\"sidemenu-wrapper d-none d-lg-block  \">
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
        // line 212
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
        // line 224
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

    <!--==============================
 \t\tHeader Area
==============================-->
     ";
        // line 265
        yield from $this->loadTemplate("Front/partials/header.html.twig", "pack/shop-details.html.twig", 265)->unwrap()->yield($context);
        // line 266
        yield "    </header>
    <!--==============================
    Breadcumb
============================== -->
    <div class=\"breadcumb-wrapper\" data-bg-src=\"";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 270, $this->source); })()), "photo", [], "any", false, false, false, 270))), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 270, $this->source); })()), "nom", [], "any", false, false, false, 270), "html", null, true);
        yield "\" data-overlay=\"title\" data-opacity=\"4\">
        <div class=\"container z-index-common\">
            <h1 class=\"breadcumb-title\">";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 272, $this->source); })()), "nom", [], "any", false, false, false, 272), "html", null, true);
        yield "</h1>
            <ul class=\"breadcumb-menu\">
                <li><a href=\"";
        // line 274
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_packs");
        yield "\">Accueil</a></li>
                <li><a href=\"";
        // line 275
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index");
        yield "\">Packs</a></li>
                <li>";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 276, $this->source); })()), "nom", [], "any", false, false, false, 276), "html", null, true);
        yield "</li>
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
        // line 288
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . ((CoreExtension::getAttribute($this->env, $this->source, ($context["pack"] ?? null), "photo", [], "any", true, true, false, 288)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 288, $this->source); })()), "photo", [], "any", false, false, false, 288), "default.jpg")) : ("default.jpg")))), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 288, $this->source); })()), "nom", [], "any", false, false, false, 288), "html", null, true);
        yield "\"></div>
                    </div>
                </div>
                <div class=\"col-lg-6 align-self-center\">
                    <div class=\"product-about\">
                        <p class=\"price\">
  \$";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 294, $this->source); })()), "prix", [], "any", false, false, false, 294), "html", null, true);
        yield "
  <del>\$";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 295, $this->source); })()), "prix", [], "any", false, false, false, 295) * 1.15), 2, ".", ","), "html", null, true);
        yield "</del>
</p>

                        <h2 class=\"product-title\">";
        // line 298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 298, $this->source); })()), "nom", [], "any", false, false, false, 298), "html", null, true);
        yield "</h2>
                        <div class=\"product-rating\">
                            <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\"><span style=\"width:100%\">Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span></div>
                            <a href=\"#reviews\" class=\"woocommerce-review-link\">(<span class=\"count\">3</span> customer reviews)</a>
                        </div>
                        <p class=\"text\">";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 303, $this->source); })()), "description", [], "any", false, false, false, 303), "html", null, true);
        yield "</p>
                        <div class=\"product-meta\">
                            <span class=\"sku_wrapper\">Capacity: <span class=\"sku\">";
        // line 305
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 305, $this->source); })()), "capacite", [], "any", false, false, false, 305), "html", null, true);
        yield "</span></span>
                            <span class=\"posted_in\">Duration: <span>";
        // line 306
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 306, $this->source); })()), "duree", [], "any", false, false, false, 306), "html", null, true);
        yield " days</span></span>
                            <span class=\"tagged_as\">End Date: <span>";
        // line 307
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 307, $this->source); })()), "endDate", [], "any", false, false, false, 307), "Y-m-d"), "html", null, true);
        yield "</span></span>
                        </div>
                        
                       
                        <div class=\"actions\">
                           
                           <button class=\"th-btn\" onclick=\"window.location.href='";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_booking", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 313, $this->source); })()), "id", [], "any", false, false, false, 313)]), "html", null, true);
        yield "'\">
    Ajouter au panier
</button>
                        </div>
                       
                    </div>
                </div>
            </div>
            <ul class=\"nav product-tab-style1\" id=\"productTab\" role=\"tablist\">
                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link th-btn\" id=\"description-tab\" data-bs-toggle=\"tab\" href=\"#description\" role=\"tab\" aria-controls=\"description\" aria-selected=\"false\">description</a>
                </li>
                <li class=\"nav-item\" role=\"presentation\">
<a class=\"nav-link th-btn active\" id=\"reviews-tab\" data-bs-toggle=\"tab\" href=\"#reviews\" role=\"tab\" aria-controls=\"reviews\" aria-selected=\"true\">Avis</a>                </li>
            </ul>
            <div class=\"tab-content\" id=\"productTabContent\">
                <div class=\"tab-pane fade\" id=\"description\" role=\"tabpanel\" aria-labelledby=\"description-tab\">
                    <p class=\"text\">";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 330, $this->source); })()), "description", [], "any", false, false, false, 330), "html", null, true);
        yield "</p>      </div>


                <div class=\"tab-pane fade show active\" id=\"reviews\" role=\"tabpanel\" aria-labelledby=\"reviews-tab\">
    <div class=\"woocommerce-Reviews\">
        <div class=\"th-comments-wrap\">
            <ul class=\"comment-list\">
                ";
        // line 337
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 337, $this->source); })()), "avis", [], "any", false, false, false, 337))) {
            // line 338
            yield "                    <li class=\"review th-comment-item\">
                        <div class=\"th-post-comment\">
                            <div class=\"comment-content\">
                                <p class=\"text\">There are no reviews yet.</p>
                            </div>
                        </div>
                    </li>
                ";
        } else {
            // line 346
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 346, $this->source); })()), "avis", [], "any", false, false, false, 346));
            foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
                // line 347
                yield "                        <li class=\"review th-comment-item\">
                            <div class=\"th-post-comment\">
                                <div class=\"comment-avater\">
                                    ";
                // line 350
                if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "utilisateur", [], "any", false, false, false, 350))) {
                    // line 351
                    yield "                                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "utilisateur", [], "any", false, true, false, 351), "avatar", [], "any", true, true, false, 351) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "utilisateur", [], "any", false, false, false, 351), "avatar", [], "any", false, false, false, 351))) {
                        // line 352
                        yield "                                            <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "utilisateur", [], "any", false, false, false, 352), "avatar", [], "any", false, false, false, 352))), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "utilisateur", [], "any", false, false, false, 352), "nom", [], "any", false, false, false, 352), "html", null, true);
                        yield "\">
                                        ";
                    } else {
                        // line 354
                        yield "                                            <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog/comment-author-1.jpg"), "html", null, true);
                        yield "\" alt=\"Default Avatar\">
                                        ";
                    }
                    // line 356
                    yield "                                    ";
                } else {
                    // line 357
                    yield "                                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog/comment-author-1.jpg"), "html", null, true);
                    yield "\" alt=\"Utilisateur Supprimé\">
                                    ";
                }
                // line 359
                yield "                                </div>
                                <div class=\"comment-content\">
                                    <h4 class=\"name\">
                                        ";
                // line 362
                if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "utilisateur", [], "any", false, false, false, 362))) {
                    // line 363
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "utilisateur", [], "any", false, false, false, 363), "nom", [], "any", false, false, false, 363), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "utilisateur", [], "any", false, false, false, 363), "prenom", [], "any", false, false, false, 363), "html", null, true);
                    yield "
                                        ";
                } else {
                    // line 365
                    yield "                                            Utilisateur Supprimé
                                        ";
                }
                // line 367
                yield "                                    </h4>
                                    <span class=\"commented-on\">
                                        <i class=\"fal fa-calendar-alt\"></i>
                                        ";
                // line 370
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "dateCreation", [], "any", false, false, false, 370), "d M, Y"), "html", null, true);
                yield "
                                    </span>
                                    <div class=\"star-rating\" role=\"img\" aria-label=\"Rated ";
                // line 372
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "note", [], "any", false, false, false, 372), "html", null, true);
                yield " out of 5\">
                                        <span style=\"width:";
                // line 373
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "note", [], "any", false, false, false, 373) / 5) * 100), "html", null, true);
                yield "%\">
                                            Rated <strong class=\"rating\">";
                // line 374
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "note", [], "any", false, false, false, 374), "html", null, true);
                yield "</strong> out of 5
                                        </span>
                                    </div>
                                    <p class=\"text\">";
                // line 377
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "commentaire", [], "any", false, false, false, 377), "html", null, true);
                yield "</p>
                                </div>
                            </div>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['avis'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 382
            yield "                ";
        }
        // line 383
        yield "            </ul>
        </div>
        
        <!-- Comment Form -->
       
    ";
        // line 388
        $context["hasPurchased"] = false;
        // line 389
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["demandePacks"]) || array_key_exists("demandePacks", $context) ? $context["demandePacks"] : (function () { throw new RuntimeError('Variable "demandePacks" does not exist.', 389, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 390
            yield "        ";
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "pack", [], "any", false, false, false, 390), "id", [], "any", false, false, false, 390) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 390, $this->source); })()), "id", [], "any", false, false, false, 390)) && (CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "statut", [], "any", false, false, false, 390) == "CONFIRMÉ"))) {
                // line 391
                yield "            ";
                $context["hasPurchased"] = true;
                // line 392
                yield "        ";
            }
            // line 393
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['demande'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 394
        yield "
    ";
        // line 395
        if ((isset($context["hasPurchased"]) || array_key_exists("hasPurchased", $context) ? $context["hasPurchased"] : (function () { throw new RuntimeError('Variable "hasPurchased" does not exist.', 395, $this->source); })())) {
            // line 396
            yield "    <div class=\"th-comment-form\">
        <div class=\"form-title\">
            <h3 class=\"blog-inner-title\">Ajouter un avis</h3>
        </div>
        <form action=\"";
            // line 400
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_add", ["packId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 400, $this->source); })()), "id", [], "any", false, false, false, 400)]), "html", null, true);
            yield "\" method=\"POST\" class=\"review-form\" novalidate>
            <div class=\"row\">
                <div class=\"form-group rating-select d-flex align-items-center\">
                    <label>Votre note</label>
                    <p class=\"stars\">
                        <span>
                            ";
            // line 406
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 407
                yield "                                <a class=\"star-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield " ";
                if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 407), "query", [], "any", false, true, false, 407), "get", ["rating", 5], "method", true, true, false, 407)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 407, $this->source); })()), "request", [], "any", false, false, false, 407), "query", [], "any", false, false, false, 407), "get", ["rating", 5], "method", false, false, false, 407), 5)) : (5)) >= $context["i"])) {
                    yield "active";
                }
                yield "\" 
                                   href=\"#\" 
                                   data-value=\"";
                // line 409
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 411
            yield "                        </span>
                        <input type=\"hidden\" name=\"rating\" id=\"rating-value\" value=\"";
            // line 412
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 412), "query", [], "any", false, true, false, 412), "get", ["rating", 5], "method", true, true, false, 412)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 412, $this->source); })()), "request", [], "any", false, false, false, 412), "query", [], "any", false, false, false, 412), "get", ["rating", 5], "method", false, false, false, 412), 5)) : (5)), "html", null, true);
            yield "\" class=\"form-control\">
                    </p>
                    ";
            // line 414
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 414, $this->source); })()), "request", [], "any", false, false, false, 414), "query", [], "any", false, false, false, 414), "get", ["error_note"], "method", false, false, false, 414))) {
                // line 415
                yield "                        <div class=\"invalid-feedback d-block\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 415, $this->source); })()), "request", [], "any", false, false, false, 415), "query", [], "any", false, false, false, 415), "get", ["error_note"], "method", false, false, false, 415), "html", null, true);
                yield "</div>
                    ";
            }
            // line 417
            yield "                </div>
                <div class=\"col-12 form-group\">
                    <textarea name=\"comment\" placeholder=\"Write your review here...\" 
                              class=\"form-control ";
            // line 420
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 420, $this->source); })()), "request", [], "any", false, false, false, 420), "query", [], "any", false, false, false, 420), "get", ["error_commentaire"], "method", false, false, false, 420))) {
                yield "is-invalid";
            }
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 420, $this->source); })()), "request", [], "any", false, false, false, 420), "query", [], "any", false, false, false, 420), "get", ["comment", ""], "method", false, false, false, 420), "html", null, true);
            yield "</textarea>
                    ";
            // line 421
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 421, $this->source); })()), "request", [], "any", false, false, false, 421), "query", [], "any", false, false, false, 421), "get", ["error_commentaire"], "method", false, false, false, 421))) {
                // line 422
                yield "                        <div class=\"invalid-feedback\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 422, $this->source); })()), "request", [], "any", false, false, false, 422), "query", [], "any", false, false, false, 422), "get", ["error_commentaire"], "method", false, false, false, 422), "html", null, true);
                yield "</div>
                    ";
            }
            // line 424
            yield "                </div>
               
                <div class=\"col-12 form-group mb-0\">
                    <button type=\"submit\" class=\"th-btn\">Publier l'avis</button>
                </div>
            </div>
        </form>
    </div>
    ";
        } else {
            // line 433
            yield "        <div class=\"alert alert-info\">
            <p><i class=\"fas fa-info-circle\"></i> Pour laisser un avis, vous devez d'abord acheter ce pack et avoir une commande avec le statut \"CONFIRMÉ\".</p>
            <a href=\"";
            // line 435
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_booking", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 435, $this->source); })()), "id", [], "any", false, false, false, 435)]), "html", null, true);
            yield "\" class=\"th-btn mt-3\">Acheter ce pack</a>
        </div>
    ";
        }
        // line 438
        yield "
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Star rating functionality
        const stars = document.querySelectorAll('.stars a');
        const ratingInput = document.getElementById('rating-value');
        
        stars.forEach(star => {
            star.addEventListener('click', function(e) {
                e.preventDefault();
                const value = parseInt(this.getAttribute('data-value'));
                ratingInput.value = value;
                
                // Update star display
                stars.forEach(s => {
                    const sValue = parseInt(s.getAttribute('data-value'));
                    if (sValue <= value) {
                        s.classList.add('active');
                    } else {
                        s.classList.remove('active');
                    }
                });
            });
            
            // Hover effect
            star.addEventListener('mouseover', function() {
                const value = parseInt(this.getAttribute('data-value'));
                stars.forEach(s => {
                    const sValue = parseInt(s.getAttribute('data-value'));
                    if (sValue <= value) {
                        s.classList.add('hover');
                    } else {
                        s.classList.remove('hover');
                    }
                });
            });
            
            star.addEventListener('mouseout', function() {
                stars.forEach(s => {
                    s.classList.remove('hover');
                });
            });
        });
    });
</script>
</div>
            <!--==============================
        Related Product  
        ==============================-->
            <div class=\"space-extra-top mb-30\">
                <div class=\"title-area text-center\">
                   <h2 class=\"sec-title\">Packs similaires</h2>
                   <p class=\"sec-text\">Découvrez d'autres packs de la même catégorie</p>
                </div>
                <div class=\"row th-carousel\" data-slide-show=\"4\" data-lg-slide-show=\"3\" data-md-slide-show=\"2\" data-sm-slide-show=\"2\" data-xs-slide-show=\"1\" data-arrows=\"true\">
                    ";
        // line 493
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["relatedPacks"]) || array_key_exists("relatedPacks", $context) ? $context["relatedPacks"] : (function () { throw new RuntimeError('Variable "relatedPacks" does not exist.', 493, $this->source); })()))) {
            // line 494
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["relatedPacks"]) || array_key_exists("relatedPacks", $context) ? $context["relatedPacks"] : (function () { throw new RuntimeError('Variable "relatedPacks" does not exist.', 494, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["relatedPack"]) {
                // line 495
                yield "                            <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                <div class=\"th-product\">
                                    <div class=\"product-img\">
                                        <img src=\"";
                // line 498
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . ((CoreExtension::getAttribute($this->env, $this->source, $context["relatedPack"], "photo", [], "any", true, true, false, 498)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["relatedPack"], "photo", [], "any", false, false, false, 498), "default.jpg")) : ("default.jpg")))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["relatedPack"], "nom", [], "any", false, false, false, 498), "html", null, true);
                yield "\">
                                        <div class=\"actions\">
                                            <a href=\"";
                // line 500
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_shop_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["relatedPack"], "id", [], "any", false, false, false, 500)]), "html", null, true);
                yield "\" class=\"icon-btn\"><i class=\"far fa-eye\"></i></a>
                                            <a href=\"";
                // line 501
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_booking", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["relatedPack"], "id", [], "any", false, false, false, 501)]), "html", null, true);
                yield "\" class=\"icon-btn\"><i class=\"far fa-cart-plus\"></i></a>
                                            <a href=\"#\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                        </div>
                                    </div>
                                    <div class=\"product-content\">
                                        <h3 class=\"product-title\"><a href=\"";
                // line 506
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_shop_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["relatedPack"], "id", [], "any", false, false, false, 506)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["relatedPack"], "nom", [], "any", false, false, false, 506), "html", null, true);
                yield "</a></h3>
                                        <div class=\"product-meta\">
                                            <span class=\"price\">";
                // line 508
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["relatedPack"], "prix", [], "any", false, false, false, 508), "html", null, true);
                yield " TND</span>
                                            <span class=\"category\">";
                // line 509
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["relatedPack"], "categorie", [], "any", false, false, false, 509), "html", null, true);
                yield "</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['relatedPack'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 515
            yield "                    ";
        } else {
            // line 516
            yield "                        <div class=\"col-12 text-center\">
                            <p>Aucun autre pack dans cette catégorie.</p>
                        </div>
                    ";
        }
        // line 520
        yield "                </div>
                <div class=\"row th-carousel\" data-slide-show=\"4\" data-lg-slide-show=\"3\" data-md-slide-show=\"2\" data-sm-slide-show=\"2\" data-xs-slide-show=\"1\" data-arrows=\"true\">
                    ";
        // line 522
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("similarPacks", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["similarPacks"]) || array_key_exists("similarPacks", $context) ? $context["similarPacks"] : (function () { throw new RuntimeError('Variable "similarPacks" does not exist.', 522, $this->source); })()), [])) : ([])));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["similarPack"]) {
            // line 523
            yield "                        ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["similarPack"], "id", [], "any", false, false, false, 523) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 523, $this->source); })()), "id", [], "any", false, false, false, 523)) && (CoreExtension::getAttribute($this->env, $this->source, $context["similarPack"], "categorie", [], "any", false, false, false, 523) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 523, $this->source); })()), "categorie", [], "any", false, false, false, 523)))) {
                // line 524
                yield "                            <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                <div class=\"th-product\">
                                    <div class=\"product-img\">
                                        <img src=\"";
                // line 527
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . ((CoreExtension::getAttribute($this->env, $this->source, $context["similarPack"], "photo", [], "any", true, true, false, 527)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["similarPack"], "photo", [], "any", false, false, false, 527), "default.jpg")) : ("default.jpg")))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["similarPack"], "nom", [], "any", false, false, false, 527), "html", null, true);
                yield "\">
                                        <div class=\"actions\">
                                            <a href=\"";
                // line 529
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["similarPack"], "id", [], "any", false, false, false, 529)]), "html", null, true);
                yield "\" class=\"icon-btn\"><i class=\"far fa-eye\"></i></a>
                                            <a href=\"";
                // line 530
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_booking", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["similarPack"], "id", [], "any", false, false, false, 530)]), "html", null, true);
                yield "\" class=\"icon-btn\"><i class=\"far fa-calendar-plus\"></i></a>
                                        </div>
                                    </div>
                                    <div class=\"product-content\">
                                        <h3 class=\"product-title\"><a href=\"";
                // line 534
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["similarPack"], "id", [], "any", false, false, false, 534)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["similarPack"], "nom", [], "any", false, false, false, 534), "html", null, true);
                yield "</a></h3>
                                        <div class=\"product-meta\">
                                            <span class=\"price\">";
                // line 536
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["similarPack"], "prix", [], "any", false, false, false, 536), "html", null, true);
                yield " TND</span>
                                            <span class=\"category\">";
                // line 537
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["similarPack"], "categorie", [], "any", false, false, false, 537), "html", null, true);
                yield "</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 543
            yield "                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 544
            yield "                        <div class=\"col-12 text-center\">
                            <p>Aucun pack similaire disponible pour le moment.</p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['similarPack'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 548
        yield "
                   

                   

                   

                    
                </div>
            </div>
        </div>
    </section>
    <!--==============================
\t\t\tFooter Area
\t==============================-->
   

 <footer class=\"footer-wrapper footer-layout7\" data-bg-src=\"";
        // line 565
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/bg/footer_bg_1.jpg"), "html", null, true);
        yield "\">
    <div class=\"widget-area\">
        <div class=\"container\">
            <div class=\"row justify-content-between\">
                <div class=\"col-md-6 col-xl-auto\">
                    <div class=\"widget footer-widget\">
                        <div class=\"th-widget-about\">
                            <div class=\"about-logo\">
                                <a href=\"index.html\"><img src=\"";
        // line 573
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo-white3.svg"), "html", null, true);
        yield "\" alt=\"GoldenTouch\"></a>
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
        // line 613
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
            <p class=\"copyright-text\"> 2023 <a href=\"#\">GoldenTouch</a>. Tous droits réservés.</p>
        </div>
    </div>
    <div class=\"footer-shape\"><img src=\"assets/img/shape/footer_shape.png\" alt=\"forme\">
    </div>
</footer>


    <!--********************************
\t\t\tCode End  Here 
\t******************************** -->

    <!-- Scroll To Top -->
    <div class=\"scroll-top\">
        <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
            <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\">
            </path>
        </svg>
    </div>



    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
     <script src=\"";
        // line 667
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/vendor/jquery-3.6.0.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 668
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/slick.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 669
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 670
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 671
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.counterup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 672
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/imagesloaded.pkgd.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 673
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/isotope.pkgd.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 674
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/nice-select.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 675
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.datetimepicker.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 676
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/wow.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 677
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/main.js"), "html", null, true);
        yield "\"></script>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Star rating functionality
        const stars = document.querySelectorAll('.stars a');
        const ratingInput = document.getElementById('rating-value');
        
        stars.forEach(star => {
            star.addEventListener('click', function(e) {
                e.preventDefault();
                const value = parseInt(this.getAttribute('data-value'));
                ratingInput.value = value;
                
                // Update star display
                stars.forEach(s => {
                    const sValue = parseInt(s.getAttribute('data-value'));
                    if (sValue <= value) {
                        s.classList.add('active');
                    } else {
                        s.classList.remove('active');
                    }
                });
            });
            
            // Hover effect
            star.addEventListener('mouseover', function() {
                const value = parseInt(this.getAttribute('data-value'));
                stars.forEach(s => {
                    const sValue = parseInt(s.getAttribute('data-value'));
                    if (sValue <= value) {
                        s.classList.add('hover');
                    } else {
                        s.classList.remove('hover');
                    }
                });
            });
            
            star.addEventListener('mouseout', function() {
                stars.forEach(s => {
                    s.classList.remove('hover');
                });
            });
        });
    });
</script>
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
        return "pack/shop-details.html.twig";
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
        return array (  1159 => 677,  1155 => 676,  1151 => 675,  1147 => 674,  1143 => 673,  1139 => 672,  1135 => 671,  1131 => 670,  1127 => 669,  1123 => 668,  1119 => 667,  1062 => 613,  1019 => 573,  1008 => 565,  989 => 548,  980 => 544,  975 => 543,  966 => 537,  962 => 536,  955 => 534,  948 => 530,  944 => 529,  937 => 527,  932 => 524,  929 => 523,  924 => 522,  920 => 520,  914 => 516,  911 => 515,  899 => 509,  895 => 508,  888 => 506,  880 => 501,  876 => 500,  869 => 498,  864 => 495,  859 => 494,  857 => 493,  800 => 438,  794 => 435,  790 => 433,  779 => 424,  773 => 422,  771 => 421,  763 => 420,  758 => 417,  752 => 415,  750 => 414,  745 => 412,  742 => 411,  732 => 409,  722 => 407,  718 => 406,  709 => 400,  703 => 396,  701 => 395,  698 => 394,  692 => 393,  689 => 392,  686 => 391,  683 => 390,  678 => 389,  676 => 388,  669 => 383,  666 => 382,  655 => 377,  649 => 374,  645 => 373,  641 => 372,  636 => 370,  631 => 367,  627 => 365,  619 => 363,  617 => 362,  612 => 359,  606 => 357,  603 => 356,  597 => 354,  589 => 352,  586 => 351,  584 => 350,  579 => 347,  574 => 346,  564 => 338,  562 => 337,  552 => 330,  532 => 313,  523 => 307,  519 => 306,  515 => 305,  510 => 303,  502 => 298,  496 => 295,  492 => 294,  481 => 288,  466 => 276,  462 => 275,  458 => 274,  453 => 272,  446 => 270,  440 => 266,  438 => 265,  394 => 224,  379 => 212,  351 => 186,  348 => 185,  339 => 182,  335 => 181,  331 => 180,  327 => 179,  324 => 178,  319 => 177,  313 => 173,  311 => 172,  306 => 170,  299 => 166,  292 => 162,  285 => 158,  278 => 154,  271 => 150,  199 => 81,  166 => 51,  162 => 50,  158 => 49,  154 => 48,  150 => 47,  146 => 46,  142 => 45,  127 => 33,  122 => 31,  118 => 30,  114 => 29,  110 => 28,  106 => 27,  102 => 26,  98 => 25,  94 => 24,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>GoldenTouch - {{ pack.nom }}</title>
    <meta name=\"author\" content=\"Taxiar\">
    <meta name=\"description\" content=\"Taxiar - Online Taxi Service HTML Template\">
    <meta name=\"keywords\" content=\"Taxiar - Online Taxi Service HTML Template\">
    <meta name=\"robots\" content=\"INDEX,FOLLOW\">

    <!-- Mobile Specific Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Favicons - Place favicon.ico in the root directory -->
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
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/review-validation.css') }}\">

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
    <div class=\"sidemenu-wrapper shopping-cart d-none d-lg-block  \">
        <div class=\"sidemenu-content\">
            <button class=\"closeButton sideMenuCls\"><i class=\"far fa-times\"></i></button>
            <div class=\"widget\">
                <h3 class=\"widget_title\">Pack Details</h3>
                <div class=\"widget_content\">
                    <ul class=\"pack-details-list\">
                        <li class=\"pack-detail-item\">
                            <span class=\"detail-label\">Description:</span>
                            <span class=\"detail-value\">{{ pack.description ?? 'N/A' }}</span>
                        </li>
                        <li class=\"pack-detail-item\">
                            <span class=\"detail-label\">Price:</span>
                            <span class=\"detail-value\">{{ pack.prix }} TND</span>
                        </li>
                        <li class=\"pack-detail-item\">
                            <span class=\"detail-label\">Capacity:</span>
                            <span class=\"detail-value\">{{ pack.capacite }}</span>
                        </li>
                        <li class=\"pack-detail-item\">
                            <span class=\"detail-label\">Duration:</span>
                            <span class=\"detail-value\">{{ pack.duree }} days</span>
                        </li>
                        <li class=\"pack-detail-item\">
                            <span class=\"detail-label\">End Date:</span>
                            <span class=\"detail-value\">{{ pack.endDate ? pack.endDate|date('Y-m-d') : 'N/A' }}</span>
                        </li>
                        <li class=\"pack-detail-item\">
                            <span class=\"detail-label\">Event:</span>
                            <span class=\"detail-value\">{{ pack.getNom() ?? 'N/A' }}</span>
                        </li>
                        {% if avis is empty %}
                            <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                                <span>Il n'y a pas de commentaire</span>
                            </li>
                        {% else %}
                            {% for avis in avis %}
                                <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                                    <span class=\"comment-author\">{{ avis.utilisateur }}</span>
                                    <span class=\"comment-date\">{{ avis.dateCreation|date('d F, Y') }}</span>
                                    <span class=\"comment-rating\">Rated {{ avis.note }} out of 5</span>
                                    <p class=\"comment-text\">{{ avis.commentaire }}</p>
                                </li>
                            {% endfor %}
                        {% endif %}
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Sidemenu
============================== -->
    <div class=\"sidemenu-wrapper d-none d-lg-block  \">
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

    <!--==============================
 \t\tHeader Area
==============================-->
     {% include 'Front/partials/header.html.twig' %}
    </header>
    <!--==============================
    Breadcumb
============================== -->
    <div class=\"breadcumb-wrapper\" data-bg-src=\"{{ asset('uploads/packs/' ~ pack.photo) }}\" alt=\"{{ pack.nom }}\" data-overlay=\"title\" data-opacity=\"4\">
        <div class=\"container z-index-common\">
            <h1 class=\"breadcumb-title\">{{pack.nom}}</h1>
            <ul class=\"breadcumb-menu\">
                <li><a href=\"{{ path('app_packs') }}\">Accueil</a></li>
                <li><a href=\"{{ path('app_pack_index') }}\">Packs</a></li>
                <li>{{ pack.nom }}</li>
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
                        <div class=\"img\"><img src=\"{{ asset('uploads/packs/' ~ pack.photo|default('default.jpg')) }}\" alt=\"{{ pack.nom }}\"></div>
                    </div>
                </div>
                <div class=\"col-lg-6 align-self-center\">
                    <div class=\"product-about\">
                        <p class=\"price\">
  \${{ pack.prix }}
  <del>\${{ (pack.prix * 1.15)|number_format(2, '.', ',') }}</del>
</p>

                        <h2 class=\"product-title\">{{pack.nom}}</h2>
                        <div class=\"product-rating\">
                            <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\"><span style=\"width:100%\">Rated <strong class=\"rating\">5.00</strong> out of 5 based on <span class=\"rating\">1</span> customer rating</span></div>
                            <a href=\"#reviews\" class=\"woocommerce-review-link\">(<span class=\"count\">3</span> customer reviews)</a>
                        </div>
                        <p class=\"text\">{{pack.description}}</p>
                        <div class=\"product-meta\">
                            <span class=\"sku_wrapper\">Capacity: <span class=\"sku\">{{pack.capacite}}</span></span>
                            <span class=\"posted_in\">Duration: <span>{{pack.duree}} days</span></span>
                            <span class=\"tagged_as\">End Date: <span>{{pack.endDate|date('Y-m-d')}}</span></span>
                        </div>
                        
                       
                        <div class=\"actions\">
                           
                           <button class=\"th-btn\" onclick=\"window.location.href='{{ path('app_pack_booking', {'id': pack.id}) }}'\">
    Ajouter au panier
</button>
                        </div>
                       
                    </div>
                </div>
            </div>
            <ul class=\"nav product-tab-style1\" id=\"productTab\" role=\"tablist\">
                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link th-btn\" id=\"description-tab\" data-bs-toggle=\"tab\" href=\"#description\" role=\"tab\" aria-controls=\"description\" aria-selected=\"false\">description</a>
                </li>
                <li class=\"nav-item\" role=\"presentation\">
<a class=\"nav-link th-btn active\" id=\"reviews-tab\" data-bs-toggle=\"tab\" href=\"#reviews\" role=\"tab\" aria-controls=\"reviews\" aria-selected=\"true\">Avis</a>                </li>
            </ul>
            <div class=\"tab-content\" id=\"productTabContent\">
                <div class=\"tab-pane fade\" id=\"description\" role=\"tabpanel\" aria-labelledby=\"description-tab\">
                    <p class=\"text\">{{pack.description}}</p>      </div>


                <div class=\"tab-pane fade show active\" id=\"reviews\" role=\"tabpanel\" aria-labelledby=\"reviews-tab\">
    <div class=\"woocommerce-Reviews\">
        <div class=\"th-comments-wrap\">
            <ul class=\"comment-list\">
                {% if pack.avis is empty %}
                    <li class=\"review th-comment-item\">
                        <div class=\"th-post-comment\">
                            <div class=\"comment-content\">
                                <p class=\"text\">There are no reviews yet.</p>
                            </div>
                        </div>
                    </li>
                {% else %}
                    {% for avis in pack.avis %}
                        <li class=\"review th-comment-item\">
                            <div class=\"th-post-comment\">
                                <div class=\"comment-avater\">
                                    {% if avis.utilisateur is not null %}
                                        {% if avis.utilisateur.avatar is defined and avis.utilisateur.avatar %}
                                            <img src=\"{{ asset('uploads/users/' ~ avis.utilisateur.avatar) }}\" alt=\"{{ avis.utilisateur.nom }}\">
                                        {% else %}
                                            <img src=\"{{ asset('Front/img/blog/comment-author-1.jpg') }}\" alt=\"Default Avatar\">
                                        {% endif %}
                                    {% else %}
                                        <img src=\"{{ asset('Front/img/blog/comment-author-1.jpg') }}\" alt=\"Utilisateur Supprimé\">
                                    {% endif %}
                                </div>
                                <div class=\"comment-content\">
                                    <h4 class=\"name\">
                                        {% if avis.utilisateur is not null %}
                                            {{ avis.utilisateur.nom }} {{ avis.utilisateur.prenom }}
                                        {% else %}
                                            Utilisateur Supprimé
                                        {% endif %}
                                    </h4>
                                    <span class=\"commented-on\">
                                        <i class=\"fal fa-calendar-alt\"></i>
                                        {{ avis.dateCreation|date('d M, Y') }}
                                    </span>
                                    <div class=\"star-rating\" role=\"img\" aria-label=\"Rated {{ avis.note }} out of 5\">
                                        <span style=\"width:{{ (avis.note/5)*100 }}%\">
                                            Rated <strong class=\"rating\">{{ avis.note }}</strong> out of 5
                                        </span>
                                    </div>
                                    <p class=\"text\">{{ avis.commentaire }}</p>
                                </div>
                            </div>
                        </li>
                    {% endfor %}
                {% endif %}
            </ul>
        </div>
        
        <!-- Comment Form -->
       
    {% set hasPurchased = false %}
    {% for demande in demandePacks %}
        {% if demande.pack.id == pack.id and demande.statut == 'CONFIRMÉ' %}
            {% set hasPurchased = true %}
        {% endif %}
    {% endfor %}

    {% if hasPurchased %}
    <div class=\"th-comment-form\">
        <div class=\"form-title\">
            <h3 class=\"blog-inner-title\">Ajouter un avis</h3>
        </div>
        <form action=\"{{ path('app_avis_add', {'packId': pack.id}) }}\" method=\"POST\" class=\"review-form\" novalidate>
            <div class=\"row\">
                <div class=\"form-group rating-select d-flex align-items-center\">
                    <label>Votre note</label>
                    <p class=\"stars\">
                        <span>
                            {% for i in 1..5 %}
                                <a class=\"star-{{ i }} {% if (app.request.query.get('rating', 5)|default(5)) >= i %}active{% endif %}\" 
                                   href=\"#\" 
                                   data-value=\"{{ i }}\">{{ i }}</a>
                            {% endfor %}
                        </span>
                        <input type=\"hidden\" name=\"rating\" id=\"rating-value\" value=\"{{ app.request.query.get('rating', 5)|default(5) }}\" class=\"form-control\">
                    </p>
                    {% if app.request.query.get('error_note') is not empty %}
                        <div class=\"invalid-feedback d-block\">{{ app.request.query.get('error_note') }}</div>
                    {% endif %}
                </div>
                <div class=\"col-12 form-group\">
                    <textarea name=\"comment\" placeholder=\"Write your review here...\" 
                              class=\"form-control {% if app.request.query.get('error_commentaire') is not empty %}is-invalid{% endif %}\">{{ app.request.query.get('comment', '') }}</textarea>
                    {% if app.request.query.get('error_commentaire') is not empty %}
                        <div class=\"invalid-feedback\">{{ app.request.query.get('error_commentaire') }}</div>
                    {% endif %}
                </div>
               
                <div class=\"col-12 form-group mb-0\">
                    <button type=\"submit\" class=\"th-btn\">Publier l'avis</button>
                </div>
            </div>
        </form>
    </div>
    {% else %}
        <div class=\"alert alert-info\">
            <p><i class=\"fas fa-info-circle\"></i> Pour laisser un avis, vous devez d'abord acheter ce pack et avoir une commande avec le statut \"CONFIRMÉ\".</p>
            <a href=\"{{ path('app_pack_booking', {'id': pack.id}) }}\" class=\"th-btn mt-3\">Acheter ce pack</a>
        </div>
    {% endif %}

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Star rating functionality
        const stars = document.querySelectorAll('.stars a');
        const ratingInput = document.getElementById('rating-value');
        
        stars.forEach(star => {
            star.addEventListener('click', function(e) {
                e.preventDefault();
                const value = parseInt(this.getAttribute('data-value'));
                ratingInput.value = value;
                
                // Update star display
                stars.forEach(s => {
                    const sValue = parseInt(s.getAttribute('data-value'));
                    if (sValue <= value) {
                        s.classList.add('active');
                    } else {
                        s.classList.remove('active');
                    }
                });
            });
            
            // Hover effect
            star.addEventListener('mouseover', function() {
                const value = parseInt(this.getAttribute('data-value'));
                stars.forEach(s => {
                    const sValue = parseInt(s.getAttribute('data-value'));
                    if (sValue <= value) {
                        s.classList.add('hover');
                    } else {
                        s.classList.remove('hover');
                    }
                });
            });
            
            star.addEventListener('mouseout', function() {
                stars.forEach(s => {
                    s.classList.remove('hover');
                });
            });
        });
    });
</script>
</div>
            <!--==============================
        Related Product  
        ==============================-->
            <div class=\"space-extra-top mb-30\">
                <div class=\"title-area text-center\">
                   <h2 class=\"sec-title\">Packs similaires</h2>
                   <p class=\"sec-text\">Découvrez d'autres packs de la même catégorie</p>
                </div>
                <div class=\"row th-carousel\" data-slide-show=\"4\" data-lg-slide-show=\"3\" data-md-slide-show=\"2\" data-sm-slide-show=\"2\" data-xs-slide-show=\"1\" data-arrows=\"true\">
                    {% if relatedPacks is not empty %}
                        {% for relatedPack in relatedPacks %}
                            <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                <div class=\"th-product\">
                                    <div class=\"product-img\">
                                        <img src=\"{{ asset('uploads/packs/' ~ relatedPack.photo|default('default.jpg')) }}\" alt=\"{{ relatedPack.nom }}\">
                                        <div class=\"actions\">
                                            <a href=\"{{ path('app_pack_shop_details', {'id': relatedPack.id}) }}\" class=\"icon-btn\"><i class=\"far fa-eye\"></i></a>
                                            <a href=\"{{ path('app_pack_booking', {'id': relatedPack.id}) }}\" class=\"icon-btn\"><i class=\"far fa-cart-plus\"></i></a>
                                            <a href=\"#\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                        </div>
                                    </div>
                                    <div class=\"product-content\">
                                        <h3 class=\"product-title\"><a href=\"{{ path('app_pack_shop_details', {'id': relatedPack.id}) }}\">{{ relatedPack.nom }}</a></h3>
                                        <div class=\"product-meta\">
                                            <span class=\"price\">{{ relatedPack.prix }} TND</span>
                                            <span class=\"category\">{{ relatedPack.categorie }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    {% else %}
                        <div class=\"col-12 text-center\">
                            <p>Aucun autre pack dans cette catégorie.</p>
                        </div>
                    {% endif %}
                </div>
                <div class=\"row th-carousel\" data-slide-show=\"4\" data-lg-slide-show=\"3\" data-md-slide-show=\"2\" data-sm-slide-show=\"2\" data-xs-slide-show=\"1\" data-arrows=\"true\">
                    {% for similarPack in similarPacks|default([]) %}
                        {% if similarPack.id != pack.id and similarPack.categorie == pack.categorie %}
                            <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                <div class=\"th-product\">
                                    <div class=\"product-img\">
                                        <img src=\"{{ asset('uploads/packs/' ~ similarPack.photo|default('default.jpg')) }}\" alt=\"{{ similarPack.nom }}\">
                                        <div class=\"actions\">
                                            <a href=\"{{ path('app_pack_details', {'id': similarPack.id}) }}\" class=\"icon-btn\"><i class=\"far fa-eye\"></i></a>
                                            <a href=\"{{ path('app_pack_booking', {'id': similarPack.id}) }}\" class=\"icon-btn\"><i class=\"far fa-calendar-plus\"></i></a>
                                        </div>
                                    </div>
                                    <div class=\"product-content\">
                                        <h3 class=\"product-title\"><a href=\"{{ path('app_pack_details', {'id': similarPack.id}) }}\">{{ similarPack.nom }}</a></h3>
                                        <div class=\"product-meta\">
                                            <span class=\"price\">{{ similarPack.prix }} TND</span>
                                            <span class=\"category\">{{ similarPack.categorie }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                    {% else %}
                        <div class=\"col-12 text-center\">
                            <p>Aucun pack similaire disponible pour le moment.</p>
                        </div>
                    {% endfor %}

                   

                   

                   

                    
                </div>
            </div>
        </div>
    </section>
    <!--==============================
\t\t\tFooter Area
\t==============================-->
   

 <footer class=\"footer-wrapper footer-layout7\" data-bg-src=\"{{ asset('Front/img/bg/footer_bg_1.jpg') }}\">
    <div class=\"widget-area\">
        <div class=\"container\">
            <div class=\"row justify-content-between\">
                <div class=\"col-md-6 col-xl-auto\">
                    <div class=\"widget footer-widget\">
                        <div class=\"th-widget-about\">
                            <div class=\"about-logo\">
                                <a href=\"index.html\"><img src=\"{{ asset('Front/img/logo-white3.svg') }}\" alt=\"GoldenTouch\"></a>
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
            <p class=\"copyright-text\"> 2023 <a href=\"#\">GoldenTouch</a>. Tous droits réservés.</p>
        </div>
    </div>
    <div class=\"footer-shape\"><img src=\"assets/img/shape/footer_shape.png\" alt=\"forme\">
    </div>
</footer>


    <!--********************************
\t\t\tCode End  Here 
\t******************************** -->

    <!-- Scroll To Top -->
    <div class=\"scroll-top\">
        <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
            <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\">
            </path>
        </svg>
    </div>



    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Star rating functionality
        const stars = document.querySelectorAll('.stars a');
        const ratingInput = document.getElementById('rating-value');
        
        stars.forEach(star => {
            star.addEventListener('click', function(e) {
                e.preventDefault();
                const value = parseInt(this.getAttribute('data-value'));
                ratingInput.value = value;
                
                // Update star display
                stars.forEach(s => {
                    const sValue = parseInt(s.getAttribute('data-value'));
                    if (sValue <= value) {
                        s.classList.add('active');
                    } else {
                        s.classList.remove('active');
                    }
                });
            });
            
            // Hover effect
            star.addEventListener('mouseover', function() {
                const value = parseInt(this.getAttribute('data-value'));
                stars.forEach(s => {
                    const sValue = parseInt(s.getAttribute('data-value'));
                    if (sValue <= value) {
                        s.classList.add('hover');
                    } else {
                        s.classList.remove('hover');
                    }
                });
            });
            
            star.addEventListener('mouseout', function() {
                stars.forEach(s => {
                    s.classList.remove('hover');
                });
            });
        });
    });
</script>
</html>", "pack/shop-details.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\pack\\shop-details.html.twig");
    }
}
