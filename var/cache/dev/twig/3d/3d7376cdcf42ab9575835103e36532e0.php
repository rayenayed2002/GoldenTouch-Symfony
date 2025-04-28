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

/* admin/notifications/customize_pack.html.twig */
class __TwigTemplate_742ffdb8fbf3b13b764cce85f58b8c43 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/notifications/customize_pack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/notifications/customize_pack.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html
  lang=\"en\"
  class=\"light-style layout-navbar-fixed layout-menu-fixed\"
  dir=\"ltr\"
  data-theme=\"theme-default\"
  data-assets-path=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        yield "\"
  data-template=\"vertical-menu-template\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>Customize Pack - Admin Dashboard</title>
    <meta name=\"description\" content=\"\" />

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/favicon.ico"), "html", null, true);
        yield "\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\" />

    <!-- Icons -->
    <link rel=\"stylesheet\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fonts/fontawesome.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fonts/tabler-icons.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fonts/flag-icons.css"), "html", null, true);
        yield "\" />

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/css/rtl/core.css"), "html", null, true);
        yield "\" class=\"template-customizer-core-css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/css/rtl/theme-default.css"), "html", null, true);
        yield "\" class=\"template-customizer-theme-css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/demo.css"), "html", null, true);
        yield "\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/node-waves/node-waves.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/typeahead-js/typeahead.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/apex-charts/apex-charts.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/swiper/swiper.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/datatables-bs5/datatables.bootstrap5.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/flatpickr/flatpickr.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/select2/select2.css"), "html", null, true);
        yield "\" />
    
    <!-- Page CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/css/pages/cards-advance.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/glassmorphism.css"), "html", null, true);
        yield "\">

    <style>
        .glassmorphism-ui {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            transition: all 0.3s ease;
        }

        .glass-panel {
            background: rgba(255, 255, 255, 0.85);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .glass-panel:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 35px rgba(0, 0, 0, 0.15);
        }

        .form-control, .form-select {
            backdrop-filter: blur(4px);
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.18);
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            box-shadow: 0 0 0 0.25rem rgba(115, 103, 240, 0.15);
            border-color: #7367f0;
            background: rgba(255, 255, 255, 0.95);
        }

        .btn {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .btn::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            background-image: radial-gradient(circle, #fff 10%, transparent 10.01%);
            transform: scale(10, 10);
            opacity: 0;
            transition: transform .5s, opacity 1s;
        }

        .btn:active::after {
            transform: scale(0, 0);
            opacity: .3;
            transition: 0s;
        }

        .table {
            border-collapse: separate;
            border-spacing: 0 8px;
        }

        .table tr {
            transition: transform 0.2s ease;
        }

        .table tr:hover {
            transform: scale(1.01);
        }

        @keyframes shimmer {
            0% { background-position: -1000px 0; }
            100% { background-position: 1000px 0; }
        }

        .loading {
            animation: shimmer 2s infinite linear;
            background: linear-gradient(to right, #f6f7f8 8%, #edeef1 18%, #f6f7f8 33%);
            background-size: 1000px 100%;
        }

        .scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            z-index: 1000;
            background: linear-gradient(to right, #7367f0, #9754cb);
            transform-origin: 0 50%;
            transition: transform 0.2s ease;
        }

        @media (max-width: 768px) {
            .glass-panel {
                margin: 10px;
                padding: 15px;
            }
            
            .row.g-3 {
                margin: 0 5px;
            }
            
            .btn {
                width: 100%;
                margin: 5px 0;
            }
        }
    </style>

    <!-- Helpers -->
    <script src=\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/template-customizer.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/config.js"), "html", null, true);
        yield "\"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class=\"layout-wrapper layout-content-navbar\">
        <div class=\"layout-container\">
            <!-- Temporary Menu Placeholder -->
            <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">
                <div class=\"app-brand demo\">
                    <a href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\" class=\"app-brand-link\">
                        <span class=\"app-brand-text demo menu-text fw-bold\">Golden Touch</span>
                    </a>
                </div>
                <div class=\"menu-inner-shadow\"></div>
                <ul class=\"menu-inner py-1\">
                    <!-- Dashboard -->
                    <li class=\"menu-item\">
                        <a href=\"";
        // line 184
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\" class=\"menu-link\">
                            <i class=\"menu-icon tf-icons ti ti-smart-home\"></i>
                            <div>Dashboard</div>
                        </a>
                    </li>
                </ul>
            </aside>

            <!-- Layout page -->
            <div class=\"layout-page\">
                <!-- Temporary Navbar Placeholder -->
                <nav class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\">
                    <div class=\"navbar-nav-right d-flex align-items-center\">
                        <div class=\"navbar-nav align-items-center\">
                            <div class=\"nav-item navbar-search-wrapper mb-0\">
                                <span class=\"d-none d-md-inline-block\">Golden Touch Admin</span>
                            </div>
                        </div>
                    </div>
                </nav>

                <!-- Content wrapper -->
                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y\">
                        <div class=\"scroll-progress\" id=\"scrollProgress\"></div>

                        <!-- Client Info Card -->
                        <div class=\"card mb-4 glassmorphism-ui\" data-aos=\"fade-up\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <h5 class=\"mb-3\">Client Information</h5>
                                        <p><strong>Name:</strong> ";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 217, $this->source); })()), "nom", [], "any", false, false, false, 217), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 217, $this->source); })()), "prenom", [], "any", false, false, false, 217), "html", null, true);
        yield "</p>
                                        <p><strong>Event Date:</strong> ";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["eventDate"]) || array_key_exists("eventDate", $context) ? $context["eventDate"] : (function () { throw new RuntimeError('Variable "eventDate" does not exist.', 218, $this->source); })()), "Y-m-d"), "html", null, true);
        yield "</p>
                                        <p><strong>Status:</strong> <span class=\"badge bg-";
        // line 219
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["demandePack"]) || array_key_exists("demandePack", $context) ? $context["demandePack"] : (function () { throw new RuntimeError('Variable "demandePack" does not exist.', 219, $this->source); })()), "statut", [], "any", false, false, false, 219) == "NON_LU")) ? ("warning") : ("info"));
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["demandePack"]) || array_key_exists("demandePack", $context) ? $context["demandePack"] : (function () { throw new RuntimeError('Variable "demandePack" does not exist.', 219, $this->source); })()), "statut", [], "any", false, false, false, 219), "html", null, true);
        yield "</span></p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h5 class=\"mb-3\">Original Pack Details</h5>
                                        <p><strong>Name:</strong> ";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 223, $this->source); })()), "nom", [], "any", false, false, false, 223), "html", null, true);
        yield "</p>
                                        <p><strong>Base Price:</strong> \$";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 224, $this->source); })()), "prix", [], "any", false, false, false, 224), "html", null, true);
        yield "</p>
                                        <p><strong>Category:</strong> ";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 225, $this->source); })()), "categorie", [], "any", false, false, false, 225), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pack Details Section -->
                        <div class=\"card mb-4 glass-panel\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                            <div class=\"card-header\">
                                <h5 class=\"card-title mb-0 d-flex align-items-center\">
                                    <i class=\"ti ti-package me-2\"></i>
                                    Détails du Pack
                                </h5>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"row g-3\">
                                    <!-- Pack Name -->
                                    <div class=\"col-md-6\">
                                        <div class=\"form-floating mb-3\">
                                            <input type=\"text\" class=\"form-control\" id=\"packName\" name=\"packName\" 
                                                value=\"";
        // line 245
        yield (((isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 245, $this->source); })())) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 245, $this->source); })()), "nom", [], "any", false, false, false, 245), "html", null, true)) : (""));
        yield "\" placeholder=\"Nom du Pack\" required>
                                            <label for=\"packName\">Nom du Pack</label>
                                        </div>
                                    </div>

                                    <!-- Pack Price -->
                                    <div class=\"col-md-6\">
                                        <label class=\"form-label\">Prix (€)</label>
                                        <div class=\"input-group\">
                                            <span class=\"input-group-text\">€</span>
                                            <input type=\"number\" step=\"0.01\" class=\"form-control\" id=\"packPrice\" name=\"packPrice\"
                                                value=\"";
        // line 256
        yield (((isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 256, $this->source); })())) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 256, $this->source); })()), "prix", [], "any", false, false, false, 256), "html", null, true)) : (""));
        yield "\" required>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class=\"col-12\">
                                        <div class=\"form-floating mb-3\">
                                            <textarea class=\"form-control\" id=\"packDescription\" name=\"packDescription\" 
                                                style=\"height: 100px\" required>";
        // line 264
        yield (((isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 264, $this->source); })())) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 264, $this->source); })()), "description", [], "any", false, false, false, 264), "html", null, true)) : (""));
        yield "</textarea>
                                            <label for=\"packDescription\">Description du Pack</label>
                                        </div>
                                    </div>

                                    <!-- Capacity & Category -->
                                    <div class=\"col-md-6\">
                                        <label class=\"form-label\">Capacité</label>
                                        <input type=\"number\" class=\"form-control\" id=\"packCapacity\" name=\"packCapacity\"
                                            value=\"";
        // line 273
        yield (((isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 273, $this->source); })())) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 273, $this->source); })()), "capacite", [], "any", false, false, false, 273), "html", null, true)) : (""));
        yield "\" required>
                                    </div>

                                    <div class=\"col-md-6\">
                                        <label class=\"form-label\">Catégorie</label>
                                        <select class=\"form-select select2\" id=\"packCategory\" name=\"packCategory\" required>
                                            <option value=\"\">Sélectionnez une catégorie</option>
                                            <option value=\"Mariage\" ";
        // line 280
        yield ((((isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 280, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 280, $this->source); })()), "categorie", [], "any", false, false, false, 280) == "Mariage"))) ? ("selected") : (""));
        yield ">Mariage</option>
                                            <option value=\"Anniversaire\" ";
        // line 281
        yield ((((isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 281, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 281, $this->source); })()), "categorie", [], "any", false, false, false, 281) == "Anniversaire"))) ? ("selected") : (""));
        yield ">Anniversaire</option>
                                            <option value=\"Conférence\" ";
        // line 282
        yield ((((isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 282, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 282, $this->source); })()), "categorie", [], "any", false, false, false, 282) == "Conférence"))) ? ("selected") : (""));
        yield ">Conférence</option>
                                            <option value=\"Séminaire\" ";
        // line 283
        yield ((((isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 283, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 283, $this->source); })()), "categorie", [], "any", false, false, false, 283) == "Séminaire"))) ? ("selected") : (""));
        yield ">Séminaire</option>
                                            <option value=\"Autre\" ";
        // line 284
        yield ((((isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 284, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 284, $this->source); })()), "categorie", [], "any", false, false, false, 284) == "Autre"))) ? ("selected") : (""));
        yield ">Autre</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Selected Items Section -->
                        <div class=\"card mb-4 glass-panel\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                            <div class=\"card-header\">
                                <h5 class=\"card-title\"><i class=\"ti ti-list\"></i> Éléments sélectionnés</h5>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table\" id=\"selectedItemsTable\">
                                        <thead>
                                            <tr>
                                                <th>Type</th>
                                                <th>Nom</th>
                                                <th>Détails</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody id=\"selectedItemsBody\">
                                            <tr class=\"no-items-row\">
                                                <td colspan=\"4\" class=\"text-center\">Aucun élément sélectionné</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Materielle Section -->
                        <div class=\"card mb-4 glass-panel\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                            <div class=\"card-header d-flex justify-content-between align-items-center\">
                                <h5 class=\"card-title mb-0\"><i class=\"ti ti-box\"></i> Matériels</h5>
                                <button type=\"button\" class=\"btn btn-sm btn-primary\" data-bs-toggle=\"collapse\" data-bs-target=\"#materielsCollapse\" aria-expanded=\"true\">
                                    <i class=\"ti ti-chevron-down\"></i>
                                </button>
                            </div>
                            <div class=\"card-body collapse show\" id=\"materielsCollapse\">
                                <div class=\"row mb-3\">
                                    <div class=\"col-md-6\">
                                        <select class=\"form-select select2\" id=\"materielSelect\">
                                            <option value=\"\">Sélectionnez un matériel</option>
                                            ";
        // line 330
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["materielles"]) || array_key_exists("materielles", $context) ? $context["materielles"] : (function () { throw new RuntimeError('Variable "materielles" does not exist.', 330, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
            // line 331
            yield "                                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id_mat", [], "any", false, false, false, 331), "html", null, true);
            yield "\" 
                                                        data-name=\"";
            // line 332
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom_mat", [], "any", false, false, false, 332), "html", null, true);
            yield "\" 
                                                        data-price=\"";
            // line 333
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "prix_mat", [], "any", false, false, false, 333), "html", null, true);
            yield "\"
                                                        data-available=\"";
            // line 334
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite_mat", [], "any", false, false, false, 334), "html", null, true);
            yield "\">
                                                    ";
            // line 335
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom_mat", [], "any", false, false, false, 335), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite_mat", [], "any", false, false, false, 335), "html", null, true);
            yield " disponible)
                                                </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['materiel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 338
        yield "                                        </select>
                                    </div>
                                    <div class=\"col-md-3\">
                                        <input type=\"number\" class=\"form-control\" id=\"materielQuantity\" min=\"1\" max=\"100\" value=\"1\" placeholder=\"Quantité\">
                                    </div>
                                    <div class=\"col-md-3\">
                                        <button class=\"btn btn-primary w-100\" type=\"button\" id=\"addMaterielBtn\">
                                            <i class=\"ti ti-plus\"></i> Ajouter
                                        </button>
                                    </div>
                                </div>
                                <div class=\"selected-materiels mt-4\">
                                    <h6>Matériels Sélectionnés</h6>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover\" id=\"selectedMaterielsTable\">
                                            <thead>
                                                <tr>
                                                    <th>Matériel</th>
                                                    <th>Quantité</th>
                                                    <th>Prix</th>
                                                    <th>Total</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Locations Section -->
                        <div class=\"card mb-4 glass-panel\" data-aos=\"fade-up\" data-aos-delay=\"500\">
                            <div class=\"card-header d-flex justify-content-between align-items-center\">
                                <h5 class=\"card-title mb-0\"><i class=\"ti ti-map-pin\"></i> Emplacements</h5>
                                <button type=\"button\" class=\"btn btn-sm btn-primary\" data-bs-toggle=\"collapse\" data-bs-target=\"#locationsCollapse\" aria-expanded=\"true\">
                                    <i class=\"ti ti-chevron-down\"></i>
                                </button>
                            </div>
                            <div class=\"card-body collapse show\" id=\"locationsCollapse\">
                                <div class=\"row mb-3\">
                                    <div class=\"col-md-9\">
                                        <select class=\"form-select select2\" id=\"locationSelect\">
                                            <option value=\"\">Sélectionnez un emplacement</option>
                                            ";
        // line 382
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 382, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 383
            yield "                                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 383), "html", null, true);
            yield "\" 
                                                        data-name=\"";
            // line 384
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 384), "html", null, true);
            yield "\" 
                                                        data-price=\"";
            // line 385
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "price", [], "any", false, false, false, 385), "html", null, true);
            yield "\">
                                                    ";
            // line 386
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 386), "html", null, true);
            yield " (Capacity: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "capacity", [], "any", false, false, false, 386), "html", null, true);
            yield ")
                                                </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 389
        yield "                                        </select>
                                    </div>
                                    <div class=\"col-md-3\">
                                        <button class=\"btn btn-primary w-100\" type=\"button\" id=\"addLocationBtn\">
                                            <i class=\"ti ti-plus\"></i> Ajouter
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Personnel Section -->
                        <div class=\"card mb-4 glass-panel\" data-aos=\"fade-up\" data-aos-delay=\"600\">
                            <div class=\"card-header d-flex justify-content-between align-items-center\">
                                <h5 class=\"card-title mb-0\"><i class=\"ti ti-users\"></i> Personnel</h5>
                                <button type=\"button\" class=\"btn btn-sm btn-primary\" data-bs-toggle=\"collapse\" data-bs-target=\"#personnelCollapse\" aria-expanded=\"true\">
                                    <i class=\"ti ti-chevron-down\"></i>
                                </button>
                            </div>
                            <div class=\"card-body collapse show\" id=\"personnelCollapse\">
                                <div class=\"row\">
                                    ";
        // line 410
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 410, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 411
            yield "                                        <div class=\"col-md-4 mb-3\">
                                            <div class=\"card h-100\">
                                                <img src=\"";
            // line 413
            if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["person"], "imageUrl", [], "any", false, false, false, 413)) && is_string($_v1 = "/uploads/") && str_starts_with($_v0, $_v1))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "imageUrl", [], "any", false, false, false, 413), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "imageUrl", [], "any", false, false, false, 413), ["/Images/" => ""]))), "html", null, true);
            }
            yield "\" class=\"card-img-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "nomP", [], "any", false, false, false, 413), "html", null, true);
            yield "\">
                                                <div class=\"card-body\">
                                                    <h5 class=\"card-title\">";
            // line 415
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "nomP", [], "any", false, false, false, 415), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "prenomP", [], "any", false, false, false, 415), "html", null, true);
            yield "</h5>
                                                    <p class=\"card-text\">
                                                        <strong>Service:</strong> ";
            // line 417
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "serviceP", [], "any", false, false, false, 417), "html", null, true);
            yield "<br>
                                                        <strong>Statut:</strong> ";
            // line 418
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "statutP", [], "any", false, false, false, 418), "html", null, true);
            yield "<br>
                                                        <strong>Description:</strong> ";
            // line 419
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "descriptionP", [], "any", false, false, false, 419), "html", null, true);
            yield "<br>
                                                        <strong>Tarif:</strong> ";
            // line 420
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "tarifP", [], "any", false, false, false, 420), "html", null, true);
            yield "€
                                                    </p>
                                                    <button type=\"button\" 
                                                            class=\"btn btn-primary select-personnel\" 
                                                            data-id=\"";
            // line 424
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "idP", [], "any", false, false, false, 424), "html", null, true);
            yield "\"
                                                            data-name=\"";
            // line 425
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "nomP", [], "any", false, false, false, 425), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "prenomP", [], "any", false, false, false, 425), "html", null, true);
            yield "\"
                                                            data-service=\"";
            // line 426
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "serviceP", [], "any", false, false, false, 426), "html", null, true);
            yield "\"
                                                            data-price=\"";
            // line 427
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "tarifP", [], "any", false, false, false, 427), "html", null, true);
            yield "\">
                                                        <i class=\"ti ti-plus\"></i> Sélectionner
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['person'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 434
        yield "                                </div>
                                <div class=\"selected-personnel mt-4\">
                                    <h6>Personnel Sélectionné</h6>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover\" id=\"selectedPersonnelTable\">
                                            <thead>
                                                <tr>
                                                    <th>Nom</th>
                                                    <th>Service</th>
                                                    <th>Tarif</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Actions -->
                        <div class=\"card-footer\">
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"window.location.href='";
        // line 457
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_notifications");
        yield "'\">
                                    <i class=\"ti ti-x\"></i> Annuler
                                </button>
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"ti ti-device-floppy\"></i> Enregistrer les modifications
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Temporary Footer Placeholder -->
                    <footer class=\"content-footer footer bg-footer-theme\">
                        <div class=\"container-xxl\">
                            <div class=\"footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column\">
                                <div>
                                    &copy; <script>document.write(new Date().getFullYear())</script> Golden Touch
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class=\"content-backdrop fade\"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <script src=\"";
        // line 490
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 491
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 492
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 493
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 494
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/node-waves/node-waves.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 495
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/hammer/hammer.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 496
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/i18n/i18n.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 497
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/typeahead-js/typeahead.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 498
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>

    <!-- Vendors JS -->
    <script src=\"";
        // line 501
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/apex-charts/apexcharts.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 502
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/swiper/swiper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 503
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/datatables-bs5/datatables-bootstrap5.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 504
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/select2/select2.full.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 505
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/flatpickr/flatpickr.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js\"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize variables
        let selectedPersonnel = new Map();

        // Handle personnel selection
        document.querySelectorAll('.select-personnel').forEach(button => {
            button.addEventListener('click', function() {
                const id = this.dataset.id;
                const name = this.dataset.name;
                const service = this.dataset.service;
                const price = parseFloat(this.dataset.price);

                if (selectedPersonnel.has(id)) {
                    showToast('warning', 'Ce personnel est déjà sélectionné');
                    return;
                }

                selectedPersonnel.set(id, {
                    id: id,
                    name: name,
                    service: service,
                    price: price
                });

                updatePersonnelTable();
                calculateTotal();
            });
        });

        function updatePersonnelTable() {
            const tbody = document.querySelector('#selectedPersonnelTable tbody');
            tbody.innerHTML = '';
            
            selectedPersonnel.forEach(person => {
                const tr = document.createElement('tr');
                tr.innerHTML = `
                    <td>\${person.name}</td>
                    <td>\${person.service}</td>
                    <td>\${person.price}€</td>
                    <td>
                        <button class=\"btn btn-sm btn-danger\" onclick=\"removePersonnel('\${person.id}')\">
                            <i class=\"ti ti-trash\"></i>
                        </button>
                    </td>
                `;
                tbody.appendChild(tr);
            });
        }

        window.removePersonnel = function(id) {
            selectedPersonnel.delete(id);
            updatePersonnelTable();
            calculateTotal();
        };

        // Form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = {
                packId: '";
        // line 570
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 570, $this->source); })()), "id", [], "any", false, false, false, 570), "html", null, true);
        yield "',
                name: document.getElementById('packName').value,
                price: document.getElementById('packPrice').value,
                description: document.getElementById('packDescription').value,
                capacity: document.getElementById('packCapacity').value,
                category: document.getElementById('packCategory').value,
                materielles: Array.from(selectedMaterielles.values()).map(m => ({
                    id: m.id,
                    quantity: m.quantity
                })),
                personnel: Array.from(selectedPersonnel.values()).map(p => ({
                    id: p.id
                })),
                location: selectedLocation ? selectedLocation.id : null
            };

            fetch('";
        // line 586
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customize_pack_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["demandePack"]) || array_key_exists("demandePack", $context) ? $context["demandePack"] : (function () { throw new RuntimeError('Variable "demandePack" does not exist.', 586, $this->source); })()), "id", [], "any", false, false, false, 586)]), "html", null, true);
        yield "', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '";
        // line 590
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("customize_pack"), "html", null, true);
        yield "'
                },
                body: JSON.stringify(formData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Succès',
                        text: 'Pack personnalisé enregistré avec succès',
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        window.location.href = '";
        // line 606
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_notifications");
        yield "';
                    });
                } else {
                    throw new Error(data.message || 'Erreur lors de l\\'enregistrement');
                }
            })
            .catch(error => {
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                    text: error.message || 'Erreur lors de l\\'enregistrement',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
            });
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
        return "admin/notifications/customize_pack.html.twig";
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
        return array (  929 => 606,  910 => 590,  903 => 586,  884 => 570,  816 => 505,  812 => 504,  808 => 503,  804 => 502,  800 => 501,  794 => 498,  790 => 497,  786 => 496,  782 => 495,  778 => 494,  774 => 493,  770 => 492,  766 => 491,  762 => 490,  726 => 457,  701 => 434,  688 => 427,  684 => 426,  678 => 425,  674 => 424,  667 => 420,  663 => 419,  659 => 418,  655 => 417,  648 => 415,  637 => 413,  633 => 411,  629 => 410,  606 => 389,  595 => 386,  591 => 385,  587 => 384,  582 => 383,  578 => 382,  532 => 338,  521 => 335,  517 => 334,  513 => 333,  509 => 332,  504 => 331,  500 => 330,  451 => 284,  447 => 283,  443 => 282,  439 => 281,  435 => 280,  425 => 273,  413 => 264,  402 => 256,  388 => 245,  365 => 225,  361 => 224,  357 => 223,  348 => 219,  344 => 218,  338 => 217,  302 => 184,  291 => 176,  278 => 166,  274 => 165,  270 => 164,  149 => 46,  145 => 45,  139 => 42,  135 => 41,  131 => 40,  127 => 39,  123 => 38,  119 => 37,  115 => 36,  111 => 35,  107 => 34,  101 => 31,  97 => 30,  93 => 29,  87 => 26,  83 => 25,  79 => 24,  68 => 16,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html
  lang=\"en\"
  class=\"light-style layout-navbar-fixed layout-menu-fixed\"
  dir=\"ltr\"
  data-theme=\"theme-default\"
  data-assets-path=\"{{ asset('') }}\"
  data-template=\"vertical-menu-template\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>Customize Pack - Admin Dashboard</title>
    <meta name=\"description\" content=\"\" />

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/favicon/favicon.ico') }}\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\" />

    <!-- Icons -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/fonts/fontawesome.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/fonts/tabler-icons.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/fonts/flag-icons.css') }}\" />

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/css/rtl/core.css') }}\" class=\"template-customizer-core-css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/css/rtl/theme-default.css') }}\" class=\"template-customizer-theme-css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/demo.css') }}\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('/vendor/libs/typeahead-js/typeahead.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/apex-charts/apex-charts.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/swiper/swiper.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/flatpickr/flatpickr.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/select2/select2.css') }}\" />
    
    <!-- Page CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/css/pages/cards-advance.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/glassmorphism.css') }}\">

    <style>
        .glassmorphism-ui {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            transition: all 0.3s ease;
        }

        .glass-panel {
            background: rgba(255, 255, 255, 0.85);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .glass-panel:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 35px rgba(0, 0, 0, 0.15);
        }

        .form-control, .form-select {
            backdrop-filter: blur(4px);
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.18);
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            box-shadow: 0 0 0 0.25rem rgba(115, 103, 240, 0.15);
            border-color: #7367f0;
            background: rgba(255, 255, 255, 0.95);
        }

        .btn {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .btn::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            background-image: radial-gradient(circle, #fff 10%, transparent 10.01%);
            transform: scale(10, 10);
            opacity: 0;
            transition: transform .5s, opacity 1s;
        }

        .btn:active::after {
            transform: scale(0, 0);
            opacity: .3;
            transition: 0s;
        }

        .table {
            border-collapse: separate;
            border-spacing: 0 8px;
        }

        .table tr {
            transition: transform 0.2s ease;
        }

        .table tr:hover {
            transform: scale(1.01);
        }

        @keyframes shimmer {
            0% { background-position: -1000px 0; }
            100% { background-position: 1000px 0; }
        }

        .loading {
            animation: shimmer 2s infinite linear;
            background: linear-gradient(to right, #f6f7f8 8%, #edeef1 18%, #f6f7f8 33%);
            background-size: 1000px 100%;
        }

        .scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            z-index: 1000;
            background: linear-gradient(to right, #7367f0, #9754cb);
            transform-origin: 0 50%;
            transition: transform 0.2s ease;
        }

        @media (max-width: 768px) {
            .glass-panel {
                margin: 10px;
                padding: 15px;
            }
            
            .row.g-3 {
                margin: 0 5px;
            }
            
            .btn {
                width: 100%;
                margin: 5px 0;
            }
        }
    </style>

    <!-- Helpers -->
    <script src=\"{{ asset('vendor/js/helpers.js') }}\"></script>
    <script src=\"{{ asset('vendor/js/template-customizer.js') }}\"></script>
    <script src=\"{{ asset('js/config.js') }}\"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class=\"layout-wrapper layout-content-navbar\">
        <div class=\"layout-container\">
            <!-- Temporary Menu Placeholder -->
            <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">
                <div class=\"app-brand demo\">
                    <a href=\"{{ path('admin_dashboard') }}\" class=\"app-brand-link\">
                        <span class=\"app-brand-text demo menu-text fw-bold\">Golden Touch</span>
                    </a>
                </div>
                <div class=\"menu-inner-shadow\"></div>
                <ul class=\"menu-inner py-1\">
                    <!-- Dashboard -->
                    <li class=\"menu-item\">
                        <a href=\"{{ path('admin_dashboard') }}\" class=\"menu-link\">
                            <i class=\"menu-icon tf-icons ti ti-smart-home\"></i>
                            <div>Dashboard</div>
                        </a>
                    </li>
                </ul>
            </aside>

            <!-- Layout page -->
            <div class=\"layout-page\">
                <!-- Temporary Navbar Placeholder -->
                <nav class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\">
                    <div class=\"navbar-nav-right d-flex align-items-center\">
                        <div class=\"navbar-nav align-items-center\">
                            <div class=\"nav-item navbar-search-wrapper mb-0\">
                                <span class=\"d-none d-md-inline-block\">Golden Touch Admin</span>
                            </div>
                        </div>
                    </div>
                </nav>

                <!-- Content wrapper -->
                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y\">
                        <div class=\"scroll-progress\" id=\"scrollProgress\"></div>

                        <!-- Client Info Card -->
                        <div class=\"card mb-4 glassmorphism-ui\" data-aos=\"fade-up\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <h5 class=\"mb-3\">Client Information</h5>
                                        <p><strong>Name:</strong> {{ client.nom }} {{ client.prenom }}</p>
                                        <p><strong>Event Date:</strong> {{ eventDate|date('Y-m-d') }}</p>
                                        <p><strong>Status:</strong> <span class=\"badge bg-{{ demandePack.statut == 'NON_LU' ? 'warning' : 'info' }}\">{{ demandePack.statut }}</span></p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h5 class=\"mb-3\">Original Pack Details</h5>
                                        <p><strong>Name:</strong> {{ originalPack.nom }}</p>
                                        <p><strong>Base Price:</strong> \${{ originalPack.prix }}</p>
                                        <p><strong>Category:</strong> {{ originalPack.categorie }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pack Details Section -->
                        <div class=\"card mb-4 glass-panel\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                            <div class=\"card-header\">
                                <h5 class=\"card-title mb-0 d-flex align-items-center\">
                                    <i class=\"ti ti-package me-2\"></i>
                                    Détails du Pack
                                </h5>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"row g-3\">
                                    <!-- Pack Name -->
                                    <div class=\"col-md-6\">
                                        <div class=\"form-floating mb-3\">
                                            <input type=\"text\" class=\"form-control\" id=\"packName\" name=\"packName\" 
                                                value=\"{{ originalPack ? originalPack.nom : '' }}\" placeholder=\"Nom du Pack\" required>
                                            <label for=\"packName\">Nom du Pack</label>
                                        </div>
                                    </div>

                                    <!-- Pack Price -->
                                    <div class=\"col-md-6\">
                                        <label class=\"form-label\">Prix (€)</label>
                                        <div class=\"input-group\">
                                            <span class=\"input-group-text\">€</span>
                                            <input type=\"number\" step=\"0.01\" class=\"form-control\" id=\"packPrice\" name=\"packPrice\"
                                                value=\"{{ originalPack ? originalPack.prix : '' }}\" required>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class=\"col-12\">
                                        <div class=\"form-floating mb-3\">
                                            <textarea class=\"form-control\" id=\"packDescription\" name=\"packDescription\" 
                                                style=\"height: 100px\" required>{{ originalPack ? originalPack.description : '' }}</textarea>
                                            <label for=\"packDescription\">Description du Pack</label>
                                        </div>
                                    </div>

                                    <!-- Capacity & Category -->
                                    <div class=\"col-md-6\">
                                        <label class=\"form-label\">Capacité</label>
                                        <input type=\"number\" class=\"form-control\" id=\"packCapacity\" name=\"packCapacity\"
                                            value=\"{{ originalPack ? originalPack.capacite : '' }}\" required>
                                    </div>

                                    <div class=\"col-md-6\">
                                        <label class=\"form-label\">Catégorie</label>
                                        <select class=\"form-select select2\" id=\"packCategory\" name=\"packCategory\" required>
                                            <option value=\"\">Sélectionnez une catégorie</option>
                                            <option value=\"Mariage\" {{ originalPack and originalPack.categorie == 'Mariage' ? 'selected' : '' }}>Mariage</option>
                                            <option value=\"Anniversaire\" {{ originalPack and originalPack.categorie == 'Anniversaire' ? 'selected' : '' }}>Anniversaire</option>
                                            <option value=\"Conférence\" {{ originalPack and originalPack.categorie == 'Conférence' ? 'selected' : '' }}>Conférence</option>
                                            <option value=\"Séminaire\" {{ originalPack and originalPack.categorie == 'Séminaire' ? 'selected' : '' }}>Séminaire</option>
                                            <option value=\"Autre\" {{ originalPack and originalPack.categorie == 'Autre' ? 'selected' : '' }}>Autre</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Selected Items Section -->
                        <div class=\"card mb-4 glass-panel\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                            <div class=\"card-header\">
                                <h5 class=\"card-title\"><i class=\"ti ti-list\"></i> Éléments sélectionnés</h5>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table\" id=\"selectedItemsTable\">
                                        <thead>
                                            <tr>
                                                <th>Type</th>
                                                <th>Nom</th>
                                                <th>Détails</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody id=\"selectedItemsBody\">
                                            <tr class=\"no-items-row\">
                                                <td colspan=\"4\" class=\"text-center\">Aucun élément sélectionné</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Materielle Section -->
                        <div class=\"card mb-4 glass-panel\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                            <div class=\"card-header d-flex justify-content-between align-items-center\">
                                <h5 class=\"card-title mb-0\"><i class=\"ti ti-box\"></i> Matériels</h5>
                                <button type=\"button\" class=\"btn btn-sm btn-primary\" data-bs-toggle=\"collapse\" data-bs-target=\"#materielsCollapse\" aria-expanded=\"true\">
                                    <i class=\"ti ti-chevron-down\"></i>
                                </button>
                            </div>
                            <div class=\"card-body collapse show\" id=\"materielsCollapse\">
                                <div class=\"row mb-3\">
                                    <div class=\"col-md-6\">
                                        <select class=\"form-select select2\" id=\"materielSelect\">
                                            <option value=\"\">Sélectionnez un matériel</option>
                                            {% for materiel in materielles %}
                                                <option value=\"{{ materiel.id_mat }}\" 
                                                        data-name=\"{{ materiel.nom_mat }}\" 
                                                        data-price=\"{{ materiel.prix_mat }}\"
                                                        data-available=\"{{ materiel.quantite_mat }}\">
                                                    {{ materiel.nom_mat }} ({{ materiel.quantite_mat }} disponible)
                                                </option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                    <div class=\"col-md-3\">
                                        <input type=\"number\" class=\"form-control\" id=\"materielQuantity\" min=\"1\" max=\"100\" value=\"1\" placeholder=\"Quantité\">
                                    </div>
                                    <div class=\"col-md-3\">
                                        <button class=\"btn btn-primary w-100\" type=\"button\" id=\"addMaterielBtn\">
                                            <i class=\"ti ti-plus\"></i> Ajouter
                                        </button>
                                    </div>
                                </div>
                                <div class=\"selected-materiels mt-4\">
                                    <h6>Matériels Sélectionnés</h6>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover\" id=\"selectedMaterielsTable\">
                                            <thead>
                                                <tr>
                                                    <th>Matériel</th>
                                                    <th>Quantité</th>
                                                    <th>Prix</th>
                                                    <th>Total</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Locations Section -->
                        <div class=\"card mb-4 glass-panel\" data-aos=\"fade-up\" data-aos-delay=\"500\">
                            <div class=\"card-header d-flex justify-content-between align-items-center\">
                                <h5 class=\"card-title mb-0\"><i class=\"ti ti-map-pin\"></i> Emplacements</h5>
                                <button type=\"button\" class=\"btn btn-sm btn-primary\" data-bs-toggle=\"collapse\" data-bs-target=\"#locationsCollapse\" aria-expanded=\"true\">
                                    <i class=\"ti ti-chevron-down\"></i>
                                </button>
                            </div>
                            <div class=\"card-body collapse show\" id=\"locationsCollapse\">
                                <div class=\"row mb-3\">
                                    <div class=\"col-md-9\">
                                        <select class=\"form-select select2\" id=\"locationSelect\">
                                            <option value=\"\">Sélectionnez un emplacement</option>
                                            {% for location in locations %}
                                                <option value=\"{{ location.id }}\" 
                                                        data-name=\"{{ location.name }}\" 
                                                        data-price=\"{{ location.price }}\">
                                                    {{ location.name }} (Capacity: {{ location.capacity }})
                                                </option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                    <div class=\"col-md-3\">
                                        <button class=\"btn btn-primary w-100\" type=\"button\" id=\"addLocationBtn\">
                                            <i class=\"ti ti-plus\"></i> Ajouter
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Personnel Section -->
                        <div class=\"card mb-4 glass-panel\" data-aos=\"fade-up\" data-aos-delay=\"600\">
                            <div class=\"card-header d-flex justify-content-between align-items-center\">
                                <h5 class=\"card-title mb-0\"><i class=\"ti ti-users\"></i> Personnel</h5>
                                <button type=\"button\" class=\"btn btn-sm btn-primary\" data-bs-toggle=\"collapse\" data-bs-target=\"#personnelCollapse\" aria-expanded=\"true\">
                                    <i class=\"ti ti-chevron-down\"></i>
                                </button>
                            </div>
                            <div class=\"card-body collapse show\" id=\"personnelCollapse\">
                                <div class=\"row\">
                                    {% for person in personnel %}
                                        <div class=\"col-md-4 mb-3\">
                                            <div class=\"card h-100\">
                                                <img src=\"{% if person.imageUrl starts with '/uploads/' %}{{ person.imageUrl }}{% else %}{{ asset('uploads/packs/' ~ person.imageUrl|replace({'/Images/': ''}) ) }}{% endif %}\" class=\"card-img-top\" alt=\"{{ person.nomP }}\">
                                                <div class=\"card-body\">
                                                    <h5 class=\"card-title\">{{ person.nomP }} {{ person.prenomP }}</h5>
                                                    <p class=\"card-text\">
                                                        <strong>Service:</strong> {{ person.serviceP }}<br>
                                                        <strong>Statut:</strong> {{ person.statutP }}<br>
                                                        <strong>Description:</strong> {{ person.descriptionP }}<br>
                                                        <strong>Tarif:</strong> {{ person.tarifP }}€
                                                    </p>
                                                    <button type=\"button\" 
                                                            class=\"btn btn-primary select-personnel\" 
                                                            data-id=\"{{ person.idP }}\"
                                                            data-name=\"{{ person.nomP }} {{ person.prenomP }}\"
                                                            data-service=\"{{ person.serviceP }}\"
                                                            data-price=\"{{ person.tarifP }}\">
                                                        <i class=\"ti ti-plus\"></i> Sélectionner
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    {% endfor %}
                                </div>
                                <div class=\"selected-personnel mt-4\">
                                    <h6>Personnel Sélectionné</h6>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover\" id=\"selectedPersonnelTable\">
                                            <thead>
                                                <tr>
                                                    <th>Nom</th>
                                                    <th>Service</th>
                                                    <th>Tarif</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Actions -->
                        <div class=\"card-footer\">
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"window.location.href='{{ path('admin_notifications') }}'\">
                                    <i class=\"ti ti-x\"></i> Annuler
                                </button>
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"ti ti-device-floppy\"></i> Enregistrer les modifications
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Temporary Footer Placeholder -->
                    <footer class=\"content-footer footer bg-footer-theme\">
                        <div class=\"container-xxl\">
                            <div class=\"footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column\">
                                <div>
                                    &copy; <script>document.write(new Date().getFullYear())</script> Golden Touch
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class=\"content-backdrop fade\"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <script src=\"{{ asset('/vendor/libs/jquery/jquery.js') }}\"></script>
    <script src=\"{{ asset('/vendor/libs/popper/popper.js') }}\"></script>
    <script src=\"{{ asset('/vendor/js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>
    <script src=\"{{ asset('/vendor/libs/node-waves/node-waves.js') }}\"></script>
    <script src=\"{{ asset('/vendor/libs/hammer/hammer.js') }}\"></script>
    <script src=\"{{ asset('/vendor/libs/i18n/i18n.js') }}\"></script>
    <script src=\"{{ asset('/vendor/libs/typeahead-js/typeahead.js') }}\"></script>
    <script src=\"{{ asset('/vendor/js/menu.js') }}\"></script>

    <!-- Vendors JS -->
    <script src=\"{{ asset('/vendor/libs/apex-charts/apexcharts.js') }}\"></script>
    <script src=\"{{ asset('/vendor/libs/swiper/swiper.js') }}\"></script>
    <script src=\"{{ asset('/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}\"></script>
    <script src=\"{{ asset('/vendor/libs/select2/select2.full.min.js') }}\"></script>
    <script src=\"{{ asset('/vendor/libs/flatpickr/flatpickr.min.js') }}\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js\"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize variables
        let selectedPersonnel = new Map();

        // Handle personnel selection
        document.querySelectorAll('.select-personnel').forEach(button => {
            button.addEventListener('click', function() {
                const id = this.dataset.id;
                const name = this.dataset.name;
                const service = this.dataset.service;
                const price = parseFloat(this.dataset.price);

                if (selectedPersonnel.has(id)) {
                    showToast('warning', 'Ce personnel est déjà sélectionné');
                    return;
                }

                selectedPersonnel.set(id, {
                    id: id,
                    name: name,
                    service: service,
                    price: price
                });

                updatePersonnelTable();
                calculateTotal();
            });
        });

        function updatePersonnelTable() {
            const tbody = document.querySelector('#selectedPersonnelTable tbody');
            tbody.innerHTML = '';
            
            selectedPersonnel.forEach(person => {
                const tr = document.createElement('tr');
                tr.innerHTML = `
                    <td>\${person.name}</td>
                    <td>\${person.service}</td>
                    <td>\${person.price}€</td>
                    <td>
                        <button class=\"btn btn-sm btn-danger\" onclick=\"removePersonnel('\${person.id}')\">
                            <i class=\"ti ti-trash\"></i>
                        </button>
                    </td>
                `;
                tbody.appendChild(tr);
            });
        }

        window.removePersonnel = function(id) {
            selectedPersonnel.delete(id);
            updatePersonnelTable();
            calculateTotal();
        };

        // Form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = {
                packId: '{{ originalPack.id }}',
                name: document.getElementById('packName').value,
                price: document.getElementById('packPrice').value,
                description: document.getElementById('packDescription').value,
                capacity: document.getElementById('packCapacity').value,
                category: document.getElementById('packCategory').value,
                materielles: Array.from(selectedMaterielles.values()).map(m => ({
                    id: m.id,
                    quantity: m.quantity
                })),
                personnel: Array.from(selectedPersonnel.values()).map(p => ({
                    id: p.id
                })),
                location: selectedLocation ? selectedLocation.id : null
            };

            fetch('{{ path(\"admin_customize_pack_update\", {id: demandePack.id}) }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token(\"customize_pack\") }}'
                },
                body: JSON.stringify(formData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Succès',
                        text: 'Pack personnalisé enregistré avec succès',
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        window.location.href = '{{ path(\"admin_notifications\") }}';
                    });
                } else {
                    throw new Error(data.message || 'Erreur lors de l\\'enregistrement');
                }
            })
            .catch(error => {
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                    text: error.message || 'Erreur lors de l\\'enregistrement',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
            });
        });
    });
    </script>
</body>
</html>", "admin/notifications/customize_pack.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\admin\\notifications\\customize_pack.html.twig");
    }
}
