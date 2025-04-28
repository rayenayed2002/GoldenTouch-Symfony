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

/* perso/new.html.twig */
class __TwigTemplate_04bbb47bbeabdaa98e41dd8233b95610 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "perso/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "perso/new.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html
  lang=\"en\"
  class=\"light-style layout-navbar-fixed layout-menu-fixed\"
  dir=\"ltr\"
  data-theme=\"theme-default\"
  data-assets-path=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        yield "\"
  data-template=\"vertical-menu-template\">
  
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>Ajouter un Personnel</title>

    <meta name=\"description\" content=\"\" />

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/favicon.ico"), "html", null, true);
        yield "\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\" />

    <!-- Icons -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fonts/fontawesome.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fonts/tabler-icons.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fonts/flag-icons.css"), "html", null, true);
        yield "\" />

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/css/rtl/core.css"), "html", null, true);
        yield "\" class=\"template-customizer-core-css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/css/rtl/theme-default.css"), "html", null, true);
        yield "\" class=\"template-customizer-theme-css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/demo.css"), "html", null, true);
        yield "\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/node-waves/node-waves.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/typeahead-js/typeahead.css"), "html", null, true);
        yield "\" />
    
    <!-- Page CSS -->
    
    <!-- Helpers -->
    <script src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/template-customizer.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/config.js"), "html", null, true);
        yield "\"></script>

    <style>
        .card {
            border: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }
        .card-header {
            background-color: #fff;
            border-bottom: 1px solid rgba(0,0,0,0.08);
        }
        .form-control, .form-select {
            border-radius: 6px;
            border: 1px solid #ddd;
            padding: 10px 15px;
            color: #5d596c;
        }
        .form-control:focus, .form-select:focus {
            border-color: #7367F0;
            box-shadow: 0 0 0 3px rgba(115,103,240,0.1);
        }
        .btn-primary {
            background-color: #7367F0;
            border-color: #7367F0;
            padding: 10px 20px;
            font-weight: 500;
        }
        .alert-danger {
            border-left: 4px solid #ff3e1d;
        }
        .ti-loader {
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        #image-preview {
            max-width: 200px; 
            display: none; 
            margin-top: 10px;
            border-radius: 4px;
            border: 1px solid #eee;
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

          <ul class=\"menu-inner py-1\">
            <!-- Packs -->
            <li class=\"menu-item\">
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
            <li class=\"menu-item active\">
              <a href=\"javascript:void(0);\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons ti ti-users\"></i>
                <div data-i18n=\"Personnels\">Personnels</div>
              </a>
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
        // line 467
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
        // line 511
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
        // line 557
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
        // line 603
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
        // line 625
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
        // line 684
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
        // line 693
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

          <!-- Content wrapper -->
          <div class=\"content-wrapper\">
            <!-- Content -->
            <div class=\"container-xxl flex-grow-1 container-p-y\">
              <div class=\"row\">
                <div class=\"col-lg-12 mb-4 order-0\">
                  <div class=\"card\">
                    <div class=\"d-flex align-items-end row\">
                      <div class=\"col-sm-12\">
                        <div class=\"card-body\">
                          <h4 class=\"card-title mb-3\">Ajouter un nouveau personnel</h4>
                          
                          <!-- Affichage des messages flash -->
                          ";
        // line 791
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 791, $this->source); })()), "flashes", ["error"], "method", false, false, false, 791));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 792
            yield "                              <div class=\"alert alert-danger alert-dismissible fade show mb-4\" role=\"alert\">
                                  <strong>Erreur :</strong> ";
            // line 793
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                              </div>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 797
        yield "                          
                          <!-- Section CV -->
                          <div class=\"row mb-3\">
                            <div class=\"col-sm-2\"></div>
                            <div class=\"col-sm-10\">
                              <div class=\"d-flex gap-2 justify-content-end\">
                                <button type=\"button\" class=\"btn btn-primary btn-cv cv-upload-btn\" onclick=\"document.getElementById('cv_upload').click()\">
                                  <i class=\"ti ti-upload me-1\"></i> Télécharger CV
                                </button>
                                <input type=\"file\" id=\"cv_upload\" accept=\".pdf,.docx\" style=\"display: none\">
                                <button type=\"button\" class=\"btn btn-outline-secondary btn-cv\" id=\"analyse_btn\" disabled onclick=\"analyseCV()\">
                                  <i class=\"ti ti-search me-1\"></i> Analyser CV
                                </button>
                              </div>
                              <div class=\"text-end mt-1\">
                                <small class=\"text-muted\">Formats acceptés: PDF, DOCX. Max 5MB</small>
                              </div>

                                      <div id=\"cv-image-container\" class=\"mt-3 text-center\" style=\"display: none;\">
            <h6 class=\"mb-2\">Image extraite du CV</h6>
            <img id=\"cv-extracted-image\" src=\"#\" alt=\"Image extraite du CV\" class=\"img-thumbnail\" style=\"max-width: 200px;\"/>
            <div class=\"mt-2\">
                <button type=\"button\" class=\"btn btn-sm btn-success\" onclick=\"useExtractedImage()\">
                    <i class=\"ti ti-check me-1\"></i> Utiliser cette image
                </button>
                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" onclick=\"discardExtractedImage()\">
                    <i class=\"ti ti-x me-1\"></i> Ignorer
                </button>
            </div>
        </div>
                            </div>
                          </div>
                          
                          <!-- Formulaire -->
                          <div class=\"card mb-4\">
                            <div class=\"card-header d-flex justify-content-between align-items-center\">
                              <h5 class=\"mb-0\">Informations du personnel</h5>
                              <small class=\"text-muted float-end\">Remplissez tous les champs</small>
                            </div>
                            <div class=\"card-body\">
                              ";
        // line 837
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 837, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal", "novalidate" => "novalidate"]]);
        yield "
                                <div class=\"row mb-3\">
                                  <label class=\"col-sm-2 col-form-label\">Nom</label>
                                  <div class=\"col-sm-10\">
                                    ";
        // line 841
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 841, $this->source); })()), "nomP", [], "any", false, false, false, 841), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez le nom"]]);
        // line 844
        yield "
                                    ";
        // line 845
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 845, $this->source); })()), "nomP", [], "any", false, false, false, 845), 'errors');
        yield "
                                  </div>
                                </div>
                                <div class=\"row mb-3\">
                                  <label class=\"col-sm-2 col-form-label\">Prénom</label>
                                  <div class=\"col-sm-10\">
                                    ";
        // line 851
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 851, $this->source); })()), "prenomP", [], "any", false, false, false, 851), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez le prénom"]]);
        // line 854
        yield "
                                    ";
        // line 855
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 855, $this->source); })()), "prenomP", [], "any", false, false, false, 855), 'errors');
        yield "
                                  </div>
                                </div>
                                <div class=\"row mb-3\">
                                  <label class=\"col-sm-2 col-form-label\">Service</label>
                                  <div class=\"col-sm-10\">
                                    ";
        // line 861
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 861, $this->source); })()), "serviceP", [], "any", false, false, false, 861), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 863
        yield "
                                    ";
        // line 864
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 864, $this->source); })()), "serviceP", [], "any", false, false, false, 864), 'errors');
        yield "
                                  </div>
                                </div>
                                <div class=\"row mb-3\">
                                  <label class=\"col-sm-2 col-form-label\">Statut</label>
                                  <div class=\"col-sm-10\">
                                    ";
        // line 870
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 870, $this->source); })()), "statutP", [], "any", false, false, false, 870));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 871
            yield "                                      <div class=\"form-check form-check-inline\">
                                        ";
            // line 872
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "form-check-input"]]);
            // line 876
            yield "
                                        ";
            // line 877
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["label_attr" => ["class" => "form-check-label"]]);
            // line 881
            yield "
                                      </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 884
        yield "                                    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 884, $this->source); })()), "statutP", [], "any", false, false, false, 884), 'errors');
        yield "
                                  </div>
                                </div>
<!-- Dans votre template new.html.twig -->
<div class=\"row mb-3\">
    <label class=\"col-sm-2 col-form-label\">Image</label>
    <div class=\"col-sm-10\">
        ";
        // line 891
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 891, $this->source); })()), "imageFile", [], "any", false, false, false, 891), 'widget', ["attr" => ["class" => "form-control", "id" => "personnel_image"]]);
        // line 894
        yield "
        ";
        // line 895
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 895, $this->source); })()), "imageFile", [], "any", false, false, false, 895), 'errors');
        yield "
        <small class=\"text-muted\">Formats acceptés: JPG, PNG, GIF. Taille max: 2MB</small>
        <div id=\"image-container\" class=\"mt-2\">
            <img id=\"image-preview\" src=\"#\" alt=\"Aperçu de l'image\" class=\"img-thumbnail\" style=\"max-width: 200px; display: none;\"/>
        </div>
    </div>
</div>
                                <div class=\"row mb-3\">
                                  <label class=\"col-sm-2 col-form-label\">Description</label>
                                  <div class=\"col-sm-10\">
                                    ";
        // line 905
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 905, $this->source); })()), "descriptionP", [], "any", false, false, false, 905), 'widget', ["attr" => ["class" => "form-control", "rows" => "4", "placeholder" => "Décrivez le personnel..."]]);
        // line 909
        yield "
                                    ";
        // line 910
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 910, $this->source); })()), "descriptionP", [], "any", false, false, false, 910), 'errors');
        yield "
                                  </div>
                                </div>
                                <div class=\"row mb-3\">
                                  <label class=\"col-sm-2 col-form-label\">Tarif journalier</label>
                                  <div class=\"col-sm-10\">
                                    <div class=\"input-group input-group-merge\">
                                      ";
        // line 917
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 917, $this->source); })()), "tarifP", [], "any", false, false, false, 917), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "0.00"]]);
        // line 920
        yield "
                                      <span class=\"input-group-text\">TND</span>
                                    </div>
                                    ";
        // line 923
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 923, $this->source); })()), "tarifP", [], "any", false, false, false, 923), 'errors');
        yield "
                                  </div>
                                </div>
                                <div class=\"row justify-content-end\">
                                  <div class=\"col-auto\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                      <i class=\"ti ti-check me-1\"></i> Enregistrer
                                    </button>
                                    <a href=\"";
        // line 931
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_perso_index");
        yield "\" class=\"btn btn-outline-secondary ms-2\">
                                      <i class=\"ti ti-x me-1\"></i> Annuler
                                    </a>
                                  </div>
                                </div>
                              ";
        // line 936
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 936, $this->source); })()), 'form_end');
        yield "
                            </div>
                          </div>
                        </div>
                      </div>
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
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href=\"https://themeselection.com\" target=\"_blank\" class=\"footer-link fw-bolder\">ThemeSelection</a>
                </div>
                <div>
                  <a href=\"https://themeselection.com/license/\" class=\"footer-link me-4\" target=\"_blank\">License</a>
                  <a href=\"https://themeselection.com/\" target=\"_blank\" class=\"footer-link me-4\">More Themes</a>

                  <a
                    href=\"https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/\"
                    target=\"_blank\"
                    class=\"footer-link me-4\"
                    >Documentation</a
                  >

                  <a
                    href=\"https://github.com/themeselection/sneat-html-admin-template-free/issues\"
                    target=\"_blank\"
                    class=\"footer-link me-4\"
                    >Support</a
                  >
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
        // line 997
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 998
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 999
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>

    <!-- Script pour la gestion du CV et des messages -->
<script>
  // Déplacez cette variable dans la portée globale
  let selectedCVFile = null;
  
  document.addEventListener('DOMContentLoaded', function() {
    // Gestion du téléchargement du CV
    document.getElementById('cv_upload').addEventListener('change', function(e) {
      if (this.files && this.files[0]) {
        const file = this.files[0];
        const fileSize = file.size / 1024 / 1024; // en MB
        const allowedTypes = ['application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        
        if (!allowedTypes.includes(file.type)) {
          alert('Seuls les fichiers PDF et DOCX sont acceptés');
          return;
        }

        if (fileSize > 5) {
          alert('Le fichier est trop volumineux (max 5MB)');
          return;
        }

        selectedCVFile = file;
        document.getElementById('analyse_btn').disabled = false;
        alert('CV téléchargé avec succès: ' + file.name);
      }
    });

    // Fermeture automatique des alertes après 5 secondes
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(alert => {
      setTimeout(() => {
        alert.classList.add('fade');
        setTimeout(() => alert.remove(), 300);
      }, 5000);
    });
  });

  function dataURLtoBlob(dataURL) {
    const arr = dataURL.split(',');
    const mime = arr[0].match(/:(.*?);/)[1];
    const bstr = atob(arr[1]);
    let n = bstr.length;
    const u8arr = new Uint8Array(n);
    
    while (n--) {
      u8arr[n] = bstr.charCodeAt(n);
    }
    
    return new Blob([u8arr], {type: mime});
  }

function analyseCV() {
    if (!selectedCVFile) {
        alert('Veuillez d\\'abord télécharger un CV');
        return;
    }

    const formData = new FormData();
    formData.append('cv', selectedCVFile);

    const analyseBtn = document.getElementById('analyse_btn');
    analyseBtn.disabled = true;
    analyseBtn.innerHTML = '<i class=\"ti ti-loader me-1\"></i> Analyse en cours...';

    fetch('";
        // line 1067
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_analyse_cv");
        yield "', {
        method: 'POST',
        body: formData,
        headers: {
            'Accept': 'application/json'
        }
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Erreur réseau');
        }
        return response.json();
    })
    .then(data => {
        if (data.success) {
            // Remplir les champs textuels
            if (data.nom) document.querySelector('[name=\"";
        // line 1083
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1083, $this->source); })()), "nomP", [], "any", false, false, false, 1083), "vars", [], "any", false, false, false, 1083), "full_name", [], "any", false, false, false, 1083), "html", null, true);
        yield "\"]').value = data.nom;
            if (data.prenom) document.querySelector('[name=\"";
        // line 1084
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1084, $this->source); })()), "prenomP", [], "any", false, false, false, 1084), "vars", [], "any", false, false, false, 1084), "full_name", [], "any", false, false, false, 1084), "html", null, true);
        yield "\"]').value = data.prenom;
            if (data.service) document.querySelector('[name=\"";
        // line 1085
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1085, $this->source); })()), "serviceP", [], "any", false, false, false, 1085), "vars", [], "any", false, false, false, 1085), "full_name", [], "any", false, false, false, 1085), "html", null, true);
        yield "\"]').value = data.service;
            if (data.description) document.querySelector('[name=\"";
        // line 1086
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1086, $this->source); })()), "descriptionP", [], "any", false, false, false, 1086), "vars", [], "any", false, false, false, 1086), "full_name", [], "any", false, false, false, 1086), "html", null, true);
        yield "\"]').value = data.description;
            
            // Gestion de l'image extraite
            if (data.image && data.image_found) {
                const cvImageContainer = document.getElementById('cv-image-container');
                const cvExtractedImage = document.getElementById('cv-extracted-image');
                
                cvExtractedImage.src = 'data:' + data.image.mime_type + ';base64,' + data.image.content;
                cvImageContainer.style.display = 'block';
                
                alert('CV analysé avec succès! Une image a été trouvée dans le CV.');
            } else {
                alert('CV analysé avec succès! Aucune image trouvée dans le CV.');
            }
        } else {
            throw new Error(data.message || 'Erreur lors de l\\'analyse du CV');
        }
    })
    .catch(error => {
        console.error('Erreur:', error);
        alert('Erreur: ' + error.message);
    })
    .finally(() => {
        analyseBtn.disabled = false;
        analyseBtn.innerHTML = '<i class=\"ti ti-search me-1\"></i> Analyser CV';
    });
}

// Fonction pour utiliser l'image extraite
function useExtractedImage() {
    const cvExtractedImage = document.getElementById('cv-extracted-image');
    const imgPreview = document.getElementById('image-preview');
    
    // Convertir l'image en fichier
    fetch(cvExtractedImage.src)
        .then(res => res.blob())
        .then(blob => {
            const file = new File([blob], 'photo_cv.jpg', {type: blob.type});
            
            // Mettre à jour l'input file
            const dataTransfer = new DataTransfer();
            dataTransfer.items.add(file);
            document.getElementById('personnel_image').files = dataTransfer.files;
            
            // Afficher l'aperçu
            imgPreview.src = cvExtractedImage.src;
            imgPreview.style.display = 'block';
            
            // Masquer le conteneur d'image extraite
            document.getElementById('cv-image-container').style.display = 'none';
            
            alert('Image appliquée avec succès!');
        });
}

// Fonction pour ignorer l'image extraite
function discardExtractedImage() {
    document.getElementById('cv-image-container').style.display = 'none';
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
        return "perso/new.html.twig";
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
        return array (  1277 => 1086,  1273 => 1085,  1269 => 1084,  1265 => 1083,  1246 => 1067,  1175 => 999,  1171 => 998,  1167 => 997,  1103 => 936,  1095 => 931,  1084 => 923,  1079 => 920,  1077 => 917,  1067 => 910,  1064 => 909,  1062 => 905,  1049 => 895,  1046 => 894,  1044 => 891,  1033 => 884,  1025 => 881,  1023 => 877,  1020 => 876,  1018 => 872,  1015 => 871,  1011 => 870,  1002 => 864,  999 => 863,  997 => 861,  988 => 855,  985 => 854,  983 => 851,  974 => 845,  971 => 844,  969 => 841,  962 => 837,  920 => 797,  910 => 793,  907 => 792,  903 => 791,  802 => 693,  790 => 684,  728 => 625,  703 => 603,  654 => 557,  605 => 511,  558 => 467,  133 => 45,  129 => 44,  125 => 43,  117 => 38,  113 => 37,  109 => 36,  103 => 33,  99 => 32,  95 => 31,  89 => 28,  85 => 27,  81 => 26,  70 => 18,  56 => 7,  48 => 1,);
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
    <title>Ajouter un Personnel</title>

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
    
    <!-- Page CSS -->
    
    <!-- Helpers -->
    <script src=\"{{ asset('vendor/js/helpers.js') }}\"></script>
    <script src=\"{{ asset('vendor/js/template-customizer.js') }}\"></script>
    <script src=\"{{ asset('js/config.js') }}\"></script>

    <style>
        .card {
            border: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }
        .card-header {
            background-color: #fff;
            border-bottom: 1px solid rgba(0,0,0,0.08);
        }
        .form-control, .form-select {
            border-radius: 6px;
            border: 1px solid #ddd;
            padding: 10px 15px;
            color: #5d596c;
        }
        .form-control:focus, .form-select:focus {
            border-color: #7367F0;
            box-shadow: 0 0 0 3px rgba(115,103,240,0.1);
        }
        .btn-primary {
            background-color: #7367F0;
            border-color: #7367F0;
            padding: 10px 20px;
            font-weight: 500;
        }
        .alert-danger {
            border-left: 4px solid #ff3e1d;
        }
        .ti-loader {
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        #image-preview {
            max-width: 200px; 
            display: none; 
            margin-top: 10px;
            border-radius: 4px;
            border: 1px solid #eee;
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

          <ul class=\"menu-inner py-1\">
            <!-- Packs -->
            <li class=\"menu-item\">
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
            <li class=\"menu-item active\">
              <a href=\"javascript:void(0);\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons ti ti-users\"></i>
                <div data-i18n=\"Personnels\">Personnels</div>
              </a>
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

          <!-- Content wrapper -->
          <div class=\"content-wrapper\">
            <!-- Content -->
            <div class=\"container-xxl flex-grow-1 container-p-y\">
              <div class=\"row\">
                <div class=\"col-lg-12 mb-4 order-0\">
                  <div class=\"card\">
                    <div class=\"d-flex align-items-end row\">
                      <div class=\"col-sm-12\">
                        <div class=\"card-body\">
                          <h4 class=\"card-title mb-3\">Ajouter un nouveau personnel</h4>
                          
                          <!-- Affichage des messages flash -->
                          {% for message in app.flashes('error') %}
                              <div class=\"alert alert-danger alert-dismissible fade show mb-4\" role=\"alert\">
                                  <strong>Erreur :</strong> {{ message }}
                                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                              </div>
                          {% endfor %}
                          
                          <!-- Section CV -->
                          <div class=\"row mb-3\">
                            <div class=\"col-sm-2\"></div>
                            <div class=\"col-sm-10\">
                              <div class=\"d-flex gap-2 justify-content-end\">
                                <button type=\"button\" class=\"btn btn-primary btn-cv cv-upload-btn\" onclick=\"document.getElementById('cv_upload').click()\">
                                  <i class=\"ti ti-upload me-1\"></i> Télécharger CV
                                </button>
                                <input type=\"file\" id=\"cv_upload\" accept=\".pdf,.docx\" style=\"display: none\">
                                <button type=\"button\" class=\"btn btn-outline-secondary btn-cv\" id=\"analyse_btn\" disabled onclick=\"analyseCV()\">
                                  <i class=\"ti ti-search me-1\"></i> Analyser CV
                                </button>
                              </div>
                              <div class=\"text-end mt-1\">
                                <small class=\"text-muted\">Formats acceptés: PDF, DOCX. Max 5MB</small>
                              </div>

                                      <div id=\"cv-image-container\" class=\"mt-3 text-center\" style=\"display: none;\">
            <h6 class=\"mb-2\">Image extraite du CV</h6>
            <img id=\"cv-extracted-image\" src=\"#\" alt=\"Image extraite du CV\" class=\"img-thumbnail\" style=\"max-width: 200px;\"/>
            <div class=\"mt-2\">
                <button type=\"button\" class=\"btn btn-sm btn-success\" onclick=\"useExtractedImage()\">
                    <i class=\"ti ti-check me-1\"></i> Utiliser cette image
                </button>
                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" onclick=\"discardExtractedImage()\">
                    <i class=\"ti ti-x me-1\"></i> Ignorer
                </button>
            </div>
        </div>
                            </div>
                          </div>
                          
                          <!-- Formulaire -->
                          <div class=\"card mb-4\">
                            <div class=\"card-header d-flex justify-content-between align-items-center\">
                              <h5 class=\"mb-0\">Informations du personnel</h5>
                              <small class=\"text-muted float-end\">Remplissez tous les champs</small>
                            </div>
                            <div class=\"card-body\">
                              {{ form_start(form, {'attr': {'class': 'form-horizontal', 'novalidate': 'novalidate'}}) }}
                                <div class=\"row mb-3\">
                                  <label class=\"col-sm-2 col-form-label\">Nom</label>
                                  <div class=\"col-sm-10\">
                                    {{ form_widget(form.nomP, {'attr': {
                                      'class': 'form-control', 
                                      'placeholder': 'Entrez le nom'
                                    }}) }}
                                    {{ form_errors(form.nomP) }}
                                  </div>
                                </div>
                                <div class=\"row mb-3\">
                                  <label class=\"col-sm-2 col-form-label\">Prénom</label>
                                  <div class=\"col-sm-10\">
                                    {{ form_widget(form.prenomP, {'attr': {
                                      'class': 'form-control', 
                                      'placeholder': 'Entrez le prénom'
                                    }}) }}
                                    {{ form_errors(form.prenomP) }}
                                  </div>
                                </div>
                                <div class=\"row mb-3\">
                                  <label class=\"col-sm-2 col-form-label\">Service</label>
                                  <div class=\"col-sm-10\">
                                    {{ form_widget(form.serviceP, {'attr': {
                                      'class': 'form-select'
                                    }}) }}
                                    {{ form_errors(form.serviceP) }}
                                  </div>
                                </div>
                                <div class=\"row mb-3\">
                                  <label class=\"col-sm-2 col-form-label\">Statut</label>
                                  <div class=\"col-sm-10\">
                                    {% for child in form.statutP %}
                                      <div class=\"form-check form-check-inline\">
                                        {{ form_widget(child, {
                                          'attr': {
                                            'class': 'form-check-input',
                                          }
                                        }) }}
                                        {{ form_label(child, null, {
                                          'label_attr': {
                                            'class': 'form-check-label'
                                          }
                                        }) }}
                                      </div>
                                    {% endfor %}
                                    {{ form_errors(form.statutP) }}
                                  </div>
                                </div>
<!-- Dans votre template new.html.twig -->
<div class=\"row mb-3\">
    <label class=\"col-sm-2 col-form-label\">Image</label>
    <div class=\"col-sm-10\">
        {{ form_widget(form.imageFile, {'attr': {
            'class': 'form-control',
            'id': 'personnel_image'
        }}) }}
        {{ form_errors(form.imageFile) }}
        <small class=\"text-muted\">Formats acceptés: JPG, PNG, GIF. Taille max: 2MB</small>
        <div id=\"image-container\" class=\"mt-2\">
            <img id=\"image-preview\" src=\"#\" alt=\"Aperçu de l'image\" class=\"img-thumbnail\" style=\"max-width: 200px; display: none;\"/>
        </div>
    </div>
</div>
                                <div class=\"row mb-3\">
                                  <label class=\"col-sm-2 col-form-label\">Description</label>
                                  <div class=\"col-sm-10\">
                                    {{ form_widget(form.descriptionP, {'attr': {
                                      'class': 'form-control', 
                                      'rows': '4', 
                                      'placeholder': 'Décrivez le personnel...'
                                    }}) }}
                                    {{ form_errors(form.descriptionP) }}
                                  </div>
                                </div>
                                <div class=\"row mb-3\">
                                  <label class=\"col-sm-2 col-form-label\">Tarif journalier</label>
                                  <div class=\"col-sm-10\">
                                    <div class=\"input-group input-group-merge\">
                                      {{ form_widget(form.tarifP, {'attr': {
                                        'class': 'form-control', 
                                        'placeholder': '0.00'
                                      }}) }}
                                      <span class=\"input-group-text\">TND</span>
                                    </div>
                                    {{ form_errors(form.tarifP) }}
                                  </div>
                                </div>
                                <div class=\"row justify-content-end\">
                                  <div class=\"col-auto\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                      <i class=\"ti ti-check me-1\"></i> Enregistrer
                                    </button>
                                    <a href=\"{{ path('app_perso_index') }}\" class=\"btn btn-outline-secondary ms-2\">
                                      <i class=\"ti ti-x me-1\"></i> Annuler
                                    </a>
                                  </div>
                                </div>
                              {{ form_end(form) }}
                            </div>
                          </div>
                        </div>
                      </div>
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
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href=\"https://themeselection.com\" target=\"_blank\" class=\"footer-link fw-bolder\">ThemeSelection</a>
                </div>
                <div>
                  <a href=\"https://themeselection.com/license/\" class=\"footer-link me-4\" target=\"_blank\">License</a>
                  <a href=\"https://themeselection.com/\" target=\"_blank\" class=\"footer-link me-4\">More Themes</a>

                  <a
                    href=\"https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/\"
                    target=\"_blank\"
                    class=\"footer-link me-4\"
                    >Documentation</a
                  >

                  <a
                    href=\"https://github.com/themeselection/sneat-html-admin-template-free/issues\"
                    target=\"_blank\"
                    class=\"footer-link me-4\"
                    >Support</a
                  >
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
    <script src=\"{{ asset('/vendor/js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>

    <!-- Script pour la gestion du CV et des messages -->
<script>
  // Déplacez cette variable dans la portée globale
  let selectedCVFile = null;
  
  document.addEventListener('DOMContentLoaded', function() {
    // Gestion du téléchargement du CV
    document.getElementById('cv_upload').addEventListener('change', function(e) {
      if (this.files && this.files[0]) {
        const file = this.files[0];
        const fileSize = file.size / 1024 / 1024; // en MB
        const allowedTypes = ['application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        
        if (!allowedTypes.includes(file.type)) {
          alert('Seuls les fichiers PDF et DOCX sont acceptés');
          return;
        }

        if (fileSize > 5) {
          alert('Le fichier est trop volumineux (max 5MB)');
          return;
        }

        selectedCVFile = file;
        document.getElementById('analyse_btn').disabled = false;
        alert('CV téléchargé avec succès: ' + file.name);
      }
    });

    // Fermeture automatique des alertes après 5 secondes
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(alert => {
      setTimeout(() => {
        alert.classList.add('fade');
        setTimeout(() => alert.remove(), 300);
      }, 5000);
    });
  });

  function dataURLtoBlob(dataURL) {
    const arr = dataURL.split(',');
    const mime = arr[0].match(/:(.*?);/)[1];
    const bstr = atob(arr[1]);
    let n = bstr.length;
    const u8arr = new Uint8Array(n);
    
    while (n--) {
      u8arr[n] = bstr.charCodeAt(n);
    }
    
    return new Blob([u8arr], {type: mime});
  }

function analyseCV() {
    if (!selectedCVFile) {
        alert('Veuillez d\\'abord télécharger un CV');
        return;
    }

    const formData = new FormData();
    formData.append('cv', selectedCVFile);

    const analyseBtn = document.getElementById('analyse_btn');
    analyseBtn.disabled = true;
    analyseBtn.innerHTML = '<i class=\"ti ti-loader me-1\"></i> Analyse en cours...';

    fetch('{{ path('app_analyse_cv') }}', {
        method: 'POST',
        body: formData,
        headers: {
            'Accept': 'application/json'
        }
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Erreur réseau');
        }
        return response.json();
    })
    .then(data => {
        if (data.success) {
            // Remplir les champs textuels
            if (data.nom) document.querySelector('[name=\"{{ form.nomP.vars.full_name }}\"]').value = data.nom;
            if (data.prenom) document.querySelector('[name=\"{{ form.prenomP.vars.full_name }}\"]').value = data.prenom;
            if (data.service) document.querySelector('[name=\"{{ form.serviceP.vars.full_name }}\"]').value = data.service;
            if (data.description) document.querySelector('[name=\"{{ form.descriptionP.vars.full_name }}\"]').value = data.description;
            
            // Gestion de l'image extraite
            if (data.image && data.image_found) {
                const cvImageContainer = document.getElementById('cv-image-container');
                const cvExtractedImage = document.getElementById('cv-extracted-image');
                
                cvExtractedImage.src = 'data:' + data.image.mime_type + ';base64,' + data.image.content;
                cvImageContainer.style.display = 'block';
                
                alert('CV analysé avec succès! Une image a été trouvée dans le CV.');
            } else {
                alert('CV analysé avec succès! Aucune image trouvée dans le CV.');
            }
        } else {
            throw new Error(data.message || 'Erreur lors de l\\'analyse du CV');
        }
    })
    .catch(error => {
        console.error('Erreur:', error);
        alert('Erreur: ' + error.message);
    })
    .finally(() => {
        analyseBtn.disabled = false;
        analyseBtn.innerHTML = '<i class=\"ti ti-search me-1\"></i> Analyser CV';
    });
}

// Fonction pour utiliser l'image extraite
function useExtractedImage() {
    const cvExtractedImage = document.getElementById('cv-extracted-image');
    const imgPreview = document.getElementById('image-preview');
    
    // Convertir l'image en fichier
    fetch(cvExtractedImage.src)
        .then(res => res.blob())
        .then(blob => {
            const file = new File([blob], 'photo_cv.jpg', {type: blob.type});
            
            // Mettre à jour l'input file
            const dataTransfer = new DataTransfer();
            dataTransfer.items.add(file);
            document.getElementById('personnel_image').files = dataTransfer.files;
            
            // Afficher l'aperçu
            imgPreview.src = cvExtractedImage.src;
            imgPreview.style.display = 'block';
            
            // Masquer le conteneur d'image extraite
            document.getElementById('cv-image-container').style.display = 'none';
            
            alert('Image appliquée avec succès!');
        });
}

// Fonction pour ignorer l'image extraite
function discardExtractedImage() {
    document.getElementById('cv-image-container').style.display = 'none';
}
</script>
  </body>
</html>", "perso/new.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\perso\\new.html.twig");
    }
}
