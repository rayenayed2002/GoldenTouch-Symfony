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

/* GestionEvent/Invoice.html.twig */
class __TwigTemplate_353b3ecbeed935a78724a7a474f4b749 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionEvent/Invoice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionEvent/Invoice.html.twig"));

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

    <style>
    @media print {
        .no-print {
            display: none !important;
        }
    }
</style>
</head>

  <body class=\"layout-page\">

     <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <div class=\"row invoice-preview\">
                <!-- Invoice -->
                <div class=\"col-xl-9 col-md-8 col-12 mb-md-0 mb-4\">
                    <div class=\"card invoice-preview-card\">
                        <div class=\"card-body\">
                            <div class=\"d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column m-sm-3 m-0\">
                                <div class=\"mb-xl-0 mb-4\">
                                    <div class=\"d-flex svg-illustration mb-4 gap-2 align-items-center\">
                                        <!-- Your logo here -->
                                        <span class=\"app-brand-text fw-bold fs-4\">EventHub</span>
                                    </div>
                                    <p class=\"mb-2\">Event Ticketing Platform</p>
                                    <p class=\"mb-0\">contact@eventhub.com</p>
                                </div>
                                <div>
                                    <h4 class=\"fw-semibold mb-2\">INVOICE #";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84), "html", null, true);
        yield "</h4>
                                    <div class=\"mb-2 pt-1\">
                                        <span>Date Issued:</span>
                                        <span class=\"fw-semibold\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 87, $this->source); })()), "createdAt", [], "any", false, false, false, 87), "F d, Y"), "html", null, true);
        yield "</span>
                                    </div>
                                    <div class=\"pt-1\">
                                        <span>Payment Status:</span>
                                        <span class=\"badge bg-success\">Paid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class=\"my-0\" />
                        <div class=\"card-body\">
                            <div class=\"row p-sm-3 p-0\">
                                <div class=\"col-xl-6 col-md-12 col-sm-5 col-12 mb-xl-0 mb-md-4 mb-sm-0 mb-4\">
                                    <h6 class=\"mb-3\">Invoice To:</h6>
                                    <p class=\"mb-1\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101), "getPrenom", [], "method", false, false, false, 101), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101), "getNom", [], "method", false, false, false, 101), "html", null, true);
        yield "</p>
                                    <p class=\"mb-1\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "getEmail", [], "method", false, false, false, 102), "html", null, true);
        yield "</p>
                                    ";
        // line 103
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "getNumTel", [], "method", false, false, false, 103)) {
            // line 104
            yield "                                    <p class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "getNumTel", [], "method", false, false, false, 104), "html", null, true);
            yield "</p>
                                    ";
        }
        // line 106
        yield "                                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), "getAddress", [], "method", false, false, false, 106)) {
            // line 107
            yield "                                    <p class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107), "getAddress", [], "method", false, false, false, 107), "html", null, true);
            yield "</p>
                                    ";
        }
        // line 109
        yield "                                </div>
                                <div class=\"col-xl-6 col-md-12 col-sm-7 col-12\">
                                    <h6 class=\"mb-4\">Payment Details:</h6>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class=\"pe-4\">Total Amount:</td>
                                                <td><strong>";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 116, $this->source); })()), "amount", [], "any", false, false, false, 116), "html", null, true);
        yield " €</strong></td>
                                            </tr>
                                            <tr>
                                                <td class=\"pe-4\">Payment Method:</td>
                                                <td>";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 120, $this->source); })()), "paymentMethod", [], "any", false, false, false, 120)), "html", null, true);
        yield "</td>
                                            </tr>
                                            <tr>
                                                <td class=\"pe-4\">Transaction Date:</td>
                                                <td>";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 124, $this->source); })()), "createdAt", [], "any", false, false, false, 124), "Y-m-d H:i"), "html", null, true);
        yield "</td>
                                            </tr>
                                            <tr>
                                                <td class=\"pe-4\">Transaction ID:</td>
                                                <td>#";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 128, $this->source); })()), "id", [], "any", false, false, false, 128), "html", null, true);
        yield "</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class=\"table-responsive border-top\">
                            <table class=\"table m-0\">
                                <thead>
                                    <tr>
                                        <th>Event</th>
                                        <th>Date</th>
                                        <th>Category</th>
                                        <th>Unit Price</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 148, $this->source); })()), "details", [], "any", false, false, false, 148));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 149
            yield "                                    <tr>
                                        <td class=\"text-nowrap\">
                                            <div class=\"d-flex align-items-center\">
                                                ";
            // line 152
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "event", [], "any", false, false, false, 152), "getPhoto", [], "method", false, false, false, 152)) {
                // line 153
                yield "                                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "event", [], "any", false, false, false, 153), "getPhoto", [], "method", false, false, false, 153))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "event", [], "any", false, false, false, 153), "getNom", [], "method", false, false, false, 153), "html", null, true);
                yield "\" width=\"40\" height=\"40\" class=\"rounded me-2\">
                                                ";
            }
            // line 155
            yield "                                                <span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "event", [], "any", false, false, false, 155), "getNom", [], "method", false, false, false, 155), "html", null, true);
            yield "</span>
                                            </div>
                                        </td>
                                        <td>";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "event", [], "any", false, false, false, 158), "getDate", [], "method", false, false, false, 158), "Y-m-d"), "html", null, true);
            yield "</td>
<td>";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "event", [], "any", false, false, false, 159), "getCategorie", [], "method", false, false, false, 159), "value", [], "any", false, false, false, 159), "html", null, true);
            yield "</td>
                                        <td>";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "getPrice", [], "method", false, false, false, 160), "html", null, true);
            yield " €</td>
                                        <td>1</td>
                                        <td>";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "getPrice", [], "method", false, false, false, 162), "html", null, true);
            yield " €</td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['detail'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        yield "                                    <tr>
                                        <td colspan=\"4\" class=\"align-top px-4 py-4\">
                                            <p class=\"mb-2 mt-3\">
                                                <span class=\"ms-3 fw-semibold\">Payment Method:</span>
                                                <span>";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 169, $this->source); })()), "paymentMethod", [], "any", false, false, false, 169)), "html", null, true);
        yield "</span>
                                            </p>
                                            <span class=\"ms-3\">Thank you for your purchase!</span>
                                        </td>
                                        <td class=\"text-end pe-3 py-4\">
                                            <p class=\"mb-2 pt-3\">Subtotal:</p>
                                            <p class=\"mb-2\">Tax:</p>
                                            <p class=\"mb-0 pb-3 fw-semibold\">Total:</p>
                                        </td>
                                        <td class=\"ps-2 py-4\">
                                            <p class=\"fw-semibold mb-2 pt-3\">";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 179, $this->source); })()), "amount", [], "any", false, false, false, 179), "html", null, true);
        yield " €</p>
                                            <p class=\"fw-semibold mb-2\">0.00 €</p>
                                            <p class=\"fw-semibold mb-0 pb-3\">";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 181, $this->source); })()), "amount", [], "any", false, false, false, 181), "html", null, true);
        yield " €</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class=\"card-body mx-3\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <span class=\"fw-semibold\">Note:</span>
                                    <span>
                                        Your tickets will be available in your account. For any questions, please contact our support team.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Invoice -->

                <!-- Invoice Actions -->
                <div class=\"col-xl-3 col-md-4 col-12 invoice-actions no-print\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <button class=\"btn btn-primary d-grid w-100 mb-2\" onclick=\"window.print()\">
                                <span class=\"d-flex align-items-center justify-content-center text-nowrap\">
                                    <i class=\"ti ti-printer ti-xs me-1\"></i>Print Invoice
                                </span>
                            </button>
                            <button class=\"btn btn-label-secondary d-grid w-100 mb-2\" id=\"downloadInvoice\">
                                <span class=\"d-flex align-items-center justify-content-center text-nowrap\">
                                    <i class=\"ti ti-download ti-xs me-1\"></i>Download
                                </span>
                            </button>
                            <a href=\"";
        // line 216
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_Commandes");
        yield "\" class=\"btn btn-label-secondary d-grid w-100 mb-2\">
                                <span class=\"d-flex align-items-center justify-content-center text-nowrap\">
                                    <i class=\"ti ti-arrow-left ti-xs me-1\"></i>Back to Orders
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Invoice Actions -->
            </div>
        </div>
    </div>













<!-- Core JS -->
<script src=\"";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/node-waves/node-waves.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/hammer/hammer.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/i18n/i18n.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/typeahead-js/typeahead.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/flatpickr/flatpickr.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/moment/moment.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/datatables-bs5/datatables-bootstrap5.js"), "html", null, true);
        yield "\"></script>

<!-- Main JS -->
<script src=\"";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/main.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/dashboards-analytics.js"), "html", null, true);
        yield "\"></script>
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
        return "GestionEvent/Invoice.html.twig";
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
        return array (  489 => 257,  485 => 256,  479 => 253,  475 => 252,  471 => 251,  467 => 250,  463 => 249,  459 => 248,  455 => 247,  451 => 246,  447 => 245,  443 => 244,  439 => 243,  435 => 242,  406 => 216,  368 => 181,  363 => 179,  350 => 169,  344 => 165,  335 => 162,  330 => 160,  326 => 159,  322 => 158,  315 => 155,  307 => 153,  305 => 152,  300 => 149,  296 => 148,  273 => 128,  266 => 124,  259 => 120,  252 => 116,  243 => 109,  237 => 107,  234 => 106,  228 => 104,  226 => 103,  222 => 102,  216 => 101,  199 => 87,  193 => 84,  160 => 54,  156 => 53,  152 => 52,  146 => 49,  140 => 46,  136 => 45,  132 => 44,  128 => 43,  124 => 42,  120 => 41,  116 => 40,  111 => 38,  105 => 35,  101 => 34,  97 => 33,  91 => 30,  87 => 29,  83 => 28,  72 => 20,  58 => 9,  48 => 1,);
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

    <style>
    @media print {
        .no-print {
            display: none !important;
        }
    }
</style>
</head>

  <body class=\"layout-page\">

     <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <div class=\"row invoice-preview\">
                <!-- Invoice -->
                <div class=\"col-xl-9 col-md-8 col-12 mb-md-0 mb-4\">
                    <div class=\"card invoice-preview-card\">
                        <div class=\"card-body\">
                            <div class=\"d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column m-sm-3 m-0\">
                                <div class=\"mb-xl-0 mb-4\">
                                    <div class=\"d-flex svg-illustration mb-4 gap-2 align-items-center\">
                                        <!-- Your logo here -->
                                        <span class=\"app-brand-text fw-bold fs-4\">EventHub</span>
                                    </div>
                                    <p class=\"mb-2\">Event Ticketing Platform</p>
                                    <p class=\"mb-0\">contact@eventhub.com</p>
                                </div>
                                <div>
                                    <h4 class=\"fw-semibold mb-2\">INVOICE #{{ payment.id }}</h4>
                                    <div class=\"mb-2 pt-1\">
                                        <span>Date Issued:</span>
                                        <span class=\"fw-semibold\">{{ payment.createdAt|date('F d, Y') }}</span>
                                    </div>
                                    <div class=\"pt-1\">
                                        <span>Payment Status:</span>
                                        <span class=\"badge bg-success\">Paid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class=\"my-0\" />
                        <div class=\"card-body\">
                            <div class=\"row p-sm-3 p-0\">
                                <div class=\"col-xl-6 col-md-12 col-sm-5 col-12 mb-xl-0 mb-md-4 mb-sm-0 mb-4\">
                                    <h6 class=\"mb-3\">Invoice To:</h6>
                                    <p class=\"mb-1\">{{ payment.user.getPrenom() }} {{ payment.user.getNom() }}</p>
                                    <p class=\"mb-1\">{{ payment.user.getEmail() }}</p>
                                    {% if payment.user.getNumTel() %}
                                    <p class=\"mb-0\">{{ payment.user.getNumTel() }}</p>
                                    {% endif %}
                                    {% if payment.user.getAddress() %}
                                    <p class=\"mb-0\">{{ payment.user.getAddress() }}</p>
                                    {% endif %}
                                </div>
                                <div class=\"col-xl-6 col-md-12 col-sm-7 col-12\">
                                    <h6 class=\"mb-4\">Payment Details:</h6>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class=\"pe-4\">Total Amount:</td>
                                                <td><strong>{{ payment.amount }} €</strong></td>
                                            </tr>
                                            <tr>
                                                <td class=\"pe-4\">Payment Method:</td>
                                                <td>{{ payment.paymentMethod|capitalize }}</td>
                                            </tr>
                                            <tr>
                                                <td class=\"pe-4\">Transaction Date:</td>
                                                <td>{{ payment.createdAt|date('Y-m-d H:i') }}</td>
                                            </tr>
                                            <tr>
                                                <td class=\"pe-4\">Transaction ID:</td>
                                                <td>#{{ payment.id }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class=\"table-responsive border-top\">
                            <table class=\"table m-0\">
                                <thead>
                                    <tr>
                                        <th>Event</th>
                                        <th>Date</th>
                                        <th>Category</th>
                                        <th>Unit Price</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for detail in payment.details %}
                                    <tr>
                                        <td class=\"text-nowrap\">
                                            <div class=\"d-flex align-items-center\">
                                                {% if detail.event.getPhoto() %}
                                                <img src=\"{{ asset('uploads/' ~ detail.event.getPhoto()) }}\" alt=\"{{ detail.event.getNom() }}\" width=\"40\" height=\"40\" class=\"rounded me-2\">
                                                {% endif %}
                                                <span>{{ detail.event.getNom() }}</span>
                                            </div>
                                        </td>
                                        <td>{{ detail.event.getDate()|date('Y-m-d') }}</td>
<td>{{ detail.event.getCategorie().value }}</td>
                                        <td>{{ detail.getPrice() }} €</td>
                                        <td>1</td>
                                        <td>{{ detail.getPrice() }} €</td>
                                    </tr>
                                    {% endfor %}
                                    <tr>
                                        <td colspan=\"4\" class=\"align-top px-4 py-4\">
                                            <p class=\"mb-2 mt-3\">
                                                <span class=\"ms-3 fw-semibold\">Payment Method:</span>
                                                <span>{{ payment.paymentMethod|capitalize }}</span>
                                            </p>
                                            <span class=\"ms-3\">Thank you for your purchase!</span>
                                        </td>
                                        <td class=\"text-end pe-3 py-4\">
                                            <p class=\"mb-2 pt-3\">Subtotal:</p>
                                            <p class=\"mb-2\">Tax:</p>
                                            <p class=\"mb-0 pb-3 fw-semibold\">Total:</p>
                                        </td>
                                        <td class=\"ps-2 py-4\">
                                            <p class=\"fw-semibold mb-2 pt-3\">{{ payment.amount }} €</p>
                                            <p class=\"fw-semibold mb-2\">0.00 €</p>
                                            <p class=\"fw-semibold mb-0 pb-3\">{{ payment.amount }} €</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class=\"card-body mx-3\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <span class=\"fw-semibold\">Note:</span>
                                    <span>
                                        Your tickets will be available in your account. For any questions, please contact our support team.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Invoice -->

                <!-- Invoice Actions -->
                <div class=\"col-xl-3 col-md-4 col-12 invoice-actions no-print\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <button class=\"btn btn-primary d-grid w-100 mb-2\" onclick=\"window.print()\">
                                <span class=\"d-flex align-items-center justify-content-center text-nowrap\">
                                    <i class=\"ti ti-printer ti-xs me-1\"></i>Print Invoice
                                </span>
                            </button>
                            <button class=\"btn btn-label-secondary d-grid w-100 mb-2\" id=\"downloadInvoice\">
                                <span class=\"d-flex align-items-center justify-content-center text-nowrap\">
                                    <i class=\"ti ti-download ti-xs me-1\"></i>Download
                                </span>
                            </button>
                            <a href=\"{{ path('app_my_Commandes') }}\" class=\"btn btn-label-secondary d-grid w-100 mb-2\">
                                <span class=\"d-flex align-items-center justify-content-center text-nowrap\">
                                    <i class=\"ti ti-arrow-left ti-xs me-1\"></i>Back to Orders
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Invoice Actions -->
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
<script src=\"{{ asset('/vendor/libs/flatpickr/flatpickr.js') }}\"></script>
<script src=\"{{ asset('/vendor/libs/moment/moment.js') }}\"></script>
<script src=\"{{ asset('/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}\"></script>

<!-- Main JS -->
<script src=\"{{ asset('/js/main.js') }}\"></script>
<script src=\"{{ asset('/js/dashboards-analytics.js') }}\"></script>
  </body>
</html>", "GestionEvent/Invoice.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\GestionEvent\\Invoice.html.twig");
    }
}
