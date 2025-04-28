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

/* perso/_search_results.html.twig */
class __TwigTemplate_82962a5ed5929b184699d0c44b9adb59 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "perso/_search_results.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "perso/_search_results.html.twig"));

        // line 1
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 1, $this->source); })())) {
            // line 2
            yield "<div class=\"alert alert-danger animate__animated animate__fadeIn mb-3\">
    <i class=\"ti ti-alert-circle me-2\"></i> ";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 3, $this->source); })()), "html", null, true);
            yield "
</div>
";
        }
        // line 6
        yield "
";
        // line 7
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["personnels"]) || array_key_exists("personnels", $context) ? $context["personnels"] : (function () { throw new RuntimeError('Variable "personnels" does not exist.', 7, $this->source); })())) > 0)) {
            // line 8
            yield "<div class=\"row g-3 animate__animated animate__fadeIn\">
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["personnels"]) || array_key_exists("personnels", $context) ? $context["personnels"] : (function () { throw new RuntimeError('Variable "personnels" does not exist.', 9, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["personnel"]) {
                // line 10
                yield "    <div class=\"col-md-4\">
        <div class=\"card personnel-card h-100\">
            ";
                // line 12
                if (CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "imageUrl", [], "any", false, false, false, 12)) {
                    // line 13
                    yield "            <div class=\"pack-image-wrapper\">
                <img src=\"";
                    // line 14
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/personnel/" . CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "imageUrl", [], "any", false, false, false, 14))), "html", null, true);
                    yield "\" 
                     class=\"pack-image\" 
                     alt=\"";
                    // line 16
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "nomP", [], "any", false, false, false, 16), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "prenomP", [], "any", false, false, false, 16), "html", null, true);
                    yield "\">
            </div>
            ";
                }
                // line 19
                yield "            
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "nomP", [], "any", false, false, false, 21), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "prenomP", [], "any", false, false, false, 21), "html", null, true);
                yield "</h5>
                <div class=\"mb-2\">
                    <span class=\"badge bg-primary\">";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "serviceP", [], "any", false, false, false, 23), "html", null, true);
                yield "</span>
                    <span class=\"badge bg-";
                // line 24
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "statutP", [], "any", false, false, false, 24) == "Disponible")) ? ("success") : ("warning"));
                yield " ms-1\">
                        ";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "statutP", [], "any", false, false, false, 25), "html", null, true);
                yield "
                    </span>
                </div>
                <p class=\"card-text text-muted small mb-2\">
                    ";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "descriptionP", [], "any", false, false, false, 29), 0, 100), "html", null, true);
                yield "...
                </p>
                <div class=\"d-flex justify-content-between align-items-center\">
                    <strong class=\"text-primary\">";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "tarifP", [], "any", false, false, false, 32), "html", null, true);
                yield " TND</strong>
                    <div class=\"btn-group\">
                        <a href=\"";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_perso_show", ["idP" => CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "idP", [], "any", false, false, false, 34)]), "html", null, true);
                yield "\" 
                           class=\"btn btn-sm btn-outline-primary\">
                            <i class=\"ti ti-eye\"></i>
                        </a>
                        <a href=\"";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_perso_edit", ["idP" => CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "idP", [], "any", false, false, false, 38)]), "html", null, true);
                yield "\" 
                           class=\"btn btn-sm btn-outline-secondary\">
                            <i class=\"ti ti-edit\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['personnel'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            yield "</div>
";
        } elseif ( !        // line 49
(isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 49, $this->source); })())) {
            // line 50
            yield "<div class=\"no-results-card animate__animated animate__fadeIn\">
    <div class=\"avatar avatar-xl bg-light-secondary rounded-circle mb-3 mx-auto\">
        <i class=\"ti ti-search-off text-secondary\"></i>
    </div>
    <h5 class=\"mb-2\">Aucun résultat trouvé</h5>
    <p class=\"text-muted mb-3\">Essayez avec d'autres termes de recherche</p>
</div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "perso/_search_results.html.twig";
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
        return array (  158 => 50,  156 => 49,  153 => 48,  137 => 38,  130 => 34,  125 => 32,  119 => 29,  112 => 25,  108 => 24,  104 => 23,  97 => 21,  93 => 19,  85 => 16,  80 => 14,  77 => 13,  75 => 12,  71 => 10,  67 => 9,  64 => 8,  62 => 7,  59 => 6,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if error %}
<div class=\"alert alert-danger animate__animated animate__fadeIn mb-3\">
    <i class=\"ti ti-alert-circle me-2\"></i> {{ error }}
</div>
{% endif %}

{% if personnels|length > 0 %}
<div class=\"row g-3 animate__animated animate__fadeIn\">
    {% for personnel in personnels %}
    <div class=\"col-md-4\">
        <div class=\"card personnel-card h-100\">
            {% if personnel.imageUrl %}
            <div class=\"pack-image-wrapper\">
                <img src=\"{{ asset('uploads/personnel/' ~ personnel.imageUrl) }}\" 
                     class=\"pack-image\" 
                     alt=\"{{ personnel.nomP }} {{ personnel.prenomP }}\">
            </div>
            {% endif %}
            
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ personnel.nomP }} {{ personnel.prenomP }}</h5>
                <div class=\"mb-2\">
                    <span class=\"badge bg-primary\">{{ personnel.serviceP }}</span>
                    <span class=\"badge bg-{{ personnel.statutP == 'Disponible' ? 'success' : 'warning' }} ms-1\">
                        {{ personnel.statutP }}
                    </span>
                </div>
                <p class=\"card-text text-muted small mb-2\">
                    {{ personnel.descriptionP|slice(0, 100) }}...
                </p>
                <div class=\"d-flex justify-content-between align-items-center\">
                    <strong class=\"text-primary\">{{ personnel.tarifP }} TND</strong>
                    <div class=\"btn-group\">
                        <a href=\"{{ path('app_perso_show', {'idP': personnel.idP}) }}\" 
                           class=\"btn btn-sm btn-outline-primary\">
                            <i class=\"ti ti-eye\"></i>
                        </a>
                        <a href=\"{{ path('app_perso_edit', {'idP': personnel.idP}) }}\" 
                           class=\"btn btn-sm btn-outline-secondary\">
                            <i class=\"ti ti-edit\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% endfor %}
</div>
{% elseif not error %}
<div class=\"no-results-card animate__animated animate__fadeIn\">
    <div class=\"avatar avatar-xl bg-light-secondary rounded-circle mb-3 mx-auto\">
        <i class=\"ti ti-search-off text-secondary\"></i>
    </div>
    <h5 class=\"mb-2\">Aucun résultat trouvé</h5>
    <p class=\"text-muted mb-3\">Essayez avec d'autres termes de recherche</p>
</div>
{% endif %}", "perso/_search_results.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\perso\\_search_results.html.twig");
    }
}
