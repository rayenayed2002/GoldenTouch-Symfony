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

/* perso/show.html.twig */
class __TwigTemplate_d5d6ee267aa37fd9dfdd773d21305d4a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "perso/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "perso/show.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\" class=\"light-style layout-navbar-fixed layout-menu-fixed\" dir=\"ltr\" data-theme=\"theme-default\" data-assets-path=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        yield "\" data-template=\"vertical-menu-template\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 6, $this->source); })()), "nomP", [], "any", false, false, false, 6), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 6, $this->source); })()), "prenomP", [], "any", false, false, false, 6), "html", null, true);
        yield " - Détails | GoldenTouch</title>
    <meta name=\"description\" content=\"Fiche détaillée du membre du personnel\" />

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/favicon.ico"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css\">

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\" />

    <!-- Icons -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fonts/fontawesome.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fonts/tabler-icons.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fonts/flag-icons.css"), "html", null, true);
        yield "\" />

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/css/rtl/core.css"), "html", null, true);
        yield "\" class=\"template-customizer-core-css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/css/rtl/theme-default.css"), "html", null, true);
        yield "\" class=\"template-customizer-theme-css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/demo.css"), "html", null, true);
        yield "\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/node-waves/node-waves.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/typeahead-js/typeahead.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/apex-charts/apex-charts.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/sweetalert2/sweetalert2.css"), "html", null, true);
        yield "\" />

    <!-- Page CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/css/pages/cards-advance.css"), "html", null, true);
        yield "\" />

    <!-- FullCalendar CSS -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css\">
    
    <style>
    #calendar-holder {
        background: white;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
        padding: 20px;
        margin-bottom: 30px;
    }

    .fc-event-custom {
        border-radius: 4px;
        font-weight: 500;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        transition: all 0.2s ease;
    }

    .fc-event-custom:hover {
        box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        transform: translateY(-2px);
    }

    .fc-toolbar {
        margin-bottom: 1.5em !important;
    }

    .fc-daygrid-event {
        padding: 3px 6px;
    }

    .fc-day-today {
        background-color: rgba(55, 136, 216, 0.1) !important;
    }

    .fc-col-header-cell {
        background: #f8f9fa;
        padding: 10px 0;
    }

    .event-popup {
        border-radius: 12px;
    }
    :root {
        --profile-primary: #7367F0;
        --profile-primary-light: rgba(115, 103, 240, 0.1);
        --profile-success: #28C76F;
        --profile-warning: #FF9F43;
        --profile-danger: #EA5455;
        --profile-text-muted: #6c757d;
        --profile-border-color: rgba(0,0,0,0.08);
    }
    
    /* Profile Header */
    .profile-header {
        position: relative;
        height: 320px;
        overflow: hidden;
        border-radius: 0.75rem;
        margin-bottom: 2.5rem;
        box-shadow: 0 4px 24px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        background-color: #f8f9fa;
    }
    
    .profile-header:hover {
        box-shadow: 0 8px 32px rgba(0,0,0,0.15);
    }
    
    .profile-cover {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .profile-header:hover .profile-cover {
        transform: scale(1.03);
    }
    
    .profile-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to bottom, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.85) 100%);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 2.5rem;
        color: white;
    }
    
    .profile-title {
        font-size: 2.5rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
        text-shadow: 0 2px 4px rgba(0,0,0,0.3);
    }
    
    /* Profile Actions */
    .profile-actions {
        position: absolute;
        top: 1.75rem;
        right: 1.75rem;
        z-index: 10;
        display: flex;
        gap: 0.75rem;
    }
    
    .profile-actions .btn {
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        transition: all 0.3s ease;
        border-radius: 50%;
        width: 42px;
        height: 42px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255,255,255,0.9);
        opacity: 0.9;
    }
    
    .profile-actions .btn:hover {
        transform: translateY(-3px) scale(1.1);
        opacity: 1;
    }

    /* New Reservations Button */
    .btn-reservations {
        position: absolute;
        top: 1.75rem;
        left: 1.75rem;
        z-index: 10;
        padding: 0.75rem 1.5rem;
        font-weight: 500;
        border-radius: 2rem;
        background: rgba(255,255,255,0.9);
        color: var(--profile-primary);
        border: 2px solid var(--profile-primary);
        box-shadow: 0 4px 12px rgba(115, 103, 240, 0.25);
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
    }

    .btn-reservations:hover {
        background: var(--profile-primary);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(115, 103, 240, 0.35);
    }

    .btn-reservations i {
        margin-right: 0.5rem;
        font-size: 1.1em;
    }
    
    /* Unified Content Section */
    .unified-info-section {
        background: white;
        border-radius: 0.75rem;
        padding: 2.5rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        border: 1px solid var(--profile-border-color);
    }
    
    .unified-info-section:hover {
        box-shadow: 0 4px 16px rgba(0,0,0,0.1);
    }
    
    /* Info Blocks */
    .info-block {
        margin-bottom: 2.5rem;
    }
    
    .info-block:last-child {
        margin-bottom: 0;
    }
    
    /* Section Headers */
    .section-header {
        border-bottom: 1px solid var(--profile-border-color);
        padding-bottom: 1rem;
        margin-bottom: 1.75rem;
        position: relative;
        font-size: 1.25rem;
        font-weight: 600;
        color: var(--profile-primary);
    }
    
    .section-header:after {
        content: '';
        position: absolute;
        bottom: -1px;
        left: 0;
        width: 50px;
        height: 3px;
        background: var(--profile-primary);
        border-radius: 3px;
    }
    
    /* Status Indicator */
    .status-indicator {
        display: inline-flex;
        align-items: center;
        padding: 0.5rem 1.25rem;
        border-radius: 2rem;
        background: rgba(115, 103, 240, 0.15);
        font-weight: 500;
    }
    
    .status-bubble {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        margin-right: 0.75rem;
        box-shadow: 0 0 0 3px rgba(255,255,255,0.2);
    }
    
    .status-bubble.available {
        background: var(--profile-success);
    }
    
    .status-bubble.unavailable {
        background: var(--profile-warning);
    }
    
    /* Info Box */
    .info-box {
        display: flex;
        align-items: center;
        padding: 1.25rem;
        background: #f8f9fa;
        border-radius: 0.75rem;
        margin-bottom: 1.25rem;
        transition: all 0.3s ease;
        border-left: 4px solid var(--profile-primary);
    }
    
    .info-box:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        background: white;
    }
    
    .info-box-icon {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1.25rem;
        background: var(--profile-primary);
        color: white;
        font-size: 1.25rem;
        box-shadow: 0 4px 8px rgba(115, 103, 240, 0.3);
    }
    
    .info-box-content h6 {
        font-weight: 600;
        margin-bottom: 0.25rem;
        color: #495057;
    }
    
    .info-box-content p {
        margin-bottom: 0;
        color: var(--profile-text-muted);
    }
    
    /* Professional Info Grid */
    .professional-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1.75rem;
    }
    
    /* Description Box */
    .description-box {
        padding: 1.5rem;
        background: #f8f9fa;
        border-radius: 0.75rem;
        line-height: 1.7;
        color: #555;
        border-left: 4px solid var(--profile-primary);
    }
    
    /* Action Buttons */
    .action-buttons {
        display: flex;
        gap: 1rem;
        margin-top: 2.5rem;
        flex-wrap: wrap;
    }
    
    .action-buttons .btn {
        padding: 0.75rem 1.5rem;
        font-weight: 500;
        border-radius: 0.5rem;
        display: inline-flex;
        align-items: center;
        transition: all 0.3s ease;
    }
    
    .action-buttons .btn i {
        margin-right: 0.5rem;
        font-size: 1.1em;
    }
    
    /* Modal personnalisé */
    .reservations-modal {
        border: none;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        background: white;
        height: 80vh; /* Hauteur relative à la vue */
        display: flex;
        flex-direction: column;
    }

    .reservations-modal .modal-header {
        border-bottom: 1px solid rgba(0,0,0,0.1);
        background: white;
        padding: 1rem 1.5rem;
        position: relative;
        flex-shrink: 0;
    }

    .reservations-modal .modal-title {
        font-weight: 600;
        color: #2d3748;
        font-size: 1.25rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .reservations-modal .modal-title i {
        font-size: 1.5rem;
        color: #7367F0;
    }

    .reservations-modal .modal-title .badge {
        font-weight: 500;
        font-size: 0.8rem;
        padding: 0.25rem 0.5rem;
        background: rgba(115, 103, 240, 0.15);
        color: #7367F0;
    }

    .reservations-modal .modal-body {
        padding: 0;
        overflow-y: auto;
        flex-grow: 1;
        position: relative;
    }

    /* Style compact pour le calendrier */
    #calendar-holder {
        background: transparent;
        border-radius: 0;
        padding: 0.5rem 1rem;
        position: relative;
        z-index: 1;
        height: 100%;
    }

    .fc .fc-toolbar {
        flex-direction: row;
        align-items: center;
        gap: 0.5rem;
        margin-bottom: 0.5rem !important;
        padding: 0.5rem 1rem;
    }

    .fc .fc-toolbar-title {
        font-size: 1rem;
        font-weight: 600;
        color: #2d3748;
        margin: 0;
    }

    .fc .fc-button {
        border-radius: 6px !important;
        padding: 0.35rem 0.75rem !important;
        font-weight: 500 !important;
        font-size: 0.8rem !important;
        border: none !important;
        box-shadow: none !important;
    }

    .fc .fc-button-primary {
        background-color: #7367F0 !important;
    }

    .fc .fc-button-primary:hover {
        background-color: #5e50e9 !important;
    }

    .fc .fc-button-group {
        display: flex;
        gap: 0.25rem;
    }

    .fc .fc-daygrid-day-number {
        font-weight: 500;
        font-size: 0.8rem;
    }

    .fc .fc-daygrid-day.fc-day-today {
        background-color: rgba(115, 103, 240, 0.1) !important;
    }

    .fc .fc-daygrid-day.fc-day-today .fc-daygrid-day-number {
        color: #7367F0;
        font-weight: 600;
    }

    .fc .fc-event {
        border-radius: 4px;
        padding: 1px 3px;
        font-size: 0.7rem;
        border: none !important;
        margin: 1px 2px;
    }

    .fc .fc-col-header-cell {
        padding: 0.25rem 0;
    }

    .fc .fc-col-header-cell-cushion {
        font-size: 0.75rem;
        font-weight: 500;
    }

    /* Style pour la liste des réservations */
    .reservations-list-container {
        height: 100%;
        overflow-y: auto;
        padding: 1rem;
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }

    .reservation-item {
        background: white;
        border-radius: 8px;
        padding: 0.75rem 1rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        border-left: 3px solid #7367F0;
    }

    .reservation-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 0.5rem;
    }

    .reservation-title {
        font-weight: 600;
        font-size: 0.9rem;
        color: #2d3748;
    }

    .reservation-badge {
        font-size: 0.7rem;
        padding: 0.2rem 0.5rem;
        border-radius: 10px;
        background: rgba(115, 103, 240, 0.1);
        color: #7367F0;
    }

    .reservation-details {
        display: flex;
        flex-direction: column;
        gap: 0.25rem;
    }

    .reservation-detail {
        display: flex;
        align-items: center;
        font-size: 0.8rem;
        color: #64748B;
    }

    .reservation-detail i {
        margin-right: 0.5rem;
        color: #7367F0;
        font-size: 0.9rem;
    }

    /* View switcher */
    .view-switcher {
        display: flex;
        background: rgba(115, 103, 240, 0.1);
        border-radius: 8px;
        padding: 2px;
        margin: 0.5rem 1rem;
        justify-content: center;
        flex-shrink: 0;
    }

    .view-switcher-btn {
        flex: 1;
        border: none;
        background: transparent;
        padding: 0.4rem 0.75rem;
        font-weight: 500;
        font-size: 0.8rem;
        color: #64748B;
        border-radius: 6px;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.25rem;
    }

    .view-switcher-btn.active {
        background: white;
        color: #7367F0;
        box-shadow: 0 1px 3px rgba(115, 103, 240, 0.2);
    }

    /* Ajustements pour le modal footer */
    .reservations-modal .modal-footer {
        border-top: 1px solid rgba(0,0,0,0.1);
        background: white;
        padding: 0.75rem 1.5rem;
        display: flex;
        justify-content: space-between;
        flex-shrink: 0;
    }

    /* Aucune réservation */
    .no-reservations {
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 2rem;
    }

    .no-reservations i {
        font-size: 3rem;
        color: #CBD5E1;
        margin-bottom: 1rem;
    }

    .no-reservations h5 {
        font-weight: 600;
        color: #2d3748;
        margin-bottom: 0.5rem;
    }

    .no-reservations p {
        color: #64748B;
        font-size: 0.9rem;
        margin-bottom: 1.5rem;
    }

    /* Alignement des boutons jour/mois/année avec aujourd'hui */
    .fc-toolbar-chunk {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .fc-today-button {
        margin-left: auto;
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
            <li class=\"menu-item\">
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
                  <a href=\"ajouter-evenement.html\" class=\"menu-link\">
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
            <li class=\"menu-item active\">
              <a href=\"packs.html\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons ti ti-package\"></i>
                <div data-i18n=\"Personnels\">Personnels</div>
              </a>
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
                <div class=\"nav-item navbar-search-wrapper mb-0\">
                  <a class=\"nav-item nav-link search-toggler d-flex align-items-center px-0\" href=\"javascript:void(0);\">
                    <i class=\"ti ti-search ti-md me-2\"></i>
                    <span class=\"d-none d-md-inline-block text-muted\">Search (Ctrl+/)</span>
                  </a>
                </div>
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
                            <i class=\"ti ti-calendar fs-4\"></i>
                          </span>
                          <a href=\"app-calendar.html\" class=\"stretched-link\">Calendar</a>
                          <small class=\"text-muted mb-0\">Appointments</small>
                        </div>
                        <div class=\"dropdown-shortcuts-item col\">
                          <span class=\"dropdown-shortcuts-icon rounded-circle mb-2\">
                            <i class=\"ti ti-file-invoice fs-4\"></i>
                          </span>
                          <a href=\"app-invoice-list.html\" class=\"stretched-link\">Invoice App</a>
                          <small class=\"text-muted mb-0\">Manage Accounts</small>
                        </div>
                      </div>
                      <div class=\"row row-bordered overflow-visible g-0\">
                        <div class=\"dropdown-shortcuts-item col\">
                          <span class=\"dropdown-shortcuts-icon rounded-circle mb-2\">
                            <i class=\"ti ti-users fs-4\"></i>
                          </span>
                          <a href=\"app-user-list.html\" class=\"stretched-link\">User App</a>
                          <small class=\"text-muted mb-0\">Manage Users</small>
                        </div>
                        <div class=\"dropdown-shortcuts-item col\">
                          <span class=\"dropdown-shortcuts-icon rounded-circle mb-2\">
                            <i class=\"ti ti-lock fs-4\"></i>
                          </span>
                          <a href=\"app-access-roles.html\" class=\"stretched-link\">Role Management</a>
                          <small class=\"text-muted mb-0\">Permission</small>
                        </div>
                      </div>
                      <div class=\"row row-bordered overflow-visible g-0\">
                        <div class=\"dropdown-shortcuts-item col\">
                          <span class=\"dropdown-shortcuts-icon rounded-circle mb-2\">
                            <i class=\"ti ti-chart-bar fs-4\"></i>
                          </span>
                          <a href=\"index.html\" class=\"stretched-link\">Dashboard</a>
                          <small class=\"text-muted mb-0\">User Profile</small>
                        </div>
                        <div class=\"dropdown-shortcuts-item col\">
                          <span class=\"dropdown-shortcuts-icon rounded-circle mb-2\">
                            <i class=\"ti ti-settings fs-4\"></i>
                          </span>
                          <a href=\"pages-account-settings-account.html\" class=\"stretched-link\">Setting</a>
                          <small class=\"text-muted mb-0\">Account Settings</small>
                        </div>
                      </div>
                      <div class=\"row row-bordered overflow-visible g-0\">
                        <div class=\"dropdown-shortcuts-item col\">
                          <span class=\"dropdown-shortcuts-icon rounded-circle mb-2\">
                            <i class=\"ti ti-help fs-4\"></i>
                          </span>
                          <a href=\"pages-help-center-landing.html\" class=\"stretched-link\">Help Center</a>
                          <small class=\"text-muted mb-0\">FAQs & Articles</small>
                        </div>
                        <div class=\"dropdown-shortcuts-item col\">
                          <span class=\"dropdown-shortcuts-icon rounded-circle mb-2\">
                            <i class=\"ti ti-square fs-4\"></i>
                          </span>
                          <a href=\"modal-examples.html\" class=\"stretched-link\">Modals</a>
                          <small class=\"text-muted mb-0\">Useful Popups</small>
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
                    <span class=\"badge bg-danger rounded-pill badge-notifications\">5</span>
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
                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                          <div class=\"d-flex\">
                            <div class=\"flex-shrink-0 me-3\">
                              <div class=\"avatar\">
                                <img src=\"";
        // line 995
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatars/1.png"), "html", null, true);
        yield "\" alt class=\"h-auto rounded-circle\" />
                              </div>
                            </div>
                            <div class=\"flex-grow-1\">
                              <h6 class=\"mb-1\">Congratulation Lettie 🎉</h6>
                              <p class=\"mb-0\">Won the monthly best seller gold badge</p>
                              <small class=\"text-muted\">1h ago</small>
                            </div>
                            <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                ><span class=\"badge badge-dot\"></span
                              ></a>
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                ><span class=\"ti ti-x\"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                          <div class=\"d-flex\">
                            <div class=\"flex-shrink-0 me-3\">
                              <div class=\"avatar\">
                                <span class=\"avatar-initial rounded-circle bg-label-danger\">CF</span>
                              </div>
                            </div>
                            <div class=\"flex-grow-1\">
                              <h6 class=\"mb-1\">Charles Franklin</h6>
                              <p class=\"mb-0\">Accepted your connection</p>
                              <small class=\"text-muted\">12hr ago</small>
                            </div>
                            <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                ><span class=\"badge badge-dot\"></span
                              ></a>
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                ><span class=\"ti ti-x\"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                          <div class=\"d-flex\">
                            <div class=\"flex-shrink-0 me-3\">
                              <div class=\"avatar\">
                                <img src=\"";
        // line 1039
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatars/2.png"), "html", null, true);
        yield "\" alt class=\"h-auto rounded-circle\" />
                              </div>
                            </div>
                            <div class=\"flex-grow-1\">
                              <h6 class=\"mb-1\">New Message ✉️</h6>
                              <p class=\"mb-0\">You have new message from Natalie</p>
                              <small class=\"text-muted\">1h ago</small>
                            </div>
                            <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                ><span class=\"badge badge-dot\"></span
                              ></a>
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                ><span class=\"ti ti-x\"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                          <div class=\"d-flex\">
                            <div class=\"flex-shrink-0 me-3\">
                              <div class=\"avatar\">
                                <span class=\"avatar-initial rounded-circle bg-label-success\"
                                  ><i class=\"ti ti-shopping-cart\"></i
                                ></span>
                              </div>
                            </div>
                            <div class=\"flex-grow-1\">
                              <h6 class=\"mb-1\">Whoo! You have new order 🛒</h6>
                              <p class=\"mb-0\">ACME Inc. made new order \$1,154</p>
                              <small class=\"text-muted\">1 day ago</small>
                            </div>
                            <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                ><span class=\"badge badge-dot\"></span
                              ></a>
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                ><span class=\"ti ti-x\"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                          <div class=\"d-flex\">
                            <div class=\"flex-shrink-0 me-3\">
                              <div class=\"avatar\">
                                <img src=\"";
        // line 1085
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatars/9.png"), "html", null, true);
        yield "\" alt class=\"h-auto rounded-circle\" />
                              </div>
                            </div>
                            <div class=\"flex-grow-1\">
                              <h6 class=\"mb-1\">Application has been approved 🚀</h6>
                              <p class=\"mb-0\">Your ABC project application has been approved.</p>
                              <small class=\"text-muted\">2 days ago</small>
                            </div>
                            <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                ><span class=\"badge badge-dot\"></span
                              ></a>
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                ><span class=\"ti ti-x\"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                          <div class=\"d-flex\">
                            <div class=\"flex-shrink-0 me-3\">
                              <div class=\"avatar\">
                                <span class=\"avatar-initial rounded-circle bg-label-success\"
                                  ><i class=\"ti ti-chart-pie\"></i
                                ></span>
                              </div>
                            </div>
                            <div class=\"flex-grow-1\">
                              <h6 class=\"mb-1\">Monthly report is generated</h6>
                              <p class=\"mb-0\">July monthly financial report is generated</p>
                              <small class=\"text-muted\">3 days ago</small>
                            </div>
                            <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                ><span class=\"badge badge-dot\"></span
                              ></a>
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                ><span class=\"ti ti-x\"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                          <div class=\"d-flex\">
                            <div class=\"flex-shrink-0 me-3\">
                              <div class=\"avatar\">
                                <img src=\"";
        // line 1131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatars/5.png"), "html", null, true);
        yield "\" alt class=\"h-auto rounded-circle\" />
                              </div>
                            </div>
                            <div class=\"flex-grow-1\">
                              <h6 class=\"mb-1\">Send connection request</h6>
                              <p class=\"mb-0\">Peter sent you connection request</p>
                              <small class=\"text-muted\">4 days ago</small>
                            </div>
                            <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                ><span class=\"badge badge-dot\"></span
                              ></a>
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                ><span class=\"ti ti-x\"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                          <div class=\"d-flex\">
                            <div class=\"flex-shrink-0 me-3\">
                              <div class=\"avatar\">
                                <img src=\"";
        // line 1153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatars/6.png"), "html", null, true);
        yield "\" alt class=\"h-auto rounded-circle\" />
                              </div>
                            </div>
                            <div class=\"flex-grow-1\">
                              <h6 class=\"mb-1\">New message from Jane</h6>
                              <p class=\"mb-0\">Your have new message from Jane</p>
                              <small class=\"text-muted\">5 days ago</small>
                            </div>
                            <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                ><span class=\"badge badge-dot\"></span
                              ></a>
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                ><span class=\"ti ti-x\"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                          <div class=\"d-flex\">
                            <div class=\"flex-shrink-0 me-3\">
                              <div class=\"avatar\">
                                <span class=\"avatar-initial rounded-circle bg-label-warning\"
                                  ><i class=\"ti ti-alert-triangle\"></i
                                ></span>
                              </div>
                            </div>
                            <div class=\"flex-grow-1\">
                              <h6 class=\"mb-1\">CPU is running high</h6>
                              <p class=\"mb-0\">CPU Utilization Percent is currently at 88.63%,</p>
                              <small class=\"text-muted\">5 days ago</small>
                            </div>
                            <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                ><span class=\"badge badge-dot\"></span
                              ></a>
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                ><span class=\"ti ti-x\"></span
                              ></a>
                            </div>
                          </div>
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
        // line 1212
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
        // line 1221
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

          <!-- Content wrapper -->
          <div class=\"content-wrapper\">
            <!-- Content -->
            <div class=\"container-xxl flex-grow-1 container-p-y\">
              <div class=\"row animate-fade-in\">
                <div class=\"col-12\">
                    <!-- Profile Header -->
                    <div class=\"profile-header position-relative\">
                        <!-- New Reservations Button -->
                        <button type=\"button\" class=\"btn-reservations\" data-bs-toggle=\"modal\" data-bs-target=\"#reservationsModal\">
                            <i class=\"ti ti-calendar\"></i> Voir les réservations (";
        // line 1316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 1316, $this->source); })())), "html", null, true);
        yield ")
                        </button>
                        
                        <div class=\"profile-actions\">
                            <a href=\"";
        // line 1320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_perso_edit", ["idP" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 1320, $this->source); })()), "idP", [], "any", false, false, false, 1320)]), "html", null, true);
        yield "\" class=\"btn btn-icon btn-label-primary\" data-bs-toggle=\"tooltip\" title=\"Modifier\">
                                <i class=\"ti ti-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"";
        // line 1323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_perso_delete", ["idP" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 1323, $this->source); })()), "idP", [], "any", false, false, false, 1323)]), "html", null, true);
        yield "\" onsubmit=\"return confirmDelete(event)\" class=\"d-inline\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 1324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 1324, $this->source); })()), "idP", [], "any", false, false, false, 1324))), "html", null, true);
        yield "\">
                                <button type=\"submit\" class=\"btn btn-icon btn-label-danger\" data-bs-toggle=\"tooltip\" title=\"Supprimer\">
                                    <i class=\"ti ti-trash\"></i>
                                </button>
                            </form>
                        </div>
                        
                        ";
        // line 1331
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 1331, $this->source); })()), "imageUrl", [], "any", false, false, false, 1331)) {
            // line 1332
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/personnel/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 1332, $this->source); })()), "imageUrl", [], "any", false, false, false, 1332))), "html", null, true);
            yield "\" class=\"profile-cover\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 1332, $this->source); })()), "nomP", [], "any", false, false, false, 1332), "html", null, true);
            yield "\">
                        ";
        } else {
            // line 1334
            yield "                        <div class=\"profile-cover bg-secondary d-flex align-items-center justify-content-center\">
                            <i class=\"ti ti-user text-white\" style=\"font-size: 5rem;\"></i>
                        </div>
                        ";
        }
        // line 1338
        yield "                        
                        <div class=\"profile-overlay\">
                            <nav aria-label=\"breadcrumb\">
                                <ol class=\"breadcrumb breadcrumb-dark\">
                                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 1342
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_perso_index");
        yield "\" class=\"text-white-50\">Personnel</a></li>
                                    <li class=\"breadcrumb-item active text-white\">";
        // line 1343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 1343, $this->source); })()), "nomP", [], "any", false, false, false, 1343), "html", null, true);
        yield "</li>
                                </ol>
                            </nav>
                            <h1 class=\"profile-title\">";
        // line 1346
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 1346, $this->source); })()), "nomP", [], "any", false, false, false, 1346), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 1346, $this->source); })()), "prenomP", [], "any", false, false, false, 1346), "html", null, true);
        yield "</h1>
                            <div class=\"status-indicator mt-2\">
                                <div class=\"status-bubble ";
        // line 1348
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 1348, $this->source); })()), "statutP", [], "any", false, false, false, 1348) == "Disponible")) ? ("available") : ("unavailable"));
        yield "\"></div>
                                <span>";
        // line 1349
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 1349, $this->source); })()), "statutP", [], "any", false, false, false, 1349), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                    </div>

                    <!-- Unified Information Section -->
                    <div class=\"unified-info-section delay-1\">
                        <!-- Professional Info Block -->
                        <div class=\"info-block\">
                            <h5 class=\"section-header\">Informations professionnelles</h5>
                            <div class=\"professional-grid\">
                                <!-- Service -->
                                <div class=\"info-box\">
                                    <div class=\"info-box-icon\">
                                        <i class=\"ti ti-briefcase\"></i>
                                    </div>
                                    <div class=\"info-box-content\">
                                        <h6 class=\"mb-1\">Service</h6>
                                        <p class=\"mb-0\">";
        // line 1367
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 1367, $this->source); })()), "serviceP", [], "any", false, false, false, 1367), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                                
                                <!-- Tarif -->
                                <div class=\"info-box\">
                                    <div class=\"info-box-icon\">
                                        <i class=\"ti ti-currency-dollar\"></i>
                                    </div>
                                    <div class=\"info-box-content\">
                                        <h6 class=\"mb-1\">Tarif Horaire</h6>
                                        <p class=\"mb-0\">";
        // line 1378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 1378, $this->source); })()), "tarifP", [], "any", false, false, false, 1378), 0, ",", " "), "html", null, true);
        yield " TND</p>
                                    </div>
                                </div>
                                
                                <!-- Statut -->
                                <div class=\"info-box\">
                                    <div class=\"info-box-icon\">
                                        <i class=\"ti ti-user-check\"></i>
                                    </div>
                                    <div class=\"info-box-content\">
                                        <h6 class=\"mb-1\">Statut</h6>
                                        <p class=\"mb-0\">
                                            <span class=\"badge bg-";
        // line 1390
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 1390, $this->source); })()), "statutP", [], "any", false, false, false, 1390) == "Disponible")) ? ("success") : ("warning"));
        yield "\">
                                                ";
        // line 1391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 1391, $this->source); })()), "statutP", [], "any", false, false, false, 1391), "html", null, true);
        yield "
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Description Block -->
                        <div class=\"info-block delay-2\">
                            <h5 class=\"section-header\">Description</h5>
                            <div class=\"description-box\">
                                ";
        // line 1403
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 1403, $this->source); })()), "descriptionP", [], "any", false, false, false, 1403)) ? (Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 1403, $this->source); })()), "descriptionP", [], "any", false, false, false, 1403), "html", null, true))) : ("Aucune description disponible pour ce membre du personnel."));
        yield "
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class=\"action-buttons delay-3\">
                            <a href=\"";
        // line 1409
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_perso_index");
        yield "\" class=\"btn btn-outline-secondary\">
                                <i class=\"ti ti-arrow-left me-1\"></i> Retour à la liste
                            </a>
                            <a href=\"";
        // line 1412
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_perso_edit", ["idP" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 1412, $this->source); })()), "idP", [], "any", false, false, false, 1412)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                                <i class=\"ti ti-edit me-1\"></i> Modifier
                            </a>
                            <form method=\"post\" action=\"";
        // line 1415
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_perso_delete", ["idP" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 1415, $this->source); })()), "idP", [], "any", false, false, false, 1415)]), "html", null, true);
        yield "\" onsubmit=\"return confirmDelete(event)\" class=\"d-inline\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 1416
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 1416, $this->source); })()), "idP", [], "any", false, false, false, 1416))), "html", null, true);
        yield "\">
                                <button type=\"submit\" class=\"btn btn-outline-danger\">
                                    <i class=\"ti ti-trash me-1\"></i> Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
    </div>
    <!-- / Content wrapper -->

    <!-- Modal pour afficher les réservations -->
    <div class=\"modal fade\" id=\"reservationsModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content reservations-modal\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">
                        <i class=\"ti ti-calendar-stats\"></i>
                        <span>Planning de ";
        // line 1437
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 1437, $this->source); })()), "nomP", [], "any", false, false, false, 1437), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 1437, $this->source); })()), "prenomP", [], "any", false, false, false, 1437), "html", null, true);
        yield "</span>
                        <span class=\"badge\">";
        // line 1438
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 1438, $this->source); })())), "html", null, true);
        yield " réservation(s)</span>
                    </h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                
                <div class=\"modal-body\">
                    ";
        // line 1444
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 1444, $this->source); })())) > 0)) {
            // line 1445
            yield "                        <!-- Sélecteur de vue -->
                        <div class=\"view-switcher\">
                            <button type=\"button\" class=\"view-switcher-btn active\" data-view=\"calendar\">
                                <i class=\"ti ti-calendar\"></i> Calendrier
                            </button>
                            <button type=\"button\" class=\"view-switcher-btn\" data-view=\"list\">
                                <i class=\"ti ti-list\"></i> Liste
                            </button>
                        </div>
                        
                        <!-- Vue Calendrier -->
                        <div id=\"calendar-holder\"></div>
                        
                        <!-- Vue Liste -->
                        <div class=\"reservations-list-container d-none\">
                            ";
            // line 1460
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 1460, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 1461
                yield "                            <div class=\"reservation-item\">
                                <div class=\"reservation-header\">
                                    <h6 class=\"reservation-title\">";
                // line 1463
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "event", [], "any", false, true, false, 1463), "nom", [], "any", true, true, false, 1463) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "event", [], "any", false, false, false, 1463), "nom", [], "any", false, false, false, 1463)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "event", [], "any", false, false, false, 1463), "nom", [], "any", false, false, false, 1463), "html", null, true)) : ("N/A"));
                yield "</h6>
                                    ";
                // line 1464
                if (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "event", [], "any", false, false, false, 1464)) {
                    // line 1465
                    yield "                                        <span class=\"reservation-badge\">";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "event", [], "any", false, true, false, 1465), "type", [], "any", true, true, false, 1465) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "event", [], "any", false, false, false, 1465), "type", [], "any", false, false, false, 1465)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "event", [], "any", false, false, false, 1465), "type", [], "any", false, false, false, 1465), "html", null, true)) : ("N/A"));
                    yield "</span>
                                    ";
                }
                // line 1467
                yield "                                </div>
                                <div class=\"reservation-details\">
                                    ";
                // line 1469
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "event", [], "any", false, false, false, 1469) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "event", [], "any", false, false, false, 1469), "date", [], "any", false, false, false, 1469))) {
                    // line 1470
                    yield "                                    <div class=\"reservation-detail\">
                                        <i class=\"ti ti-calendar\"></i>
                                        <span>";
                    // line 1472
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "event", [], "any", false, false, false, 1472), "date", [], "any", false, false, false, 1472), "d/m/Y"), "html", null, true);
                    yield "</span>
                                    </div>
                                    <div class=\"reservation-detail\">
                                        <i class=\"ti ti-clock\"></i>
                                        <span>";
                    // line 1476
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "event", [], "any", false, false, false, 1476), "date", [], "any", false, false, false, 1476), "H:i"), "html", null, true);
                    yield "</span>
                                    </div>
                                    <div class=\"reservation-detail\">
                                        <i class=\"ti ti-user\"></i>
                                        <span>";
                    // line 1480
                    yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "client", [], "any", false, true, false, 1480), "nom", [], "any", true, true, false, 1480) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "client", [], "any", false, false, false, 1480), "nom", [], "any", false, false, false, 1480)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "client", [], "any", false, false, false, 1480), "nom", [], "any", false, false, false, 1480), "html", null, true)) : ("N/A"));
                    yield "</span>
                                    </div>
                                    ";
                }
                // line 1483
                yield "                                </div>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1486
            yield "                        </div>
                    ";
        } else {
            // line 1488
            yield "                        <!-- Aucune réservation -->
                        <div class=\"no-reservations\">
                            <i class=\"ti ti-calendar-off\"></i>
                            <h5>Aucune réservation enregistrée</h5>
                            <p>Ce membre du personnel n'a aucune réservation prévue pour le moment.</p>
                            <button class=\"btn btn-sm btn-primary\">
                                <i class=\"ti ti-plus me-1\"></i>Créer une réservation
                            </button>
                        </div>
                    ";
        }
        // line 1498
        yield "                </div>
                
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-label-secondary\" data-bs-dismiss=\"modal\">
                        <i class=\"ti ti-x me-1\"></i> Fermer
                    </button>
                    ";
        // line 1504
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 1504, $this->source); })())) > 0)) {
            // line 1505
            yield "                    <div class=\"d-flex gap-2\">
                        <button type=\"button\" class=\"btn btn-outline-primary\">
                            <i class=\"ti ti-download me-1\"></i> Exporter
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\">
                            <i class=\"ti ti-plus me-1\"></i> Nouvelle réservation
                        </button>
                    </div>
                    ";
        }
        // line 1514
        yield "                </div>
            </div>
        </div>
    </div>
        </div>
      </div>

      <!-- Overlay -->
      <div class=\"layout-overlay layout-menu-toggle\"></div>
      <div class=\"drag-target\"></div>
    </div>

    <!-- Core JS -->
    <script src=\"";
        // line 1527
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1528
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1529
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1530
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1531
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/node-waves/node-waves.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1532
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/hammer/hammer.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1533
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/i18n/i18n.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1534
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/typeahead-js/typeahead.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1535
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/menu.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1536
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/sweetalert2/sweetalert2.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1537
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/apex-charts/apexcharts.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1538
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales/fr.min.js\"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialisation du calendrier
            const calendarEl = document.getElementById('calendar-holder');
            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: 'fr',
                events: ";
        // line 1549
        yield json_encode((isset($context["calendar_events"]) || array_key_exists("calendar_events", $context) ? $context["calendar_events"] : (function () { throw new RuntimeError('Variable "calendar_events" does not exist.', 1549, $this->source); })()));
        yield ",
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                height: 'auto',
                eventBackgroundColor: '#7367F0',
                eventBorderColor: '#7367F0',
                eventTextColor: '#ffffff',
                navLinks: true,
                nowIndicator: true,
                dayMaxEvents: true,
                buttonText: {
                    today: 'Aujourd\\'hui',
                    month: 'Mois',
                    week: 'Semaine',
                    day: 'Jour'
                },
                eventDidMount: function(info) {
                    const eventEl = info.el;
                    eventEl.style.boxShadow = '0 2px 6px rgba(115, 103, 240, 0.3)';
                    
                    if (info.event.extendedProps.description) {
                        new bootstrap.Tooltip(eventEl, {
                            title: info.event.extendedProps.description,
                            placement: 'top',
                            trigger: 'hover',
                            container: 'body'
                        });
                    }
                },
                eventClick: function(info) {
                    const event = info.event;
                    const eventType = event.extendedProps.type ? 
                        `<span class=\"badge bg-primary-soft text-primary\">\${event.extendedProps.type}</span>` : '';
                    
                    const eventDetails = `
                        <div class=\"text-start\">
                            <div class=\"d-flex justify-content-between align-items-center mb-2\">
                                <h5 class=\"mb-0\">\${event.title}</h5>
                                \${eventType}
                            </div>
                            <div class=\"d-flex align-items-center mb-1 text-muted\">
                                <i class=\"ti ti-calendar me-2\"></i>
                                <span>\${event.start.toLocaleDateString('fr-FR', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' })}</span>
                            </div>
                            <div class=\"d-flex align-items-center mb-2 text-muted\">
                                <i class=\"ti ti-clock me-2\"></i>
                                <span>\${event.start.toLocaleTimeString('fr-FR', { hour: '2-digit', minute: '2-digit' })}</span>
                            </div>
                            \${event.extendedProps.description ? `<p class=\"mb-0\">\${event.extendedProps.description}</p>` : ''}
                        </div>
                    `;
                    
                    Swal.fire({
                        title: 'Détails de la réservation',
                        html: eventDetails,
                        confirmButtonText: 'Fermer',
                        customClass: {
                            popup: 'border-radius-16',
                            confirmButton: 'btn btn-primary'
                        },
                        buttonsStyling: false
                    });
                }
            });
            calendar.render();
            
            // Gestion du basculement entre calendrier et liste
            const viewSwitcherBtns = document.querySelectorAll('.view-switcher-btn');
            const calendarHolder = document.getElementById('calendar-holder');
            const reservationsList = document.querySelector('.reservations-list-container');
            
            viewSwitcherBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const view = this.getAttribute('data-view');
                    
                    viewSwitcherBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    
                    if (view === 'calendar') {
                        calendarHolder.classList.remove('d-none');
                        reservationsList.classList.add('d-none');
                        calendar.updateSize();
                    } else {
                        calendarHolder.classList.add('d-none');
                        reservationsList.classList.remove('d-none');
                    }
                });
            });

            // Fonction de confirmation de suppression
            function confirmDelete(event) {
                event.preventDefault();
                Swal.fire({
                    title: 'Êtes-vous sûr?',
                    text: \"Vous ne pourrez pas annuler cette action!\",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Oui, supprimer!',
                    cancelButtonText: 'Annuler',
                    customClass: {
                        confirmButton: 'btn btn-primary me-2',
                        cancelButton: 'btn btn-label-secondary'
                    },
                    buttonsStyling: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        event.target.closest('form').submit();
                    }
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
        return "perso/show.html.twig";
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
        return array (  1823 => 1549,  1809 => 1538,  1805 => 1537,  1801 => 1536,  1797 => 1535,  1793 => 1534,  1789 => 1533,  1785 => 1532,  1781 => 1531,  1777 => 1530,  1773 => 1529,  1769 => 1528,  1765 => 1527,  1750 => 1514,  1739 => 1505,  1737 => 1504,  1729 => 1498,  1717 => 1488,  1713 => 1486,  1705 => 1483,  1699 => 1480,  1692 => 1476,  1685 => 1472,  1681 => 1470,  1679 => 1469,  1675 => 1467,  1669 => 1465,  1667 => 1464,  1663 => 1463,  1659 => 1461,  1655 => 1460,  1638 => 1445,  1636 => 1444,  1627 => 1438,  1621 => 1437,  1597 => 1416,  1593 => 1415,  1587 => 1412,  1581 => 1409,  1572 => 1403,  1557 => 1391,  1553 => 1390,  1538 => 1378,  1524 => 1367,  1503 => 1349,  1499 => 1348,  1492 => 1346,  1486 => 1343,  1482 => 1342,  1476 => 1338,  1470 => 1334,  1462 => 1332,  1460 => 1331,  1450 => 1324,  1446 => 1323,  1440 => 1320,  1433 => 1316,  1335 => 1221,  1323 => 1212,  1261 => 1153,  1236 => 1131,  1187 => 1085,  1138 => 1039,  1091 => 995,  129 => 36,  123 => 33,  119 => 32,  115 => 31,  111 => 30,  107 => 29,  101 => 26,  97 => 25,  93 => 24,  87 => 21,  83 => 20,  79 => 19,  67 => 10,  58 => 6,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\" class=\"light-style layout-navbar-fixed layout-menu-fixed\" dir=\"ltr\" data-theme=\"theme-default\" data-assets-path=\"{{ asset('') }}\" data-template=\"vertical-menu-template\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>{{ personnel.nomP }} {{ personnel.prenomP }} - Détails | GoldenTouch</title>
    <meta name=\"description\" content=\"Fiche détaillée du membre du personnel\" />

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/favicon/favicon.ico') }}\" />
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css\">

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
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/node-waves/node-waves.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/typeahead-js/typeahead.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/apex-charts/apex-charts.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/sweetalert2/sweetalert2.css') }}\" />

    <!-- Page CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/css/pages/cards-advance.css') }}\" />

    <!-- FullCalendar CSS -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css\">
    
    <style>
    #calendar-holder {
        background: white;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
        padding: 20px;
        margin-bottom: 30px;
    }

    .fc-event-custom {
        border-radius: 4px;
        font-weight: 500;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        transition: all 0.2s ease;
    }

    .fc-event-custom:hover {
        box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        transform: translateY(-2px);
    }

    .fc-toolbar {
        margin-bottom: 1.5em !important;
    }

    .fc-daygrid-event {
        padding: 3px 6px;
    }

    .fc-day-today {
        background-color: rgba(55, 136, 216, 0.1) !important;
    }

    .fc-col-header-cell {
        background: #f8f9fa;
        padding: 10px 0;
    }

    .event-popup {
        border-radius: 12px;
    }
    :root {
        --profile-primary: #7367F0;
        --profile-primary-light: rgba(115, 103, 240, 0.1);
        --profile-success: #28C76F;
        --profile-warning: #FF9F43;
        --profile-danger: #EA5455;
        --profile-text-muted: #6c757d;
        --profile-border-color: rgba(0,0,0,0.08);
    }
    
    /* Profile Header */
    .profile-header {
        position: relative;
        height: 320px;
        overflow: hidden;
        border-radius: 0.75rem;
        margin-bottom: 2.5rem;
        box-shadow: 0 4px 24px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        background-color: #f8f9fa;
    }
    
    .profile-header:hover {
        box-shadow: 0 8px 32px rgba(0,0,0,0.15);
    }
    
    .profile-cover {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .profile-header:hover .profile-cover {
        transform: scale(1.03);
    }
    
    .profile-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to bottom, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.85) 100%);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 2.5rem;
        color: white;
    }
    
    .profile-title {
        font-size: 2.5rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
        text-shadow: 0 2px 4px rgba(0,0,0,0.3);
    }
    
    /* Profile Actions */
    .profile-actions {
        position: absolute;
        top: 1.75rem;
        right: 1.75rem;
        z-index: 10;
        display: flex;
        gap: 0.75rem;
    }
    
    .profile-actions .btn {
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        transition: all 0.3s ease;
        border-radius: 50%;
        width: 42px;
        height: 42px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255,255,255,0.9);
        opacity: 0.9;
    }
    
    .profile-actions .btn:hover {
        transform: translateY(-3px) scale(1.1);
        opacity: 1;
    }

    /* New Reservations Button */
    .btn-reservations {
        position: absolute;
        top: 1.75rem;
        left: 1.75rem;
        z-index: 10;
        padding: 0.75rem 1.5rem;
        font-weight: 500;
        border-radius: 2rem;
        background: rgba(255,255,255,0.9);
        color: var(--profile-primary);
        border: 2px solid var(--profile-primary);
        box-shadow: 0 4px 12px rgba(115, 103, 240, 0.25);
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
    }

    .btn-reservations:hover {
        background: var(--profile-primary);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(115, 103, 240, 0.35);
    }

    .btn-reservations i {
        margin-right: 0.5rem;
        font-size: 1.1em;
    }
    
    /* Unified Content Section */
    .unified-info-section {
        background: white;
        border-radius: 0.75rem;
        padding: 2.5rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        border: 1px solid var(--profile-border-color);
    }
    
    .unified-info-section:hover {
        box-shadow: 0 4px 16px rgba(0,0,0,0.1);
    }
    
    /* Info Blocks */
    .info-block {
        margin-bottom: 2.5rem;
    }
    
    .info-block:last-child {
        margin-bottom: 0;
    }
    
    /* Section Headers */
    .section-header {
        border-bottom: 1px solid var(--profile-border-color);
        padding-bottom: 1rem;
        margin-bottom: 1.75rem;
        position: relative;
        font-size: 1.25rem;
        font-weight: 600;
        color: var(--profile-primary);
    }
    
    .section-header:after {
        content: '';
        position: absolute;
        bottom: -1px;
        left: 0;
        width: 50px;
        height: 3px;
        background: var(--profile-primary);
        border-radius: 3px;
    }
    
    /* Status Indicator */
    .status-indicator {
        display: inline-flex;
        align-items: center;
        padding: 0.5rem 1.25rem;
        border-radius: 2rem;
        background: rgba(115, 103, 240, 0.15);
        font-weight: 500;
    }
    
    .status-bubble {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        margin-right: 0.75rem;
        box-shadow: 0 0 0 3px rgba(255,255,255,0.2);
    }
    
    .status-bubble.available {
        background: var(--profile-success);
    }
    
    .status-bubble.unavailable {
        background: var(--profile-warning);
    }
    
    /* Info Box */
    .info-box {
        display: flex;
        align-items: center;
        padding: 1.25rem;
        background: #f8f9fa;
        border-radius: 0.75rem;
        margin-bottom: 1.25rem;
        transition: all 0.3s ease;
        border-left: 4px solid var(--profile-primary);
    }
    
    .info-box:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        background: white;
    }
    
    .info-box-icon {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1.25rem;
        background: var(--profile-primary);
        color: white;
        font-size: 1.25rem;
        box-shadow: 0 4px 8px rgba(115, 103, 240, 0.3);
    }
    
    .info-box-content h6 {
        font-weight: 600;
        margin-bottom: 0.25rem;
        color: #495057;
    }
    
    .info-box-content p {
        margin-bottom: 0;
        color: var(--profile-text-muted);
    }
    
    /* Professional Info Grid */
    .professional-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1.75rem;
    }
    
    /* Description Box */
    .description-box {
        padding: 1.5rem;
        background: #f8f9fa;
        border-radius: 0.75rem;
        line-height: 1.7;
        color: #555;
        border-left: 4px solid var(--profile-primary);
    }
    
    /* Action Buttons */
    .action-buttons {
        display: flex;
        gap: 1rem;
        margin-top: 2.5rem;
        flex-wrap: wrap;
    }
    
    .action-buttons .btn {
        padding: 0.75rem 1.5rem;
        font-weight: 500;
        border-radius: 0.5rem;
        display: inline-flex;
        align-items: center;
        transition: all 0.3s ease;
    }
    
    .action-buttons .btn i {
        margin-right: 0.5rem;
        font-size: 1.1em;
    }
    
    /* Modal personnalisé */
    .reservations-modal {
        border: none;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        background: white;
        height: 80vh; /* Hauteur relative à la vue */
        display: flex;
        flex-direction: column;
    }

    .reservations-modal .modal-header {
        border-bottom: 1px solid rgba(0,0,0,0.1);
        background: white;
        padding: 1rem 1.5rem;
        position: relative;
        flex-shrink: 0;
    }

    .reservations-modal .modal-title {
        font-weight: 600;
        color: #2d3748;
        font-size: 1.25rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .reservations-modal .modal-title i {
        font-size: 1.5rem;
        color: #7367F0;
    }

    .reservations-modal .modal-title .badge {
        font-weight: 500;
        font-size: 0.8rem;
        padding: 0.25rem 0.5rem;
        background: rgba(115, 103, 240, 0.15);
        color: #7367F0;
    }

    .reservations-modal .modal-body {
        padding: 0;
        overflow-y: auto;
        flex-grow: 1;
        position: relative;
    }

    /* Style compact pour le calendrier */
    #calendar-holder {
        background: transparent;
        border-radius: 0;
        padding: 0.5rem 1rem;
        position: relative;
        z-index: 1;
        height: 100%;
    }

    .fc .fc-toolbar {
        flex-direction: row;
        align-items: center;
        gap: 0.5rem;
        margin-bottom: 0.5rem !important;
        padding: 0.5rem 1rem;
    }

    .fc .fc-toolbar-title {
        font-size: 1rem;
        font-weight: 600;
        color: #2d3748;
        margin: 0;
    }

    .fc .fc-button {
        border-radius: 6px !important;
        padding: 0.35rem 0.75rem !important;
        font-weight: 500 !important;
        font-size: 0.8rem !important;
        border: none !important;
        box-shadow: none !important;
    }

    .fc .fc-button-primary {
        background-color: #7367F0 !important;
    }

    .fc .fc-button-primary:hover {
        background-color: #5e50e9 !important;
    }

    .fc .fc-button-group {
        display: flex;
        gap: 0.25rem;
    }

    .fc .fc-daygrid-day-number {
        font-weight: 500;
        font-size: 0.8rem;
    }

    .fc .fc-daygrid-day.fc-day-today {
        background-color: rgba(115, 103, 240, 0.1) !important;
    }

    .fc .fc-daygrid-day.fc-day-today .fc-daygrid-day-number {
        color: #7367F0;
        font-weight: 600;
    }

    .fc .fc-event {
        border-radius: 4px;
        padding: 1px 3px;
        font-size: 0.7rem;
        border: none !important;
        margin: 1px 2px;
    }

    .fc .fc-col-header-cell {
        padding: 0.25rem 0;
    }

    .fc .fc-col-header-cell-cushion {
        font-size: 0.75rem;
        font-weight: 500;
    }

    /* Style pour la liste des réservations */
    .reservations-list-container {
        height: 100%;
        overflow-y: auto;
        padding: 1rem;
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }

    .reservation-item {
        background: white;
        border-radius: 8px;
        padding: 0.75rem 1rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        border-left: 3px solid #7367F0;
    }

    .reservation-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 0.5rem;
    }

    .reservation-title {
        font-weight: 600;
        font-size: 0.9rem;
        color: #2d3748;
    }

    .reservation-badge {
        font-size: 0.7rem;
        padding: 0.2rem 0.5rem;
        border-radius: 10px;
        background: rgba(115, 103, 240, 0.1);
        color: #7367F0;
    }

    .reservation-details {
        display: flex;
        flex-direction: column;
        gap: 0.25rem;
    }

    .reservation-detail {
        display: flex;
        align-items: center;
        font-size: 0.8rem;
        color: #64748B;
    }

    .reservation-detail i {
        margin-right: 0.5rem;
        color: #7367F0;
        font-size: 0.9rem;
    }

    /* View switcher */
    .view-switcher {
        display: flex;
        background: rgba(115, 103, 240, 0.1);
        border-radius: 8px;
        padding: 2px;
        margin: 0.5rem 1rem;
        justify-content: center;
        flex-shrink: 0;
    }

    .view-switcher-btn {
        flex: 1;
        border: none;
        background: transparent;
        padding: 0.4rem 0.75rem;
        font-weight: 500;
        font-size: 0.8rem;
        color: #64748B;
        border-radius: 6px;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.25rem;
    }

    .view-switcher-btn.active {
        background: white;
        color: #7367F0;
        box-shadow: 0 1px 3px rgba(115, 103, 240, 0.2);
    }

    /* Ajustements pour le modal footer */
    .reservations-modal .modal-footer {
        border-top: 1px solid rgba(0,0,0,0.1);
        background: white;
        padding: 0.75rem 1.5rem;
        display: flex;
        justify-content: space-between;
        flex-shrink: 0;
    }

    /* Aucune réservation */
    .no-reservations {
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 2rem;
    }

    .no-reservations i {
        font-size: 3rem;
        color: #CBD5E1;
        margin-bottom: 1rem;
    }

    .no-reservations h5 {
        font-weight: 600;
        color: #2d3748;
        margin-bottom: 0.5rem;
    }

    .no-reservations p {
        color: #64748B;
        font-size: 0.9rem;
        margin-bottom: 1.5rem;
    }

    /* Alignement des boutons jour/mois/année avec aujourd'hui */
    .fc-toolbar-chunk {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .fc-today-button {
        margin-left: auto;
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
            <li class=\"menu-item\">
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
                  <a href=\"ajouter-evenement.html\" class=\"menu-link\">
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
            <li class=\"menu-item active\">
              <a href=\"packs.html\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons ti ti-package\"></i>
                <div data-i18n=\"Personnels\">Personnels</div>
              </a>
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
                <div class=\"nav-item navbar-search-wrapper mb-0\">
                  <a class=\"nav-item nav-link search-toggler d-flex align-items-center px-0\" href=\"javascript:void(0);\">
                    <i class=\"ti ti-search ti-md me-2\"></i>
                    <span class=\"d-none d-md-inline-block text-muted\">Search (Ctrl+/)</span>
                  </a>
                </div>
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
                            <i class=\"ti ti-calendar fs-4\"></i>
                          </span>
                          <a href=\"app-calendar.html\" class=\"stretched-link\">Calendar</a>
                          <small class=\"text-muted mb-0\">Appointments</small>
                        </div>
                        <div class=\"dropdown-shortcuts-item col\">
                          <span class=\"dropdown-shortcuts-icon rounded-circle mb-2\">
                            <i class=\"ti ti-file-invoice fs-4\"></i>
                          </span>
                          <a href=\"app-invoice-list.html\" class=\"stretched-link\">Invoice App</a>
                          <small class=\"text-muted mb-0\">Manage Accounts</small>
                        </div>
                      </div>
                      <div class=\"row row-bordered overflow-visible g-0\">
                        <div class=\"dropdown-shortcuts-item col\">
                          <span class=\"dropdown-shortcuts-icon rounded-circle mb-2\">
                            <i class=\"ti ti-users fs-4\"></i>
                          </span>
                          <a href=\"app-user-list.html\" class=\"stretched-link\">User App</a>
                          <small class=\"text-muted mb-0\">Manage Users</small>
                        </div>
                        <div class=\"dropdown-shortcuts-item col\">
                          <span class=\"dropdown-shortcuts-icon rounded-circle mb-2\">
                            <i class=\"ti ti-lock fs-4\"></i>
                          </span>
                          <a href=\"app-access-roles.html\" class=\"stretched-link\">Role Management</a>
                          <small class=\"text-muted mb-0\">Permission</small>
                        </div>
                      </div>
                      <div class=\"row row-bordered overflow-visible g-0\">
                        <div class=\"dropdown-shortcuts-item col\">
                          <span class=\"dropdown-shortcuts-icon rounded-circle mb-2\">
                            <i class=\"ti ti-chart-bar fs-4\"></i>
                          </span>
                          <a href=\"index.html\" class=\"stretched-link\">Dashboard</a>
                          <small class=\"text-muted mb-0\">User Profile</small>
                        </div>
                        <div class=\"dropdown-shortcuts-item col\">
                          <span class=\"dropdown-shortcuts-icon rounded-circle mb-2\">
                            <i class=\"ti ti-settings fs-4\"></i>
                          </span>
                          <a href=\"pages-account-settings-account.html\" class=\"stretched-link\">Setting</a>
                          <small class=\"text-muted mb-0\">Account Settings</small>
                        </div>
                      </div>
                      <div class=\"row row-bordered overflow-visible g-0\">
                        <div class=\"dropdown-shortcuts-item col\">
                          <span class=\"dropdown-shortcuts-icon rounded-circle mb-2\">
                            <i class=\"ti ti-help fs-4\"></i>
                          </span>
                          <a href=\"pages-help-center-landing.html\" class=\"stretched-link\">Help Center</a>
                          <small class=\"text-muted mb-0\">FAQs & Articles</small>
                        </div>
                        <div class=\"dropdown-shortcuts-item col\">
                          <span class=\"dropdown-shortcuts-icon rounded-circle mb-2\">
                            <i class=\"ti ti-square fs-4\"></i>
                          </span>
                          <a href=\"modal-examples.html\" class=\"stretched-link\">Modals</a>
                          <small class=\"text-muted mb-0\">Useful Popups</small>
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
                    <span class=\"badge bg-danger rounded-pill badge-notifications\">5</span>
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
                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                          <div class=\"d-flex\">
                            <div class=\"flex-shrink-0 me-3\">
                              <div class=\"avatar\">
                                <img src=\"{{ asset('img/avatars/1.png') }}\" alt class=\"h-auto rounded-circle\" />
                              </div>
                            </div>
                            <div class=\"flex-grow-1\">
                              <h6 class=\"mb-1\">Congratulation Lettie 🎉</h6>
                              <p class=\"mb-0\">Won the monthly best seller gold badge</p>
                              <small class=\"text-muted\">1h ago</small>
                            </div>
                            <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                ><span class=\"badge badge-dot\"></span
                              ></a>
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                ><span class=\"ti ti-x\"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                          <div class=\"d-flex\">
                            <div class=\"flex-shrink-0 me-3\">
                              <div class=\"avatar\">
                                <span class=\"avatar-initial rounded-circle bg-label-danger\">CF</span>
                              </div>
                            </div>
                            <div class=\"flex-grow-1\">
                              <h6 class=\"mb-1\">Charles Franklin</h6>
                              <p class=\"mb-0\">Accepted your connection</p>
                              <small class=\"text-muted\">12hr ago</small>
                            </div>
                            <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                ><span class=\"badge badge-dot\"></span
                              ></a>
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                ><span class=\"ti ti-x\"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                          <div class=\"d-flex\">
                            <div class=\"flex-shrink-0 me-3\">
                              <div class=\"avatar\">
                                <img src=\"{{ asset('img/avatars/2.png') }}\" alt class=\"h-auto rounded-circle\" />
                              </div>
                            </div>
                            <div class=\"flex-grow-1\">
                              <h6 class=\"mb-1\">New Message ✉️</h6>
                              <p class=\"mb-0\">You have new message from Natalie</p>
                              <small class=\"text-muted\">1h ago</small>
                            </div>
                            <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                ><span class=\"badge badge-dot\"></span
                              ></a>
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                ><span class=\"ti ti-x\"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                          <div class=\"d-flex\">
                            <div class=\"flex-shrink-0 me-3\">
                              <div class=\"avatar\">
                                <span class=\"avatar-initial rounded-circle bg-label-success\"
                                  ><i class=\"ti ti-shopping-cart\"></i
                                ></span>
                              </div>
                            </div>
                            <div class=\"flex-grow-1\">
                              <h6 class=\"mb-1\">Whoo! You have new order 🛒</h6>
                              <p class=\"mb-0\">ACME Inc. made new order \$1,154</p>
                              <small class=\"text-muted\">1 day ago</small>
                            </div>
                            <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                ><span class=\"badge badge-dot\"></span
                              ></a>
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                ><span class=\"ti ti-x\"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                          <div class=\"d-flex\">
                            <div class=\"flex-shrink-0 me-3\">
                              <div class=\"avatar\">
                                <img src=\"{{ asset('img/avatars/9.png') }}\" alt class=\"h-auto rounded-circle\" />
                              </div>
                            </div>
                            <div class=\"flex-grow-1\">
                              <h6 class=\"mb-1\">Application has been approved 🚀</h6>
                              <p class=\"mb-0\">Your ABC project application has been approved.</p>
                              <small class=\"text-muted\">2 days ago</small>
                            </div>
                            <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                ><span class=\"badge badge-dot\"></span
                              ></a>
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                ><span class=\"ti ti-x\"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                          <div class=\"d-flex\">
                            <div class=\"flex-shrink-0 me-3\">
                              <div class=\"avatar\">
                                <span class=\"avatar-initial rounded-circle bg-label-success\"
                                  ><i class=\"ti ti-chart-pie\"></i
                                ></span>
                              </div>
                            </div>
                            <div class=\"flex-grow-1\">
                              <h6 class=\"mb-1\">Monthly report is generated</h6>
                              <p class=\"mb-0\">July monthly financial report is generated</p>
                              <small class=\"text-muted\">3 days ago</small>
                            </div>
                            <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                ><span class=\"badge badge-dot\"></span
                              ></a>
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                ><span class=\"ti ti-x\"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                          <div class=\"d-flex\">
                            <div class=\"flex-shrink-0 me-3\">
                              <div class=\"avatar\">
                                <img src=\"{{ asset('img/avatars/5.png') }}\" alt class=\"h-auto rounded-circle\" />
                              </div>
                            </div>
                            <div class=\"flex-grow-1\">
                              <h6 class=\"mb-1\">Send connection request</h6>
                              <p class=\"mb-0\">Peter sent you connection request</p>
                              <small class=\"text-muted\">4 days ago</small>
                            </div>
                            <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                ><span class=\"badge badge-dot\"></span
                              ></a>
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                ><span class=\"ti ti-x\"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                          <div class=\"d-flex\">
                            <div class=\"flex-shrink-0 me-3\">
                              <div class=\"avatar\">
                                <img src=\"{{ asset('img/avatars/6.png') }}\" alt class=\"h-auto rounded-circle\" />
                              </div>
                            </div>
                            <div class=\"flex-grow-1\">
                              <h6 class=\"mb-1\">New message from Jane</h6>
                              <p class=\"mb-0\">Your have new message from Jane</p>
                              <small class=\"text-muted\">5 days ago</small>
                            </div>
                            <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                ><span class=\"badge badge-dot\"></span
                              ></a>
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                ><span class=\"ti ti-x\"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                          <div class=\"d-flex\">
                            <div class=\"flex-shrink-0 me-3\">
                              <div class=\"avatar\">
                                <span class=\"avatar-initial rounded-circle bg-label-warning\"
                                  ><i class=\"ti ti-alert-triangle\"></i
                                ></span>
                              </div>
                            </div>
                            <div class=\"flex-grow-1\">
                              <h6 class=\"mb-1\">CPU is running high</h6>
                              <p class=\"mb-0\">CPU Utilization Percent is currently at 88.63%,</p>
                              <small class=\"text-muted\">5 days ago</small>
                            </div>
                            <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                ><span class=\"badge badge-dot\"></span
                              ></a>
                              <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                ><span class=\"ti ti-x\"></span
                              ></a>
                            </div>
                          </div>
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

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class=\"content-wrapper\">
            <!-- Content -->
            <div class=\"container-xxl flex-grow-1 container-p-y\">
              <div class=\"row animate-fade-in\">
                <div class=\"col-12\">
                    <!-- Profile Header -->
                    <div class=\"profile-header position-relative\">
                        <!-- New Reservations Button -->
                        <button type=\"button\" class=\"btn-reservations\" data-bs-toggle=\"modal\" data-bs-target=\"#reservationsModal\">
                            <i class=\"ti ti-calendar\"></i> Voir les réservations ({{ reservations|length }})
                        </button>
                        
                        <div class=\"profile-actions\">
                            <a href=\"{{ path('app_perso_edit', {'idP': personnel.idP}) }}\" class=\"btn btn-icon btn-label-primary\" data-bs-toggle=\"tooltip\" title=\"Modifier\">
                                <i class=\"ti ti-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"{{ path('app_perso_delete', {'idP': personnel.idP}) }}\" onsubmit=\"return confirmDelete(event)\" class=\"d-inline\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ personnel.idP) }}\">
                                <button type=\"submit\" class=\"btn btn-icon btn-label-danger\" data-bs-toggle=\"tooltip\" title=\"Supprimer\">
                                    <i class=\"ti ti-trash\"></i>
                                </button>
                            </form>
                        </div>
                        
                        {% if personnel.imageUrl %}
                        <img src=\"{{ asset('uploads/personnel/' ~ personnel.imageUrl) }}\" class=\"profile-cover\" alt=\"{{ personnel.nomP }}\">
                        {% else %}
                        <div class=\"profile-cover bg-secondary d-flex align-items-center justify-content-center\">
                            <i class=\"ti ti-user text-white\" style=\"font-size: 5rem;\"></i>
                        </div>
                        {% endif %}
                        
                        <div class=\"profile-overlay\">
                            <nav aria-label=\"breadcrumb\">
                                <ol class=\"breadcrumb breadcrumb-dark\">
                                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_perso_index') }}\" class=\"text-white-50\">Personnel</a></li>
                                    <li class=\"breadcrumb-item active text-white\">{{ personnel.nomP }}</li>
                                </ol>
                            </nav>
                            <h1 class=\"profile-title\">{{ personnel.nomP }} {{ personnel.prenomP }}</h1>
                            <div class=\"status-indicator mt-2\">
                                <div class=\"status-bubble {{ personnel.statutP == 'Disponible' ? 'available' : 'unavailable' }}\"></div>
                                <span>{{ personnel.statutP }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Unified Information Section -->
                    <div class=\"unified-info-section delay-1\">
                        <!-- Professional Info Block -->
                        <div class=\"info-block\">
                            <h5 class=\"section-header\">Informations professionnelles</h5>
                            <div class=\"professional-grid\">
                                <!-- Service -->
                                <div class=\"info-box\">
                                    <div class=\"info-box-icon\">
                                        <i class=\"ti ti-briefcase\"></i>
                                    </div>
                                    <div class=\"info-box-content\">
                                        <h6 class=\"mb-1\">Service</h6>
                                        <p class=\"mb-0\">{{ personnel.serviceP }}</p>
                                    </div>
                                </div>
                                
                                <!-- Tarif -->
                                <div class=\"info-box\">
                                    <div class=\"info-box-icon\">
                                        <i class=\"ti ti-currency-dollar\"></i>
                                    </div>
                                    <div class=\"info-box-content\">
                                        <h6 class=\"mb-1\">Tarif Horaire</h6>
                                        <p class=\"mb-0\">{{ personnel.tarifP|number_format(0, ',', ' ') }} TND</p>
                                    </div>
                                </div>
                                
                                <!-- Statut -->
                                <div class=\"info-box\">
                                    <div class=\"info-box-icon\">
                                        <i class=\"ti ti-user-check\"></i>
                                    </div>
                                    <div class=\"info-box-content\">
                                        <h6 class=\"mb-1\">Statut</h6>
                                        <p class=\"mb-0\">
                                            <span class=\"badge bg-{{ personnel.statutP == 'Disponible' ? 'success' : 'warning' }}\">
                                                {{ personnel.statutP }}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Description Block -->
                        <div class=\"info-block delay-2\">
                            <h5 class=\"section-header\">Description</h5>
                            <div class=\"description-box\">
                                {{ personnel.descriptionP ? personnel.descriptionP|nl2br : 'Aucune description disponible pour ce membre du personnel.' }}
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class=\"action-buttons delay-3\">
                            <a href=\"{{ path('app_perso_index') }}\" class=\"btn btn-outline-secondary\">
                                <i class=\"ti ti-arrow-left me-1\"></i> Retour à la liste
                            </a>
                            <a href=\"{{ path('app_perso_edit', {'idP': personnel.idP}) }}\" class=\"btn btn-primary\">
                                <i class=\"ti ti-edit me-1\"></i> Modifier
                            </a>
                            <form method=\"post\" action=\"{{ path('app_perso_delete', {'idP': personnel.idP}) }}\" onsubmit=\"return confirmDelete(event)\" class=\"d-inline\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ personnel.idP) }}\">
                                <button type=\"submit\" class=\"btn btn-outline-danger\">
                                    <i class=\"ti ti-trash me-1\"></i> Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
    </div>
    <!-- / Content wrapper -->

    <!-- Modal pour afficher les réservations -->
    <div class=\"modal fade\" id=\"reservationsModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content reservations-modal\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">
                        <i class=\"ti ti-calendar-stats\"></i>
                        <span>Planning de {{ personnel.nomP }} {{ personnel.prenomP }}</span>
                        <span class=\"badge\">{{ reservations|length }} réservation(s)</span>
                    </h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                
                <div class=\"modal-body\">
                    {% if reservations|length > 0 %}
                        <!-- Sélecteur de vue -->
                        <div class=\"view-switcher\">
                            <button type=\"button\" class=\"view-switcher-btn active\" data-view=\"calendar\">
                                <i class=\"ti ti-calendar\"></i> Calendrier
                            </button>
                            <button type=\"button\" class=\"view-switcher-btn\" data-view=\"list\">
                                <i class=\"ti ti-list\"></i> Liste
                            </button>
                        </div>
                        
                        <!-- Vue Calendrier -->
                        <div id=\"calendar-holder\"></div>
                        
                        <!-- Vue Liste -->
                        <div class=\"reservations-list-container d-none\">
                            {% for reservation in reservations %}
                            <div class=\"reservation-item\">
                                <div class=\"reservation-header\">
                                    <h6 class=\"reservation-title\">{{ reservation.event.nom ?? 'N/A' }}</h6>
                                    {% if reservation.event %}
                                        <span class=\"reservation-badge\">{{ reservation.event.type ?? 'N/A' }}</span>
                                    {% endif %}
                                </div>
                                <div class=\"reservation-details\">
                                    {% if reservation.event and reservation.event.date %}
                                    <div class=\"reservation-detail\">
                                        <i class=\"ti ti-calendar\"></i>
                                        <span>{{ reservation.event.date|date('d/m/Y') }}</span>
                                    </div>
                                    <div class=\"reservation-detail\">
                                        <i class=\"ti ti-clock\"></i>
                                        <span>{{ reservation.event.date|date('H:i') }}</span>
                                    </div>
                                    <div class=\"reservation-detail\">
                                        <i class=\"ti ti-user\"></i>
                                        <span>{{ reservation.client.nom ?? 'N/A' }}</span>
                                    </div>
                                    {% endif %}
                                </div>
                            </div>
                            {% endfor %}
                        </div>
                    {% else %}
                        <!-- Aucune réservation -->
                        <div class=\"no-reservations\">
                            <i class=\"ti ti-calendar-off\"></i>
                            <h5>Aucune réservation enregistrée</h5>
                            <p>Ce membre du personnel n'a aucune réservation prévue pour le moment.</p>
                            <button class=\"btn btn-sm btn-primary\">
                                <i class=\"ti ti-plus me-1\"></i>Créer une réservation
                            </button>
                        </div>
                    {% endif %}
                </div>
                
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-label-secondary\" data-bs-dismiss=\"modal\">
                        <i class=\"ti ti-x me-1\"></i> Fermer
                    </button>
                    {% if reservations|length > 0 %}
                    <div class=\"d-flex gap-2\">
                        <button type=\"button\" class=\"btn btn-outline-primary\">
                            <i class=\"ti ti-download me-1\"></i> Exporter
                        </button>
                        <button type=\"button\" class=\"btn btn-primary\">
                            <i class=\"ti ti-plus me-1\"></i> Nouvelle réservation
                        </button>
                    </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
        </div>
      </div>

      <!-- Overlay -->
      <div class=\"layout-overlay layout-menu-toggle\"></div>
      <div class=\"drag-target\"></div>
    </div>

    <!-- Core JS -->
    <script src=\"{{ asset('vendor/libs/jquery/jquery.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/popper/popper.js') }}\"></script>
    <script src=\"{{ asset('vendor/js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/node-waves/node-waves.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/hammer/hammer.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/i18n/i18n.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/typeahead-js/typeahead.js') }}\"></script>
    <script src=\"{{ asset('vendor/js/menu.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/sweetalert2/sweetalert2.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/apex-charts/apexcharts.js') }}\"></script>
    <script src=\"{{ asset('js/main.js') }}\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales/fr.min.js\"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialisation du calendrier
            const calendarEl = document.getElementById('calendar-holder');
            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: 'fr',
                events: {{ calendar_events|json_encode|raw }},
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                height: 'auto',
                eventBackgroundColor: '#7367F0',
                eventBorderColor: '#7367F0',
                eventTextColor: '#ffffff',
                navLinks: true,
                nowIndicator: true,
                dayMaxEvents: true,
                buttonText: {
                    today: 'Aujourd\\'hui',
                    month: 'Mois',
                    week: 'Semaine',
                    day: 'Jour'
                },
                eventDidMount: function(info) {
                    const eventEl = info.el;
                    eventEl.style.boxShadow = '0 2px 6px rgba(115, 103, 240, 0.3)';
                    
                    if (info.event.extendedProps.description) {
                        new bootstrap.Tooltip(eventEl, {
                            title: info.event.extendedProps.description,
                            placement: 'top',
                            trigger: 'hover',
                            container: 'body'
                        });
                    }
                },
                eventClick: function(info) {
                    const event = info.event;
                    const eventType = event.extendedProps.type ? 
                        `<span class=\"badge bg-primary-soft text-primary\">\${event.extendedProps.type}</span>` : '';
                    
                    const eventDetails = `
                        <div class=\"text-start\">
                            <div class=\"d-flex justify-content-between align-items-center mb-2\">
                                <h5 class=\"mb-0\">\${event.title}</h5>
                                \${eventType}
                            </div>
                            <div class=\"d-flex align-items-center mb-1 text-muted\">
                                <i class=\"ti ti-calendar me-2\"></i>
                                <span>\${event.start.toLocaleDateString('fr-FR', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' })}</span>
                            </div>
                            <div class=\"d-flex align-items-center mb-2 text-muted\">
                                <i class=\"ti ti-clock me-2\"></i>
                                <span>\${event.start.toLocaleTimeString('fr-FR', { hour: '2-digit', minute: '2-digit' })}</span>
                            </div>
                            \${event.extendedProps.description ? `<p class=\"mb-0\">\${event.extendedProps.description}</p>` : ''}
                        </div>
                    `;
                    
                    Swal.fire({
                        title: 'Détails de la réservation',
                        html: eventDetails,
                        confirmButtonText: 'Fermer',
                        customClass: {
                            popup: 'border-radius-16',
                            confirmButton: 'btn btn-primary'
                        },
                        buttonsStyling: false
                    });
                }
            });
            calendar.render();
            
            // Gestion du basculement entre calendrier et liste
            const viewSwitcherBtns = document.querySelectorAll('.view-switcher-btn');
            const calendarHolder = document.getElementById('calendar-holder');
            const reservationsList = document.querySelector('.reservations-list-container');
            
            viewSwitcherBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const view = this.getAttribute('data-view');
                    
                    viewSwitcherBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    
                    if (view === 'calendar') {
                        calendarHolder.classList.remove('d-none');
                        reservationsList.classList.add('d-none');
                        calendar.updateSize();
                    } else {
                        calendarHolder.classList.add('d-none');
                        reservationsList.classList.remove('d-none');
                    }
                });
            });

            // Fonction de confirmation de suppression
            function confirmDelete(event) {
                event.preventDefault();
                Swal.fire({
                    title: 'Êtes-vous sûr?',
                    text: \"Vous ne pourrez pas annuler cette action!\",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Oui, supprimer!',
                    cancelButtonText: 'Annuler',
                    customClass: {
                        confirmButton: 'btn btn-primary me-2',
                        cancelButton: 'btn btn-label-secondary'
                    },
                    buttonsStyling: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        event.target.closest('form').submit();
                    }
                });
            }
        });
    </script>
</body>
</html>", "perso/show.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\perso\\show.html.twig");
    }
}
