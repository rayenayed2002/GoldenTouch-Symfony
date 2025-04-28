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

/* GestionEvent/DetailEvent.html.twig */
class __TwigTemplate_95e19270dfad07417adc8f91e6f437ce extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
            'inline_scripts' => [$this, 'block_inline_scripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 4
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionEvent/DetailEvent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionEvent/DetailEvent.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "GestionEvent/DetailEvent.html.twig", 4);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Custom Page Title";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
body {
    background-color: #f8f7fa;
}

/* Event Card Style */
.th-product {
    background-color: #ffffff;
    border: 2px solid gold;
    border-radius: 12px;
    transition: all 0.3s ease;
    margin: 10px;
    padding: 10px;
    height: 100%; /* Helps cards be uniform height */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    cursor: pointer;

}

/* Image wrapper to control sizing and spacing */
.product-img {
    overflow: hidden;
    border-radius: 8px;
    margin-bottom: 15px;
}

/* Image style - same height and zoom on hover */
.product-img img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    transition: transform 0.3s ease;
    border-radius: 8px;
    display: block;
}

/* Zoom effect on hover */
.th-product:hover .product-img img {
    transform: scale(1.05);
}

/* Card hover effect */
.th-product:hover {
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    transform: translateY(-5px);
}

  .th-product .product-img::before {
        content: none !important;
        background-color: transparent !important;
        opacity: 0 !important;
        transform: none !important;
        transition: none !important;
        visibility: visible !important;
    }
    
    /* Disable hover state */
    .th-product:hover .product-img::before {
        opacity: 0 !important;
        visibility: hidden !important;
    }
    
    /* Remove any other hover effects */
    .th-product:hover {
        transform: none !important;
        box-shadow: none !important;
    }
        #cartIcon.dragover {
        transform: scale(1.1);
        color: #4CAF50;
    }
    .event-card {
        cursor: grab;
        transition: transform 0.2s;
    }
    
    .event-card:active {
        cursor: grabbing;
    }
.mb-40.mb-xl-0 {
    width: 100%;
    height: 100%; /* Prend toute la hauteur disponible */
    overflow: hidden; /* Cache le débordement */
    display: block; /* Retire le flex */
}

.mb-40.mb-xl-0 img {
    width: 100%;
    height: 100%; /* Prend toute la hauteur du conteneur */
    object-fit: cover; /* Couvre l'espace sans déformation */
    min-height: 400px; /* Hauteur minimale pour les petits écrans */
}
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 107
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

        // line 108
        yield "
<section class=\"space\">
<div class=\"container\">
    <div class=\"row gy-4 mb-3 mb-xl-5\">
        <div class=\"col-xl-6\">
<div class=\"mb-40 mb-xl-0\">
    ";
        // line 114
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 114, $this->source); })()), "photo", [], "any", false, false, false, 114)) {
            // line 115
            yield "    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 115, $this->source); })()), "photo", [], "any", false, false, false, 115))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 115, $this->source); })()), "nom", [], "any", false, false, false, 115), "html", null, true);
            yield "\">
    ";
        } else {
            // line 117
            yield "    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/event/default_event.jpg"), "html", null, true);
            yield "\" alt=\"Image par défaut\">
    ";
        }
        // line 119
        yield "</div>
        </div>
        <div class=\"col-xl-6 ps-3 ps-xl-5\">
            <div class=\"team-about\">
                <p class=\"team-about_desig\">";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 123, $this->source); })()), "type", [], "any", false, false, false, 123), "html", null, true);
        yield "</p>
                <h2 class=\"team-about_title\">";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 124, $this->source); })()), "nom", [], "any", false, false, false, 124), "html", null, true);
        yield "</h2>
                <div class=\"team-info\">
                    <ul>
                        <li><b>Catégorie :</b> <span>";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 127, $this->source); })()), "categorie", [], "any", false, false, false, 127), "value", [], "any", false, false, false, 127), "html", null, true);
        yield "</span></li>
                        <li><b>Date :</b> <span>";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 128, $this->source); })()), "date", [], "any", false, false, false, 128), "j F Y"), "html", null, true);
        yield "</span></li>
                                ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 129, $this->source); })()), "reservationsLieu", [], "any", false, false, false, 129));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 130
            yield "                                        ";
            $context["lieu"] = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "lieu", [], "any", false, false, false, 130);
            // line 131
            yield "                        <li><b>Lieu :</b> <span>";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["lieu"] ?? null), "name", [], "any", true, true, false, 131) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 131, $this->source); })()), "name", [], "any", false, false, false, 131)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 131, $this->source); })()), "name", [], "any", false, false, false, 131), "html", null, true)) : ("À déterminer"));
            yield "</span></li>

      ";
            $context['_iterated'] = true;
        }
        // line 133
        if (!$context['_iterated']) {
            // line 134
            yield "                        <li><b>Lieu :</b> <span> À déterminer</span></li>

   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        yield "

                            

                        
                    </ul>
                </div>
                <div class=\"d-flex gap-3 mt-4\">
                    <!-- Bouton Édition -->
                    <button type=\"button\" 
                            class=\"btn btn-warning\" 
                            style=\"background-color: #FFD700; border-color: #FFD700;\"
                            data-bs-toggle=\"modal\" 
                            data-bs-target=\"#editEventModal\">
                        <i class=\"fas fa-edit me-2\"></i>Modifier
                    </button>

                    <!-- Formulaire Suppression -->
                    <form method=\"POST\" action=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 155, $this->source); })()), "id", [], "any", false, false, false, 155)]), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 156, $this->source); })()), "id", [], "any", false, false, false, 156))), "html", null, true);
        yield "\">
                        <button type=\"submit\" 
                                class=\"btn btn-danger\" 
                                onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet événement ?')\">
                            <i class=\"fas fa-trash me-2\"></i>Supprimer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal d'Édition -->
    <div class=\"modal fade\" id=\"editEventModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <form method=\"POST\" 
                      action=\"";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 173, $this->source); })()), "id", [], "any", false, false, false, 173)]), "html", null, true);
        yield "\" 
                      enctype=\"multipart/form-data\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">Modifier l'événement</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("edit-event"), "html", null, true);
        yield "\">
                        
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Nom</label>
                            <input type=\"text\" 
                                   class=\"form-control\" 
                                   name=\"nom\" 
                                   value=\"";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 187, $this->source); })()), "nom", [], "any", false, false, false, 187), "html", null, true);
        yield "\"
                                   required>
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\">Date</label>
                            <input type=\"datetime-local\" 
                                   class=\"form-control\" 
                                   name=\"date\" 
                                   value=\"";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 196, $this->source); })()), "date", [], "any", false, false, false, 196), "Y-m-d\\TH:i"), "html", null, true);
        yield "\"
                                   required>
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\">Catégorie</label>
                            <select class=\"form-select\" name=\"categorie\" required>
                                ";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categorie_options"]) || array_key_exists("categorie_options", $context) ? $context["categorie_options"] : (function () { throw new RuntimeError('Variable "categorie_options" does not exist.', 203, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 204
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "value", [], "any", false, false, false, 204), "html", null, true);
            yield "\" 
                                        ";
            // line 205
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 205, $this->source); })()), "categorie", [], "any", false, false, false, 205), "value", [], "any", false, false, false, 205) == CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "value", [], "any", false, false, false, 205))) ? ("selected") : (""));
            yield ">
                                        ";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "value", [], "any", false, false, false, 206), "html", null, true);
            yield "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        yield "                            </select>
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\">Photo</label>
                            <input type=\"file\" 
                                   class=\"form-control\" 
                                   name=\"photo\" 
                                   accept=\"image/*\">
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button type=\"submit\" class=\"btn btn-warning\">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

        <!-- Tableaux -->
        <div class=\"row gy-4\">
            <!-- Matériels -->
            <div class=\"col-xl-12\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"card-title mb-0\">Matériels Requis</h5>
                        <a href=\"#\" class=\"btn btn-sm\" style=\"background-color: #FFD700; color: #000;\">Gérer Matériels</a>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th>Matériel</th>
                                        <th>Quantité</th>
                                        <th>Prix Unitaire</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 250, $this->source); })()), "reservationsMaterielles", [], "any", false, false, false, 250));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 251
            yield "                                        ";
            $context["materielle"] = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "materielle", [], "any", false, false, false, 251);
            // line 252
            yield "                                        <tr>
                                            <td>
                                                <div class=\"d-flex align-items-center\">
                                                    ";
            // line 255
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielle"]) || array_key_exists("materielle", $context) ? $context["materielle"] : (function () { throw new RuntimeError('Variable "materielle" does not exist.', 255, $this->source); })()), "photoMat", [], "any", false, false, false, 255)) {
                // line 256
                yield "                                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielle"]) || array_key_exists("materielle", $context) ? $context["materielle"] : (function () { throw new RuntimeError('Variable "materielle" does not exist.', 256, $this->source); })()), "photoMat", [], "any", false, false, false, 256))), "html", null, true);
                yield "\" 
                                                         alt=\"";
                // line 257
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielle"]) || array_key_exists("materielle", $context) ? $context["materielle"] : (function () { throw new RuntimeError('Variable "materielle" does not exist.', 257, $this->source); })()), "nomMat", [], "any", false, false, false, 257), "html", null, true);
                yield "\" 
                                                         width=\"40\" 
                                                         class=\"rounded me-2\">
                                                    ";
            }
            // line 261
            yield "                                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielle"]) || array_key_exists("materielle", $context) ? $context["materielle"] : (function () { throw new RuntimeError('Variable "materielle" does not exist.', 261, $this->source); })()), "nomMat", [], "any", false, false, false, 261), "html", null, true);
            yield "
                                                </div>
                                            </td>
                                            <td>";
            // line 264
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "quantite", [], "any", false, false, false, 264), "html", null, true);
            yield "</td>
                                            <td>";
            // line 265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielle"]) || array_key_exists("materielle", $context) ? $context["materielle"] : (function () { throw new RuntimeError('Variable "materielle" does not exist.', 265, $this->source); })()), "prixMat", [], "any", false, false, false, 265), "EUR"), "html", null, true);
            yield "</td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        // line 267
        if (!$context['_iterated']) {
            // line 268
            yield "                                        <tr>
                                            <td colspan=\"3\" class=\"text-center\">Aucun matériel requis</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Personnel -->
            <div class=\"col-xl-12\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"card-title mb-0\">Personnel Assigné</h5>
                        <a href=\"#\" class=\"btn btn-sm\" style=\"background-color: #FFD700; color: #000;\">Gérer Personnel</a>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th>Membre</th>
                                        <th>Service</th>
                                        <th>Taux Horaire</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 297
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 297, $this->source); })()), "personnels", [], "any", false, false, false, 297));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["personnel"]) {
            // line 298
            yield "                                    <tr>
                                        <td>
                                            <div class=\"d-flex align-items-center\">
                                                ";
            // line 301
            if (CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "imageUrl", [], "any", false, false, false, 301)) {
                // line 302
                yield "                                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "imageUrl", [], "any", false, false, false, 302))), "html", null, true);
                yield "\" 
                                                     alt=\"";
                // line 303
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "nomP", [], "any", false, false, false, 303), "html", null, true);
                yield "\" 
                                                     width=\"40\" 
                                                     class=\"rounded me-2\">
                                                ";
            }
            // line 307
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "prenomP", [], "any", false, false, false, 307), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "nomP", [], "any", false, false, false, 307), "html", null, true);
            yield "
                                            </div>
                                        </td>
                                        <td>";
            // line 310
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "serviceP", [], "any", false, false, false, 310), "html", null, true);
            yield "</td>
                                        <td>";
            // line 311
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "tarifP", [], "any", false, false, false, 311), "EUR"), "html", null, true);
            yield "</td>
                                    </tr>
                                    ";
            $context['_iterated'] = true;
        }
        // line 313
        if (!$context['_iterated']) {
            // line 314
            yield "                                    <tr>
                                        <td colspan=\"3\" class=\"text-center\">Aucun personnel assigné</td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['personnel'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 318
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lieu -->
            <div class=\"col-xl-12\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"card-title mb-0\">Détails du Lieu</h5>
                        <a href=\"#\" class=\"btn btn-sm\" style=\"background-color: #FFD700; color: #000;\">Gérer Lieu</a>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Capacité</th>
                                        <th>Localisation</th>
                                        <th>Prix</th>
                                        <th>Date Réservation</th>
                                        <th>Statut</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 346, $this->source); })()), "reservationsLieu", [], "any", false, false, false, 346));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 347
            yield "                                        ";
            $context["lieu"] = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "lieu", [], "any", false, false, false, 347);
            // line 348
            yield "                                        <tr>
                                            <td>";
            // line 349
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 349, $this->source); })()), "name", [], "any", false, false, false, 349), "html", null, true);
            yield "</td>
                                            <td>";
            // line 350
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 350, $this->source); })()), "capacity", [], "any", false, false, false, 350), "html", null, true);
            yield "</td>
                                            <td>";
            // line 351
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 351, $this->source); })()), "location", [], "any", false, false, false, 351), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 351, $this->source); })()), "ville", [], "any", false, false, false, 351), "html", null, true);
            yield "</td>
                                            <td>";
            // line 352
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieu"]) || array_key_exists("lieu", $context) ? $context["lieu"] : (function () { throw new RuntimeError('Variable "lieu" does not exist.', 352, $this->source); })()), "price", [], "any", false, false, false, 352), "EUR"), "html", null, true);
            yield "</td>
                                            <td>";
            // line 353
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "date_reservation", [], "any", false, false, false, 353), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                            <td>";
            // line 354
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", true, true, false, 354)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 354), "Confirmé")) : ("Confirmé")), "html", null, true);
            yield "</td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        // line 356
        if (!$context['_iterated']) {
            // line 357
            yield "                                        <tr>
                                            <td colspan=\"6\" class=\"text-center\">Aucun lieu spécifié</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 361
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 372
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

        // line 373
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 378
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inline_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inline_scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inline_scripts"));

        // line 379
        yield from $this->yieldParentBlock("inline_scripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    flatpickr('.date-picker', {
        locale: \"fr\",
        minDate: \"today\",
        dateFormat: \"d/m/Y\",
        disableMobile: true
    });
});

 function previewImage(event) {
        const input = event.target;
        const preview = document.getElementById('photo_preview');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            preview.src = '#';
            preview.style.display = 'none';
        }
    }
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
        return "GestionEvent/DetailEvent.html.twig";
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
        return array (  732 => 379,  719 => 378,  703 => 373,  690 => 372,  669 => 361,  660 => 357,  658 => 356,  651 => 354,  647 => 353,  643 => 352,  637 => 351,  633 => 350,  629 => 349,  626 => 348,  623 => 347,  618 => 346,  588 => 318,  579 => 314,  577 => 313,  570 => 311,  566 => 310,  557 => 307,  550 => 303,  545 => 302,  543 => 301,  538 => 298,  533 => 297,  506 => 272,  497 => 268,  495 => 267,  488 => 265,  484 => 264,  477 => 261,  470 => 257,  465 => 256,  463 => 255,  458 => 252,  455 => 251,  450 => 250,  407 => 209,  398 => 206,  394 => 205,  389 => 204,  385 => 203,  375 => 196,  363 => 187,  353 => 180,  343 => 173,  323 => 156,  319 => 155,  299 => 137,  291 => 134,  289 => 133,  281 => 131,  278 => 130,  273 => 129,  269 => 128,  265 => 127,  259 => 124,  255 => 123,  249 => 119,  243 => 117,  235 => 115,  233 => 114,  225 => 108,  212 => 107,  103 => 9,  90 => 8,  67 => 6,  44 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("


{% extends 'front.html.twig' %}

{% block title %}Custom Page Title{% endblock %}

{% block stylesheets %}
    {{ parent() }}
<style>
body {
    background-color: #f8f7fa;
}

/* Event Card Style */
.th-product {
    background-color: #ffffff;
    border: 2px solid gold;
    border-radius: 12px;
    transition: all 0.3s ease;
    margin: 10px;
    padding: 10px;
    height: 100%; /* Helps cards be uniform height */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    cursor: pointer;

}

/* Image wrapper to control sizing and spacing */
.product-img {
    overflow: hidden;
    border-radius: 8px;
    margin-bottom: 15px;
}

/* Image style - same height and zoom on hover */
.product-img img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    transition: transform 0.3s ease;
    border-radius: 8px;
    display: block;
}

/* Zoom effect on hover */
.th-product:hover .product-img img {
    transform: scale(1.05);
}

/* Card hover effect */
.th-product:hover {
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    transform: translateY(-5px);
}

  .th-product .product-img::before {
        content: none !important;
        background-color: transparent !important;
        opacity: 0 !important;
        transform: none !important;
        transition: none !important;
        visibility: visible !important;
    }
    
    /* Disable hover state */
    .th-product:hover .product-img::before {
        opacity: 0 !important;
        visibility: hidden !important;
    }
    
    /* Remove any other hover effects */
    .th-product:hover {
        transform: none !important;
        box-shadow: none !important;
    }
        #cartIcon.dragover {
        transform: scale(1.1);
        color: #4CAF50;
    }
    .event-card {
        cursor: grab;
        transition: transform 0.2s;
    }
    
    .event-card:active {
        cursor: grabbing;
    }
.mb-40.mb-xl-0 {
    width: 100%;
    height: 100%; /* Prend toute la hauteur disponible */
    overflow: hidden; /* Cache le débordement */
    display: block; /* Retire le flex */
}

.mb-40.mb-xl-0 img {
    width: 100%;
    height: 100%; /* Prend toute la hauteur du conteneur */
    object-fit: cover; /* Couvre l'espace sans déformation */
    min-height: 400px; /* Hauteur minimale pour les petits écrans */
}
    </style>
{% endblock %}

{% block content %}

<section class=\"space\">
<div class=\"container\">
    <div class=\"row gy-4 mb-3 mb-xl-5\">
        <div class=\"col-xl-6\">
<div class=\"mb-40 mb-xl-0\">
    {% if event.photo %}
    <img src=\"{{ asset('uploads/packs/' ~ event.photo) }}\" alt=\"{{ event.nom }}\">
    {% else %}
    <img src=\"{{ asset('assets/img/event/default_event.jpg') }}\" alt=\"Image par défaut\">
    {% endif %}
</div>
        </div>
        <div class=\"col-xl-6 ps-3 ps-xl-5\">
            <div class=\"team-about\">
                <p class=\"team-about_desig\">{{ event.type }}</p>
                <h2 class=\"team-about_title\">{{ event.nom }}</h2>
                <div class=\"team-info\">
                    <ul>
                        <li><b>Catégorie :</b> <span>{{ event.categorie.value }}</span></li>
                        <li><b>Date :</b> <span>{{ event.date|date('j F Y') }}</span></li>
                                {% for reservation in event.reservationsLieu %}
                                        {% set lieu = reservation.lieu %}
                        <li><b>Lieu :</b> <span>{{ lieu.name ?? 'À déterminer' }}</span></li>

      {% else %}
                        <li><b>Lieu :</b> <span> À déterminer</span></li>

   {% endfor %}


                            

                        
                    </ul>
                </div>
                <div class=\"d-flex gap-3 mt-4\">
                    <!-- Bouton Édition -->
                    <button type=\"button\" 
                            class=\"btn btn-warning\" 
                            style=\"background-color: #FFD700; border-color: #FFD700;\"
                            data-bs-toggle=\"modal\" 
                            data-bs-target=\"#editEventModal\">
                        <i class=\"fas fa-edit me-2\"></i>Modifier
                    </button>

                    <!-- Formulaire Suppression -->
                    <form method=\"POST\" action=\"{{ path('app_event_delete', {'id': event.id}) }}\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ event.id) }}\">
                        <button type=\"submit\" 
                                class=\"btn btn-danger\" 
                                onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet événement ?')\">
                            <i class=\"fas fa-trash me-2\"></i>Supprimer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal d'Édition -->
    <div class=\"modal fade\" id=\"editEventModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <form method=\"POST\" 
                      action=\"{{ path('app_event_edit', {'id': event.id}) }}\" 
                      enctype=\"multipart/form-data\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">Modifier l'événement</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('edit-event') }}\">
                        
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Nom</label>
                            <input type=\"text\" 
                                   class=\"form-control\" 
                                   name=\"nom\" 
                                   value=\"{{ event.nom }}\"
                                   required>
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\">Date</label>
                            <input type=\"datetime-local\" 
                                   class=\"form-control\" 
                                   name=\"date\" 
                                   value=\"{{ event.date|date('Y-m-d\\\\TH:i') }}\"
                                   required>
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\">Catégorie</label>
                            <select class=\"form-select\" name=\"categorie\" required>
                                {% for categorie in categorie_options %}
                                    <option value=\"{{ categorie.value }}\" 
                                        {{ event.categorie.value == categorie.value ? 'selected' }}>
                                        {{ categorie.value }}
                                    </option>
                                {% endfor %}
                            </select>
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\">Photo</label>
                            <input type=\"file\" 
                                   class=\"form-control\" 
                                   name=\"photo\" 
                                   accept=\"image/*\">
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        <button type=\"submit\" class=\"btn btn-warning\">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

        <!-- Tableaux -->
        <div class=\"row gy-4\">
            <!-- Matériels -->
            <div class=\"col-xl-12\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"card-title mb-0\">Matériels Requis</h5>
                        <a href=\"#\" class=\"btn btn-sm\" style=\"background-color: #FFD700; color: #000;\">Gérer Matériels</a>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th>Matériel</th>
                                        <th>Quantité</th>
                                        <th>Prix Unitaire</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for reservation in event.reservationsMaterielles %}
                                        {% set materielle = reservation.materielle %}
                                        <tr>
                                            <td>
                                                <div class=\"d-flex align-items-center\">
                                                    {% if materielle.photoMat %}
                                                    <img src=\"{{ asset('uploads/packs/' ~ materielle.photoMat) }}\" 
                                                         alt=\"{{ materielle.nomMat }}\" 
                                                         width=\"40\" 
                                                         class=\"rounded me-2\">
                                                    {% endif %}
                                                    {{ materielle.nomMat }}
                                                </div>
                                            </td>
                                            <td>{{ reservation.quantite }}</td>
                                            <td>{{ materielle.prixMat|format_currency('EUR') }}</td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"3\" class=\"text-center\">Aucun matériel requis</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Personnel -->
            <div class=\"col-xl-12\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"card-title mb-0\">Personnel Assigné</h5>
                        <a href=\"#\" class=\"btn btn-sm\" style=\"background-color: #FFD700; color: #000;\">Gérer Personnel</a>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th>Membre</th>
                                        <th>Service</th>
                                        <th>Taux Horaire</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for personnel in event.personnels %}
                                    <tr>
                                        <td>
                                            <div class=\"d-flex align-items-center\">
                                                {% if personnel.imageUrl %}
                                                <img src=\"{{ asset('uploads/packs/' ~ personnel.imageUrl) }}\" 
                                                     alt=\"{{ personnel.nomP }}\" 
                                                     width=\"40\" 
                                                     class=\"rounded me-2\">
                                                {% endif %}
                                                {{ personnel.prenomP }} {{ personnel.nomP }}
                                            </div>
                                        </td>
                                        <td>{{ personnel.serviceP }}</td>
                                        <td>{{ personnel.tarifP|format_currency('EUR') }}</td>
                                    </tr>
                                    {% else %}
                                    <tr>
                                        <td colspan=\"3\" class=\"text-center\">Aucun personnel assigné</td>
                                    </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lieu -->
            <div class=\"col-xl-12\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"card-title mb-0\">Détails du Lieu</h5>
                        <a href=\"#\" class=\"btn btn-sm\" style=\"background-color: #FFD700; color: #000;\">Gérer Lieu</a>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Capacité</th>
                                        <th>Localisation</th>
                                        <th>Prix</th>
                                        <th>Date Réservation</th>
                                        <th>Statut</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for reservation in event.reservationsLieu %}
                                        {% set lieu = reservation.lieu %}
                                        <tr>
                                            <td>{{ lieu.name }}</td>
                                            <td>{{ lieu.capacity }}</td>
                                            <td>{{ lieu.location }}, {{ lieu.ville }}</td>
                                            <td>{{ lieu.price|format_currency('EUR') }}</td>
                                            <td>{{ reservation.date_reservation|date('d/m/Y H:i') }}</td>
                                            <td>{{ reservation.status|default('Confirmé') }}</td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"6\" class=\"text-center\">Aucun lieu spécifié</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{% endblock %}
   {% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js\"></script>
{% endblock %}

{% block inline_scripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    flatpickr('.date-picker', {
        locale: \"fr\",
        minDate: \"today\",
        dateFormat: \"d/m/Y\",
        disableMobile: true
    });
});

 function previewImage(event) {
        const input = event.target;
        const preview = document.getElementById('photo_preview');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            preview.src = '#';
            preview.style.display = 'none';
        }
    }
</script>
{% endblock %}", "GestionEvent/DetailEvent.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\GestionEvent\\DetailEvent.html.twig");
    }
}
