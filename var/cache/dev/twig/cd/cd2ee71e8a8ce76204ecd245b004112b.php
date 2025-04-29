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
class __TwigTemplate_9f90675c69f6de9d223e651b6403e9a8 extends Template
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

        yield "Mon profil";
        
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
        yield "<div class=\"card shadow mb-4\" style=\"max-width: 500px; margin: 100px auto;\">
    <div class=\"card-header py-4 text-center bg-gradient-primary text-white\">
        <div class=\"user-avatar mx-auto mb-3\">
            ";
        // line 10
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "photo", [], "any", false, false, false, 10)) {
            // line 11
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "photo", [], "any", false, false, false, 11))), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "fullName", [], "any", false, false, false, 20), "html", null, true);
        yield "</h3>
    </div>

    <div class=\"card-body\">
        <div class=\"text-center text-muted mb-4\">
            <i class=\"fas fa-calendar-alt mr-1\"></i> Membre depuis ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "createdAt", [], "any", false, false, false, 25), "d/m/Y"), "html", null, true);
        yield "
        </div>
        
        <div class=\"user-details\">
            <div class=\"detail-row\">
                <div class=\"detail-icon\"><i class=\"fas fa-envelope text-primary\"></i></div>
                <div class=\"detail-content\">
                    <div class=\"detail-label\">Email</div>
                    <div class=\"detail-value\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), "html", null, true);
        yield "</div>
                </div>
            </div>
            
            <div class=\"detail-row\">
                <div class=\"detail-icon\"><i class=\"fas fa-user-tag text-primary\"></i></div>
                <div class=\"detail-content\">
                    <div class=\"detail-label\">Nom d'utilisateur</div>
                    <div class=\"detail-value\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "username", [], "any", false, false, false, 41), "html", null, true);
        yield "</div>
                </div>
            </div>
            
            <div class=\"detail-row\">
                <div class=\"detail-icon\"><i class=\"fas fa-shield-alt text-primary\"></i></div>
                <div class=\"detail-content\">
                    <div class=\"detail-label\">Rôle</div>
                    <div class=\"detail-value\">
                        <span class=\"role-text role-";
        // line 50
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "roleTitle", [], "any", false, false, false, 50) == "Administrateur")) ? ("admin") : ("user"));
        yield "\">
                            ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "roleTitle", [], "any", false, false, false, 51), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"card-footer bg-white text-center\">
        <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_account_edit");
        yield "\" class=\"btn btn-primary btn-sm\">
            <i class=\"fas fa-edit mr-1\"></i> Modifier
        </a>
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
    .user-details {
        background-color: #f8f9fc;
        border-radius: 0.35rem;
        padding: 1rem;
    }
    .detail-row {
        display: flex;
        align-items: center;
        padding: 0.75rem 0;
        border-bottom: 1px solid #e3e6f0;
    }
    .detail-row:last-child {
        border-bottom: none;
    }
    .detail-icon {
        width: 40px;
        text-align: center;
        font-size: 1.1rem;
    }
    .detail-label {
        font-size: 0.75rem;
        text-transform: uppercase;
        color: #858796;
    }
    .detail-value {
        font-weight: 600;
        color: #3a3b45;
    }
    .role-text.role-admin {
        color: #e74a3b;
    }
    .role-text.role-user {
        color: #36b9cc;
    }
</style>
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
        return array (  208 => 60,  196 => 51,  192 => 50,  180 => 41,  169 => 33,  158 => 25,  150 => 20,  147 => 19,  139 => 15,  131 => 11,  129 => 10,  124 => 7,  111 => 6,  88 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Profil{% endblock %}
{% block title_h1 %}Mon profil{% endblock %}

{% block body %}
<div class=\"card shadow mb-4\" style=\"max-width: 500px; margin: 100px auto;\">
    <div class=\"card-header py-4 text-center bg-gradient-primary text-white\">
        <div class=\"user-avatar mx-auto mb-3\">
            {% if user.photo %}
                <img src=\"{{ asset('uploads/photos/' ~ user.photo) }}\"
                     class=\"rounded-circle border-white\"
                     style=\"width: 80px; height: 80px; object-fit: cover; border: 3px solid white;\">
            {% else %}
                <img src=\"{{ asset('uploads/photos/default.png') }}\"
                     class=\"rounded-circle border-white\"
                     style=\"width: 80px; height: 80px; object-fit: cover; border: 3px solid white;\">
            {% endif %}
        </div>
        <h3 class=\"font-weight-bold mb-1\">{{ user.fullName }}</h3>
    </div>

    <div class=\"card-body\">
        <div class=\"text-center text-muted mb-4\">
            <i class=\"fas fa-calendar-alt mr-1\"></i> Membre depuis {{ user.createdAt|date('d/m/Y') }}
        </div>
        
        <div class=\"user-details\">
            <div class=\"detail-row\">
                <div class=\"detail-icon\"><i class=\"fas fa-envelope text-primary\"></i></div>
                <div class=\"detail-content\">
                    <div class=\"detail-label\">Email</div>
                    <div class=\"detail-value\">{{ user.email }}</div>
                </div>
            </div>
            
            <div class=\"detail-row\">
                <div class=\"detail-icon\"><i class=\"fas fa-user-tag text-primary\"></i></div>
                <div class=\"detail-content\">
                    <div class=\"detail-label\">Nom d'utilisateur</div>
                    <div class=\"detail-value\">{{ user.username }}</div>
                </div>
            </div>
            
            <div class=\"detail-row\">
                <div class=\"detail-icon\"><i class=\"fas fa-shield-alt text-primary\"></i></div>
                <div class=\"detail-content\">
                    <div class=\"detail-label\">Rôle</div>
                    <div class=\"detail-value\">
                        <span class=\"role-text role-{{ user.roleTitle == 'Administrateur' ? 'admin' : 'user' }}\">
                            {{ user.roleTitle }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"card-footer bg-white text-center\">
        <a href=\"{{ path('user_account_edit') }}\" class=\"btn btn-primary btn-sm\">
            <i class=\"fas fa-edit mr-1\"></i> Modifier
        </a>
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
    .user-details {
        background-color: #f8f9fc;
        border-radius: 0.35rem;
        padding: 1rem;
    }
    .detail-row {
        display: flex;
        align-items: center;
        padding: 0.75rem 0;
        border-bottom: 1px solid #e3e6f0;
    }
    .detail-row:last-child {
        border-bottom: none;
    }
    .detail-icon {
        width: 40px;
        text-align: center;
        font-size: 1.1rem;
    }
    .detail-label {
        font-size: 0.75rem;
        text-transform: uppercase;
        color: #858796;
    }
    .detail-value {
        font-weight: 600;
        color: #3a3b45;
    }
    .role-text.role-admin {
        color: #e74a3b;
    }
    .role-text.role-user {
        color: #36b9cc;
    }
</style>
{% endblock %}
", "user/account/index.html.twig", "C:\\Users\\ASUS\\Desktop\\souha\\GoldenTouch-Symfony\\templates\\user\\account\\index.html.twig");
    }
}
