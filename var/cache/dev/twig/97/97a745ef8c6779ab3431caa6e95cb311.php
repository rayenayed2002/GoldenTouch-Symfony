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

/* perso/export_pdf.html.twig */
class __TwigTemplate_5792902bbfa0fc28f19be6695fb9425c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "perso/export_pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "perso/export_pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Liste des Personnels - GoldenTouch</title>
    <style>
        /* Style de base */
        body {
            font-family: 'Arial', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        
        /* Cadre doré */
        .page-container {
            border: 1px solid #D4AF37;
            margin: 15px;
            padding: 20px;
            min-height: 95%;
            position: relative;
        }
        
        /* En-tête */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #D4AF37;
            padding-bottom: 15px;
        }
        
        .logo {
            width: 150px;
        }
        
        .title {
            text-align: center;
            flex-grow: 1;
        }
        
        .main-title {
            color: #D4AF37;
            font-size: 28px;
            margin: 0;
            font-weight: bold;
        }
        
        .subtitle {
            color: #555;
            font-size: 18px;
            margin: 5px 0 0;
        }
        
        /* Carte personnel */
        .personnel-card {
            display: flex;
            margin-bottom: 25px;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .personnel-image {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-right: 1px solid #eee;
        }
        
        .personnel-info {
            padding: 15px;
            flex-grow: 1;
        }
        
        .personnel-name {
            color: #D4AF37;
            font-size: 18px;
            margin: 0 0 5px;
            font-weight: bold;
        }
        
        .info-row {
            display: flex;
            margin-bottom: 3px;
        }
        
        .info-label {
            font-weight: bold;
            width: 100px;
            color: #555;
        }
        
        .info-value {
            flex-grow: 1;
        }
        
        /* Pied de page */
        .footer {
            text-align: right;
            margin-top: 30px;
            padding-top: 10px;
            border-top: 1px solid #D4AF37;
            color: #777;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class=\"page-container\">
        <!-- En-tête -->
        <div class=\"header\">
            <img src=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/personnel/logo2.png")), "html", null, true);
        yield "\" class=\"logo\">
            <div class=\"title\">
                <h1 class=\"main-title\">GoldenTouch</h1>
                <p class=\"subtitle\">Liste des Personnels</p>
            </div>
            <div style=\"width: 150px;\"></div> <!-- Pour l'alignement -->
        </div>
        
        <!-- Date d'export -->
        <div style=\"text-align: right; margin-bottom: 20px; color: #777;\">
            Export généré le ";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y à H:i"), "html", null, true);
        yield "
        </div>
        
        <!-- Liste des personnels -->
        ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["personnels"]) || array_key_exists("personnels", $context) ? $context["personnels"] : (function () { throw new RuntimeError('Variable "personnels" does not exist.', 130, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["personnel"]) {
            // line 131
            yield "        <div class=\"personnel-card\">
            <img src=\"";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/personnel/" . CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "imageUrl", [], "any", false, false, false, 132)))), "html", null, true);
            yield "\" class=\"personnel-image\">
            <div class=\"personnel-info\">
                <h3 class=\"personnel-name\">";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "nomP", [], "any", false, false, false, 134), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "prenomP", [], "any", false, false, false, 134), "html", null, true);
            yield "</h3>
                
                <div class=\"info-row\">
                    <span class=\"info-label\">Service:</span>
                    <span class=\"info-value\">";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "serviceP", [], "any", false, false, false, 138), "html", null, true);
            yield "</span>
                </div>
                
                <div class=\"info-row\">
                    <span class=\"info-label\">Statut:</span>
                    <span class=\"info-value\">";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "statutP", [], "any", false, false, false, 143), "html", null, true);
            yield "</span>
                </div>
                
                <div class=\"info-row\">
                    <span class=\"info-label\">Tarif:</span>
                    <span class=\"info-value\">";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "tarifP", [], "any", false, false, false, 148), 2, ".", " "), "html", null, true);
            yield " TND</span>
                </div>
                
                <div class=\"info-row\">
                    <span class=\"info-label\">Description:</span>
                    <span class=\"info-value\">";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "descriptionP", [], "any", false, false, false, 153), 0, 100), "html", null, true);
            yield "...</span>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['personnel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        yield "        
        <!-- Pied de page -->
        <div class=\"footer\">
            <p>Total: ";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["personnels"]) || array_key_exists("personnels", $context) ? $context["personnels"] : (function () { throw new RuntimeError('Variable "personnels" does not exist.', 161, $this->source); })())), "html", null, true);
        yield " personnels | GoldenTouch © ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "</p>
        </div>
    </div>
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
        return "perso/export_pdf.html.twig";
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
        return array (  246 => 161,  241 => 158,  230 => 153,  222 => 148,  214 => 143,  206 => 138,  197 => 134,  192 => 132,  189 => 131,  185 => 130,  178 => 126,  165 => 116,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Liste des Personnels - GoldenTouch</title>
    <style>
        /* Style de base */
        body {
            font-family: 'Arial', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        
        /* Cadre doré */
        .page-container {
            border: 1px solid #D4AF37;
            margin: 15px;
            padding: 20px;
            min-height: 95%;
            position: relative;
        }
        
        /* En-tête */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #D4AF37;
            padding-bottom: 15px;
        }
        
        .logo {
            width: 150px;
        }
        
        .title {
            text-align: center;
            flex-grow: 1;
        }
        
        .main-title {
            color: #D4AF37;
            font-size: 28px;
            margin: 0;
            font-weight: bold;
        }
        
        .subtitle {
            color: #555;
            font-size: 18px;
            margin: 5px 0 0;
        }
        
        /* Carte personnel */
        .personnel-card {
            display: flex;
            margin-bottom: 25px;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .personnel-image {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-right: 1px solid #eee;
        }
        
        .personnel-info {
            padding: 15px;
            flex-grow: 1;
        }
        
        .personnel-name {
            color: #D4AF37;
            font-size: 18px;
            margin: 0 0 5px;
            font-weight: bold;
        }
        
        .info-row {
            display: flex;
            margin-bottom: 3px;
        }
        
        .info-label {
            font-weight: bold;
            width: 100px;
            color: #555;
        }
        
        .info-value {
            flex-grow: 1;
        }
        
        /* Pied de page */
        .footer {
            text-align: right;
            margin-top: 30px;
            padding-top: 10px;
            border-top: 1px solid #D4AF37;
            color: #777;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class=\"page-container\">
        <!-- En-tête -->
        <div class=\"header\">
            <img src=\"{{ absolute_url(asset('uploads/personnel/logo2.png')) }}\" class=\"logo\">
            <div class=\"title\">
                <h1 class=\"main-title\">GoldenTouch</h1>
                <p class=\"subtitle\">Liste des Personnels</p>
            </div>
            <div style=\"width: 150px;\"></div> <!-- Pour l'alignement -->
        </div>
        
        <!-- Date d'export -->
        <div style=\"text-align: right; margin-bottom: 20px; color: #777;\">
            Export généré le {{ \"now\"|date(\"d/m/Y à H:i\") }}
        </div>
        
        <!-- Liste des personnels -->
        {% for personnel in personnels %}
        <div class=\"personnel-card\">
            <img src=\"{{ absolute_url(asset('uploads/personnel/' ~ personnel.imageUrl)) }}\" class=\"personnel-image\">
            <div class=\"personnel-info\">
                <h3 class=\"personnel-name\">{{ personnel.nomP }} {{ personnel.prenomP }}</h3>
                
                <div class=\"info-row\">
                    <span class=\"info-label\">Service:</span>
                    <span class=\"info-value\">{{ personnel.serviceP }}</span>
                </div>
                
                <div class=\"info-row\">
                    <span class=\"info-label\">Statut:</span>
                    <span class=\"info-value\">{{ personnel.statutP }}</span>
                </div>
                
                <div class=\"info-row\">
                    <span class=\"info-label\">Tarif:</span>
                    <span class=\"info-value\">{{ personnel.tarifP|number_format(2, '.', ' ') }} TND</span>
                </div>
                
                <div class=\"info-row\">
                    <span class=\"info-label\">Description:</span>
                    <span class=\"info-value\">{{ personnel.descriptionP|slice(0, 100) }}...</span>
                </div>
            </div>
        </div>
        {% endfor %}
        
        <!-- Pied de page -->
        <div class=\"footer\">
            <p>Total: {{ personnels|length }} personnels | GoldenTouch © {{ \"now\"|date(\"Y\") }}</p>
        </div>
    </div>
</body>
</html>", "perso/export_pdf.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\perso\\export_pdf.html.twig");
    }
}
