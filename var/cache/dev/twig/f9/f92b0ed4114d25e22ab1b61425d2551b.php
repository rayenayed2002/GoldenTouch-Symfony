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

/* lieu/details.html.twig */
class __TwigTemplate_da22215df45c8e18851488128167f6a5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieu/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieu/details.html.twig"));

        // line 1
        yield "<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>GoldenTouch - Détails du Lieu ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "</title>
    <meta name=\"author\" content=\"GoldenTouch\">
    <meta name=\"description\" content=\"Détails du lieu ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        yield "\">
    <meta name=\"keywords\" content=\"lieu, événement, location, salle\">
    <meta name=\"robots\" content=\"INDEX,FOLLOW\">

    <!-- Mobile Specific Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Favicons -->
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
    
    <!-- Google Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Radio+Canada:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

    <!-- All CSS File -->
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

    <style>
        .lieu-cover-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: 10px;
        }
        .lieu-header-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            padding: 30px;
            color: white;
        }
        .lieu-title {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .lieu-meta {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }
        .lieu-description {
            font-size: 16px;
            line-height: 1.6;
            color: #6B7280;
        }
        .feature-box {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .feature-box-icon {
            font-size: 24px;
            margin-right: 15px;
            color: var(--theme-color);
        }
        .similar-lieu-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 8px;
            transition: all 0.3s;
            background: #F9FAFB;
        }
        .similar-lieu-item:hover {
            background-color: rgba(115, 103, 240, 0.1);
            text-decoration: none;
        }
        .similar-lieu-image {
            width: 80px;
            height: 80px;
            border-radius: 8px;
            object-fit: cover;
            margin-right: 15px;
        }
        .review-item {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        .review-user {
            font-weight: 600;
            margin-bottom: 5px;
        }
        .review-date {
            font-size: 14px;
            color: #6B7280;
        }
        .star-rating {
            color: #FFC107;
            margin: 10px 0;
        }
        .gallery-thumbnail {
            cursor: pointer;
            transition: transform 0.3s;
            border-radius: 8px;
        }
        .gallery-thumbnail:hover {
            transform: scale(1.05);
        }
        #map {
            height: 300px;
            width: 100%;
            border-radius: 8px;
        }
        .booking-card {
            background: #fff;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .booking-card .form-control {
            height: 50px;
            border-radius: 8px;
        }
        .booking-card textarea.form-control {
            height: auto;
        }
        .section-title {
            font-size: 28px;
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 15px;
        }
        .section-title:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 60px;
            height: 3px;
            background: var(--theme-color);
        }
        .th-product {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s;
        }
        .th-product:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        /* QR Code Styles */
        .qr-code-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }
        .qr-code-card .card-header {
            font-weight: 600;
            font-size: 1.1rem;
            background-color: var(--theme-color);
            color: white;
        }
        .qr-code-img {
            max-width: 100%;
            height: auto;
            padding: 15px;
        }
    </style>
</head>

<body class=\"\">

    <!--[if lte IE 9]>
        <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Preloader -->
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

    <!-- Mobile Menu -->
    <div class=\"th-menu-wrapper\">
        <div class=\"th-menu-area text-center\">
            <button class=\"th-menu-toggle\"><i class=\"fal fa-times\"></i></button>
            <div class=\"mobile-logo\">
                <a href=\"index.html\"><img src=\"";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo-white3.svg"), "html", null, true);
        yield "\" alt=\"GoldenTouch\"></a>
            </div>
            <div class=\"th-mobile-menu\">
                <ul>
                    <li><a href=\"";
        // line 239
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_index");
        yield "\">Lieux</a></li>
                    <li><a href=\"";
        // line 240
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        yield "\">Réservations</a></li>
                    <li><a href=\"contact.html\">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Header Area -->
    <header class=\"th-header header-layout7\">
        <div class=\"header-top\">
            <div class=\"container\">
                <div class=\"row justify-content-center justify-content-md-between align-items-center gy-2\">
                    <div class=\"col-auto d-none d-md-block\">
                        <div class=\"header-links\">
                            <ul>
                                <li><i class=\"fa-thin fa-envelope\"></i><a href=\"mailto:GoldenTouch@gmail.com\">GoldenTouch@gmail.com</a></li>
                                <li><i class=\"fa-thin fa-phone\"></i><a href=\"tel:+468254762443\">(+468) 254 762 443</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-auto\">
                        <div class=\"header-right\">
                            <div class=\"langauge\">
                                <select class=\"form-select nice-select\">
                                    <option selected=\"\">Français</option>
                                    <option>English</option>
                                </select>
                            </div>
                            <div class=\"header-social\">
                                <span class=\"social-title\">Suivez-nous :</span>
                                <a href=\"https://www.facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"https://www.twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"https://www.linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                <a href=\"https://www.instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
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
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo44.png"), "html", null, true);
        yield "\" alt=\"GoldenTouch\" style=\"height: 130px;\">
                            </div>
                        </div>
                        <div class=\"col-auto me-xl-auto\">
                            <nav class=\"main-menu d-none d-lg-block\">
                                <ul>
                                    <li><a href=\"";
        // line 293
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_index");
        yield "\">Accueil</a></li>
                                    <li class=\"menu-item-has-children\">
                                        <a href=\"";
        // line 295
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_index");
        yield "\">Lieux</a>
                                        <ul class=\"sub-menu\">
                                            <li><a href=\"";
        // line 297
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_new");
        yield "\">Ajouter Lieu</a></li>
                                            <li><a href=\"";
        // line 298
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_index");
        yield "\">Liste Lieux</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"";
        // line 301
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        yield "\">Réservations</a></li>
                                    <li><a href=\"contact.html\">Contact</a></li>
                                </ul>
                            </nav>
                            <button class=\"th-menu-toggle d-inline-block d-lg-none\"><i class=\"far fa-bars\"></i></button>
                        </div>
                        <div class=\"col-auto d-none d-xl-block\">
                            <div class=\"header-button\">
                                <button type=\"button\" class=\"icon-btn searchBoxToggler\"><i class=\"far fa-search\"></i></button>
                                <a href=\"#\" class=\"icon-btn sideMenuToggler\"><i class=\"far fa-bars\"></i></a>
                                <a href=\"#bookingSection\" class=\"th-btn\">RÉSERVER <i class=\"fa-regular fa-arrow-right ms-2\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"logo-shape\"><img src=\"";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo-shape.svg"), "html", null, true);
        yield "\" alt=\"\"></div>
    </header>

    <!-- Breadcrumb -->
    <div class=\"breadcumb-wrapper\" data-bg-src=\"";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/breadcumb/breadcumb-bg.jpg"), "html", null, true);
        yield "\">
        <div class=\"container z-index-common\">
            <h1 class=\"breadcumb-title\">";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 324, $this->source); })()), "name", [], "any", false, false, false, 324), "html", null, true);
        yield "</h1>
            <ul class=\"breadcumb-menu\">
                <li><a href=\"";
        // line 326
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_index");
        yield "\">Accueil</a></li>
                <li><a href=\"";
        // line 327
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_index");
        yield "\">Lieux</a></li>
                <li>";
        // line 328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 328, $this->source); })()), "name", [], "any", false, false, false, 328), "html", null, true);
        yield "</li>
            </ul>
        </div>
    </div>

    <!-- Lieu Details -->
    <section class=\"th-product-wrapper product-details space-top space-extra-bottom\">
        <div class=\"container\">
            <div class=\"row gx-60\">
                <div class=\"col-lg-8\">
                    <!-- Lieu Header with Image -->
                    <div class=\"lieu-header position-relative mb-30\">
                        <div class=\"lieu-engagement position-absolute top-0 end-0 m-3 z-index-1\">
                            <button class=\"btn btn-icon btn-label-secondary me-1\" onclick=\"shareLieu()\">
                                <i class=\"ti ti-share\"></i>
                            </button>
                            <button class=\"btn btn-icon btn-label-danger\" onclick=\"toggleFavorite(this)\">
                                <i class=\"ti ti-heart\"></i>
                            </button>
                        </div>
                        <img src=\"";
        // line 348
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/lieux/" . ((CoreExtension::getAttribute($this->env, $this->source, ($context["lieu"] ?? null), "imageUrl", [], "any", true, true, false, 348)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 348, $this->source); })()), "imageUrl", [], "any", false, false, false, 348), "default.jpg")) : ("default.jpg")))), "html", null, true);
        yield "\" 
                             class=\"lieu-cover-image\" 
                             alt=\"";
        // line 350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 350, $this->source); })()), "name", [], "any", false, false, false, 350), "html", null, true);
        yield "\">
                        <div class=\"lieu-header-overlay\">
                            <h1 class=\"lieu-title\">";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 352, $this->source); })()), "name", [], "any", false, false, false, 352), "html", null, true);
        yield "</h1>
                            <div class=\"lieu-meta\">
                                <span class=\"badge bg-primary\">";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["lieu"] ?? null), "category", [], "any", true, true, false, 354)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 354, $this->source); })()), "category", [], "any", false, false, false, 354), "Non spécifié")) : ("Non spécifié")), "html", null, true);
        yield "</span>
                                ";
        // line 355
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 355, $this->source); })()), "price", [], "any", false, false, false, 355) < 1000)) {
            // line 356
            yield "                                    <span class=\"badge bg-success\">Économique</span>
                                ";
        }
        // line 358
        yield "                                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 358, $this->source); })()), "capacity", [], "any", false, false, false, 358) > 500)) {
            // line 359
            yield "                                    <span class=\"badge bg-warning\">Grande capacité</span>
                                ";
        }
        // line 361
        yield "                            </div>
                        </div>
                    </div>

                    <!-- Quick Info Cards -->
                    <div class=\"row mb-30\">
                        <div class=\"col-md-4 mb-3\">
                            <div class=\"card bg-label-primary h-100\">
                                <div class=\"card-body\">
                                    <div class=\"feature-box\">
                                        <div class=\"feature-box-icon\">
                                            <i class=\"fas fa-euro-sign\"></i>
                                        </div>
                                        <div>
                                            <h5 class=\"mb-1\">Prix</h5>
                                            <p class=\"mb-0\">";
        // line 376
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 376, $this->source); })()), "price", [], "any", false, false, false, 376), "html", null, true);
        yield " €</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <div class=\"card bg-label-success h-100\">
                                <div class=\"card-body\">
                                    <div class=\"feature-box\">
                                        <div class=\"feature-box-icon\">
                                            <i class=\"fas fa-users\"></i>
                                        </div>
                                        <div>
                                            <h5 class=\"mb-1\">Capacité</h5>
                                            <p class=\"mb-0\">";
        // line 391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 391, $this->source); })()), "capacity", [], "any", false, false, false, 391), "html", null, true);
        yield " personnes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <div class=\"card bg-label-info h-100\">
                                <div class=\"card-body\">
                                    <div class=\"feature-box\">
                                        <div class=\"feature-box-icon\">
                                            <i class=\"fas fa-map-marker-alt\"></i>
                                        </div>
                                        <div>
                                            <h5 class=\"mb-1\">Localisation</h5>
                                            <p class=\"mb-0\">";
        // line 406
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 406, $this->source); })()), "location", [], "any", false, false, false, 406), "html", null, true);
        yield "</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class=\"card mb-30\">
                        <div class=\"card-body\">
                            <h3 class=\"section-title\">Description</h3>
                            <p class=\"lieu-description\">
                                ";
        // line 419
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["lieu"] ?? null), "description", [], "any", true, true, false, 419)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 419, $this->source); })()), "description", [], "any", false, false, false, 419), "Aucune description disponible pour ce lieu.")) : ("Aucune description disponible pour ce lieu.")), "html", null, true));
        yield "
                            </p>
                        </div>
                    </div>

                    <!-- Features -->
                    <div class=\"card mb-30\">
                        <div class=\"card-body\">
                            <h3 class=\"section-title\">Équipements & Services</h3>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"feature-box\">
                                        <i class=\"fas fa-check feature-box-icon\"></i>
                                        <span>Salle climatisée</span>
                                    </div>
                                    <div class=\"feature-box\">
                                        <i class=\"fas fa-check feature-box-icon\"></i>
                                        <span>Parking privé</span>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"feature-box\">
                                        <i class=\"fas fa-check feature-box-icon\"></i>
                                        <span>Cuisine équipée</span>
                                    </div>
                                    <div class=\"feature-box\">
                                        <i class=\"fas fa-check feature-box-icon\"></i>
                                        <span>Accès handicapé</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery -->
                    <div class=\"card mb-30\">
                        <div class=\"card-body\">
                            <h3 class=\"section-title\">Galerie</h3>
                            <div class=\"row g-3\">
                                ";
        // line 458
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 459
            yield "                                <div class=\"col-6 col-md-3\">
                                    <img src=\"";
            // line 460
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("uploads/lieux/gallery-" . $context["i"]) . ".jpg")), "html", null, true);
            yield "\" 
                                         class=\"img-fluid rounded gallery-thumbnail\" 
                                         alt=\"Gallery image ";
            // line 462
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\"
                                         onclick=\"openGalleryModal(";
            // line 463
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield ")\">
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 466
        yield "                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class=\"card mb-30\">
                        <div class=\"card-body\">
                            <h3 class=\"section-title\">Localisation</h3>
                            <div id=\"map\"></div>
                        </div>
                    </div>

                    <!-- Reviews -->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h3 class=\"section-title\">Avis</h3>
                            ";
        // line 482
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 482, $this->source); })())) > 0)) {
            // line 483
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 483, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["avi"]) {
                // line 484
                yield "                                    <div class=\"review-item\">
                                        <div class=\"d-flex justify-content-between\">
                                            <div>
                                                <h6 class=\"review-user\">";
                // line 487
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "userName", [], "any", false, false, false, 487), "html", null, true);
                yield "</h6>
                                                <span class=\"review-date\">";
                // line 488
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "createdAt", [], "any", false, false, false, 488), "d/m/Y H:i"), "html", null, true);
                yield "</span>
                                            </div>
                                            <div class=\"star-rating\">
                                                ";
                // line 491
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 492
                    yield "                                                    ";
                    if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "rating", [], "any", false, false, false, 492))) {
                        // line 493
                        yield "                                                        <i class=\"fas fa-star\"></i>
                                                    ";
                    } else {
                        // line 495
                        yield "                                                        <i class=\"far fa-star\"></i>
                                                    ";
                    }
                    // line 497
                    yield "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 498
                yield "                                            </div>
                                        </div>
                                        <p class=\"mt-2 mb-0\">";
                // line 500
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "comment", [], "any", false, false, false, 500), "html", null, true);
                yield "</p>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['avi'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 503
            yield "                            ";
        } else {
            // line 504
            yield "                                <div class=\"text-center py-4\">
                                    <i class=\"fas fa-comment-slash fs-3 mb-2 text-muted\"></i>
                                    <p class=\"mb-0\">Aucun avis pour ce lieu pour le moment.</p>
                                </div>
                            ";
        }
        // line 509
        yield "                        </div>
                    </div>
                </div>

                <!-- Right Column: Booking, QR Code and Similar Lieux -->
                <div class=\"col-lg-4\">
                    <!-- Booking Card -->
                    <div class=\"booking-card mb-30\" id=\"bookingSection\">
                        <h3 class=\"section-title\">Réserver ce lieu</h3>
                        <form id=\"bookingForm\">
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Date</label>
                                <input type=\"date\" class=\"form-control\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Nombre de personnes</label>
                                <input type=\"number\" class=\"form-control\" min=\"1\" max=\"";
        // line 525
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 525, $this->source); })()), "capacity", [], "any", false, false, false, 525), "html", null, true);
        yield "\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Type d'événement</label>
                                <select class=\"form-select\">
                                    <option>Mariage</option>
                                    <option>Anniversaire</option>
                                    <option>Conférence</option>
                                    <option>Autre</option>
                                </select>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Notes spéciales</label>
                                <textarea class=\"form-control\" rows=\"3\"></textarea>
                            </div>
                            <button type=\"submit\" class=\"th-btn w-100\">
                                <i class=\"fas fa-calendar-plus me-2\"></i> Réserver maintenant
                            </button>
                        </form>
                    </div>

                    <!-- QR Code Card -->
                    <div class=\"card mb-30\">
                        <div class=\"card-header bg-primary text-white\">
                            <h5 class=\"mb-0\"><i class=\"fas fa-qrcode me-2\"></i> QR Code</h5>
                        </div>
                        <div class=\"card-body text-center\">
                            <img src=\"";
        // line 552
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_qr_code", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 552, $this->source); })()), "id", [], "any", false, false, false, 552)]), "html", null, true);
        yield "\" 
                                 alt=\"QR Code pour ";
        // line 553
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 553, $this->source); })()), "name", [], "any", false, false, false, 553), "html", null, true);
        yield "\" 
                                 class=\"img-fluid mb-3 qr-code-img\">
                            <p class=\"text-muted mb-3\">Scannez ce code pour accéder à cette page</p>
                            <a href=\"";
        // line 556
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_qr_code", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 556, $this->source); })()), "id", [], "any", false, false, false, 556)]), "html", null, true);
        yield "\" 
                               class=\"btn btn-sm btn-primary\">
                                <i class=\"fas fa-download me-1\"></i> Télécharger
                            </a>
                        </div>
                    </div>

                    <!-- Similar Lieux -->
                    ";
        // line 564
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["similarLieux"]) || array_key_exists("similarLieux", $context) ? $context["similarLieux"] : (function () { throw new RuntimeError('Variable "similarLieux" does not exist.', 564, $this->source); })())) > 0)) {
            // line 565
            yield "                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h3 class=\"section-title\">Lieux similaires</h3>
                                ";
            // line 568
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["similarLieux"]) || array_key_exists("similarLieux", $context) ? $context["similarLieux"] : (function () { throw new RuntimeError('Variable "similarLieux" does not exist.', 568, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["similar"]) {
                // line 569
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["similar"], "id", [], "any", false, false, false, 569)]), "html", null, true);
                yield "\" class=\"similar-lieu-item\">
                                        <img src=\"";
                // line 570
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/lieux/" . ((CoreExtension::getAttribute($this->env, $this->source, $context["similar"], "imageUrl", [], "any", true, true, false, 570)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["similar"], "imageUrl", [], "any", false, false, false, 570), "default.jpg")) : ("default.jpg")))), "html", null, true);
                yield "\" 
                                             class=\"similar-lieu-image\" 
                                             alt=\"";
                // line 572
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["similar"], "name", [], "any", false, false, false, 572), "html", null, true);
                yield "\">
                                        <div>
                                            <h6 class=\"mb-1\">";
                // line 574
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["similar"], "name", [], "any", false, false, false, 574), "html", null, true);
                yield "</h6>
                                            <p class=\"mb-0 text-primary\">";
                // line 575
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["similar"], "price", [], "any", false, false, false, 575), "html", null, true);
                yield " €</p>
                                        </div>
                                    </a>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['similar'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 579
            yield "                            </div>
                        </div>
                    ";
        }
        // line 582
        yield "                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Modal -->
    <div class=\"modal fade\" id=\"galleryModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body text-center\">
                    <img id=\"modalImage\" src=\"\" class=\"img-fluid\" alt=\"\">
                </div>
            </div>
        </div>
    </div>

    <!-- Review Modal -->
    <div class=\"modal fade\" id=\"reviewModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Ajouter un avis</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <form id=\"reviewForm\">
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Note</label>
                            <div class=\"star-rating\">
                                <i class=\"far fa-star rating-star\" data-value=\"1\"></i>
                                <i class=\"far fa-star rating-star\" data-value=\"2\"></i>
                                <i class=\"far fa-star rating-star\" data-value=\"3\"></i>
                                <i class=\"far fa-star rating-star\" data-value=\"4\"></i>
                                <i class=\"far fa-star rating-star\" data-value=\"5\"></i>
                                <input type=\"hidden\" name=\"rating\" id=\"ratingInput\" value=\"0\">
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Commentaire</label>
                            <textarea class=\"form-control\" rows=\"4\" placeholder=\"Décrivez votre expérience...\"></textarea>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"th-btn style2\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"button\" class=\"th-btn\" onclick=\"submitReview()\">Soumettre</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class=\"footer-wrapper footer-layout7\" data-bg-src=\"";
        // line 637
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
        // line 645
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
                                    <li><a href=\"";
        // line 667
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_index");
        yield "\">Lieux</a></li>
                                    <li><a href=\"";
        // line 668
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        yield "\">Réservations</a></li>
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
        // line 683
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
                                <p class=\"md-20\">Abonnez-vous pour recevoir nos actualités et offres exclusives.</p>
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
        <div class=\"footer-shape\"><img src=\"";
        // line 714
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/shape/footer_shape.png"), "html", null, true);
        yield "\" alt=\"forme\"></div>
    </footer>

    <!-- Scroll To Top -->
    <div class=\"scroll-top\">
        <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
            <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\"></path>
        </svg>
    </div>

    <!-- All Js File -->
    <script src=\"";
        // line 725
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/vendor/jquery-3.6.0.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 726
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/slick.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 727
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 728
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 729
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.counterup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 730
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/imagesloaded.pkgd.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 731
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/isotope.pkgd.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 732
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/nice-select.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 733
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.datetimepicker.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 734
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/wow.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 735
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/main.js"), "html", null, true);
        yield "\"></script>

    <!-- Google Maps API -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap\" async defer></script>

    <script>
        // Initialize map
        function initMap() {
            // Replace with actual coordinates from your Lieu entity
            const location = { lat: 36.8065, lng: 10.1815 }; // Example: Tunis coordinates
            const map = new google.maps.Map(document.getElementById(\"map\"), {
                zoom: 15,
                center: location,
            });
            new google.maps.Marker({
                position: location,
                map: map,
                title: \"";
        // line 752
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 752, $this->source); })()), "name", [], "any", false, false, false, 752), "html", null, true);
        yield "\"
            });
        }

        // Gallery modal
        function openGalleryModal(imageNumber) {
            const modalImage = document.getElementById('modalImage');
            modalImage.src = \"";
        // line 759
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/lieux/gallery-"), "html", null, true);
        yield "\" + imageNumber + \".jpg\";
            const modal = new bootstrap.Modal(document.getElementById('galleryModal'));
            modal.show();
        }

        // Share lieu
        function shareLieu() {
            if (navigator.share) {
                navigator.share({
                    title: '";
        // line 768
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 768, $this->source); })()), "name", [], "any", false, false, false, 768), "html", null, true);
        yield "',
                    text: 'Découvrez ce magnifique lieu pour vos événements',
                    url: window.location.href
                });
            } else {
                // Fallback for browsers that don't support Web Share API
                alert('Partagez ce lien : ' + window.location.href);
            }
        }

        // Toggle favorite
        function toggleFavorite(button) {
            const icon = button.querySelector('i');
            if (icon.classList.contains('fa-heart')) {
                icon.classList.remove('fa-heart');
                icon.classList.add('fa-heart');
                button.classList.remove('btn-label-danger');
                button.classList.add('btn-danger');
            } else {
                icon.classList.remove('fa-heart');
                icon.classList.add('fa-heart');
                button.classList.remove('btn-danger');
                button.classList.add('btn-label-danger');
            }
        }

        // Handle booking form submission
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Votre demande de réservation a été envoyée avec succès !');
        });

        // Rating stars interaction
        document.querySelectorAll('.rating-star').forEach(star => {
            star.addEventListener('click', function() {
                const value = this.getAttribute('data-value');
                document.getElementById('ratingInput').value = value;
                
                // Update stars display
                document.querySelectorAll('.rating-star').forEach(s => {
                    if (s.getAttribute('data-value') <= value) {
                        s.classList.add('fas');
                        s.classList.add('fa-star');
                        s.classList.remove('far');
                    } else {
                        s.classList.remove('fas');
                        s.classList.add('far');
                    }
                });
            });
        });

        // Submit review
        function submitReview() {
            const rating = document.getElementById('ratingInput').value;
            if (rating == 0) {
                alert('Veuillez donner une note');
                return;
            }
            
            alert('Merci pour votre avis !');
            const modal = bootstrap.Modal.getInstance(document.getElementById('reviewModal'));
            modal.hide();
        }
    </script>
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
        return "lieu/details.html.twig";
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
        return array (  1122 => 768,  1110 => 759,  1100 => 752,  1080 => 735,  1076 => 734,  1072 => 733,  1068 => 732,  1064 => 731,  1060 => 730,  1056 => 729,  1052 => 728,  1048 => 727,  1044 => 726,  1040 => 725,  1026 => 714,  992 => 683,  974 => 668,  970 => 667,  945 => 645,  934 => 637,  877 => 582,  872 => 579,  862 => 575,  858 => 574,  853 => 572,  848 => 570,  843 => 569,  839 => 568,  834 => 565,  832 => 564,  821 => 556,  815 => 553,  811 => 552,  781 => 525,  763 => 509,  756 => 504,  753 => 503,  744 => 500,  740 => 498,  734 => 497,  730 => 495,  726 => 493,  723 => 492,  719 => 491,  713 => 488,  709 => 487,  704 => 484,  699 => 483,  697 => 482,  679 => 466,  670 => 463,  666 => 462,  661 => 460,  658 => 459,  654 => 458,  612 => 419,  596 => 406,  578 => 391,  560 => 376,  543 => 361,  539 => 359,  536 => 358,  532 => 356,  530 => 355,  526 => 354,  521 => 352,  516 => 350,  511 => 348,  488 => 328,  484 => 327,  480 => 326,  475 => 324,  470 => 322,  463 => 318,  443 => 301,  437 => 298,  433 => 297,  428 => 295,  423 => 293,  414 => 287,  364 => 240,  360 => 239,  353 => 235,  161 => 46,  157 => 45,  153 => 44,  149 => 43,  145 => 42,  141 => 41,  129 => 32,  124 => 30,  120 => 29,  116 => 28,  112 => 27,  108 => 26,  104 => 25,  100 => 24,  96 => 23,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  61 => 9,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>GoldenTouch - Détails du Lieu {{ lieu.name }}</title>
    <meta name=\"author\" content=\"GoldenTouch\">
    <meta name=\"description\" content=\"Détails du lieu {{ lieu.name }}\">
    <meta name=\"keywords\" content=\"lieu, événement, location, salle\">
    <meta name=\"robots\" content=\"INDEX,FOLLOW\">

    <!-- Mobile Specific Metas -->
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
    <meta name=\"theme-color\" content=\"#ffffff\">
    
    <!-- Google Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Radio+Canada:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

    <!-- All CSS File -->
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/fontawesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/magnific-popup.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/slick.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/jquery.datetimepicker.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/style.css') }}\">

    <style>
        .lieu-cover-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: 10px;
        }
        .lieu-header-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            padding: 30px;
            color: white;
        }
        .lieu-title {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .lieu-meta {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }
        .lieu-description {
            font-size: 16px;
            line-height: 1.6;
            color: #6B7280;
        }
        .feature-box {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .feature-box-icon {
            font-size: 24px;
            margin-right: 15px;
            color: var(--theme-color);
        }
        .similar-lieu-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 8px;
            transition: all 0.3s;
            background: #F9FAFB;
        }
        .similar-lieu-item:hover {
            background-color: rgba(115, 103, 240, 0.1);
            text-decoration: none;
        }
        .similar-lieu-image {
            width: 80px;
            height: 80px;
            border-radius: 8px;
            object-fit: cover;
            margin-right: 15px;
        }
        .review-item {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        .review-user {
            font-weight: 600;
            margin-bottom: 5px;
        }
        .review-date {
            font-size: 14px;
            color: #6B7280;
        }
        .star-rating {
            color: #FFC107;
            margin: 10px 0;
        }
        .gallery-thumbnail {
            cursor: pointer;
            transition: transform 0.3s;
            border-radius: 8px;
        }
        .gallery-thumbnail:hover {
            transform: scale(1.05);
        }
        #map {
            height: 300px;
            width: 100%;
            border-radius: 8px;
        }
        .booking-card {
            background: #fff;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .booking-card .form-control {
            height: 50px;
            border-radius: 8px;
        }
        .booking-card textarea.form-control {
            height: auto;
        }
        .section-title {
            font-size: 28px;
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 15px;
        }
        .section-title:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 60px;
            height: 3px;
            background: var(--theme-color);
        }
        .th-product {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s;
        }
        .th-product:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        /* QR Code Styles */
        .qr-code-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }
        .qr-code-card .card-header {
            font-weight: 600;
            font-size: 1.1rem;
            background-color: var(--theme-color);
            color: white;
        }
        .qr-code-img {
            max-width: 100%;
            height: auto;
            padding: 15px;
        }
    </style>
</head>

<body class=\"\">

    <!--[if lte IE 9]>
        <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Preloader -->
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

    <!-- Mobile Menu -->
    <div class=\"th-menu-wrapper\">
        <div class=\"th-menu-area text-center\">
            <button class=\"th-menu-toggle\"><i class=\"fal fa-times\"></i></button>
            <div class=\"mobile-logo\">
                <a href=\"index.html\"><img src=\"{{ asset('Front/img/logo-white3.svg') }}\" alt=\"GoldenTouch\"></a>
            </div>
            <div class=\"th-mobile-menu\">
                <ul>
                    <li><a href=\"{{ path('app_lieu_index') }}\">Lieux</a></li>
                    <li><a href=\"{{ path('app_reservation_index') }}\">Réservations</a></li>
                    <li><a href=\"contact.html\">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Header Area -->
    <header class=\"th-header header-layout7\">
        <div class=\"header-top\">
            <div class=\"container\">
                <div class=\"row justify-content-center justify-content-md-between align-items-center gy-2\">
                    <div class=\"col-auto d-none d-md-block\">
                        <div class=\"header-links\">
                            <ul>
                                <li><i class=\"fa-thin fa-envelope\"></i><a href=\"mailto:GoldenTouch@gmail.com\">GoldenTouch@gmail.com</a></li>
                                <li><i class=\"fa-thin fa-phone\"></i><a href=\"tel:+468254762443\">(+468) 254 762 443</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-auto\">
                        <div class=\"header-right\">
                            <div class=\"langauge\">
                                <select class=\"form-select nice-select\">
                                    <option selected=\"\">Français</option>
                                    <option>English</option>
                                </select>
                            </div>
                            <div class=\"header-social\">
                                <span class=\"social-title\">Suivez-nous :</span>
                                <a href=\"https://www.facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"https://www.twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"https://www.linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                <a href=\"https://www.instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
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
                                    <li><a href=\"{{ path('front_index') }}\">Accueil</a></li>
                                    <li class=\"menu-item-has-children\">
                                        <a href=\"{{ path('app_lieu_index') }}\">Lieux</a>
                                        <ul class=\"sub-menu\">
                                            <li><a href=\"{{ path('app_lieu_new') }}\">Ajouter Lieu</a></li>
                                            <li><a href=\"{{ path('app_lieu_index') }}\">Liste Lieux</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"{{ path('app_reservation_index') }}\">Réservations</a></li>
                                    <li><a href=\"contact.html\">Contact</a></li>
                                </ul>
                            </nav>
                            <button class=\"th-menu-toggle d-inline-block d-lg-none\"><i class=\"far fa-bars\"></i></button>
                        </div>
                        <div class=\"col-auto d-none d-xl-block\">
                            <div class=\"header-button\">
                                <button type=\"button\" class=\"icon-btn searchBoxToggler\"><i class=\"far fa-search\"></i></button>
                                <a href=\"#\" class=\"icon-btn sideMenuToggler\"><i class=\"far fa-bars\"></i></a>
                                <a href=\"#bookingSection\" class=\"th-btn\">RÉSERVER <i class=\"fa-regular fa-arrow-right ms-2\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"logo-shape\"><img src=\"{{ asset('Front/img/logo-shape.svg') }}\" alt=\"\"></div>
    </header>

    <!-- Breadcrumb -->
    <div class=\"breadcumb-wrapper\" data-bg-src=\"{{ asset('Front/img/breadcumb/breadcumb-bg.jpg') }}\">
        <div class=\"container z-index-common\">
            <h1 class=\"breadcumb-title\">{{ lieu.name }}</h1>
            <ul class=\"breadcumb-menu\">
                <li><a href=\"{{ path('front_index') }}\">Accueil</a></li>
                <li><a href=\"{{ path('app_lieu_index') }}\">Lieux</a></li>
                <li>{{ lieu.name }}</li>
            </ul>
        </div>
    </div>

    <!-- Lieu Details -->
    <section class=\"th-product-wrapper product-details space-top space-extra-bottom\">
        <div class=\"container\">
            <div class=\"row gx-60\">
                <div class=\"col-lg-8\">
                    <!-- Lieu Header with Image -->
                    <div class=\"lieu-header position-relative mb-30\">
                        <div class=\"lieu-engagement position-absolute top-0 end-0 m-3 z-index-1\">
                            <button class=\"btn btn-icon btn-label-secondary me-1\" onclick=\"shareLieu()\">
                                <i class=\"ti ti-share\"></i>
                            </button>
                            <button class=\"btn btn-icon btn-label-danger\" onclick=\"toggleFavorite(this)\">
                                <i class=\"ti ti-heart\"></i>
                            </button>
                        </div>
                        <img src=\"{{ asset('uploads/lieux/' ~ lieu.imageUrl|default('default.jpg')) }}\" 
                             class=\"lieu-cover-image\" 
                             alt=\"{{ lieu.name }}\">
                        <div class=\"lieu-header-overlay\">
                            <h1 class=\"lieu-title\">{{ lieu.name }}</h1>
                            <div class=\"lieu-meta\">
                                <span class=\"badge bg-primary\">{{ lieu.category|default('Non spécifié') }}</span>
                                {% if lieu.price < 1000 %}
                                    <span class=\"badge bg-success\">Économique</span>
                                {% endif %}
                                {% if lieu.capacity > 500 %}
                                    <span class=\"badge bg-warning\">Grande capacité</span>
                                {% endif %}
                            </div>
                        </div>
                    </div>

                    <!-- Quick Info Cards -->
                    <div class=\"row mb-30\">
                        <div class=\"col-md-4 mb-3\">
                            <div class=\"card bg-label-primary h-100\">
                                <div class=\"card-body\">
                                    <div class=\"feature-box\">
                                        <div class=\"feature-box-icon\">
                                            <i class=\"fas fa-euro-sign\"></i>
                                        </div>
                                        <div>
                                            <h5 class=\"mb-1\">Prix</h5>
                                            <p class=\"mb-0\">{{ lieu.price }} €</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <div class=\"card bg-label-success h-100\">
                                <div class=\"card-body\">
                                    <div class=\"feature-box\">
                                        <div class=\"feature-box-icon\">
                                            <i class=\"fas fa-users\"></i>
                                        </div>
                                        <div>
                                            <h5 class=\"mb-1\">Capacité</h5>
                                            <p class=\"mb-0\">{{ lieu.capacity }} personnes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <div class=\"card bg-label-info h-100\">
                                <div class=\"card-body\">
                                    <div class=\"feature-box\">
                                        <div class=\"feature-box-icon\">
                                            <i class=\"fas fa-map-marker-alt\"></i>
                                        </div>
                                        <div>
                                            <h5 class=\"mb-1\">Localisation</h5>
                                            <p class=\"mb-0\">{{ lieu.location }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class=\"card mb-30\">
                        <div class=\"card-body\">
                            <h3 class=\"section-title\">Description</h3>
                            <p class=\"lieu-description\">
                                {{ lieu.description|default('Aucune description disponible pour ce lieu.')|nl2br }}
                            </p>
                        </div>
                    </div>

                    <!-- Features -->
                    <div class=\"card mb-30\">
                        <div class=\"card-body\">
                            <h3 class=\"section-title\">Équipements & Services</h3>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"feature-box\">
                                        <i class=\"fas fa-check feature-box-icon\"></i>
                                        <span>Salle climatisée</span>
                                    </div>
                                    <div class=\"feature-box\">
                                        <i class=\"fas fa-check feature-box-icon\"></i>
                                        <span>Parking privé</span>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"feature-box\">
                                        <i class=\"fas fa-check feature-box-icon\"></i>
                                        <span>Cuisine équipée</span>
                                    </div>
                                    <div class=\"feature-box\">
                                        <i class=\"fas fa-check feature-box-icon\"></i>
                                        <span>Accès handicapé</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery -->
                    <div class=\"card mb-30\">
                        <div class=\"card-body\">
                            <h3 class=\"section-title\">Galerie</h3>
                            <div class=\"row g-3\">
                                {% for i in 1..4 %}
                                <div class=\"col-6 col-md-3\">
                                    <img src=\"{{ asset('uploads/lieux/gallery-' ~ i ~ '.jpg') }}\" 
                                         class=\"img-fluid rounded gallery-thumbnail\" 
                                         alt=\"Gallery image {{ i }}\"
                                         onclick=\"openGalleryModal({{ i }})\">
                                </div>
                                {% endfor %}
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class=\"card mb-30\">
                        <div class=\"card-body\">
                            <h3 class=\"section-title\">Localisation</h3>
                            <div id=\"map\"></div>
                        </div>
                    </div>

                    <!-- Reviews -->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h3 class=\"section-title\">Avis</h3>
                            {% if avis|length > 0 %}
                                {% for avi in avis %}
                                    <div class=\"review-item\">
                                        <div class=\"d-flex justify-content-between\">
                                            <div>
                                                <h6 class=\"review-user\">{{ avi.userName }}</h6>
                                                <span class=\"review-date\">{{ avi.createdAt|date('d/m/Y H:i') }}</span>
                                            </div>
                                            <div class=\"star-rating\">
                                                {% for i in 1..5 %}
                                                    {% if i <= avi.rating %}
                                                        <i class=\"fas fa-star\"></i>
                                                    {% else %}
                                                        <i class=\"far fa-star\"></i>
                                                    {% endif %}
                                                {% endfor %}
                                            </div>
                                        </div>
                                        <p class=\"mt-2 mb-0\">{{ avi.comment }}</p>
                                    </div>
                                {% endfor %}
                            {% else %}
                                <div class=\"text-center py-4\">
                                    <i class=\"fas fa-comment-slash fs-3 mb-2 text-muted\"></i>
                                    <p class=\"mb-0\">Aucun avis pour ce lieu pour le moment.</p>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>

                <!-- Right Column: Booking, QR Code and Similar Lieux -->
                <div class=\"col-lg-4\">
                    <!-- Booking Card -->
                    <div class=\"booking-card mb-30\" id=\"bookingSection\">
                        <h3 class=\"section-title\">Réserver ce lieu</h3>
                        <form id=\"bookingForm\">
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Date</label>
                                <input type=\"date\" class=\"form-control\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Nombre de personnes</label>
                                <input type=\"number\" class=\"form-control\" min=\"1\" max=\"{{ lieu.capacity }}\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Type d'événement</label>
                                <select class=\"form-select\">
                                    <option>Mariage</option>
                                    <option>Anniversaire</option>
                                    <option>Conférence</option>
                                    <option>Autre</option>
                                </select>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Notes spéciales</label>
                                <textarea class=\"form-control\" rows=\"3\"></textarea>
                            </div>
                            <button type=\"submit\" class=\"th-btn w-100\">
                                <i class=\"fas fa-calendar-plus me-2\"></i> Réserver maintenant
                            </button>
                        </form>
                    </div>

                    <!-- QR Code Card -->
                    <div class=\"card mb-30\">
                        <div class=\"card-header bg-primary text-white\">
                            <h5 class=\"mb-0\"><i class=\"fas fa-qrcode me-2\"></i> QR Code</h5>
                        </div>
                        <div class=\"card-body text-center\">
                            <img src=\"{{ path('app_lieu_qr_code', {'id': lieu.id}) }}\" 
                                 alt=\"QR Code pour {{ lieu.name }}\" 
                                 class=\"img-fluid mb-3 qr-code-img\">
                            <p class=\"text-muted mb-3\">Scannez ce code pour accéder à cette page</p>
                            <a href=\"{{ path('app_lieu_qr_code', {'id': lieu.id}) }}\" 
                               class=\"btn btn-sm btn-primary\">
                                <i class=\"fas fa-download me-1\"></i> Télécharger
                            </a>
                        </div>
                    </div>

                    <!-- Similar Lieux -->
                    {% if similarLieux|length > 0 %}
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h3 class=\"section-title\">Lieux similaires</h3>
                                {% for similar in similarLieux %}
                                    <a href=\"{{ path('app_lieu_details', {'id': similar.id}) }}\" class=\"similar-lieu-item\">
                                        <img src=\"{{ asset('uploads/lieux/' ~ similar.imageUrl|default('default.jpg')) }}\" 
                                             class=\"similar-lieu-image\" 
                                             alt=\"{{ similar.name }}\">
                                        <div>
                                            <h6 class=\"mb-1\">{{ similar.name }}</h6>
                                            <p class=\"mb-0 text-primary\">{{ similar.price }} €</p>
                                        </div>
                                    </a>
                                {% endfor %}
                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Modal -->
    <div class=\"modal fade\" id=\"galleryModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body text-center\">
                    <img id=\"modalImage\" src=\"\" class=\"img-fluid\" alt=\"\">
                </div>
            </div>
        </div>
    </div>

    <!-- Review Modal -->
    <div class=\"modal fade\" id=\"reviewModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Ajouter un avis</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <form id=\"reviewForm\">
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Note</label>
                            <div class=\"star-rating\">
                                <i class=\"far fa-star rating-star\" data-value=\"1\"></i>
                                <i class=\"far fa-star rating-star\" data-value=\"2\"></i>
                                <i class=\"far fa-star rating-star\" data-value=\"3\"></i>
                                <i class=\"far fa-star rating-star\" data-value=\"4\"></i>
                                <i class=\"far fa-star rating-star\" data-value=\"5\"></i>
                                <input type=\"hidden\" name=\"rating\" id=\"ratingInput\" value=\"0\">
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Commentaire</label>
                            <textarea class=\"form-control\" rows=\"4\" placeholder=\"Décrivez votre expérience...\"></textarea>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"th-btn style2\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"button\" class=\"th-btn\" onclick=\"submitReview()\">Soumettre</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
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
                                    <li><a href=\"{{ path('app_lieu_index') }}\">Lieux</a></li>
                                    <li><a href=\"{{ path('app_reservation_index') }}\">Réservations</a></li>
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
                                <p class=\"md-20\">Abonnez-vous pour recevoir nos actualités et offres exclusives.</p>
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
        <div class=\"footer-shape\"><img src=\"{{ asset('Front/img/shape/footer_shape.png') }}\" alt=\"forme\"></div>
    </footer>

    <!-- Scroll To Top -->
    <div class=\"scroll-top\">
        <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
            <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\"></path>
        </svg>
    </div>

    <!-- All Js File -->
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

    <!-- Google Maps API -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap\" async defer></script>

    <script>
        // Initialize map
        function initMap() {
            // Replace with actual coordinates from your Lieu entity
            const location = { lat: 36.8065, lng: 10.1815 }; // Example: Tunis coordinates
            const map = new google.maps.Map(document.getElementById(\"map\"), {
                zoom: 15,
                center: location,
            });
            new google.maps.Marker({
                position: location,
                map: map,
                title: \"{{ lieu.name }}\"
            });
        }

        // Gallery modal
        function openGalleryModal(imageNumber) {
            const modalImage = document.getElementById('modalImage');
            modalImage.src = \"{{ asset('uploads/lieux/gallery-') }}\" + imageNumber + \".jpg\";
            const modal = new bootstrap.Modal(document.getElementById('galleryModal'));
            modal.show();
        }

        // Share lieu
        function shareLieu() {
            if (navigator.share) {
                navigator.share({
                    title: '{{ lieu.name }}',
                    text: 'Découvrez ce magnifique lieu pour vos événements',
                    url: window.location.href
                });
            } else {
                // Fallback for browsers that don't support Web Share API
                alert('Partagez ce lien : ' + window.location.href);
            }
        }

        // Toggle favorite
        function toggleFavorite(button) {
            const icon = button.querySelector('i');
            if (icon.classList.contains('fa-heart')) {
                icon.classList.remove('fa-heart');
                icon.classList.add('fa-heart');
                button.classList.remove('btn-label-danger');
                button.classList.add('btn-danger');
            } else {
                icon.classList.remove('fa-heart');
                icon.classList.add('fa-heart');
                button.classList.remove('btn-danger');
                button.classList.add('btn-label-danger');
            }
        }

        // Handle booking form submission
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Votre demande de réservation a été envoyée avec succès !');
        });

        // Rating stars interaction
        document.querySelectorAll('.rating-star').forEach(star => {
            star.addEventListener('click', function() {
                const value = this.getAttribute('data-value');
                document.getElementById('ratingInput').value = value;
                
                // Update stars display
                document.querySelectorAll('.rating-star').forEach(s => {
                    if (s.getAttribute('data-value') <= value) {
                        s.classList.add('fas');
                        s.classList.add('fa-star');
                        s.classList.remove('far');
                    } else {
                        s.classList.remove('fas');
                        s.classList.add('far');
                    }
                });
            });
        });

        // Submit review
        function submitReview() {
            const rating = document.getElementById('ratingInput').value;
            if (rating == 0) {
                alert('Veuillez donner une note');
                return;
            }
            
            alert('Merci pour votre avis !');
            const modal = bootstrap.Modal.getInstance(document.getElementById('reviewModal'));
            modal.hide();
        }
    </script>
</body>
</html>", "lieu/details.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\lieu\\details.html.twig");
    }
}
