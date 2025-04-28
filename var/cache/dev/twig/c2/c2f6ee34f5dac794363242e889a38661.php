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

/* perso/edit.html.twig */
class __TwigTemplate_03b5c5820fb66746e0aaa8ca13f06e30 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "perso/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "perso/edit.html.twig"));

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
    <title>Modifier un Personnel</title>

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
    
    <!-- Page CSS -->
    
    <!-- Helpers -->
    <script src=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/template-customizer.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 44
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
        #image-preview {
            max-width: 200px; 
            display: none; 
            margin-top: 10px;
            border-radius: 4px;
            border: 1px solid #eee;
        }
        .img-thumbnail {
            max-width: 200px;
            margin-top: 10px;
            border-radius: 4px;
        }
        .delete-section {
            border-top: 1px solid rgba(0,0,0,0.08);
            margin-top: 2rem;
            padding-top: 2rem;
        }
        .delete-section .card {
            border-left: 4px solid #ff3e1d;
        }
        .btn-danger {
            transition: all 0.3s ease;
        }
        .btn-danger:hover {
            transform: scale(1.05);
            box-shadow: 0 0 10px rgba(255, 62, 29, 0.5);
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
        // line 479
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
        // line 523
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
        // line 569
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
        // line 615
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
        // line 637
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
        // line 696
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
        // line 705
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
                          <h4 class=\"card-title mb-3\">Modifier le personnel</h4>
                          
                          <!-- Affichage des messages flash -->
                          ";
        // line 803
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 803, $this->source); })()), "flashes", ["error"], "method", false, false, false, 803));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 804
            yield "                              <div class=\"alert alert-danger alert-dismissible fade show mb-4\" role=\"alert\">
                                  <strong>Erreur :</strong> ";
            // line 805
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                              </div>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 809
        yield "                          
                          <!-- Formulaire -->
                          <div class=\"card mb-4\">
                            <div class=\"card-header d-flex justify-content-between align-items-center\">
                              <h5 class=\"mb-0\">Informations du personnel</h5>
                              <small class=\"text-muted float-end\">Mettez à jour les champs nécessaires</small>
                            </div>
                            <div class=\"card-body\">
                              ";
        // line 817
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 817, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal", "novalidate" => "novalidate"]]);
        yield "
                                <div class=\"row mb-3\">
                                  <label class=\"col-sm-2 col-form-label\">Nom</label>
                                  <div class=\"col-sm-10\">
                                    ";
        // line 821
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 821, $this->source); })()), "nomP", [], "any", false, false, false, 821), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez le nom"]]);
        // line 824
        yield "
                                    ";
        // line 825
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 825, $this->source); })()), "nomP", [], "any", false, false, false, 825), 'errors');
        yield "
                                  </div>
                                </div>
                                <div class=\"row mb-3\">
                                  <label class=\"col-sm-2 col-form-label\">Prénom</label>
                                  <div class=\"col-sm-10\">
                                    ";
        // line 831
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 831, $this->source); })()), "prenomP", [], "any", false, false, false, 831), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez le prénom"]]);
        // line 834
        yield "
                                    ";
        // line 835
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 835, $this->source); })()), "prenomP", [], "any", false, false, false, 835), 'errors');
        yield "
                                  </div>
                                </div>
                                <div class=\"row mb-3\">
                                  <label class=\"col-sm-2 col-form-label\">Service</label>
                                  <div class=\"col-sm-10\">
                                    ";
        // line 841
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 841, $this->source); })()), "serviceP", [], "any", false, false, false, 841), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 843
        yield "
                                    ";
        // line 844
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 844, $this->source); })()), "serviceP", [], "any", false, false, false, 844), 'errors');
        yield "
                                  </div>
                                </div>
                                <div class=\"row mb-3\">
                                  <label class=\"col-sm-2 col-form-label\">Statut</label>
                                  <div class=\"col-sm-10\">
                                    ";
        // line 850
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 850, $this->source); })()), "statutP", [], "any", false, false, false, 850));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 851
            yield "                                      <div class=\"form-check form-check-inline\">
                                        ";
            // line 852
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "form-check-input"]]);
            // line 856
            yield "
                                        ";
            // line 857
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["label_attr" => ["class" => "form-check-label"]]);
            // line 861
            yield "
                                      </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 864
        yield "                                    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 864, $this->source); })()), "statutP", [], "any", false, false, false, 864), 'errors');
        yield "
                                  </div>
                                </div>
                                <div class=\"row mb-3\">
                                  <label class=\"col-sm-2 col-form-label\">Image</label>
                                  <div class=\"col-sm-10\">
                                    ";
        // line 870
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 870, $this->source); })()), "imageFile", [], "any", false, false, false, 870), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 872
        yield "
                                    ";
        // line 873
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 873, $this->source); })()), "imageFile", [], "any", false, false, false, 873), 'errors');
        yield "
                                    <small class=\"text-muted\">Formats acceptés: JPG, PNG, GIF. Taille max: 2MB</small>
                                    
                                    <!-- Aperçu de l'image existante -->
                                    ";
        // line 877
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 877, $this->source); })()), "imageUrl", [], "any", false, false, false, 877)) {
            // line 878
            yield "                                      <div class=\"mt-2\">
                                        <img src=\"";
            // line 879
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/personnel_images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["personnel"]) || array_key_exists("personnel", $context) ? $context["personnel"] : (function () { throw new RuntimeError('Variable "personnel" does not exist.', 879, $this->source); })()), "imageUrl", [], "any", false, false, false, 879))), "html", null, true);
            yield "\" 
                                             alt=\"Image actuelle\" 
                                             class=\"img-thumbnail\" />
                                        <div class=\"form-check mt-2\">
                                          <input class=\"form-check-input\" type=\"checkbox\" id=\"remove_image\" name=\"remove_image\">
                                          <label class=\"form-check-label\" for=\"remove_image\">
                                            Supprimer l'image actuelle
                                          </label>
                                        </div>
                                      </div>
                                    ";
        }
        // line 890
        yield "                                    
                                    <!-- Aperçu de la nouvelle image -->
                                    <img id=\"image-preview\" src=\"#\" alt=\"Aperçu de la nouvelle image\" />
                                  </div>
                                </div>
                                <div class=\"row mb-3\">
                                  <label class=\"col-sm-2 col-form-label\">Description</label>
                                  <div class=\"col-sm-10\">
                                    ";
        // line 898
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 898, $this->source); })()), "descriptionP", [], "any", false, false, false, 898), 'widget', ["attr" => ["class" => "form-control", "rows" => "4", "placeholder" => "Décrivez le personnel..."]]);
        // line 902
        yield "
                                    ";
        // line 903
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 903, $this->source); })()), "descriptionP", [], "any", false, false, false, 903), 'errors');
        yield "
                                  </div>
                                </div>
                                <div class=\"row mb-3\">
                                  <label class=\"col-sm-2 col-form-label\">Tarif journalier</label>
                                  <div class=\"col-sm-10\">
                                    <div class=\"input-group input-group-merge\">
                                      ";
        // line 910
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 910, $this->source); })()), "tarifP", [], "any", false, false, false, 910), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "0.00"]]);
        // line 913
        yield "
                                      <span class=\"input-group-text\">TND</span>
                                    </div>
                                    ";
        // line 916
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 916, $this->source); })()), "tarifP", [], "any", false, false, false, 916), 'errors');
        yield "
                                  </div>
                                </div>
                                <div class=\"row justify-content-end\">
                                  <div class=\"col-auto\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                      <i class=\"ti ti-check me-1\"></i> Mettre à jour
                                    </button>
                                    <a href=\"";
        // line 924
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_perso_index");
        yield "\" class=\"btn btn-outline-secondary ms-2\">
                                      <i class=\"ti ti-x me-1\"></i> Annuler
                                    </a>
                                  </div>
                                </div>
                              ";
        // line 929
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 929, $this->source); })()), 'form_end');
        yield "
                            </div>
                          </div>
                          
                          <!-- Section de suppression -->
                          <div class=\"delete-section\">
                            <div class=\"card\">
                              <div class=\"card-body\">
                                <h5 class=\"text-danger\">Supprimer le personnel</h5>
                                <p class=\"text-muted\">Cette action est irréversible. Assurez-vous de vouloir supprimer ce personnel.</p>
                                ";
        // line 939
        yield Twig\Extension\CoreExtension::include($this->env, $context, "perso/_delete_form.html.twig");
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
        // line 1001
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1002
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1003
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>

    <!-- Script pour la gestion des images -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        // Aperçu de l'image lors de la sélection
        document.getElementById('";
        // line 1009
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1009, $this->source); })()), "imageFile", [], "any", false, false, false, 1009), "vars", [], "any", false, false, false, 1009), "id", [], "any", false, false, false, 1009), "html", null, true);
        yield "').addEventListener('change', function(e) {
          if (this.files && this.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
              const imgPreview = document.getElementById('image-preview');
              imgPreview.src = e.target.result;
              imgPreview.style.display = 'block';
            };
            
            reader.readAsDataURL(this.files[0]);
          }
        });
        
        // Désactiver la case à cocher \"Supprimer l'image\" si une nouvelle image est sélectionnée
        document.getElementById('";
        // line 1024
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1024, $this->source); })()), "imageFile", [], "any", false, false, false, 1024), "vars", [], "any", false, false, false, 1024), "id", [], "any", false, false, false, 1024), "html", null, true);
        yield "').addEventListener('change', function() {
          const removeImageCheckbox = document.getElementById('remove_image');
          if (this.files && this.files[0] && removeImageCheckbox) {
            removeImageCheckbox.checked = false;
          }
        });
        
        // Gestion de la suppression d'image
        const removeImageCheckbox = document.getElementById('remove_image');
        if (removeImageCheckbox) {
          removeImageCheckbox.addEventListener('change', function() {
            const fileInput = document.getElementById('";
        // line 1035
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1035, $this->source); })()), "imageFile", [], "any", false, false, false, 1035), "vars", [], "any", false, false, false, 1035), "id", [], "any", false, false, false, 1035), "html", null, true);
        yield "');
            if (this.checked) {
              fileInput.value = '';
              document.getElementById('image-preview').style.display = 'none';
            }
          });
        }
        
        // Fermeture automatique des alertes après 5 secondes
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
          setTimeout(() => {
            alert.classList.add('fade');
            setTimeout(() => alert.remove(), 300);
          }, 5000);
        });
      });
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
        return "perso/edit.html.twig";
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
        return array (  1229 => 1035,  1215 => 1024,  1197 => 1009,  1188 => 1003,  1184 => 1002,  1180 => 1001,  1115 => 939,  1102 => 929,  1094 => 924,  1083 => 916,  1078 => 913,  1076 => 910,  1066 => 903,  1063 => 902,  1061 => 898,  1051 => 890,  1037 => 879,  1034 => 878,  1032 => 877,  1025 => 873,  1022 => 872,  1020 => 870,  1010 => 864,  1002 => 861,  1000 => 857,  997 => 856,  995 => 852,  992 => 851,  988 => 850,  979 => 844,  976 => 843,  974 => 841,  965 => 835,  962 => 834,  960 => 831,  951 => 825,  948 => 824,  946 => 821,  939 => 817,  929 => 809,  919 => 805,  916 => 804,  912 => 803,  811 => 705,  799 => 696,  737 => 637,  712 => 615,  663 => 569,  614 => 523,  567 => 479,  129 => 44,  125 => 43,  121 => 42,  113 => 37,  109 => 36,  103 => 33,  99 => 32,  95 => 31,  89 => 28,  85 => 27,  81 => 26,  70 => 18,  56 => 7,  48 => 1,);
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
    <title>Modifier un Personnel</title>

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
        #image-preview {
            max-width: 200px; 
            display: none; 
            margin-top: 10px;
            border-radius: 4px;
            border: 1px solid #eee;
        }
        .img-thumbnail {
            max-width: 200px;
            margin-top: 10px;
            border-radius: 4px;
        }
        .delete-section {
            border-top: 1px solid rgba(0,0,0,0.08);
            margin-top: 2rem;
            padding-top: 2rem;
        }
        .delete-section .card {
            border-left: 4px solid #ff3e1d;
        }
        .btn-danger {
            transition: all 0.3s ease;
        }
        .btn-danger:hover {
            transform: scale(1.05);
            box-shadow: 0 0 10px rgba(255, 62, 29, 0.5);
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
                          <h4 class=\"card-title mb-3\">Modifier le personnel</h4>
                          
                          <!-- Affichage des messages flash -->
                          {% for message in app.flashes('error') %}
                              <div class=\"alert alert-danger alert-dismissible fade show mb-4\" role=\"alert\">
                                  <strong>Erreur :</strong> {{ message }}
                                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                              </div>
                          {% endfor %}
                          
                          <!-- Formulaire -->
                          <div class=\"card mb-4\">
                            <div class=\"card-header d-flex justify-content-between align-items-center\">
                              <h5 class=\"mb-0\">Informations du personnel</h5>
                              <small class=\"text-muted float-end\">Mettez à jour les champs nécessaires</small>
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
                                <div class=\"row mb-3\">
                                  <label class=\"col-sm-2 col-form-label\">Image</label>
                                  <div class=\"col-sm-10\">
                                    {{ form_widget(form.imageFile, {'attr': {
                                      'class': 'form-control'
                                    }}) }}
                                    {{ form_errors(form.imageFile) }}
                                    <small class=\"text-muted\">Formats acceptés: JPG, PNG, GIF. Taille max: 2MB</small>
                                    
                                    <!-- Aperçu de l'image existante -->
                                    {% if personnel.imageUrl %}
                                      <div class=\"mt-2\">
                                        <img src=\"{{ asset('uploads/personnel_images/' ~ personnel.imageUrl) }}\" 
                                             alt=\"Image actuelle\" 
                                             class=\"img-thumbnail\" />
                                        <div class=\"form-check mt-2\">
                                          <input class=\"form-check-input\" type=\"checkbox\" id=\"remove_image\" name=\"remove_image\">
                                          <label class=\"form-check-label\" for=\"remove_image\">
                                            Supprimer l'image actuelle
                                          </label>
                                        </div>
                                      </div>
                                    {% endif %}
                                    
                                    <!-- Aperçu de la nouvelle image -->
                                    <img id=\"image-preview\" src=\"#\" alt=\"Aperçu de la nouvelle image\" />
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
                                      <i class=\"ti ti-check me-1\"></i> Mettre à jour
                                    </button>
                                    <a href=\"{{ path('app_perso_index') }}\" class=\"btn btn-outline-secondary ms-2\">
                                      <i class=\"ti ti-x me-1\"></i> Annuler
                                    </a>
                                  </div>
                                </div>
                              {{ form_end(form) }}
                            </div>
                          </div>
                          
                          <!-- Section de suppression -->
                          <div class=\"delete-section\">
                            <div class=\"card\">
                              <div class=\"card-body\">
                                <h5 class=\"text-danger\">Supprimer le personnel</h5>
                                <p class=\"text-muted\">Cette action est irréversible. Assurez-vous de vouloir supprimer ce personnel.</p>
                                {{ include('perso/_delete_form.html.twig') }}
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

    <!-- Script pour la gestion des images -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        // Aperçu de l'image lors de la sélection
        document.getElementById('{{ form.imageFile.vars.id }}').addEventListener('change', function(e) {
          if (this.files && this.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
              const imgPreview = document.getElementById('image-preview');
              imgPreview.src = e.target.result;
              imgPreview.style.display = 'block';
            };
            
            reader.readAsDataURL(this.files[0]);
          }
        });
        
        // Désactiver la case à cocher \"Supprimer l'image\" si une nouvelle image est sélectionnée
        document.getElementById('{{ form.imageFile.vars.id }}').addEventListener('change', function() {
          const removeImageCheckbox = document.getElementById('remove_image');
          if (this.files && this.files[0] && removeImageCheckbox) {
            removeImageCheckbox.checked = false;
          }
        });
        
        // Gestion de la suppression d'image
        const removeImageCheckbox = document.getElementById('remove_image');
        if (removeImageCheckbox) {
          removeImageCheckbox.addEventListener('change', function() {
            const fileInput = document.getElementById('{{ form.imageFile.vars.id }}');
            if (this.checked) {
              fileInput.value = '';
              document.getElementById('image-preview').style.display = 'none';
            }
          });
        }
        
        // Fermeture automatique des alertes après 5 secondes
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
          setTimeout(() => {
            alert.classList.add('fade');
            setTimeout(() => alert.remove(), 300);
          }, 5000);
        });
      });
    </script>
  </body>
</html>", "perso/edit.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\perso\\edit.html.twig");
    }
}
