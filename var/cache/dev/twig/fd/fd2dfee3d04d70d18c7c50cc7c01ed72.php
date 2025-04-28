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

/* admin/notifications/_table_rows.html.twig */
class __TwigTemplate_b6b11f49fa601d9c0deec6aad012369d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/notifications/_table_rows.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/notifications/_table_rows.html.twig"));

        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 2, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 3
            yield "<tr class=\"notification-row ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "statut", [], "any", false, false, false, 3) == "LU")) {
                yield "notification-read";
            } else {
                yield "notification-unread";
            }
            yield "\">
    <td>
        <input type=\"checkbox\" class=\"form-check-input notification-checkbox\" value=\"";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "id", [], "any", false, false, false, 5), "html", null, true);
            yield "\" aria-label=\"Sélectionner la notification ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "id", [], "any", false, false, false, 5), "html", null, true);
            yield "\">
    </td>

    <td>";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 8), "html", null, true);
            yield "</td>
    <td>
        <span class=\"badge ";
            // line 10
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "statut", [], "any", false, false, false, 10) == "LU")) {
                yield "bg-success";
            } else {
                yield "bg-warning text-dark";
            }
            yield "\">
            ";
            // line 11
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "statut", [], "any", false, false, false, 11) == "LU")) ? ("Lu") : ("Non lu"));
            yield "
        </span>
    </td>
    <td>";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "dateCreation", [], "any", false, false, false, 14), "Y-m-d H:i:s"), "html", null, true);
            yield "</td>
    <td>
        <div class=\"dropdown\">
            <button class=\"btn btn-sm btn-icon dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                <i class=\"ti ti-dots-vertical\"></i>
            </button>
            <div class=\"dropdown-menu\">
                <a class=\"dropdown-item\" href=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customize_pack_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "demandePack", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21)]), "html", null, true);
            yield "\">
                    <i class=\"ti ti-eye me-1\"></i> Voir le pack
                </a>
                <a class=\"dropdown-item delete-notification\" href=\"javascript:void(0);\" data-id=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "id", [], "any", false, false, false, 24), "html", null, true);
            yield "\">
                    <i class=\"ti ti-trash me-1\"></i> Supprimer
                </a>
            </div>
        </div>
    </td>
</tr>
";
            $context['_iterated'] = true;
        }
        // line 31
        if (!$context['_iterated']) {
            // line 32
            yield "<tr><td colspan=\"6\" class=\"text-center\">Aucune notification trouvée.</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['notification'], $context['_parent'], $context['_iterated']);
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
        return "admin/notifications/_table_rows.html.twig";
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
        return array (  120 => 32,  118 => 31,  106 => 24,  100 => 21,  90 => 14,  84 => 11,  76 => 10,  71 => 8,  63 => 5,  53 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/notifications/_table_rows.html.twig #}
{% for notification in notifications %}
<tr class=\"notification-row {% if notification.statut == 'LU' %}notification-read{% else %}notification-unread{% endif %}\">
    <td>
        <input type=\"checkbox\" class=\"form-check-input notification-checkbox\" value=\"{{ notification.id }}\" aria-label=\"Sélectionner la notification {{ notification.id }}\">
    </td>

    <td>{{ notification.message }}</td>
    <td>
        <span class=\"badge {% if notification.statut == 'LU' %}bg-success{% else %}bg-warning text-dark{% endif %}\">
            {{ notification.statut == 'LU' ? 'Lu' : 'Non lu' }}
        </span>
    </td>
    <td>{{ notification.dateCreation|date('Y-m-d H:i:s') }}</td>
    <td>
        <div class=\"dropdown\">
            <button class=\"btn btn-sm btn-icon dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                <i class=\"ti ti-dots-vertical\"></i>
            </button>
            <div class=\"dropdown-menu\">
                <a class=\"dropdown-item\" href=\"{{ path('admin_customize_pack_show', {'id': notification.demandePack.id}) }}\">
                    <i class=\"ti ti-eye me-1\"></i> Voir le pack
                </a>
                <a class=\"dropdown-item delete-notification\" href=\"javascript:void(0);\" data-id=\"{{ notification.id }}\">
                    <i class=\"ti ti-trash me-1\"></i> Supprimer
                </a>
            </div>
        </div>
    </td>
</tr>
{% else %}
<tr><td colspan=\"6\" class=\"text-center\">Aucune notification trouvée.</td></tr>
{% endfor %}
", "admin/notifications/_table_rows.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\admin\\notifications\\_table_rows.html.twig");
    }
}
