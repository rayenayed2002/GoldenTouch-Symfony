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

/* GestionEvent/AddEvent.html.twig */
class __TwigTemplate_5be12c852f28934e37b3a12526793bda extends Template
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
        // line 1
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionEvent/AddEvent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionEvent/AddEvent.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "GestionEvent/AddEvent.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

    // line 5
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

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <style>
        .flatpickr-calendar {
            z-index: 99999 !important;
            margin-top: 5px;
        }
        .generate-btn {
            margin-bottom: 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }
        .generate-btn:hover {
            background-color: #45a049;
        }
        #descriptionField {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .magic-btn {
            background: linear-gradient(45deg, #FFD700, #D4AF37);
            color: #fff;
            font-weight: bold;
            padding: 12px 18px;
            font-size: 16px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(255, 215, 0, 0.8);
            transition: transform 0.2s;
            text-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        .magic-btn:hover {
            background: linear-gradient(45deg, #D4AF37, #FFD700);
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(255, 215, 0, 0.9);
        }

        /* Gold Sparkles - Always moving */
        .magic-btn::before,
        .magic-btn::after {
            content: '';
            position: absolute;
            width: 10px;
            height: 10px;
            background: #FFD700;
            border-radius: 50%;
            filter: blur(1px);
            animation: goldSparkle 2s infinite, floatMovement 3s infinite;
        }

        .magic-btn::before {
            top: 10%;
            left: 15%;
            animation-delay: 0s, 0.5s;
        }

        .magic-btn::after {
            bottom: 10%;
            right: 15%;
            animation-delay: 0.3s, 0s;
        }

        /* Third sparkle */
        .magic-btn span::before {
            content: '';
            position: absolute;
            width: 8px;
            height: 8px;
            background: #FFD700;
            border-radius: 50%;
            filter: blur(1px);
            animation: goldSparkle 1.8s infinite, floatDiagonal 3.5s infinite;
            top: 30%;
            right: 20%;
        }

        @keyframes goldSparkle {
            0% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.5); opacity: 0.7; box-shadow: 0 0 10px #FFD700; }
            100% { transform: scale(1); opacity: 1; }
        }

        @keyframes floatMovement {
            0% { transform: translateY(0) translateX(0); }
            25% { transform: translateY(-5px) translateX(3px); }
            50% { transform: translateY(0) translateX(5px); }
            75% { transform: translateY(3px) translateX(-2px); }
            100% { transform: translateY(0) translateX(0); }
        }

        @keyframes floatDiagonal {
            0% { transform: translate(0, 0); }
            25% { transform: translate(5px, -5px); }
            50% { transform: translate(5px, 5px); }
            75% { transform: translate(-5px, 5px); }
            100% { transform: translate(0, 0); }
        }
        input[type=\"text\"],
input[type=\"date\"],
input[type=\"file\"],
select,
textarea {
    border: 2px solid #FFD700 !important;
    border-radius: 4px;
    transition: box-shadow 0.3s, border-color 0.3s;
}

/* On focus, make it glow gold */
input[type=\"text\"]:focus,
input[type=\"date\"]:focus,
input[type=\"file\"]:focus,
select:focus,
textarea:focus {
    box-shadow: 0 0 8px rgba(255, 215, 0, 0.8);
    border-color: #FFA500;
    outline: none;
}
.custom-file-upload {
    position: relative;
    display: inline-block;
}

.upload-label {
    display: inline-block;
    padding: 10px 20px;
    background: linear-gradient(45deg, #FFD700, #D4AF37);
    color: white;
    font-weight: bold;
    border-radius: 25px;
    cursor: pointer; /* Ensures hand cursor */
    transition: background 0.3s, transform 0.2s;
    box-shadow: 0 0 10px rgba(255, 215, 0, 0.6);
    text-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
}


.upload-label:hover {
    background: linear-gradient(45deg, #D4AF37, #FFD700);
    transform: scale(1.05);
    box-shadow: 0 0 15px rgba(255, 215, 0, 0.8);
}

    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 162
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

        // line 163
        yield "<div class=\"position-relative space\">
    <div class=\"container\">
        <div class=\"ai-description-wrapper mb-4\">
            <textarea id=\"descriptionField\" placeholder=\"Décrivez votre événement...\"></textarea>
            <div class=\"d-flex justify-content-center\">
                <button id=\"generateBtn\" class=\"generate-btn magic-btn mt-2\">Générer avec AI<span></span></button>
            </div>
        </div>

        
       ";
        // line 173
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

        <div class=\"row\">
        <!-- Nom -->
            <div class=\"form-group col-12\">
                ";
        // line 178
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "nom", [], "any", false, false, false, 178), 'label');
        yield "
                ";
        // line 179
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "nom", [], "any", false, false, false, 179), 'widget');
        yield "
  
        ";
        // line 181
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "nom", [], "any", false, false, false, 181), 'errors');
        yield "
   </div>
            <!-- Catégorie -->
            <div class=\"form-group col-12\">
                ";
        // line 185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "categorie", [], "any", false, false, false, 185), 'label');
        yield "
                ";
        // line 186
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "categorie", [], "any", false, false, false, 186), 'widget');
        yield "
                ";
        // line 187
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "categorie", [], "any", false, false, false, 187), 'errors');
        yield "
            </div>

            <!-- Date -->
            <div class=\"form-group col-12\">
                ";
        // line 192
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "date", [], "any", false, false, false, 192), 'label');
        yield "
                <div class=\"input-group\">
                    ";
        // line 194
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "date", [], "any", false, false, false, 194), 'widget', ["attr" => ["class" => "form-control date-picker"]]);
        yield "
                    <span class=\"input-group-text\">
                        <i class=\"fa-regular fa-calendar\"></i>
                    </span>
                </div>
                ";
        // line 199
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "date", [], "any", false, false, false, 199), 'errors');
        yield "
            </div>

            <!-- Photo -->
    <!-- Photo Section - Modified -->
<!-- Photo Section -->
<!-- Photo Section -->
<div class=\"form-group col-12\">
    <div class=\"file-upload-wrapper text-center\">
        <div class=\"custom-file-upload\">
            <label class=\"upload-label\">
                Choisir une photo
                <!-- Use Symfony's file input but hide it visually -->
                ";
        // line 212
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "photo", [], "any", false, false, false, 212), 'widget', ["attr" => ["class" => "upload-input", "style" => "opacity: 0; position: absolute; left: 0; top: 0; width: 100%; height: 100%; cursor: pointer;", "onchange" => "previewImage(event)"]]);
        // line 218
        yield "
            </label>
        </div>
        ";
        // line 221
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), "photo", [], "any", false, false, false, 221), 'errors');
        yield "
        <img
            id=\"photo_preview\"
            src=\"";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/packs/Images/logo2.png"), "html", null, true);
        yield "\"
            alt=\"Aperçu de la photo\"
            class=\"d-block mx-auto preview-image\"
            style=\"width: 150px; height: 150px; object-fit: cover; margin-top: 10px; display: none; border-radius: 8px;\"
        />
    </div>
</div>

            <!-- Submit Button -->
            <div class=\"form-btn col-12 mt-4\">
                ";
        // line 234
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), "save", [], "any", false, false, false, 234), 'widget', ["label" => "Créer l'événement", "attr" => ["class" => "th-btn fw-btn"]]);
        // line 239
        yield "
                <i class=\"fa-regular fa-arrow-right\"></i>
            </div>
        </div>
        ";
        // line 243
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), 'form_end');
        yield "
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 248
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

        // line 249
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

    // line 254
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

        // line 255
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

    // Handle generate button click
    document.getElementById('generateBtn').addEventListener('click', function() {
        const description = document.getElementById('descriptionField').value.trim();
        
        if (!description) {
            alert('Veuillez entrer une description.');
            return;
        }
        
        generateEvent(description);
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

async function generateEvent(description) {
    try {
const response = await fetch('/ajouter-evenement', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({ description: description })
        });

        const data = await response.json();
        
        if (data.error) {
            alert('Erreur: ' + data.error);
            return;
        }

        // Update form fields with the generated data
        if (data.name) {
            document.getElementById('";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 317, $this->source); })()), "nom", [], "any", false, false, false, 317), "vars", [], "any", false, false, false, 317), "id", [], "any", false, false, false, 317), "html", null, true);
        yield "').value = data.name;
        }
        
     if (data.category) {
    const select = document.getElementById('";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 321, $this->source); })()), "categorie", [], "any", false, false, false, 321), "vars", [], "any", false, false, false, 321), "id", [], "any", false, false, false, 321), "html", null, true);
        yield "');
    const options = Array.from(select.options);
    
    const matchedOption = options.find(opt => opt.text.toLowerCase() === data.category.toLowerCase() || opt.value.toLowerCase() === data.category.toLowerCase());

    if (matchedOption) {
        select.value = matchedOption.value;
    } else {
        alert(\"La catégorie générée ne correspond à aucune option disponible : \" + data.category);
    }
}

        
        if (data.date) {
            // Format date for flatpickr (assuming it comes in MM/dd/yyyy format)
            const [month, day, year] = data.date.split('/');
            const formattedDate = `\${day}/\${month}/\${year}`;
            document.getElementById('";
        // line 338
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 338, $this->source); })()), "date", [], "any", false, false, false, 338), "vars", [], "any", false, false, false, 338), "id", [], "any", false, false, false, 338), "html", null, true);
        yield "').value = formattedDate;
            
            // If using flatpickr with an instance, you might need to:
            // flatpickrInstance.setDate(formattedDate);
        }
        
        // Set the default image
        document.getElementById('photo_preview').src = \"";
        // line 345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Images/birthday.jpg"), "html", null, true);
        yield "\";
        document.getElementById('photo_preview').style.display = 'block';
        
    } catch (error) {
        console.error('Error:', error);
        alert('Une erreur est survenue lors de la génération de l\\'événement.');
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
        return "GestionEvent/AddEvent.html.twig";
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
        return array (  557 => 345,  547 => 338,  527 => 321,  520 => 317,  455 => 255,  442 => 254,  426 => 249,  413 => 248,  398 => 243,  392 => 239,  390 => 234,  377 => 224,  371 => 221,  366 => 218,  364 => 212,  348 => 199,  340 => 194,  335 => 192,  327 => 187,  323 => 186,  319 => 185,  312 => 181,  307 => 179,  303 => 178,  295 => 173,  283 => 163,  270 => 162,  103 => 6,  90 => 5,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front.html.twig' %}

{% block title %}Custom Page Title{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <style>
        .flatpickr-calendar {
            z-index: 99999 !important;
            margin-top: 5px;
        }
        .generate-btn {
            margin-bottom: 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }
        .generate-btn:hover {
            background-color: #45a049;
        }
        #descriptionField {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .magic-btn {
            background: linear-gradient(45deg, #FFD700, #D4AF37);
            color: #fff;
            font-weight: bold;
            padding: 12px 18px;
            font-size: 16px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(255, 215, 0, 0.8);
            transition: transform 0.2s;
            text-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        .magic-btn:hover {
            background: linear-gradient(45deg, #D4AF37, #FFD700);
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(255, 215, 0, 0.9);
        }

        /* Gold Sparkles - Always moving */
        .magic-btn::before,
        .magic-btn::after {
            content: '';
            position: absolute;
            width: 10px;
            height: 10px;
            background: #FFD700;
            border-radius: 50%;
            filter: blur(1px);
            animation: goldSparkle 2s infinite, floatMovement 3s infinite;
        }

        .magic-btn::before {
            top: 10%;
            left: 15%;
            animation-delay: 0s, 0.5s;
        }

        .magic-btn::after {
            bottom: 10%;
            right: 15%;
            animation-delay: 0.3s, 0s;
        }

        /* Third sparkle */
        .magic-btn span::before {
            content: '';
            position: absolute;
            width: 8px;
            height: 8px;
            background: #FFD700;
            border-radius: 50%;
            filter: blur(1px);
            animation: goldSparkle 1.8s infinite, floatDiagonal 3.5s infinite;
            top: 30%;
            right: 20%;
        }

        @keyframes goldSparkle {
            0% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.5); opacity: 0.7; box-shadow: 0 0 10px #FFD700; }
            100% { transform: scale(1); opacity: 1; }
        }

        @keyframes floatMovement {
            0% { transform: translateY(0) translateX(0); }
            25% { transform: translateY(-5px) translateX(3px); }
            50% { transform: translateY(0) translateX(5px); }
            75% { transform: translateY(3px) translateX(-2px); }
            100% { transform: translateY(0) translateX(0); }
        }

        @keyframes floatDiagonal {
            0% { transform: translate(0, 0); }
            25% { transform: translate(5px, -5px); }
            50% { transform: translate(5px, 5px); }
            75% { transform: translate(-5px, 5px); }
            100% { transform: translate(0, 0); }
        }
        input[type=\"text\"],
input[type=\"date\"],
input[type=\"file\"],
select,
textarea {
    border: 2px solid #FFD700 !important;
    border-radius: 4px;
    transition: box-shadow 0.3s, border-color 0.3s;
}

/* On focus, make it glow gold */
input[type=\"text\"]:focus,
input[type=\"date\"]:focus,
input[type=\"file\"]:focus,
select:focus,
textarea:focus {
    box-shadow: 0 0 8px rgba(255, 215, 0, 0.8);
    border-color: #FFA500;
    outline: none;
}
.custom-file-upload {
    position: relative;
    display: inline-block;
}

.upload-label {
    display: inline-block;
    padding: 10px 20px;
    background: linear-gradient(45deg, #FFD700, #D4AF37);
    color: white;
    font-weight: bold;
    border-radius: 25px;
    cursor: pointer; /* Ensures hand cursor */
    transition: background 0.3s, transform 0.2s;
    box-shadow: 0 0 10px rgba(255, 215, 0, 0.6);
    text-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
}


.upload-label:hover {
    background: linear-gradient(45deg, #D4AF37, #FFD700);
    transform: scale(1.05);
    box-shadow: 0 0 15px rgba(255, 215, 0, 0.8);
}

    </style>
{% endblock %}

{% block content %}
<div class=\"position-relative space\">
    <div class=\"container\">
        <div class=\"ai-description-wrapper mb-4\">
            <textarea id=\"descriptionField\" placeholder=\"Décrivez votre événement...\"></textarea>
            <div class=\"d-flex justify-content-center\">
                <button id=\"generateBtn\" class=\"generate-btn magic-btn mt-2\">Générer avec AI<span></span></button>
            </div>
        </div>

        
       {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

        <div class=\"row\">
        <!-- Nom -->
            <div class=\"form-group col-12\">
                {{ form_label(form.nom) }}
                {{ form_widget(form.nom) }}
  
        {{ form_errors(form.nom) }}
   </div>
            <!-- Catégorie -->
            <div class=\"form-group col-12\">
                {{ form_label(form.categorie) }}
                {{ form_widget(form.categorie) }}
                {{ form_errors(form.categorie) }}
            </div>

            <!-- Date -->
            <div class=\"form-group col-12\">
                {{ form_label(form.date) }}
                <div class=\"input-group\">
                    {{ form_widget(form.date, {'attr': {'class': 'form-control date-picker'}}) }}
                    <span class=\"input-group-text\">
                        <i class=\"fa-regular fa-calendar\"></i>
                    </span>
                </div>
                {{ form_errors(form.date) }}
            </div>

            <!-- Photo -->
    <!-- Photo Section - Modified -->
<!-- Photo Section -->
<!-- Photo Section -->
<div class=\"form-group col-12\">
    <div class=\"file-upload-wrapper text-center\">
        <div class=\"custom-file-upload\">
            <label class=\"upload-label\">
                Choisir une photo
                <!-- Use Symfony's file input but hide it visually -->
                {{ form_widget(form.photo, {
                    'attr': {
                        'class': 'upload-input',
                        'style': 'opacity: 0; position: absolute; left: 0; top: 0; width: 100%; height: 100%; cursor: pointer;',
                        'onchange': 'previewImage(event)'
                    }
                }) }}
            </label>
        </div>
        {{ form_errors(form.photo) }}
        <img
            id=\"photo_preview\"
            src=\"{{ asset('uploads/packs/Images/logo2.png') }}\"
            alt=\"Aperçu de la photo\"
            class=\"d-block mx-auto preview-image\"
            style=\"width: 150px; height: 150px; object-fit: cover; margin-top: 10px; display: none; border-radius: 8px;\"
        />
    </div>
</div>

            <!-- Submit Button -->
            <div class=\"form-btn col-12 mt-4\">
                {{ form_widget(form.save, {
                    'label': 'Créer l\\'événement',
                    'attr': {
                        'class': 'th-btn fw-btn',
                    }
                }) }}
                <i class=\"fa-regular fa-arrow-right\"></i>
            </div>
        </div>
        {{ form_end(form) }}
    </div>
</div>
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

    // Handle generate button click
    document.getElementById('generateBtn').addEventListener('click', function() {
        const description = document.getElementById('descriptionField').value.trim();
        
        if (!description) {
            alert('Veuillez entrer une description.');
            return;
        }
        
        generateEvent(description);
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

async function generateEvent(description) {
    try {
const response = await fetch('/ajouter-evenement', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({ description: description })
        });

        const data = await response.json();
        
        if (data.error) {
            alert('Erreur: ' + data.error);
            return;
        }

        // Update form fields with the generated data
        if (data.name) {
            document.getElementById('{{ form.nom.vars.id }}').value = data.name;
        }
        
     if (data.category) {
    const select = document.getElementById('{{ form.categorie.vars.id }}');
    const options = Array.from(select.options);
    
    const matchedOption = options.find(opt => opt.text.toLowerCase() === data.category.toLowerCase() || opt.value.toLowerCase() === data.category.toLowerCase());

    if (matchedOption) {
        select.value = matchedOption.value;
    } else {
        alert(\"La catégorie générée ne correspond à aucune option disponible : \" + data.category);
    }
}

        
        if (data.date) {
            // Format date for flatpickr (assuming it comes in MM/dd/yyyy format)
            const [month, day, year] = data.date.split('/');
            const formattedDate = `\${day}/\${month}/\${year}`;
            document.getElementById('{{ form.date.vars.id }}').value = formattedDate;
            
            // If using flatpickr with an instance, you might need to:
            // flatpickrInstance.setDate(formattedDate);
        }
        
        // Set the default image
        document.getElementById('photo_preview').src = \"{{ asset('Images/birthday.jpg') }}\";
        document.getElementById('photo_preview').style.display = 'block';
        
    } catch (error) {
        console.error('Error:', error);
        alert('Une erreur est survenue lors de la génération de l\\'événement.');
    }
}
</script>
{% endblock %}", "GestionEvent/AddEvent.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\GestionEvent\\AddEvent.html.twig");
    }
}
