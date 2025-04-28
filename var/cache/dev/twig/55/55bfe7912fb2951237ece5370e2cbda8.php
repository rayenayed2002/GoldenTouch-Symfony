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

/* materiels/_search_results.html.twig */
class __TwigTemplate_675f7ed329e68cc9cfc0f1509dfce21b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiels/_search_results.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiels/_search_results.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["materiels"]) || array_key_exists("materiels", $context) ? $context["materiels"] : (function () { throw new RuntimeError('Variable "materiels" does not exist.', 1, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
            // line 2
            yield "<div class=\"card mb-3\">
    <div class=\"row g-0\">
        <div class=\"col-md-4\">
            <img src=\"";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/materiel/" . CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "photoMat", [], "any", false, false, false, 5))), "html", null, true);
            yield "\" class=\"img-fluid rounded-start\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nomMat", [], "any", false, false, false, 5), "html", null, true);
            yield "\">
        </div>
        <div class=\"col-md-8\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nomMat", [], "any", false, false, false, 9), "html", null, true);
            yield "</h5>
                <p class=\"card-text\">";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "descriptionMat", [], "any", false, false, false, 10), "html", null, true);
            yield "</p>
                <p class=\"card-text\">
                    <small class=\"text-muted\">Quantité: ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantiteMat", [], "any", false, false, false, 12), "html", null, true);
            yield " | Prix: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "prixMat", [], "any", false, false, false, 12), "html", null, true);
            yield " DT</small>
                </p>
                <a href=\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiels_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "idMat", [], "any", false, false, false, 14)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Voir plus</a>
            </div>
        </div>
    </div>
</div>
";
            $context['_iterated'] = true;
        }
        // line 19
        if (!$context['_iterated']) {
            // line 20
            yield "<p class=\"text-muted\">Aucun matériel trouvé.</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['materiel'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "materiels/_search_results.html.twig";
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
        return array (  95 => 20,  93 => 19,  83 => 14,  76 => 12,  71 => 10,  67 => 9,  58 => 5,  53 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for materiel in materiels %}
<div class=\"card mb-3\">
    <div class=\"row g-0\">
        <div class=\"col-md-4\">
            <img src=\"{{ asset('uploads/materiel/' ~ materiel.photoMat) }}\" class=\"img-fluid rounded-start\" alt=\"{{ materiel.nomMat }}\">
        </div>
        <div class=\"col-md-8\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ materiel.nomMat }}</h5>
                <p class=\"card-text\">{{ materiel.descriptionMat }}</p>
                <p class=\"card-text\">
                    <small class=\"text-muted\">Quantité: {{ materiel.quantiteMat }} | Prix: {{ materiel.prixMat }} DT</small>
                </p>
                <a href=\"{{ path('app_materiels_show', { id: materiel.idMat }) }}\" class=\"btn btn-primary\">Voir plus</a>
            </div>
        </div>
    </div>
</div>
{% else %}
<p class=\"text-muted\">Aucun matériel trouvé.</p>
{% endfor %}", "materiels/_search_results.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\materiels\\_search_results.html.twig");
    }
}
