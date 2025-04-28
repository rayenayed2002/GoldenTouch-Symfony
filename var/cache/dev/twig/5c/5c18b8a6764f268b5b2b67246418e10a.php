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

/* admin/lieu/show.html.twig */
class __TwigTemplate_5d50781b472b6bc231b70b08f55bd9ac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/lieu/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/lieu/show.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\" class=\"light-style layout-navbar-fixed layout-menu-fixed\" dir=\"ltr\" data-theme=\"theme-default\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>Location Details - Admin Dashboard</title>
    
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
    
    <style>
        .location-header {
            position: relative;
            background-size: cover;
            background-position: center;
            height: 300px;
            border-radius: 0.5rem;
            overflow: hidden;
        }
        
        .location-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.7));
        }
        
        .location-header-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 2rem;
            color: white;
        }
        
        .location-stat-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .location-stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .location-description {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #6e6b7b;
        }
        
        .location-details {
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
        // line 129
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_lieu_index");
        yield "\" class=\"menu-link\">
                            <i class=\"menu-icon tf-icons ti ti-map-pin\"></i>
                            <div>Locations</div>
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
                                <h4 class=\"fw-bold mb-2\">Location Details</h4>
                                <nav aria-label=\"breadcrumb\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\">
                                            <a href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_lieu_index");
        yield "\">Locations</a>
                                        </li>
                                        <li class=\"breadcrumb-item active\">Details</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class=\"d-flex gap-2\">
                                <button type=\"button\" class=\"btn btn-primary\" onclick=\"editLocation(";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 158, $this->source); })()), "id", [], "any", false, false, false, 158), "html", null, true);
        yield ")\">
                                    <i class=\"ti ti-edit me-1\"></i> Edit Location
                                </button>
                                <button type=\"button\" class=\"btn btn-danger\" onclick=\"deleteLocation(";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 161, $this->source); })()), "id", [], "any", false, false, false, 161), "html", null, true);
        yield ")\">
                                    <i class=\"ti ti-trash me-1\"></i> Delete Location
                                </button>
                            </div>
                        </div>

                        <!-- Location Header -->
                        <div class=\"location-header mb-4\" style=\"background-image: url('";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/lieux/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 168, $this->source); })()), "imageUrl", [], "any", false, false, false, 168))), "html", null, true);
        yield "')\">
                            <div class=\"location-header-content\">
                                <h2 class=\"mb-2\">";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 170, $this->source); })()), "name", [], "any", false, false, false, 170), "html", null, true);
        yield "</h2>
                                <div class=\"d-flex gap-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"ti ti-map-pin me-2\"></i>
                                        <span>";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 174, $this->source); })()), "location", [], "any", false, false, false, 174), "html", null, true);
        yield "</span>
                                    </div>
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"ti ti-users me-2\"></i>
                                        <span>";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 178, $this->source); })()), "capacity", [], "any", false, false, false, 178), "html", null, true);
        yield " spots</span>
                                    </div>
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"ti ti-category me-2\"></i>
                                        <span>";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 182, $this->source); })()), "category", [], "any", false, false, false, 182), "html", null, true);
        yield "</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <!-- Location Stats -->
                            <div class=\"col-12 col-xl-4 mb-4\">
                                <div class=\"row\">
                                    <div class=\"col-12 col-sm-6 col-xl-12 mb-4\">
                                        <div class=\"card location-stat-card\">
                                            <div class=\"card-body\">
                                                <div class=\"d-flex align-items-center justify-content-between\">
                                                    <div>
                                                        <h5 class=\"mb-1\">Price</h5>
                                                        <h2 class=\"mb-0 text-primary\">\$";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 198, $this->source); })()), "price", [], "any", false, false, false, 198), "html", null, true);
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
                                        <div class=\"card location-stat-card\">
                                            <div class=\"card-body\">
                                                <div class=\"d-flex align-items-center justify-content-between\">
                                                    <div>
                                                        <h5 class=\"mb-1\">Capacity</h5>
                                                        <h2 class=\"mb-0 text-success\">";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 216, $this->source); })()), "capacity", [], "any", false, false, false, 216), "html", null, true);
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
                                        <div class=\"card location-stat-card\">
                                            <div class=\"card-body\">
                                                <div class=\"d-flex align-items-center justify-content-between\">
                                                    <div>
                                                        <h5 class=\"mb-1\">City</h5>
                                                        <h2 class=\"mb-0 text-info\">";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 234, $this->source); })()), "ville", [], "any", false, false, false, 234), "html", null, true);
        yield "</h2>
                                                    </div>
                                                    <div class=\"avatar avatar-lg\">
                                                        <div class=\"avatar-initial bg-label-info rounded\">
                                                            <i class=\"ti ti-building-community fs-3\"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Location Details -->
                            <div class=\"col-12 col-xl-8\">
                                <div class=\"card mb-4\">
                                    <div class=\"card-header\">
                                        <h5 class=\"mb-0\">Location Description</h5>
                                    </div>
                                    <div class=\"card-body\">
                                        <p class=\"location-description\">";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 255, $this->source); })()), "description", [], "any", false, false, false, 255), "html", null, true);
        yield "</p>
                                    </div>
                                </div>

                                <div class=\"card\">
                                    <div class=\"card-header\">
                                        <h5 class=\"mb-0\">Location Details</h5>
                                    </div>
                                    <div class=\"card-body\">
                                        <div class=\"location-details\">
                                            <div class=\"timeline-item\">
                                                <div class=\"timeline-point\"></div>
                                                <h6 class=\"mb-1\">Address</h6>
                                                <p class=\"mb-0\">";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 268, $this->source); })()), "location", [], "any", false, false, false, 268), "html", null, true);
        yield "</p>
                                            </div>
                                            
                                            <div class=\"timeline-item\">
                                                <div class=\"timeline-point\"></div>
                                                <h6 class=\"mb-1\">City</h6>
                                                <p class=\"mb-0\">";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 274, $this->source); })()), "ville", [], "any", false, false, false, 274), "html", null, true);
        yield "</p>
                                            </div>
                                            
                                            <div class=\"timeline-item\">
                                                <div class=\"timeline-point\"></div>
                                                <h6 class=\"mb-1\">Category</h6>
                                                <p class=\"mb-0\">";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 280, $this->source); })()), "category", [], "any", false, false, false, 280), "html", null, true);
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

    <!-- Create/Edit Location Modal -->
    <div class=\"modal fade\" id=\"locationModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"modalTitle\">Edit Location</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <form id=\"locationForm\" onsubmit=\"handleLocationSubmit(event)\" enctype=\"multipart/form-data\">
                    <div class=\"modal-body\">
                        <input type=\"hidden\" id=\"locationId\" name=\"id\">
                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"name\">Name</label>
                            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" required>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"description\">Description</label>
                            <textarea class=\"form-control\" id=\"description\" name=\"description\" rows=\"3\"></textarea>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\" for=\"price\">Price</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\">\$</span>
                                    <input type=\"number\" class=\"form-control\" id=\"price\" name=\"price\" step=\"0.01\" required>
                                </div>
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\" for=\"capacity\">Capacity</label>
                                <input type=\"number\" class=\"form-control\" id=\"capacity\" name=\"capacity\" required>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\" for=\"location\">Address</label>
                                <input type=\"text\" class=\"form-control\" id=\"location\" name=\"location\" required>
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\" for=\"ville\">City</label>
                                <input type=\"text\" class=\"form-control\" id=\"ville\" name=\"ville\">
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\" for=\"category\">Category</label>
                                <input type=\"text\" class=\"form-control\" id=\"category\" name=\"category\">
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\" for=\"imageUrl\">Image</label>
                                <input type=\"file\" class=\"form-control\" id=\"imageUrl\" name=\"imageUrl\">
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-label-secondary\" data-bs-dismiss=\"modal\">Close</button>
                        <button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Core JS -->
    <script src=\"";
        // line 356
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 357
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/node-waves/node-waves.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/hammer/hammer.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 362
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/menu.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 363
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/sweetalert2/sweetalert2.js"), "html", null, true);
        yield "\"></script>

    <script>
        \$(document).ready(function() {
            // Initialize Flatpickr if needed
            // flatpickr('.flatpickr', {
            //     dateFormat: 'Y-m-d',
            //     minDate: 'today'
            // });
        });

        // Handle form submission
        function handleLocationSubmit(event) {
            event.preventDefault();
            const form = event.target;
            const formData = new FormData(form);
            const locationId = formData.get('id');
            const url = locationId ? `";
        // line 380
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_lieu_update", ["id" => "LOCATION_ID"]);
        yield "`.replace('LOCATION_ID', locationId)
                                  : '";
        // line 381
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_lieu_create");
        yield "';

            fetch(url, {
                method: locationId ? 'PUT' : 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
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

        // Edit location function
        function editLocation(id) {
            fetch(`";
        // line 415
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_lieu_edit", ["id" => "LOCATION_ID"]);
        yield "`.replace('LOCATION_ID', id))
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const lieu = data.lieu;
                        document.getElementById('modalTitle').textContent = 'Edit Location';
                        document.getElementById('locationId').value = lieu.id;
                        document.getElementById('name').value = lieu.name;
                        document.getElementById('description').value = lieu.description;
                        document.getElementById('price').value = lieu.price;
                        document.getElementById('capacity').value = lieu.capacity;
                        document.getElementById('location').value = lieu.location;
                        document.getElementById('ville').value = lieu.ville;
                        document.getElementById('category').value = lieu.category;
                        
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

        // Delete location function
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
        // line 461
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_lieu_delete", ["id" => "LOCATION_ID"]);
        yield "`.replace('LOCATION_ID', id), {
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
        // line 474
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_lieu_index");
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
        return "admin/lieu/show.html.twig";
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
        return array (  634 => 474,  618 => 461,  569 => 415,  532 => 381,  528 => 380,  508 => 363,  504 => 362,  500 => 361,  496 => 360,  492 => 359,  488 => 358,  484 => 357,  480 => 356,  401 => 280,  392 => 274,  383 => 268,  367 => 255,  343 => 234,  322 => 216,  301 => 198,  282 => 182,  275 => 178,  268 => 174,  261 => 170,  256 => 168,  246 => 161,  240 => 158,  230 => 151,  205 => 129,  101 => 28,  97 => 27,  93 => 26,  87 => 23,  83 => 22,  79 => 21,  73 => 18,  69 => 17,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" class=\"light-style layout-navbar-fixed layout-menu-fixed\" dir=\"ltr\" data-theme=\"theme-default\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>Location Details - Admin Dashboard</title>
    
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
    
    <style>
        .location-header {
            position: relative;
            background-size: cover;
            background-position: center;
            height: 300px;
            border-radius: 0.5rem;
            overflow: hidden;
        }
        
        .location-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.7));
        }
        
        .location-header-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 2rem;
            color: white;
        }
        
        .location-stat-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .location-stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .location-description {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #6e6b7b;
        }
        
        .location-details {
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
                        <a href=\"{{ path('admin_lieu_index') }}\" class=\"menu-link\">
                            <i class=\"menu-icon tf-icons ti ti-map-pin\"></i>
                            <div>Locations</div>
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
                                <h4 class=\"fw-bold mb-2\">Location Details</h4>
                                <nav aria-label=\"breadcrumb\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\">
                                            <a href=\"{{ path('admin_lieu_index') }}\">Locations</a>
                                        </li>
                                        <li class=\"breadcrumb-item active\">Details</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class=\"d-flex gap-2\">
                                <button type=\"button\" class=\"btn btn-primary\" onclick=\"editLocation({{ lieu.id }})\">
                                    <i class=\"ti ti-edit me-1\"></i> Edit Location
                                </button>
                                <button type=\"button\" class=\"btn btn-danger\" onclick=\"deleteLocation({{ lieu.id }})\">
                                    <i class=\"ti ti-trash me-1\"></i> Delete Location
                                </button>
                            </div>
                        </div>

                        <!-- Location Header -->
                        <div class=\"location-header mb-4\" style=\"background-image: url('{{ asset('uploads/lieux/' ~ lieu.imageUrl) }}')\">
                            <div class=\"location-header-content\">
                                <h2 class=\"mb-2\">{{ lieu.name }}</h2>
                                <div class=\"d-flex gap-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"ti ti-map-pin me-2\"></i>
                                        <span>{{ lieu.location }}</span>
                                    </div>
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"ti ti-users me-2\"></i>
                                        <span>{{ lieu.capacity }} spots</span>
                                    </div>
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"ti ti-category me-2\"></i>
                                        <span>{{ lieu.category }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <!-- Location Stats -->
                            <div class=\"col-12 col-xl-4 mb-4\">
                                <div class=\"row\">
                                    <div class=\"col-12 col-sm-6 col-xl-12 mb-4\">
                                        <div class=\"card location-stat-card\">
                                            <div class=\"card-body\">
                                                <div class=\"d-flex align-items-center justify-content-between\">
                                                    <div>
                                                        <h5 class=\"mb-1\">Price</h5>
                                                        <h2 class=\"mb-0 text-primary\">\${{ lieu.price }}</h2>
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
                                        <div class=\"card location-stat-card\">
                                            <div class=\"card-body\">
                                                <div class=\"d-flex align-items-center justify-content-between\">
                                                    <div>
                                                        <h5 class=\"mb-1\">Capacity</h5>
                                                        <h2 class=\"mb-0 text-success\">{{ lieu.capacity }} spots</h2>
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
                                        <div class=\"card location-stat-card\">
                                            <div class=\"card-body\">
                                                <div class=\"d-flex align-items-center justify-content-between\">
                                                    <div>
                                                        <h5 class=\"mb-1\">City</h5>
                                                        <h2 class=\"mb-0 text-info\">{{ lieu.ville }}</h2>
                                                    </div>
                                                    <div class=\"avatar avatar-lg\">
                                                        <div class=\"avatar-initial bg-label-info rounded\">
                                                            <i class=\"ti ti-building-community fs-3\"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Location Details -->
                            <div class=\"col-12 col-xl-8\">
                                <div class=\"card mb-4\">
                                    <div class=\"card-header\">
                                        <h5 class=\"mb-0\">Location Description</h5>
                                    </div>
                                    <div class=\"card-body\">
                                        <p class=\"location-description\">{{ lieu.description }}</p>
                                    </div>
                                </div>

                                <div class=\"card\">
                                    <div class=\"card-header\">
                                        <h5 class=\"mb-0\">Location Details</h5>
                                    </div>
                                    <div class=\"card-body\">
                                        <div class=\"location-details\">
                                            <div class=\"timeline-item\">
                                                <div class=\"timeline-point\"></div>
                                                <h6 class=\"mb-1\">Address</h6>
                                                <p class=\"mb-0\">{{ lieu.location }}</p>
                                            </div>
                                            
                                            <div class=\"timeline-item\">
                                                <div class=\"timeline-point\"></div>
                                                <h6 class=\"mb-1\">City</h6>
                                                <p class=\"mb-0\">{{ lieu.ville }}</p>
                                            </div>
                                            
                                            <div class=\"timeline-item\">
                                                <div class=\"timeline-point\"></div>
                                                <h6 class=\"mb-1\">Category</h6>
                                                <p class=\"mb-0\">{{ lieu.category }}</p>
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

    <!-- Create/Edit Location Modal -->
    <div class=\"modal fade\" id=\"locationModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"modalTitle\">Edit Location</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <form id=\"locationForm\" onsubmit=\"handleLocationSubmit(event)\" enctype=\"multipart/form-data\">
                    <div class=\"modal-body\">
                        <input type=\"hidden\" id=\"locationId\" name=\"id\">
                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"name\">Name</label>
                            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" required>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"description\">Description</label>
                            <textarea class=\"form-control\" id=\"description\" name=\"description\" rows=\"3\"></textarea>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\" for=\"price\">Price</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\">\$</span>
                                    <input type=\"number\" class=\"form-control\" id=\"price\" name=\"price\" step=\"0.01\" required>
                                </div>
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\" for=\"capacity\">Capacity</label>
                                <input type=\"number\" class=\"form-control\" id=\"capacity\" name=\"capacity\" required>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\" for=\"location\">Address</label>
                                <input type=\"text\" class=\"form-control\" id=\"location\" name=\"location\" required>
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\" for=\"ville\">City</label>
                                <input type=\"text\" class=\"form-control\" id=\"ville\" name=\"ville\">
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\" for=\"category\">Category</label>
                                <input type=\"text\" class=\"form-control\" id=\"category\" name=\"category\">
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\" for=\"imageUrl\">Image</label>
                                <input type=\"file\" class=\"form-control\" id=\"imageUrl\" name=\"imageUrl\">
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-label-secondary\" data-bs-dismiss=\"modal\">Close</button>
                        <button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
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
    <script src=\"{{ asset('vendor/libs/sweetalert2/sweetalert2.js') }}\"></script>

    <script>
        \$(document).ready(function() {
            // Initialize Flatpickr if needed
            // flatpickr('.flatpickr', {
            //     dateFormat: 'Y-m-d',
            //     minDate: 'today'
            // });
        });

        // Handle form submission
        function handleLocationSubmit(event) {
            event.preventDefault();
            const form = event.target;
            const formData = new FormData(form);
            const locationId = formData.get('id');
            const url = locationId ? `{{ path('admin_lieu_update', {'id': 'LOCATION_ID'}) }}`.replace('LOCATION_ID', locationId)
                                  : '{{ path('admin_lieu_create') }}';

            fetch(url, {
                method: locationId ? 'PUT' : 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
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

        // Edit location function
        function editLocation(id) {
            fetch(`{{ path('admin_lieu_edit', {'id': 'LOCATION_ID'}) }}`.replace('LOCATION_ID', id))
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const lieu = data.lieu;
                        document.getElementById('modalTitle').textContent = 'Edit Location';
                        document.getElementById('locationId').value = lieu.id;
                        document.getElementById('name').value = lieu.name;
                        document.getElementById('description').value = lieu.description;
                        document.getElementById('price').value = lieu.price;
                        document.getElementById('capacity').value = lieu.capacity;
                        document.getElementById('location').value = lieu.location;
                        document.getElementById('ville').value = lieu.ville;
                        document.getElementById('category').value = lieu.category;
                        
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

        // Delete location function
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
                                window.location.href = '{{ path('admin_lieu_index') }}';
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
    </script>
</body>
</html>", "admin/lieu/show.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\admin\\lieu\\show.html.twig");
    }
}
