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

/* admin/advanced_statistiques/index.html.twig */
class __TwigTemplate_e21d439b28eaec2da45078823027d353 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/advanced_statistiques/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/advanced_statistiques/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\" class=\"light-style layout-navbar-fixed layout-menu-fixed\" dir=\"ltr\" data-theme=\"theme-default\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>Statistiques Avancées - Admin</title>
    <meta name=\"description\" content=\"Statistiques avancées administrateur\" />
    
    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/favicon.ico"), "html", null, true);
        yield "\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\" />

    <!-- Icons -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css\">

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/css/rtl/core.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/css/rtl/theme-default.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/demo.css"), "html", null, true);
        yield "\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/node-waves/node-waves.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/datatables-bs5/datatables.bootstrap5.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/sweetalert2/sweetalert2.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/flatpickr/flatpickr.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/swiper/swiper.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/select2/select2.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/css/pages/cards-advance.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/glassmorphism.css"), "html", null, true);
        yield "\" />
    <script src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/template-customizer.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/config.js"), "html", null, true);
        yield "\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
    
    <style>
        :root {
            --primary-color: #7367F0;
            --secondary-color: #82868b;
            --success-color: #28C76F;
            --info-color: #00CFE8;
            --warning-color: #FF9F43;
            --danger-color: #EA5455;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        .dashboard-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: none;
            border-radius: 1rem;
            background: #fff;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        
        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        .stat-card {
            padding: 1.5rem;
            border-radius: 1rem;
            position: relative;
            overflow: hidden;
        }

        .stat-card .stat-icon {
            position: absolute;
            right: -10px;
            bottom: -10px;
            font-size: 5rem;
            opacity: 0.1;
            transition: all 0.3s ease;
        }

        .stat-card:hover .stat-icon {
            transform: scale(1.2);
            opacity: 0.2;
        }
        
        .cursor-pointer {
            cursor: pointer;
        }
        
        .stat-card.cursor-pointer {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .stat-card.cursor-pointer:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        
        .stat-card.cursor-pointer:active {
            transform: translateY(-2px);
        }

        .menu-item {
            margin-bottom: 0.5rem;
        }

        .menu-item a {
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }

        .menu-item a:hover {
            background-color: var(--primary-color);
            color: white;
        }

        .menu-item.active a {
            background-color: var(--primary-color);
            color: white;
            box-shadow: 0 4px 6px -1px rgba(115, 103, 240, 0.2);
        }

        .chart-container {
            padding: 1.5rem;
            border-radius: 1rem;
            background: white;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .data-table {
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .data-table thead th {
            background-color: #f8f9fa;
            border-bottom: 2px solid #e9ecef;
            font-weight: 600;
        }

        .btn {
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .progress {
            height: 0.5rem;
            border-radius: 1rem;
            background-color: #e9ecef;
        }

        .progress-bar {
            border-radius: 1rem;
            background-color: var(--primary-color);
        }

        /* Loading animation */
        .loading-skeleton {
            animation: skeleton-loading 1s linear infinite alternate;
        }

        @keyframes skeleton-loading {
            0% {
                background-color: #f3f3f3;
            }
            100% {
                background-color: #e0e0e0;
            }
        }

        /* Smooth scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
        
        .pack-metrics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .pack-metric-card {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 1.5rem;
            transition: all 0.3s ease;
        }

        .pack-metric-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .metric-item {
            background: rgba(var(--bs-primary-rgb), 0.05);
            padding: 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .metric-item:hover {
            background: rgba(var(--bs-primary-rgb), 0.1);
        }

        .satisfaction-bar {
            min-width: 100px;
        }

        .rating-circle {
            width: 100px;
            height: 100px;
        }

        .circular-chart {
            width: 100%;
            height: 100%;
        }

        .circle-bg {
            fill: none;
            stroke: #eee;
            stroke-width: 3.8;
        }

        .circle {
            fill: none;
            stroke: #ffc107;
            stroke-width: 2.8;
            stroke-linecap: round;
            animation: progress 1s ease-out forwards;
        }

        .percentage {
            fill: #666;
            font-size: 0.5em;
            text-anchor: middle;
        }

        @keyframes progress {
            0% {
                stroke-dasharray: 0 100;
            }
        }

        .rating-bars .progress {
            background-color: rgba(0,0,0,0.05);
        }

        .pack-chart {
            border-top: 1px solid var(--border-color);
            padding-top: 1rem;
        }

        @media (max-width: 768px) {
            .pack-metrics-grid {
                grid-template-columns: 1fr;
            }
        }
        
        .stats-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }
        .stats-card h3 {
            color: #2c3e50;
            margin-bottom: 1rem;
            font-size: 1.25rem;
        }
        .chart-container {
            position: relative;
            height: 300px;
            margin-bottom: 1.5rem;
        }
        .top-events-table {
            width: 100%;
            border-collapse: collapse;
        }
        .top-events-table th, .top-events-table td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }
        .top-events-table th {
            background-color: #f8fafc;
            font-weight: 600;
            color: #4a5568;
        }
        .top-events-table tr:hover {
            background-color: #f8fafc;
        }
        .stats-overview {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            margin-bottom: 1.5rem;
        }
        .stats-item {
            background: white;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .stats-item h4 {
            color: #718096;
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
        }
        .stats-item .value {
            color: #2d3748;
            font-size: 1.5rem;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <!-- Enveloppe de la mise en page -->
    <div class=\"layout-wrapper layout-content-navbar\">
        <div class=\"layout-container\">
            <!-- Menu -->
            <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">
          <div class=\"app-brand demo\">
            <a href=\"index.html\" class=\"app-brand-link\">
              <span class=\"app-brand-logo demo\">
                <svg width=\"32\" height=\"22\" viewBox=\"0 0 32 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path
                    fill-rule=\"evenodd\"
                    clip-rule=\"evenodd\"
                    d=\"M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z\"
                    fill=\"#7367F0\" />
                  <path
                    opacity=\"0.06\"
                    fill-rule=\"evenodd\"
                    clip-rule=\"evenodd\"
                    d=\"M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z\"
                    fill=\"#161616\" />
                  <path
                    opacity=\"0.06\"
                    fill-rule=\"evenodd\"
                    clip-rule=\"evenodd\"
                    d=\"M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z\"
                    fill=\"#161616\" />
                  <path
                    fill-rule=\"evenodd\"
                    clip-rule=\"evenodd\"
                    d=\"M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z\"
                    fill=\"#7367F0\" />
                </svg>
              </span>
              <span class=\"app-brand-text demo menu-text fw-bold\">Vuexy</span>
            </a>

            <a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto\">
              <i class=\"ti menu-toggle-icon d-none d-xl-block ti-sm align-middle\"></i>
              <i class=\"ti ti-x d-block d-xl-none ti-sm align-middle\"></i>
            </a>
          </div>

          <div class=\"menu-inner-shadow\"></div>
<div class=\"menu-inner-shadow\"></div>

<ul class=\"menu-inner py-1\">
  <!-- Packs -->
  <li class=\"menu-item active\">
    <a href=\"";
        // line 395
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pack_index");
        yield "\" class=\"menu-link\">
      <i class=\"menu-icon tf-icons ti ti-package\"></i>
      <div data-i18n=\"Packs\">Packs</div>
    </a>
  </li>

  <!-- Gestion Événements -->
  <li class=\"menu-item\">
    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
      <i class=\"menu-icon tf-icons ti ti-calendar-event\"></i>
      <div data-i18n=\"Gestion Événements\">Gestion Événements</div>
    </a>
    <ul class=\"menu-sub\">
      <li class=\"menu-item\">
<a href=\"";
        // line 409
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_event");
        yield "\" class=\"menu-link\">
    <i class=\"menu-icon tf-icons ti ti-circle\"></i>
    <div data-i18n=\"Ajouter Événement\">Ajouter Événement</div>
</a>
      </li>
      <li class=\"menu-item\">
        <a href=\"liste-evenements.html\" class=\"menu-link\">
          <i class=\"menu-icon tf-icons ti ti-circle\"></i>
          <div data-i18n=\"Liste Événements\">Liste Événements</div>
        </a>
      </li>
    </ul>
  </li>

  <!-- Gestion Matérielle -->
  <li class=\"menu-item\">
    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
      <i class=\"menu-icon tf-icons ti ti-tools\"></i>
      <div data-i18n=\"Gestion Matérielle\">Gestion Matérielle</div>
    </a>
    <ul class=\"menu-sub\">
      <li class=\"menu-item\">
        <a href=\"ajouter-materiel.html\" class=\"menu-link\">
          <i class=\"menu-icon tf-icons ti ti-circle\"></i>
          <div data-i18n=\"Ajouter Matériel\">Ajouter Matériel</div>
        </a>
      </li>
      <li class=\"menu-item\">
        <a href=\"liste-materiel.html\" class=\"menu-link\">
          <i class=\"menu-icon tf-icons ti ti-circle\"></i>
          <div data-i18n=\"Liste Matériel\">Liste Matériel</div>
        </a>
      </li>
    </ul>
  </li>

  <!-- Gestion Lieu -->
  <li class=\"menu-item\">
    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
      <i class=\"menu-icon tf-icons ti ti-map-pin\"></i>
      <div data-i18n=\"Gestion Lieu\">Gestion Lieu</div>
    </a>
    <ul class=\"menu-sub\">
      <li class=\"menu-item\">
        <a href=\"ajouter-lieu.html\" class=\"menu-link\">
          <i class=\"menu-icon tf-icons ti ti-circle\"></i>
          <div data-i18n=\"Ajouter Lieu\">Ajouter Lieu</div>
        </a>
      </li>
      <li class=\"menu-item\">
        <a href=\"liste-lieux.html\" class=\"menu-link\">
          <i class=\"menu-icon tf-icons ti ti-circle\"></i>
          <div data-i18n=\"Liste Lieux\">Liste Lieux</div>
        </a>
      </li>
    </ul>
  </li>

  <!-- Gestion Personnels -->
  <li class=\"menu-item\">
    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
      <i class=\"menu-icon tf-icons ti ti-users\"></i>
      <div data-i18n=\"Gestion Personnels\">Gestion Personnels</div>
    </a>
    <ul class=\"menu-sub\">
      <li class=\"menu-item\">
        <a href=\"ajouter-personnel.html\" class=\"menu-link\">
          <i class=\"menu-icon tf-icons ti ti-circle\"></i>
          <div data-i18n=\"Ajouter Personnel\">Ajouter Personnel</div>
        </a>
      </li>
      <li class=\"menu-item\">
        <a href=\"liste-personnels.html\" class=\"menu-link\">
          <i class=\"menu-icon tf-icons ti ti-circle\"></i>
          <div data-i18n=\"Liste Personnels\">Liste Personnels</div>
        </a>
      </li>
    </ul>
  </li>

  <!-- Gestion Commandes -->
  <li class=\"menu-item\">
    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
      <i class=\"menu-icon tf-icons ti ti-shopping-cart\"></i>
      <div data-i18n=\"Gestion Commandes\">Gestion Commandes</div>
    </a>
    <ul class=\"menu-sub\">
      <li class=\"menu-item\">
        <a href=\"panier.html\" class=\"menu-link\">
          <i class=\"menu-icon tf-icons ti ti-circle\"></i>
          <div data-i18n=\"Panier\">Panier</div>
          <div class=\"badge bg-label-primary rounded-pill ms-auto\">3</div>
        </a>
      </li>
      <li class=\"menu-item\">
        <a href=\"liste-commandes.html\" class=\"menu-link\">
          <i class=\"menu-icon tf-icons ti ti-circle\"></i>
          <div data-i18n=\"Liste Commandes\">Liste Commandes</div>
        </a>
      </li>
      <li class=\"menu-item\">
        <a href=\"liste-reclamations.html\" class=\"menu-link\">
          <i class=\"menu-icon tf-icons ti ti-circle\"></i>
          <div data-i18n=\"Liste Réclamations\">Liste Réclamations</div>
          <div class=\"badge bg-label-warning rounded-pill ms-auto\">2</div>
        </a>
      </li>
    </ul>
  </li>

  <!-- Divider -->
  <li class=\"menu-header small text-uppercase\">
    <span class=\"menu-header-text\">Compte</span>
  </li>

  <!-- Compte -->
  <li class=\"menu-item\">
    <a href=\"compte.html\" class=\"menu-link\">
      <i class=\"menu-icon tf-icons ti ti-user\"></i>
      <div data-i18n=\"Mon Compte\">Mon Compte</div>
    </a>
  </li>

  <!-- Déconnexion -->
  <li class=\"menu-item\">
    <a href=\"deconnexion.html\" class=\"menu-link\">
      <i class=\"menu-icon tf-icons ti ti-logout\"></i>
      <div data-i18n=\"Déconnexion\">Déconnexion</div>
    </a>
  </li>
</ul>
         
        </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class=\"layout-page\">
                <!-- Navbar -->
                <nav class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\" id=\"layout-navbar\">
                    <div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none\">
                        <a class=\"nav-item nav-link px-0 me-xl-4\" href=\"javascript:void(0)\">
                            <i class=\"ti ti-menu-2 ti-sm\"></i>
                        </a>
                    </div>

                    <!-- BEGIN: Advanced Statistiques Searchbar (unchanged) -->
                    <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
                        <!-- Search -->
                        <div class=\"navbar-nav align-items-center\">
                            <div class=\"navbar-nav align-items-center position-relative\">
                                <div class=\"nav-item navbar-search-wrapper mb-0\">
                                    <a class=\"nav-item nav-link search-toggler d-flex align-items-center px-0\" id=\"openSearchBar\" href=\"javascript:void(0);\">
    <i class=\"ti ti-search ti-md me-2\"></i>
    <span class=\"d-none d-md-inline-block text-muted\">Recherche</span>
</a>
<input type=\"text\" id=\"chartSearchInput\" class=\"form-control ms-2 d-none\" placeholder=\"Rechercher un graphique... (Ctrl+/)\" autocomplete=\"off\" style=\"width: 260px; position: absolute; top: 40px; left: 0; z-index: 1050;\" />
<div id=\"chartSearchResults\" class=\"dropdown-menu show d-none\" style=\"position: absolute; top: 70px; left: 0; width: 260px; z-index: 1060; max-height: 250px; overflow-y: auto;\"></div>
<style>
#chartSearchResults {
    border: 1px solid #d1d5db;
    background: #fff;
    box-shadow: 0 2px 8px rgba(0,0,0,0.07);
    font-size: 1rem;
}
#chartSearchResults .dropdown-item {
    padding: 0.5rem 1rem;
    cursor: pointer;
    color: #333;
}
#chartSearchResults .dropdown-item:hover {
    background: #f4f4f4;
    color: #7367F0;
}
</style>
<script>
(function() {
    // Add highlight style for charts
    const style = document.createElement('style');
    style.innerHTML = `.chart-highlight { box-shadow: 0 0 0 4px #7367F0AA; transition: box-shadow 0.3s; z-index: 10; position: relative; }`;
    document.head.appendChild(style);
    const searchToggler = document.getElementById('openSearchBar');
    const searchInput = document.getElementById('chartSearchInput');
    const resultsBox = document.getElementById('chartSearchResults');
    let lastQuery = '';
    function openSearch() {
        searchInput.classList.remove('d-none');
        searchInput.focus();
        resultsBox.classList.remove('d-none');
        triggerChartSearch();
    }
    function closeSearch() {
        searchInput.value = '';
        searchInput.classList.add('d-none');
        resultsBox.classList.add('d-none');
        resultsBox.innerHTML = '';
    }
    function triggerChartSearch() {
        const q = searchInput.value.trim();
        fetch(`/admin/advanced-statistiques/search_charts.php?q=` + encodeURIComponent(q))
            .then(r => r.json())
            .then(data => {
                if (Array.isArray(data.results) && data.results.length > 0) {
                    resultsBox.innerHTML = data.results.map(item => {
                        let statKey = '';
                        if (item.id === 'dashboardCardTotalPacks') statKey = 'packs';
                        if (item.id === 'dashboardCardTotalUtilisateurs') statKey = 'users';
                        if (item.id === 'dashboardCardMostSoldPack') statKey = 'mostSoldPack';
                        if (item.id === 'dashboardCardAvgPrice') statKey = 'avgPrice';
                        return `<div class='dropdown-item' data-chart-id='\${item.id}'\${statKey ? ` data-stat-key='\${statKey}'` : ''}>\${item.name}</div>`;
                    }).join('');
                } else {
                    resultsBox.innerHTML = \"<div class='dropdown-item text-muted'>Aucun graphique trouvé</div>\";
                }
                resultsBox.classList.remove('d-none');
            });
    }
    searchToggler.addEventListener('click', openSearch);
    document.addEventListener('keydown', function(e) {
        if ((e.ctrlKey && e.key === '/') || (e.ctrlKey && e.key === '÷')) {
            openSearch();
            e.preventDefault();
        } else if (e.key === 'Escape') {
            closeSearch();
        }
    });
    searchInput.addEventListener('input', function() {
        lastQuery = searchInput.value.trim();
        triggerChartSearch();
    });
    resultsBox.addEventListener('mousedown', function(e) {
        if (e.target.classList.contains('dropdown-item')) {
            searchInput.value = e.target.textContent;
            resultsBox.innerHTML = '';
            resultsBox.classList.add('d-none');
            // Scroll to chart and highlight
            const chartId = e.target.getAttribute('data-chart-id');
            const statKey = e.target.getAttribute('data-stat-key');
            if (statKey) {
                // For dynamic stat panels (cards)
                renderStatPanel(statKey);
                setTimeout(() => {
                    const panelElem = document.getElementById('dynamicStatPanel');
                    if (panelElem) {
                        panelElem.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        panelElem.classList.add('chart-highlight');
                        setTimeout(() => panelElem.classList.remove('chart-highlight'), 1500);
                    }
                }, 350); // allow panel to render
            } else if (chartId) {
                const chartElem = document.getElementById(chartId);
                if (chartElem) {
                    chartElem.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    chartElem.classList.add('chart-highlight');
                    setTimeout(() => chartElem.classList.remove('chart-highlight'), 1500);
                }
            }
        }
    });
})();
</script>
</a>
                                    
                                </div>
                            </div>
                        </div>
                        <script>
document.addEventListener('DOMContentLoaded', function() {
  const trigger = document.getElementById('admin-notification-search-bar-trigger');
  const dropdown = document.getElementById('admin-notification-search-dropdown');
  const input = document.getElementById('admin-notification-search-input-navbar');
  const form = document.getElementById('demande-pack-search-form');
  let isOpen = false;
  let debounceTimer = null;
  // Initialize flatpickr for date inputs
  if (typeof flatpickr !== 'undefined') {
    document.querySelectorAll('.flatpickr-date').forEach(elem => {
      flatpickr(elem, {
        dateFormat: \"Y-m-d\",
        allowInput: true
      });
    });
  }
  function openDropdown() {
    dropdown.style.display = 'block';
    setTimeout(() => { input && input.focus(); }, 50);
    isOpen = true;
  }
  function closeDropdown() {
    dropdown.style.display = 'none';
    isOpen = false;
  }

  function performSearch() {
    const formData = new FormData(form);
    const searchParams = new URLSearchParams();

    formData.forEach((value, key) => {
      if (value) searchParams.append(key, value);
    });

    const url = form.action + '?' + searchParams.toString();

    fetch(url, {
      headers: { 'X-Requested-With': 'XMLHttpRequest' }
    })
    .then(response => response.text())
    .then(html => {
      document.getElementById('demande-pack-table-body').innerHTML = html;
    })
    .catch(error => {
      console.error('Error:', error);
      Swal.fire({
        title: 'Erreur',
        text: 'Une erreur est survenue lors de la recherche',
        icon: 'error'
      });
    });
  }

  // Event Listeners
  trigger.addEventListener('click', function(e) {
    e.preventDefault();
    if (!isOpen) openDropdown();
    else closeDropdown();
  });

  document.addEventListener('keydown', function(e) {
    if ((e.ctrlKey && e.key === '/') || (e.ctrlKey && e.key === '÷')) {
      openDropdown();
      e.preventDefault();
    }
    if (e.key === 'Escape' && isOpen) {
      closeDropdown();
    }
    if (e.key === 'Enter' && isOpen) {
      performSearch();
    }
  });

  document.addEventListener('mousedown', function(e) {
    if (isOpen && !dropdown.contains(e.target) && !trigger.contains(e.target)) {
      closeDropdown();
    }
  });

  // Handle form inputs
  form.querySelectorAll('input, select').forEach(element => {
    element.addEventListener('change', () => {
      if (debounceTimer) clearTimeout(debounceTimer);
      debounceTimer = setTimeout(performSearch, 400);
    });
  });

  input.addEventListener('input', () => {
    if (debounceTimer) clearTimeout(debounceTimer);
    debounceTimer = setTimeout(performSearch, 400);
  });

  form.addEventListener('submit', function(e) {
    e.preventDefault();
    performSearch();
  });
})();
                        </script>
                        <!-- /Search -->
                    <!-- END: Advanced Statistiques Searchbar -->

                        <!-- BEGIN: Customize Pack Navbar Section -->
                        <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
                            <!-- Language -->
                            <li class=\"nav-item dropdown-language dropdown me-2 me-xl-0\">
                                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                                    <i class=\"fi fi-us fis rounded-circle me-1 fs-3\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                    <li>
                                        <a class=\"dropdown-item\" href=\"javascript:void(0);\" data-language=\"fr\">
                                            <i class=\"fi fi-fr fis rounded-circle me-1 fs-3\"></i>
                                            <span class=\"align-middle\">Français</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"javascript:void(0);\" data-language=\"en\">
                                            <i class=\"fi fi-us fis rounded-circle me-1 fs-3\"></i>
                                            <span class=\"align-middle\">Anglais</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"javascript:void(0);\" data-language=\"de\">
                                            <i class=\"fi fi-de fis rounded-circle me-1 fs-3\"></i>
                                            <span class=\"align-middle\">Allemand</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"javascript:void(0);\" data-language=\"pt\">
                                            <i class=\"fi fi-pt fis rounded-circle me-1 fs-3\"></i>
                                            <span class=\"align-middle\">Portugais</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ Language -->

                            <!-- Style Switcher -->
                            <li class=\"nav-item me-2 me-xl-0\">
                                <a class=\"nav-link style-switcher-toggle hide-arrow\" href=\"javascript:void(0);\">
                                    <i class=\"ti ti-md\"></i>
                                </a>
                            </li>
                            <!--/ Style Switcher -->

                            <!-- Quick links  -->
                            <li class=\"nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0\">
                                <a
                                    class=\"nav-link dropdown-toggle hide-arrow\"
                                    href=\"javascript:void(0);\"
                                    data-bs-toggle=\"dropdown\"
                                    data-bs-auto-close=\"outside\"
                                    aria-expanded=\"false\">
                                    <i class=\"ti ti-layout-grid-add fs-4\"></i>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-end py-0\">
                                    <div class=\"dropdown-menu-header border-bottom\">
                                        <div class=\"dropdown-header d-flex align-items-center py-3\">
                                            <h5 class=\"text-body mb-0 me-auto\">Shortcuts</h5>
                                            <a
                                                href=\"javascript:void(0)\"
                                                class=\"dropdown-shortcuts-add text-body\"
                                                data-bs-toggle=\"tooltip\"
                                                data-bs-placement=\"top\"
                                                title=\"Add shortcuts\"
                                                ><i class=\"ti ti-sm ti-apps\"></i
                                            ></a>
                                        </div>
                                    </div>
                                    <div class=\"dropdown-shortcuts-list scrollable-container\">
                                        <div class=\"row row-bordered overflow-visible g-0\">
                                            <div class=\"dropdown-shortcuts-item col\">
                                                <span class=\"dropdown-shortcuts-icon rounded-circle mb-2\">
                                                    <i class=\"ti ti-shopping-cart fs-4\"></i>
                                                </span>
                                                <a href=\"";
        // line 850
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_advanced_statistiques_demande_packs");
        yield "\" class=\"stretched-link\">Liste Demande Pack</a>
                                                <small class=\"text-muted mb-0\">Liste des demandes de packs</small>
                                            </div>
                                            <div class=\"dropdown-shortcuts-item col\">
                                                <span class=\"dropdown-shortcuts-icon rounded-circle mb-2\">
                                                    <i class=\"ti ti-chart-bar fs-4\"></i>
                                                </span>
                                                <a href=\"";
        // line 857
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_advanced_statistiques_index");
        yield "\" class=\"stretched-link\">Advanced Statistiques</a>
                                                <small class=\"text-muted mb-0\">advanced statistiques</small>
                                            </div>
                                        </div>
                                        <div class=\"row row-bordered overflow-visible g-0\">
                                            <div class=\"dropdown-shortcuts-item col\"></div>
                                            <div class=\"dropdown-shortcuts-item col\">
                                                <span class=\"dropdown-shortcuts-icon rounded-circle mb-2\">
                                                    <i class=\"ti ti-bell notification-bell-big fs-4\"></i>
                                                </span>
                                                <a href=\"";
        // line 867
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_notifications");
        yield "\" class=\"stretched-link\">Notifications</a>
                                                <small class=\"text-muted mb-0\">Notifications</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- Quick links -->

                            <!-- Notification -->
                            <li class=\"nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1\">
                                <a
                                    class=\"nav-link dropdown-toggle hide-arrow\"
                                    href=\"javascript:void(0);\"
                                    data-bs-toggle=\"dropdown\"
                                    data-bs-auto-close=\"outside\"
                                    aria-expanded=\"false\">
                                    <i class=\"ti ti-bell notification-bell-big fs-4\"></i>
                                    <span id=\"unreadCountBadge\" class=\"badge bg-danger rounded-pill badge-notifications\">0</span>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                    <li class=\"dropdown-menu-header border-bottom\">
                                        <div class=\"dropdown-header d-flex align-items-center py-3\">
                                            <h5 class=\"text-body mb-0 me-auto\">Notifications</h5>
                                            <a
                                                href=\"javascript:void(0)\"
                                                class=\"dropdown-notifications-all text-body\"
                                                data-bs-toggle=\"tooltip\"
                                                data-bs-placement=\"top\"
                                                title=\"Marquer tout comme lu\"
                                                ><i class=\"ti ti-mail-opened fs-4\"></i
                                            ></a>
                                        </div>
                                    </li>
                                    <li class=\"dropdown-notifications-list scrollable-container\" style=\"max-height: 320px; overflow-y: auto;\">
                                        <ul class=\"list-group list-group-flush\" style=\"max-height: 320px; overflow-y: auto;\">
                                            ";
        // line 903
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["latestNotifications"]) || array_key_exists("latestNotifications", $context) ? $context["latestNotifications"] : (function () { throw new RuntimeError('Variable "latestNotifications" does not exist.', 903, $this->source); })()), 0, 4));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 904
            yield "                                                <li class=\"list-group-item list-group-item-action dropdown-notifications-item p-0\">
                                                    <a href=\"";
            // line 905
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customize_pack_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "demandePack", [], "any", false, false, false, 905), "id", [], "any", false, false, false, 905)]), "html", null, true);
            yield "\" class=\"d-flex align-items-stretch text-decoration-none text-dark w-100 p-3\" style=\"cursor:pointer;\">
                                                        <div class=\"flex-shrink-0 me-3\">
                                                            <div class=\"avatar\">
                                                                <span class=\"avatar-initial rounded-circle bg-label-info\"><i class=\"ti ti-bell notification-bell-big fs-4\"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class=\"flex-grow-1\">
                                                            <h6 class=\"mb-1\">";
            // line 912
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "titre", [], "any", true, true, false, 912)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "titre", [], "any", false, false, false, 912), "Notification")) : ("Notification")), "html", null, true);
            yield "</h6>
                                                            <p class=\"mb-0\" title=\"";
            // line 913
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 913)), "html", null, true);
            yield "\">
                                                                ";
            // line 914
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "summary", [], "any", true, true, false, 914) && CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "summary", [], "any", false, false, false, 914))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "summary", [], "any", false, false, false, 914), "html", null, true)) : ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 914))) > 80)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 914)), 0, 80) . "…"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 914)), "html", null, true)))));
            yield "
                                                            </p>
                                                            <small class=\"text-muted\">";
            // line 916
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "dateCreation", [], "any", false, false, false, 916)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "dateCreation", [], "any", false, false, false, 916), "d/m/Y H:i"), "html", null, true)) : (""));
            yield "</small>
                                                        </div>
                                                        <div class=\"flex-shrink-0 dropdown-notifications-actions align-self-center\">
                                                            <span class=\"badge badge-dot\"></span>
                                                        </div>
                                                    </a>
                                                </li>
                                            ";
            $context['_iterated'] = true;
        }
        // line 923
        if (!$context['_iterated']) {
            // line 924
            yield "                                                <li class=\"list-group-item text-center text-muted\">No notifications</li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['notification'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 926
        yield "                                        </ul>
                                    </li>
                                    <li class=\"dropdown-menu-footer border-top\">
                                        <a
                                            href=\"javascript:void(0);\"
                                            class=\"dropdown-item d-flex justify-content-center text-primary p-2 h-px-40 mb-1 align-items-center\">
                                            View all notifications
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ Notification -->

                            <!-- User -->
                            <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\">
                                    <div class=\"avatar avatar-online\">
                                        <img src=\"";
        // line 943
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatars/1.png"), "html", null, true);
        yield "\" alt class=\"h-auto rounded-circle\">
                                    </div>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                    <li>
                                        <a class=\"dropdown-item\" href=\"#\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 me-3\">
                                                    <div class=\"avatar avatar-online\">
                                                        <img src=\"";
        // line 952
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatars/1.png"), "html", null, true);
        yield "\" alt class=\"h-auto rounded-circle\">
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <span class=\"fw-semibold d-block\">Admin</span>
                                                    <small class=\"text-muted\">Administrateur</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class=\"dropdown-divider\"></div>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"#\">
                                            <i class=\"ti ti-user-check me-2 ti-sm\"></i>
                                            <span class=\"align-middle\">Mon profil</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"#\">
                                            <i class=\"ti ti-settings me-2 ti-sm\"></i>
                                            <span class=\"align-middle\">Paramètres</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                        <!-- END: Customize Pack Navbar Section -->
                    </div>
                </nav>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y\">
                        <!-- Page Title -->
                        <div class=\"row mb-4\">
                            <div class=\"col-12\">
                                <div class=\"dashboard-card p-4\" data-aos=\"fade-up\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div>
                                            <h3 class=\"mb-1\">Statistiques Avancées 📊</h3>
                                            <p class=\"text-muted mb-0\">Analyse détaillée des performances de votre entreprise</p>
                                        </div>
                                        <div class=\"d-flex gap-3 mt-6\" style=\"margin-top: 10rem !important;\">
    <!-- Spacer to prevent overlap -->

                                            <a href=\"";
        // line 1002
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_advanced_statistiques_admin_advanced_statistiques_download_pdf");
        yield "\" class=\"btn btn-primary d-flex align-items-center gap-2\" target=\"_blank\">
    <i class=\"ri-download-cloud-2-line\"></i> Télécharger Rapport
</a>
                                            <button class=\"btn btn-light\" id=\"refreshStats\">
                                                <i class=\"ri-refresh-line\"></i>
                                            </button>
                                            <a href=\"";
        // line 1008
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_advanced_statistiques_demande_packs");
        yield "\" class=\"btn btn-gradient-primary d-flex align-items-center gap-2\" style=\"background: linear-gradient(90deg, #7367F0 0%, #A9B6FF 100%); color: #fff; border: none; box-shadow: 0 4px 12px rgba(115,103,240,0.15); transition: transform 0.2s;\">
    <i class=\"ri-rocket-2-line fs-4\"></i> Demander un Pack
</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Chart Search Bar -->
                        <input type=\"text\" id=\"chartSearchInput\" class=\"form-control ms-2 d-none\" placeholder=\"Rechercher un graphique... (Ctrl+/)\" autocomplete=\"off\" style=\"width: 260px; position: absolute; top: 40px; left: 0; z-index: 1050;\" />
                        <div id=\"chartSearchResults\" class=\"dropdown-menu show d-none\" style=\"position: absolute; top: 70px; left: 0; width: 260px; z-index: 1060; max-height: 250px; overflow-y: auto;\"></div>
                        <button id=\"openSearchBar\" class=\"btn btn-outline-primary position-absolute\" style=\"top:40px; left:270px; z-index:1061;\">🔍</button>

                        <!-- Key Metrics -->
                        <div class=\"row mb-4\">
                            <!-- Total Packs -->
                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card stat-card bg-primary bg-opacity-10 cursor-pointer\" id=\"dashboardCardTotalPacks\" onclick=\"showAdvancedStatDetails('packs')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Total Packs</h6>
                                            <h2 class=\"mb-0\" id=\"totalPacks\">";
        // line 1030
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packStats"]) || array_key_exists("packStats", $context) ? $context["packStats"] : (function () { throw new RuntimeError('Variable "packStats" does not exist.', 1030, $this->source); })()), "total_packs", [], "any", false, false, false, 1030), "html", null, true);
        yield "</h2>
                                            <small class=\"text-success d-flex align-items-center mt-2\">
                                                <i class=\"ri-arrow-up-line me-1\"></i> +";
        // line 1032
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packStats"]) || array_key_exists("packStats", $context) ? $context["packStats"] : (function () { throw new RuntimeError('Variable "packStats" does not exist.', 1032, $this->source); })()), "growth_rate", [], "any", false, false, false, 1032), "html", null, true);
        yield "%
                                            </small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-package-line text-primary\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-primary\" style=\"width: ";
        // line 1040
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packStats"]) || array_key_exists("packStats", $context) ? $context["packStats"] : (function () { throw new RuntimeError('Variable "packStats" does not exist.', 1040, $this->source); })()), "growth_rate", [], "any", false, false, false, 1040), "html", null, true);
        yield "%\"></div>
                                    </div>
                                </div>
                                <!-- Dynamic Stat Panel (in-page, not modal) -->
<div style=\"width:80vw;position:relative\">
  <div id=\"dynamicStatPanel\" class=\"my-4 w-100\" style=\"width:100vw;\">
    <!-- Stat panel content will be injected here dynamically -->
  </div>
</div>
<script>
    // Fetch stat data via AJAX and update the panel
    function renderStatPanel(statKey) {
        fetch(`/admin/advanced-statistiques/stat-data/\${statKey}`)
            .then(response => response.json())
            .then(stat => {
                let title, icon, value, growth, desc, chartLabel, chartData;
                if (statKey === 'packs') {
                    title = 'Total Packs';
                    icon = 'ri-package-line text-primary';
                    value = stat.total_packs;
                    growth = '+' + stat.growth_rate + '%';
                    chartLabel = 'Packs créés';
                    chartData = stat.chart_data;
                } else if (statKey === 'users') {
                    title = 'Total Utilisateurs';
                    icon = 'ri-user-line text-success';
                    value = stat.total_users;
                    growth = '+' + stat.growth_rate + '%';
                    chartLabel = 'Nouveaux utilisateurs';
                    chartData = stat.chart_data;
                } else if (statKey === 'mostSoldPack') {
                    title = 'Pack le Plus Vendu';
                    icon = 'ri-award-line text-warning';
                    value = stat.total_sales;
                    growth = '';
                    desc = stat.description;
                    chartLabel = 'Ventes';
                    chartData = stat.chart_data;
                } else if (statKey === 'avgPrice') {
                    title = 'Prix Moyen des Packs';
                    icon = 'ri-money-euro-circle-line text-info';
                    value = '€' + stat.averagePackPrice;
                    growth = '';
                    chartLabel = 'Prix moyen';
                    chartData = stat.chart_data || [];
                }

                let growthHtml = growth ? `<span class=\"badge bg-success ms-2\">\${growth}</span>` : '';
                let descHtml = desc ? `<small class='text-muted d-block mt-2'>\${desc}</small>` : '';
                document.getElementById('dynamicStatPanel').innerHTML = `
                    <div class='dashboard-card p-4 mb-4 w-100' style=\"width:100%;\">
                        <div class='d-flex align-items-center mb-3'>
                            <i class='\${icon} fs-2 me-2'></i>
                            <h4 class='mb-0'>\${title}</h4>
                        </div>
                        <div class='d-flex align-items-center mb-3'>
                            <h2 class='mb-0'>\${value}</h2>
                            \${growthHtml}
                        </div>
                        \${descHtml}
                        <div style='height: 220px;'>
                            <canvas id='statPanelChart'></canvas>
                        </div>
                    </div>
                `;
                if (window.statPanelChartInstance) window.statPanelChartInstance.destroy();
                const ctx = document.getElementById('statPanelChart').getContext('2d');
                window.statPanelChartInstance = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: chartData.map(item => item.label),
                        datasets: [{
                            label: chartLabel,
                            data: chartData.map(item => item.value),
                            backgroundColor: 'rgba(115,103,240,0.08)',
                            borderColor: '#7367F0',
                            borderWidth: 2,
                            tension: 0.4,
                            pointRadius: 3
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: { legend: { display: false } },
                        scales: {
                            y: { beginAtZero: true },
                            x: { title: { display: false } }
                        }
                    }
                });
            });
    }
    // Card click handlers
    document.addEventListener('DOMContentLoaded', function() {
        renderStatPanel('packs'); // Default
        document.querySelectorAll('.stat-card.cursor-pointer').forEach(card => {
            card.addEventListener('click', function() {
                if (this.onclick) {
                    // If already handled by inline onclick, skip
                    return;
                }
                let type = this.getAttribute('onclick')?.match(/showAdvancedStatDetails\\('(.+?)'\\)/);
                type = type ? type[1] : this.dataset.statType;
                renderStatPanel(type);
            });
        });
        // Also support inline onclick attributes
        window.showAdvancedStatDetails = renderStatPanel;
    });
</script>
<!-- Chart.js CDN -->
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

                            </div>

                            <!-- Total Users -->
                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"dashboard-card stat-card bg-success bg-opacity-10 cursor-pointer\" id=\"dashboardCardTotalUtilisateurs\" onclick=\"showAdvancedStatDetails('users')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Total Utilisateurs</h6>
                                            <h2 class=\"mb-0\">";
        // line 1162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userStats"]) || array_key_exists("userStats", $context) ? $context["userStats"] : (function () { throw new RuntimeError('Variable "userStats" does not exist.', 1162, $this->source); })()), "total_users", [], "any", false, false, false, 1162), "html", null, true);
        yield "</h2>
                                            <small class=\"text-success d-flex align-items-center mt-2\">
                                                <i class=\"ri-arrow-up-line me-1\"></i> +";
        // line 1164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userStats"]) || array_key_exists("userStats", $context) ? $context["userStats"] : (function () { throw new RuntimeError('Variable "userStats" does not exist.', 1164, $this->source); })()), "growth_rate", [], "any", false, false, false, 1164), "html", null, true);
        yield "%
                                            </small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-user-line text-success\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-success\" style=\"width: ";
        // line 1172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userStats"]) || array_key_exists("userStats", $context) ? $context["userStats"] : (function () { throw new RuntimeError('Variable "userStats" does not exist.', 1172, $this->source); })()), "growth_rate", [], "any", false, false, false, 1172), "html", null, true);
        yield "%\"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Most Sold Pack -->
                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                                <div class=\"dashboard-card stat-card bg-warning bg-opacity-10 cursor-pointer\" id=\"dashboardCardMostSoldPack\" onclick=\"showAdvancedStatDetails('mostSoldPack')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Pack le Plus Vendu</h6>
                                            <h2 class=\"mb-0\">";
        // line 1183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mostSoldPack"]) || array_key_exists("mostSoldPack", $context) ? $context["mostSoldPack"] : (function () { throw new RuntimeError('Variable "mostSoldPack" does not exist.', 1183, $this->source); })()), "total_sales", [], "any", false, false, false, 1183), "html", null, true);
        yield "</h2>
                                            <small class=\"text-muted d-flex align-items-center mt-2\">
                                                ";
        // line 1185
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["mostSoldPack"]) || array_key_exists("mostSoldPack", $context) ? $context["mostSoldPack"] : (function () { throw new RuntimeError('Variable "mostSoldPack" does not exist.', 1185, $this->source); })()), "description", [], "any", false, false, false, 1185)) > 20)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["mostSoldPack"]) || array_key_exists("mostSoldPack", $context) ? $context["mostSoldPack"] : (function () { throw new RuntimeError('Variable "mostSoldPack" does not exist.', 1185, $this->source); })()), "description", [], "any", false, false, false, 1185), 0, 20) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mostSoldPack"]) || array_key_exists("mostSoldPack", $context) ? $context["mostSoldPack"] : (function () { throw new RuntimeError('Variable "mostSoldPack" does not exist.', 1185, $this->source); })()), "description", [], "any", false, false, false, 1185), "html", null, true)));
        yield "
                                            </small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-award-line text-warning fs-2\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-warning\" style=\"width: 65%\"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Average Pack Price -->
                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                                <div class=\"dashboard-card stat-card bg-info bg-opacity-10 cursor-pointer\" id=\"dashboardCardAvgPrice\" onclick=\"showAdvancedStatDetails('avgPrice')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Prix Moyen des Packs</h6>
                                            <h2 class=\"mb-0\">€";
        // line 1204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["averagePackPrice"]) || array_key_exists("averagePackPrice", $context) ? $context["averagePackPrice"] : (function () { throw new RuntimeError('Variable "averagePackPrice" does not exist.', 1204, $this->source); })()), "html", null, true);
        yield "</h2>
                                            <small class=\"text-muted d-flex align-items-center mt-2\">
                                                Basé sur tous les packs
                                            </small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-money-euro-circle-line text-info fs-2\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-info\" style=\"width: 75%\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Charts Row -->
                        <div class=\"row mb-4\">
                            <!-- Reservation Trends -->
                            <div class=\"col-lg-8\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Tendance des Réservations</h5>
                                            <p class=\"text-muted mb-0\">Évolution hebdomadaire des réservations</p>
                                        </div>
                                        <div class=\"btn-group\">
                                            <button class=\"btn btn-outline-primary btn-sm active\">Semaine</button>
                                            <button class=\"btn btn-outline-primary btn-sm\">Mois</button>
                                            <button class=\"btn btn-outline-primary btn-sm\">Année</button>
                                        </div>
                                    </div>
                                    <div class=\"chart-container\" style=\"height: 300px;\">
                                        <canvas id=\"reservationTrendsChart\"></canvas>
                                    </div>
                                </div>
                            </div>

                            <!-- Pack Type Distribution -->
                            <div class=\"col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Types de Packs</h5>
                                            <p class=\"text-muted mb-0\">Distribution par catégorie</p>
                                        </div>
                                        <button class=\"btn btn-light btn-sm\">
                                            <i class=\"ri-more-2-fill fs-4\"></i>
                                        </button>
                                    </div>
                                    <div class=\"chart-container\" style=\"height: 300px;\">
                                        <canvas id=\"packTypeChart\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Active vs Inactive Packs -->
                        <div class=\"row mb-4\">
                            <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Packs Actifs vs Inactifs</h5>
                                            <p class=\"text-muted mb-0\">Statut actuel des packs</p>
                                        </div>
                                    </div>
                                    <div class=\"d-flex justify-content-center\">
                                        <div class=\"chart-container\" style=\"height: 250px; width: 250px;\">
                                            <canvas id=\"activeInactiveChart\"></canvas>
                                        </div>
                                    </div>
                                    <div class=\"d-flex justify-content-around mt-4\">
                                        <div class=\"text-center\">
                                            <h5 class=\"mb-0\">";
        // line 1278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeInactivePacks"]) || array_key_exists("activeInactivePacks", $context) ? $context["activeInactivePacks"] : (function () { throw new RuntimeError('Variable "activeInactivePacks" does not exist.', 1278, $this->source); })()), "active_packs", [], "any", false, false, false, 1278), "html", null, true);
        yield "</h5>
                                            <p class=\"text-muted\">Packs Actifs</p>
                                        </div>
                                        <div class=\"text-center\">
                                            <h5 class=\"mb-0\">";
        // line 1282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeInactivePacks"]) || array_key_exists("activeInactivePacks", $context) ? $context["activeInactivePacks"] : (function () { throw new RuntimeError('Variable "activeInactivePacks" does not exist.', 1282, $this->source); })()), "inactive_packs", [], "any", false, false, false, 1282), "html", null, true);
        yield "</h5>
                                            <p class=\"text-muted\">Packs Inactifs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Location Reservations -->
                            <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Réservations par Lieu</h5>
                                            <p class=\"text-muted mb-0\">Distribution géographique</p>
                                        </div>
                                    </div>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover\">
                                            <thead>
                                                <tr>
                                                    <th>Lieu</th>
                                                    <th>Réservations</th>
                                                    <th>Pourcentage</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
        // line 1308
        $context["totalReservations"] = 0;
        // line 1309
        yield "                                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locationReservations"]) || array_key_exists("locationReservations", $context) ? $context["locationReservations"] : (function () { throw new RuntimeError('Variable "locationReservations" does not exist.', 1309, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 1310
            yield "                                                    ";
            $context["totalReservations"] = ((isset($context["totalReservations"]) || array_key_exists("totalReservations", $context) ? $context["totalReservations"] : (function () { throw new RuntimeError('Variable "totalReservations" does not exist.', 1310, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["location"], "reservation_count", [], "any", false, false, false, 1310));
            // line 1311
            yield "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1312
        yield "                                                
                                                ";
        // line 1313
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locationReservations"]) || array_key_exists("locationReservations", $context) ? $context["locationReservations"] : (function () { throw new RuntimeError('Variable "locationReservations" does not exist.', 1313, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 1314
            yield "                                                    <tr>
                                                        <td>";
            // line 1315
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location", [], "any", false, false, false, 1315), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 1316
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "reservation_count", [], "any", false, false, false, 1316), "html", null, true);
            yield "</td>
                                                        <td>
                                                            ";
            // line 1318
            $context["percentage"] = ((((isset($context["totalReservations"]) || array_key_exists("totalReservations", $context) ? $context["totalReservations"] : (function () { throw new RuntimeError('Variable "totalReservations" does not exist.', 1318, $this->source); })()) > 0)) ? (Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["location"], "reservation_count", [], "any", false, false, false, 1318) / (isset($context["totalReservations"]) || array_key_exists("totalReservations", $context) ? $context["totalReservations"] : (function () { throw new RuntimeError('Variable "totalReservations" does not exist.', 1318, $this->source); })())) * 100))) : (0));
            // line 1319
            yield "                                                            <div class=\"d-flex align-items-center\">
                                                                <div class=\"progress flex-grow-1 me-2\" style=\"height: 6px;\">
                                                                    <div class=\"progress-bar bg-primary\" style=\"width: ";
            // line 1321
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 1321, $this->source); })()), "html", null, true);
            yield "%\"></div>
                                                                </div>
                                                                <span>";
            // line 1323
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 1323, $this->source); })()), "html", null, true);
            yield "%</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1328
        yield "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Monthly Revenue Chart -->
                        <div class=\"row mb-4\">
                            <div class=\"col-12\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Revenus Mensuels</h5>
                                            <p class=\"text-muted mb-0\">Évolution des revenus sur l'année ";
        // line 1342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 1342, $this->source); })()), "monthly_data", [], "any", false, false, false, 1342), 0, [], "array", false, false, false, 1342), "month_name", [], "any", false, false, false, 1342), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 1342, $this->source); })()), "monthly_data", [], "any", false, false, false, 1342), 11, [], "array", false, false, false, 1342), "month_name", [], "any", false, false, false, 1342), "html", null, true);
        yield "</p>
                                        </div>
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"me-4\">
                                                <h6 class=\"mb-0\">Revenu Total</h6>
                                                <h4 class=\"mb-0\">€";
        // line 1347
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 1347, $this->source); })()), "total_revenue", [], "any", false, false, false, 1347), 2, ",", " "), "html", null, true);
        yield "</h4>
                                            </div>
                                            <div>
                                                <span class=\"badge bg-";
        // line 1350
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 1350, $this->source); })()), "year_over_year_growth", [], "any", false, false, false, 1350) > 0)) ? ("success") : ("danger"));
        yield " p-2\">
                                                    <i class=\"ri-";
        // line 1351
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 1351, $this->source); })()), "year_over_year_growth", [], "any", false, false, false, 1351) > 0)) ? ("arrow-up") : ("arrow-down"));
        yield "-line me-1\"></i>
                                                    ";
        // line 1352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 1352, $this->source); })()), "year_over_year_growth", [], "any", false, false, false, 1352), "html", null, true);
        yield "% vs année précédente
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"chart-container\" style=\"height: 350px;\">
                                        <canvas id=\"monthlyRevenueChart\"></canvas>
                                    </div>
                                    <div class=\"row mt-4\">
                                        <div class=\"col-md-4 text-center\">
                                            <h6 class=\"text-muted\">Ventes Totales</h6>
                                            <h4>";
        // line 1363
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 1363, $this->source); })()), "total_sales", [], "any", false, false, false, 1363), "html", null, true);
        yield "</h4>
                                        </div>
                                        <div class=\"col-md-4 text-center\">
                                            <h6 class=\"text-muted\">Revenu Moyen par Vente</h6>
                                            <h4>€";
        // line 1367
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 1367, $this->source); })()), "avg_revenue_per_sale", [], "any", false, false, false, 1367), 2, ",", " "), "html", null, true);
        yield "</h4>
                                        </div>
                                        <div class=\"col-md-4 text-center\">
                                            <h6 class=\"text-muted\">Croissance Annuelle</h6>
                                            <h4 class=\"text-";
        // line 1371
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 1371, $this->source); })()), "year_over_year_growth", [], "any", false, false, false, 1371) > 0)) ? ("success") : ("danger"));
        yield "\">
                                                ";
        // line 1372
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 1372, $this->source); })()), "year_over_year_growth", [], "any", false, false, false, 1372) > 0)) ? ("+") : (""));
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 1372, $this->source); })()), "year_over_year_growth", [], "any", false, false, false, 1372), "html", null, true);
        yield "%
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Customer Satisfaction -->
                        <div class=\"row mb-4\">
                            <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Satisfaction Client</h5>
                                            <p class=\"text-muted mb-0\">Basé sur ";
        // line 1387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerSatisfaction"]) || array_key_exists("customerSatisfaction", $context) ? $context["customerSatisfaction"] : (function () { throw new RuntimeError('Variable "customerSatisfaction" does not exist.', 1387, $this->source); })()), "total_reviews", [], "any", false, false, false, 1387), "html", null, true);
        yield " avis</p>
                                        </div>
                                        <div>
                                            <h2 class=\"mb-0\">";
        // line 1390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerSatisfaction"]) || array_key_exists("customerSatisfaction", $context) ? $context["customerSatisfaction"] : (function () { throw new RuntimeError('Variable "customerSatisfaction" does not exist.', 1390, $this->source); })()), "avg_rating", [], "any", false, false, false, 1390), "html", null, true);
        yield "/5</h2>
                                        </div>
                                    </div>
                                    <div class=\"rating-bars mb-4\">
                                        ";
        // line 1394
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(5, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 1395
            yield "                                            <div class=\"d-flex align-items-center mb-2\">
                                                <div class=\"me-2\" style=\"width: 30px;\">";
            // line 1396
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield " ★</div>
                                                <div class=\"progress satisfaction-bar flex-grow-1 me-2\">
                                                    ";
            // line 1398
            $context["percentage"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerSatisfaction"]) || array_key_exists("customerSatisfaction", $context) ? $context["customerSatisfaction"] : (function () { throw new RuntimeError('Variable "customerSatisfaction" does not exist.', 1398, $this->source); })()), "total_reviews", [], "any", false, false, false, 1398) > 0)) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerSatisfaction"]) || array_key_exists("customerSatisfaction", $context) ? $context["customerSatisfaction"] : (function () { throw new RuntimeError('Variable "customerSatisfaction" does not exist.', 1398, $this->source); })()), "rating_distribution", [], "any", false, false, false, 1398), $context["i"], [], "array", false, false, false, 1398) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerSatisfaction"]) || array_key_exists("customerSatisfaction", $context) ? $context["customerSatisfaction"] : (function () { throw new RuntimeError('Variable "customerSatisfaction" does not exist.', 1398, $this->source); })()), "total_reviews", [], "any", false, false, false, 1398)) * 100)) : (0));
            // line 1399
            yield "                                                    <div class=\"progress-bar bg-";
            yield ((($context["i"] >= 4)) ? ("success") : (((($context["i"] == 3)) ? ("warning") : ("danger"))));
            yield "\" style=\"width: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 1399, $this->source); })()), "html", null, true);
            yield "%\"></div>
                                                </div>
                                                <div style=\"width: 50px;\">";
            // line 1401
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerSatisfaction"]) || array_key_exists("customerSatisfaction", $context) ? $context["customerSatisfaction"] : (function () { throw new RuntimeError('Variable "customerSatisfaction" does not exist.', 1401, $this->source); })()), "rating_distribution", [], "any", false, false, false, 1401), $context["i"], [], "array", false, false, false, 1401), "html", null, true);
            yield "</div>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1404
        yield "                                    </div>
                                    <div class=\"text-center\">
                                        <div class=\"rating-circle mx-auto\">
                                            <svg viewBox=\"0 0 36 36\" class=\"circular-chart\">
                                                <path class=\"circle-bg\" d=\"M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831\"/>
                                                <path class=\"circle\" stroke-dasharray=\"";
        // line 1409
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerSatisfaction"]) || array_key_exists("customerSatisfaction", $context) ? $context["customerSatisfaction"] : (function () { throw new RuntimeError('Variable "customerSatisfaction" does not exist.', 1409, $this->source); })()), "satisfaction_rate", [], "any", false, false, false, 1409), "html", null, true);
        yield ", 100\" d=\"M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831\"/>
                                                <text x=\"18\" y=\"20.35\" class=\"percentage\">";
        // line 1410
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerSatisfaction"]) || array_key_exists("customerSatisfaction", $context) ? $context["customerSatisfaction"] : (function () { throw new RuntimeError('Variable "customerSatisfaction" does not exist.', 1410, $this->source); })()), "satisfaction_rate", [], "any", false, false, false, 1410), "html", null, true);
        yield "%</text>
                                            </svg>
                                        </div>
                                        <p class=\"mt-2\">Taux de Satisfaction</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Tendance de Satisfaction</h5>
                                            <p class=\"text-muted mb-0\">Évolution mensuelle de la satisfaction client</p>
                                        </div>
                                    </div>
                                    <div class=\"chart-container\" style=\"height: 300px;\">
                                        <canvas id=\"satisfactionTrendChart\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Pack Performance Comparison -->
                        <div class=\"row mb-4\">
                            <div class=\"col-12\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Comparaison de Performance des Packs</h5>
                                            <p class=\"text-muted mb-0\">";
        // line 1440
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packPerformanceComparison"]) || array_key_exists("packPerformanceComparison", $context) ? $context["packPerformanceComparison"] : (function () { throw new RuntimeError('Variable "packPerformanceComparison" does not exist.', 1440, $this->source); })()), "current_month", [], "any", false, false, false, 1440), "html", null, true);
        yield " vs ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packPerformanceComparison"]) || array_key_exists("packPerformanceComparison", $context) ? $context["packPerformanceComparison"] : (function () { throw new RuntimeError('Variable "packPerformanceComparison" does not exist.', 1440, $this->source); })()), "previous_month", [], "any", false, false, false, 1440), "html", null, true);
        yield "</p>
                                        </div>
                                    </div>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover\">
                                            <thead>
                                                <tr>
                                                    <th>Pack</th>
                                                    <th>Ventes Actuelles</th>
                                                    <th>Ventes Précédentes</th>
                                                    <th>Croissance</th>
                                                    <th>Revenu Actuel</th>
                                                    <th>Revenu Précédent</th>
                                                    <th>Croissance</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
        // line 1457
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packPerformanceComparison"]) || array_key_exists("packPerformanceComparison", $context) ? $context["packPerformanceComparison"] : (function () { throw new RuntimeError('Variable "packPerformanceComparison" does not exist.', 1457, $this->source); })()), "comparison_data", [], "any", false, false, false, 1457));
        foreach ($context['_seq'] as $context["_key"] => $context["pack"]) {
            // line 1458
            yield "                                                    <tr>
                                                        <td>";
            // line 1459
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "description", [], "any", false, false, false, 1459)) > 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "description", [], "any", false, false, false, 1459), 0, 30) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "description", [], "any", false, false, false, 1459), "html", null, true)));
            yield "</td>
                                                        <td>";
            // line 1460
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "current_month_sales", [], "any", false, false, false, 1460), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 1461
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "previous_month_sales", [], "any", false, false, false, 1461), "html", null, true);
            yield "</td>
                                                        <td>
                                                            <span class=\"badge bg-";
            // line 1463
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "sales_growth", [], "any", false, false, false, 1463) > 0)) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "sales_growth", [], "any", false, false, false, 1463) < 0)) ? ("danger") : ("secondary"))));
            yield "\">
                                                                ";
            // line 1464
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "sales_growth", [], "any", false, false, false, 1464) > 0)) ? ("+") : (""));
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "sales_growth", [], "any", false, false, false, 1464), "html", null, true);
            yield "%
                                                            </span>
                                                        </td>
                                                        <td>€";
            // line 1467
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "current_month_revenue", [], "any", false, false, false, 1467), 2, ",", " "), "html", null, true);
            yield "</td>
                                                        <td>€";
            // line 1468
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "previous_month_revenue", [], "any", false, false, false, 1468), 2, ",", " "), "html", null, true);
            yield "</td>
                                                        <td>
                                                            <span class=\"badge bg-";
            // line 1470
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "revenue_growth", [], "any", false, false, false, 1470) > 0)) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "revenue_growth", [], "any", false, false, false, 1470) < 0)) ? ("danger") : ("secondary"))));
            yield "\">
                                                                ";
            // line 1471
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "revenue_growth", [], "any", false, false, false, 1471) > 0)) ? ("+") : (""));
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "revenue_growth", [], "any", false, false, false, 1471), "html", null, true);
            yield "%
                                                            </span>
                                                        </td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pack'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1476
        yield "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Seasonal Trends -->
                        <div class=\"row mb-4\">
                            <div class=\"col-lg-8\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Tendances Saisonnières</h5>
                                            <p class=\"text-muted mb-0\">Distribution des réservations par saison</p>
                                        </div>
                                    </div>
                                    <div class=\"chart-container\" style=\"height: 300px;\">
                                        <canvas id=\"seasonalTrendsChart\"></canvas>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Distribution Saisonnière</h5>
                                            <p class=\"text-muted mb-0\">Répartition des revenus par saison</p>
                                        </div>
                                    </div>
                                    <div class=\"chart-container\" style=\"height: 300px;\">
                                        <canvas id=\"seasonalDistributionChart\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Top Performing Locations & Conversion Rates -->
                        <div class=\"row mb-4\">
                            <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Lieux les Plus Performants</h5>
                                            <p class=\"text-muted mb-0\">Classement par revenu généré</p>
                                        </div>
                                    </div>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover\">
                                            <thead>
                                                <tr>
                                                    <th>Lieu</th>
                                                    <th>Réservations</th>
                                                    <th>Revenu</th>
                                                    <th>% du Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
        // line 1535
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["topPerformingLocations"]) || array_key_exists("topPerformingLocations", $context) ? $context["topPerformingLocations"] : (function () { throw new RuntimeError('Variable "topPerformingLocations" does not exist.', 1535, $this->source); })()), "locations", [], "any", false, false, false, 1535), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 1536
            yield "                                                    <tr>
                                                        <td>";
            // line 1537
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location", [], "any", false, false, false, 1537), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 1538
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "reservation_count", [], "any", false, false, false, 1538), "html", null, true);
            yield "</td>
                                                        <td>€";
            // line 1539
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "total_revenue", [], "any", false, false, false, 1539), 2, ",", " "), "html", null, true);
            yield "</td>
                                                        <td>
                                                            <div class=\"d-flex align-items-center\">
                                                                <div class=\"progress flex-grow-1 me-2\" style=\"height: 6px;\">
                                                                    <div class=\"progress-bar bg-primary\" style=\"width: ";
            // line 1543
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "revenue_percentage", [], "any", false, false, false, 1543), "html", null, true);
            yield "%\"></div>
                                                                </div>
                                                                <span>";
            // line 1545
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "revenue_percentage", [], "any", false, false, false, 1545), "html", null, true);
            yield "%</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1550
        yield "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Taux de Conversion</h5>
                                            <p class=\"text-muted mb-0\">Efficacité du processus de réservation</p>
                                        </div>
                                    </div>
                                    <div class=\"row mb-4\">
                                        <div class=\"col-md-4 text-center\">
                                            <div class=\"metric-item p-3\">
                                                <h6 class=\"text-muted\">Vues → Réservations</h6>
                                                <h3>";
        // line 1568
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversionRates"]) || array_key_exists("conversionRates", $context) ? $context["conversionRates"] : (function () { throw new RuntimeError('Variable "conversionRates" does not exist.', 1568, $this->source); })()), "view_to_reservation_rate", [], "any", false, false, false, 1568), "html", null, true);
        yield "%</h3>
                                                <small>";
        // line 1569
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversionRates"]) || array_key_exists("conversionRates", $context) ? $context["conversionRates"] : (function () { throw new RuntimeError('Variable "conversionRates" does not exist.', 1569, $this->source); })()), "total_reservations", [], "any", false, false, false, 1569), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversionRates"]) || array_key_exists("conversionRates", $context) ? $context["conversionRates"] : (function () { throw new RuntimeError('Variable "conversionRates" does not exist.', 1569, $this->source); })()), "total_views", [], "any", false, false, false, 1569), "html", null, true);
        yield "</small>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4 text-center\">
                                            <div class=\"metric-item p-3\">
                                                <h6 class=\"text-muted\">Réservations → Confirmations</h6>
                                                <h3>";
        // line 1575
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversionRates"]) || array_key_exists("conversionRates", $context) ? $context["conversionRates"] : (function () { throw new RuntimeError('Variable "conversionRates" does not exist.', 1575, $this->source); })()), "reservation_to_confirmation_rate", [], "any", false, false, false, 1575), "html", null, true);
        yield "%</h3>
                                                <small>";
        // line 1576
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversionRates"]) || array_key_exists("conversionRates", $context) ? $context["conversionRates"] : (function () { throw new RuntimeError('Variable "conversionRates" does not exist.', 1576, $this->source); })()), "confirmed_reservations", [], "any", false, false, false, 1576), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversionRates"]) || array_key_exists("conversionRates", $context) ? $context["conversionRates"] : (function () { throw new RuntimeError('Variable "conversionRates" does not exist.', 1576, $this->source); })()), "total_reservations", [], "any", false, false, false, 1576), "html", null, true);
        yield "</small>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4 text-center\">
                                            <div class=\"metric-item p-3\">
                                                <h6 class=\"text-muted\">Taux Global</h6>
                                                <h3>";
        // line 1582
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversionRates"]) || array_key_exists("conversionRates", $context) ? $context["conversionRates"] : (function () { throw new RuntimeError('Variable "conversionRates" does not exist.', 1582, $this->source); })()), "overall_conversion_rate", [], "any", false, false, false, 1582), "html", null, true);
        yield "%</h3>
                                                <small>";
        // line 1583
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversionRates"]) || array_key_exists("conversionRates", $context) ? $context["conversionRates"] : (function () { throw new RuntimeError('Variable "conversionRates" does not exist.', 1583, $this->source); })()), "confirmed_reservations", [], "any", false, false, false, 1583), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversionRates"]) || array_key_exists("conversionRates", $context) ? $context["conversionRates"] : (function () { throw new RuntimeError('Variable "conversionRates" does not exist.', 1583, $this->source); })()), "total_views", [], "any", false, false, false, 1583), "html", null, true);
        yield "</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"chart-container\" style=\"height: 200px;\">
                                        <canvas id=\"conversionTrendChart\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Client Retention & Pack Category Performance -->
                        <div class=\"row mb-4\">
                            <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Fidélisation Client</h5>
                                            <p class=\"text-muted mb-0\">Analyse de la rétention et fidélité client</p>
                                        </div>
                                    </div>
                                    <div class=\"row mb-4\">
                                        <div class=\"col-md-4 text-center\">
                                            <div class=\"metric-item p-3\">
                                                <h6 class=\"text-muted\">Clients Totaux</h6>
                                                <h3>";
        // line 1608
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["clientRetentionRate"]) || array_key_exists("clientRetentionRate", $context) ? $context["clientRetentionRate"] : (function () { throw new RuntimeError('Variable "clientRetentionRate" does not exist.', 1608, $this->source); })()), "total_clients", [], "any", false, false, false, 1608), "html", null, true);
        yield "</h3>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4 text-center\">
                                            <div class=\"metric-item p-3\">
                                                <h6 class=\"text-muted\">Clients Fidèles</h6>
                                                <h3>";
        // line 1614
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["clientRetentionRate"]) || array_key_exists("clientRetentionRate", $context) ? $context["clientRetentionRate"] : (function () { throw new RuntimeError('Variable "clientRetentionRate" does not exist.', 1614, $this->source); })()), "returning_clients", [], "any", false, false, false, 1614), "html", null, true);
        yield "</h3>
                                                <small>";
        // line 1615
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["clientRetentionRate"]) || array_key_exists("clientRetentionRate", $context) ? $context["clientRetentionRate"] : (function () { throw new RuntimeError('Variable "clientRetentionRate" does not exist.', 1615, $this->source); })()), "retention_rate", [], "any", false, false, false, 1615), "html", null, true);
        yield "% de rétention</small>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4 text-center\">
                                            <div class=\"metric-item p-3\">
                                                <h6 class=\"text-muted\">Réservations/Client</h6>
                                                <h3>";
        // line 1621
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["clientRetentionRate"]) || array_key_exists("clientRetentionRate", $context) ? $context["clientRetentionRate"] : (function () { throw new RuntimeError('Variable "clientRetentionRate" does not exist.', 1621, $this->source); })()), "avg_reservations_per_client", [], "any", false, false, false, 1621), "html", null, true);
        yield "</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"mt-4\">
                                        <h6 class=\"mb-3\">Clients les Plus Fidèles</h6>
                                        <div class=\"table-responsive\">
                                            <table class=\"table table-sm table-hover\">
                                                <thead>
                                                    <tr>
                                                        <th>Client</th>
                                                        <th>Réservations</th>
                                                        <th>Dépenses Totales</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    ";
        // line 1637
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["clientRetentionRate"]) || array_key_exists("clientRetentionRate", $context) ? $context["clientRetentionRate"] : (function () { throw new RuntimeError('Variable "clientRetentionRate" does not exist.', 1637, $this->source); })()), "top_loyal_clients", [], "any", false, false, false, 1637));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1638
            yield "                                                        <tr>
                                                            <td>";
            // line 1639
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "prenom", [], "any", false, false, false, 1639), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nom", [], "any", false, false, false, 1639), "html", null, true);
            yield "</td>
                                                            <td>";
            // line 1640
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "reservation_count", [], "any", false, false, false, 1640), "html", null, true);
            yield "</td>
                                                            <td>€";
            // line 1641
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "total_spent", [], "any", false, false, false, 1641), 2, ",", " "), "html", null, true);
            yield "</td>
                                                        </tr>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1644
        yield "                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Performance par Catégorie</h5>
                                            <p class=\"text-muted mb-0\">Analyse des performances par type d'événement</p>
                                        </div>
                                    </div>
                                    <div class=\"chart-container\" style=\"height: 250px;\">
                                        <canvas id=\"categoryPerformanceChart\"></canvas>
                                    </div>
                                    <div class=\"table-responsive mt-4\">
                                        <table class=\"table table-sm table-hover\">
                                            <thead>
                                                <tr>
                                                    <th>Catégorie</th>
                                                    <th>Packs</th>
                                                    <th>Réservations</th>
                                                    <th>Revenu</th>
                                                    <th>Note Moyenne</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
        // line 1674
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packCategoryPerformance"]) || array_key_exists("packCategoryPerformance", $context) ? $context["packCategoryPerformance"] : (function () { throw new RuntimeError('Variable "packCategoryPerformance" does not exist.', 1674, $this->source); })()), "categories", [], "any", false, false, false, 1674));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 1675
            yield "                                                    <tr>
                                                        <td>";
            // line 1676
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categorie", [], "any", false, false, false, 1676), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 1677
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "pack_count", [], "any", false, false, false, 1677), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 1678
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "reservation_count", [], "any", false, false, false, 1678), "html", null, true);
            yield "</td>
                                                        <td>€";
            // line 1679
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "total_revenue", [], "any", false, false, false, 1679), 2, ",", " "), "html", null, true);
            yield "</td>
                                                        <td>
                                                            <div class=\"d-flex align-items-center\">
                                                                <div class=\"me-2\">";
            // line 1682
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "avg_rating", [], "any", false, false, false, 1682), "html", null, true);
            yield "/5</div>
                                                                <div class=\"progress flex-grow-1\" style=\"height: 6px;\">
                                                                    <div class=\"progress-bar bg-warning\" style=\"width: ";
            // line 1684
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "avg_rating", [], "any", false, false, false, 1684) / 5) * 100), "html", null, true);
            yield "%\"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1690
        yield "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class=\"content-footer footer bg-footer-theme\">
                        <div class=\"container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column\">
                            <div class=\"mb-2 mb-md-0\">
                                2023 Golden Touch
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

        <!-- Overlay -->
        <div class=\"layout-overlay layout-menu-toggle\"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class=\"drag-target\"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <script src=\"";
        // line 1725
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1726
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1727
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1728
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1729
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/node-waves/node-waves.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1730
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/i18n/i18n.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1731
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/typeahead-js/typeahead.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1732
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/menu.js"), "html", null, true);
        yield "\"></script>

    <!-- Vendors JS -->
    <script src=\"";
        // line 1735
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/apex-charts/apexcharts.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1736
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/swiper/swiper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1737
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/datatables-bs5/datatables-bootstrap5.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1738
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/select2/select2.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1739
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/flatpickr/flatpickr.js"), "html", null, true);
        yield "\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js\"></script>

    <!-- Main JS -->
    <script src=\"";
        // line 1746
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>

    <!-- Dynamic Stat Panel JS (updates in-page, not modal) -->
<script>
function showAdvancedStatDetails(type) {
  const stats = {
    packs: {
      title: 'Détails des Packs',
      icon: 'ri-package-line text-primary',
      color: 'primary',
      today: {
        value: 25,
        growth: '+15%'
      },
      thisWeek: {
        value: 142,
        growth: '+22%'
      },
      thisMonth: {
        value: 587,
        growth: '+12.5%'
      },
      thisYear: {
        value: 2845,
        growth: '+18.3%'
      },
      totalSales: ";
        // line 1772
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packStats"]) || array_key_exists("packStats", $context) ? $context["packStats"] : (function () { throw new RuntimeError('Variable "packStats" does not exist.', 1772, $this->source); })()), "total_packs", [], "any", false, false, false, 1772), "html", null, true);
        yield ",
      growthRate: '+";
        // line 1773
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packStats"]) || array_key_exists("packStats", $context) ? $context["packStats"] : (function () { throw new RuntimeError('Variable "packStats" does not exist.', 1773, $this->source); })()), "growth_rate", [], "any", false, false, false, 1773), "html", null, true);
        yield "%'
    },
    users: {
      title: 'Détails des Utilisateurs',
      icon: 'ri-user-line text-success',
      color: 'success',
      today: {
        value: 18,
        growth: '+10%'
      },
      thisWeek: {
        value: 98,
        growth: '+15%'
      },
      thisMonth: {
        value: 412,
        growth: '+8.5%'
      },
      thisYear: {
        value: 1845,
        growth: '+14.3%'
      },
      totalSales: ";
        // line 1795
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userStats"]) || array_key_exists("userStats", $context) ? $context["userStats"] : (function () { throw new RuntimeError('Variable "userStats" does not exist.', 1795, $this->source); })()), "total_users", [], "any", false, false, false, 1795), "html", null, true);
        yield ",
      growthRate: '+";
        // line 1796
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userStats"]) || array_key_exists("userStats", $context) ? $context["userStats"] : (function () { throw new RuntimeError('Variable "userStats" does not exist.', 1796, $this->source); })()), "growth_rate", [], "any", false, false, false, 1796), "html", null, true);
        yield "%'
    },
    mostSoldPack: {
      title: 'Détails du Pack le Plus Vendu',
      icon: 'ri-award-line text-warning',
      color: 'warning',
      today: {
        value: 8,
        growth: '+5%'
      },
      thisWeek: {
        value: 45,
        growth: '+12%'
      },
      thisMonth: {
        value: 187,
        growth: '+9.5%'
      },
      thisYear: {
        value: 945,
        growth: '+11.3%'
      },
      totalSales: ";
        // line 1818
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mostSoldPack"]) || array_key_exists("mostSoldPack", $context) ? $context["mostSoldPack"] : (function () { throw new RuntimeError('Variable "mostSoldPack" does not exist.', 1818, $this->source); })()), "total_sales", [], "any", false, false, false, 1818), "html", null, true);
        yield ",
      growthRate: '+12.5%'
    }
  };
  
  // Get the selected stat data
  const statData = stats[type];
  
  // Update modal content with the selected stat data
  document.getElementById('statDetailsTitle').textContent = statData.title;
  document.getElementById('statDetailsIcon').className = `\${statData.icon} text-\${statData.color}`;
  
  // Update the detailed statistics
  document.getElementById('statToday').textContent = statData.today.value;
  document.getElementById('statTodayGrowth').textContent = statData.today.growth;
  
  document.getElementById('statThisWeek').textContent = statData.thisWeek.value;
  document.getElementById('statThisWeekGrowth').textContent = statData.thisWeek.growth;
  
  document.getElementById('statThisMonth').textContent = statData.thisMonth.value;
  document.getElementById('statThisMonthGrowth').textContent = statData.thisMonth.growth;
  
  document.getElementById('statThisYear').textContent = statData.thisYear.value;
  document.getElementById('statThisYearGrowth').textContent = statData.thisYear.growth;
  
  document.getElementById('statTotalSales').textContent = statData.totalSales;
  document.getElementById('statTotalGrowth').textContent = statData.growthRate;
  
  // Show the modal
  const statDetailsModal = new bootstrap.Modal(document.getElementById('statDetailsModal'));
  statDetailsModal.show();
}
// Show packs panel by default on page load
window.addEventListener('DOMContentLoaded', function() {
  showAdvancedStatDetails('packs');
});
</script>

    <!-- Page JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS animations
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true
            });

            // Reservation Trends Chart
            const reservationTrendsCtx = document.getElementById('reservationTrendsChart').getContext('2d');
            const reservationTrendsChart = new Chart(reservationTrendsCtx, {
                type: 'line',
                data: {
                    labels: [
                        ";
        // line 1872
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservationTrends"]) || array_key_exists("reservationTrends", $context) ? $context["reservationTrends"] : (function () { throw new RuntimeError('Variable "reservationTrends" does not exist.', 1872, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["trend"]) {
            // line 1873
            yield "                            '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["trend"], "week", [], "any", false, false, false, 1873), "d M"), "html", null, true);
            yield "'";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1873)) {
                yield ",";
            }
            // line 1874
            yield "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1875
        yield "                    ],
                    datasets: [{
                        label: 'Réservations',
                        data: [
                            ";
        // line 1879
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservationTrends"]) || array_key_exists("reservationTrends", $context) ? $context["reservationTrends"] : (function () { throw new RuntimeError('Variable "reservationTrends" does not exist.', 1879, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["trend"]) {
            // line 1880
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trend"], "reservation_count", [], "any", false, false, false, 1880), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1880)) {
                yield ",";
            }
            // line 1881
            yield "                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1882
        yield "                        ],
                        borderColor: '#7367F0',
                        backgroundColor: 'rgba(115, 103, 240, 0.1)',
                        borderWidth: 2,
                        pointBackgroundColor: '#7367F0',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2,
                        pointRadius: 4,
                        tension: 0.3,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false,
                            callbacks: {
                                label: function(context) {
                                    return `Réservations: \${context.raw}`;
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                drawBorder: false,
                                color: 'rgba(0, 0, 0, 0.05)'
                            },
                            ticks: {
                                stepSize: 5
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });

            // Pack Type Distribution Chart
            const packTypeCtx = document.getElementById('packTypeChart').getContext('2d');
            const packTypeChart = new Chart(packTypeCtx, {
                type: 'doughnut',
                data: {
                    labels: [
                        ";
        // line 1937
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["packTypeDistribution"]) || array_key_exists("packTypeDistribution", $context) ? $context["packTypeDistribution"] : (function () { throw new RuntimeError('Variable "packTypeDistribution" does not exist.', 1937, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 1938
            yield "                            '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "event_type", [], "any", false, false, false, 1938), "html", null, true);
            yield "'";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1938)) {
                yield ",";
            }
            // line 1939
            yield "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1940
        yield "                    ],
                    datasets: [{
                        data: [
                            ";
        // line 1943
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["packTypeDistribution"]) || array_key_exists("packTypeDistribution", $context) ? $context["packTypeDistribution"] : (function () { throw new RuntimeError('Variable "packTypeDistribution" does not exist.', 1943, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 1944
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "pack_count", [], "any", false, false, false, 1944), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1944)) {
                yield ",";
            }
            // line 1945
            yield "                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1946
        yield "                        ],
                        backgroundColor: [
                            '#7367F0',
                            '#28C76F',
                            '#FF9F43',
                            '#00CFE8',
                            '#EA5455',
                            '#A8A9AD'
                        ],
                        borderWidth: 0,
                        hoverOffset: 5
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutout: '70%',
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 15,
                                usePointStyle: true,
                                pointStyle: 'circle'
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || '';
                                    const value = context.raw || 0;
                                    const total = context.dataset.data.reduce((acc, data) => acc + data, 0);
                                    const percentage = Math.round((value / total) * 100);
                                    return `\${label}: \${value} (\${percentage}%)`;
                                }
                            }
                        }
                    }
                }
            });

            // Active vs Inactive Packs Chart
            const activeInactiveCtx = document.getElementById('activeInactiveChart').getContext('2d');
            const activeInactiveChart = new Chart(activeInactiveCtx, {
                type: 'pie',
                data: {
                    labels: ['Actifs', 'Inactifs'],
                    datasets: [{
                        data: [
                            ";
        // line 1995
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeInactivePacks"]) || array_key_exists("activeInactivePacks", $context) ? $context["activeInactivePacks"] : (function () { throw new RuntimeError('Variable "activeInactivePacks" does not exist.', 1995, $this->source); })()), "active_packs", [], "any", false, false, false, 1995), "html", null, true);
        yield ",
                            ";
        // line 1996
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeInactivePacks"]) || array_key_exists("activeInactivePacks", $context) ? $context["activeInactivePacks"] : (function () { throw new RuntimeError('Variable "activeInactivePacks" does not exist.', 1996, $this->source); })()), "inactive_packs", [], "any", false, false, false, 1996), "html", null, true);
        yield "
                        ],
                        backgroundColor: [
                            '#28C76F',
                            '#EA5455'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 15,
                                usePointStyle: true,
                                pointStyle: 'circle'
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || '';
                                    const value = context.raw || 0;
                                    const total = context.dataset.data.reduce((acc, data) => acc + data, 0);
                                    const percentage = Math.round((value / total) * 100);
                                    return `\${label}: \${value} (\${percentage}%)`;
                                }
                            }
                        }
                    }
                }
            });
            
            // Monthly Revenue Chart
            const monthlyRevenueCtx = document.getElementById('monthlyRevenueChart').getContext('2d');
            const monthlyRevenueChart = new Chart(monthlyRevenueCtx, {
                type: 'bar',
                data: {
                    labels: [
                        ";
        // line 2038
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 2038, $this->source); })()), "monthly_data", [], "any", false, false, false, 2038));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 2039
            yield "                            '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["month"], "month_name", [], "any", false, false, false, 2039), "html", null, true);
            yield "'";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 2039)) {
                yield ",";
            }
            // line 2040
            yield "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2041
        yield "                    ],
                    datasets: [
                        {
                            label: 'Revenu',
                            data: [
                                ";
        // line 2046
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 2046, $this->source); })()), "monthly_data", [], "any", false, false, false, 2046));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 2047
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["month"], "revenue", [], "any", false, false, false, 2047), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 2047)) {
                yield ",";
            }
            // line 2048
            yield "                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2049
        yield "                            ],
                            backgroundColor: 'rgba(115, 103, 240, 0.7)',
                            borderColor: '#7367F0',
                            borderWidth: 1,
                            borderRadius: 4,
                            order: 1
                        },
                        {
                            label: 'Ventes',
                            data: [
                                ";
        // line 2059
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 2059, $this->source); })()), "monthly_data", [], "any", false, false, false, 2059));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 2060
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["month"], "sales_count", [], "any", false, false, false, 2060), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 2060)) {
                yield ",";
            }
            // line 2061
            yield "                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2062
        yield "                            ],
                            type: 'line',
                            borderColor: '#FF9F43',
                            backgroundColor: 'rgba(255, 159, 67, 0.1)',
                            borderWidth: 2,
                            pointBackgroundColor: '#FF9F43',
                            pointBorderColor: '#fff',
                            pointBorderWidth: 2,
                            pointRadius: 4,
                            tension: 0.3,
                            fill: false,
                            order: 0,
                            yAxisID: 'y1'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                            align: 'end'
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false,
                            callbacks: {
                                label: function(context) {
                                    if (context.dataset.label === 'Revenu') {
                                        return `Revenu: €\${context.raw.toLocaleString('fr-FR', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
                                    } else {
                                        return `Ventes: \${context.raw}`;
                                    }
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                drawBorder: false,
                                color: 'rgba(0, 0, 0, 0.05)'
                            },
                            ticks: {
                                callback: function(value) {
                                    return '€' + value.toLocaleString('fr-FR');
                                }
                            },
                            title: {
                                display: true,
                                text: 'Revenu'
                            }
                        },
                        y1: {
                            beginAtZero: true,
                            position: 'right',
                            grid: {
                                display: false
                            },
                            title: {
                                display: true,
                                text: 'Ventes'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
            
            // Satisfaction Trend Chart
            const satisfactionTrendCtx = document.getElementById('satisfactionTrendChart').getContext('2d');
            const satisfactionTrendChart = new Chart(satisfactionTrendCtx, {
                type: 'line',
                data: {
                    labels: [
                        ";
        // line 2143
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerSatisfaction"]) || array_key_exists("customerSatisfaction", $context) ? $context["customerSatisfaction"] : (function () { throw new RuntimeError('Variable "customerSatisfaction" does not exist.', 2143, $this->source); })()), "monthly_trend", [], "any", false, false, false, 2143));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["trend"]) {
            // line 2144
            yield "                            '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trend"], "period", [], "any", false, false, false, 2144), "html", null, true);
            yield "'";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 2144)) {
                yield ",";
            }
            // line 2145
            yield "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2146
        yield "                    ],
                    datasets: [
                        {
                            label: 'Note Moyenne',
                            data: [
                                ";
        // line 2151
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerSatisfaction"]) || array_key_exists("customerSatisfaction", $context) ? $context["customerSatisfaction"] : (function () { throw new RuntimeError('Variable "customerSatisfaction" does not exist.', 2151, $this->source); })()), "monthly_trend", [], "any", false, false, false, 2151));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["trend"]) {
            // line 2152
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trend"], "avg_rating", [], "any", false, false, false, 2152), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 2152)) {
                yield ",";
            }
            // line 2153
            yield "                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2154
        yield "                            ],
                            borderColor: '#FF9F43',
                            backgroundColor: 'rgba(255, 159, 67, 0.1)',
                            borderWidth: 2,
                            pointBackgroundColor: '#FF9F43',
                            pointBorderColor: '#fff',
                            pointBorderWidth: 2,
                            pointRadius: 4,
                            tension: 0.3,
                            fill: true,
                            yAxisID: 'y'
                        },
                        {
                            label: 'Nombre d\\'Avis',
                            data: [
                                ";
        // line 2169
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerSatisfaction"]) || array_key_exists("customerSatisfaction", $context) ? $context["customerSatisfaction"] : (function () { throw new RuntimeError('Variable "customerSatisfaction" does not exist.', 2169, $this->source); })()), "monthly_trend", [], "any", false, false, false, 2169));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["trend"]) {
            // line 2170
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trend"], "review_count", [], "any", false, false, false, 2170), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 2170)) {
                yield ",";
            }
            // line 2171
            yield "                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2172
        yield "                            ],
                            type: 'bar',
                            backgroundColor: 'rgba(115, 103, 240, 0.3)',
                            borderColor: '#7367F0',
                            borderWidth: 1,
                            borderRadius: 4,
                            yAxisID: 'y1'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                            align: 'end'
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false
                        }
                    },
                    scales: {
                        y: {
                            min: 0,
                            max: 5,
                            grid: {
                                drawBorder: false,
                                color: 'rgba(0, 0, 0, 0.05)'
                            },
                            title: {
                                display: true,
                                text: 'Note Moyenne'
                            }
                        },
                        y1: {
                            beginAtZero: true,
                            position: 'right',
                            grid: {
                                display: false
                            },
                            title: {
                                display: true,
                                text: 'Nombre d\\'Avis'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
            
            // Seasonal Trends Chart
            const seasonalTrendsCtx = document.getElementById('seasonalTrendsChart').getContext('2d');
            const seasonalTrendsChart = new Chart(seasonalTrendsCtx, {
                type: 'line',
                data: {
                    labels: [
                        ";
        // line 2234
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seasonalTrends"]) || array_key_exists("seasonalTrends", $context) ? $context["seasonalTrends"] : (function () { throw new RuntimeError('Variable "seasonalTrends" does not exist.', 2234, $this->source); })()), "monthly_data", [], "any", false, false, false, 2234));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 2235
            yield "                            '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["month"], "month", [], "any", false, false, false, 2235), "html", null, true);
            yield "'";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 2235)) {
                yield ",";
            }
            // line 2236
            yield "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2237
        yield "                    ],
                    datasets: [
                        {
                            label: 'Réservations',
                            data: [
                                ";
        // line 2242
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seasonalTrends"]) || array_key_exists("seasonalTrends", $context) ? $context["seasonalTrends"] : (function () { throw new RuntimeError('Variable "seasonalTrends" does not exist.', 2242, $this->source); })()), "monthly_data", [], "any", false, false, false, 2242));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 2243
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["month"], "reservation_count", [], "any", false, false, false, 2243), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 2243)) {
                yield ",";
            }
            // line 2244
            yield "                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2245
        yield "                            ],
                            borderColor: '#7367F0',
                            backgroundColor: 'rgba(115, 103, 240, 0.1)',
                            borderWidth: 2,
                            pointBackgroundColor: '#7367F0',
                            pointBorderColor: '#fff',
                            pointBorderWidth: 2,
                            pointRadius: 4,
                            tension: 0.3,
                            fill: true
                        },
                        {
                            label: 'Revenu',
                            data: [
                                ";
        // line 2259
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seasonalTrends"]) || array_key_exists("seasonalTrends", $context) ? $context["seasonalTrends"] : (function () { throw new RuntimeError('Variable "seasonalTrends" does not exist.', 2259, $this->source); })()), "monthly_data", [], "any", false, false, false, 2259));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 2260
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["month"], "revenue", [], "any", false, false, false, 2260), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 2260)) {
                yield ",";
            }
            // line 2261
            yield "                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2262
        yield "                            ],
                            borderColor: '#28C76F',
                            backgroundColor: 'rgba(40, 199, 111, 0.1)',
                            borderWidth: 2,
                            pointBackgroundColor: '#28C76F',
                            pointBorderColor: '#fff',
                            pointBorderWidth: 2,
                            pointRadius: 4,
                            tension: 0.3,
                            fill: true,
                            hidden: true
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                            align: 'end'
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false,
                            callbacks: {
                                label: function(context) {
                                    if (context.dataset.label === 'Revenu') {
                                        return `Revenu: €\${context.raw.toLocaleString('fr-FR', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
                                    } else {
                                        return `Réservations: \${context.raw}`;
                                    }
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                drawBorder: false,
                                color: 'rgba(0, 0, 0, 0.05)'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
            
            // Seasonal Distribution Chart
            const seasonalDistributionCtx = document.getElementById('seasonalDistributionChart').getContext('2d');
            const seasonalDistributionChart = new Chart(seasonalDistributionCtx, {
                type: 'doughnut',
                data: {
                    labels: [
                        ";
        // line 2321
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seasonalTrends"]) || array_key_exists("seasonalTrends", $context) ? $context["seasonalTrends"] : (function () { throw new RuntimeError('Variable "seasonalTrends" does not exist.', 2321, $this->source); })()), "seasonal_data", [], "any", false, false, false, 2321));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["season"]) {
            // line 2322
            yield "                            '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["season"], "season", [], "any", false, false, false, 2322), "html", null, true);
            yield "'";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 2322)) {
                yield ",";
            }
            // line 2323
            yield "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['season'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2324
        yield "                    ],
                    datasets: [{
                        data: [
                            ";
        // line 2327
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seasonalTrends"]) || array_key_exists("seasonalTrends", $context) ? $context["seasonalTrends"] : (function () { throw new RuntimeError('Variable "seasonalTrends" does not exist.', 2327, $this->source); })()), "seasonal_data", [], "any", false, false, false, 2327));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["season"]) {
            // line 2328
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["season"], "revenue", [], "any", false, false, false, 2328), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 2328)) {
                yield ",";
            }
            // line 2329
            yield "                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['season'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2330
        yield "                        ],
                        backgroundColor: [
                            '#00CFE8', // Winter
                            '#28C76F', // Spring
                            '#FF9F43', // Summer
                            '#7367F0'  // Fall
                        ],
                        borderWidth: 0,
                        hoverOffset: 5
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutout: '70%',
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 15,
                                usePointStyle: true,
                                pointStyle: 'circle'
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || '';
                                    const value = context.raw || 0;
                                    const total = context.dataset.data.reduce((acc, data) => acc + data, 0);
                                    const percentage = Math.round((value / total) * 100);
                                    return `\${label}: €\${value.toLocaleString('fr-FR', {minimumFractionDigits: 2, maximumFractionDigits: 2})} (\${percentage}%)`;
                                }
                            }
                        }
                    }
                }
            });
            
            // Conversion Trend Chart
            const conversionTrendCtx = document.getElementById('conversionTrendChart').getContext('2d');
            const conversionTrendChart = new Chart(conversionTrendCtx, {
                type: 'line',
                data: {
                    labels: [
                        ";
        // line 2375
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversionRates"]) || array_key_exists("conversionRates", $context) ? $context["conversionRates"] : (function () { throw new RuntimeError('Variable "conversionRates" does not exist.', 2375, $this->source); })()), "monthly_trend", [], "any", false, false, false, 2375));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["trend"]) {
            // line 2376
            yield "                            '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trend"], "period", [], "any", false, false, false, 2376), "html", null, true);
            yield "'";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 2376)) {
                yield ",";
            }
            // line 2377
            yield "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2378
        yield "                    ],
                    datasets: [{
                        label: 'Taux de Conversion',
                        data: [
                            ";
        // line 2382
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversionRates"]) || array_key_exists("conversionRates", $context) ? $context["conversionRates"] : (function () { throw new RuntimeError('Variable "conversionRates" does not exist.', 2382, $this->source); })()), "monthly_trend", [], "any", false, false, false, 2382));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["trend"]) {
            // line 2383
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trend"], "conversion_rate", [], "any", false, false, false, 2383), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 2383)) {
                yield ",";
            }
            // line 2384
            yield "                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2385
        yield "                        ],
                        borderColor: '#7367F0',
                        backgroundColor: 'rgba(115, 103, 240, 0.1)',
                        borderWidth: 2,
                        pointBackgroundColor: '#7367F0',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2,
                        pointRadius: 4,
                        tension: 0.3,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false,
                            callbacks: {
                                label: function(context) {
                                    return `Taux de Conversion: \${context.raw}%`;
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                drawBorder: false,
                                color: 'rgba(0, 0, 0, 0.05)'
                            },
                            ticks: {
                                callback: function(value) {
                                    return value + '%';
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
            
            // Category Performance Chart
            const categoryPerformanceCtx = document.getElementById('categoryPerformanceChart').getContext('2d');
            const categoryPerformanceChart = new Chart(categoryPerformanceCtx, {
                type: 'bar',
                data: {
                    labels: [
                        ";
        // line 2442
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packCategoryPerformance"]) || array_key_exists("packCategoryPerformance", $context) ? $context["packCategoryPerformance"] : (function () { throw new RuntimeError('Variable "packCategoryPerformance" does not exist.', 2442, $this->source); })()), "categories", [], "any", false, false, false, 2442));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 2443
            yield "                            '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categorie", [], "any", false, false, false, 2443), "html", null, true);
            yield "'";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 2443)) {
                yield ",";
            }
            // line 2444
            yield "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2445
        yield "                    ],
                    datasets: [
                        {
                            label: 'Revenu',
                            data: [
                                ";
        // line 2450
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packCategoryPerformance"]) || array_key_exists("packCategoryPerformance", $context) ? $context["packCategoryPerformance"] : (function () { throw new RuntimeError('Variable "packCategoryPerformance" does not exist.', 2450, $this->source); })()), "categories", [], "any", false, false, false, 2450));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 2451
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "total_revenue", [], "any", false, false, false, 2451), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 2451)) {
                yield ",";
            }
            // line 2452
            yield "                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2453
        yield "                            ],
                            backgroundColor: 'rgba(115, 103, 240, 0.7)',
                            borderColor: '#7367F0',
                            borderWidth: 1,
                            borderRadius: 4
                        },
                        {
                            label: 'Note Moyenne',
                            data: [
                                ";
        // line 2462
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packCategoryPerformance"]) || array_key_exists("packCategoryPerformance", $context) ? $context["packCategoryPerformance"] : (function () { throw new RuntimeError('Variable "packCategoryPerformance" does not exist.', 2462, $this->source); })()), "categories", [], "any", false, false, false, 2462));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 2463
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "avg_rating", [], "any", false, false, false, 2463), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 2463)) {
                yield ",";
            }
            // line 2464
            yield "                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2465
        yield "                            ],
                            type: 'line',
                            borderColor: '#FF9F43',
                            backgroundColor: 'rgba(255, 159, 67, 0.1)',
                            borderWidth: 2,
                            pointBackgroundColor: '#FF9F43',
                            pointBorderColor: '#fff',
                            pointBorderWidth: 2,
                            pointRadius: 4,
                            tension: 0.3,
                            fill: false,
                            yAxisID: 'y1'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                            align: 'end'
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false,
                            callbacks: {
                                label: function(context) {
                                    if (context.dataset.label === 'Revenu') {
                                        return `Revenu: €\${context.raw.toLocaleString('fr-FR', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
                                    } else {
                                        return `Note Moyenne: \${context.raw}/5`;
                                    }
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                drawBorder: false,
                                color: 'rgba(0, 0, 0, 0.05)'
                            }
                        },
                        y1: {
                            beginAtZero: true,
                            position: 'right',
                            grid: {
                                display: false
                            },
                            ticks: {
                                max: 5,
                                stepSize: 1
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
            
            // Initialize AOS animations
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true
            });
            
            // Function to show detailed statistics when a card is clicked
            function showAdvancedStatDetails(statType) {
                // Default data structure for statistics
                const detailedStats = {
                    packs: {
                        title: 'Statistiques Détaillées des Packs',
                        icon: 'ri-package-line',
                        color: 'primary',
                        today: {
                            value: 25,
                            growth: '+15%'
                        },
                        thisWeek: {
                            value: 142,
                            growth: '+22%'
                        },
                        thisMonth: {
                            value: 587,
                            growth: '+12.5%'
                        },
                        thisYear: {
                            value: 2845,
                            growth: '+18.3%'
                        },
                        totalSales: ";
        // line 2561
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packStats"]) || array_key_exists("packStats", $context) ? $context["packStats"] : (function () { throw new RuntimeError('Variable "packStats" does not exist.', 2561, $this->source); })()), "total_packs", [], "any", false, false, false, 2561), "html", null, true);
        yield ",
                        growthRate: '+";
        // line 2562
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packStats"]) || array_key_exists("packStats", $context) ? $context["packStats"] : (function () { throw new RuntimeError('Variable "packStats" does not exist.', 2562, $this->source); })()), "growth_rate", [], "any", false, false, false, 2562), "html", null, true);
        yield "%'
                    },
                    users: {
                        title: 'Statistiques Détaillées des Utilisateurs',
                        icon: 'ri-user-line',
                        color: 'success',
                        today: {
                            value: 18,
                            growth: '+10%'
                        },
                        thisWeek: {
                            value: 98,
                            growth: '+15%'
                        },
                        thisMonth: {
                            value: 412,
                            growth: '+8.5%'
                        },
                        thisYear: {
                            value: 1845,
                            growth: '+14.3%'
                        },
                        totalSales: ";
        // line 2584
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userStats"]) || array_key_exists("userStats", $context) ? $context["userStats"] : (function () { throw new RuntimeError('Variable "userStats" does not exist.', 2584, $this->source); })()), "total_users", [], "any", false, false, false, 2584), "html", null, true);
        yield ",
                        growthRate: '+";
        // line 2585
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userStats"]) || array_key_exists("userStats", $context) ? $context["userStats"] : (function () { throw new RuntimeError('Variable "userStats" does not exist.', 2585, $this->source); })()), "growth_rate", [], "any", false, false, false, 2585), "html", null, true);
        yield "%'
                    },
                    mostSoldPack: {
                        title: 'Statistiques Détaillées du Pack le Plus Vendu',
                        icon: 'ri-award-line',
                        color: 'warning',
                        today: {
                            value: 8,
                            growth: '+5%'
                        },
                        thisWeek: {
                            value: 45,
                            growth: '+12%'
                        },
                        thisMonth: {
                            value: 187,
                            growth: '+9.5%'
                        },
                        thisYear: {
                            value: 945,
                            growth: '+11.3%'
                        },
                        totalSales: ";
        // line 2607
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mostSoldPack"]) || array_key_exists("mostSoldPack", $context) ? $context["mostSoldPack"] : (function () { throw new RuntimeError('Variable "mostSoldPack" does not exist.', 2607, $this->source); })()), "total_sales", [], "any", false, false, false, 2607), "html", null, true);
        yield ",
                        growthRate: '+12.5%'
                    }
                };
                
                // Get the selected stat data
                const statData = detailedStats[statType];
                
                // Update modal content with the selected stat data
                document.getElementById('statDetailsTitle').textContent = statData.title;
                document.getElementById('statDetailsIcon').className = `\${statData.icon} text-\${statData.color}`;
                
                // Update the detailed statistics
                document.getElementById('statToday').textContent = statData.today.value;
                document.getElementById('statTodayGrowth').textContent = statData.today.growth;
                
                document.getElementById('statThisWeek').textContent = statData.thisWeek.value;
                document.getElementById('statThisWeekGrowth').textContent = statData.thisWeek.growth;
                
                document.getElementById('statThisMonth').textContent = statData.thisMonth.value;
                document.getElementById('statThisMonthGrowth').textContent = statData.thisMonth.growth;
                
                document.getElementById('statThisYear').textContent = statData.thisYear.value;
                document.getElementById('statThisYearGrowth').textContent = statData.thisYear.growth;
                
                document.getElementById('statTotalSales').textContent = statData.totalSales;
                document.getElementById('statTotalGrowth').textContent = statData.growthRate;
                
                // Show the modal
                const statDetailsModal = new bootstrap.Modal(document.getElementById('statDetailsModal'));
                statDetailsModal.show();
            }
        });
    </script>
    
    <!-- Statistics Details Modal -->
    <div class=\"modal fade\" id=\"statDetailsModal\" tabindex=\"-1\" aria-labelledby=\"statDetailsModalLabel\" aria-hidden=\"true\">
        <!-- Modal removed: replaced by inline stats panel -->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"statDetailsModalLabel\">
                        <i id=\"statDetailsIcon\" class=\"ri-package-line text-primary me-2\"></i>
                        <span id=\"statDetailsTitle\">Statistiques Détaillées</span>
                    </h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row mb-4\">
                        <div class=\"col-12 mb-4\">
                            <div class=\"dashboard-card p-4\">
                                <h5 class=\"mb-3\">Total des Ventes</h5>
                                <div class=\"d-flex align-items-center\">
                                    <h2 class=\"mb-0\" id=\"statTotalSales\">0</h2>
                                    <span class=\"badge bg-success ms-2\" id=\"statTotalGrowth\">+0%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h5 class=\"mb-3\">Analyse des Ventes</h5>
                    <div class=\"row g-3 mb-4\">
                        <!-- Today -->
                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\"dashboard-card p-3\">
                                <h6 class=\"text-muted mb-2\">Aujourd'hui</h6>
                                <div class=\"d-flex align-items-baseline\">
                                    <h3 class=\"mb-0\" id=\"statToday\">25</h3>
                                    <small class=\"text-success ms-2\" id=\"statTodayGrowth\">+15%</small>
                                </div>
                            </div>
                        </div>
                        
                        <!-- This Week -->
                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\"dashboard-card p-3\">
                                <h6 class=\"text-muted mb-2\">Cette Semaine</h6>
                                <div class=\"d-flex align-items-baseline\">
                                    <h3 class=\"mb-0\" id=\"statThisWeek\">142</h3>
                                    <small class=\"text-success ms-2\" id=\"statThisWeekGrowth\">+22%</small>
                                </div>
                            </div>
                        </div>
                        
                        <!-- This Month -->
                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\"dashboard-card p-3\">
                                <h6 class=\"text-muted mb-2\">Ce Mois</h6>
                                <div class=\"d-flex align-items-baseline\">
                                    <h3 class=\"mb-0\" id=\"statThisMonth\">587</h3>
                                    <small class=\"text-success ms-2\" id=\"statThisMonthGrowth\">+12.5%</small>
                                </div>
                            </div>
                        </div>
                        
                        <!-- This Year -->
                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\"dashboard-card p-3\">
                                <h6 class=\"text-muted mb-2\">Cette Année</h6>
                                <div class=\"d-flex align-items-baseline\">
                                    <h3 class=\"mb-0\" id=\"statThisYear\">2,845</h3>
                                    <small class=\"text-success ms-2\" id=\"statThisYearGrowth\">+18.3%</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"dashboard-card p-4\">
                                <h5 class=\"mb-3\">Tendance des Ventes</h5>
                                <div style=\"height: 250px;\">
                                    <canvas id=\"statDetailsTrendChart\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                    <button type=\"button\" class=\"btn btn-primary\">Télécharger le rapport</button>
                </div>
            </div>
        </div>
    </div>
<style>
.chart-highlight { box-shadow: 0 0 0 4px #7367F0AA; transition: box-shadow 0.3s; z-index: 10; position: relative; }
</style>
<script>
(function() {
    // Add highlight style for charts
    const style = document.createElement('style');
    style.innerHTML = `.chart-highlight { box-shadow: 0 0 0 4px #7367F0AA; transition: box-shadow 0.3s; z-index: 10; position: relative; }`;
    document.head.appendChild(style);
    const searchToggler = document.getElementById('openSearchBar');
    const searchInput = document.getElementById('chartSearchInput');
    const resultsBox = document.getElementById('chartSearchResults');
    let lastQuery = '';
    function openSearch() {
        searchInput.classList.remove('d-none');
        searchInput.focus();
        resultsBox.classList.remove('d-none');
        triggerChartSearch();
    }
    function closeSearch() {
        searchInput.value = '';
        searchInput.classList.add('d-none');
        resultsBox.classList.add('d-none');
        resultsBox.innerHTML = '';
    }
    function triggerChartSearch() {
        const q = searchInput.value.trim();
        if (!q) {
            resultsBox.innerHTML = '';
            resultsBox.classList.add('d-none');
            return;
        }
        fetch(`/admin/advanced-statistiques/search_charts.php?q=` + encodeURIComponent(q))
            .then(r => r.json())
            .then(data => {
                if (Array.isArray(data.results) && data.results.length > 0) {
                    resultsBox.innerHTML = data.results.map(item => {
                        // If it's a dashboard card, attach stat-key for dynamic panel
                        let statKey = '';
                        if (item.id === 'dashboardCardTotalPacks') statKey = 'packs';
                        if (item.id === 'dashboardCardTotalUtilisateurs') statKey = 'users';
                        if (item.id === 'dashboardCardMostSoldPack') statKey = 'mostSoldPack';
                        if (item.id === 'dashboardCardAvgPrice') statKey = 'avgPrice';
                        return `<div class='dropdown-item' data-chart-id='\${item.id}'\${statKey ? ` data-stat-key='\${statKey}'` : ''}>\${item.name}</div>`;
                    }).join('');
                } else {
                    resultsBox.innerHTML = \"<div class='dropdown-item text-muted'>Aucun graphique trouvé</div>\";
                }
                resultsBox.classList.remove('d-none');
            });
    }
    searchToggler.addEventListener('click', openSearch);
    document.addEventListener('keydown', function(e) {
        if ((e.ctrlKey && e.key === '/') || (e.ctrlKey && e.key === '÷')) {
            openSearch();
            e.preventDefault();
        } else if (e.key === 'Escape') {
            closeSearch();
        }
    });
    searchInput.addEventListener('input', function() {
        lastQuery = searchInput.value.trim();
        triggerChartSearch();
    });
    resultsBox.addEventListener('mousedown', function(e) {
        if (e.target.classList.contains('dropdown-item')) {
            searchInput.value = e.target.textContent;
            resultsBox.innerHTML = '';
            resultsBox.classList.add('d-none');
            // Scroll to chart and highlight
            const chartId = e.target.getAttribute('data-chart-id');
            const statKey = e.target.getAttribute('data-stat-key');
            if (statKey) {
                // For dynamic stat panels (cards)
                renderStatPanel(statKey);
                setTimeout(() => {
                    const panelElem = document.getElementById('dynamicStatPanel');
                    if (panelElem) {
                        panelElem.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        panelElem.classList.add('chart-highlight');
                        setTimeout(() => panelElem.classList.remove('chart-highlight'), 1500);
                    }
                }, 350); // allow panel to render
            } else if (chartId) {
                const chartElem = document.getElementById(chartId);
                if (chartElem) {
                    chartElem.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    chartElem.classList.add('chart-highlight');
                    setTimeout(() => chartElem.classList.remove('chart-highlight'), 1500);
                }
            }
        }
    });
})();
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
        return "admin/advanced_statistiques/index.html.twig";
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
        return array (  3862 => 2607,  3837 => 2585,  3833 => 2584,  3808 => 2562,  3804 => 2561,  3706 => 2465,  3692 => 2464,  3686 => 2463,  3669 => 2462,  3658 => 2453,  3644 => 2452,  3638 => 2451,  3621 => 2450,  3614 => 2445,  3600 => 2444,  3593 => 2443,  3576 => 2442,  3517 => 2385,  3503 => 2384,  3497 => 2383,  3480 => 2382,  3474 => 2378,  3460 => 2377,  3453 => 2376,  3436 => 2375,  3389 => 2330,  3375 => 2329,  3369 => 2328,  3352 => 2327,  3347 => 2324,  3333 => 2323,  3326 => 2322,  3309 => 2321,  3248 => 2262,  3234 => 2261,  3228 => 2260,  3211 => 2259,  3195 => 2245,  3181 => 2244,  3175 => 2243,  3158 => 2242,  3151 => 2237,  3137 => 2236,  3130 => 2235,  3113 => 2234,  3049 => 2172,  3035 => 2171,  3029 => 2170,  3012 => 2169,  2995 => 2154,  2981 => 2153,  2975 => 2152,  2958 => 2151,  2951 => 2146,  2937 => 2145,  2930 => 2144,  2913 => 2143,  2830 => 2062,  2816 => 2061,  2810 => 2060,  2793 => 2059,  2781 => 2049,  2767 => 2048,  2761 => 2047,  2744 => 2046,  2737 => 2041,  2723 => 2040,  2716 => 2039,  2699 => 2038,  2654 => 1996,  2650 => 1995,  2599 => 1946,  2585 => 1945,  2579 => 1944,  2562 => 1943,  2557 => 1940,  2543 => 1939,  2536 => 1938,  2519 => 1937,  2462 => 1882,  2448 => 1881,  2442 => 1880,  2425 => 1879,  2419 => 1875,  2405 => 1874,  2398 => 1873,  2381 => 1872,  2324 => 1818,  2299 => 1796,  2295 => 1795,  2270 => 1773,  2266 => 1772,  2237 => 1746,  2227 => 1739,  2223 => 1738,  2219 => 1737,  2215 => 1736,  2211 => 1735,  2205 => 1732,  2201 => 1731,  2197 => 1730,  2193 => 1729,  2189 => 1728,  2185 => 1727,  2181 => 1726,  2177 => 1725,  2140 => 1690,  2128 => 1684,  2123 => 1682,  2117 => 1679,  2113 => 1678,  2109 => 1677,  2105 => 1676,  2102 => 1675,  2098 => 1674,  2066 => 1644,  2057 => 1641,  2053 => 1640,  2047 => 1639,  2044 => 1638,  2040 => 1637,  2021 => 1621,  2012 => 1615,  2008 => 1614,  1999 => 1608,  1969 => 1583,  1965 => 1582,  1954 => 1576,  1950 => 1575,  1939 => 1569,  1935 => 1568,  1915 => 1550,  1904 => 1545,  1899 => 1543,  1892 => 1539,  1888 => 1538,  1884 => 1537,  1881 => 1536,  1877 => 1535,  1816 => 1476,  1804 => 1471,  1800 => 1470,  1795 => 1468,  1791 => 1467,  1784 => 1464,  1780 => 1463,  1775 => 1461,  1771 => 1460,  1767 => 1459,  1764 => 1458,  1760 => 1457,  1738 => 1440,  1705 => 1410,  1701 => 1409,  1694 => 1404,  1685 => 1401,  1677 => 1399,  1675 => 1398,  1670 => 1396,  1667 => 1395,  1663 => 1394,  1656 => 1390,  1650 => 1387,  1631 => 1372,  1627 => 1371,  1620 => 1367,  1613 => 1363,  1599 => 1352,  1595 => 1351,  1591 => 1350,  1585 => 1347,  1575 => 1342,  1559 => 1328,  1548 => 1323,  1543 => 1321,  1539 => 1319,  1537 => 1318,  1532 => 1316,  1528 => 1315,  1525 => 1314,  1521 => 1313,  1518 => 1312,  1512 => 1311,  1509 => 1310,  1504 => 1309,  1502 => 1308,  1473 => 1282,  1466 => 1278,  1389 => 1204,  1367 => 1185,  1362 => 1183,  1348 => 1172,  1337 => 1164,  1332 => 1162,  1207 => 1040,  1196 => 1032,  1191 => 1030,  1166 => 1008,  1157 => 1002,  1104 => 952,  1092 => 943,  1073 => 926,  1066 => 924,  1064 => 923,  1052 => 916,  1047 => 914,  1043 => 913,  1039 => 912,  1029 => 905,  1026 => 904,  1021 => 903,  982 => 867,  969 => 857,  959 => 850,  515 => 409,  498 => 395,  140 => 40,  136 => 39,  132 => 38,  128 => 37,  124 => 36,  120 => 35,  116 => 34,  112 => 33,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  92 => 28,  88 => 27,  82 => 24,  78 => 23,  74 => 22,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\" class=\"light-style layout-navbar-fixed layout-menu-fixed\" dir=\"ltr\" data-theme=\"theme-default\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>Statistiques Avancées - Admin</title>
    <meta name=\"description\" content=\"Statistiques avancées administrateur\" />
    
    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/favicon/favicon.ico') }}\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\" />

    <!-- Icons -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css\">

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/css/rtl/core.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/css/rtl/theme-default.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/demo.css') }}\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/node-waves/node-waves.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/sweetalert2/sweetalert2.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/flatpickr/flatpickr.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/swiper/swiper.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/select2/select2.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/css/pages/cards-advance.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/glassmorphism.css') }}\" />
    <script src=\"{{ asset('vendor/js/helpers.js') }}\"></script>
    <script src=\"{{ asset('vendor/js/template-customizer.js') }}\"></script>
    <script src=\"{{ asset('js/config.js') }}\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
    
    <style>
        :root {
            --primary-color: #7367F0;
            --secondary-color: #82868b;
            --success-color: #28C76F;
            --info-color: #00CFE8;
            --warning-color: #FF9F43;
            --danger-color: #EA5455;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        .dashboard-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: none;
            border-radius: 1rem;
            background: #fff;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        
        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        .stat-card {
            padding: 1.5rem;
            border-radius: 1rem;
            position: relative;
            overflow: hidden;
        }

        .stat-card .stat-icon {
            position: absolute;
            right: -10px;
            bottom: -10px;
            font-size: 5rem;
            opacity: 0.1;
            transition: all 0.3s ease;
        }

        .stat-card:hover .stat-icon {
            transform: scale(1.2);
            opacity: 0.2;
        }
        
        .cursor-pointer {
            cursor: pointer;
        }
        
        .stat-card.cursor-pointer {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .stat-card.cursor-pointer:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        
        .stat-card.cursor-pointer:active {
            transform: translateY(-2px);
        }

        .menu-item {
            margin-bottom: 0.5rem;
        }

        .menu-item a {
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }

        .menu-item a:hover {
            background-color: var(--primary-color);
            color: white;
        }

        .menu-item.active a {
            background-color: var(--primary-color);
            color: white;
            box-shadow: 0 4px 6px -1px rgba(115, 103, 240, 0.2);
        }

        .chart-container {
            padding: 1.5rem;
            border-radius: 1rem;
            background: white;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .data-table {
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .data-table thead th {
            background-color: #f8f9fa;
            border-bottom: 2px solid #e9ecef;
            font-weight: 600;
        }

        .btn {
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .progress {
            height: 0.5rem;
            border-radius: 1rem;
            background-color: #e9ecef;
        }

        .progress-bar {
            border-radius: 1rem;
            background-color: var(--primary-color);
        }

        /* Loading animation */
        .loading-skeleton {
            animation: skeleton-loading 1s linear infinite alternate;
        }

        @keyframes skeleton-loading {
            0% {
                background-color: #f3f3f3;
            }
            100% {
                background-color: #e0e0e0;
            }
        }

        /* Smooth scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
        
        .pack-metrics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .pack-metric-card {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 1.5rem;
            transition: all 0.3s ease;
        }

        .pack-metric-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .metric-item {
            background: rgba(var(--bs-primary-rgb), 0.05);
            padding: 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .metric-item:hover {
            background: rgba(var(--bs-primary-rgb), 0.1);
        }

        .satisfaction-bar {
            min-width: 100px;
        }

        .rating-circle {
            width: 100px;
            height: 100px;
        }

        .circular-chart {
            width: 100%;
            height: 100%;
        }

        .circle-bg {
            fill: none;
            stroke: #eee;
            stroke-width: 3.8;
        }

        .circle {
            fill: none;
            stroke: #ffc107;
            stroke-width: 2.8;
            stroke-linecap: round;
            animation: progress 1s ease-out forwards;
        }

        .percentage {
            fill: #666;
            font-size: 0.5em;
            text-anchor: middle;
        }

        @keyframes progress {
            0% {
                stroke-dasharray: 0 100;
            }
        }

        .rating-bars .progress {
            background-color: rgba(0,0,0,0.05);
        }

        .pack-chart {
            border-top: 1px solid var(--border-color);
            padding-top: 1rem;
        }

        @media (max-width: 768px) {
            .pack-metrics-grid {
                grid-template-columns: 1fr;
            }
        }
        
        .stats-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }
        .stats-card h3 {
            color: #2c3e50;
            margin-bottom: 1rem;
            font-size: 1.25rem;
        }
        .chart-container {
            position: relative;
            height: 300px;
            margin-bottom: 1.5rem;
        }
        .top-events-table {
            width: 100%;
            border-collapse: collapse;
        }
        .top-events-table th, .top-events-table td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }
        .top-events-table th {
            background-color: #f8fafc;
            font-weight: 600;
            color: #4a5568;
        }
        .top-events-table tr:hover {
            background-color: #f8fafc;
        }
        .stats-overview {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            margin-bottom: 1.5rem;
        }
        .stats-item {
            background: white;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .stats-item h4 {
            color: #718096;
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
        }
        .stats-item .value {
            color: #2d3748;
            font-size: 1.5rem;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <!-- Enveloppe de la mise en page -->
    <div class=\"layout-wrapper layout-content-navbar\">
        <div class=\"layout-container\">
            <!-- Menu -->
            <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">
          <div class=\"app-brand demo\">
            <a href=\"index.html\" class=\"app-brand-link\">
              <span class=\"app-brand-logo demo\">
                <svg width=\"32\" height=\"22\" viewBox=\"0 0 32 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path
                    fill-rule=\"evenodd\"
                    clip-rule=\"evenodd\"
                    d=\"M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z\"
                    fill=\"#7367F0\" />
                  <path
                    opacity=\"0.06\"
                    fill-rule=\"evenodd\"
                    clip-rule=\"evenodd\"
                    d=\"M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z\"
                    fill=\"#161616\" />
                  <path
                    opacity=\"0.06\"
                    fill-rule=\"evenodd\"
                    clip-rule=\"evenodd\"
                    d=\"M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z\"
                    fill=\"#161616\" />
                  <path
                    fill-rule=\"evenodd\"
                    clip-rule=\"evenodd\"
                    d=\"M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z\"
                    fill=\"#7367F0\" />
                </svg>
              </span>
              <span class=\"app-brand-text demo menu-text fw-bold\">Vuexy</span>
            </a>

            <a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto\">
              <i class=\"ti menu-toggle-icon d-none d-xl-block ti-sm align-middle\"></i>
              <i class=\"ti ti-x d-block d-xl-none ti-sm align-middle\"></i>
            </a>
          </div>

          <div class=\"menu-inner-shadow\"></div>
<div class=\"menu-inner-shadow\"></div>

<ul class=\"menu-inner py-1\">
  <!-- Packs -->
  <li class=\"menu-item active\">
    <a href=\"{{ path('admin_pack_index') }}\" class=\"menu-link\">
      <i class=\"menu-icon tf-icons ti ti-package\"></i>
      <div data-i18n=\"Packs\">Packs</div>
    </a>
  </li>

  <!-- Gestion Événements -->
  <li class=\"menu-item\">
    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
      <i class=\"menu-icon tf-icons ti ti-calendar-event\"></i>
      <div data-i18n=\"Gestion Événements\">Gestion Événements</div>
    </a>
    <ul class=\"menu-sub\">
      <li class=\"menu-item\">
<a href=\"{{ path('app_add_event') }}\" class=\"menu-link\">
    <i class=\"menu-icon tf-icons ti ti-circle\"></i>
    <div data-i18n=\"Ajouter Événement\">Ajouter Événement</div>
</a>
      </li>
      <li class=\"menu-item\">
        <a href=\"liste-evenements.html\" class=\"menu-link\">
          <i class=\"menu-icon tf-icons ti ti-circle\"></i>
          <div data-i18n=\"Liste Événements\">Liste Événements</div>
        </a>
      </li>
    </ul>
  </li>

  <!-- Gestion Matérielle -->
  <li class=\"menu-item\">
    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
      <i class=\"menu-icon tf-icons ti ti-tools\"></i>
      <div data-i18n=\"Gestion Matérielle\">Gestion Matérielle</div>
    </a>
    <ul class=\"menu-sub\">
      <li class=\"menu-item\">
        <a href=\"ajouter-materiel.html\" class=\"menu-link\">
          <i class=\"menu-icon tf-icons ti ti-circle\"></i>
          <div data-i18n=\"Ajouter Matériel\">Ajouter Matériel</div>
        </a>
      </li>
      <li class=\"menu-item\">
        <a href=\"liste-materiel.html\" class=\"menu-link\">
          <i class=\"menu-icon tf-icons ti ti-circle\"></i>
          <div data-i18n=\"Liste Matériel\">Liste Matériel</div>
        </a>
      </li>
    </ul>
  </li>

  <!-- Gestion Lieu -->
  <li class=\"menu-item\">
    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
      <i class=\"menu-icon tf-icons ti ti-map-pin\"></i>
      <div data-i18n=\"Gestion Lieu\">Gestion Lieu</div>
    </a>
    <ul class=\"menu-sub\">
      <li class=\"menu-item\">
        <a href=\"ajouter-lieu.html\" class=\"menu-link\">
          <i class=\"menu-icon tf-icons ti ti-circle\"></i>
          <div data-i18n=\"Ajouter Lieu\">Ajouter Lieu</div>
        </a>
      </li>
      <li class=\"menu-item\">
        <a href=\"liste-lieux.html\" class=\"menu-link\">
          <i class=\"menu-icon tf-icons ti ti-circle\"></i>
          <div data-i18n=\"Liste Lieux\">Liste Lieux</div>
        </a>
      </li>
    </ul>
  </li>

  <!-- Gestion Personnels -->
  <li class=\"menu-item\">
    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
      <i class=\"menu-icon tf-icons ti ti-users\"></i>
      <div data-i18n=\"Gestion Personnels\">Gestion Personnels</div>
    </a>
    <ul class=\"menu-sub\">
      <li class=\"menu-item\">
        <a href=\"ajouter-personnel.html\" class=\"menu-link\">
          <i class=\"menu-icon tf-icons ti ti-circle\"></i>
          <div data-i18n=\"Ajouter Personnel\">Ajouter Personnel</div>
        </a>
      </li>
      <li class=\"menu-item\">
        <a href=\"liste-personnels.html\" class=\"menu-link\">
          <i class=\"menu-icon tf-icons ti ti-circle\"></i>
          <div data-i18n=\"Liste Personnels\">Liste Personnels</div>
        </a>
      </li>
    </ul>
  </li>

  <!-- Gestion Commandes -->
  <li class=\"menu-item\">
    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
      <i class=\"menu-icon tf-icons ti ti-shopping-cart\"></i>
      <div data-i18n=\"Gestion Commandes\">Gestion Commandes</div>
    </a>
    <ul class=\"menu-sub\">
      <li class=\"menu-item\">
        <a href=\"panier.html\" class=\"menu-link\">
          <i class=\"menu-icon tf-icons ti ti-circle\"></i>
          <div data-i18n=\"Panier\">Panier</div>
          <div class=\"badge bg-label-primary rounded-pill ms-auto\">3</div>
        </a>
      </li>
      <li class=\"menu-item\">
        <a href=\"liste-commandes.html\" class=\"menu-link\">
          <i class=\"menu-icon tf-icons ti ti-circle\"></i>
          <div data-i18n=\"Liste Commandes\">Liste Commandes</div>
        </a>
      </li>
      <li class=\"menu-item\">
        <a href=\"liste-reclamations.html\" class=\"menu-link\">
          <i class=\"menu-icon tf-icons ti ti-circle\"></i>
          <div data-i18n=\"Liste Réclamations\">Liste Réclamations</div>
          <div class=\"badge bg-label-warning rounded-pill ms-auto\">2</div>
        </a>
      </li>
    </ul>
  </li>

  <!-- Divider -->
  <li class=\"menu-header small text-uppercase\">
    <span class=\"menu-header-text\">Compte</span>
  </li>

  <!-- Compte -->
  <li class=\"menu-item\">
    <a href=\"compte.html\" class=\"menu-link\">
      <i class=\"menu-icon tf-icons ti ti-user\"></i>
      <div data-i18n=\"Mon Compte\">Mon Compte</div>
    </a>
  </li>

  <!-- Déconnexion -->
  <li class=\"menu-item\">
    <a href=\"deconnexion.html\" class=\"menu-link\">
      <i class=\"menu-icon tf-icons ti ti-logout\"></i>
      <div data-i18n=\"Déconnexion\">Déconnexion</div>
    </a>
  </li>
</ul>
         
        </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class=\"layout-page\">
                <!-- Navbar -->
                <nav class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\" id=\"layout-navbar\">
                    <div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none\">
                        <a class=\"nav-item nav-link px-0 me-xl-4\" href=\"javascript:void(0)\">
                            <i class=\"ti ti-menu-2 ti-sm\"></i>
                        </a>
                    </div>

                    <!-- BEGIN: Advanced Statistiques Searchbar (unchanged) -->
                    <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
                        <!-- Search -->
                        <div class=\"navbar-nav align-items-center\">
                            <div class=\"navbar-nav align-items-center position-relative\">
                                <div class=\"nav-item navbar-search-wrapper mb-0\">
                                    <a class=\"nav-item nav-link search-toggler d-flex align-items-center px-0\" id=\"openSearchBar\" href=\"javascript:void(0);\">
    <i class=\"ti ti-search ti-md me-2\"></i>
    <span class=\"d-none d-md-inline-block text-muted\">Recherche</span>
</a>
<input type=\"text\" id=\"chartSearchInput\" class=\"form-control ms-2 d-none\" placeholder=\"Rechercher un graphique... (Ctrl+/)\" autocomplete=\"off\" style=\"width: 260px; position: absolute; top: 40px; left: 0; z-index: 1050;\" />
<div id=\"chartSearchResults\" class=\"dropdown-menu show d-none\" style=\"position: absolute; top: 70px; left: 0; width: 260px; z-index: 1060; max-height: 250px; overflow-y: auto;\"></div>
<style>
#chartSearchResults {
    border: 1px solid #d1d5db;
    background: #fff;
    box-shadow: 0 2px 8px rgba(0,0,0,0.07);
    font-size: 1rem;
}
#chartSearchResults .dropdown-item {
    padding: 0.5rem 1rem;
    cursor: pointer;
    color: #333;
}
#chartSearchResults .dropdown-item:hover {
    background: #f4f4f4;
    color: #7367F0;
}
</style>
<script>
(function() {
    // Add highlight style for charts
    const style = document.createElement('style');
    style.innerHTML = `.chart-highlight { box-shadow: 0 0 0 4px #7367F0AA; transition: box-shadow 0.3s; z-index: 10; position: relative; }`;
    document.head.appendChild(style);
    const searchToggler = document.getElementById('openSearchBar');
    const searchInput = document.getElementById('chartSearchInput');
    const resultsBox = document.getElementById('chartSearchResults');
    let lastQuery = '';
    function openSearch() {
        searchInput.classList.remove('d-none');
        searchInput.focus();
        resultsBox.classList.remove('d-none');
        triggerChartSearch();
    }
    function closeSearch() {
        searchInput.value = '';
        searchInput.classList.add('d-none');
        resultsBox.classList.add('d-none');
        resultsBox.innerHTML = '';
    }
    function triggerChartSearch() {
        const q = searchInput.value.trim();
        fetch(`/admin/advanced-statistiques/search_charts.php?q=` + encodeURIComponent(q))
            .then(r => r.json())
            .then(data => {
                if (Array.isArray(data.results) && data.results.length > 0) {
                    resultsBox.innerHTML = data.results.map(item => {
                        let statKey = '';
                        if (item.id === 'dashboardCardTotalPacks') statKey = 'packs';
                        if (item.id === 'dashboardCardTotalUtilisateurs') statKey = 'users';
                        if (item.id === 'dashboardCardMostSoldPack') statKey = 'mostSoldPack';
                        if (item.id === 'dashboardCardAvgPrice') statKey = 'avgPrice';
                        return `<div class='dropdown-item' data-chart-id='\${item.id}'\${statKey ? ` data-stat-key='\${statKey}'` : ''}>\${item.name}</div>`;
                    }).join('');
                } else {
                    resultsBox.innerHTML = \"<div class='dropdown-item text-muted'>Aucun graphique trouvé</div>\";
                }
                resultsBox.classList.remove('d-none');
            });
    }
    searchToggler.addEventListener('click', openSearch);
    document.addEventListener('keydown', function(e) {
        if ((e.ctrlKey && e.key === '/') || (e.ctrlKey && e.key === '÷')) {
            openSearch();
            e.preventDefault();
        } else if (e.key === 'Escape') {
            closeSearch();
        }
    });
    searchInput.addEventListener('input', function() {
        lastQuery = searchInput.value.trim();
        triggerChartSearch();
    });
    resultsBox.addEventListener('mousedown', function(e) {
        if (e.target.classList.contains('dropdown-item')) {
            searchInput.value = e.target.textContent;
            resultsBox.innerHTML = '';
            resultsBox.classList.add('d-none');
            // Scroll to chart and highlight
            const chartId = e.target.getAttribute('data-chart-id');
            const statKey = e.target.getAttribute('data-stat-key');
            if (statKey) {
                // For dynamic stat panels (cards)
                renderStatPanel(statKey);
                setTimeout(() => {
                    const panelElem = document.getElementById('dynamicStatPanel');
                    if (panelElem) {
                        panelElem.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        panelElem.classList.add('chart-highlight');
                        setTimeout(() => panelElem.classList.remove('chart-highlight'), 1500);
                    }
                }, 350); // allow panel to render
            } else if (chartId) {
                const chartElem = document.getElementById(chartId);
                if (chartElem) {
                    chartElem.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    chartElem.classList.add('chart-highlight');
                    setTimeout(() => chartElem.classList.remove('chart-highlight'), 1500);
                }
            }
        }
    });
})();
</script>
</a>
                                    
                                </div>
                            </div>
                        </div>
                        <script>
document.addEventListener('DOMContentLoaded', function() {
  const trigger = document.getElementById('admin-notification-search-bar-trigger');
  const dropdown = document.getElementById('admin-notification-search-dropdown');
  const input = document.getElementById('admin-notification-search-input-navbar');
  const form = document.getElementById('demande-pack-search-form');
  let isOpen = false;
  let debounceTimer = null;
  // Initialize flatpickr for date inputs
  if (typeof flatpickr !== 'undefined') {
    document.querySelectorAll('.flatpickr-date').forEach(elem => {
      flatpickr(elem, {
        dateFormat: \"Y-m-d\",
        allowInput: true
      });
    });
  }
  function openDropdown() {
    dropdown.style.display = 'block';
    setTimeout(() => { input && input.focus(); }, 50);
    isOpen = true;
  }
  function closeDropdown() {
    dropdown.style.display = 'none';
    isOpen = false;
  }

  function performSearch() {
    const formData = new FormData(form);
    const searchParams = new URLSearchParams();

    formData.forEach((value, key) => {
      if (value) searchParams.append(key, value);
    });

    const url = form.action + '?' + searchParams.toString();

    fetch(url, {
      headers: { 'X-Requested-With': 'XMLHttpRequest' }
    })
    .then(response => response.text())
    .then(html => {
      document.getElementById('demande-pack-table-body').innerHTML = html;
    })
    .catch(error => {
      console.error('Error:', error);
      Swal.fire({
        title: 'Erreur',
        text: 'Une erreur est survenue lors de la recherche',
        icon: 'error'
      });
    });
  }

  // Event Listeners
  trigger.addEventListener('click', function(e) {
    e.preventDefault();
    if (!isOpen) openDropdown();
    else closeDropdown();
  });

  document.addEventListener('keydown', function(e) {
    if ((e.ctrlKey && e.key === '/') || (e.ctrlKey && e.key === '÷')) {
      openDropdown();
      e.preventDefault();
    }
    if (e.key === 'Escape' && isOpen) {
      closeDropdown();
    }
    if (e.key === 'Enter' && isOpen) {
      performSearch();
    }
  });

  document.addEventListener('mousedown', function(e) {
    if (isOpen && !dropdown.contains(e.target) && !trigger.contains(e.target)) {
      closeDropdown();
    }
  });

  // Handle form inputs
  form.querySelectorAll('input, select').forEach(element => {
    element.addEventListener('change', () => {
      if (debounceTimer) clearTimeout(debounceTimer);
      debounceTimer = setTimeout(performSearch, 400);
    });
  });

  input.addEventListener('input', () => {
    if (debounceTimer) clearTimeout(debounceTimer);
    debounceTimer = setTimeout(performSearch, 400);
  });

  form.addEventListener('submit', function(e) {
    e.preventDefault();
    performSearch();
  });
})();
                        </script>
                        <!-- /Search -->
                    <!-- END: Advanced Statistiques Searchbar -->

                        <!-- BEGIN: Customize Pack Navbar Section -->
                        <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
                            <!-- Language -->
                            <li class=\"nav-item dropdown-language dropdown me-2 me-xl-0\">
                                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                                    <i class=\"fi fi-us fis rounded-circle me-1 fs-3\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                    <li>
                                        <a class=\"dropdown-item\" href=\"javascript:void(0);\" data-language=\"fr\">
                                            <i class=\"fi fi-fr fis rounded-circle me-1 fs-3\"></i>
                                            <span class=\"align-middle\">Français</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"javascript:void(0);\" data-language=\"en\">
                                            <i class=\"fi fi-us fis rounded-circle me-1 fs-3\"></i>
                                            <span class=\"align-middle\">Anglais</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"javascript:void(0);\" data-language=\"de\">
                                            <i class=\"fi fi-de fis rounded-circle me-1 fs-3\"></i>
                                            <span class=\"align-middle\">Allemand</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"javascript:void(0);\" data-language=\"pt\">
                                            <i class=\"fi fi-pt fis rounded-circle me-1 fs-3\"></i>
                                            <span class=\"align-middle\">Portugais</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ Language -->

                            <!-- Style Switcher -->
                            <li class=\"nav-item me-2 me-xl-0\">
                                <a class=\"nav-link style-switcher-toggle hide-arrow\" href=\"javascript:void(0);\">
                                    <i class=\"ti ti-md\"></i>
                                </a>
                            </li>
                            <!--/ Style Switcher -->

                            <!-- Quick links  -->
                            <li class=\"nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0\">
                                <a
                                    class=\"nav-link dropdown-toggle hide-arrow\"
                                    href=\"javascript:void(0);\"
                                    data-bs-toggle=\"dropdown\"
                                    data-bs-auto-close=\"outside\"
                                    aria-expanded=\"false\">
                                    <i class=\"ti ti-layout-grid-add fs-4\"></i>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-end py-0\">
                                    <div class=\"dropdown-menu-header border-bottom\">
                                        <div class=\"dropdown-header d-flex align-items-center py-3\">
                                            <h5 class=\"text-body mb-0 me-auto\">Shortcuts</h5>
                                            <a
                                                href=\"javascript:void(0)\"
                                                class=\"dropdown-shortcuts-add text-body\"
                                                data-bs-toggle=\"tooltip\"
                                                data-bs-placement=\"top\"
                                                title=\"Add shortcuts\"
                                                ><i class=\"ti ti-sm ti-apps\"></i
                                            ></a>
                                        </div>
                                    </div>
                                    <div class=\"dropdown-shortcuts-list scrollable-container\">
                                        <div class=\"row row-bordered overflow-visible g-0\">
                                            <div class=\"dropdown-shortcuts-item col\">
                                                <span class=\"dropdown-shortcuts-icon rounded-circle mb-2\">
                                                    <i class=\"ti ti-shopping-cart fs-4\"></i>
                                                </span>
                                                <a href=\"{{ path('admin_advanced_statistiques_demande_packs') }}\" class=\"stretched-link\">Liste Demande Pack</a>
                                                <small class=\"text-muted mb-0\">Liste des demandes de packs</small>
                                            </div>
                                            <div class=\"dropdown-shortcuts-item col\">
                                                <span class=\"dropdown-shortcuts-icon rounded-circle mb-2\">
                                                    <i class=\"ti ti-chart-bar fs-4\"></i>
                                                </span>
                                                <a href=\"{{ path('admin_advanced_statistiques_index') }}\" class=\"stretched-link\">Advanced Statistiques</a>
                                                <small class=\"text-muted mb-0\">advanced statistiques</small>
                                            </div>
                                        </div>
                                        <div class=\"row row-bordered overflow-visible g-0\">
                                            <div class=\"dropdown-shortcuts-item col\"></div>
                                            <div class=\"dropdown-shortcuts-item col\">
                                                <span class=\"dropdown-shortcuts-icon rounded-circle mb-2\">
                                                    <i class=\"ti ti-bell notification-bell-big fs-4\"></i>
                                                </span>
                                                <a href=\"{{ path('admin_notifications') }}\" class=\"stretched-link\">Notifications</a>
                                                <small class=\"text-muted mb-0\">Notifications</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- Quick links -->

                            <!-- Notification -->
                            <li class=\"nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1\">
                                <a
                                    class=\"nav-link dropdown-toggle hide-arrow\"
                                    href=\"javascript:void(0);\"
                                    data-bs-toggle=\"dropdown\"
                                    data-bs-auto-close=\"outside\"
                                    aria-expanded=\"false\">
                                    <i class=\"ti ti-bell notification-bell-big fs-4\"></i>
                                    <span id=\"unreadCountBadge\" class=\"badge bg-danger rounded-pill badge-notifications\">0</span>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                    <li class=\"dropdown-menu-header border-bottom\">
                                        <div class=\"dropdown-header d-flex align-items-center py-3\">
                                            <h5 class=\"text-body mb-0 me-auto\">Notifications</h5>
                                            <a
                                                href=\"javascript:void(0)\"
                                                class=\"dropdown-notifications-all text-body\"
                                                data-bs-toggle=\"tooltip\"
                                                data-bs-placement=\"top\"
                                                title=\"Marquer tout comme lu\"
                                                ><i class=\"ti ti-mail-opened fs-4\"></i
                                            ></a>
                                        </div>
                                    </li>
                                    <li class=\"dropdown-notifications-list scrollable-container\" style=\"max-height: 320px; overflow-y: auto;\">
                                        <ul class=\"list-group list-group-flush\" style=\"max-height: 320px; overflow-y: auto;\">
                                            {% for notification in latestNotifications|slice(0, 4) %}
                                                <li class=\"list-group-item list-group-item-action dropdown-notifications-item p-0\">
                                                    <a href=\"{{ path('admin_customize_pack_show', {'id': notification.demandePack.id}) }}\" class=\"d-flex align-items-stretch text-decoration-none text-dark w-100 p-3\" style=\"cursor:pointer;\">
                                                        <div class=\"flex-shrink-0 me-3\">
                                                            <div class=\"avatar\">
                                                                <span class=\"avatar-initial rounded-circle bg-label-info\"><i class=\"ti ti-bell notification-bell-big fs-4\"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class=\"flex-grow-1\">
                                                            <h6 class=\"mb-1\">{{ notification.titre|default('Notification') }}</h6>
                                                            <p class=\"mb-0\" title=\"{{ notification.message|striptags }}\">
                                                                {{ notification.summary is defined and notification.summary ? notification.summary : notification.message|striptags|length > 80 ? notification.message|striptags|slice(0, 80) ~ '…' : notification.message|striptags }}
                                                            </p>
                                                            <small class=\"text-muted\">{{ notification.dateCreation ? notification.dateCreation|date('d/m/Y H:i') : '' }}</small>
                                                        </div>
                                                        <div class=\"flex-shrink-0 dropdown-notifications-actions align-self-center\">
                                                            <span class=\"badge badge-dot\"></span>
                                                        </div>
                                                    </a>
                                                </li>
                                            {% else %}
                                                <li class=\"list-group-item text-center text-muted\">No notifications</li>
                                            {% endfor %}
                                        </ul>
                                    </li>
                                    <li class=\"dropdown-menu-footer border-top\">
                                        <a
                                            href=\"javascript:void(0);\"
                                            class=\"dropdown-item d-flex justify-content-center text-primary p-2 h-px-40 mb-1 align-items-center\">
                                            View all notifications
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ Notification -->

                            <!-- User -->
                            <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\">
                                    <div class=\"avatar avatar-online\">
                                        <img src=\"{{ asset('img/avatars/1.png') }}\" alt class=\"h-auto rounded-circle\">
                                    </div>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                    <li>
                                        <a class=\"dropdown-item\" href=\"#\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 me-3\">
                                                    <div class=\"avatar avatar-online\">
                                                        <img src=\"{{ asset('img/avatars/1.png') }}\" alt class=\"h-auto rounded-circle\">
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <span class=\"fw-semibold d-block\">Admin</span>
                                                    <small class=\"text-muted\">Administrateur</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class=\"dropdown-divider\"></div>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"#\">
                                            <i class=\"ti ti-user-check me-2 ti-sm\"></i>
                                            <span class=\"align-middle\">Mon profil</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"#\">
                                            <i class=\"ti ti-settings me-2 ti-sm\"></i>
                                            <span class=\"align-middle\">Paramètres</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                        <!-- END: Customize Pack Navbar Section -->
                    </div>
                </nav>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y\">
                        <!-- Page Title -->
                        <div class=\"row mb-4\">
                            <div class=\"col-12\">
                                <div class=\"dashboard-card p-4\" data-aos=\"fade-up\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div>
                                            <h3 class=\"mb-1\">Statistiques Avancées 📊</h3>
                                            <p class=\"text-muted mb-0\">Analyse détaillée des performances de votre entreprise</p>
                                        </div>
                                        <div class=\"d-flex gap-3 mt-6\" style=\"margin-top: 10rem !important;\">
    <!-- Spacer to prevent overlap -->

                                            <a href=\"{{ path('admin_advanced_statistiques_admin_advanced_statistiques_download_pdf') }}\" class=\"btn btn-primary d-flex align-items-center gap-2\" target=\"_blank\">
    <i class=\"ri-download-cloud-2-line\"></i> Télécharger Rapport
</a>
                                            <button class=\"btn btn-light\" id=\"refreshStats\">
                                                <i class=\"ri-refresh-line\"></i>
                                            </button>
                                            <a href=\"{{ path('admin_advanced_statistiques_demande_packs') }}\" class=\"btn btn-gradient-primary d-flex align-items-center gap-2\" style=\"background: linear-gradient(90deg, #7367F0 0%, #A9B6FF 100%); color: #fff; border: none; box-shadow: 0 4px 12px rgba(115,103,240,0.15); transition: transform 0.2s;\">
    <i class=\"ri-rocket-2-line fs-4\"></i> Demander un Pack
</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Chart Search Bar -->
                        <input type=\"text\" id=\"chartSearchInput\" class=\"form-control ms-2 d-none\" placeholder=\"Rechercher un graphique... (Ctrl+/)\" autocomplete=\"off\" style=\"width: 260px; position: absolute; top: 40px; left: 0; z-index: 1050;\" />
                        <div id=\"chartSearchResults\" class=\"dropdown-menu show d-none\" style=\"position: absolute; top: 70px; left: 0; width: 260px; z-index: 1060; max-height: 250px; overflow-y: auto;\"></div>
                        <button id=\"openSearchBar\" class=\"btn btn-outline-primary position-absolute\" style=\"top:40px; left:270px; z-index:1061;\">🔍</button>

                        <!-- Key Metrics -->
                        <div class=\"row mb-4\">
                            <!-- Total Packs -->
                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card stat-card bg-primary bg-opacity-10 cursor-pointer\" id=\"dashboardCardTotalPacks\" onclick=\"showAdvancedStatDetails('packs')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Total Packs</h6>
                                            <h2 class=\"mb-0\" id=\"totalPacks\">{{ packStats.total_packs }}</h2>
                                            <small class=\"text-success d-flex align-items-center mt-2\">
                                                <i class=\"ri-arrow-up-line me-1\"></i> +{{ packStats.growth_rate }}%
                                            </small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-package-line text-primary\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-primary\" style=\"width: {{ packStats.growth_rate }}%\"></div>
                                    </div>
                                </div>
                                <!-- Dynamic Stat Panel (in-page, not modal) -->
<div style=\"width:80vw;position:relative\">
  <div id=\"dynamicStatPanel\" class=\"my-4 w-100\" style=\"width:100vw;\">
    <!-- Stat panel content will be injected here dynamically -->
  </div>
</div>
<script>
    // Fetch stat data via AJAX and update the panel
    function renderStatPanel(statKey) {
        fetch(`/admin/advanced-statistiques/stat-data/\${statKey}`)
            .then(response => response.json())
            .then(stat => {
                let title, icon, value, growth, desc, chartLabel, chartData;
                if (statKey === 'packs') {
                    title = 'Total Packs';
                    icon = 'ri-package-line text-primary';
                    value = stat.total_packs;
                    growth = '+' + stat.growth_rate + '%';
                    chartLabel = 'Packs créés';
                    chartData = stat.chart_data;
                } else if (statKey === 'users') {
                    title = 'Total Utilisateurs';
                    icon = 'ri-user-line text-success';
                    value = stat.total_users;
                    growth = '+' + stat.growth_rate + '%';
                    chartLabel = 'Nouveaux utilisateurs';
                    chartData = stat.chart_data;
                } else if (statKey === 'mostSoldPack') {
                    title = 'Pack le Plus Vendu';
                    icon = 'ri-award-line text-warning';
                    value = stat.total_sales;
                    growth = '';
                    desc = stat.description;
                    chartLabel = 'Ventes';
                    chartData = stat.chart_data;
                } else if (statKey === 'avgPrice') {
                    title = 'Prix Moyen des Packs';
                    icon = 'ri-money-euro-circle-line text-info';
                    value = '€' + stat.averagePackPrice;
                    growth = '';
                    chartLabel = 'Prix moyen';
                    chartData = stat.chart_data || [];
                }

                let growthHtml = growth ? `<span class=\"badge bg-success ms-2\">\${growth}</span>` : '';
                let descHtml = desc ? `<small class='text-muted d-block mt-2'>\${desc}</small>` : '';
                document.getElementById('dynamicStatPanel').innerHTML = `
                    <div class='dashboard-card p-4 mb-4 w-100' style=\"width:100%;\">
                        <div class='d-flex align-items-center mb-3'>
                            <i class='\${icon} fs-2 me-2'></i>
                            <h4 class='mb-0'>\${title}</h4>
                        </div>
                        <div class='d-flex align-items-center mb-3'>
                            <h2 class='mb-0'>\${value}</h2>
                            \${growthHtml}
                        </div>
                        \${descHtml}
                        <div style='height: 220px;'>
                            <canvas id='statPanelChart'></canvas>
                        </div>
                    </div>
                `;
                if (window.statPanelChartInstance) window.statPanelChartInstance.destroy();
                const ctx = document.getElementById('statPanelChart').getContext('2d');
                window.statPanelChartInstance = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: chartData.map(item => item.label),
                        datasets: [{
                            label: chartLabel,
                            data: chartData.map(item => item.value),
                            backgroundColor: 'rgba(115,103,240,0.08)',
                            borderColor: '#7367F0',
                            borderWidth: 2,
                            tension: 0.4,
                            pointRadius: 3
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: { legend: { display: false } },
                        scales: {
                            y: { beginAtZero: true },
                            x: { title: { display: false } }
                        }
                    }
                });
            });
    }
    // Card click handlers
    document.addEventListener('DOMContentLoaded', function() {
        renderStatPanel('packs'); // Default
        document.querySelectorAll('.stat-card.cursor-pointer').forEach(card => {
            card.addEventListener('click', function() {
                if (this.onclick) {
                    // If already handled by inline onclick, skip
                    return;
                }
                let type = this.getAttribute('onclick')?.match(/showAdvancedStatDetails\\('(.+?)'\\)/);
                type = type ? type[1] : this.dataset.statType;
                renderStatPanel(type);
            });
        });
        // Also support inline onclick attributes
        window.showAdvancedStatDetails = renderStatPanel;
    });
</script>
<!-- Chart.js CDN -->
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

                            </div>

                            <!-- Total Users -->
                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"dashboard-card stat-card bg-success bg-opacity-10 cursor-pointer\" id=\"dashboardCardTotalUtilisateurs\" onclick=\"showAdvancedStatDetails('users')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Total Utilisateurs</h6>
                                            <h2 class=\"mb-0\">{{ userStats.total_users }}</h2>
                                            <small class=\"text-success d-flex align-items-center mt-2\">
                                                <i class=\"ri-arrow-up-line me-1\"></i> +{{ userStats.growth_rate }}%
                                            </small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-user-line text-success\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-success\" style=\"width: {{ userStats.growth_rate }}%\"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Most Sold Pack -->
                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                                <div class=\"dashboard-card stat-card bg-warning bg-opacity-10 cursor-pointer\" id=\"dashboardCardMostSoldPack\" onclick=\"showAdvancedStatDetails('mostSoldPack')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Pack le Plus Vendu</h6>
                                            <h2 class=\"mb-0\">{{ mostSoldPack.total_sales }}</h2>
                                            <small class=\"text-muted d-flex align-items-center mt-2\">
                                                {{ mostSoldPack.description|length > 20 ? mostSoldPack.description|slice(0, 20) ~ '...' : mostSoldPack.description }}
                                            </small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-award-line text-warning fs-2\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-warning\" style=\"width: 65%\"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Average Pack Price -->
                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                                <div class=\"dashboard-card stat-card bg-info bg-opacity-10 cursor-pointer\" id=\"dashboardCardAvgPrice\" onclick=\"showAdvancedStatDetails('avgPrice')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Prix Moyen des Packs</h6>
                                            <h2 class=\"mb-0\">€{{ averagePackPrice }}</h2>
                                            <small class=\"text-muted d-flex align-items-center mt-2\">
                                                Basé sur tous les packs
                                            </small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-money-euro-circle-line text-info fs-2\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-info\" style=\"width: 75%\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Charts Row -->
                        <div class=\"row mb-4\">
                            <!-- Reservation Trends -->
                            <div class=\"col-lg-8\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Tendance des Réservations</h5>
                                            <p class=\"text-muted mb-0\">Évolution hebdomadaire des réservations</p>
                                        </div>
                                        <div class=\"btn-group\">
                                            <button class=\"btn btn-outline-primary btn-sm active\">Semaine</button>
                                            <button class=\"btn btn-outline-primary btn-sm\">Mois</button>
                                            <button class=\"btn btn-outline-primary btn-sm\">Année</button>
                                        </div>
                                    </div>
                                    <div class=\"chart-container\" style=\"height: 300px;\">
                                        <canvas id=\"reservationTrendsChart\"></canvas>
                                    </div>
                                </div>
                            </div>

                            <!-- Pack Type Distribution -->
                            <div class=\"col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Types de Packs</h5>
                                            <p class=\"text-muted mb-0\">Distribution par catégorie</p>
                                        </div>
                                        <button class=\"btn btn-light btn-sm\">
                                            <i class=\"ri-more-2-fill fs-4\"></i>
                                        </button>
                                    </div>
                                    <div class=\"chart-container\" style=\"height: 300px;\">
                                        <canvas id=\"packTypeChart\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Active vs Inactive Packs -->
                        <div class=\"row mb-4\">
                            <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Packs Actifs vs Inactifs</h5>
                                            <p class=\"text-muted mb-0\">Statut actuel des packs</p>
                                        </div>
                                    </div>
                                    <div class=\"d-flex justify-content-center\">
                                        <div class=\"chart-container\" style=\"height: 250px; width: 250px;\">
                                            <canvas id=\"activeInactiveChart\"></canvas>
                                        </div>
                                    </div>
                                    <div class=\"d-flex justify-content-around mt-4\">
                                        <div class=\"text-center\">
                                            <h5 class=\"mb-0\">{{ activeInactivePacks.active_packs }}</h5>
                                            <p class=\"text-muted\">Packs Actifs</p>
                                        </div>
                                        <div class=\"text-center\">
                                            <h5 class=\"mb-0\">{{ activeInactivePacks.inactive_packs }}</h5>
                                            <p class=\"text-muted\">Packs Inactifs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Location Reservations -->
                            <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Réservations par Lieu</h5>
                                            <p class=\"text-muted mb-0\">Distribution géographique</p>
                                        </div>
                                    </div>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover\">
                                            <thead>
                                                <tr>
                                                    <th>Lieu</th>
                                                    <th>Réservations</th>
                                                    <th>Pourcentage</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {% set totalReservations = 0 %}
                                                {% for location in locationReservations %}
                                                    {% set totalReservations = totalReservations + location.reservation_count %}
                                                {% endfor %}
                                                
                                                {% for location in locationReservations %}
                                                    <tr>
                                                        <td>{{ location.location }}</td>
                                                        <td>{{ location.reservation_count }}</td>
                                                        <td>
                                                            {% set percentage = totalReservations > 0 ? (location.reservation_count / totalReservations * 100)|round : 0 %}
                                                            <div class=\"d-flex align-items-center\">
                                                                <div class=\"progress flex-grow-1 me-2\" style=\"height: 6px;\">
                                                                    <div class=\"progress-bar bg-primary\" style=\"width: {{ percentage }}%\"></div>
                                                                </div>
                                                                <span>{{ percentage }}%</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Monthly Revenue Chart -->
                        <div class=\"row mb-4\">
                            <div class=\"col-12\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Revenus Mensuels</h5>
                                            <p class=\"text-muted mb-0\">Évolution des revenus sur l'année {{ monthlyRevenue.monthly_data[0].month_name }} - {{ monthlyRevenue.monthly_data[11].month_name }}</p>
                                        </div>
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"me-4\">
                                                <h6 class=\"mb-0\">Revenu Total</h6>
                                                <h4 class=\"mb-0\">€{{ monthlyRevenue.total_revenue|number_format(2, ',', ' ') }}</h4>
                                            </div>
                                            <div>
                                                <span class=\"badge bg-{{ monthlyRevenue.year_over_year_growth > 0 ? 'success' : 'danger' }} p-2\">
                                                    <i class=\"ri-{{ monthlyRevenue.year_over_year_growth > 0 ? 'arrow-up' : 'arrow-down' }}-line me-1\"></i>
                                                    {{ monthlyRevenue.year_over_year_growth }}% vs année précédente
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"chart-container\" style=\"height: 350px;\">
                                        <canvas id=\"monthlyRevenueChart\"></canvas>
                                    </div>
                                    <div class=\"row mt-4\">
                                        <div class=\"col-md-4 text-center\">
                                            <h6 class=\"text-muted\">Ventes Totales</h6>
                                            <h4>{{ monthlyRevenue.total_sales }}</h4>
                                        </div>
                                        <div class=\"col-md-4 text-center\">
                                            <h6 class=\"text-muted\">Revenu Moyen par Vente</h6>
                                            <h4>€{{ monthlyRevenue.avg_revenue_per_sale|number_format(2, ',', ' ') }}</h4>
                                        </div>
                                        <div class=\"col-md-4 text-center\">
                                            <h6 class=\"text-muted\">Croissance Annuelle</h6>
                                            <h4 class=\"text-{{ monthlyRevenue.year_over_year_growth > 0 ? 'success' : 'danger' }}\">
                                                {{ monthlyRevenue.year_over_year_growth > 0 ? '+' : '' }}{{ monthlyRevenue.year_over_year_growth }}%
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Customer Satisfaction -->
                        <div class=\"row mb-4\">
                            <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Satisfaction Client</h5>
                                            <p class=\"text-muted mb-0\">Basé sur {{ customerSatisfaction.total_reviews }} avis</p>
                                        </div>
                                        <div>
                                            <h2 class=\"mb-0\">{{ customerSatisfaction.avg_rating }}/5</h2>
                                        </div>
                                    </div>
                                    <div class=\"rating-bars mb-4\">
                                        {% for i in 5..1 %}
                                            <div class=\"d-flex align-items-center mb-2\">
                                                <div class=\"me-2\" style=\"width: 30px;\">{{ i }} ★</div>
                                                <div class=\"progress satisfaction-bar flex-grow-1 me-2\">
                                                    {% set percentage = customerSatisfaction.total_reviews > 0 ? (customerSatisfaction.rating_distribution[i] / customerSatisfaction.total_reviews * 100) : 0 %}
                                                    <div class=\"progress-bar bg-{{ i >= 4 ? 'success' : (i == 3 ? 'warning' : 'danger') }}\" style=\"width: {{ percentage }}%\"></div>
                                                </div>
                                                <div style=\"width: 50px;\">{{ customerSatisfaction.rating_distribution[i] }}</div>
                                            </div>
                                        {% endfor %}
                                    </div>
                                    <div class=\"text-center\">
                                        <div class=\"rating-circle mx-auto\">
                                            <svg viewBox=\"0 0 36 36\" class=\"circular-chart\">
                                                <path class=\"circle-bg\" d=\"M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831\"/>
                                                <path class=\"circle\" stroke-dasharray=\"{{ customerSatisfaction.satisfaction_rate }}, 100\" d=\"M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831\"/>
                                                <text x=\"18\" y=\"20.35\" class=\"percentage\">{{ customerSatisfaction.satisfaction_rate }}%</text>
                                            </svg>
                                        </div>
                                        <p class=\"mt-2\">Taux de Satisfaction</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Tendance de Satisfaction</h5>
                                            <p class=\"text-muted mb-0\">Évolution mensuelle de la satisfaction client</p>
                                        </div>
                                    </div>
                                    <div class=\"chart-container\" style=\"height: 300px;\">
                                        <canvas id=\"satisfactionTrendChart\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Pack Performance Comparison -->
                        <div class=\"row mb-4\">
                            <div class=\"col-12\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Comparaison de Performance des Packs</h5>
                                            <p class=\"text-muted mb-0\">{{ packPerformanceComparison.current_month }} vs {{ packPerformanceComparison.previous_month }}</p>
                                        </div>
                                    </div>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover\">
                                            <thead>
                                                <tr>
                                                    <th>Pack</th>
                                                    <th>Ventes Actuelles</th>
                                                    <th>Ventes Précédentes</th>
                                                    <th>Croissance</th>
                                                    <th>Revenu Actuel</th>
                                                    <th>Revenu Précédent</th>
                                                    <th>Croissance</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {% for pack in packPerformanceComparison.comparison_data %}
                                                    <tr>
                                                        <td>{{ pack.description|length > 30 ? pack.description|slice(0, 30) ~ '...' : pack.description }}</td>
                                                        <td>{{ pack.current_month_sales }}</td>
                                                        <td>{{ pack.previous_month_sales }}</td>
                                                        <td>
                                                            <span class=\"badge bg-{{ pack.sales_growth > 0 ? 'success' : (pack.sales_growth < 0 ? 'danger' : 'secondary') }}\">
                                                                {{ pack.sales_growth > 0 ? '+' : '' }}{{ pack.sales_growth }}%
                                                            </span>
                                                        </td>
                                                        <td>€{{ pack.current_month_revenue|number_format(2, ',', ' ') }}</td>
                                                        <td>€{{ pack.previous_month_revenue|number_format(2, ',', ' ') }}</td>
                                                        <td>
                                                            <span class=\"badge bg-{{ pack.revenue_growth > 0 ? 'success' : (pack.revenue_growth < 0 ? 'danger' : 'secondary') }}\">
                                                                {{ pack.revenue_growth > 0 ? '+' : '' }}{{ pack.revenue_growth }}%
                                                            </span>
                                                        </td>
                                                    </tr>
                                                {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Seasonal Trends -->
                        <div class=\"row mb-4\">
                            <div class=\"col-lg-8\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Tendances Saisonnières</h5>
                                            <p class=\"text-muted mb-0\">Distribution des réservations par saison</p>
                                        </div>
                                    </div>
                                    <div class=\"chart-container\" style=\"height: 300px;\">
                                        <canvas id=\"seasonalTrendsChart\"></canvas>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Distribution Saisonnière</h5>
                                            <p class=\"text-muted mb-0\">Répartition des revenus par saison</p>
                                        </div>
                                    </div>
                                    <div class=\"chart-container\" style=\"height: 300px;\">
                                        <canvas id=\"seasonalDistributionChart\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Top Performing Locations & Conversion Rates -->
                        <div class=\"row mb-4\">
                            <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Lieux les Plus Performants</h5>
                                            <p class=\"text-muted mb-0\">Classement par revenu généré</p>
                                        </div>
                                    </div>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover\">
                                            <thead>
                                                <tr>
                                                    <th>Lieu</th>
                                                    <th>Réservations</th>
                                                    <th>Revenu</th>
                                                    <th>% du Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {% for location in topPerformingLocations.locations|slice(0, 5) %}
                                                    <tr>
                                                        <td>{{ location.location }}</td>
                                                        <td>{{ location.reservation_count }}</td>
                                                        <td>€{{ location.total_revenue|number_format(2, ',', ' ') }}</td>
                                                        <td>
                                                            <div class=\"d-flex align-items-center\">
                                                                <div class=\"progress flex-grow-1 me-2\" style=\"height: 6px;\">
                                                                    <div class=\"progress-bar bg-primary\" style=\"width: {{ location.revenue_percentage }}%\"></div>
                                                                </div>
                                                                <span>{{ location.revenue_percentage }}%</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Taux de Conversion</h5>
                                            <p class=\"text-muted mb-0\">Efficacité du processus de réservation</p>
                                        </div>
                                    </div>
                                    <div class=\"row mb-4\">
                                        <div class=\"col-md-4 text-center\">
                                            <div class=\"metric-item p-3\">
                                                <h6 class=\"text-muted\">Vues → Réservations</h6>
                                                <h3>{{ conversionRates.view_to_reservation_rate }}%</h3>
                                                <small>{{ conversionRates.total_reservations }} / {{ conversionRates.total_views }}</small>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4 text-center\">
                                            <div class=\"metric-item p-3\">
                                                <h6 class=\"text-muted\">Réservations → Confirmations</h6>
                                                <h3>{{ conversionRates.reservation_to_confirmation_rate }}%</h3>
                                                <small>{{ conversionRates.confirmed_reservations }} / {{ conversionRates.total_reservations }}</small>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4 text-center\">
                                            <div class=\"metric-item p-3\">
                                                <h6 class=\"text-muted\">Taux Global</h6>
                                                <h3>{{ conversionRates.overall_conversion_rate }}%</h3>
                                                <small>{{ conversionRates.confirmed_reservations }} / {{ conversionRates.total_views }}</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"chart-container\" style=\"height: 200px;\">
                                        <canvas id=\"conversionTrendChart\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Client Retention & Pack Category Performance -->
                        <div class=\"row mb-4\">
                            <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Fidélisation Client</h5>
                                            <p class=\"text-muted mb-0\">Analyse de la rétention et fidélité client</p>
                                        </div>
                                    </div>
                                    <div class=\"row mb-4\">
                                        <div class=\"col-md-4 text-center\">
                                            <div class=\"metric-item p-3\">
                                                <h6 class=\"text-muted\">Clients Totaux</h6>
                                                <h3>{{ clientRetentionRate.total_clients }}</h3>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4 text-center\">
                                            <div class=\"metric-item p-3\">
                                                <h6 class=\"text-muted\">Clients Fidèles</h6>
                                                <h3>{{ clientRetentionRate.returning_clients }}</h3>
                                                <small>{{ clientRetentionRate.retention_rate }}% de rétention</small>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4 text-center\">
                                            <div class=\"metric-item p-3\">
                                                <h6 class=\"text-muted\">Réservations/Client</h6>
                                                <h3>{{ clientRetentionRate.avg_reservations_per_client }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"mt-4\">
                                        <h6 class=\"mb-3\">Clients les Plus Fidèles</h6>
                                        <div class=\"table-responsive\">
                                            <table class=\"table table-sm table-hover\">
                                                <thead>
                                                    <tr>
                                                        <th>Client</th>
                                                        <th>Réservations</th>
                                                        <th>Dépenses Totales</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {% for client in clientRetentionRate.top_loyal_clients %}
                                                        <tr>
                                                            <td>{{ client.prenom }} {{ client.nom }}</td>
                                                            <td>{{ client.reservation_count }}</td>
                                                            <td>€{{ client.total_spent|number_format(2, ',', ' ') }}</td>
                                                        </tr>
                                                    {% endfor %}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Performance par Catégorie</h5>
                                            <p class=\"text-muted mb-0\">Analyse des performances par type d'événement</p>
                                        </div>
                                    </div>
                                    <div class=\"chart-container\" style=\"height: 250px;\">
                                        <canvas id=\"categoryPerformanceChart\"></canvas>
                                    </div>
                                    <div class=\"table-responsive mt-4\">
                                        <table class=\"table table-sm table-hover\">
                                            <thead>
                                                <tr>
                                                    <th>Catégorie</th>
                                                    <th>Packs</th>
                                                    <th>Réservations</th>
                                                    <th>Revenu</th>
                                                    <th>Note Moyenne</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {% for category in packCategoryPerformance.categories %}
                                                    <tr>
                                                        <td>{{ category.categorie }}</td>
                                                        <td>{{ category.pack_count }}</td>
                                                        <td>{{ category.reservation_count }}</td>
                                                        <td>€{{ category.total_revenue|number_format(2, ',', ' ') }}</td>
                                                        <td>
                                                            <div class=\"d-flex align-items-center\">
                                                                <div class=\"me-2\">{{ category.avg_rating }}/5</div>
                                                                <div class=\"progress flex-grow-1\" style=\"height: 6px;\">
                                                                    <div class=\"progress-bar bg-warning\" style=\"width: {{ (category.avg_rating / 5) * 100 }}%\"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class=\"content-footer footer bg-footer-theme\">
                        <div class=\"container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column\">
                            <div class=\"mb-2 mb-md-0\">
                                2023 Golden Touch
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

        <!-- Overlay -->
        <div class=\"layout-overlay layout-menu-toggle\"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class=\"drag-target\"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <script src=\"{{ asset('vendor/libs/jquery/jquery.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/popper/popper.js') }}\"></script>
    <script src=\"{{ asset('vendor/js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/node-waves/node-waves.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/i18n/i18n.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/typeahead-js/typeahead.js') }}\"></script>
    <script src=\"{{ asset('vendor/js/menu.js') }}\"></script>

    <!-- Vendors JS -->
    <script src=\"{{ asset('vendor/libs/apex-charts/apexcharts.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/swiper/swiper.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/select2/select2.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/flatpickr/flatpickr.js') }}\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js\"></script>

    <!-- Main JS -->
    <script src=\"{{ asset('js/main.js') }}\"></script>

    <!-- Dynamic Stat Panel JS (updates in-page, not modal) -->
<script>
function showAdvancedStatDetails(type) {
  const stats = {
    packs: {
      title: 'Détails des Packs',
      icon: 'ri-package-line text-primary',
      color: 'primary',
      today: {
        value: 25,
        growth: '+15%'
      },
      thisWeek: {
        value: 142,
        growth: '+22%'
      },
      thisMonth: {
        value: 587,
        growth: '+12.5%'
      },
      thisYear: {
        value: 2845,
        growth: '+18.3%'
      },
      totalSales: {{ packStats.total_packs }},
      growthRate: '+{{ packStats.growth_rate }}%'
    },
    users: {
      title: 'Détails des Utilisateurs',
      icon: 'ri-user-line text-success',
      color: 'success',
      today: {
        value: 18,
        growth: '+10%'
      },
      thisWeek: {
        value: 98,
        growth: '+15%'
      },
      thisMonth: {
        value: 412,
        growth: '+8.5%'
      },
      thisYear: {
        value: 1845,
        growth: '+14.3%'
      },
      totalSales: {{ userStats.total_users }},
      growthRate: '+{{ userStats.growth_rate }}%'
    },
    mostSoldPack: {
      title: 'Détails du Pack le Plus Vendu',
      icon: 'ri-award-line text-warning',
      color: 'warning',
      today: {
        value: 8,
        growth: '+5%'
      },
      thisWeek: {
        value: 45,
        growth: '+12%'
      },
      thisMonth: {
        value: 187,
        growth: '+9.5%'
      },
      thisYear: {
        value: 945,
        growth: '+11.3%'
      },
      totalSales: {{ mostSoldPack.total_sales }},
      growthRate: '+12.5%'
    }
  };
  
  // Get the selected stat data
  const statData = stats[type];
  
  // Update modal content with the selected stat data
  document.getElementById('statDetailsTitle').textContent = statData.title;
  document.getElementById('statDetailsIcon').className = `\${statData.icon} text-\${statData.color}`;
  
  // Update the detailed statistics
  document.getElementById('statToday').textContent = statData.today.value;
  document.getElementById('statTodayGrowth').textContent = statData.today.growth;
  
  document.getElementById('statThisWeek').textContent = statData.thisWeek.value;
  document.getElementById('statThisWeekGrowth').textContent = statData.thisWeek.growth;
  
  document.getElementById('statThisMonth').textContent = statData.thisMonth.value;
  document.getElementById('statThisMonthGrowth').textContent = statData.thisMonth.growth;
  
  document.getElementById('statThisYear').textContent = statData.thisYear.value;
  document.getElementById('statThisYearGrowth').textContent = statData.thisYear.growth;
  
  document.getElementById('statTotalSales').textContent = statData.totalSales;
  document.getElementById('statTotalGrowth').textContent = statData.growthRate;
  
  // Show the modal
  const statDetailsModal = new bootstrap.Modal(document.getElementById('statDetailsModal'));
  statDetailsModal.show();
}
// Show packs panel by default on page load
window.addEventListener('DOMContentLoaded', function() {
  showAdvancedStatDetails('packs');
});
</script>

    <!-- Page JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS animations
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true
            });

            // Reservation Trends Chart
            const reservationTrendsCtx = document.getElementById('reservationTrendsChart').getContext('2d');
            const reservationTrendsChart = new Chart(reservationTrendsCtx, {
                type: 'line',
                data: {
                    labels: [
                        {% for trend in reservationTrends %}
                            '{{ trend.week|date(\"d M\") }}'{% if not loop.last %},{% endif %}
                        {% endfor %}
                    ],
                    datasets: [{
                        label: 'Réservations',
                        data: [
                            {% for trend in reservationTrends %}
                                {{ trend.reservation_count }}{% if not loop.last %},{% endif %}
                            {% endfor %}
                        ],
                        borderColor: '#7367F0',
                        backgroundColor: 'rgba(115, 103, 240, 0.1)',
                        borderWidth: 2,
                        pointBackgroundColor: '#7367F0',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2,
                        pointRadius: 4,
                        tension: 0.3,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false,
                            callbacks: {
                                label: function(context) {
                                    return `Réservations: \${context.raw}`;
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                drawBorder: false,
                                color: 'rgba(0, 0, 0, 0.05)'
                            },
                            ticks: {
                                stepSize: 5
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });

            // Pack Type Distribution Chart
            const packTypeCtx = document.getElementById('packTypeChart').getContext('2d');
            const packTypeChart = new Chart(packTypeCtx, {
                type: 'doughnut',
                data: {
                    labels: [
                        {% for type in packTypeDistribution %}
                            '{{ type.event_type }}'{% if not loop.last %},{% endif %}
                        {% endfor %}
                    ],
                    datasets: [{
                        data: [
                            {% for type in packTypeDistribution %}
                                {{ type.pack_count }}{% if not loop.last %},{% endif %}
                            {% endfor %}
                        ],
                        backgroundColor: [
                            '#7367F0',
                            '#28C76F',
                            '#FF9F43',
                            '#00CFE8',
                            '#EA5455',
                            '#A8A9AD'
                        ],
                        borderWidth: 0,
                        hoverOffset: 5
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutout: '70%',
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 15,
                                usePointStyle: true,
                                pointStyle: 'circle'
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || '';
                                    const value = context.raw || 0;
                                    const total = context.dataset.data.reduce((acc, data) => acc + data, 0);
                                    const percentage = Math.round((value / total) * 100);
                                    return `\${label}: \${value} (\${percentage}%)`;
                                }
                            }
                        }
                    }
                }
            });

            // Active vs Inactive Packs Chart
            const activeInactiveCtx = document.getElementById('activeInactiveChart').getContext('2d');
            const activeInactiveChart = new Chart(activeInactiveCtx, {
                type: 'pie',
                data: {
                    labels: ['Actifs', 'Inactifs'],
                    datasets: [{
                        data: [
                            {{ activeInactivePacks.active_packs }},
                            {{ activeInactivePacks.inactive_packs }}
                        ],
                        backgroundColor: [
                            '#28C76F',
                            '#EA5455'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 15,
                                usePointStyle: true,
                                pointStyle: 'circle'
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || '';
                                    const value = context.raw || 0;
                                    const total = context.dataset.data.reduce((acc, data) => acc + data, 0);
                                    const percentage = Math.round((value / total) * 100);
                                    return `\${label}: \${value} (\${percentage}%)`;
                                }
                            }
                        }
                    }
                }
            });
            
            // Monthly Revenue Chart
            const monthlyRevenueCtx = document.getElementById('monthlyRevenueChart').getContext('2d');
            const monthlyRevenueChart = new Chart(monthlyRevenueCtx, {
                type: 'bar',
                data: {
                    labels: [
                        {% for month in monthlyRevenue.monthly_data %}
                            '{{ month.month_name }}'{% if not loop.last %},{% endif %}
                        {% endfor %}
                    ],
                    datasets: [
                        {
                            label: 'Revenu',
                            data: [
                                {% for month in monthlyRevenue.monthly_data %}
                                    {{ month.revenue }}{% if not loop.last %},{% endif %}
                                {% endfor %}
                            ],
                            backgroundColor: 'rgba(115, 103, 240, 0.7)',
                            borderColor: '#7367F0',
                            borderWidth: 1,
                            borderRadius: 4,
                            order: 1
                        },
                        {
                            label: 'Ventes',
                            data: [
                                {% for month in monthlyRevenue.monthly_data %}
                                    {{ month.sales_count }}{% if not loop.last %},{% endif %}
                                {% endfor %}
                            ],
                            type: 'line',
                            borderColor: '#FF9F43',
                            backgroundColor: 'rgba(255, 159, 67, 0.1)',
                            borderWidth: 2,
                            pointBackgroundColor: '#FF9F43',
                            pointBorderColor: '#fff',
                            pointBorderWidth: 2,
                            pointRadius: 4,
                            tension: 0.3,
                            fill: false,
                            order: 0,
                            yAxisID: 'y1'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                            align: 'end'
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false,
                            callbacks: {
                                label: function(context) {
                                    if (context.dataset.label === 'Revenu') {
                                        return `Revenu: €\${context.raw.toLocaleString('fr-FR', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
                                    } else {
                                        return `Ventes: \${context.raw}`;
                                    }
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                drawBorder: false,
                                color: 'rgba(0, 0, 0, 0.05)'
                            },
                            ticks: {
                                callback: function(value) {
                                    return '€' + value.toLocaleString('fr-FR');
                                }
                            },
                            title: {
                                display: true,
                                text: 'Revenu'
                            }
                        },
                        y1: {
                            beginAtZero: true,
                            position: 'right',
                            grid: {
                                display: false
                            },
                            title: {
                                display: true,
                                text: 'Ventes'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
            
            // Satisfaction Trend Chart
            const satisfactionTrendCtx = document.getElementById('satisfactionTrendChart').getContext('2d');
            const satisfactionTrendChart = new Chart(satisfactionTrendCtx, {
                type: 'line',
                data: {
                    labels: [
                        {% for trend in customerSatisfaction.monthly_trend %}
                            '{{ trend.period }}'{% if not loop.last %},{% endif %}
                        {% endfor %}
                    ],
                    datasets: [
                        {
                            label: 'Note Moyenne',
                            data: [
                                {% for trend in customerSatisfaction.monthly_trend %}
                                    {{ trend.avg_rating }}{% if not loop.last %},{% endif %}
                                {% endfor %}
                            ],
                            borderColor: '#FF9F43',
                            backgroundColor: 'rgba(255, 159, 67, 0.1)',
                            borderWidth: 2,
                            pointBackgroundColor: '#FF9F43',
                            pointBorderColor: '#fff',
                            pointBorderWidth: 2,
                            pointRadius: 4,
                            tension: 0.3,
                            fill: true,
                            yAxisID: 'y'
                        },
                        {
                            label: 'Nombre d\\'Avis',
                            data: [
                                {% for trend in customerSatisfaction.monthly_trend %}
                                    {{ trend.review_count }}{% if not loop.last %},{% endif %}
                                {% endfor %}
                            ],
                            type: 'bar',
                            backgroundColor: 'rgba(115, 103, 240, 0.3)',
                            borderColor: '#7367F0',
                            borderWidth: 1,
                            borderRadius: 4,
                            yAxisID: 'y1'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                            align: 'end'
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false
                        }
                    },
                    scales: {
                        y: {
                            min: 0,
                            max: 5,
                            grid: {
                                drawBorder: false,
                                color: 'rgba(0, 0, 0, 0.05)'
                            },
                            title: {
                                display: true,
                                text: 'Note Moyenne'
                            }
                        },
                        y1: {
                            beginAtZero: true,
                            position: 'right',
                            grid: {
                                display: false
                            },
                            title: {
                                display: true,
                                text: 'Nombre d\\'Avis'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
            
            // Seasonal Trends Chart
            const seasonalTrendsCtx = document.getElementById('seasonalTrendsChart').getContext('2d');
            const seasonalTrendsChart = new Chart(seasonalTrendsCtx, {
                type: 'line',
                data: {
                    labels: [
                        {% for month in seasonalTrends.monthly_data %}
                            '{{ month.month }}'{% if not loop.last %},{% endif %}
                        {% endfor %}
                    ],
                    datasets: [
                        {
                            label: 'Réservations',
                            data: [
                                {% for month in seasonalTrends.monthly_data %}
                                    {{ month.reservation_count }}{% if not loop.last %},{% endif %}
                                {% endfor %}
                            ],
                            borderColor: '#7367F0',
                            backgroundColor: 'rgba(115, 103, 240, 0.1)',
                            borderWidth: 2,
                            pointBackgroundColor: '#7367F0',
                            pointBorderColor: '#fff',
                            pointBorderWidth: 2,
                            pointRadius: 4,
                            tension: 0.3,
                            fill: true
                        },
                        {
                            label: 'Revenu',
                            data: [
                                {% for month in seasonalTrends.monthly_data %}
                                    {{ month.revenue }}{% if not loop.last %},{% endif %}
                                {% endfor %}
                            ],
                            borderColor: '#28C76F',
                            backgroundColor: 'rgba(40, 199, 111, 0.1)',
                            borderWidth: 2,
                            pointBackgroundColor: '#28C76F',
                            pointBorderColor: '#fff',
                            pointBorderWidth: 2,
                            pointRadius: 4,
                            tension: 0.3,
                            fill: true,
                            hidden: true
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                            align: 'end'
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false,
                            callbacks: {
                                label: function(context) {
                                    if (context.dataset.label === 'Revenu') {
                                        return `Revenu: €\${context.raw.toLocaleString('fr-FR', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
                                    } else {
                                        return `Réservations: \${context.raw}`;
                                    }
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                drawBorder: false,
                                color: 'rgba(0, 0, 0, 0.05)'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
            
            // Seasonal Distribution Chart
            const seasonalDistributionCtx = document.getElementById('seasonalDistributionChart').getContext('2d');
            const seasonalDistributionChart = new Chart(seasonalDistributionCtx, {
                type: 'doughnut',
                data: {
                    labels: [
                        {% for season in seasonalTrends.seasonal_data %}
                            '{{ season.season }}'{% if not loop.last %},{% endif %}
                        {% endfor %}
                    ],
                    datasets: [{
                        data: [
                            {% for season in seasonalTrends.seasonal_data %}
                                {{ season.revenue }}{% if not loop.last %},{% endif %}
                            {% endfor %}
                        ],
                        backgroundColor: [
                            '#00CFE8', // Winter
                            '#28C76F', // Spring
                            '#FF9F43', // Summer
                            '#7367F0'  // Fall
                        ],
                        borderWidth: 0,
                        hoverOffset: 5
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutout: '70%',
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 15,
                                usePointStyle: true,
                                pointStyle: 'circle'
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || '';
                                    const value = context.raw || 0;
                                    const total = context.dataset.data.reduce((acc, data) => acc + data, 0);
                                    const percentage = Math.round((value / total) * 100);
                                    return `\${label}: €\${value.toLocaleString('fr-FR', {minimumFractionDigits: 2, maximumFractionDigits: 2})} (\${percentage}%)`;
                                }
                            }
                        }
                    }
                }
            });
            
            // Conversion Trend Chart
            const conversionTrendCtx = document.getElementById('conversionTrendChart').getContext('2d');
            const conversionTrendChart = new Chart(conversionTrendCtx, {
                type: 'line',
                data: {
                    labels: [
                        {% for trend in conversionRates.monthly_trend %}
                            '{{ trend.period }}'{% if not loop.last %},{% endif %}
                        {% endfor %}
                    ],
                    datasets: [{
                        label: 'Taux de Conversion',
                        data: [
                            {% for trend in conversionRates.monthly_trend %}
                                {{ trend.conversion_rate }}{% if not loop.last %},{% endif %}
                            {% endfor %}
                        ],
                        borderColor: '#7367F0',
                        backgroundColor: 'rgba(115, 103, 240, 0.1)',
                        borderWidth: 2,
                        pointBackgroundColor: '#7367F0',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2,
                        pointRadius: 4,
                        tension: 0.3,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false,
                            callbacks: {
                                label: function(context) {
                                    return `Taux de Conversion: \${context.raw}%`;
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                drawBorder: false,
                                color: 'rgba(0, 0, 0, 0.05)'
                            },
                            ticks: {
                                callback: function(value) {
                                    return value + '%';
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
            
            // Category Performance Chart
            const categoryPerformanceCtx = document.getElementById('categoryPerformanceChart').getContext('2d');
            const categoryPerformanceChart = new Chart(categoryPerformanceCtx, {
                type: 'bar',
                data: {
                    labels: [
                        {% for category in packCategoryPerformance.categories %}
                            '{{ category.categorie }}'{% if not loop.last %},{% endif %}
                        {% endfor %}
                    ],
                    datasets: [
                        {
                            label: 'Revenu',
                            data: [
                                {% for category in packCategoryPerformance.categories %}
                                    {{ category.total_revenue }}{% if not loop.last %},{% endif %}
                                {% endfor %}
                            ],
                            backgroundColor: 'rgba(115, 103, 240, 0.7)',
                            borderColor: '#7367F0',
                            borderWidth: 1,
                            borderRadius: 4
                        },
                        {
                            label: 'Note Moyenne',
                            data: [
                                {% for category in packCategoryPerformance.categories %}
                                    {{ category.avg_rating }}{% if not loop.last %},{% endif %}
                                {% endfor %}
                            ],
                            type: 'line',
                            borderColor: '#FF9F43',
                            backgroundColor: 'rgba(255, 159, 67, 0.1)',
                            borderWidth: 2,
                            pointBackgroundColor: '#FF9F43',
                            pointBorderColor: '#fff',
                            pointBorderWidth: 2,
                            pointRadius: 4,
                            tension: 0.3,
                            fill: false,
                            yAxisID: 'y1'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                            align: 'end'
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false,
                            callbacks: {
                                label: function(context) {
                                    if (context.dataset.label === 'Revenu') {
                                        return `Revenu: €\${context.raw.toLocaleString('fr-FR', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
                                    } else {
                                        return `Note Moyenne: \${context.raw}/5`;
                                    }
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                drawBorder: false,
                                color: 'rgba(0, 0, 0, 0.05)'
                            }
                        },
                        y1: {
                            beginAtZero: true,
                            position: 'right',
                            grid: {
                                display: false
                            },
                            ticks: {
                                max: 5,
                                stepSize: 1
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
            
            // Initialize AOS animations
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true
            });
            
            // Function to show detailed statistics when a card is clicked
            function showAdvancedStatDetails(statType) {
                // Default data structure for statistics
                const detailedStats = {
                    packs: {
                        title: 'Statistiques Détaillées des Packs',
                        icon: 'ri-package-line',
                        color: 'primary',
                        today: {
                            value: 25,
                            growth: '+15%'
                        },
                        thisWeek: {
                            value: 142,
                            growth: '+22%'
                        },
                        thisMonth: {
                            value: 587,
                            growth: '+12.5%'
                        },
                        thisYear: {
                            value: 2845,
                            growth: '+18.3%'
                        },
                        totalSales: {{ packStats.total_packs }},
                        growthRate: '+{{ packStats.growth_rate }}%'
                    },
                    users: {
                        title: 'Statistiques Détaillées des Utilisateurs',
                        icon: 'ri-user-line',
                        color: 'success',
                        today: {
                            value: 18,
                            growth: '+10%'
                        },
                        thisWeek: {
                            value: 98,
                            growth: '+15%'
                        },
                        thisMonth: {
                            value: 412,
                            growth: '+8.5%'
                        },
                        thisYear: {
                            value: 1845,
                            growth: '+14.3%'
                        },
                        totalSales: {{ userStats.total_users }},
                        growthRate: '+{{ userStats.growth_rate }}%'
                    },
                    mostSoldPack: {
                        title: 'Statistiques Détaillées du Pack le Plus Vendu',
                        icon: 'ri-award-line',
                        color: 'warning',
                        today: {
                            value: 8,
                            growth: '+5%'
                        },
                        thisWeek: {
                            value: 45,
                            growth: '+12%'
                        },
                        thisMonth: {
                            value: 187,
                            growth: '+9.5%'
                        },
                        thisYear: {
                            value: 945,
                            growth: '+11.3%'
                        },
                        totalSales: {{ mostSoldPack.total_sales }},
                        growthRate: '+12.5%'
                    }
                };
                
                // Get the selected stat data
                const statData = detailedStats[statType];
                
                // Update modal content with the selected stat data
                document.getElementById('statDetailsTitle').textContent = statData.title;
                document.getElementById('statDetailsIcon').className = `\${statData.icon} text-\${statData.color}`;
                
                // Update the detailed statistics
                document.getElementById('statToday').textContent = statData.today.value;
                document.getElementById('statTodayGrowth').textContent = statData.today.growth;
                
                document.getElementById('statThisWeek').textContent = statData.thisWeek.value;
                document.getElementById('statThisWeekGrowth').textContent = statData.thisWeek.growth;
                
                document.getElementById('statThisMonth').textContent = statData.thisMonth.value;
                document.getElementById('statThisMonthGrowth').textContent = statData.thisMonth.growth;
                
                document.getElementById('statThisYear').textContent = statData.thisYear.value;
                document.getElementById('statThisYearGrowth').textContent = statData.thisYear.growth;
                
                document.getElementById('statTotalSales').textContent = statData.totalSales;
                document.getElementById('statTotalGrowth').textContent = statData.growthRate;
                
                // Show the modal
                const statDetailsModal = new bootstrap.Modal(document.getElementById('statDetailsModal'));
                statDetailsModal.show();
            }
        });
    </script>
    
    <!-- Statistics Details Modal -->
    <div class=\"modal fade\" id=\"statDetailsModal\" tabindex=\"-1\" aria-labelledby=\"statDetailsModalLabel\" aria-hidden=\"true\">
        <!-- Modal removed: replaced by inline stats panel -->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"statDetailsModalLabel\">
                        <i id=\"statDetailsIcon\" class=\"ri-package-line text-primary me-2\"></i>
                        <span id=\"statDetailsTitle\">Statistiques Détaillées</span>
                    </h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row mb-4\">
                        <div class=\"col-12 mb-4\">
                            <div class=\"dashboard-card p-4\">
                                <h5 class=\"mb-3\">Total des Ventes</h5>
                                <div class=\"d-flex align-items-center\">
                                    <h2 class=\"mb-0\" id=\"statTotalSales\">0</h2>
                                    <span class=\"badge bg-success ms-2\" id=\"statTotalGrowth\">+0%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h5 class=\"mb-3\">Analyse des Ventes</h5>
                    <div class=\"row g-3 mb-4\">
                        <!-- Today -->
                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\"dashboard-card p-3\">
                                <h6 class=\"text-muted mb-2\">Aujourd'hui</h6>
                                <div class=\"d-flex align-items-baseline\">
                                    <h3 class=\"mb-0\" id=\"statToday\">25</h3>
                                    <small class=\"text-success ms-2\" id=\"statTodayGrowth\">+15%</small>
                                </div>
                            </div>
                        </div>
                        
                        <!-- This Week -->
                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\"dashboard-card p-3\">
                                <h6 class=\"text-muted mb-2\">Cette Semaine</h6>
                                <div class=\"d-flex align-items-baseline\">
                                    <h3 class=\"mb-0\" id=\"statThisWeek\">142</h3>
                                    <small class=\"text-success ms-2\" id=\"statThisWeekGrowth\">+22%</small>
                                </div>
                            </div>
                        </div>
                        
                        <!-- This Month -->
                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\"dashboard-card p-3\">
                                <h6 class=\"text-muted mb-2\">Ce Mois</h6>
                                <div class=\"d-flex align-items-baseline\">
                                    <h3 class=\"mb-0\" id=\"statThisMonth\">587</h3>
                                    <small class=\"text-success ms-2\" id=\"statThisMonthGrowth\">+12.5%</small>
                                </div>
                            </div>
                        </div>
                        
                        <!-- This Year -->
                        <div class=\"col-md-6 col-lg-3\">
                            <div class=\"dashboard-card p-3\">
                                <h6 class=\"text-muted mb-2\">Cette Année</h6>
                                <div class=\"d-flex align-items-baseline\">
                                    <h3 class=\"mb-0\" id=\"statThisYear\">2,845</h3>
                                    <small class=\"text-success ms-2\" id=\"statThisYearGrowth\">+18.3%</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"dashboard-card p-4\">
                                <h5 class=\"mb-3\">Tendance des Ventes</h5>
                                <div style=\"height: 250px;\">
                                    <canvas id=\"statDetailsTrendChart\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                    <button type=\"button\" class=\"btn btn-primary\">Télécharger le rapport</button>
                </div>
            </div>
        </div>
    </div>
<style>
.chart-highlight { box-shadow: 0 0 0 4px #7367F0AA; transition: box-shadow 0.3s; z-index: 10; position: relative; }
</style>
<script>
(function() {
    // Add highlight style for charts
    const style = document.createElement('style');
    style.innerHTML = `.chart-highlight { box-shadow: 0 0 0 4px #7367F0AA; transition: box-shadow 0.3s; z-index: 10; position: relative; }`;
    document.head.appendChild(style);
    const searchToggler = document.getElementById('openSearchBar');
    const searchInput = document.getElementById('chartSearchInput');
    const resultsBox = document.getElementById('chartSearchResults');
    let lastQuery = '';
    function openSearch() {
        searchInput.classList.remove('d-none');
        searchInput.focus();
        resultsBox.classList.remove('d-none');
        triggerChartSearch();
    }
    function closeSearch() {
        searchInput.value = '';
        searchInput.classList.add('d-none');
        resultsBox.classList.add('d-none');
        resultsBox.innerHTML = '';
    }
    function triggerChartSearch() {
        const q = searchInput.value.trim();
        if (!q) {
            resultsBox.innerHTML = '';
            resultsBox.classList.add('d-none');
            return;
        }
        fetch(`/admin/advanced-statistiques/search_charts.php?q=` + encodeURIComponent(q))
            .then(r => r.json())
            .then(data => {
                if (Array.isArray(data.results) && data.results.length > 0) {
                    resultsBox.innerHTML = data.results.map(item => {
                        // If it's a dashboard card, attach stat-key for dynamic panel
                        let statKey = '';
                        if (item.id === 'dashboardCardTotalPacks') statKey = 'packs';
                        if (item.id === 'dashboardCardTotalUtilisateurs') statKey = 'users';
                        if (item.id === 'dashboardCardMostSoldPack') statKey = 'mostSoldPack';
                        if (item.id === 'dashboardCardAvgPrice') statKey = 'avgPrice';
                        return `<div class='dropdown-item' data-chart-id='\${item.id}'\${statKey ? ` data-stat-key='\${statKey}'` : ''}>\${item.name}</div>`;
                    }).join('');
                } else {
                    resultsBox.innerHTML = \"<div class='dropdown-item text-muted'>Aucun graphique trouvé</div>\";
                }
                resultsBox.classList.remove('d-none');
            });
    }
    searchToggler.addEventListener('click', openSearch);
    document.addEventListener('keydown', function(e) {
        if ((e.ctrlKey && e.key === '/') || (e.ctrlKey && e.key === '÷')) {
            openSearch();
            e.preventDefault();
        } else if (e.key === 'Escape') {
            closeSearch();
        }
    });
    searchInput.addEventListener('input', function() {
        lastQuery = searchInput.value.trim();
        triggerChartSearch();
    });
    resultsBox.addEventListener('mousedown', function(e) {
        if (e.target.classList.contains('dropdown-item')) {
            searchInput.value = e.target.textContent;
            resultsBox.innerHTML = '';
            resultsBox.classList.add('d-none');
            // Scroll to chart and highlight
            const chartId = e.target.getAttribute('data-chart-id');
            const statKey = e.target.getAttribute('data-stat-key');
            if (statKey) {
                // For dynamic stat panels (cards)
                renderStatPanel(statKey);
                setTimeout(() => {
                    const panelElem = document.getElementById('dynamicStatPanel');
                    if (panelElem) {
                        panelElem.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        panelElem.classList.add('chart-highlight');
                        setTimeout(() => panelElem.classList.remove('chart-highlight'), 1500);
                    }
                }, 350); // allow panel to render
            } else if (chartId) {
                const chartElem = document.getElementById(chartId);
                if (chartElem) {
                    chartElem.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    chartElem.classList.add('chart-highlight');
                    setTimeout(() => chartElem.classList.remove('chart-highlight'), 1500);
                }
            }
        }
    });
})();
</script>
</body>
</html>", "admin/advanced_statistiques/index.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\admin\\advanced_statistiques\\index.html.twig");
    }
}
