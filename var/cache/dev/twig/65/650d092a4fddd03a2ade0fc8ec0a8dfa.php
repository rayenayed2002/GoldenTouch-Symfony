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

/* admin/user/show.html.twig */
class __TwigTemplate_de9c12280a1ce437bf9977ebfcf4569b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/user/show.html.twig", 1);
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

        yield "Détails d'un utilisateur";
        
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
<div class=\"card shadow mb-4\" style=\"max-width: 500px; margin: 100px auto;\">
    <!-- User Profile Header -->
    <div class=\"card-header py-3 text-center bg-gradient-primary text-white\">
        <div class=\"user-avatar mx-auto mb-3\">
            <img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "photo", [], "any", false, false, false, 13))), "html", null, true);
        yield "\"
                 class=\"rounded-circle border-white\" 
                 alt=\"User Avatar\"
                 style=\"width: 100px; height: 100px; object-fit: cover; border: 3px solid white;\">
        </div>
        <h3 class=\"font-weight-bold mb-1\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "fullName", [], "any", false, false, false, 18), "html", null, true);
        yield "</h3>
    </div>
    
    <!-- User Details Body -->
    <div class=\"card-body\">
        <div class=\"text-center text-muted mb-4\">
            <i class=\"fas fa-calendar-alt mr-1\"></i> Membre depuis ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "createdAt", [], "any", false, false, false, 24), "d/m/Y"), "html", null, true);
        yield "
        </div>
        
        <div class=\"user-details\">
            <div class=\"detail-row\">
                <div class=\"detail-icon\">
                    <i class=\"fas fa-envelope text-primary\"></i>
                </div>
                <div class=\"detail-content\">
                    <div class=\"detail-label\">Email</div>
                    <div class=\"detail-value\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), "html", null, true);
        yield "</div>
                </div>
            </div>
            
            <div class=\"detail-row\">
                <div class=\"detail-icon\">
                    <i class=\"fas fa-user-tag text-primary\"></i>
                </div>
                <div class=\"detail-content\">
                    <div class=\"detail-label\">Nom d'utilisateur</div>
                    <div class=\"detail-value\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "username", [], "any", false, false, false, 44), "html", null, true);
        yield "</div>
                </div>
            </div>
            
            <div class=\"detail-row\">
                <div class=\"detail-icon\">
                    <i class=\"fas fa-shield-alt text-primary\"></i>
                </div>
                <div class=\"detail-content\">
                    <div class=\"detail-label\">Rôle</div>
                    <div class=\"detail-value\">
                        <span class=\"role-text role-";
        // line 55
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "roleTitle", [], "any", false, false, false, 55) == "Administrateur")) ? ("admin") : ("user"));
        yield "\">
                            ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "roleTitle", [], "any", false, false, false, 56), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Card Footer with Actions -->
    <div class=\"card-footer bg-white text-center\">
        <a href=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-primary mr-2\">
            <i class=\"fas fa-edit mr-1\"></i> Modifier
        </a>
        <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        yield "\" class=\"btn btn-sm btn-secondary\">
            <i class=\"fas fa-arrow-left mr-1\"></i> Retour
        </a>
    </div>
</div>

<style>
    .user-avatar {
        width: 100px;
        height: 100px;
        margin-top: -50px;
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
        font-size: 1.1rem;
        text-align: center;
    }
    
    .detail-content {
        flex: 1;
    }
    
    .detail-label {
        font-size: 0.75rem;
        text-transform: uppercase;
        color: #858796;
        letter-spacing: 0.5px;
    }
    
    .detail-value {
        font-weight: 600;
        color: #3a3b45;
    }
    
    .card-header {
        padding-bottom: 4rem !important;
        position: relative;
    }
    
    .role-text {
        font-weight: 600;
        color: #3a3b45;
    }
    
    .role-text.role-admin {
        color: #e74a3b; /* Red for admin */
    }
    
    .role-text.role-user {
        color: #36b9cc; /* Cyan for regular user */
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
        return "admin/user/show.html.twig";
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
        return array (  211 => 69,  205 => 66,  192 => 56,  188 => 55,  174 => 44,  161 => 34,  148 => 24,  139 => 18,  131 => 13,  124 => 8,  111 => 7,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"admin/layout.html.twig\" %}

{% block title \"Utilisateurs\" %}

{% block title_h1 \"Détails d'un utilisateur\" %}

{% block body %}

<div class=\"card shadow mb-4\" style=\"max-width: 500px; margin: 100px auto;\">
    <!-- User Profile Header -->
    <div class=\"card-header py-3 text-center bg-gradient-primary text-white\">
        <div class=\"user-avatar mx-auto mb-3\">
            <img src=\"{{ asset('uploads/photos/' ~ user.photo) }}\"
                 class=\"rounded-circle border-white\" 
                 alt=\"User Avatar\"
                 style=\"width: 100px; height: 100px; object-fit: cover; border: 3px solid white;\">
        </div>
        <h3 class=\"font-weight-bold mb-1\">{{ user.fullName }}</h3>
    </div>
    
    <!-- User Details Body -->
    <div class=\"card-body\">
        <div class=\"text-center text-muted mb-4\">
            <i class=\"fas fa-calendar-alt mr-1\"></i> Membre depuis {{ user.createdAt|date('d/m/Y') }}
        </div>
        
        <div class=\"user-details\">
            <div class=\"detail-row\">
                <div class=\"detail-icon\">
                    <i class=\"fas fa-envelope text-primary\"></i>
                </div>
                <div class=\"detail-content\">
                    <div class=\"detail-label\">Email</div>
                    <div class=\"detail-value\">{{ user.email }}</div>
                </div>
            </div>
            
            <div class=\"detail-row\">
                <div class=\"detail-icon\">
                    <i class=\"fas fa-user-tag text-primary\"></i>
                </div>
                <div class=\"detail-content\">
                    <div class=\"detail-label\">Nom d'utilisateur</div>
                    <div class=\"detail-value\">{{ user.username }}</div>
                </div>
            </div>
            
            <div class=\"detail-row\">
                <div class=\"detail-icon\">
                    <i class=\"fas fa-shield-alt text-primary\"></i>
                </div>
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
    
    <!-- Card Footer with Actions -->
    <div class=\"card-footer bg-white text-center\">
        <a href=\"{{ path('admin_user_edit', {id: user.id}) }}\" class=\"btn btn-sm btn-primary mr-2\">
            <i class=\"fas fa-edit mr-1\"></i> Modifier
        </a>
        <a href=\"{{ path('admin_user_index') }}\" class=\"btn btn-sm btn-secondary\">
            <i class=\"fas fa-arrow-left mr-1\"></i> Retour
        </a>
    </div>
</div>

<style>
    .user-avatar {
        width: 100px;
        height: 100px;
        margin-top: -50px;
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
        font-size: 1.1rem;
        text-align: center;
    }
    
    .detail-content {
        flex: 1;
    }
    
    .detail-label {
        font-size: 0.75rem;
        text-transform: uppercase;
        color: #858796;
        letter-spacing: 0.5px;
    }
    
    .detail-value {
        font-weight: 600;
        color: #3a3b45;
    }
    
    .card-header {
        padding-bottom: 4rem !important;
        position: relative;
    }
    
    .role-text {
        font-weight: 600;
        color: #3a3b45;
    }
    
    .role-text.role-admin {
        color: #e74a3b; /* Red for admin */
    }
    
    .role-text.role-user {
        color: #36b9cc; /* Cyan for regular user */
    }
</style>

{% endblock %}", "admin/user/show.html.twig", "C:\\Users\\ASUS\\Desktop\\user symfony\\templates\\admin\\user\\show.html.twig");
    }
}
