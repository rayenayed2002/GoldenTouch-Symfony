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
class __TwigTemplate_e75cb49d0c8e3c1792ff02f4af52637d extends Template
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
<html lang=\"en\" class=\"light-style layout-navbar-fixed layout-menu-fixed\" dir=\"ltr\" data-theme=\"theme-default\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>Statistiques Avancées - Admin</title>
    <meta name=\"description\" content=\"Admin advanced statistics\" />
    
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
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css\" />
    
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
    <!-- Layout wrapper -->
    <div class=\"layout-wrapper layout-content-navbar\">
        <div class=\"layout-container\">
            <!-- Menu -->
            <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">
                <div class=\"app-brand demo\">
                    <a href=\"index.html\" class=\"app-brand-link\">
                        <span class=\"app-brand-logo demo\">
                            <svg width=\"32\" height=\"22\" viewBox=\"0 0 32 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z\" fill=\"#7367F0\" />
                            </svg>
                        </span>
                        <span class=\"app-brand-text demo menu-text fw-bold\">Golden Touch</span>
                    </a>
                </div>

                <div class=\"menu-inner-shadow\"></div>

                <ul class=\"menu-inner py-1\">
                    <li class=\"menu-item\">
                        <a href=\"";
        // line 361
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\" class=\"menu-link\">
                            <i class=\"menu-icon tf-icons ti ti-dashboard\"></i>
                            <div>Dashboard</div>
                        </a>
                    </li>
                    
                    <!-- Statistiques -->
                    <li class=\"menu-item active\">
                        <a href=\"";
        // line 369
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_advanced_statistiques_index");
        yield "\" class=\"menu-link\">
                            <i class=\"menu-icon tf-icons ti ti-chart-bar\"></i>
                            <div>Statistiques</div>
                        </a>
                    </li>

                    <!-- Packs -->
                    <li class=\"menu-item\">
                        <a href=\"";
        // line 377
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pack_index");
        yield "\" class=\"menu-link\">
                            <i class=\"menu-icon tf-icons ti ti-package\"></i>
                            <div>Packs</div>
                        </a>
                    </li>

                    <!-- Events -->
                    <li class=\"menu-item\">
                        <a href=\"#\" class=\"menu-link\">
                            <i class=\"menu-icon tf-icons ti ti-calendar-event\"></i>
                            <div>Events</div>
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

                    <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
                        <!-- Search -->
                        <div class=\"navbar-nav align-items-center\">
                            <div class=\"nav-item navbar-search-wrapper mb-0\">
                                <a class=\"nav-item nav-link search-toggler d-flex align-items-center px-0\" href=\"javascript:void(0);\">
                                    <i class=\"ti ti-search ti-md me-2\"></i>
                                    <span class=\"d-none d-md-inline-block text-muted\">Search</span>
                                </a>
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
                            <!-- User -->
                            <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                                    <div class=\"avatar avatar-online\">
                                        <img src=\"";
        // line 421
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
        // line 430
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatars/1.png"), "html", null, true);
        yield "\" alt class=\"h-auto rounded-circle\">
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <span class=\"fw-semibold d-block\">Admin</span>
                                                    <small class=\"text-muted\">Administrator</small>
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
                                            <span class=\"align-middle\">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"#\">
                                            <i class=\"ti ti-settings me-2 ti-sm\"></i>
                                            <span class=\"align-middle\">Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
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
                                        <div class=\"d-flex gap-3\">
                                            <button class=\"btn btn-primary d-flex align-items-center gap-2\">
                                                <i class=\"ri-download-cloud-2-line\"></i> Télécharger Rapport
                                            </button>
                                            <button class=\"btn btn-light\" id=\"refreshStats\">
                                                <i class=\"ri-refresh-line\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Key Metrics -->
                        <div class=\"row mb-4\">
                            <!-- Total Packs -->
                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card stat-card bg-primary bg-opacity-10 cursor-pointer\" onclick=\"showAdvancedStatDetails('packs')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Total Packs</h6>
                                            <h2 class=\"mb-0\">";
        // line 497
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packStats"]) || array_key_exists("packStats", $context) ? $context["packStats"] : (function () { throw new RuntimeError('Variable "packStats" does not exist.', 497, $this->source); })()), "total_packs", [], "any", false, false, false, 497), "html", null, true);
        yield "</h2>
                                            <small class=\"text-success d-flex align-items-center mt-2\">
                                                <i class=\"ri-arrow-up-line me-1\"></i> +";
        // line 499
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packStats"]) || array_key_exists("packStats", $context) ? $context["packStats"] : (function () { throw new RuntimeError('Variable "packStats" does not exist.', 499, $this->source); })()), "growth_rate", [], "any", false, false, false, 499), "html", null, true);
        yield "%
                                            </small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-package-line text-primary\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-primary\" style=\"width: ";
        // line 507
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packStats"]) || array_key_exists("packStats", $context) ? $context["packStats"] : (function () { throw new RuntimeError('Variable "packStats" does not exist.', 507, $this->source); })()), "growth_rate", [], "any", false, false, false, 507), "html", null, true);
        yield "%\"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Total Users -->
                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"dashboard-card stat-card bg-success bg-opacity-10 cursor-pointer\" onclick=\"showAdvancedStatDetails('users')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Total Utilisateurs</h6>
                                            <h2 class=\"mb-0\">";
        // line 518
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userStats"]) || array_key_exists("userStats", $context) ? $context["userStats"] : (function () { throw new RuntimeError('Variable "userStats" does not exist.', 518, $this->source); })()), "total_users", [], "any", false, false, false, 518), "html", null, true);
        yield "</h2>
                                            <small class=\"text-success d-flex align-items-center mt-2\">
                                                <i class=\"ri-arrow-up-line me-1\"></i> +";
        // line 520
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userStats"]) || array_key_exists("userStats", $context) ? $context["userStats"] : (function () { throw new RuntimeError('Variable "userStats" does not exist.', 520, $this->source); })()), "growth_rate", [], "any", false, false, false, 520), "html", null, true);
        yield "%
                                            </small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-user-line text-success\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-success\" style=\"width: ";
        // line 528
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userStats"]) || array_key_exists("userStats", $context) ? $context["userStats"] : (function () { throw new RuntimeError('Variable "userStats" does not exist.', 528, $this->source); })()), "growth_rate", [], "any", false, false, false, 528), "html", null, true);
        yield "%\"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Most Sold Pack -->
                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                                <div class=\"dashboard-card stat-card bg-warning bg-opacity-10 cursor-pointer\" onclick=\"showAdvancedStatDetails('mostSoldPack')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Pack le Plus Vendu</h6>
                                            <h2 class=\"mb-0\">";
        // line 539
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mostSoldPack"]) || array_key_exists("mostSoldPack", $context) ? $context["mostSoldPack"] : (function () { throw new RuntimeError('Variable "mostSoldPack" does not exist.', 539, $this->source); })()), "total_sales", [], "any", false, false, false, 539), "html", null, true);
        yield "</h2>
                                            <small class=\"text-muted d-flex align-items-center mt-2\">
                                                ";
        // line 541
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["mostSoldPack"]) || array_key_exists("mostSoldPack", $context) ? $context["mostSoldPack"] : (function () { throw new RuntimeError('Variable "mostSoldPack" does not exist.', 541, $this->source); })()), "description", [], "any", false, false, false, 541)) > 20)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["mostSoldPack"]) || array_key_exists("mostSoldPack", $context) ? $context["mostSoldPack"] : (function () { throw new RuntimeError('Variable "mostSoldPack" does not exist.', 541, $this->source); })()), "description", [], "any", false, false, false, 541), 0, 20) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mostSoldPack"]) || array_key_exists("mostSoldPack", $context) ? $context["mostSoldPack"] : (function () { throw new RuntimeError('Variable "mostSoldPack" does not exist.', 541, $this->source); })()), "description", [], "any", false, false, false, 541), "html", null, true)));
        yield "
                                            </small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-award-line text-warning\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-warning\" style=\"width: 65%\"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Average Pack Price -->
                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                                <div class=\"dashboard-card stat-card bg-info bg-opacity-10 cursor-pointer\" onclick=\"showAdvancedStatDetails('avgPrice')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Prix Moyen des Packs</h6>
                                            <h2 class=\"mb-0\">€";
        // line 560
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["averagePackPrice"]) || array_key_exists("averagePackPrice", $context) ? $context["averagePackPrice"] : (function () { throw new RuntimeError('Variable "averagePackPrice" does not exist.', 560, $this->source); })()), "html", null, true);
        yield "</h2>
                                            <small class=\"text-muted d-flex align-items-center mt-2\">
                                                Basé sur tous les packs
                                            </small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-money-euro-circle-line text-info\"></i>
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
                                            <i class=\"ri-more-2-fill\"></i>
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
        // line 634
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeInactivePacks"]) || array_key_exists("activeInactivePacks", $context) ? $context["activeInactivePacks"] : (function () { throw new RuntimeError('Variable "activeInactivePacks" does not exist.', 634, $this->source); })()), "active_packs", [], "any", false, false, false, 634), "html", null, true);
        yield "</h5>
                                            <p class=\"text-muted\">Packs Actifs</p>
                                        </div>
                                        <div class=\"text-center\">
                                            <h5 class=\"mb-0\">";
        // line 638
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeInactivePacks"]) || array_key_exists("activeInactivePacks", $context) ? $context["activeInactivePacks"] : (function () { throw new RuntimeError('Variable "activeInactivePacks" does not exist.', 638, $this->source); })()), "inactive_packs", [], "any", false, false, false, 638), "html", null, true);
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
        // line 664
        $context["totalReservations"] = 0;
        // line 665
        yield "                                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locationReservations"]) || array_key_exists("locationReservations", $context) ? $context["locationReservations"] : (function () { throw new RuntimeError('Variable "locationReservations" does not exist.', 665, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 666
            yield "                                                    ";
            $context["totalReservations"] = ((isset($context["totalReservations"]) || array_key_exists("totalReservations", $context) ? $context["totalReservations"] : (function () { throw new RuntimeError('Variable "totalReservations" does not exist.', 666, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["location"], "reservation_count", [], "any", false, false, false, 666));
            // line 667
            yield "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 668
        yield "                                                
                                                ";
        // line 669
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locationReservations"]) || array_key_exists("locationReservations", $context) ? $context["locationReservations"] : (function () { throw new RuntimeError('Variable "locationReservations" does not exist.', 669, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 670
            yield "                                                    <tr>
                                                        <td>";
            // line 671
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location", [], "any", false, false, false, 671), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 672
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "reservation_count", [], "any", false, false, false, 672), "html", null, true);
            yield "</td>
                                                        <td>
                                                            ";
            // line 674
            $context["percentage"] = ((((isset($context["totalReservations"]) || array_key_exists("totalReservations", $context) ? $context["totalReservations"] : (function () { throw new RuntimeError('Variable "totalReservations" does not exist.', 674, $this->source); })()) > 0)) ? (Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["location"], "reservation_count", [], "any", false, false, false, 674) / (isset($context["totalReservations"]) || array_key_exists("totalReservations", $context) ? $context["totalReservations"] : (function () { throw new RuntimeError('Variable "totalReservations" does not exist.', 674, $this->source); })())) * 100))) : (0));
            // line 675
            yield "                                                            <div class=\"d-flex align-items-center\">
                                                                <div class=\"progress flex-grow-1 me-2\" style=\"height: 6px;\">
                                                                    <div class=\"progress-bar bg-primary\" style=\"width: ";
            // line 677
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 677, $this->source); })()), "html", null, true);
            yield "%\"></div>
                                                                </div>
                                                                <span>";
            // line 679
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 679, $this->source); })()), "html", null, true);
            yield "%</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 684
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
        // line 698
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 698, $this->source); })()), "monthly_data", [], "any", false, false, false, 698), 0, [], "array", false, false, false, 698), "month_name", [], "any", false, false, false, 698), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 698, $this->source); })()), "monthly_data", [], "any", false, false, false, 698), 11, [], "array", false, false, false, 698), "month_name", [], "any", false, false, false, 698), "html", null, true);
        yield "</p>
                                        </div>
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"me-4\">
                                                <h6 class=\"mb-0\">Revenu Total</h6>
                                                <h4 class=\"mb-0\">€";
        // line 703
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 703, $this->source); })()), "total_revenue", [], "any", false, false, false, 703), 2, ",", " "), "html", null, true);
        yield "</h4>
                                            </div>
                                            <div>
                                                <span class=\"badge bg-";
        // line 706
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 706, $this->source); })()), "year_over_year_growth", [], "any", false, false, false, 706) > 0)) ? ("success") : ("danger"));
        yield " p-2\">
                                                    <i class=\"ri-";
        // line 707
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 707, $this->source); })()), "year_over_year_growth", [], "any", false, false, false, 707) > 0)) ? ("arrow-up") : ("arrow-down"));
        yield "-line me-1\"></i>
                                                    ";
        // line 708
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 708, $this->source); })()), "year_over_year_growth", [], "any", false, false, false, 708), "html", null, true);
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
        // line 719
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 719, $this->source); })()), "total_sales", [], "any", false, false, false, 719), "html", null, true);
        yield "</h4>
                                        </div>
                                        <div class=\"col-md-4 text-center\">
                                            <h6 class=\"text-muted\">Revenu Moyen par Vente</h6>
                                            <h4>€";
        // line 723
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 723, $this->source); })()), "avg_revenue_per_sale", [], "any", false, false, false, 723), 2, ",", " "), "html", null, true);
        yield "</h4>
                                        </div>
                                        <div class=\"col-md-4 text-center\">
                                            <h6 class=\"text-muted\">Croissance Annuelle</h6>
                                            <h4 class=\"text-";
        // line 727
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 727, $this->source); })()), "year_over_year_growth", [], "any", false, false, false, 727) > 0)) ? ("success") : ("danger"));
        yield "\">
                                                ";
        // line 728
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 728, $this->source); })()), "year_over_year_growth", [], "any", false, false, false, 728) > 0)) ? ("+") : (""));
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 728, $this->source); })()), "year_over_year_growth", [], "any", false, false, false, 728), "html", null, true);
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
        // line 743
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerSatisfaction"]) || array_key_exists("customerSatisfaction", $context) ? $context["customerSatisfaction"] : (function () { throw new RuntimeError('Variable "customerSatisfaction" does not exist.', 743, $this->source); })()), "total_reviews", [], "any", false, false, false, 743), "html", null, true);
        yield " avis</p>
                                        </div>
                                        <div>
                                            <h2 class=\"mb-0\">";
        // line 746
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerSatisfaction"]) || array_key_exists("customerSatisfaction", $context) ? $context["customerSatisfaction"] : (function () { throw new RuntimeError('Variable "customerSatisfaction" does not exist.', 746, $this->source); })()), "avg_rating", [], "any", false, false, false, 746), "html", null, true);
        yield "/5</h2>
                                        </div>
                                    </div>
                                    <div class=\"rating-bars mb-4\">
                                        ";
        // line 750
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(5, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 751
            yield "                                            <div class=\"d-flex align-items-center mb-2\">
                                                <div class=\"me-2\" style=\"width: 30px;\">";
            // line 752
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield " ★</div>
                                                <div class=\"progress satisfaction-bar flex-grow-1 me-2\">
                                                    ";
            // line 754
            $context["percentage"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerSatisfaction"]) || array_key_exists("customerSatisfaction", $context) ? $context["customerSatisfaction"] : (function () { throw new RuntimeError('Variable "customerSatisfaction" does not exist.', 754, $this->source); })()), "total_reviews", [], "any", false, false, false, 754) > 0)) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerSatisfaction"]) || array_key_exists("customerSatisfaction", $context) ? $context["customerSatisfaction"] : (function () { throw new RuntimeError('Variable "customerSatisfaction" does not exist.', 754, $this->source); })()), "rating_distribution", [], "any", false, false, false, 754), $context["i"], [], "array", false, false, false, 754) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerSatisfaction"]) || array_key_exists("customerSatisfaction", $context) ? $context["customerSatisfaction"] : (function () { throw new RuntimeError('Variable "customerSatisfaction" does not exist.', 754, $this->source); })()), "total_reviews", [], "any", false, false, false, 754)) * 100)) : (0));
            // line 755
            yield "                                                    <div class=\"progress-bar bg-";
            yield ((($context["i"] >= 4)) ? ("success") : (((($context["i"] == 3)) ? ("warning") : ("danger"))));
            yield "\" style=\"width: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 755, $this->source); })()), "html", null, true);
            yield "%\"></div>
                                                </div>
                                                <div style=\"width: 50px;\">";
            // line 757
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerSatisfaction"]) || array_key_exists("customerSatisfaction", $context) ? $context["customerSatisfaction"] : (function () { throw new RuntimeError('Variable "customerSatisfaction" does not exist.', 757, $this->source); })()), "rating_distribution", [], "any", false, false, false, 757), $context["i"], [], "array", false, false, false, 757), "html", null, true);
            yield "</div>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 760
        yield "                                    </div>
                                    <div class=\"text-center\">
                                        <div class=\"rating-circle mx-auto\">
                                            <svg viewBox=\"0 0 36 36\" class=\"circular-chart\">
                                                <path class=\"circle-bg\" d=\"M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831\"/>
                                                <path class=\"circle\" stroke-dasharray=\"";
        // line 765
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerSatisfaction"]) || array_key_exists("customerSatisfaction", $context) ? $context["customerSatisfaction"] : (function () { throw new RuntimeError('Variable "customerSatisfaction" does not exist.', 765, $this->source); })()), "satisfaction_rate", [], "any", false, false, false, 765), "html", null, true);
        yield ", 100\" d=\"M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831\"/>
                                                <text x=\"18\" y=\"20.35\" class=\"percentage\">";
        // line 766
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerSatisfaction"]) || array_key_exists("customerSatisfaction", $context) ? $context["customerSatisfaction"] : (function () { throw new RuntimeError('Variable "customerSatisfaction" does not exist.', 766, $this->source); })()), "satisfaction_rate", [], "any", false, false, false, 766), "html", null, true);
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
        // line 796
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packPerformanceComparison"]) || array_key_exists("packPerformanceComparison", $context) ? $context["packPerformanceComparison"] : (function () { throw new RuntimeError('Variable "packPerformanceComparison" does not exist.', 796, $this->source); })()), "current_month", [], "any", false, false, false, 796), "html", null, true);
        yield " vs ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packPerformanceComparison"]) || array_key_exists("packPerformanceComparison", $context) ? $context["packPerformanceComparison"] : (function () { throw new RuntimeError('Variable "packPerformanceComparison" does not exist.', 796, $this->source); })()), "previous_month", [], "any", false, false, false, 796), "html", null, true);
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
        // line 813
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packPerformanceComparison"]) || array_key_exists("packPerformanceComparison", $context) ? $context["packPerformanceComparison"] : (function () { throw new RuntimeError('Variable "packPerformanceComparison" does not exist.', 813, $this->source); })()), "comparison_data", [], "any", false, false, false, 813));
        foreach ($context['_seq'] as $context["_key"] => $context["pack"]) {
            // line 814
            yield "                                                    <tr>
                                                        <td>";
            // line 815
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "description", [], "any", false, false, false, 815)) > 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "description", [], "any", false, false, false, 815), 0, 30) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "description", [], "any", false, false, false, 815), "html", null, true)));
            yield "</td>
                                                        <td>";
            // line 816
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "current_month_sales", [], "any", false, false, false, 816), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 817
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "previous_month_sales", [], "any", false, false, false, 817), "html", null, true);
            yield "</td>
                                                        <td>
                                                            <span class=\"badge bg-";
            // line 819
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "sales_growth", [], "any", false, false, false, 819) > 0)) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "sales_growth", [], "any", false, false, false, 819) < 0)) ? ("danger") : ("secondary"))));
            yield "\">
                                                                ";
            // line 820
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "sales_growth", [], "any", false, false, false, 820) > 0)) ? ("+") : (""));
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "sales_growth", [], "any", false, false, false, 820), "html", null, true);
            yield "%
                                                            </span>
                                                        </td>
                                                        <td>€";
            // line 823
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "current_month_revenue", [], "any", false, false, false, 823), 2, ",", " "), "html", null, true);
            yield "</td>
                                                        <td>€";
            // line 824
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "previous_month_revenue", [], "any", false, false, false, 824), 2, ",", " "), "html", null, true);
            yield "</td>
                                                        <td>
                                                            <span class=\"badge bg-";
            // line 826
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "revenue_growth", [], "any", false, false, false, 826) > 0)) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "revenue_growth", [], "any", false, false, false, 826) < 0)) ? ("danger") : ("secondary"))));
            yield "\">
                                                                ";
            // line 827
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "revenue_growth", [], "any", false, false, false, 827) > 0)) ? ("+") : (""));
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "revenue_growth", [], "any", false, false, false, 827), "html", null, true);
            yield "%
                                                            </span>
                                                        </td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pack'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 832
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
        // line 891
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["topPerformingLocations"]) || array_key_exists("topPerformingLocations", $context) ? $context["topPerformingLocations"] : (function () { throw new RuntimeError('Variable "topPerformingLocations" does not exist.', 891, $this->source); })()), "locations", [], "any", false, false, false, 891), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 892
            yield "                                                    <tr>
                                                        <td>";
            // line 893
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location", [], "any", false, false, false, 893), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 894
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "reservation_count", [], "any", false, false, false, 894), "html", null, true);
            yield "</td>
                                                        <td>€";
            // line 895
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "total_revenue", [], "any", false, false, false, 895), 2, ",", " "), "html", null, true);
            yield "</td>
                                                        <td>
                                                            <div class=\"d-flex align-items-center\">
                                                                <div class=\"progress flex-grow-1 me-2\" style=\"height: 6px;\">
                                                                    <div class=\"progress-bar bg-primary\" style=\"width: ";
            // line 899
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "revenue_percentage", [], "any", false, false, false, 899), "html", null, true);
            yield "%\"></div>
                                                                </div>
                                                                <span>";
            // line 901
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "revenue_percentage", [], "any", false, false, false, 901), "html", null, true);
            yield "%</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 906
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
        // line 924
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversionRates"]) || array_key_exists("conversionRates", $context) ? $context["conversionRates"] : (function () { throw new RuntimeError('Variable "conversionRates" does not exist.', 924, $this->source); })()), "view_to_reservation_rate", [], "any", false, false, false, 924), "html", null, true);
        yield "%</h3>
                                                <small>";
        // line 925
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversionRates"]) || array_key_exists("conversionRates", $context) ? $context["conversionRates"] : (function () { throw new RuntimeError('Variable "conversionRates" does not exist.', 925, $this->source); })()), "total_reservations", [], "any", false, false, false, 925), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversionRates"]) || array_key_exists("conversionRates", $context) ? $context["conversionRates"] : (function () { throw new RuntimeError('Variable "conversionRates" does not exist.', 925, $this->source); })()), "total_views", [], "any", false, false, false, 925), "html", null, true);
        yield "</small>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4 text-center\">
                                            <div class=\"metric-item p-3\">
                                                <h6 class=\"text-muted\">Réservations → Confirmations</h6>
                                                <h3>";
        // line 931
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversionRates"]) || array_key_exists("conversionRates", $context) ? $context["conversionRates"] : (function () { throw new RuntimeError('Variable "conversionRates" does not exist.', 931, $this->source); })()), "reservation_to_confirmation_rate", [], "any", false, false, false, 931), "html", null, true);
        yield "%</h3>
                                                <small>";
        // line 932
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversionRates"]) || array_key_exists("conversionRates", $context) ? $context["conversionRates"] : (function () { throw new RuntimeError('Variable "conversionRates" does not exist.', 932, $this->source); })()), "confirmed_reservations", [], "any", false, false, false, 932), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversionRates"]) || array_key_exists("conversionRates", $context) ? $context["conversionRates"] : (function () { throw new RuntimeError('Variable "conversionRates" does not exist.', 932, $this->source); })()), "total_reservations", [], "any", false, false, false, 932), "html", null, true);
        yield "</small>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4 text-center\">
                                            <div class=\"metric-item p-3\">
                                                <h6 class=\"text-muted\">Taux Global</h6>
                                                <h3>";
        // line 938
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversionRates"]) || array_key_exists("conversionRates", $context) ? $context["conversionRates"] : (function () { throw new RuntimeError('Variable "conversionRates" does not exist.', 938, $this->source); })()), "overall_conversion_rate", [], "any", false, false, false, 938), "html", null, true);
        yield "%</h3>
                                                <small>";
        // line 939
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversionRates"]) || array_key_exists("conversionRates", $context) ? $context["conversionRates"] : (function () { throw new RuntimeError('Variable "conversionRates" does not exist.', 939, $this->source); })()), "confirmed_reservations", [], "any", false, false, false, 939), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversionRates"]) || array_key_exists("conversionRates", $context) ? $context["conversionRates"] : (function () { throw new RuntimeError('Variable "conversionRates" does not exist.', 939, $this->source); })()), "total_views", [], "any", false, false, false, 939), "html", null, true);
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
        // line 964
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["clientRetentionRate"]) || array_key_exists("clientRetentionRate", $context) ? $context["clientRetentionRate"] : (function () { throw new RuntimeError('Variable "clientRetentionRate" does not exist.', 964, $this->source); })()), "total_clients", [], "any", false, false, false, 964), "html", null, true);
        yield "</h3>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4 text-center\">
                                            <div class=\"metric-item p-3\">
                                                <h6 class=\"text-muted\">Clients Fidèles</h6>
                                                <h3>";
        // line 970
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["clientRetentionRate"]) || array_key_exists("clientRetentionRate", $context) ? $context["clientRetentionRate"] : (function () { throw new RuntimeError('Variable "clientRetentionRate" does not exist.', 970, $this->source); })()), "returning_clients", [], "any", false, false, false, 970), "html", null, true);
        yield "</h3>
                                                <small>";
        // line 971
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["clientRetentionRate"]) || array_key_exists("clientRetentionRate", $context) ? $context["clientRetentionRate"] : (function () { throw new RuntimeError('Variable "clientRetentionRate" does not exist.', 971, $this->source); })()), "retention_rate", [], "any", false, false, false, 971), "html", null, true);
        yield "% de rétention</small>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4 text-center\">
                                            <div class=\"metric-item p-3\">
                                                <h6 class=\"text-muted\">Réservations/Client</h6>
                                                <h3>";
        // line 977
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["clientRetentionRate"]) || array_key_exists("clientRetentionRate", $context) ? $context["clientRetentionRate"] : (function () { throw new RuntimeError('Variable "clientRetentionRate" does not exist.', 977, $this->source); })()), "avg_reservations_per_client", [], "any", false, false, false, 977), "html", null, true);
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
        // line 993
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["clientRetentionRate"]) || array_key_exists("clientRetentionRate", $context) ? $context["clientRetentionRate"] : (function () { throw new RuntimeError('Variable "clientRetentionRate" does not exist.', 993, $this->source); })()), "top_loyal_clients", [], "any", false, false, false, 993));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 994
            yield "                                                        <tr>
                                                            <td>";
            // line 995
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "prenom", [], "any", false, false, false, 995), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nom", [], "any", false, false, false, 995), "html", null, true);
            yield "</td>
                                                            <td>";
            // line 996
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "reservation_count", [], "any", false, false, false, 996), "html", null, true);
            yield "</td>
                                                            <td>€";
            // line 997
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "total_spent", [], "any", false, false, false, 997), 2, ",", " "), "html", null, true);
            yield "</td>
                                                        </tr>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1000
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
        // line 1030
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packCategoryPerformance"]) || array_key_exists("packCategoryPerformance", $context) ? $context["packCategoryPerformance"] : (function () { throw new RuntimeError('Variable "packCategoryPerformance" does not exist.', 1030, $this->source); })()), "categories", [], "any", false, false, false, 1030));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 1031
            yield "                                                    <tr>
                                                        <td>";
            // line 1032
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categorie", [], "any", false, false, false, 1032), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 1033
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "pack_count", [], "any", false, false, false, 1033), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 1034
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "reservation_count", [], "any", false, false, false, 1034), "html", null, true);
            yield "</td>
                                                        <td>€";
            // line 1035
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "total_revenue", [], "any", false, false, false, 1035), 2, ",", " "), "html", null, true);
            yield "</td>
                                                        <td>
                                                            <div class=\"d-flex align-items-center\">
                                                                <div class=\"me-2\">";
            // line 1038
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "avg_rating", [], "any", false, false, false, 1038), "html", null, true);
            yield "/5</div>
                                                                <div class=\"progress flex-grow-1\" style=\"height: 6px;\">
                                                                    <div class=\"progress-bar bg-warning\" style=\"width: ";
            // line 1040
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "avg_rating", [], "any", false, false, false, 1040) / 5) * 100), "html", null, true);
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
        // line 1046
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
                                © 2023 Golden Touch
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
        // line 1081
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1082
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1083
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1084
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1085
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/node-waves/node-waves.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1086
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/hammer/hammer.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1087
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/i18n/i18n.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1088
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/typeahead-js/typeahead.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1089
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/menu.js"), "html", null, true);
        yield "\"></script>

    <!-- Vendors JS -->
    <script src=\"";
        // line 1092
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/apex-charts/apexcharts.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1093
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/swiper/swiper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1094
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/datatables-bs5/datatables-bootstrap5.js"), "html", null, true);
        yield "\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js\"></script>

    <!-- Main JS -->
    <script src=\"";
        // line 1099
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>

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
        // line 1117
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservationTrends"]) || array_key_exists("reservationTrends", $context) ? $context["reservationTrends"] : (function () { throw new RuntimeError('Variable "reservationTrends" does not exist.', 1117, $this->source); })()));
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
            // line 1118
            yield "                            '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["trend"], "week", [], "any", false, false, false, 1118), "d M"), "html", null, true);
            yield "'";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1118)) {
                yield ",";
            }
            // line 1119
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
        // line 1120
        yield "                    ],
                    datasets: [{
                        label: 'Réservations',
                        data: [
                            ";
        // line 1124
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservationTrends"]) || array_key_exists("reservationTrends", $context) ? $context["reservationTrends"] : (function () { throw new RuntimeError('Variable "reservationTrends" does not exist.', 1124, $this->source); })()));
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
            // line 1125
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trend"], "reservation_count", [], "any", false, false, false, 1125), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1125)) {
                yield ",";
            }
            // line 1126
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
        // line 1127
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
        // line 1182
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["packTypeDistribution"]) || array_key_exists("packTypeDistribution", $context) ? $context["packTypeDistribution"] : (function () { throw new RuntimeError('Variable "packTypeDistribution" does not exist.', 1182, $this->source); })()));
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
            // line 1183
            yield "                            '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "event_type", [], "any", false, false, false, 1183), "html", null, true);
            yield "'";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1183)) {
                yield ",";
            }
            // line 1184
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
        // line 1185
        yield "                    ],
                    datasets: [{
                        data: [
                            ";
        // line 1188
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["packTypeDistribution"]) || array_key_exists("packTypeDistribution", $context) ? $context["packTypeDistribution"] : (function () { throw new RuntimeError('Variable "packTypeDistribution" does not exist.', 1188, $this->source); })()));
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
            // line 1189
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "pack_count", [], "any", false, false, false, 1189), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1189)) {
                yield ",";
            }
            // line 1190
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
        // line 1191
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
        // line 1240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeInactivePacks"]) || array_key_exists("activeInactivePacks", $context) ? $context["activeInactivePacks"] : (function () { throw new RuntimeError('Variable "activeInactivePacks" does not exist.', 1240, $this->source); })()), "active_packs", [], "any", false, false, false, 1240), "html", null, true);
        yield ",
                            ";
        // line 1241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeInactivePacks"]) || array_key_exists("activeInactivePacks", $context) ? $context["activeInactivePacks"] : (function () { throw new RuntimeError('Variable "activeInactivePacks" does not exist.', 1241, $this->source); })()), "inactive_packs", [], "any", false, false, false, 1241), "html", null, true);
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
        // line 1283
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 1283, $this->source); })()), "monthly_data", [], "any", false, false, false, 1283));
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
            // line 1284
            yield "                            '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["month"], "month_name", [], "any", false, false, false, 1284), "html", null, true);
            yield "'";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1284)) {
                yield ",";
            }
            // line 1285
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
        // line 1286
        yield "                    ],
                    datasets: [
                        {
                            label: 'Revenu',
                            data: [
                                ";
        // line 1291
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 1291, $this->source); })()), "monthly_data", [], "any", false, false, false, 1291));
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
            // line 1292
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["month"], "revenue", [], "any", false, false, false, 1292), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1292)) {
                yield ",";
            }
            // line 1293
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
        // line 1294
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
        // line 1304
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["monthlyRevenue"]) || array_key_exists("monthlyRevenue", $context) ? $context["monthlyRevenue"] : (function () { throw new RuntimeError('Variable "monthlyRevenue" does not exist.', 1304, $this->source); })()), "monthly_data", [], "any", false, false, false, 1304));
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
            // line 1305
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["month"], "sales_count", [], "any", false, false, false, 1305), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1305)) {
                yield ",";
            }
            // line 1306
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
        // line 1307
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
        // line 1388
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerSatisfaction"]) || array_key_exists("customerSatisfaction", $context) ? $context["customerSatisfaction"] : (function () { throw new RuntimeError('Variable "customerSatisfaction" does not exist.', 1388, $this->source); })()), "monthly_trend", [], "any", false, false, false, 1388));
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
            // line 1389
            yield "                            '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trend"], "period", [], "any", false, false, false, 1389), "html", null, true);
            yield "'";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1389)) {
                yield ",";
            }
            // line 1390
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
        // line 1391
        yield "                    ],
                    datasets: [
                        {
                            label: 'Note Moyenne',
                            data: [
                                ";
        // line 1396
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerSatisfaction"]) || array_key_exists("customerSatisfaction", $context) ? $context["customerSatisfaction"] : (function () { throw new RuntimeError('Variable "customerSatisfaction" does not exist.', 1396, $this->source); })()), "monthly_trend", [], "any", false, false, false, 1396));
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
            // line 1397
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trend"], "avg_rating", [], "any", false, false, false, 1397), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1397)) {
                yield ",";
            }
            // line 1398
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
        // line 1399
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
        // line 1414
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerSatisfaction"]) || array_key_exists("customerSatisfaction", $context) ? $context["customerSatisfaction"] : (function () { throw new RuntimeError('Variable "customerSatisfaction" does not exist.', 1414, $this->source); })()), "monthly_trend", [], "any", false, false, false, 1414));
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
            // line 1415
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trend"], "review_count", [], "any", false, false, false, 1415), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1415)) {
                yield ",";
            }
            // line 1416
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
        // line 1417
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
        // line 1479
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seasonalTrends"]) || array_key_exists("seasonalTrends", $context) ? $context["seasonalTrends"] : (function () { throw new RuntimeError('Variable "seasonalTrends" does not exist.', 1479, $this->source); })()), "monthly_data", [], "any", false, false, false, 1479));
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
            // line 1480
            yield "                            '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["month"], "month", [], "any", false, false, false, 1480), "html", null, true);
            yield "'";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1480)) {
                yield ",";
            }
            // line 1481
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
        // line 1482
        yield "                    ],
                    datasets: [
                        {
                            label: 'Réservations',
                            data: [
                                ";
        // line 1487
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seasonalTrends"]) || array_key_exists("seasonalTrends", $context) ? $context["seasonalTrends"] : (function () { throw new RuntimeError('Variable "seasonalTrends" does not exist.', 1487, $this->source); })()), "monthly_data", [], "any", false, false, false, 1487));
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
            // line 1488
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["month"], "reservation_count", [], "any", false, false, false, 1488), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1488)) {
                yield ",";
            }
            // line 1489
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
        // line 1490
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
        // line 1504
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seasonalTrends"]) || array_key_exists("seasonalTrends", $context) ? $context["seasonalTrends"] : (function () { throw new RuntimeError('Variable "seasonalTrends" does not exist.', 1504, $this->source); })()), "monthly_data", [], "any", false, false, false, 1504));
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
            // line 1505
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["month"], "revenue", [], "any", false, false, false, 1505), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1505)) {
                yield ",";
            }
            // line 1506
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
        // line 1507
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
        // line 1566
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seasonalTrends"]) || array_key_exists("seasonalTrends", $context) ? $context["seasonalTrends"] : (function () { throw new RuntimeError('Variable "seasonalTrends" does not exist.', 1566, $this->source); })()), "seasonal_data", [], "any", false, false, false, 1566));
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
            // line 1567
            yield "                            '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["season"], "season", [], "any", false, false, false, 1567), "html", null, true);
            yield "'";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1567)) {
                yield ",";
            }
            // line 1568
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
        // line 1569
        yield "                    ],
                    datasets: [{
                        data: [
                            ";
        // line 1572
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["seasonalTrends"]) || array_key_exists("seasonalTrends", $context) ? $context["seasonalTrends"] : (function () { throw new RuntimeError('Variable "seasonalTrends" does not exist.', 1572, $this->source); })()), "seasonal_data", [], "any", false, false, false, 1572));
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
            // line 1573
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["season"], "revenue", [], "any", false, false, false, 1573), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1573)) {
                yield ",";
            }
            // line 1574
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
        // line 1575
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
        // line 1620
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversionRates"]) || array_key_exists("conversionRates", $context) ? $context["conversionRates"] : (function () { throw new RuntimeError('Variable "conversionRates" does not exist.', 1620, $this->source); })()), "monthly_trend", [], "any", false, false, false, 1620));
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
            // line 1621
            yield "                            '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trend"], "period", [], "any", false, false, false, 1621), "html", null, true);
            yield "'";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1621)) {
                yield ",";
            }
            // line 1622
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
        // line 1623
        yield "                    ],
                    datasets: [{
                        label: 'Taux de Conversion',
                        data: [
                            ";
        // line 1627
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conversionRates"]) || array_key_exists("conversionRates", $context) ? $context["conversionRates"] : (function () { throw new RuntimeError('Variable "conversionRates" does not exist.', 1627, $this->source); })()), "monthly_trend", [], "any", false, false, false, 1627));
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
            // line 1628
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trend"], "conversion_rate", [], "any", false, false, false, 1628), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1628)) {
                yield ",";
            }
            // line 1629
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
        // line 1630
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
        // line 1687
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packCategoryPerformance"]) || array_key_exists("packCategoryPerformance", $context) ? $context["packCategoryPerformance"] : (function () { throw new RuntimeError('Variable "packCategoryPerformance" does not exist.', 1687, $this->source); })()), "categories", [], "any", false, false, false, 1687));
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
            // line 1688
            yield "                            '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categorie", [], "any", false, false, false, 1688), "html", null, true);
            yield "'";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1688)) {
                yield ",";
            }
            // line 1689
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
        // line 1690
        yield "                    ],
                    datasets: [
                        {
                            label: 'Revenu',
                            data: [
                                ";
        // line 1695
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packCategoryPerformance"]) || array_key_exists("packCategoryPerformance", $context) ? $context["packCategoryPerformance"] : (function () { throw new RuntimeError('Variable "packCategoryPerformance" does not exist.', 1695, $this->source); })()), "categories", [], "any", false, false, false, 1695));
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
            // line 1696
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "total_revenue", [], "any", false, false, false, 1696), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1696)) {
                yield ",";
            }
            // line 1697
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
        // line 1698
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
        // line 1707
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packCategoryPerformance"]) || array_key_exists("packCategoryPerformance", $context) ? $context["packCategoryPerformance"] : (function () { throw new RuntimeError('Variable "packCategoryPerformance" does not exist.', 1707, $this->source); })()), "categories", [], "any", false, false, false, 1707));
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
            // line 1708
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "avg_rating", [], "any", false, false, false, 1708), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1708)) {
                yield ",";
            }
            // line 1709
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
        // line 1710
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
        // line 1806
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packStats"]) || array_key_exists("packStats", $context) ? $context["packStats"] : (function () { throw new RuntimeError('Variable "packStats" does not exist.', 1806, $this->source); })()), "total_packs", [], "any", false, false, false, 1806), "html", null, true);
        yield ",
                        growthRate: '+";
        // line 1807
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packStats"]) || array_key_exists("packStats", $context) ? $context["packStats"] : (function () { throw new RuntimeError('Variable "packStats" does not exist.', 1807, $this->source); })()), "growth_rate", [], "any", false, false, false, 1807), "html", null, true);
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
        // line 1829
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userStats"]) || array_key_exists("userStats", $context) ? $context["userStats"] : (function () { throw new RuntimeError('Variable "userStats" does not exist.', 1829, $this->source); })()), "total_users", [], "any", false, false, false, 1829), "html", null, true);
        yield ",
                        growthRate: '+";
        // line 1830
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userStats"]) || array_key_exists("userStats", $context) ? $context["userStats"] : (function () { throw new RuntimeError('Variable "userStats" does not exist.', 1830, $this->source); })()), "growth_rate", [], "any", false, false, false, 1830), "html", null, true);
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
        // line 1852
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mostSoldPack"]) || array_key_exists("mostSoldPack", $context) ? $context["mostSoldPack"] : (function () { throw new RuntimeError('Variable "mostSoldPack" does not exist.', 1852, $this->source); })()), "total_sales", [], "any", false, false, false, 1852), "html", null, true);
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
        <div class=\"modal-dialog modal-lg\">
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
                    <button type=\"button\" class=\"btn btn-primary\">Télécharger Rapport</button>
                </div>
            </div>
        </div>
    </div>
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
        return array (  3028 => 1852,  3003 => 1830,  2999 => 1829,  2974 => 1807,  2970 => 1806,  2872 => 1710,  2858 => 1709,  2852 => 1708,  2835 => 1707,  2824 => 1698,  2810 => 1697,  2804 => 1696,  2787 => 1695,  2780 => 1690,  2766 => 1689,  2759 => 1688,  2742 => 1687,  2683 => 1630,  2669 => 1629,  2663 => 1628,  2646 => 1627,  2640 => 1623,  2626 => 1622,  2619 => 1621,  2602 => 1620,  2555 => 1575,  2541 => 1574,  2535 => 1573,  2518 => 1572,  2513 => 1569,  2499 => 1568,  2492 => 1567,  2475 => 1566,  2414 => 1507,  2400 => 1506,  2394 => 1505,  2377 => 1504,  2361 => 1490,  2347 => 1489,  2341 => 1488,  2324 => 1487,  2317 => 1482,  2303 => 1481,  2296 => 1480,  2279 => 1479,  2215 => 1417,  2201 => 1416,  2195 => 1415,  2178 => 1414,  2161 => 1399,  2147 => 1398,  2141 => 1397,  2124 => 1396,  2117 => 1391,  2103 => 1390,  2096 => 1389,  2079 => 1388,  1996 => 1307,  1982 => 1306,  1976 => 1305,  1959 => 1304,  1947 => 1294,  1933 => 1293,  1927 => 1292,  1910 => 1291,  1903 => 1286,  1889 => 1285,  1882 => 1284,  1865 => 1283,  1820 => 1241,  1816 => 1240,  1765 => 1191,  1751 => 1190,  1745 => 1189,  1728 => 1188,  1723 => 1185,  1709 => 1184,  1702 => 1183,  1685 => 1182,  1628 => 1127,  1614 => 1126,  1608 => 1125,  1591 => 1124,  1585 => 1120,  1571 => 1119,  1564 => 1118,  1547 => 1117,  1526 => 1099,  1518 => 1094,  1514 => 1093,  1510 => 1092,  1504 => 1089,  1500 => 1088,  1496 => 1087,  1492 => 1086,  1488 => 1085,  1484 => 1084,  1480 => 1083,  1476 => 1082,  1472 => 1081,  1435 => 1046,  1423 => 1040,  1418 => 1038,  1412 => 1035,  1408 => 1034,  1404 => 1033,  1400 => 1032,  1397 => 1031,  1393 => 1030,  1361 => 1000,  1352 => 997,  1348 => 996,  1342 => 995,  1339 => 994,  1335 => 993,  1316 => 977,  1307 => 971,  1303 => 970,  1294 => 964,  1264 => 939,  1260 => 938,  1249 => 932,  1245 => 931,  1234 => 925,  1230 => 924,  1210 => 906,  1199 => 901,  1194 => 899,  1187 => 895,  1183 => 894,  1179 => 893,  1176 => 892,  1172 => 891,  1111 => 832,  1099 => 827,  1095 => 826,  1090 => 824,  1086 => 823,  1079 => 820,  1075 => 819,  1070 => 817,  1066 => 816,  1062 => 815,  1059 => 814,  1055 => 813,  1033 => 796,  1000 => 766,  996 => 765,  989 => 760,  980 => 757,  972 => 755,  970 => 754,  965 => 752,  962 => 751,  958 => 750,  951 => 746,  945 => 743,  926 => 728,  922 => 727,  915 => 723,  908 => 719,  894 => 708,  890 => 707,  886 => 706,  880 => 703,  870 => 698,  854 => 684,  843 => 679,  838 => 677,  834 => 675,  832 => 674,  827 => 672,  823 => 671,  820 => 670,  816 => 669,  813 => 668,  807 => 667,  804 => 666,  799 => 665,  797 => 664,  768 => 638,  761 => 634,  684 => 560,  662 => 541,  657 => 539,  643 => 528,  632 => 520,  627 => 518,  613 => 507,  602 => 499,  597 => 497,  527 => 430,  515 => 421,  468 => 377,  457 => 369,  446 => 361,  116 => 34,  112 => 33,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  92 => 28,  88 => 27,  82 => 24,  78 => 23,  74 => 22,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" class=\"light-style layout-navbar-fixed layout-menu-fixed\" dir=\"ltr\" data-theme=\"theme-default\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>Statistiques Avancées - Admin</title>
    <meta name=\"description\" content=\"Admin advanced statistics\" />
    
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
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css\" />
    
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
    <!-- Layout wrapper -->
    <div class=\"layout-wrapper layout-content-navbar\">
        <div class=\"layout-container\">
            <!-- Menu -->
            <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">
                <div class=\"app-brand demo\">
                    <a href=\"index.html\" class=\"app-brand-link\">
                        <span class=\"app-brand-logo demo\">
                            <svg width=\"32\" height=\"22\" viewBox=\"0 0 32 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z\" fill=\"#7367F0\" />
                            </svg>
                        </span>
                        <span class=\"app-brand-text demo menu-text fw-bold\">Golden Touch</span>
                    </a>
                </div>

                <div class=\"menu-inner-shadow\"></div>

                <ul class=\"menu-inner py-1\">
                    <li class=\"menu-item\">
                        <a href=\"{{ path('admin_dashboard') }}\" class=\"menu-link\">
                            <i class=\"menu-icon tf-icons ti ti-dashboard\"></i>
                            <div>Dashboard</div>
                        </a>
                    </li>
                    
                    <!-- Statistiques -->
                    <li class=\"menu-item active\">
                        <a href=\"{{ path('admin_advanced_statistiques_index') }}\" class=\"menu-link\">
                            <i class=\"menu-icon tf-icons ti ti-chart-bar\"></i>
                            <div>Statistiques</div>
                        </a>
                    </li>

                    <!-- Packs -->
                    <li class=\"menu-item\">
                        <a href=\"{{ path('admin_pack_index') }}\" class=\"menu-link\">
                            <i class=\"menu-icon tf-icons ti ti-package\"></i>
                            <div>Packs</div>
                        </a>
                    </li>

                    <!-- Events -->
                    <li class=\"menu-item\">
                        <a href=\"#\" class=\"menu-link\">
                            <i class=\"menu-icon tf-icons ti ti-calendar-event\"></i>
                            <div>Events</div>
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

                    <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
                        <!-- Search -->
                        <div class=\"navbar-nav align-items-center\">
                            <div class=\"nav-item navbar-search-wrapper mb-0\">
                                <a class=\"nav-item nav-link search-toggler d-flex align-items-center px-0\" href=\"javascript:void(0);\">
                                    <i class=\"ti ti-search ti-md me-2\"></i>
                                    <span class=\"d-none d-md-inline-block text-muted\">Search</span>
                                </a>
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
                            <!-- User -->
                            <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
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
                                                    <small class=\"text-muted\">Administrator</small>
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
                                            <span class=\"align-middle\">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"#\">
                                            <i class=\"ti ti-settings me-2 ti-sm\"></i>
                                            <span class=\"align-middle\">Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
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
                                        <div class=\"d-flex gap-3\">
                                            <button class=\"btn btn-primary d-flex align-items-center gap-2\">
                                                <i class=\"ri-download-cloud-2-line\"></i> Télécharger Rapport
                                            </button>
                                            <button class=\"btn btn-light\" id=\"refreshStats\">
                                                <i class=\"ri-refresh-line\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Key Metrics -->
                        <div class=\"row mb-4\">
                            <!-- Total Packs -->
                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card stat-card bg-primary bg-opacity-10 cursor-pointer\" onclick=\"showAdvancedStatDetails('packs')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Total Packs</h6>
                                            <h2 class=\"mb-0\">{{ packStats.total_packs }}</h2>
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
                            </div>

                            <!-- Total Users -->
                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"dashboard-card stat-card bg-success bg-opacity-10 cursor-pointer\" onclick=\"showAdvancedStatDetails('users')\">
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
                                <div class=\"dashboard-card stat-card bg-warning bg-opacity-10 cursor-pointer\" onclick=\"showAdvancedStatDetails('mostSoldPack')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Pack le Plus Vendu</h6>
                                            <h2 class=\"mb-0\">{{ mostSoldPack.total_sales }}</h2>
                                            <small class=\"text-muted d-flex align-items-center mt-2\">
                                                {{ mostSoldPack.description|length > 20 ? mostSoldPack.description|slice(0, 20) ~ '...' : mostSoldPack.description }}
                                            </small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-award-line text-warning\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-warning\" style=\"width: 65%\"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Average Pack Price -->
                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                                <div class=\"dashboard-card stat-card bg-info bg-opacity-10 cursor-pointer\" onclick=\"showAdvancedStatDetails('avgPrice')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Prix Moyen des Packs</h6>
                                            <h2 class=\"mb-0\">€{{ averagePackPrice }}</h2>
                                            <small class=\"text-muted d-flex align-items-center mt-2\">
                                                Basé sur tous les packs
                                            </small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-money-euro-circle-line text-info\"></i>
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
                                            <i class=\"ri-more-2-fill\"></i>
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
                                © 2023 Golden Touch
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
    <script src=\"{{ asset('vendor/libs/hammer/hammer.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/i18n/i18n.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/typeahead-js/typeahead.js') }}\"></script>
    <script src=\"{{ asset('vendor/js/menu.js') }}\"></script>

    <!-- Vendors JS -->
    <script src=\"{{ asset('vendor/libs/apex-charts/apexcharts.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/swiper/swiper.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js\"></script>

    <!-- Main JS -->
    <script src=\"{{ asset('js/main.js') }}\"></script>

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
        <div class=\"modal-dialog modal-lg\">
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
                    <button type=\"button\" class=\"btn btn-primary\">Télécharger Rapport</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>", "admin/advanced_statistiques/index.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\admin\\advanced_statistiques\\index.html.twig");
    }
}
