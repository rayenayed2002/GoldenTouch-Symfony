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

/* admin/user/edit.html.twig */
class __TwigTemplate_ed2cc3a56b99ab5bd3ed74422e46bda6 extends Template
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
            'title_h1' => [$this, 'block_title_h1'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/edit.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/user/edit.html.twig", 1);
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

        yield "Utilisateurs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title_h1(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_h1"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_h1"));

        yield "Édition d'un utilisateur";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "<div class=\"card shadow mb-4\" style=\"max-width: 600px; margin: 0 auto;\">
    <!-- Card Header with Beige Color -->
    <div class=\"card-header py-3 d-flex align-items-center justify-content-between bg-beige text-dark\">
        <h3 class=\"m-0 font-weight-bold\">
            <i class=\"fas fa-user-edit mr-2\"></i>Modification d'utilisateur
        </h3>
        ";
        // line 13
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13), "photo", [], "any", false, false, false, 13)) {
            // line 14
            yield "            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "vars", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14), "photo", [], "any", false, false, false, 14))), "html", null, true);
            yield "\" 
                 class=\"rounded-circle border-light\"
                 style=\"width: 40px; height: 40px; object-fit: cover; border: 2px solid #e8e1d1;\">
        ";
        }
        // line 18
        yield "    </div>
    
    <!-- Card Body -->
    <div class=\"card-body\">
        ";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "user-edit-form"]]);
        yield "
            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'errors');
        yield "
            
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "firstName", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "small mb-1 text-muted"]]);
        yield "
                        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "firstName", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control border-light"]]);
        yield "
                        <div class=\"text-danger\">";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "firstName", [], "any", false, false, false, 30), 'errors');
        yield "</div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "lastName", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => "small mb-1 text-muted"]]);
        yield "
                        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "lastName", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control border-light"]]);
        yield "
                        <div class=\"text-danger\">";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "lastName", [], "any", false, false, false, 37), 'errors');
        yield "</div>
                    </div>
                </div>
            </div>
            
            <div class=\"form-group\">
                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "small mb-1 text-muted"]]);
        yield "
                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control border-light"]]);
        yield "
                <div class=\"text-danger\">";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), 'errors');
        yield "</div>
            </div>
            
            <div class=\"form-group\">
                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "username", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "small mb-1 text-muted"]]);
        yield "
                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "username", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control border-light"]]);
        yield "
                <div class=\"text-danger\">";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "username", [], "any", false, false, false, 51), 'errors');
        yield "</div>
            </div>
            
            <div class=\"form-group\">
                ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "roles", [], "any", false, false, false, 55), 'label', ["label_attr" => ["class" => "small mb-1 text-muted"]]);
        yield "
                ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "roles", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control border-light"]]);
        yield "
                <div class=\"text-danger\">";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "roles", [], "any", false, false, false, 57), 'errors');
        yield "</div>
            </div>
            
            <div class=\"form-group\">
                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "photoFile", [], "any", false, false, false, 61), 'label', ["label_attr" => ["class" => "small mb-1 text-muted"]]);
        yield "
                <div class=\"custom-file\">
                    ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "photoFile", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "custom-file-input"]]);
        yield "
                    <label class=\"custom-file-label\" for=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "photoFile", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64), "html", null, true);
        yield "\">
                        ";
        // line 65
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "vars", [], "any", false, false, false, 65), "value", [], "any", false, false, false, 65), "photo", [], "any", false, false, false, 65)) {
            // line 66
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "vars", [], "any", false, false, false, 66), "value", [], "any", false, false, false, 66), "photo", [], "any", false, false, false, 66), "html", null, true);
            yield "
                        ";
        } else {
            // line 68
            yield "                            Choisir une photo...
                        ";
        }
        // line 70
        yield "                    </label>
                </div>
                <div class=\"text-danger\">";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "photoFile", [], "any", false, false, false, 72), 'errors');
        yield "</div>
                ";
        // line 73
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "vars", [], "any", false, false, false, 73), "value", [], "any", false, false, false, 73), "photo", [], "any", false, false, false, 73)) {
            // line 74
            yield "                    <small class=\"form-text text-muted\">
                        Photo actuelle : ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "vars", [], "any", false, false, false, 75), "value", [], "any", false, false, false, 75), "photo", [], "any", false, false, false, 75), "html", null, true);
            yield "
                    </small>
                ";
        }
        // line 78
        yield "            </div>
            
            <div class=\"form-group mt-4 pt-3 border-top text-right\">
                <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        yield "\" class=\"btn btn-light btn-icon-split\">
                    <span class=\"icon text-gray-600\">
                        <i class=\"fas fa-times\"></i>
                    </span>
                    <span class=\"text\">Annuler</span>
                </a>
            </div>
        ";
        // line 88
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), 'form_end');
        yield "
    </div>
</div>

<style>
    .user-edit-form .form-group {
        margin-bottom: 1.5rem;
    }
    
    .card-header {
        padding: 1rem 1.5rem !important;
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }
    
    .custom-file-label::after {
        content: \"Parcourir\";
        background: #e8e1d1;
        color: #5a5c69;
    }
    
    /* Beige Color Scheme */
    .bg-beige {
        background-color: #f5f1e6;
    }
    
    .border-light {
        border-color: #e8e1d1 !important;
    }
    
    .form-control {
        background-color: #faf9f5;
    }
    
    .custom-file-label {
        background-color: #faf9f5;
        border-color: #e8e1d1;
        color: #5a5c69;
    }
    
    .btn-light {
        background-color: #f8f9fa;
        border-color: #e8e1d1;
        color: #5a5c69;
    }
    
    .btn-light:hover {
        background-color: #e8e1d1;
        border-color: #d4cdbd;
    }
</style>

<script>
    // Update file input label with selected filename
    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
        var fileName = e.target.files[0] ? e.target.files[0].name : \"Choisir une photo...\";
        var nextSibling = e.target.nextElementSibling;
        nextSibling.innerText = fileName;
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
        return "admin/user/edit.html.twig";
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
        return array (  297 => 88,  287 => 81,  282 => 78,  276 => 75,  273 => 74,  271 => 73,  267 => 72,  263 => 70,  259 => 68,  253 => 66,  251 => 65,  247 => 64,  243 => 63,  238 => 61,  231 => 57,  227 => 56,  223 => 55,  216 => 51,  212 => 50,  208 => 49,  201 => 45,  197 => 44,  193 => 43,  184 => 37,  180 => 36,  176 => 35,  168 => 30,  164 => 29,  160 => 28,  152 => 23,  148 => 22,  142 => 18,  134 => 14,  132 => 13,  124 => 7,  111 => 6,  88 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"admin/layout.html.twig\" %}

{% block title \"Utilisateurs\" %}
{% block title_h1 \"Édition d'un utilisateur\" %}

{% block body %}
<div class=\"card shadow mb-4\" style=\"max-width: 600px; margin: 0 auto;\">
    <!-- Card Header with Beige Color -->
    <div class=\"card-header py-3 d-flex align-items-center justify-content-between bg-beige text-dark\">
        <h3 class=\"m-0 font-weight-bold\">
            <i class=\"fas fa-user-edit mr-2\"></i>Modification d'utilisateur
        </h3>
        {% if form.vars.value.photo %}
            <img src=\"{{ asset('uploads/photos/' ~ form.vars.value.photo) }}\" 
                 class=\"rounded-circle border-light\"
                 style=\"width: 40px; height: 40px; object-fit: cover; border: 2px solid #e8e1d1;\">
        {% endif %}
    </div>
    
    <!-- Card Body -->
    <div class=\"card-body\">
        {{ form_start(form, { attr: { novalidate: 'novalidate', class: 'user-edit-form' } }) }}
            {{ form_errors(form) }}
            
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        {{ form_label(form.firstName, null, {'label_attr': {'class': 'small mb-1 text-muted'}}) }}
                        {{ form_widget(form.firstName, {'attr': {'class': 'form-control border-light'}}) }}
                        <div class=\"text-danger\">{{ form_errors(form.firstName) }}</div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        {{ form_label(form.lastName, null, {'label_attr': {'class': 'small mb-1 text-muted'}}) }}
                        {{ form_widget(form.lastName, {'attr': {'class': 'form-control border-light'}}) }}
                        <div class=\"text-danger\">{{ form_errors(form.lastName) }}</div>
                    </div>
                </div>
            </div>
            
            <div class=\"form-group\">
                {{ form_label(form.email, null, {'label_attr': {'class': 'small mb-1 text-muted'}}) }}
                {{ form_widget(form.email, {'attr': {'class': 'form-control border-light'}}) }}
                <div class=\"text-danger\">{{ form_errors(form.email) }}</div>
            </div>
            
            <div class=\"form-group\">
                {{ form_label(form.username, null, {'label_attr': {'class': 'small mb-1 text-muted'}}) }}
                {{ form_widget(form.username, {'attr': {'class': 'form-control border-light'}}) }}
                <div class=\"text-danger\">{{ form_errors(form.username) }}</div>
            </div>
            
            <div class=\"form-group\">
                {{ form_label(form.roles, null, {'label_attr': {'class': 'small mb-1 text-muted'}}) }}
                {{ form_widget(form.roles, {'attr': {'class': 'form-control border-light'}}) }}
                <div class=\"text-danger\">{{ form_errors(form.roles) }}</div>
            </div>
            
            <div class=\"form-group\">
                {{ form_label(form.photoFile, null, {'label_attr': {'class': 'small mb-1 text-muted'}}) }}
                <div class=\"custom-file\">
                    {{ form_widget(form.photoFile, {'attr': {'class': 'custom-file-input'}}) }}
                    <label class=\"custom-file-label\" for=\"{{ form.photoFile.vars.id }}\">
                        {% if form.vars.value.photo %}
                            {{ form.vars.value.photo }}
                        {% else %}
                            Choisir une photo...
                        {% endif %}
                    </label>
                </div>
                <div class=\"text-danger\">{{ form_errors(form.photoFile) }}</div>
                {% if form.vars.value.photo %}
                    <small class=\"form-text text-muted\">
                        Photo actuelle : {{ form.vars.value.photo }}
                    </small>
                {% endif %}
            </div>
            
            <div class=\"form-group mt-4 pt-3 border-top text-right\">
                <a href=\"{{ path('admin_user_index') }}\" class=\"btn btn-light btn-icon-split\">
                    <span class=\"icon text-gray-600\">
                        <i class=\"fas fa-times\"></i>
                    </span>
                    <span class=\"text\">Annuler</span>
                </a>
            </div>
        {{ form_end(form) }}
    </div>
</div>

<style>
    .user-edit-form .form-group {
        margin-bottom: 1.5rem;
    }
    
    .card-header {
        padding: 1rem 1.5rem !important;
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }
    
    .custom-file-label::after {
        content: \"Parcourir\";
        background: #e8e1d1;
        color: #5a5c69;
    }
    
    /* Beige Color Scheme */
    .bg-beige {
        background-color: #f5f1e6;
    }
    
    .border-light {
        border-color: #e8e1d1 !important;
    }
    
    .form-control {
        background-color: #faf9f5;
    }
    
    .custom-file-label {
        background-color: #faf9f5;
        border-color: #e8e1d1;
        color: #5a5c69;
    }
    
    .btn-light {
        background-color: #f8f9fa;
        border-color: #e8e1d1;
        color: #5a5c69;
    }
    
    .btn-light:hover {
        background-color: #e8e1d1;
        border-color: #d4cdbd;
    }
</style>

<script>
    // Update file input label with selected filename
    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
        var fileName = e.target.files[0] ? e.target.files[0].name : \"Choisir une photo...\";
        var nextSibling = e.target.nextElementSibling;
        nextSibling.innerText = fileName;
    });
</script>
{% endblock %}", "admin/user/edit.html.twig", "C:\\Users\\ASUS\\Desktop\\user symfony\\templates\\admin\\user\\edit.html.twig");
    }
}
