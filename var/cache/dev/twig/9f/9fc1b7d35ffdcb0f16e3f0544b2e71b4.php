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

/* customize_pack.html.twig */
class __TwigTemplate_23b2d4d99dbfe00e824486470cec2556 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customize_pack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customize_pack.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "customize_pack.html.twig", 1);
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
        yield "<div class=\"container\">
    <h1 class=\"my-4\">Customize Pack</h1>
    <div class=\"row\">
        <div class=\"col-md-6 col-lg-4 mb-3\">
            <div class=\"card h-100\">
                <img class=\"card-img-top\" src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/elements/2.jpg"), "html", null, true);
        yield "\" alt=\"Card image cap\" />
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Card Title 1</h5>
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href=\"javascript:void(0)\" class=\"btn btn-outline-primary\">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 col-lg-4 mb-3\">
            <div class=\"card h-100\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Card Title 2</h5>
                    <h6 class=\"card-subtitle text-muted\">Support card subtitle</h6>
                </div>
                <img class=\"img-fluid\" src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/elements/10.jpg"), "html", null, true);
        yield "\" alt=\"Card image cap\" />
                <div class=\"card-body\">
                    <p class=\"card-text\">Bear claw sesame snaps gummies chocolate.</p>
                    <a href=\"javascript:void(0);\" class=\"card-link\">Card link</a>
                    <a href=\"javascript:void(0);\" class=\"card-link\">Another link</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 col-lg-4 mb-3\">
            <div class=\"card h-100\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Card Title 3</h5>
                    <h6 class=\"card-subtitle text-muted\">Support card subtitle</h6>
                    <img class=\"img-fluid d-flex mx-auto my-4 rounded\" src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/elements/4.jpg"), "html", null, true);
        yield "\" alt=\"Card image cap\" />
                    <p class=\"card-text\">Bear claw sesame snaps gummies chocolate.</p>
                    <a href=\"javascript:void(0);\" class=\"card-link\">Card link</a>
                    <a href=\"javascript:void(0);\" class=\"card-link\">Another link</a>
                </div>
            </div>
        </div>
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
        return "customize_pack.html.twig";
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
        return array (  116 => 36,  100 => 23,  83 => 9,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
<div class=\"container\">
    <h1 class=\"my-4\">Customize Pack</h1>
    <div class=\"row\">
        <div class=\"col-md-6 col-lg-4 mb-3\">
            <div class=\"card h-100\">
                <img class=\"card-img-top\" src=\"{{ asset('img/elements/2.jpg') }}\" alt=\"Card image cap\" />
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Card Title 1</h5>
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href=\"javascript:void(0)\" class=\"btn btn-outline-primary\">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 col-lg-4 mb-3\">
            <div class=\"card h-100\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Card Title 2</h5>
                    <h6 class=\"card-subtitle text-muted\">Support card subtitle</h6>
                </div>
                <img class=\"img-fluid\" src=\"{{ asset('img/elements/10.jpg') }}\" alt=\"Card image cap\" />
                <div class=\"card-body\">
                    <p class=\"card-text\">Bear claw sesame snaps gummies chocolate.</p>
                    <a href=\"javascript:void(0);\" class=\"card-link\">Card link</a>
                    <a href=\"javascript:void(0);\" class=\"card-link\">Another link</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 col-lg-4 mb-3\">
            <div class=\"card h-100\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Card Title 3</h5>
                    <h6 class=\"card-subtitle text-muted\">Support card subtitle</h6>
                    <img class=\"img-fluid d-flex mx-auto my-4 rounded\" src=\"{{ asset('img/elements/4.jpg') }}\" alt=\"Card image cap\" />
                    <p class=\"card-text\">Bear claw sesame snaps gummies chocolate.</p>
                    <a href=\"javascript:void(0);\" class=\"card-link\">Card link</a>
                    <a href=\"javascript:void(0);\" class=\"card-link\">Another link</a>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "customize_pack.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\customize_pack.html.twig");
    }
}
