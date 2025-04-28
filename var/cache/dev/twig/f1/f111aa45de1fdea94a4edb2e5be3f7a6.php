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

/* form.html.twig */
class __TwigTemplate_07ccdf325b6861fdaa838a66c4fdf70f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form.html.twig"));

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

    
    <!-- Helpers -->
    <script src=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/template-customizer.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 47
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
        // line 444
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
        // line 489
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
        // line 535
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
        // line 581
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
        // line 603
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
        // line 662
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
        // line 671
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












 <div class=\"content-wrapper\">
            <!-- Content -->

            <div class=\"container-xxl flex-grow-1 container-p-y\">
              <h4 class=\"fw-bold py-3 mb-4\"><span class=\"text-muted fw-light\">Forms /</span> Basic Inputs</h4>

              <div class=\"row\">
                <div class=\"col-md-6\">
                  <div class=\"card mb-4\">
                    <h5 class=\"card-header\">Default</h5>
                    <div class=\"card-body\">
                      <div>
                        <label for=\"defaultFormControlInput\" class=\"form-label\">Name</label>
                        <input
                          type=\"text\"
                          class=\"form-control\"
                          id=\"defaultFormControlInput\"
                          placeholder=\"John Doe\"
                          aria-describedby=\"defaultFormControlHelp\" />
                        <div id=\"defaultFormControlHelp\" class=\"form-text\">
                          We'll never share your details with anyone else.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"card mb-4\">
                    <h5 class=\"card-header\">Float label</h5>
                    <div class=\"card-body\">
                      <div class=\"form-floating\">
                        <input
                          type=\"text\"
                          class=\"form-control\"
                          id=\"floatingInput\"
                          placeholder=\"John Doe\"
                          aria-describedby=\"floatingInputHelp\" />
                        <label for=\"floatingInput\">Name</label>
                        <div id=\"floatingInputHelp\" class=\"form-text\">
                          We'll never share your details with anyone else.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Form controls -->
                <div class=\"col-md-6\">
                  <div class=\"card mb-4\">
                    <h5 class=\"card-header\">Form Controls</h5>
                    <div class=\"card-body\">
                      <div class=\"mb-3\">
                        <label for=\"exampleFormControlInput1\" class=\"form-label\">Email address</label>
                        <input
                          type=\"email\"
                          class=\"form-control\"
                          id=\"exampleFormControlInput1\"
                          placeholder=\"name@example.com\" />
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"exampleFormControlReadOnlyInput1\" class=\"form-label\">Read only</label>
                        <input
                          class=\"form-control\"
                          type=\"text\"
                          id=\"exampleFormControlReadOnlyInput1\"
                          placeholder=\"Readonly input here...\"
                          readonly />
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"exampleFormControlReadOnlyInputPlain1\" class=\"form-label\">Read plain</label>
                        <input
                          type=\"text\"
                          readonly
                          class=\"form-control-plaintext\"
                          id=\"exampleFormControlReadOnlyInputPlain1\"
                          value=\"email@example.com\" />
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"exampleFormControlSelect1\" class=\"form-label\">Example select</label>
                        <select class=\"form-select\" id=\"exampleFormControlSelect1\" aria-label=\"Default select example\">
                          <option selected>Open this select menu</option>
                          <option value=\"1\">One</option>
                          <option value=\"2\">Two</option>
                          <option value=\"3\">Three</option>
                        </select>
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"exampleDataList\" class=\"form-label\">Datalist example</label>
                        <input
                          class=\"form-control\"
                          list=\"datalistOptions\"
                          id=\"exampleDataList\"
                          placeholder=\"Type to search...\" />
                        <datalist id=\"datalistOptions\">
                          <option value=\"San Francisco\"></option>
                          <option value=\"New York\"></option>
                          <option value=\"Seattle\"></option>
                          <option value=\"Los Angeles\"></option>
                          <option value=\"Chicago\"></option>
                        </datalist>
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"exampleFormControlSelect2\" class=\"form-label\">Example multiple select</label>
                        <select
                          multiple
                          class=\"form-select\"
                          id=\"exampleFormControlSelect2\"
                          aria-label=\"Multiple select example\">
                          <option selected>Open this select menu</option>
                          <option value=\"1\">One</option>
                          <option value=\"2\">Two</option>
                          <option value=\"3\">Three</option>
                        </select>
                      </div>
                      <div>
                        <label for=\"exampleFormControlTextarea1\" class=\"form-label\">Example textarea</label>
                        <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Input Sizing -->
                <div class=\"col-md-6\">
                  <div class=\"card mb-4\">
                    <h5 class=\"card-header\">Input Sizing & Shape</h5>
                    <div class=\"card-body\">
                      <small class=\"text-light fw-semibold\">Input text</small>

                      <div class=\"mt-2 mb-3\">
                        <label for=\"largeInput\" class=\"form-label\">Large input</label>
                        <input
                          id=\"largeInput\"
                          class=\"form-control form-control-lg\"
                          type=\"text\"
                          placeholder=\".form-control-lg\" />
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"defaultInput\" class=\"form-label\">Default input</label>
                        <input id=\"defaultInput\" class=\"form-control\" type=\"text\" placeholder=\"Default input\" />
                      </div>
                      <div>
                        <label for=\"smallInput\" class=\"form-label\">Small input</label>
                        <input
                          id=\"smallInput\"
                          class=\"form-control form-control-sm\"
                          type=\"text\"
                          placeholder=\".form-control-sm\" />
                      </div>
                    </div>
                    <hr class=\"m-0\" />
                    <div class=\"card-body\">
                      <small class=\"text-light fw-semibold\">Input select</small>
                      <div class=\"mt-2 mb-3\">
                        <label for=\"largeSelect\" class=\"form-label\">Large select</label>
                        <select id=\"largeSelect\" class=\"form-select form-select-lg\">
                          <option>Large select</option>
                          <option value=\"1\">One</option>
                          <option value=\"2\">Two</option>
                          <option value=\"3\">Three</option>
                        </select>
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"defaultSelect\" class=\"form-label\">Default select</label>
                        <select id=\"defaultSelect\" class=\"form-select\">
                          <option>Default select</option>
                          <option value=\"1\">One</option>
                          <option value=\"2\">Two</option>
                          <option value=\"3\">Three</option>
                        </select>
                      </div>
                      <div>
                        <label for=\"smallSelect\" class=\"form-label\">Small select</label>
                        <select id=\"smallSelect\" class=\"form-select form-select-sm\">
                          <option>Small select</option>
                          <option value=\"1\">One</option>
                          <option value=\"2\">Two</option>
                          <option value=\"3\">Three</option>
                        </select>
                      </div>
                    </div>
                    <hr class=\"m-0\" />
                    <div class=\"card-body\">
                      <small class=\"text-light fw-semibold\">Input Shape</small>
                      <div class=\"mt-2\">
                        <label for=\"roundedInput\" class=\"form-label\">Rounded input</label>
                        <input
                          id=\"roundedInput\"
                          class=\"form-control rounded-pill\"
                          type=\"text\"
                          placeholder=\"Default input\" />
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Default Checkboxes and radios & Default checkboxes and radios -->
                <div class=\"col-xl-6\">
                  <div class=\"card mb-4\">
                    <h5 class=\"card-header\">Checkboxes and Radios</h5>
                    <!-- Checkboxes and Radios -->
                    <div class=\"row row-bordered g-0\">
                      <div class=\"col-md p-4\">
                        <small class=\"text-light fw-semibold\">Checkboxes</small>
                        <div class=\"form-check mt-3\">
                          <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"defaultCheck1\" />
                          <label class=\"form-check-label\" for=\"defaultCheck1\"> Unchecked </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"defaultCheck2\" checked />
                          <label class=\"form-check-label\" for=\"defaultCheck2\"> Indeterminate </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"defaultCheck3\" checked />
                          <label class=\"form-check-label\" for=\"defaultCheck3\"> Checked </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"disabledCheck1\" disabled />
                          <label class=\"form-check-label\" for=\"disabledCheck1\"> Disabled Unchecked </label>
                        </div>
                        <div class=\"form-check\">
                          <input
                            class=\"form-check-input\"
                            type=\"checkbox\"
                            value=\"\"
                            id=\"disabledCheck2\"
                            disabled
                            checked />
                          <label class=\"form-check-label\" for=\"disabledCheck2\"> Disabled Checked </label>
                        </div>
                      </div>
                      <div class=\"col-md p-4\">
                        <small class=\"text-light fw-semibold\">Radio</small>
                        <div class=\"form-check mt-3\">
                          <input
                            name=\"default-radio-1\"
                            class=\"form-check-input\"
                            type=\"radio\"
                            value=\"\"
                            id=\"defaultRadio1\" />
                          <label class=\"form-check-label\" for=\"defaultRadio1\"> Unchecked </label>
                        </div>
                        <div class=\"form-check\">
                          <input
                            name=\"default-radio-1\"
                            class=\"form-check-input\"
                            type=\"radio\"
                            value=\"\"
                            id=\"defaultRadio2\"
                            checked />
                          <label class=\"form-check-label\" for=\"defaultRadio2\"> Checked </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"radio\" value=\"\" id=\"disabledRadio1\" disabled />
                          <label class=\"form-check-label\" for=\"disabledRadio1\"> Disabled unchecked </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"radio\" value=\"\" id=\"disabledRadio2\" disabled checked />
                          <label class=\"form-check-label\" for=\"disabledRadio2\"> Disabled checkbox </label>
                        </div>
                      </div>
                    </div>
                    <hr class=\"m-0\" />
                    <!-- Inline Checkboxes -->
                    <div class=\"row row-bordered g-0\">
                      <div class=\"col-md p-4\">
                        <small class=\"text-light fw-semibold d-block\">Inline Checkboxes</small>
                        <div class=\"form-check form-check-inline mt-3\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"inlineCheckbox1\" value=\"option1\" />
                          <label class=\"form-check-label\" for=\"inlineCheckbox1\">1</label>
                        </div>
                        <div class=\"form-check form-check-inline\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"inlineCheckbox2\" value=\"option2\" />
                          <label class=\"form-check-label\" for=\"inlineCheckbox2\">2</label>
                        </div>
                        <div class=\"form-check form-check-inline\">
                          <input
                            class=\"form-check-input\"
                            type=\"checkbox\"
                            id=\"inlineCheckbox3\"
                            value=\"option3\"
                            disabled />
                          <label class=\"form-check-label\" for=\"inlineCheckbox3\">3 (disabled)</label>
                        </div>
                      </div>
                      <div class=\"col-md p-4\">
                        <small class=\"text-light fw-semibold d-block\">Inline Radio</small>
                        <div class=\"form-check form-check-inline mt-3\">
                          <input
                            class=\"form-check-input\"
                            type=\"radio\"
                            name=\"inlineRadioOptions\"
                            id=\"inlineRadio1\"
                            value=\"option1\" />
                          <label class=\"form-check-label\" for=\"inlineRadio1\">1</label>
                        </div>
                        <div class=\"form-check form-check-inline\">
                          <input
                            class=\"form-check-input\"
                            type=\"radio\"
                            name=\"inlineRadioOptions\"
                            id=\"inlineRadio2\"
                            value=\"option2\" />
                          <label class=\"form-check-label\" for=\"inlineRadio2\">2</label>
                        </div>
                        <div class=\"form-check form-check-inline\">
                          <input
                            class=\"form-check-input\"
                            type=\"radio\"
                            name=\"inlineRadioOptions\"
                            id=\"inlineRadio3\"
                            value=\"option3\"
                            disabled />
                          <label class=\"form-check-label\" for=\"inlineRadio3\">3 (disabled)</label>
                        </div>
                      </div>
                    </div>
                    <hr class=\"m-0\" />
                    <!-- Checkboxes & Radio Colors -->
                    <div class=\"row row-bordered g-0\">
                      <div class=\"col-md p-4\">
                        <small class=\"text-light fw-semibold d-block\">Checkboxes Colors</small>

                        <div class=\"form-check form-check-primary mt-3\">
                          <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"customCheckPrimary\" checked />
                          <label class=\"form-check-label\" for=\"customCheckPrimary\">Primary</label>
                        </div>
                        <div class=\"form-check form-check-secondary\">
                          <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"customCheckSecondary\" checked />
                          <label class=\"form-check-label\" for=\"customCheckSecondary\">Secondary</label>
                        </div>
                        <div class=\"form-check form-check-success\">
                          <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"customCheckSuccess\" checked />
                          <label class=\"form-check-label\" for=\"customCheckSuccess\">Success</label>
                        </div>
                        <div class=\"form-check form-check-danger\">
                          <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"customCheckDanger\" checked />
                          <label class=\"form-check-label\" for=\"customCheckDanger\">Danger</label>
                        </div>
                        <div class=\"form-check form-check-warning\">
                          <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"customCheckWarning\" checked />
                          <label class=\"form-check-label\" for=\"customCheckWarning\"> Warning </label>
                        </div>
                        <div class=\"form-check form-check-info\">
                          <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"customCheckInfo\" checked />
                          <label class=\"form-check-label\" for=\"customCheckInfo\"> Info </label>
                        </div>
                        <div class=\"form-check form-check-dark\">
                          <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"customCheckDark\" checked />
                          <label class=\"form-check-label\" for=\"customCheckDark\"> Dark </label>
                        </div>
                      </div>
                      <div class=\"col-md p-4\">
                        <small class=\"text-light fw-semibold d-block\">Radio Color</small>
                        <div class=\"form-check form-check-primary mt-3\">
                          <input
                            name=\"customRadioPrimary\"
                            class=\"form-check-input\"
                            type=\"radio\"
                            value=\"\"
                            id=\"customRadioPrimary\"
                            checked />
                          <label class=\"form-check-label\" for=\"customRadioPrimary\"> Primary </label>
                        </div>
                        <div class=\"form-check form-check-secondary\">
                          <input
                            name=\"customRadioSecondary\"
                            class=\"form-check-input\"
                            type=\"radio\"
                            value=\"\"
                            id=\"customRadioSecondary\"
                            checked />
                          <label class=\"form-check-label\" for=\"customRadioSecondary\"> Secondary </label>
                        </div>
                        <div class=\"form-check form-check-success\">
                          <input
                            name=\"customRadioSuccess\"
                            class=\"form-check-input\"
                            type=\"radio\"
                            value=\"\"
                            id=\"customRadioSuccess\"
                            checked />
                          <label class=\"form-check-label\" for=\"customRadioSuccess\"> Success </label>
                        </div>
                        <div class=\"form-check form-check-danger\">
                          <input
                            name=\"customRadioDanger\"
                            class=\"form-check-input\"
                            type=\"radio\"
                            value=\"\"
                            id=\"customRadioDanger\"
                            checked />
                          <label class=\"form-check-label\" for=\"customRadioDanger\"> Danger </label>
                        </div>
                        <div class=\"form-check form-check-warning\">
                          <input
                            name=\"customRadioWarning\"
                            class=\"form-check-input\"
                            type=\"radio\"
                            value=\"\"
                            id=\"customRadioWarning\"
                            checked />
                          <label class=\"form-check-label\" for=\"customRadioWarning\"> Warning </label>
                        </div>
                        <div class=\"form-check form-check-info\">
                          <input
                            name=\"customRadioInfo\"
                            class=\"form-check-input\"
                            type=\"radio\"
                            value=\"\"
                            id=\"customRadioInfo\"
                            checked />
                          <label class=\"form-check-label\" for=\"customRadioInfo\"> Info </label>
                        </div>
                        <div class=\"form-check form-check-dark\">
                          <input
                            name=\"customRadioDark\"
                            class=\"form-check-input\"
                            type=\"radio\"
                            value=\"\"
                            id=\"customRadioDark\"
                            checked />
                          <label class=\"form-check-label\" for=\"customRadioDark\"> Dark </label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Switches -->
                  <div class=\"card mb-4\">
                    <h5 class=\"card-header\">Switches</h5>
                    <div class=\"card-body\">
                      <div class=\"form-check form-switch mb-2\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckDefault\" />
                        <label class=\"form-check-label\" for=\"flexSwitchCheckDefault\"
                          >Default switch checkbox input</label
                        >
                      </div>
                      <div class=\"form-check form-switch mb-2\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckChecked\" checked />
                        <label class=\"form-check-label\" for=\"flexSwitchCheckChecked\"
                          >Checked switch checkbox input</label
                        >
                      </div>
                      <div class=\"form-check form-switch mb-2\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckDisabled\" disabled />
                        <label class=\"form-check-label\" for=\"flexSwitchCheckDisabled\"
                          >Disabled switch checkbox input</label
                        >
                      </div>
                      <div class=\"form-check form-switch\">
                        <input
                          class=\"form-check-input\"
                          type=\"checkbox\"
                          id=\"flexSwitchCheckCheckedDisabled\"
                          checked
                          disabled />
                        <label class=\"form-check-label\" for=\"flexSwitchCheckCheckedDisabled\"
                          >Disabled checked switch checkbox input</label
                        >
                      </div>
                    </div>
                  </div>

                  <!-- Range -->
                  <div class=\"card mb-4 mb-xl-0\">
                    <h5 class=\"card-header\">Range</h5>
                    <div class=\"card-body\">
                      <div class=\"mb-3\">
                        <label for=\"formRange1\" class=\"form-label\">Example range</label>
                        <input type=\"range\" class=\"form-range\" id=\"formRange1\" />
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"disabledRange\" class=\"form-label\">Disabled range</label>
                        <input type=\"range\" class=\"form-range\" id=\"disabledRange\" disabled />
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"formRange2\" class=\"form-label\">Min and max</label>
                        <input type=\"range\" class=\"form-range\" min=\"0\" max=\"5\" id=\"formRange2\" />
                      </div>
                      <div>
                        <label for=\"formRange3\" class=\"form-label\">Steps</label>
                        <input type=\"range\" class=\"form-range\" min=\"0\" max=\"5\" step=\"0.5\" id=\"formRange3\" />
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"col-xl-6\">
                  <!-- HTML5 Inputs -->
                  <div class=\"card mb-4\">
                    <h5 class=\"card-header\">HTML5 Inputs</h5>
                    <div class=\"card-body\">
                      <div class=\"mb-3 row\">
                        <label for=\"html5-text-input\" class=\"col-md-2 col-form-label\">Text</label>
                        <div class=\"col-md-10\">
                          <input class=\"form-control\" type=\"text\" value=\"Vuexy\" id=\"html5-text-input\" />
                        </div>
                      </div>
                      <div class=\"mb-3 row\">
                        <label for=\"html5-search-input\" class=\"col-md-2 col-form-label\">Search</label>
                        <div class=\"col-md-10\">
                          <input class=\"form-control\" type=\"search\" value=\"Search ...\" id=\"html5-search-input\" />
                        </div>
                      </div>
                      <div class=\"mb-3 row\">
                        <label for=\"html5-email-input\" class=\"col-md-2 col-form-label\">Email</label>
                        <div class=\"col-md-10\">
                          <input class=\"form-control\" type=\"email\" value=\"john@example.com\" id=\"html5-email-input\" />
                        </div>
                      </div>
                      <div class=\"mb-3 row\">
                        <label for=\"html5-url-input\" class=\"col-md-2 col-form-label\">URL</label>
                        <div class=\"col-md-10\">
                          <input class=\"form-control\" type=\"url\" value=\"https://pixinvent.com\" id=\"html5-url-input\" />
                        </div>
                      </div>
                      <div class=\"mb-3 row\">
                        <label for=\"html5-tel-input\" class=\"col-md-2 col-form-label\">Phone</label>
                        <div class=\"col-md-10\">
                          <input class=\"form-control\" type=\"tel\" value=\"90-(164)-188-556\" id=\"html5-tel-input\" />
                        </div>
                      </div>
                      <div class=\"mb-3 row\">
                        <label for=\"html5-password-input\" class=\"col-md-2 col-form-label\">Password</label>
                        <div class=\"col-md-10\">
                          <input class=\"form-control\" type=\"password\" value=\"password\" id=\"html5-password-input\" />
                        </div>
                      </div>
                      <div class=\"mb-3 row\">
                        <label for=\"html5-number-input\" class=\"col-md-2 col-form-label\">Number</label>
                        <div class=\"col-md-10\">
                          <input class=\"form-control\" type=\"number\" value=\"18\" id=\"html5-number-input\" />
                        </div>
                      </div>
                      <div class=\"mb-3 row\">
                        <label for=\"html5-datetime-local-input\" class=\"col-md-2 col-form-label\">Datetime</label>
                        <div class=\"col-md-10\">
                          <input
                            class=\"form-control\"
                            type=\"datetime-local\"
                            value=\"2021-06-18T12:30:00\"
                            id=\"html5-datetime-local-input\" />
                        </div>
                      </div>
                      <div class=\"mb-3 row\">
                        <label for=\"html5-date-input\" class=\"col-md-2 col-form-label\">Date</label>
                        <div class=\"col-md-10\">
                          <input class=\"form-control\" type=\"date\" value=\"2021-06-18\" id=\"html5-date-input\" />
                        </div>
                      </div>
                      <div class=\"mb-3 row\">
                        <label for=\"html5-month-input\" class=\"col-md-2 col-form-label\">Month</label>
                        <div class=\"col-md-10\">
                          <input class=\"form-control\" type=\"month\" value=\"2021-06\" id=\"html5-month-input\" />
                        </div>
                      </div>
                      <div class=\"mb-3 row\">
                        <label for=\"html5-week-input\" class=\"col-md-2 col-form-label\">Week</label>
                        <div class=\"col-md-10\">
                          <input class=\"form-control\" type=\"week\" value=\"2021-W25\" id=\"html5-week-input\" />
                        </div>
                      </div>
                      <div class=\"mb-3 row\">
                        <label for=\"html5-time-input\" class=\"col-md-2 col-form-label\">Time</label>
                        <div class=\"col-md-10\">
                          <input class=\"form-control\" type=\"time\" value=\"12:30:00\" id=\"html5-time-input\" />
                        </div>
                      </div>
                      <div class=\"mb-3 row\">
                        <label for=\"html5-color-input\" class=\"col-md-2 col-form-label\">Color</label>
                        <div class=\"col-md-10\">
                          <input class=\"form-control\" type=\"color\" value=\"#666EE8\" id=\"html5-color-input\" />
                        </div>
                      </div>
                      <div class=\"row\">
                        <label for=\"html5-range\" class=\"col-md-2 col-form-label\">Range</label>
                        <div class=\"col-md-10\">
                          <input type=\"range\" class=\"form-range mt-3\" id=\"html5-range\" />
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- File input -->
                  <div class=\"card\">
                    <h5 class=\"card-header\">File input</h5>
                    <div class=\"card-body\">
                      <div class=\"mb-3\">
                        <label for=\"formFile\" class=\"form-label\">Default file input example</label>
                        <input class=\"form-control\" type=\"file\" id=\"formFile\" />
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"formFileMultiple\" class=\"form-label\">Multiple files input example</label>
                        <input class=\"form-control\" type=\"file\" id=\"formFileMultiple\" multiple />
                      </div>
                      <div>
                        <label for=\"formFileDisabled\" class=\"form-label\">Disabled file input example</label>
                        <input class=\"form-control\" type=\"file\" id=\"formFileDisabled\" disabled />
                      </div>
                    </div>
                  </div>
                </div>
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
<script src=\"";
        // line 1459
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1460
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1461
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1462
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1463
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/node-waves/node-waves.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1464
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/hammer/hammer.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1465
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/i18n/i18n.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1466
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/typeahead-js/typeahead.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1467
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>


<!-- Main JS -->
<script src=\"";
        // line 1471
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/main.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 1472
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
        return "form.html.twig";
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
        return array (  1614 => 1472,  1610 => 1471,  1603 => 1467,  1599 => 1466,  1595 => 1465,  1591 => 1464,  1587 => 1463,  1583 => 1462,  1579 => 1461,  1575 => 1460,  1571 => 1459,  780 => 671,  768 => 662,  706 => 603,  681 => 581,  632 => 535,  583 => 489,  535 => 444,  135 => 47,  131 => 46,  127 => 45,  120 => 41,  116 => 40,  111 => 38,  105 => 35,  101 => 34,  97 => 33,  91 => 30,  87 => 29,  83 => 28,  72 => 20,  58 => 9,  48 => 1,);
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












 <div class=\"content-wrapper\">
            <!-- Content -->

            <div class=\"container-xxl flex-grow-1 container-p-y\">
              <h4 class=\"fw-bold py-3 mb-4\"><span class=\"text-muted fw-light\">Forms /</span> Basic Inputs</h4>

              <div class=\"row\">
                <div class=\"col-md-6\">
                  <div class=\"card mb-4\">
                    <h5 class=\"card-header\">Default</h5>
                    <div class=\"card-body\">
                      <div>
                        <label for=\"defaultFormControlInput\" class=\"form-label\">Name</label>
                        <input
                          type=\"text\"
                          class=\"form-control\"
                          id=\"defaultFormControlInput\"
                          placeholder=\"John Doe\"
                          aria-describedby=\"defaultFormControlHelp\" />
                        <div id=\"defaultFormControlHelp\" class=\"form-text\">
                          We'll never share your details with anyone else.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"card mb-4\">
                    <h5 class=\"card-header\">Float label</h5>
                    <div class=\"card-body\">
                      <div class=\"form-floating\">
                        <input
                          type=\"text\"
                          class=\"form-control\"
                          id=\"floatingInput\"
                          placeholder=\"John Doe\"
                          aria-describedby=\"floatingInputHelp\" />
                        <label for=\"floatingInput\">Name</label>
                        <div id=\"floatingInputHelp\" class=\"form-text\">
                          We'll never share your details with anyone else.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Form controls -->
                <div class=\"col-md-6\">
                  <div class=\"card mb-4\">
                    <h5 class=\"card-header\">Form Controls</h5>
                    <div class=\"card-body\">
                      <div class=\"mb-3\">
                        <label for=\"exampleFormControlInput1\" class=\"form-label\">Email address</label>
                        <input
                          type=\"email\"
                          class=\"form-control\"
                          id=\"exampleFormControlInput1\"
                          placeholder=\"name@example.com\" />
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"exampleFormControlReadOnlyInput1\" class=\"form-label\">Read only</label>
                        <input
                          class=\"form-control\"
                          type=\"text\"
                          id=\"exampleFormControlReadOnlyInput1\"
                          placeholder=\"Readonly input here...\"
                          readonly />
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"exampleFormControlReadOnlyInputPlain1\" class=\"form-label\">Read plain</label>
                        <input
                          type=\"text\"
                          readonly
                          class=\"form-control-plaintext\"
                          id=\"exampleFormControlReadOnlyInputPlain1\"
                          value=\"email@example.com\" />
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"exampleFormControlSelect1\" class=\"form-label\">Example select</label>
                        <select class=\"form-select\" id=\"exampleFormControlSelect1\" aria-label=\"Default select example\">
                          <option selected>Open this select menu</option>
                          <option value=\"1\">One</option>
                          <option value=\"2\">Two</option>
                          <option value=\"3\">Three</option>
                        </select>
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"exampleDataList\" class=\"form-label\">Datalist example</label>
                        <input
                          class=\"form-control\"
                          list=\"datalistOptions\"
                          id=\"exampleDataList\"
                          placeholder=\"Type to search...\" />
                        <datalist id=\"datalistOptions\">
                          <option value=\"San Francisco\"></option>
                          <option value=\"New York\"></option>
                          <option value=\"Seattle\"></option>
                          <option value=\"Los Angeles\"></option>
                          <option value=\"Chicago\"></option>
                        </datalist>
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"exampleFormControlSelect2\" class=\"form-label\">Example multiple select</label>
                        <select
                          multiple
                          class=\"form-select\"
                          id=\"exampleFormControlSelect2\"
                          aria-label=\"Multiple select example\">
                          <option selected>Open this select menu</option>
                          <option value=\"1\">One</option>
                          <option value=\"2\">Two</option>
                          <option value=\"3\">Three</option>
                        </select>
                      </div>
                      <div>
                        <label for=\"exampleFormControlTextarea1\" class=\"form-label\">Example textarea</label>
                        <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Input Sizing -->
                <div class=\"col-md-6\">
                  <div class=\"card mb-4\">
                    <h5 class=\"card-header\">Input Sizing & Shape</h5>
                    <div class=\"card-body\">
                      <small class=\"text-light fw-semibold\">Input text</small>

                      <div class=\"mt-2 mb-3\">
                        <label for=\"largeInput\" class=\"form-label\">Large input</label>
                        <input
                          id=\"largeInput\"
                          class=\"form-control form-control-lg\"
                          type=\"text\"
                          placeholder=\".form-control-lg\" />
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"defaultInput\" class=\"form-label\">Default input</label>
                        <input id=\"defaultInput\" class=\"form-control\" type=\"text\" placeholder=\"Default input\" />
                      </div>
                      <div>
                        <label for=\"smallInput\" class=\"form-label\">Small input</label>
                        <input
                          id=\"smallInput\"
                          class=\"form-control form-control-sm\"
                          type=\"text\"
                          placeholder=\".form-control-sm\" />
                      </div>
                    </div>
                    <hr class=\"m-0\" />
                    <div class=\"card-body\">
                      <small class=\"text-light fw-semibold\">Input select</small>
                      <div class=\"mt-2 mb-3\">
                        <label for=\"largeSelect\" class=\"form-label\">Large select</label>
                        <select id=\"largeSelect\" class=\"form-select form-select-lg\">
                          <option>Large select</option>
                          <option value=\"1\">One</option>
                          <option value=\"2\">Two</option>
                          <option value=\"3\">Three</option>
                        </select>
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"defaultSelect\" class=\"form-label\">Default select</label>
                        <select id=\"defaultSelect\" class=\"form-select\">
                          <option>Default select</option>
                          <option value=\"1\">One</option>
                          <option value=\"2\">Two</option>
                          <option value=\"3\">Three</option>
                        </select>
                      </div>
                      <div>
                        <label for=\"smallSelect\" class=\"form-label\">Small select</label>
                        <select id=\"smallSelect\" class=\"form-select form-select-sm\">
                          <option>Small select</option>
                          <option value=\"1\">One</option>
                          <option value=\"2\">Two</option>
                          <option value=\"3\">Three</option>
                        </select>
                      </div>
                    </div>
                    <hr class=\"m-0\" />
                    <div class=\"card-body\">
                      <small class=\"text-light fw-semibold\">Input Shape</small>
                      <div class=\"mt-2\">
                        <label for=\"roundedInput\" class=\"form-label\">Rounded input</label>
                        <input
                          id=\"roundedInput\"
                          class=\"form-control rounded-pill\"
                          type=\"text\"
                          placeholder=\"Default input\" />
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Default Checkboxes and radios & Default checkboxes and radios -->
                <div class=\"col-xl-6\">
                  <div class=\"card mb-4\">
                    <h5 class=\"card-header\">Checkboxes and Radios</h5>
                    <!-- Checkboxes and Radios -->
                    <div class=\"row row-bordered g-0\">
                      <div class=\"col-md p-4\">
                        <small class=\"text-light fw-semibold\">Checkboxes</small>
                        <div class=\"form-check mt-3\">
                          <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"defaultCheck1\" />
                          <label class=\"form-check-label\" for=\"defaultCheck1\"> Unchecked </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"defaultCheck2\" checked />
                          <label class=\"form-check-label\" for=\"defaultCheck2\"> Indeterminate </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"defaultCheck3\" checked />
                          <label class=\"form-check-label\" for=\"defaultCheck3\"> Checked </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"disabledCheck1\" disabled />
                          <label class=\"form-check-label\" for=\"disabledCheck1\"> Disabled Unchecked </label>
                        </div>
                        <div class=\"form-check\">
                          <input
                            class=\"form-check-input\"
                            type=\"checkbox\"
                            value=\"\"
                            id=\"disabledCheck2\"
                            disabled
                            checked />
                          <label class=\"form-check-label\" for=\"disabledCheck2\"> Disabled Checked </label>
                        </div>
                      </div>
                      <div class=\"col-md p-4\">
                        <small class=\"text-light fw-semibold\">Radio</small>
                        <div class=\"form-check mt-3\">
                          <input
                            name=\"default-radio-1\"
                            class=\"form-check-input\"
                            type=\"radio\"
                            value=\"\"
                            id=\"defaultRadio1\" />
                          <label class=\"form-check-label\" for=\"defaultRadio1\"> Unchecked </label>
                        </div>
                        <div class=\"form-check\">
                          <input
                            name=\"default-radio-1\"
                            class=\"form-check-input\"
                            type=\"radio\"
                            value=\"\"
                            id=\"defaultRadio2\"
                            checked />
                          <label class=\"form-check-label\" for=\"defaultRadio2\"> Checked </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"radio\" value=\"\" id=\"disabledRadio1\" disabled />
                          <label class=\"form-check-label\" for=\"disabledRadio1\"> Disabled unchecked </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"radio\" value=\"\" id=\"disabledRadio2\" disabled checked />
                          <label class=\"form-check-label\" for=\"disabledRadio2\"> Disabled checkbox </label>
                        </div>
                      </div>
                    </div>
                    <hr class=\"m-0\" />
                    <!-- Inline Checkboxes -->
                    <div class=\"row row-bordered g-0\">
                      <div class=\"col-md p-4\">
                        <small class=\"text-light fw-semibold d-block\">Inline Checkboxes</small>
                        <div class=\"form-check form-check-inline mt-3\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"inlineCheckbox1\" value=\"option1\" />
                          <label class=\"form-check-label\" for=\"inlineCheckbox1\">1</label>
                        </div>
                        <div class=\"form-check form-check-inline\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"inlineCheckbox2\" value=\"option2\" />
                          <label class=\"form-check-label\" for=\"inlineCheckbox2\">2</label>
                        </div>
                        <div class=\"form-check form-check-inline\">
                          <input
                            class=\"form-check-input\"
                            type=\"checkbox\"
                            id=\"inlineCheckbox3\"
                            value=\"option3\"
                            disabled />
                          <label class=\"form-check-label\" for=\"inlineCheckbox3\">3 (disabled)</label>
                        </div>
                      </div>
                      <div class=\"col-md p-4\">
                        <small class=\"text-light fw-semibold d-block\">Inline Radio</small>
                        <div class=\"form-check form-check-inline mt-3\">
                          <input
                            class=\"form-check-input\"
                            type=\"radio\"
                            name=\"inlineRadioOptions\"
                            id=\"inlineRadio1\"
                            value=\"option1\" />
                          <label class=\"form-check-label\" for=\"inlineRadio1\">1</label>
                        </div>
                        <div class=\"form-check form-check-inline\">
                          <input
                            class=\"form-check-input\"
                            type=\"radio\"
                            name=\"inlineRadioOptions\"
                            id=\"inlineRadio2\"
                            value=\"option2\" />
                          <label class=\"form-check-label\" for=\"inlineRadio2\">2</label>
                        </div>
                        <div class=\"form-check form-check-inline\">
                          <input
                            class=\"form-check-input\"
                            type=\"radio\"
                            name=\"inlineRadioOptions\"
                            id=\"inlineRadio3\"
                            value=\"option3\"
                            disabled />
                          <label class=\"form-check-label\" for=\"inlineRadio3\">3 (disabled)</label>
                        </div>
                      </div>
                    </div>
                    <hr class=\"m-0\" />
                    <!-- Checkboxes & Radio Colors -->
                    <div class=\"row row-bordered g-0\">
                      <div class=\"col-md p-4\">
                        <small class=\"text-light fw-semibold d-block\">Checkboxes Colors</small>

                        <div class=\"form-check form-check-primary mt-3\">
                          <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"customCheckPrimary\" checked />
                          <label class=\"form-check-label\" for=\"customCheckPrimary\">Primary</label>
                        </div>
                        <div class=\"form-check form-check-secondary\">
                          <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"customCheckSecondary\" checked />
                          <label class=\"form-check-label\" for=\"customCheckSecondary\">Secondary</label>
                        </div>
                        <div class=\"form-check form-check-success\">
                          <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"customCheckSuccess\" checked />
                          <label class=\"form-check-label\" for=\"customCheckSuccess\">Success</label>
                        </div>
                        <div class=\"form-check form-check-danger\">
                          <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"customCheckDanger\" checked />
                          <label class=\"form-check-label\" for=\"customCheckDanger\">Danger</label>
                        </div>
                        <div class=\"form-check form-check-warning\">
                          <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"customCheckWarning\" checked />
                          <label class=\"form-check-label\" for=\"customCheckWarning\"> Warning </label>
                        </div>
                        <div class=\"form-check form-check-info\">
                          <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"customCheckInfo\" checked />
                          <label class=\"form-check-label\" for=\"customCheckInfo\"> Info </label>
                        </div>
                        <div class=\"form-check form-check-dark\">
                          <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"customCheckDark\" checked />
                          <label class=\"form-check-label\" for=\"customCheckDark\"> Dark </label>
                        </div>
                      </div>
                      <div class=\"col-md p-4\">
                        <small class=\"text-light fw-semibold d-block\">Radio Color</small>
                        <div class=\"form-check form-check-primary mt-3\">
                          <input
                            name=\"customRadioPrimary\"
                            class=\"form-check-input\"
                            type=\"radio\"
                            value=\"\"
                            id=\"customRadioPrimary\"
                            checked />
                          <label class=\"form-check-label\" for=\"customRadioPrimary\"> Primary </label>
                        </div>
                        <div class=\"form-check form-check-secondary\">
                          <input
                            name=\"customRadioSecondary\"
                            class=\"form-check-input\"
                            type=\"radio\"
                            value=\"\"
                            id=\"customRadioSecondary\"
                            checked />
                          <label class=\"form-check-label\" for=\"customRadioSecondary\"> Secondary </label>
                        </div>
                        <div class=\"form-check form-check-success\">
                          <input
                            name=\"customRadioSuccess\"
                            class=\"form-check-input\"
                            type=\"radio\"
                            value=\"\"
                            id=\"customRadioSuccess\"
                            checked />
                          <label class=\"form-check-label\" for=\"customRadioSuccess\"> Success </label>
                        </div>
                        <div class=\"form-check form-check-danger\">
                          <input
                            name=\"customRadioDanger\"
                            class=\"form-check-input\"
                            type=\"radio\"
                            value=\"\"
                            id=\"customRadioDanger\"
                            checked />
                          <label class=\"form-check-label\" for=\"customRadioDanger\"> Danger </label>
                        </div>
                        <div class=\"form-check form-check-warning\">
                          <input
                            name=\"customRadioWarning\"
                            class=\"form-check-input\"
                            type=\"radio\"
                            value=\"\"
                            id=\"customRadioWarning\"
                            checked />
                          <label class=\"form-check-label\" for=\"customRadioWarning\"> Warning </label>
                        </div>
                        <div class=\"form-check form-check-info\">
                          <input
                            name=\"customRadioInfo\"
                            class=\"form-check-input\"
                            type=\"radio\"
                            value=\"\"
                            id=\"customRadioInfo\"
                            checked />
                          <label class=\"form-check-label\" for=\"customRadioInfo\"> Info </label>
                        </div>
                        <div class=\"form-check form-check-dark\">
                          <input
                            name=\"customRadioDark\"
                            class=\"form-check-input\"
                            type=\"radio\"
                            value=\"\"
                            id=\"customRadioDark\"
                            checked />
                          <label class=\"form-check-label\" for=\"customRadioDark\"> Dark </label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Switches -->
                  <div class=\"card mb-4\">
                    <h5 class=\"card-header\">Switches</h5>
                    <div class=\"card-body\">
                      <div class=\"form-check form-switch mb-2\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckDefault\" />
                        <label class=\"form-check-label\" for=\"flexSwitchCheckDefault\"
                          >Default switch checkbox input</label
                        >
                      </div>
                      <div class=\"form-check form-switch mb-2\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckChecked\" checked />
                        <label class=\"form-check-label\" for=\"flexSwitchCheckChecked\"
                          >Checked switch checkbox input</label
                        >
                      </div>
                      <div class=\"form-check form-switch mb-2\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckDisabled\" disabled />
                        <label class=\"form-check-label\" for=\"flexSwitchCheckDisabled\"
                          >Disabled switch checkbox input</label
                        >
                      </div>
                      <div class=\"form-check form-switch\">
                        <input
                          class=\"form-check-input\"
                          type=\"checkbox\"
                          id=\"flexSwitchCheckCheckedDisabled\"
                          checked
                          disabled />
                        <label class=\"form-check-label\" for=\"flexSwitchCheckCheckedDisabled\"
                          >Disabled checked switch checkbox input</label
                        >
                      </div>
                    </div>
                  </div>

                  <!-- Range -->
                  <div class=\"card mb-4 mb-xl-0\">
                    <h5 class=\"card-header\">Range</h5>
                    <div class=\"card-body\">
                      <div class=\"mb-3\">
                        <label for=\"formRange1\" class=\"form-label\">Example range</label>
                        <input type=\"range\" class=\"form-range\" id=\"formRange1\" />
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"disabledRange\" class=\"form-label\">Disabled range</label>
                        <input type=\"range\" class=\"form-range\" id=\"disabledRange\" disabled />
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"formRange2\" class=\"form-label\">Min and max</label>
                        <input type=\"range\" class=\"form-range\" min=\"0\" max=\"5\" id=\"formRange2\" />
                      </div>
                      <div>
                        <label for=\"formRange3\" class=\"form-label\">Steps</label>
                        <input type=\"range\" class=\"form-range\" min=\"0\" max=\"5\" step=\"0.5\" id=\"formRange3\" />
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"col-xl-6\">
                  <!-- HTML5 Inputs -->
                  <div class=\"card mb-4\">
                    <h5 class=\"card-header\">HTML5 Inputs</h5>
                    <div class=\"card-body\">
                      <div class=\"mb-3 row\">
                        <label for=\"html5-text-input\" class=\"col-md-2 col-form-label\">Text</label>
                        <div class=\"col-md-10\">
                          <input class=\"form-control\" type=\"text\" value=\"Vuexy\" id=\"html5-text-input\" />
                        </div>
                      </div>
                      <div class=\"mb-3 row\">
                        <label for=\"html5-search-input\" class=\"col-md-2 col-form-label\">Search</label>
                        <div class=\"col-md-10\">
                          <input class=\"form-control\" type=\"search\" value=\"Search ...\" id=\"html5-search-input\" />
                        </div>
                      </div>
                      <div class=\"mb-3 row\">
                        <label for=\"html5-email-input\" class=\"col-md-2 col-form-label\">Email</label>
                        <div class=\"col-md-10\">
                          <input class=\"form-control\" type=\"email\" value=\"john@example.com\" id=\"html5-email-input\" />
                        </div>
                      </div>
                      <div class=\"mb-3 row\">
                        <label for=\"html5-url-input\" class=\"col-md-2 col-form-label\">URL</label>
                        <div class=\"col-md-10\">
                          <input class=\"form-control\" type=\"url\" value=\"https://pixinvent.com\" id=\"html5-url-input\" />
                        </div>
                      </div>
                      <div class=\"mb-3 row\">
                        <label for=\"html5-tel-input\" class=\"col-md-2 col-form-label\">Phone</label>
                        <div class=\"col-md-10\">
                          <input class=\"form-control\" type=\"tel\" value=\"90-(164)-188-556\" id=\"html5-tel-input\" />
                        </div>
                      </div>
                      <div class=\"mb-3 row\">
                        <label for=\"html5-password-input\" class=\"col-md-2 col-form-label\">Password</label>
                        <div class=\"col-md-10\">
                          <input class=\"form-control\" type=\"password\" value=\"password\" id=\"html5-password-input\" />
                        </div>
                      </div>
                      <div class=\"mb-3 row\">
                        <label for=\"html5-number-input\" class=\"col-md-2 col-form-label\">Number</label>
                        <div class=\"col-md-10\">
                          <input class=\"form-control\" type=\"number\" value=\"18\" id=\"html5-number-input\" />
                        </div>
                      </div>
                      <div class=\"mb-3 row\">
                        <label for=\"html5-datetime-local-input\" class=\"col-md-2 col-form-label\">Datetime</label>
                        <div class=\"col-md-10\">
                          <input
                            class=\"form-control\"
                            type=\"datetime-local\"
                            value=\"2021-06-18T12:30:00\"
                            id=\"html5-datetime-local-input\" />
                        </div>
                      </div>
                      <div class=\"mb-3 row\">
                        <label for=\"html5-date-input\" class=\"col-md-2 col-form-label\">Date</label>
                        <div class=\"col-md-10\">
                          <input class=\"form-control\" type=\"date\" value=\"2021-06-18\" id=\"html5-date-input\" />
                        </div>
                      </div>
                      <div class=\"mb-3 row\">
                        <label for=\"html5-month-input\" class=\"col-md-2 col-form-label\">Month</label>
                        <div class=\"col-md-10\">
                          <input class=\"form-control\" type=\"month\" value=\"2021-06\" id=\"html5-month-input\" />
                        </div>
                      </div>
                      <div class=\"mb-3 row\">
                        <label for=\"html5-week-input\" class=\"col-md-2 col-form-label\">Week</label>
                        <div class=\"col-md-10\">
                          <input class=\"form-control\" type=\"week\" value=\"2021-W25\" id=\"html5-week-input\" />
                        </div>
                      </div>
                      <div class=\"mb-3 row\">
                        <label for=\"html5-time-input\" class=\"col-md-2 col-form-label\">Time</label>
                        <div class=\"col-md-10\">
                          <input class=\"form-control\" type=\"time\" value=\"12:30:00\" id=\"html5-time-input\" />
                        </div>
                      </div>
                      <div class=\"mb-3 row\">
                        <label for=\"html5-color-input\" class=\"col-md-2 col-form-label\">Color</label>
                        <div class=\"col-md-10\">
                          <input class=\"form-control\" type=\"color\" value=\"#666EE8\" id=\"html5-color-input\" />
                        </div>
                      </div>
                      <div class=\"row\">
                        <label for=\"html5-range\" class=\"col-md-2 col-form-label\">Range</label>
                        <div class=\"col-md-10\">
                          <input type=\"range\" class=\"form-range mt-3\" id=\"html5-range\" />
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- File input -->
                  <div class=\"card\">
                    <h5 class=\"card-header\">File input</h5>
                    <div class=\"card-body\">
                      <div class=\"mb-3\">
                        <label for=\"formFile\" class=\"form-label\">Default file input example</label>
                        <input class=\"form-control\" type=\"file\" id=\"formFile\" />
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"formFileMultiple\" class=\"form-label\">Multiple files input example</label>
                        <input class=\"form-control\" type=\"file\" id=\"formFileMultiple\" multiple />
                      </div>
                      <div>
                        <label for=\"formFileDisabled\" class=\"form-label\">Disabled file input example</label>
                        <input class=\"form-control\" type=\"file\" id=\"formFileDisabled\" disabled />
                      </div>
                    </div>
                  </div>
                </div>
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

", "form.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\form.html.twig");
    }
}
