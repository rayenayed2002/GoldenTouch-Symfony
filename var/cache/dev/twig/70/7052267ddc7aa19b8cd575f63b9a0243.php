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

/* lieu/shop-details.html.twig */
class __TwigTemplate_6a3982463b62f32deb9de40a5656f176 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieu/shop-details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieu/shop-details.html.twig"));

        // line 1
        yield "<!doctype html>
<html class=\"no-js\" lang=\"fr\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>GoldenTouch - Détails du Lieu</title>
    <meta name=\"author\" content=\"GoldenTouch\">
    <meta name=\"description\" content=\"GoldenTouch - Détails des lieux pour événements\">
    <meta name=\"keywords\" content=\"GoldenTouch, lieux, événements, locations\">
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

    <!-- All CSS Files -->
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
        .lieu-gallery {
            margin-bottom: 30px;
        }
        .lieu-main-img {
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 15px;
        }
        .lieu-thumbnails {
            display: flex;
            gap: 10px;
        }
        .lieu-thumbnail {
            width: 80px;
            height: 80px;
            border-radius: 5px;
            overflow: hidden;
            cursor: pointer;
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }
        .lieu-thumbnail:hover, .lieu-thumbnail.active {
            border-color: var(--theme-color);
        }
        .lieu-details-box {
            background: #f9f9f9;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 30px;
        }
        .lieu-feature-list {
            list-style: none;
            padding: 0;
        }
        .lieu-feature-list li {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .lieu-feature-list i {
            margin-right: 10px;
            color: var(--theme-color);
        }
        .lieu-map {
            height: 300px;
            border-radius: 10px;
            overflow: hidden;
            margin-top: 30px;
        }
        .review-form .star-rating {
            font-size: 24px;
            margin-bottom: 15px;
        }
        .review-form .star-rating a {
            color: #ddd;
            text-decoration: none;
            margin-right: 5px;
        }
        .review-form .star-rating a:hover,
        .review-form .star-rating a.active {
            color: #ffc107;
        }
    </style>
</head>

<body>
    <!--[if lte IE 9]>
        <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Preloader -->
    <div class=\"preloader\">
        <button class=\"th-btn style3 preloaderCls\">Cancel Preloader</button>
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
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo.svg"), "html", null, true);
        yield "\" alt=\"GoldenTouch\"></a>
            </div>
            <div class=\"th-mobile-menu\">
                <ul>
                    <li><a href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_index");
        yield "\">Accueil</a></li>
                    <li><a href=\"";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index");
        yield "\">Packs</a></li>
                    <li><a href=\"";
        // line 153
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_index");
        yield "\">Lieux</a></li>
                    <li><a href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        yield "\">Événements</a></li>
                    <li><a href=\"contact.html\">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Sidemenu -->
    <div class=\"sidemenu-wrapper d-none d-lg-block\">
        <div class=\"sidemenu-content\">
            <button class=\"closeButton sideMenuCls\"><i class=\"far fa-times\"></i></button>
            <div class=\"widget footer-widget\">
                <h3 class=\"widget_title\">À propos</h3>
                <div class=\"th-widget-about\">
                    <p class=\"footer-text\">GoldenTouch offre les meilleurs lieux pour vos événements spéciaux.</p>
                    <h4 class=\"footer-info-title\">HORAIRES D'OUVERTURE</h4>
                    <p class=\"footer-text\">Lun-Sam: 09.00 à 18.30</p>
                    <a href=\"contact.html\" class=\"th-btn style3\">Contactez-nous</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
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
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo44.png"), "html", null, true);
        yield "\" alt=\"GoldenTouch\" style=\"height: 130px;\">
                            </div>
                        </div>
                        <div class=\"col-auto me-xl-auto\">
                            <nav class=\"main-menu d-none d-lg-block\">
                                <ul>
                                    <li><a href=\"";
        // line 222
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_index");
        yield "\">Accueil</a></li>
                                    <li><a href=\"";
        // line 223
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index");
        yield "\">Packs</a></li>
                                    <li><a href=\"";
        // line 224
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_index");
        yield "\">Lieux</a></li>
                                    <li><a href=\"";
        // line 225
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        yield "\">Événements</a></li>
                                    <li><a href=\"contact.html\">Contact</a></li>
                                </ul>
                            </nav>
                            <button class=\"th-menu-toggle d-inline-block d-lg-none\"><i class=\"far fa-bars\"></i></button>
                        </div>
                        <div class=\"col-auto d-none d-xl-block\">
                            <div class=\"header-button\">
                                <button type=\"button\" class=\"icon-btn searchBoxToggler\"><i class=\"far fa-search\"></i></button>
                                <a href=\"#\" class=\"icon-btn sideMenuToggler\"><i class=\"far fa-bars\"></i></a>
                                <a href=\"";
        // line 235
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_index");
        yield "\" class=\"th-btn\">RÉSERVER <i class=\"fa-regular fa-arrow-right ms-2\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"logo-shape\"><img src=\"";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo-shape.svg"), "html", null, true);
        yield "\" alt=\"\"></div>
    </header>

    <!-- Breadcrumb -->
    <div class=\"breadcumb-wrapper\" data-bg-src=\"";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/breadcumb/breadcumb-bg.jpg"), "html", null, true);
        yield "\">
        <div class=\"container z-index-common\">
            <h1 class=\"breadcumb-title\">";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 248, $this->source); })()), "name", [], "any", false, false, false, 248), "html", null, true);
        yield "</h1>
            <ul class=\"breadcumb-menu\">
                <li><a href=\"";
        // line 250
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_index");
        yield "\">Accueil</a></li>
                <li><a href=\"";
        // line 251
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_index");
        yield "\">Lieux</a></li>
                <li>";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 252, $this->source); })()), "name", [], "any", false, false, false, 252), "html", null, true);
        yield "</li>
            </ul>
        </div>
    </div>

    <!-- Lieu Details -->
    <section class=\"th-product-wrapper product-details space-top space-extra-bottom\">
        <div class=\"container\">
            <div class=\"row gx-60\">
                <div class=\"col-lg-6\">
                    <div class=\"lieu-gallery\">
                        <div class=\"lieu-main-img\">
                            <img src=\"";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/lieux/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 264, $this->source); })()), "imageUrl", [], "any", false, false, false, 264))), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 264, $this->source); })()), "name", [], "any", false, false, false, 264), "html", null, true);
        yield "\" class=\"w-100\">
                        </div>
                        <div class=\"lieu-thumbnails\">
                            <div class=\"lieu-thumbnail active\">
                                <img src=\"";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/lieux/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 268, $this->source); })()), "imageUrl", [], "any", false, false, false, 268))), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 268, $this->source); })()), "name", [], "any", false, false, false, 268), "html", null, true);
        yield "\">
                            </div>
                            <!-- Additional thumbnails would go here -->
                        </div>
                    </div>

                    <div class=\"lieu-details-box\">
                        <h3 class=\"box-title\">Détails du lieu</h3>
                        <ul class=\"lieu-feature-list\">
                            <li><i class=\"fas fa-map-marker-alt\"></i> <strong>Localisation:</strong> ";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 277, $this->source); })()), "location", [], "any", false, false, false, 277), "html", null, true);
        yield "</li>
                            <li><i class=\"fas fa-city\"></i> <strong>Ville:</strong> ";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 278, $this->source); })()), "ville", [], "any", false, false, false, 278), "html", null, true);
        yield "</li>
                            <li><i class=\"fas fa-users\"></i> <strong>Capacité:</strong> ";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 279, $this->source); })()), "capacity", [], "any", false, false, false, 279), "html", null, true);
        yield " personnes</li>
                            <li><i class=\"fas fa-tag\"></i> <strong>Catégorie:</strong> ";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 280, $this->source); })()), "category", [], "any", false, false, false, 280), "html", null, true);
        yield "</li>
                            <li><i class=\"fas fa-euro-sign\"></i> <strong>Prix:</strong> ";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 281, $this->source); })()), "price", [], "any", false, false, false, 281), "html", null, true);
        yield " €</li>
                        </ul>
                    </div>

                    <div class=\"lieu-map\">
                        <!-- Google Map would be embedded here -->
                        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.991440608176!2d2.292292615509614!3d48.85837007928746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1623251234567!5m2!1sfr!2sfr\" 
                                width=\"100%\" height=\"100%\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
                    </div>
                </div>

                <div class=\"col-lg-6 align-self-center\">
                    <div class=\"product-about\">
                        <h2 class=\"product-title\">";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 294, $this->source); })()), "name", [], "any", false, false, false, 294), "html", null, true);
        yield "</h2>
                        <div class=\"product-rating\">
                            <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 4.5 out of 5\">
                                <span style=\"width:90%\">Rated <strong class=\"rating\">4.5</strong> out of 5</span>
                            </div>
                            <a href=\"#reviews\" class=\"woocommerce-review-link\">(12 avis)</a>
                        </div>
                        <p class=\"text\">";
        // line 301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 301, $this->source); })()), "description", [], "any", false, false, false, 301), "html", null, true);
        yield "</p>

                        <div class=\"actions\">
                            <button class=\"th-btn\">Réserver ce lieu</button>
                            <button class=\"th-btn style2\"><i class=\"far fa-heart\"></i> Ajouter aux favoris</button>
                        </div>

                        <div class=\"checklist style3\">
                            <ul>
                                <li>Accès handicapé</li>
                                <li>Parking disponible</li>
                                <li>Service traiteur possible</li>
                                <li>Équipement audiovisuel fourni</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Tabs -->
                    <ul class=\"nav product-tab-style1\" id=\"lieuTab\" role=\"tablist\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <a class=\"nav-link th-btn active\" id=\"details-tab\" data-bs-toggle=\"tab\" href=\"#details\" role=\"tab\" aria-controls=\"details\" aria-selected=\"true\">Détails</a>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <a class=\"nav-link th-btn\" id=\"reviews-tab\" data-bs-toggle=\"tab\" href=\"#reviews\" role=\"tab\" aria-controls=\"reviews\" aria-selected=\"false\">Avis</a>
                        </li>
                    </ul>

                    <div class=\"tab-content\" id=\"lieuTabContent\">
                        <div class=\"tab-pane fade show active\" id=\"details\" role=\"tabpanel\" aria-labelledby=\"details-tab\">
                            <h4 class=\"tab-title\">Description complète</h4>
                            <p>";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 331, $this->source); })()), "description", [], "any", false, false, false, 331), "html", null, true);
        yield "</p>
                            
                            <h4 class=\"tab-title mt-4\">Équipements inclus</h4>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <ul class=\"list-style1\">
                                        <li>Tables et chaises</li>
                                        <li>Scène</li>
                                        <li>Système son</li>
                                    </ul>
                                </div>
                                <div class=\"col-md-6\">
                                    <ul class=\"list-style1\">
                                        <li>Projecteur</li>
                                        <li>Éclairage</li>
                                        <li>Vestiaire</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <h4 class=\"tab-title mt-4\">Règles du lieu</h4>
                            <ul class=\"list-style1\">
                                <li>Interdiction de fumer</li>
                                <li>Ouvert jusqu'à minuit</li>
                                <li>Caution de 500€ requise</li>
                            </ul>
                        </div>

                        <div class=\"tab-pane fade\" id=\"reviews\" role=\"tabpanel\" aria-labelledby=\"reviews-tab\">
                            <div class=\"woocommerce-Reviews\">
                                <div class=\"th-comments-wrap\">
                                    <ul class=\"comment-list\">
                                        <!-- Sample reviews -->
                                        <li class=\"review th-comment-item\">
                                            <div class=\"th-post-comment\">
                                                <div class=\"comment-avater\">
                                                    <img src=\"";
        // line 367
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog/comment-author-1.jpg"), "html", null, true);
        yield "\" alt=\"Avatar\">
                                                </div>
                                                <div class=\"comment-content\">
                                                    <h4 class=\"name\">Jean Dupont</h4>
                                                    <span class=\"commented-on\"><i class=\"fal fa-calendar-alt\"></i>15 Mars 2023</span>
                                                    <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5 out of 5\">
                                                        <span style=\"width:100%\">Rated <strong class=\"rating\">5</strong> out of 5</span>
                                                    </div>
                                                    <p class=\"text\">Lieu exceptionnel pour notre mariage. Tout était parfait !</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=\"review th-comment-item\">
                                            <div class=\"th-post-comment\">
                                                <div class=\"comment-avater\">
                                                    <img src=\"";
        // line 382
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog/comment-author-2.jpg"), "html", null, true);
        yield "\" alt=\"Avatar\">
                                                </div>
                                                <div class=\"comment-content\">
                                                    <h4 class=\"name\">Marie Lambert</h4>
                                                    <span class=\"commented-on\"><i class=\"fal fa-calendar-alt\"></i>2 Février 2023</span>
                                                    <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 4 out of 5\">
                                                        <span style=\"width:80%\">Rated <strong class=\"rating\">4</strong> out of 5</span>
                                                    </div>
                                                    <p class=\"text\">Très bel espace, juste un peu difficile d'accès en transports.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class=\"review-form\">
                                    <div class=\"form-title\">
                                        <h3 class=\"blog-inner-title\">Laisser un avis</h3>
                                        <p>Votre adresse email ne sera pas publiée. Les champs requis sont indiqués *</p>
                                    </div>
                                    <form>
                                        <div class=\"row\">
                                            <div class=\"col-md-6 form-group\">
                                                <input type=\"text\" class=\"form-control\" placeholder=\"Votre nom *\" required>
                                            </div>
                                            <div class=\"col-md-6 form-group\">
                                                <input type=\"email\" class=\"form-control\" placeholder=\"Votre email *\" required>
                                            </div>
                                            <div class=\"col-12 form-group\">
                                                <div class=\"star-rating\">
                                                    <span>Votre note :</span>
                                                    <a href=\"#\" class=\"star-1\">★</a>
                                                    <a href=\"#\" class=\"star-2\">★</a>
                                                    <a href=\"#\" class=\"star-3\">★</a>
                                                    <a href=\"#\" class=\"star-4\">★</a>
                                                    <a href=\"#\" class=\"star-5\">★</a>
                                                    <input type=\"hidden\" name=\"rating\" id=\"rating-value\" value=\"5\">
                                                </div>
                                            </div>
                                            <div class=\"col-12 form-group\">
                                                <textarea class=\"form-control\" placeholder=\"Votre avis *\" rows=\"5\" required></textarea>
                                            </div>
                                            <div class=\"col-12 form-group mb-0\">
                                                <button type=\"submit\" class=\"th-btn\">Envoyer l'avis</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Lieux -->
            <div class=\"space-extra-top mb-30\">
                <div class=\"title-area text-center\">
                    <h2 class=\"sec-title\">Lieux similaires</h2>
                </div>
                <div class=\"row th-carousel\" data-slide-show=\"4\" data-lg-slide-show=\"3\" data-md-slide-show=\"2\" data-sm-slide-show=\"2\" data-xs-slide-show=\"1\" data-arrows=\"true\">
                    <!-- Sample related lieux -->
                    <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                <img src=\"";
        // line 446
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/lieu/lieu1.jpg"), "html", null, true);
        yield "\" alt=\"Salle des fêtes\">
                                <div class=\"actions\">
                                    <a href=\"lieu-details.html\" class=\"icon-btn\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"#\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <h3 class=\"product-title\"><a href=\"lieu-details.html\">Salle des fêtes</a></h3>
                                <div class=\"product-meta\">
                                    <span class=\"price\">1200 €</span>
                                    <span class=\"capacity\"><i class=\"fas fa-users\"></i> 150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                <img src=\"";
        // line 464
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/lieu/lieu2.jpg"), "html", null, true);
        yield "\" alt=\"Espace événementiel\">
                                <div class=\"actions\">
                                    <a href=\"lieu-details.html\" class=\"icon-btn\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"#\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <h3 class=\"product-title\"><a href=\"lieu-details.html\">Espace événementiel</a></h3>
                                <div class=\"product-meta\">
                                    <span class=\"price\">1800 €</span>
                                    <span class=\"capacity\"><i class=\"fas fa-users\"></i> 250</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                <img src=\"";
        // line 482
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/lieu/lieu3.jpg"), "html", null, true);
        yield "\" alt=\"Jardin privé\">
                                <div class=\"actions\">
                                    <a href=\"lieu-details.html\" class=\"icon-btn\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"#\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <h3 class=\"product-title\"><a href=\"lieu-details.html\">Jardin privé</a></h3>
                                <div class=\"product-meta\">
                                    <span class=\"price\">1500 €</span>
                                    <span class=\"capacity\"><i class=\"fas fa-users\"></i> 200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                <img src=\"";
        // line 500
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/lieu/lieu4.jpg"), "html", null, true);
        yield "\" alt=\"Salle de conférence\">
                                <div class=\"actions\">
                                    <a href=\"lieu-details.html\" class=\"icon-btn\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"#\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <h3 class=\"product-title\"><a href=\"lieu-details.html\">Salle de conférence</a></h3>
                                <div class=\"product-meta\">
                                    <span class=\"price\">900 €</span>
                                    <span class=\"capacity\"><i class=\"fas fa-users\"></i> 80</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class=\"footer-wrapper footer-layout7\" data-bg-src=\"";
        // line 521
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
        // line 529
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo-white3.svg"), "html", null, true);
        yield "\" alt=\"GoldenTouch\"></a>
                                </div>
                                <p class=\"about-text\">GoldenTouch révolutionne la planification d'événements avec des solutions tout-en-un.</p>
                                <div class=\"working-time\">
                                    <span class=\"title\">HORAIRES D'OUVERTURE</span>
                                    <p class=\"desc\">Lun-Sam : 09h00 à 18h30</p>
                                </div>
                                <div class=\"th-social footer-social\">
                                    <a href=\"https://www.facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a href=\"https://www.twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
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
                                    <li><a href=\"services.html\">Services</a></li>
                                    <li><a href=\"team.html\">Équipe</a></li>
                                    <li><a href=\"contact.html\">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-xl-auto\">
                        <div class=\"widget footer-widget\">
                            <h3 class=\"widget_title\">Contact</h3>
                            <div class=\"th-widget-about\">
                                <h4 class=\"footer-info-title\">Téléphone</h4>
                                <p class=\"footer-info\"><i class=\"fa-sharp fa-solid fa-phone\"></i><a class=\"text-inherit\" href=\"tel:+33123456789\">+33 1 23 45 67 89</a></p>
                                <h4 class=\"footer-info-title\">Email</h4>
                                <p class=\"footer-info\"><i class=\"fas fa-envelope\"></i><a class=\"text-inherit\" href=\"mailto:contact@goldentouch.com\">contact@goldentouch.com</a></p>
                                <h4 class=\"footer-info-title\">Adresse</h4>
                                <p class=\"footer-info\"><i class=\"fas fa-map-marker-alt\"></i>123 Rue des Événements, Paris</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-xl-3\">
                        <div class=\"widget footer-widget\">
                            <h4 class=\"widget_title\">Newsletter</h4>
                            <div class=\"newsletter-widget\">
                                <p class=\"md-20\">Abonnez-vous pour recevoir nos actualités et offres.</p>
                                <form class=\"newsletter-form\">
                                    <input class=\"form-control\" type=\"email\" placeholder=\"Votre email\" required>
                                    <button type=\"submit\" class=\"th-btn style3\">S'abonner <i class=\"fa-regular fa-arrow-right\"></i></button>
                                </form>
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
    </footer>

    <!-- Scroll To Top -->
    <div class=\"scroll-top\">
        <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
            <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\"></path>
        </svg>
    </div>

    <!-- All JS Files -->
    <script src=\"";
        // line 600
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/vendor/jquery-3.6.0.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 601
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/slick.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 602
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 603
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 604
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.counterup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 605
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/wow.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 606
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/main.js"), "html", null, true);
        yield "\"></script>

    <script>
        // Star rating interaction
        \$(document).ready(function() {
            \$('.star-rating a').click(function(e) {
                e.preventDefault();
                const starValue = \$(this).index() + 1;
                \$('.star-rating a').removeClass('active');
                \$('.star-rating a:lt(' + starValue + ')').addClass('active');
                \$('#rating-value').val(starValue);
            });
            
            // Image gallery thumbnail click
            \$('.lieu-thumbnail').click(function() {
                \$('.lieu-thumbnail').removeClass('active');
                \$(this).addClass('active');
                const mainImgSrc = \$(this).find('img').attr('src');
                \$('.lieu-main-img img').attr('src', mainImgSrc);
            });
        });
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
        return "lieu/shop-details.html.twig";
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
        return array (  845 => 606,  841 => 605,  837 => 604,  833 => 603,  829 => 602,  825 => 601,  821 => 600,  747 => 529,  736 => 521,  712 => 500,  691 => 482,  670 => 464,  649 => 446,  582 => 382,  564 => 367,  525 => 331,  492 => 301,  482 => 294,  466 => 281,  462 => 280,  458 => 279,  454 => 278,  450 => 277,  436 => 268,  427 => 264,  412 => 252,  408 => 251,  404 => 250,  399 => 248,  394 => 246,  387 => 242,  377 => 235,  364 => 225,  360 => 224,  356 => 223,  352 => 222,  343 => 216,  278 => 154,  274 => 153,  270 => 152,  266 => 151,  259 => 147,  155 => 46,  151 => 45,  147 => 44,  143 => 43,  139 => 42,  135 => 41,  123 => 32,  118 => 30,  114 => 29,  110 => 28,  106 => 27,  102 => 26,  98 => 25,  94 => 24,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"fr\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>GoldenTouch - Détails du Lieu</title>
    <meta name=\"author\" content=\"GoldenTouch\">
    <meta name=\"description\" content=\"GoldenTouch - Détails des lieux pour événements\">
    <meta name=\"keywords\" content=\"GoldenTouch, lieux, événements, locations\">
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

    <!-- All CSS Files -->
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/fontawesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/magnific-popup.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/slick.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/jquery.datetimepicker.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/style.css') }}\">

    <style>
        .lieu-gallery {
            margin-bottom: 30px;
        }
        .lieu-main-img {
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 15px;
        }
        .lieu-thumbnails {
            display: flex;
            gap: 10px;
        }
        .lieu-thumbnail {
            width: 80px;
            height: 80px;
            border-radius: 5px;
            overflow: hidden;
            cursor: pointer;
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }
        .lieu-thumbnail:hover, .lieu-thumbnail.active {
            border-color: var(--theme-color);
        }
        .lieu-details-box {
            background: #f9f9f9;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 30px;
        }
        .lieu-feature-list {
            list-style: none;
            padding: 0;
        }
        .lieu-feature-list li {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .lieu-feature-list i {
            margin-right: 10px;
            color: var(--theme-color);
        }
        .lieu-map {
            height: 300px;
            border-radius: 10px;
            overflow: hidden;
            margin-top: 30px;
        }
        .review-form .star-rating {
            font-size: 24px;
            margin-bottom: 15px;
        }
        .review-form .star-rating a {
            color: #ddd;
            text-decoration: none;
            margin-right: 5px;
        }
        .review-form .star-rating a:hover,
        .review-form .star-rating a.active {
            color: #ffc107;
        }
    </style>
</head>

<body>
    <!--[if lte IE 9]>
        <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Preloader -->
    <div class=\"preloader\">
        <button class=\"th-btn style3 preloaderCls\">Cancel Preloader</button>
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
                <a href=\"index.html\"><img src=\"{{ asset('Front/img/logo.svg') }}\" alt=\"GoldenTouch\"></a>
            </div>
            <div class=\"th-mobile-menu\">
                <ul>
                    <li><a href=\"{{ path('front_index') }}\">Accueil</a></li>
                    <li><a href=\"{{ path('app_pack_index') }}\">Packs</a></li>
                    <li><a href=\"{{ path('app_lieu_index') }}\">Lieux</a></li>
                    <li><a href=\"{{ path('app_event_index') }}\">Événements</a></li>
                    <li><a href=\"contact.html\">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Sidemenu -->
    <div class=\"sidemenu-wrapper d-none d-lg-block\">
        <div class=\"sidemenu-content\">
            <button class=\"closeButton sideMenuCls\"><i class=\"far fa-times\"></i></button>
            <div class=\"widget footer-widget\">
                <h3 class=\"widget_title\">À propos</h3>
                <div class=\"th-widget-about\">
                    <p class=\"footer-text\">GoldenTouch offre les meilleurs lieux pour vos événements spéciaux.</p>
                    <h4 class=\"footer-info-title\">HORAIRES D'OUVERTURE</h4>
                    <p class=\"footer-text\">Lun-Sam: 09.00 à 18.30</p>
                    <a href=\"contact.html\" class=\"th-btn style3\">Contactez-nous</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
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
                                    <li><a href=\"{{ path('app_pack_index') }}\">Packs</a></li>
                                    <li><a href=\"{{ path('app_lieu_index') }}\">Lieux</a></li>
                                    <li><a href=\"{{ path('app_event_index') }}\">Événements</a></li>
                                    <li><a href=\"contact.html\">Contact</a></li>
                                </ul>
                            </nav>
                            <button class=\"th-menu-toggle d-inline-block d-lg-none\"><i class=\"far fa-bars\"></i></button>
                        </div>
                        <div class=\"col-auto d-none d-xl-block\">
                            <div class=\"header-button\">
                                <button type=\"button\" class=\"icon-btn searchBoxToggler\"><i class=\"far fa-search\"></i></button>
                                <a href=\"#\" class=\"icon-btn sideMenuToggler\"><i class=\"far fa-bars\"></i></a>
                                <a href=\"{{ path('app_lieu_index') }}\" class=\"th-btn\">RÉSERVER <i class=\"fa-regular fa-arrow-right ms-2\"></i></a>
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
                <div class=\"col-lg-6\">
                    <div class=\"lieu-gallery\">
                        <div class=\"lieu-main-img\">
                            <img src=\"{{ asset('uploads/lieux/' ~ lieu.imageUrl) }}\" alt=\"{{ lieu.name }}\" class=\"w-100\">
                        </div>
                        <div class=\"lieu-thumbnails\">
                            <div class=\"lieu-thumbnail active\">
                                <img src=\"{{ asset('uploads/lieux/' ~ lieu.imageUrl) }}\" alt=\"{{ lieu.name }}\">
                            </div>
                            <!-- Additional thumbnails would go here -->
                        </div>
                    </div>

                    <div class=\"lieu-details-box\">
                        <h3 class=\"box-title\">Détails du lieu</h3>
                        <ul class=\"lieu-feature-list\">
                            <li><i class=\"fas fa-map-marker-alt\"></i> <strong>Localisation:</strong> {{ lieu.location }}</li>
                            <li><i class=\"fas fa-city\"></i> <strong>Ville:</strong> {{ lieu.ville }}</li>
                            <li><i class=\"fas fa-users\"></i> <strong>Capacité:</strong> {{ lieu.capacity }} personnes</li>
                            <li><i class=\"fas fa-tag\"></i> <strong>Catégorie:</strong> {{ lieu.category }}</li>
                            <li><i class=\"fas fa-euro-sign\"></i> <strong>Prix:</strong> {{ lieu.price }} €</li>
                        </ul>
                    </div>

                    <div class=\"lieu-map\">
                        <!-- Google Map would be embedded here -->
                        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.991440608176!2d2.292292615509614!3d48.85837007928746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1623251234567!5m2!1sfr!2sfr\" 
                                width=\"100%\" height=\"100%\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
                    </div>
                </div>

                <div class=\"col-lg-6 align-self-center\">
                    <div class=\"product-about\">
                        <h2 class=\"product-title\">{{ lieu.name }}</h2>
                        <div class=\"product-rating\">
                            <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 4.5 out of 5\">
                                <span style=\"width:90%\">Rated <strong class=\"rating\">4.5</strong> out of 5</span>
                            </div>
                            <a href=\"#reviews\" class=\"woocommerce-review-link\">(12 avis)</a>
                        </div>
                        <p class=\"text\">{{ lieu.description }}</p>

                        <div class=\"actions\">
                            <button class=\"th-btn\">Réserver ce lieu</button>
                            <button class=\"th-btn style2\"><i class=\"far fa-heart\"></i> Ajouter aux favoris</button>
                        </div>

                        <div class=\"checklist style3\">
                            <ul>
                                <li>Accès handicapé</li>
                                <li>Parking disponible</li>
                                <li>Service traiteur possible</li>
                                <li>Équipement audiovisuel fourni</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Tabs -->
                    <ul class=\"nav product-tab-style1\" id=\"lieuTab\" role=\"tablist\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <a class=\"nav-link th-btn active\" id=\"details-tab\" data-bs-toggle=\"tab\" href=\"#details\" role=\"tab\" aria-controls=\"details\" aria-selected=\"true\">Détails</a>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <a class=\"nav-link th-btn\" id=\"reviews-tab\" data-bs-toggle=\"tab\" href=\"#reviews\" role=\"tab\" aria-controls=\"reviews\" aria-selected=\"false\">Avis</a>
                        </li>
                    </ul>

                    <div class=\"tab-content\" id=\"lieuTabContent\">
                        <div class=\"tab-pane fade show active\" id=\"details\" role=\"tabpanel\" aria-labelledby=\"details-tab\">
                            <h4 class=\"tab-title\">Description complète</h4>
                            <p>{{ lieu.description }}</p>
                            
                            <h4 class=\"tab-title mt-4\">Équipements inclus</h4>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <ul class=\"list-style1\">
                                        <li>Tables et chaises</li>
                                        <li>Scène</li>
                                        <li>Système son</li>
                                    </ul>
                                </div>
                                <div class=\"col-md-6\">
                                    <ul class=\"list-style1\">
                                        <li>Projecteur</li>
                                        <li>Éclairage</li>
                                        <li>Vestiaire</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <h4 class=\"tab-title mt-4\">Règles du lieu</h4>
                            <ul class=\"list-style1\">
                                <li>Interdiction de fumer</li>
                                <li>Ouvert jusqu'à minuit</li>
                                <li>Caution de 500€ requise</li>
                            </ul>
                        </div>

                        <div class=\"tab-pane fade\" id=\"reviews\" role=\"tabpanel\" aria-labelledby=\"reviews-tab\">
                            <div class=\"woocommerce-Reviews\">
                                <div class=\"th-comments-wrap\">
                                    <ul class=\"comment-list\">
                                        <!-- Sample reviews -->
                                        <li class=\"review th-comment-item\">
                                            <div class=\"th-post-comment\">
                                                <div class=\"comment-avater\">
                                                    <img src=\"{{ asset('Front/img/blog/comment-author-1.jpg') }}\" alt=\"Avatar\">
                                                </div>
                                                <div class=\"comment-content\">
                                                    <h4 class=\"name\">Jean Dupont</h4>
                                                    <span class=\"commented-on\"><i class=\"fal fa-calendar-alt\"></i>15 Mars 2023</span>
                                                    <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5 out of 5\">
                                                        <span style=\"width:100%\">Rated <strong class=\"rating\">5</strong> out of 5</span>
                                                    </div>
                                                    <p class=\"text\">Lieu exceptionnel pour notre mariage. Tout était parfait !</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=\"review th-comment-item\">
                                            <div class=\"th-post-comment\">
                                                <div class=\"comment-avater\">
                                                    <img src=\"{{ asset('Front/img/blog/comment-author-2.jpg') }}\" alt=\"Avatar\">
                                                </div>
                                                <div class=\"comment-content\">
                                                    <h4 class=\"name\">Marie Lambert</h4>
                                                    <span class=\"commented-on\"><i class=\"fal fa-calendar-alt\"></i>2 Février 2023</span>
                                                    <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 4 out of 5\">
                                                        <span style=\"width:80%\">Rated <strong class=\"rating\">4</strong> out of 5</span>
                                                    </div>
                                                    <p class=\"text\">Très bel espace, juste un peu difficile d'accès en transports.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class=\"review-form\">
                                    <div class=\"form-title\">
                                        <h3 class=\"blog-inner-title\">Laisser un avis</h3>
                                        <p>Votre adresse email ne sera pas publiée. Les champs requis sont indiqués *</p>
                                    </div>
                                    <form>
                                        <div class=\"row\">
                                            <div class=\"col-md-6 form-group\">
                                                <input type=\"text\" class=\"form-control\" placeholder=\"Votre nom *\" required>
                                            </div>
                                            <div class=\"col-md-6 form-group\">
                                                <input type=\"email\" class=\"form-control\" placeholder=\"Votre email *\" required>
                                            </div>
                                            <div class=\"col-12 form-group\">
                                                <div class=\"star-rating\">
                                                    <span>Votre note :</span>
                                                    <a href=\"#\" class=\"star-1\">★</a>
                                                    <a href=\"#\" class=\"star-2\">★</a>
                                                    <a href=\"#\" class=\"star-3\">★</a>
                                                    <a href=\"#\" class=\"star-4\">★</a>
                                                    <a href=\"#\" class=\"star-5\">★</a>
                                                    <input type=\"hidden\" name=\"rating\" id=\"rating-value\" value=\"5\">
                                                </div>
                                            </div>
                                            <div class=\"col-12 form-group\">
                                                <textarea class=\"form-control\" placeholder=\"Votre avis *\" rows=\"5\" required></textarea>
                                            </div>
                                            <div class=\"col-12 form-group mb-0\">
                                                <button type=\"submit\" class=\"th-btn\">Envoyer l'avis</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Lieux -->
            <div class=\"space-extra-top mb-30\">
                <div class=\"title-area text-center\">
                    <h2 class=\"sec-title\">Lieux similaires</h2>
                </div>
                <div class=\"row th-carousel\" data-slide-show=\"4\" data-lg-slide-show=\"3\" data-md-slide-show=\"2\" data-sm-slide-show=\"2\" data-xs-slide-show=\"1\" data-arrows=\"true\">
                    <!-- Sample related lieux -->
                    <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                <img src=\"{{ asset('Front/img/lieu/lieu1.jpg') }}\" alt=\"Salle des fêtes\">
                                <div class=\"actions\">
                                    <a href=\"lieu-details.html\" class=\"icon-btn\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"#\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <h3 class=\"product-title\"><a href=\"lieu-details.html\">Salle des fêtes</a></h3>
                                <div class=\"product-meta\">
                                    <span class=\"price\">1200 €</span>
                                    <span class=\"capacity\"><i class=\"fas fa-users\"></i> 150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                <img src=\"{{ asset('Front/img/lieu/lieu2.jpg') }}\" alt=\"Espace événementiel\">
                                <div class=\"actions\">
                                    <a href=\"lieu-details.html\" class=\"icon-btn\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"#\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <h3 class=\"product-title\"><a href=\"lieu-details.html\">Espace événementiel</a></h3>
                                <div class=\"product-meta\">
                                    <span class=\"price\">1800 €</span>
                                    <span class=\"capacity\"><i class=\"fas fa-users\"></i> 250</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                <img src=\"{{ asset('Front/img/lieu/lieu3.jpg') }}\" alt=\"Jardin privé\">
                                <div class=\"actions\">
                                    <a href=\"lieu-details.html\" class=\"icon-btn\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"#\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <h3 class=\"product-title\"><a href=\"lieu-details.html\">Jardin privé</a></h3>
                                <div class=\"product-meta\">
                                    <span class=\"price\">1500 €</span>
                                    <span class=\"capacity\"><i class=\"fas fa-users\"></i> 200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                <img src=\"{{ asset('Front/img/lieu/lieu4.jpg') }}\" alt=\"Salle de conférence\">
                                <div class=\"actions\">
                                    <a href=\"lieu-details.html\" class=\"icon-btn\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"#\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <h3 class=\"product-title\"><a href=\"lieu-details.html\">Salle de conférence</a></h3>
                                <div class=\"product-meta\">
                                    <span class=\"price\">900 €</span>
                                    <span class=\"capacity\"><i class=\"fas fa-users\"></i> 80</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                                <p class=\"about-text\">GoldenTouch révolutionne la planification d'événements avec des solutions tout-en-un.</p>
                                <div class=\"working-time\">
                                    <span class=\"title\">HORAIRES D'OUVERTURE</span>
                                    <p class=\"desc\">Lun-Sam : 09h00 à 18h30</p>
                                </div>
                                <div class=\"th-social footer-social\">
                                    <a href=\"https://www.facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a href=\"https://www.twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
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
                                    <li><a href=\"services.html\">Services</a></li>
                                    <li><a href=\"team.html\">Équipe</a></li>
                                    <li><a href=\"contact.html\">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-xl-auto\">
                        <div class=\"widget footer-widget\">
                            <h3 class=\"widget_title\">Contact</h3>
                            <div class=\"th-widget-about\">
                                <h4 class=\"footer-info-title\">Téléphone</h4>
                                <p class=\"footer-info\"><i class=\"fa-sharp fa-solid fa-phone\"></i><a class=\"text-inherit\" href=\"tel:+33123456789\">+33 1 23 45 67 89</a></p>
                                <h4 class=\"footer-info-title\">Email</h4>
                                <p class=\"footer-info\"><i class=\"fas fa-envelope\"></i><a class=\"text-inherit\" href=\"mailto:contact@goldentouch.com\">contact@goldentouch.com</a></p>
                                <h4 class=\"footer-info-title\">Adresse</h4>
                                <p class=\"footer-info\"><i class=\"fas fa-map-marker-alt\"></i>123 Rue des Événements, Paris</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-xl-3\">
                        <div class=\"widget footer-widget\">
                            <h4 class=\"widget_title\">Newsletter</h4>
                            <div class=\"newsletter-widget\">
                                <p class=\"md-20\">Abonnez-vous pour recevoir nos actualités et offres.</p>
                                <form class=\"newsletter-form\">
                                    <input class=\"form-control\" type=\"email\" placeholder=\"Votre email\" required>
                                    <button type=\"submit\" class=\"th-btn style3\">S'abonner <i class=\"fa-regular fa-arrow-right\"></i></button>
                                </form>
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
    </footer>

    <!-- Scroll To Top -->
    <div class=\"scroll-top\">
        <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
            <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\"></path>
        </svg>
    </div>

    <!-- All JS Files -->
    <script src=\"{{ asset('Front/js/vendor/jquery-3.6.0.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/slick.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/jquery.magnific-popup.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/jquery.counterup.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/wow.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/main.js') }}\"></script>

    <script>
        // Star rating interaction
        \$(document).ready(function() {
            \$('.star-rating a').click(function(e) {
                e.preventDefault();
                const starValue = \$(this).index() + 1;
                \$('.star-rating a').removeClass('active');
                \$('.star-rating a:lt(' + starValue + ')').addClass('active');
                \$('#rating-value').val(starValue);
            });
            
            // Image gallery thumbnail click
            \$('.lieu-thumbnail').click(function() {
                \$('.lieu-thumbnail').removeClass('active');
                \$(this).addClass('active');
                const mainImgSrc = \$(this).find('img').attr('src');
                \$('.lieu-main-img img').attr('src', mainImgSrc);
            });
        });
    </script>
</body>
</html>", "lieu/shop-details.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\lieu\\shop-details.html.twig");
    }
}
