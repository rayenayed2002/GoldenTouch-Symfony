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

/* admin/reports/packs.html.twig */
class __TwigTemplate_f05c661ea2f6b6687ba8a69523bde70d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reports/packs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reports/packs.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Packs Analytics Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            color: #333;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .section {
            margin-bottom: 30px;
        }
        .section-title {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 5px;
            margin-bottom: 15px;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 20px;
        }
        .stat-box {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
        }
        .stat-value {
            font-size: 24px;
            font-weight: bold;
            color: #2980b9;
        }
        .stat-label {
            font-size: 14px;
            color: #7f8c8d;
        }
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .data-table th,
        .data-table td {
            padding: 10px;
            border-bottom: 1px solid #ecf0f1;
            text-align: left;
        }
        .data-table th {
            background: #f8f9fa;
        }
        .trend-indicator {
            display: inline-block;
            padding: 2px 6px;
            border-radius: 3px;
            font-size: 12px;
            margin-left: 5px;
        }
        .trend-up {
            background: #e8f8f5;
            color: #27ae60;
        }
        .trend-down {
            background: #fbe9e7;
            color: #e74c3c;
        }
        .footer {
            margin-top: 40px;
            text-align: center;
            font-size: 12px;
            color: #95a5a6;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Packs Analytics Report</h1>
        <p>Generated on ";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["generatedAt"]) || array_key_exists("generatedAt", $context) ? $context["generatedAt"] : (function () { throw new RuntimeError('Variable "generatedAt" does not exist.', 86, $this->source); })()), "F j, Y, g:i a"), "html", null, true);
        yield "</p>
    </div>

    <div class=\"section\">
        <h2 class=\"section-title\">Overview</h2>
        <div class=\"stats-grid\">
            <div class=\"stat-box\">
                <div class=\"stat-value\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["revenueStats"]) || array_key_exists("revenueStats", $context) ? $context["revenueStats"] : (function () { throw new RuntimeError('Variable "revenueStats" does not exist.', 93, $this->source); })()), "total_revenue", [], "any", false, false, false, 93), 2), "html", null, true);
        yield "€</div>
                <div class=\"stat-label\">Total Revenue</div>
            </div>
            <div class=\"stat-box\">
                <div class=\"stat-value\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["revenueStats"]) || array_key_exists("revenueStats", $context) ? $context["revenueStats"] : (function () { throw new RuntimeError('Variable "revenueStats" does not exist.', 97, $this->source); })()), "total_sales", [], "any", false, false, false, 97), "html", null, true);
        yield "</div>
                <div class=\"stat-label\">Total Sales</div>
            </div>
            <div class=\"stat-box\">
                <div class=\"stat-value\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["revenueStats"]) || array_key_exists("revenueStats", $context) ? $context["revenueStats"] : (function () { throw new RuntimeError('Variable "revenueStats" does not exist.', 101, $this->source); })()), "avg_revenue_per_pack", [], "any", false, false, false, 101), 2), "html", null, true);
        yield "€</div>
                <div class=\"stat-label\">Avg Revenue/Pack</div>
            </div>
        </div>
    </div>

    <div class=\"section\">
        <h2 class=\"section-title\">Pack Performance</h2>
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Pack</th>
                    <th>Event</th>
                    <th>Purchases</th>
                    <th>Revenue</th>
                    <th>Avg Rating</th>
                    <th>Satisfaction</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["packStats"]) || array_key_exists("packStats", $context) ? $context["packStats"] : (function () { throw new RuntimeError('Variable "packStats" does not exist.', 121, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pack"]) {
            // line 122
            yield "                    <tr>
                        <td>";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "description", [], "any", false, false, false, 123), "html", null, true);
            yield "</td>
                        <td>";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "event_name", [], "any", false, false, false, 124), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "purchases", [], "any", false, false, false, 126), "html", null, true);
            yield "
                            <span class=\"trend-indicator ";
            // line 127
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "purchases_change", [], "any", false, false, false, 127) > 0)) ? ("trend-up") : ("trend-down"));
            yield "\">
                                ";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "purchases_change", [], "any", false, false, false, 128), "html", null, true);
            yield "%
                            </span>
                        </td>
                        <td>
                            ";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "revenue", [], "any", false, false, false, 132), 2), "html", null, true);
            yield "€
                            <span class=\"trend-indicator ";
            // line 133
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "revenue_change", [], "any", false, false, false, 133) > 0)) ? ("trend-up") : ("trend-down"));
            yield "\">
                                ";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "revenue_change", [], "any", false, false, false, 134), "html", null, true);
            yield "%
                            </span>
                        </td>
                        <td>";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "avg_rating", [], "any", false, false, false, 137), 1), "html", null, true);
            yield "</td>
                        <td>";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "satisfaction_rate", [], "any", false, false, false, 138), "html", null, true);
            yield "%</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pack'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        yield "            </tbody>
        </table>
    </div>

    <div class=\"section\">
        <h2 class=\"section-title\">Purchase Trends</h2>
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Purchases</th>
                    <th>Revenue</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["purchaseTrends"]) || array_key_exists("purchaseTrends", $context) ? $context["purchaseTrends"] : (function () { throw new RuntimeError('Variable "purchaseTrends" does not exist.', 156, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trend"]) {
            // line 157
            yield "                    <tr>
                        <td>";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["trend"], "date", [], "any", false, false, false, 158), "M j, Y"), "html", null, true);
            yield "</td>
                        <td>";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trend"], "purchases", [], "any", false, false, false, 159), "html", null, true);
            yield "</td>
                        <td>";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["trend"], "revenue", [], "any", false, false, false, 160), 2), "html", null, true);
            yield "€</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trend'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        yield "            </tbody>
        </table>
    </div>

    <div class=\"footer\">
        <p>© ";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Golden Touch. All rights reserved.</p>
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
        return "admin/reports/packs.html.twig";
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
        return array (  288 => 168,  281 => 163,  272 => 160,  268 => 159,  264 => 158,  261 => 157,  257 => 156,  240 => 141,  231 => 138,  227 => 137,  221 => 134,  217 => 133,  213 => 132,  206 => 128,  202 => 127,  198 => 126,  193 => 124,  189 => 123,  186 => 122,  182 => 121,  159 => 101,  152 => 97,  145 => 93,  135 => 86,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Packs Analytics Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            color: #333;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .section {
            margin-bottom: 30px;
        }
        .section-title {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 5px;
            margin-bottom: 15px;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 20px;
        }
        .stat-box {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
        }
        .stat-value {
            font-size: 24px;
            font-weight: bold;
            color: #2980b9;
        }
        .stat-label {
            font-size: 14px;
            color: #7f8c8d;
        }
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .data-table th,
        .data-table td {
            padding: 10px;
            border-bottom: 1px solid #ecf0f1;
            text-align: left;
        }
        .data-table th {
            background: #f8f9fa;
        }
        .trend-indicator {
            display: inline-block;
            padding: 2px 6px;
            border-radius: 3px;
            font-size: 12px;
            margin-left: 5px;
        }
        .trend-up {
            background: #e8f8f5;
            color: #27ae60;
        }
        .trend-down {
            background: #fbe9e7;
            color: #e74c3c;
        }
        .footer {
            margin-top: 40px;
            text-align: center;
            font-size: 12px;
            color: #95a5a6;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Packs Analytics Report</h1>
        <p>Generated on {{ generatedAt|date('F j, Y, g:i a') }}</p>
    </div>

    <div class=\"section\">
        <h2 class=\"section-title\">Overview</h2>
        <div class=\"stats-grid\">
            <div class=\"stat-box\">
                <div class=\"stat-value\">{{ revenueStats.total_revenue|number_format(2) }}€</div>
                <div class=\"stat-label\">Total Revenue</div>
            </div>
            <div class=\"stat-box\">
                <div class=\"stat-value\">{{ revenueStats.total_sales }}</div>
                <div class=\"stat-label\">Total Sales</div>
            </div>
            <div class=\"stat-box\">
                <div class=\"stat-value\">{{ revenueStats.avg_revenue_per_pack|number_format(2) }}€</div>
                <div class=\"stat-label\">Avg Revenue/Pack</div>
            </div>
        </div>
    </div>

    <div class=\"section\">
        <h2 class=\"section-title\">Pack Performance</h2>
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Pack</th>
                    <th>Event</th>
                    <th>Purchases</th>
                    <th>Revenue</th>
                    <th>Avg Rating</th>
                    <th>Satisfaction</th>
                </tr>
            </thead>
            <tbody>
                {% for pack in packStats %}
                    <tr>
                        <td>{{ pack.description }}</td>
                        <td>{{ pack.event_name }}</td>
                        <td>
                            {{ pack.purchases }}
                            <span class=\"trend-indicator {{ pack.purchases_change > 0 ? 'trend-up' : 'trend-down' }}\">
                                {{ pack.purchases_change }}%
                            </span>
                        </td>
                        <td>
                            {{ pack.revenue|number_format(2) }}€
                            <span class=\"trend-indicator {{ pack.revenue_change > 0 ? 'trend-up' : 'trend-down' }}\">
                                {{ pack.revenue_change }}%
                            </span>
                        </td>
                        <td>{{ pack.avg_rating|number_format(1) }}</td>
                        <td>{{ pack.satisfaction_rate }}%</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    <div class=\"section\">
        <h2 class=\"section-title\">Purchase Trends</h2>
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Purchases</th>
                    <th>Revenue</th>
                </tr>
            </thead>
            <tbody>
                {% for trend in purchaseTrends %}
                    <tr>
                        <td>{{ trend.date|date('M j, Y') }}</td>
                        <td>{{ trend.purchases }}</td>
                        <td>{{ trend.revenue|number_format(2) }}€</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    <div class=\"footer\">
        <p>© {{ 'now'|date('Y') }} Golden Touch. All rights reserved.</p>
    </div>
</body>
</html>
", "admin/reports/packs.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\admin\\reports\\packs.html.twig");
    }
}
