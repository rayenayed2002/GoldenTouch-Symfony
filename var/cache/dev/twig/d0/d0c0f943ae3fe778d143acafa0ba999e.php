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

/* pack/details.html.twig */
class __TwigTemplate_5250ead2f41bf939da1a2485fa2f003b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pack/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pack/details.html.twig"));

        // line 1
        yield "<!DOCTYPE html>

<html
  lang=\"en\"
  class=\"light-style layout-navbar-fixed layout-menu-fixed\"
  dir=\"ltr\"
  data-theme=\"theme-default\"
  data-assets-path=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        yield "\"
  data-template=\"vertical-menu-template\">
 <head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />

    <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/pack-cards.css"), "html", null, true);
        yield "\">
    <title>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), "html", null, true);
        yield " - Détails</title>

    <meta name=\"description\" content=\"\" />

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/favicon.ico"), "html", null, true);
        yield "\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\" />

    <!-- Icons -->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fonts/fontawesome.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fonts/tabler-icons.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fonts/flag-icons.css"), "html", null, true);
        yield "\" />

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/css/rtl/core.css"), "html", null, true);
        yield "\" class=\"template-customizer-core-css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/css/rtl/theme-default.css"), "html", null, true);
        yield "\" class=\"template-customizer-theme-css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/demo.css"), "html", null, true);
        yield "\" />

    <!-- SweetAlert2 CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/sweetalert2/sweetalert2.css"), "html", null, true);
        yield "\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/node-waves/node-waves.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/typeahead-js/typeahead.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/apex-charts/apex-charts.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/swiper/swiper.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/datatables-bs5/datatables.bootstrap5.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css"), "html", null, true);
        yield "\" />

    <!-- Page CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/css/pages/cards-advance.css"), "html", null, true);
        yield "\" />
    
    <!-- Helpers -->
    <script src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/template-customizer.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/config.js"), "html", null, true);
        yield "\"></script>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <style>
        .flatpickr-input {
            background-color: #fff !important;
            border: 1px solid #dee2e6 !important;
            padding: 0.5rem 0.75rem !important;
            border-radius: 0.375rem !important;
        }
        
        .flatpickr-calendar {
            position: absolute !important;
            z-index: 1000;
            background: #fff;
            border-radius: 0.375rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
        }
        
        .flatpickr-calendar:hover {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
        }
        
        .flatpickr-calendar .flatpickr-months {
            background: #fff !important;
        }
        
        .flatpickr-calendar .flatpickr-day {
            border-radius: 0.375rem !important;
        }
        
        .flatpickr-calendar .flatpickr-day:hover {
            background: #e9ecef !important;
        }
        
        .flatpickr-calendar .flatpickr-day.selected {
            background: #0d6efd !important;
            color: #fff !important;
        }
        
        .flatpickr-calendar .flatpickr-day.today {
            border: 1px solid #0d6efd !important;
        }
    </style>
</head>

<body>
    <!-- Layout wrapper -->
    <div class=\"layout-wrapper layout-content-navbar\">
      <div class=\"layout-container\">
        <!-- Floating Action Button -->
        <div class=\"floating-action-button\">
          <button class=\"btn btn-primary btn-lg rounded-circle shadow-lg\" onclick=\"scrollToBooking()\">
            <i class=\"ti ti-calendar-plus\"></i>
          </button>
        </div>
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
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_packs");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons ti ti-package\"></i>
                <div>Packs</div>
              </a>
            </li>

            <!-- Gestion Événements -->
            <li class=\"menu-item\">
              <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                <i class=\"menu-icon tf-icons ti ti-calendar-event\"></i>
                <div>Gestion Événements</div>
              </a>
              <ul class=\"menu-sub\">
                <li class=\"menu-item\">
                  <a href=\"#\" class=\"menu-link\">
                    <div>Ajouter Événement</div>
                  </a>
                </li>
                <li class=\"menu-item\">
                  <a href=\"#\" class=\"menu-link\">
                    <div>Liste Événements</div>
                  </a>
                </li>
              </ul>
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
                <!-- Language -->
                <li class=\"nav-item dropdown-language dropdown me-2 me-xl-0\">
                  <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                    <i class=\"fi fi-us fis rounded-circle me-1 fs-3\"></i>
                  </a>
                </li>
                <!--/ Language -->

                <!-- User -->
                <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                  <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                    <div class=\"avatar avatar-online\">
                      <img src=\"";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatars/1.png"), "html", null, true);
        yield "\" alt class=\"h-auto rounded-circle\" />
                    </div>
                  </a>
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
              <div class=\"row\">
                <!-- Pack Details -->
                <div class=\"col-12\">
                    <div class=\"card pack-details-card shadow-lg\">
                        <!-- Pack Header with Image -->
                        <div class=\"pack-engagement position-absolute top-0 end-0 m-3 z-index-1\">
                            <button class=\"btn btn-icon btn-label-secondary me-1\" onclick=\"sharePack()\">
                                <i class=\"ti ti-share\"></i>
                            </button>
                            <button class=\"btn btn-icon btn-label-danger\" onclick=\"toggleFavorite(this)\">
                                <i class=\"ti ti-heart\"></i>
                            </button>
                        </div>
                        <div class=\"pack-header position-relative\">
                            <img src=\"";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . ((CoreExtension::getAttribute($this->env, $this->source, ($context["pack"] ?? null), "photo", [], "any", true, true, false, 230)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 230, $this->source); })()), "photo", [], "any", false, false, false, 230), "default.jpg")) : ("default.jpg")))), "html", null, true);
        yield "\" 
                                 class=\"pack-cover-image\" 
                                 alt=\"";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 232, $this->source); })()), "nom", [], "any", false, false, false, 232), "html", null, true);
        yield "\">
                            <div class=\"pack-header-overlay\">
                                <div class=\"container\">
                                    <nav aria-label=\"breadcrumb\">
                                        <ol class=\"breadcrumb\">
                                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 237
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_packs");
        yield "\">Packs</a></li>
                                            <li class=\"breadcrumb-item active\">";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 238, $this->source); })()), "nom", [], "any", false, false, false, 238), "html", null, true);
        yield "</li>
                                        </ol>
                                    </nav>
                                    <h1 class=\"pack-title display-4 text-white mb-0\">";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 241, $this->source); })()), "nom", [], "any", false, false, false, 241), "html", null, true);
        yield "</h1>
                                    <div class=\"pack-meta mt-3\">
                                        <span class=\"badge bg-primary me-2\">";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 243, $this->source); })()), "categorie", [], "any", false, false, false, 243)), "html", null, true);
        yield "</span>
                                        ";
        // line 244
        if (CoreExtension::inFilter((isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 244, $this->source); })()), ((array_key_exists("trendingPacks", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["trendingPacks"]) || array_key_exists("trendingPacks", $context) ? $context["trendingPacks"] : (function () { throw new RuntimeError('Variable "trendingPacks" does not exist.', 244, $this->source); })()), [])) : ([])))) {
            // line 245
            yield "                                            <span class=\"badge bg-warning\">
                                                <i class=\"ti ti-trending-up me-1\"></i> TRENDING
                                            </span>
                                        ";
        }
        // line 249
        yield "                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"card-body\">
                            ";
        // line 255
        if ((array_key_exists("avis", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 255, $this->source); })())) > 0))) {
            // line 256
            yield "                                <div class=\"pack-rating-overview mb-4\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-md-3 text-center\">
                                            ";
            // line 259
            $context["total_rating"] = 0;
            // line 260
            yield "                                            ";
            $context["review_count"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 260, $this->source); })()));
            // line 261
            yield "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 261, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 262
                yield "                                                ";
                $context["total_rating"] = ((isset($context["total_rating"]) || array_key_exists("total_rating", $context) ? $context["total_rating"] : (function () { throw new RuntimeError('Variable "total_rating" does not exist.', 262, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["review"], "note", [], "any", false, false, false, 262));
                // line 263
                yield "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['review'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 264
            yield "                                            ";
            $context["average_rating"] = ((((isset($context["review_count"]) || array_key_exists("review_count", $context) ? $context["review_count"] : (function () { throw new RuntimeError('Variable "review_count" does not exist.', 264, $this->source); })()) > 0)) ? (Twig\Extension\CoreExtension::round(((isset($context["total_rating"]) || array_key_exists("total_rating", $context) ? $context["total_rating"] : (function () { throw new RuntimeError('Variable "total_rating" does not exist.', 264, $this->source); })()) / (isset($context["review_count"]) || array_key_exists("review_count", $context) ? $context["review_count"] : (function () { throw new RuntimeError('Variable "review_count" does not exist.', 264, $this->source); })())), 1)) : (0));
            // line 265
            yield "                                            <h1 class=\"display-3 mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["average_rating"]) || array_key_exists("average_rating", $context) ? $context["average_rating"] : (function () { throw new RuntimeError('Variable "average_rating" does not exist.', 265, $this->source); })()), "html", null, true);
            yield "</h1>
                                            <div class=\"text-warning mb-2\">
                                                ";
            // line 267
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 268
                yield "                                                    ";
                if (($context["i"] <= (isset($context["average_rating"]) || array_key_exists("average_rating", $context) ? $context["average_rating"] : (function () { throw new RuntimeError('Variable "average_rating" does not exist.', 268, $this->source); })()))) {
                    // line 269
                    yield "                                                        <i class=\"ti ti-star-filled\"></i>
                                                    ";
                } elseif ((                // line 270
$context["i"] <= ((isset($context["average_rating"]) || array_key_exists("average_rating", $context) ? $context["average_rating"] : (function () { throw new RuntimeError('Variable "average_rating" does not exist.', 270, $this->source); })()) + 0.5))) {
                    // line 271
                    yield "                                                        <i class=\"ti ti-star-half-filled\"></i>
                                                    ";
                } else {
                    // line 273
                    yield "                                                        <i class=\"ti ti-star\"></i>
                                                    ";
                }
                // line 275
                yield "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 276
            yield "                                            </div>
                                            <p class=\"text-muted mb-0\">Based on ";
            // line 277
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["review_count"]) || array_key_exists("review_count", $context) ? $context["review_count"] : (function () { throw new RuntimeError('Variable "review_count" does not exist.', 277, $this->source); })()), "html", null, true);
            yield " reviews</p>
                                        </div>
                                        <div class=\"col-md-9\">
                                            <div class=\"rating-progress\">
                                                ";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(5, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
                // line 282
                yield "                                                    ";
                $context["rating_count"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 282, $this->source); })()), function ($__a__) use ($context, $macros) { $context["a"] = $__a__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 282, $this->source); })()), "note", [], "any", false, false, false, 282) == $context["rating"]); }));
                // line 283
                yield "                                                    ";
                $context["rating_percentage"] = ((((isset($context["review_count"]) || array_key_exists("review_count", $context) ? $context["review_count"] : (function () { throw new RuntimeError('Variable "review_count" does not exist.', 283, $this->source); })()) > 0)) ? (Twig\Extension\CoreExtension::round((((isset($context["rating_count"]) || array_key_exists("rating_count", $context) ? $context["rating_count"] : (function () { throw new RuntimeError('Variable "rating_count" does not exist.', 283, $this->source); })()) / (isset($context["review_count"]) || array_key_exists("review_count", $context) ? $context["review_count"] : (function () { throw new RuntimeError('Variable "review_count" does not exist.', 283, $this->source); })())) * 100))) : (0));
                // line 284
                yield "                                                    <div class=\"d-flex align-items-center mb-2\">
                                                        <div class=\"text-warning me-2\"><i class=\"ti ti-star-filled\"></i> ";
                // line 285
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["rating"], "html", null, true);
                yield "</div>
                                                        <div class=\"progress flex-grow-1\" style=\"height: 8px;\">
                                                            <div class=\"progress-bar bg-warning\" role=\"progressbar\" 
                                                                 style=\"width: ";
                // line 288
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rating_percentage"]) || array_key_exists("rating_percentage", $context) ? $context["rating_percentage"] : (function () { throw new RuntimeError('Variable "rating_percentage" does not exist.', 288, $this->source); })()), "html", null, true);
                yield "%\" 
                                                                 aria-valuenow=\"";
                // line 289
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rating_percentage"]) || array_key_exists("rating_percentage", $context) ? $context["rating_percentage"] : (function () { throw new RuntimeError('Variable "rating_percentage" does not exist.', 289, $this->source); })()), "html", null, true);
                yield "\" 
                                                                 aria-valuemin=\"0\" 
                                                                 aria-valuemax=\"100\"></div>
                                                        </div>
                                                        <span class=\"ms-2\">";
                // line 293
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rating_percentage"]) || array_key_exists("rating_percentage", $context) ? $context["rating_percentage"] : (function () { throw new RuntimeError('Variable "rating_percentage" does not exist.', 293, $this->source); })()), "html", null, true);
                yield "%</span>
                                                    </div>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['rating'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 296
            yield "                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"reviews-list\">
                                    ";
            // line 302
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 302, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 303
                yield "                                        <div class=\"review-item ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["review"], "note", [], "any", false, false, false, 303) >= 4)) {
                    yield "review-positive";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["review"], "note", [], "any", false, false, false, 303) <= 2)) {
                    yield "review-negative";
                }
                yield "\">
                                            <div class=\"review-header\">
                                                <div class=\"review-avatar\">
                                                    ";
                // line 306
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["review"], "utilisateur", [], "any", true, true, false, 306) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["review"], "utilisateur", [], "any", false, true, false, 306), "avatar", [], "any", true, true, false, 306))) {
                    // line 307
                    yield "                                                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["review"], "utilisateur", [], "any", false, false, false, 307), "avatar", [], "any", false, false, false, 307), "html", null, true);
                    yield "\" alt=\"User avatar\">
                                                    ";
                } else {
                    // line 309
                    yield "                                                        <span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["review"], "utilisateur", [], "any", false, false, false, 309), "prenom", [], "any", false, false, false, 309)), "html", null, true);
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["review"], "utilisateur", [], "any", false, false, false, 309), "nom", [], "any", false, false, false, 309)), "html", null, true);
                    yield "</span>
                                                    ";
                }
                // line 311
                yield "                                                </div>
                                                <div class=\"review-meta\">
                                                    <div class=\"review-user\">";
                // line 313
                if (CoreExtension::getAttribute($this->env, $this->source, $context["review"], "utilisateur", [], "any", true, true, false, 313)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["review"], "utilisateur", [], "any", false, false, false, 313), "prenom", [], "any", false, false, false, 313), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["review"], "utilisateur", [], "any", false, false, false, 313), "nom", [], "any", false, false, false, 313), "html", null, true);
                } else {
                    yield "Anonymous";
                }
                yield "</div>
                                                    <div class=\"review-date\">";
                // line 314
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "dateCreation", [], "any", false, false, false, 314), "d/m/Y H:i"), "html", null, true);
                yield "</div>
                                                </div>
                                            </div>
                                            
                                            <div class=\"review-rating\">
                                                ";
                // line 319
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 320
                    yield "                                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["review"], "note", [], "any", true, true, false, 320) && ($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["review"], "note", [], "any", false, false, false, 320)))) {
                        // line 321
                        yield "                                                        <i class=\"ti ti-star-filled\"></i>
                                                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 322
$context["review"], "note", [], "any", true, true, false, 322) && ($context["i"] <= (CoreExtension::getAttribute($this->env, $this->source, $context["review"], "note", [], "any", false, false, false, 322) + 0.5)))) {
                        // line 323
                        yield "                                                        <i class=\"ti ti-star-half-filled\"></i>
                                                    ";
                    } else {
                        // line 325
                        yield "                                                        <i class=\"ti ti-star\"></i>
                                                    ";
                    }
                    // line 327
                    yield "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 328
                yield "                                            </div>

                                            <div class=\"review-content\">
                                                ";
                // line 331
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["review"], "commentaire", [], "any", true, true, false, 331) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "commentaire", [], "any", false, false, false, 331)))) {
                    // line 332
                    yield "                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "commentaire", [], "any", false, false, false, 332), "html", null, true);
                    yield "
                                                ";
                } else {
                    // line 334
                    yield "                                                    <span class=\"text-muted\">No comment provided</span>
                                                ";
                }
                // line 336
                yield "                                            </div>

                                            <div class=\"review-helpful\">
                                                <span class=\"review-badge\">";
                // line 339
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "note", [], "any", false, false, false, 339), "html", null, true);
                yield "/5</span>
                                                <button class=\"btn btn-link p-0\" onclick=\"toggleHelpful(this)\">
                                                    <i class=\"ti ti-thumb-up me-1\"></i> Helpful
                                                </button>
                                            </div>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['review'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 346
            yield "                                </div>
                            ";
        } else {
            // line 348
            yield "                                <div class=\"text-center py-4\">
                                    <i class=\"ti ti-message-circle-off fs-3 mb-2 text-muted\"></i>
                                    <p class=\"mb-0\">Aucun avis pour ce pack pour le moment.</p>
                                    <p class=\"text-muted\">Soyez le premier à donner votre avis !</p>
                                </div>
                            ";
        }
        // line 354
        yield "                            <div class=\"row\">
                                <!-- Left Column: Details -->
                                <div class=\"col-lg-8\">
                                    <!-- Quick Info -->
                                    <div class=\"quick-info-cards mb-4\">
                                        <div class=\"row g-3\">
                                            <div class=\"col-sm-6 col-md-3\">
                                                <div class=\"card bg-label-primary\">
                                                    <div class=\"card-body\">
                                                        <div class=\"d-flex align-items-center mb-2\">
                                                            <div class=\"avatar\">
                                                                <div class=\"avatar-initial bg-primary rounded\">
                                                                    <i class=\"ti ti-currency-dollar\"></i>
                                                                </div>
                                                            </div>
                                                            <span class=\"ms-2\">Prix</span>
                                                        </div>
                                                        <h4 class=\"mb-0\">";
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 371, $this->source); })()), "prix", [], "any", false, false, false, 371), 2, ".", ","), "html", null, true);
        yield " TND</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-md-3\">
                                                <div class=\"card bg-label-success\">
                                                    <div class=\"card-body\">
                                                        <div class=\"d-flex align-items-center mb-2\">
                                                            <div class=\"avatar\">
                                                                <div class=\"avatar-initial bg-success rounded\">
                                                                    <i class=\"ti ti-users\"></i>
                                                                </div>
                                                            </div>
                                                            <span class=\"ms-2\">Capacité</span>
                                                        </div>
                                                        <h4 class=\"mb-0\">";
        // line 386
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 386, $this->source); })()), "capacite", [], "any", false, false, false, 386), "html", null, true);
        yield " personnes</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-md-3\">
                                                <div class=\"card bg-label-info\">
                                                    <div class=\"card-body\">
                                                        <div class=\"d-flex align-items-center mb-2\">
                                                            <div class=\"avatar\">
                                                                <div class=\"avatar-initial bg-info rounded\">
                                                                    <i class=\"ti ti-clock\"></i>
                                                                </div>
                                                            </div>
                                                            <span class=\"ms-2\">Durée</span>
                                                        </div>
                                                        <h4 class=\"mb-0\">";
        // line 401
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 401, $this->source); })()), "duree", [], "any", false, false, false, 401), "html", null, true);
        yield " heures</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-md-3\">
                                                <div class=\"card bg-label-warning\">
                                                    <div class=\"card-body\">
                                                        <div class=\"d-flex align-items-center mb-2\">
                                                            <div class=\"avatar\">
                                                                <div class=\"avatar-initial bg-warning rounded\">
                                                                    <i class=\"ti ti-calendar\"></i>
                                                                </div>
                                                            </div>
                                                            <span class=\"ms-2\">Date fin</span>
                                                        </div>
                                                        <h4 class=\"mb-0\">";
        // line 416
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 416, $this->source); })()), "endDate", [], "any", false, false, false, 416), "d/m/Y"), "html", null, true);
        yield "</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class=\"card mb-4\">
                                        <div class=\"card-header\">
                                            <h5 class=\"mb-0\">Description</h5>
                                        </div>
                                        <div class=\"card-body\">
                                            <p class=\"pack-description\">";
        // line 429
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 429, $this->source); })()), "description", [], "any", false, false, false, 429), "html", null, true));
        yield "</p>
                                        </div>
                                    </div>

                                    <!-- Features -->
                                    <div class=\"card mb-4\">
                                        <div class=\"card-header\">
                                            <h5 class=\"mb-0\">Ce qui est inclus</h5>
                                        </div>
                                        <div class=\"card-body\">
                                            <div class=\"row g-3\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"d-flex align-items-center\">
                                                        <i class=\"ti ti-check-circle text-success me-2\"></i>
                                                        <span>Organisation complète</span>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"d-flex align-items-center\">
                                                        <i class=\"ti ti-check-circle text-success me-2\"></i>
                                                        <span>Personnel qualifié</span>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"d-flex align-items-center\">
                                                        <i class=\"ti ti-check-circle text-success me-2\"></i>
                                                        <span>Équipement professionnel</span>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"d-flex align-items-center\">
                                                        <i class=\"ti ti-check-circle text-success me-2\"></i>
                                                        <span>Support 24/7</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Right Column: Booking and Similar Packs -->
                                <div class=\"col-lg-4\">
                                    <!-- Booking Card -->
                                    <div class=\"card booking-card mb-4 shadow\" id=\"bookingSection\">
                                        <div class=\"ribbon ribbon-top-right\"><span>Réserver</span></div>
                                        <div class=\"card-header\">
                                            <h5 class=\"mb-0\">Réserver ce pack</h5>
                                        </div>
                                        <div class=\"card-body\">
                                            <form id=\"bookingForm\" class=\"row g-3\">
                                                <div class=\"col-12\">
                                                    <label class=\"form-label\">Date de l'événement</label>
                                                    <div class=\"position-relative\">
                                                        <input type=\"text\" 
                                                               name=\"dateEvent\" 
                                                               class=\"form-control flatpickr-input\" 
                                                               required
                                                               data-input
                                                               placeholder=\"Choisissez une date\">
                                                        <div class=\"flatpickr-calendar\"></div>
                                                    </div>
                                                </div>
                                                <div class=\"col-12\">
                                                    <label class=\"form-label\">Nombre de personnes</label>
                                                    <input type=\"number\" name=\"nbPersonnes\" class=\"form-control\" min=\"1\" max=\"";
        // line 493
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 493, $this->source); })()), "capacite", [], "any", false, false, false, 493), "html", null, true);
        yield "\" required>
                                                </div>
                                                <div class=\"col-12\">
                                                    <label class=\"form-label\">Notes spéciales</label>
                                                    <textarea name=\"notes\" class=\"form-control\" rows=\"3\"></textarea>
                                                </div>
                                                <div class=\"col-12\">
                                                    <button type=\"submit\" class=\"btn btn-primary w-100 booking-btn\">
                                                        <i class=\"ti ti-calendar-plus me-1\"></i> Réserver maintenant
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- Similar Packs -->
                                    ";
        // line 509
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["similarPacks"]) || array_key_exists("similarPacks", $context) ? $context["similarPacks"] : (function () { throw new RuntimeError('Variable "similarPacks" does not exist.', 509, $this->source); })())) > 0)) {
            // line 510
            yield "                                    <div class=\"card\">
                                        <div class=\"card-header\">
                                            <h5 class=\"mb-0\">Packs similaires</h5>
                                        </div>
                                        <div class=\"card-body\">
                                            <div class=\"similar-packs\">
                                                ";
            // line 516
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["similarPacks"]) || array_key_exists("similarPacks", $context) ? $context["similarPacks"] : (function () { throw new RuntimeError('Variable "similarPacks" does not exist.', 516, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["similarPack"]) {
                // line 517
                yield "                                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["similarPack"], "id", [], "any", false, false, false, 517) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 517, $this->source); })()), "id", [], "any", false, false, false, 517))) {
                    // line 518
                    yield "                                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["similarPack"], "id", [], "any", false, false, false, 518)]), "html", null, true);
                    yield "\" class=\"similar-pack-item\">
                                                            <div class=\"d-flex align-items-center mb-3\">
                                                                <div class=\"similar-pack-image me-3\">
                                                                    <img src=\"";
                    // line 521
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . ((CoreExtension::getAttribute($this->env, $this->source, $context["similarPack"], "photo", [], "any", true, true, false, 521)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["similarPack"], "photo", [], "any", false, false, false, 521), "default.jpg")) : ("default.jpg")))), "html", null, true);
                    yield "\" 
                                                                         alt=\"";
                    // line 522
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["similarPack"], "nom", [], "any", false, false, false, 522), "html", null, true);
                    yield "\">
                                                                </div>
                                                                <div>
                                                                    <h6 class=\"mb-0\">";
                    // line 525
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["similarPack"], "nom", [], "any", false, false, false, 525), "html", null, true);
                    yield "</h6>
                                                                    <span class=\"text-primary\">";
                    // line 526
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["similarPack"], "prix", [], "any", false, false, false, 526), 2, ".", ","), "html", null, true);
                    yield " TND</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    ";
                }
                // line 531
                yield "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['similarPack'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 532
            yield "                                            </div>
                                        </div>
                                    </div>
                                    ";
        }
        // line 536
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
          </div>
          <!-- / Content wrapper -->
        </div>
        <!-- / Layout container -->
      </div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Review Modal -->
    <div class=\"modal fade\" id=\"reviewModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Écrire un avis</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <form id=\"reviewForm\">
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Note</label>
                            <div class=\"rating-stars mb-2\">
                                <i class=\"ti ti-star rating-star\" data-value=\"1\"></i>
                                <i class=\"ti ti-star rating-star\" data-value=\"2\"></i>
                                <i class=\"ti ti-star rating-star\" data-value=\"3\"></i>
                                <i class=\"ti ti-star rating-star\" data-value=\"4\"></i>
                                <i class=\"ti ti-star rating-star\" data-value=\"5\"></i>
                                <input type=\"hidden\" name=\"rating\" id=\"ratingInput\" value=\"0\">
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Votre avis</label>
                            <textarea class=\"form-control\" rows=\"4\" placeholder=\"Partagez votre expérience avec ce pack...\"></textarea>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-label-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"button\" class=\"btn btn-primary\" onclick=\"submitReview()\">Soumettre l'avis</button>
                </div>
            </div>
        </div>
    </div>
    <style>
    .floating-action-button {
        position: fixed;
        bottom: 2rem;
        right: 2rem;
        z-index: 1030;
        transition: transform 0.3s;
    }
    .floating-action-button:hover {
        transform: scale(1.1);
    }
    .pack-engagement {
        opacity: 0.9;
        transition: opacity 0.3s;
    }
    .pack-engagement:hover {
        opacity: 1;
    }
    .ribbon {
        width: 150px;
        height: 150px;
        overflow: hidden;
        position: absolute;
    }
    .ribbon-top-right {
        top: -10px;
        right: -10px;
    }
    .ribbon-top-right::before,
    .ribbon-top-right::after {
        border-top-color: transparent;
        border-right-color: transparent;
    }
    .ribbon-top-right span {
        position: absolute;
        top: 30px;
        right: -25px;
        transform: rotate(45deg);
        width: 200px;
        background: #7367f0;
        color: white;
        text-align: center;
        padding: 5px;
        font-weight: bold;
    }
    .quick-info-cards .card {
        transition: transform 0.3s;
    }
    .quick-info-cards .card:hover {
        transform: translateY(-5px);
    }
    .similar-pack-item {
        transition: all 0.3s;
        border-radius: 0.5rem;
        padding: 0.5rem;
    }
    .similar-pack-item:hover {
        background: rgba(115, 103, 240, 0.1);
        text-decoration: none;
    }

    .review-item {
        background: #fff;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .review-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
    }

    .review-header {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .review-avatar {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        margin-right: 12px;
        background: #f8f9fa;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        font-size: 1.2rem;
    }

    .review-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
    }

    .review-meta {
        flex: 1;
    }

    .review-user {
        font-weight: 600;
        color: #212529;
        margin-bottom: 4px;
    }

    .review-date {
        font-size: 0.875rem;
        color: #6c757d;
    }

    .review-rating {
        display: flex;
        align-items: center;
        margin-bottom: 12px;
    }

    .review-rating .ti-star-filled {
        color: #ffc107;
        transition: color 0.3s ease;
    }

    .review-rating .ti-star-half-filled {
        color: #ffc107;
    }

    .review-rating .ti-star {
        color: #e9ecef;
        transition: color 0.3s ease;
    }

    .review-rating .ti-star-filled:hover ~ .ti-star,
    .review-rating .ti-star-half-filled:hover ~ .ti-star {
        color: #ffc107;
    }

    .review-content {
        font-size: 0.95rem;
        line-height: 1.6;
        color: #495057;
    }

    .review-helpful {
        display: flex;
        align-items: center;
        font-size: 0.875rem;
        color: #6c757d;
        margin-top: 12px;
    }

    .review-helpful button {
        background: none;
        border: none;
        color: #6c757d;
        cursor: pointer;
        padding: 0;
        margin-left: 8px;
    }

    .review-helpful button:hover {
        color: #0d6efd;
    }

    .review-badge {
        background: #e9ecef;
        color: #495057;
        padding: 4px 8px;
        border-radius: 12px;
        font-size: 0.75rem;
        margin-left: 8px;
    }

    .review-positive {
        border-left: 4px solid #28a745;
    }

    .review-negative {
        border-left: 4px solid #dc3545;
    }

    @media (max-width: 768px) {
        .review-item {
            padding: 15px;
            margin-bottom: 15px;
        }

        .review-avatar {
            width: 40px;
            height: 40px;
            margin-right: 8px;
        }

        .review-user {
            font-size: 0.95rem;
        }
    }
</style>

    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Flatpickr
            flatpickr('.flatpickr-input', {
                locale: 'fr',
                dateFormat: 'Y-m-d',
                minDate: 'today',
                theme: 'light',
                allowInput: true,
                monthSelectorType: 'static',
                static: true,
                position: 'below',
                prevArrow: '<svg class=\"icon\" viewBox=\"0 0 24 24\"><path d=\"M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z\"></path></svg>',
                nextArrow: '<svg class=\"icon\" viewBox=\"0 0 24 24\"><path d=\"M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z\"></path></svg>',
                onReady: function(selectedDates, dateStr, instance) {
                    // Add custom styling to the calendar
                    instance.calendarContainer.classList.add('shadow-lg', 'border', 'border-gray-200', 'rounded-lg');
                    instance.calendarContainer.querySelector('.flatpickr-months').classList.add('bg-white');
                    instance.calendarContainer.querySelector('.flatpickr-current-month').classList.add('text-lg', 'font-semibold');
                }
            });

            // Handle booking form submission
            const bookingForm = document.getElementById('bookingForm');
            if (bookingForm) {
                bookingForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Get form data
                    const formData = new FormData(bookingForm);
                    const date = formData.get('dateEvent');
                    const nbPersonnes = formData.get('nbPersonnes');
                    const notes = formData.get('notes');
                    
                    // Prepare data for API call
                    const data = {
                        packId: ";
        // line 827
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 827, $this->source); })()), "id", [], "any", false, false, false, 827), "html", null, true);
        yield ",
                        utilisateurId: 25, // Temporarily hardcoded user ID
                        prix: ";
        // line 829
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 829, $this->source); })()), "prix", [], "any", false, false, false, 829), "html", null, true);
        yield ",
                        statut: 'EN_ATTENTE',
                        dateDemande: new Date().toISOString(),
                        dateEvent: date,
                        nbPersonnes: nbPersonnes,
                        notes: notes
                    };

                    console.log('Form data:', data);

                    // Send request to create demande pack
                   
                });
            }

            // Initialize rating stars
            const stars = document.querySelectorAll('.rating-star');
            const ratingInput = document.getElementById('ratingInput');
            
            stars.forEach(star => {
                star.addEventListener('click', function() {
                    const value = parseInt(this.getAttribute('data-value'));
                    ratingInput.value = value;
                    
                    // Update stars UI
                    stars.forEach((s, index) => {
                        if (index < value) {
                            s.classList.add('active', 'ti-star-filled');
                            s.classList.remove('ti-star');
                        } else {
                            s.classList.remove('active', 'ti-star-filled');
                            s.classList.add('ti-star');
                        }
                    });
                });
            });
        });
    </script>

    <!-- Core JS -->
    <script src=\"";
        // line 869
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 870
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 871
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 872
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 873
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/node-waves/node-waves.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 874
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/hammer/hammer.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 875
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/i18n/i18n.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 876
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/typeahead-js/typeahead.js"), "html", null, true);
        yield "\"></script>

    <!-- SweetAlert2 JS -->
    <script src=\"";
        // line 879
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/sweetalert2/sweetalert2.js"), "html", null, true);
        yield "\"></script>

    <script src=\"";
        // line 881
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>

    <!-- Custom JS -->
    <script>
        function scrollToBooking() {
            document.getElementById('bookingSection').scrollIntoView({ behavior: 'smooth' });
        }

        function sharePack() {
            if (navigator.share) {
                navigator.share({
                    title: '";
        // line 892
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 892, $this->source); })()), "nom", [], "any", false, false, false, 892), "html", null, true);
        yield "',
                    text: '";
        // line 893
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 893, $this->source); })()), "description", [], "any", false, false, false, 893)), "html", null, true);
        yield "',
                    url: window.location.href
                });
            }
        }

        function toggleFavorite(btn) {
            const icon = btn.querySelector('i');
            if (icon.classList.contains('ti-heart')) {
                icon.classList.remove('ti-heart');
                icon.classList.add('ti-heart-filled');
                btn.classList.remove('btn-label-danger');
                btn.classList.add('btn-danger');
            } else {
                icon.classList.remove('ti-heart-filled');
                icon.classList.add('ti-heart');
                btn.classList.remove('btn-danger');
                btn.classList.add('btn-label-danger');
            }
        }

        function openReviewModal() {
            const modal = new bootstrap.Modal(document.getElementById('reviewModal'));
            modal.show();
            
            // Initialize rating stars
            const stars = document.querySelectorAll('.rating-star');
            const ratingInput = document.getElementById('ratingInput');
            
            stars.forEach(star => {
                star.addEventListener('click', function() {
                    const value = parseInt(this.getAttribute('data-value'));
                    ratingInput.value = value;
                    
                    // Update stars UI
                    stars.forEach((s, index) => {
                        if (index < value) {
                            s.classList.add('active', 'ti-star-filled');
                            s.classList.remove('ti-star');
                        } else {
                            s.classList.remove('active', 'ti-star-filled');
                            s.classList.add('ti-star');
                        }
                    });
                });
            });
        }

        function submitReview() {
            const form = document.getElementById('reviewForm');
            const comment = form.querySelector('textarea').value.trim();
            const rating = form.querySelector('#ratingInput').value;
            
            // Validate form
            if (!comment) {
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                });
                return false;
                    text: 'Veuillez écrire un commentaire avant de soumettre votre avis.',
                    confirmButtonText: 'OK',
                    customClass: {
                        confirmButton: 'btn btn-primary'
                    },
                    buttonsStyling: false
                });
                return;
            }
            
            if (rating === '0') {
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                    text: 'Veuillez sélectionner une note avant de soumettre votre avis.',
                    confirmButtonText: 'OK',
                    customClass: {
                        confirmButton: 'btn btn-primary'
                    },
                    buttonsStyling: false
                });
                return;
            }
            
            const submitBtn = document.querySelector('#reviewModal .btn-primary');
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class=\"ti ti-check me-1\"></i>Avis soumis';
            
            setTimeout(() => {
                const modal = bootstrap.Modal.getInstance(document.getElementById('reviewModal'));
                modal.hide();
                
                // Show success message
                Swal.fire({
                    icon: 'success',
                    title: 'Merci!',
                    text: 'Votre avis a été soumis avec succès.',
                    confirmButtonText: 'OK',
                    customClass: {
                        confirmButton: 'btn btn-primary'
                    },
                    buttonsStyling: false
                });
            }, 1500);
        }

        // Rating stars interaction
        document.querySelectorAll('.rating-star').forEach(star => {
            star.addEventListener('mouseover', function() {
                const rating = this.dataset.rating;
                document.querySelectorAll('.rating-star').forEach(s => {
                    if (s.dataset.rating <= rating) {
                        s.classList.add('ti-star-filled');
                        s.classList.remove('ti-star');
                    }
                });
            });

            star.addEventListener('mouseout', function() {
                document.querySelectorAll('.rating-star').forEach(s => {
                    s.classList.add('ti-star');
                    s.classList.remove('ti-star-filled');
                });
            });

            star.addEventListener('click', function() {
                const rating = this.dataset.rating;
                document.querySelectorAll('.rating-star').forEach(s => {
                    if (s.dataset.rating <= rating) {
                        s.classList.add('ti-star-filled');
                        s.classList.remove('ti-star');
                    } else {
                        s.classList.add('ti-star');
                        s.classList.remove('ti-star-filled');
                    }
                });
            });
        });

        // Add smooth scroll behavior
        document.querySelectorAll('a[href^=\"#\"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>

    <!-- Vendors JS -->
    <script src=\"";
        // line 1044
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/apex-charts/apexcharts.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1045
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/swiper/swiper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1046
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/datatables-bs5/datatables-bootstrap5.js"), "html", null, true);
        yield "\"></script>

    <!-- Main JS -->
    <script src=\"";
        // line 1049
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/main.js"), "html", null, true);
        yield "\"></script>

    <!-- Page JS -->
    <script src=\"";
        // line 1052
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/dashboards-analytics.js"), "html", null, true);
        yield "\"></script>

    <script>
        function toggleHelpful(button) {
            const icon = button.querySelector('i');
            if (icon.classList.contains('ti-thumb-up')) {
                icon.classList.remove('ti-thumb-up');
                icon.classList.add('ti-thumb-up-filled');
                button.style.color = '#0d6efd';
            } else {
                icon.classList.remove('ti-thumb-up-filled');
                icon.classList.add('ti-thumb-up');
                button.style.color = '#6c757d';
            }
        }

        // Add smooth scroll behavior for reviews
        document.addEventListener('DOMContentLoaded', function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in');
                    }
                });
            }, {
                threshold: 0.1
            });

            document.querySelectorAll('.review-item').forEach(review => {
                review.classList.add('opacity-0');
                observer.observe(review);
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
        return "pack/details.html.twig";
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
        return array (  1450 => 1052,  1444 => 1049,  1438 => 1046,  1434 => 1045,  1430 => 1044,  1276 => 893,  1272 => 892,  1258 => 881,  1253 => 879,  1247 => 876,  1243 => 875,  1239 => 874,  1235 => 873,  1231 => 872,  1227 => 871,  1223 => 870,  1219 => 869,  1176 => 829,  1171 => 827,  878 => 536,  872 => 532,  866 => 531,  858 => 526,  854 => 525,  848 => 522,  844 => 521,  837 => 518,  834 => 517,  830 => 516,  822 => 510,  820 => 509,  801 => 493,  734 => 429,  718 => 416,  700 => 401,  682 => 386,  664 => 371,  645 => 354,  637 => 348,  633 => 346,  620 => 339,  615 => 336,  611 => 334,  605 => 332,  603 => 331,  598 => 328,  592 => 327,  588 => 325,  584 => 323,  582 => 322,  579 => 321,  576 => 320,  572 => 319,  564 => 314,  554 => 313,  550 => 311,  543 => 309,  537 => 307,  535 => 306,  524 => 303,  520 => 302,  512 => 296,  503 => 293,  496 => 289,  492 => 288,  486 => 285,  483 => 284,  480 => 283,  477 => 282,  473 => 281,  466 => 277,  463 => 276,  457 => 275,  453 => 273,  449 => 271,  447 => 270,  444 => 269,  441 => 268,  437 => 267,  431 => 265,  428 => 264,  422 => 263,  419 => 262,  414 => 261,  411 => 260,  409 => 259,  404 => 256,  402 => 255,  394 => 249,  388 => 245,  386 => 244,  382 => 243,  377 => 241,  371 => 238,  367 => 237,  359 => 232,  354 => 230,  323 => 202,  256 => 138,  171 => 56,  167 => 55,  163 => 54,  157 => 51,  151 => 48,  147 => 47,  143 => 46,  139 => 45,  135 => 44,  131 => 43,  127 => 42,  123 => 41,  117 => 38,  111 => 35,  107 => 34,  103 => 33,  97 => 30,  93 => 29,  89 => 28,  78 => 20,  70 => 15,  66 => 14,  57 => 8,  48 => 1,);
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

    <link rel=\"stylesheet\" href=\"{{ asset('css/pack-cards.css') }}\">
    <title>{{ pack.nom }} - Détails</title>

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

    <!-- SweetAlert2 CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/sweetalert2/sweetalert2.css') }}\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/node-waves/node-waves.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/typeahead-js/typeahead.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/apex-charts/apex-charts.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/swiper/swiper.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}\" />

    <!-- Page CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/css/pages/cards-advance.css') }}\" />
    
    <!-- Helpers -->
    <script src=\"{{ asset('vendor/js/helpers.js') }}\"></script>
    <script src=\"{{ asset('vendor/js/template-customizer.js') }}\"></script>
    <script src=\"{{ asset('js/config.js') }}\"></script>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <style>
        .flatpickr-input {
            background-color: #fff !important;
            border: 1px solid #dee2e6 !important;
            padding: 0.5rem 0.75rem !important;
            border-radius: 0.375rem !important;
        }
        
        .flatpickr-calendar {
            position: absolute !important;
            z-index: 1000;
            background: #fff;
            border-radius: 0.375rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
        }
        
        .flatpickr-calendar:hover {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
        }
        
        .flatpickr-calendar .flatpickr-months {
            background: #fff !important;
        }
        
        .flatpickr-calendar .flatpickr-day {
            border-radius: 0.375rem !important;
        }
        
        .flatpickr-calendar .flatpickr-day:hover {
            background: #e9ecef !important;
        }
        
        .flatpickr-calendar .flatpickr-day.selected {
            background: #0d6efd !important;
            color: #fff !important;
        }
        
        .flatpickr-calendar .flatpickr-day.today {
            border: 1px solid #0d6efd !important;
        }
    </style>
</head>

<body>
    <!-- Layout wrapper -->
    <div class=\"layout-wrapper layout-content-navbar\">
      <div class=\"layout-container\">
        <!-- Floating Action Button -->
        <div class=\"floating-action-button\">
          <button class=\"btn btn-primary btn-lg rounded-circle shadow-lg\" onclick=\"scrollToBooking()\">
            <i class=\"ti ti-calendar-plus\"></i>
          </button>
        </div>
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
              <a href=\"{{ path('app_packs') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons ti ti-package\"></i>
                <div>Packs</div>
              </a>
            </li>

            <!-- Gestion Événements -->
            <li class=\"menu-item\">
              <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                <i class=\"menu-icon tf-icons ti ti-calendar-event\"></i>
                <div>Gestion Événements</div>
              </a>
              <ul class=\"menu-sub\">
                <li class=\"menu-item\">
                  <a href=\"#\" class=\"menu-link\">
                    <div>Ajouter Événement</div>
                  </a>
                </li>
                <li class=\"menu-item\">
                  <a href=\"#\" class=\"menu-link\">
                    <div>Liste Événements</div>
                  </a>
                </li>
              </ul>
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
                <!-- Language -->
                <li class=\"nav-item dropdown-language dropdown me-2 me-xl-0\">
                  <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                    <i class=\"fi fi-us fis rounded-circle me-1 fs-3\"></i>
                  </a>
                </li>
                <!--/ Language -->

                <!-- User -->
                <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                  <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                    <div class=\"avatar avatar-online\">
                      <img src=\"{{ asset('img/avatars/1.png') }}\" alt class=\"h-auto rounded-circle\" />
                    </div>
                  </a>
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
              <div class=\"row\">
                <!-- Pack Details -->
                <div class=\"col-12\">
                    <div class=\"card pack-details-card shadow-lg\">
                        <!-- Pack Header with Image -->
                        <div class=\"pack-engagement position-absolute top-0 end-0 m-3 z-index-1\">
                            <button class=\"btn btn-icon btn-label-secondary me-1\" onclick=\"sharePack()\">
                                <i class=\"ti ti-share\"></i>
                            </button>
                            <button class=\"btn btn-icon btn-label-danger\" onclick=\"toggleFavorite(this)\">
                                <i class=\"ti ti-heart\"></i>
                            </button>
                        </div>
                        <div class=\"pack-header position-relative\">
                            <img src=\"{{ asset('uploads/packs/' ~ pack.photo|default('default.jpg')) }}\" 
                                 class=\"pack-cover-image\" 
                                 alt=\"{{ pack.nom }}\">
                            <div class=\"pack-header-overlay\">
                                <div class=\"container\">
                                    <nav aria-label=\"breadcrumb\">
                                        <ol class=\"breadcrumb\">
                                            <li class=\"breadcrumb-item\"><a href=\"{{ path('app_packs') }}\">Packs</a></li>
                                            <li class=\"breadcrumb-item active\">{{ pack.nom }}</li>
                                        </ol>
                                    </nav>
                                    <h1 class=\"pack-title display-4 text-white mb-0\">{{ pack.nom }}</h1>
                                    <div class=\"pack-meta mt-3\">
                                        <span class=\"badge bg-primary me-2\">{{ pack.categorie|upper }}</span>
                                        {% if pack in trendingPacks|default([]) %}
                                            <span class=\"badge bg-warning\">
                                                <i class=\"ti ti-trending-up me-1\"></i> TRENDING
                                            </span>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"card-body\">
                            {% if avis is defined and avis|length > 0 %}
                                <div class=\"pack-rating-overview mb-4\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-md-3 text-center\">
                                            {% set total_rating = 0 %}
                                            {% set review_count = avis|length %}
                                            {% for review in avis %}
                                                {% set total_rating = total_rating + review.note %}
                                            {% endfor %}
                                            {% set average_rating = review_count > 0 ? (total_rating / review_count)|round(1) : 0 %}
                                            <h1 class=\"display-3 mb-0\">{{ average_rating }}</h1>
                                            <div class=\"text-warning mb-2\">
                                                {% for i in 1..5 %}
                                                    {% if i <= average_rating %}
                                                        <i class=\"ti ti-star-filled\"></i>
                                                    {% elseif i <= average_rating + 0.5 %}
                                                        <i class=\"ti ti-star-half-filled\"></i>
                                                    {% else %}
                                                        <i class=\"ti ti-star\"></i>
                                                    {% endif %}
                                                {% endfor %}
                                            </div>
                                            <p class=\"text-muted mb-0\">Based on {{ review_count }} reviews</p>
                                        </div>
                                        <div class=\"col-md-9\">
                                            <div class=\"rating-progress\">
                                                {% for rating in 5..1 %}
                                                    {% set rating_count = avis|filter(a => a.note == rating)|length %}
                                                    {% set rating_percentage = review_count > 0 ? (rating_count / review_count * 100)|round : 0 %}
                                                    <div class=\"d-flex align-items-center mb-2\">
                                                        <div class=\"text-warning me-2\"><i class=\"ti ti-star-filled\"></i> {{ rating }}</div>
                                                        <div class=\"progress flex-grow-1\" style=\"height: 8px;\">
                                                            <div class=\"progress-bar bg-warning\" role=\"progressbar\" 
                                                                 style=\"width: {{ rating_percentage }}%\" 
                                                                 aria-valuenow=\"{{ rating_percentage }}\" 
                                                                 aria-valuemin=\"0\" 
                                                                 aria-valuemax=\"100\"></div>
                                                        </div>
                                                        <span class=\"ms-2\">{{ rating_percentage }}%</span>
                                                    </div>
                                                {% endfor %}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"reviews-list\">
                                    {% for review in avis %}
                                        <div class=\"review-item {% if review.note >= 4 %}review-positive{% elseif review.note <= 2 %}review-negative{% endif %}\">
                                            <div class=\"review-header\">
                                                <div class=\"review-avatar\">
                                                    {% if review.utilisateur is defined and review.utilisateur.avatar is defined %}
                                                        <img src=\"{{ review.utilisateur.avatar }}\" alt=\"User avatar\">
                                                    {% else %}
                                                        <span>{{ review.utilisateur.prenom|first }}{{ review.utilisateur.nom|first }}</span>
                                                    {% endif %}
                                                </div>
                                                <div class=\"review-meta\">
                                                    <div class=\"review-user\">{% if review.utilisateur is defined %}{{ review.utilisateur.prenom }} {{ review.utilisateur.nom }}{% else %}Anonymous{% endif %}</div>
                                                    <div class=\"review-date\">{{ review.dateCreation|date('d/m/Y H:i') }}</div>
                                                </div>
                                            </div>
                                            
                                            <div class=\"review-rating\">
                                                {% for i in 1..5 %}
                                                    {% if review.note is defined and i <= review.note %}
                                                        <i class=\"ti ti-star-filled\"></i>
                                                    {% elseif review.note is defined and i <= review.note + 0.5 %}
                                                        <i class=\"ti ti-star-half-filled\"></i>
                                                    {% else %}
                                                        <i class=\"ti ti-star\"></i>
                                                    {% endif %}
                                                {% endfor %}
                                            </div>

                                            <div class=\"review-content\">
                                                {% if review.commentaire is defined and review.commentaire is not empty %}
                                                    {{ review.commentaire }}
                                                {% else %}
                                                    <span class=\"text-muted\">No comment provided</span>
                                                {% endif %}
                                            </div>

                                            <div class=\"review-helpful\">
                                                <span class=\"review-badge\">{{ review.note }}/5</span>
                                                <button class=\"btn btn-link p-0\" onclick=\"toggleHelpful(this)\">
                                                    <i class=\"ti ti-thumb-up me-1\"></i> Helpful
                                                </button>
                                            </div>
                                        </div>
                                    {% endfor %}
                                </div>
                            {% else %}
                                <div class=\"text-center py-4\">
                                    <i class=\"ti ti-message-circle-off fs-3 mb-2 text-muted\"></i>
                                    <p class=\"mb-0\">Aucun avis pour ce pack pour le moment.</p>
                                    <p class=\"text-muted\">Soyez le premier à donner votre avis !</p>
                                </div>
                            {% endif %}
                            <div class=\"row\">
                                <!-- Left Column: Details -->
                                <div class=\"col-lg-8\">
                                    <!-- Quick Info -->
                                    <div class=\"quick-info-cards mb-4\">
                                        <div class=\"row g-3\">
                                            <div class=\"col-sm-6 col-md-3\">
                                                <div class=\"card bg-label-primary\">
                                                    <div class=\"card-body\">
                                                        <div class=\"d-flex align-items-center mb-2\">
                                                            <div class=\"avatar\">
                                                                <div class=\"avatar-initial bg-primary rounded\">
                                                                    <i class=\"ti ti-currency-dollar\"></i>
                                                                </div>
                                                            </div>
                                                            <span class=\"ms-2\">Prix</span>
                                                        </div>
                                                        <h4 class=\"mb-0\">{{ pack.prix|number_format(2, '.', ',') }} TND</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-md-3\">
                                                <div class=\"card bg-label-success\">
                                                    <div class=\"card-body\">
                                                        <div class=\"d-flex align-items-center mb-2\">
                                                            <div class=\"avatar\">
                                                                <div class=\"avatar-initial bg-success rounded\">
                                                                    <i class=\"ti ti-users\"></i>
                                                                </div>
                                                            </div>
                                                            <span class=\"ms-2\">Capacité</span>
                                                        </div>
                                                        <h4 class=\"mb-0\">{{ pack.capacite }} personnes</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-md-3\">
                                                <div class=\"card bg-label-info\">
                                                    <div class=\"card-body\">
                                                        <div class=\"d-flex align-items-center mb-2\">
                                                            <div class=\"avatar\">
                                                                <div class=\"avatar-initial bg-info rounded\">
                                                                    <i class=\"ti ti-clock\"></i>
                                                                </div>
                                                            </div>
                                                            <span class=\"ms-2\">Durée</span>
                                                        </div>
                                                        <h4 class=\"mb-0\">{{ pack.duree }} heures</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-md-3\">
                                                <div class=\"card bg-label-warning\">
                                                    <div class=\"card-body\">
                                                        <div class=\"d-flex align-items-center mb-2\">
                                                            <div class=\"avatar\">
                                                                <div class=\"avatar-initial bg-warning rounded\">
                                                                    <i class=\"ti ti-calendar\"></i>
                                                                </div>
                                                            </div>
                                                            <span class=\"ms-2\">Date fin</span>
                                                        </div>
                                                        <h4 class=\"mb-0\">{{ pack.endDate|date('d/m/Y') }}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class=\"card mb-4\">
                                        <div class=\"card-header\">
                                            <h5 class=\"mb-0\">Description</h5>
                                        </div>
                                        <div class=\"card-body\">
                                            <p class=\"pack-description\">{{ pack.description|nl2br }}</p>
                                        </div>
                                    </div>

                                    <!-- Features -->
                                    <div class=\"card mb-4\">
                                        <div class=\"card-header\">
                                            <h5 class=\"mb-0\">Ce qui est inclus</h5>
                                        </div>
                                        <div class=\"card-body\">
                                            <div class=\"row g-3\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"d-flex align-items-center\">
                                                        <i class=\"ti ti-check-circle text-success me-2\"></i>
                                                        <span>Organisation complète</span>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"d-flex align-items-center\">
                                                        <i class=\"ti ti-check-circle text-success me-2\"></i>
                                                        <span>Personnel qualifié</span>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"d-flex align-items-center\">
                                                        <i class=\"ti ti-check-circle text-success me-2\"></i>
                                                        <span>Équipement professionnel</span>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"d-flex align-items-center\">
                                                        <i class=\"ti ti-check-circle text-success me-2\"></i>
                                                        <span>Support 24/7</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Right Column: Booking and Similar Packs -->
                                <div class=\"col-lg-4\">
                                    <!-- Booking Card -->
                                    <div class=\"card booking-card mb-4 shadow\" id=\"bookingSection\">
                                        <div class=\"ribbon ribbon-top-right\"><span>Réserver</span></div>
                                        <div class=\"card-header\">
                                            <h5 class=\"mb-0\">Réserver ce pack</h5>
                                        </div>
                                        <div class=\"card-body\">
                                            <form id=\"bookingForm\" class=\"row g-3\">
                                                <div class=\"col-12\">
                                                    <label class=\"form-label\">Date de l'événement</label>
                                                    <div class=\"position-relative\">
                                                        <input type=\"text\" 
                                                               name=\"dateEvent\" 
                                                               class=\"form-control flatpickr-input\" 
                                                               required
                                                               data-input
                                                               placeholder=\"Choisissez une date\">
                                                        <div class=\"flatpickr-calendar\"></div>
                                                    </div>
                                                </div>
                                                <div class=\"col-12\">
                                                    <label class=\"form-label\">Nombre de personnes</label>
                                                    <input type=\"number\" name=\"nbPersonnes\" class=\"form-control\" min=\"1\" max=\"{{ pack.capacite }}\" required>
                                                </div>
                                                <div class=\"col-12\">
                                                    <label class=\"form-label\">Notes spéciales</label>
                                                    <textarea name=\"notes\" class=\"form-control\" rows=\"3\"></textarea>
                                                </div>
                                                <div class=\"col-12\">
                                                    <button type=\"submit\" class=\"btn btn-primary w-100 booking-btn\">
                                                        <i class=\"ti ti-calendar-plus me-1\"></i> Réserver maintenant
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- Similar Packs -->
                                    {% if similarPacks|length > 0 %}
                                    <div class=\"card\">
                                        <div class=\"card-header\">
                                            <h5 class=\"mb-0\">Packs similaires</h5>
                                        </div>
                                        <div class=\"card-body\">
                                            <div class=\"similar-packs\">
                                                {% for similarPack in similarPacks %}
                                                    {% if similarPack.id != pack.id %}
                                                        <a href=\"{{ path('app_pack_details', {id: similarPack.id}) }}\" class=\"similar-pack-item\">
                                                            <div class=\"d-flex align-items-center mb-3\">
                                                                <div class=\"similar-pack-image me-3\">
                                                                    <img src=\"{{ asset('uploads/packs/' ~ similarPack.photo|default('default.jpg')) }}\" 
                                                                         alt=\"{{ similarPack.nom }}\">
                                                                </div>
                                                                <div>
                                                                    <h6 class=\"mb-0\">{{ similarPack.nom }}</h6>
                                                                    <span class=\"text-primary\">{{ similarPack.prix|number_format(2, '.', ',') }} TND</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    {% endif %}
                                                {% endfor %}
                                            </div>
                                        </div>
                                    </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
          </div>
          <!-- / Content wrapper -->
        </div>
        <!-- / Layout container -->
      </div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Review Modal -->
    <div class=\"modal fade\" id=\"reviewModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Écrire un avis</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <form id=\"reviewForm\">
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Note</label>
                            <div class=\"rating-stars mb-2\">
                                <i class=\"ti ti-star rating-star\" data-value=\"1\"></i>
                                <i class=\"ti ti-star rating-star\" data-value=\"2\"></i>
                                <i class=\"ti ti-star rating-star\" data-value=\"3\"></i>
                                <i class=\"ti ti-star rating-star\" data-value=\"4\"></i>
                                <i class=\"ti ti-star rating-star\" data-value=\"5\"></i>
                                <input type=\"hidden\" name=\"rating\" id=\"ratingInput\" value=\"0\">
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Votre avis</label>
                            <textarea class=\"form-control\" rows=\"4\" placeholder=\"Partagez votre expérience avec ce pack...\"></textarea>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-label-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"button\" class=\"btn btn-primary\" onclick=\"submitReview()\">Soumettre l'avis</button>
                </div>
            </div>
        </div>
    </div>
    <style>
    .floating-action-button {
        position: fixed;
        bottom: 2rem;
        right: 2rem;
        z-index: 1030;
        transition: transform 0.3s;
    }
    .floating-action-button:hover {
        transform: scale(1.1);
    }
    .pack-engagement {
        opacity: 0.9;
        transition: opacity 0.3s;
    }
    .pack-engagement:hover {
        opacity: 1;
    }
    .ribbon {
        width: 150px;
        height: 150px;
        overflow: hidden;
        position: absolute;
    }
    .ribbon-top-right {
        top: -10px;
        right: -10px;
    }
    .ribbon-top-right::before,
    .ribbon-top-right::after {
        border-top-color: transparent;
        border-right-color: transparent;
    }
    .ribbon-top-right span {
        position: absolute;
        top: 30px;
        right: -25px;
        transform: rotate(45deg);
        width: 200px;
        background: #7367f0;
        color: white;
        text-align: center;
        padding: 5px;
        font-weight: bold;
    }
    .quick-info-cards .card {
        transition: transform 0.3s;
    }
    .quick-info-cards .card:hover {
        transform: translateY(-5px);
    }
    .similar-pack-item {
        transition: all 0.3s;
        border-radius: 0.5rem;
        padding: 0.5rem;
    }
    .similar-pack-item:hover {
        background: rgba(115, 103, 240, 0.1);
        text-decoration: none;
    }

    .review-item {
        background: #fff;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .review-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
    }

    .review-header {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .review-avatar {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        margin-right: 12px;
        background: #f8f9fa;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        font-size: 1.2rem;
    }

    .review-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
    }

    .review-meta {
        flex: 1;
    }

    .review-user {
        font-weight: 600;
        color: #212529;
        margin-bottom: 4px;
    }

    .review-date {
        font-size: 0.875rem;
        color: #6c757d;
    }

    .review-rating {
        display: flex;
        align-items: center;
        margin-bottom: 12px;
    }

    .review-rating .ti-star-filled {
        color: #ffc107;
        transition: color 0.3s ease;
    }

    .review-rating .ti-star-half-filled {
        color: #ffc107;
    }

    .review-rating .ti-star {
        color: #e9ecef;
        transition: color 0.3s ease;
    }

    .review-rating .ti-star-filled:hover ~ .ti-star,
    .review-rating .ti-star-half-filled:hover ~ .ti-star {
        color: #ffc107;
    }

    .review-content {
        font-size: 0.95rem;
        line-height: 1.6;
        color: #495057;
    }

    .review-helpful {
        display: flex;
        align-items: center;
        font-size: 0.875rem;
        color: #6c757d;
        margin-top: 12px;
    }

    .review-helpful button {
        background: none;
        border: none;
        color: #6c757d;
        cursor: pointer;
        padding: 0;
        margin-left: 8px;
    }

    .review-helpful button:hover {
        color: #0d6efd;
    }

    .review-badge {
        background: #e9ecef;
        color: #495057;
        padding: 4px 8px;
        border-radius: 12px;
        font-size: 0.75rem;
        margin-left: 8px;
    }

    .review-positive {
        border-left: 4px solid #28a745;
    }

    .review-negative {
        border-left: 4px solid #dc3545;
    }

    @media (max-width: 768px) {
        .review-item {
            padding: 15px;
            margin-bottom: 15px;
        }

        .review-avatar {
            width: 40px;
            height: 40px;
            margin-right: 8px;
        }

        .review-user {
            font-size: 0.95rem;
        }
    }
</style>

    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Flatpickr
            flatpickr('.flatpickr-input', {
                locale: 'fr',
                dateFormat: 'Y-m-d',
                minDate: 'today',
                theme: 'light',
                allowInput: true,
                monthSelectorType: 'static',
                static: true,
                position: 'below',
                prevArrow: '<svg class=\"icon\" viewBox=\"0 0 24 24\"><path d=\"M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z\"></path></svg>',
                nextArrow: '<svg class=\"icon\" viewBox=\"0 0 24 24\"><path d=\"M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z\"></path></svg>',
                onReady: function(selectedDates, dateStr, instance) {
                    // Add custom styling to the calendar
                    instance.calendarContainer.classList.add('shadow-lg', 'border', 'border-gray-200', 'rounded-lg');
                    instance.calendarContainer.querySelector('.flatpickr-months').classList.add('bg-white');
                    instance.calendarContainer.querySelector('.flatpickr-current-month').classList.add('text-lg', 'font-semibold');
                }
            });

            // Handle booking form submission
            const bookingForm = document.getElementById('bookingForm');
            if (bookingForm) {
                bookingForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Get form data
                    const formData = new FormData(bookingForm);
                    const date = formData.get('dateEvent');
                    const nbPersonnes = formData.get('nbPersonnes');
                    const notes = formData.get('notes');
                    
                    // Prepare data for API call
                    const data = {
                        packId: {{ pack.id }},
                        utilisateurId: 25, // Temporarily hardcoded user ID
                        prix: {{ pack.prix }},
                        statut: 'EN_ATTENTE',
                        dateDemande: new Date().toISOString(),
                        dateEvent: date,
                        nbPersonnes: nbPersonnes,
                        notes: notes
                    };

                    console.log('Form data:', data);

                    // Send request to create demande pack
                   
                });
            }

            // Initialize rating stars
            const stars = document.querySelectorAll('.rating-star');
            const ratingInput = document.getElementById('ratingInput');
            
            stars.forEach(star => {
                star.addEventListener('click', function() {
                    const value = parseInt(this.getAttribute('data-value'));
                    ratingInput.value = value;
                    
                    // Update stars UI
                    stars.forEach((s, index) => {
                        if (index < value) {
                            s.classList.add('active', 'ti-star-filled');
                            s.classList.remove('ti-star');
                        } else {
                            s.classList.remove('active', 'ti-star-filled');
                            s.classList.add('ti-star');
                        }
                    });
                });
            });
        });
    </script>

    <!-- Core JS -->
    <script src=\"{{ asset('/vendor/libs/jquery/jquery.js') }}\"></script>
    <script src=\"{{ asset('/vendor/libs/popper/popper.js') }}\"></script>
    <script src=\"{{ asset('/vendor/js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>
    <script src=\"{{ asset('/vendor/libs/node-waves/node-waves.js') }}\"></script>
    <script src=\"{{ asset('/vendor/libs/hammer/hammer.js') }}\"></script>
    <script src=\"{{ asset('/vendor/libs/i18n/i18n.js') }}\"></script>
    <script src=\"{{ asset('/vendor/libs/typeahead-js/typeahead.js') }}\"></script>

    <!-- SweetAlert2 JS -->
    <script src=\"{{ asset('vendor/libs/sweetalert2/sweetalert2.js') }}\"></script>

    <script src=\"{{ asset('/vendor/js/menu.js') }}\"></script>

    <!-- Custom JS -->
    <script>
        function scrollToBooking() {
            document.getElementById('bookingSection').scrollIntoView({ behavior: 'smooth' });
        }

        function sharePack() {
            if (navigator.share) {
                navigator.share({
                    title: '{{ pack.nom }}',
                    text: '{{ pack.description|striptags }}',
                    url: window.location.href
                });
            }
        }

        function toggleFavorite(btn) {
            const icon = btn.querySelector('i');
            if (icon.classList.contains('ti-heart')) {
                icon.classList.remove('ti-heart');
                icon.classList.add('ti-heart-filled');
                btn.classList.remove('btn-label-danger');
                btn.classList.add('btn-danger');
            } else {
                icon.classList.remove('ti-heart-filled');
                icon.classList.add('ti-heart');
                btn.classList.remove('btn-danger');
                btn.classList.add('btn-label-danger');
            }
        }

        function openReviewModal() {
            const modal = new bootstrap.Modal(document.getElementById('reviewModal'));
            modal.show();
            
            // Initialize rating stars
            const stars = document.querySelectorAll('.rating-star');
            const ratingInput = document.getElementById('ratingInput');
            
            stars.forEach(star => {
                star.addEventListener('click', function() {
                    const value = parseInt(this.getAttribute('data-value'));
                    ratingInput.value = value;
                    
                    // Update stars UI
                    stars.forEach((s, index) => {
                        if (index < value) {
                            s.classList.add('active', 'ti-star-filled');
                            s.classList.remove('ti-star');
                        } else {
                            s.classList.remove('active', 'ti-star-filled');
                            s.classList.add('ti-star');
                        }
                    });
                });
            });
        }

        function submitReview() {
            const form = document.getElementById('reviewForm');
            const comment = form.querySelector('textarea').value.trim();
            const rating = form.querySelector('#ratingInput').value;
            
            // Validate form
            if (!comment) {
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                });
                return false;
                    text: 'Veuillez écrire un commentaire avant de soumettre votre avis.',
                    confirmButtonText: 'OK',
                    customClass: {
                        confirmButton: 'btn btn-primary'
                    },
                    buttonsStyling: false
                });
                return;
            }
            
            if (rating === '0') {
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                    text: 'Veuillez sélectionner une note avant de soumettre votre avis.',
                    confirmButtonText: 'OK',
                    customClass: {
                        confirmButton: 'btn btn-primary'
                    },
                    buttonsStyling: false
                });
                return;
            }
            
            const submitBtn = document.querySelector('#reviewModal .btn-primary');
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class=\"ti ti-check me-1\"></i>Avis soumis';
            
            setTimeout(() => {
                const modal = bootstrap.Modal.getInstance(document.getElementById('reviewModal'));
                modal.hide();
                
                // Show success message
                Swal.fire({
                    icon: 'success',
                    title: 'Merci!',
                    text: 'Votre avis a été soumis avec succès.',
                    confirmButtonText: 'OK',
                    customClass: {
                        confirmButton: 'btn btn-primary'
                    },
                    buttonsStyling: false
                });
            }, 1500);
        }

        // Rating stars interaction
        document.querySelectorAll('.rating-star').forEach(star => {
            star.addEventListener('mouseover', function() {
                const rating = this.dataset.rating;
                document.querySelectorAll('.rating-star').forEach(s => {
                    if (s.dataset.rating <= rating) {
                        s.classList.add('ti-star-filled');
                        s.classList.remove('ti-star');
                    }
                });
            });

            star.addEventListener('mouseout', function() {
                document.querySelectorAll('.rating-star').forEach(s => {
                    s.classList.add('ti-star');
                    s.classList.remove('ti-star-filled');
                });
            });

            star.addEventListener('click', function() {
                const rating = this.dataset.rating;
                document.querySelectorAll('.rating-star').forEach(s => {
                    if (s.dataset.rating <= rating) {
                        s.classList.add('ti-star-filled');
                        s.classList.remove('ti-star');
                    } else {
                        s.classList.add('ti-star');
                        s.classList.remove('ti-star-filled');
                    }
                });
            });
        });

        // Add smooth scroll behavior
        document.querySelectorAll('a[href^=\"#\"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>

    <!-- Vendors JS -->
    <script src=\"{{ asset('/vendor/libs/apex-charts/apexcharts.js') }}\"></script>
    <script src=\"{{ asset('/vendor/libs/swiper/swiper.js') }}\"></script>
    <script src=\"{{ asset('/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}\"></script>

    <!-- Main JS -->
    <script src=\"{{ asset('/js/main.js') }}\"></script>

    <!-- Page JS -->
    <script src=\"{{ asset('/js/dashboards-analytics.js') }}\"></script>

    <script>
        function toggleHelpful(button) {
            const icon = button.querySelector('i');
            if (icon.classList.contains('ti-thumb-up')) {
                icon.classList.remove('ti-thumb-up');
                icon.classList.add('ti-thumb-up-filled');
                button.style.color = '#0d6efd';
            } else {
                icon.classList.remove('ti-thumb-up-filled');
                icon.classList.add('ti-thumb-up');
                button.style.color = '#6c757d';
            }
        }

        // Add smooth scroll behavior for reviews
        document.addEventListener('DOMContentLoaded', function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in');
                    }
                });
            }, {
                threshold: 0.1
            });

            document.querySelectorAll('.review-item').forEach(review => {
                review.classList.add('opacity-0');
                observer.observe(review);
            });
        });
    </script>
</body>
</html>
", "pack/details.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\pack\\details.html.twig");
    }
}
