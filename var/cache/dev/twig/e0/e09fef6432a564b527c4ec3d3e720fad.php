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

/* GestionEvent/invoice.html.twig */
class __TwigTemplate_d57cad499726bd91ee17bc951997d209 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionEvent/invoice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionEvent/invoice.html.twig"));

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
    @page {
        size: auto;
        margin: 0mm;
    }
    body {
        padding: 0 !important;
        margin: 0 !important;
        background: white !important;
    }
    .content-wrapper {
        padding: 0 !important;
        margin: 0 !important;
    }
    .container-xxl {
        max-width: 100% !important;
        padding: 0 !important;
    }
    .invoice-preview-card {
        border: none !important;
        box-shadow: none !important;
        width: 100% !important;
        margin: 0 !important;
    }
    .table {
        width: 100% !important;
    }
    /* Force colors to print */
    .badge {
        -webkit-print-color-adjust: exact;
        print-color-adjust: exact;
    }
    /* Hide elements that shouldn't print */
    .no-print, .invoice-actions {
        display: none !important;
    }
}
</style>
</head>

 <body class=\"layout-page\">

     <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <div class=\"row invoice-preview\">
                <!-- Facture -->
                <div class=\"col-xl-9 col-md-8 col-12 mb-md-0 mb-4\">
                    <div class=\"card invoice-preview-card\">
                        <div class=\"card-body\">
                            <div class=\"d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column m-sm-3 m-0\">
                       <div class=\"mb-xl-0 mb-4\">
    <div class=\"d-flex svg-illustration mb-4 gap-2 align-items-center\">
        <img src=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/packs/images/logo2.png"), "html", null, true);
        yield "\" 
             alt=\"GoldenTouch Logo\" 
             style=\"width: 100px; height: auto;\">
<span class=\"app-brand-text fw-bold fs-4\" style=\"color: #FFD700;\">GoldenTouch</span>
    </div>
    <p class=\"mb-2\">Plateforme de billetterie événementielle</p>
    <p class=\"mb-0\">GoldenTouch@gmail.com</p>
</div>
                                <div>
                                    <h4 class=\"fw-semibold mb-2\">FACTURE #";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 118, $this->source); })()), "id", [], "any", false, false, false, 118), "html", null, true);
        yield "</h4>
                                    <div class=\"mb-2 pt-1\">
                                        <span>Date d'émission :</span>
                                        <span class=\"fw-semibold\">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 121, $this->source); })()), "createdAt", [], "any", false, false, false, 121), "d F Y"), "html", null, true);
        yield "</span>
                                    </div>
                                    <div class=\"pt-1\">
                                        <span>Statut du paiement :</span>
                                        <span class=\"badge bg-success\">Payé</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class=\"my-0\" />
                        <div class=\"card-body\">
                            <div class=\"row p-sm-3 p-0\">
                                <div class=\"col-xl-6 col-md-12 col-sm-5 col-12 mb-xl-0 mb-md-4 mb-sm-0 mb-4\">
                                    <h6 class=\"mb-3\">Facturé à :</h6>
                                    <p class=\"mb-1\">";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 135, $this->source); })()), "user", [], "any", false, false, false, 135), "getPrenom", [], "method", false, false, false, 135), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 135, $this->source); })()), "user", [], "any", false, false, false, 135), "getNom", [], "method", false, false, false, 135), "html", null, true);
        yield "</p>
                                    <p class=\"mb-1\">";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 136, $this->source); })()), "user", [], "any", false, false, false, 136), "getEmail", [], "method", false, false, false, 136), "html", null, true);
        yield "</p>
                                    ";
        // line 137
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 137, $this->source); })()), "user", [], "any", false, false, false, 137), "getNumTel", [], "method", false, false, false, 137)) {
            // line 138
            yield "                                    <p class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 138, $this->source); })()), "user", [], "any", false, false, false, 138), "getNumTel", [], "method", false, false, false, 138), "html", null, true);
            yield "</p>
                                    ";
        }
        // line 140
        yield "                                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 140, $this->source); })()), "user", [], "any", false, false, false, 140), "getAddress", [], "method", false, false, false, 140)) {
            // line 141
            yield "                                    <p class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 141, $this->source); })()), "user", [], "any", false, false, false, 141), "getAddress", [], "method", false, false, false, 141), "html", null, true);
            yield "</p>
                                    ";
        }
        // line 143
        yield "                                </div>
                                <div class=\"col-xl-6 col-md-12 col-sm-7 col-12\">
                                    <h6 class=\"mb-4\">Détails du paiement :</h6>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class=\"pe-4\">Montant total :</td>
                                                <td><strong>";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 150, $this->source); })()), "amount", [], "any", false, false, false, 150), "html", null, true);
        yield " €</strong></td>
                                            </tr>
                                            <tr>
                                                <td class=\"pe-4\">Méthode de paiement :</td>
                                                <td>";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 154, $this->source); })()), "paymentMethod", [], "any", false, false, false, 154)), "html", null, true);
        yield "</td>
                                            </tr>
                                            <tr>
                                                <td class=\"pe-4\">Date de transaction :</td>
                                                <td>";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 158, $this->source); })()), "createdAt", [], "any", false, false, false, 158), "d/m/Y "), "html", null, true);
        yield "</td>
                                            </tr>
                                            <tr>
                                                <td class=\"pe-4\">ID de transaction :</td>
                                                <td>#";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 162, $this->source); })()), "id", [], "any", false, false, false, 162), "html", null, true);
        yield "</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                     <div class=\"table-responsive\">
    <table class=\"table m-0\">
        <thead>
            <tr>
                <th>Événement</th>
                <th>Date</th>
                <th>Catégorie</th>
                <th class=\"text-end\">Prix</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 180, $this->source); })()), "details", [], "any", false, false, false, 180));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 181
            yield "            <tr>
                <td class=\"text-nowrap\">
                    <div class=\"d-flex align-items-center\">
                        ";
            // line 184
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "event", [], "any", false, false, false, 184), "getPhoto", [], "method", false, false, false, 184)) {
                // line 185
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "event", [], "any", false, false, false, 185), "getPhoto", [], "method", false, false, false, 185))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "event", [], "any", false, false, false, 185), "getNom", [], "method", false, false, false, 185), "html", null, true);
                yield "\" width=\"40\" height=\"40\" class=\"rounded me-2\">
                        ";
            }
            // line 187
            yield "                        <span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "event", [], "any", false, false, false, 187), "getNom", [], "method", false, false, false, 187), "html", null, true);
            yield "</span>
                    </div>
                </td>
                <td>";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "event", [], "any", false, false, false, 190), "getDate", [], "method", false, false, false, 190), "d/m/Y"), "html", null, true);
            yield "</td>
                <td>";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "event", [], "any", false, false, false, 191), "getCategorie", [], "method", false, false, false, 191), "value", [], "any", false, false, false, 191), "html", null, true);
            yield "</td>
                <td class=\"text-end\">";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "getPrice", [], "method", false, false, false, 192), "html", null, true);
            yield " €</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['detail'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        yield "        </tbody>
    </table>
</div>

<!-- Replace the total section with this: -->
<div class=\"total-section border-top\">
    <div class=\"total-details p-4\">
        <div class=\"d-flex justify-content-between mb-2\">
            <span class=\"text-muted\">Sous-total :</span>
            <span>";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 204, $this->source); })()), "amount", [], "any", false, false, false, 204), "html", null, true);
        yield " €</span>
        </div>
        <div class=\"d-flex justify-content-between mb-2\">
            <span class=\"text-muted\">Taxe :</span>
            <span>0.00 €</span>
        </div>
        <div class=\"d-flex justify-content-between fw-bold\">
            <span>Total :</span>
            <span>";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 212, $this->source); })()), "amount", [], "any", false, false, false, 212), "html", null, true);
        yield " €</span>
        </div>
    </div>
</div>

                        <div class=\"card-body mx-3\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <span class=\"fw-semibold\">Remarque :</span>
                                    <span>
                                        Vos billets seront disponibles dans votre compte. Pour toute question, veuillez contacter notre support.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Facture -->

                <!-- Actions Facture -->
                <div class=\"col-xl-3 col-md-4 col-12 invoice-actions no-print\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <button class=\"btn btn-primary d-grid w-100 mb-2\" onclick=\"window.print()\">
                                <span class=\"d-flex align-items-center justify-content-center text-nowrap\">
                                    <i class=\"ti ti-printer ti-xs me-1\"></i>Imprimer la facture
                                </span>
                            </button>
                            <button class=\"btn btn-label-secondary d-grid w-100 mb-2\" id=\"downloadInvoice\">
                                <span class=\"d-flex align-items-center justify-content-center text-nowrap\">
                                    <i class=\"ti ti-download ti-xs me-1\"></i>Télécharger
                                </span>
                            </button>
                            <a href=\"";
        // line 245
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_Commandes");
        yield "\" class=\"btn btn-label-secondary d-grid w-100 mb-2\">
                                <span class=\"d-flex align-items-center justify-content-center text-nowrap\">
                                    <i class=\"ti ti-arrow-left ti-xs me-1\"></i>Retour aux commandes
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Actions Facture -->
            </div>
        </div>
    </div>







<!-- Core JS -->
<script src=\"";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/node-waves/node-waves.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/hammer/hammer.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/i18n/i18n.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/typeahead-js/typeahead.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/flatpickr/flatpickr.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/moment/moment.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/datatables-bs5/datatables-bootstrap5.js"), "html", null, true);
        yield "\"></script>

<!-- Main JS -->
<script src=\"";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/main.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 280
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
        return "GestionEvent/invoice.html.twig";
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
        return array (  509 => 280,  505 => 279,  499 => 276,  495 => 275,  491 => 274,  487 => 273,  483 => 272,  479 => 271,  475 => 270,  471 => 269,  467 => 268,  463 => 267,  459 => 266,  455 => 265,  432 => 245,  396 => 212,  385 => 204,  374 => 195,  365 => 192,  361 => 191,  357 => 190,  350 => 187,  342 => 185,  340 => 184,  335 => 181,  331 => 180,  310 => 162,  303 => 158,  296 => 154,  289 => 150,  280 => 143,  274 => 141,  271 => 140,  265 => 138,  263 => 137,  259 => 136,  253 => 135,  236 => 121,  230 => 118,  218 => 109,  160 => 54,  156 => 53,  152 => 52,  146 => 49,  140 => 46,  136 => 45,  132 => 44,  128 => 43,  124 => 42,  120 => 41,  116 => 40,  111 => 38,  105 => 35,  101 => 34,  97 => 33,  91 => 30,  87 => 29,  83 => 28,  72 => 20,  58 => 9,  48 => 1,);
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
    @page {
        size: auto;
        margin: 0mm;
    }
    body {
        padding: 0 !important;
        margin: 0 !important;
        background: white !important;
    }
    .content-wrapper {
        padding: 0 !important;
        margin: 0 !important;
    }
    .container-xxl {
        max-width: 100% !important;
        padding: 0 !important;
    }
    .invoice-preview-card {
        border: none !important;
        box-shadow: none !important;
        width: 100% !important;
        margin: 0 !important;
    }
    .table {
        width: 100% !important;
    }
    /* Force colors to print */
    .badge {
        -webkit-print-color-adjust: exact;
        print-color-adjust: exact;
    }
    /* Hide elements that shouldn't print */
    .no-print, .invoice-actions {
        display: none !important;
    }
}
</style>
</head>

 <body class=\"layout-page\">

     <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <div class=\"row invoice-preview\">
                <!-- Facture -->
                <div class=\"col-xl-9 col-md-8 col-12 mb-md-0 mb-4\">
                    <div class=\"card invoice-preview-card\">
                        <div class=\"card-body\">
                            <div class=\"d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column m-sm-3 m-0\">
                       <div class=\"mb-xl-0 mb-4\">
    <div class=\"d-flex svg-illustration mb-4 gap-2 align-items-center\">
        <img src=\"{{ asset('uploads/packs/images/logo2.png') }}\" 
             alt=\"GoldenTouch Logo\" 
             style=\"width: 100px; height: auto;\">
<span class=\"app-brand-text fw-bold fs-4\" style=\"color: #FFD700;\">GoldenTouch</span>
    </div>
    <p class=\"mb-2\">Plateforme de billetterie événementielle</p>
    <p class=\"mb-0\">GoldenTouch@gmail.com</p>
</div>
                                <div>
                                    <h4 class=\"fw-semibold mb-2\">FACTURE #{{ payment.id }}</h4>
                                    <div class=\"mb-2 pt-1\">
                                        <span>Date d'émission :</span>
                                        <span class=\"fw-semibold\">{{ payment.createdAt|date('d F Y') }}</span>
                                    </div>
                                    <div class=\"pt-1\">
                                        <span>Statut du paiement :</span>
                                        <span class=\"badge bg-success\">Payé</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class=\"my-0\" />
                        <div class=\"card-body\">
                            <div class=\"row p-sm-3 p-0\">
                                <div class=\"col-xl-6 col-md-12 col-sm-5 col-12 mb-xl-0 mb-md-4 mb-sm-0 mb-4\">
                                    <h6 class=\"mb-3\">Facturé à :</h6>
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
                                    <h6 class=\"mb-4\">Détails du paiement :</h6>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class=\"pe-4\">Montant total :</td>
                                                <td><strong>{{ payment.amount }} €</strong></td>
                                            </tr>
                                            <tr>
                                                <td class=\"pe-4\">Méthode de paiement :</td>
                                                <td>{{ payment.paymentMethod|capitalize }}</td>
                                            </tr>
                                            <tr>
                                                <td class=\"pe-4\">Date de transaction :</td>
                                                <td>{{ payment.createdAt|date('d/m/Y ') }}</td>
                                            </tr>
                                            <tr>
                                                <td class=\"pe-4\">ID de transaction :</td>
                                                <td>#{{ payment.id }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                     <div class=\"table-responsive\">
    <table class=\"table m-0\">
        <thead>
            <tr>
                <th>Événement</th>
                <th>Date</th>
                <th>Catégorie</th>
                <th class=\"text-end\">Prix</th>
            </tr>
        </thead>
        <tbody>
            {% for detail in payment.details %}
            <tr>
                <td class=\"text-nowrap\">
                    <div class=\"d-flex align-items-center\">
                        {% if detail.event.getPhoto() %}
                        <img src=\"{{ asset('uploads/packs/' ~ detail.event.getPhoto()) }}\" alt=\"{{ detail.event.getNom() }}\" width=\"40\" height=\"40\" class=\"rounded me-2\">
                        {% endif %}
                        <span>{{ detail.event.getNom() }}</span>
                    </div>
                </td>
                <td>{{ detail.event.getDate()|date('d/m/Y') }}</td>
                <td>{{ detail.event.getCategorie().value }}</td>
                <td class=\"text-end\">{{ detail.getPrice() }} €</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>

<!-- Replace the total section with this: -->
<div class=\"total-section border-top\">
    <div class=\"total-details p-4\">
        <div class=\"d-flex justify-content-between mb-2\">
            <span class=\"text-muted\">Sous-total :</span>
            <span>{{ payment.amount }} €</span>
        </div>
        <div class=\"d-flex justify-content-between mb-2\">
            <span class=\"text-muted\">Taxe :</span>
            <span>0.00 €</span>
        </div>
        <div class=\"d-flex justify-content-between fw-bold\">
            <span>Total :</span>
            <span>{{ payment.amount }} €</span>
        </div>
    </div>
</div>

                        <div class=\"card-body mx-3\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <span class=\"fw-semibold\">Remarque :</span>
                                    <span>
                                        Vos billets seront disponibles dans votre compte. Pour toute question, veuillez contacter notre support.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Facture -->

                <!-- Actions Facture -->
                <div class=\"col-xl-3 col-md-4 col-12 invoice-actions no-print\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <button class=\"btn btn-primary d-grid w-100 mb-2\" onclick=\"window.print()\">
                                <span class=\"d-flex align-items-center justify-content-center text-nowrap\">
                                    <i class=\"ti ti-printer ti-xs me-1\"></i>Imprimer la facture
                                </span>
                            </button>
                            <button class=\"btn btn-label-secondary d-grid w-100 mb-2\" id=\"downloadInvoice\">
                                <span class=\"d-flex align-items-center justify-content-center text-nowrap\">
                                    <i class=\"ti ti-download ti-xs me-1\"></i>Télécharger
                                </span>
                            </button>
                            <a href=\"{{ path('app_my_Commandes') }}\" class=\"btn btn-label-secondary d-grid w-100 mb-2\">
                                <span class=\"d-flex align-items-center justify-content-center text-nowrap\">
                                    <i class=\"ti ti-arrow-left ti-xs me-1\"></i>Retour aux commandes
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Actions Facture -->
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
</html>", "GestionEvent/invoice.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\GestionEvent\\Invoice.html.twig");
    }
}
