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

/* admin/notifications/index.html.twig */
class __TwigTemplate_62ae5a050e8f3ec514cdac55172362c9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/notifications/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/notifications/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\" class=\"light-style layout-navbar-fixed layout-menu-fixed\" dir=\"ltr\" data-theme=\"theme-default\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>Gestion des Notifications - Tableau de Bord Admin</title>
    <meta name=\"description\" content=\"Gérer les notifications efficacement\" />
    
    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/favicon.ico"), "html", null, true);
        yield "\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\" />

    <!-- Icons -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fonts/fontawesome.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fonts/tabler-icons.css"), "html", null, true);
        yield "\" />

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/animate-css/animate.css"), "html", null, true);
        yield "\" />
    
    <style>
    /* Ensure notification dropdown scroll works and is visually consistent */
    .dropdown-notifications-list.scrollable-container {
        max-height: 320px;
        overflow-y: auto;
        min-width: 350px;
    }
    .dropdown-notifications-list .list-group {
        max-height: 320px;
        overflow-y: auto;
    }

        /* Glassmorphism Effects */
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

        /* Animation Effects */
        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }

        .slide-up {
            animation: slideUp 0.5s ease-in-out;
        }

        .pulse {
            animation: pulse 2s infinite;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(115, 103, 240, 0.4); }
            70% { box-shadow: 0 0 0 10px rgba(115, 103, 240, 0); }
            100% { box-shadow: 0 0 0 0 rgba(115, 103, 240, 0); }
        }

        .notification-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            animation: fadeIn 0.5s ease-in-out;
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(4px);
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }
        
        .notification-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px -5px rgba(115, 103, 240, 0.7);
        }
        
        .notification-card::after {
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

        .notification-card:active::after {
            transform: scale(0, 0);
            opacity: .3;
            transition: 0s;
        }
        
        .notification-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 1;
        }
        
        .quick-actions {
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .notification-card:hover .quick-actions {
            bottom: 10px;
            opacity: 1;
        }
        
        .gallery-view .notification-card {
            margin-bottom: 30px;
        }
        
        .view-toggle-btn.active {
            background-color: #7367f0;
            color: white;
            box-shadow: 0 8px 25px -8px rgba(115, 103, 240, 0.5);
        }
        
        .notification-stats {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 10px;
            background: rgba(0,0,0,0.6);
            color: white;
            opacity: 0;
            transition: opacity 0.3s ease;
            backdrop-filter: blur(4px);
        }
        
        .notification-card:hover .notification-stats {
            opacity: 1;
        }
        
        .table-view {
            display: none;
        }
        
        .gallery-view {
            display: block;
        }
        
        .view-toggle-btn {
            border: 1px solid #7367f0;
            color: #7367f0;
            background: white;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(115, 103, 240, 0.2);
        }
        
        .view-toggle-btn:hover {
            background: #7367f0;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px -5px rgba(115, 103, 240, 0.7);
        }

        /* Form Validation Animation */
        .form-control.is-valid, .was-validated .form-control:valid {
            animation: validPulse 0.5s ease-in-out;
        }

        .form-control.is-invalid, .was-validated .form-control:invalid {
            animation: invalidShake 0.5s ease-in-out;
        }

        @keyframes validPulse {
            0% { box-shadow: 0 0 0 0 rgba(40, 199, 111, 0.4); }
            70% { box-shadow: 0 0 0 10px rgba(40, 199, 111, 0); }
            100% { box-shadow: 0 0 0 0 rgba(40, 199, 111, 0); }
        }

        @keyframes invalidShake {
            0%, 100% { transform: translateX(0); }
            20%, 60% { transform: translateX(-5px); }
            40%, 80% { transform: translateX(5px); }
        }

        /* Background Effect */
        .bg-dots {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
            opacity: 0.4;
            background-image: radial-gradient(circle, #7367f0 1px, transparent 1px);
            background-size: 30px 30px;
        }
    </style>

    <!-- Page CSS -->
    
    <!-- Helpers -->
    <script src=\"";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/config.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/sweetalert2/sweetalert2.js"), "html", null, true);
        yield "\"></script>
</head>

<body>
    <!-- Layout wrapper -->
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
        // line 301
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
        // line 315
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
            
          <!-- Layout page -->
          <div class=\"layout-page\">
            <!-- Navbar -->
            <nav class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\"
              id=\"layout-navbar\">
              <div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none\">
                <a class=\"nav-item nav-link px-0 me-xl-4\" href=\"javascript:void(0)\">
                  <i class=\"ti ti-menu-2 ti-sm\"></i>
                </a>
              </div>

            <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
              <!-- Search -->
              <div class=\"navbar-nav align-items-center\">
                <div class=\"navbar-nav align-items-center position-relative\">
                  <div class=\"nav-item navbar-search-wrapper mb-0\">
                    <a class=\"nav-item nav-link search-toggler d-flex align-items-center px-0\" id=\"admin-notification-search-bar-trigger\" href=\"javascript:void(0);\">
                      <i class=\"ti ti-search ti-md me-2\"></i>
                      <span class=\"d-none d-md-inline-block text-muted\">Rechercher (Ctrl+/)</span>
                    </a>
                    <div id=\"admin-notification-search-dropdown\" style=\"display:none; position:absolute; top:100%; left:0; z-index:9999; min-width:260px; background:white; box-shadow:0 6px 24px rgba(0,0,0,0.13); border-radius:8px; padding:12px;\">
                      <form method=\"get\" action=\"";
        // line 471
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_notifications");
        yield "\" style=\"margin:0;\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"q\" id=\"admin-notification-search-input-navbar\" class=\"form-control\" value=\"";
        // line 473
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 473, $this->source); })()), "request", [], "any", false, false, false, 473), "get", ["q"], "method", false, false, false, 473), "html", null, true);
        yield "\" placeholder=\"Rechercher par 'Message' ou 'Créé le'...\" autocomplete=\"off\" autofocus>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
<script>
(function() {
  const trigger = document.getElementById('admin-notification-search-bar-trigger');
  const dropdown = document.getElementById('admin-notification-search-dropdown');
  const input = document.getElementById('admin-notification-search-input-navbar');
  let isOpen = false;
  let debounceTimer = null;
  const form = input && input.closest('form');

  function openDropdown() {
    dropdown.style.display = 'block';
    setTimeout(() => { input && input.focus(); }, 50);
    isOpen = true;
  }
  function closeDropdown() {
    dropdown.style.display = 'none';
    isOpen = false;
  }

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
  });
  document.addEventListener('mousedown', function(e) {
    if (isOpen && !dropdown.contains(e.target) && !trigger.contains(e.target)) {
      closeDropdown();
    }
  });
  if (input && form) {
    input.addEventListener('input', function() {
      if (debounceTimer) clearTimeout(debounceTimer);
      debounceTimer = setTimeout(function() {
        // AJAX search
        const query = input.value;
        const url = form.action + '?q=' + encodeURIComponent(query);
        fetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest' } })
          .then(response => response.text())
          .then(html => {
            document.getElementById('notifications-table-body').innerHTML = html;
            // Optionally, re-bind delete/mark-as-read events here if needed
          });
      }, 400);
    });
    // Prevent default submit
    form.addEventListener('submit', function(e) {
      e.preventDefault();
    });
  }
})();
</script>
              <!-- /Search -->

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
                    <i class=\"ti ti-layout-grid-add ti-md\"></i>
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
        // line 615
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_advanced_statistiques_demande_packs");
        yield "\" class=\"stretched-link\">Liste Demande Pack</a>
                          <small class=\"text-muted mb-0\">Liste des demandes de packs</small>
                        </div>
                        <div class=\"dropdown-shortcuts-item col\">
                          <span class=\"dropdown-shortcuts-icon rounded-circle mb-2\">
                            <i class=\"ti ti-chart-bar fs-4\"></i>
                          </span>
                          <a href=\"";
        // line 622
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_advanced_statistiques_index");
        yield "\" class=\"stretched-link\">Advanced Statistiques</a>
                          <small class=\"text-muted mb-0\">advanced statistiques</small>
                        </div>
                      </div>
                      <div class=\"row row-bordered overflow-visible g-0\">
                        <div class=\"dropdown-shortcuts-item col\">
                          
                        <div class=\"dropdown-shortcuts-item col\">
                          <span class=\"dropdown-shortcuts-icon rounded-circle mb-2\">
                            <i class=\"ti ti-bell fs-4\"></i>
                          </span>
                          <a href=\"";
        // line 633
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_notifications");
        yield "\" class=\"stretched-link\">Notifications</a>
                          <small class=\"text-muted mb-0\">Notifications</small>
                        </div>
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
        <i class=\"ti ti-bell ti-md\"></i>
        <span id=\"unreadCountBadge\" class=\"badge bg-danger rounded-pill badge-notifications\">0</span>
    </a>
                  <ul class=\"dropdown-menu dropdown-menu-end py-0\">
                    <li class=\"dropdown-menu-header border-bottom\">
                      <div class=\"dropdown-header d-flex align-items-center py-3\">
                        <h5 class=\"text-body mb-0 me-auto\">Notifications</h5>
                        <a
                           href=\"javascript:void(0)\"
                           id=\"mark-all-notifications-read\"
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
        // line 674
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["latestNotifications"]) || array_key_exists("latestNotifications", $context) ? $context["latestNotifications"] : (function () { throw new RuntimeError('Variable "latestNotifications" does not exist.', 674, $this->source); })()), 0, 4));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 675
            yield "                            <li class=\"list-group-item list-group-item-action dropdown-notifications-item p-0\">
                                <a href=\"";
            // line 676
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customize_pack_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "demandePack", [], "any", false, false, false, 676), "id", [], "any", false, false, false, 676)]), "html", null, true);
            yield "\" class=\"d-flex align-items-stretch text-decoration-none text-dark w-100 p-3\" style=\"cursor:pointer;\">
                                    <div class=\"flex-shrink-0 me-3\">
                                        <div class=\"avatar\">
                                            <span class=\"avatar-initial rounded-circle bg-label-info\"><i class=\"ti ti-bell\"></i></span>
                                        </div>
                                    </div>
                                    <div class=\"flex-grow-1\">
                                        <h6 class=\"mb-1\">";
            // line 683
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "titre", [], "any", true, true, false, 683)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "titre", [], "any", false, false, false, 683), "Notification")) : ("Notification")), "html", null, true);
            yield "</h6>
                                        <p class=\"mb-0\" title=\"";
            // line 684
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 684)), "html", null, true);
            yield "\">
    ";
            // line 685
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "summary", [], "any", true, true, false, 685) && CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "summary", [], "any", false, false, false, 685))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "summary", [], "any", false, false, false, 685), "html", null, true)) : ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 685))) > 80)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 685)), 0, 80) . "…"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 685)), "html", null, true)))));
            yield "
</p>
                                        <small class=\"text-muted\">";
            // line 687
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "dateCreation", [], "any", false, false, false, 687)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "dateCreation", [], "any", false, false, false, 687), "d/m/Y H:i"), "html", null, true)) : (""));
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
        // line 694
        if (!$context['_iterated']) {
            // line 695
            yield "                            <li class=\"list-group-item text-center text-muted\">No notifications</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['notification'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 697
        yield "                            
                        </li>
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
                  <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                    <div class=\"avatar avatar-online\">
    <img src=\"";
        // line 716
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatars/1.png"), "html", null, true);
        yield "\" alt class=\"h-auto rounded-circle\" />
                    </div>
                  </a>
                  <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li>
                      <a class=\"dropdown-item\" href=\"pages-account-settings-account.html\">
                        <div class=\"d-flex\">
                          <div class=\"flex-shrink-0 me-3\">
                            <div class=\"avatar avatar-online\">
    <img src=\"";
        // line 725
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatars/1.png"), "html", null, true);
        yield "\" alt class=\"h-auto rounded-circle\" />
                            </div>
                          </div>
                          <div class=\"flex-grow-1\">
                            <span class=\"fw-semibold d-block\">John Doe</span>
                            <small class=\"text-muted\">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class=\"dropdown-divider\"></div>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"pages-profile-user.html\">
                        <i class=\"ti ti-user-check me-2 ti-sm\"></i>
                        <span class=\"align-middle\">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"pages-account-settings-account.html\">
                        <i class=\"ti ti-settings me-2 ti-sm\"></i>
                        <span class=\"align-middle\">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"pages-account-settings-billing.html\">
                        <span class=\"d-flex align-items-center align-middle\">
                          <i class=\"flex-shrink-0 ti ti-credit-card me-2 ti-sm\"></i>
                          <span class=\"flex-grow-1 align-middle\">Billing</span>
                          <span class=\"flex-shrink-0 badge badge-center rounded-pill bg-label-danger w-px-20 h-px-20\"
                            >2</span
                          >
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class=\"dropdown-divider\"></div>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"pages-help-center-landing.html\">
                        <i class=\"ti ti-lifebuoy me-2 ti-sm\"></i>
                        <span class=\"align-middle\">Help</span>
                      </a>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"pages-faq.html\">
                        <i class=\"ti ti-help me-2 ti-sm\"></i>
                        <span class=\"align-middle\">FAQ</span>
                      </a>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"pages-pricing.html\">
                        <i class=\"ti ti-currency-dollar me-2 ti-sm\"></i>
                        <span class=\"align-middle\">Pricing</span>
                      </a>
                    </li>
                    <li>
                      <div class=\"dropdown-divider\"></div>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"auth-login-cover.html\" target=\"_blank\">
                        <i class=\"ti ti-logout me-2 ti-sm\"></i>
                        <span class=\"align-middle\">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>

            <!-- Search Small Screens -->
            <div class=\"navbar-search-wrapper search-input-wrapper d-none\">
              <input
                type=\"text\"
                class=\"form-control search-input container-xxl border-0\"
                placeholder=\"Search...\"
                aria-label=\"Search...\" />
              <i class=\"ti ti-x ti-sm search-toggler cursor-pointer\"></i>
            </div>
          </nav>

            </nav>
            <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y\">
                        <h4 class=\"fw-bold py-3 mb-4\">Notifications Management</h4>

                        <!-- Notifications List -->
                        <div class=\"card\">
                            <div class=\"card-header border-bottom\">
                                <h5 class=\"card-title mb-3\">Notifications</h5>
                                <div class=\"d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0\">
                                    <div class=\"col-md-4 user_role\"></div>
                                    <div class=\"col-md-4 user_plan\"></div>
                                    <div class=\"col-md-4 user_status\"></div>
                                </div>
                            </div>
                            <div class=\"px-3 pt-3\">
    <div class=\"glass-panel mb-3 p-3 d-flex flex-wrap align-items-center justify-content-between\" style=\"box-shadow:0 2px 24px rgba(115,103,240,0.08);\">
        <form id=\"notification-filter-form\" class=\"row g-2 w-100\" method=\"get\" action=\"\">
            <div class=\"col-md-3 col-12\">
                <select class=\"form-select\" name=\"status\" id=\"notification-status-select\">
                    <option value=\"all\" ";
        // line 832
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 832, $this->source); })()), "request", [], "any", false, false, false, 832), "get", ["status", "all"], "method", false, false, false, 832) == "all")) {
            yield "selected";
        }
        yield ">Tous les statuts</option>
                    <option value=\"LU\" ";
        // line 833
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 833, $this->source); })()), "request", [], "any", false, false, false, 833), "get", ["status"], "method", false, false, false, 833) == "LU")) {
            yield "selected";
        }
        yield ">Lu</option>
                    <option value=\"NON_LU\" ";
        // line 834
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 834, $this->source); })()), "request", [], "any", false, false, false, 834), "get", ["status"], "method", false, false, false, 834) == "NON_LU")) {
            yield "selected";
        }
        yield ">Non lu</option>
                </select>
            </div>
            <div class=\"col-md-3 col-12\">
                <input type=\"date\" class=\"form-control\" name=\"date\" id=\"notification-date-input\" value=\"";
        // line 838
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 838, $this->source); })()), "request", [], "any", false, false, false, 838), "get", ["date", ""], "method", false, false, false, 838), "html", null, true);
        yield "\">
            </div>
            <div class=\"col-md-6 col-12 text-end\">
                <span class=\"text-muted small\">Filtrez par statut ou date pour trouver rapidement vos notifications.</span>
            </div>
        </form>
    </div>
</div>
<div class=\"card-datatable table-responsive\">
    <table class=\"datatables-users table border-top\">
        <thead>
<tr>
    <th><input type=\"checkbox\" id=\"select-all-notifications\" class=\"form-check-input\" aria-label=\"Tout sélectionner\"></th>
    
    <th>Message</th>
    <th>Statut</th>
    <th>Créé le</th>
    <th>Actions</th>
</tr>
</thead>
                                    <tbody id=\"notifications-table-body\">
    ";
        // line 859
        yield from $this->loadTemplate("admin/notifications/_table_rows.html.twig", "admin/notifications/index.html.twig", 859)->unwrap()->yield(CoreExtension::merge($context, ["notifications" => (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 859, $this->source); })())]));
        // line 860
        yield "</tbody>
<style>
.notification-row.notification-read {
    background: rgba(220, 255, 220, 0.6);
    transition: background 0.2s;
}
.notification-row.notification-unread {
    background: rgba(255, 240, 200, 0.7);
    transition: background 0.2s;
}
.notification-row:hover {
    background: rgba(115, 103, 240, 0.08) !important;
    box-shadow: 0 2px 16px rgba(115, 103, 240, 0.08);
}
</style>
                                </table>
<!-- Floating Bulk Actions Bar -->
<div id=\"bulk-actions-bar\" class=\"position-fixed bottom-0 start-50 translate-middle-x bg-white shadow-lg rounded-pill p-3 d-flex gap-3 align-items-center animate__animated animate__fadeInUp d-none\" style=\"z-index:1055; min-width:320px; margin-bottom:32px;\">
    <button id=\"bulk-delete-btn\" class=\"btn btn-danger btn-icon rounded-circle pulse\" title=\"Supprimer la sélection\">
        <i class=\"ti ti-trash\"></i>
    </button>
    <button id=\"bulk-mark-read-btn\" class=\"btn btn-success btn-icon rounded-circle pulse\" title=\"Marquer comme lues\">
        <i class=\"ti ti-mail-opened\"></i>
    </button>
    <span class=\"ms-2 fw-semibold\"><span id=\"bulk-selected-count\">0</span> sélectionné(s)</span>
</div>
<!-- Bulk Actions JS -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const selectAll = document.getElementById('select-all-notifications');
        const bulkActionsBar = document.getElementById('bulk-actions-bar');
        const bulkDeleteBtn = document.getElementById('bulk-delete-btn');
        const bulkMarkReadBtn = document.getElementById('bulk-mark-read-btn');
        const bulkSelectedCount = document.getElementById('bulk-selected-count');
        function getSelectedCheckboxes() {
            return Array.from(document.querySelectorAll('.notification-checkbox:checked'));
        }
        function updateBulkBar() {
            const checked = getSelectedCheckboxes();
            if (checked.length > 0) {
                bulkActionsBar.classList.remove('d-none');
                bulkSelectedCount.textContent = checked.length;
            } else {
                bulkActionsBar.classList.add('d-none');
                bulkSelectedCount.textContent = 0;
            }
        }
        // Select all logic
        if (selectAll) {
            selectAll.addEventListener('change', function() {
                document.querySelectorAll('.notification-checkbox').forEach(cb => {
                    cb.checked = selectAll.checked;
                });
                updateBulkBar();
            });
        }
        // Individual checkbox logic
        document.addEventListener('change', function(e) {
            if (e.target.classList.contains('notification-checkbox')) {
                const all = document.querySelectorAll('.notification-checkbox');
                const checked = document.querySelectorAll('.notification-checkbox:checked');
                if (selectAll) selectAll.checked = all.length === checked.length;
                updateBulkBar();
            }
        });
        // Bulk delete
        if (bulkDeleteBtn) {
            bulkDeleteBtn.addEventListener('click', function() {
                const ids = getSelectedCheckboxes().map(cb => cb.value);
                if (!ids.length) return;
                Swal.fire({
                    title: 'Supprimer les notifications sélectionnées?',
                    text: `Vous êtes sur le point de supprimer \${ids.length} notification(s). Cette action est irréversible!`,
                    icon: 'warning',
                    showCancelButton: true,
                    
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Oui, supprimer',
                    cancelButtonText: 'Annuler'
                }).then((result) => {
                    if (result.isConfirmed) {
                        fetch('/admin/notifications/bulk-delete', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': document.querySelector('meta[name=\"csrf-token\"]')?.content
                            },
                            body: JSON.stringify({ ids })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Supprimé !',
                                    text: 'Les notifications ont été supprimées.',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                                ids.forEach(id => {
                                    const row = document.querySelector(`.notification-checkbox[value=\"\${id}\"]`).closest('tr');
                                    if (row) row.remove();
                                });
                                updateBulkBar();
                            } else {
                                throw new Error(data.message || 'Erreur lors de la suppression');
                            }
                        })
                        .catch(error => {
                            Swal.fire({
                                icon: 'error',
                                title: 'Erreur !',
                                text: error.message,
                                confirmButtonText: 'OK'
                            });
                        });
                    }
                });
            });
        }
        // Bulk mark as read
        if (bulkMarkReadBtn) {
            bulkMarkReadBtn.addEventListener('click', function() {
                const ids = getSelectedCheckboxes().map(cb => cb.value);
                if (!ids.length) return;
                Swal.fire({
                    title: 'Marquer comme lues?',
                    text: `Vous êtes sur le point de marquer \${ids.length} notification(s) comme lues.`,
                    icon: 'info',
                    showCancelButton: true,
                    
                    confirmButtonColor: '#28a745',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Oui, marquer comme lues',
                    cancelButtonText: 'Annuler'
                }).then((result) => {
                    if (result.isConfirmed) {
                        fetch('/admin/notifications/bulk-mark-read', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': document.querySelector('meta[name=\"csrf-token\"]')?.content
                            },
                            body: JSON.stringify({ ids })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Marqué comme lu !',
                                    text: 'Les notifications ont été mises à jour.',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                                ids.forEach(id => {
                                    const row = document.querySelector(`.notification-checkbox[value=\"\${id}\"]`).closest('tr');
                                    if (row) {
                                        row.classList.remove('notification-unread');
                                        row.classList.add('notification-read');
                                        row.querySelector('.badge').classList.remove('bg-warning','text-dark');
                                        row.querySelector('.badge').classList.add('bg-success');
                                        row.querySelector('.badge').textContent = 'Lu';
                                    }
                                });
                                updateBulkBar();
                            } else {
                                throw new Error(data.message || 'Erreur lors de la mise à jour');
                            }
                        })
                        .catch(error => {
                            Swal.fire({
                                icon: 'error',
                                title: 'Erreur !',
                                text: error.message,
                                confirmButtonText: 'OK'
                            });
                        });
                    }
                });
            });
        }
    });
</script>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class=\"content-footer footer bg-footer-theme\">
                        <div class=\"container-xxl\">
                            <div class=\"footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column\">
                                <div>
                                    2023, made with by <a href=\"https://pixinvent.com\" target=\"_blank\" class=\"fw-semibold\">Pixinvent</a>
                                </div>
                                <div>
                                    <a href=\"https://themeforest.net/licenses/standard\" class=\"footer-link me-4\" target=\"_blank\">License</a>
                                    <a href=\"https://1.envato.market/pixinvent_portfolio\" target=\"_blank\" class=\"footer-link me-4\">More Themes</a>
                                    <a href=\"https://demos.pixinvent.com/vuexy-html-admin-template/documentation/\" target=\"_blank\" class=\"footer-link me-4\">Documentation</a>
                                    <a href=\"https://pixinvent.ticksy.com/\" target=\"_blank\" class=\"footer-link d-none d-sm-inline-block\">Support</a>
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

        <!-- Overlay -->
        <div class=\"layout-overlay layout-menu-toggle\"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class=\"drag-target\"></div>
    </div>
    <!-- / Layout wrapper -->
    <script>
        \$(document).ready(function() {
            // Function to show success message
            function showSuccess(message) {
                Swal.fire({
                    title: 'Succès!',
                    text: message,
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500,
                    customClass: {
                        popup: 'animate__animated animate__fadeIn'
                    }
                });
            }

            // Function to show error message
            function showError(message) {
                Swal.fire({
                    title: 'Erreur!',
                    text: message,
                    icon: 'error',
                    confirmButtonText: 'OK',
                    customClass: {
                        popup: 'animate__animated animate__shakeX'
                    }
                });
            }

            // Function to show confirmation dialog
            function showConfirmation(title, text, callback) {
                Swal.fire({
                    title: title,
                    text: text,
                    icon: 'warning',
                    showCancelButton: true,
                    
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Oui',
                    cancelButtonText: 'Non',
                    customClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        callback();
                    }
                });
            }

            // Handle notification deletion
            \$('.delete-notification').on('click', function(e) {
                e.preventDefault();
                const notificationId = \$(this).data('id');
                
                showConfirmation(
                    'Êtes-vous sûr?',
                    'Voulez-vous vraiment supprimer cette notification?',
                    function() {
                        \$.ajax({
                            url: `/admin/notifications/\${notificationId}/delete`,
                            method: 'DELETE',
                            success: function(response) {
                                showSuccess('Notification supprimée avec succès!');
                                // Remove the notification from the UI with animation
                                \$(`#notification-\${notificationId}`).fadeOut(300, function() {
                                    \$(this).remove();
                                });
                            },
                            error: function() {
                                showError('Une erreur est survenue lors de la suppression.');
                            }
                        });
                    }
                );
            });

            // Handle mark as read
            \$('.mark-as-read').on('click', function(e) {
                e.preventDefault();
                const notificationId = \$(this).data('id');
                
                \$.ajax({
                    url: `/admin/notifications/\${notificationId}/mark-read`,
                    method: 'POST',
                    success: function(response) {
                        showSuccess('Notification marquée comme lue!');
                        \$(`#notification-\${notificationId}`).removeClass('unread').addClass('read');
                    },
                    error: function() {
                        showError('Une erreur est survenue.');
                    }
                });
            });
        });
    </script>


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src=\"";
        // line 1185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/sweetalert2/sweetalert2.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/notifications.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>

    <script>
        // Delete notification handler
        document.querySelectorAll('.delete-notification').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const notificationId = this.dataset.id;
                
                Swal.fire({
                    title: 'Êtes-vous sûr ?',
                    text: \"Cette action est irréversible !\",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Oui, supprimer',
                    cancelButtonText: 'Annuler',
                    customClass: {
                        confirmButton: 'btn btn-primary me-3',
                        cancelButton: 'btn btn-label-secondary'
                    },
                    buttonsStyling: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        fetch(`/admin/notifications/delete/\${notificationId}`, {
                            method: 'DELETE',
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Supprimé !',
                                    text: 'La notification a été supprimée avec succès.',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then(() => {
                                    const row = this.closest('tr');
                                    row.remove();
                                    updateUnreadCount();
                                });
                            } else {
                                throw new Error(data.message || 'Erreur lors de la suppression');
                            }
                        })
                        .catch(error => {
                            Swal.fire({
                                icon: 'error',
                                title: 'Erreur !',
                                text: error.message,
                                confirmButtonText: 'OK'
                            });
                        });
                    }
                });
            });
        });

    // Fetch unread notifications count
    function fetchUnreadCount() {
        fetch('";
        // line 1252
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_notifications_count");
        yield "')
            .then(response => response.json())
            .then(data => {
                const badges = document.querySelectorAll('#unreadCountBadge, .badge-notifications');
                badges.forEach(badge => {
                    badge.textContent = data.count;
                    if (data.count === 0) {
                        badge.style.display = 'none';
                    } else {
                        badge.style.display = 'inline';
                    }
                });
            })
            .catch(error => {
                console.error('Error fetching unread count:', error);
            });
    }

    // Check for new notifications every 30 seconds
    setInterval(fetchUnreadCount, 30000);

    // Initial fetch
    document.addEventListener('DOMContentLoaded', fetchUnreadCount);
    document.addEventListener('DOMContentLoaded', function() {
        const filterForm = document.getElementById('notification-filter-form');
        const statusSelect = document.getElementById('notification-status-select');
        const dateInput = document.getElementById('notification-date-input');
        function ajaxFilterNotifications() {
            const params = new URLSearchParams();
            if (statusSelect.value) params.append('status', statusSelect.value);
            if (dateInput.value) params.append('date', dateInput.value);
            fetch(filterForm.action + '?' + params.toString(), { headers: { 'X-Requested-With': 'XMLHttpRequest' } })
                .then(response => response.text())
                .then(html => {
                    document.getElementById('notifications-table-body').innerHTML = html;
                });
        }
        statusSelect.addEventListener('change', function(e) {
            e.preventDefault();
            ajaxFilterNotifications();
        });
        dateInput.addEventListener('change', function(e) {
            e.preventDefault();
            ajaxFilterNotifications();
        });
        filterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            ajaxFilterNotifications();
        });
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const markAllBtn = document.getElementById('mark-all-notifications-read');
    if (markAllBtn) {
        markAllBtn.addEventListener('click', function() {
            fetch(\"";
        // line 1309
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_notifications_mark_all_read");
        yield "\", {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '";
        // line 1314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("mark_all_notifications"), "html", null, true);
        yield "'
                },
                body: JSON.stringify({})
            })
            .then(response => response.json())
            .then(data => {
                if(data.success) {
                    // Remove unread badge or visually mark all as read
                    document.querySelectorAll('.badge-dot').forEach(badge => badge.classList.remove('badge-dot'));
                    // Optionally update unread count to 0
                    const badges = document.querySelectorAll('#unreadCountBadge, .badge-notifications');
                    badges.forEach(badge => {
                        badge.textContent = 0;
                        badge.style.display = 'none';
                    });
                }
            });
        });
    }
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
        return "admin/notifications/index.html.twig";
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
        return array (  1520 => 1314,  1512 => 1309,  1452 => 1252,  1387 => 1190,  1383 => 1189,  1379 => 1188,  1375 => 1187,  1371 => 1186,  1367 => 1185,  1040 => 860,  1038 => 859,  1014 => 838,  1005 => 834,  999 => 833,  993 => 832,  883 => 725,  871 => 716,  850 => 697,  843 => 695,  841 => 694,  829 => 687,  824 => 685,  820 => 684,  816 => 683,  806 => 676,  803 => 675,  798 => 674,  754 => 633,  740 => 622,  730 => 615,  585 => 473,  580 => 471,  421 => 315,  404 => 301,  349 => 249,  345 => 248,  341 => 247,  126 => 35,  122 => 34,  118 => 33,  114 => 32,  110 => 31,  106 => 30,  102 => 29,  98 => 28,  94 => 27,  88 => 24,  84 => 23,  80 => 22,  74 => 19,  70 => 18,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" class=\"light-style layout-navbar-fixed layout-menu-fixed\" dir=\"ltr\" data-theme=\"theme-default\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>Gestion des Notifications - Tableau de Bord Admin</title>
    <meta name=\"description\" content=\"Gérer les notifications efficacement\" />
    
    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/favicon/favicon.ico') }}\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\" />

    <!-- Icons -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/fonts/fontawesome.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/fonts/tabler-icons.css') }}\" />

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
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/animate-css/animate.css') }}\" />
    
    <style>
    /* Ensure notification dropdown scroll works and is visually consistent */
    .dropdown-notifications-list.scrollable-container {
        max-height: 320px;
        overflow-y: auto;
        min-width: 350px;
    }
    .dropdown-notifications-list .list-group {
        max-height: 320px;
        overflow-y: auto;
    }

        /* Glassmorphism Effects */
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

        /* Animation Effects */
        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }

        .slide-up {
            animation: slideUp 0.5s ease-in-out;
        }

        .pulse {
            animation: pulse 2s infinite;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(115, 103, 240, 0.4); }
            70% { box-shadow: 0 0 0 10px rgba(115, 103, 240, 0); }
            100% { box-shadow: 0 0 0 0 rgba(115, 103, 240, 0); }
        }

        .notification-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            animation: fadeIn 0.5s ease-in-out;
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(4px);
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }
        
        .notification-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px -5px rgba(115, 103, 240, 0.7);
        }
        
        .notification-card::after {
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

        .notification-card:active::after {
            transform: scale(0, 0);
            opacity: .3;
            transition: 0s;
        }
        
        .notification-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 1;
        }
        
        .quick-actions {
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .notification-card:hover .quick-actions {
            bottom: 10px;
            opacity: 1;
        }
        
        .gallery-view .notification-card {
            margin-bottom: 30px;
        }
        
        .view-toggle-btn.active {
            background-color: #7367f0;
            color: white;
            box-shadow: 0 8px 25px -8px rgba(115, 103, 240, 0.5);
        }
        
        .notification-stats {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 10px;
            background: rgba(0,0,0,0.6);
            color: white;
            opacity: 0;
            transition: opacity 0.3s ease;
            backdrop-filter: blur(4px);
        }
        
        .notification-card:hover .notification-stats {
            opacity: 1;
        }
        
        .table-view {
            display: none;
        }
        
        .gallery-view {
            display: block;
        }
        
        .view-toggle-btn {
            border: 1px solid #7367f0;
            color: #7367f0;
            background: white;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(115, 103, 240, 0.2);
        }
        
        .view-toggle-btn:hover {
            background: #7367f0;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px -5px rgba(115, 103, 240, 0.7);
        }

        /* Form Validation Animation */
        .form-control.is-valid, .was-validated .form-control:valid {
            animation: validPulse 0.5s ease-in-out;
        }

        .form-control.is-invalid, .was-validated .form-control:invalid {
            animation: invalidShake 0.5s ease-in-out;
        }

        @keyframes validPulse {
            0% { box-shadow: 0 0 0 0 rgba(40, 199, 111, 0.4); }
            70% { box-shadow: 0 0 0 10px rgba(40, 199, 111, 0); }
            100% { box-shadow: 0 0 0 0 rgba(40, 199, 111, 0); }
        }

        @keyframes invalidShake {
            0%, 100% { transform: translateX(0); }
            20%, 60% { transform: translateX(-5px); }
            40%, 80% { transform: translateX(5px); }
        }

        /* Background Effect */
        .bg-dots {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
            opacity: 0.4;
            background-image: radial-gradient(circle, #7367f0 1px, transparent 1px);
            background-size: 30px 30px;
        }
    </style>

    <!-- Page CSS -->
    
    <!-- Helpers -->
    <script src=\"{{ asset('vendor/js/helpers.js') }}\"></script>
    <script src=\"{{ asset('js/config.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/sweetalert2/sweetalert2.js') }}\"></script>
</head>

<body>
    <!-- Layout wrapper -->
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
            
          <!-- Layout page -->
          <div class=\"layout-page\">
            <!-- Navbar -->
            <nav class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\"
              id=\"layout-navbar\">
              <div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none\">
                <a class=\"nav-item nav-link px-0 me-xl-4\" href=\"javascript:void(0)\">
                  <i class=\"ti ti-menu-2 ti-sm\"></i>
                </a>
              </div>

            <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
              <!-- Search -->
              <div class=\"navbar-nav align-items-center\">
                <div class=\"navbar-nav align-items-center position-relative\">
                  <div class=\"nav-item navbar-search-wrapper mb-0\">
                    <a class=\"nav-item nav-link search-toggler d-flex align-items-center px-0\" id=\"admin-notification-search-bar-trigger\" href=\"javascript:void(0);\">
                      <i class=\"ti ti-search ti-md me-2\"></i>
                      <span class=\"d-none d-md-inline-block text-muted\">Rechercher (Ctrl+/)</span>
                    </a>
                    <div id=\"admin-notification-search-dropdown\" style=\"display:none; position:absolute; top:100%; left:0; z-index:9999; min-width:260px; background:white; box-shadow:0 6px 24px rgba(0,0,0,0.13); border-radius:8px; padding:12px;\">
                      <form method=\"get\" action=\"{{ path('admin_notifications') }}\" style=\"margin:0;\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"q\" id=\"admin-notification-search-input-navbar\" class=\"form-control\" value=\"{{ app.request.get('q') }}\" placeholder=\"Rechercher par 'Message' ou 'Créé le'...\" autocomplete=\"off\" autofocus>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
<script>
(function() {
  const trigger = document.getElementById('admin-notification-search-bar-trigger');
  const dropdown = document.getElementById('admin-notification-search-dropdown');
  const input = document.getElementById('admin-notification-search-input-navbar');
  let isOpen = false;
  let debounceTimer = null;
  const form = input && input.closest('form');

  function openDropdown() {
    dropdown.style.display = 'block';
    setTimeout(() => { input && input.focus(); }, 50);
    isOpen = true;
  }
  function closeDropdown() {
    dropdown.style.display = 'none';
    isOpen = false;
  }

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
  });
  document.addEventListener('mousedown', function(e) {
    if (isOpen && !dropdown.contains(e.target) && !trigger.contains(e.target)) {
      closeDropdown();
    }
  });
  if (input && form) {
    input.addEventListener('input', function() {
      if (debounceTimer) clearTimeout(debounceTimer);
      debounceTimer = setTimeout(function() {
        // AJAX search
        const query = input.value;
        const url = form.action + '?q=' + encodeURIComponent(query);
        fetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest' } })
          .then(response => response.text())
          .then(html => {
            document.getElementById('notifications-table-body').innerHTML = html;
            // Optionally, re-bind delete/mark-as-read events here if needed
          });
      }, 400);
    });
    // Prevent default submit
    form.addEventListener('submit', function(e) {
      e.preventDefault();
    });
  }
})();
</script>
              <!-- /Search -->

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
                    <i class=\"ti ti-layout-grid-add ti-md\"></i>
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
                        <div class=\"dropdown-shortcuts-item col\">
                          
                        <div class=\"dropdown-shortcuts-item col\">
                          <span class=\"dropdown-shortcuts-icon rounded-circle mb-2\">
                            <i class=\"ti ti-bell fs-4\"></i>
                          </span>
                          <a href=\"{{ path('admin_notifications') }}\" class=\"stretched-link\">Notifications</a>
                          <small class=\"text-muted mb-0\">Notifications</small>
                        </div>
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
        <i class=\"ti ti-bell ti-md\"></i>
        <span id=\"unreadCountBadge\" class=\"badge bg-danger rounded-pill badge-notifications\">0</span>
    </a>
                  <ul class=\"dropdown-menu dropdown-menu-end py-0\">
                    <li class=\"dropdown-menu-header border-bottom\">
                      <div class=\"dropdown-header d-flex align-items-center py-3\">
                        <h5 class=\"text-body mb-0 me-auto\">Notifications</h5>
                        <a
                           href=\"javascript:void(0)\"
                           id=\"mark-all-notifications-read\"
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
                                            <span class=\"avatar-initial rounded-circle bg-label-info\"><i class=\"ti ti-bell\"></i></span>
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
                            
                        </li>
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
                  <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                    <div class=\"avatar avatar-online\">
    <img src=\"{{ asset('img/avatars/1.png') }}\" alt class=\"h-auto rounded-circle\" />
                    </div>
                  </a>
                  <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li>
                      <a class=\"dropdown-item\" href=\"pages-account-settings-account.html\">
                        <div class=\"d-flex\">
                          <div class=\"flex-shrink-0 me-3\">
                            <div class=\"avatar avatar-online\">
    <img src=\"{{ asset('img/avatars/1.png') }}\" alt class=\"h-auto rounded-circle\" />
                            </div>
                          </div>
                          <div class=\"flex-grow-1\">
                            <span class=\"fw-semibold d-block\">John Doe</span>
                            <small class=\"text-muted\">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class=\"dropdown-divider\"></div>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"pages-profile-user.html\">
                        <i class=\"ti ti-user-check me-2 ti-sm\"></i>
                        <span class=\"align-middle\">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"pages-account-settings-account.html\">
                        <i class=\"ti ti-settings me-2 ti-sm\"></i>
                        <span class=\"align-middle\">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"pages-account-settings-billing.html\">
                        <span class=\"d-flex align-items-center align-middle\">
                          <i class=\"flex-shrink-0 ti ti-credit-card me-2 ti-sm\"></i>
                          <span class=\"flex-grow-1 align-middle\">Billing</span>
                          <span class=\"flex-shrink-0 badge badge-center rounded-pill bg-label-danger w-px-20 h-px-20\"
                            >2</span
                          >
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class=\"dropdown-divider\"></div>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"pages-help-center-landing.html\">
                        <i class=\"ti ti-lifebuoy me-2 ti-sm\"></i>
                        <span class=\"align-middle\">Help</span>
                      </a>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"pages-faq.html\">
                        <i class=\"ti ti-help me-2 ti-sm\"></i>
                        <span class=\"align-middle\">FAQ</span>
                      </a>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"pages-pricing.html\">
                        <i class=\"ti ti-currency-dollar me-2 ti-sm\"></i>
                        <span class=\"align-middle\">Pricing</span>
                      </a>
                    </li>
                    <li>
                      <div class=\"dropdown-divider\"></div>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"auth-login-cover.html\" target=\"_blank\">
                        <i class=\"ti ti-logout me-2 ti-sm\"></i>
                        <span class=\"align-middle\">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>

            <!-- Search Small Screens -->
            <div class=\"navbar-search-wrapper search-input-wrapper d-none\">
              <input
                type=\"text\"
                class=\"form-control search-input container-xxl border-0\"
                placeholder=\"Search...\"
                aria-label=\"Search...\" />
              <i class=\"ti ti-x ti-sm search-toggler cursor-pointer\"></i>
            </div>
          </nav>

            </nav>
            <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y\">
                        <h4 class=\"fw-bold py-3 mb-4\">Notifications Management</h4>

                        <!-- Notifications List -->
                        <div class=\"card\">
                            <div class=\"card-header border-bottom\">
                                <h5 class=\"card-title mb-3\">Notifications</h5>
                                <div class=\"d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0\">
                                    <div class=\"col-md-4 user_role\"></div>
                                    <div class=\"col-md-4 user_plan\"></div>
                                    <div class=\"col-md-4 user_status\"></div>
                                </div>
                            </div>
                            <div class=\"px-3 pt-3\">
    <div class=\"glass-panel mb-3 p-3 d-flex flex-wrap align-items-center justify-content-between\" style=\"box-shadow:0 2px 24px rgba(115,103,240,0.08);\">
        <form id=\"notification-filter-form\" class=\"row g-2 w-100\" method=\"get\" action=\"\">
            <div class=\"col-md-3 col-12\">
                <select class=\"form-select\" name=\"status\" id=\"notification-status-select\">
                    <option value=\"all\" {% if app.request.get('status','all') == 'all' %}selected{% endif %}>Tous les statuts</option>
                    <option value=\"LU\" {% if app.request.get('status') == 'LU' %}selected{% endif %}>Lu</option>
                    <option value=\"NON_LU\" {% if app.request.get('status') == 'NON_LU' %}selected{% endif %}>Non lu</option>
                </select>
            </div>
            <div class=\"col-md-3 col-12\">
                <input type=\"date\" class=\"form-control\" name=\"date\" id=\"notification-date-input\" value=\"{{ app.request.get('date','') }}\">
            </div>
            <div class=\"col-md-6 col-12 text-end\">
                <span class=\"text-muted small\">Filtrez par statut ou date pour trouver rapidement vos notifications.</span>
            </div>
        </form>
    </div>
</div>
<div class=\"card-datatable table-responsive\">
    <table class=\"datatables-users table border-top\">
        <thead>
<tr>
    <th><input type=\"checkbox\" id=\"select-all-notifications\" class=\"form-check-input\" aria-label=\"Tout sélectionner\"></th>
    
    <th>Message</th>
    <th>Statut</th>
    <th>Créé le</th>
    <th>Actions</th>
</tr>
</thead>
                                    <tbody id=\"notifications-table-body\">
    {% include 'admin/notifications/_table_rows.html.twig' with {notifications: notifications} %}
</tbody>
<style>
.notification-row.notification-read {
    background: rgba(220, 255, 220, 0.6);
    transition: background 0.2s;
}
.notification-row.notification-unread {
    background: rgba(255, 240, 200, 0.7);
    transition: background 0.2s;
}
.notification-row:hover {
    background: rgba(115, 103, 240, 0.08) !important;
    box-shadow: 0 2px 16px rgba(115, 103, 240, 0.08);
}
</style>
                                </table>
<!-- Floating Bulk Actions Bar -->
<div id=\"bulk-actions-bar\" class=\"position-fixed bottom-0 start-50 translate-middle-x bg-white shadow-lg rounded-pill p-3 d-flex gap-3 align-items-center animate__animated animate__fadeInUp d-none\" style=\"z-index:1055; min-width:320px; margin-bottom:32px;\">
    <button id=\"bulk-delete-btn\" class=\"btn btn-danger btn-icon rounded-circle pulse\" title=\"Supprimer la sélection\">
        <i class=\"ti ti-trash\"></i>
    </button>
    <button id=\"bulk-mark-read-btn\" class=\"btn btn-success btn-icon rounded-circle pulse\" title=\"Marquer comme lues\">
        <i class=\"ti ti-mail-opened\"></i>
    </button>
    <span class=\"ms-2 fw-semibold\"><span id=\"bulk-selected-count\">0</span> sélectionné(s)</span>
</div>
<!-- Bulk Actions JS -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const selectAll = document.getElementById('select-all-notifications');
        const bulkActionsBar = document.getElementById('bulk-actions-bar');
        const bulkDeleteBtn = document.getElementById('bulk-delete-btn');
        const bulkMarkReadBtn = document.getElementById('bulk-mark-read-btn');
        const bulkSelectedCount = document.getElementById('bulk-selected-count');
        function getSelectedCheckboxes() {
            return Array.from(document.querySelectorAll('.notification-checkbox:checked'));
        }
        function updateBulkBar() {
            const checked = getSelectedCheckboxes();
            if (checked.length > 0) {
                bulkActionsBar.classList.remove('d-none');
                bulkSelectedCount.textContent = checked.length;
            } else {
                bulkActionsBar.classList.add('d-none');
                bulkSelectedCount.textContent = 0;
            }
        }
        // Select all logic
        if (selectAll) {
            selectAll.addEventListener('change', function() {
                document.querySelectorAll('.notification-checkbox').forEach(cb => {
                    cb.checked = selectAll.checked;
                });
                updateBulkBar();
            });
        }
        // Individual checkbox logic
        document.addEventListener('change', function(e) {
            if (e.target.classList.contains('notification-checkbox')) {
                const all = document.querySelectorAll('.notification-checkbox');
                const checked = document.querySelectorAll('.notification-checkbox:checked');
                if (selectAll) selectAll.checked = all.length === checked.length;
                updateBulkBar();
            }
        });
        // Bulk delete
        if (bulkDeleteBtn) {
            bulkDeleteBtn.addEventListener('click', function() {
                const ids = getSelectedCheckboxes().map(cb => cb.value);
                if (!ids.length) return;
                Swal.fire({
                    title: 'Supprimer les notifications sélectionnées?',
                    text: `Vous êtes sur le point de supprimer \${ids.length} notification(s). Cette action est irréversible!`,
                    icon: 'warning',
                    showCancelButton: true,
                    
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Oui, supprimer',
                    cancelButtonText: 'Annuler'
                }).then((result) => {
                    if (result.isConfirmed) {
                        fetch('/admin/notifications/bulk-delete', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': document.querySelector('meta[name=\"csrf-token\"]')?.content
                            },
                            body: JSON.stringify({ ids })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Supprimé !',
                                    text: 'Les notifications ont été supprimées.',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                                ids.forEach(id => {
                                    const row = document.querySelector(`.notification-checkbox[value=\"\${id}\"]`).closest('tr');
                                    if (row) row.remove();
                                });
                                updateBulkBar();
                            } else {
                                throw new Error(data.message || 'Erreur lors de la suppression');
                            }
                        })
                        .catch(error => {
                            Swal.fire({
                                icon: 'error',
                                title: 'Erreur !',
                                text: error.message,
                                confirmButtonText: 'OK'
                            });
                        });
                    }
                });
            });
        }
        // Bulk mark as read
        if (bulkMarkReadBtn) {
            bulkMarkReadBtn.addEventListener('click', function() {
                const ids = getSelectedCheckboxes().map(cb => cb.value);
                if (!ids.length) return;
                Swal.fire({
                    title: 'Marquer comme lues?',
                    text: `Vous êtes sur le point de marquer \${ids.length} notification(s) comme lues.`,
                    icon: 'info',
                    showCancelButton: true,
                    
                    confirmButtonColor: '#28a745',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Oui, marquer comme lues',
                    cancelButtonText: 'Annuler'
                }).then((result) => {
                    if (result.isConfirmed) {
                        fetch('/admin/notifications/bulk-mark-read', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': document.querySelector('meta[name=\"csrf-token\"]')?.content
                            },
                            body: JSON.stringify({ ids })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Marqué comme lu !',
                                    text: 'Les notifications ont été mises à jour.',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                                ids.forEach(id => {
                                    const row = document.querySelector(`.notification-checkbox[value=\"\${id}\"]`).closest('tr');
                                    if (row) {
                                        row.classList.remove('notification-unread');
                                        row.classList.add('notification-read');
                                        row.querySelector('.badge').classList.remove('bg-warning','text-dark');
                                        row.querySelector('.badge').classList.add('bg-success');
                                        row.querySelector('.badge').textContent = 'Lu';
                                    }
                                });
                                updateBulkBar();
                            } else {
                                throw new Error(data.message || 'Erreur lors de la mise à jour');
                            }
                        })
                        .catch(error => {
                            Swal.fire({
                                icon: 'error',
                                title: 'Erreur !',
                                text: error.message,
                                confirmButtonText: 'OK'
                            });
                        });
                    }
                });
            });
        }
    });
</script>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class=\"content-footer footer bg-footer-theme\">
                        <div class=\"container-xxl\">
                            <div class=\"footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column\">
                                <div>
                                    2023, made with by <a href=\"https://pixinvent.com\" target=\"_blank\" class=\"fw-semibold\">Pixinvent</a>
                                </div>
                                <div>
                                    <a href=\"https://themeforest.net/licenses/standard\" class=\"footer-link me-4\" target=\"_blank\">License</a>
                                    <a href=\"https://1.envato.market/pixinvent_portfolio\" target=\"_blank\" class=\"footer-link me-4\">More Themes</a>
                                    <a href=\"https://demos.pixinvent.com/vuexy-html-admin-template/documentation/\" target=\"_blank\" class=\"footer-link me-4\">Documentation</a>
                                    <a href=\"https://pixinvent.ticksy.com/\" target=\"_blank\" class=\"footer-link d-none d-sm-inline-block\">Support</a>
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

        <!-- Overlay -->
        <div class=\"layout-overlay layout-menu-toggle\"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class=\"drag-target\"></div>
    </div>
    <!-- / Layout wrapper -->
    <script>
        \$(document).ready(function() {
            // Function to show success message
            function showSuccess(message) {
                Swal.fire({
                    title: 'Succès!',
                    text: message,
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500,
                    customClass: {
                        popup: 'animate__animated animate__fadeIn'
                    }
                });
            }

            // Function to show error message
            function showError(message) {
                Swal.fire({
                    title: 'Erreur!',
                    text: message,
                    icon: 'error',
                    confirmButtonText: 'OK',
                    customClass: {
                        popup: 'animate__animated animate__shakeX'
                    }
                });
            }

            // Function to show confirmation dialog
            function showConfirmation(title, text, callback) {
                Swal.fire({
                    title: title,
                    text: text,
                    icon: 'warning',
                    showCancelButton: true,
                    
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Oui',
                    cancelButtonText: 'Non',
                    customClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        callback();
                    }
                });
            }

            // Handle notification deletion
            \$('.delete-notification').on('click', function(e) {
                e.preventDefault();
                const notificationId = \$(this).data('id');
                
                showConfirmation(
                    'Êtes-vous sûr?',
                    'Voulez-vous vraiment supprimer cette notification?',
                    function() {
                        \$.ajax({
                            url: `/admin/notifications/\${notificationId}/delete`,
                            method: 'DELETE',
                            success: function(response) {
                                showSuccess('Notification supprimée avec succès!');
                                // Remove the notification from the UI with animation
                                \$(`#notification-\${notificationId}`).fadeOut(300, function() {
                                    \$(this).remove();
                                });
                            },
                            error: function() {
                                showError('Une erreur est survenue lors de la suppression.');
                            }
                        });
                    }
                );
            });

            // Handle mark as read
            \$('.mark-as-read').on('click', function(e) {
                e.preventDefault();
                const notificationId = \$(this).data('id');
                
                \$.ajax({
                    url: `/admin/notifications/\${notificationId}/mark-read`,
                    method: 'POST',
                    success: function(response) {
                        showSuccess('Notification marquée comme lue!');
                        \$(`#notification-\${notificationId}`).removeClass('unread').addClass('read');
                    },
                    error: function() {
                        showError('Une erreur est survenue.');
                    }
                });
            });
        });
    </script>


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src=\"{{ asset('vendor/libs/jquery/jquery.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/popper/popper.js') }}\"></script>
    <script src=\"{{ asset('vendor/js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/sweetalert2/sweetalert2.js') }}\"></script>
    <script src=\"{{ asset('js/notifications.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>

    <script>
        // Delete notification handler
        document.querySelectorAll('.delete-notification').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const notificationId = this.dataset.id;
                
                Swal.fire({
                    title: 'Êtes-vous sûr ?',
                    text: \"Cette action est irréversible !\",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Oui, supprimer',
                    cancelButtonText: 'Annuler',
                    customClass: {
                        confirmButton: 'btn btn-primary me-3',
                        cancelButton: 'btn btn-label-secondary'
                    },
                    buttonsStyling: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        fetch(`/admin/notifications/delete/\${notificationId}`, {
                            method: 'DELETE',
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Supprimé !',
                                    text: 'La notification a été supprimée avec succès.',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then(() => {
                                    const row = this.closest('tr');
                                    row.remove();
                                    updateUnreadCount();
                                });
                            } else {
                                throw new Error(data.message || 'Erreur lors de la suppression');
                            }
                        })
                        .catch(error => {
                            Swal.fire({
                                icon: 'error',
                                title: 'Erreur !',
                                text: error.message,
                                confirmButtonText: 'OK'
                            });
                        });
                    }
                });
            });
        });

    // Fetch unread notifications count
    function fetchUnreadCount() {
        fetch('{{ path('admin_notifications_count') }}')
            .then(response => response.json())
            .then(data => {
                const badges = document.querySelectorAll('#unreadCountBadge, .badge-notifications');
                badges.forEach(badge => {
                    badge.textContent = data.count;
                    if (data.count === 0) {
                        badge.style.display = 'none';
                    } else {
                        badge.style.display = 'inline';
                    }
                });
            })
            .catch(error => {
                console.error('Error fetching unread count:', error);
            });
    }

    // Check for new notifications every 30 seconds
    setInterval(fetchUnreadCount, 30000);

    // Initial fetch
    document.addEventListener('DOMContentLoaded', fetchUnreadCount);
    document.addEventListener('DOMContentLoaded', function() {
        const filterForm = document.getElementById('notification-filter-form');
        const statusSelect = document.getElementById('notification-status-select');
        const dateInput = document.getElementById('notification-date-input');
        function ajaxFilterNotifications() {
            const params = new URLSearchParams();
            if (statusSelect.value) params.append('status', statusSelect.value);
            if (dateInput.value) params.append('date', dateInput.value);
            fetch(filterForm.action + '?' + params.toString(), { headers: { 'X-Requested-With': 'XMLHttpRequest' } })
                .then(response => response.text())
                .then(html => {
                    document.getElementById('notifications-table-body').innerHTML = html;
                });
        }
        statusSelect.addEventListener('change', function(e) {
            e.preventDefault();
            ajaxFilterNotifications();
        });
        dateInput.addEventListener('change', function(e) {
            e.preventDefault();
            ajaxFilterNotifications();
        });
        filterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            ajaxFilterNotifications();
        });
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const markAllBtn = document.getElementById('mark-all-notifications-read');
    if (markAllBtn) {
        markAllBtn.addEventListener('click', function() {
            fetch(\"{{ path('admin_notifications_mark_all_read') }}\", {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token('mark_all_notifications') }}'
                },
                body: JSON.stringify({})
            })
            .then(response => response.json())
            .then(data => {
                if(data.success) {
                    // Remove unread badge or visually mark all as read
                    document.querySelectorAll('.badge-dot').forEach(badge => badge.classList.remove('badge-dot'));
                    // Optionally update unread count to 0
                    const badges = document.querySelectorAll('#unreadCountBadge, .badge-notifications');
                    badges.forEach(badge => {
                        badge.textContent = 0;
                        badge.style.display = 'none';
                    });
                }
            });
        });
    }
});
</script>
</body>
</html>", "admin/notifications/index.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\admin\\notifications\\index.html.twig");
    }
}
