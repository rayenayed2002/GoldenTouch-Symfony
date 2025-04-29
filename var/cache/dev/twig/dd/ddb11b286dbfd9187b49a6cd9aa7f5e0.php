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

/* admin/account/edit.html.twig */
class __TwigTemplate_04804bff7f61f638741495f71c7b8e3f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/account/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/account/edit.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/account/edit.html.twig", 1);
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

    // line 5
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

    // line 7
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

        // line 8
        yield "<div class=\"card shadow mb-4\" style=\"max-width: 600px; margin: 50px auto;\">
    <div class=\"card-header py-4 text-center bg-gradient-primary text-white\">
        <div class=\"user-avatar mx-auto mb-3\">
            ";
        // line 11
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "photo", [], "any", false, false, false, 11)) {
            // line 12
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "photo", [], "any", false, false, false, 12))), "html", null, true);
            yield "\" 
                     class=\"rounded-circle border-white\"
                     style=\"width: 80px; height: 80px; object-fit: cover; border: 3px solid white;\">
            ";
        } else {
            // line 16
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/photos/default.png"), "html", null, true);
            yield "\"
                     class=\"rounded-circle border-white\"
                     style=\"width: 80px; height: 80px; object-fit: cover; border: 3px solid white;\">
            ";
        }
        // line 20
        yield "        </div>
        <h3 class=\"font-weight-bold mb-1\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "fullName", [], "any", false, false, false, 21), "html", null, true);
        yield "</h3>
        <div class=\"text-white-50 small\">Modifier vos informations personnelles</div>
    </div>

    <div class=\"card-body\">
        ";
        // line 26
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "user-edit-form"]]);
        yield "
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'errors');
        yield "

            <!-- Email Field -->
            <div class=\"form-group\">
                <label class=\"small mb-1 text-muted\">Email</label>
                <div class=\"form-control-plaintext\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "email", [], "any", false, false, false, 32), "html", null, true);
        yield "</div>
            </div>

            <!-- Username Field -->
            <div class=\"form-group\">
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "username", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "small mb-1 text-muted"]]);
        yield "
                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "username", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "username", [], "any", false, false, false, 39), 'errors');
        yield "
            </div>

            <!-- Profile Photo Field -->
            <div class=\"form-group\">
                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "photoFile", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "small mb-1 text-muted"]]);
        yield "
                <div class=\"custom-file\">
                    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "photoFile", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "custom-file-input"]]);
        yield "
                    <label class=\"custom-file-label\" for=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "photoFile", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), "html", null, true);
        yield "\">Choisir une photo...</label>
                </div>
                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "photoFile", [], "any", false, false, false, 49), 'errors');
        yield "
                ";
        // line 50
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "photo", [], "any", false, false, false, 50)) {
            // line 51
            yield "                    <small class=\"form-text text-muted\">Photo actuelle : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "photo", [], "any", false, false, false, 51), "html", null, true);
            yield "</small>
                ";
        }
        // line 53
        yield "            </div>

            <!-- Roles Field -->
            <div class=\"form-group\">
                <label class=\"small mb-1 text-muted\">Rôles</label>
                <div class=\"form-control-plaintext\">
                    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "roles", [], "any", false, false, false, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 60
            yield "                        <span class=\"badge badge-primary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
            yield "</span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "                </div>
            </div>

            <!-- Form Actions -->
            <div class=\"form-group text-center mt-4\">
               
            </div>
        ";
        // line 69
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), 'form_end');
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
    .badge {
        font-size: 0.9em;
        padding: 5px 10px;
        margin-right: 5px;
    }
    .form-control-plaintext {
        padding: 0.375rem 0;
        margin-bottom: 0;
        line-height: 1.5;
        background-color: transparent;
        border: none;
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
        return "admin/account/edit.html.twig";
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
        return array (  250 => 69,  241 => 62,  232 => 60,  228 => 59,  220 => 53,  214 => 51,  212 => 50,  208 => 49,  203 => 47,  199 => 46,  194 => 44,  186 => 39,  182 => 38,  178 => 37,  170 => 32,  162 => 27,  158 => 26,  150 => 21,  147 => 20,  139 => 16,  131 => 12,  129 => 11,  124 => 8,  111 => 7,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"admin/layout.html.twig\" %}

{% block title \"Profil\" %}

{% block title_h1 \"Modifier mon profil\" %}

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

            <!-- Email Field -->
            <div class=\"form-group\">
                <label class=\"small mb-1 text-muted\">Email</label>
                <div class=\"form-control-plaintext\">{{ app.user.email }}</div>
            </div>

            <!-- Username Field -->
            <div class=\"form-group\">
                {{ form_label(form.username, null, {'label_attr': {'class': 'small mb-1 text-muted'}}) }}
                {{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.username) }}
            </div>

            <!-- Profile Photo Field -->
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

            <!-- Roles Field -->
            <div class=\"form-group\">
                <label class=\"small mb-1 text-muted\">Rôles</label>
                <div class=\"form-control-plaintext\">
                    {% for role in app.user.roles %}
                        <span class=\"badge badge-primary\">{{ role }}</span>
                    {% endfor %}
                </div>
            </div>

            <!-- Form Actions -->
            <div class=\"form-group text-center mt-4\">
               
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
    .badge {
        font-size: 0.9em;
        padding: 5px 10px;
        margin-right: 5px;
    }
    .form-control-plaintext {
        padding: 0.375rem 0;
        margin-bottom: 0;
        line-height: 1.5;
        background-color: transparent;
        border: none;
    }
</style>

<script>
    document.querySelector('.custom-file-input')?.addEventListener('change', function(e) {
        var fileName = e.target.files[0] ? e.target.files[0].name : \"Choisir une photo...\";
        e.target.nextElementSibling.innerText = fileName;
    });
</script>
{% endblock %}", "admin/account/edit.html.twig", "C:\\Users\\ASUS\\Desktop\\souha\\GoldenTouch-Symfony\\templates\\admin\\account\\edit.html.twig");
    }
}
