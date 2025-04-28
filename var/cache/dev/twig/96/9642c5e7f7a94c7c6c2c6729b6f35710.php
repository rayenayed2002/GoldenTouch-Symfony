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

/* GestionEvent/eventhh.html.twig */
class __TwigTemplate_5da399227a34f89d9e94b3eed8d12d1e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionEvent/eventhh.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionEvent/eventhh.html.twig"));

        // line 2
        yield "<div class=\"admin-events-content\">
    <h6 class=\"pb-1 mb-4 text-muted\">Events Grid</h6>
    <div class=\"container-fluid px-xl-6\">
        <div class=\"row row-cols-1 row-cols-md-3 g-4 mb-5\">
         ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 6, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 7
            yield "                <div class=\"col\">
                    <div class=\"card h-100 card-hover position-relative\">
                           class=\"stretched-link text-decoration-none\"
                           aria-label=\"View ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 10), "html", null, true);
            yield " details\">
                            <div class=\"card-img-frame p-3 pb-0\">
                                ";
            // line 12
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "photo", [], "any", false, false, false, 12)) {
                // line 13
                yield "                                    <img class=\"card-img-top rounded\" 
                                         src=\"";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "photo", [], "any", false, false, false, 14))), "html", null, true);
                yield "\" 
                                         alt=\"";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 15), "html", null, true);
                yield "\" 
                                         style=\"object-fit: cover; height: 180px; width: 100%;\">
                                ";
            } else {
                // line 18
                yield "                                    <div class=\"bg-secondary text-white d-flex align-items-center justify-content-center rounded\"
                                         style=\"height: 180px; width: 100%;\">
                                        No Image
                                    </div>
                                ";
            }
            // line 23
            yield "                            </div>

                            <div class=\"card-body\">
                                <h5 class=\"card-title text-dark mb-2\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 26), "html", null, true);
            yield "</h5>
                                <div class=\"d-flex justify-content-between align-items-center mb-2\">
                                    <span class=\"badge bg-primary\">
                                        ";
            // line 29
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["categoryLabels"] ?? null), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, true, false, 29), "value", [], "any", true, true, false, 29) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, true, false, 29), "value", [], "any", false, false, false, 29)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, true, false, 29), "value", [], "any", false, false, false, 29)) : ("")), [], "array", true, true, false, 29) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["categoryLabels"] ?? null), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, true, false, 29), "value", [], "any", true, true, false, 29) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, true, false, 29), "value", [], "any", false, false, false, 29)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, true, false, 29), "value", [], "any", false, false, false, 29)) : ("")), [], "array", false, false, false, 29)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["categoryLabels"] ?? null), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, true, false, 29), "value", [], "any", true, true, false, 29) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, true, false, 29), "value", [], "any", false, false, false, 29)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, true, false, 29), "value", [], "any", false, false, false, 29)) : ("")), [], "array", false, false, false, 29), "html", null, true)) : ("Non catégorisé"));
            yield "
                                    </span>
                                </div>
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <small class=\"text-muted\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 33), "M d, Y"), "html", null, true);
            yield "</small>
                                </div>
                            </div>
                        </a>

                        <div class=\"position-absolute end-0 bottom-0 m-3 d-flex gap-2 z-1\">
                            <a href=\"#\" 
                               class=\"btn btn-icon text-warning\"
                               data-bs-toggle=\"modal\" 
                               data-bs-target=\"#editEventModal\"
                               data-event-id=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 43), "html", null, true);
            yield "\"
                               data-event-name=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 44), "html", null, true);
            yield "\"
                               data-event-date=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 45), "Y-m-d"), "html", null, true);
            yield "\"
                               data-event-category=\"";
            // line 46
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, true, false, 46), "value", [], "any", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, true, false, 46), "value", [], "any", false, false, false, 46)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, true, false, 46), "value", [], "any", false, false, false, 46), "html", null, true)) : (""));
            yield "\"
                               data-event-photo=\"";
            // line 47
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "photo", [], "any", false, false, false, 47)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "schemeAndHttpHost", [], "any", false, false, false, 47) . "/uploads/") . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "photo", [], "any", false, false, false, 47)), "html", null, true)) : (""));
            yield "\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                            <form action=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            yield "\" method=\"POST\" style=\"display: inline;\" class=\"delete-form\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 51))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-icon text-danger\" aria-label=\"Delete ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 52), "html", null, true);
            yield "\" onclick=\"confirmDelete(event, this)\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            yield "                <div class=\"col-12\">
                    <div class=\"alert alert-info\">No events found.</div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "        </div>
    </div>

    <!-- Edit Event Modal -->
    <div class=\"modal fade\" id=\"editEventModal\" tabindex=\"-1\" aria-hidden=\"true\">
<div class=\"modal fade\" id=\"editEventModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg modal-simple modal-edit-event\">
            <div class=\"modal-content p-3 p-md-5\">
                <div class=\"modal-body\">
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    <div class=\"text-center mb-4\">
                        <h3 class=\"mb-2\">Edit Event Information</h3>
                        <p class=\"text-muted\">Modify event details below.</p>
                    </div>
                    <form id=\"editEventForm\" class=\"row g-3\" action=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => "__ID__"]);
        yield "\" method=\"POST\" enctype=\"multipart/form-data\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("edit-event"), "html", null, true);
        yield "\">
                        
                        <!-- Event Name -->
                        <div class=\"col-12\">
                            <label class=\"form-label\" for=\"eventName\">Event Name</label>
                            <input type=\"text\" id=\"eventName\" name=\"nom\" class=\"form-control\" required>
                        </div>

                        <!-- Date -->
                        <div class=\"col-12 col-md-6\">
                            <label class=\"form-label\" for=\"eventDate\">Date</label>
                            <input type=\"date\" id=\"eventDate\" name=\"date\" class=\"form-control\" required>
                        </div>

                        <!-- Category -->
                        <div class=\"col-12 col-md-6\">
                            <label class=\"form-label\" for=\"eventCategory\">Category</label>
                            <select id=\"eventCategory\" name=\"categorie\" class=\"form-select\" required>
                                ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categoryLabels"]) || array_key_exists("categoryLabels", $context) ? $context["categoryLabels"] : (function () { throw new RuntimeError('Variable "categoryLabels" does not exist.', 97, $this->source); })()));
        foreach ($context['_seq'] as $context["value"] => $context["label"]) {
            // line 98
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['value'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        yield "                            </select>
                        </div>

                        <!-- Photo Upload -->
                        <div class=\"col-12\">
                            <label class=\"form-label\" for=\"eventPhoto\">Event Photo</label>
                            <input type=\"file\" id=\"eventPhoto\" name=\"photo\" class=\"form-control\" accept=\"image/*\">
                            <div class=\"mt-3\">
                                <p class=\"mb-1\">Current Photo:</p>
                                <img id=\"currentPhotoPreview\" src=\"\" class=\"img-thumbnail\" style=\"max-width: 200px; display: none;\">
                            </div>
                        </div>

                        <div class=\"col-12 text-center\">
                            <button type=\"submit\" class=\"btn btn-primary me-sm-3 me-1\">Save Changes</button>
                            <button type=\"button\" class=\"btn btn-label-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
 
 </div>

</div>

<style>
<style>
  .btn-icon {
    padding: 0.5rem;
    transition: all 0.2s ease;
    background: transparent;
    border: none;
  }
  
  .btn-icon:hover {
    transform: scale(1.1);
    background: rgba(0, 0, 0, 0.05);
    border-radius: 50%;
  }
  
  .btn-icon:focus {
    box-shadow: none;
  }
.card.card-hover {
  transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
  border: 3px solid transparent; /* ensures border transition works */
}

.card.card-hover:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
  border-color: gold;
}
.stretched-link {
  z-index: 0;
}


</style></style>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "GestionEvent/eventhh.html.twig";
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
        return array (  230 => 100,  219 => 98,  215 => 97,  194 => 79,  190 => 78,  174 => 64,  165 => 60,  152 => 52,  148 => 51,  144 => 50,  138 => 47,  134 => 46,  130 => 45,  126 => 44,  122 => 43,  109 => 33,  102 => 29,  96 => 26,  91 => 23,  84 => 18,  78 => 15,  74 => 14,  71 => 13,  69 => 12,  64 => 10,  59 => 7,  54 => 6,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Remove ALL layout extends and blocks #}
<div class=\"admin-events-content\">
    <h6 class=\"pb-1 mb-4 text-muted\">Events Grid</h6>
    <div class=\"container-fluid px-xl-6\">
        <div class=\"row row-cols-1 row-cols-md-3 g-4 mb-5\">
         {% for event in events %}
                <div class=\"col\">
                    <div class=\"card h-100 card-hover position-relative\">
                           class=\"stretched-link text-decoration-none\"
                           aria-label=\"View {{ event.nom }} details\">
                            <div class=\"card-img-frame p-3 pb-0\">
                                {% if event.photo %}
                                    <img class=\"card-img-top rounded\" 
                                         src=\"{{ asset('uploads/' ~ event.photo) }}\" 
                                         alt=\"{{ event.nom }}\" 
                                         style=\"object-fit: cover; height: 180px; width: 100%;\">
                                {% else %}
                                    <div class=\"bg-secondary text-white d-flex align-items-center justify-content-center rounded\"
                                         style=\"height: 180px; width: 100%;\">
                                        No Image
                                    </div>
                                {% endif %}
                            </div>

                            <div class=\"card-body\">
                                <h5 class=\"card-title text-dark mb-2\">{{ event.nom }}</h5>
                                <div class=\"d-flex justify-content-between align-items-center mb-2\">
                                    <span class=\"badge bg-primary\">
                                        {{ categoryLabels[event.categorie.value ?? ''] ?? 'Non catégorisé' }}
                                    </span>
                                </div>
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <small class=\"text-muted\">{{ event.date|date('M d, Y') }}</small>
                                </div>
                            </div>
                        </a>

                        <div class=\"position-absolute end-0 bottom-0 m-3 d-flex gap-2 z-1\">
                            <a href=\"#\" 
                               class=\"btn btn-icon text-warning\"
                               data-bs-toggle=\"modal\" 
                               data-bs-target=\"#editEventModal\"
                               data-event-id=\"{{ event.id }}\"
                               data-event-name=\"{{ event.nom }}\"
                               data-event-date=\"{{ event.date|date('Y-m-d') }}\"
                               data-event-category=\"{{ event.categorie.value ?? '' }}\"
                               data-event-photo=\"{{ event.photo ? app.request.schemeAndHttpHost ~ '/uploads/' ~ event.photo : '' }}\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                            <form action=\"{{ path('app_event_delete', {'id': event.id}) }}\" method=\"POST\" style=\"display: inline;\" class=\"delete-form\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ event.id) }}\">
                                <button type=\"submit\" class=\"btn btn-icon text-danger\" aria-label=\"Delete {{ event.nom }}\" onclick=\"confirmDelete(event, this)\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"col-12\">
                    <div class=\"alert alert-info\">No events found.</div>
                </div>
            {% endfor %}
        </div>
    </div>

    <!-- Edit Event Modal -->
    <div class=\"modal fade\" id=\"editEventModal\" tabindex=\"-1\" aria-hidden=\"true\">
<div class=\"modal fade\" id=\"editEventModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg modal-simple modal-edit-event\">
            <div class=\"modal-content p-3 p-md-5\">
                <div class=\"modal-body\">
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    <div class=\"text-center mb-4\">
                        <h3 class=\"mb-2\">Edit Event Information</h3>
                        <p class=\"text-muted\">Modify event details below.</p>
                    </div>
                    <form id=\"editEventForm\" class=\"row g-3\" action=\"{{ path('app_event_edit', {'id': '__ID__'}) }}\" method=\"POST\" enctype=\"multipart/form-data\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('edit-event') }}\">
                        
                        <!-- Event Name -->
                        <div class=\"col-12\">
                            <label class=\"form-label\" for=\"eventName\">Event Name</label>
                            <input type=\"text\" id=\"eventName\" name=\"nom\" class=\"form-control\" required>
                        </div>

                        <!-- Date -->
                        <div class=\"col-12 col-md-6\">
                            <label class=\"form-label\" for=\"eventDate\">Date</label>
                            <input type=\"date\" id=\"eventDate\" name=\"date\" class=\"form-control\" required>
                        </div>

                        <!-- Category -->
                        <div class=\"col-12 col-md-6\">
                            <label class=\"form-label\" for=\"eventCategory\">Category</label>
                            <select id=\"eventCategory\" name=\"categorie\" class=\"form-select\" required>
                                {% for value, label in categoryLabels %}
                                    <option value=\"{{ value }}\">{{ label }}</option>
                                {% endfor %}
                            </select>
                        </div>

                        <!-- Photo Upload -->
                        <div class=\"col-12\">
                            <label class=\"form-label\" for=\"eventPhoto\">Event Photo</label>
                            <input type=\"file\" id=\"eventPhoto\" name=\"photo\" class=\"form-control\" accept=\"image/*\">
                            <div class=\"mt-3\">
                                <p class=\"mb-1\">Current Photo:</p>
                                <img id=\"currentPhotoPreview\" src=\"\" class=\"img-thumbnail\" style=\"max-width: 200px; display: none;\">
                            </div>
                        </div>

                        <div class=\"col-12 text-center\">
                            <button type=\"submit\" class=\"btn btn-primary me-sm-3 me-1\">Save Changes</button>
                            <button type=\"button\" class=\"btn btn-label-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
 
 </div>

</div>

<style>
<style>
  .btn-icon {
    padding: 0.5rem;
    transition: all 0.2s ease;
    background: transparent;
    border: none;
  }
  
  .btn-icon:hover {
    transform: scale(1.1);
    background: rgba(0, 0, 0, 0.05);
    border-radius: 50%;
  }
  
  .btn-icon:focus {
    box-shadow: none;
  }
.card.card-hover {
  transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
  border: 3px solid transparent; /* ensures border transition works */
}

.card.card-hover:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
  border-color: gold;
}
.stretched-link {
  z-index: 0;
}


</style></style>", "GestionEvent/eventhh.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\GestionEvent\\eventhh.html.twig");
    }
}
