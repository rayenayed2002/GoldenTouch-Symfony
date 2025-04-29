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

/* user/account/edit.html.twig */
class __TwigTemplate_3e126966267a3c6a18d5894f051deb12 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/account/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/account/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/account/edit.html.twig", 1);
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

        yield "Profil";
        
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

        yield "Modifier mon profil";
        
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
        yield "<div class=\"card shadow mb-4\" style=\"max-width: 600px; margin: 50px auto;\">
    <div class=\"card-header py-4 text-center bg-gradient-primary text-white\">
        <div class=\"user-avatar mx-auto mb-3\">
            ";
        // line 10
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "photo", [], "any", false, false, false, 10)) {
            // line 11
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "photo", [], "any", false, false, false, 11))), "html", null, true);
            yield "\"
                     class=\"rounded-circle border-white\"
                     style=\"width: 80px; height: 80px; object-fit: cover; border: 3px solid white;\">
            ";
        } else {
            // line 15
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/photos/default.png"), "html", null, true);
            yield "\"
                     class=\"rounded-circle border-white\"
                     style=\"width: 80px; height: 80px; object-fit: cover; border: 3px solid white;\">
            ";
        }
        // line 19
        yield "        </div>
        <h3 class=\"font-weight-bold mb-1\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "fullName", [], "any", false, false, false, 20), "html", null, true);
        yield "</h3>
        <div class=\"text-white-50 small\">Modifier vos informations personnelles</div>
    </div>

    <div class=\"card-body\">
        ";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "user-edit-form"]]);
        yield "
            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'errors');
        yield "

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "firstName", [], "any", false, false, false, 31), 'label', ["label_attr" => ["class" => "small mb-1 text-muted"]]);
        yield "
                        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "firstName", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "firstName", [], "any", false, false, false, 33), 'errors');
        yield "
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "lastName", [], "any", false, false, false, 38), 'label', ["label_attr" => ["class" => "small mb-1 text-muted"]]);
        yield "
                        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "lastName", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "lastName", [], "any", false, false, false, 40), 'errors');
        yield "
                    </div>
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => "small mb-1 text-muted"]]);
        yield "
                ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "email", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), 'errors');
        yield "
            </div>

            <div class=\"form-group\">
                ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "username", [], "any", false, false, false, 52), 'label', ["label_attr" => ["class" => "small mb-1 text-muted"]]);
        yield "
                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "username", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "username", [], "any", false, false, false, 54), 'errors');
        yield "
            </div>

            <div class=\"form-group\">
                ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "photoFile", [], "any", false, false, false, 58), 'label', ["label_attr" => ["class" => "small mb-1 text-muted"]]);
        yield "
                <div class=\"custom-file\">
                    ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "photoFile", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "custom-file-input"]]);
        yield "
                    <label class=\"custom-file-label\" for=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "photoFile", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61), "html", null, true);
        yield "\">Choisir une photo...</label>
                </div>
                ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "photoFile", [], "any", false, false, false, 63), 'errors');
        yield "
                ";
        // line 64
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "photo", [], "any", false, false, false, 64)) {
            // line 65
            yield "                    <small class=\"form-text text-muted\">Photo actuelle : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "photo", [], "any", false, false, false, 65), "html", null, true);
            yield "</small>
                ";
        }
        // line 67
        yield "            </div>
<div class=\"form-group text-center mt-4 d-flex justify-content-center\">
    <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_account_index");
        yield "\" class=\"btn btn-outline-primary mr-3\">
        <i class=\"fas fa-arrow-left mr-1\"></i> Annuler
    </a>
  r
</div>

";
        // line 75
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), 'form_end');
        yield "

    </div>
</div>

<style>
    .user-avatar {
        width: 80px;
        height: 80px;
        margin-top: -40px;
        background: white;
        border-radius: 50%;
        box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
    }
    .custom-file-label::after {
        content: \"Parcourir\";
    }
</style>

<script>
    document.querySelector('.custom-file-input')?.addEventListener('change', function(e) {
        var fileName = e.target.files[0] ? e.target.files[0].name : \"Choisir une photo...\";
        e.target.nextElementSibling.innerText = fileName;
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
        return "user/account/edit.html.twig";
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
        return array (  272 => 75,  263 => 69,  259 => 67,  253 => 65,  251 => 64,  247 => 63,  242 => 61,  238 => 60,  233 => 58,  226 => 54,  222 => 53,  218 => 52,  211 => 48,  207 => 47,  203 => 46,  194 => 40,  190 => 39,  186 => 38,  178 => 33,  174 => 32,  170 => 31,  162 => 26,  158 => 25,  150 => 20,  147 => 19,  139 => 15,  131 => 11,  129 => 10,  124 => 7,  111 => 6,  88 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Profil{% endblock %}
{% block title_h1 %}Modifier mon profil{% endblock %}

{% block body %}
<div class=\"card shadow mb-4\" style=\"max-width: 600px; margin: 50px auto;\">
    <div class=\"card-header py-4 text-center bg-gradient-primary text-white\">
        <div class=\"user-avatar mx-auto mb-3\">
            {% if app.user.photo %}
                <img src=\"{{ asset('uploads/photos/' ~ app.user.photo) }}\"
                     class=\"rounded-circle border-white\"
                     style=\"width: 80px; height: 80px; object-fit: cover; border: 3px solid white;\">
            {% else %}
                <img src=\"{{ asset('uploads/photos/default.png') }}\"
                     class=\"rounded-circle border-white\"
                     style=\"width: 80px; height: 80px; object-fit: cover; border: 3px solid white;\">
            {% endif %}
        </div>
        <h3 class=\"font-weight-bold mb-1\">{{ app.user.fullName }}</h3>
        <div class=\"text-white-50 small\">Modifier vos informations personnelles</div>
    </div>

    <div class=\"card-body\">
        {{ form_start(form, { attr: { novalidate: 'novalidate', class: 'user-edit-form' } }) }}
            {{ form_errors(form) }}

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        {{ form_label(form.firstName, null, {'label_attr': {'class': 'small mb-1 text-muted'}}) }}
                        {{ form_widget(form.firstName, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.firstName) }}
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        {{ form_label(form.lastName, null, {'label_attr': {'class': 'small mb-1 text-muted'}}) }}
                        {{ form_widget(form.lastName, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.lastName) }}
                    </div>
                </div>
            </div>

            <div class=\"form-group\">
                {{ form_label(form.email, null, {'label_attr': {'class': 'small mb-1 text-muted'}}) }}
                {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.email) }}
            </div>

            <div class=\"form-group\">
                {{ form_label(form.username, null, {'label_attr': {'class': 'small mb-1 text-muted'}}) }}
                {{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.username) }}
            </div>

            <div class=\"form-group\">
                {{ form_label(form.photoFile, null, {'label_attr': {'class': 'small mb-1 text-muted'}}) }}
                <div class=\"custom-file\">
                    {{ form_widget(form.photoFile, {'attr': {'class': 'custom-file-input'}}) }}
                    <label class=\"custom-file-label\" for=\"{{ form.photoFile.vars.id }}\">Choisir une photo...</label>
                </div>
                {{ form_errors(form.photoFile) }}
                {% if app.user.photo %}
                    <small class=\"form-text text-muted\">Photo actuelle : {{ app.user.photo }}</small>
                {% endif %}
            </div>
<div class=\"form-group text-center mt-4 d-flex justify-content-center\">
    <a href=\"{{ path('user_account_index') }}\" class=\"btn btn-outline-primary mr-3\">
        <i class=\"fas fa-arrow-left mr-1\"></i> Annuler
    </a>
  r
</div>

{{ form_end(form) }}

    </div>
</div>

<style>
    .user-avatar {
        width: 80px;
        height: 80px;
        margin-top: -40px;
        background: white;
        border-radius: 50%;
        box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
    }
    .custom-file-label::after {
        content: \"Parcourir\";
    }
</style>

<script>
    document.querySelector('.custom-file-input')?.addEventListener('change', function(e) {
        var fileName = e.target.files[0] ? e.target.files[0].name : \"Choisir une photo...\";
        e.target.nextElementSibling.innerText = fileName;
    });
</script>
{% endblock %}", "user/account/edit.html.twig", "C:\\Users\\ASUS\\Desktop\\souha\\GoldenTouch-Symfony\\templates\\user\\account\\edit.html.twig");
    }
}
