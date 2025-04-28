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

/* admin/reports/pack.html.twig */
class __TwigTemplate_66ce5ccc6b0384921a25f6e3d7074b80 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reports/pack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reports/pack.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Pack Analytics Report</title>
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
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 20px;
        }
        .stat-box {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
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
        .insights {
            margin: 20px 0;
        }
        .insight-item {
            margin: 10px 0;
            padding: 10px;
            background: #f8f9fa;
            border-left: 4px solid #3498db;
        }
        .insight-item.positive {
            border-color: #2ecc71;
        }
        .insight-item.negative {
            border-color: #e74c3c;
        }
        .chart-container {
            margin: 20px 0;
            text-align: center;
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
        <h1>Pack Analytics Report</h1>
        <h2>";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 89, $this->source); })()), "description", [], "any", false, false, false, 89), "html", null, true);
        yield "</h2>
        <p>Generated on ";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["generatedAt"]) || array_key_exists("generatedAt", $context) ? $context["generatedAt"] : (function () { throw new RuntimeError('Variable "generatedAt" does not exist.', 90, $this->source); })()), "F j, Y, g:i a"), "html", null, true);
        yield "</p>
    </div>

    <div class=\"section\">
        <h2 class=\"section-title\">Key Insights</h2>
        <div class=\"insights\">
            ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["insights"]) || array_key_exists("insights", $context) ? $context["insights"] : (function () { throw new RuntimeError('Variable "insights" does not exist.', 96, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["insight"]) {
            // line 97
            yield "                <div class=\"insight-item ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["insight"], "type", [], "any", false, false, false, 97), "html", null, true);
            yield "\">
                    <i class=\"icon ";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["insight"], "icon", [], "any", false, false, false, 98), "html", null, true);
            yield "\"></i>
                    ";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["insight"], "text", [], "any", false, false, false, 99), "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['insight'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        yield "        </div>
    </div>

    <div class=\"section\">
        <h2 class=\"section-title\">Sales Distribution</h2>
        <div class=\"stats-grid\">
            <div class=\"stat-box\">
                <div class=\"stat-value\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analytics"]) || array_key_exists("analytics", $context) ? $context["analytics"] : (function () { throw new RuntimeError('Variable "analytics" does not exist.', 109, $this->source); })()), "salesDistribution", [], "any", false, false, false, 109), "trend", [], "any", false, false, false, 109), "html", null, true);
        yield "%</div>
                <div class=\"stat-label\">Sales Growth</div>
            </div>
        </div>
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Month</th>
                    <th>Sales</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analytics"]) || array_key_exists("analytics", $context) ? $context["analytics"] : (function () { throw new RuntimeError('Variable "analytics" does not exist.', 121, $this->source); })()), "salesDistribution", [], "any", false, false, false, 121), "labels", [], "any", false, false, false, 121)) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 122
            yield "                    <tr>
                        <td>";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analytics"]) || array_key_exists("analytics", $context) ? $context["analytics"] : (function () { throw new RuntimeError('Variable "analytics" does not exist.', 123, $this->source); })()), "salesDistribution", [], "any", false, false, false, 123), "labels", [], "any", false, false, false, 123), $context["i"], [], "array", false, false, false, 123), "html", null, true);
            yield "</td>
                        <td>";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analytics"]) || array_key_exists("analytics", $context) ? $context["analytics"] : (function () { throw new RuntimeError('Variable "analytics" does not exist.', 124, $this->source); })()), "salesDistribution", [], "any", false, false, false, 124), "data", [], "any", false, false, false, 124), $context["i"], [], "array", false, false, false, 124), "html", null, true);
            yield "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        yield "            </tbody>
        </table>
    </div>

    <div class=\"section\">
        <h2 class=\"section-title\">Revenue Growth</h2>
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Revenue</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analytics"]) || array_key_exists("analytics", $context) ? $context["analytics"] : (function () { throw new RuntimeError('Variable "analytics" does not exist.', 141, $this->source); })()), "revenueGrowth", [], "any", false, false, false, 141), "labels", [], "any", false, false, false, 141)) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 142
            yield "                    <tr>
                        <td>";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analytics"]) || array_key_exists("analytics", $context) ? $context["analytics"] : (function () { throw new RuntimeError('Variable "analytics" does not exist.', 143, $this->source); })()), "revenueGrowth", [], "any", false, false, false, 143), "labels", [], "any", false, false, false, 143), $context["i"], [], "array", false, false, false, 143), "html", null, true);
            yield "</td>
                        <td>€";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analytics"]) || array_key_exists("analytics", $context) ? $context["analytics"] : (function () { throw new RuntimeError('Variable "analytics" does not exist.', 144, $this->source); })()), "revenueGrowth", [], "any", false, false, false, 144), "data", [], "any", false, false, false, 144), $context["i"], [], "array", false, false, false, 144), 2), "html", null, true);
            yield "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        yield "            </tbody>
        </table>
    </div>

    <div class=\"section\">
        <h2 class=\"section-title\">Demographics</h2>
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Age Group</th>
                    <th>Percentage</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analytics"]) || array_key_exists("analytics", $context) ? $context["analytics"] : (function () { throw new RuntimeError('Variable "analytics" does not exist.', 161, $this->source); })()), "demographics", [], "any", false, false, false, 161), "labels", [], "any", false, false, false, 161)) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 162
            yield "                    <tr>
                        <td>";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analytics"]) || array_key_exists("analytics", $context) ? $context["analytics"] : (function () { throw new RuntimeError('Variable "analytics" does not exist.', 163, $this->source); })()), "demographics", [], "any", false, false, false, 163), "labels", [], "any", false, false, false, 163), $context["i"], [], "array", false, false, false, 163), "html", null, true);
            yield "</td>
                        <td>";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analytics"]) || array_key_exists("analytics", $context) ? $context["analytics"] : (function () { throw new RuntimeError('Variable "analytics" does not exist.', 164, $this->source); })()), "demographics", [], "any", false, false, false, 164), "data", [], "any", false, false, false, 164), $context["i"], [], "array", false, false, false, 164), "html", null, true);
            yield "%</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        yield "            </tbody>
        </table>
    </div>

    <div class=\"section\">
        <h2 class=\"section-title\">Time Analysis</h2>
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Time Period</th>
                    <th>Purchases</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analytics"]) || array_key_exists("analytics", $context) ? $context["analytics"] : (function () { throw new RuntimeError('Variable "analytics" does not exist.', 181, $this->source); })()), "timeAnalysis", [], "any", false, false, false, 181), "labels", [], "any", false, false, false, 181)) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 182
            yield "                    <tr>
                        <td>";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analytics"]) || array_key_exists("analytics", $context) ? $context["analytics"] : (function () { throw new RuntimeError('Variable "analytics" does not exist.', 183, $this->source); })()), "timeAnalysis", [], "any", false, false, false, 183), "labels", [], "any", false, false, false, 183), $context["i"], [], "array", false, false, false, 183), "html", null, true);
            yield "</td>
                        <td>";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analytics"]) || array_key_exists("analytics", $context) ? $context["analytics"] : (function () { throw new RuntimeError('Variable "analytics" does not exist.', 184, $this->source); })()), "timeAnalysis", [], "any", false, false, false, 184), "data", [], "any", false, false, false, 184), $context["i"], [], "array", false, false, false, 184), "html", null, true);
            yield "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        yield "            </tbody>
        </table>
    </div>

    <div class=\"footer\">
        <p>© ";
        // line 192
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
        return "admin/reports/pack.html.twig";
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
        return array (  332 => 192,  325 => 187,  316 => 184,  312 => 183,  309 => 182,  305 => 181,  289 => 167,  280 => 164,  276 => 163,  273 => 162,  269 => 161,  253 => 147,  244 => 144,  240 => 143,  237 => 142,  233 => 141,  217 => 127,  208 => 124,  204 => 123,  201 => 122,  197 => 121,  182 => 109,  173 => 102,  164 => 99,  160 => 98,  155 => 97,  151 => 96,  142 => 90,  138 => 89,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Pack Analytics Report</title>
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
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 20px;
        }
        .stat-box {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
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
        .insights {
            margin: 20px 0;
        }
        .insight-item {
            margin: 10px 0;
            padding: 10px;
            background: #f8f9fa;
            border-left: 4px solid #3498db;
        }
        .insight-item.positive {
            border-color: #2ecc71;
        }
        .insight-item.negative {
            border-color: #e74c3c;
        }
        .chart-container {
            margin: 20px 0;
            text-align: center;
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
        <h1>Pack Analytics Report</h1>
        <h2>{{ pack.description }}</h2>
        <p>Generated on {{ generatedAt|date('F j, Y, g:i a') }}</p>
    </div>

    <div class=\"section\">
        <h2 class=\"section-title\">Key Insights</h2>
        <div class=\"insights\">
            {% for insight in insights %}
                <div class=\"insight-item {{ insight.type }}\">
                    <i class=\"icon {{ insight.icon }}\"></i>
                    {{ insight.text }}
                </div>
            {% endfor %}
        </div>
    </div>

    <div class=\"section\">
        <h2 class=\"section-title\">Sales Distribution</h2>
        <div class=\"stats-grid\">
            <div class=\"stat-box\">
                <div class=\"stat-value\">{{ analytics.salesDistribution.trend }}%</div>
                <div class=\"stat-label\">Sales Growth</div>
            </div>
        </div>
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Month</th>
                    <th>Sales</th>
                </tr>
            </thead>
            <tbody>
                {% for i in 0..analytics.salesDistribution.labels|length - 1 %}
                    <tr>
                        <td>{{ analytics.salesDistribution.labels[i] }}</td>
                        <td>{{ analytics.salesDistribution.data[i] }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    <div class=\"section\">
        <h2 class=\"section-title\">Revenue Growth</h2>
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Revenue</th>
                </tr>
            </thead>
            <tbody>
                {% for i in 0..analytics.revenueGrowth.labels|length - 1 %}
                    <tr>
                        <td>{{ analytics.revenueGrowth.labels[i] }}</td>
                        <td>€{{ analytics.revenueGrowth.data[i]|number_format(2) }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    <div class=\"section\">
        <h2 class=\"section-title\">Demographics</h2>
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Age Group</th>
                    <th>Percentage</th>
                </tr>
            </thead>
            <tbody>
                {% for i in 0..analytics.demographics.labels|length - 1 %}
                    <tr>
                        <td>{{ analytics.demographics.labels[i] }}</td>
                        <td>{{ analytics.demographics.data[i] }}%</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    <div class=\"section\">
        <h2 class=\"section-title\">Time Analysis</h2>
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Time Period</th>
                    <th>Purchases</th>
                </tr>
            </thead>
            <tbody>
                {% for i in 0..analytics.timeAnalysis.labels|length - 1 %}
                    <tr>
                        <td>{{ analytics.timeAnalysis.labels[i] }}</td>
                        <td>{{ analytics.timeAnalysis.data[i] }}</td>
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
", "admin/reports/pack.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\admin\\reports\\pack.html.twig");
    }
}
