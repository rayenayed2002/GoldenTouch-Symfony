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

/* admin/notifications/index.html.twig */
class __TwigTemplate_fcc45cddf2d3d6f6385b246656557225 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/notifications/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/notifications/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\" class=\"light-style layout-navbar-fixed layout-menu-fixed\" dir=\"ltr\" data-theme=\"theme-default\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>Notifications Management - Admin Dashboard</title>
    <meta name=\"description\" content=\"Manage notifications efficiently\" />
    
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
        .notification-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }
        
        .notification-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .notification-badge {
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
        
        .notification-card:hover .quick-actions {
            bottom: 10px;
            opacity: 1;
        }
        
        .gallery-view .notification-card {
            margin-bottom: 30px;
        }
        
        .view-toggle-btn.active {
            background-color: #7367f0;
            color: white;
        }
        
        .notification-stats {
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
        
        .notification-card:hover .notification-stats {
            opacity: 1;
        }
        
        .table-view {
            display: none;
        }
        
        .gallery-view {
            display: block;
        }
        
        .view-toggle-btn {
            border: 1px solid #7367f0;
            color: #7367f0;
            background: white;
            transition: all 0.3s ease;
        }
        
        .view-toggle-btn:hover {
            background: #7367f0;
            color: white;
        }
    </style>

    <!-- Page CSS -->
    
    <!-- Helpers -->
    <script src=\"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 118
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
                                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z\" fill=\"#7367F0\"/>
                                <path opacity=\"0.06\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z\" fill=\"#161616\"/>
                                <path opacity=\"0.06\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z\" fill=\"#161616\"/>
                                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z\" fill=\"#7367F0\"/>
                            </svg>
                        </span>
                        <span class=\"app-brand-text demo menu-text fw-bold\">Golden Touch</span>
                    </a>

                    <a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto\">
                        <i class=\"ti menu-toggle-icon d-none d-xl-block ti-sm align-middle\"></i>
                        <i class=\"ti ti-x d-block d-xl-none ti-sm align-middle\"></i>
                    </a>
                </div>

                <div class=\"menu-inner-shadow\"></div>

                <ul class=\"menu-inner py-1\">
                    <!-- Dashboards -->
                    <li class=\"menu-item\">
                        <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                            <i class=\"menu-icon tf-icons ti ti-smart-home\"></i>
                            <div data-i18n=\"Dashboards\">Dashboards</div>
                            <div class=\"badge bg-label-primary rounded-pill ms-auto\">3</div>
                        </a>
                        <ul class=\"menu-sub\">
                            <li class=\"menu-item\">
                                <a href=\"index.html\" class=\"menu-link\">
                                    <div data-i18n=\"Analytics\">Analytics</div>
                                </a>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"dashboards-crm.html\" class=\"menu-link\">
                                    <div data-i18n=\"CRM\">CRM</div>
                                </a>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"dashboards-ecommerce.html\" class=\"menu-link\">
                                    <div data-i18n=\"eCommerce\">eCommerce</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Apps & Pages -->
                    <li class=\"menu-header small text-uppercase\">
                        <span class=\"menu-header-text\">Apps &amp; Pages</span>
                    </li>
                    <li class=\"menu-item active open\">
                        <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                            <i class=\"menu-icon tf-icons ti ti-bell\"></i>
                            <div data-i18n=\"Notifications\">Notifications</div>
                        </a>
                        <ul class=\"menu-sub\">
                            <li class=\"menu-item active\">
                                <a href=\"";
        // line 186
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_notifications");
        yield "\" class=\"menu-link\">
                                    <div data-i18n=\"List\">List</div>
                                </a>
                            </li>
                            <li class=\"menu-item\">
                               
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
                                    <span class=\"d-none d-md-inline-block text-muted\">Search (Ctrl+/)</span>
                                </a>
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
                            <!-- Language -->
                            <li class=\"nav-item dropdown-language dropdown me-2 me-xl-0\">
                                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                                    <i class=\"ti ti-language rounded-circle ti-md\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                    <li>
                                        <a class=\"dropdown-item\" href=\"javascript:void(0);\" data-language=\"en\">
                                            <span class=\"align-middle\">English</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"javascript:void(0);\" data-language=\"fr\">
                                            <span class=\"align-middle\">French</span>
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
                                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\">
                                    <i class=\"ti ti-layout-grid-add ti-md\"></i>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-end py-0\">
                                    <div class=\"dropdown-menu-header border-bottom\">
                                        <div class=\"dropdown-header d-flex align-items-center py-3\">
                                            <h5 class=\"text-body mb-0 me-auto\">Shortcuts</h5>
                                            <a href=\"javascript:void(0)\" class=\"dropdown-shortcuts-add text-body\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Add shortcuts\">
                                                <i class=\"ti ti-sm ti-apps\"></i>
                                            </a>
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
                                    </div>
                                </div>
                            </li>
                            <!-- Quick links -->

                            <!-- Notification -->
                            <li class=\"nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1\">
                                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\">
                                    <i class=\"ti ti-bell ti-md\"></i>
                                    <span class=\"badge bg-danger rounded-pill badge-notifications\">5</span>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-end py-0\">
                                    <li class=\"dropdown-menu-header border-bottom\">
                                        <div class=\"dropdown-header d-flex align-items-center py-3\">
                                            <h5 class=\"text-body mb-0 me-auto\">Notification</h5>
                                            <a href=\"javascript:void(0)\" class=\"dropdown-notifications-all text-body\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Mark all as read\">
                                                <i class=\"ti ti-mail-opened fs-4\"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class=\"dropdown-notifications-list scrollable-container\">
                                        <ul class=\"list-group list-group-flush\">
                                            <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                                                <div class=\"d-flex\">
                                                    <div class=\"flex-shrink-0 me-3\">
                                                        <div class=\"avatar\">
                                                            <img src=\"";
        // line 339
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
                                                        <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\">
                                                            <span class=\"badge badge-dot\"></span>
                                                        </a>
                                                        <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\">
                                                            <span class=\"ti ti-x\"></span>
                                                        </a>
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
                                                        <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\">
                                                            <span class=\"badge badge-dot\"></span>
                                                        </a>
                                                        <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\">
                                                            <span class=\"ti ti-x\"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"dropdown-menu-footer border-top\">
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item d-flex justify-content-center text-primary p-2 h-px-40 mb-1 align-items-center\">
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
        // line 394
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
        // line 403
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
                                                <span class=\"flex-shrink-0 badge badge-center rounded-pill bg-label-danger w-px-20 h-px-20\">2</span>
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
                </nav>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y\">
                        <h4 class=\"fw-bold py-3 mb-4\">Notifications Management</h4>

                        <!-- Notifications List -->
                        <div class=\"card\">
                            <div class=\"card-header border-bottom\">
                                <h5 class=\"card-title mb-3\">Notifications</h5>
                                <div class=\"d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0\">
                                    <div class=\"col-md-4 user_role\"></div>
                                    <div class=\"col-md-4 user_plan\"></div>
                                    <div class=\"col-md-4 user_status\"></div>
                                </div>
                            </div>
                            <div class=\"card-datatable table-responsive\">
                                <table class=\"datatables-users table border-top\">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Message</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 503
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 503, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 504
            yield "                                            <tr>
                                                <td>";
            // line 505
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "id", [], "any", false, false, false, 505), "html", null, true);
            yield "</td>
                                                <td>";
            // line 506
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 506), "html", null, true);
            yield "</td>
                                                <td>";
            // line 507
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "statut", [], "any", false, false, false, 507), "html", null, true);
            yield "</td>
                                                <td>";
            // line 508
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "dateCreation", [], "any", false, false, false, 508), "Y-m-d H:i:s"), "html", null, true);
            yield "</td>
                                                <td>
                                                    <div class=\"dropdown\">
                                                        <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                            <i class=\"ti ti-dots-vertical\"></i>
                                                        </button>
                                                        <div class=\"dropdown-menu\">
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0);\">
                                                                <i class=\"ti ti-eye me-1\"></i> View
                                                            </a>
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0);\">
                                                                <i class=\"ti ti-trash me-1\"></i> Delete
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['notification'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 526
        yield "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class=\"content-footer footer bg-footer-theme\">
                        <div class=\"container-xxl\">
                            <div class=\"footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column\">
                                <div>
                                    © 2023, made with ❤️ by <a href=\"https://pixinvent.com\" target=\"_blank\" class=\"fw-semibold\">Pixinvent</a>
                                </div>
                                <div>
                                    <a href=\"https://themeforest.net/licenses/standard\" class=\"footer-link me-4\" target=\"_blank\">License</a>
                                    <a href=\"https://1.envato.market/pixinvent_portfolio\" target=\"_blank\" class=\"footer-link me-4\">More Themes</a>
                                    <a href=\"https://demos.pixinvent.com/vuexy-html-admin-template/documentation/\" target=\"_blank\" class=\"footer-link me-4\">Documentation</a>
                                    <a href=\"https://pixinvent.ticksy.com/\" target=\"_blank\" class=\"footer-link d-none d-sm-inline-block\">Support</a>
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
    <!-- build:js assets/vendor/js/core.js -->
    <script src=\"";
        // line 568
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 569
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 570
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 571
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/notifications/index.html.twig";
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
        return array (  711 => 571,  707 => 570,  703 => 569,  699 => 568,  655 => 526,  631 => 508,  627 => 507,  623 => 506,  619 => 505,  616 => 504,  612 => 503,  509 => 403,  497 => 394,  439 => 339,  283 => 186,  212 => 118,  208 => 117,  122 => 34,  118 => 33,  114 => 32,  110 => 31,  106 => 30,  102 => 29,  98 => 28,  94 => 27,  88 => 24,  84 => 23,  80 => 22,  74 => 19,  70 => 18,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" class=\"light-style layout-navbar-fixed layout-menu-fixed\" dir=\"ltr\" data-theme=\"theme-default\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
    <title>Notifications Management - Admin Dashboard</title>
    <meta name=\"description\" content=\"Manage notifications efficiently\" />
    
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
        .notification-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }
        
        .notification-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .notification-badge {
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
        
        .notification-card:hover .quick-actions {
            bottom: 10px;
            opacity: 1;
        }
        
        .gallery-view .notification-card {
            margin-bottom: 30px;
        }
        
        .view-toggle-btn.active {
            background-color: #7367f0;
            color: white;
        }
        
        .notification-stats {
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
        
        .notification-card:hover .notification-stats {
            opacity: 1;
        }
        
        .table-view {
            display: none;
        }
        
        .gallery-view {
            display: block;
        }
        
        .view-toggle-btn {
            border: 1px solid #7367f0;
            color: #7367f0;
            background: white;
            transition: all 0.3s ease;
        }
        
        .view-toggle-btn:hover {
            background: #7367f0;
            color: white;
        }
    </style>

    <!-- Page CSS -->
    
    <!-- Helpers -->
    <script src=\"{{ asset('vendor/js/helpers.js') }}\"></script>
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
                                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z\" fill=\"#7367F0\"/>
                                <path opacity=\"0.06\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z\" fill=\"#161616\"/>
                                <path opacity=\"0.06\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z\" fill=\"#161616\"/>
                                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z\" fill=\"#7367F0\"/>
                            </svg>
                        </span>
                        <span class=\"app-brand-text demo menu-text fw-bold\">Golden Touch</span>
                    </a>

                    <a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto\">
                        <i class=\"ti menu-toggle-icon d-none d-xl-block ti-sm align-middle\"></i>
                        <i class=\"ti ti-x d-block d-xl-none ti-sm align-middle\"></i>
                    </a>
                </div>

                <div class=\"menu-inner-shadow\"></div>

                <ul class=\"menu-inner py-1\">
                    <!-- Dashboards -->
                    <li class=\"menu-item\">
                        <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                            <i class=\"menu-icon tf-icons ti ti-smart-home\"></i>
                            <div data-i18n=\"Dashboards\">Dashboards</div>
                            <div class=\"badge bg-label-primary rounded-pill ms-auto\">3</div>
                        </a>
                        <ul class=\"menu-sub\">
                            <li class=\"menu-item\">
                                <a href=\"index.html\" class=\"menu-link\">
                                    <div data-i18n=\"Analytics\">Analytics</div>
                                </a>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"dashboards-crm.html\" class=\"menu-link\">
                                    <div data-i18n=\"CRM\">CRM</div>
                                </a>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"dashboards-ecommerce.html\" class=\"menu-link\">
                                    <div data-i18n=\"eCommerce\">eCommerce</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Apps & Pages -->
                    <li class=\"menu-header small text-uppercase\">
                        <span class=\"menu-header-text\">Apps &amp; Pages</span>
                    </li>
                    <li class=\"menu-item active open\">
                        <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                            <i class=\"menu-icon tf-icons ti ti-bell\"></i>
                            <div data-i18n=\"Notifications\">Notifications</div>
                        </a>
                        <ul class=\"menu-sub\">
                            <li class=\"menu-item active\">
                                <a href=\"{{ path('admin_notifications') }}\" class=\"menu-link\">
                                    <div data-i18n=\"List\">List</div>
                                </a>
                            </li>
                            <li class=\"menu-item\">
                               
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
                                    <span class=\"d-none d-md-inline-block text-muted\">Search (Ctrl+/)</span>
                                </a>
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
                            <!-- Language -->
                            <li class=\"nav-item dropdown-language dropdown me-2 me-xl-0\">
                                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                                    <i class=\"ti ti-language rounded-circle ti-md\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                    <li>
                                        <a class=\"dropdown-item\" href=\"javascript:void(0);\" data-language=\"en\">
                                            <span class=\"align-middle\">English</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"javascript:void(0);\" data-language=\"fr\">
                                            <span class=\"align-middle\">French</span>
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
                                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\">
                                    <i class=\"ti ti-layout-grid-add ti-md\"></i>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-end py-0\">
                                    <div class=\"dropdown-menu-header border-bottom\">
                                        <div class=\"dropdown-header d-flex align-items-center py-3\">
                                            <h5 class=\"text-body mb-0 me-auto\">Shortcuts</h5>
                                            <a href=\"javascript:void(0)\" class=\"dropdown-shortcuts-add text-body\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Add shortcuts\">
                                                <i class=\"ti ti-sm ti-apps\"></i>
                                            </a>
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
                                    </div>
                                </div>
                            </li>
                            <!-- Quick links -->

                            <!-- Notification -->
                            <li class=\"nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1\">
                                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\">
                                    <i class=\"ti ti-bell ti-md\"></i>
                                    <span class=\"badge bg-danger rounded-pill badge-notifications\">5</span>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-end py-0\">
                                    <li class=\"dropdown-menu-header border-bottom\">
                                        <div class=\"dropdown-header d-flex align-items-center py-3\">
                                            <h5 class=\"text-body mb-0 me-auto\">Notification</h5>
                                            <a href=\"javascript:void(0)\" class=\"dropdown-notifications-all text-body\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Mark all as read\">
                                                <i class=\"ti ti-mail-opened fs-4\"></i>
                                            </a>
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
                                                        <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\">
                                                            <span class=\"badge badge-dot\"></span>
                                                        </a>
                                                        <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\">
                                                            <span class=\"ti ti-x\"></span>
                                                        </a>
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
                                                        <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\">
                                                            <span class=\"badge badge-dot\"></span>
                                                        </a>
                                                        <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\">
                                                            <span class=\"ti ti-x\"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"dropdown-menu-footer border-top\">
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item d-flex justify-content-center text-primary p-2 h-px-40 mb-1 align-items-center\">
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
                                                <span class=\"flex-shrink-0 badge badge-center rounded-pill bg-label-danger w-px-20 h-px-20\">2</span>
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
                </nav>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y\">
                        <h4 class=\"fw-bold py-3 mb-4\">Notifications Management</h4>

                        <!-- Notifications List -->
                        <div class=\"card\">
                            <div class=\"card-header border-bottom\">
                                <h5 class=\"card-title mb-3\">Notifications</h5>
                                <div class=\"d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0\">
                                    <div class=\"col-md-4 user_role\"></div>
                                    <div class=\"col-md-4 user_plan\"></div>
                                    <div class=\"col-md-4 user_status\"></div>
                                </div>
                            </div>
                            <div class=\"card-datatable table-responsive\">
                                <table class=\"datatables-users table border-top\">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Message</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for notification in notifications %}
                                            <tr>
                                                <td>{{ notification.id }}</td>
                                                <td>{{ notification.message }}</td>
                                                <td>{{ notification.statut }}</td>
                                                <td>{{ notification.dateCreation|date('Y-m-d H:i:s') }}</td>
                                                <td>
                                                    <div class=\"dropdown\">
                                                        <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                            <i class=\"ti ti-dots-vertical\"></i>
                                                        </button>
                                                        <div class=\"dropdown-menu\">
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0);\">
                                                                <i class=\"ti ti-eye me-1\"></i> View
                                                            </a>
                                                            <a class=\"dropdown-item\" href=\"javascript:void(0);\">
                                                                <i class=\"ti ti-trash me-1\"></i> Delete
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class=\"content-footer footer bg-footer-theme\">
                        <div class=\"container-xxl\">
                            <div class=\"footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column\">
                                <div>
                                    © 2023, made with ❤️ by <a href=\"https://pixinvent.com\" target=\"_blank\" class=\"fw-semibold\">Pixinvent</a>
                                </div>
                                <div>
                                    <a href=\"https://themeforest.net/licenses/standard\" class=\"footer-link me-4\" target=\"_blank\">License</a>
                                    <a href=\"https://1.envato.market/pixinvent_portfolio\" target=\"_blank\" class=\"footer-link me-4\">More Themes</a>
                                    <a href=\"https://demos.pixinvent.com/vuexy-html-admin-template/documentation/\" target=\"_blank\" class=\"footer-link me-4\">Documentation</a>
                                    <a href=\"https://pixinvent.ticksy.com/\" target=\"_blank\" class=\"footer-link d-none d-sm-inline-block\">Support</a>
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
    <!-- build:js assets/vendor/js/core.js -->
    <script src=\"{{ asset('vendor/libs/jquery/jquery.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/popper/popper.js') }}\"></script>
    <script src=\"{{ asset('vendor/js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>", "admin/notifications/index.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\admin\\notifications\\index.html.twig");
    }
}
