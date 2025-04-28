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

/* admin/reports/reviews.html.twig */
class __TwigTemplate_46311f8986f2db70d62edc261973baac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reports/reviews.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reports/reviews.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Reviews Report</title>
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
        .rating-bar {
            margin: 10px 0;
        }
        .rating-label {
            display: inline-block;
            width: 50px;
        }
        .bar {
            display: inline-block;
            height: 20px;
            background: #3498db;
            margin-right: 10px;
        }
        .bar-value {
            display: inline-block;
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
        <h1>Reviews Analytics Report</h1>
        <p>Generated on ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["generatedAt"]) || array_key_exists("generatedAt", $context) ? $context["generatedAt"] : (function () { throw new RuntimeError('Variable "generatedAt" does not exist.', 73, $this->source); })()), "F j, Y, g:i a"), "html", null, true);
        yield "</p>
    </div>

    <div class=\"section\">
        <h2 class=\"section-title\">Overview</h2>
        <div class=\"stats-grid\">
            <div class=\"stat-box\">
                <div class=\"stat-value\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 80, $this->source); })()), "total_reviews", [], "any", false, false, false, 80), "html", null, true);
        yield "</div>
                <div class=\"stat-label\">Total Reviews</div>
            </div>
            <div class=\"stat-box\">
                <div class=\"stat-value\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 84, $this->source); })()), "avg_rating", [], "any", false, false, false, 84), 1), "html", null, true);
        yield "</div>
                <div class=\"stat-label\">Average Rating</div>
            </div>
            <div class=\"stat-box\">
                <div class=\"stat-value\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 88, $this->source); })()), "positive_sentiment", [], "any", false, false, false, 88), "html", null, true);
        yield "%</div>
                <div class=\"stat-label\">Positive Sentiment</div>
            </div>
        </div>
    </div>

    <div class=\"section\">
        <h2 class=\"section-title\">Rating Distribution</h2>
        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(5, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 97
            yield "            <div class=\"rating-bar\">
                <span class=\"rating-label\">";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield " ★</span>
                <div class=\"bar\" style=\"width: ";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 99, $this->source); })()), (("rating_" . $context["i"]) . "_percent"), [], "array", false, false, false, 99), "html", null, true);
            yield "%;\"></div>
                <span class=\"bar-value\">";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 100, $this->source); })()), (("rating_" . $context["i"]) . "_percent"), [], "array", false, false, false, 100), "html", null, true);
            yield "%</span>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "    </div>

    <div class=\"section\">
        <h2 class=\"section-title\">Sentiment Analysis</h2>
        <div class=\"stats-grid\">
            <div class=\"stat-box\">
                <div class=\"stat-value\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 109, $this->source); })()), "positive_sentiment", [], "any", false, false, false, 109), "html", null, true);
        yield "%</div>
                <div class=\"stat-label\">Positive</div>
            </div>
            <div class=\"stat-box\">
                <div class=\"stat-value\">";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 113, $this->source); })()), "neutral_sentiment", [], "any", false, false, false, 113), "html", null, true);
        yield "%</div>
                <div class=\"stat-label\">Neutral</div>
            </div>
            <div class=\"stat-box\">
                <div class=\"stat-value\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reviewStats"]) || array_key_exists("reviewStats", $context) ? $context["reviewStats"] : (function () { throw new RuntimeError('Variable "reviewStats" does not exist.', 117, $this->source); })()), "negative_sentiment", [], "any", false, false, false, 117), "html", null, true);
        yield "%</div>
                <div class=\"stat-label\">Negative</div>
            </div>
        </div>
    </div>

    <div class=\"section\">
        <h2 class=\"section-title\">Review Trends</h2>
        <table style=\"width: 100%; border-collapse: collapse;\">
            <thead>
                <tr style=\"background: #f8f9fa;\">
                    <th style=\"padding: 10px; text-align: left;\">Date</th>
                    <th style=\"padding: 10px; text-align: right;\">Reviews</th>
                    <th style=\"padding: 10px; text-align: right;\">Avg Rating</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reviewTrends"]) || array_key_exists("reviewTrends", $context) ? $context["reviewTrends"] : (function () { throw new RuntimeError('Variable "reviewTrends" does not exist.', 134, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trend"]) {
            // line 135
            yield "                    <tr style=\"border-bottom: 1px solid #ecf0f1;\">
                        <td style=\"padding: 10px;\">";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["trend"], "date", [], "any", false, false, false, 136), "M j, Y"), "html", null, true);
            yield "</td>
                        <td style=\"padding: 10px; text-align: right;\">";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trend"], "count", [], "any", false, false, false, 137), "html", null, true);
            yield "</td>
                        <td style=\"padding: 10px; text-align: right;\">";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["trend"], "avg_rating", [], "any", false, false, false, 138), 1), "html", null, true);
            yield "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trend'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        yield "            </tbody>
        </table>
    </div>

    <div class=\"footer\">
        <p>© ";
        // line 146
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
        return "admin/reports/reviews.html.twig";
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
        return array (  254 => 146,  247 => 141,  238 => 138,  234 => 137,  230 => 136,  227 => 135,  223 => 134,  203 => 117,  196 => 113,  189 => 109,  181 => 103,  172 => 100,  168 => 99,  164 => 98,  161 => 97,  157 => 96,  146 => 88,  139 => 84,  132 => 80,  122 => 73,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Reviews Report</title>
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
        .rating-bar {
            margin: 10px 0;
        }
        .rating-label {
            display: inline-block;
            width: 50px;
        }
        .bar {
            display: inline-block;
            height: 20px;
            background: #3498db;
            margin-right: 10px;
        }
        .bar-value {
            display: inline-block;
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
        <h1>Reviews Analytics Report</h1>
        <p>Generated on {{ generatedAt|date('F j, Y, g:i a') }}</p>
    </div>

    <div class=\"section\">
        <h2 class=\"section-title\">Overview</h2>
        <div class=\"stats-grid\">
            <div class=\"stat-box\">
                <div class=\"stat-value\">{{ reviewStats.total_reviews }}</div>
                <div class=\"stat-label\">Total Reviews</div>
            </div>
            <div class=\"stat-box\">
                <div class=\"stat-value\">{{ reviewStats.avg_rating|number_format(1) }}</div>
                <div class=\"stat-label\">Average Rating</div>
            </div>
            <div class=\"stat-box\">
                <div class=\"stat-value\">{{ reviewStats.positive_sentiment }}%</div>
                <div class=\"stat-label\">Positive Sentiment</div>
            </div>
        </div>
    </div>

    <div class=\"section\">
        <h2 class=\"section-title\">Rating Distribution</h2>
        {% for i in 5..1 %}
            <div class=\"rating-bar\">
                <span class=\"rating-label\">{{ i }} ★</span>
                <div class=\"bar\" style=\"width: {{ reviewStats['rating_' ~ i ~ '_percent'] }}%;\"></div>
                <span class=\"bar-value\">{{ reviewStats['rating_' ~ i ~ '_percent'] }}%</span>
            </div>
        {% endfor %}
    </div>

    <div class=\"section\">
        <h2 class=\"section-title\">Sentiment Analysis</h2>
        <div class=\"stats-grid\">
            <div class=\"stat-box\">
                <div class=\"stat-value\">{{ reviewStats.positive_sentiment }}%</div>
                <div class=\"stat-label\">Positive</div>
            </div>
            <div class=\"stat-box\">
                <div class=\"stat-value\">{{ reviewStats.neutral_sentiment }}%</div>
                <div class=\"stat-label\">Neutral</div>
            </div>
            <div class=\"stat-box\">
                <div class=\"stat-value\">{{ reviewStats.negative_sentiment }}%</div>
                <div class=\"stat-label\">Negative</div>
            </div>
        </div>
    </div>

    <div class=\"section\">
        <h2 class=\"section-title\">Review Trends</h2>
        <table style=\"width: 100%; border-collapse: collapse;\">
            <thead>
                <tr style=\"background: #f8f9fa;\">
                    <th style=\"padding: 10px; text-align: left;\">Date</th>
                    <th style=\"padding: 10px; text-align: right;\">Reviews</th>
                    <th style=\"padding: 10px; text-align: right;\">Avg Rating</th>
                </tr>
            </thead>
            <tbody>
                {% for trend in reviewTrends %}
                    <tr style=\"border-bottom: 1px solid #ecf0f1;\">
                        <td style=\"padding: 10px;\">{{ trend.date|date('M j, Y') }}</td>
                        <td style=\"padding: 10px; text-align: right;\">{{ trend.count }}</td>
                        <td style=\"padding: 10px; text-align: right;\">{{ trend.avg_rating|number_format(1) }}</td>
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
", "admin/reports/reviews.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\admin\\reports\\reviews.html.twig");
    }
}
