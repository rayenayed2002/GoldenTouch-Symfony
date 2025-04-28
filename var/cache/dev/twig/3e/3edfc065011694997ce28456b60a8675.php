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

/* admin/advanced_statistiques/report_pdf.html.twig */
class __TwigTemplate_1c7b08c32dd1cd520387857d7a34ba15 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/advanced_statistiques/report_pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/advanced_statistiques/report_pdf.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Rapport Statistiques Avancées</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;900&display=swap');
    body {
        font-family: 'Inter', Arial, sans-serif;
        color: #22223b;
        background: #f8fafc;
        margin: 0;
        padding: 0;
        min-height: 100vh;
    }
    .header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #fff;
        border-bottom: 3px solid #7367F0;
        padding: 28px 48px 18px 48px;
        box-shadow: 0 2px 12px rgba(115,103,240,0.07);
    }
    .header-left {
        display: flex;
        align-items: center;
    }
    .logo {
        width: 54px;
        height: 54px;
        border-radius: 14px;
        background: #fff;
        box-shadow: 0 1px 8px #ecebfa;
        margin-right: 18px;
    }
    .brand-title {
        font-size: 2.1em;
        font-weight: 900;
        color: #232946;
        letter-spacing: 2px;
    }
    .subtitle {
        font-size: 1.09em;
        color: #7367F0;
        font-weight: 600;
        letter-spacing: 1.2px;
        margin-top: 4px;
    }
    .report-date {
        font-size: 1em;
        color: #b8b6f3;
        font-weight: 600;
    }
    .main {
        max-width: 980px;
        margin: 36px auto 0 auto;
        background: #fff;
        border-radius: 22px;
        box-shadow: 0 4px 24px rgba(115,103,240,0.08);
        padding: 44px 54px 32px 54px;
        position: relative;
    }
    .card-row {
        display: flex;
        flex-wrap: wrap;
        gap: 32px;
        margin-bottom: 44px;
    }
    .stat-card {
        flex: 1 1 180px;
        min-width: 180px;
        background: linear-gradient(90deg, #f8fafc 60%, #ecebfa 100%);
        border-radius: 14px;
        box-shadow: 0 2px 8px #ecebfa;
        padding: 22px 20px 18px 24px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        border: 1.5px solid #ecebfa;
    }
    .stat-label {
        font-size: 1em;
        color: #82868b;
        font-weight: 600;
        margin-bottom: 6px;
    }
    .stat-value {
        font-size: 2.1em;
        font-weight: 900;
        color: #232946;
        letter-spacing: 1px;
    }
    .stat-note {
        font-size: 0.93em;
        color: #b8b6f3;
        margin-top: 4px;
    }
    .section-title {
        font-size: 1.3em;
        color: #232946;
        font-weight: 700;
        letter-spacing: 1.2px;
        margin: 32px 0 18px 0;
        border-left: 6px solid #7367F0;
        padding-left: 14px;
    }
    .charts-row {
        display: flex;
        flex-wrap: wrap;
        gap: 38px;
        margin-bottom: 34px;
    }
    .chart-block {
        flex: 1 1 280px;
        min-width: 280px;
        background: #f4f5fb;
        border-radius: 12px;
        box-shadow: 0 1px 4px #ecebfa;
        padding: 18px 18px 12px 18px;
        display: flex;
        flex-direction: column;
        align-items: center;
        border: 1.5px solid #ecebfa;
    }
    .chart-block h3 {
        font-size: 1.05em;
        color: #7367F0;
        font-weight: 700;
        margin-bottom: 10px;
    }
    .chart-img {
        display: block;
        margin: 0 auto 18px auto;
        max-width: 520px;
        max-height: 340px;
        min-width: 340px;
        min-height: 180px;
        border-radius: 14px;
        background: #fff;
        box-shadow: 0 2px 12px #ecebfa;
        border: 2px solid #ecebfa;
    }
    .footer {
        width: 100%;
        background: #fff;
        border-top: 2px solid #ecebfa;
        color: #b8b6f3;
        font-size: 1em;
        text-align: center;
        padding: 16px 0 8px 0;
        position: fixed;
        bottom: 0;
        left: 0;
    }
    .page-number {
        color: #7367F0;
        font-weight: 600;
        margin-left: 4px;
    }
    .copyright {
        color: #b8b6f3;
        font-size: 0.95em;
        margin-top: 4px;
    }
</style>
</head>
<body>
    <div class=\"header\">
        <div class=\"header-left\">
            <img src=\"https://cdn-icons-png.flaticon.com/512/3135/3135715.png\" alt=\"Logo\" class=\"logo\">
            <div>
                <div class=\"brand-title\">Golden Touch</div>
                <div class=\"subtitle\">Rapport Statistiques Avancées</div>
            </div>
        </div>
        <div class=\"report-date\">Généré le ";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "</div>
    </div>
    <div class=\"main\">
        <div class=\"card-row\">
            <div class=\"stat-card\">
                <div class=\"stat-label\">Total Packs</div>
                <div class=\"stat-value\">";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packStats"]) || array_key_exists("packStats", $context) ? $context["packStats"] : (function () { throw new RuntimeError('Variable "packStats" does not exist.', 184, $this->source); })()), "total_packs", [], "any", false, false, false, 184), "html", null, true);
        yield "</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-label\">Croissance Packs</div>
                <div class=\"stat-value\">";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packStats"]) || array_key_exists("packStats", $context) ? $context["packStats"] : (function () { throw new RuntimeError('Variable "packStats" does not exist.', 188, $this->source); })()), "growth_rate", [], "any", false, false, false, 188), "html", null, true);
        yield "%</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-label\">Total Utilisateurs</div>
                <div class=\"stat-value\">";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userStats"]) || array_key_exists("userStats", $context) ? $context["userStats"] : (function () { throw new RuntimeError('Variable "userStats" does not exist.', 192, $this->source); })()), "total_users", [], "any", false, false, false, 192), "html", null, true);
        yield "</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-label\">Croissance Utilisateurs</div>
                <div class=\"stat-value\">";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userStats"]) || array_key_exists("userStats", $context) ? $context["userStats"] : (function () { throw new RuntimeError('Variable "userStats" does not exist.', 196, $this->source); })()), "growth_rate", [], "any", false, false, false, 196), "html", null, true);
        yield "%</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-label\">Pack le Plus Vendu</div>
                <div class=\"stat-value\">";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mostSoldPack"]) || array_key_exists("mostSoldPack", $context) ? $context["mostSoldPack"] : (function () { throw new RuntimeError('Variable "mostSoldPack" does not exist.', 200, $this->source); })()), "description", [], "any", false, false, false, 200), "html", null, true);
        yield "</div>
                <div class=\"stat-note\">";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mostSoldPack"]) || array_key_exists("mostSoldPack", $context) ? $context["mostSoldPack"] : (function () { throw new RuntimeError('Variable "mostSoldPack" does not exist.', 201, $this->source); })()), "total_sales", [], "any", false, false, false, 201), "html", null, true);
        yield " ventes</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-label\">Prix Moyen des Packs</div>
                <div class=\"stat-value\">€";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["averagePackPrice"]) || array_key_exists("averagePackPrice", $context) ? $context["averagePackPrice"] : (function () { throw new RuntimeError('Variable "averagePackPrice" does not exist.', 205, $this->source); })()), "html", null, true);
        yield "</div>
            </div>
        </div>
        <div class=\"section-title\">Graphiques & Visualisations</div>
        <div class=\"charts-row\">
            <div class=\"chart-block\">
                <h3>Évolution des réservations</h3>
                ";
        // line 212
        if (array_key_exists("reservationTrendsChartBase64", $context)) {
            // line 213
            yield "                    <img class=\"chart-img\" src=\"data:image/png;base64,";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reservationTrendsChartBase64"]) || array_key_exists("reservationTrendsChartBase64", $context) ? $context["reservationTrendsChartBase64"] : (function () { throw new RuntimeError('Variable "reservationTrendsChartBase64" does not exist.', 213, $this->source); })()), "html", null, true);
            yield "\" alt=\"Évolution des réservations\">
                ";
        } else {
            // line 215
            yield "                    <div style=\"color: #bbb;\">[Graphique à insérer ici]</div>
                ";
        }
        // line 217
        yield "            </div>
            <div class=\"chart-block\">
                <h3>Répartition des ventes des packs</h3>
                ";
        // line 220
        if (array_key_exists("packsSalesChartBase64", $context)) {
            // line 221
            yield "                    <img class=\"chart-img\" src=\"data:image/png;base64,";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["packsSalesChartBase64"]) || array_key_exists("packsSalesChartBase64", $context) ? $context["packsSalesChartBase64"] : (function () { throw new RuntimeError('Variable "packsSalesChartBase64" does not exist.', 221, $this->source); })()), "html", null, true);
            yield "\" alt=\"Répartition des ventes des packs\">
                ";
        } else {
            // line 223
            yield "                    <div style=\"color: #bbb;\">[Diagramme circulaire à insérer ici]</div>
                ";
        }
        // line 225
        yield "            </div>
            <div class=\"chart-block\">
                <h3>Utilisateurs actifs par période</h3>
                ";
        // line 228
        if (array_key_exists("usersActiveChartBase64", $context)) {
            // line 229
            yield "                    <img class=\"chart-img\" src=\"data:image/png;base64,";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["usersActiveChartBase64"]) || array_key_exists("usersActiveChartBase64", $context) ? $context["usersActiveChartBase64"] : (function () { throw new RuntimeError('Variable "usersActiveChartBase64" does not exist.', 229, $this->source); })()), "html", null, true);
            yield "\" alt=\"Utilisateurs actifs par période\">
                ";
        } else {
            // line 231
            yield "                    <div style=\"color: #bbb;\">[Graphique d'utilisateurs à insérer ici]</div>
                ";
        }
        // line 233
        yield "            </div>
        </div>
        <div class=\"copyright\">
            © ";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Golden Touch. Tous droits réservés.
        </div>
    </div>
    <div class=\"footer\">
        Page <span class=\"page-number\"> <span class=\"pageNumber\"></span> / <span class=\"totalPages\"></span> </span>
    </div>
</body>
    <div class=\"watermark\">Golden Touch</div>
    <div class=\"accent-bar\"></div>
    <div class=\"pdf-header\">
        <img src=\"https://cdn-icons-png.flaticon.com/512/3135/3135715.png\" alt=\"Logo\" class=\"logo\">
        <div class=\"header-content\">
            <span class=\"brand\">Golden Touch</span>
            <span class=\"subtitle\">Rapport Premium — Statistiques Avancées</span>
        </div>
    </div>
    <div class=\"main-section\">
        <div class=\"summary-card\">
            <div>
                <span class=\"summary-label\">Total Packs :</span>
                <span class=\"summary-value\">";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packStats"]) || array_key_exists("packStats", $context) ? $context["packStats"] : (function () { throw new RuntimeError('Variable "packStats" does not exist.', 256, $this->source); })()), "total_packs", [], "any", false, false, false, 256), "html", null, true);
        yield "</span>
            </div>
            <div>
                <span class=\"summary-label\">Croissance Packs :</span>
                <span class=\"summary-value\">";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packStats"]) || array_key_exists("packStats", $context) ? $context["packStats"] : (function () { throw new RuntimeError('Variable "packStats" does not exist.', 260, $this->source); })()), "growth_rate", [], "any", false, false, false, 260), "html", null, true);
        yield "%</span>
            </div>
            <div>
                <span class=\"summary-label\">Total Utilisateurs :</span>
                <span class=\"summary-value\">";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userStats"]) || array_key_exists("userStats", $context) ? $context["userStats"] : (function () { throw new RuntimeError('Variable "userStats" does not exist.', 264, $this->source); })()), "total_users", [], "any", false, false, false, 264), "html", null, true);
        yield "</span>
            </div>
            <div>
                <span class=\"summary-label\">Croissance Utilisateurs :</span>
                <span class=\"summary-value\">";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userStats"]) || array_key_exists("userStats", $context) ? $context["userStats"] : (function () { throw new RuntimeError('Variable "userStats" does not exist.', 268, $this->source); })()), "growth_rate", [], "any", false, false, false, 268), "html", null, true);
        yield "%</span>
            </div>
            <div>
                <span class=\"summary-label\">Pack le Plus Vendu :</span>
                <span class=\"summary-value\">";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mostSoldPack"]) || array_key_exists("mostSoldPack", $context) ? $context["mostSoldPack"] : (function () { throw new RuntimeError('Variable "mostSoldPack" does not exist.', 272, $this->source); })()), "description", [], "any", false, false, false, 272), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mostSoldPack"]) || array_key_exists("mostSoldPack", $context) ? $context["mostSoldPack"] : (function () { throw new RuntimeError('Variable "mostSoldPack" does not exist.', 272, $this->source); })()), "total_sales", [], "any", false, false, false, 272), "html", null, true);
        yield ")</span>
            </div>
            <div>
                <span class=\"summary-label\">Prix Moyen des Packs :</span>
                <span class=\"summary-value\">€";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["averagePackPrice"]) || array_key_exists("averagePackPrice", $context) ? $context["averagePackPrice"] : (function () { throw new RuntimeError('Variable "averagePackPrice" does not exist.', 276, $this->source); })()), "html", null, true);
        yield "</span>
            </div>
        </div>
        <h2>Graphiques & Visualisations</h2>
        <div class=\"divider-gradient\"></div>
        <div style=\"margin-bottom: 32px;\">
            <h3>Évolution des réservations</h3>
            ";
        // line 283
        if (array_key_exists("reservationTrendsChartBase64", $context)) {
            // line 284
            yield "                <img class=\"chart-img\" src=\"data:image/png;base64,";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reservationTrendsChartBase64"]) || array_key_exists("reservationTrendsChartBase64", $context) ? $context["reservationTrendsChartBase64"] : (function () { throw new RuntimeError('Variable "reservationTrendsChartBase64" does not exist.', 284, $this->source); })()), "html", null, true);
            yield "\" alt=\"Évolution des réservations\">
            ";
        } else {
            // line 286
            yield "                <div style=\"color: #999;\">[Graphique à insérer ici]</div>
            ";
        }
        // line 288
        yield "        </div>
        <div style=\"margin-bottom: 32px;\">
            <h3>Répartition des ventes des packs</h3>
            ";
        // line 291
        if (array_key_exists("packsSalesChartBase64", $context)) {
            // line 292
            yield "                <img class=\"chart-img\" src=\"data:image/png;base64,";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["packsSalesChartBase64"]) || array_key_exists("packsSalesChartBase64", $context) ? $context["packsSalesChartBase64"] : (function () { throw new RuntimeError('Variable "packsSalesChartBase64" does not exist.', 292, $this->source); })()), "html", null, true);
            yield "\" alt=\"Répartition des ventes des packs\">
            ";
        } else {
            // line 294
            yield "                <div style=\"color: #999;\">[Diagramme circulaire à insérer ici]</div>
            ";
        }
        // line 296
        yield "        </div>
        <div style=\"margin-bottom: 32px;\">
            <h3>Utilisateurs actifs par période</h3>
            ";
        // line 299
        if (array_key_exists("usersActiveChartBase64", $context)) {
            // line 300
            yield "                <img class=\"chart-img\" src=\"data:image/png;base64,";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["usersActiveChartBase64"]) || array_key_exists("usersActiveChartBase64", $context) ? $context["usersActiveChartBase64"] : (function () { throw new RuntimeError('Variable "usersActiveChartBase64" does not exist.', 300, $this->source); })()), "html", null, true);
            yield "\" alt=\"Utilisateurs actifs par période\">
            ";
        } else {
            // line 302
            yield "                <div style=\"color: #999;\">[Graphique d'utilisateurs à insérer ici]</div>
            ";
        }
        // line 304
        yield "        </div>
        <!-- Ajoutez d'autres graphiques selon vos besoins -->
        <div class=\"divider-gradient\"></div>
        <div class=\"stats-section\">
            <p>Ce rapport PDF est personnalisé pour votre entreprise. Pour chaque graphique affiché sur le dashboard web, générez une image côté serveur et passez-la à ce template sous forme de variable base64.</p>
        </div>
    </div>
    <div class=\"pdf-footer\">
        Page <span class=\"pageNumber\"></span> / <span class=\"totalPages\"></span>
    </div>
    <h1>Rapport Statistiques Avancées</h1>
    <div class=\"stats-section\">
        <div><span class=\"stat-label\">Total Packs:</span><span class=\"stat-value\">";
        // line 316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packStats"]) || array_key_exists("packStats", $context) ? $context["packStats"] : (function () { throw new RuntimeError('Variable "packStats" does not exist.', 316, $this->source); })()), "total_packs", [], "any", false, false, false, 316), "html", null, true);
        yield "</span></div>
        <div><span class=\"stat-label\">Croissance Packs:</span><span class=\"stat-value\">";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packStats"]) || array_key_exists("packStats", $context) ? $context["packStats"] : (function () { throw new RuntimeError('Variable "packStats" does not exist.', 317, $this->source); })()), "growth_rate", [], "any", false, false, false, 317), "html", null, true);
        yield "%</span></div>
        <div><span class=\"stat-label\">Total Utilisateurs:</span><span class=\"stat-value\">";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userStats"]) || array_key_exists("userStats", $context) ? $context["userStats"] : (function () { throw new RuntimeError('Variable "userStats" does not exist.', 318, $this->source); })()), "total_users", [], "any", false, false, false, 318), "html", null, true);
        yield "</span></div>
        <div><span class=\"stat-label\">Croissance Utilisateurs:</span><span class=\"stat-value\">";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userStats"]) || array_key_exists("userStats", $context) ? $context["userStats"] : (function () { throw new RuntimeError('Variable "userStats" does not exist.', 319, $this->source); })()), "growth_rate", [], "any", false, false, false, 319), "html", null, true);
        yield "%</span></div>
        <div><span class=\"stat-label\">Pack le Plus Vendu:</span><span class=\"stat-value\">";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mostSoldPack"]) || array_key_exists("mostSoldPack", $context) ? $context["mostSoldPack"] : (function () { throw new RuntimeError('Variable "mostSoldPack" does not exist.', 320, $this->source); })()), "description", [], "any", false, false, false, 320), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mostSoldPack"]) || array_key_exists("mostSoldPack", $context) ? $context["mostSoldPack"] : (function () { throw new RuntimeError('Variable "mostSoldPack" does not exist.', 320, $this->source); })()), "total_sales", [], "any", false, false, false, 320), "html", null, true);
        yield ")</span></div>
        <div><span class=\"stat-label\">Prix Moyen des Packs:</span><span class=\"stat-value\">€";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["averagePackPrice"]) || array_key_exists("averagePackPrice", $context) ? $context["averagePackPrice"] : (function () { throw new RuntimeError('Variable "averagePackPrice" does not exist.', 321, $this->source); })()), "html", null, true);
        yield "</span></div>
    </div>
    <div class=\"divider\"></div>
    <div class=\"stats-section\">
        <h2>Graphiques & Visualisations</h2>
        <p>Les graphiques suivants représentent visuellement les statistiques clés. (Pour PDF, chaque graphique doit être généré côté serveur et injecté en tant qu'image base64)</p>
        <!-- Exemple de graphique (remplacer src par une variable Twig contenant l'image base64) -->
        <div style=\"margin-bottom: 32px;\">
            <h3>Évolution des réservations</h3>
            ";
        // line 330
        if (array_key_exists("reservationTrendsChartBase64", $context)) {
            // line 331
            yield "                <img class=\"chart-img\" src=\"data:image/png;base64,";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reservationTrendsChartBase64"]) || array_key_exists("reservationTrendsChartBase64", $context) ? $context["reservationTrendsChartBase64"] : (function () { throw new RuntimeError('Variable "reservationTrendsChartBase64" does not exist.', 331, $this->source); })()), "html", null, true);
            yield "\" alt=\"Évolution des réservations\">
            ";
        } else {
            // line 333
            yield "                <div style=\"color: #999;\">[Graphique à insérer ici]</div>
            ";
        }
        // line 335
        yield "        </div>
        <div style=\"margin-bottom: 32px;\">
            <h3>Répartition des ventes des packs</h3>
            ";
        // line 338
        if (array_key_exists("packsSalesChartBase64", $context)) {
            // line 339
            yield "                <img class=\"chart-img\" src=\"data:image/png;base64,";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["packsSalesChartBase64"]) || array_key_exists("packsSalesChartBase64", $context) ? $context["packsSalesChartBase64"] : (function () { throw new RuntimeError('Variable "packsSalesChartBase64" does not exist.', 339, $this->source); })()), "html", null, true);
            yield "\" alt=\"Répartition des ventes des packs\">
            ";
        } else {
            // line 341
            yield "                <div style=\"color: #999;\">[Diagramme circulaire à insérer ici]</div>
            ";
        }
        // line 343
        yield "        </div>
        <div style=\"margin-bottom: 32px;\">
            <h3>Utilisateurs actifs par période</h3>
            ";
        // line 346
        if (array_key_exists("usersActiveChartBase64", $context)) {
            // line 347
            yield "                <img class=\"chart-img\" src=\"data:image/png;base64,";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["usersActiveChartBase64"]) || array_key_exists("usersActiveChartBase64", $context) ? $context["usersActiveChartBase64"] : (function () { throw new RuntimeError('Variable "usersActiveChartBase64" does not exist.', 347, $this->source); })()), "html", null, true);
            yield "\" alt=\"Utilisateurs actifs par période\">
            ";
        } else {
            // line 349
            yield "                <div style=\"color: #999;\">[Graphique d'utilisateurs à insérer ici]</div>
            ";
        }
        // line 351
        yield "        </div>
        <!-- Ajoutez d'autres graphiques selon vos besoins -->
    </div>
    <div class=\"divider\"></div>
    <div class=\"stats-section\">
        <p>Ce rapport PDF est personnalisé pour votre entreprise. Pour chaque graphique affiché sur le dashboard web, générez une image côté serveur et passez-la à ce template sous forme de variable base64.</p>
    </div>
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
        return "admin/advanced_statistiques/report_pdf.html.twig";
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
        return array (  545 => 351,  541 => 349,  535 => 347,  533 => 346,  528 => 343,  524 => 341,  518 => 339,  516 => 338,  511 => 335,  507 => 333,  501 => 331,  499 => 330,  487 => 321,  481 => 320,  477 => 319,  473 => 318,  469 => 317,  465 => 316,  451 => 304,  447 => 302,  441 => 300,  439 => 299,  434 => 296,  430 => 294,  424 => 292,  422 => 291,  417 => 288,  413 => 286,  407 => 284,  405 => 283,  395 => 276,  386 => 272,  379 => 268,  372 => 264,  365 => 260,  358 => 256,  335 => 236,  330 => 233,  326 => 231,  320 => 229,  318 => 228,  313 => 225,  309 => 223,  303 => 221,  301 => 220,  296 => 217,  292 => 215,  286 => 213,  284 => 212,  274 => 205,  267 => 201,  263 => 200,  256 => 196,  249 => 192,  242 => 188,  235 => 184,  226 => 178,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Rapport Statistiques Avancées avec Graphiques #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Rapport Statistiques Avancées</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;900&display=swap');
    body {
        font-family: 'Inter', Arial, sans-serif;
        color: #22223b;
        background: #f8fafc;
        margin: 0;
        padding: 0;
        min-height: 100vh;
    }
    .header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #fff;
        border-bottom: 3px solid #7367F0;
        padding: 28px 48px 18px 48px;
        box-shadow: 0 2px 12px rgba(115,103,240,0.07);
    }
    .header-left {
        display: flex;
        align-items: center;
    }
    .logo {
        width: 54px;
        height: 54px;
        border-radius: 14px;
        background: #fff;
        box-shadow: 0 1px 8px #ecebfa;
        margin-right: 18px;
    }
    .brand-title {
        font-size: 2.1em;
        font-weight: 900;
        color: #232946;
        letter-spacing: 2px;
    }
    .subtitle {
        font-size: 1.09em;
        color: #7367F0;
        font-weight: 600;
        letter-spacing: 1.2px;
        margin-top: 4px;
    }
    .report-date {
        font-size: 1em;
        color: #b8b6f3;
        font-weight: 600;
    }
    .main {
        max-width: 980px;
        margin: 36px auto 0 auto;
        background: #fff;
        border-radius: 22px;
        box-shadow: 0 4px 24px rgba(115,103,240,0.08);
        padding: 44px 54px 32px 54px;
        position: relative;
    }
    .card-row {
        display: flex;
        flex-wrap: wrap;
        gap: 32px;
        margin-bottom: 44px;
    }
    .stat-card {
        flex: 1 1 180px;
        min-width: 180px;
        background: linear-gradient(90deg, #f8fafc 60%, #ecebfa 100%);
        border-radius: 14px;
        box-shadow: 0 2px 8px #ecebfa;
        padding: 22px 20px 18px 24px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        border: 1.5px solid #ecebfa;
    }
    .stat-label {
        font-size: 1em;
        color: #82868b;
        font-weight: 600;
        margin-bottom: 6px;
    }
    .stat-value {
        font-size: 2.1em;
        font-weight: 900;
        color: #232946;
        letter-spacing: 1px;
    }
    .stat-note {
        font-size: 0.93em;
        color: #b8b6f3;
        margin-top: 4px;
    }
    .section-title {
        font-size: 1.3em;
        color: #232946;
        font-weight: 700;
        letter-spacing: 1.2px;
        margin: 32px 0 18px 0;
        border-left: 6px solid #7367F0;
        padding-left: 14px;
    }
    .charts-row {
        display: flex;
        flex-wrap: wrap;
        gap: 38px;
        margin-bottom: 34px;
    }
    .chart-block {
        flex: 1 1 280px;
        min-width: 280px;
        background: #f4f5fb;
        border-radius: 12px;
        box-shadow: 0 1px 4px #ecebfa;
        padding: 18px 18px 12px 18px;
        display: flex;
        flex-direction: column;
        align-items: center;
        border: 1.5px solid #ecebfa;
    }
    .chart-block h3 {
        font-size: 1.05em;
        color: #7367F0;
        font-weight: 700;
        margin-bottom: 10px;
    }
    .chart-img {
        display: block;
        margin: 0 auto 18px auto;
        max-width: 520px;
        max-height: 340px;
        min-width: 340px;
        min-height: 180px;
        border-radius: 14px;
        background: #fff;
        box-shadow: 0 2px 12px #ecebfa;
        border: 2px solid #ecebfa;
    }
    .footer {
        width: 100%;
        background: #fff;
        border-top: 2px solid #ecebfa;
        color: #b8b6f3;
        font-size: 1em;
        text-align: center;
        padding: 16px 0 8px 0;
        position: fixed;
        bottom: 0;
        left: 0;
    }
    .page-number {
        color: #7367F0;
        font-weight: 600;
        margin-left: 4px;
    }
    .copyright {
        color: #b8b6f3;
        font-size: 0.95em;
        margin-top: 4px;
    }
</style>
</head>
<body>
    <div class=\"header\">
        <div class=\"header-left\">
            <img src=\"https://cdn-icons-png.flaticon.com/512/3135/3135715.png\" alt=\"Logo\" class=\"logo\">
            <div>
                <div class=\"brand-title\">Golden Touch</div>
                <div class=\"subtitle\">Rapport Statistiques Avancées</div>
            </div>
        </div>
        <div class=\"report-date\">Généré le {{ \"now\"|date('d/m/Y') }}</div>
    </div>
    <div class=\"main\">
        <div class=\"card-row\">
            <div class=\"stat-card\">
                <div class=\"stat-label\">Total Packs</div>
                <div class=\"stat-value\">{{ packStats.total_packs }}</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-label\">Croissance Packs</div>
                <div class=\"stat-value\">{{ packStats.growth_rate }}%</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-label\">Total Utilisateurs</div>
                <div class=\"stat-value\">{{ userStats.total_users }}</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-label\">Croissance Utilisateurs</div>
                <div class=\"stat-value\">{{ userStats.growth_rate }}%</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-label\">Pack le Plus Vendu</div>
                <div class=\"stat-value\">{{ mostSoldPack.description }}</div>
                <div class=\"stat-note\">{{ mostSoldPack.total_sales }} ventes</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-label\">Prix Moyen des Packs</div>
                <div class=\"stat-value\">€{{ averagePackPrice }}</div>
            </div>
        </div>
        <div class=\"section-title\">Graphiques & Visualisations</div>
        <div class=\"charts-row\">
            <div class=\"chart-block\">
                <h3>Évolution des réservations</h3>
                {% if reservationTrendsChartBase64 is defined %}
                    <img class=\"chart-img\" src=\"data:image/png;base64,{{ reservationTrendsChartBase64 }}\" alt=\"Évolution des réservations\">
                {% else %}
                    <div style=\"color: #bbb;\">[Graphique à insérer ici]</div>
                {% endif %}
            </div>
            <div class=\"chart-block\">
                <h3>Répartition des ventes des packs</h3>
                {% if packsSalesChartBase64 is defined %}
                    <img class=\"chart-img\" src=\"data:image/png;base64,{{ packsSalesChartBase64 }}\" alt=\"Répartition des ventes des packs\">
                {% else %}
                    <div style=\"color: #bbb;\">[Diagramme circulaire à insérer ici]</div>
                {% endif %}
            </div>
            <div class=\"chart-block\">
                <h3>Utilisateurs actifs par période</h3>
                {% if usersActiveChartBase64 is defined %}
                    <img class=\"chart-img\" src=\"data:image/png;base64,{{ usersActiveChartBase64 }}\" alt=\"Utilisateurs actifs par période\">
                {% else %}
                    <div style=\"color: #bbb;\">[Graphique d'utilisateurs à insérer ici]</div>
                {% endif %}
            </div>
        </div>
        <div class=\"copyright\">
            © {{ \"now\"|date('Y') }} Golden Touch. Tous droits réservés.
        </div>
    </div>
    <div class=\"footer\">
        Page <span class=\"page-number\"> <span class=\"pageNumber\"></span> / <span class=\"totalPages\"></span> </span>
    </div>
</body>
    <div class=\"watermark\">Golden Touch</div>
    <div class=\"accent-bar\"></div>
    <div class=\"pdf-header\">
        <img src=\"https://cdn-icons-png.flaticon.com/512/3135/3135715.png\" alt=\"Logo\" class=\"logo\">
        <div class=\"header-content\">
            <span class=\"brand\">Golden Touch</span>
            <span class=\"subtitle\">Rapport Premium — Statistiques Avancées</span>
        </div>
    </div>
    <div class=\"main-section\">
        <div class=\"summary-card\">
            <div>
                <span class=\"summary-label\">Total Packs :</span>
                <span class=\"summary-value\">{{ packStats.total_packs }}</span>
            </div>
            <div>
                <span class=\"summary-label\">Croissance Packs :</span>
                <span class=\"summary-value\">{{ packStats.growth_rate }}%</span>
            </div>
            <div>
                <span class=\"summary-label\">Total Utilisateurs :</span>
                <span class=\"summary-value\">{{ userStats.total_users }}</span>
            </div>
            <div>
                <span class=\"summary-label\">Croissance Utilisateurs :</span>
                <span class=\"summary-value\">{{ userStats.growth_rate }}%</span>
            </div>
            <div>
                <span class=\"summary-label\">Pack le Plus Vendu :</span>
                <span class=\"summary-value\">{{ mostSoldPack.description }} ({{ mostSoldPack.total_sales }})</span>
            </div>
            <div>
                <span class=\"summary-label\">Prix Moyen des Packs :</span>
                <span class=\"summary-value\">€{{ averagePackPrice }}</span>
            </div>
        </div>
        <h2>Graphiques & Visualisations</h2>
        <div class=\"divider-gradient\"></div>
        <div style=\"margin-bottom: 32px;\">
            <h3>Évolution des réservations</h3>
            {% if reservationTrendsChartBase64 is defined %}
                <img class=\"chart-img\" src=\"data:image/png;base64,{{ reservationTrendsChartBase64 }}\" alt=\"Évolution des réservations\">
            {% else %}
                <div style=\"color: #999;\">[Graphique à insérer ici]</div>
            {% endif %}
        </div>
        <div style=\"margin-bottom: 32px;\">
            <h3>Répartition des ventes des packs</h3>
            {% if packsSalesChartBase64 is defined %}
                <img class=\"chart-img\" src=\"data:image/png;base64,{{ packsSalesChartBase64 }}\" alt=\"Répartition des ventes des packs\">
            {% else %}
                <div style=\"color: #999;\">[Diagramme circulaire à insérer ici]</div>
            {% endif %}
        </div>
        <div style=\"margin-bottom: 32px;\">
            <h3>Utilisateurs actifs par période</h3>
            {% if usersActiveChartBase64 is defined %}
                <img class=\"chart-img\" src=\"data:image/png;base64,{{ usersActiveChartBase64 }}\" alt=\"Utilisateurs actifs par période\">
            {% else %}
                <div style=\"color: #999;\">[Graphique d'utilisateurs à insérer ici]</div>
            {% endif %}
        </div>
        <!-- Ajoutez d'autres graphiques selon vos besoins -->
        <div class=\"divider-gradient\"></div>
        <div class=\"stats-section\">
            <p>Ce rapport PDF est personnalisé pour votre entreprise. Pour chaque graphique affiché sur le dashboard web, générez une image côté serveur et passez-la à ce template sous forme de variable base64.</p>
        </div>
    </div>
    <div class=\"pdf-footer\">
        Page <span class=\"pageNumber\"></span> / <span class=\"totalPages\"></span>
    </div>
    <h1>Rapport Statistiques Avancées</h1>
    <div class=\"stats-section\">
        <div><span class=\"stat-label\">Total Packs:</span><span class=\"stat-value\">{{ packStats.total_packs }}</span></div>
        <div><span class=\"stat-label\">Croissance Packs:</span><span class=\"stat-value\">{{ packStats.growth_rate }}%</span></div>
        <div><span class=\"stat-label\">Total Utilisateurs:</span><span class=\"stat-value\">{{ userStats.total_users }}</span></div>
        <div><span class=\"stat-label\">Croissance Utilisateurs:</span><span class=\"stat-value\">{{ userStats.growth_rate }}%</span></div>
        <div><span class=\"stat-label\">Pack le Plus Vendu:</span><span class=\"stat-value\">{{ mostSoldPack.description }} ({{ mostSoldPack.total_sales }})</span></div>
        <div><span class=\"stat-label\">Prix Moyen des Packs:</span><span class=\"stat-value\">€{{ averagePackPrice }}</span></div>
    </div>
    <div class=\"divider\"></div>
    <div class=\"stats-section\">
        <h2>Graphiques & Visualisations</h2>
        <p>Les graphiques suivants représentent visuellement les statistiques clés. (Pour PDF, chaque graphique doit être généré côté serveur et injecté en tant qu'image base64)</p>
        <!-- Exemple de graphique (remplacer src par une variable Twig contenant l'image base64) -->
        <div style=\"margin-bottom: 32px;\">
            <h3>Évolution des réservations</h3>
            {% if reservationTrendsChartBase64 is defined %}
                <img class=\"chart-img\" src=\"data:image/png;base64,{{ reservationTrendsChartBase64 }}\" alt=\"Évolution des réservations\">
            {% else %}
                <div style=\"color: #999;\">[Graphique à insérer ici]</div>
            {% endif %}
        </div>
        <div style=\"margin-bottom: 32px;\">
            <h3>Répartition des ventes des packs</h3>
            {% if packsSalesChartBase64 is defined %}
                <img class=\"chart-img\" src=\"data:image/png;base64,{{ packsSalesChartBase64 }}\" alt=\"Répartition des ventes des packs\">
            {% else %}
                <div style=\"color: #999;\">[Diagramme circulaire à insérer ici]</div>
            {% endif %}
        </div>
        <div style=\"margin-bottom: 32px;\">
            <h3>Utilisateurs actifs par période</h3>
            {% if usersActiveChartBase64 is defined %}
                <img class=\"chart-img\" src=\"data:image/png;base64,{{ usersActiveChartBase64 }}\" alt=\"Utilisateurs actifs par période\">
            {% else %}
                <div style=\"color: #999;\">[Graphique d'utilisateurs à insérer ici]</div>
            {% endif %}
        </div>
        <!-- Ajoutez d'autres graphiques selon vos besoins -->
    </div>
    <div class=\"divider\"></div>
    <div class=\"stats-section\">
        <p>Ce rapport PDF est personnalisé pour votre entreprise. Pour chaque graphique affiché sur le dashboard web, générez une image côté serveur et passez-la à ce template sous forme de variable base64.</p>
    </div>
</body>
</html>
", "admin/advanced_statistiques/report_pdf.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\admin\\advanced_statistiques\\report_pdf.html.twig");
    }
}
