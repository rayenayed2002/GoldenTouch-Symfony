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

/* admin/pack/show.html.twig */
class __TwigTemplate_6b1c34b88b6e5be63a51cd0feda88ad2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pack/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pack/show.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\" class=\"light-style layout-navbar-fixed layout-menu-fixed\" dir=\"ltr\" data-theme=\"theme-default\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>Pack Details - Admin Dashboard</title>
    
    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/favicon.ico"), "html", null, true);
        yield "\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\" />

    <!-- Icons -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fonts/fontawesome.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fonts/tabler-icons.css"), "html", null, true);
        yield "\" />

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/css/rtl/core.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/css/rtl/theme-default.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/demo.css"), "html", null, true);
        yield "\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/node-waves/node-waves.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/swiper/swiper.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/sweetalert2/sweetalert2.css"), "html", null, true);
        yield "\" />
    
    <style>
        .pack-header {
            position: relative;
            background-size: cover;
            background-position: center;
            height: 300px;
            border-radius: 0.5rem;
            overflow: hidden;
        }
        
        .pack-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.7));
        }
        
        .pack-header-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 2rem;
            color: white;
        }
        
        .pack-stat-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .pack-stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .pack-description {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #6e6b7b;
        }
        
        .event-details {
            background: #f8f8f8;
            border-radius: 0.5rem;
            padding: 1.5rem;
        }
        
        .timeline-item {
            position: relative;
            padding-left: 3rem;
            margin-bottom: 2rem;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 2px;
            background: #e0e0e0;
        }
        
        .timeline-point {
            position: absolute;
            left: -6px;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: #7367f0;
            border: 2px solid white;
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
            animation: fadeIn 0.3s ease;
        }

        .form-control.is-invalid ~ .invalid-feedback,
        .form-select.is-invalid ~ .invalid-feedback {
            display: block;
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
            linear-gradient(to bottom, #f8f9fa, #f8f9fa);
            background-repeat: no-repeat, repeat;
            background-position: right 0.5rem center, center right 2.25rem;
            background-size: 16px 12px, 16px 12px;
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
        // line 182
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pack_index");
        yield "\" class=\"menu-link\">
                            <i class=\"menu-icon tf-icons ti ti-package\"></i>
                            <div>Packs</div>
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
                        <!-- Breadcrumb -->
                        <div class=\"d-flex justify-content-between align-items-center mb-4\">
                            <div>
                                <h4 class=\"fw-bold mb-2\">Pack Details</h4>
                                <nav aria-label=\"breadcrumb\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 203
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pack_index");
        yield "\">Packs</a></li>
                                        <li class=\"breadcrumb-item active\" aria-current=\"page\">Details</li>
                                    </ol>
                                </nav>
                            </div>
                            <div>
                                <button type=\"button\" class=\"btn btn-primary me-2\" onclick=\"editPack(";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 209, $this->source); })()), "id", [], "any", false, false, false, 209), "html", null, true);
        yield ")\">
                                    <i class=\"ti ti-edit me-1\"></i> Edit Pack
                                </button>
                                <button type=\"button\" class=\"btn btn-danger\" onclick=\"deletePack(";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 212, $this->source); })()), "id", [], "any", false, false, false, 212), "html", null, true);
        yield ")\">
                                    <i class=\"ti ti-trash me-1\"></i> Delete Pack
                                </button>
                            </div>
                        </div>

                        <!-- Pack Header -->
                        <div class=\"pack-header mb-4\" style=\"background-image: url('";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 219, $this->source); })()), "event", [], "any", false, false, false, 219), "photo", [], "any", false, false, false, 219))), "html", null, true);
        yield "')\">
                            <div class=\"pack-header-content\">
                                <h2 class=\"mb-2\">";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 221, $this->source); })()), "event", [], "any", false, false, false, 221), "nom", [], "any", false, false, false, 221), "html", null, true);
        yield "</h2>
                                <div class=\"d-flex gap-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"ti ti-calendar me-2\"></i>
                                        <span>";
        // line 225
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 225, $this->source); })()), "endDate", [], "any", false, false, false, 225)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 225, $this->source); })()), "endDate", [], "any", false, false, false, 225), "M d, Y"), "html", null, true)) : ("No End Date"));
        yield "</span>
                                    </div>
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"ti ti-users me-2\"></i>
                                        <span>";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 229, $this->source); })()), "capacite", [], "any", false, false, false, 229), "html", null, true);
        yield " spots</span>
                                    </div>
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"ti ti-clock me-2\"></i>
                                        <span>";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 233, $this->source); })()), "duree", [], "any", false, false, false, 233), "html", null, true);
        yield " hours</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <!-- Pack Stats -->
                            <div class=\"col-12 col-xl-4 mb-4\">
                                <div class=\"row\">
                                    <div class=\"col-12 col-sm-6 col-xl-12 mb-4\">
                                        <div class=\"card pack-stat-card\">
                                            <div class=\"card-body\">
                                                <div class=\"d-flex align-items-center justify-content-between\">
                                                    <div>
                                                        <h5 class=\"mb-1\">Price</h5>
                                                        <h2 class=\"mb-0 text-primary\">\$";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 249, $this->source); })()), "prix", [], "any", false, false, false, 249), "html", null, true);
        yield "</h2>
                                                    </div>
                                                    <div class=\"avatar avatar-lg\">
                                                        <div class=\"avatar-initial bg-label-primary rounded\">
                                                            <i class=\"ti ti-currency-dollar fs-3\"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-12 col-sm-6 col-xl-12 mb-4\">
                                        <div class=\"card pack-stat-card\">
                                            <div class=\"card-body\">
                                                <div class=\"d-flex align-items-center justify-content-between\">
                                                    <div>
                                                        <h5 class=\"mb-1\">Capacity</h5>
                                                        <h2 class=\"mb-0 text-success\">";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 267, $this->source); })()), "capacite", [], "any", false, false, false, 267), "html", null, true);
        yield " spots</h2>
                                                    </div>
                                                    <div class=\"avatar avatar-lg\">
                                                        <div class=\"avatar-initial bg-label-success rounded\">
                                                            <i class=\"ti ti-users fs-3\"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-12\">
                                        <div class=\"card pack-stat-card\">
                                            <div class=\"card-body\">
                                                <div class=\"d-flex align-items-center justify-content-between\">
                                                    <div>
                                                        <h5 class=\"mb-1\">Duration</h5>
                                                        <h2 class=\"mb-0 text-info\">";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 285, $this->source); })()), "duree", [], "any", false, false, false, 285), "html", null, true);
        yield " hours</h2>
                                                    </div>
                                                    <div class=\"avatar avatar-lg\">
                                                        <div class=\"avatar-initial bg-label-info rounded\">
                                                            <i class=\"ti ti-clock fs-3\"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pack Details -->
                            <div class=\"col-12 col-xl-8\">
                                <div class=\"card mb-4\">
                                    <div class=\"card-header\">
                                        <h5 class=\"mb-0\">Pack Description</h5>
                                    </div>
                                    <div class=\"card-body\">
                                        <p class=\"pack-description\">";
        // line 306
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 306, $this->source); })()), "description", [], "any", false, false, false, 306), "html", null, true);
        yield "</p>
                                    </div>
                                </div>

                                <div class=\"card\">
                                    <div class=\"card-header\">
                                        <h5 class=\"mb-0\">Event Details</h5>
                                    </div>
                                    <div class=\"card-body\">
                                        <div class=\"event-details\">
                                            <div class=\"timeline-item\">
                                                <div class=\"timeline-point\"></div>
                                                <h6 class=\"mb-1\">Event Name</h6>
                                                <p class=\"mb-0\">";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 319, $this->source); })()), "event", [], "any", false, false, false, 319), "nom", [], "any", false, false, false, 319), "html", null, true);
        yield "</p>
                                            </div>
                                            
                                            <div class=\"timeline-item\">
                                                <div class=\"timeline-point\"></div>
                                                <h6 class=\"mb-1\">Category</h6>
                                                <p class=\"mb-0\">";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 325, $this->source); })()), "event", [], "any", false, false, false, 325), "categorie", [], "any", false, false, false, 325), "value", [], "any", false, false, false, 325), "html", null, true);
        yield "</p>
                                            </div>
                                            
                                            <div class=\"timeline-item\">
                                                <div class=\"timeline-point\"></div>
                                                <h6 class=\"mb-1\">End Date</h6>
                                                <p class=\"mb-0\">";
        // line 331
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 331, $this->source); })()), "endDate", [], "any", false, false, false, 331)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 331, $this->source); })()), "endDate", [], "any", false, false, false, 331), "F d, Y"), "html", null, true)) : ("No End Date Set"));
        yield "</p>
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
    </div>

    <!-- Edit Pack Modal -->
    <div class=\"modal fade\" id=\"editPackModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"editPackModalLabel\">Edit Pack</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <form id=\"editPackForm\" class=\"needs-validation\" novalidate>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label for=\"event\" class=\"form-label\">Event</label>
                                ";
        // line 357
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 357, $this->source); })()), "event", [], "any", false, false, false, 357), 'widget', ["attr" => ["class" => "form-select", "id" => "event", "required" => "required"]]);
        yield "
                                <div class=\"invalid-feedback\">Please select an event.</div>
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label for=\"prix\" class=\"form-label\">Price</label>
                                ";
        // line 362
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 362, $this->source); })()), "prix", [], "any", false, false, false, 362), 'widget', ["attr" => ["class" => "form-control", "id" => "prix", "required" => "required", "min" => "0", "step" => "0.01"]]);
        yield "
                                <div class=\"invalid-feedback\">Please provide a valid price.</div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label for=\"capacite\" class=\"form-label\">Capacity</label>
                                ";
        // line 369
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 369, $this->source); })()), "capacite", [], "any", false, false, false, 369), 'widget', ["attr" => ["class" => "form-control", "id" => "capacite", "required" => "required", "min" => "1"]]);
        yield "
                                <div class=\"invalid-feedback\">Please provide a valid capacity.</div>
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label for=\"duree\" class=\"form-label\">Duration</label>
                                ";
        // line 374
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 374, $this->source); })()), "duree", [], "any", false, false, false, 374), 'widget', ["attr" => ["class" => "form-control", "id" => "duree", "required" => "required", "min" => "1"]]);
        yield "
                                <div class=\"invalid-feedback\">Please provide a valid duration.</div>
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"description\" class=\"form-label\">Description</label>
                            ";
        // line 380
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 380, $this->source); })()), "description", [], "any", false, false, false, 380), 'widget', ["attr" => ["class" => "form-control", "rows" => "4", "id" => "description", "required" => "required"]]);
        yield "
                            <div class=\"invalid-feedback\">Please provide a description.</div>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"endDate\" class=\"form-label\">End Date</label>
                            ";
        // line 385
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 385, $this->source); })()), "endDate", [], "any", false, false, false, 385), 'widget', ["attr" => ["class" => "form-control", "id" => "endDate"]]);
        yield "
                            <div class=\"invalid-feedback\">Please provide a valid date.</div>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-label-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                    <button type=\"submit\" class=\"btn btn-primary\" onclick=\"submitEditForm()\">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Core JS -->
    <script src=\"";
        // line 399
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 400
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 401
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 403
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/node-waves/node-waves.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 404
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/hammer/hammer.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 405
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/menu.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 406
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/sweetalert2/sweetalert2.js"), "html", null, true);
        yield "\"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add validation error styling
            document.querySelectorAll('.form-control, .form-select').forEach(function(input) {
                input.addEventListener('invalid', function(e) {
                    e.preventDefault();
                    this.classList.add('is-invalid');
                    
                    // Add shake animation
                    this.style.animation = 'shake 0.5s ease-in-out';
                    setTimeout(() => {
                        this.style.animation = '';
                    }, 500);
                });
                
                input.addEventListener('input', function() {
                    this.classList.remove('is-invalid');
                });
            });

            // Handle form submission
            document.getElementById('editPackForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Check if form is valid
                const form = this;
                let isValid = true;
                
                // Validate each required field
                form.querySelectorAll('[required]').forEach(function(input) {
                    if (!input.checkValidity()) {
                        input.classList.add('is-invalid');
                        input.style.animation = 'shake 0.5s ease-in-out';
                        setTimeout(() => {
                            input.style.animation = '';
                        }, 500);
                        isValid = false;
                    }
                });
                
                // Validate endDate if provided
                const endDateInput = form.querySelector('input[name=\"pack[endDate]\"]');
                if (endDateInput && endDateInput.value) {
                    const endDate = new Date(endDateInput.value);
                    if (isNaN(endDate.getTime())) {
                        endDateInput.classList.add('is-invalid');
                        isValid = false;
                    }
                }
                
                if (!isValid) {
                    // Show error message with SweetAlert
                    Swal.fire({
                        title: 'Erreur!',
                        text: 'Veuillez corriger les erreurs dans le formulaire.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                    return;
                }

                const formData = new FormData(this);

                fetch(this.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    credentials: 'same-origin'
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: \${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        // Show success message with SweetAlert
                        Swal.fire({
                            icon: 'success',
                            title: 'Succès !',
                            text: 'Pack modifié avec succès !',
                            showConfirmButton: false,
                            timer: 1500,
                            customClass: {
                                popup: 'swal2-popup-custom'
                            }
                        }).then(() => {
                            // Refresh the page
                            location.reload();
                        });
                    } else {
                        throw new Error(data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Show error message with SweetAlert
                    Swal.fire({
                        icon: 'error',
                        title: 'Erreur !',
                        text: 'Une erreur est survenue lors de la modification du pack.',
                        showConfirmButton: false,
                        timer: 1500,
                        customClass: {
                            popup: 'swal2-popup-custom'
                        }
                    });
                });
            });
        });

        // Edit pack function
        function editPack(id) {
            fetch(`";
        // line 524
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pack_edit", ["id" => "ID"]);
        yield "`.replace('ID', id))
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const pack = data.pack;
                        document.getElementById('editPackModalLabel').textContent = 'Edit Pack';
                        
                        // Show modal
                        const modal = new bootstrap.Modal(document.getElementById('editPackModal'));
                        modal.show();
                        
                        // Populate form fields after modal is shown
                        modal._element.addEventListener('shown.bs.modal', function() {
                            document.querySelector('select[name=\"pack[event]\"]').value = pack.event.id;
                            document.querySelector('input[name=\"pack[prix]\"]').value = pack.prix;
                            document.querySelector('input[name=\"pack[capacite]\"]').value = pack.capacite;
                            document.querySelector('input[name=\"pack[duree]\"]').value = pack.duree;
                            document.querySelector('textarea[name=\"pack[description]\"]').value = pack.description;
                            document.querySelector('input[name=\"pack[endDate]\"]').value = pack.endDate;
                        });
                    } else {
                        throw new Error(data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Show error message with SweetAlert
                    Swal.fire({
                        title: 'Erreur!',
                        text: 'Une erreur est survenue lors de la récupération des données du pack.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                });
        }

        // Delete pack function
        function deletePack(id) {
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
        // line 575
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pack_delete", ["id" => "PACK_ID"]);
        yield "`.replace('PACK_ID', id), {
                        method: 'DELETE'
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
                                window.location.href = '";
        // line 588
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pack_index");
        yield "';
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

        // Form validation
        function validateForm() {
            const form = document.getElementById('editPackForm');
            let isValid = true;
            
            // Clear previous errors
            form.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
            
            // Validate required fields
            form.querySelectorAll('[required]').forEach(input => {
                if (!input.value.trim()) {
                    input.classList.add('is-invalid');
                    isValid = false;
                }
            });
            
            // Validate price
            const prix = form.querySelector('input[name=\"pack[prix]\"]');
            if (prix) {
                const priceValue = parseFloat(prix.value);
                if (isNaN(priceValue) || priceValue < 0) {
                    prix.classList.add('is-invalid');
                    isValid = false;
                }
            }
            
            // Validate capacity
            const capacite = form.querySelector('input[name=\"pack[capacite]\"]');
            if (capacite) {
                const capacityValue = parseInt(capacite.value);
                if (isNaN(capacityValue) || capacityValue < 1) {
                    capacite.classList.add('is-invalid');
                    isValid = false;
                }
            }
            
            // Validate duration
            const duree = form.querySelector('input[name=\"pack[duree]\"]');
            if (duree) {
                const durationValue = parseInt(duree.value);
                if (isNaN(durationValue) || durationValue < 1) {
                    duree.classList.add('is-invalid');
                    isValid = false;
                }
            }
            
            return isValid;
        }

        // Submit edit form
        function submitEditForm() {
            if (!validateForm()) {
                return;
            }

            const form = document.getElementById('editPackForm');
            const formData = new FormData(form);
            
            // Convert FormData to JSON
            const jsonData = {
                event: formData.get('pack[event]'),
                description: formData.get('pack[description]'),
                prix: formData.get('pack[prix]'),
                capacite: formData.get('pack[capacite]'),
                duree: formData.get('pack[duree]'),
                endDate: formData.get('pack[endDate]')
            };
            
            fetch(`";
        // line 674
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pack_update", ["id" => "ID"]);
        yield "`.replace('ID', ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 674, $this->source); })()), "id", [], "any", false, false, false, 674), "html", null, true);
        yield "), {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify(jsonData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message
                    Swal.fire({
                        icon: 'success',
                        title: 'Succès !',
                        text: 'Pack modifié avec succès !',
                        showConfirmButton: false,
                        timer: 1500,
                        customClass: {
                            popup: 'swal2-popup-custom'
                        }
                    }).then(() => {
                        window.location.reload();
                    });
                } else {
                    throw new Error(data.message);
                }
            })
            .catch(error => {
                // Show error message
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur !',
                    text: 'Une erreur est survenue lors de la modification du pack.',
                    showConfirmButton: false,
                    timer: 1500,
                    customClass: {
                        popup: 'swal2-popup-custom'
                    }
                });
            });
        }

        // Add form validation on submit
        document.getElementById('editPackForm').addEventListener('submit', function(e) {
            e.preventDefault();
            submitEditForm();
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
        return "admin/pack/show.html.twig";
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
        return array (  852 => 674,  763 => 588,  747 => 575,  693 => 524,  572 => 406,  568 => 405,  564 => 404,  560 => 403,  556 => 402,  552 => 401,  548 => 400,  544 => 399,  527 => 385,  519 => 380,  510 => 374,  502 => 369,  492 => 362,  484 => 357,  455 => 331,  446 => 325,  437 => 319,  421 => 306,  397 => 285,  376 => 267,  355 => 249,  336 => 233,  329 => 229,  322 => 225,  315 => 221,  310 => 219,  300 => 212,  294 => 209,  285 => 203,  261 => 182,  105 => 29,  101 => 28,  97 => 27,  93 => 26,  87 => 23,  83 => 22,  79 => 21,  73 => 18,  69 => 17,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" class=\"light-style layout-navbar-fixed layout-menu-fixed\" dir=\"ltr\" data-theme=\"theme-default\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>Pack Details - Admin Dashboard</title>
    
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
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/swiper/swiper.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/sweetalert2/sweetalert2.css') }}\" />
    
    <style>
        .pack-header {
            position: relative;
            background-size: cover;
            background-position: center;
            height: 300px;
            border-radius: 0.5rem;
            overflow: hidden;
        }
        
        .pack-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.7));
        }
        
        .pack-header-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 2rem;
            color: white;
        }
        
        .pack-stat-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .pack-stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .pack-description {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #6e6b7b;
        }
        
        .event-details {
            background: #f8f8f8;
            border-radius: 0.5rem;
            padding: 1.5rem;
        }
        
        .timeline-item {
            position: relative;
            padding-left: 3rem;
            margin-bottom: 2rem;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 2px;
            background: #e0e0e0;
        }
        
        .timeline-point {
            position: absolute;
            left: -6px;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: #7367f0;
            border: 2px solid white;
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
            animation: fadeIn 0.3s ease;
        }

        .form-control.is-invalid ~ .invalid-feedback,
        .form-select.is-invalid ~ .invalid-feedback {
            display: block;
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
            linear-gradient(to bottom, #f8f9fa, #f8f9fa);
            background-repeat: no-repeat, repeat;
            background-position: right 0.5rem center, center right 2.25rem;
            background-size: 16px 12px, 16px 12px;
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
                        <a href=\"{{ path('admin_pack_index') }}\" class=\"menu-link\">
                            <i class=\"menu-icon tf-icons ti ti-package\"></i>
                            <div>Packs</div>
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
                        <!-- Breadcrumb -->
                        <div class=\"d-flex justify-content-between align-items-center mb-4\">
                            <div>
                                <h4 class=\"fw-bold mb-2\">Pack Details</h4>
                                <nav aria-label=\"breadcrumb\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\"><a href=\"{{ path('admin_pack_index') }}\">Packs</a></li>
                                        <li class=\"breadcrumb-item active\" aria-current=\"page\">Details</li>
                                    </ol>
                                </nav>
                            </div>
                            <div>
                                <button type=\"button\" class=\"btn btn-primary me-2\" onclick=\"editPack({{ pack.id }})\">
                                    <i class=\"ti ti-edit me-1\"></i> Edit Pack
                                </button>
                                <button type=\"button\" class=\"btn btn-danger\" onclick=\"deletePack({{ pack.id }})\">
                                    <i class=\"ti ti-trash me-1\"></i> Delete Pack
                                </button>
                            </div>
                        </div>

                        <!-- Pack Header -->
                        <div class=\"pack-header mb-4\" style=\"background-image: url('{{ asset('uploads/packs/' ~ pack.event.photo) }}')\">
                            <div class=\"pack-header-content\">
                                <h2 class=\"mb-2\">{{ pack.event.nom }}</h2>
                                <div class=\"d-flex gap-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"ti ti-calendar me-2\"></i>
                                        <span>{{ pack.endDate ? pack.endDate|date('M d, Y') : 'No End Date' }}</span>
                                    </div>
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"ti ti-users me-2\"></i>
                                        <span>{{ pack.capacite }} spots</span>
                                    </div>
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"ti ti-clock me-2\"></i>
                                        <span>{{ pack.duree }} hours</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <!-- Pack Stats -->
                            <div class=\"col-12 col-xl-4 mb-4\">
                                <div class=\"row\">
                                    <div class=\"col-12 col-sm-6 col-xl-12 mb-4\">
                                        <div class=\"card pack-stat-card\">
                                            <div class=\"card-body\">
                                                <div class=\"d-flex align-items-center justify-content-between\">
                                                    <div>
                                                        <h5 class=\"mb-1\">Price</h5>
                                                        <h2 class=\"mb-0 text-primary\">\${{ pack.prix }}</h2>
                                                    </div>
                                                    <div class=\"avatar avatar-lg\">
                                                        <div class=\"avatar-initial bg-label-primary rounded\">
                                                            <i class=\"ti ti-currency-dollar fs-3\"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-12 col-sm-6 col-xl-12 mb-4\">
                                        <div class=\"card pack-stat-card\">
                                            <div class=\"card-body\">
                                                <div class=\"d-flex align-items-center justify-content-between\">
                                                    <div>
                                                        <h5 class=\"mb-1\">Capacity</h5>
                                                        <h2 class=\"mb-0 text-success\">{{ pack.capacite }} spots</h2>
                                                    </div>
                                                    <div class=\"avatar avatar-lg\">
                                                        <div class=\"avatar-initial bg-label-success rounded\">
                                                            <i class=\"ti ti-users fs-3\"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-12\">
                                        <div class=\"card pack-stat-card\">
                                            <div class=\"card-body\">
                                                <div class=\"d-flex align-items-center justify-content-between\">
                                                    <div>
                                                        <h5 class=\"mb-1\">Duration</h5>
                                                        <h2 class=\"mb-0 text-info\">{{ pack.duree }} hours</h2>
                                                    </div>
                                                    <div class=\"avatar avatar-lg\">
                                                        <div class=\"avatar-initial bg-label-info rounded\">
                                                            <i class=\"ti ti-clock fs-3\"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pack Details -->
                            <div class=\"col-12 col-xl-8\">
                                <div class=\"card mb-4\">
                                    <div class=\"card-header\">
                                        <h5 class=\"mb-0\">Pack Description</h5>
                                    </div>
                                    <div class=\"card-body\">
                                        <p class=\"pack-description\">{{ pack.description }}</p>
                                    </div>
                                </div>

                                <div class=\"card\">
                                    <div class=\"card-header\">
                                        <h5 class=\"mb-0\">Event Details</h5>
                                    </div>
                                    <div class=\"card-body\">
                                        <div class=\"event-details\">
                                            <div class=\"timeline-item\">
                                                <div class=\"timeline-point\"></div>
                                                <h6 class=\"mb-1\">Event Name</h6>
                                                <p class=\"mb-0\">{{ pack.event.nom }}</p>
                                            </div>
                                            
                                            <div class=\"timeline-item\">
                                                <div class=\"timeline-point\"></div>
                                                <h6 class=\"mb-1\">Category</h6>
                                                <p class=\"mb-0\">{{ pack.event.categorie.value }}</p>
                                            </div>
                                            
                                            <div class=\"timeline-item\">
                                                <div class=\"timeline-point\"></div>
                                                <h6 class=\"mb-1\">End Date</h6>
                                                <p class=\"mb-0\">{{ pack.endDate ? pack.endDate|date('F d, Y') : 'No End Date Set' }}</p>
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
    </div>

    <!-- Edit Pack Modal -->
    <div class=\"modal fade\" id=\"editPackModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"editPackModalLabel\">Edit Pack</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <form id=\"editPackForm\" class=\"needs-validation\" novalidate>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label for=\"event\" class=\"form-label\">Event</label>
                                {{ form_widget(editForm.event, {'attr': {'class': 'form-select', 'id': 'event', 'required': 'required'}}) }}
                                <div class=\"invalid-feedback\">Please select an event.</div>
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label for=\"prix\" class=\"form-label\">Price</label>
                                {{ form_widget(editForm.prix, {'attr': {'class': 'form-control', 'id': 'prix', 'required': 'required', 'min': '0', 'step': '0.01'}}) }}
                                <div class=\"invalid-feedback\">Please provide a valid price.</div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label for=\"capacite\" class=\"form-label\">Capacity</label>
                                {{ form_widget(editForm.capacite, {'attr': {'class': 'form-control', 'id': 'capacite', 'required': 'required', 'min': '1'}}) }}
                                <div class=\"invalid-feedback\">Please provide a valid capacity.</div>
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label for=\"duree\" class=\"form-label\">Duration</label>
                                {{ form_widget(editForm.duree, {'attr': {'class': 'form-control', 'id': 'duree', 'required': 'required', 'min': '1'}}) }}
                                <div class=\"invalid-feedback\">Please provide a valid duration.</div>
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"description\" class=\"form-label\">Description</label>
                            {{ form_widget(editForm.description, {'attr': {'class': 'form-control', 'rows': '4', 'id': 'description', 'required': 'required'}}) }}
                            <div class=\"invalid-feedback\">Please provide a description.</div>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"endDate\" class=\"form-label\">End Date</label>
                            {{ form_widget(editForm.endDate, {'attr': {'class': 'form-control', 'id': 'endDate'}}) }}
                            <div class=\"invalid-feedback\">Please provide a valid date.</div>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-label-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                    <button type=\"submit\" class=\"btn btn-primary\" onclick=\"submitEditForm()\">Save Changes</button>
                </div>
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
    <script src=\"{{ asset('vendor/libs/sweetalert2/sweetalert2.js') }}\"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add validation error styling
            document.querySelectorAll('.form-control, .form-select').forEach(function(input) {
                input.addEventListener('invalid', function(e) {
                    e.preventDefault();
                    this.classList.add('is-invalid');
                    
                    // Add shake animation
                    this.style.animation = 'shake 0.5s ease-in-out';
                    setTimeout(() => {
                        this.style.animation = '';
                    }, 500);
                });
                
                input.addEventListener('input', function() {
                    this.classList.remove('is-invalid');
                });
            });

            // Handle form submission
            document.getElementById('editPackForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Check if form is valid
                const form = this;
                let isValid = true;
                
                // Validate each required field
                form.querySelectorAll('[required]').forEach(function(input) {
                    if (!input.checkValidity()) {
                        input.classList.add('is-invalid');
                        input.style.animation = 'shake 0.5s ease-in-out';
                        setTimeout(() => {
                            input.style.animation = '';
                        }, 500);
                        isValid = false;
                    }
                });
                
                // Validate endDate if provided
                const endDateInput = form.querySelector('input[name=\"pack[endDate]\"]');
                if (endDateInput && endDateInput.value) {
                    const endDate = new Date(endDateInput.value);
                    if (isNaN(endDate.getTime())) {
                        endDateInput.classList.add('is-invalid');
                        isValid = false;
                    }
                }
                
                if (!isValid) {
                    // Show error message with SweetAlert
                    Swal.fire({
                        title: 'Erreur!',
                        text: 'Veuillez corriger les erreurs dans le formulaire.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                    return;
                }

                const formData = new FormData(this);

                fetch(this.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    credentials: 'same-origin'
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: \${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        // Show success message with SweetAlert
                        Swal.fire({
                            icon: 'success',
                            title: 'Succès !',
                            text: 'Pack modifié avec succès !',
                            showConfirmButton: false,
                            timer: 1500,
                            customClass: {
                                popup: 'swal2-popup-custom'
                            }
                        }).then(() => {
                            // Refresh the page
                            location.reload();
                        });
                    } else {
                        throw new Error(data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Show error message with SweetAlert
                    Swal.fire({
                        icon: 'error',
                        title: 'Erreur !',
                        text: 'Une erreur est survenue lors de la modification du pack.',
                        showConfirmButton: false,
                        timer: 1500,
                        customClass: {
                            popup: 'swal2-popup-custom'
                        }
                    });
                });
            });
        });

        // Edit pack function
        function editPack(id) {
            fetch(`{{ path('admin_pack_edit', {'id': 'ID'}) }}`.replace('ID', id))
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const pack = data.pack;
                        document.getElementById('editPackModalLabel').textContent = 'Edit Pack';
                        
                        // Show modal
                        const modal = new bootstrap.Modal(document.getElementById('editPackModal'));
                        modal.show();
                        
                        // Populate form fields after modal is shown
                        modal._element.addEventListener('shown.bs.modal', function() {
                            document.querySelector('select[name=\"pack[event]\"]').value = pack.event.id;
                            document.querySelector('input[name=\"pack[prix]\"]').value = pack.prix;
                            document.querySelector('input[name=\"pack[capacite]\"]').value = pack.capacite;
                            document.querySelector('input[name=\"pack[duree]\"]').value = pack.duree;
                            document.querySelector('textarea[name=\"pack[description]\"]').value = pack.description;
                            document.querySelector('input[name=\"pack[endDate]\"]').value = pack.endDate;
                        });
                    } else {
                        throw new Error(data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Show error message with SweetAlert
                    Swal.fire({
                        title: 'Erreur!',
                        text: 'Une erreur est survenue lors de la récupération des données du pack.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                });
        }

        // Delete pack function
        function deletePack(id) {
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
                    fetch(`{{ path('admin_pack_delete', {'id': 'PACK_ID'}) }}`.replace('PACK_ID', id), {
                        method: 'DELETE'
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
                                window.location.href = '{{ path('admin_pack_index') }}';
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

        // Form validation
        function validateForm() {
            const form = document.getElementById('editPackForm');
            let isValid = true;
            
            // Clear previous errors
            form.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
            
            // Validate required fields
            form.querySelectorAll('[required]').forEach(input => {
                if (!input.value.trim()) {
                    input.classList.add('is-invalid');
                    isValid = false;
                }
            });
            
            // Validate price
            const prix = form.querySelector('input[name=\"pack[prix]\"]');
            if (prix) {
                const priceValue = parseFloat(prix.value);
                if (isNaN(priceValue) || priceValue < 0) {
                    prix.classList.add('is-invalid');
                    isValid = false;
                }
            }
            
            // Validate capacity
            const capacite = form.querySelector('input[name=\"pack[capacite]\"]');
            if (capacite) {
                const capacityValue = parseInt(capacite.value);
                if (isNaN(capacityValue) || capacityValue < 1) {
                    capacite.classList.add('is-invalid');
                    isValid = false;
                }
            }
            
            // Validate duration
            const duree = form.querySelector('input[name=\"pack[duree]\"]');
            if (duree) {
                const durationValue = parseInt(duree.value);
                if (isNaN(durationValue) || durationValue < 1) {
                    duree.classList.add('is-invalid');
                    isValid = false;
                }
            }
            
            return isValid;
        }

        // Submit edit form
        function submitEditForm() {
            if (!validateForm()) {
                return;
            }

            const form = document.getElementById('editPackForm');
            const formData = new FormData(form);
            
            // Convert FormData to JSON
            const jsonData = {
                event: formData.get('pack[event]'),
                description: formData.get('pack[description]'),
                prix: formData.get('pack[prix]'),
                capacite: formData.get('pack[capacite]'),
                duree: formData.get('pack[duree]'),
                endDate: formData.get('pack[endDate]')
            };
            
            fetch(`{{ path('admin_pack_update', {'id': 'ID'}) }}`.replace('ID', {{ pack.id }}), {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify(jsonData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message
                    Swal.fire({
                        icon: 'success',
                        title: 'Succès !',
                        text: 'Pack modifié avec succès !',
                        showConfirmButton: false,
                        timer: 1500,
                        customClass: {
                            popup: 'swal2-popup-custom'
                        }
                    }).then(() => {
                        window.location.reload();
                    });
                } else {
                    throw new Error(data.message);
                }
            })
            .catch(error => {
                // Show error message
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur !',
                    text: 'Une erreur est survenue lors de la modification du pack.',
                    showConfirmButton: false,
                    timer: 1500,
                    customClass: {
                        popup: 'swal2-popup-custom'
                    }
                });
            });
        }

        // Add form validation on submit
        document.getElementById('editPackForm').addEventListener('submit', function(e) {
            e.preventDefault();
            submitEditForm();
        });
    </script>
</body>
</html>
", "admin/pack/show.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\admin\\pack\\show.html.twig");
    }
}
