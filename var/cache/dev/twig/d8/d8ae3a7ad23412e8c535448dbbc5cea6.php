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

/* GestionEvent/admin.html.twig */
class __TwigTemplate_8eef1265d63a2ac822481f126f29f66f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionEvent/admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionEvent/admin.html.twig"));

        // line 1
        yield "   
<!DOCTYPE html>

<html
  lang=\"en\"
  class=\"light-style layout-navbar-fixed layout-menu-fixed\"
  dir=\"ltr\"
  data-theme=\"theme-default\"
  data-assets-path=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        yield "\"
  data-template=\"vertical-menu-template\">
 <head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />

    <title>Dashboard - Analytics | Vuexy - Bootstrap Admin Template</title>

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\" />
    
    <link rel=\"stylesheet\" href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/node-waves/node-waves.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/typeahead-js/typeahead.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/apex-charts/apex-charts.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/swiper/swiper.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/datatables-bs5/datatables.bootstrap5.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/flatpickr/flatpickr.css"), "html", null, true);
        yield "\" />

    <!-- Page CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/css/pages/cards-advance.css"), "html", null, true);
        yield "\" />
    
    <!-- Helpers -->
    <script src=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/template-customizer.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/config.js"), "html", null, true);
        yield "\"></script>
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
        // line 121
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
        // line 451
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
        // line 496
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
        // line 542
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
        // line 588
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
        // line 610
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
        // line 669
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
        // line 678
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




   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
  








































<div class=\"container-xxl flex-grow-1 container-p-y\">
    <h4 class=\"fw-bold py-3 mb-4\">All Events</h4>

    <div class=\"row mb-5\">
        ";
        // line 884
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 884, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 885
            yield "        <div class=\"col-md-6 col-lg-4 mb-3\">
            <div class=\"card h-100\">
                ";
            // line 887
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "photo", [], "any", false, false, false, 887)) {
                // line 888
                yield "                    <img class=\"card-img-top\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "photo", [], "any", false, false, false, 888))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 888), "html", null, true);
                yield "\">
                ";
            } else {
                // line 890
                yield "                    <img class=\"card-img-top\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/placeholder.jpg"), "html", null, true);
                yield "\" alt=\"No image\">
                ";
            }
            // line 892
            yield "                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 893
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 893), "html", null, true);
            yield "</h5>
                    <div class=\"card-subtitle text-muted mb-2\">
                        <i class=\"fas fa-calendar me-2\"></i>";
            // line 895
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 895), "M d, Y"), "html", null, true);
            yield "
                    </div>
                    <span class=\"badge bg-label-primary\">";
            // line 897
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categoryLabels"]) || array_key_exists("categoryLabels", $context) ? $context["categoryLabels"] : (function () { throw new RuntimeError('Variable "categoryLabels" does not exist.', 897, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, false, false, 897), "value", [], "any", false, false, false, 897), [], "array", false, false, false, 897), "html", null, true);
            yield "</span>
                    <div class=\"mt-3\">
                        <a href=\"";
            // line 899
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 899)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary\">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 906
        if (!$context['_iterated']) {
            // line 907
            yield "        <div class=\"col-12\">
            <div class=\"alert alert-info\">No events found</div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 911
        yield "    </div>
</div>







            <!-- / Content -->

            <!-- Footer -->
            <footer class=\"content-footer footer bg-footer-theme\">
              <div class=\"container-xxl\">
                <div
                  class=\"footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column\">
                  <div>
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with ❤️ by <a href=\"https://pixinvent.com\" target=\"_blank\" class=\"fw-semibold\">Pixinvent</a>
                  </div>
                  <div>
                    <a href=\"https://themeforest.net/licenses/standard\" class=\"footer-link me-4\" target=\"_blank\"
                      >License</a
                    >
                    <a href=\"https://1.envato.market/pixinvent_portfolio\" target=\"_blank\" class=\"footer-link me-4\"
                      >More Themes</a
                    >

                    <a
                      href=\"https://demos.pixinvent.com/vuexy-html-admin-template/documentation/\"
                      target=\"_blank\"
                      class=\"footer-link me-4\"
                      >Documentation</a
                    >

                    <a href=\"https://pixinvent.ticksy.com/\" target=\"_blank\" class=\"footer-link d-none d-sm-inline-block\"
                      >Support</a
                    >
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

      <!-- Overlay -->
      <div class=\"layout-overlay layout-menu-toggle\"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class=\"drag-target\"></div>
    </div>
    <!-- / Layout wrapper -->

<!-- Core JS -->
<script src=\"";
        // line 974
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 975
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 976
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 977
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 978
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/node-waves/node-waves.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 979
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/hammer/hammer.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 980
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/i18n/i18n.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 981
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/typeahead-js/typeahead.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 982
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>


<!-- Main JS -->
<script src=\"";
        // line 986
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/main.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 987
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
        return "GestionEvent/admin.html.twig";
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
        return array (  1191 => 987,  1187 => 986,  1180 => 982,  1176 => 981,  1172 => 980,  1168 => 979,  1164 => 978,  1160 => 977,  1156 => 976,  1152 => 975,  1148 => 974,  1083 => 911,  1074 => 907,  1072 => 906,  1060 => 899,  1055 => 897,  1050 => 895,  1045 => 893,  1042 => 892,  1036 => 890,  1028 => 888,  1026 => 887,  1022 => 885,  1017 => 884,  808 => 678,  796 => 669,  734 => 610,  709 => 588,  660 => 542,  611 => 496,  563 => 451,  230 => 121,  160 => 54,  156 => 53,  152 => 52,  146 => 49,  140 => 46,  136 => 45,  132 => 44,  128 => 43,  124 => 42,  120 => 41,  116 => 40,  111 => 38,  105 => 35,  101 => 34,  97 => 33,  91 => 30,  87 => 29,  83 => 28,  72 => 20,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("   
<!DOCTYPE html>

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

    <title>Dashboard - Analytics | Vuexy - Bootstrap Admin Template</title>

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




   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
  








































<div class=\"container-xxl flex-grow-1 container-p-y\">
    <h4 class=\"fw-bold py-3 mb-4\">All Events</h4>

    <div class=\"row mb-5\">
        {% for event in events %}
        <div class=\"col-md-6 col-lg-4 mb-3\">
            <div class=\"card h-100\">
                {% if event.photo %}
                    <img class=\"card-img-top\" src=\"{{ asset('uploads/' ~ event.photo) }}\" alt=\"{{ event.nom }}\">
                {% else %}
                    <img class=\"card-img-top\" src=\"{{ asset('img/placeholder.jpg') }}\" alt=\"No image\">
                {% endif %}
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ event.nom }}</h5>
                    <div class=\"card-subtitle text-muted mb-2\">
                        <i class=\"fas fa-calendar me-2\"></i>{{ event.date|date('M d, Y') }}
                    </div>
                    <span class=\"badge bg-label-primary\">{{ categoryLabels[event.categorie.value] }}</span>
                    <div class=\"mt-3\">
                        <a href=\"{{ path('event_show', {'id': event.id}) }}\" class=\"btn btn-outline-primary\">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {% else %}
        <div class=\"col-12\">
            <div class=\"alert alert-info\">No events found</div>
        </div>
        {% endfor %}
    </div>
</div>







            <!-- / Content -->

            <!-- Footer -->
            <footer class=\"content-footer footer bg-footer-theme\">
              <div class=\"container-xxl\">
                <div
                  class=\"footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column\">
                  <div>
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with ❤️ by <a href=\"https://pixinvent.com\" target=\"_blank\" class=\"fw-semibold\">Pixinvent</a>
                  </div>
                  <div>
                    <a href=\"https://themeforest.net/licenses/standard\" class=\"footer-link me-4\" target=\"_blank\"
                      >License</a
                    >
                    <a href=\"https://1.envato.market/pixinvent_portfolio\" target=\"_blank\" class=\"footer-link me-4\"
                      >More Themes</a
                    >

                    <a
                      href=\"https://demos.pixinvent.com/vuexy-html-admin-template/documentation/\"
                      target=\"_blank\"
                      class=\"footer-link me-4\"
                      >Documentation</a
                    >

                    <a href=\"https://pixinvent.ticksy.com/\" target=\"_blank\" class=\"footer-link d-none d-sm-inline-block\"
                      >Support</a
                    >
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

      <!-- Overlay -->
      <div class=\"layout-overlay layout-menu-toggle\"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class=\"drag-target\"></div>
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


<!-- Main JS -->
<script src=\"{{ asset('/js/main.js') }}\"></script>
<script src=\"{{ asset('/js/dashboards-analytics.js') }}\"></script>
  </body>
</html>

", "GestionEvent/admin.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\GestionEvent\\admin.html.twig");
    }
}
