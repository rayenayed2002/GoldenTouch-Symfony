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
class __TwigTemplate_291b144befe063e5d1772c079a9bc6a5 extends Template
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

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/node-waves/node-waves.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/typeahead-js/typeahead.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/apex-charts/apex-charts.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/swiper/swiper.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/datatables-bs5/datatables.bootstrap5.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css"), "html", null, true);
        yield "\" />

    <!-- Page CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/css/pages/cards-advance.css"), "html", null, true);
        yield "\" />
    
    <!-- Helpers -->
    <script src=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/template-customizer.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/config.js"), "html", null, true);
        yield "\"></script>
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
        // line 93
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
        // line 157
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
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . ((CoreExtension::getAttribute($this->env, $this->source, ($context["pack"] ?? null), "photo", [], "any", true, true, false, 185)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["pack"] ?? null), "photo", [], "any", false, false, false, 185), "default.jpg")) : ("default.jpg")))), "html", null, true);
        yield "\" 
                                 class=\"pack-cover-image\" 
                                 alt=\"";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 187, $this->source); })()), "nom", [], "any", false, false, false, 187), "html", null, true);
        yield "\">
                            <div class=\"pack-header-overlay\">
                                <div class=\"container\">
                                    <nav aria-label=\"breadcrumb\">
                                        <ol class=\"breadcrumb\">
                                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 192
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_packs");
        yield "\">Packs</a></li>
                                            <li class=\"breadcrumb-item active\">";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 193, $this->source); })()), "nom", [], "any", false, false, false, 193), "html", null, true);
        yield "</li>
                                        </ol>
                                    </nav>
                                    <h1 class=\"pack-title display-4 text-white mb-0\">";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 196, $this->source); })()), "nom", [], "any", false, false, false, 196), "html", null, true);
        yield "</h1>
                                    <div class=\"pack-meta mt-3\">
                                        <span class=\"badge bg-primary me-2\">";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 198, $this->source); })()), "categorie", [], "any", false, false, false, 198)), "html", null, true);
        yield "</span>
                                        ";
        // line 199
        if (CoreExtension::inFilter((isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 199, $this->source); })()), ((array_key_exists("trendingPacks", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["trendingPacks"]) || array_key_exists("trendingPacks", $context) ? $context["trendingPacks"] : (function () { throw new RuntimeError('Variable "trendingPacks" does not exist.', 199, $this->source); })()), [])) : ([])))) {
            // line 200
            yield "                                            <span class=\"badge bg-warning\">
                                                <i class=\"ti ti-trending-up me-1\"></i> TRENDING
                                            </span>
                                        ";
        }
        // line 204
        yield "                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"card-body\">
                            <!-- Pack Rating Overview -->
                            <div class=\"pack-rating-overview mb-4\">
                                <div class=\"row align-items-center\">
                                    <div class=\"col-md-3 text-center\">
                                        <h1 class=\"display-3 mb-0\">4.8</h1>
                                        <div class=\"text-warning mb-2\">
                                            <i class=\"ti ti-star-filled\"></i>
                                            <i class=\"ti ti-star-filled\"></i>
                                            <i class=\"ti ti-star-filled\"></i>
                                            <i class=\"ti ti-star-filled\"></i>
                                            <i class=\"ti ti-star-half-filled\"></i>
                                        </div>
                                        <p class=\"text-muted mb-0\">Based on 124 reviews</p>
                                    </div>
                                    <div class=\"col-md-9\">
                                        <div class=\"rating-progress\">
                                            <div class=\"d-flex align-items-center mb-2\">
                                                <div class=\"text-warning me-2\"><i class=\"ti ti-star-filled\"></i> 5</div>
                                                <div class=\"progress flex-grow-1\" style=\"height: 8px;\">
                                                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 75%\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                </div>
                                                <span class=\"ms-2\">75%</span>
                                            </div>
                                            <div class=\"d-flex align-items-center mb-2\">
                                                <div class=\"text-warning me-2\"><i class=\"ti ti-star-filled\"></i> 4</div>
                                                <div class=\"progress flex-grow-1\" style=\"height: 8px;\">
                                                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 15%\" aria-valuenow=\"15\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                </div>
                                                <span class=\"ms-2\">15%</span>
                                            </div>
                                            <div class=\"d-flex align-items-center mb-2\">
                                                <div class=\"text-warning me-2\"><i class=\"ti ti-star-filled\"></i> 3</div>
                                                <div class=\"progress flex-grow-1\" style=\"height: 8px;\">
                                                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 5%\" aria-valuenow=\"5\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                </div>
                                                <span class=\"ms-2\">5%</span>
                                            </div>
                                            <div class=\"d-flex align-items-center mb-2\">
                                                <div class=\"text-warning me-2\"><i class=\"ti ti-star-filled\"></i> 2</div>
                                                <div class=\"progress flex-grow-1\" style=\"height: 8px;\">
                                                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 3%\" aria-valuenow=\"3\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                </div>
                                                <span class=\"ms-2\">3%</span>
                                            </div>
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"text-warning me-2\"><i class=\"ti ti-star-filled\"></i> 1</div>
                                                <div class=\"progress flex-grow-1\" style=\"height: 8px;\">
                                                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 2%\" aria-valuenow=\"2\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                </div>
                                                <span class=\"ms-2\">2%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                                        <h4 class=\"mb-0\">";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 282, $this->source); })()), "prix", [], "any", false, false, false, 282), 2, ".", ","), "html", null, true);
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
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 297, $this->source); })()), "capacite", [], "any", false, false, false, 297), "html", null, true);
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
        // line 312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 312, $this->source); })()), "duree", [], "any", false, false, false, 312), "html", null, true);
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
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 327, $this->source); })()), "endDate", [], "any", false, false, false, 327), "d/m/Y"), "html", null, true);
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
        // line 340
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 340, $this->source); })()), "description", [], "any", false, false, false, 340), "html", null, true));
        yield "</p>
                                        </div>
                                    </div>

                                    <!-- Reviews -->
                                    <div class=\"card mb-4\">
                                        <div class=\"card-header d-flex justify-content-between align-items-center\">
                                            <h5 class=\"mb-0\">User Reviews</h5>
                                            <button class=\"btn btn-primary btn-sm\" onclick=\"openReviewModal()\">
                                                <i class=\"ti ti-plus me-1\"></i> Write a Review
                                            </button>
                                        </div>
                                        <div class=\"card-body\">
                                            <!-- Review Item 1 -->
                                            <div class=\"review-item mb-4 pb-4 border-bottom\">
                                                <div class=\"d-flex mb-3\">
                                                    <div class=\"flex-shrink-0\">
                                                        <div class=\"avatar me-3\">
                                                            <img src=\"";
        // line 358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatars/5.png"), "html", null, true);
        yield "\" alt=\"Avatar\" class=\"rounded-circle\">
                                                        </div>
                                                    </div>
                                                    <div class=\"flex-grow-1\">
                                                        <div class=\"d-flex justify-content-between align-items-start\">
                                                            <div>
                                                                <h6 class=\"mb-0\">Sarah Johnson</h6>
                                                                <div class=\"text-warning mb-1\">
                                                                    <i class=\"ti ti-star-filled\"></i>
                                                                    <i class=\"ti ti-star-filled\"></i>
                                                                    <i class=\"ti ti-star-filled\"></i>
                                                                    <i class=\"ti ti-star-filled\"></i>
                                                                    <i class=\"ti ti-star-filled\"></i>
                                                                </div>
                                                            </div>
                                                            <small class=\"text-muted\">2 days ago</small>
                                                        </div>
                                                        <p class=\"mb-0\">Amazing experience! The pack exceeded our expectations. The staff was professional and everything was perfectly organized.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Review Item 2 -->
                                            <div class=\"review-item mb-4 pb-4 border-bottom\">
                                                <div class=\"d-flex mb-3\">
                                                    <div class=\"flex-shrink-0\">
                                                        <div class=\"avatar me-3\">
                                                            <img src=\"";
        // line 384
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatars/12.png"), "html", null, true);
        yield "\" alt=\"Avatar\" class=\"rounded-circle\">
                                                        </div>
                                                    </div>
                                                    <div class=\"flex-grow-1\">
                                                        <div class=\"d-flex justify-content-between align-items-start\">
                                                            <div>
                                                                <h6 class=\"mb-0\">Michael Chen</h6>
                                                                <div class=\"text-warning mb-1\">
                                                                    <i class=\"ti ti-star-filled\"></i>
                                                                    <i class=\"ti ti-star-filled\"></i>
                                                                    <i class=\"ti ti-star-filled\"></i>
                                                                    <i class=\"ti ti-star-filled\"></i>
                                                                    <i class=\"ti ti-star\"></i>
                                                                </div>
                                                            </div>
                                                            <small class=\"text-muted\">1 week ago</small>
                                                        </div>
                                                        <p class=\"mb-0\">Great value for money. Would definitely recommend this pack to others looking for a well-organized event.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"text-center\">
                                                <button class=\"btn btn-outline-primary\">Load More Reviews</button>
                                            </div>
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
                                                    <input type=\"date\" class=\"form-control\" required>
                                                </div>
                                                <div class=\"col-12\">
                                                    <label class=\"form-label\">Nombre de personnes</label>
                                                    <input type=\"number\" class=\"form-control\" min=\"1\" max=\"";
        // line 463
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 463, $this->source); })()), "capacite", [], "any", false, false, false, 463), "html", null, true);
        yield "\" required>
                                                </div>
                                                <div class=\"col-12\">
                                                    <label class=\"form-label\">Notes spéciales</label>
                                                    <textarea class=\"form-control\" rows=\"3\"></textarea>
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
        // line 479
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["similarPacks"]) || array_key_exists("similarPacks", $context) ? $context["similarPacks"] : (function () { throw new RuntimeError('Variable "similarPacks" does not exist.', 479, $this->source); })())) > 0)) {
            // line 480
            yield "                                    <div class=\"card\">
                                        <div class=\"card-header\">
                                            <h5 class=\"mb-0\">Packs similaires</h5>
                                        </div>
                                        <div class=\"card-body\">
                                            <div class=\"similar-packs\">
                                                ";
            // line 486
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["similarPacks"]) || array_key_exists("similarPacks", $context) ? $context["similarPacks"] : (function () { throw new RuntimeError('Variable "similarPacks" does not exist.', 486, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["similarPack"]) {
                // line 487
                yield "                                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["similarPack"], "id", [], "any", false, false, false, 487) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 487, $this->source); })()), "id", [], "any", false, false, false, 487))) {
                    // line 488
                    yield "                                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["similarPack"], "id", [], "any", false, false, false, 488)]), "html", null, true);
                    yield "\" class=\"similar-pack-item\">
                                                            <div class=\"d-flex align-items-center mb-3\">
                                                                <div class=\"similar-pack-image me-3\">
                                                                    <img src=\"";
                    // line 491
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . ((CoreExtension::getAttribute($this->env, $this->source, $context["similarPack"], "photo", [], "any", true, true, false, 491)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["similarPack"], "photo", [], "any", false, false, false, 491), "default.jpg")) : ("default.jpg")))), "html", null, true);
                    yield "\" 
                                                                         alt=\"";
                    // line 492
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["similarPack"], "nom", [], "any", false, false, false, 492), "html", null, true);
                    yield "\">
                                                                </div>
                                                                <div>
                                                                    <h6 class=\"mb-0\">";
                    // line 495
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["similarPack"], "nom", [], "any", false, false, false, 495), "html", null, true);
                    yield "</h6>
                                                                    <span class=\"text-primary\">";
                    // line 496
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["similarPack"], "prix", [], "any", false, false, false, 496), 2, ".", ","), "html", null, true);
                    yield " TND</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    ";
                }
                // line 501
                yield "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['similarPack'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 502
            yield "                                            </div>
                                        </div>
                                    </div>
                                    ";
        }
        // line 506
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
</style>

<!-- Review Modal -->
    <div class=\"modal fade\" id=\"reviewModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Write a Review</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <form id=\"reviewForm\">
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Rating</label>
                            <div class=\"rating-stars mb-2\">
                                <i class=\"ti ti-star rating-star\" data-rating=\"1\"></i>
                                <i class=\"ti ti-star rating-star\" data-rating=\"2\"></i>
                                <i class=\"ti ti-star rating-star\" data-rating=\"3\"></i>
                                <i class=\"ti ti-star rating-star\" data-rating=\"4\"></i>
                                <i class=\"ti ti-star rating-star\" data-rating=\"5\"></i>
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Your Review</label>
                            <textarea class=\"form-control\" rows=\"4\" placeholder=\"Share your experience with this pack...\"></textarea>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Photos (optional)</label>
                            <input type=\"file\" class=\"form-control\" multiple accept=\"image/*\">
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-label-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                    <button type=\"button\" class=\"btn btn-primary\" onclick=\"submitReview()\">Submit Review</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Core JS -->
    <script src=\"";
        // line 623
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 624
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 625
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 626
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 627
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/node-waves/node-waves.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 628
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/hammer/hammer.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 629
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/i18n/i18n.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 630
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/typeahead-js/typeahead.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 631
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
        // line 642
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 642, $this->source); })()), "nom", [], "any", false, false, false, 642), "html", null, true);
        yield "',
                    text: '";
        // line 643
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 643, $this->source); })()), "description", [], "any", false, false, false, 643)), "html", null, true);
        yield "',
                    url: window.location.href
                });
            }
        }

        function toggleFavorite(btn) {
            btn.classList.toggle('btn-label-danger');
            btn.classList.toggle('btn-danger');
            const icon = btn.querySelector('i');
            icon.classList.toggle('ti-heart');
            icon.classList.toggle('ti-heart-filled');
            btn.classList.add('animate__animated', 'animate__heartBeat');
            setTimeout(() => btn.classList.remove('animate__animated', 'animate__heartBeat'), 1000);
        }

        function openReviewModal() {
            const modal = new bootstrap.Modal(document.getElementById('reviewModal'));
            modal.show();
        }

        function submitReview() {
            const form = document.getElementById('reviewForm');
            // Add animation to the submit button
            const submitBtn = document.querySelector('#reviewModal .btn-primary');
            submitBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-1\" role=\"status\"></span>Submitting...';
            submitBtn.disabled = true;
            
            // Simulate API call
            setTimeout(() => {
                submitBtn.innerHTML = '<i class=\"ti ti-check me-1\"></i>Review Submitted';
                setTimeout(() => {
                    const modal = bootstrap.Modal.getInstance(document.getElementById('reviewModal'));
                    modal.hide();
                    // Show success notification
                    Swal.fire({
                        icon: 'success',
                        title: 'Thank you!',
                        text: 'Your review has been submitted successfully.',
                        showConfirmButton: false,
                        timer: 2000
                    });
                }, 1000);
            }, 2000);
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
        // line 734
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/apex-charts/apexcharts.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 735
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/swiper/swiper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 736
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/datatables-bs5/datatables-bootstrap5.js"), "html", null, true);
        yield "\"></script>

    <!-- Main JS -->
    <script src=\"";
        // line 739
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/main.js"), "html", null, true);
        yield "\"></script>

    <!-- Page JS -->
    <script src=\"";
        // line 742
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/dashboards-analytics.js"), "html", null, true);
        yield "\"></script>
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
        return array (  988 => 742,  982 => 739,  976 => 736,  972 => 735,  968 => 734,  874 => 643,  870 => 642,  856 => 631,  852 => 630,  848 => 629,  844 => 628,  840 => 627,  836 => 626,  832 => 625,  828 => 624,  824 => 623,  705 => 506,  699 => 502,  693 => 501,  685 => 496,  681 => 495,  675 => 492,  671 => 491,  664 => 488,  661 => 487,  657 => 486,  649 => 480,  647 => 479,  628 => 463,  546 => 384,  517 => 358,  496 => 340,  480 => 327,  462 => 312,  444 => 297,  426 => 282,  346 => 204,  340 => 200,  338 => 199,  334 => 198,  329 => 196,  323 => 193,  319 => 192,  311 => 187,  306 => 185,  275 => 157,  208 => 93,  165 => 53,  161 => 52,  157 => 51,  151 => 48,  145 => 45,  141 => 44,  137 => 43,  133 => 42,  129 => 41,  125 => 40,  121 => 39,  117 => 38,  111 => 35,  107 => 34,  103 => 33,  97 => 30,  93 => 29,  89 => 28,  78 => 20,  70 => 15,  66 => 14,  57 => 8,  48 => 1,);
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
                            <!-- Pack Rating Overview -->
                            <div class=\"pack-rating-overview mb-4\">
                                <div class=\"row align-items-center\">
                                    <div class=\"col-md-3 text-center\">
                                        <h1 class=\"display-3 mb-0\">4.8</h1>
                                        <div class=\"text-warning mb-2\">
                                            <i class=\"ti ti-star-filled\"></i>
                                            <i class=\"ti ti-star-filled\"></i>
                                            <i class=\"ti ti-star-filled\"></i>
                                            <i class=\"ti ti-star-filled\"></i>
                                            <i class=\"ti ti-star-half-filled\"></i>
                                        </div>
                                        <p class=\"text-muted mb-0\">Based on 124 reviews</p>
                                    </div>
                                    <div class=\"col-md-9\">
                                        <div class=\"rating-progress\">
                                            <div class=\"d-flex align-items-center mb-2\">
                                                <div class=\"text-warning me-2\"><i class=\"ti ti-star-filled\"></i> 5</div>
                                                <div class=\"progress flex-grow-1\" style=\"height: 8px;\">
                                                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 75%\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                </div>
                                                <span class=\"ms-2\">75%</span>
                                            </div>
                                            <div class=\"d-flex align-items-center mb-2\">
                                                <div class=\"text-warning me-2\"><i class=\"ti ti-star-filled\"></i> 4</div>
                                                <div class=\"progress flex-grow-1\" style=\"height: 8px;\">
                                                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 15%\" aria-valuenow=\"15\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                </div>
                                                <span class=\"ms-2\">15%</span>
                                            </div>
                                            <div class=\"d-flex align-items-center mb-2\">
                                                <div class=\"text-warning me-2\"><i class=\"ti ti-star-filled\"></i> 3</div>
                                                <div class=\"progress flex-grow-1\" style=\"height: 8px;\">
                                                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 5%\" aria-valuenow=\"5\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                </div>
                                                <span class=\"ms-2\">5%</span>
                                            </div>
                                            <div class=\"d-flex align-items-center mb-2\">
                                                <div class=\"text-warning me-2\"><i class=\"ti ti-star-filled\"></i> 2</div>
                                                <div class=\"progress flex-grow-1\" style=\"height: 8px;\">
                                                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 3%\" aria-valuenow=\"3\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                </div>
                                                <span class=\"ms-2\">3%</span>
                                            </div>
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"text-warning me-2\"><i class=\"ti ti-star-filled\"></i> 1</div>
                                                <div class=\"progress flex-grow-1\" style=\"height: 8px;\">
                                                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 2%\" aria-valuenow=\"2\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                </div>
                                                <span class=\"ms-2\">2%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

                                    <!-- Reviews -->
                                    <div class=\"card mb-4\">
                                        <div class=\"card-header d-flex justify-content-between align-items-center\">
                                            <h5 class=\"mb-0\">User Reviews</h5>
                                            <button class=\"btn btn-primary btn-sm\" onclick=\"openReviewModal()\">
                                                <i class=\"ti ti-plus me-1\"></i> Write a Review
                                            </button>
                                        </div>
                                        <div class=\"card-body\">
                                            <!-- Review Item 1 -->
                                            <div class=\"review-item mb-4 pb-4 border-bottom\">
                                                <div class=\"d-flex mb-3\">
                                                    <div class=\"flex-shrink-0\">
                                                        <div class=\"avatar me-3\">
                                                            <img src=\"{{ asset('img/avatars/5.png') }}\" alt=\"Avatar\" class=\"rounded-circle\">
                                                        </div>
                                                    </div>
                                                    <div class=\"flex-grow-1\">
                                                        <div class=\"d-flex justify-content-between align-items-start\">
                                                            <div>
                                                                <h6 class=\"mb-0\">Sarah Johnson</h6>
                                                                <div class=\"text-warning mb-1\">
                                                                    <i class=\"ti ti-star-filled\"></i>
                                                                    <i class=\"ti ti-star-filled\"></i>
                                                                    <i class=\"ti ti-star-filled\"></i>
                                                                    <i class=\"ti ti-star-filled\"></i>
                                                                    <i class=\"ti ti-star-filled\"></i>
                                                                </div>
                                                            </div>
                                                            <small class=\"text-muted\">2 days ago</small>
                                                        </div>
                                                        <p class=\"mb-0\">Amazing experience! The pack exceeded our expectations. The staff was professional and everything was perfectly organized.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Review Item 2 -->
                                            <div class=\"review-item mb-4 pb-4 border-bottom\">
                                                <div class=\"d-flex mb-3\">
                                                    <div class=\"flex-shrink-0\">
                                                        <div class=\"avatar me-3\">
                                                            <img src=\"{{ asset('img/avatars/12.png') }}\" alt=\"Avatar\" class=\"rounded-circle\">
                                                        </div>
                                                    </div>
                                                    <div class=\"flex-grow-1\">
                                                        <div class=\"d-flex justify-content-between align-items-start\">
                                                            <div>
                                                                <h6 class=\"mb-0\">Michael Chen</h6>
                                                                <div class=\"text-warning mb-1\">
                                                                    <i class=\"ti ti-star-filled\"></i>
                                                                    <i class=\"ti ti-star-filled\"></i>
                                                                    <i class=\"ti ti-star-filled\"></i>
                                                                    <i class=\"ti ti-star-filled\"></i>
                                                                    <i class=\"ti ti-star\"></i>
                                                                </div>
                                                            </div>
                                                            <small class=\"text-muted\">1 week ago</small>
                                                        </div>
                                                        <p class=\"mb-0\">Great value for money. Would definitely recommend this pack to others looking for a well-organized event.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"text-center\">
                                                <button class=\"btn btn-outline-primary\">Load More Reviews</button>
                                            </div>
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
                                                    <input type=\"date\" class=\"form-control\" required>
                                                </div>
                                                <div class=\"col-12\">
                                                    <label class=\"form-label\">Nombre de personnes</label>
                                                    <input type=\"number\" class=\"form-control\" min=\"1\" max=\"{{ pack.capacite }}\" required>
                                                </div>
                                                <div class=\"col-12\">
                                                    <label class=\"form-label\">Notes spéciales</label>
                                                    <textarea class=\"form-control\" rows=\"3\"></textarea>
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
</style>

<!-- Review Modal -->
    <div class=\"modal fade\" id=\"reviewModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Write a Review</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <form id=\"reviewForm\">
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Rating</label>
                            <div class=\"rating-stars mb-2\">
                                <i class=\"ti ti-star rating-star\" data-rating=\"1\"></i>
                                <i class=\"ti ti-star rating-star\" data-rating=\"2\"></i>
                                <i class=\"ti ti-star rating-star\" data-rating=\"3\"></i>
                                <i class=\"ti ti-star rating-star\" data-rating=\"4\"></i>
                                <i class=\"ti ti-star rating-star\" data-rating=\"5\"></i>
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Your Review</label>
                            <textarea class=\"form-control\" rows=\"4\" placeholder=\"Share your experience with this pack...\"></textarea>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Photos (optional)</label>
                            <input type=\"file\" class=\"form-control\" multiple accept=\"image/*\">
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-label-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                    <button type=\"button\" class=\"btn btn-primary\" onclick=\"submitReview()\">Submit Review</button>
                </div>
            </div>
        </div>
    </div>

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
            btn.classList.toggle('btn-label-danger');
            btn.classList.toggle('btn-danger');
            const icon = btn.querySelector('i');
            icon.classList.toggle('ti-heart');
            icon.classList.toggle('ti-heart-filled');
            btn.classList.add('animate__animated', 'animate__heartBeat');
            setTimeout(() => btn.classList.remove('animate__animated', 'animate__heartBeat'), 1000);
        }

        function openReviewModal() {
            const modal = new bootstrap.Modal(document.getElementById('reviewModal'));
            modal.show();
        }

        function submitReview() {
            const form = document.getElementById('reviewForm');
            // Add animation to the submit button
            const submitBtn = document.querySelector('#reviewModal .btn-primary');
            submitBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-1\" role=\"status\"></span>Submitting...';
            submitBtn.disabled = true;
            
            // Simulate API call
            setTimeout(() => {
                submitBtn.innerHTML = '<i class=\"ti ti-check me-1\"></i>Review Submitted';
                setTimeout(() => {
                    const modal = bootstrap.Modal.getInstance(document.getElementById('reviewModal'));
                    modal.hide();
                    // Show success notification
                    Swal.fire({
                        icon: 'success',
                        title: 'Thank you!',
                        text: 'Your review has been submitted successfully.',
                        showConfirmButton: false,
                        timer: 2000
                    });
                }, 1000);
            }, 2000);
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
</body>
</html>
", "pack/details.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\pack\\details.html.twig");
    }
}
