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

/* user_reservation/index.html.twig */
class __TwigTemplate_ad145216561f220f0d12f47ee2a872df extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_reservation/index.html.twig"));

        // line 1
        yield "<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>GoldenTouch - Réservations par Utilisateur</title>
    <meta name=\"author\" content=\"GoldenTouch\">
    <meta name=\"description\" content=\"GoldenTouch - Gestion des réservations\">
    <meta name=\"keywords\" content=\"GoldenTouch, réservations, événements\">
    <meta name=\"robots\" content=\"INDEX,FOLLOW\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Favicons -->
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

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Radio+Canada:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/bootstrap.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/fontawesome.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/magnific-popup.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/slick.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/jquery.datetimepicker.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/style.css"), "html", null, true);
        yield "\">

    <!-- Custom CSS for this page -->
    <style>
        .event-badge {
            transition: all 0.3s ease;
        }
        .event-badge:hover {
            transform: scale(1.05);
        }
        .empty-state {
            padding: 3rem;
            text-align: center;
        }
        .empty-state-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #a1a1aa;
        }
        .card-header {
            background-color: #fff;
            border-bottom: 1px solid rgba(0,0,0,.125);
        }
        .alert {
            border-radius: 0.5rem;
        }
        .table-responsive {
            border-radius: 0.5rem;
            overflow: hidden;
        }
        .table {
            margin-bottom: 0;
        }
        .table th {
            background-color: #f8f9fa;
        }
        .badge {
            font-weight: 500;
        }
        .bg-label-primary {
            background-color: rgba(115,103,240,.16);
            color: #7367F0;
        }
        .bg-label-success {
            background-color: rgba(40,199,111,.16);
            color: #28C76F;
        }
        .bg-label-secondary {
            background-color: rgba(130,134,139,.16);
            color: #82868B;
        }
        .bg-label-warning {
            background-color: rgba(255,159,67,.16);
            color: #FF9F43;
        }


    
/* Nouveau style innovant pour le ComboBox */
.goldentouch-combo {
    position: relative;
}

.combo-wrapper {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
}

.goldentouch-select {
    height: 56px;
    padding: 12px 20px;
    font-size: 1.05rem;
    border: 2px solid rgba(115, 103, 240, 0.3);
    border-radius: 12px !important;
    background-color: white;
    appearance: none;
    transition: all 0.3s ease;
    cursor: pointer;
    position: relative;
    z-index: 1;
    flex: 1;
}

.goldentouch-select:focus {
    border-color: #7367F0;
    box-shadow: 0 0 0 0.25rem rgba(115, 103, 240, 0.25);
    outline: none;
}

.combo-decoration {
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    display: flex;
    align-items: center;
    pointer-events: none;
    z-index: 2;
}

.combo-arrow {
    width: 48px;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    transition: all 0.3s ease;
}

.goldentouch-select:hover + .combo-decoration .combo-arrow {
    background-color: #5d52d1 !important;
}

/* Animation pour le survol */
@keyframes pulse-gold {
    0% { box-shadow: 0 0 0 0 rgba(115, 103, 240, 0.4); }
    70% { box-shadow: 0 0 0 10px rgba(115, 103, 240, 0); }
    100% { box-shadow: 0 0 0 0 rgba(115, 103, 240, 0); }
}

.goldentouch-select:focus {
    animation: pulse-gold 1.5s infinite;
}

/* Effet de flottement pour le label */
.form-label {
    position: relative;
    display: inline-block;
}

.form-label:after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 50%;
    transform: translateX(-50%);
    width: 40px;
    height: 3px;
    background: linear-gradient(90deg, #7367F0, #5d52d1);
    border-radius: 3px;
}

/* Style pour le bouton refresh */
#refresh-users {
    transition: all 0.3s ease;
    border-color: #ddd;
}

#refresh-users:hover {
    background-color: #7367F0;
    color: white;
    animation: spin 0.7s ease;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}


    
    </style>
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
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo44.png"), "html", null, true);
        yield "\" alt=\"GoldenTouch\" style=\"height: 100px;\"></a>
            </div>
            <div class=\"th-mobile-menu\">
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
            </div>
        </div>
    </div>

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
                                    <option selected=\"\">English</option>
                                    <option>Français</option>
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
        // line 326
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
                                <a href=\"#\" class=\"icon-btn sideMenuToggler\"><i class=\"far fa-bars\"></i></a>
                                <a href=\"#\" class=\"th-btn\">Déconnexion<i class=\"fa-regular fa-arrow-right ms-2\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"logo-shape\"><img src=\"";
        // line 385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo-shape.svg"), "html", null, true);
        yield "\" alt=\"\"></div>
    </header>

    <div class=\"space\" style=\"--top: 100px\"></div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h4 class=\"fw-bold py-3 mb-4\">
                    <span class=\"text-muted fw-light\">Réservation /</span> Par Personnel
                </h4>

                <!-- Sélecteur d'utilisateur -->
<!-- Sélecteur d'utilisateur -->
<div class=\"card mb-4 border-0\" style=\"background: linear-gradient(135deg, #f8f9fa 0%, #fff8e6 100%);\">
    <div class=\"card-body p-4\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <!-- Nouveau design innovant pour le ComboBox -->
                <div class=\"goldentouch-combo\">
                    <label for=\"user-select\" class=\"form-label fw-bold mb-3 d-block text-center\" style=\"color: #6c757d;\">
                        <i class=\"fas fa-user-search me-2\" style=\"color: #7367F0;\"></i>
                        SÉLECTIONNEZ UN UTILISATEUR
                    </label>
                    
                    <div class=\"combo-wrapper position-relative\">
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-transparent\" style=\"border-right: none;\">
                                <i class=\"fas fa-user-circle\" style=\"color: #7367F0;\"></i>
                            </span>
                            <select id=\"user-select\" class=\"form-select goldentouch-select shadow-sm\">
                                <option value=\"\">-- Choisir un utilisateur --</option>
                                ";
        // line 417
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 417, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 418
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 418), "html", null, true);
            yield "\" ";
            if (((isset($context["selectedUserId"]) || array_key_exists("selectedUserId", $context) ? $context["selectedUserId"] : (function () { throw new RuntimeError('Variable "selectedUserId" does not exist.', 418, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 418))) {
                yield "selected";
            }
            yield ">
                                        ";
            // line 419
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 419), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 419), "html", null, true);
            yield " 
                                        <small class=\"text-muted\">(ID: ";
            // line 420
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 420), "html", null, true);
            yield ")</small>
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 423
        yield "                            </select>
                            <button class=\"btn btn-outline-secondary\" type=\"button\" id=\"refresh-users\" style=\"border-left: none;\">
                                <i class=\"fas fa-sync-alt\"></i>
                            </button>
                        </div>
                        <div class=\"combo-decoration\">
                            <div class=\"combo-arrow\" style=\"background-color: #7367F0;\">
                                <i class=\"fas fa-chevron-down\"></i>
                            </div>
                        </div>
                    </div>
                    <small class=\"text-muted mt-2 d-block text-center\">Sélectionnez un utilisateur pour afficher ses réservations</small>
                </div>
            </div>
        </div>
    </div>
</div>

                ";
        // line 441
        if ((isset($context["selectedUserId"]) || array_key_exists("selectedUserId", $context) ? $context["selectedUserId"] : (function () { throw new RuntimeError('Variable "selectedUserId" does not exist.', 441, $this->source); })())) {
            // line 442
            yield "                    ";
            if ((isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 442, $this->source); })())) {
                // line 443
                yield "                        <div class=\"alert alert-success mb-4\">
                            <div class=\"d-flex align-items-center\">
                                <i class=\"fas fa-user-check me-2\"></i>
                                <div>
                                    <h5 class=\"alert-heading mb-1\">Personnel correspondant</h5>
                                    <p class=\"mb-0\">
                                        <strong>";
                // line 449
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 449, $this->source); })()), "nomP", [], "any", false, false, false, 449), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 449, $this->source); })()), "prenomP", [], "any", false, false, false, 449), "html", null, true);
                yield "</strong> - 
                                        <span class=\"badge bg-primary\">";
                // line 450
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 450, $this->source); })()), "serviceP", [], "any", false, false, false, 450), "html", null, true);
                yield "</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Liste des événements -->
                        <div class=\"card\">
                            <div class=\"card-header d-flex justify-content-between align-items-center\">
                                <h5 class=\"mb-0\">Événements réservés</h5>
                                <span class=\"badge bg-primary rounded-pill\">";
                // line 460
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 460, $this->source); })())), "html", null, true);
                yield " événement(s)</span>
                            </div>
                            <div class=\"card-body\">
                                ";
                // line 463
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 463, $this->source); })())) > 0)) {
                    // line 464
                    yield "                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover\">
                                            <thead>
                                                <tr>
                                                    <th>Événement</th>
                                                    <th>Date</th>
                                                    <th>Statut</th>
                                                </tr>
                                            </thead>
                                            <tbody class=\"table-border-bottom-0\">
                                                ";
                    // line 474
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 474, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                        // line 475
                        yield "                                                    <tr>
                                                        <td>
                                                            <strong>";
                        // line 477
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 477), "html", null, true);
                        yield "</strong>
                                                            <p class=\"mb-0 text-muted small\">";
                        // line 478
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", true, true, false, 478)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 478), "Aucune description")) : ("Aucune description")), 0, 50), "html", null, true);
                        yield "...</p>
                                                        </td>
                                                        <td>
                                                            <span class=\"badge bg-label-primary event-badge\">
                                                                <i class=\"fas fa-calendar-alt me-1\"></i>
                                                                ";
                        // line 483
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 483), "d/m/Y"), "html", null, true);
                        yield "
                                                            </span>
                                                        </td>
                                                        <td>
                                                            ";
                        // line 487
                        if (($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 487), "Y-m-d") > $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"))) {
                            // line 488
                            yield "                                                                <span class=\"badge bg-label-success\">À venir</span>
                                                            ";
                        } else {
                            // line 490
                            yield "                                                                <span class=\"badge bg-label-secondary\">Terminé</span>
                                                            ";
                        }
                        // line 492
                        yield "                                                        </td>
                                                    </tr>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 495
                    yield "                                            </tbody>
                                        </table>
                                    </div>
                                ";
                } else {
                    // line 499
                    yield "                                    <div class=\"empty-state\">
                                        <div class=\"empty-state-icon\">
                                            <i class=\"fas fa-calendar-times\"></i>
                                        </div>
                                        <h4 class=\"empty-state-title\">Aucun événement réservé</h4>
                                        <p class=\"empty-state-subtitle text-muted\">
                                            Cet utilisateur n'a réservé aucun événement pour le moment.
                                        </p>
                                    </div>
                                ";
                }
                // line 509
                yield "                            </div>
                        </div>
                    ";
            } else {
                // line 512
                yield "                        <div class=\"alert alert-warning\">
                            <div class=\"d-flex align-items-center\">
                                <i class=\"fas fa-user-times me-2\"></i>
                                <div>
                                    <h5 class=\"alert-heading mb-1\">Aucun personnel correspondant</h5>
                                    <p class=\"mb-0\">Aucun personnel ne correspond à cet utilisateur.</p>
                                </div>
                            </div>
                        </div>
                    ";
            }
            // line 522
            yield "                ";
        } else {
            // line 523
            yield "                    <div class=\"alert alert-info\">
                        <div class=\"d-flex align-items-center\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            <div>
                                <h5 class=\"alert-heading mb-1\">Sélection requise</h5>
                                <p class=\"mb-0\">Veuillez sélectionner un utilisateur pour afficher ses réservations.</p>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 533
        yield "            </div>
        </div>
    </div>

    <div class=\"space\" style=\"--top: 100px\"></div>

    <footer class=\"footer-wrapper footer-layout7\" data-bg-src=\"assets/img/bg/footer_bg_1.jpg\">
        <div class=\"widget-area\">
            <div class=\"container\">
                <div class=\"row justify-content-between\">
                    <div class=\"col-md-6 col-xl-auto\">
                        <div class=\"widget footer-widget\">
                            <div class=\"th-widget-about\">
                                <div class=\"about-logo\">
                                    <a href=\"index.html\"><img src=\"";
        // line 547
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
                                <p class=\"footer-info\"><i class=\"fas fa-phone\"></i><a class=\"text-inherit\"
                                        href=\"tel:+33123456789\">+33 1 23 45 67 89</a></p>
                                <h4 class=\"footer-info-title\">Email</h4>
                                <p class=\"footer-info\"><i class=\"fas fa-envelope\"></i><a class=\"text-inherit\"
                                        href=\"mailto:contact@goldentouch.com\">contact";
        // line 587
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
        <div class=\"footer-shape\"><img src=\"";
        // line 618
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/shape/footer_shape.png"), "html", null, true);
        yield "\" alt=\"forme\">
        </div>
    </footer>

    <div class=\"scroll-top\">
        <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
            <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\"
                style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\">
            </path>
        </svg>
    </div>

    <!-- Scripts -->
    <script src=\"";
        // line 631
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/vendor/jquery-3.6.0.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 632
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/slick.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 633
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 634
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 635
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.counterup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 636
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/imagesloaded.pkgd.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 637
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/isotope.pkgd.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 638
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/nice-select.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 639
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.datetimepicker.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 640
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/wow.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 641
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/main.js"), "html", null, true);
        yield "\"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Gérer le changement d'utilisateur
            document.getElementById('user-select').addEventListener('change', function() {
                const userId = this.value;
                if (userId) {
                    window.location.href = window.location.pathname + '?user=' + userId;
                } else {
                    window.location.href = window.location.pathname;
                }
            });
        });
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animation et fonctionnalité du bouton refresh
        document.getElementById('refresh-users').addEventListener('click', function() {
            this.classList.add('spin-animation');
            setTimeout(() => {
                this.classList.remove('spin-animation');
                // Ici vous pourriez ajouter une requête AJAX pour rafraîchir la liste
                location.reload(); // Solution simple en attendant
            }, 700);
        });
        
        // Amélioration de l'expérience utilisateur
        const userSelect = document.getElementById('user-select');
        userSelect.addEventListener('focus', function() {
            this.style.borderColor = '#7367F0';
            this.parentElement.style.boxShadow = '0 0 0 0.25rem rgba(115, 103, 240, 0.25)';
        });
        
        userSelect.addEventListener('blur', function() {
            this.style.borderColor = '#ddd';
            this.parentElement.style.boxShadow = 'none';
        });
        
        // Gestion du changement d'utilisateur
        userSelect.addEventListener('change', function() {
            const userId = this.value;
            if (userId) {
                window.location.href = window.location.pathname + '?user=' + userId;
            } else {
                window.location.href = window.location.pathname;
            }
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
        return "user_reservation/index.html.twig";
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
        return array (  882 => 641,  878 => 640,  874 => 639,  870 => 638,  866 => 637,  862 => 636,  858 => 635,  854 => 634,  850 => 633,  846 => 632,  842 => 631,  826 => 618,  792 => 587,  749 => 547,  733 => 533,  721 => 523,  718 => 522,  706 => 512,  701 => 509,  689 => 499,  683 => 495,  675 => 492,  671 => 490,  667 => 488,  665 => 487,  658 => 483,  650 => 478,  646 => 477,  642 => 475,  638 => 474,  626 => 464,  624 => 463,  618 => 460,  605 => 450,  599 => 449,  591 => 443,  588 => 442,  586 => 441,  566 => 423,  557 => 420,  551 => 419,  542 => 418,  538 => 417,  503 => 385,  441 => 326,  351 => 239,  153 => 44,  149 => 43,  145 => 42,  141 => 41,  137 => 40,  133 => 39,  121 => 30,  116 => 28,  112 => 27,  108 => 26,  104 => 25,  100 => 24,  96 => 23,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  68 => 16,  64 => 15,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>GoldenTouch - Réservations par Utilisateur</title>
    <meta name=\"author\" content=\"GoldenTouch\">
    <meta name=\"description\" content=\"GoldenTouch - Gestion des réservations\">
    <meta name=\"keywords\" content=\"GoldenTouch, réservations, événements\">
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
    <meta name=\"theme-color\" content=\"#ffffff\">

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Radio+Canada:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/fontawesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/magnific-popup.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/slick.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/jquery.datetimepicker.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/style.css') }}\">

    <!-- Custom CSS for this page -->
    <style>
        .event-badge {
            transition: all 0.3s ease;
        }
        .event-badge:hover {
            transform: scale(1.05);
        }
        .empty-state {
            padding: 3rem;
            text-align: center;
        }
        .empty-state-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #a1a1aa;
        }
        .card-header {
            background-color: #fff;
            border-bottom: 1px solid rgba(0,0,0,.125);
        }
        .alert {
            border-radius: 0.5rem;
        }
        .table-responsive {
            border-radius: 0.5rem;
            overflow: hidden;
        }
        .table {
            margin-bottom: 0;
        }
        .table th {
            background-color: #f8f9fa;
        }
        .badge {
            font-weight: 500;
        }
        .bg-label-primary {
            background-color: rgba(115,103,240,.16);
            color: #7367F0;
        }
        .bg-label-success {
            background-color: rgba(40,199,111,.16);
            color: #28C76F;
        }
        .bg-label-secondary {
            background-color: rgba(130,134,139,.16);
            color: #82868B;
        }
        .bg-label-warning {
            background-color: rgba(255,159,67,.16);
            color: #FF9F43;
        }


    
/* Nouveau style innovant pour le ComboBox */
.goldentouch-combo {
    position: relative;
}

.combo-wrapper {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
}

.goldentouch-select {
    height: 56px;
    padding: 12px 20px;
    font-size: 1.05rem;
    border: 2px solid rgba(115, 103, 240, 0.3);
    border-radius: 12px !important;
    background-color: white;
    appearance: none;
    transition: all 0.3s ease;
    cursor: pointer;
    position: relative;
    z-index: 1;
    flex: 1;
}

.goldentouch-select:focus {
    border-color: #7367F0;
    box-shadow: 0 0 0 0.25rem rgba(115, 103, 240, 0.25);
    outline: none;
}

.combo-decoration {
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    display: flex;
    align-items: center;
    pointer-events: none;
    z-index: 2;
}

.combo-arrow {
    width: 48px;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    transition: all 0.3s ease;
}

.goldentouch-select:hover + .combo-decoration .combo-arrow {
    background-color: #5d52d1 !important;
}

/* Animation pour le survol */
@keyframes pulse-gold {
    0% { box-shadow: 0 0 0 0 rgba(115, 103, 240, 0.4); }
    70% { box-shadow: 0 0 0 10px rgba(115, 103, 240, 0); }
    100% { box-shadow: 0 0 0 0 rgba(115, 103, 240, 0); }
}

.goldentouch-select:focus {
    animation: pulse-gold 1.5s infinite;
}

/* Effet de flottement pour le label */
.form-label {
    position: relative;
    display: inline-block;
}

.form-label:after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 50%;
    transform: translateX(-50%);
    width: 40px;
    height: 3px;
    background: linear-gradient(90deg, #7367F0, #5d52d1);
    border-radius: 3px;
}

/* Style pour le bouton refresh */
#refresh-users {
    transition: all 0.3s ease;
    border-color: #ddd;
}

#refresh-users:hover {
    background-color: #7367F0;
    color: white;
    animation: spin 0.7s ease;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}


    
    </style>
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
                <a href=\"index.html\"><img src=\"{{ asset('Front/img/logo44.png') }}\" alt=\"GoldenTouch\" style=\"height: 100px;\"></a>
            </div>
            <div class=\"th-mobile-menu\">
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
            </div>
        </div>
    </div>

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
                                    <option selected=\"\">English</option>
                                    <option>Français</option>
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
                                <a href=\"#\" class=\"icon-btn sideMenuToggler\"><i class=\"far fa-bars\"></i></a>
                                <a href=\"#\" class=\"th-btn\">Déconnexion<i class=\"fa-regular fa-arrow-right ms-2\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"logo-shape\"><img src=\"{{ asset('Front/img/logo-shape.svg') }}\" alt=\"\"></div>
    </header>

    <div class=\"space\" style=\"--top: 100px\"></div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h4 class=\"fw-bold py-3 mb-4\">
                    <span class=\"text-muted fw-light\">Réservation /</span> Par Personnel
                </h4>

                <!-- Sélecteur d'utilisateur -->
<!-- Sélecteur d'utilisateur -->
<div class=\"card mb-4 border-0\" style=\"background: linear-gradient(135deg, #f8f9fa 0%, #fff8e6 100%);\">
    <div class=\"card-body p-4\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <!-- Nouveau design innovant pour le ComboBox -->
                <div class=\"goldentouch-combo\">
                    <label for=\"user-select\" class=\"form-label fw-bold mb-3 d-block text-center\" style=\"color: #6c757d;\">
                        <i class=\"fas fa-user-search me-2\" style=\"color: #7367F0;\"></i>
                        SÉLECTIONNEZ UN UTILISATEUR
                    </label>
                    
                    <div class=\"combo-wrapper position-relative\">
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-transparent\" style=\"border-right: none;\">
                                <i class=\"fas fa-user-circle\" style=\"color: #7367F0;\"></i>
                            </span>
                            <select id=\"user-select\" class=\"form-select goldentouch-select shadow-sm\">
                                <option value=\"\">-- Choisir un utilisateur --</option>
                                {% for user in users %}
                                    <option value=\"{{ user.id }}\" {% if selectedUserId == user.id %}selected{% endif %}>
                                        {{ user.nom }} {{ user.prenom }} 
                                        <small class=\"text-muted\">(ID: {{ user.id }})</small>
                                    </option>
                                {% endfor %}
                            </select>
                            <button class=\"btn btn-outline-secondary\" type=\"button\" id=\"refresh-users\" style=\"border-left: none;\">
                                <i class=\"fas fa-sync-alt\"></i>
                            </button>
                        </div>
                        <div class=\"combo-decoration\">
                            <div class=\"combo-arrow\" style=\"background-color: #7367F0;\">
                                <i class=\"fas fa-chevron-down\"></i>
                            </div>
                        </div>
                    </div>
                    <small class=\"text-muted mt-2 d-block text-center\">Sélectionnez un utilisateur pour afficher ses réservations</small>
                </div>
            </div>
        </div>
    </div>
</div>

                {% if selectedUserId %}
                    {% if personnel %}
                        <div class=\"alert alert-success mb-4\">
                            <div class=\"d-flex align-items-center\">
                                <i class=\"fas fa-user-check me-2\"></i>
                                <div>
                                    <h5 class=\"alert-heading mb-1\">Personnel correspondant</h5>
                                    <p class=\"mb-0\">
                                        <strong>{{ personnel.nomP }} {{ personnel.prenomP }}</strong> - 
                                        <span class=\"badge bg-primary\">{{ personnel.serviceP }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Liste des événements -->
                        <div class=\"card\">
                            <div class=\"card-header d-flex justify-content-between align-items-center\">
                                <h5 class=\"mb-0\">Événements réservés</h5>
                                <span class=\"badge bg-primary rounded-pill\">{{ events|length }} événement(s)</span>
                            </div>
                            <div class=\"card-body\">
                                {% if events|length > 0 %}
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover\">
                                            <thead>
                                                <tr>
                                                    <th>Événement</th>
                                                    <th>Date</th>
                                                    <th>Statut</th>
                                                </tr>
                                            </thead>
                                            <tbody class=\"table-border-bottom-0\">
                                                {% for event in events %}
                                                    <tr>
                                                        <td>
                                                            <strong>{{ event.nom }}</strong>
                                                            <p class=\"mb-0 text-muted small\">{{ event.description|default('Aucune description')|slice(0, 50) }}...</p>
                                                        </td>
                                                        <td>
                                                            <span class=\"badge bg-label-primary event-badge\">
                                                                <i class=\"fas fa-calendar-alt me-1\"></i>
                                                                {{ event.date|date('d/m/Y') }}
                                                            </span>
                                                        </td>
                                                        <td>
                                                            {% if event.date|date('Y-m-d') > \"now\"|date('Y-m-d') %}
                                                                <span class=\"badge bg-label-success\">À venir</span>
                                                            {% else %}
                                                                <span class=\"badge bg-label-secondary\">Terminé</span>
                                                            {% endif %}
                                                        </td>
                                                    </tr>
                                                {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                {% else %}
                                    <div class=\"empty-state\">
                                        <div class=\"empty-state-icon\">
                                            <i class=\"fas fa-calendar-times\"></i>
                                        </div>
                                        <h4 class=\"empty-state-title\">Aucun événement réservé</h4>
                                        <p class=\"empty-state-subtitle text-muted\">
                                            Cet utilisateur n'a réservé aucun événement pour le moment.
                                        </p>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    {% else %}
                        <div class=\"alert alert-warning\">
                            <div class=\"d-flex align-items-center\">
                                <i class=\"fas fa-user-times me-2\"></i>
                                <div>
                                    <h5 class=\"alert-heading mb-1\">Aucun personnel correspondant</h5>
                                    <p class=\"mb-0\">Aucun personnel ne correspond à cet utilisateur.</p>
                                </div>
                            </div>
                        </div>
                    {% endif %}
                {% else %}
                    <div class=\"alert alert-info\">
                        <div class=\"d-flex align-items-center\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            <div>
                                <h5 class=\"alert-heading mb-1\">Sélection requise</h5>
                                <p class=\"mb-0\">Veuillez sélectionner un utilisateur pour afficher ses réservations.</p>
                            </div>
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>

    <div class=\"space\" style=\"--top: 100px\"></div>

    <footer class=\"footer-wrapper footer-layout7\" data-bg-src=\"assets/img/bg/footer_bg_1.jpg\">
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
                                <p class=\"footer-info\"><i class=\"fas fa-phone\"></i><a class=\"text-inherit\"
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
        <div class=\"footer-shape\"><img src=\"{{ asset('Front/img/shape/footer_shape.png') }}\" alt=\"forme\">
        </div>
    </footer>

    <div class=\"scroll-top\">
        <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
            <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\"
                style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\">
            </path>
        </svg>
    </div>

    <!-- Scripts -->
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Gérer le changement d'utilisateur
            document.getElementById('user-select').addEventListener('change', function() {
                const userId = this.value;
                if (userId) {
                    window.location.href = window.location.pathname + '?user=' + userId;
                } else {
                    window.location.href = window.location.pathname;
                }
            });
        });
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animation et fonctionnalité du bouton refresh
        document.getElementById('refresh-users').addEventListener('click', function() {
            this.classList.add('spin-animation');
            setTimeout(() => {
                this.classList.remove('spin-animation');
                // Ici vous pourriez ajouter une requête AJAX pour rafraîchir la liste
                location.reload(); // Solution simple en attendant
            }, 700);
        });
        
        // Amélioration de l'expérience utilisateur
        const userSelect = document.getElementById('user-select');
        userSelect.addEventListener('focus', function() {
            this.style.borderColor = '#7367F0';
            this.parentElement.style.boxShadow = '0 0 0 0.25rem rgba(115, 103, 240, 0.25)';
        });
        
        userSelect.addEventListener('blur', function() {
            this.style.borderColor = '#ddd';
            this.parentElement.style.boxShadow = 'none';
        });
        
        // Gestion du changement d'utilisateur
        userSelect.addEventListener('change', function() {
            const userId = this.value;
            if (userId) {
                window.location.href = window.location.pathname + '?user=' + userId;
            } else {
                window.location.href = window.location.pathname;
            }
        });
    });
</script>
</body>
</html>", "user_reservation/index.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\user_reservation\\index.html.twig");
    }
}
