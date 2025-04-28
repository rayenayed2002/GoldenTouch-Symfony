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
class __TwigTemplate_a42c330cb1a8d55616b0fe7e17b2a370 extends Template
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
                                        <li class=\"breadcrumb-item\">
                                            <a href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pack_index");
        yield "\">Packs</a>
                                        </li>
                                        <li class=\"breadcrumb-item active\">Details</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class=\"d-flex gap-2\">
                                <button type=\"button\" class=\"btn btn-primary\" onclick=\"editPack(";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 158, $this->source); })()), "id", [], "any", false, false, false, 158), "html", null, true);
        yield ")\">
                                    <i class=\"ti ti-edit me-1\"></i> Edit Pack
                                </button>
                                <button type=\"button\" class=\"btn btn-danger\" onclick=\"deletePack(";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 161, $this->source); })()), "id", [], "any", false, false, false, 161), "html", null, true);
        yield ")\">
                                    <i class=\"ti ti-trash me-1\"></i> Delete Pack
                                </button>
                            </div>
                        </div>

                        <!-- Pack Header -->
                        <div class=\"pack-header mb-4\" style=\"background-image: url('";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 168, $this->source); })()), "event", [], "any", false, false, false, 168), "photo", [], "any", false, false, false, 168))), "html", null, true);
        yield "')\">
                            <div class=\"pack-header-content\">
                                <h2 class=\"mb-2\">";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 170, $this->source); })()), "event", [], "any", false, false, false, 170), "nom", [], "any", false, false, false, 170), "html", null, true);
        yield "</h2>
                                <div class=\"d-flex gap-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"ti ti-calendar me-2\"></i>
                                        <span>";
        // line 174
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 174, $this->source); })()), "endDate", [], "any", false, false, false, 174)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 174, $this->source); })()), "endDate", [], "any", false, false, false, 174), "M d, Y"), "html", null, true)) : ("No End Date"));
        yield "</span>
                                    </div>
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"ti ti-users me-2\"></i>
                                        <span>";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 178, $this->source); })()), "capacite", [], "any", false, false, false, 178), "html", null, true);
        yield " spots</span>
                                    </div>
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"ti ti-clock me-2\"></i>
                                        <span>";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 182, $this->source); })()), "duree", [], "any", false, false, false, 182), "html", null, true);
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
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 198, $this->source); })()), "prix", [], "any", false, false, false, 198), "html", null, true);
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
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 216, $this->source); })()), "capacite", [], "any", false, false, false, 216), "html", null, true);
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
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 234, $this->source); })()), "duree", [], "any", false, false, false, 234), "html", null, true);
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
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 255, $this->source); })()), "description", [], "any", false, false, false, 255), "html", null, true);
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
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 268, $this->source); })()), "event", [], "any", false, false, false, 268), "nom", [], "any", false, false, false, 268), "html", null, true);
        yield "</p>
                                            </div>
                                            
                                            <div class=\"timeline-item\">
                                                <div class=\"timeline-point\"></div>
                                                <h6 class=\"mb-1\">Category</h6>
                                                <p class=\"mb-0\">";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 274, $this->source); })()), "event", [], "any", false, false, false, 274), "categorie", [], "any", false, false, false, 274), "html", null, true);
        yield "</p>
                                            </div>
                                            
                                            <div class=\"timeline-item\">
                                                <div class=\"timeline-point\"></div>
                                                <h6 class=\"mb-1\">End Date</h6>
                                                <p class=\"mb-0\">";
        // line 280
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 280, $this->source); })()), "endDate", [], "any", false, false, false, 280)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 280, $this->source); })()), "endDate", [], "any", false, false, false, 280), "F d, Y"), "html", null, true)) : ("No End Date Set"));
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

    <!-- Create/Edit Pack Modal -->
    <div class=\"modal fade\" id=\"packModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"modalTitle\">Edit Pack</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <form id=\"packForm\" onsubmit=\"handlePackSubmit(event)\">
                    <div class=\"modal-body\">
                        <input type=\"hidden\" id=\"packId\" name=\"id\">
                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"event\">Event</label>
                            <select class=\"form-select\" id=\"event\" name=\"event\" required>
                                ";
        // line 307
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 307, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 308
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 308), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 308), "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 310
        yield "                            </select>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"description\">Description</label>
                            <textarea class=\"form-control\" id=\"description\" name=\"description\" rows=\"3\" required></textarea>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\" for=\"prix\">Price</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\">\$</span>
                                    <input type=\"number\" class=\"form-control\" id=\"prix\" name=\"prix\" step=\"0.01\" required>
                                </div>
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\" for=\"capacite\">Capacity</label>
                                <input type=\"number\" class=\"form-control\" id=\"capacite\" name=\"capacite\" required>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\" for=\"duree\">Duration (hours)</label>
                                <input type=\"number\" class=\"form-control\" id=\"duree\" name=\"duree\" required>
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\" for=\"endDate\">End Date</label>
                                <input type=\"text\" class=\"form-control flatpickr\" id=\"endDate\" name=\"endDate\">
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
        // line 350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/node-waves/node-waves.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 355
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/hammer/hammer.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 356
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/menu.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 357
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/sweetalert2/sweetalert2.js"), "html", null, true);
        yield "\"></script>

    <script>
        \$(document).ready(function() {
            // Initialize Flatpickr
            flatpickr('.flatpickr', {
                dateFormat: 'Y-m-d',
                minDate: 'today'
            });
        });

        // Handle form submission
        function handlePackSubmit(event) {
            event.preventDefault();
            const form = event.target;
            const formData = new FormData(form);
            const packId = formData.get('id');
            const url = packId ? `";
        // line 374
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pack_update", ["id" => "PACK_ID"]);
        yield "`.replace('PACK_ID', packId)
                              : '";
        // line 375
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pack_create");
        yield "';

            // Convert FormData to JSON
            const data = {};
            formData.forEach((value, key) => {
                data[key] = value;
            });

            fetch(url, {
                method: packId ? 'PUT' : 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data)
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

        // Edit pack function
        function editPack(id) {
            fetch(`";
        // line 418
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pack_edit", ["id" => "PACK_ID"]);
        yield "`.replace('PACK_ID', id))
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const pack = data.pack;
                        document.getElementById('modalTitle').textContent = 'Edit Pack';
                        document.getElementById('packId').value = pack.id;
                        document.getElementById('event').value = pack.event.id;
                        document.getElementById('description').value = pack.description;
                        document.getElementById('prix').value = pack.prix;
                        document.getElementById('capacite').value = pack.capacite;
                        document.getElementById('duree').value = pack.duree;
                        document.getElementById('endDate').value = pack.endDate;
                        
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
        // line 463
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
        // line 476
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
        return array (  650 => 476,  634 => 463,  586 => 418,  540 => 375,  536 => 374,  516 => 357,  512 => 356,  508 => 355,  504 => 354,  500 => 353,  496 => 352,  492 => 351,  488 => 350,  446 => 310,  435 => 308,  431 => 307,  401 => 280,  392 => 274,  383 => 268,  367 => 255,  343 => 234,  322 => 216,  301 => 198,  282 => 182,  275 => 178,  268 => 174,  261 => 170,  256 => 168,  246 => 161,  240 => 158,  230 => 151,  205 => 129,  101 => 28,  97 => 27,  93 => 26,  87 => 23,  83 => 22,  79 => 21,  73 => 18,  69 => 17,  58 => 9,  48 => 1,);
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
                                        <li class=\"breadcrumb-item\">
                                            <a href=\"{{ path('admin_pack_index') }}\">Packs</a>
                                        </li>
                                        <li class=\"breadcrumb-item active\">Details</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class=\"d-flex gap-2\">
                                <button type=\"button\" class=\"btn btn-primary\" onclick=\"editPack({{ pack.id }})\">
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
                                                <p class=\"mb-0\">{{ pack.event.categorie }}</p>
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

    <!-- Create/Edit Pack Modal -->
    <div class=\"modal fade\" id=\"packModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"modalTitle\">Edit Pack</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <form id=\"packForm\" onsubmit=\"handlePackSubmit(event)\">
                    <div class=\"modal-body\">
                        <input type=\"hidden\" id=\"packId\" name=\"id\">
                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"event\">Event</label>
                            <select class=\"form-select\" id=\"event\" name=\"event\" required>
                                {% for event in events %}
                                    <option value=\"{{ event.id }}\">{{ event.nom }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"description\">Description</label>
                            <textarea class=\"form-control\" id=\"description\" name=\"description\" rows=\"3\" required></textarea>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\" for=\"prix\">Price</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\">\$</span>
                                    <input type=\"number\" class=\"form-control\" id=\"prix\" name=\"prix\" step=\"0.01\" required>
                                </div>
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\" for=\"capacite\">Capacity</label>
                                <input type=\"number\" class=\"form-control\" id=\"capacite\" name=\"capacite\" required>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\" for=\"duree\">Duration (hours)</label>
                                <input type=\"number\" class=\"form-control\" id=\"duree\" name=\"duree\" required>
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\" for=\"endDate\">End Date</label>
                                <input type=\"text\" class=\"form-control flatpickr\" id=\"endDate\" name=\"endDate\">
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
            // Initialize Flatpickr
            flatpickr('.flatpickr', {
                dateFormat: 'Y-m-d',
                minDate: 'today'
            });
        });

        // Handle form submission
        function handlePackSubmit(event) {
            event.preventDefault();
            const form = event.target;
            const formData = new FormData(form);
            const packId = formData.get('id');
            const url = packId ? `{{ path('admin_pack_update', {'id': 'PACK_ID'}) }}`.replace('PACK_ID', packId)
                              : '{{ path('admin_pack_create') }}';

            // Convert FormData to JSON
            const data = {};
            formData.forEach((value, key) => {
                data[key] = value;
            });

            fetch(url, {
                method: packId ? 'PUT' : 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data)
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

        // Edit pack function
        function editPack(id) {
            fetch(`{{ path('admin_pack_edit', {'id': 'PACK_ID'}) }}`.replace('PACK_ID', id))
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const pack = data.pack;
                        document.getElementById('modalTitle').textContent = 'Edit Pack';
                        document.getElementById('packId').value = pack.id;
                        document.getElementById('event').value = pack.event.id;
                        document.getElementById('description').value = pack.description;
                        document.getElementById('prix').value = pack.prix;
                        document.getElementById('capacite').value = pack.capacite;
                        document.getElementById('duree').value = pack.duree;
                        document.getElementById('endDate').value = pack.endDate;
                        
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
    </script>
</body>
</html>
", "admin/pack/show.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\admin\\pack\\show.html.twig");
    }
}
