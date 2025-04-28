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

/* admin/pack/index.html.twig */
class __TwigTemplate_d01a042adcafca94ff0216458e181693 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pack/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pack/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\" class=\"light-style layout-navbar-fixed layout-menu-fixed\" dir=\"ltr\" data-theme=\"theme-default\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>Pack Management - Admin Dashboard</title>
    <meta name=\"description\" content=\"Manage event packs efficiently\" />
    
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
    
    <style>
        .pack-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }
        
        .pack-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .pack-image {
            height: 200px;
            object-fit: cover;
            border-radius: 8px 8px 0 0;
        }
        
        .pack-badge {
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
        
        .pack-card:hover .quick-actions {
            bottom: 10px;
            opacity: 1;
        }
        
        .gallery-view .pack-card {
            margin-bottom: 30px;
        }
        
        .view-toggle-btn.active {
            background-color: #7367f0;
            color: white;
        }
        
        .pack-stats {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 10px;
            background: rgba(0,0,0,0.6);
            color: white;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .pack-card:hover .pack-stats {
            opacity: 1;
        }
        
        .table-view {
            display: none;
            width: 100%;
        }
        
        .table-view.active {
            display: block;
        }
        
        .gallery-view {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .gallery-view.active {
            display: flex;
        }
        
        .pack-price {
            font-size: 1.25rem;
            font-weight: 600;
            color: #7367f0;
        }
        
        .pack-capacity {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-size: 0.875rem;
            color: #6e6b7b;
        }

        /* Notifications styles */
        .dropdown-notifications-list {
            max-height: 350px;
            overflow-y: auto;
            padding: 0;
            margin: 0;
        }
        .dropdown-menu.dropdown-menu-end {
            min-width: 340px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
            border-radius: 0.5rem;
        }
        .list-group-item.dropdown-notifications-item {
            border: none;
            border-bottom: 1px solid #f0f0f0;
            padding: 1rem 1.25rem;
        }
        .list-group-item.dropdown-notifications-item:last-child {
            border-bottom: none;
        }
        .dropdown-menu-header {
            background: #f8f9fa;
            border-radius: 0.5rem 0.5rem 0 0;
            margin-bottom: 0;
            padding: 0.75rem 1.25rem;
        }
        .dropdown-menu-footer {
            background: #f8f9fa;
            border-radius: 0 0 0.5rem 0.5rem;
            padding: 0.5rem 1.25rem;
            text-align: center;
        }
        .menu-link {
            position: relative;
            padding: 0.75rem 1rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            transition: all 0.3s ease;
        }

        .menu-link:hover {
            background-color: #f8f9fa;
            color: #2d3748;
        }

        .menu-link .badge {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            font-size: 0.75rem;
            padding: 0.25rem 0.5rem;
            line-height: 1;
        }

        .menu-link .menu-icon {
            font-size: 1.1rem;
            color: #6e6b7b;
            transition: all 0.3s ease;
        }

        .menu-link:hover .menu-icon {
            color: #2d3748;
        }

        .menu-link.active {
            background-color: #f8f9fa;
            color: #2d3748;
        }

        .menu-link.active .menu-icon {
            color: #2d3748;
        }

        .menu-link.active .badge {
            background-color: #7367f0;
            color: white;
        }

        /* Form Elements */
        .form-control, .form-select {
            transition: all 0.3s ease;
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            border: 2px solid #e2e8f0;
        }

        .form-control:focus, .form-select:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
        }

        .form-control.is-invalid, .form-select.is-invalid {
            border-color: #ef4444;
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.2);
            animation: shake 0.5s ease-in-out;
        }

        .invalid-feedback {
            color: #dc2626;
            font-size: 0.875rem;
            margin-top: 0.25rem;
            display: none;
        }

        .form-control.is-invalid ~ .invalid-feedback,
        .form-select.is-invalid ~ .invalid-feedback {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Error Icon for Select Elements */
        .form-select.is-invalid {
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc2626'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc2626' stroke='none'/%3e%3c/svg%3e\"),
                       url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' width='16' height='16' fill='%23495057'%3e%3cpath fill-rule='evenodd' d='M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z'/%3e%3c/svg%3e\");
            background-position: right 0.5rem center, center right 2.25rem;
            background-size: 16px 12px, 16px 12px;
            background-repeat: no-repeat;
        }
        
        .dataTables_filter {
            float: none !important;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            margin-bottom: 1rem;
            gap: 1rem;
        }
        
        .dataTables_length {
            float: left !important;
            margin-bottom: 1rem;
        }
        
        .dataTables_wrapper .row {
            margin-bottom: 0 !important;
        }
    </style>
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

                <ul class=\"menu-inner py-1\">
                    <!-- Packs -->
                    <li class=\"menu-item active\">
                        <a href=\"";
        // line 332
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
        // line 346
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
            
          <nav
            class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\"
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
    <a class=\"nav-item nav-link search-toggler d-flex align-items-center px-0\" id=\"admin-pack-search-bar-trigger\" href=\"javascript:void(0);\">
      <i class=\"ti ti-search ti-md me-2\"></i>
      <span class=\"d-none d-md-inline-block text-muted\">Rechercher (Ctrl+/)</span>
    </a>
    <div id=\"admin-pack-search-dropdown\" style=\"display:none; position:absolute; top:100%; left:0; z-index:9999; min-width:260px; background:white; box-shadow:0 6px 24px rgba(0,0,0,0.13); border-radius:8px; padding:12px;\">
      <form method=\"get\" action=\"";
        // line 499
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pack_index");
        yield "\" style=\"margin:0;\">
        <div class=\"input-group\">
          <input type=\"text\" name=\"q\" id=\"admin-pack-search-input-navbar\" class=\"form-control\" value=\"";
        // line 501
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 501, $this->source); })()), "request", [], "any", false, false, false, 501), "get", ["q"], "method", false, false, false, 501), "html", null, true);
        yield "\" placeholder=\"Rechercher des packs...\" autocomplete=\"off\" autofocus>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
(function() {
  const trigger = document.getElementById('admin-pack-search-bar-trigger');
  const dropdown = document.getElementById('admin-pack-search-dropdown');
  const input = document.getElementById('admin-pack-search-input-navbar');
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
        doAjaxPackSearch(input.value);
      }, 400);
    });
    input.addEventListener('keydown', function(e) {
      if (e.key === 'Enter') {
        e.preventDefault();
        doAjaxPackSearch(input.value);
      }
    });
  }

  // AJAX pack search function
  async function doAjaxPackSearch(query) {
    try {
      const url = `/admin/pack/search?q=\${encodeURIComponent(query)}`;
      const resp = await fetch(url, {headers: {'X-Requested-With':'XMLHttpRequest'}});
      const data = await resp.json();
      if (data.success) {
        renderPackViews(data.packs);
      }
    } catch (err) {
      console.error('AJAX search error:', err);
    }
  }

  // Render packs in both gallery and table views
  function renderPackViews(packs) {
    // Gallery view
    const gallery = document.querySelector('.gallery-view');
    if (gallery) {
      let html = '';
      for (const pack of packs) {
        html += `<div class=\"col-md-4 col-lg-3\">
          <div class=\"card pack-card\">
            \${pack.event.photo ? `<img src=\"/uploads/packs/\${pack.event.photo}\" class=\"pack-image\" alt=\"\${pack.event.nom}\">` : `<div class='pack-image d-flex align-items-center justify-content-center bg-light'><i class='ti ti-photo text-muted' style='font-size: 3rem;'></i></div>`}
            \${pack.capacite < 5 ? `<div class='pack-badge'><span class='badge bg-danger'>Places limitées !</span></div>` : ''}
            <div class=\"card-body\">
              <h5 class=\"card-title\">\${pack.event.nom}</h5>
              <p class=\"card-text text-truncate\">\${pack.description}</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"pack-price\">\${pack.prix}€</div>
                <div class=\"pack-capacity\"><i class=\"ti ti-users\"></i> \${pack.capacite}</div>
              </div>
            </div>
            <div class=\"pack-stats\">
              <div class=\"row g-0 text-center\">
                <div class=\"col\"><div class=\"h6 mb-0\">\${pack.duree}h</div><small>Durée</small></div>
                <div class=\"col\"><div class=\"h6 mb-0\">\${pack.endDate ? (new Date(pack.endDate)).toLocaleDateString('fr-FR', {day:'2-digit', month:'short'}) : 'Sans fin'}</div><small>Date de fin</small></div>
              </div>
            </div>
            <div class=\"quick-actions\"><div class=\"btn-group shadow\">
              <button type='button' class='btn btn-primary btn-sm' onclick='editPack(\${pack.id})'><i class='ti ti-edit'></i></button>
              <button type='button' class='btn btn-primary btn-sm' onclick='viewPackDetails(\${pack.id})'><i class='ti ti-eye'></i></button>
              <button type='button' class='btn btn-danger btn-sm' onclick='deletePack(\${pack.id})'><i class='ti ti-trash'></i></button>
            </div></div>
          </div>
        </div>`;
      }
      gallery.innerHTML = html || `<div class='col-12 text-center text-muted py-4'>Aucun pack trouvé.</div>`;
    }
    // Table view
    const tableBody = document.querySelector('.table-view tbody');
    if (tableBody) {
      let html = '';
      for (const pack of packs) {
        html += `<tr>
          <td>\${pack.event.photo ? `<img src=\"/uploads/packs/\${pack.event.photo}\" class=\"rounded\" width=\"40\" height=\"40\" style=\"object-fit: cover;\" alt=\"\${pack.event.nom}\">` : `<i class='ti ti-photo text-muted'></i>`}</td>
          <td>\${pack.event.nom}</td>
          <td>\${pack.description}</td>
          <td>\${pack.prix}€</td>
          <td><span class=\"badge bg-label-primary\">\${pack.capacite} places</span></td>
          <td>\${pack.duree}h</td>
          <td>\${pack.endDate ? (new Date(pack.endDate)).toLocaleDateString('fr-FR') : ''}</td>
          <td><div class='d-flex gap-2'>
            <button type='button' class='btn btn-sm btn-icon btn-primary' onclick='editPack(\${pack.id})' data-bs-toggle='tooltip' data-bs-placement='top' title='Modifier'><i class='ti ti-edit'></i></button>
            <button type='button' class='btn btn-sm btn-icon btn-danger' onclick='deletePack(\${pack.id})' data-bs-toggle='tooltip' data-bs-placement='top' title='Supprimer'><i class='ti ti-trash'></i></button>
          </div></td>
        </tr>`;
      }
      tableBody.innerHTML = html || `<tr><td colspan='8' class='text-center text-muted'>Aucun pack trouvé.</td></tr>`;
    }
  }
})();
</script>
</div>
              <!-- /Search -->

              <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
                <!-- Language -->
                <li class=\"nav-item dropdown-language dropdown me-2 me-xl-0\">
                  <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                    <i class=\"fi fi-us fis rounded-circle me-1 fs-3\"></i>
                  </a>
                  <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li>
                      <a class=\"dropdown-item\" href=\"javascript:void(0);\" data-language=\"en\">
                        <i class=\"fi fi-us fis rounded-circle me-1 fs-3\"></i>
                        <span class=\"align-middle\">English</span>
                      </a>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"javascript:void(0);\" data-language=\"fr\">
                        <i class=\"fi fi-fr fis rounded-circle me-1 fs-3\"></i>
                        <span class=\"align-middle\">French</span>
                      </a>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"javascript:void(0);\" data-language=\"de\">
                        <i class=\"fi fi-de fis rounded-circle me-1 fs-3\"></i>
                        <span class=\"align-middle\">German</span>
                      </a>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"javascript:void(0);\" data-language=\"pt\">
                        <i class=\"fi fi-pt fis rounded-circle me-1 fs-3\"></i>
                        <span class=\"align-middle\">Portuguese</span>
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
        // line 710
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_advanced_statistiques_demande_packs");
        yield "\" class=\"stretched-link\">Liste Demande Pack</a>
                          <small class=\"text-muted mb-0\">Liste des demandes de packs</small>
                        </div>
                        <div class=\"dropdown-shortcuts-item col\">
                          <span class=\"dropdown-shortcuts-icon rounded-circle mb-2\">
                            <i class=\"ti ti-chart-bar fs-4\"></i>
                          </span>
                          <a href=\"";
        // line 717
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
        // line 728
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
                    <span class=\"badge bg-danger rounded-pill badge-notifications\">";
        // line 750
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unreadNotificationsCount"]) || array_key_exists("unreadNotificationsCount", $context) ? $context["unreadNotificationsCount"] : (function () { throw new RuntimeError('Variable "unreadNotificationsCount" does not exist.', 750, $this->source); })()), "html", null, true);
        yield "</span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-menu-end py-0\">
                    <li class=\"dropdown-menu-header border-bottom\">
                      <div class=\"dropdown-header d-flex align-items-center py-3\">
                        <h5 class=\"text-body mb-0 me-auto\">Notification</h5>
                        <a
                          href=\"javascript:void(0)\"
                          class=\"dropdown-notifications-all text-body\"
                          data-bs-toggle=\"tooltip\"
                          data-bs-placement=\"top\"
                          title=\"Mark all as read\"
                          ><i class=\"ti ti-mail-opened fs-4\"></i
                        ></a>
                      </div>
                    </li>
                    <li class=\"dropdown-notifications-list scrollable-container\">
                      <ul class=\"list-group list-group-flush\">
                        ";
        // line 768
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["latestNotifications"]) || array_key_exists("latestNotifications", $context) ? $context["latestNotifications"] : (function () { throw new RuntimeError('Variable "latestNotifications" does not exist.', 768, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 769
            yield "                            <li class=\"list-group-item list-group-item-action dropdown-notifications-item p-0\">
                              <a href=\"";
            // line 770
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customize_pack_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "demandePack", [], "any", false, false, false, 770), "id", [], "any", false, false, false, 770)]), "html", null, true);
            yield "\" class=\"d-flex align-items-stretch text-decoration-none text-dark w-100 p-3\" style=\"cursor:pointer;\">
                                <div class=\"flex-shrink-0 me-3\">
                                  <div class=\"avatar\">
                                    <span class=\"avatar-initial rounded-circle bg-label-info\"><i class=\"ti ti-bell\"></i></span>
                                  </div>
                                </div>
                                <div class=\"flex-grow-1\">
                                  <h6 class=\"mb-1\">";
            // line 777
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "titre", [], "any", true, true, false, 777)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "titre", [], "any", false, false, false, 777), "Notification")) : ("Notification")), "html", null, true);
            yield "</h6>
                                  <p class=\"mb-0\">";
            // line 778
            yield CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 778);
            yield "</p>
                                  <small class=\"text-muted\">";
            // line 779
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "dateCreation", [], "any", false, false, false, 779)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "dateCreation", [], "any", false, false, false, 779), "d/m/Y H:i"), "html", null, true)) : (""));
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
        // line 786
        if (!$context['_iterated']) {
            // line 787
            yield "                            <li class=\"list-group-item text-center text-muted\">No notifications</li>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['notification'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 789
        yield "                        </ul>
                      </li>
                    </ul>
                <!--/ Notification -->

                <!-- User -->
                <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                  <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                    <div class=\"avatar avatar-online\">
    <img src=\"";
        // line 798
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
        // line 807
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

          <span> </span>

          <!-- / Navbar -->

<style>
  /* Custom style to ensure the admin controls are never overlapped by the navbar */
  .card-header.mt-4 {
    margin-top: 2.5rem !important;
  }
  @media (max-width: 991.98px) {
    .card-header.mt-4 {
      margin-top: 3.5rem !important;
    }
  }
</style>

           <!-- Conteneur de mise en page -->
<div class=\"layout-page\">
    <!-- Wrapper du contenu -->
    <div class=\"content-wrapper\">
        <!-- Contenu -->
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <div class=\"row mb-4\">
                <div class=\"col-12\">
                    <div class=\"card\">
                        <div class=\"card-header d-flex justify-content-between align-items-center mt-4 gap-3\" style=\"z-index: 1; position: relative;\">
    <h5 class=\"mb-0\">Administration des packs</h5>
    <div class=\"d-flex gap-2\">
        <div class=\"btn-group\" role=\"group\">
            <button type=\"button\" class=\"btn btn-outline-primary view-toggle-btn active\" data-view=\"gallery\">
                <i class=\"ti ti-grid-dots\"></i>
            </button>
            <button type=\"button\" class=\"btn btn-outline-primary view-toggle-btn\" data-view=\"table\">
                <i class=\"ti ti-table\"></i>
            </button>
        </div>
        <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#createPackModal\">
            <i class=\"ti ti-plus me-1\"></i> Créer un nouveau pack
        </button>
    </div>
</div>
<!-- Pack Inspiration Assistant (now inside card, after main header) -->
<div class=\"container-fluid px-0 pt-4 pb-2\">
    <div class=\"row g-3 justify-content-center\">
        <div class=\"col-12 col-lg-10\">
            <div class=\"card shadow inspiration-card mb-3\" style=\"border-radius: 16px;\">
                <div class=\"card-body d-flex align-items-center\">
                    <i class=\"ti ti-sparkles me-2 fs-4 text-primary\"></i>
                    <span class=\"fw-semibold\">Voici 3 idées basées sur les tendances actuelles :</span>
                    <div class=\"ms-auto d-flex align-items-center gap-3\">
                        <button id=\"refresh-inspiration-btn\" class=\"btn btn-primary d-flex align-items-center gap-2\">
                            <i class=\"ti ti-bulb\"></i>
                            Suggestions de packs
                        </button>
                        <div id=\"pack-suggestions\" class=\"position-absolute top-100 start-50 translate-middle-x mt-3 w-75\" style=\"z-index: 1000; display: none;\">
                            <!-- Les suggestions seront injectées ici par JavaScript -->
                        </div>
                        <button class=\"btn btn-sm btn-outline-secondary\" id=\"refresh-inspiration-btn\" type=\"button\">
                            <i class=\"ti ti-refresh me-1\"></i> Actualiser les idées
                        </button>
                    </div>
                </div>
            </div>
            <div class=\"row g-3\" id=\"pack-inspiration-list\">
                <!-- Pack Suggestions -->
                <div class=\"col-md-4\">
                    <div class=\"card h-100 pack-suggestion\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Festival Eco-Responsable</h5>
                            <p class=\"card-text\">Un événement éco-conscient avec installations d'art recyclé, cuisine locale bio et animations sur le développement durable.</p>
                            <div class=\"mt-3\">
                                <span class=\"badge bg-success me-1\">écologie</span>
                                <span class=\"badge bg-success me-1\">développement durable</span>
                                <span class=\"badge bg-success me-1\">art recyclé</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card h-100 pack-suggestion\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Soirée Gaming & eSport</h5>
                            <p class=\"card-text\">Un événement gaming avec tournois eSport, réalité virtuelle et animations rétro-gaming sur grand écran.</p>
                            <div class=\"mt-3\">
                                <span class=\"badge bg-primary me-1\">gaming</span>
                                <span class=\"badge bg-primary me-1\">esport</span>
                                <span class=\"badge bg-primary me-1\">réalité virtuelle</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card h-100 pack-suggestion\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Retraite Bien-être Zen</h5>
                            <p class=\"card-text\">Une journée dédiée au bien-être avec yoga, méditation sonore, ateliers nutrition et spa naturel.</p>
                            <div class=\"mt-3\">
                                <span class=\"badge bg-info me-1\">bien-être</span>
                                <span class=\"badge bg-info me-1\">yoga</span>
                                <span class=\"badge bg-info me-1\">méditation</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .inspiration-card {
        background: #f6f9fc;
        border: 1px solid #e3e6ec;
    }
    #pack-inspiration-list .card {
        border-radius: 16px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        min-height: 320px;
    }
    #pack-inspiration-list .inspiration-img {
        border-radius: 16px 16px 0 0;
    }
    .gallery-view, #pack-inspiration-list {
        margin-left: 0;
        margin-right: 0;
    }
</style>
<script>
// SweetAlert2 CDN
if (!window.Swal) {
    const swalScript = document.createElement('script');
    swalScript.src = 'https://cdn.jsdelivr.net/npm/sweetalert2@11';
    document.head.appendChild(swalScript);
}

async function loadPackInspiration() {
    const container = document.getElementById('pack-inspiration-list');
    container.innerHTML = '<div class=\"text-center w-100 py-4\"><div class=\"spinner-border\"></div></div>';
    try {
        const response = await fetch('/admin/pack/inspiration');
        const isJson = response.headers.get('content-type')?.includes('application/json');
        let ideas;
        if (!response.ok) {
            let errMsg = 'Erreur lors de la génération des idées.';
            if (isJson) {
                const errData = await response.json();
                errMsg = errData.error || errMsg;
            }
            if (window.Swal) Swal.fire({icon:'error',title:'Erreur',text:errMsg});
            container.innerHTML = `<div class='alert alert-danger w-100'>\${errMsg}</div>`;
            return;
        }
        ideas = await response.json();
        container.innerHTML = '';
        
        ideas.forEach(insp => {
            container.innerHTML += `
            <div class=\"col-md-4\">
                <div class=\"card h-100 shadow inspiration-card\" style=\"border-radius: 16px;\">
                    <div class=\"position-relative\">
                        <img src=\"\${insp.image}\" alt=\"\${insp.title}\" class=\"w-100 inspiration-img\" style=\"height:180px;object-fit:cover;border-radius:16px 16px 0 0;\">
                        <span class=\"badge bg-primary position-absolute top-0 end-0 m-2\">Tendance</span>
                    </div>
                    <div class=\"card-body\">
                        <h6 class=\"fw-bold mb-2\">\${insp.title}</h6>
                        <p class=\"mb-2 small text-muted\">\${insp.description}</p>
                        <div class=\"mb-2\">
                            <span class=\"badge bg-label-info text-primary\">\${insp.keywords}</span>
                        </div>
                        <button type=\"button\" class=\"btn btn-outline-primary btn-sm w-100 copy-inspiration-btn\"
                            data-title=\"\${insp.title}\"
                            data-description=\"\${insp.description}\"
                            data-keywords=\"\${insp.keywords}\">
                            <i class=\"ti ti-copy me-1\"></i> Copier cette idée
                        </button>
                    </div>
                </div>
            </div>
            `;
        });
        // Re-bind copy-to-form
        document.querySelectorAll('.copy-inspiration-btn').forEach(btn => {
            btn.addEventListener('click', function () {
                const modal = document.getElementById('packModal');
                const titleInput = document.querySelector('input[name=\"pack[event]\"]');
                const descInput = document.querySelector('textarea[name=\"pack[description]\"]');
                const keywordsInput = document.querySelector('input[name=\"pack[keywords]\"]');
                const alertBox = document.getElementById('inspiration-copied-alert');
                if (modal) {
                    if (titleInput) titleInput.value = btn.getAttribute('data-title');
                    if (descInput) descInput.value = btn.getAttribute('data-description');
                    if (keywordsInput) keywordsInput.value = btn.getAttribute('data-keywords');
                    if (alertBox) {
                        alertBox.classList.remove('d-none');
                        setTimeout(() => alertBox.classList.add('d-none'), 1500);
                    }
                    const bsModal = bootstrap.Modal.getOrCreateInstance(modal);
                    bsModal.show();
                }
            });
        });
    } catch (e) {
        container.innerHTML = `<div class='alert alert-danger w-100'>\${e.message}</div>`;
    }
}
document.addEventListener('DOMContentLoaded', loadPackInspiration);
document.getElementById('refresh-inspiration-btn').addEventListener('click', loadPackInspiration);
</script>
    </div>
</div>
<!-- /Pack Inspiration Assistant -->
    
                            <!-- Vue galerie -->
                            <div class=\"gallery-view active row g-3 justify-content-center\">
                                ";
        // line 1103
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 1103, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pack"]) {
            // line 1104
            yield "                                <div class=\"col-md-4 col-lg-3\">
                                    <div class=\"card pack-card\">
                                        ";
            // line 1106
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "event", [], "any", false, false, false, 1106), "photo", [], "any", false, false, false, 1106)) {
                // line 1107
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "event", [], "any", false, false, false, 1107), "photo", [], "any", false, false, false, 1107))), "html", null, true);
                yield "\" class=\"pack-image\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "event", [], "any", false, false, false, 1107), "nom", [], "any", false, false, false, 1107), "html", null, true);
                yield "\">
                                        ";
            } else {
                // line 1109
                yield "                                            <div class=\"pack-image d-flex align-items-center justify-content-center bg-light\">
                                                <i class=\"ti ti-photo text-muted\" style=\"font-size: 3rem;\"></i>
                                            </div>
                                        ";
            }
            // line 1113
            yield "                                        
                                        ";
            // line 1114
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "capacite", [], "any", false, false, false, 1114) < 5)) {
                // line 1115
                yield "                                            <div class=\"pack-badge\">
                                                <span class=\"badge bg-danger\">Places limitées !</span>
                                            </div>
                                        ";
            }
            // line 1119
            yield "                                        
                                        <div class=\"card-body\">
                                            <h5 class=\"card-title\">";
            // line 1121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "event", [], "any", false, false, false, 1121), "nom", [], "any", false, false, false, 1121), "html", null, true);
            yield "</h5>
                                            <p class=\"card-text text-truncate\">";
            // line 1122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "description", [], "any", false, false, false, 1122), "html", null, true);
            yield "</p>
                                            <div class=\"d-flex justify-content-between align-items-center\">
                                                <div class=\"pack-price\">";
            // line 1124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "prix", [], "any", false, false, false, 1124), "html", null, true);
            yield "€</div>
                                                <div class=\"pack-capacity\">
                                                    <i class=\"ti ti-users\"></i> ";
            // line 1126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "capacite", [], "any", false, false, false, 1126), "html", null, true);
            yield "
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class=\"pack-stats\">
                                            <div class=\"row g-0 text-center\">
                                                <div class=\"col\">
                                                    <div class=\"h6 mb-0\">";
            // line 1134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "duree", [], "any", false, false, false, 1134), "html", null, true);
            yield "h</div>
                                                    <small>Durée</small>
                                                </div>
                                                <div class=\"col\">
                                                    <div class=\"h6 mb-0\">";
            // line 1138
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "endDate", [], "any", false, false, false, 1138)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "endDate", [], "any", false, false, false, 1138), "d M"), "html", null, true)) : ("Sans fin"));
            yield "</div>
                                                    <small>Date de fin</small>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class=\"quick-actions\">
                                            <div class=\"btn-group shadow\">
                                                <button type=\"button\" class=\"btn btn-primary btn-sm\" onclick=\"editPack(";
            // line 1146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 1146), "html", null, true);
            yield ")\">
                                                    <i class=\"ti ti-edit\"></i>
                                                </button>
                                                <button type=\"button\" class=\"btn btn-primary btn-sm\" onclick=\"viewPackDetails(";
            // line 1149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 1149), "html", null, true);
            yield ")\">
                                                    <i class=\"ti ti-eye\"></i>
                                                </button>
                                                <button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"deletePack(";
            // line 1152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 1152), "html", null, true);
            yield ")\">
                                                    <i class=\"ti ti-trash\"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pack'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1160
        yield "                            </div>
                            
                            <!-- Vue tableau -->
<!-- Removed duplicate search bar, now handled in navbar -->
    <script>
    (function() {
        var input = document.getElementById('admin-pack-search-input');
        var form = document.getElementById('admin-pack-search-form');
        var debounce;
        window.addEventListener('DOMContentLoaded', function() {
            if (window.sessionStorage.getItem('adminPackSearchScroll')) {
                window.scrollTo(0, parseInt(window.sessionStorage.getItem('adminPackSearchScroll'), 10));
                window.sessionStorage.removeItem('adminPackSearchScroll');
            }
            if (input) {
                input.focus();
                var val = input.value;
                input.value = '';
                input.value = val;
            }
        });
        if (input && form) {
            input.addEventListener('input', function() {
                clearTimeout(debounce);
                debounce = setTimeout(function() {
                    window.sessionStorage.setItem('adminPackSearchScroll', window.scrollY);
                    form.submit();
                }, 300);
            });
        }
    })();
    </script>
</div>
<div class=\"table-view\">
    <table id=\"packsTable\" class=\"table table-hover dt-responsive nowrap w-100\">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Événement</th>
                                            <th>Description</th>
                                            <th>Prix</th>
                                            <th>Capacité</th>
                                            <th>Durée</th>
                                            <th>Date de fin</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 1208
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 1208, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pack"]) {
            // line 1209
            yield "                                        <tr>
                                            <td>
                                                ";
            // line 1211
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "event", [], "any", false, false, false, 1211), "photo", [], "any", false, false, false, 1211)) {
                // line 1212
                yield "                                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "event", [], "any", false, false, false, 1212), "photo", [], "any", false, false, false, 1212))), "html", null, true);
                yield "\" class=\"rounded\" width=\"40\" height=\"40\" style=\"object-fit: cover;\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "event", [], "any", false, false, false, 1212), "nom", [], "any", false, false, false, 1212), "html", null, true);
                yield "\">
                                                ";
            } else {
                // line 1214
                yield "                                                    <i class=\"ti ti-photo text-muted\"></i>
                                                ";
            }
            // line 1216
            yield "                                            </td>
                                            <td>";
            // line 1217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "event", [], "any", false, false, false, 1217), "nom", [], "any", false, false, false, 1217), "html", null, true);
            yield "</td>
                                            <td>";
            // line 1218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "description", [], "any", false, false, false, 1218), "html", null, true);
            yield "</td>
                                            <td>";
            // line 1219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "prix", [], "any", false, false, false, 1219), "html", null, true);
            yield "€</td>
                                            <td>
                                                <span class=\"badge bg-label-primary\">";
            // line 1221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "capacite", [], "any", false, false, false, 1221), "html", null, true);
            yield " places</span>
                                            </td>
                                            <td>";
            // line 1223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "duree", [], "any", false, false, false, 1223), "html", null, true);
            yield "h</td>
                                            <td>";
            // line 1224
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "endDate", [], "any", false, false, false, 1224)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "endDate", [], "any", false, false, false, 1224), "d/m/Y"), "html", null, true)) : (""));
            yield "</td>
                                            <td>
                                                <div class=\"d-flex gap-2\">
                                                    <button type=\"button\" class=\"btn btn-sm btn-icon btn-primary\" 
                                                            onclick=\"editPack(";
            // line 1228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 1228), "html", null, true);
            yield ")\"
                                                            data-bs-toggle=\"tooltip\" 
                                                            data-bs-placement=\"top\" 
                                                            title=\"Modifier\">
                                                        <i class=\"ti ti-edit\"></i>
                                                    </button>
                                                    <button type=\"button\" class=\"btn btn-sm btn-icon btn-danger\"
                                                            onclick=\"deletePack(";
            // line 1235
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 1235), "html", null, true);
            yield ")\"
                                                            data-bs-toggle=\"tooltip\"
                                                            data-bs-placement=\"top\"
                                                            title=\"Supprimer\">
                                                        <i class=\"ti ti-trash\"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pack'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1245
        yield "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Création/Modification de pack -->
<div class=\"modal fade\" id=\"packModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"modalTitle\">Créer un nouveau pack</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
            </div>
            ";
        // line 1264
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1264, $this->source); })()), 'form_start', ["attr" => ["id" => "packForm", "class" => "needs-validation", "novalidate" => "novalidate", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pack_update", ["id" => "packId"]), "method" => "POST"]]);
        // line 1272
        yield "
                <div class=\"modal-body\">
    <div id=\"inspiration-copied-alert\" class=\"alert alert-success d-none\" role=\"alert\">
        Suggestion copiée !
    </div>
                    <input type=\"hidden\" id=\"packId\" name=\"id\">
                    <div class=\"mb-3\">
                        <label class=\"form-label\" for=\"";
        // line 1279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1279, $this->source); })()), "event", [], "any", false, false, false, 1279), "vars", [], "any", false, false, false, 1279), "id", [], "any", false, false, false, 1279), "html", null, true);
        yield "\">Événement</label>
                        ";
        // line 1280
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1280, $this->source); })()), "event", [], "any", false, false, false, 1280), 'widget', ["attr" => ["class" => "form-select", "required" => "required"]]);
        yield "
                        <div class=\"invalid-feedback\">Veuillez sélectionner un événement.</div>
                        ";
        // line 1282
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1282, $this->source); })()), "event", [], "any", false, false, false, 1282), 'errors');
        yield "
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\" for=\"";
        // line 1285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1285, $this->source); })()), "description", [], "any", false, false, false, 1285), "vars", [], "any", false, false, false, 1285), "id", [], "any", false, false, false, 1285), "html", null, true);
        yield "\">Description</label>
                        ";
        // line 1286
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1286, $this->source); })()), "description", [], "any", false, false, false, 1286), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                        <div class=\"invalid-feedback\">Veuillez fournir une description.</div>
                        ";
        // line 1288
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1288, $this->source); })()), "description", [], "any", false, false, false, 1288), 'errors');
        yield "
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label\" for=\"";
        // line 1292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1292, $this->source); })()), "prix", [], "any", false, false, false, 1292), "vars", [], "any", false, false, false, 1292), "id", [], "any", false, false, false, 1292), "html", null, true);
        yield "\">Prix</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-text\">€</span>
                                ";
        // line 1295
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1295, $this->source); })()), "prix", [], "any", false, false, false, 1295), 'widget', ["attr" => ["class" => "form-control", "required" => "required", "step" => "0.01", "min" => "0"]]);
        yield "
                            </div>
                            <div class=\"invalid-feedback\">Veuillez fournir un prix valide.</div>
                            ";
        // line 1298
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1298, $this->source); })()), "prix", [], "any", false, false, false, 1298), 'errors');
        yield "
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label\" for=\"";
        // line 1301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1301, $this->source); })()), "capacite", [], "any", false, false, false, 1301), "vars", [], "any", false, false, false, 1301), "id", [], "any", false, false, false, 1301), "html", null, true);
        yield "\">Capacité</label>
                            ";
        // line 1302
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1302, $this->source); })()), "capacite", [], "any", false, false, false, 1302), 'widget', ["attr" => ["class" => "form-control", "required" => "required", "min" => "1"]]);
        yield "
                            <div class=\"invalid-feedback\">Veuillez fournir une capacité valide.</div>
                            ";
        // line 1304
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1304, $this->source); })()), "capacite", [], "any", false, false, false, 1304), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label\" for=\"";
        // line 1309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1309, $this->source); })()), "duree", [], "any", false, false, false, 1309), "vars", [], "any", false, false, false, 1309), "id", [], "any", false, false, false, 1309), "html", null, true);
        yield "\">Durée (heures)</label>
                            ";
        // line 1310
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1310, $this->source); })()), "duree", [], "any", false, false, false, 1310), 'widget', ["attr" => ["class" => "form-control", "required" => "required", "min" => "1"]]);
        yield "
                            <div class=\"invalid-feedback\">Veuillez fournir une durée valide.</div>
                            ";
        // line 1312
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1312, $this->source); })()), "duree", [], "any", false, false, false, 1312), 'errors');
        yield "
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label\" for=\"";
        // line 1315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1315, $this->source); })()), "endDate", [], "any", false, false, false, 1315), "vars", [], "any", false, false, false, 1315), "id", [], "any", false, false, false, 1315), "html", null, true);
        yield "\">Date de fin</label>
                            ";
        // line 1316
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1316, $this->source); })()), "endDate", [], "any", false, false, false, 1316), 'widget', ["attr" => ["class" => "form-control flatpickr"]]);
        yield "
                            <div class=\"invalid-feedback\">Veuillez fournir une date valide.</div>
                            ";
        // line 1318
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1318, $this->source); })()), "endDate", [], "any", false, false, false, 1318), 'errors');
        yield "
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-label-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                </div>
            ";
        // line 1326
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1326, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
</div>

    <!-- Pack Inspiration Script -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const copyBtns = document.querySelectorAll('.copy-inspiration-btn');
        const packModalBtn = document.querySelector('[data-bs-target=\"#createPackModal\"]');
        const modal = document.getElementById('packModal');
        const titleInput = document.querySelector('input[name=\"pack[event]\"]');
        const descInput = document.querySelector('textarea[name=\"pack[description]\"]');
        const keywordsInput = document.querySelector('input[name=\"pack[keywords]\"]'); // If you have a keywords field
        const alertBox = document.getElementById('inspiration-copied-alert');

        copyBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                // Fill modal fields when modal is open
                if (modal) {
                    if (titleInput) titleInput.value = btn.getAttribute('data-title');
                    if (descInput) descInput.value = btn.getAttribute('data-description');
                    if (keywordsInput) keywordsInput.value = btn.getAttribute('data-keywords');
                    if (alertBox) {
                        alertBox.classList.remove('d-none');
                        setTimeout(() => alertBox.classList.add('d-none'), 1500);
                    }
                    // Open modal if not already open
                    const bsModal = bootstrap.Modal.getOrCreateInstance(modal);
                    bsModal.show();
                }
            });
        });
    });
    </script>
    <!-- /Pack Inspiration Script -->
    <!-- Core JS -->
    <script src=\"";
        // line 1363
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1366
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1367
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/node-waves/node-waves.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/hammer/hammer.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1369
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/menu.js"), "html", null, true);
        yield "\"></script>
    
    <!-- Custom Pack Creation Enhancement -->
    <script src=\"";
        // line 1372
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/admin-pack-create.js"), "html", null, true);
        yield "\"></script>

    <!-- Vendors JS -->
    <script src=\"";
        // line 1375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/datatables-bs5/datatables-bootstrap5.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1376
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/sweetalert2/sweetalert2.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1377
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/flatpickr/flatpickr.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/swiper/swiper.js"), "html", null, true);
        yield "\"></script>

    <script>
        \$(document).ready(function() {
            // Initialize DataTable
            const packsTable = \$('#packsTable').DataTable({
                dom: \"<'row mb-2'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>\" +
                     \"<'row'<'col-sm-12'tr>>\" +
                     \"<'row mt-2'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>\",
                responsive: true,
                order: [[0, 'desc']],
                pageLength: 10,
                language: {
                    sLengthMenu: '_MENU_',
                    search: '',
                    searchPlaceholder: 'Rechercher un pack...'
                }
            });

            // Initialize Flatpickr
            flatpickr('.flatpickr', {
                dateFormat: 'Y-m-d',
                minDate: 'today'
            });

            // Initialize tooltips
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
            tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
            
            // View toggle functionality
            \$('.view-toggle-btn').click(function() {
                const view = \$(this).data('view');
                \$('.view-toggle-btn').removeClass('active');
                \$(this).addClass('active');
                if (view === 'gallery') {
                    \$('.gallery-view').addClass('active').show();
                    \$('.table-view').removeClass('active').hide();
                } else {
                    \$('.gallery-view').removeClass('active').hide();
                    \$('.table-view').addClass('active').show();
                    packsTable.columns.adjust().responsive.recalc();
                }
            });
            
            // Initialize tooltips for quick action buttons
            const quickActionTooltips = [].slice.call(document.querySelectorAll('.quick-actions [data-bs-toggle=\"tooltip\"]'));
            quickActionTooltips.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });

        // Submit form
        document.getElementById('packForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const form = e.target;
            const formData = new FormData(form);
            const data = {};

            // Convert FormData to object
            for (let [key, value] of formData.entries()) {
                // Remove the 'pack[' prefix from the key
                const fieldName = key.replace('pack[', '').replace(']', '');
                data[fieldName] = value;
            }

            // Get the pack ID from the hidden input
            const packId = document.getElementById('packId').value;
            
            // Show loading state
            form.classList.add('was-validated');
            const submitButton = form.querySelector('button[type=\"submit\"]');
            submitButton.disabled = true;
            submitButton.innerHTML = '<span class=\"spinner-border spinner-border-sm\" role=\"status\" aria-hidden=\"true\"></span> Saving...';

            // Send the request
            fetch(`";
        // line 1456
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pack_update", ["id" => "PACK_ID"]);
        yield "`.replace('PACK_ID', packId), {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(response => {
                if (response.success) {
                    // Show success message
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: response.message,
                        showConfirmButton: false,
                        timer: 1500
                    });

                    // Close modal and refresh the page
                    const modal = bootstrap.Modal.getInstance(document.getElementById('packModal'));
                    modal.hide();
                    window.location.reload();
                } else {
                    // Show error message with detailed debug info
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        html: `
                            <div>\${response.message}</div>
                            \${response.debug ? `
                            <div class=\"mt-3\">
                                <h6>Debug Information:</h6>
                                <pre>\${JSON.stringify(response.debug, null, 2)}</pre>
                            </div>
                            ` : ''}
                        `,
                        confirmButtonText: 'OK'
                    });
                }
            })
            .catch(error => {
                console.error('Network error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Network Error!',
                    text: 'An error occurred while submitting the form. Please try again.',
                    confirmButtonText: 'OK'
                });
            })
            .finally(() => {
                // Reset form state
                form.classList.remove('was-validated');
                submitButton.disabled = false;
                submitButton.innerHTML = 'Save changes';
            });
        });

        // Edit pack
        function editPack(id) {
            fetch(`";
        // line 1517
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pack_edit", ["id" => "PACK_ID"]);
        yield "`.replace('PACK_ID', id))
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const pack = data.pack;
                        document.getElementById('modalTitle').textContent = 'Modifier le pack';
                        document.getElementById('packId').value = pack.id;
                        
                        // Get form elements using their names
                        const eventSelect = document.querySelector('select[name=\"pack[event]\"]');
                        const descriptionInput = document.querySelector('textarea[name=\"pack[description]\"]');
                        const prixInput = document.querySelector('input[name=\"pack[prix]\"]');
                        const capaciteInput = document.querySelector('input[name=\"pack[capacite]\"]');
                        const dureeInput = document.querySelector('input[name=\"pack[duree]\"]');
                        const endDateInput = document.querySelector('input[name=\"pack[endDate]\"]');

                        // Set values
                        eventSelect.value = pack.event.id;
                        descriptionInput.value = pack.description;
                        prixInput.value = pack.prix;
                        capaciteInput.value = pack.capacite;
                        dureeInput.value = pack.duree;
                        endDateInput.value = pack.endDate;
                        
                        const modal = new bootstrap.Modal(document.getElementById('packModal'));
                        modal.show();
                    } else {
                        throw new Error(data.message);
                    }
                })
                .catch(error => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: error.message,
                        confirmButtonText: 'OK'
                    });
                });
        }

        // Supprimer un pack
function deletePack(id) {
    Swal.fire({
        title: 'Êtes-vous sûr ?',
        text: \"Cette action est irréversible !\",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Oui, supprimer !',
        cancelButtonText: 'Annuler',
        customClass: {
            confirmButton: 'btn btn-danger me-3',
            cancelButton: 'btn btn-label-secondary'
        },
        buttonsStyling: false
    }).then((result) => {
        if (result.isConfirmed) {
            fetch(`";
        // line 1573
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pack_delete", ["id" => "PACK_ID"]);
        yield "`.replace('PACK_ID', id), {
                method: 'DELETE'
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Supprimé !',
                        text: data.message,
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        location.reload();
                    });
                } else {
                    throw new Error(data.message);
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
}
        
        // View pack details function
        function viewPackDetails(id) {
            // Implement pack details view logic
            window.location.href = `";
        // line 1607
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pack_show", ["id" => "PACK_ID"]);
        yield "`.replace('PACK_ID', id);
        }

        // Fetch unread notifications count
        function fetchUnreadCount() {
            fetch('";
        // line 1612
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_notifications_count");
        yield "')
                .then(response => response.json())
                .then(data => {
                    const badge = document.getElementById('unreadCountBadge');
                    badge.textContent = data.count;
                    if (data.count === 0) {
                        badge.style.display = 'none';
                    } else {
                        badge.style.display = 'inline';
                    }
                })
                .catch(error => {
                    console.error('Error fetching unread count:', error);
                });
        }

        // Check for new notifications every 30 seconds
        setInterval(fetchUnreadCount, 30000);

        // Initial fetch
        fetchUnreadCount();
    </script>
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
        return "admin/pack/index.html.twig";
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
        return array (  1960 => 1612,  1952 => 1607,  1915 => 1573,  1856 => 1517,  1792 => 1456,  1711 => 1378,  1707 => 1377,  1703 => 1376,  1699 => 1375,  1693 => 1372,  1687 => 1369,  1683 => 1368,  1679 => 1367,  1675 => 1366,  1671 => 1365,  1667 => 1364,  1663 => 1363,  1623 => 1326,  1612 => 1318,  1607 => 1316,  1603 => 1315,  1597 => 1312,  1592 => 1310,  1588 => 1309,  1580 => 1304,  1575 => 1302,  1571 => 1301,  1565 => 1298,  1559 => 1295,  1553 => 1292,  1546 => 1288,  1541 => 1286,  1537 => 1285,  1531 => 1282,  1526 => 1280,  1522 => 1279,  1513 => 1272,  1511 => 1264,  1490 => 1245,  1474 => 1235,  1464 => 1228,  1457 => 1224,  1453 => 1223,  1448 => 1221,  1443 => 1219,  1439 => 1218,  1435 => 1217,  1432 => 1216,  1428 => 1214,  1420 => 1212,  1418 => 1211,  1414 => 1209,  1410 => 1208,  1360 => 1160,  1346 => 1152,  1340 => 1149,  1334 => 1146,  1323 => 1138,  1316 => 1134,  1305 => 1126,  1300 => 1124,  1295 => 1122,  1291 => 1121,  1287 => 1119,  1281 => 1115,  1279 => 1114,  1276 => 1113,  1270 => 1109,  1262 => 1107,  1260 => 1106,  1256 => 1104,  1252 => 1103,  953 => 807,  941 => 798,  930 => 789,  923 => 787,  921 => 786,  909 => 779,  905 => 778,  901 => 777,  891 => 770,  888 => 769,  883 => 768,  862 => 750,  837 => 728,  823 => 717,  813 => 710,  601 => 501,  596 => 499,  440 => 346,  423 => 332,  122 => 34,  118 => 33,  114 => 32,  110 => 31,  106 => 30,  102 => 29,  98 => 28,  94 => 27,  88 => 24,  84 => 23,  80 => 22,  74 => 19,  70 => 18,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" class=\"light-style layout-navbar-fixed layout-menu-fixed\" dir=\"ltr\" data-theme=\"theme-default\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>Pack Management - Admin Dashboard</title>
    <meta name=\"description\" content=\"Manage event packs efficiently\" />
    
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
    
    <style>
        .pack-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }
        
        .pack-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .pack-image {
            height: 200px;
            object-fit: cover;
            border-radius: 8px 8px 0 0;
        }
        
        .pack-badge {
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
        
        .pack-card:hover .quick-actions {
            bottom: 10px;
            opacity: 1;
        }
        
        .gallery-view .pack-card {
            margin-bottom: 30px;
        }
        
        .view-toggle-btn.active {
            background-color: #7367f0;
            color: white;
        }
        
        .pack-stats {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 10px;
            background: rgba(0,0,0,0.6);
            color: white;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .pack-card:hover .pack-stats {
            opacity: 1;
        }
        
        .table-view {
            display: none;
            width: 100%;
        }
        
        .table-view.active {
            display: block;
        }
        
        .gallery-view {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .gallery-view.active {
            display: flex;
        }
        
        .pack-price {
            font-size: 1.25rem;
            font-weight: 600;
            color: #7367f0;
        }
        
        .pack-capacity {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-size: 0.875rem;
            color: #6e6b7b;
        }

        /* Notifications styles */
        .dropdown-notifications-list {
            max-height: 350px;
            overflow-y: auto;
            padding: 0;
            margin: 0;
        }
        .dropdown-menu.dropdown-menu-end {
            min-width: 340px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
            border-radius: 0.5rem;
        }
        .list-group-item.dropdown-notifications-item {
            border: none;
            border-bottom: 1px solid #f0f0f0;
            padding: 1rem 1.25rem;
        }
        .list-group-item.dropdown-notifications-item:last-child {
            border-bottom: none;
        }
        .dropdown-menu-header {
            background: #f8f9fa;
            border-radius: 0.5rem 0.5rem 0 0;
            margin-bottom: 0;
            padding: 0.75rem 1.25rem;
        }
        .dropdown-menu-footer {
            background: #f8f9fa;
            border-radius: 0 0 0.5rem 0.5rem;
            padding: 0.5rem 1.25rem;
            text-align: center;
        }
        .menu-link {
            position: relative;
            padding: 0.75rem 1rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            transition: all 0.3s ease;
        }

        .menu-link:hover {
            background-color: #f8f9fa;
            color: #2d3748;
        }

        .menu-link .badge {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            font-size: 0.75rem;
            padding: 0.25rem 0.5rem;
            line-height: 1;
        }

        .menu-link .menu-icon {
            font-size: 1.1rem;
            color: #6e6b7b;
            transition: all 0.3s ease;
        }

        .menu-link:hover .menu-icon {
            color: #2d3748;
        }

        .menu-link.active {
            background-color: #f8f9fa;
            color: #2d3748;
        }

        .menu-link.active .menu-icon {
            color: #2d3748;
        }

        .menu-link.active .badge {
            background-color: #7367f0;
            color: white;
        }

        /* Form Elements */
        .form-control, .form-select {
            transition: all 0.3s ease;
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            border: 2px solid #e2e8f0;
        }

        .form-control:focus, .form-select:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
        }

        .form-control.is-invalid, .form-select.is-invalid {
            border-color: #ef4444;
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.2);
            animation: shake 0.5s ease-in-out;
        }

        .invalid-feedback {
            color: #dc2626;
            font-size: 0.875rem;
            margin-top: 0.25rem;
            display: none;
        }

        .form-control.is-invalid ~ .invalid-feedback,
        .form-select.is-invalid ~ .invalid-feedback {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Error Icon for Select Elements */
        .form-select.is-invalid {
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc2626'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc2626' stroke='none'/%3e%3c/svg%3e\"),
                       url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' width='16' height='16' fill='%23495057'%3e%3cpath fill-rule='evenodd' d='M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z'/%3e%3c/svg%3e\");
            background-position: right 0.5rem center, center right 2.25rem;
            background-size: 16px 12px, 16px 12px;
            background-repeat: no-repeat;
        }
        
        .dataTables_filter {
            float: none !important;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            margin-bottom: 1rem;
            gap: 1rem;
        }
        
        .dataTables_length {
            float: left !important;
            margin-bottom: 1rem;
        }
        
        .dataTables_wrapper .row {
            margin-bottom: 0 !important;
        }
    </style>
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
            
          <nav
            class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\"
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
    <a class=\"nav-item nav-link search-toggler d-flex align-items-center px-0\" id=\"admin-pack-search-bar-trigger\" href=\"javascript:void(0);\">
      <i class=\"ti ti-search ti-md me-2\"></i>
      <span class=\"d-none d-md-inline-block text-muted\">Rechercher (Ctrl+/)</span>
    </a>
    <div id=\"admin-pack-search-dropdown\" style=\"display:none; position:absolute; top:100%; left:0; z-index:9999; min-width:260px; background:white; box-shadow:0 6px 24px rgba(0,0,0,0.13); border-radius:8px; padding:12px;\">
      <form method=\"get\" action=\"{{ path('admin_pack_index') }}\" style=\"margin:0;\">
        <div class=\"input-group\">
          <input type=\"text\" name=\"q\" id=\"admin-pack-search-input-navbar\" class=\"form-control\" value=\"{{ app.request.get('q') }}\" placeholder=\"Rechercher des packs...\" autocomplete=\"off\" autofocus>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
(function() {
  const trigger = document.getElementById('admin-pack-search-bar-trigger');
  const dropdown = document.getElementById('admin-pack-search-dropdown');
  const input = document.getElementById('admin-pack-search-input-navbar');
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
        doAjaxPackSearch(input.value);
      }, 400);
    });
    input.addEventListener('keydown', function(e) {
      if (e.key === 'Enter') {
        e.preventDefault();
        doAjaxPackSearch(input.value);
      }
    });
  }

  // AJAX pack search function
  async function doAjaxPackSearch(query) {
    try {
      const url = `/admin/pack/search?q=\${encodeURIComponent(query)}`;
      const resp = await fetch(url, {headers: {'X-Requested-With':'XMLHttpRequest'}});
      const data = await resp.json();
      if (data.success) {
        renderPackViews(data.packs);
      }
    } catch (err) {
      console.error('AJAX search error:', err);
    }
  }

  // Render packs in both gallery and table views
  function renderPackViews(packs) {
    // Gallery view
    const gallery = document.querySelector('.gallery-view');
    if (gallery) {
      let html = '';
      for (const pack of packs) {
        html += `<div class=\"col-md-4 col-lg-3\">
          <div class=\"card pack-card\">
            \${pack.event.photo ? `<img src=\"/uploads/packs/\${pack.event.photo}\" class=\"pack-image\" alt=\"\${pack.event.nom}\">` : `<div class='pack-image d-flex align-items-center justify-content-center bg-light'><i class='ti ti-photo text-muted' style='font-size: 3rem;'></i></div>`}
            \${pack.capacite < 5 ? `<div class='pack-badge'><span class='badge bg-danger'>Places limitées !</span></div>` : ''}
            <div class=\"card-body\">
              <h5 class=\"card-title\">\${pack.event.nom}</h5>
              <p class=\"card-text text-truncate\">\${pack.description}</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"pack-price\">\${pack.prix}€</div>
                <div class=\"pack-capacity\"><i class=\"ti ti-users\"></i> \${pack.capacite}</div>
              </div>
            </div>
            <div class=\"pack-stats\">
              <div class=\"row g-0 text-center\">
                <div class=\"col\"><div class=\"h6 mb-0\">\${pack.duree}h</div><small>Durée</small></div>
                <div class=\"col\"><div class=\"h6 mb-0\">\${pack.endDate ? (new Date(pack.endDate)).toLocaleDateString('fr-FR', {day:'2-digit', month:'short'}) : 'Sans fin'}</div><small>Date de fin</small></div>
              </div>
            </div>
            <div class=\"quick-actions\"><div class=\"btn-group shadow\">
              <button type='button' class='btn btn-primary btn-sm' onclick='editPack(\${pack.id})'><i class='ti ti-edit'></i></button>
              <button type='button' class='btn btn-primary btn-sm' onclick='viewPackDetails(\${pack.id})'><i class='ti ti-eye'></i></button>
              <button type='button' class='btn btn-danger btn-sm' onclick='deletePack(\${pack.id})'><i class='ti ti-trash'></i></button>
            </div></div>
          </div>
        </div>`;
      }
      gallery.innerHTML = html || `<div class='col-12 text-center text-muted py-4'>Aucun pack trouvé.</div>`;
    }
    // Table view
    const tableBody = document.querySelector('.table-view tbody');
    if (tableBody) {
      let html = '';
      for (const pack of packs) {
        html += `<tr>
          <td>\${pack.event.photo ? `<img src=\"/uploads/packs/\${pack.event.photo}\" class=\"rounded\" width=\"40\" height=\"40\" style=\"object-fit: cover;\" alt=\"\${pack.event.nom}\">` : `<i class='ti ti-photo text-muted'></i>`}</td>
          <td>\${pack.event.nom}</td>
          <td>\${pack.description}</td>
          <td>\${pack.prix}€</td>
          <td><span class=\"badge bg-label-primary\">\${pack.capacite} places</span></td>
          <td>\${pack.duree}h</td>
          <td>\${pack.endDate ? (new Date(pack.endDate)).toLocaleDateString('fr-FR') : ''}</td>
          <td><div class='d-flex gap-2'>
            <button type='button' class='btn btn-sm btn-icon btn-primary' onclick='editPack(\${pack.id})' data-bs-toggle='tooltip' data-bs-placement='top' title='Modifier'><i class='ti ti-edit'></i></button>
            <button type='button' class='btn btn-sm btn-icon btn-danger' onclick='deletePack(\${pack.id})' data-bs-toggle='tooltip' data-bs-placement='top' title='Supprimer'><i class='ti ti-trash'></i></button>
          </div></td>
        </tr>`;
      }
      tableBody.innerHTML = html || `<tr><td colspan='8' class='text-center text-muted'>Aucun pack trouvé.</td></tr>`;
    }
  }
})();
</script>
</div>
              <!-- /Search -->

              <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
                <!-- Language -->
                <li class=\"nav-item dropdown-language dropdown me-2 me-xl-0\">
                  <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                    <i class=\"fi fi-us fis rounded-circle me-1 fs-3\"></i>
                  </a>
                  <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li>
                      <a class=\"dropdown-item\" href=\"javascript:void(0);\" data-language=\"en\">
                        <i class=\"fi fi-us fis rounded-circle me-1 fs-3\"></i>
                        <span class=\"align-middle\">English</span>
                      </a>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"javascript:void(0);\" data-language=\"fr\">
                        <i class=\"fi fi-fr fis rounded-circle me-1 fs-3\"></i>
                        <span class=\"align-middle\">French</span>
                      </a>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"javascript:void(0);\" data-language=\"de\">
                        <i class=\"fi fi-de fis rounded-circle me-1 fs-3\"></i>
                        <span class=\"align-middle\">German</span>
                      </a>
                    </li>
                    <li>
                      <a class=\"dropdown-item\" href=\"javascript:void(0);\" data-language=\"pt\">
                        <i class=\"fi fi-pt fis rounded-circle me-1 fs-3\"></i>
                        <span class=\"align-middle\">Portuguese</span>
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
                    <span class=\"badge bg-danger rounded-pill badge-notifications\">{{ unreadNotificationsCount }}</span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-menu-end py-0\">
                    <li class=\"dropdown-menu-header border-bottom\">
                      <div class=\"dropdown-header d-flex align-items-center py-3\">
                        <h5 class=\"text-body mb-0 me-auto\">Notification</h5>
                        <a
                          href=\"javascript:void(0)\"
                          class=\"dropdown-notifications-all text-body\"
                          data-bs-toggle=\"tooltip\"
                          data-bs-placement=\"top\"
                          title=\"Mark all as read\"
                          ><i class=\"ti ti-mail-opened fs-4\"></i
                        ></a>
                      </div>
                    </li>
                    <li class=\"dropdown-notifications-list scrollable-container\">
                      <ul class=\"list-group list-group-flush\">
                        {% for notification in latestNotifications %}
                            <li class=\"list-group-item list-group-item-action dropdown-notifications-item p-0\">
                              <a href=\"{{ path('admin_customize_pack_show', {'id': notification.demandePack.id}) }}\" class=\"d-flex align-items-stretch text-decoration-none text-dark w-100 p-3\" style=\"cursor:pointer;\">
                                <div class=\"flex-shrink-0 me-3\">
                                  <div class=\"avatar\">
                                    <span class=\"avatar-initial rounded-circle bg-label-info\"><i class=\"ti ti-bell\"></i></span>
                                  </div>
                                </div>
                                <div class=\"flex-grow-1\">
                                  <h6 class=\"mb-1\">{{ notification.titre|default('Notification') }}</h6>
                                  <p class=\"mb-0\">{{ notification.message|raw }}</p>
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
                    </ul>
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

          <span> </span>

          <!-- / Navbar -->

<style>
  /* Custom style to ensure the admin controls are never overlapped by the navbar */
  .card-header.mt-4 {
    margin-top: 2.5rem !important;
  }
  @media (max-width: 991.98px) {
    .card-header.mt-4 {
      margin-top: 3.5rem !important;
    }
  }
</style>

           <!-- Conteneur de mise en page -->
<div class=\"layout-page\">
    <!-- Wrapper du contenu -->
    <div class=\"content-wrapper\">
        <!-- Contenu -->
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <div class=\"row mb-4\">
                <div class=\"col-12\">
                    <div class=\"card\">
                        <div class=\"card-header d-flex justify-content-between align-items-center mt-4 gap-3\" style=\"z-index: 1; position: relative;\">
    <h5 class=\"mb-0\">Administration des packs</h5>
    <div class=\"d-flex gap-2\">
        <div class=\"btn-group\" role=\"group\">
            <button type=\"button\" class=\"btn btn-outline-primary view-toggle-btn active\" data-view=\"gallery\">
                <i class=\"ti ti-grid-dots\"></i>
            </button>
            <button type=\"button\" class=\"btn btn-outline-primary view-toggle-btn\" data-view=\"table\">
                <i class=\"ti ti-table\"></i>
            </button>
        </div>
        <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#createPackModal\">
            <i class=\"ti ti-plus me-1\"></i> Créer un nouveau pack
        </button>
    </div>
</div>
<!-- Pack Inspiration Assistant (now inside card, after main header) -->
<div class=\"container-fluid px-0 pt-4 pb-2\">
    <div class=\"row g-3 justify-content-center\">
        <div class=\"col-12 col-lg-10\">
            <div class=\"card shadow inspiration-card mb-3\" style=\"border-radius: 16px;\">
                <div class=\"card-body d-flex align-items-center\">
                    <i class=\"ti ti-sparkles me-2 fs-4 text-primary\"></i>
                    <span class=\"fw-semibold\">Voici 3 idées basées sur les tendances actuelles :</span>
                    <div class=\"ms-auto d-flex align-items-center gap-3\">
                        <button id=\"refresh-inspiration-btn\" class=\"btn btn-primary d-flex align-items-center gap-2\">
                            <i class=\"ti ti-bulb\"></i>
                            Suggestions de packs
                        </button>
                        <div id=\"pack-suggestions\" class=\"position-absolute top-100 start-50 translate-middle-x mt-3 w-75\" style=\"z-index: 1000; display: none;\">
                            <!-- Les suggestions seront injectées ici par JavaScript -->
                        </div>
                        <button class=\"btn btn-sm btn-outline-secondary\" id=\"refresh-inspiration-btn\" type=\"button\">
                            <i class=\"ti ti-refresh me-1\"></i> Actualiser les idées
                        </button>
                    </div>
                </div>
            </div>
            <div class=\"row g-3\" id=\"pack-inspiration-list\">
                <!-- Pack Suggestions -->
                <div class=\"col-md-4\">
                    <div class=\"card h-100 pack-suggestion\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Festival Eco-Responsable</h5>
                            <p class=\"card-text\">Un événement éco-conscient avec installations d'art recyclé, cuisine locale bio et animations sur le développement durable.</p>
                            <div class=\"mt-3\">
                                <span class=\"badge bg-success me-1\">écologie</span>
                                <span class=\"badge bg-success me-1\">développement durable</span>
                                <span class=\"badge bg-success me-1\">art recyclé</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card h-100 pack-suggestion\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Soirée Gaming & eSport</h5>
                            <p class=\"card-text\">Un événement gaming avec tournois eSport, réalité virtuelle et animations rétro-gaming sur grand écran.</p>
                            <div class=\"mt-3\">
                                <span class=\"badge bg-primary me-1\">gaming</span>
                                <span class=\"badge bg-primary me-1\">esport</span>
                                <span class=\"badge bg-primary me-1\">réalité virtuelle</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card h-100 pack-suggestion\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Retraite Bien-être Zen</h5>
                            <p class=\"card-text\">Une journée dédiée au bien-être avec yoga, méditation sonore, ateliers nutrition et spa naturel.</p>
                            <div class=\"mt-3\">
                                <span class=\"badge bg-info me-1\">bien-être</span>
                                <span class=\"badge bg-info me-1\">yoga</span>
                                <span class=\"badge bg-info me-1\">méditation</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .inspiration-card {
        background: #f6f9fc;
        border: 1px solid #e3e6ec;
    }
    #pack-inspiration-list .card {
        border-radius: 16px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        min-height: 320px;
    }
    #pack-inspiration-list .inspiration-img {
        border-radius: 16px 16px 0 0;
    }
    .gallery-view, #pack-inspiration-list {
        margin-left: 0;
        margin-right: 0;
    }
</style>
<script>
// SweetAlert2 CDN
if (!window.Swal) {
    const swalScript = document.createElement('script');
    swalScript.src = 'https://cdn.jsdelivr.net/npm/sweetalert2@11';
    document.head.appendChild(swalScript);
}

async function loadPackInspiration() {
    const container = document.getElementById('pack-inspiration-list');
    container.innerHTML = '<div class=\"text-center w-100 py-4\"><div class=\"spinner-border\"></div></div>';
    try {
        const response = await fetch('/admin/pack/inspiration');
        const isJson = response.headers.get('content-type')?.includes('application/json');
        let ideas;
        if (!response.ok) {
            let errMsg = 'Erreur lors de la génération des idées.';
            if (isJson) {
                const errData = await response.json();
                errMsg = errData.error || errMsg;
            }
            if (window.Swal) Swal.fire({icon:'error',title:'Erreur',text:errMsg});
            container.innerHTML = `<div class='alert alert-danger w-100'>\${errMsg}</div>`;
            return;
        }
        ideas = await response.json();
        container.innerHTML = '';
        
        ideas.forEach(insp => {
            container.innerHTML += `
            <div class=\"col-md-4\">
                <div class=\"card h-100 shadow inspiration-card\" style=\"border-radius: 16px;\">
                    <div class=\"position-relative\">
                        <img src=\"\${insp.image}\" alt=\"\${insp.title}\" class=\"w-100 inspiration-img\" style=\"height:180px;object-fit:cover;border-radius:16px 16px 0 0;\">
                        <span class=\"badge bg-primary position-absolute top-0 end-0 m-2\">Tendance</span>
                    </div>
                    <div class=\"card-body\">
                        <h6 class=\"fw-bold mb-2\">\${insp.title}</h6>
                        <p class=\"mb-2 small text-muted\">\${insp.description}</p>
                        <div class=\"mb-2\">
                            <span class=\"badge bg-label-info text-primary\">\${insp.keywords}</span>
                        </div>
                        <button type=\"button\" class=\"btn btn-outline-primary btn-sm w-100 copy-inspiration-btn\"
                            data-title=\"\${insp.title}\"
                            data-description=\"\${insp.description}\"
                            data-keywords=\"\${insp.keywords}\">
                            <i class=\"ti ti-copy me-1\"></i> Copier cette idée
                        </button>
                    </div>
                </div>
            </div>
            `;
        });
        // Re-bind copy-to-form
        document.querySelectorAll('.copy-inspiration-btn').forEach(btn => {
            btn.addEventListener('click', function () {
                const modal = document.getElementById('packModal');
                const titleInput = document.querySelector('input[name=\"pack[event]\"]');
                const descInput = document.querySelector('textarea[name=\"pack[description]\"]');
                const keywordsInput = document.querySelector('input[name=\"pack[keywords]\"]');
                const alertBox = document.getElementById('inspiration-copied-alert');
                if (modal) {
                    if (titleInput) titleInput.value = btn.getAttribute('data-title');
                    if (descInput) descInput.value = btn.getAttribute('data-description');
                    if (keywordsInput) keywordsInput.value = btn.getAttribute('data-keywords');
                    if (alertBox) {
                        alertBox.classList.remove('d-none');
                        setTimeout(() => alertBox.classList.add('d-none'), 1500);
                    }
                    const bsModal = bootstrap.Modal.getOrCreateInstance(modal);
                    bsModal.show();
                }
            });
        });
    } catch (e) {
        container.innerHTML = `<div class='alert alert-danger w-100'>\${e.message}</div>`;
    }
}
document.addEventListener('DOMContentLoaded', loadPackInspiration);
document.getElementById('refresh-inspiration-btn').addEventListener('click', loadPackInspiration);
</script>
    </div>
</div>
<!-- /Pack Inspiration Assistant -->
    
                            <!-- Vue galerie -->
                            <div class=\"gallery-view active row g-3 justify-content-center\">
                                {% for pack in packs %}
                                <div class=\"col-md-4 col-lg-3\">
                                    <div class=\"card pack-card\">
                                        {% if pack.event.photo %}
                                            <img src=\"{{ asset('uploads/packs/' ~ pack.event.photo) }}\" class=\"pack-image\" alt=\"{{ pack.event.nom }}\">
                                        {% else %}
                                            <div class=\"pack-image d-flex align-items-center justify-content-center bg-light\">
                                                <i class=\"ti ti-photo text-muted\" style=\"font-size: 3rem;\"></i>
                                            </div>
                                        {% endif %}
                                        
                                        {% if pack.capacite < 5 %}
                                            <div class=\"pack-badge\">
                                                <span class=\"badge bg-danger\">Places limitées !</span>
                                            </div>
                                        {% endif %}
                                        
                                        <div class=\"card-body\">
                                            <h5 class=\"card-title\">{{ pack.event.nom }}</h5>
                                            <p class=\"card-text text-truncate\">{{ pack.description }}</p>
                                            <div class=\"d-flex justify-content-between align-items-center\">
                                                <div class=\"pack-price\">{{ pack.prix }}€</div>
                                                <div class=\"pack-capacity\">
                                                    <i class=\"ti ti-users\"></i> {{ pack.capacite }}
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class=\"pack-stats\">
                                            <div class=\"row g-0 text-center\">
                                                <div class=\"col\">
                                                    <div class=\"h6 mb-0\">{{ pack.duree }}h</div>
                                                    <small>Durée</small>
                                                </div>
                                                <div class=\"col\">
                                                    <div class=\"h6 mb-0\">{{ pack.endDate ? pack.endDate|date('d M') : 'Sans fin' }}</div>
                                                    <small>Date de fin</small>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class=\"quick-actions\">
                                            <div class=\"btn-group shadow\">
                                                <button type=\"button\" class=\"btn btn-primary btn-sm\" onclick=\"editPack({{ pack.id }})\">
                                                    <i class=\"ti ti-edit\"></i>
                                                </button>
                                                <button type=\"button\" class=\"btn btn-primary btn-sm\" onclick=\"viewPackDetails({{ pack.id }})\">
                                                    <i class=\"ti ti-eye\"></i>
                                                </button>
                                                <button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"deletePack({{ pack.id }})\">
                                                    <i class=\"ti ti-trash\"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {% endfor %}
                            </div>
                            
                            <!-- Vue tableau -->
<!-- Removed duplicate search bar, now handled in navbar -->
    <script>
    (function() {
        var input = document.getElementById('admin-pack-search-input');
        var form = document.getElementById('admin-pack-search-form');
        var debounce;
        window.addEventListener('DOMContentLoaded', function() {
            if (window.sessionStorage.getItem('adminPackSearchScroll')) {
                window.scrollTo(0, parseInt(window.sessionStorage.getItem('adminPackSearchScroll'), 10));
                window.sessionStorage.removeItem('adminPackSearchScroll');
            }
            if (input) {
                input.focus();
                var val = input.value;
                input.value = '';
                input.value = val;
            }
        });
        if (input && form) {
            input.addEventListener('input', function() {
                clearTimeout(debounce);
                debounce = setTimeout(function() {
                    window.sessionStorage.setItem('adminPackSearchScroll', window.scrollY);
                    form.submit();
                }, 300);
            });
        }
    })();
    </script>
</div>
<div class=\"table-view\">
    <table id=\"packsTable\" class=\"table table-hover dt-responsive nowrap w-100\">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Événement</th>
                                            <th>Description</th>
                                            <th>Prix</th>
                                            <th>Capacité</th>
                                            <th>Durée</th>
                                            <th>Date de fin</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for pack in packs %}
                                        <tr>
                                            <td>
                                                {% if pack.event.photo %}
                                                    <img src=\"{{ asset('uploads/packs/' ~ pack.event.photo) }}\" class=\"rounded\" width=\"40\" height=\"40\" style=\"object-fit: cover;\" alt=\"{{ pack.event.nom }}\">
                                                {% else %}
                                                    <i class=\"ti ti-photo text-muted\"></i>
                                                {% endif %}
                                            </td>
                                            <td>{{ pack.event.nom }}</td>
                                            <td>{{ pack.description }}</td>
                                            <td>{{ pack.prix }}€</td>
                                            <td>
                                                <span class=\"badge bg-label-primary\">{{ pack.capacite }} places</span>
                                            </td>
                                            <td>{{ pack.duree }}h</td>
                                            <td>{{ pack.endDate ? pack.endDate|date('d/m/Y') : '' }}</td>
                                            <td>
                                                <div class=\"d-flex gap-2\">
                                                    <button type=\"button\" class=\"btn btn-sm btn-icon btn-primary\" 
                                                            onclick=\"editPack({{ pack.id }})\"
                                                            data-bs-toggle=\"tooltip\" 
                                                            data-bs-placement=\"top\" 
                                                            title=\"Modifier\">
                                                        <i class=\"ti ti-edit\"></i>
                                                    </button>
                                                    <button type=\"button\" class=\"btn btn-sm btn-icon btn-danger\"
                                                            onclick=\"deletePack({{ pack.id }})\"
                                                            data-bs-toggle=\"tooltip\"
                                                            data-bs-placement=\"top\"
                                                            title=\"Supprimer\">
                                                        <i class=\"ti ti-trash\"></i>
                                                    </button>
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
        </div>
    </div>
</div>

<!-- Modal Création/Modification de pack -->
<div class=\"modal fade\" id=\"packModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"modalTitle\">Créer un nouveau pack</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
            </div>
            {{ form_start(form, {
                'attr': {
                    'id': 'packForm',
                    'class': 'needs-validation',
                    'novalidate': 'novalidate',
                    'action': path('admin_pack_update', {'id': 'packId'}),
                    'method': 'POST'
                }
            }) }}
                <div class=\"modal-body\">
    <div id=\"inspiration-copied-alert\" class=\"alert alert-success d-none\" role=\"alert\">
        Suggestion copiée !
    </div>
                    <input type=\"hidden\" id=\"packId\" name=\"id\">
                    <div class=\"mb-3\">
                        <label class=\"form-label\" for=\"{{ form.event.vars.id }}\">Événement</label>
                        {{ form_widget(form.event, {'attr': {'class': 'form-select', 'required': 'required'}}) }}
                        <div class=\"invalid-feedback\">Veuillez sélectionner un événement.</div>
                        {{ form_errors(form.event) }}
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\" for=\"{{ form.description.vars.id }}\">Description</label>
                        {{ form_widget(form.description, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                        <div class=\"invalid-feedback\">Veuillez fournir une description.</div>
                        {{ form_errors(form.description) }}
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label\" for=\"{{ form.prix.vars.id }}\">Prix</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-text\">€</span>
                                {{ form_widget(form.prix, {'attr': {'class': 'form-control', 'required': 'required', 'step': '0.01', 'min': '0'}}) }}
                            </div>
                            <div class=\"invalid-feedback\">Veuillez fournir un prix valide.</div>
                            {{ form_errors(form.prix) }}
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label\" for=\"{{ form.capacite.vars.id }}\">Capacité</label>
                            {{ form_widget(form.capacite, {'attr': {'class': 'form-control', 'required': 'required', 'min': '1'}}) }}
                            <div class=\"invalid-feedback\">Veuillez fournir une capacité valide.</div>
                            {{ form_errors(form.capacite) }}
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label\" for=\"{{ form.duree.vars.id }}\">Durée (heures)</label>
                            {{ form_widget(form.duree, {'attr': {'class': 'form-control', 'required': 'required', 'min': '1'}}) }}
                            <div class=\"invalid-feedback\">Veuillez fournir une durée valide.</div>
                            {{ form_errors(form.duree) }}
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label\" for=\"{{ form.endDate.vars.id }}\">Date de fin</label>
                            {{ form_widget(form.endDate, {'attr': {'class': 'form-control flatpickr'}}) }}
                            <div class=\"invalid-feedback\">Veuillez fournir une date valide.</div>
                            {{ form_errors(form.endDate) }}
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-label-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
</div>

    <!-- Pack Inspiration Script -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const copyBtns = document.querySelectorAll('.copy-inspiration-btn');
        const packModalBtn = document.querySelector('[data-bs-target=\"#createPackModal\"]');
        const modal = document.getElementById('packModal');
        const titleInput = document.querySelector('input[name=\"pack[event]\"]');
        const descInput = document.querySelector('textarea[name=\"pack[description]\"]');
        const keywordsInput = document.querySelector('input[name=\"pack[keywords]\"]'); // If you have a keywords field
        const alertBox = document.getElementById('inspiration-copied-alert');

        copyBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                // Fill modal fields when modal is open
                if (modal) {
                    if (titleInput) titleInput.value = btn.getAttribute('data-title');
                    if (descInput) descInput.value = btn.getAttribute('data-description');
                    if (keywordsInput) keywordsInput.value = btn.getAttribute('data-keywords');
                    if (alertBox) {
                        alertBox.classList.remove('d-none');
                        setTimeout(() => alertBox.classList.add('d-none'), 1500);
                    }
                    // Open modal if not already open
                    const bsModal = bootstrap.Modal.getOrCreateInstance(modal);
                    bsModal.show();
                }
            });
        });
    });
    </script>
    <!-- /Pack Inspiration Script -->
    <!-- Core JS -->
    <script src=\"{{ asset('vendor/libs/jquery/jquery.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/popper/popper.js') }}\"></script>
    <script src=\"{{ asset('vendor/js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/node-waves/node-waves.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/hammer/hammer.js') }}\"></script>
    <script src=\"{{ asset('vendor/js/menu.js') }}\"></script>
    
    <!-- Custom Pack Creation Enhancement -->
    <script src=\"{{ asset('js/admin-pack-create.js') }}\"></script>

    <!-- Vendors JS -->
    <script src=\"{{ asset('vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/sweetalert2/sweetalert2.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/flatpickr/flatpickr.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/swiper/swiper.js') }}\"></script>

    <script>
        \$(document).ready(function() {
            // Initialize DataTable
            const packsTable = \$('#packsTable').DataTable({
                dom: \"<'row mb-2'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>\" +
                     \"<'row'<'col-sm-12'tr>>\" +
                     \"<'row mt-2'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>\",
                responsive: true,
                order: [[0, 'desc']],
                pageLength: 10,
                language: {
                    sLengthMenu: '_MENU_',
                    search: '',
                    searchPlaceholder: 'Rechercher un pack...'
                }
            });

            // Initialize Flatpickr
            flatpickr('.flatpickr', {
                dateFormat: 'Y-m-d',
                minDate: 'today'
            });

            // Initialize tooltips
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
            tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
            
            // View toggle functionality
            \$('.view-toggle-btn').click(function() {
                const view = \$(this).data('view');
                \$('.view-toggle-btn').removeClass('active');
                \$(this).addClass('active');
                if (view === 'gallery') {
                    \$('.gallery-view').addClass('active').show();
                    \$('.table-view').removeClass('active').hide();
                } else {
                    \$('.gallery-view').removeClass('active').hide();
                    \$('.table-view').addClass('active').show();
                    packsTable.columns.adjust().responsive.recalc();
                }
            });
            
            // Initialize tooltips for quick action buttons
            const quickActionTooltips = [].slice.call(document.querySelectorAll('.quick-actions [data-bs-toggle=\"tooltip\"]'));
            quickActionTooltips.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });

        // Submit form
        document.getElementById('packForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const form = e.target;
            const formData = new FormData(form);
            const data = {};

            // Convert FormData to object
            for (let [key, value] of formData.entries()) {
                // Remove the 'pack[' prefix from the key
                const fieldName = key.replace('pack[', '').replace(']', '');
                data[fieldName] = value;
            }

            // Get the pack ID from the hidden input
            const packId = document.getElementById('packId').value;
            
            // Show loading state
            form.classList.add('was-validated');
            const submitButton = form.querySelector('button[type=\"submit\"]');
            submitButton.disabled = true;
            submitButton.innerHTML = '<span class=\"spinner-border spinner-border-sm\" role=\"status\" aria-hidden=\"true\"></span> Saving...';

            // Send the request
            fetch(`{{ path('admin_pack_update', {'id': 'PACK_ID'}) }}`.replace('PACK_ID', packId), {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(response => {
                if (response.success) {
                    // Show success message
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: response.message,
                        showConfirmButton: false,
                        timer: 1500
                    });

                    // Close modal and refresh the page
                    const modal = bootstrap.Modal.getInstance(document.getElementById('packModal'));
                    modal.hide();
                    window.location.reload();
                } else {
                    // Show error message with detailed debug info
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        html: `
                            <div>\${response.message}</div>
                            \${response.debug ? `
                            <div class=\"mt-3\">
                                <h6>Debug Information:</h6>
                                <pre>\${JSON.stringify(response.debug, null, 2)}</pre>
                            </div>
                            ` : ''}
                        `,
                        confirmButtonText: 'OK'
                    });
                }
            })
            .catch(error => {
                console.error('Network error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Network Error!',
                    text: 'An error occurred while submitting the form. Please try again.',
                    confirmButtonText: 'OK'
                });
            })
            .finally(() => {
                // Reset form state
                form.classList.remove('was-validated');
                submitButton.disabled = false;
                submitButton.innerHTML = 'Save changes';
            });
        });

        // Edit pack
        function editPack(id) {
            fetch(`{{ path('admin_pack_edit', {'id': 'PACK_ID'}) }}`.replace('PACK_ID', id))
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const pack = data.pack;
                        document.getElementById('modalTitle').textContent = 'Modifier le pack';
                        document.getElementById('packId').value = pack.id;
                        
                        // Get form elements using their names
                        const eventSelect = document.querySelector('select[name=\"pack[event]\"]');
                        const descriptionInput = document.querySelector('textarea[name=\"pack[description]\"]');
                        const prixInput = document.querySelector('input[name=\"pack[prix]\"]');
                        const capaciteInput = document.querySelector('input[name=\"pack[capacite]\"]');
                        const dureeInput = document.querySelector('input[name=\"pack[duree]\"]');
                        const endDateInput = document.querySelector('input[name=\"pack[endDate]\"]');

                        // Set values
                        eventSelect.value = pack.event.id;
                        descriptionInput.value = pack.description;
                        prixInput.value = pack.prix;
                        capaciteInput.value = pack.capacite;
                        dureeInput.value = pack.duree;
                        endDateInput.value = pack.endDate;
                        
                        const modal = new bootstrap.Modal(document.getElementById('packModal'));
                        modal.show();
                    } else {
                        throw new Error(data.message);
                    }
                })
                .catch(error => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: error.message,
                        confirmButtonText: 'OK'
                    });
                });
        }

        // Supprimer un pack
function deletePack(id) {
    Swal.fire({
        title: 'Êtes-vous sûr ?',
        text: \"Cette action est irréversible !\",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Oui, supprimer !',
        cancelButtonText: 'Annuler',
        customClass: {
            confirmButton: 'btn btn-danger me-3',
            cancelButton: 'btn btn-label-secondary'
        },
        buttonsStyling: false
    }).then((result) => {
        if (result.isConfirmed) {
            fetch(`{{ path('admin_pack_delete', {'id': 'PACK_ID'}) }}`.replace('PACK_ID', id), {
                method: 'DELETE'
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Supprimé !',
                        text: data.message,
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        location.reload();
                    });
                } else {
                    throw new Error(data.message);
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
}
        
        // View pack details function
        function viewPackDetails(id) {
            // Implement pack details view logic
            window.location.href = `{{ path('admin_pack_show', {'id': 'PACK_ID'}) }}`.replace('PACK_ID', id);
        }

        // Fetch unread notifications count
        function fetchUnreadCount() {
            fetch('{{ path('admin_notifications_count') }}')
                .then(response => response.json())
                .then(data => {
                    const badge = document.getElementById('unreadCountBadge');
                    badge.textContent = data.count;
                    if (data.count === 0) {
                        badge.style.display = 'none';
                    } else {
                        badge.style.display = 'inline';
                    }
                })
                .catch(error => {
                    console.error('Error fetching unread count:', error);
                });
        }

        // Check for new notifications every 30 seconds
        setInterval(fetchUnreadCount, 30000);

        // Initial fetch
        fetchUnreadCount();
    </script>
</body>
</html>
", "admin/pack/index.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\admin\\pack\\index.html.twig");
    }
}
