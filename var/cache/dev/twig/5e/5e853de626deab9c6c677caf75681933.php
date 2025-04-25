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

/* user/account/index.html.twig */
class __TwigTemplate_dfb2fe303979f0be9ec55da21e034cae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/account/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/account/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/account/index.html.twig", 1);
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

        yield "Mon profil";
        
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
        yield "
    <div class=\"card border-left-info shadow h-100 py-2 my-4\">
        <div class=\"card-body\">
            <div class=\"d-flex align-items-center\">
                <h2 class=\"card-title text-uppercase text-info mb-0\"><i class=\"fas fa-user fa-x2 text-gray-500 mr-3\"></i>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "fullName", [], "any", false, false, false, 12), "html", null, true);
        yield "</h2>
                <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_account_edit");
        yield "\" class=\"btn btn-primary btn-icon-split ml-auto\">
                    <span class=\"icon text-white-50\">
                        <i class=\"far fa-edit\"></i>
                    </span>
                    <span class=\"text\">Modifier</span>
                </a>
            </div>
            <div class=\"row no-gutters align-items-center\">
                <div class=\"text-gray-400 mb-2\">
                    <small>Utilisateur inscrit depuis le ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "createdAt", [], "any", false, false, false, 22), "d-m-Y"), "html", null, true);
        yield "</small>
                </div>
            </div>
            <hr class=\"sidebar-divider my-1\">
            <div class=\"py-3\">
                <div class=\"row no-gutters\">
                    <div class=\"d-flex flex-row align-items-center\">
                        <h5 class=\"text-secondary\">Email :</h5>
                        <p class=\"text-gray-500 mb-1 ml-3\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), "html", null, true);
        yield "</p>
                    </div>
                </div>
                <div class=\"row no-gutters\">
                    <div class=\"d-flex flex-row align-items-center\">
                        <h5 class=\"text-secondary\">Nom d'utilisateur :</h5>
                        <p class=\"text-gray-500 mb-1 ml-3\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "username", [], "any", false, false, false, 36), "html", null, true);
        yield "</p>
                    </div>
                </div>
                <div class=\"row no-gutters\">
                    <div class=\"d-flex flex-row align-items-center\">
                        <h5 class=\"text-secondary\">Rôle : </h5>
                        <p class=\"text-gray-500 mb-1 ml-3\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "roleTitle", [], "any", false, false, false, 42), "html", null, true);
        yield "</p>
                    </div>
                </div>
            </div>
            <hr class=\"sidebar-divider my-1\">
        </div>
    </div>

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
        return "user/account/index.html.twig";
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
        return array (  175 => 42,  166 => 36,  157 => 30,  146 => 22,  134 => 13,  130 => 12,  124 => 8,  111 => 7,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title \"Profil\" %}

{% block title_h1 \"Mon profil\" %}

{% block body %}

    <div class=\"card border-left-info shadow h-100 py-2 my-4\">
        <div class=\"card-body\">
            <div class=\"d-flex align-items-center\">
                <h2 class=\"card-title text-uppercase text-info mb-0\"><i class=\"fas fa-user fa-x2 text-gray-500 mr-3\"></i>{{ user.fullName }}</h2>
                <a href=\"{{ path(\"user_account_edit\") }}\" class=\"btn btn-primary btn-icon-split ml-auto\">
                    <span class=\"icon text-white-50\">
                        <i class=\"far fa-edit\"></i>
                    </span>
                    <span class=\"text\">Modifier</span>
                </a>
            </div>
            <div class=\"row no-gutters align-items-center\">
                <div class=\"text-gray-400 mb-2\">
                    <small>Utilisateur inscrit depuis le {{ user.createdAt | date('d-m-Y') }}</small>
                </div>
            </div>
            <hr class=\"sidebar-divider my-1\">
            <div class=\"py-3\">
                <div class=\"row no-gutters\">
                    <div class=\"d-flex flex-row align-items-center\">
                        <h5 class=\"text-secondary\">Email :</h5>
                        <p class=\"text-gray-500 mb-1 ml-3\">{{ user.email }}</p>
                    </div>
                </div>
                <div class=\"row no-gutters\">
                    <div class=\"d-flex flex-row align-items-center\">
                        <h5 class=\"text-secondary\">Nom d'utilisateur :</h5>
                        <p class=\"text-gray-500 mb-1 ml-3\">{{ user.username }}</p>
                    </div>
                </div>
                <div class=\"row no-gutters\">
                    <div class=\"d-flex flex-row align-items-center\">
                        <h5 class=\"text-secondary\">Rôle : </h5>
                        <p class=\"text-gray-500 mb-1 ml-3\">{{ user.roleTitle }}</p>
                    </div>
                </div>
            </div>
            <hr class=\"sidebar-divider my-1\">
        </div>
    </div>

{% endblock %}
", "user/account/index.html.twig", "C:\\Users\\ASUS\\Desktop\\user symfony\\templates\\user\\account\\index.html.twig");
    }
}
