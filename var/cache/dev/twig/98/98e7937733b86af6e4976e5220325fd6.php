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

/* GestionEvent/_events.html.twig */
class __TwigTemplate_7d4dc6d4a5473be36f6ff187fee492e0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionEvent/_events.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionEvent/_events.html.twig"));

        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 2, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 3
            yield "<div class=\"col-md-6 col-lg-4 mb-3\">
    <div class=\"card h-100\">
        <div class=\"image-container\" style=\"height: 250px; overflow: hidden; margin: 1rem; border-radius: 8px;\">
            ";
            // line 6
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "photo", [], "any", false, false, false, 6)) {
                // line 7
                yield "                <img class=\"card-img-top img-fluid\" 
                     src=\"";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "photo", [], "any", false, false, false, 8))), "html", null, true);
                yield "\" 
                     alt=\"";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 9), "html", null, true);
                yield "\"
                     style=\"height: 100%; width: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;\">
            ";
            } else {
                // line 12
                yield "                <img class=\"card-img-top img-fluid\" 
                     src=\"";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/placeholder.jpg"), "html", null, true);
                yield "\" 
                     alt=\"Aucune image\"
                     style=\"height: 100%; width: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;\">
            ";
            }
            // line 17
            yield "        </div>
        <div class=\"card-body\">
            <h5 class=\"card-title\">";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 19), "html", null, true);
            yield "</h5>
            <div class=\"card-subtitle text-muted mb-2\">
                <i class=\"fas fa-calendar me-2\"></i>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 21), "d M Y"), "html", null, true);
            yield "
            </div>
            <span class=\"badge bg-label-primary\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categoryLabels"]) || array_key_exists("categoryLabels", $context) ? $context["categoryLabels"] : (function () { throw new RuntimeError('Variable "categoryLabels" does not exist.', 23, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23), [], "array", false, false, false, 23), "html", null, true);
            yield "</span>
            <div class=\"mt-3\">
                <a href=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary\">
                    Voir les détails
                </a>
            </div>
        </div>
    </div>
</div>
";
            $context['_iterated'] = true;
        }
        // line 32
        if (!$context['_iterated']) {
            // line 33
            yield "<div class=\"col-12\">
    <div class=\"alert alert-danger\">Aucun événement trouvé</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
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
        return "GestionEvent/_events.html.twig";
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
        return array (  116 => 33,  114 => 32,  102 => 25,  97 => 23,  92 => 21,  87 => 19,  83 => 17,  76 => 13,  73 => 12,  67 => 9,  63 => 8,  60 => 7,  58 => 6,  53 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# GestionEvent/_events.html.twig #}
{% for event in events %}
<div class=\"col-md-6 col-lg-4 mb-3\">
    <div class=\"card h-100\">
        <div class=\"image-container\" style=\"height: 250px; overflow: hidden; margin: 1rem; border-radius: 8px;\">
            {% if event.photo %}
                <img class=\"card-img-top img-fluid\" 
                     src=\"{{ asset('uploads/packs/' ~ event.photo) }}\" 
                     alt=\"{{ event.nom }}\"
                     style=\"height: 100%; width: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;\">
            {% else %}
                <img class=\"card-img-top img-fluid\" 
                     src=\"{{ asset('img/placeholder.jpg') }}\" 
                     alt=\"Aucune image\"
                     style=\"height: 100%; width: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;\">
            {% endif %}
        </div>
        <div class=\"card-body\">
            <h5 class=\"card-title\">{{ event.nom }}</h5>
            <div class=\"card-subtitle text-muted mb-2\">
                <i class=\"fas fa-calendar me-2\"></i>{{ event.date|date('d M Y') }}
            </div>
            <span class=\"badge bg-label-primary\">{{ categoryLabels[event.categorie.value] }}</span>
            <div class=\"mt-3\">
                <a href=\"{{ path('admin_event_show', {'id': event.id}) }}\" class=\"btn btn-outline-primary\">
                    Voir les détails
                </a>
            </div>
        </div>
    </div>
</div>
{% else %}
<div class=\"col-12\">
    <div class=\"alert alert-danger\">Aucun événement trouvé</div>
</div>
{% endfor %}
", "GestionEvent/_events.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\GestionEvent\\_events.html.twig");
    }
}
