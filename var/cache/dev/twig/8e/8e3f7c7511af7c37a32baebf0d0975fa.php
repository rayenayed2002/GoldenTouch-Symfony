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

/* GestionEvent/test.html.twig */
class __TwigTemplate_47ab2b6c6981bcdbb8aff97b5d810e68 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionEvent/test.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionEvent/test.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "GestionEvent/test.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "<h6 class=\"pb-1 mb-4 text-muted\">Events Grid</h6>
<div class=\"container-fluid px-xl-6\">
  <div class=\"row row-cols-1 row-cols-md-3 g-4 mb-5\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 7, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 8
            yield "                <div class=\"col\">
                    <div class=\"card h-100 card-hover position-relative\">
                        <a href=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 10)]), "html", null, true);
            yield "\" 
                           class=\"stretched-link text-decoration-none\"
                           aria-label=\"View ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 12), "html", null, true);
            yield " details\">
                            <div class=\"card-img-frame p-3 pb-0\">
                                ";
            // line 14
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "photo", [], "any", false, false, false, 14)) {
                // line 15
                yield "                                    <img class=\"card-img-top rounded\" 
                                         src=\"";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "photo", [], "any", false, false, false, 16))), "html", null, true);
                yield "\" 
                                         alt=\"";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 17), "html", null, true);
                yield "\" 
                                         style=\"object-fit: cover; height: 180px; width: 100%;\">
                                ";
            } else {
                // line 20
                yield "                                    <div class=\"bg-secondary text-white d-flex align-items-center justify-content-center rounded\"
                                         style=\"height: 180px; width: 100%;\">
                                        No Image
                                    </div>
                                ";
            }
            // line 25
            yield "                            </div>

                            <div class=\"card-body\">
                                <h5 class=\"card-title text-dark mb-2\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 28), "html", null, true);
            yield "</h5>
                                <div class=\"d-flex justify-content-between align-items-center mb-2\">
                                    <span class=\"badge bg-primary\">
                                        ";
            // line 31
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["categoryLabels"] ?? null), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, true, false, 31), "value", [], "any", true, true, false, 31) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, false, false, 31), "value", [], "any", false, false, false, 31)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, false, false, 31), "value", [], "any", false, false, false, 31)) : ("")), [], "array", true, true, false, 31) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["categoryLabels"]) || array_key_exists("categoryLabels", $context) ? $context["categoryLabels"] : (function () { throw new RuntimeError('Variable "categoryLabels" does not exist.', 31, $this->source); })()), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, true, false, 31), "value", [], "any", true, true, false, 31) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, false, false, 31), "value", [], "any", false, false, false, 31)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, false, false, 31), "value", [], "any", false, false, false, 31)) : ("")), [], "array", false, false, false, 31)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categoryLabels"]) || array_key_exists("categoryLabels", $context) ? $context["categoryLabels"] : (function () { throw new RuntimeError('Variable "categoryLabels" does not exist.', 31, $this->source); })()), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, true, false, 31), "value", [], "any", true, true, false, 31) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, false, false, 31), "value", [], "any", false, false, false, 31)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, false, false, 31), "value", [], "any", false, false, false, 31)) : ("")), [], "array", false, false, false, 31), "html", null, true)) : ("Non catégorisé"));
            yield "
                                    </span>
                                </div>
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <small class=\"text-muted\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 35), "M d, Y"), "html", null, true);
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
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 45), "html", null, true);
            yield "\"
                               data-event-name=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 46), "html", null, true);
            yield "\"
                               data-event-date=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 47), "Y-m-d"), "html", null, true);
            yield "\"
                               data-event-category=\"";
            // line 48
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, true, false, 48), "value", [], "any", true, true, false, 48) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, false, false, 48), "value", [], "any", false, false, false, 48)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, false, false, 48), "value", [], "any", false, false, false, 48), "html", null, true)) : (""));
            yield "\"
                               data-event-photo=\"";
            // line 49
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "photo", [], "any", false, false, false, 49)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "schemeAndHttpHost", [], "any", false, false, false, 49) . "/uploads/") . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "photo", [], "any", false, false, false, 49)), "html", null, true)) : (""));
            yield "\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                            <form action=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            yield "\" method=\"POST\" style=\"display: inline;\" class=\"delete-form\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 53))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-icon text-danger\" aria-label=\"Delete ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 54), "html", null, true);
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
        // line 61
        if (!$context['_iterated']) {
            // line 62
            yield "                <div class=\"col-12\">
                    <div class=\"alert alert-info\">No events found.</div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "        </div>
    </div>

    <!-- Edit Event Modal -->
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
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => "__ID__"]);
        yield "\" method=\"POST\" enctype=\"multipart/form-data\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 80
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
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categoryLabels"]) || array_key_exists("categoryLabels", $context) ? $context["categoryLabels"] : (function () { throw new RuntimeError('Variable "categoryLabels" does not exist.', 98, $this->source); })()));
        foreach ($context['_seq'] as $context["value"] => $context["label"]) {
            // line 99
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
        // line 101
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

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 127
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 128
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "

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


</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 165
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 166
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

<script>
function confirmDelete(event, button) {
  event.preventDefault();

  if (confirm('Are you sure?')) {
    const form = button.closest('form');
    const formData = new FormData(form);

    fetch(form.action, {
      method: 'POST',
      body: formData,
      headers: { 'X-Requested-With': 'XMLHttpRequest' }
    })
    .then(response => {
      if (!response.ok) throw new Error('Network error');
      return response.json();
    })
    .then(data => {
      if (data.success) {
        // Remove the closest column parent
        button.closest('.col').remove();
        alert('Deleted successfully!');
      } else {
        alert('Error: Token might be invalid');
      }
    })
    .catch(error => {
      console.error('Error:', error);
      alert('Deletion failed. Check console');
    });
  }
}



document.addEventListener('DOMContentLoaded', function() {
  const editModalElement = document.getElementById('editEventModal');
  const editModal = new bootstrap.Modal(editModalElement);
  const editForm = document.getElementById('editEventForm');
  let currentEventId = null;

  // Modal show handler
  editModalElement.addEventListener('show.bs.modal', function(event) {
    const button = event.relatedTarget;
    const photoPreview = editModalElement.querySelector('#currentPhotoPreview');
    
    currentEventId = button.dataset.eventId;
    editForm.action = editForm.action.replace('__ID__', currentEventId);
    
    // Populate form values
editForm.eventName.value = button.dataset.eventName;
editForm.eventDate.value = button.dataset.eventDate;
editForm.eventCategory.value = button.dataset.eventCategory;

    // Handle photo preview
    photoPreview.style.display = button.dataset.eventPhoto ? 'block' : 'none';
    photoPreview.src = button.dataset.eventPhoto || '';
  });

  // Form submission handler
  editForm.addEventListener('submit', async function(e) {
    e.preventDefault();
    const submitButton = this.querySelector('button[type=\"submit\"]');
    const originalButtonText = submitButton.innerHTML;

    try {
      submitButton.innerHTML = `
        <span class=\"spinner-border spinner-border-sm\" role=\"status\" aria-hidden=\"true\"></span>
        Saving...
      `;
      submitButton.disabled = true;

      const response = await fetch(this.action, {
        method: 'POST',
        body: new FormData(this),
        headers: {'X-Requested-With': 'XMLHttpRequest'}
      });

      const data = await response.json();

      if (!response.ok || !data.success) {
        throw new Error(data.message || 'Update failed');
      }

      // Update elements
      const photoPreview = editModalElement.querySelector('#currentPhotoPreview');
      const editButton = document.querySelector(
        `[data-event-id=\"\${currentEventId}\"] [data-bs-target=\"#editEventModal\"]`
      );

      // Update modal preview
      if (data.photo) {
        const newSrc = `\${data.photo}?t=\${Date.now()}`; // Cache bust
        photoPreview.src = newSrc;
        photoPreview.style.display = 'block';
        
        // Update edit button data attribute
        if (editButton) {
          editButton.dataset.eventPhoto = data.photo;
        }
      } else {
        photoPreview.style.display = 'none';
        if (editButton) {
          editButton.dataset.eventPhoto = '';
        }
      }

      // Close modal after 1 second
      setTimeout(() => editModal.hide(), 1000);

    } catch (error) {
      console.error('Error:', error);
      alert(`Error: \${error.message}`);
    } finally {
      submitButton.innerHTML = originalButtonText;
      submitButton.disabled = false;
    }
  });
});












document.addEventListener('DOMContentLoaded', function() {
    const cartIcon = document.getElementById('cartIcon');
    
    // Make event cards draggable
    document.querySelectorAll('.card').forEach(card => {
        card.draggable = true;
        
        card.addEventListener('dragstart', (e) => {
            const eventId = card.querySelector('[data-event-id]').dataset.eventId;
            const eventData = {
                idEvent: eventId,
                iduser: 1, // Static user ID
                typeEvent: \"event\",
                categorie: card.querySelector('.badge').innerText,
                date: card.querySelector('small').innerText,
                price: 100 // Static price
            };
            
            e.dataTransfer.setData('application/json', JSON.stringify(eventData));
            e.dataTransfer.effectAllowed = 'move';
        });
    });

    // Cart drop zone
    cartIcon.addEventListener('dragover', (e) => {
        e.preventDefault();
        cartIcon.style.opacity = '0.7';
    });

    cartIcon.addEventListener('dragleave', () => {
        cartIcon.style.opacity = '1';
    });

    cartIcon.addEventListener('drop', async (e) => {
        e.preventDefault();
        cartIcon.style.opacity = '1';
        
        try {
            const eventData = JSON.parse(e.dataTransfer.getData('application/json'));
            
            const response = await fetch('";
        // line 339
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_add");
        yield "', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify(eventData)
            });
            
            if (response.ok) {
                const badge = cartIcon.querySelector('.badge');
                badge.textContent = parseInt(badge.textContent) + 1;
                alert('Event added to cart!');
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Error adding to cart');
        }
    });
});
</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "GestionEvent/test.html.twig";
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
        return array (  547 => 339,  371 => 166,  358 => 165,  311 => 128,  298 => 127,  263 => 101,  252 => 99,  248 => 98,  227 => 80,  223 => 79,  208 => 66,  199 => 62,  197 => 61,  185 => 54,  181 => 53,  177 => 52,  171 => 49,  167 => 48,  163 => 47,  159 => 46,  155 => 45,  142 => 35,  135 => 31,  129 => 28,  124 => 25,  117 => 20,  111 => 17,  107 => 16,  104 => 15,  102 => 14,  97 => 12,  92 => 10,  88 => 8,  83 => 7,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
<h6 class=\"pb-1 mb-4 text-muted\">Events Grid</h6>
<div class=\"container-fluid px-xl-6\">
  <div class=\"row row-cols-1 row-cols-md-3 g-4 mb-5\">
            {% for event in events %}
                <div class=\"col\">
                    <div class=\"card h-100 card-hover position-relative\">
                        <a href=\"{{ path('app_event_show', {'id': event.id}) }}\" 
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

{% endblock %}

{% block stylesheets %}
{{ parent() }}

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


</style>
{% endblock %}

{% block javascripts %}
{{ parent() }}

<script>
function confirmDelete(event, button) {
  event.preventDefault();

  if (confirm('Are you sure?')) {
    const form = button.closest('form');
    const formData = new FormData(form);

    fetch(form.action, {
      method: 'POST',
      body: formData,
      headers: { 'X-Requested-With': 'XMLHttpRequest' }
    })
    .then(response => {
      if (!response.ok) throw new Error('Network error');
      return response.json();
    })
    .then(data => {
      if (data.success) {
        // Remove the closest column parent
        button.closest('.col').remove();
        alert('Deleted successfully!');
      } else {
        alert('Error: Token might be invalid');
      }
    })
    .catch(error => {
      console.error('Error:', error);
      alert('Deletion failed. Check console');
    });
  }
}



document.addEventListener('DOMContentLoaded', function() {
  const editModalElement = document.getElementById('editEventModal');
  const editModal = new bootstrap.Modal(editModalElement);
  const editForm = document.getElementById('editEventForm');
  let currentEventId = null;

  // Modal show handler
  editModalElement.addEventListener('show.bs.modal', function(event) {
    const button = event.relatedTarget;
    const photoPreview = editModalElement.querySelector('#currentPhotoPreview');
    
    currentEventId = button.dataset.eventId;
    editForm.action = editForm.action.replace('__ID__', currentEventId);
    
    // Populate form values
editForm.eventName.value = button.dataset.eventName;
editForm.eventDate.value = button.dataset.eventDate;
editForm.eventCategory.value = button.dataset.eventCategory;

    // Handle photo preview
    photoPreview.style.display = button.dataset.eventPhoto ? 'block' : 'none';
    photoPreview.src = button.dataset.eventPhoto || '';
  });

  // Form submission handler
  editForm.addEventListener('submit', async function(e) {
    e.preventDefault();
    const submitButton = this.querySelector('button[type=\"submit\"]');
    const originalButtonText = submitButton.innerHTML;

    try {
      submitButton.innerHTML = `
        <span class=\"spinner-border spinner-border-sm\" role=\"status\" aria-hidden=\"true\"></span>
        Saving...
      `;
      submitButton.disabled = true;

      const response = await fetch(this.action, {
        method: 'POST',
        body: new FormData(this),
        headers: {'X-Requested-With': 'XMLHttpRequest'}
      });

      const data = await response.json();

      if (!response.ok || !data.success) {
        throw new Error(data.message || 'Update failed');
      }

      // Update elements
      const photoPreview = editModalElement.querySelector('#currentPhotoPreview');
      const editButton = document.querySelector(
        `[data-event-id=\"\${currentEventId}\"] [data-bs-target=\"#editEventModal\"]`
      );

      // Update modal preview
      if (data.photo) {
        const newSrc = `\${data.photo}?t=\${Date.now()}`; // Cache bust
        photoPreview.src = newSrc;
        photoPreview.style.display = 'block';
        
        // Update edit button data attribute
        if (editButton) {
          editButton.dataset.eventPhoto = data.photo;
        }
      } else {
        photoPreview.style.display = 'none';
        if (editButton) {
          editButton.dataset.eventPhoto = '';
        }
      }

      // Close modal after 1 second
      setTimeout(() => editModal.hide(), 1000);

    } catch (error) {
      console.error('Error:', error);
      alert(`Error: \${error.message}`);
    } finally {
      submitButton.innerHTML = originalButtonText;
      submitButton.disabled = false;
    }
  });
});












document.addEventListener('DOMContentLoaded', function() {
    const cartIcon = document.getElementById('cartIcon');
    
    // Make event cards draggable
    document.querySelectorAll('.card').forEach(card => {
        card.draggable = true;
        
        card.addEventListener('dragstart', (e) => {
            const eventId = card.querySelector('[data-event-id]').dataset.eventId;
            const eventData = {
                idEvent: eventId,
                iduser: 1, // Static user ID
                typeEvent: \"event\",
                categorie: card.querySelector('.badge').innerText,
                date: card.querySelector('small').innerText,
                price: 100 // Static price
            };
            
            e.dataTransfer.setData('application/json', JSON.stringify(eventData));
            e.dataTransfer.effectAllowed = 'move';
        });
    });

    // Cart drop zone
    cartIcon.addEventListener('dragover', (e) => {
        e.preventDefault();
        cartIcon.style.opacity = '0.7';
    });

    cartIcon.addEventListener('dragleave', () => {
        cartIcon.style.opacity = '1';
    });

    cartIcon.addEventListener('drop', async (e) => {
        e.preventDefault();
        cartIcon.style.opacity = '1';
        
        try {
            const eventData = JSON.parse(e.dataTransfer.getData('application/json'));
            
            const response = await fetch('{{ path(\"app_panier_add\") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify(eventData)
            });
            
            if (response.ok) {
                const badge = cartIcon.querySelector('.badge');
                badge.textContent = parseInt(badge.textContent) + 1;
                alert('Event added to cart!');
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Error adding to cart');
        }
    });
});
</script>

{% endblock %}", "GestionEvent/test.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\GestionEvent\\test.html.twig");
    }
}
