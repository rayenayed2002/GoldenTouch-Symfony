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
class __TwigTemplate_947b00e5ea1750a1bf1dd6fe784b4f4c extends Template
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
        /* --- Enhanced Customize Pack Styles --- */
        .enhanced-ui input.form-control, .enhanced-ui textarea.form-control, .enhanced-ui select.form-select {
            border-radius: 12px;
            border: 1.5px solid #e0e6ed;
            background: rgba(255,255,255,0.97);
            box-shadow: 0 2px 8px rgba(115,103,240,0.04);
            transition: border-color 0.2s, box-shadow 0.2s;
            font-size: 1.08rem;
            padding: 0.7rem 1.1rem;
        }
        .enhanced-ui input.form-control:focus, .enhanced-ui textarea.form-control:focus, .enhanced-ui select.form-select:focus {
            border-color: #7367f0;
            box-shadow: 0 0 0 2px rgba(115,103,240,0.13);
            background: #fff;
        }
        .enhanced-ui .btn {
            border-radius: 10px;
            font-weight: 600;
            letter-spacing: 0.03em;
            box-shadow: 0 2px 12px rgba(115,103,240,0.07);
        }
        .enhanced-ui .btn-primary {
            background: linear-gradient(90deg,#7367f0 0%,#9e95f5 100%);
            border: none;
        }
        .enhanced-ui .btn-primary:hover, .enhanced-ui .btn-primary:focus {
            background: linear-gradient(90deg,#6c63e2 0%,#7c72e8 100%);
            box-shadow: 0 4px 16px rgba(115,103,240,0.12);
        }
        .enhanced-ui .btn-secondary {
            background: #f3f4f6;
            color: #7367f0;
            border: none;
        }
        .enhanced-ui .btn-secondary:hover, .enhanced-ui .btn-secondary:focus {
            background: #e7e9f9;
            color: #5346b8;
        }
        .enhanced-ui .form-label, .enhanced-ui label {
            font-weight: 500;
            color: #4f4f4f;
        }
        .enhanced-ui .input-group-text {
            background: #f6f6fa;
            border-radius: 8px 0 0 8px;
            border: 1.5px solid #e0e6ed;
            color: #7367f0;
        }
        .enhanced-ui .table {
            border-radius: 12px;
            overflow: hidden;
            background: rgba(255,255,255,0.98);
            box-shadow: 0 2px 12px rgba(115,103,240,0.04);
        }
        .enhanced-ui .table th, .enhanced-ui .table td {
            vertical-align: middle;
            font-size: 1.02rem;
            padding: 0.75rem 1.1rem;
        }
        .enhanced-ui .table-hover tbody tr:hover {
            background: #f7f5ff;
        }
        .enhanced-ui .card {
            border-radius: 20px;
        }
        .enhanced-ui .glass-panel {
            border-radius: 20px;
        }
        .enhanced-ui .card-header {
            border-bottom: none;
            background: transparent;
        }
        .enhanced-ui .card-title {
            font-weight: 700;
            color: #7367f0;
        }
        .enhanced-ui .form-floating > label {
            color: #7367f0;
            font-weight: 500;
        }
        .enhanced-ui .select2-container--default .select2-selection--single {
            border-radius: 12px;
            border: 1.5px solid #e0e6ed;
            height: 48px;
            padding: 8px 16px;
        }
        .enhanced-ui .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #4f4f4f;
            line-height: 30px;
        }
        .enhanced-ui .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 46px;
            right: 10px;
        }
        .enhanced-ui .form-control[readonly] {
            background-color: #f7f7fa;
            color: #b0b3c7;
        }
        .enhanced-ui h5, .enhanced-ui h6 {
            color: #5346b8;
        }
        .enhanced-ui .badge {
            font-size: 1rem;
            border-radius: 8px;
            padding: 0.5em 1em;
        }
        .enhanced-ui .table thead th {
            background: #f7f7fa;
            color: #7367f0;
            font-weight: 700;
            border-bottom: 2px solid #e0e6ed;
        }
        .enhanced-ui .table td .btn {
            margin: 0 2px;
        }
        .enhanced-ui .select2-container {
            width: 100% !important;
        }
        .enhanced-ui .input-group .form-control {
            border-radius: 12px 0 0 12px;
        }
        .enhanced-ui .input-group .btn {
            border-radius: 0 12px 12px 0;
        }
        @media (max-width: 767px) {
            .enhanced-ui .card, .enhanced-ui .glass-panel {
                border-radius: 12px;
            }
            .enhanced-ui .table th, .enhanced-ui .table td {
                padding: 0.55rem 0.7rem;
            }
        }
        /* --- End Enhanced Styles --- */

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
        // line 298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 299
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/template-customizer.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/config.js"), "html", null, true);
        yield "\"></script>
    
    <!-- SweetAlert2 -->
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('#customize-pack-form');
        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Récupération des données du formulaire
                const formData = new FormData(form);
                
                // Envoi des données via AJAX
                fetch(form.action, {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            title: 'Succès!',
                            text: 'Les modifications du pack ont été enregistrées avec succès.',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = '";
        // line 330
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_notifications");
        yield "';
                            }
                        });
                    } else {
                        Swal.fire({
                            title: 'Erreur!',
                            text: data.message || 'Une erreur est survenue lors de la sauvegarde des modifications.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    Swal.fire({
                        title: 'Erreur!',
                        text: 'Une erreur est survenue lors de la communication avec le serveur.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                });
            });
        }
    });
    </script>
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
    <a href=\"packs.html\" class=\"menu-link\">
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
        // line 420
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
                    <div id=\"admin-notification-search-dropdown\" style=\"display:none; position:absolute; top:100%; left:0; z-index:9999; min-width:400px; background:white; box-shadow:0 6px 24px rgba(0,0,0,0.13); border-radius:8px; padding:12px;\">
                      <form id=\"demande-pack-search-form\" method=\"get\" style=\"margin:0;\">
                        <div class=\"mb-3\">
                          <input type=\"text\" name=\"q\" id=\"admin-notification-search-input-navbar\" class=\"form-control\" value=\"";
        // line 578
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 578, $this->source); })()), "request", [], "any", false, false, false, 578), "get", ["q"], "method", false, false, false, 578), "html", null, true);
        yield "\" placeholder=\"Rechercher par nom du client ou événement...\" autocomplete=\"off\" autofocus>
                        </div>
                        <div class=\"mb-3\">
                          <select name=\"status\" class=\"form-select\" id=\"status-filter\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"pending\">En attente</option>
                            <option value=\"approved\">Approuvé</option>
                            <option value=\"rejected\">Rejeté</option>
                          </select>
                        </div>
                        <div class=\"row mb-3\">
                          <div class=\"col-6\">
                            <input type=\"text\" name=\"date_from\" class=\"form-control flatpickr-date\" placeholder=\"Date début\">
                          </div>
                          <div class=\"col-6\">
                            <input type=\"text\" name=\"date_to\" class=\"form-control flatpickr-date\" placeholder=\"Date fin\">
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <div class=\"col-6\">
                            <input type=\"number\" name=\"price_min\" class=\"form-control\" placeholder=\"Prix min\">
                          </div>
                          <div class=\"col-6\">
                            <input type=\"number\" name=\"price_max\" class=\"form-control\" placeholder=\"Prix max\">
                          </div>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary w-100\">Appliquer les filtres</button>
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
  const form = document.getElementById('demande-pack-search-form');
  let isOpen = false;
  let debounceTimer = null;

  // Initialize flatpickr for date inputs
  document.querySelectorAll('.flatpickr-date').forEach(elem => {
    flatpickr(elem, {
      dateFormat: \"Y-m-d\",
      allowInput: true
    });
  });

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
                          <a  class=\"stretched-link\">Liste Demande Pack</a>
                          <small class=\"text-muted mb-0\">Liste des demandes de packs</small>
                        </div>
                        <div class=\"dropdown-shortcuts-item col\">
                          <span class=\"dropdown-shortcuts-icon rounded-circle mb-2\">
                            <i class=\"ti ti-chart-bar fs-4\"></i>
                          </span>
                          <a href=\"";
        // line 792
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_advanced_statistiques_index");
        yield "\" class=\"stretched-link\">Advanced Statistiques</a>
                          <small class=\"text-muted mb-0\">advanced statistiques</small>
                        </div>
                      </div>
                      <div class=\"row row-bordered overflow-visible g-0\">
                        <div class=\"dropdown-shortcuts-item col\">
                          
                        <div class=\"dropdown-shortcuts-item col\">
                          <span class=\"dropdown-shortcuts-icon rounded-circle mb-2\">
                            <i class=\"ti ti-bell notification-bell-big\"></i>
                          </span>
                          <a href=\"";
        // line 803
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
        <i class=\"ti ti-bell notification-bell-big\"></i>
        <span id=\"unreadCountBadge\" class=\"badge bg-danger rounded-pill badge-notifications\">0</span>
    </a>
                  <ul class=\"dropdown-menu dropdown-menu-end py-0\">
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
        // line 843
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["latestNotifications"]) || array_key_exists("latestNotifications", $context) ? $context["latestNotifications"] : (function () { throw new RuntimeError('Variable "latestNotifications" does not exist.', 843, $this->source); })()), 0, 4));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 844
            yield "                            <li class=\"list-group-item list-group-item-action dropdown-notifications-item p-0\">
                                <a href=\"";
            // line 845
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customize_pack_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "demandePack", [], "any", false, false, false, 845), "id", [], "any", false, false, false, 845)]), "html", null, true);
            yield "\" class=\"d-flex align-items-stretch text-decoration-none text-dark w-100 p-3\" style=\"cursor:pointer;\">
                                    <div class=\"flex-shrink-0 me-3\">
                                        <div class=\"avatar\">
                                            <span class=\"avatar-initial rounded-circle bg-label-info\"><i class=\"ti ti-bell notification-bell-big\"></i></span>
                                        </div>
                                    </div>
                                    <div class=\"flex-grow-1\">
                                        <h6 class=\"mb-1\">";
            // line 852
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "titre", [], "any", true, true, false, 852)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "titre", [], "any", false, false, false, 852), "Notification")) : ("Notification")), "html", null, true);
            yield "</h6>
                                        <p class=\"mb-0\" title=\"";
            // line 853
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 853)), "html", null, true);
            yield "\">
    ";
            // line 854
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "summary", [], "any", true, true, false, 854) && CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "summary", [], "any", false, false, false, 854))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "summary", [], "any", false, false, false, 854), "html", null, true)) : ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 854))) > 80)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 854)), 0, 80) . "…"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 854)), "html", null, true)))));
            yield "
</p>
                                        <small class=\"text-muted\">";
            // line 856
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "dateCreation", [], "any", false, false, false, 856)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "dateCreation", [], "any", false, false, false, 856), "d/m/Y H:i"), "html", null, true)) : (""));
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
        // line 863
        if (!$context['_iterated']) {
            // line 864
            yield "                            <li class=\"list-group-item text-center text-muted\">No notifications</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['notification'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 866
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
        // line 885
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatars/1.png"), "html", null, true);
        yield "\" alt class=\"h-auto rounded-circle\">
                    </div>
                  </a>
                  <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li>
                      <a class=\"dropdown-item\" href=\"pages-account-settings-account.html\">
                        <div class=\"d-flex\">
                          <div class=\"flex-shrink-0 me-3\">
                            <div class=\"avatar avatar-online\">
    <img src=\"";
        // line 894
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
            <!-- / Navbar -->

          <span> </span>

          <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y enhanced-ui\">
                        <div class=\"scroll-progress\" id=\"scrollProgress\"></div>
                        
                        <!-- Notification Container -->
                        <div id=\"notification-container\"></div>

                        <!-- Carte d'information client -->
<div class=\"card mb-4 glassmorphism-ui glass-panel shadow-lg border-0\" data-aos=\"fade-up\">
    <div class=\"card-body\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h5 class=\"mb-3\">Informations client</h5>
                <p><strong>Nom :</strong> ";
        // line 997
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 997, $this->source); })()), "nom", [], "any", false, false, false, 997), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 997, $this->source); })()), "prenom", [], "any", false, false, false, 997), "html", null, true);
        yield "</p>
                <p><strong>Date de l'événement :</strong> ";
        // line 998
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["eventDate"]) || array_key_exists("eventDate", $context) ? $context["eventDate"] : (function () { throw new RuntimeError('Variable "eventDate" does not exist.', 998, $this->source); })()), "d/m/Y"), "html", null, true);
        yield "</p>
                <p><strong>Statut :</strong> <span class=\"badge bg-";
        // line 999
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["demandePack"]) || array_key_exists("demandePack", $context) ? $context["demandePack"] : (function () { throw new RuntimeError('Variable "demandePack" does not exist.', 999, $this->source); })()), "statut", [], "any", false, false, false, 999) == "NON_LU")) ? ("warning") : ("info"));
        yield "\">
                    ";
        // line 1000
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["demandePack"]) || array_key_exists("demandePack", $context) ? $context["demandePack"] : (function () { throw new RuntimeError('Variable "demandePack" does not exist.', 1000, $this->source); })()), "statut", [], "any", false, false, false, 1000) == "NON_LU")) ? ("Non lu") : ("Lu"));
        yield "
                </span></p>
            </div>
            <div class=\"col-md-6\">
                <h5 class=\"mb-3\">Détails du pack original</h5>
                <p><strong>Nom :</strong> ";
        // line 1005
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 1005, $this->source); })()), "nom", [], "any", false, false, false, 1005), "html", null, true);
        yield "</p>
                <p><strong>Prix de base :</strong> ";
        // line 1006
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 1006, $this->source); })()), "prix", [], "any", false, false, false, 1006), "html", null, true);
        yield "€</p>
                <p><strong>Catégorie :</strong> ";
        // line 1007
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 1007, $this->source); })()), "categorie", [], "any", false, false, false, 1007), "html", null, true);
        yield "</p>
            </div>
        </div>
    </div>
</div>
<!-- Notification Message Section -->
";
        // line 1013
        if ((array_key_exists("notification", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "message", [], "any", true, true, false, 1013))) {
            // line 1014
            yield "<div class=\"card mb-4 border-info glass-panel enhanced-ui shadow-sm\" data-aos=\"fade-up\" data-aos-delay=\"100\">
    <div class=\"card-body py-3\">
        <div class=\"d-flex align-items-center\">
            <i class=\"ti ti-info-circle text-info me-2 fs-4\"></i>
            <div>
                <h6 class=\"mb-1 text-info fw-bold\">Message de la notification</h6>
                <p class=\"mb-0 text-dark\">";
            // line 1020
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 1020, $this->source); })()), "message", [], "any", false, false, false, 1020);
            yield "</p>
            </div>
        </div>
    </div>
</div>
";
        }
        // line 1026
        yield "                        <!-- Pack Details Section -->
                        <div class=\"card mb-4 glass-panel shadow border-0\" data-aos=\"fade-up\" data-aos-delay=\"200\">
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
        // line 1040
        yield (((isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 1040, $this->source); })())) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 1040, $this->source); })()), "nom", [], "any", false, false, false, 1040), "html", null, true)) : (""));
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
        // line 1051
        yield (((isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 1051, $this->source); })())) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 1051, $this->source); })()), "prix", [], "any", false, false, false, 1051), "html", null, true)) : (""));
        yield "\" required>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class=\"col-12\">
                                        <div class=\"form-floating mb-3\">
                                            <textarea class=\"form-control\" id=\"packDescription\" name=\"packDescription\" 
                                                style=\"height: 100px\" required>";
        // line 1059
        yield (((isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 1059, $this->source); })())) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 1059, $this->source); })()), "description", [], "any", false, false, false, 1059), "html", null, true)) : (""));
        yield "</textarea>
                                            <label for=\"packDescription\">Description du Pack</label>
                                        </div>
                                    </div>

                                    <!-- Capacity & Category -->
                                    <div class=\"col-md-6\">
                                        <label class=\"form-label\">Capacité</label>
                                        <input type=\"number\" class=\"form-control\" id=\"packCapacity\" name=\"packCapacity\"
                                            value=\"";
        // line 1068
        yield (((isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 1068, $this->source); })())) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 1068, $this->source); })()), "capacite", [], "any", false, false, false, 1068), "html", null, true)) : (""));
        yield "\" required>
                                    </div>

                                    <div class=\"col-md-6\">
                                        <label class=\"form-label\">Catégorie</label>
                                        <select class=\"form-select select2\" id=\"packCategory\" name=\"packCategory\" required>
                                            <option value=\"\">Sélectionnez une catégorie</option>
                                            <option value=\"Mariage\" ";
        // line 1075
        yield ((((isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 1075, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 1075, $this->source); })()), "categorie", [], "any", false, false, false, 1075) == "Mariage"))) ? ("selected") : (""));
        yield ">Mariage</option>
                                            <option value=\"Anniversaire\" ";
        // line 1076
        yield ((((isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 1076, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 1076, $this->source); })()), "categorie", [], "any", false, false, false, 1076) == "Anniversaire"))) ? ("selected") : (""));
        yield ">Anniversaire</option>
                                            <option value=\"Conférence\" ";
        // line 1077
        yield ((((isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 1077, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 1077, $this->source); })()), "categorie", [], "any", false, false, false, 1077) == "Conférence"))) ? ("selected") : (""));
        yield ">Conférence</option>
                                            <option value=\"Séminaire\" ";
        // line 1078
        yield ((((isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 1078, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 1078, $this->source); })()), "categorie", [], "any", false, false, false, 1078) == "Séminaire"))) ? ("selected") : (""));
        yield ">Séminaire</option>
                                            <option value=\"Autre\" ";
        // line 1079
        yield ((((isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 1079, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 1079, $this->source); })()), "categorie", [], "any", false, false, false, 1079) == "Autre"))) ? ("selected") : (""));
        yield ">Autre</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <!-- Save Button -->
                                <div class=\"mt-4\">
                                    <button type=\"submit\" class=\"btn btn-primary\" id=\"savePack\">
                                        <i class=\"ti ti-device-floppy me-1\"></i> Enregistrer les modifications
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Selected Items Section -->
                        <div class=\"card mb-4 glass-panel shadow border-0\" data-aos=\"fade-up\" data-aos-delay=\"300\">
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
<div class=\"card mb-4 glass-panel shadow border-0\" data-aos=\"fade-up\" data-aos-delay=\"400\">
    <div class=\"card-header d-flex justify-content-between align-items-center\">
        <h5 class=\"card-title mb-0\"><i class=\"ti ti-box\"></i> Matériels</h5>
        <button type=\"button\" class=\"btn btn-sm btn-primary\" data-bs-toggle=\"collapse\" data-bs-target=\"#materielsCollapse\" aria-expanded=\"true\">
            <i class=\"ti ti-chevron-down\"></i>
        </button>
    </div>
    <div class=\"card-body collapse show\" id=\"materielsCollapse\">
        <div class=\"row\">
            ";
        // line 1130
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["materielles"]) || array_key_exists("materielles", $context) ? $context["materielles"] : (function () { throw new RuntimeError('Variable "materielles" does not exist.', 1130, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
            // line 1131
            yield "                <div class=\"col-md-4 mb-3\">
                    <div class=\"card h-100\">
                        <img src=\"";
            // line 1133
            if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "photo_mat", [], "any", false, false, false, 1133)) && is_string($_v1 = "/uploads/") && str_starts_with($_v0, $_v1))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "photo_mat", [], "any", false, false, false, 1133), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "photo_mat", [], "any", false, false, false, 1133), ["/Images/" => ""]))), "html", null, true);
            }
            yield "\" class=\"card-img-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom_mat", [], "any", false, false, false, 1133), "html", null, true);
            yield "\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 1135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom_mat", [], "any", false, false, false, 1135), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\">
                                <strong>Description:</strong> ";
            // line 1137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "description_mat", [], "any", false, false, false, 1137), "html", null, true);
            yield "<br>
                                <strong>Quantité disponible:</strong> ";
            // line 1138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite_mat", [], "any", false, false, false, 1138), "html", null, true);
            yield "<br>
                                <strong>Prix:</strong> ";
            // line 1139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "prix_mat", [], "any", false, false, false, 1139), "html", null, true);
            yield "€<br>
                                <strong>Catégorie:</strong> ";
            // line 1140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "categorie_mat", [], "any", false, false, false, 1140), "html", null, true);
            yield "
                            </p>
                            <div class=\"input-group mb-3\">
                                <input type=\"number\" class=\"form-control quantity-input\" 
                                       min=\"1\" max=\"";
            // line 1144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite_mat", [], "any", false, false, false, 1144), "html", null, true);
            yield "\" 
                                       value=\"1\" data-id=\"";
            // line 1145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id_mat", [], "any", false, false, false, 1145), "html", null, true);
            yield "\">
                                <button class=\"btn btn-primary select-materiel\" 
                                        data-id=\"";
            // line 1147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id_mat", [], "any", false, false, false, 1147), "html", null, true);
            yield "\"
                                        data-name=\"";
            // line 1148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom_mat", [], "any", false, false, false, 1148), "html", null, true);
            yield "\"
                                        data-price=\"";
            // line 1149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "prix_mat", [], "any", false, false, false, 1149), "html", null, true);
            yield "\"
                                        data-available=\"";
            // line 1150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite_mat", [], "any", false, false, false, 1150), "html", null, true);
            yield "\">
                                    <i class=\"ti ti-plus\"></i> Ajouter
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['materiel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1158
        yield "        </div>
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
<div class=\"card mb-4 glass-panel shadow border-0\" data-aos=\"fade-up\" data-aos-delay=\"500\">
    <div class=\"card-header d-flex justify-content-between align-items-center\">
        <h5 class=\"card-title mb-0\"><i class=\"ti ti-map-pin\"></i> Emplacements</h5>
        <button type=\"button\" class=\"btn btn-sm btn-primary\" data-bs-toggle=\"collapse\" data-bs-target=\"#locationsCollapse\" aria-expanded=\"true\">
            <i class=\"ti ti-chevron-down\"></i>
        </button>
    </div>
    <div class=\"card-body collapse show\" id=\"locationsCollapse\">
        <div class=\"row\">
            ";
        // line 1188
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 1188, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 1189
            yield "                <div class=\"col-md-4 mb-3\">
                    <div class=\"card h-100\">
                        <img src=\"";
            // line 1191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . CoreExtension::getAttribute($this->env, $this->source, $context["location"], "imageUrl", [], "any", false, false, false, 1191))), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 1191), "html", null, true);
            yield "\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 1193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 1193), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\">
                                <strong>Capacité:</strong> ";
            // line 1195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "capacity", [], "any", false, false, false, 1195), "html", null, true);
            yield "<br>
                                <strong>Prix:</strong> ";
            // line 1196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "price", [], "any", false, false, false, 1196), "html", null, true);
            yield "€<br>
                                <strong>Ville:</strong> ";
            // line 1197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "ville", [], "any", false, false, false, 1197), "html", null, true);
            yield "<br>
                                <strong>Catégorie:</strong> ";
            // line 1198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "category", [], "any", false, false, false, 1198), "html", null, true);
            yield "
                            </p>
                            <button type=\"button\" 
                                    class=\"btn btn-primary select-location\" 
                                    data-id=\"";
            // line 1202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 1202), "html", null, true);
            yield "\"
                                    data-name=\"";
            // line 1203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 1203), "html", null, true);
            yield "\"
                                    data-price=\"";
            // line 1204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "price", [], "any", false, false, false, 1204), "html", null, true);
            yield "\">
                                <i class=\"ti ti-plus\"></i> Sélectionner
                            </button>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1211
        yield "        </div>
        <div class=\"selected-location mt-4\">
    <h6>Emplacement Sélectionné</h6>
    <div class=\"table-responsive\">
        <table class=\"table table-hover\" id=\"selectedLocationTable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>
    </div>
</div>

                        <!-- Personnel Section -->
                        <div class=\"card mb-4 glass-panel shadow border-0\" data-aos=\"fade-up\" data-aos-delay=\"600\">
                            <div class=\"card-header d-flex justify-content-between align-items-center\">
                                <h5 class=\"card-title mb-0\"><i class=\"ti ti-users\"></i> Personnel</h5>
                                <button type=\"button\" class=\"btn btn-sm btn-primary\" data-bs-toggle=\"collapse\" data-bs-target=\"#personnelCollapse\" aria-expanded=\"true\">
                                    <i class=\"ti ti-chevron-down\"></i>
                                </button>
                            </div>
                            <div class=\"card-body collapse show\" id=\"personnelCollapse\">
                                <div class=\"row\">
                                    ";
        // line 1240
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 1240, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 1241
            yield "                                        <div class=\"col-md-4 mb-3\">
                                            <div class=\"card h-100\">
                                                <img src=\"";
            // line 1243
            if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, $context["person"], "imageUrl", [], "any", false, false, false, 1243)) && is_string($_v3 = "/uploads/") && str_starts_with($_v2, $_v3))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "imageUrl", [], "any", false, false, false, 1243), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "imageUrl", [], "any", false, false, false, 1243), ["/Images/" => ""]))), "html", null, true);
            }
            yield "\" class=\"card-img-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "nomP", [], "any", false, false, false, 1243), "html", null, true);
            yield "\">
                                                <div class=\"card-body\">
                                                    <h5 class=\"card-title\">";
            // line 1245
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "nomP", [], "any", false, false, false, 1245), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "prenomP", [], "any", false, false, false, 1245), "html", null, true);
            yield "</h5>
                                                    <p class=\"card-text\">
                                                        <strong>Service:</strong> ";
            // line 1247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "serviceP", [], "any", false, false, false, 1247), "html", null, true);
            yield "<br>
                                                        <strong>Statut:</strong> ";
            // line 1248
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "statutP", [], "any", false, false, false, 1248), "html", null, true);
            yield "<br>
                                                        <strong>Description:</strong> ";
            // line 1249
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "descriptionP", [], "any", false, false, false, 1249), "html", null, true);
            yield "<br>
                                                        <strong>Tarif:</strong> ";
            // line 1250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "tarifP", [], "any", false, false, false, 1250), "html", null, true);
            yield "€
                                                    </p>
                                                    <button type=\"button\" 
                                                            class=\"btn btn-primary select-personnel\" 
                                                            data-id=\"";
            // line 1254
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "idP", [], "any", false, false, false, 1254), "html", null, true);
            yield "\"
                                                            data-name=\"";
            // line 1255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "nomP", [], "any", false, false, false, 1255), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "prenomP", [], "any", false, false, false, 1255), "html", null, true);
            yield "\"
                                                            data-service=\"";
            // line 1256
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "serviceP", [], "any", false, false, false, 1256), "html", null, true);
            yield "\"
                                                            data-price=\"";
            // line 1257
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "tarifP", [], "any", false, false, false, 1257), "html", null, true);
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
        // line 1264
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
        // line 1288
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_notifications");
        yield "'\">
                                    <i class=\"ti ti-x\"></i> Annuler
                                </button>
                                <form id=\"customizeForm\" action=\"";
        // line 1291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customize_pack_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["demandePack"]) || array_key_exists("demandePack", $context) ? $context["demandePack"] : (function () { throw new RuntimeError('Variable "demandePack" does not exist.', 1291, $this->source); })()), "id", [], "any", false, false, false, 1291)]), "html", null, true);
        yield "\" method=\"POST\" onsubmit=\"return false;\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"ti ti-device-floppy\"></i> Enregistrer les modifications
                                    </button>
                                </form>
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
        // line 1324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/node-waves/node-waves.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/hammer/hammer.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/i18n/i18n.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/typeahead-js/typeahead.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>

    <!-- Vendors JS -->
    <script src=\"";
        // line 1335
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/apex-charts/apexcharts.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1336
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/swiper/swiper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/datatables-bs5/datatables-bootstrap5.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1338
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/select2/select2.full.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1339
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/flatpickr/flatpickr.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js\"></script>

  <script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize variables
    let selectedMaterielles = new Map();
    let selectedPersonnel = new Map();
    let selectedLocation = null;
    const materielleAvailability = new Map();

    // Initialize availability map from cards
    document.querySelectorAll('.select-materiel').forEach(button => {
        const available = parseInt(button.dataset.available);
        const id = button.dataset.id;
        materielleAvailability.set(id, available);
    });

    // Helper function to show toast messages
    function showToast(icon, title, text) {
        Swal.fire({
            icon: icon,
            title: title,
            text: text,
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            customClass: {
                popup: 'colored-toast'
            }
        });
    }

    // Handle materielle selection from cards
    document.querySelectorAll('.select-materiel').forEach(button => {
        button.addEventListener('click', function() {
            const card = this.closest('.card');
            const id = this.dataset.id;
            const name = this.dataset.name;
            const price = parseFloat(this.dataset.price);
            const available = parseInt(this.dataset.available);
            const quantityInput = card.querySelector('.quantity-input');
            let quantity = parseInt(quantityInput.value) || 1;

            // Validate quantity
            if (quantity < 1) {
                showToast('warning', 'Attention', 'Quantité invalide');
                return;
            }

            // Check existing quantity
            const existing = selectedMaterielles.get(id);
            const totalRequested = (existing?.quantity || 0) + quantity;
            
            if (totalRequested > available) {
                showToast('warning', 'Attention', `Quantité non disponible. Il reste \${available} unités`);
                return;
            }

            // Update or add material
            if (existing) {
                existing.quantity += quantity;
            } else {
                selectedMaterielles.set(id, {
                    id: id,
                    name: name,
                    price: price,
                    quantity: quantity,
                    maxAvailable: available
                });
            }

            // Reset input and update UI
            quantityInput.value = 1;
            updateMaterielleTable();
            calculateTotal();
            showToast('success', 'Succès', `\${quantity} \${name} ajouté(s)`);
        });
    });

    // Handle personnel selection
    document.querySelectorAll('.select-personnel').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.dataset.id;
            const name = this.dataset.name;
            const service = this.dataset.service;
            const price = parseFloat(this.dataset.price);

            if (selectedPersonnel.has(id)) {
                showToast('warning', 'Attention', 'Ce personnel est déjà sélectionné');
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
            showToast('success', 'Succès', `\${name} sélectionné`);
        });
    });

    // Handle location selection
 // Handle location selection
document.querySelectorAll('.select-location').forEach(button => {
    button.addEventListener('click', function () {
        const id = this.dataset.id;
        const name = this.dataset.name;
        const price = parseFloat(this.dataset.price);

        // Check if the same location is already selected
        if (selectedLocation?.id === id) {
            showToast('warning', 'Attention', 'Cet emplacement est déjà sélectionné');
            return;
        }

        // Clear previous selection
        selectedLocation = null;

        // Create new location object
        selectedLocation = {
            id: id,
            name: name,
            price: price,
        };

        updateLocationTable();
        calculateTotal();
        showToast('success', 'Succès', `Emplacement \${name} sélectionné`);
    });
});

// Update location table
function updateLocationTable() {
    const tbody = document.querySelector('#selectedLocationTable tbody');
    tbody.innerHTML = '';

    if (!selectedLocation) {
        tbody.innerHTML = `
            <tr>
                <td colspan=\"3\" class=\"text-center\">Aucun emplacement sélectionné</td>
            </tr>
        `;
        return;
    }

    const tr = document.createElement('tr');
    tr.innerHTML = `
        <td>\${selectedLocation.name}</td>
        <td>\${selectedLocation.price.toFixed(2)}€</td>
        <td>
            <button class=\"btn btn-sm btn-danger delete-location\" data-id=\"\${selectedLocation.id}\">
                <i class=\"ti ti-trash\"></i>
            </button>
        </td>
    `;

    // Add event listener for deletion
    tr.querySelector('.delete-location').addEventListener('click', function () {
        removeLocation(selectedLocation.id);
    });

    tbody.appendChild(tr);
}

// Remove location
window.removeLocation = function (id) {
    if (selectedLocation?.id === id) {
        selectedLocation = null;
        updateLocationTable();
        calculateTotal();
        showToast('success', 'Supprimé', 'Emplacement retiré');
    }
};

// Calculate total price
function calculateTotal() {
    let total = 0;

    // Add materials total
    selectedMaterielles.forEach((m) => {
        total += m.price * m.quantity;
    });

    // Add location price
    if (selectedLocation) {
        total += selectedLocation.price;
    }

    // Add personnel total
    selectedPersonnel.forEach((p) => {
        total += p.price;
    });

    document.getElementById('totalPrice').textContent = total.toFixed(2) + '€';
}

// Remove location function
window.removeLocation = function() {
    selectedLocation = null;
    updateLocationDisplay();
    calculateTotal();
};

    // Form submission
    document.getElementById('customizeForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = {
            id: '";
        // line 1555
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["originalPack"]) || array_key_exists("originalPack", $context) ? $context["originalPack"] : (function () { throw new RuntimeError('Variable "originalPack" does not exist.', 1555, $this->source); })()), "id", [], "any", false, false, false, 1555), "html", null, true);
        yield "',
            materielles: Array.from(selectedMaterielles.values()).map(m => ({
                id: m.id,
                quantity: m.quantity,
                price: m.price
            })),
            location: selectedLocation,
            personnel: Array.from(selectedPersonnel.values()).map(p => ({
                id: p.id,
                name: p.name,
                service: p.service,
                price: p.price
            }))
        };

        // Show loading state
        const submitButton = this.querySelector('button[type=\"submit\"]');
        const originalText = submitButton.innerHTML;
        submitButton.innerHTML = '<i class=\"ti ti-loader-2 ti-spin\"></i> Enregistrement...';
        submitButton.disabled = true;

        fetch(this.action, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '";
        // line 1580
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("customize_pack"), "html", null, true);
        yield "'
            },
            body: JSON.stringify(formData)
        })
        .then(response => {
            if (!response.ok) throw new Error('Erreur serveur');
            return response.json();
        })
        .then(data => {
            if (data.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Succès !',
                    text: 'Pack customisé avec succès !',
                    showConfirmButton: false,
                    timer: 2000
                }).then(() => {
                    window.location.href = '";
        // line 1597
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_notifications");
        yield "';
                });
            } else {
                throw new Error(data.message || 'Erreur lors de la customisation');
            }
        })
        .catch(error => {
            Swal.fire({
                icon: 'error',
                title: 'Erreur !',
                text: error.message || 'Une erreur est survenue',
                confirmButtonText: 'OK'
            });
            console.error('Error:', error);
        })
        .finally(() => {
            submitButton.innerHTML = originalText;
            submitButton.disabled = false;
        });
    });

    // Update materials table
    function updateMaterielleTable() {
        const tbody = document.querySelector('#selectedMaterielsTable tbody');
        tbody.innerHTML = '';
        
        if (selectedMaterielles.size === 0) {
            tbody.innerHTML = '<tr><td colspan=\"5\" class=\"text-center\">Aucun matériel sélectionné</td></tr>';
            return;
        }
        
        selectedMaterielles.forEach((materielle, id) => {
            const total = materielle.price * materielle.quantity;
            const tr = document.createElement('tr');
            
            tr.innerHTML = `
                <td>\${materielle.name}</td>
                <td>
                    <input type=\"number\" 
                           class=\"form-control quantity-update\" 
                           min=\"1\" 
                           max=\"\${materielle.maxAvailable}\"
                           value=\"\${materielle.quantity}\"
                           data-id=\"\${id}\">
                </td>
                <td>\${materielle.price.toFixed(2)}€</td>
                <td>\${total.toFixed(2)}€</td>
                <td>
                    <button class=\"btn btn-sm btn-danger delete-material\" data-id=\"\${id}\">
                        <i class=\"ti ti-trash\"></i>
                    </button>
                </td>
            `;

            // Add event listeners
            tr.querySelector('.quantity-update').addEventListener('change', function() {
                const newQuantity = parseInt(this.value) || 1;
                updateMaterielleQuantity(id, newQuantity);
            });

            tr.querySelector('.delete-material').addEventListener('click', function() {
                removeMaterielle(id);
            });

            tbody.appendChild(tr);
        });
    }

    // Update personnel table
    function updatePersonnelTable() {
        const tbody = document.querySelector('#selectedPersonnelTable tbody');
        tbody.innerHTML = '';
        
        selectedPersonnel.forEach((person, id) => {
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td>\${person.name}</td>
                <td>\${person.service}</td>
                <td>\${person.price.toFixed(2)}€</td>
                <td>
                    <button class=\"btn btn-sm btn-danger delete-personnel\" data-id=\"\${id}\">
                        <i class=\"ti ti-trash\"></i>
                    </button>
                </td>
            `;

            tr.querySelector('.delete-personnel').addEventListener('click', function() {
                removePersonnel(id);
            });

            tbody.appendChild(tr);
        });
    }

    // Update location display
    function updateLocationDisplay() {
        const container = document.getElementById('selectedLocation');
        container.innerHTML = selectedLocation 
            ? `<div class=\"d-flex align-items-center justify-content-between\">
                    <div>
                        <strong>\${selectedLocation.name}</strong>
                        <div class=\"text-muted\">\${selectedLocation.price.toFixed(2)}€</div>
                    </div>
                    <button class=\"btn btn-sm btn-danger delete-location\">
                        <i class=\"ti ti-trash\"></i>
                    </button>
                </div>`
            : 'Aucun emplacement sélectionné';

        if (selectedLocation) {
            container.querySelector('.delete-location').addEventListener('click', removeLocation);
        }
    }

    // Calculate total price
    function calculateTotal() {
        let total = 0;
        
        selectedMaterielles.forEach(m => total += m.price * m.quantity);
        if (selectedLocation) total += selectedLocation.price;
        selectedPersonnel.forEach(p => total += p.price);
        
        document.getElementById('totalPrice').textContent = total.toFixed(2) + '€';
    }

    // Global functions
    window.updateMaterielleQuantity = function(id, quantity) {
        const materielle = selectedMaterielles.get(id);
        if (!materielle) return;

        quantity = Math.max(1, Math.min(quantity, materielle.maxAvailable));
        
        if (quantity !== materielle.quantity) {
            materielle.quantity = quantity;
            updateMaterielleTable();
            calculateTotal();
        }
    };

    window.removeMaterielle = function(id) {
        if (selectedMaterielles.delete(id)) {
            updateMaterielleTable();
            calculateTotal();
            showToast('success', 'Supprimé', 'Matériel retiré');
        }
    };

    window.removePersonnel = function(id) {
        if (selectedPersonnel.delete(id)) {
            updatePersonnelTable();
            calculateTotal();
            showToast('success', 'Supprimé', 'Personnel retiré');
        }
    };

    window.removeLocation = function() {
        selectedLocation = null;
        updateLocationDisplay();
        calculateTotal();
        showToast('success', 'Supprimé', 'Emplacement retiré');
    };

    // Initial setup
    calculateTotal();
    \$('.select2').select2();
});
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
        return array (  2017 => 1597,  1997 => 1580,  1969 => 1555,  1750 => 1339,  1746 => 1338,  1742 => 1337,  1738 => 1336,  1734 => 1335,  1728 => 1332,  1724 => 1331,  1720 => 1330,  1716 => 1329,  1712 => 1328,  1708 => 1327,  1704 => 1326,  1700 => 1325,  1696 => 1324,  1660 => 1291,  1654 => 1288,  1628 => 1264,  1615 => 1257,  1611 => 1256,  1605 => 1255,  1601 => 1254,  1594 => 1250,  1590 => 1249,  1586 => 1248,  1582 => 1247,  1575 => 1245,  1564 => 1243,  1560 => 1241,  1556 => 1240,  1525 => 1211,  1512 => 1204,  1508 => 1203,  1504 => 1202,  1497 => 1198,  1493 => 1197,  1489 => 1196,  1485 => 1195,  1480 => 1193,  1473 => 1191,  1469 => 1189,  1465 => 1188,  1433 => 1158,  1419 => 1150,  1415 => 1149,  1411 => 1148,  1407 => 1147,  1402 => 1145,  1398 => 1144,  1391 => 1140,  1387 => 1139,  1383 => 1138,  1379 => 1137,  1374 => 1135,  1363 => 1133,  1359 => 1131,  1355 => 1130,  1301 => 1079,  1297 => 1078,  1293 => 1077,  1289 => 1076,  1285 => 1075,  1275 => 1068,  1263 => 1059,  1252 => 1051,  1238 => 1040,  1222 => 1026,  1213 => 1020,  1205 => 1014,  1203 => 1013,  1194 => 1007,  1190 => 1006,  1186 => 1005,  1178 => 1000,  1174 => 999,  1170 => 998,  1164 => 997,  1058 => 894,  1046 => 885,  1025 => 866,  1018 => 864,  1016 => 863,  1004 => 856,  999 => 854,  995 => 853,  991 => 852,  981 => 845,  978 => 844,  973 => 843,  930 => 803,  916 => 792,  699 => 578,  538 => 420,  445 => 330,  412 => 300,  408 => 299,  404 => 298,  149 => 46,  145 => 45,  139 => 42,  135 => 41,  131 => 40,  127 => 39,  123 => 38,  119 => 37,  115 => 36,  111 => 35,  107 => 34,  101 => 31,  97 => 30,  93 => 29,  87 => 26,  83 => 25,  79 => 24,  68 => 16,  56 => 7,  48 => 1,);
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
        /* --- Enhanced Customize Pack Styles --- */
        .enhanced-ui input.form-control, .enhanced-ui textarea.form-control, .enhanced-ui select.form-select {
            border-radius: 12px;
            border: 1.5px solid #e0e6ed;
            background: rgba(255,255,255,0.97);
            box-shadow: 0 2px 8px rgba(115,103,240,0.04);
            transition: border-color 0.2s, box-shadow 0.2s;
            font-size: 1.08rem;
            padding: 0.7rem 1.1rem;
        }
        .enhanced-ui input.form-control:focus, .enhanced-ui textarea.form-control:focus, .enhanced-ui select.form-select:focus {
            border-color: #7367f0;
            box-shadow: 0 0 0 2px rgba(115,103,240,0.13);
            background: #fff;
        }
        .enhanced-ui .btn {
            border-radius: 10px;
            font-weight: 600;
            letter-spacing: 0.03em;
            box-shadow: 0 2px 12px rgba(115,103,240,0.07);
        }
        .enhanced-ui .btn-primary {
            background: linear-gradient(90deg,#7367f0 0%,#9e95f5 100%);
            border: none;
        }
        .enhanced-ui .btn-primary:hover, .enhanced-ui .btn-primary:focus {
            background: linear-gradient(90deg,#6c63e2 0%,#7c72e8 100%);
            box-shadow: 0 4px 16px rgba(115,103,240,0.12);
        }
        .enhanced-ui .btn-secondary {
            background: #f3f4f6;
            color: #7367f0;
            border: none;
        }
        .enhanced-ui .btn-secondary:hover, .enhanced-ui .btn-secondary:focus {
            background: #e7e9f9;
            color: #5346b8;
        }
        .enhanced-ui .form-label, .enhanced-ui label {
            font-weight: 500;
            color: #4f4f4f;
        }
        .enhanced-ui .input-group-text {
            background: #f6f6fa;
            border-radius: 8px 0 0 8px;
            border: 1.5px solid #e0e6ed;
            color: #7367f0;
        }
        .enhanced-ui .table {
            border-radius: 12px;
            overflow: hidden;
            background: rgba(255,255,255,0.98);
            box-shadow: 0 2px 12px rgba(115,103,240,0.04);
        }
        .enhanced-ui .table th, .enhanced-ui .table td {
            vertical-align: middle;
            font-size: 1.02rem;
            padding: 0.75rem 1.1rem;
        }
        .enhanced-ui .table-hover tbody tr:hover {
            background: #f7f5ff;
        }
        .enhanced-ui .card {
            border-radius: 20px;
        }
        .enhanced-ui .glass-panel {
            border-radius: 20px;
        }
        .enhanced-ui .card-header {
            border-bottom: none;
            background: transparent;
        }
        .enhanced-ui .card-title {
            font-weight: 700;
            color: #7367f0;
        }
        .enhanced-ui .form-floating > label {
            color: #7367f0;
            font-weight: 500;
        }
        .enhanced-ui .select2-container--default .select2-selection--single {
            border-radius: 12px;
            border: 1.5px solid #e0e6ed;
            height: 48px;
            padding: 8px 16px;
        }
        .enhanced-ui .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #4f4f4f;
            line-height: 30px;
        }
        .enhanced-ui .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 46px;
            right: 10px;
        }
        .enhanced-ui .form-control[readonly] {
            background-color: #f7f7fa;
            color: #b0b3c7;
        }
        .enhanced-ui h5, .enhanced-ui h6 {
            color: #5346b8;
        }
        .enhanced-ui .badge {
            font-size: 1rem;
            border-radius: 8px;
            padding: 0.5em 1em;
        }
        .enhanced-ui .table thead th {
            background: #f7f7fa;
            color: #7367f0;
            font-weight: 700;
            border-bottom: 2px solid #e0e6ed;
        }
        .enhanced-ui .table td .btn {
            margin: 0 2px;
        }
        .enhanced-ui .select2-container {
            width: 100% !important;
        }
        .enhanced-ui .input-group .form-control {
            border-radius: 12px 0 0 12px;
        }
        .enhanced-ui .input-group .btn {
            border-radius: 0 12px 12px 0;
        }
        @media (max-width: 767px) {
            .enhanced-ui .card, .enhanced-ui .glass-panel {
                border-radius: 12px;
            }
            .enhanced-ui .table th, .enhanced-ui .table td {
                padding: 0.55rem 0.7rem;
            }
        }
        /* --- End Enhanced Styles --- */

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
    
    <!-- SweetAlert2 -->
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('#customize-pack-form');
        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Récupération des données du formulaire
                const formData = new FormData(form);
                
                // Envoi des données via AJAX
                fetch(form.action, {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            title: 'Succès!',
                            text: 'Les modifications du pack ont été enregistrées avec succès.',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = '{{ path(\"admin_notifications\") }}';
                            }
                        });
                    } else {
                        Swal.fire({
                            title: 'Erreur!',
                            text: data.message || 'Une erreur est survenue lors de la sauvegarde des modifications.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    Swal.fire({
                        title: 'Erreur!',
                        text: 'Une erreur est survenue lors de la communication avec le serveur.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                });
            });
        }
    });
    </script>
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
    <a href=\"packs.html\" class=\"menu-link\">
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
                    <div id=\"admin-notification-search-dropdown\" style=\"display:none; position:absolute; top:100%; left:0; z-index:9999; min-width:400px; background:white; box-shadow:0 6px 24px rgba(0,0,0,0.13); border-radius:8px; padding:12px;\">
                      <form id=\"demande-pack-search-form\" method=\"get\" style=\"margin:0;\">
                        <div class=\"mb-3\">
                          <input type=\"text\" name=\"q\" id=\"admin-notification-search-input-navbar\" class=\"form-control\" value=\"{{ app.request.get('q') }}\" placeholder=\"Rechercher par nom du client ou événement...\" autocomplete=\"off\" autofocus>
                        </div>
                        <div class=\"mb-3\">
                          <select name=\"status\" class=\"form-select\" id=\"status-filter\">
                            <option value=\"\">Tous les statuts</option>
                            <option value=\"pending\">En attente</option>
                            <option value=\"approved\">Approuvé</option>
                            <option value=\"rejected\">Rejeté</option>
                          </select>
                        </div>
                        <div class=\"row mb-3\">
                          <div class=\"col-6\">
                            <input type=\"text\" name=\"date_from\" class=\"form-control flatpickr-date\" placeholder=\"Date début\">
                          </div>
                          <div class=\"col-6\">
                            <input type=\"text\" name=\"date_to\" class=\"form-control flatpickr-date\" placeholder=\"Date fin\">
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <div class=\"col-6\">
                            <input type=\"number\" name=\"price_min\" class=\"form-control\" placeholder=\"Prix min\">
                          </div>
                          <div class=\"col-6\">
                            <input type=\"number\" name=\"price_max\" class=\"form-control\" placeholder=\"Prix max\">
                          </div>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary w-100\">Appliquer les filtres</button>
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
  const form = document.getElementById('demande-pack-search-form');
  let isOpen = false;
  let debounceTimer = null;

  // Initialize flatpickr for date inputs
  document.querySelectorAll('.flatpickr-date').forEach(elem => {
    flatpickr(elem, {
      dateFormat: \"Y-m-d\",
      allowInput: true
    });
  });

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
                          <a  class=\"stretched-link\">Liste Demande Pack</a>
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
                            <i class=\"ti ti-bell notification-bell-big\"></i>
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
        <i class=\"ti ti-bell notification-bell-big\"></i>
        <span id=\"unreadCountBadge\" class=\"badge bg-danger rounded-pill badge-notifications\">0</span>
    </a>
                  <ul class=\"dropdown-menu dropdown-menu-end py-0\">
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
                                            <span class=\"avatar-initial rounded-circle bg-label-info\"><i class=\"ti ti-bell notification-bell-big\"></i></span>
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
                      <img src=\"{{ asset('img/avatars/1.png') }}\" alt class=\"h-auto rounded-circle\">
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
            <!-- / Navbar -->

          <span> </span>

          <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y enhanced-ui\">
                        <div class=\"scroll-progress\" id=\"scrollProgress\"></div>
                        
                        <!-- Notification Container -->
                        <div id=\"notification-container\"></div>

                        <!-- Carte d'information client -->
<div class=\"card mb-4 glassmorphism-ui glass-panel shadow-lg border-0\" data-aos=\"fade-up\">
    <div class=\"card-body\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h5 class=\"mb-3\">Informations client</h5>
                <p><strong>Nom :</strong> {{ client.nom }} {{ client.prenom }}</p>
                <p><strong>Date de l'événement :</strong> {{ eventDate|date('d/m/Y') }}</p>
                <p><strong>Statut :</strong> <span class=\"badge bg-{{ demandePack.statut == 'NON_LU' ? 'warning' : 'info' }}\">
                    {{ demandePack.statut == 'NON_LU' ? 'Non lu' : 'Lu' }}
                </span></p>
            </div>
            <div class=\"col-md-6\">
                <h5 class=\"mb-3\">Détails du pack original</h5>
                <p><strong>Nom :</strong> {{ originalPack.nom }}</p>
                <p><strong>Prix de base :</strong> {{ originalPack.prix }}€</p>
                <p><strong>Catégorie :</strong> {{ originalPack.categorie }}</p>
            </div>
        </div>
    </div>
</div>
<!-- Notification Message Section -->
{% if notification is defined and notification.message is defined %}
<div class=\"card mb-4 border-info glass-panel enhanced-ui shadow-sm\" data-aos=\"fade-up\" data-aos-delay=\"100\">
    <div class=\"card-body py-3\">
        <div class=\"d-flex align-items-center\">
            <i class=\"ti ti-info-circle text-info me-2 fs-4\"></i>
            <div>
                <h6 class=\"mb-1 text-info fw-bold\">Message de la notification</h6>
                <p class=\"mb-0 text-dark\">{{ notification.message|raw }}</p>
            </div>
        </div>
    </div>
</div>
{% endif %}
                        <!-- Pack Details Section -->
                        <div class=\"card mb-4 glass-panel shadow border-0\" data-aos=\"fade-up\" data-aos-delay=\"200\">
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
                                
                                <!-- Save Button -->
                                <div class=\"mt-4\">
                                    <button type=\"submit\" class=\"btn btn-primary\" id=\"savePack\">
                                        <i class=\"ti ti-device-floppy me-1\"></i> Enregistrer les modifications
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Selected Items Section -->
                        <div class=\"card mb-4 glass-panel shadow border-0\" data-aos=\"fade-up\" data-aos-delay=\"300\">
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
<div class=\"card mb-4 glass-panel shadow border-0\" data-aos=\"fade-up\" data-aos-delay=\"400\">
    <div class=\"card-header d-flex justify-content-between align-items-center\">
        <h5 class=\"card-title mb-0\"><i class=\"ti ti-box\"></i> Matériels</h5>
        <button type=\"button\" class=\"btn btn-sm btn-primary\" data-bs-toggle=\"collapse\" data-bs-target=\"#materielsCollapse\" aria-expanded=\"true\">
            <i class=\"ti ti-chevron-down\"></i>
        </button>
    </div>
    <div class=\"card-body collapse show\" id=\"materielsCollapse\">
        <div class=\"row\">
            {% for materiel in materielles %}
                <div class=\"col-md-4 mb-3\">
                    <div class=\"card h-100\">
                        <img src=\"{% if materiel.photo_mat starts with '/uploads/' %}{{ materiel.photo_mat }}{% else %}{{ asset('uploads/packs/' ~ materiel.photo_mat|replace({'/Images/': ''}) ) }}{% endif %}\" class=\"card-img-top\" alt=\"{{ materiel.nom_mat }}\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ materiel.nom_mat }}</h5>
                            <p class=\"card-text\">
                                <strong>Description:</strong> {{ materiel.description_mat }}<br>
                                <strong>Quantité disponible:</strong> {{ materiel.quantite_mat }}<br>
                                <strong>Prix:</strong> {{ materiel.prix_mat }}€<br>
                                <strong>Catégorie:</strong> {{ materiel.categorie_mat }}
                            </p>
                            <div class=\"input-group mb-3\">
                                <input type=\"number\" class=\"form-control quantity-input\" 
                                       min=\"1\" max=\"{{ materiel.quantite_mat }}\" 
                                       value=\"1\" data-id=\"{{ materiel.id_mat }}\">
                                <button class=\"btn btn-primary select-materiel\" 
                                        data-id=\"{{ materiel.id_mat }}\"
                                        data-name=\"{{ materiel.nom_mat }}\"
                                        data-price=\"{{ materiel.prix_mat }}\"
                                        data-available=\"{{ materiel.quantite_mat }}\">
                                    <i class=\"ti ti-plus\"></i> Ajouter
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
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
<div class=\"card mb-4 glass-panel shadow border-0\" data-aos=\"fade-up\" data-aos-delay=\"500\">
    <div class=\"card-header d-flex justify-content-between align-items-center\">
        <h5 class=\"card-title mb-0\"><i class=\"ti ti-map-pin\"></i> Emplacements</h5>
        <button type=\"button\" class=\"btn btn-sm btn-primary\" data-bs-toggle=\"collapse\" data-bs-target=\"#locationsCollapse\" aria-expanded=\"true\">
            <i class=\"ti ti-chevron-down\"></i>
        </button>
    </div>
    <div class=\"card-body collapse show\" id=\"locationsCollapse\">
        <div class=\"row\">
            {% for location in locations %}
                <div class=\"col-md-4 mb-3\">
                    <div class=\"card h-100\">
                        <img src=\"{{ asset('uploads/packs/' ~ location.imageUrl) }}\" class=\"card-img-top\" alt=\"{{ location.name }}\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ location.name }}</h5>
                            <p class=\"card-text\">
                                <strong>Capacité:</strong> {{ location.capacity }}<br>
                                <strong>Prix:</strong> {{ location.price }}€<br>
                                <strong>Ville:</strong> {{ location.ville }}<br>
                                <strong>Catégorie:</strong> {{ location.category }}
                            </p>
                            <button type=\"button\" 
                                    class=\"btn btn-primary select-location\" 
                                    data-id=\"{{ location.id }}\"
                                    data-name=\"{{ location.name }}\"
                                    data-price=\"{{ location.price }}\">
                                <i class=\"ti ti-plus\"></i> Sélectionner
                            </button>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
        <div class=\"selected-location mt-4\">
    <h6>Emplacement Sélectionné</h6>
    <div class=\"table-responsive\">
        <table class=\"table table-hover\" id=\"selectedLocationTable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>
    </div>
</div>

                        <!-- Personnel Section -->
                        <div class=\"card mb-4 glass-panel shadow border-0\" data-aos=\"fade-up\" data-aos-delay=\"600\">
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
                                <form id=\"customizeForm\" action=\"{{ path('admin_customize_pack_update', {id: demandePack.id}) }}\" method=\"POST\" onsubmit=\"return false;\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"ti ti-device-floppy\"></i> Enregistrer les modifications
                                    </button>
                                </form>
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
    let selectedMaterielles = new Map();
    let selectedPersonnel = new Map();
    let selectedLocation = null;
    const materielleAvailability = new Map();

    // Initialize availability map from cards
    document.querySelectorAll('.select-materiel').forEach(button => {
        const available = parseInt(button.dataset.available);
        const id = button.dataset.id;
        materielleAvailability.set(id, available);
    });

    // Helper function to show toast messages
    function showToast(icon, title, text) {
        Swal.fire({
            icon: icon,
            title: title,
            text: text,
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            customClass: {
                popup: 'colored-toast'
            }
        });
    }

    // Handle materielle selection from cards
    document.querySelectorAll('.select-materiel').forEach(button => {
        button.addEventListener('click', function() {
            const card = this.closest('.card');
            const id = this.dataset.id;
            const name = this.dataset.name;
            const price = parseFloat(this.dataset.price);
            const available = parseInt(this.dataset.available);
            const quantityInput = card.querySelector('.quantity-input');
            let quantity = parseInt(quantityInput.value) || 1;

            // Validate quantity
            if (quantity < 1) {
                showToast('warning', 'Attention', 'Quantité invalide');
                return;
            }

            // Check existing quantity
            const existing = selectedMaterielles.get(id);
            const totalRequested = (existing?.quantity || 0) + quantity;
            
            if (totalRequested > available) {
                showToast('warning', 'Attention', `Quantité non disponible. Il reste \${available} unités`);
                return;
            }

            // Update or add material
            if (existing) {
                existing.quantity += quantity;
            } else {
                selectedMaterielles.set(id, {
                    id: id,
                    name: name,
                    price: price,
                    quantity: quantity,
                    maxAvailable: available
                });
            }

            // Reset input and update UI
            quantityInput.value = 1;
            updateMaterielleTable();
            calculateTotal();
            showToast('success', 'Succès', `\${quantity} \${name} ajouté(s)`);
        });
    });

    // Handle personnel selection
    document.querySelectorAll('.select-personnel').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.dataset.id;
            const name = this.dataset.name;
            const service = this.dataset.service;
            const price = parseFloat(this.dataset.price);

            if (selectedPersonnel.has(id)) {
                showToast('warning', 'Attention', 'Ce personnel est déjà sélectionné');
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
            showToast('success', 'Succès', `\${name} sélectionné`);
        });
    });

    // Handle location selection
 // Handle location selection
document.querySelectorAll('.select-location').forEach(button => {
    button.addEventListener('click', function () {
        const id = this.dataset.id;
        const name = this.dataset.name;
        const price = parseFloat(this.dataset.price);

        // Check if the same location is already selected
        if (selectedLocation?.id === id) {
            showToast('warning', 'Attention', 'Cet emplacement est déjà sélectionné');
            return;
        }

        // Clear previous selection
        selectedLocation = null;

        // Create new location object
        selectedLocation = {
            id: id,
            name: name,
            price: price,
        };

        updateLocationTable();
        calculateTotal();
        showToast('success', 'Succès', `Emplacement \${name} sélectionné`);
    });
});

// Update location table
function updateLocationTable() {
    const tbody = document.querySelector('#selectedLocationTable tbody');
    tbody.innerHTML = '';

    if (!selectedLocation) {
        tbody.innerHTML = `
            <tr>
                <td colspan=\"3\" class=\"text-center\">Aucun emplacement sélectionné</td>
            </tr>
        `;
        return;
    }

    const tr = document.createElement('tr');
    tr.innerHTML = `
        <td>\${selectedLocation.name}</td>
        <td>\${selectedLocation.price.toFixed(2)}€</td>
        <td>
            <button class=\"btn btn-sm btn-danger delete-location\" data-id=\"\${selectedLocation.id}\">
                <i class=\"ti ti-trash\"></i>
            </button>
        </td>
    `;

    // Add event listener for deletion
    tr.querySelector('.delete-location').addEventListener('click', function () {
        removeLocation(selectedLocation.id);
    });

    tbody.appendChild(tr);
}

// Remove location
window.removeLocation = function (id) {
    if (selectedLocation?.id === id) {
        selectedLocation = null;
        updateLocationTable();
        calculateTotal();
        showToast('success', 'Supprimé', 'Emplacement retiré');
    }
};

// Calculate total price
function calculateTotal() {
    let total = 0;

    // Add materials total
    selectedMaterielles.forEach((m) => {
        total += m.price * m.quantity;
    });

    // Add location price
    if (selectedLocation) {
        total += selectedLocation.price;
    }

    // Add personnel total
    selectedPersonnel.forEach((p) => {
        total += p.price;
    });

    document.getElementById('totalPrice').textContent = total.toFixed(2) + '€';
}

// Remove location function
window.removeLocation = function() {
    selectedLocation = null;
    updateLocationDisplay();
    calculateTotal();
};

    // Form submission
    document.getElementById('customizeForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = {
            id: '{{ originalPack.id }}',
            materielles: Array.from(selectedMaterielles.values()).map(m => ({
                id: m.id,
                quantity: m.quantity,
                price: m.price
            })),
            location: selectedLocation,
            personnel: Array.from(selectedPersonnel.values()).map(p => ({
                id: p.id,
                name: p.name,
                service: p.service,
                price: p.price
            }))
        };

        // Show loading state
        const submitButton = this.querySelector('button[type=\"submit\"]');
        const originalText = submitButton.innerHTML;
        submitButton.innerHTML = '<i class=\"ti ti-loader-2 ti-spin\"></i> Enregistrement...';
        submitButton.disabled = true;

        fetch(this.action, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token(\"customize_pack\") }}'
            },
            body: JSON.stringify(formData)
        })
        .then(response => {
            if (!response.ok) throw new Error('Erreur serveur');
            return response.json();
        })
        .then(data => {
            if (data.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Succès !',
                    text: 'Pack customisé avec succès !',
                    showConfirmButton: false,
                    timer: 2000
                }).then(() => {
                    window.location.href = '{{ path(\"admin_notifications\") }}';
                });
            } else {
                throw new Error(data.message || 'Erreur lors de la customisation');
            }
        })
        .catch(error => {
            Swal.fire({
                icon: 'error',
                title: 'Erreur !',
                text: error.message || 'Une erreur est survenue',
                confirmButtonText: 'OK'
            });
            console.error('Error:', error);
        })
        .finally(() => {
            submitButton.innerHTML = originalText;
            submitButton.disabled = false;
        });
    });

    // Update materials table
    function updateMaterielleTable() {
        const tbody = document.querySelector('#selectedMaterielsTable tbody');
        tbody.innerHTML = '';
        
        if (selectedMaterielles.size === 0) {
            tbody.innerHTML = '<tr><td colspan=\"5\" class=\"text-center\">Aucun matériel sélectionné</td></tr>';
            return;
        }
        
        selectedMaterielles.forEach((materielle, id) => {
            const total = materielle.price * materielle.quantity;
            const tr = document.createElement('tr');
            
            tr.innerHTML = `
                <td>\${materielle.name}</td>
                <td>
                    <input type=\"number\" 
                           class=\"form-control quantity-update\" 
                           min=\"1\" 
                           max=\"\${materielle.maxAvailable}\"
                           value=\"\${materielle.quantity}\"
                           data-id=\"\${id}\">
                </td>
                <td>\${materielle.price.toFixed(2)}€</td>
                <td>\${total.toFixed(2)}€</td>
                <td>
                    <button class=\"btn btn-sm btn-danger delete-material\" data-id=\"\${id}\">
                        <i class=\"ti ti-trash\"></i>
                    </button>
                </td>
            `;

            // Add event listeners
            tr.querySelector('.quantity-update').addEventListener('change', function() {
                const newQuantity = parseInt(this.value) || 1;
                updateMaterielleQuantity(id, newQuantity);
            });

            tr.querySelector('.delete-material').addEventListener('click', function() {
                removeMaterielle(id);
            });

            tbody.appendChild(tr);
        });
    }

    // Update personnel table
    function updatePersonnelTable() {
        const tbody = document.querySelector('#selectedPersonnelTable tbody');
        tbody.innerHTML = '';
        
        selectedPersonnel.forEach((person, id) => {
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td>\${person.name}</td>
                <td>\${person.service}</td>
                <td>\${person.price.toFixed(2)}€</td>
                <td>
                    <button class=\"btn btn-sm btn-danger delete-personnel\" data-id=\"\${id}\">
                        <i class=\"ti ti-trash\"></i>
                    </button>
                </td>
            `;

            tr.querySelector('.delete-personnel').addEventListener('click', function() {
                removePersonnel(id);
            });

            tbody.appendChild(tr);
        });
    }

    // Update location display
    function updateLocationDisplay() {
        const container = document.getElementById('selectedLocation');
        container.innerHTML = selectedLocation 
            ? `<div class=\"d-flex align-items-center justify-content-between\">
                    <div>
                        <strong>\${selectedLocation.name}</strong>
                        <div class=\"text-muted\">\${selectedLocation.price.toFixed(2)}€</div>
                    </div>
                    <button class=\"btn btn-sm btn-danger delete-location\">
                        <i class=\"ti ti-trash\"></i>
                    </button>
                </div>`
            : 'Aucun emplacement sélectionné';

        if (selectedLocation) {
            container.querySelector('.delete-location').addEventListener('click', removeLocation);
        }
    }

    // Calculate total price
    function calculateTotal() {
        let total = 0;
        
        selectedMaterielles.forEach(m => total += m.price * m.quantity);
        if (selectedLocation) total += selectedLocation.price;
        selectedPersonnel.forEach(p => total += p.price);
        
        document.getElementById('totalPrice').textContent = total.toFixed(2) + '€';
    }

    // Global functions
    window.updateMaterielleQuantity = function(id, quantity) {
        const materielle = selectedMaterielles.get(id);
        if (!materielle) return;

        quantity = Math.max(1, Math.min(quantity, materielle.maxAvailable));
        
        if (quantity !== materielle.quantity) {
            materielle.quantity = quantity;
            updateMaterielleTable();
            calculateTotal();
        }
    };

    window.removeMaterielle = function(id) {
        if (selectedMaterielles.delete(id)) {
            updateMaterielleTable();
            calculateTotal();
            showToast('success', 'Supprimé', 'Matériel retiré');
        }
    };

    window.removePersonnel = function(id) {
        if (selectedPersonnel.delete(id)) {
            updatePersonnelTable();
            calculateTotal();
            showToast('success', 'Supprimé', 'Personnel retiré');
        }
    };

    window.removeLocation = function() {
        selectedLocation = null;
        updateLocationDisplay();
        calculateTotal();
        showToast('success', 'Supprimé', 'Emplacement retiré');
    };

    // Initial setup
    calculateTotal();
    \$('.select2').select2();
});
</script>
</body>
</html>
", "admin/notifications/customize_pack.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\admin\\notifications\\customize_pack.html.twig");
    }
}
