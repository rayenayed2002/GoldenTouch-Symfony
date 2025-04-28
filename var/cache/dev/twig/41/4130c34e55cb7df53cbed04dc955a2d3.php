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

/* admin/dashboard/index.html.twig */
class __TwigTemplate_832b18533edf1de082ad2c09d7cd3edd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\" class=\"light-style layout-navbar-fixed layout-menu-fixed\" dir=\"ltr\" data-theme=\"theme-default\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>Dashboard - Admin</title>
    <meta name=\"description\" content=\"Admin dashboard\" />
    
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
            --purple-color: #9C27B0;
            --indigo-color: #3F51B5;
            --pink-color: #E91E63;
            --teal-color: #009688;
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
        .refresh-btn {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background-color: #4299e1;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 9999px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            cursor: pointer;
            transition: all 0.2s;
        }
        .refresh-btn:hover {
            background-color: #3182ce;
            transform: translateY(-1px);
        }
        .refresh-btn i {
            margin-right: 0.5rem;
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
                    <li class=\"menu-item active\">
                        <a href=\"";
        // line 367
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\" class=\"menu-link\">
                            <i class=\"menu-icon tf-icons ti ti-dashboard\"></i>
                            <div>Dashboard</div>
                        </a>
                    </li>
                    <!-- Dashboards -->
                    

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
                        <!-- Welcome Banner -->
                        <div class=\"row mb-4\">
                            <div class=\"col-12\">
                                <div class=\"dashboard-card p-4\" data-aos=\"fade-up\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div>
                                            <h3 class=\"mb-1\">Welcome back, ";
        // line 473
        yield "Admin";
        yield "! 👋</h3>
                                            <p class=\"text-muted mb-0\">Here's what's happening with your business today.</p>
                                        </div>
                                        <div class=\"d-flex gap-3\">
                                            <button class=\"btn btn-primary d-flex align-items-center gap-2\">
                                                <i class=\"ri-download-cloud-2-line\"></i> Download Report
                                            </button>
                                            <button class=\"btn btn-light\" id=\"themeToggle\">
                                                <i class=\"ri-moon-line\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Stats Cards -->
                        <div class=\"row mb-4\">
                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card stat-card bg-primary bg-opacity-10 cursor-pointer\" onclick=\"showStatDetails('sales')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Total Sales</h6>
                                            <h2 class=\"mb-0\" id=\"totalSales\">";
        // line 496
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["packStats"] ?? null), "total_sales", [], "any", true, true, false, 496)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packStats"]) || array_key_exists("packStats", $context) ? $context["packStats"] : (function () { throw new RuntimeError('Variable "packStats" does not exist.', 496, $this->source); })()), "total_sales", [], "any", false, false, false, 496), 0)) : (0)), "html", null, true);
        yield "</h2>
                                            <small class=\"text-success d-flex align-items-center mt-2\">
                                                <i class=\"ri-arrow-up-line me-1\"></i> +12.5%
                                            </small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-shopping-bag-3-line text-primary\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-primary\" style=\"width: 75%\"></div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"dashboard-card stat-card bg-success bg-opacity-10 cursor-pointer\" onclick=\"showStatDetails('revenue')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Total Revenue</h6>
                                            <h2 class=\"mb-0\" id=\"totalRevenue\">€";
        // line 516
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["revenueStats"] ?? null), "total_revenue", [], "any", true, true, false, 516)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["revenueStats"]) || array_key_exists("revenueStats", $context) ? $context["revenueStats"] : (function () { throw new RuntimeError('Variable "revenueStats" does not exist.', 516, $this->source); })()), "total_revenue", [], "any", false, false, false, 516), 0)) : (0)), "html", null, true);
        yield "</h2>
                                            <small class=\"text-success d-flex align-items-center mt-2\">
                                                <i class=\"ri-arrow-up-line me-1\"></i> +8.4%
                                            </small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-money-euro-circle-line text-success\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-success\" style=\"width: 65%\"></div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                                <div class=\"dashboard-card stat-card bg-warning bg-opacity-10 cursor-pointer\" onclick=\"showStatDetails('avgRevenue')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Avg. Revenue/Pack</h6>
                                            <h2 class=\"mb-0\" id=\"avgRevenue\">€";
        // line 536
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["revenueStats"] ?? null), "avg_revenue_per_pack", [], "any", true, true, false, 536)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["revenueStats"]) || array_key_exists("revenueStats", $context) ? $context["revenueStats"] : (function () { throw new RuntimeError('Variable "revenueStats" does not exist.', 536, $this->source); })()), "avg_revenue_per_pack", [], "any", false, false, false, 536), 0)) : (0)), "html", null, true);
        yield "</h2>
                                            <small class=\"text-warning d-flex align-items-center mt-2\">
                                                <i class=\"ri-arrow-up-line me-1\"></i> +5.2%
                                            </small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-bar-chart-box-line text-warning\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-warning\" style=\"width: 45%\"></div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                                <div class=\"dashboard-card stat-card bg-info bg-opacity-10 cursor-pointer\" onclick=\"showStatDetails('events')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Active Events</h6>
                                            <h3 class=\"fw-semibold mb-0\">";
        // line 556
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("activeEvents", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["activeEvents"]) || array_key_exists("activeEvents", $context) ? $context["activeEvents"] : (function () { throw new RuntimeError('Variable "activeEvents" does not exist.', 556, $this->source); })()), 60)) : (60)), "html", null, true);
        yield "</h3>
                                            <p class=\"text-muted mb-0\">Updated</p>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-calendar-event-line text-info\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-info\" style=\"width: 60%\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- New Stats Cards -->
                        <div class=\"row mb-4\">
                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card stat-card bg-purple bg-opacity-10 cursor-pointer\" onclick=\"showStatDetails('totalPacks')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Total Packs</h6>
                                            <h2 class=\"mb-0\" id=\"totalPacks\">6</h2>
                                            <small class=\"text-success d-flex align-items-center mt-2\">
                                                <i class=\"ri-arrow-up-line me-1\"></i> +83.33%
                                            </small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-package-line text-purple\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-purple\" style=\"width: 83%\"></div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"dashboard-card stat-card bg-indigo bg-opacity-10 cursor-pointer\" onclick=\"showStatDetails('totalUsers')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Total Utilisateurs</h6>
                                            <h2 class=\"mb-0\" id=\"totalUsers\">8</h2>
                                            <small class=\"text-muted d-flex align-items-center mt-2\">
                                                <i class=\"ri-arrow-right-line me-1\"></i> +0%
                                            </small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-user-line text-indigo\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-indigo\" style=\"width: 50%\"></div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                                <div class=\"dashboard-card stat-card bg-pink bg-opacity-10 cursor-pointer\" onclick=\"showStatDetails('bestSellingPack')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Pack le Plus Vendu</h6>
                                            <h2 class=\"mb-0\" id=\"bestSellingPack\">6</h2>
                                            <small class=\"text-truncate d-block mt-1\" style=\"max-width: 150px;\">Pack Mariage offre u...</small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-award-line text-pink\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-pink\" style=\"width: 75%\"></div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                                <div class=\"dashboard-card stat-card bg-teal bg-opacity-10 cursor-pointer\" onclick=\"showStatDetails('avgPackPrice')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Prix Moyen des Packs</h6>
                                            <h2 class=\"mb-0\" id=\"avgPackPrice\">€2411.17</h2>
                                            <small class=\"text-muted d-block mt-1\">Basé sur tous les packs</small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-price-tag-3-line text-teal\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-teal\" style=\"width: 65%\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Stats Row -->
                        <div class=\"row mb-4\">
                            <div class=\"col-md-6 col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
    <h6 class=\"mb-0\">Customer Satisfaction</h6>
    <i class=\"ri-star-line text-warning\"></i>
</div>
<div class=\"d-flex align-items-center\">
    <h1 class=\"display-4 fw-bold mb-0\">";
        // line 658
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reviewStats"] ?? null), "avg_rating", [], "any", true, true, false, 658)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 658, $this->source); })()), "avg_rating", [], "any", false, false, false, 658), 0)) : (0)), "html", null, true);
        yield "/5.0</h1>
    <span class=\"text-success ms-2 fw-semibold\">
        <i class=\"ri-arrow-up-line\"></i> +0.3
    </span>
</div>
<p class=\"text-muted small\">Based on ";
        // line 663
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reviewStats"] ?? null), "total_reviews", [], "any", true, true, false, 663)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 663, $this->source); })()), "total_reviews", [], "any", false, false, false, 663), 0)) : (0)), "html", null, true);
        yield " reviews</p>
                                    <div class=\"d-flex align-items-center mb-1\">
                                        <div class=\"flex-grow-1\">
                                            <div class=\"progress\" style=\"height: 6px;\">
                                                <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 95%\"></div>
                                            </div>
                                        </div>
                                        <span class=\"ms-2 fw-semibold\">Excellent</span>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-md-6 col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                        <h6 class=\"mb-0\">Popular Categories</h6>
                                        <i class=\"ri-apps-line text-primary\"></i>
                                    </div>
                                    <div id=\"categoryPieChart\" style=\"height: 220px;\"></div>
                                    <div class=\"d-flex justify-content-between text-center mt-2\">
                                        <div>
                                            <span class=\"d-block fw-semibold\">VIP Packages</span>
                                            <small class=\"text-muted\">45%</small>
                                        </div>
                                        <div>
                                            <span class=\"d-block fw-semibold\">Standard Packages</span>
                                            <small class=\"text-muted\">30%</small>
                                        </div>
                                        <div>
                                            <span class=\"d-block fw-semibold\">Basic Packages</span>
                                            <small class=\"text-muted\">25%</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-md-6 col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                        <h6 class=\"mb-0\">Recent Activity</h6>
                                        <i class=\"ri-time-line text-warning\"></i>
                                    </div>
                                    <div class=\"activity-list\">
                                        <div class=\"activity-item d-flex align-items-center mb-3\">
                                            <div class=\"activity-icon bg-success bg-opacity-10 text-success rounded-circle p-2 me-3\">
                                                <i class=\"ri-shopping-cart-2-line\"></i>
                                            </div>
                                            <div>
                                                <p class=\"mb-0 small\">New purchase</p>
                                                <small class=\"text-muted\">2 minutes ago</small>
                                            </div>
                                        </div>
                                        <div class=\"activity-item d-flex align-items-center mb-3\">
                                            <div class=\"activity-icon bg-primary bg-opacity-10 text-primary rounded-circle p-2 me-3\">
                                                <i class=\"ri-user-add-line\"></i>
                                            </div>
                                            <div>
                                                <p class=\"mb-0 small\">New customer registration</p>
                                                <small class=\"text-muted\">15 minutes ago</small>
                                            </div>
                                        </div>
                                        <div class=\"activity-item d-flex align-items-center\">
                                            <div class=\"activity-icon bg-warning bg-opacity-10 text-warning rounded-circle p-2 me-3\">
                                                <i class=\"ri-star-line\"></i>
                                            </div>
                                            <div>
                                                <p class=\"mb-0 small\">New review received</p>
                                                <small class=\"text-muted\">45 minutes ago</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                                                <!-- Charts -->
                        <div class=\"row mb-4\">
                            <div class=\"col-lg-8\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Purchase Trends</h5>
                                            <p class=\"text-muted mb-0\">Monthly overview of sales and revenue</p>
                                        </div>
                                        <div class=\"btn-group\">
                                            <button class=\"btn btn-outline-primary btn-sm active\">Monthly</button>
                                            <button class=\"btn btn-outline-primary btn-sm\">Weekly</button>
                                        </div>
                                    </div>
                                    <div class=\"chart-container\">
                                        <canvas id=\"purchaseChart\"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Top Events</h5>
                                            <p class=\"text-muted mb-0\">Best performing events</p>
                                        </div>
                                        <button class=\"btn btn-light btn-sm\">
                                            <i class=\"ri-more-2-fill\"></i>
                                        </button>
                                    </div>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-borderless mb-0\">
                                            <thead>
                                                <tr>
                                                    <th>Event</th>
                                                    <th>Sales</th>
                                                    <th>Rating</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
        // line 779
        if ((array_key_exists("topEvents", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["topEvents"]) || array_key_exists("topEvents", $context) ? $context["topEvents"] : (function () { throw new RuntimeError('Variable "topEvents" does not exist.', 779, $this->source); })())))) {
            // line 780
            yield "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topEvents"]) || array_key_exists("topEvents", $context) ? $context["topEvents"] : (function () { throw new RuntimeError('Variable "topEvents" does not exist.', 780, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 781
                yield "                                                    <tr>
                                                        <td>
                                                            <div class=\"d-flex align-items-center\">
                                                                <div class=\"avatar avatar-sm me-2 bg-light\">
                                                                    <span class=\"avatar-initial rounded-circle bg-label-primary\">
                                                                        <i class=\"ri-calendar-event-line\"></i>
                                                                    </span>
                                                                </div>
                                                                <span>";
                // line 789
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "event_name", [], "any", true, true, false, 789)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "event_name", [], "any", false, false, false, 789), ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "name", [], "any", true, true, false, 789)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 789), "Event")) : ("Event")))) : (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "name", [], "any", true, true, false, 789)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 789), "Event")) : ("Event")))), "html", null, true);
                yield "</span>
                                                            </div>
                                                        </td>
                                                        <td>";
                // line 792
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "total_sales", [], "any", true, true, false, 792)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "total_sales", [], "any", false, false, false, 792), ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "sales", [], "any", true, true, false, 792)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "sales", [], "any", false, false, false, 792), 0)) : (0)))) : (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "sales", [], "any", true, true, false, 792)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "sales", [], "any", false, false, false, 792), 0)) : (0)))), "html", null, true);
                yield "</td>
                                                        <td>
                                                            <div class=\"d-flex align-items-center\">
                                                                <i class=\"ri-star-fill text-warning me-1\"></i>
                                                                <span>";
                // line 796
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "avg_rating", [], "any", true, true, false, 796)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "avg_rating", [], "any", false, false, false, 796), ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "rating", [], "any", true, true, false, 796)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "rating", [], "any", false, false, false, 796), 0)) : (0)))) : (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "rating", [], "any", true, true, false, 796)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "rating", [], "any", false, false, false, 796), 0)) : (0)))), "html", null, true);
                yield "</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 801
            yield "                                                ";
        } else {
            // line 802
            yield "                                                    <tr>
                                                        <td colspan=\"3\" class=\"text-center py-3\">
                                                            <i class=\"ri-calendar-event-line text-muted\" style=\"font-size: 1.5rem;\"></i>
                                                            <p class=\"text-muted mt-2 mb-0\">No event data available</p>
                                                        </td>
                                                    </tr>
                                                ";
        }
        // line 809
        yield "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pack Statistics -->
                        <div class=\"row\">
                            <div class=\"col-12\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Pack Statistics</h5>
                                            <p class=\"text-muted mb-0\">Detailed overview of all packs</p>
                                        </div>
                                        <div class=\"d-flex gap-2\">
                                            <div class=\"btn-group\">
                                                <button class=\"btn btn-outline-primary btn-sm active\" onclick=\"filterByPeriod('week')\">Week</button>
                                                <button class=\"btn btn-outline-primary btn-sm\" onclick=\"filterByPeriod('month')\">Month</button>
                                                <button class=\"btn btn-outline-primary btn-sm\" onclick=\"filterByPeriod('year')\">Year</button>
                                            </div>
                                            <button class=\"btn btn-primary btn-sm\">
                                                <i class=\"ri-download-2-line me-1\"></i> Export
                                            </button>
                                        </div>
                                    </div>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover\" id=\"packStatsTable\">
                                            <thead>
                                                <tr>
                                                    <th>Pack</th>
                                                    <th>Event</th>
                                                    <th>Purchases</th>
                                                    <th>Revenue</th>
                                                    <th>Rating</th>
                                                    <th>Sentiment</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
        // line 849
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["packStats"]) || array_key_exists("packStats", $context) ? $context["packStats"] : (function () { throw new RuntimeError('Variable "packStats" does not exist.', 849, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pack"]) {
            // line 850
            yield "                                                <tr class=\"cursor-pointer pack-row\" data-pack-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 850), "html", null, true);
            yield "\">
                                                    <td>";
            // line 851
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "description", [], "any", false, false, false, 851), "html", null, true);
            yield "</td>
                                                    <td>";
            // line 852
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "event_name", [], "any", false, false, false, 852), "html", null, true);
            yield "</td>
                                                    <td>
                                                        ";
            // line 854
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "purchases", [], "any", false, false, false, 854), "html", null, true);
            yield "
                                                        <span class=\"ml-2 ";
            // line 855
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "purchases_change", [], "any", false, false, false, 855) >= 0)) ? ("text-success") : ("text-danger"));
            yield "\">
                                                            ";
            // line 856
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "purchases_change", [], "any", false, false, false, 856) >= 0)) ? ("+") : (""));
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "purchases_change", [], "any", false, false, false, 856), "html", null, true);
            yield "%
                                                        </span>
                                                    </td>
                                                    <td>
                                                        ";
            // line 860
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "total_revenue", [], "any", false, false, false, 860), "html", null, true);
            yield "€
                                                        <span class=\"ml-2 ";
            // line 861
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "revenue_change", [], "any", false, false, false, 861) >= 0)) ? ("text-success") : ("text-danger"));
            yield "\">
                                                            ";
            // line 862
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "revenue_change", [], "any", false, false, false, 862) >= 0)) ? ("+") : (""));
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "revenue_change", [], "any", false, false, false, 862), "html", null, true);
            yield "%
                                                        </span>
                                                    </td>
                                                    <td>
                                                        ";
            // line 866
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "avg_rating", [], "any", false, false, false, 866), 1), "html", null, true);
            yield "/5
                                                        <div class=\"progress\" style=\"height: 5px;\">
                                                            <div class=\"progress-bar\" role=\"progressbar\" 
                                                                 style=\"width: ";
            // line 869
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "avg_rating", [], "any", false, false, false, 869) / 5) * 100), "html", null, true);
            yield "%;\"
                                                                 aria-valuenow=\"";
            // line 870
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "avg_rating", [], "any", false, false, false, 870), "html", null, true);
            yield "\" 
                                                                 aria-valuemin=\"0\" 
                                                                 aria-valuemax=\"5\">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"sentiment-bars\">
                                                            <div class=\"progress\" style=\"height: 5px; margin-bottom: 2px;\">
                                                                <div class=\"progress-bar bg-success\" 
                                                                     style=\"width: ";
            // line 880
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "sentiment_analysis", [], "any", false, false, false, 880), "positive", [], "any", false, false, false, 880), "html", null, true);
            yield "%\"
                                                                     title=\"Positive: ";
            // line 881
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "sentiment_analysis", [], "any", false, false, false, 881), "positive", [], "any", false, false, false, 881), "html", null, true);
            yield "%\">
                                                                </div>
                                                            </div>
                                                            <div class=\"progress\" style=\"height: 5px; margin-bottom: 2px;\">
                                                                <div class=\"progress-bar bg-warning\"
                                                                     style=\"width: ";
            // line 886
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "sentiment_analysis", [], "any", false, false, false, 886), "neutral", [], "any", false, false, false, 886), "html", null, true);
            yield "%\"
                                                                     title=\"Neutral: ";
            // line 887
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "sentiment_analysis", [], "any", false, false, false, 887), "neutral", [], "any", false, false, false, 887), "html", null, true);
            yield "%\">
                                                                </div>
                                                            </div>
                                                            <div class=\"progress\">
                                                                <div class=\"progress-bar bg-danger\"
                                                                     style=\"width: ";
            // line 892
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "sentiment_analysis", [], "any", false, false, false, 892), "negative", [], "any", false, false, false, 892), "html", null, true);
            yield "%\"
                                                                     title=\"Negative: ";
            // line 893
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "sentiment_analysis", [], "any", false, false, false, 893), "negative", [], "any", false, false, false, 893), "html", null, true);
            yield "%\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class=\"btn btn-sm btn-primary view-pack-details\"
                                                                data-pack-id=\"";
            // line 900
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 900), "html", null, true);
            yield "\"
                                                                data-description=\"";
            // line 901
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "description", [], "any", false, false, false, 901), "html", null, true);
            yield "\"
                                                                data-event=\"";
            // line 902
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "event_name", [], "any", false, false, false, 902), "html", null, true);
            yield "\">
                                                            View Details
                                                        </button>
                                                    </td>
                                                </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pack'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 908
        yield "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review Analysis Section -->
                        <div class=\"row\">
                            <!-- Sentiment Analysis -->
                            <div class=\"col-md-4\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h5>Sentiment Analysis</h5>
                                        <div class=\"progress mb-2\">
                                            <div class=\"progress-bar bg-success\" style=\"width: ";
        // line 923
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reviewStats"] ?? null), "sentiment_distribution", [], "any", false, true, false, 923), "positive_sentiment", [], "any", true, true, false, 923)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 923, $this->source); })()), "sentiment_distribution", [], "any", false, false, false, 923), "positive_sentiment", [], "any", false, false, false, 923), 0)) : (0)), "html", null, true);
        yield "%\">
                                                ";
        // line 924
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reviewStats"] ?? null), "sentiment_distribution", [], "any", false, true, false, 924), "positive_sentiment", [], "any", true, true, false, 924)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 924, $this->source); })()), "sentiment_distribution", [], "any", false, false, false, 924), "positive_sentiment", [], "any", false, false, false, 924), 0)) : (0)), "html", null, true);
        yield "%
                                            </div>
                                        </div>
                                        <div class=\"progress mb-2\">
                                            <div class=\"progress-bar bg-warning\" style=\"width: ";
        // line 928
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reviewStats"] ?? null), "sentiment_distribution", [], "any", false, true, false, 928), "neutral_sentiment", [], "any", true, true, false, 928)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 928, $this->source); })()), "sentiment_distribution", [], "any", false, false, false, 928), "neutral_sentiment", [], "any", false, false, false, 928), 0)) : (0)), "html", null, true);
        yield "%\">
                                                ";
        // line 929
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reviewStats"] ?? null), "sentiment_distribution", [], "any", false, true, false, 929), "neutral_sentiment", [], "any", true, true, false, 929)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 929, $this->source); })()), "sentiment_distribution", [], "any", false, false, false, 929), "neutral_sentiment", [], "any", false, false, false, 929), 0)) : (0)), "html", null, true);
        yield "%
                                            </div>
                                        </div>
                                        <div class=\"progress mb-2\">
                                            <div class=\"progress-bar bg-danger\" style=\"width: ";
        // line 933
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reviewStats"] ?? null), "sentiment_distribution", [], "any", false, true, false, 933), "negative_sentiment", [], "any", true, true, false, 933)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 933, $this->source); })()), "sentiment_distribution", [], "any", false, false, false, 933), "negative_sentiment", [], "any", false, false, false, 933), 0)) : (0)), "html", null, true);
        yield "%\">
                                                ";
        // line 934
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reviewStats"] ?? null), "sentiment_distribution", [], "any", false, true, false, 934), "negative_sentiment", [], "any", true, true, false, 934)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 934, $this->source); })()), "sentiment_distribution", [], "any", false, false, false, 934), "negative_sentiment", [], "any", false, false, false, 934), 0)) : (0)), "html", null, true);
        yield "%
                                            </div>
                                        </div>
                                        <div class=\"text-muted\">
                                            <small>Based on ";
        // line 938
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reviewStats"] ?? null), "total_reviews", [], "any", true, true, false, 938)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 938, $this->source); })()), "total_reviews", [], "any", false, false, false, 938), 0)) : (0)), "html", null, true);
        yield " reviews</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Most Common Words -->
                            <div class=\"col-md-4\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h5>Most Common Words</h5>
                                        <div class=\"word-cloud\">
                                            ";
        // line 950
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["reviewStats"] ?? null), "most_common_words", [], "any", true, true, false, 950) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 950, $this->source); })()), "most_common_words", [], "any", false, false, false, 950)) > 0))) {
            // line 951
            yield "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 951, $this->source); })()), "most_common_words", [], "any", false, false, false, 951));
            foreach ($context['_seq'] as $context["_key"] => $context["word"]) {
                // line 952
                yield "                                                    <div class=\"word-item mb-2\">
                                                        <span class=\"word\">";
                // line 953
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["word"], "word", [], "any", false, false, false, 953), "html", null, true);
                yield "</span>
                                                        <span class=\"badge bg-primary\">";
                // line 954
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["word"], "frequency", [], "any", false, false, false, 954), "html", null, true);
                yield "</span>
                                                    </div>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['word'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 957
            yield "                                            ";
        } else {
            // line 958
            yield "                                                <div class=\"text-center py-3\">
                                                    <i class=\"ri-chat-3-line text-muted\" style=\"font-size: 2rem;\"></i>
                                                    <p class=\"text-muted mt-2\">No comment data available</p>
                                                </div>
                                            ";
        }
        // line 963
        yield "                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Top Commented Packs -->
                            <div class=\"col-md-4\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h5>Most Discussed Packs</h5>
                                        ";
        // line 973
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["reviewStats"] ?? null), "top_commented_packs", [], "any", true, true, false, 973) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 973, $this->source); })()), "top_commented_packs", [], "any", false, false, false, 973)) > 0))) {
            // line 974
            yield "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 974, $this->source); })()), "top_commented_packs", [], "any", false, false, false, 974));
            foreach ($context['_seq'] as $context["_key"] => $context["pack"]) {
                // line 975
                yield "                                                <div class=\"pack-stats mb-3\">
                                                    <h6>";
                // line 976
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "pack_name", [], "any", false, false, false, 976), "html", null, true);
                yield "</h6>
                                                    <div class=\"d-flex justify-content-between mb-2\">
                                                        <small>";
                // line 978
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "total_reviews", [], "any", false, false, false, 978), "html", null, true);
                yield " reviews</small>
                                                        <div>
                                                            <span class=\"badge bg-success\">";
                // line 980
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "positive", [], "any", false, false, false, 980), "html", null, true);
                yield "</span>
                                                            <span class=\"badge bg-warning\">";
                // line 981
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "neutral", [], "any", false, false, false, 981), "html", null, true);
                yield "</span>
                                                            <span class=\"badge bg-danger\">";
                // line 982
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "negative", [], "any", false, false, false, 982), "html", null, true);
                yield "</span>
                                                        </div>
                                                    </div>
                                                    <div class=\"progress\" style=\"height: 8px;\">
                                                        ";
                // line 986
                $context["total"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "positive", [], "any", false, false, false, 986) + CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "neutral", [], "any", false, false, false, 986)) + CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "negative", [], "any", false, false, false, 986));
                // line 987
                yield "                                                        ";
                $context["positive_pct"] = ((((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 987, $this->source); })()) > 0)) ? (((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "positive", [], "any", false, false, false, 987) / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 987, $this->source); })())) * 100)) : (0));
                // line 988
                yield "                                                        ";
                $context["neutral_pct"] = ((((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 988, $this->source); })()) > 0)) ? (((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "neutral", [], "any", false, false, false, 988) / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 988, $this->source); })())) * 100)) : (0));
                // line 989
                yield "                                                        ";
                $context["negative_pct"] = ((((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 989, $this->source); })()) > 0)) ? (((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "negative", [], "any", false, false, false, 989) / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 989, $this->source); })())) * 100)) : (0));
                // line 990
                yield "                                                        <div class=\"progress-bar bg-success\" style=\"width: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["positive_pct"]) || array_key_exists("positive_pct", $context) ? $context["positive_pct"] : (function () { throw new RuntimeError('Variable "positive_pct" does not exist.', 990, $this->source); })()), "html", null, true);
                yield "%\"></div>
                                                        <div class=\"progress-bar bg-warning\" style=\"width: ";
                // line 991
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["neutral_pct"]) || array_key_exists("neutral_pct", $context) ? $context["neutral_pct"] : (function () { throw new RuntimeError('Variable "neutral_pct" does not exist.', 991, $this->source); })()), "html", null, true);
                yield "%\"></div>
                                                        <div class=\"progress-bar bg-danger\" style=\"width: ";
                // line 992
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["negative_pct"]) || array_key_exists("negative_pct", $context) ? $context["negative_pct"] : (function () { throw new RuntimeError('Variable "negative_pct" does not exist.', 992, $this->source); })()), "html", null, true);
                yield "%\"></div>
                                                    </div>
                                                </div>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['pack'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 996
            yield "                                        ";
        } else {
            // line 997
            yield "                                            <div class=\"text-center py-3\">
                                                <i class=\"ri-chat-3-line text-muted\" style=\"font-size: 2rem;\"></i>
                                                <p class=\"text-muted mt-2\">No pack reviews available</p>
                                            </div>
                                        ";
        }
        // line 1002
        yield "                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews Analytics Section -->
                        <div class=\"row mb-4\">
                            <div class=\"col-12\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Reviews Analytics</h5>
                                            <p class=\"text-muted mb-0\">Customer feedback and sentiment analysis</p>
                                        </div>
                                        <div class=\"d-flex gap-2\">
                                            <button class=\"btn btn-outline-primary btn-sm\" onclick=\"downloadReviewsReport()\">
                                                <i class=\"ri-file-chart-line me-1\"></i> Export Report
                                            </button>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-4\">
                                            <div class=\"review-stats-card p-3 border rounded-3 mb-3\">
                                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                                    <h6 class=\"mb-0\">Overall Rating</h6>
                                                    <div class=\"rating-circle\">
                                                        <svg viewBox=\"0 0 36 36\" class=\"circular-chart\">
                                                            <path class=\"circle-bg\" d=\"M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831\"/>
                                                            <path class=\"circle\" stroke-dasharray=\"";
        // line 1030
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["packStats"] ?? null), "avg_rating", [], "any", true, true, false, 1030)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packStats"]) || array_key_exists("packStats", $context) ? $context["packStats"] : (function () { throw new RuntimeError('Variable "packStats" does not exist.', 1030, $this->source); })()), "avg_rating", [], "any", false, false, false, 1030), 0)) : (0)) * 20), "html", null, true);
        yield ", 100\" d=\"M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831\"/>
                                                            <text x=\"18\" y=\"20.35\" class=\"percentage\">";
        // line 1031
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["packStats"] ?? null), "avg_rating", [], "any", true, true, false, 1031)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packStats"]) || array_key_exists("packStats", $context) ? $context["packStats"] : (function () { throw new RuntimeError('Variable "packStats" does not exist.', 1031, $this->source); })()), "avg_rating", [], "any", false, false, false, 1031), 0)) : (0)), "html", null, true);
        yield "/5</text>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class=\"rating-bars\">
                                                    ";
        // line 1036
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(5, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 1037
            yield "                                                    <div class=\"rating-bar-item d-flex align-items-center mb-2\">
                                                        <div class=\"stars me-2\">";
            // line 1038
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "★</div>
                                                        <div class=\"progress flex-grow-1\" style=\"height: 8px;\">
                                                            <div class=\"progress-bar bg-warning\" style=\"width: ";
            // line 1040
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reviewStats"] ?? null), (("rating_" . $context["i"]) . "_percent"), [], "any", true, true, false, 1040)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 1040, $this->source); })()), (("rating_" . $context["i"]) . "_percent"), [], "any", false, false, false, 1040), 0)) : (0)), "html", null, true);
            yield "%\"></div>
                                                        </div>
                                                        <span class=\"ml-2 small\">";
            // line 1042
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reviewStats"] ?? null), (("rating_" . $context["i"]) . "_percent"), [], "any", true, true, false, 1042)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 1042, $this->source); })()), (("rating_" . $context["i"]) . "_percent"), [], "any", false, false, false, 1042), 0)) : (0)), "html", null, true);
            yield "%</span>
                                                    </div>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1045
        yield "                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"sentiment-analysis p-3 border rounded-3 mb-3\">
                                                <h6 class=\"mb-3\">Sentiment Analysis</h6>
                                                <div class=\"sentiment-chart-container\" style=\"height: 200px;\">
                                                    <canvas id=\"sentimentChart\"></canvas>
                                                </div>
                                                <div class=\"sentiment-stats mt-3\">
                                                    <div class=\"d-flex justify-content-between\">
                                                        <div class=\"text-success\">
                                                            <small>Positive</small>
                                                            <h6 class=\"mb-0\">";
        // line 1058
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reviewStats"] ?? null), "positive_sentiment", [], "any", true, true, false, 1058)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 1058, $this->source); })()), "positive_sentiment", [], "any", false, false, false, 1058), 0)) : (0)), "html", null, true);
        yield "%</h6>
                                                        </div>
                                                        <div class=\"text-warning\">
                                                            <small>Neutral</small>
                                                            <h6 class=\"mb-0\">";
        // line 1062
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reviewStats"] ?? null), "neutral_sentiment", [], "any", true, true, false, 1062)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 1062, $this->source); })()), "neutral_sentiment", [], "any", false, false, false, 1062), 0)) : (0)), "html", null, true);
        yield "%</h6>
                                                        </div>
                                                        <div class=\"text-danger\">
                                                            <small>Negative</small>
                                                            <h6 class=\"mb-0\">";
        // line 1066
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reviewStats"] ?? null), "negative_sentiment", [], "any", true, true, false, 1066)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 1066, $this->source); })()), "negative_sentiment", [], "any", false, false, false, 1066), 0)) : (0)), "html", null, true);
        yield "%</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"review-trends p-3 border rounded-3 mb-3\">
                                                <h6 class=\"mb-3\">Review Trends</h6>
                                                <div class=\"review-chart-container\" style=\"height: 200px;\">
                                                    <canvas id=\"reviewTrendsChart\"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pack Analytics Section -->
                        <div class=\"row mb-4\">
                            <div class=\"col-12\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Pack Analytics</h5>
                                            <p class=\"text-muted mb-0\">Detailed performance metrics for each pack</p>
                                        </div>
                                        <div class=\"d-flex gap-2\">
                                            <div class=\"btn-group\">
                                                <button class=\"btn btn-outline-primary btn-sm active\" onclick=\"filterPackMetrics('week')\">Week</button>
                                                <button class=\"btn btn-outline-primary btn-sm\" onclick=\"filterPackMetrics('month')\">Month</button>
                                                <button class=\"btn btn-outline-primary btn-sm\" onclick=\"filterPackMetrics('year')\">Year</button>
                                            </div>
                                            <button class=\"btn btn-primary btn-sm\" onclick=\"downloadPackReport()\">
                                                <i class=\"ri-download-2-line me-1\"></i> Export Report
                                            </button>
                                        </div>
                                    </div>
                                    <div class=\"pack-metrics-grid\">
                                        ";
        // line 1106
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["packStats"]) || array_key_exists("packStats", $context) ? $context["packStats"] : (function () { throw new RuntimeError('Variable "packStats" does not exist.', 1106, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["pack"]) {
            // line 1107
            yield "                                        <div class=\"pack-metric-card\" data-aos=\"fade-up\" data-aos-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 1107) * 100), "html", null, true);
            yield "\">
                                            <div class=\"pack-header d-flex justify-content-between align-items-start mb-3\">
                                                <div>
                                                    <h6 class=\"mb-1\">";
            // line 1110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "description", [], "any", false, false, false, 1110), "html", null, true);
            yield "</h6>
                                                    <span class=\"badge bg-primary bg-opacity-10 text-primary\">";
            // line 1111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "event_name", [], "any", false, false, false, 1111), "html", null, true);
            yield "</span>
                                                </div>
                                                <div class=\"dropdown\">
                                                    <button class=\"btn btn-light btn-sm\" data-bs-toggle=\"dropdown\">
                                                        <i class=\"ri-more-2-fill\"></i>
                                                    </button>
                                                    <ul class=\"dropdown-menu\">
                                                        <li><a class=\"dropdown-item\" href=\"#\" onclick=\"showPackDetails('";
            // line 1118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 1118), "html", null, true);
            yield "')\">
                                                            <i class=\"ri-dashboard-line me-2\"></i> Analytics
                                                        </a></li>
                                                        <li><a class=\"dropdown-item\" href=\"";
            // line 1121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pack_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 1121)]), "html", null, true);
            yield "\">
                                                            <i class=\"ri-eye-line me-2\"></i> View Details
                                                        </a></li>
                                                        <li><a class=\"dropdown-item\" href=\"#\" onclick=\"downloadPackReport('";
            // line 1124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 1124), "html", null, true);
            yield "')\">
                                                            <i class=\"ri-download-2-line me-2\"></i> Export Report
                                                        </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"pack-metrics\">
                                                <div class=\"row g-3\">
                                                    <div class=\"col-6\">
                                                        <div class=\"metric-item\">
                                                            <small class=\"text-muted d-block mb-1\">Sales</small>
                                                            <h6 class=\"mb-0\">";
            // line 1135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "purchases", [], "any", false, false, false, 1135), "html", null, true);
            yield "</h6>
                                                            <small class=\"text-success\">
                                                                <i class=\"ri-arrow-up-line\"></i> ";
            // line 1137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "purchases_change", [], "any", true, true, false, 1137)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "purchases_change", [], "any", false, false, false, 1137), 0)) : (0)), "html", null, true);
            yield "%
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <div class=\"metric-item\">
                                                            <small class=\"text-muted d-block mb-1\">Revenue</small>
                                                            <h6 class=\"mb-0\">€";
            // line 1144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "total_revenue", [], "any", false, false, false, 1144), "html", null, true);
            yield "</h6>
                                                            <small class=\"text-success\">
                                                                <i class=\"ri-arrow-up-line\"></i> ";
            // line 1146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "revenue_change", [], "any", true, true, false, 1146)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "revenue_change", [], "any", false, false, false, 1146), 0)) : (0)), "html", null, true);
            yield "%
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <div class=\"metric-item\">
                                                            <small class=\"text-muted d-block mb-1\">Rating</small>
                                                            <div class=\"d-flex align-items-center\">
                                                                <h6 class=\"mb-0 me-2\">";
            // line 1154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "avg_rating", [], "any", true, true, false, 1154)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "avg_rating", [], "any", false, false, false, 1154), 0)) : (0)), "html", null, true);
            yield "</h6>
                                                                <div class=\"stars\">
                                                                    ";
            // line 1156
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 1157
                yield "                                                                    <i class=\"ri-star-";
                yield ((($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "avg_rating", [], "any", false, false, false, 1157))) ? ("fill") : ("line"));
                yield " text-warning\"></i>
                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1159
            yield "                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <div class=\"metric-item\">
                                                            <small class=\"text-muted d-block mb-1\">Satisfaction</small>
                                                            <div class=\"d-flex align-items-center\">
                                                                <div class=\"satisfaction-bar flex-grow-1 me-2\">
                                                                    <div class=\"progress\" style=\"height: 6px;\">
                                                                        <div class=\"progress-bar bg-success\" style=\"width: ";
            // line 1169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "satisfaction_rate", [], "any", true, true, false, 1169)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "satisfaction_rate", [], "any", false, false, false, 1169), 0)) : (0)), "html", null, true);
            yield "%\"></div>
                                                                    </div>
                                                                </div>
                                                                <span>";
            // line 1172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "satisfaction_rate", [], "any", true, true, false, 1172)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "satisfaction_rate", [], "any", false, false, false, 1172), 0)) : (0)), "html", null, true);
            yield "%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"pack-chart mt-3\">
                                                    <canvas id=\"packChart";
            // line 1178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 1178), "html", null, true);
            yield "\" height=\"100\"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        ";
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
        unset($context['_seq'], $context['_key'], $context['pack'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1183
        yield "                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review Statistics Section -->
                        <div class=\"review-stats mt-4\">
                            <h4>Overall Review Statistics</h4>
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <h5>Total Reviews</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <h5>Average Rating</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <h5>Sentiment Analysis</h5>
                                            <div class=\"progress mb-2\">
                                                <div class=\"progress-bar bg-success\" style=\"width: ";
        // line 1211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reviewStats"] ?? null), "positive_sentiment", [], "any", true, true, false, 1211)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 1211, $this->source); })()), "positive_sentiment", [], "any", false, false, false, 1211), 0)) : (0)), "html", null, true);
        yield "%\">
                                                    ";
        // line 1212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reviewStats"] ?? null), "positive_sentiment", [], "any", true, true, false, 1212)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 1212, $this->source); })()), "positive_sentiment", [], "any", false, false, false, 1212), 0)) : (0)), "html", null, true);
        yield "%
                                                </div>
                                            </div>
                                            <div class=\"progress mb-2\">
                                                <div class=\"progress-bar bg-warning\" style=\"width: ";
        // line 1216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reviewStats"] ?? null), "neutral_sentiment", [], "any", true, true, false, 1216)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 1216, $this->source); })()), "neutral_sentiment", [], "any", false, false, false, 1216), 0)) : (0)), "html", null, true);
        yield "%\">
                                                    ";
        // line 1217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reviewStats"] ?? null), "neutral_sentiment", [], "any", true, true, false, 1217)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 1217, $this->source); })()), "neutral_sentiment", [], "any", false, false, false, 1217), 0)) : (0)), "html", null, true);
        yield "%
                                                </div>
                                            </div>
                                            <div class=\"progress\">
                                                <div class=\"progress-bar bg-danger\" style=\"width: ";
        // line 1221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reviewStats"] ?? null), "negative_sentiment", [], "any", true, true, false, 1221)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 1221, $this->source); })()), "negative_sentiment", [], "any", false, false, false, 1221), 0)) : (0)), "html", null, true);
        yield "%\">
                                                    ";
        // line 1222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reviewStats"] ?? null), "negative_sentiment", [], "any", true, true, false, 1222)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 1222, $this->source); })()), "negative_sentiment", [], "any", false, false, false, 1222), 0)) : (0)), "html", null, true);
        yield "%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Rating Distribution -->
                        <div class=\"rating-distribution mt-4\">
                            <h4>Rating Distribution</h4>
                            <div class=\"row\">
                                ";
        // line 1235
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(5, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 1236
            yield "                                <div class=\"col-12 mb-2\">
                                    <div class=\"d-flex align-items-center\">
                                        <span class=\"mr-2\">";
            // line 1238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield " ★</span>
                                        <div class=\"progress flex-grow-1\" style=\"height: 20px;\">
                                            <div class=\"progress-bar\" role=\"progressbar\" 
                                                 style=\"width: ";
            // line 1241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reviewStats"] ?? null), (("rating_" . $context["i"]) . "_percent"), [], "any", true, true, false, 1241)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 1241, $this->source); })()), (("rating_" . $context["i"]) . "_percent"), [], "any", false, false, false, 1241), 0)) : (0)), "html", null, true);
            yield "%\"
                                                 aria-valuenow=\"";
            // line 1242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reviewStats"] ?? null), (("rating_" . $context["i"]) . "_percent"), [], "any", true, true, false, 1242)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 1242, $this->source); })()), (("rating_" . $context["i"]) . "_percent"), [], "any", false, false, false, 1242), 0)) : (0)), "html", null, true);
            yield "\"
                                                 aria-valuemin=\"0\" 
                                                 aria-valuemax=\"100\">
                                                ";
            // line 1245
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reviewStats"] ?? null), (("rating_" . $context["i"]) . "_percent"), [], "any", true, true, false, 1245)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 1245, $this->source); })()), (("rating_" . $context["i"]) . "_percent"), [], "any", false, false, false, 1245), 0)) : (0)), "html", null, true);
            yield "%
                                            </div>
                                        </div>
                                        <span class=\"ml-2\">";
            // line 1248
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reviewStats"] ?? null), ("rating_" . $context["i"]), [], "any", true, true, false, 1248)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 1248, $this->source); })()), ("rating_" . $context["i"]), [], "any", false, false, false, 1248), 0)) : (0)), "html", null, true);
            yield "</span>
                                    </div>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1252
        yield "                            </div>
                        </div>

                        <!-- Revenue Overview Section -->
                        <div class=\"stats-overview\">
                            <div class=\"stats-item\">
                                <h4>Total Revenue</h4>
                                <div class=\"value\" id=\"totalRevenue\">0.00 €</div>
                            </div>
                            <div class=\"stats-item\">
                                <h4>Average Order Value</h4>
                                <div class=\"value\" id=\"avgRevenue\">0.00 €</div>
                            </div>
                        </div>

                        <!-- Revenue Trend Chart -->
                        <div class=\"stats-card\">
                            <h3>Revenue Trend</h3>
                            <div class=\"chart-container\">
                                <div id=\"revenueTrendChart\"></div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class=\"content-footer footer bg-footer-theme\">
                        <div class=\"container-xxl\">
                            <div class=\"footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column\">
                                <div>
                                    ";
        // line 1282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Golden Touch
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->
                    <div class=\"content-backdrop fade\"></div>
                </div>
                <!-- / Content wrapper -->
            </div>
            <!-- / Layout container -->
        </div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <script src=\"";
        // line 1298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1299
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/node-waves/node-waves.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/hammer/hammer.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1304
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/menu.js"), "html", null, true);
        yield "\"></script>

    <!-- Vendors JS -->
    <script src=\"";
        // line 1307
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/apex-charts/apexcharts.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/swiper/swiper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/datatables/jquery.dataTables.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/datatables-bs5/datatables.bootstrap5.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/datatables-responsive/responsive.dataTables.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js"), "html", null, true);
        yield "\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js\"></script>

    <!-- Main JS -->
    <script src=\"";
        // line 1318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Theme toggler
        document.getElementById('themeToggle').addEventListener('click', function() {
            const html = document.documentElement;
            const icon = this.querySelector('i');
            
            if (html.classList.contains('light-style')) {
                html.classList.remove('light-style');
                html.classList.add('dark-style');
                icon.classList.remove('ri-moon-line');
                icon.classList.add('ri-sun-line');
            } else {
                html.classList.remove('dark-style');
                html.classList.add('light-style');
                icon.classList.remove('ri-sun-line');
                icon.classList.add('ri-moon-line');
            }
        });

        // ... existing code ...
// ... existing code ...

function refreshDashboardData() {
    \$.ajax({
        url: '";
        // line 1351
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_refresh");
        yield "',
        type: 'GET',
        dataType: 'json',
        data: {
            year: new Date().getFullYear() // Send current year as parameter
        },
        success: function(response) {
            if (response.success) {
                console.log('Dashboard data refreshed successfully:', response);
                
                // Update revenue chart if it exists
                if (response.revenueStats && response.revenueStats.monthly_data && typeof revenueChart !== 'undefined') {
                    const revenueData = response.revenueStats.monthly_data.map(item => item.revenue);
                    revenueChart.data.datasets[0].data = revenueData;
                    revenueChart.update();
                    
                    // Update revenue stats
                    if (document.getElementById('totalRevenue')) {
                        document.getElementById('totalRevenue').textContent = 
                            response.revenueStats.total_revenue.toFixed(2) + ' €';
                    }
                    
                    if (document.getElementById('avgRevenue')) {
                        document.getElementById('avgRevenue').textContent = 
                            response.revenueStats.avg_revenue_per_pack.toFixed(2) + ' €';
                    }
                }
                
                // Update review stats
                if (response.reviewStats && typeof sentimentChart !== 'undefined') {
                    const sentimentData = [
                        response.reviewStats.positive_sentiment || 0,
                        response.reviewStats.neutral_sentiment || 0,
                        response.reviewStats.negative_sentiment || 0
                    ];
                    
                    sentimentChart.data.datasets[0].data = sentimentData;
                    sentimentChart.update();
                }
                
                // Update pack stats
                if (response.packStats && response.packStats.length > 0) {
                    // Update pack charts and metrics here
                    // This would depend on how your pack charts are initialized
                }
                
                // Update request stats
                if (response.requestStats && response.requestStats.length > 0) {
                    // Update request charts and metrics here
                }
                
                console.log('Dashboard data updated successfully');
            } else {
                console.error('Failed to refresh dashboard data:', response.error);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error refreshing dashboard data:', error);
            console.log('Response:', xhr.responseText);
            
            // Try to parse the error response
            try {
                const errorResponse = JSON.parse(xhr.responseText);
                console.error('Error details:', errorResponse);
            } catch (e) {
                console.error('Could not parse error response');
            }
        }
    });
}

// ... existing code ...

// ... existing code ...

        // Show detailed stats modal
        function showStatDetails(statType) {
            const stats = {
                sales: {
                    title: 'Sales Analytics',
                    data: [
                        { label: 'Today', value: '25', change: '+15%' },
                        { label: 'This Week', value: '142', change: '+22%' },
                        { label: 'This Month', value: '587', change: '+12.5%' },
                        { label: 'This Year', value: '2,845', change: '+18.3%' }
                    ]
                },
                revenue: {
                    title: 'Revenue Analytics',
                    data: [
                        { label: 'Today', value: '€1,250', change: '+12%' },
                        { label: 'This Week', value: '€7,845', change: '+8.4%' },
                        { label: 'This Month', value: '€32,456', change: '+15.2%' },
                        { label: 'This Year', value: '€245,845', change: '+25.8%' }
                    ]
                },
                avgRevenue: {
                    title: 'Average Revenue Analytics',
                    data: [
                        { label: 'Per Sale', value: '€52', change: '+5.2%' },
                        { label: 'Per Customer', value: '€156', change: '+8.7%' },
                        { label: 'Per Event', value: '€1,845', change: '+12.4%' },
                        { label: 'Lifetime Value', value: '€4,562', change: '+18.9%' }
                    ]
                },
                events: {
                    title: 'Event Analytics',
                    data: [
                        { label: 'Active Events', value: '12', change: '+2' },
                        { label: 'Upcoming Events', value: '8', change: '+3' },
                        { label: 'Completed Events', value: '24', change: '0' },
                        { label: 'Total Revenue', value: '€124,845', change: '+22.5%' }
                    ]
                }
            };

            const stat = stats[statType];
            const modalContent = `
                <div class=\"modal fade\" id=\"statModal\" tabindex=\"-1\">
                    <div class=\"modal-dialog modal-dialog-centered\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header border-bottom-0\">
                                <h5 class=\"modal-title\">\${stat.title}</h5>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                            </div>
                            <div class=\"modal-body\">
                                <div class=\"row\">
                                    \${stat.data.map(item => `
                                        <div class=\"col-6 mb-4\">
                                            <div class=\"p-3 border rounded\">
                                                <small class=\"text-muted d-block mb-1\">\${item.label}</small>
                                                <div class=\"d-flex align-items-center\">
                                                    <h4 class=\"mb-0\">\${item.value}</h4>
                                                    <small class=\"ms-2 \${item.change.startsWith('+') ? 'text-success' : 'text-danger'}\">
                                                        \${item.change}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    `).join('')}
                                </div>
                                <div class=\"chart-container mt-4\" style=\"height: 200px;\">
                                    <canvas id=\"statDetailChart\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;

            // Remove existing modal if any
            const existingModal = document.getElementById('statModal');
            if (existingModal) {
                existingModal.remove();
            }

            // Add new modal to the DOM
            document.body.insertAdjacentHTML('beforeend', modalContent);

            // Initialize and show the modal
            const modal = new bootstrap.Modal(document.getElementById('statModal'));
            modal.show();

            // Initialize the chart
            const ctx = document.getElementById('statDetailChart').getContext('2d');
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    datasets: [{
                        label: stat.title,
                        data: [65, 59, 80, 81, 56, 55],
                        borderColor: getComputedStyle(document.documentElement).getPropertyValue('--primary-color'),
                        tension: 0.4,
                        fill: true,
                        backgroundColor: `\${getComputedStyle(document.documentElement).getPropertyValue('--primary-color')}20`
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        x: {
                            grid: {
                                display: false
                            }
                        },
                        y: {
                            grid: {
                                borderDash: [5, 5]
                            }
                        }
                    }
                }
            });
        }

        // Initialize DataTable with modern styling
        \$(document).ready(function() {
            const packStatsTable = \$('#packStatsTable').DataTable({
                dom: '<\"row\"<\"col-sm-12 col-md-6\"l><\"col-sm-12 col-md-6\"f>>t<\"row\"<\"col-sm-12 col-md-6\"i><\"col-sm-12 col-md-6\"p>>',
                language: {
                    search: \"\",
                    searchPlaceholder: \"Search packs...\",
                    lengthMenu: \"_MENU_ packs per page\",
                },
                pageLength: 10,
                ordering: true,
                responsive: true,
                autoWidth: false,
                drawCallback: function() {
                    \$('.dataTables_paginate .pagination').addClass('pagination-rounded');
                }
            });

            // Add custom search styling
            \$('.dataTables_filter input').addClass('form-control');
            \$('.dataTables_length select').addClass('form-select');

            // Handle pack row clicks
            \$('#packStatsTable tbody').on('click', 'tr.pack-row', function(e) {
                // Don't navigate if clicking dropdown or its children
                if (e.target.closest('.dropdown')) {
                    return;
                }
                const packId = \$(this).data('pack-id');
                window.location.href = \"";
        // line 1582
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pack_show", ["id" => "PACK_ID"]);
        yield "\".replace('PACK_ID', packId);
            });
        });

        // Initialize Chart.js with modern styling
        const ctx = document.getElementById('purchaseChart').getContext('2d');
        const purchaseData = ";
        // line 1588
        yield json_encode((isset($context["purchaseTrends"]) || array_key_exists("purchaseTrends", $context) ? $context["purchaseTrends"] : (function () { throw new RuntimeError('Variable "purchaseTrends" does not exist.', 1588, $this->source); })()));
        yield ";
        
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: purchaseData.map(item => item.date),
                datasets: [
                    {
                        label: 'Purchases',
                        data: purchaseData.map(item => item.purchases),
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2,
                        tension: 0.4,
                        pointRadius: 3
                    },
                    {
                        label: 'Revenue',
                        data: purchaseData.map(item => parseFloat(item.revenue)),
                        backgroundColor: 'rgba(40, 199, 111, 0.2)',
                        borderColor: 'rgba(40, 199, 111, 1)',
                        borderWidth: 2,
                        tension: 0.4,
                        pointRadius: 3,
                        yAxisID: 'y1'
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                interaction: {
                    intersect: false,
                    mode: 'index'
                },
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            usePointStyle: true,
                            padding: 20
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(255, 255, 255, 0.9)',
                        titleColor: '#000',
                        bodyColor: '#666',
                        bodySpacing: 4,
                        padding: 12,
                        borderColor: 'rgba(0,0,0,0.1)',
                        borderWidth: 1,
                        displayColors: true,
                        usePointStyle: true
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        }
                    },
                    y: {
                        grid: {
                            borderDash: [5, 5]
                        }
                    },
                    y1: {
                        beginAtZero: true,
                        position: 'right',
                        title: {
                            display: true,
                            text: 'Revenue (€)'
                        },
                        grid: {
                            drawOnChartArea: false
                        }
                    }
                }
            }
        });

        // Real-time dashboard updates
        function refreshDashboard() {
            const loadingOverlays = document.querySelectorAll('.loading-overlay');
            loadingOverlays.forEach(overlay => overlay.style.display = 'flex');

            fetch('";
        // line 1674
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_refresh");
        yield "')
                .then(response => response.json())
                .then(data => {
                    console.log('Dashboard data:', data);
                    updateDashboard(data);
                })
                .catch(error => {
                    console.error('Error refreshing data:', error);
                    loadingOverlays.forEach(overlay => overlay.style.display = 'none');
                });
        }

       function updateDashboard(data) {
    // Update statistics with animations
    if (data.revenueStats) {
        animateValue('totalSales', parseInt(document.getElementById('totalSales').textContent), data.revenueStats.total_sales);
        animateValue('totalRevenue', parseFloat(document.getElementById('totalRevenue').textContent.replace('€', '')), data.revenueStats.total_revenue);
        animateValue('avgRevenue', parseFloat(document.getElementById('avgRevenue').textContent.replace('€', '')), data.revenueStats.avg_revenue_per_pack);
    }
    
    // Update active events count
    if (data.activeEvents !== undefined) {
        animateValue('activeEvents', parseInt(document.getElementById('activeEvents').textContent || '0'), data.activeEvents);
    }
    
    // Update charts with smooth transitions
    // ... existing code ...


            // Update charts with smooth transitions
            if (data.purchaseTrends) {
                purchaseChart.data.labels = data.purchaseTrends.map(item => item.date);
                purchaseChart.data.datasets[0].data = data.purchaseTrends.map(item => item.purchases);
                purchaseChart.data.datasets[1].data = data.purchaseTrends.map(item => item.revenue);
                purchaseChart.update('none'); // Use 'none' for smooth transitions
            }

            // Update pack statistics table
            if (data.packStats) {
                const table = \$('#packStatsTable').DataTable();
                table.clear();
                data.packStats.forEach(pack => {
                    table.row.add([
                        `<div class=\"d-flex align-items-center\">
                            <div class=\"avatar avatar-sm me-2 bg-light\">
                                <span class=\"avatar-initial rounded-circle bg-label-primary\">
                                    \${pack.description.charAt(0)}
                                </span>
                            </div>
                            <span>\${pack.description}</span>
                        </div>`,
                        pack.event_name,
                        `<div class=\"d-flex align-items-center\">
                            \${pack.purchases}
                            <div class=\"ms-2\">
                                <small class=\"text-success\">+\${pack.purchases_change || 0}%</small>
                            </div>
                        </div>`,
                        `<div class=\"d-flex align-items-center\">
                            <i class=\"ri-star-fill text-warning me-1\"></i>
                            <span>\${pack.avg_rating || 0}</span>
                        </div>`,
                        `€\${pack.total_revenue}`,
                        `<span class=\"badge bg-success bg-opacity-10 text-success\">Active</span>`,
                        `<div class=\"dropdown\">
                            <button class=\"btn btn-light btn-sm\" data-bs-toggle=\"dropdown\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"/admin/pack/\${pack.id}\">
                                    <i class=\"ri-eye-line me-2\"></i> View Details
                                </a></li>
                                <li><a class=\"dropdown-item\" href=\"/admin/pack/edit/\${pack.id}\">
                                    <i class=\"ri-edit-line me-2\"></i> Edit
                                </a></li>
                            </ul>
                        </div>`
                    ]).draw(false);
                });
            }
        }

        function animateValue(elementId, start, end) {
            const element = document.getElementById(elementId);
            const duration = 1000;
            const startTimestamp = performance.now();
            
            const updateValue = (currentTimestamp) => {
                const elapsed = currentTimestamp - startTimestamp;
                const progress = Math.min(elapsed / duration, 1);
                
                const current = Math.round(start + (end - start) * progress);
                element.textContent = elementId.includes('Revenue') ? `€\${current}` : current;
                
                if (progress < 1) {
                    requestAnimationFrame(updateValue);
                }
            };
            
            requestAnimationFrame(updateValue);
        }

        // Refresh dashboard every 30 seconds
        setInterval(refreshDashboard, 30000);

        // Initialize tooltips and popovers
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
        tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });

        const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"popover\"]'));
        popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl);
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize purchase trends chart
            const purchaseTrendsCtx = document.getElementById('purchaseTrendsChart').getContext('2d');
            const purchaseTrendsData = ";
        // line 1795
        yield json_encode((isset($context["purchaseTrends"]) || array_key_exists("purchaseTrends", $context) ? $context["purchaseTrends"] : (function () { throw new RuntimeError('Variable "purchaseTrends" does not exist.', 1795, $this->source); })()));
        yield ";
            
            new Chart(purchaseTrendsCtx, {
                type: 'line',
                data: {
                    labels: purchaseTrendsData.map(item => item.date),
                    datasets: [
                        {
                            label: 'Sales',
                            data: purchaseTrendsData.map(item => item.purchases),
                            backgroundColor: 'rgba(115, 103, 240, 0.2)',
                            borderColor: 'rgba(115, 103, 240, 1)',
                            borderWidth: 2,
                            tension: 0.4,
                            pointRadius: 3
                        },
                        {
                            label: 'Revenue',
                            data: purchaseTrendsData.map(item => parseFloat(item.revenue)),
                            backgroundColor: 'rgba(0, 207, 232, 0.2)',
                            borderColor: 'rgba(0, 207, 232, 1)',
                            borderWidth: 2,
                            tension: 0.4,
                            pointRadius: 3,
                            yAxisID: 'y1'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Sales Count'
                            }
                        },
                        y1: {
                            beginAtZero: true,
                            position: 'right',
                            title: {
                                display: true,
                                text: 'Revenue (€)'
                            },
                            grid: {
                                drawOnChartArea: false
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Date'
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false
                        }
                    }
                }
            });

            // ... existing code ...

// Initialize review trends chart
const reviewTrendsCtx = document.getElementById('reviewTrendsChart').getContext('2d');
";
        // line 1868
        if (array_key_exists("reviewTrends", $context)) {
            // line 1869
            yield "    const reviewTrendsData = ";
            yield json_encode((isset($context["reviewTrends"]) || array_key_exists("reviewTrends", $context) ? $context["reviewTrends"] : (function () { throw new RuntimeError('Variable "reviewTrends" does not exist.', 1869, $this->source); })()));
            yield ";
";
        } else {
            // line 1871
            yield "    // Default data if reviewTrends is not defined
    const reviewTrendsData = [
        ";
            // line 1873
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, 6));
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
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 1874
                yield "            {
                date: '";
                // line 1875
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate("now", (("-" . $context["i"]) . " days")), "Y-m-d"), "html", null, true);
                yield "',
                reviews: ";
                // line 1876
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 0, 10), "html", null, true);
                yield ",
                avg_rating: ";
                // line 1877
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((Twig\Extension\CoreExtension::random($this->env->getCharset(), 30, 50) / 10), 1), "html", null, true);
                yield "
            }";
                // line 1878
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1878)) {
                    yield ",";
                }
                // line 1879
                yield "        ";
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
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1880
            yield "    ];
";
        }
        // line 1882
        yield "
new Chart(reviewTrendsCtx, {
    type: 'line',
    // ... rest of the chart configuration ...
            
            new Chart(reviewTrendsCtx, {
                type: 'line',
                data: {
                    labels: reviewTrendsData.map(item => item.date),
                    datasets: [
                        {
                            label: 'Reviews',
                            data: reviewTrendsData.map(item => item.reviews),
                            backgroundColor: 'rgba(255, 159, 67, 0.2)',
                            borderColor: 'rgba(255, 159, 67, 1)',
                            borderWidth: 2,
                            tension: 0.4,
                            pointRadius: 3
                        },
                        {
                            label: 'Avg Rating',
                            data: reviewTrendsData.map(item => item.avg_rating),
                            backgroundColor: 'rgba(234, 84, 85, 0.2)',
                            borderColor: 'rgba(234, 84, 85, 1)',
                            borderWidth: 2,
                            tension: 0.4,
                            pointRadius: 3,
                            yAxisID: 'y1'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Review Count'
                            }
                        },
                        y1: {
                            beginAtZero: true,
                            position: 'right',
                            title: {
                                display: true,
                                text: 'Average Rating'
                            },
                            min: 0,
                            max: 5,
                            grid: {
                                drawOnChartArea: false
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Date'
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false
                        }
                    }
                }
            });
            
            // Initialize category pie chart
            const categoryPieCtx = document.getElementById('categoryPieChart').getContext('2d');
            new Chart(categoryPieCtx, {
                type: 'pie',
                data: {
                    labels: ['VIP Packages', 'Standard Packages', 'Basic Packages'],
                    datasets: [{
                        data: [45, 30, 25],
                        backgroundColor: [
                            'rgba(115, 103, 240, 0.7)',
                            'rgba(0, 207, 232, 0.7)',
                            'rgba(254, 176, 25, 0.7)'
                        ],
                        borderColor: [
                            'rgba(115, 103, 240, 1)',
                            'rgba(0, 207, 232, 1)',
                            'rgba(254, 176, 25, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 20
                            }
                        }
                    }
                }
            });
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
        return "admin/dashboard/index.html.twig";
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
        return array (  2466 => 1882,  2462 => 1880,  2448 => 1879,  2444 => 1878,  2440 => 1877,  2436 => 1876,  2432 => 1875,  2429 => 1874,  2412 => 1873,  2408 => 1871,  2402 => 1869,  2400 => 1868,  2324 => 1795,  2200 => 1674,  2111 => 1588,  2102 => 1582,  1868 => 1351,  1832 => 1318,  1824 => 1313,  1820 => 1312,  1816 => 1311,  1812 => 1310,  1808 => 1309,  1804 => 1308,  1800 => 1307,  1794 => 1304,  1790 => 1303,  1786 => 1302,  1782 => 1301,  1778 => 1300,  1774 => 1299,  1770 => 1298,  1751 => 1282,  1719 => 1252,  1709 => 1248,  1703 => 1245,  1697 => 1242,  1693 => 1241,  1687 => 1238,  1683 => 1236,  1679 => 1235,  1663 => 1222,  1659 => 1221,  1652 => 1217,  1648 => 1216,  1641 => 1212,  1637 => 1211,  1607 => 1183,  1588 => 1178,  1579 => 1172,  1573 => 1169,  1561 => 1159,  1552 => 1157,  1548 => 1156,  1543 => 1154,  1532 => 1146,  1527 => 1144,  1517 => 1137,  1512 => 1135,  1498 => 1124,  1492 => 1121,  1486 => 1118,  1476 => 1111,  1472 => 1110,  1465 => 1107,  1448 => 1106,  1405 => 1066,  1398 => 1062,  1391 => 1058,  1376 => 1045,  1367 => 1042,  1362 => 1040,  1357 => 1038,  1354 => 1037,  1350 => 1036,  1342 => 1031,  1338 => 1030,  1308 => 1002,  1301 => 997,  1298 => 996,  1288 => 992,  1284 => 991,  1279 => 990,  1276 => 989,  1273 => 988,  1270 => 987,  1268 => 986,  1261 => 982,  1257 => 981,  1253 => 980,  1248 => 978,  1243 => 976,  1240 => 975,  1235 => 974,  1233 => 973,  1221 => 963,  1214 => 958,  1211 => 957,  1202 => 954,  1198 => 953,  1195 => 952,  1190 => 951,  1188 => 950,  1173 => 938,  1166 => 934,  1162 => 933,  1155 => 929,  1151 => 928,  1144 => 924,  1140 => 923,  1123 => 908,  1111 => 902,  1107 => 901,  1103 => 900,  1093 => 893,  1089 => 892,  1081 => 887,  1077 => 886,  1069 => 881,  1065 => 880,  1052 => 870,  1048 => 869,  1042 => 866,  1034 => 862,  1030 => 861,  1026 => 860,  1018 => 856,  1014 => 855,  1010 => 854,  1005 => 852,  1001 => 851,  996 => 850,  992 => 849,  950 => 809,  941 => 802,  938 => 801,  927 => 796,  920 => 792,  914 => 789,  904 => 781,  899 => 780,  897 => 779,  778 => 663,  770 => 658,  665 => 556,  642 => 536,  619 => 516,  596 => 496,  570 => 473,  524 => 430,  512 => 421,  465 => 377,  452 => 367,  116 => 34,  112 => 33,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  92 => 28,  88 => 27,  82 => 24,  78 => 23,  74 => 22,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" class=\"light-style layout-navbar-fixed layout-menu-fixed\" dir=\"ltr\" data-theme=\"theme-default\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>Dashboard - Admin</title>
    <meta name=\"description\" content=\"Admin dashboard\" />
    
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
            --purple-color: #9C27B0;
            --indigo-color: #3F51B5;
            --pink-color: #E91E63;
            --teal-color: #009688;
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
        .refresh-btn {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background-color: #4299e1;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 9999px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            cursor: pointer;
            transition: all 0.2s;
        }
        .refresh-btn:hover {
            background-color: #3182ce;
            transform: translateY(-1px);
        }
        .refresh-btn i {
            margin-right: 0.5rem;
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
                    <li class=\"menu-item active\">
                        <a href=\"{{ path('admin_dashboard') }}\" class=\"menu-link\">
                            <i class=\"menu-icon tf-icons ti ti-dashboard\"></i>
                            <div>Dashboard</div>
                        </a>
                    </li>
                    <!-- Dashboards -->
                    

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
                        <!-- Welcome Banner -->
                        <div class=\"row mb-4\">
                            <div class=\"col-12\">
                                <div class=\"dashboard-card p-4\" data-aos=\"fade-up\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div>
                                            <h3 class=\"mb-1\">Welcome back, {{  'Admin' }}! 👋</h3>
                                            <p class=\"text-muted mb-0\">Here's what's happening with your business today.</p>
                                        </div>
                                        <div class=\"d-flex gap-3\">
                                            <button class=\"btn btn-primary d-flex align-items-center gap-2\">
                                                <i class=\"ri-download-cloud-2-line\"></i> Download Report
                                            </button>
                                            <button class=\"btn btn-light\" id=\"themeToggle\">
                                                <i class=\"ri-moon-line\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Stats Cards -->
                        <div class=\"row mb-4\">
                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card stat-card bg-primary bg-opacity-10 cursor-pointer\" onclick=\"showStatDetails('sales')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Total Sales</h6>
                                            <h2 class=\"mb-0\" id=\"totalSales\">{{ packStats.total_sales|default(0) }}</h2>
                                            <small class=\"text-success d-flex align-items-center mt-2\">
                                                <i class=\"ri-arrow-up-line me-1\"></i> +12.5%
                                            </small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-shopping-bag-3-line text-primary\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-primary\" style=\"width: 75%\"></div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"dashboard-card stat-card bg-success bg-opacity-10 cursor-pointer\" onclick=\"showStatDetails('revenue')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Total Revenue</h6>
                                            <h2 class=\"mb-0\" id=\"totalRevenue\">€{{ revenueStats.total_revenue|default(0) }}</h2>
                                            <small class=\"text-success d-flex align-items-center mt-2\">
                                                <i class=\"ri-arrow-up-line me-1\"></i> +8.4%
                                            </small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-money-euro-circle-line text-success\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-success\" style=\"width: 65%\"></div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                                <div class=\"dashboard-card stat-card bg-warning bg-opacity-10 cursor-pointer\" onclick=\"showStatDetails('avgRevenue')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Avg. Revenue/Pack</h6>
                                            <h2 class=\"mb-0\" id=\"avgRevenue\">€{{ revenueStats.avg_revenue_per_pack|default(0) }}</h2>
                                            <small class=\"text-warning d-flex align-items-center mt-2\">
                                                <i class=\"ri-arrow-up-line me-1\"></i> +5.2%
                                            </small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-bar-chart-box-line text-warning\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-warning\" style=\"width: 45%\"></div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                                <div class=\"dashboard-card stat-card bg-info bg-opacity-10 cursor-pointer\" onclick=\"showStatDetails('events')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Active Events</h6>
                                            <h3 class=\"fw-semibold mb-0\">{{ activeEvents|default(60) }}</h3>
                                            <p class=\"text-muted mb-0\">Updated</p>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-calendar-event-line text-info\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-info\" style=\"width: 60%\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- New Stats Cards -->
                        <div class=\"row mb-4\">
                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card stat-card bg-purple bg-opacity-10 cursor-pointer\" onclick=\"showStatDetails('totalPacks')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Total Packs</h6>
                                            <h2 class=\"mb-0\" id=\"totalPacks\">6</h2>
                                            <small class=\"text-success d-flex align-items-center mt-2\">
                                                <i class=\"ri-arrow-up-line me-1\"></i> +83.33%
                                            </small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-package-line text-purple\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-purple\" style=\"width: 83%\"></div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"dashboard-card stat-card bg-indigo bg-opacity-10 cursor-pointer\" onclick=\"showStatDetails('totalUsers')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Total Utilisateurs</h6>
                                            <h2 class=\"mb-0\" id=\"totalUsers\">8</h2>
                                            <small class=\"text-muted d-flex align-items-center mt-2\">
                                                <i class=\"ri-arrow-right-line me-1\"></i> +0%
                                            </small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-user-line text-indigo\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-indigo\" style=\"width: 50%\"></div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                                <div class=\"dashboard-card stat-card bg-pink bg-opacity-10 cursor-pointer\" onclick=\"showStatDetails('bestSellingPack')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Pack le Plus Vendu</h6>
                                            <h2 class=\"mb-0\" id=\"bestSellingPack\">6</h2>
                                            <small class=\"text-truncate d-block mt-1\" style=\"max-width: 150px;\">Pack Mariage offre u...</small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-award-line text-pink\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-pink\" style=\"width: 75%\"></div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-6 col-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                                <div class=\"dashboard-card stat-card bg-teal bg-opacity-10 cursor-pointer\" onclick=\"showStatDetails('avgPackPrice')\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h6 class=\"text-muted mb-2\">Prix Moyen des Packs</h6>
                                            <h2 class=\"mb-0\" id=\"avgPackPrice\">€2411.17</h2>
                                            <small class=\"text-muted d-block mt-1\">Basé sur tous les packs</small>
                                        </div>
                                        <div class=\"stat-icon\">
                                            <i class=\"ri-price-tag-3-line text-teal\"></i>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\" style=\"height: 4px;\">
                                        <div class=\"progress-bar bg-teal\" style=\"width: 65%\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Stats Row -->
                        <div class=\"row mb-4\">
                            <div class=\"col-md-6 col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
    <h6 class=\"mb-0\">Customer Satisfaction</h6>
    <i class=\"ri-star-line text-warning\"></i>
</div>
<div class=\"d-flex align-items-center\">
    <h1 class=\"display-4 fw-bold mb-0\">{{ reviewStats.avg_rating|default(0) }}/5.0</h1>
    <span class=\"text-success ms-2 fw-semibold\">
        <i class=\"ri-arrow-up-line\"></i> +0.3
    </span>
</div>
<p class=\"text-muted small\">Based on {{ reviewStats.total_reviews|default(0) }} reviews</p>
                                    <div class=\"d-flex align-items-center mb-1\">
                                        <div class=\"flex-grow-1\">
                                            <div class=\"progress\" style=\"height: 6px;\">
                                                <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 95%\"></div>
                                            </div>
                                        </div>
                                        <span class=\"ms-2 fw-semibold\">Excellent</span>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-md-6 col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                        <h6 class=\"mb-0\">Popular Categories</h6>
                                        <i class=\"ri-apps-line text-primary\"></i>
                                    </div>
                                    <div id=\"categoryPieChart\" style=\"height: 220px;\"></div>
                                    <div class=\"d-flex justify-content-between text-center mt-2\">
                                        <div>
                                            <span class=\"d-block fw-semibold\">VIP Packages</span>
                                            <small class=\"text-muted\">45%</small>
                                        </div>
                                        <div>
                                            <span class=\"d-block fw-semibold\">Standard Packages</span>
                                            <small class=\"text-muted\">30%</small>
                                        </div>
                                        <div>
                                            <span class=\"d-block fw-semibold\">Basic Packages</span>
                                            <small class=\"text-muted\">25%</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-md-6 col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                        <h6 class=\"mb-0\">Recent Activity</h6>
                                        <i class=\"ri-time-line text-warning\"></i>
                                    </div>
                                    <div class=\"activity-list\">
                                        <div class=\"activity-item d-flex align-items-center mb-3\">
                                            <div class=\"activity-icon bg-success bg-opacity-10 text-success rounded-circle p-2 me-3\">
                                                <i class=\"ri-shopping-cart-2-line\"></i>
                                            </div>
                                            <div>
                                                <p class=\"mb-0 small\">New purchase</p>
                                                <small class=\"text-muted\">2 minutes ago</small>
                                            </div>
                                        </div>
                                        <div class=\"activity-item d-flex align-items-center mb-3\">
                                            <div class=\"activity-icon bg-primary bg-opacity-10 text-primary rounded-circle p-2 me-3\">
                                                <i class=\"ri-user-add-line\"></i>
                                            </div>
                                            <div>
                                                <p class=\"mb-0 small\">New customer registration</p>
                                                <small class=\"text-muted\">15 minutes ago</small>
                                            </div>
                                        </div>
                                        <div class=\"activity-item d-flex align-items-center\">
                                            <div class=\"activity-icon bg-warning bg-opacity-10 text-warning rounded-circle p-2 me-3\">
                                                <i class=\"ri-star-line\"></i>
                                            </div>
                                            <div>
                                                <p class=\"mb-0 small\">New review received</p>
                                                <small class=\"text-muted\">45 minutes ago</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                                                <!-- Charts -->
                        <div class=\"row mb-4\">
                            <div class=\"col-lg-8\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Purchase Trends</h5>
                                            <p class=\"text-muted mb-0\">Monthly overview of sales and revenue</p>
                                        </div>
                                        <div class=\"btn-group\">
                                            <button class=\"btn btn-outline-primary btn-sm active\">Monthly</button>
                                            <button class=\"btn btn-outline-primary btn-sm\">Weekly</button>
                                        </div>
                                    </div>
                                    <div class=\"chart-container\">
                                        <canvas id=\"purchaseChart\"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Top Events</h5>
                                            <p class=\"text-muted mb-0\">Best performing events</p>
                                        </div>
                                        <button class=\"btn btn-light btn-sm\">
                                            <i class=\"ri-more-2-fill\"></i>
                                        </button>
                                    </div>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-borderless mb-0\">
                                            <thead>
                                                <tr>
                                                    <th>Event</th>
                                                    <th>Sales</th>
                                                    <th>Rating</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {% if topEvents is defined and topEvents is not empty %}
                                                    {% for event in topEvents %}
                                                    <tr>
                                                        <td>
                                                            <div class=\"d-flex align-items-center\">
                                                                <div class=\"avatar avatar-sm me-2 bg-light\">
                                                                    <span class=\"avatar-initial rounded-circle bg-label-primary\">
                                                                        <i class=\"ri-calendar-event-line\"></i>
                                                                    </span>
                                                                </div>
                                                                <span>{{ event.event_name|default(event.name|default('Event')) }}</span>
                                                            </div>
                                                        </td>
                                                        <td>{{ event.total_sales|default(event.sales|default(0)) }}</td>
                                                        <td>
                                                            <div class=\"d-flex align-items-center\">
                                                                <i class=\"ri-star-fill text-warning me-1\"></i>
                                                                <span>{{ event.avg_rating|default(event.rating|default(0)) }}</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    {% endfor %}
                                                {% else %}
                                                    <tr>
                                                        <td colspan=\"3\" class=\"text-center py-3\">
                                                            <i class=\"ri-calendar-event-line text-muted\" style=\"font-size: 1.5rem;\"></i>
                                                            <p class=\"text-muted mt-2 mb-0\">No event data available</p>
                                                        </td>
                                                    </tr>
                                                {% endif %}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pack Statistics -->
                        <div class=\"row\">
                            <div class=\"col-12\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Pack Statistics</h5>
                                            <p class=\"text-muted mb-0\">Detailed overview of all packs</p>
                                        </div>
                                        <div class=\"d-flex gap-2\">
                                            <div class=\"btn-group\">
                                                <button class=\"btn btn-outline-primary btn-sm active\" onclick=\"filterByPeriod('week')\">Week</button>
                                                <button class=\"btn btn-outline-primary btn-sm\" onclick=\"filterByPeriod('month')\">Month</button>
                                                <button class=\"btn btn-outline-primary btn-sm\" onclick=\"filterByPeriod('year')\">Year</button>
                                            </div>
                                            <button class=\"btn btn-primary btn-sm\">
                                                <i class=\"ri-download-2-line me-1\"></i> Export
                                            </button>
                                        </div>
                                    </div>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover\" id=\"packStatsTable\">
                                            <thead>
                                                <tr>
                                                    <th>Pack</th>
                                                    <th>Event</th>
                                                    <th>Purchases</th>
                                                    <th>Revenue</th>
                                                    <th>Rating</th>
                                                    <th>Sentiment</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {% for pack in packStats %}
                                                <tr class=\"cursor-pointer pack-row\" data-pack-id=\"{{ pack.id }}\">
                                                    <td>{{ pack.description }}</td>
                                                    <td>{{ pack.event_name }}</td>
                                                    <td>
                                                        {{ pack.purchases }}
                                                        <span class=\"ml-2 {{ pack.purchases_change >= 0 ? 'text-success' : 'text-danger' }}\">
                                                            {{ pack.purchases_change >= 0 ? '+' : '' }}{{ pack.purchases_change }}%
                                                        </span>
                                                    </td>
                                                    <td>
                                                        {{ pack.total_revenue }}€
                                                        <span class=\"ml-2 {{ pack.revenue_change >= 0 ? 'text-success' : 'text-danger' }}\">
                                                            {{ pack.revenue_change >= 0 ? '+' : '' }}{{ pack.revenue_change }}%
                                                        </span>
                                                    </td>
                                                    <td>
                                                        {{ pack.avg_rating|number_format(1) }}/5
                                                        <div class=\"progress\" style=\"height: 5px;\">
                                                            <div class=\"progress-bar\" role=\"progressbar\" 
                                                                 style=\"width: {{ (pack.avg_rating/5)*100 }}%;\"
                                                                 aria-valuenow=\"{{ pack.avg_rating }}\" 
                                                                 aria-valuemin=\"0\" 
                                                                 aria-valuemax=\"5\">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"sentiment-bars\">
                                                            <div class=\"progress\" style=\"height: 5px; margin-bottom: 2px;\">
                                                                <div class=\"progress-bar bg-success\" 
                                                                     style=\"width: {{ pack.sentiment_analysis.positive }}%\"
                                                                     title=\"Positive: {{ pack.sentiment_analysis.positive }}%\">
                                                                </div>
                                                            </div>
                                                            <div class=\"progress\" style=\"height: 5px; margin-bottom: 2px;\">
                                                                <div class=\"progress-bar bg-warning\"
                                                                     style=\"width: {{ pack.sentiment_analysis.neutral }}%\"
                                                                     title=\"Neutral: {{ pack.sentiment_analysis.neutral }}%\">
                                                                </div>
                                                            </div>
                                                            <div class=\"progress\">
                                                                <div class=\"progress-bar bg-danger\"
                                                                     style=\"width: {{ pack.sentiment_analysis.negative }}%\"
                                                                     title=\"Negative: {{ pack.sentiment_analysis.negative }}%\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class=\"btn btn-sm btn-primary view-pack-details\"
                                                                data-pack-id=\"{{ pack.id }}\"
                                                                data-description=\"{{ pack.description }}\"
                                                                data-event=\"{{ pack.event_name }}\">
                                                            View Details
                                                        </button>
                                                    </td>
                                                </tr>
                                                {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review Analysis Section -->
                        <div class=\"row\">
                            <!-- Sentiment Analysis -->
                            <div class=\"col-md-4\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h5>Sentiment Analysis</h5>
                                        <div class=\"progress mb-2\">
                                            <div class=\"progress-bar bg-success\" style=\"width: {{ reviewStats.sentiment_distribution.positive_sentiment|default(0) }}%\">
                                                {{ reviewStats.sentiment_distribution.positive_sentiment|default(0) }}%
                                            </div>
                                        </div>
                                        <div class=\"progress mb-2\">
                                            <div class=\"progress-bar bg-warning\" style=\"width: {{ reviewStats.sentiment_distribution.neutral_sentiment|default(0) }}%\">
                                                {{ reviewStats.sentiment_distribution.neutral_sentiment|default(0) }}%
                                            </div>
                                        </div>
                                        <div class=\"progress mb-2\">
                                            <div class=\"progress-bar bg-danger\" style=\"width: {{ reviewStats.sentiment_distribution.negative_sentiment|default(0) }}%\">
                                                {{ reviewStats.sentiment_distribution.negative_sentiment|default(0) }}%
                                            </div>
                                        </div>
                                        <div class=\"text-muted\">
                                            <small>Based on {{ reviewStats.total_reviews|default(0) }} reviews</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Most Common Words -->
                            <div class=\"col-md-4\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h5>Most Common Words</h5>
                                        <div class=\"word-cloud\">
                                            {% if reviewStats.most_common_words is defined and reviewStats.most_common_words|length > 0 %}
                                                {% for word in reviewStats.most_common_words %}
                                                    <div class=\"word-item mb-2\">
                                                        <span class=\"word\">{{ word.word }}</span>
                                                        <span class=\"badge bg-primary\">{{ word.frequency }}</span>
                                                    </div>
                                                {% endfor %}
                                            {% else %}
                                                <div class=\"text-center py-3\">
                                                    <i class=\"ri-chat-3-line text-muted\" style=\"font-size: 2rem;\"></i>
                                                    <p class=\"text-muted mt-2\">No comment data available</p>
                                                </div>
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Top Commented Packs -->
                            <div class=\"col-md-4\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h5>Most Discussed Packs</h5>
                                        {% if reviewStats.top_commented_packs is defined and reviewStats.top_commented_packs|length > 0 %}
                                            {% for pack in reviewStats.top_commented_packs %}
                                                <div class=\"pack-stats mb-3\">
                                                    <h6>{{ pack.pack_name }}</h6>
                                                    <div class=\"d-flex justify-content-between mb-2\">
                                                        <small>{{ pack.total_reviews }} reviews</small>
                                                        <div>
                                                            <span class=\"badge bg-success\">{{ pack.positive }}</span>
                                                            <span class=\"badge bg-warning\">{{ pack.neutral }}</span>
                                                            <span class=\"badge bg-danger\">{{ pack.negative }}</span>
                                                        </div>
                                                    </div>
                                                    <div class=\"progress\" style=\"height: 8px;\">
                                                        {% set total = pack.positive + pack.neutral + pack.negative %}
                                                        {% set positive_pct = total > 0 ? (pack.positive / total) * 100 : 0 %}
                                                        {% set neutral_pct = total > 0 ? (pack.neutral / total) * 100 : 0 %}
                                                        {% set negative_pct = total > 0 ? (pack.negative / total) * 100 : 0 %}
                                                        <div class=\"progress-bar bg-success\" style=\"width: {{ positive_pct }}%\"></div>
                                                        <div class=\"progress-bar bg-warning\" style=\"width: {{ neutral_pct }}%\"></div>
                                                        <div class=\"progress-bar bg-danger\" style=\"width: {{ negative_pct }}%\"></div>
                                                    </div>
                                                </div>
                                            {% endfor %}
                                        {% else %}
                                            <div class=\"text-center py-3\">
                                                <i class=\"ri-chat-3-line text-muted\" style=\"font-size: 2rem;\"></i>
                                                <p class=\"text-muted mt-2\">No pack reviews available</p>
                                            </div>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews Analytics Section -->
                        <div class=\"row mb-4\">
                            <div class=\"col-12\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Reviews Analytics</h5>
                                            <p class=\"text-muted mb-0\">Customer feedback and sentiment analysis</p>
                                        </div>
                                        <div class=\"d-flex gap-2\">
                                            <button class=\"btn btn-outline-primary btn-sm\" onclick=\"downloadReviewsReport()\">
                                                <i class=\"ri-file-chart-line me-1\"></i> Export Report
                                            </button>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-4\">
                                            <div class=\"review-stats-card p-3 border rounded-3 mb-3\">
                                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                                    <h6 class=\"mb-0\">Overall Rating</h6>
                                                    <div class=\"rating-circle\">
                                                        <svg viewBox=\"0 0 36 36\" class=\"circular-chart\">
                                                            <path class=\"circle-bg\" d=\"M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831\"/>
                                                            <path class=\"circle\" stroke-dasharray=\"{{ (packStats.avg_rating|default(0) * 20) }}, 100\" d=\"M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831\"/>
                                                            <text x=\"18\" y=\"20.35\" class=\"percentage\">{{ packStats.avg_rating|default(0) }}/5</text>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class=\"rating-bars\">
                                                    {% for i in 5..1 %}
                                                    <div class=\"rating-bar-item d-flex align-items-center mb-2\">
                                                        <div class=\"stars me-2\">{{ i }}★</div>
                                                        <div class=\"progress flex-grow-1\" style=\"height: 8px;\">
                                                            <div class=\"progress-bar bg-warning\" style=\"width: {{ attribute(reviewStats, 'rating_' ~ i ~ '_percent')|default(0) }}%\"></div>
                                                        </div>
                                                        <span class=\"ml-2 small\">{{ attribute(reviewStats, 'rating_' ~ i ~ '_percent')|default(0) }}%</span>
                                                    </div>
                                                    {% endfor %}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"sentiment-analysis p-3 border rounded-3 mb-3\">
                                                <h6 class=\"mb-3\">Sentiment Analysis</h6>
                                                <div class=\"sentiment-chart-container\" style=\"height: 200px;\">
                                                    <canvas id=\"sentimentChart\"></canvas>
                                                </div>
                                                <div class=\"sentiment-stats mt-3\">
                                                    <div class=\"d-flex justify-content-between\">
                                                        <div class=\"text-success\">
                                                            <small>Positive</small>
                                                            <h6 class=\"mb-0\">{{ reviewStats.positive_sentiment|default(0) }}%</h6>
                                                        </div>
                                                        <div class=\"text-warning\">
                                                            <small>Neutral</small>
                                                            <h6 class=\"mb-0\">{{ reviewStats.neutral_sentiment|default(0) }}%</h6>
                                                        </div>
                                                        <div class=\"text-danger\">
                                                            <small>Negative</small>
                                                            <h6 class=\"mb-0\">{{ reviewStats.negative_sentiment|default(0) }}%</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"review-trends p-3 border rounded-3 mb-3\">
                                                <h6 class=\"mb-3\">Review Trends</h6>
                                                <div class=\"review-chart-container\" style=\"height: 200px;\">
                                                    <canvas id=\"reviewTrendsChart\"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pack Analytics Section -->
                        <div class=\"row mb-4\">
                            <div class=\"col-12\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"dashboard-card p-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <div>
                                            <h5 class=\"mb-1\">Pack Analytics</h5>
                                            <p class=\"text-muted mb-0\">Detailed performance metrics for each pack</p>
                                        </div>
                                        <div class=\"d-flex gap-2\">
                                            <div class=\"btn-group\">
                                                <button class=\"btn btn-outline-primary btn-sm active\" onclick=\"filterPackMetrics('week')\">Week</button>
                                                <button class=\"btn btn-outline-primary btn-sm\" onclick=\"filterPackMetrics('month')\">Month</button>
                                                <button class=\"btn btn-outline-primary btn-sm\" onclick=\"filterPackMetrics('year')\">Year</button>
                                            </div>
                                            <button class=\"btn btn-primary btn-sm\" onclick=\"downloadPackReport()\">
                                                <i class=\"ri-download-2-line me-1\"></i> Export Report
                                            </button>
                                        </div>
                                    </div>
                                    <div class=\"pack-metrics-grid\">
                                        {% for pack in packStats %}
                                        <div class=\"pack-metric-card\" data-aos=\"fade-up\" data-aos-delay=\"{{ loop.index * 100 }}\">
                                            <div class=\"pack-header d-flex justify-content-between align-items-start mb-3\">
                                                <div>
                                                    <h6 class=\"mb-1\">{{ pack.description }}</h6>
                                                    <span class=\"badge bg-primary bg-opacity-10 text-primary\">{{ pack.event_name }}</span>
                                                </div>
                                                <div class=\"dropdown\">
                                                    <button class=\"btn btn-light btn-sm\" data-bs-toggle=\"dropdown\">
                                                        <i class=\"ri-more-2-fill\"></i>
                                                    </button>
                                                    <ul class=\"dropdown-menu\">
                                                        <li><a class=\"dropdown-item\" href=\"#\" onclick=\"showPackDetails('{{ pack.id }}')\">
                                                            <i class=\"ri-dashboard-line me-2\"></i> Analytics
                                                        </a></li>
                                                        <li><a class=\"dropdown-item\" href=\"{{ path('admin_pack_show', {'id': pack.id}) }}\">
                                                            <i class=\"ri-eye-line me-2\"></i> View Details
                                                        </a></li>
                                                        <li><a class=\"dropdown-item\" href=\"#\" onclick=\"downloadPackReport('{{ pack.id }}')\">
                                                            <i class=\"ri-download-2-line me-2\"></i> Export Report
                                                        </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"pack-metrics\">
                                                <div class=\"row g-3\">
                                                    <div class=\"col-6\">
                                                        <div class=\"metric-item\">
                                                            <small class=\"text-muted d-block mb-1\">Sales</small>
                                                            <h6 class=\"mb-0\">{{ pack.purchases }}</h6>
                                                            <small class=\"text-success\">
                                                                <i class=\"ri-arrow-up-line\"></i> {{ pack.purchases_change|default(0) }}%
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <div class=\"metric-item\">
                                                            <small class=\"text-muted d-block mb-1\">Revenue</small>
                                                            <h6 class=\"mb-0\">€{{ pack.total_revenue }}</h6>
                                                            <small class=\"text-success\">
                                                                <i class=\"ri-arrow-up-line\"></i> {{ pack.revenue_change|default(0) }}%
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <div class=\"metric-item\">
                                                            <small class=\"text-muted d-block mb-1\">Rating</small>
                                                            <div class=\"d-flex align-items-center\">
                                                                <h6 class=\"mb-0 me-2\">{{ pack.avg_rating|default(0) }}</h6>
                                                                <div class=\"stars\">
                                                                    {% for i in 1..5 %}
                                                                    <i class=\"ri-star-{{ i <= pack.avg_rating ? 'fill' : 'line' }} text-warning\"></i>
                                                                    {% endfor %}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <div class=\"metric-item\">
                                                            <small class=\"text-muted d-block mb-1\">Satisfaction</small>
                                                            <div class=\"d-flex align-items-center\">
                                                                <div class=\"satisfaction-bar flex-grow-1 me-2\">
                                                                    <div class=\"progress\" style=\"height: 6px;\">
                                                                        <div class=\"progress-bar bg-success\" style=\"width: {{ pack.satisfaction_rate|default(0) }}%\"></div>
                                                                    </div>
                                                                </div>
                                                                <span>{{ pack.satisfaction_rate|default(0) }}%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"pack-chart mt-3\">
                                                    <canvas id=\"packChart{{ pack.id }}\" height=\"100\"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        {% endfor %}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review Statistics Section -->
                        <div class=\"review-stats mt-4\">
                            <h4>Overall Review Statistics</h4>
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <h5>Total Reviews</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <h5>Average Rating</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <h5>Sentiment Analysis</h5>
                                            <div class=\"progress mb-2\">
                                                <div class=\"progress-bar bg-success\" style=\"width: {{ reviewStats.positive_sentiment|default(0) }}%\">
                                                    {{ reviewStats.positive_sentiment|default(0) }}%
                                                </div>
                                            </div>
                                            <div class=\"progress mb-2\">
                                                <div class=\"progress-bar bg-warning\" style=\"width: {{ reviewStats.neutral_sentiment|default(0) }}%\">
                                                    {{ reviewStats.neutral_sentiment|default(0) }}%
                                                </div>
                                            </div>
                                            <div class=\"progress\">
                                                <div class=\"progress-bar bg-danger\" style=\"width: {{ reviewStats.negative_sentiment|default(0) }}%\">
                                                    {{ reviewStats.negative_sentiment|default(0) }}%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Rating Distribution -->
                        <div class=\"rating-distribution mt-4\">
                            <h4>Rating Distribution</h4>
                            <div class=\"row\">
                                {% for i in 5..1 %}
                                <div class=\"col-12 mb-2\">
                                    <div class=\"d-flex align-items-center\">
                                        <span class=\"mr-2\">{{ i }} ★</span>
                                        <div class=\"progress flex-grow-1\" style=\"height: 20px;\">
                                            <div class=\"progress-bar\" role=\"progressbar\" 
                                                 style=\"width: {{ attribute(reviewStats, 'rating_' ~ i ~ '_percent')|default(0) }}%\"
                                                 aria-valuenow=\"{{ attribute(reviewStats, 'rating_' ~ i ~ '_percent')|default(0) }}\"
                                                 aria-valuemin=\"0\" 
                                                 aria-valuemax=\"100\">
                                                {{ attribute(reviewStats, 'rating_' ~ i ~ '_percent')|default(0) }}%
                                            </div>
                                        </div>
                                        <span class=\"ml-2\">{{ attribute(reviewStats, 'rating_' ~ i)|default(0) }}</span>
                                    </div>
                                </div>
                                {% endfor %}
                            </div>
                        </div>

                        <!-- Revenue Overview Section -->
                        <div class=\"stats-overview\">
                            <div class=\"stats-item\">
                                <h4>Total Revenue</h4>
                                <div class=\"value\" id=\"totalRevenue\">0.00 €</div>
                            </div>
                            <div class=\"stats-item\">
                                <h4>Average Order Value</h4>
                                <div class=\"value\" id=\"avgRevenue\">0.00 €</div>
                            </div>
                        </div>

                        <!-- Revenue Trend Chart -->
                        <div class=\"stats-card\">
                            <h3>Revenue Trend</h3>
                            <div class=\"chart-container\">
                                <div id=\"revenueTrendChart\"></div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class=\"content-footer footer bg-footer-theme\">
                        <div class=\"container-xxl\">
                            <div class=\"footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column\">
                                <div>
                                    {{ \"now\"|date(\"Y\") }} Golden Touch
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->
                    <div class=\"content-backdrop fade\"></div>
                </div>
                <!-- / Content wrapper -->
            </div>
            <!-- / Layout container -->
        </div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <script src=\"{{ asset('vendor/libs/jquery/jquery.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/popper/popper.js') }}\"></script>
    <script src=\"{{ asset('vendor/js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/node-waves/node-waves.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/hammer/hammer.js') }}\"></script>
    <script src=\"{{ asset('vendor/js/menu.js') }}\"></script>

    <!-- Vendors JS -->
    <script src=\"{{ asset('vendor/libs/apex-charts/apexcharts.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/swiper/swiper.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/datatables/jquery.dataTables.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/datatables-bs5/datatables.bootstrap5.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/datatables-responsive/responsive.dataTables.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js') }}\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js\"></script>

    <!-- Main JS -->
    <script src=\"{{ asset('js/main.js') }}\"></script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Theme toggler
        document.getElementById('themeToggle').addEventListener('click', function() {
            const html = document.documentElement;
            const icon = this.querySelector('i');
            
            if (html.classList.contains('light-style')) {
                html.classList.remove('light-style');
                html.classList.add('dark-style');
                icon.classList.remove('ri-moon-line');
                icon.classList.add('ri-sun-line');
            } else {
                html.classList.remove('dark-style');
                html.classList.add('light-style');
                icon.classList.remove('ri-sun-line');
                icon.classList.add('ri-moon-line');
            }
        });

        // ... existing code ...
// ... existing code ...

function refreshDashboardData() {
    \$.ajax({
        url: '{{ path('admin_dashboard_refresh') }}',
        type: 'GET',
        dataType: 'json',
        data: {
            year: new Date().getFullYear() // Send current year as parameter
        },
        success: function(response) {
            if (response.success) {
                console.log('Dashboard data refreshed successfully:', response);
                
                // Update revenue chart if it exists
                if (response.revenueStats && response.revenueStats.monthly_data && typeof revenueChart !== 'undefined') {
                    const revenueData = response.revenueStats.monthly_data.map(item => item.revenue);
                    revenueChart.data.datasets[0].data = revenueData;
                    revenueChart.update();
                    
                    // Update revenue stats
                    if (document.getElementById('totalRevenue')) {
                        document.getElementById('totalRevenue').textContent = 
                            response.revenueStats.total_revenue.toFixed(2) + ' €';
                    }
                    
                    if (document.getElementById('avgRevenue')) {
                        document.getElementById('avgRevenue').textContent = 
                            response.revenueStats.avg_revenue_per_pack.toFixed(2) + ' €';
                    }
                }
                
                // Update review stats
                if (response.reviewStats && typeof sentimentChart !== 'undefined') {
                    const sentimentData = [
                        response.reviewStats.positive_sentiment || 0,
                        response.reviewStats.neutral_sentiment || 0,
                        response.reviewStats.negative_sentiment || 0
                    ];
                    
                    sentimentChart.data.datasets[0].data = sentimentData;
                    sentimentChart.update();
                }
                
                // Update pack stats
                if (response.packStats && response.packStats.length > 0) {
                    // Update pack charts and metrics here
                    // This would depend on how your pack charts are initialized
                }
                
                // Update request stats
                if (response.requestStats && response.requestStats.length > 0) {
                    // Update request charts and metrics here
                }
                
                console.log('Dashboard data updated successfully');
            } else {
                console.error('Failed to refresh dashboard data:', response.error);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error refreshing dashboard data:', error);
            console.log('Response:', xhr.responseText);
            
            // Try to parse the error response
            try {
                const errorResponse = JSON.parse(xhr.responseText);
                console.error('Error details:', errorResponse);
            } catch (e) {
                console.error('Could not parse error response');
            }
        }
    });
}

// ... existing code ...

// ... existing code ...

        // Show detailed stats modal
        function showStatDetails(statType) {
            const stats = {
                sales: {
                    title: 'Sales Analytics',
                    data: [
                        { label: 'Today', value: '25', change: '+15%' },
                        { label: 'This Week', value: '142', change: '+22%' },
                        { label: 'This Month', value: '587', change: '+12.5%' },
                        { label: 'This Year', value: '2,845', change: '+18.3%' }
                    ]
                },
                revenue: {
                    title: 'Revenue Analytics',
                    data: [
                        { label: 'Today', value: '€1,250', change: '+12%' },
                        { label: 'This Week', value: '€7,845', change: '+8.4%' },
                        { label: 'This Month', value: '€32,456', change: '+15.2%' },
                        { label: 'This Year', value: '€245,845', change: '+25.8%' }
                    ]
                },
                avgRevenue: {
                    title: 'Average Revenue Analytics',
                    data: [
                        { label: 'Per Sale', value: '€52', change: '+5.2%' },
                        { label: 'Per Customer', value: '€156', change: '+8.7%' },
                        { label: 'Per Event', value: '€1,845', change: '+12.4%' },
                        { label: 'Lifetime Value', value: '€4,562', change: '+18.9%' }
                    ]
                },
                events: {
                    title: 'Event Analytics',
                    data: [
                        { label: 'Active Events', value: '12', change: '+2' },
                        { label: 'Upcoming Events', value: '8', change: '+3' },
                        { label: 'Completed Events', value: '24', change: '0' },
                        { label: 'Total Revenue', value: '€124,845', change: '+22.5%' }
                    ]
                }
            };

            const stat = stats[statType];
            const modalContent = `
                <div class=\"modal fade\" id=\"statModal\" tabindex=\"-1\">
                    <div class=\"modal-dialog modal-dialog-centered\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header border-bottom-0\">
                                <h5 class=\"modal-title\">\${stat.title}</h5>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                            </div>
                            <div class=\"modal-body\">
                                <div class=\"row\">
                                    \${stat.data.map(item => `
                                        <div class=\"col-6 mb-4\">
                                            <div class=\"p-3 border rounded\">
                                                <small class=\"text-muted d-block mb-1\">\${item.label}</small>
                                                <div class=\"d-flex align-items-center\">
                                                    <h4 class=\"mb-0\">\${item.value}</h4>
                                                    <small class=\"ms-2 \${item.change.startsWith('+') ? 'text-success' : 'text-danger'}\">
                                                        \${item.change}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    `).join('')}
                                </div>
                                <div class=\"chart-container mt-4\" style=\"height: 200px;\">
                                    <canvas id=\"statDetailChart\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;

            // Remove existing modal if any
            const existingModal = document.getElementById('statModal');
            if (existingModal) {
                existingModal.remove();
            }

            // Add new modal to the DOM
            document.body.insertAdjacentHTML('beforeend', modalContent);

            // Initialize and show the modal
            const modal = new bootstrap.Modal(document.getElementById('statModal'));
            modal.show();

            // Initialize the chart
            const ctx = document.getElementById('statDetailChart').getContext('2d');
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    datasets: [{
                        label: stat.title,
                        data: [65, 59, 80, 81, 56, 55],
                        borderColor: getComputedStyle(document.documentElement).getPropertyValue('--primary-color'),
                        tension: 0.4,
                        fill: true,
                        backgroundColor: `\${getComputedStyle(document.documentElement).getPropertyValue('--primary-color')}20`
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        x: {
                            grid: {
                                display: false
                            }
                        },
                        y: {
                            grid: {
                                borderDash: [5, 5]
                            }
                        }
                    }
                }
            });
        }

        // Initialize DataTable with modern styling
        \$(document).ready(function() {
            const packStatsTable = \$('#packStatsTable').DataTable({
                dom: '<\"row\"<\"col-sm-12 col-md-6\"l><\"col-sm-12 col-md-6\"f>>t<\"row\"<\"col-sm-12 col-md-6\"i><\"col-sm-12 col-md-6\"p>>',
                language: {
                    search: \"\",
                    searchPlaceholder: \"Search packs...\",
                    lengthMenu: \"_MENU_ packs per page\",
                },
                pageLength: 10,
                ordering: true,
                responsive: true,
                autoWidth: false,
                drawCallback: function() {
                    \$('.dataTables_paginate .pagination').addClass('pagination-rounded');
                }
            });

            // Add custom search styling
            \$('.dataTables_filter input').addClass('form-control');
            \$('.dataTables_length select').addClass('form-select');

            // Handle pack row clicks
            \$('#packStatsTable tbody').on('click', 'tr.pack-row', function(e) {
                // Don't navigate if clicking dropdown or its children
                if (e.target.closest('.dropdown')) {
                    return;
                }
                const packId = \$(this).data('pack-id');
                window.location.href = \"{{ path('admin_pack_show', {'id': 'PACK_ID'}) }}\".replace('PACK_ID', packId);
            });
        });

        // Initialize Chart.js with modern styling
        const ctx = document.getElementById('purchaseChart').getContext('2d');
        const purchaseData = {{ purchaseTrends|json_encode|raw }};
        
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: purchaseData.map(item => item.date),
                datasets: [
                    {
                        label: 'Purchases',
                        data: purchaseData.map(item => item.purchases),
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2,
                        tension: 0.4,
                        pointRadius: 3
                    },
                    {
                        label: 'Revenue',
                        data: purchaseData.map(item => parseFloat(item.revenue)),
                        backgroundColor: 'rgba(40, 199, 111, 0.2)',
                        borderColor: 'rgba(40, 199, 111, 1)',
                        borderWidth: 2,
                        tension: 0.4,
                        pointRadius: 3,
                        yAxisID: 'y1'
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                interaction: {
                    intersect: false,
                    mode: 'index'
                },
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            usePointStyle: true,
                            padding: 20
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(255, 255, 255, 0.9)',
                        titleColor: '#000',
                        bodyColor: '#666',
                        bodySpacing: 4,
                        padding: 12,
                        borderColor: 'rgba(0,0,0,0.1)',
                        borderWidth: 1,
                        displayColors: true,
                        usePointStyle: true
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        }
                    },
                    y: {
                        grid: {
                            borderDash: [5, 5]
                        }
                    },
                    y1: {
                        beginAtZero: true,
                        position: 'right',
                        title: {
                            display: true,
                            text: 'Revenue (€)'
                        },
                        grid: {
                            drawOnChartArea: false
                        }
                    }
                }
            }
        });

        // Real-time dashboard updates
        function refreshDashboard() {
            const loadingOverlays = document.querySelectorAll('.loading-overlay');
            loadingOverlays.forEach(overlay => overlay.style.display = 'flex');

            fetch('{{ path('admin_dashboard_refresh') }}')
                .then(response => response.json())
                .then(data => {
                    console.log('Dashboard data:', data);
                    updateDashboard(data);
                })
                .catch(error => {
                    console.error('Error refreshing data:', error);
                    loadingOverlays.forEach(overlay => overlay.style.display = 'none');
                });
        }

       function updateDashboard(data) {
    // Update statistics with animations
    if (data.revenueStats) {
        animateValue('totalSales', parseInt(document.getElementById('totalSales').textContent), data.revenueStats.total_sales);
        animateValue('totalRevenue', parseFloat(document.getElementById('totalRevenue').textContent.replace('€', '')), data.revenueStats.total_revenue);
        animateValue('avgRevenue', parseFloat(document.getElementById('avgRevenue').textContent.replace('€', '')), data.revenueStats.avg_revenue_per_pack);
    }
    
    // Update active events count
    if (data.activeEvents !== undefined) {
        animateValue('activeEvents', parseInt(document.getElementById('activeEvents').textContent || '0'), data.activeEvents);
    }
    
    // Update charts with smooth transitions
    // ... existing code ...


            // Update charts with smooth transitions
            if (data.purchaseTrends) {
                purchaseChart.data.labels = data.purchaseTrends.map(item => item.date);
                purchaseChart.data.datasets[0].data = data.purchaseTrends.map(item => item.purchases);
                purchaseChart.data.datasets[1].data = data.purchaseTrends.map(item => item.revenue);
                purchaseChart.update('none'); // Use 'none' for smooth transitions
            }

            // Update pack statistics table
            if (data.packStats) {
                const table = \$('#packStatsTable').DataTable();
                table.clear();
                data.packStats.forEach(pack => {
                    table.row.add([
                        `<div class=\"d-flex align-items-center\">
                            <div class=\"avatar avatar-sm me-2 bg-light\">
                                <span class=\"avatar-initial rounded-circle bg-label-primary\">
                                    \${pack.description.charAt(0)}
                                </span>
                            </div>
                            <span>\${pack.description}</span>
                        </div>`,
                        pack.event_name,
                        `<div class=\"d-flex align-items-center\">
                            \${pack.purchases}
                            <div class=\"ms-2\">
                                <small class=\"text-success\">+\${pack.purchases_change || 0}%</small>
                            </div>
                        </div>`,
                        `<div class=\"d-flex align-items-center\">
                            <i class=\"ri-star-fill text-warning me-1\"></i>
                            <span>\${pack.avg_rating || 0}</span>
                        </div>`,
                        `€\${pack.total_revenue}`,
                        `<span class=\"badge bg-success bg-opacity-10 text-success\">Active</span>`,
                        `<div class=\"dropdown\">
                            <button class=\"btn btn-light btn-sm\" data-bs-toggle=\"dropdown\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"/admin/pack/\${pack.id}\">
                                    <i class=\"ri-eye-line me-2\"></i> View Details
                                </a></li>
                                <li><a class=\"dropdown-item\" href=\"/admin/pack/edit/\${pack.id}\">
                                    <i class=\"ri-edit-line me-2\"></i> Edit
                                </a></li>
                            </ul>
                        </div>`
                    ]).draw(false);
                });
            }
        }

        function animateValue(elementId, start, end) {
            const element = document.getElementById(elementId);
            const duration = 1000;
            const startTimestamp = performance.now();
            
            const updateValue = (currentTimestamp) => {
                const elapsed = currentTimestamp - startTimestamp;
                const progress = Math.min(elapsed / duration, 1);
                
                const current = Math.round(start + (end - start) * progress);
                element.textContent = elementId.includes('Revenue') ? `€\${current}` : current;
                
                if (progress < 1) {
                    requestAnimationFrame(updateValue);
                }
            };
            
            requestAnimationFrame(updateValue);
        }

        // Refresh dashboard every 30 seconds
        setInterval(refreshDashboard, 30000);

        // Initialize tooltips and popovers
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
        tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });

        const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"popover\"]'));
        popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl);
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize purchase trends chart
            const purchaseTrendsCtx = document.getElementById('purchaseTrendsChart').getContext('2d');
            const purchaseTrendsData = {{ purchaseTrends|json_encode|raw }};
            
            new Chart(purchaseTrendsCtx, {
                type: 'line',
                data: {
                    labels: purchaseTrendsData.map(item => item.date),
                    datasets: [
                        {
                            label: 'Sales',
                            data: purchaseTrendsData.map(item => item.purchases),
                            backgroundColor: 'rgba(115, 103, 240, 0.2)',
                            borderColor: 'rgba(115, 103, 240, 1)',
                            borderWidth: 2,
                            tension: 0.4,
                            pointRadius: 3
                        },
                        {
                            label: 'Revenue',
                            data: purchaseTrendsData.map(item => parseFloat(item.revenue)),
                            backgroundColor: 'rgba(0, 207, 232, 0.2)',
                            borderColor: 'rgba(0, 207, 232, 1)',
                            borderWidth: 2,
                            tension: 0.4,
                            pointRadius: 3,
                            yAxisID: 'y1'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Sales Count'
                            }
                        },
                        y1: {
                            beginAtZero: true,
                            position: 'right',
                            title: {
                                display: true,
                                text: 'Revenue (€)'
                            },
                            grid: {
                                drawOnChartArea: false
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Date'
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false
                        }
                    }
                }
            });

            // ... existing code ...

// Initialize review trends chart
const reviewTrendsCtx = document.getElementById('reviewTrendsChart').getContext('2d');
{% if reviewTrends is defined %}
    const reviewTrendsData = {{ reviewTrends|json_encode|raw }};
{% else %}
    // Default data if reviewTrends is not defined
    const reviewTrendsData = [
        {% for i in 0..6 %}
            {
                date: '{{ \"now\"|date_modify(\"-#{i} days\")|date(\"Y-m-d\") }}',
                reviews: {{ random(0, 10) }},
                avg_rating: {{ (random(30, 50) / 10)|number_format(1) }}
            }{% if not loop.last %},{% endif %}
        {% endfor %}
    ];
{% endif %}

new Chart(reviewTrendsCtx, {
    type: 'line',
    // ... rest of the chart configuration ...
            
            new Chart(reviewTrendsCtx, {
                type: 'line',
                data: {
                    labels: reviewTrendsData.map(item => item.date),
                    datasets: [
                        {
                            label: 'Reviews',
                            data: reviewTrendsData.map(item => item.reviews),
                            backgroundColor: 'rgba(255, 159, 67, 0.2)',
                            borderColor: 'rgba(255, 159, 67, 1)',
                            borderWidth: 2,
                            tension: 0.4,
                            pointRadius: 3
                        },
                        {
                            label: 'Avg Rating',
                            data: reviewTrendsData.map(item => item.avg_rating),
                            backgroundColor: 'rgba(234, 84, 85, 0.2)',
                            borderColor: 'rgba(234, 84, 85, 1)',
                            borderWidth: 2,
                            tension: 0.4,
                            pointRadius: 3,
                            yAxisID: 'y1'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Review Count'
                            }
                        },
                        y1: {
                            beginAtZero: true,
                            position: 'right',
                            title: {
                                display: true,
                                text: 'Average Rating'
                            },
                            min: 0,
                            max: 5,
                            grid: {
                                drawOnChartArea: false
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Date'
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false
                        }
                    }
                }
            });
            
            // Initialize category pie chart
            const categoryPieCtx = document.getElementById('categoryPieChart').getContext('2d');
            new Chart(categoryPieCtx, {
                type: 'pie',
                data: {
                    labels: ['VIP Packages', 'Standard Packages', 'Basic Packages'],
                    datasets: [{
                        data: [45, 30, 25],
                        backgroundColor: [
                            'rgba(115, 103, 240, 0.7)',
                            'rgba(0, 207, 232, 0.7)',
                            'rgba(254, 176, 25, 0.7)'
                        ],
                        borderColor: [
                            'rgba(115, 103, 240, 1)',
                            'rgba(0, 207, 232, 1)',
                            'rgba(254, 176, 25, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 20
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>
", "admin/dashboard/index.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\admin\\dashboard\\index.html.twig");
    }
}
