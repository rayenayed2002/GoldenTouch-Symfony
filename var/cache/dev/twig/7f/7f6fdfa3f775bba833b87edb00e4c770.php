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

/* admin/lieu/index.html.twig */
class __TwigTemplate_4923c0dcc5df01e239f8a1de4f49644a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/lieu/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/lieu/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\" class=\"light-style layout-navbar-fixed layout-menu-fixed\" dir=\"ltr\" data-theme=\"theme-default\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>Location Management - Admin Dashboard</title>
    <meta name=\"description\" content=\"Manage locations efficiently\" />
    
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
        .location-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }
        
        .location-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .location-image {
            height: 200px;
            object-fit: cover;
            border-radius: 8px 8px 0 0;
        }
        
        .location-badge {
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
        
        .location-card:hover .quick-actions {
            bottom: 10px;
            opacity: 1;
        }
        
        .gallery-view .location-card {
            margin-bottom: 30px;
        }
        
        .view-toggle-btn.active {
            background-color: #7367f0;
            color: white;
        }
        
        .location-stats {
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
        
        .location-card:hover .location-stats {
            opacity: 1;
        }
        
        .table-view {
            display: none;
        }
        
        .gallery-view {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .location-price {
            font-size: 1.25rem;
            font-weight: 600;
            color: #7367f0;
        }
        
        .location-capacity {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-size: 0.875rem;
            color: #6e6b7b;
        }

        /* Notifications styles */
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
                       
                    </li>

                    <li class=\"menu-item active\">
                        <a href=\"";
        // line 199
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_lieu_index");
        yield "\" class=\"menu-link\">
                            <i class=\"menu-icon tf-icons ti ti-map-pin\"></i>
                            <div>Locations</div>
                        </a>
                    </li>
                    <li class=\"menu-item\">
                        <a href=\"";
        // line 205
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_notifications");
        yield "\" class=\"menu-link\">
                            <i class=\"menu-icon tf-icons ti ti-bell\"></i>
                            <div>Notifications</div>
                            <span id=\"unreadCountBadge\" class=\"badge bg-danger rounded-pill ms-2\">0</span>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class=\"layout-page\">
                <!-- Content wrapper -->
                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y\">
                        <div class=\"row mb-4\">
                            <div class=\"col-12\">
                                <div class=\"card\">
                                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                                        <h5 class=\"mb-0\">Location Management</h5>
                                        <div class=\"d-flex gap-2\">
                                            <div class=\"btn-group\" role=\"group\">
                                                <button type=\"button\" class=\"btn btn-outline-primary view-toggle-btn active\" data-view=\"gallery\">
                                                    <i class=\"ti ti-grid-dots\"></i>
                                                </button>
                                                <button type=\"button\" class=\"btn btn-outline-primary view-toggle-btn\" data-view=\"table\">
                                                    <i class=\"ti ti-table\"></i>
                                                </button>
                                            </div>
                                            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#locationModal\">
                                                <i class=\"ti ti-plus me-1\"></i> Create New Location
                                            </button>
                                        </div>
                                    </div>
                                    <div class=\"card-body\">
                                        <!-- Gallery View -->
                                        <div class=\"gallery-view\">
                                            ";
        // line 243
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lieux"]) || array_key_exists("lieux", $context) ? $context["lieux"] : (function () { throw new RuntimeError('Variable "lieux" does not exist.', 243, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 244
            yield "                                            <div class=\"col-md-4 col-lg-3\">
                                                <div class=\"card location-card\">
                                                    ";
            // line 246
            if (CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "imageUrl", [], "any", false, false, false, 246)) {
                // line 247
                yield "                                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/lieux/" . CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "imageUrl", [], "any", false, false, false, 247))), "html", null, true);
                yield "\" class=\"location-image\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "name", [], "any", false, false, false, 247), "html", null, true);
                yield "\">
                                                    ";
            } else {
                // line 249
                yield "                                                        <div class=\"location-image d-flex align-items-center justify-content-center bg-light\">
                                                            <i class=\"ti ti-photo text-muted\" style=\"font-size: 3rem;\"></i>
                                                        </div>
                                                    ";
            }
            // line 253
            yield "                                                    
                                                    ";
            // line 254
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "capacity", [], "any", false, false, false, 254) < 5)) {
                // line 255
                yield "                                                        <div class=\"location-badge\">
                                                            <span class=\"badge bg-danger\">Limited Capacity!</span>
                                                        </div>
                                                    ";
            }
            // line 259
            yield "                                                    
                                                    <div class=\"card-body\">
                                                        <h5 class=\"card-title\">";
            // line 261
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "name", [], "any", false, false, false, 261), "html", null, true);
            yield "</h5>
                                                        <p class=\"card-text text-truncate\">";
            // line 262
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "description", [], "any", false, false, false, 262), "html", null, true);
            yield "</p>
                                                        <div class=\"d-flex justify-content-between align-items-center\">
                                                            <div class=\"location-price\">\$";
            // line 264
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "price", [], "any", false, false, false, 264), "html", null, true);
            yield "</div>
                                                            <div class=\"location-capacity\">
                                                                <i class=\"ti ti-users\"></i> ";
            // line 266
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "capacity", [], "any", false, false, false, 266), "html", null, true);
            yield "
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class=\"location-stats\">
                                                        <div class=\"row g-0 text-center\">
                                                            <div class=\"col\">
                                                                <div class=\"h6 mb-0\">";
            // line 274
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "location", [], "any", false, false, false, 274), "html", null, true);
            yield "</div>
                                                                <small>Address</small>
                                                            </div>
                                                            <div class=\"col\">
                                                                <div class=\"h6 mb-0\">";
            // line 278
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "ville", [], "any", false, false, false, 278), "html", null, true);
            yield "</div>
                                                                <small>City</small>
                                                            </div>
                                                            <div class=\"col\">
                                                                <div class=\"h6 mb-0\">";
            // line 282
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "category", [], "any", false, false, false, 282), "html", null, true);
            yield "</div>
                                                                <small>Category</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class=\"quick-actions\">
                                                        <div class=\"btn-group shadow\">
                                                            <button type=\"button\" class=\"btn btn-primary btn-sm\" onclick=\"editLocation(";
            // line 290
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 290), "html", null, true);
            yield ")\">
                                                                <i class=\"ti ti-edit\"></i>
                                                            </button>
                                                            <button type=\"button\" class=\"btn btn-primary btn-sm\" onclick=\"viewLocationDetails(";
            // line 293
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 293), "html", null, true);
            yield ")\">
                                                                <i class=\"ti ti-eye\"></i>
                                                            </button>
                                                            <button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"deleteLocation(";
            // line 296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 296), "html", null, true);
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
        unset($context['_seq'], $context['_key'], $context['lieu'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 304
        yield "                                        </div>
                                        
                                        <!-- Table View -->
                                        <div class=\"table-view\">
                                            <table id=\"locationsTable\" class=\"table table-hover dt-responsive nowrap w-100\">
                                                <thead>
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Name</th>
                                                        <th>Description</th>
                                                        <th>Price</th>
                                                        <th>Capacity</th>
                                                        <th>Address</th>
                                                        <th>City</th>
                                                        <th>Category</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    ";
        // line 323
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lieux"]) || array_key_exists("lieux", $context) ? $context["lieux"] : (function () { throw new RuntimeError('Variable "lieux" does not exist.', 323, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 324
            yield "                                                    <tr>
                                                        <td>
                                                            ";
            // line 326
            if (CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "imageUrl", [], "any", false, false, false, 326)) {
                // line 327
                yield "                                                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/lieux/" . CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "imageUrl", [], "any", false, false, false, 327))), "html", null, true);
                yield "\" class=\"rounded\" width=\"40\" height=\"40\" style=\"object-fit: cover;\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "name", [], "any", false, false, false, 327), "html", null, true);
                yield "\">
                                                            ";
            } else {
                // line 329
                yield "                                                                <i class=\"ti ti-photo text-muted\"></i>
                                                            ";
            }
            // line 331
            yield "                                                        </td>
                                                        <td>";
            // line 332
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "name", [], "any", false, false, false, 332), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 333
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "description", [], "any", false, false, false, 333), "html", null, true);
            yield "</td>
                                                        <td>\$";
            // line 334
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "price", [], "any", false, false, false, 334), "html", null, true);
            yield "</td>
                                                        <td>
                                                            <span class=\"badge bg-label-primary\">";
            // line 336
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "capacity", [], "any", false, false, false, 336), "html", null, true);
            yield " spots</span>
                                                        </td>
                                                        <td>";
            // line 338
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "location", [], "any", false, false, false, 338), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 339
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "ville", [], "any", false, false, false, 339), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 340
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "category", [], "any", false, false, false, 340), "html", null, true);
            yield "</td>
                                                        <td>
                                                            <div class=\"d-flex gap-2\">
                                                                <button type=\"button\" class=\"btn btn-sm btn-icon btn-primary\" 
                                                                        onclick=\"editLocation(";
            // line 344
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 344), "html", null, true);
            yield ")\"
                                                                        data-bs-toggle=\"tooltip\" 
                                                                        data-bs-placement=\"top\" 
                                                                        title=\"Edit\">
                                                                    <i class=\"ti ti-edit\"></i>
                                                                </button>
                                                                <button type=\"button\" class=\"btn btn-sm btn-icon btn-danger\"
                                                                        onclick=\"deleteLocation(";
            // line 351
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 351), "html", null, true);
            yield ")\"
                                                                        data-bs-toggle=\"tooltip\"
                                                                        data-bs-placement=\"top\"
                                                                        title=\"Delete\">
                                                                    <i class=\"ti ti-trash\"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['lieu'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 361
        yield "                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Location Modal (used for both create and edit) -->
    <div class=\"modal fade\" id=\"locationModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"modalTitle\">Create New Location</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <form id=\"locationForm\" enctype=\"multipart/form-data\">
                    <input type=\"hidden\" id=\"locationId\" name=\"id\">
                    <div class=\"modal-body\">
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label for=\"name\" class=\"form-label\">Name</label>
                                <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" required>
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label for=\"price\" class=\"form-label\">Price</label>
                                <input type=\"number\" step=\"0.01\" class=\"form-control\" id=\"price\" name=\"price\" required>
                            </div>
                        </div>
                        
                        <div class=\"mb-3\">
                            <label for=\"description\" class=\"form-label\">Description</label>
                            <textarea class=\"form-control\" id=\"description\" name=\"description\" rows=\"3\"></textarea>
                        </div>
                        
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label for=\"capacity\" class=\"form-label\">Capacity</label>
                                <input type=\"number\" class=\"form-control\" id=\"capacity\" name=\"capacity\" required>
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label for=\"category\" class=\"form-label\">Category</label>
                                <select class=\"form-select\" id=\"category\" name=\"category\">
                                    <option value=\"Conference Room\">Conference Room</option>
                                    <option value=\"Event Space\">Event Space</option>
                                    <option value=\"Coworking\">Coworking</option>
                                    <option value=\"Office\">Office</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label for=\"location\" class=\"form-label\">Address</label>
                                <input type=\"text\" class=\"form-control\" id=\"location\" name=\"location\" required>
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label for=\"ville\" class=\"form-label\">City</label>
                                <input type=\"text\" class=\"form-control\" id=\"ville\" name=\"ville\">
                            </div>
                        </div>
                        
                        <div class=\"mb-3\">
                            <label for=\"imageUrl\" class=\"form-label\">Location Image</label>
                            <input type=\"file\" class=\"form-control\" id=\"imageUrl\" name=\"imageUrl\" accept=\"image/*\">
                            <div id=\"currentImageContainer\" class=\"mt-2\" style=\"display: none;\">
                                <small>Current Image:</small>
                                <img id=\"currentImagePreview\" src=\"\" class=\"img-thumbnail mt-1\" style=\"max-height: 100px;\">
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                        <button type=\"submit\" class=\"btn btn-primary\">Save Location</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Core JS -->
    <script src=\"";
        // line 447
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 448
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 449
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 450
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 451
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/node-waves/node-waves.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 452
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/hammer/hammer.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 453
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/menu.js"), "html", null, true);
        yield "\"></script>
    
    <!-- Vendors JS -->
    <script src=\"";
        // line 456
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/datatables-bs5/datatables-bootstrap5.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 457
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/sweetalert2/sweetalert2.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 458
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/flatpickr/flatpickr.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 459
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/swiper/swiper.js"), "html", null, true);
        yield "\"></script>

    <script>
        \$(document).ready(function() {
            // Initialize DataTable
            const locationsTable = \$('#locationsTable').DataTable({
                dom: '<\"row\"<\"col-sm-12 col-md-6\"l><\"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end\"f>>t<\"row\"<\"col-sm-12 col-md-6\"i><\"col-sm-12 col-md-6\"p>>',
                responsive: true,
                order: [[0, 'desc']],
                pageLength: 10,
                language: {
                    sLengthMenu: '_MENU_',
                    search: '',
                    searchPlaceholder: 'Search Locations'
                }
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
                    \$('.gallery-view').show();
                    \$('.table-view').hide();
                } else {
                    \$('.gallery-view').hide();
                    \$('.table-view').show();
                }
            });
            
            // Form submission handler
            \$('#locationForm').on('submit', function(e) {
                e.preventDefault();
                const form = e.target;
                const formData = new FormData(form);
                const locationId = formData.get('id');
                const url = locationId ? `";
        // line 503
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_lieu_update", ["id" => "LOCATION_ID"]);
        yield "`.replace('LOCATION_ID', locationId)
                                      : '";
        // line 504
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_lieu_create");
        yield "';

                // Show loading state
                const submitBtn = form.querySelector('button[type=\"submit\"]');
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-1\" role=\"status\" aria-hidden=\"true\"></span> Processing...';

                fetch(url, {
                    method: locationId ? 'PUT' : 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: data.message,
                            showConfirmButton: false,
                            timer: 1500
                        }).then(() => {
                            // Close modal and refresh page
                            const modal = bootstrap.Modal.getInstance(document.getElementById('locationModal'));
                            modal.hide();
                            location.reload();
                        });
                    } else {
                        // Handle validation errors
                        let errorMessage = data.message || 'An error occurred';
                        if (data.errors && data.errors.length > 0) {
                            errorMessage += '<ul class=\"text-start\">';
                            data.errors.forEach(error => {
                                errorMessage += `<li>\${error}</li>`;
                            });
                            errorMessage += '</ul>';
                        }
                        throw new Error(errorMessage);
                    }
                })
                .catch(error => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        html: error.message,
                        confirmButtonText: 'OK'
                    });
                })
                .finally(() => {
                    submitBtn.disabled = false;
                    submitBtn.textContent = 'Save Location';
                });
            });
            
            // Reset form when create modal is shown
            \$('#locationModal').on('show.bs.modal', function(e) {
                if (!e.relatedTarget) {
                    // This is a create operation
                    \$('#modalTitle').text('Create New Location');
                    \$('#locationForm')[0].reset();
                    \$('#locationId').val('');
                    \$('#currentImageContainer').hide();
                }
            });
        });

        // Edit location
        function editLocation(id) {
            fetch(`";
        // line 579
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_lieu_edit", ["id" => "LOCATION_ID"]);
        yield "`.replace('LOCATION_ID', id))
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const lieu = data.lieu;
                        
                        // Set modal title
                        \$('#modalTitle').text('Edit Location');
                        
                        // Fill form with location data
                        \$('#locationId').val(lieu.id);
                        \$('#name').val(lieu.name);
                        \$('#description').val(lieu.description);
                        \$('#price').val(lieu.price);
                        \$('#capacity').val(lieu.capacity);
                        \$('#location').val(lieu.location);
                        \$('#ville').val(lieu.ville);
                        \$('#category').val(lieu.category);
                        
                        // Show current image if exists
                        if (lieu.imageUrl) {
                            \$('#currentImageContainer').show();
                            \$('#currentImagePreview').attr('src', `";
        // line 601
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/lieux/"), "html", null, true);
        yield "/\${lieu.imageUrl}`);
                        } else {
                            \$('#currentImageContainer').hide();
                        }
                        
                        // Show modal
                        const modal = new bootstrap.Modal(document.getElementById('locationModal'));
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

        // Delete location
        function deleteLocation(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: \"You won't be able to revert this!\",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                customClass: {
                    confirmButton: 'btn btn-primary me-3',
                    cancelButton: 'btn btn-label-secondary'
                },
                buttonsStyling: false
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(`";
        // line 638
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_lieu_delete", ["id" => "LOCATION_ID"]);
        yield "`.replace('LOCATION_ID', id), {
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
                                title: 'Deleted!',
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
                            title: 'Error!',
                            text: error.message,
                            confirmButtonText: 'OK'
                        });
                    });
                }
            });
        }
        
        // View location details function
        function viewLocationDetails(id) {
            window.location.href = `";
        // line 674
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_lieu_show", ["id" => "LOCATION_ID"]);
        yield "`.replace('LOCATION_ID', id);
        }

        // Fetch unread notifications count
        function fetchUnreadCount() {
            fetch('";
        // line 679
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
        return "admin/lieu/index.html.twig";
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
        return array (  931 => 679,  923 => 674,  884 => 638,  844 => 601,  819 => 579,  741 => 504,  737 => 503,  690 => 459,  686 => 458,  682 => 457,  678 => 456,  672 => 453,  668 => 452,  664 => 451,  660 => 450,  656 => 449,  652 => 448,  648 => 447,  560 => 361,  544 => 351,  534 => 344,  527 => 340,  523 => 339,  519 => 338,  514 => 336,  509 => 334,  505 => 333,  501 => 332,  498 => 331,  494 => 329,  486 => 327,  484 => 326,  480 => 324,  476 => 323,  455 => 304,  441 => 296,  435 => 293,  429 => 290,  418 => 282,  411 => 278,  404 => 274,  393 => 266,  388 => 264,  383 => 262,  379 => 261,  375 => 259,  369 => 255,  367 => 254,  364 => 253,  358 => 249,  350 => 247,  348 => 246,  344 => 244,  340 => 243,  299 => 205,  290 => 199,  122 => 34,  118 => 33,  114 => 32,  110 => 31,  106 => 30,  102 => 29,  98 => 28,  94 => 27,  88 => 24,  84 => 23,  80 => 22,  74 => 19,  70 => 18,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" class=\"light-style layout-navbar-fixed layout-menu-fixed\" dir=\"ltr\" data-theme=\"theme-default\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>Location Management - Admin Dashboard</title>
    <meta name=\"description\" content=\"Manage locations efficiently\" />
    
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
        .location-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }
        
        .location-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .location-image {
            height: 200px;
            object-fit: cover;
            border-radius: 8px 8px 0 0;
        }
        
        .location-badge {
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
        
        .location-card:hover .quick-actions {
            bottom: 10px;
            opacity: 1;
        }
        
        .gallery-view .location-card {
            margin-bottom: 30px;
        }
        
        .view-toggle-btn.active {
            background-color: #7367f0;
            color: white;
        }
        
        .location-stats {
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
        
        .location-card:hover .location-stats {
            opacity: 1;
        }
        
        .table-view {
            display: none;
        }
        
        .gallery-view {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .location-price {
            font-size: 1.25rem;
            font-weight: 600;
            color: #7367f0;
        }
        
        .location-capacity {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-size: 0.875rem;
            color: #6e6b7b;
        }

        /* Notifications styles */
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
                       
                    </li>

                    <li class=\"menu-item active\">
                        <a href=\"{{ path('admin_lieu_index') }}\" class=\"menu-link\">
                            <i class=\"menu-icon tf-icons ti ti-map-pin\"></i>
                            <div>Locations</div>
                        </a>
                    </li>
                    <li class=\"menu-item\">
                        <a href=\"{{ path('admin_notifications') }}\" class=\"menu-link\">
                            <i class=\"menu-icon tf-icons ti ti-bell\"></i>
                            <div>Notifications</div>
                            <span id=\"unreadCountBadge\" class=\"badge bg-danger rounded-pill ms-2\">0</span>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class=\"layout-page\">
                <!-- Content wrapper -->
                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y\">
                        <div class=\"row mb-4\">
                            <div class=\"col-12\">
                                <div class=\"card\">
                                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                                        <h5 class=\"mb-0\">Location Management</h5>
                                        <div class=\"d-flex gap-2\">
                                            <div class=\"btn-group\" role=\"group\">
                                                <button type=\"button\" class=\"btn btn-outline-primary view-toggle-btn active\" data-view=\"gallery\">
                                                    <i class=\"ti ti-grid-dots\"></i>
                                                </button>
                                                <button type=\"button\" class=\"btn btn-outline-primary view-toggle-btn\" data-view=\"table\">
                                                    <i class=\"ti ti-table\"></i>
                                                </button>
                                            </div>
                                            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#locationModal\">
                                                <i class=\"ti ti-plus me-1\"></i> Create New Location
                                            </button>
                                        </div>
                                    </div>
                                    <div class=\"card-body\">
                                        <!-- Gallery View -->
                                        <div class=\"gallery-view\">
                                            {% for lieu in lieux %}
                                            <div class=\"col-md-4 col-lg-3\">
                                                <div class=\"card location-card\">
                                                    {% if lieu.imageUrl %}
                                                        <img src=\"{{ asset('uploads/lieux/' ~ lieu.imageUrl) }}\" class=\"location-image\" alt=\"{{ lieu.name }}\">
                                                    {% else %}
                                                        <div class=\"location-image d-flex align-items-center justify-content-center bg-light\">
                                                            <i class=\"ti ti-photo text-muted\" style=\"font-size: 3rem;\"></i>
                                                        </div>
                                                    {% endif %}
                                                    
                                                    {% if lieu.capacity < 5 %}
                                                        <div class=\"location-badge\">
                                                            <span class=\"badge bg-danger\">Limited Capacity!</span>
                                                        </div>
                                                    {% endif %}
                                                    
                                                    <div class=\"card-body\">
                                                        <h5 class=\"card-title\">{{ lieu.name }}</h5>
                                                        <p class=\"card-text text-truncate\">{{ lieu.description }}</p>
                                                        <div class=\"d-flex justify-content-between align-items-center\">
                                                            <div class=\"location-price\">\${{ lieu.price }}</div>
                                                            <div class=\"location-capacity\">
                                                                <i class=\"ti ti-users\"></i> {{ lieu.capacity }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class=\"location-stats\">
                                                        <div class=\"row g-0 text-center\">
                                                            <div class=\"col\">
                                                                <div class=\"h6 mb-0\">{{ lieu.location }}</div>
                                                                <small>Address</small>
                                                            </div>
                                                            <div class=\"col\">
                                                                <div class=\"h6 mb-0\">{{ lieu.ville }}</div>
                                                                <small>City</small>
                                                            </div>
                                                            <div class=\"col\">
                                                                <div class=\"h6 mb-0\">{{ lieu.category }}</div>
                                                                <small>Category</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class=\"quick-actions\">
                                                        <div class=\"btn-group shadow\">
                                                            <button type=\"button\" class=\"btn btn-primary btn-sm\" onclick=\"editLocation({{ lieu.id }})\">
                                                                <i class=\"ti ti-edit\"></i>
                                                            </button>
                                                            <button type=\"button\" class=\"btn btn-primary btn-sm\" onclick=\"viewLocationDetails({{ lieu.id }})\">
                                                                <i class=\"ti ti-eye\"></i>
                                                            </button>
                                                            <button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"deleteLocation({{ lieu.id }})\">
                                                                <i class=\"ti ti-trash\"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {% endfor %}
                                        </div>
                                        
                                        <!-- Table View -->
                                        <div class=\"table-view\">
                                            <table id=\"locationsTable\" class=\"table table-hover dt-responsive nowrap w-100\">
                                                <thead>
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Name</th>
                                                        <th>Description</th>
                                                        <th>Price</th>
                                                        <th>Capacity</th>
                                                        <th>Address</th>
                                                        <th>City</th>
                                                        <th>Category</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {% for lieu in lieux %}
                                                    <tr>
                                                        <td>
                                                            {% if lieu.imageUrl %}
                                                                <img src=\"{{ asset('uploads/lieux/' ~ lieu.imageUrl) }}\" class=\"rounded\" width=\"40\" height=\"40\" style=\"object-fit: cover;\" alt=\"{{ lieu.name }}\">
                                                            {% else %}
                                                                <i class=\"ti ti-photo text-muted\"></i>
                                                            {% endif %}
                                                        </td>
                                                        <td>{{ lieu.name }}</td>
                                                        <td>{{ lieu.description }}</td>
                                                        <td>\${{ lieu.price }}</td>
                                                        <td>
                                                            <span class=\"badge bg-label-primary\">{{ lieu.capacity }} spots</span>
                                                        </td>
                                                        <td>{{ lieu.location }}</td>
                                                        <td>{{ lieu.ville }}</td>
                                                        <td>{{ lieu.category }}</td>
                                                        <td>
                                                            <div class=\"d-flex gap-2\">
                                                                <button type=\"button\" class=\"btn btn-sm btn-icon btn-primary\" 
                                                                        onclick=\"editLocation({{ lieu.id }})\"
                                                                        data-bs-toggle=\"tooltip\" 
                                                                        data-bs-placement=\"top\" 
                                                                        title=\"Edit\">
                                                                    <i class=\"ti ti-edit\"></i>
                                                                </button>
                                                                <button type=\"button\" class=\"btn btn-sm btn-icon btn-danger\"
                                                                        onclick=\"deleteLocation({{ lieu.id }})\"
                                                                        data-bs-toggle=\"tooltip\"
                                                                        data-bs-placement=\"top\"
                                                                        title=\"Delete\">
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
        </div>
    </div>

    <!-- Location Modal (used for both create and edit) -->
    <div class=\"modal fade\" id=\"locationModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"modalTitle\">Create New Location</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <form id=\"locationForm\" enctype=\"multipart/form-data\">
                    <input type=\"hidden\" id=\"locationId\" name=\"id\">
                    <div class=\"modal-body\">
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label for=\"name\" class=\"form-label\">Name</label>
                                <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" required>
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label for=\"price\" class=\"form-label\">Price</label>
                                <input type=\"number\" step=\"0.01\" class=\"form-control\" id=\"price\" name=\"price\" required>
                            </div>
                        </div>
                        
                        <div class=\"mb-3\">
                            <label for=\"description\" class=\"form-label\">Description</label>
                            <textarea class=\"form-control\" id=\"description\" name=\"description\" rows=\"3\"></textarea>
                        </div>
                        
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label for=\"capacity\" class=\"form-label\">Capacity</label>
                                <input type=\"number\" class=\"form-control\" id=\"capacity\" name=\"capacity\" required>
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label for=\"category\" class=\"form-label\">Category</label>
                                <select class=\"form-select\" id=\"category\" name=\"category\">
                                    <option value=\"Conference Room\">Conference Room</option>
                                    <option value=\"Event Space\">Event Space</option>
                                    <option value=\"Coworking\">Coworking</option>
                                    <option value=\"Office\">Office</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label for=\"location\" class=\"form-label\">Address</label>
                                <input type=\"text\" class=\"form-control\" id=\"location\" name=\"location\" required>
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label for=\"ville\" class=\"form-label\">City</label>
                                <input type=\"text\" class=\"form-control\" id=\"ville\" name=\"ville\">
                            </div>
                        </div>
                        
                        <div class=\"mb-3\">
                            <label for=\"imageUrl\" class=\"form-label\">Location Image</label>
                            <input type=\"file\" class=\"form-control\" id=\"imageUrl\" name=\"imageUrl\" accept=\"image/*\">
                            <div id=\"currentImageContainer\" class=\"mt-2\" style=\"display: none;\">
                                <small>Current Image:</small>
                                <img id=\"currentImagePreview\" src=\"\" class=\"img-thumbnail mt-1\" style=\"max-height: 100px;\">
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                        <button type=\"submit\" class=\"btn btn-primary\">Save Location</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Core JS -->
    <script src=\"{{ asset('vendor/libs/jquery/jquery.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/popper/popper.js') }}\"></script>
    <script src=\"{{ asset('vendor/js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/node-waves/node-waves.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/hammer/hammer.js') }}\"></script>
    <script src=\"{{ asset('vendor/js/menu.js') }}\"></script>
    
    <!-- Vendors JS -->
    <script src=\"{{ asset('vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/sweetalert2/sweetalert2.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/flatpickr/flatpickr.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/swiper/swiper.js') }}\"></script>

    <script>
        \$(document).ready(function() {
            // Initialize DataTable
            const locationsTable = \$('#locationsTable').DataTable({
                dom: '<\"row\"<\"col-sm-12 col-md-6\"l><\"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end\"f>>t<\"row\"<\"col-sm-12 col-md-6\"i><\"col-sm-12 col-md-6\"p>>',
                responsive: true,
                order: [[0, 'desc']],
                pageLength: 10,
                language: {
                    sLengthMenu: '_MENU_',
                    search: '',
                    searchPlaceholder: 'Search Locations'
                }
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
                    \$('.gallery-view').show();
                    \$('.table-view').hide();
                } else {
                    \$('.gallery-view').hide();
                    \$('.table-view').show();
                }
            });
            
            // Form submission handler
            \$('#locationForm').on('submit', function(e) {
                e.preventDefault();
                const form = e.target;
                const formData = new FormData(form);
                const locationId = formData.get('id');
                const url = locationId ? `{{ path('admin_lieu_update', {'id': 'LOCATION_ID'}) }}`.replace('LOCATION_ID', locationId)
                                      : '{{ path('admin_lieu_create') }}';

                // Show loading state
                const submitBtn = form.querySelector('button[type=\"submit\"]');
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-1\" role=\"status\" aria-hidden=\"true\"></span> Processing...';

                fetch(url, {
                    method: locationId ? 'PUT' : 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: data.message,
                            showConfirmButton: false,
                            timer: 1500
                        }).then(() => {
                            // Close modal and refresh page
                            const modal = bootstrap.Modal.getInstance(document.getElementById('locationModal'));
                            modal.hide();
                            location.reload();
                        });
                    } else {
                        // Handle validation errors
                        let errorMessage = data.message || 'An error occurred';
                        if (data.errors && data.errors.length > 0) {
                            errorMessage += '<ul class=\"text-start\">';
                            data.errors.forEach(error => {
                                errorMessage += `<li>\${error}</li>`;
                            });
                            errorMessage += '</ul>';
                        }
                        throw new Error(errorMessage);
                    }
                })
                .catch(error => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        html: error.message,
                        confirmButtonText: 'OK'
                    });
                })
                .finally(() => {
                    submitBtn.disabled = false;
                    submitBtn.textContent = 'Save Location';
                });
            });
            
            // Reset form when create modal is shown
            \$('#locationModal').on('show.bs.modal', function(e) {
                if (!e.relatedTarget) {
                    // This is a create operation
                    \$('#modalTitle').text('Create New Location');
                    \$('#locationForm')[0].reset();
                    \$('#locationId').val('');
                    \$('#currentImageContainer').hide();
                }
            });
        });

        // Edit location
        function editLocation(id) {
            fetch(`{{ path('admin_lieu_edit', {'id': 'LOCATION_ID'}) }}`.replace('LOCATION_ID', id))
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const lieu = data.lieu;
                        
                        // Set modal title
                        \$('#modalTitle').text('Edit Location');
                        
                        // Fill form with location data
                        \$('#locationId').val(lieu.id);
                        \$('#name').val(lieu.name);
                        \$('#description').val(lieu.description);
                        \$('#price').val(lieu.price);
                        \$('#capacity').val(lieu.capacity);
                        \$('#location').val(lieu.location);
                        \$('#ville').val(lieu.ville);
                        \$('#category').val(lieu.category);
                        
                        // Show current image if exists
                        if (lieu.imageUrl) {
                            \$('#currentImageContainer').show();
                            \$('#currentImagePreview').attr('src', `{{ asset('uploads/lieux/') }}/\${lieu.imageUrl}`);
                        } else {
                            \$('#currentImageContainer').hide();
                        }
                        
                        // Show modal
                        const modal = new bootstrap.Modal(document.getElementById('locationModal'));
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

        // Delete location
        function deleteLocation(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: \"You won't be able to revert this!\",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                customClass: {
                    confirmButton: 'btn btn-primary me-3',
                    cancelButton: 'btn btn-label-secondary'
                },
                buttonsStyling: false
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(`{{ path('admin_lieu_delete', {'id': 'LOCATION_ID'}) }}`.replace('LOCATION_ID', id), {
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
                                title: 'Deleted!',
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
                            title: 'Error!',
                            text: error.message,
                            confirmButtonText: 'OK'
                        });
                    });
                }
            });
        }
        
        // View location details function
        function viewLocationDetails(id) {
            window.location.href = `{{ path('admin_lieu_show', {'id': 'LOCATION_ID'}) }}`.replace('LOCATION_ID', id);
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
</html>", "admin/lieu/index.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\admin\\lieu\\index.html.twig");
    }
}
