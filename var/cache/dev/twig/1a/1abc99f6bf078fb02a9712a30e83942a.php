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

/* admin/parameter/update_password.html.twig */
class __TwigTemplate_c8c52c1dadbaff78131e5bdbb626e676 extends Template
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
            'form_errors' => [$this, 'block_form_errors'],
            'button_widget' => [$this, 'block_button_widget'],
            'button_row' => [$this, 'block_button_row'],
            'submit_widget' => [$this, 'block_submit_widget'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/parameter/update_password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/parameter/update_password.html.twig"));

        // line 8
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), [$this->getTemplateName()], true);
        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/parameter/update_password.html.twig", 1);
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

        yield "Paramètre";
        
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

        yield "Modifier mon mot de passe";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        // line 12
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 12, $this->source); })())) > 0)) {
            // line 13
            yield "    <div class=\"alert alert-danger\">
        <ul class=\"mb-0\">
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 16
                yield "                <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 16), "html", null, true);
                yield "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            yield "        </ul>
    </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        // line 24
        yield "    ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 24, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 24)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 24, $this->source); })()), "class", [], "any", false, false, false, 24), "")) : ("")) . " btn btn-primary"))]);
        // line 25
        yield "    <button type=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 25, $this->source); })()), "button")) : ("button")), "html", null, true);
        yield "\" ";
        yield from         $this->unwrap()->yieldBlock("button_attributes", $context, $blocks);
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 25, $this->source); })()), "")) : ("")), "html", null, true);
        yield "</button>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        // line 29
        yield "    <div class=\"form-group\">
        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'widget');
        yield "
        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'errors');
        yield "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submit_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 36
        yield "    ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 36, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 36, $this->source); })()), "class", [], "any", false, false, false, 36), "")) : ("")) . " btn btn-primary"))]);
        // line 37
        yield "    <button type=\"submit\" ";
        yield from         $this->unwrap()->yieldBlock("button_attributes", $context, $blocks);
        yield ">
        <i class=\"fas fa-save mr-2\"></i>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 38, $this->source); })()), "Mettre à jour mon mot de passe")) : ("Mettre à jour mon mot de passe")), "html", null, true);
        yield "
    </button>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 42
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

        // line 43
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .password-update-card {
            border-radius: 0.5rem;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
            border: 0;
        }
        
        .password-update-card .card-header {
            background-color: #f8f9fc;
            border-bottom: 1px solid #e3e6f0;
            padding: 1rem 1.25rem;
        }
        
        .password-update-card .card-header h6 {
            margin-bottom: 0;
            font-weight: 700;
            color: #4e73df;
        }
        
        .password-update-card .card-body {
            padding: 1.5rem;
        }
        
        .form-group {
            margin-bottom: 1.25rem;
        }
        
        .form-control {
            display: block;
            width: 100%;
            padding: 0.5rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            color: #6e707e;
            background-color: #fff;
            border: 1px solid #d1d3e2;
            border-radius: 0.35rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
        
        .form-control:focus {
            color: #6e707e;
            background-color: #fff;
            border-color: #bac8f3;
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.25);
        }
        
        .input-group {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            width: 100%;
        }
        
        .input-group-text {
            display: flex;
            align-items: center;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #6e707e;
            text-align: center;
            white-space: nowrap;
            background-color: #f8f9fc;
            border: 1px solid #d1d3e2;
            border-radius: 0.35rem 0 0 0.35rem;
        }
        
        .input-group .form-control {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
        
        .input-group-append {
            margin-left: -1px;
        }
        
        .input-group > .input-group-append > .input-group-text {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            border-top-right-radius: 0.35rem;
            border-bottom-right-radius: 0.35rem;
            cursor: pointer;
        }
        
        .btn-primary {
            color: #fff;
            background-color: #4e73df;
            border-color: #4e73df;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            border-radius: 0.35rem;
            transition: all .15s ease-in-out;
        }
        
        .btn-primary:hover {
            background-color: #4262c5;
            border-color: #3d5cb8;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(78, 115, 223, 0.3);
        }
        
        .password-requirement {
            color: #858796;
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }
        
        .password-requirement i {
            margin-right: 0.25rem;
        }
        
        .password-requirement.valid {
            color: #1cc88a;
        }
        
        .password-requirement.invalid {
            color: #e74a3b;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 169
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

        // line 170
        yield "<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <div class=\"col-xl-6 col-lg-8 col-md-10\">
            <div class=\"password-update-card card shadow mb-4\">
                <div class=\"card-header py-3 d-flex flex-row align-items-center\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">
                        <i class=\"fas fa-key mr-2\"></i>Modification du mot de passe
                    </h6>
                </div>
                <div class=\"card-body\">
                    ";
        // line 180
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), 'form_start', ["attr" => ["id" => "password-form", "novalidate" => "novalidate"]]);
        yield "
                    
                    ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 183
            yield "                        ";
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 183), "block_prefixes", [], "any", false, false, false, 183), 1, [], "array", false, false, false, 183) != "_token") && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 183), "block_prefixes", [], "any", false, false, false, 183), 1, [], "array", false, false, false, 183) != "submit"))) {
                // line 184
                yield "                            <div class=\"form-group\">
                                ";
                // line 185
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label', ["label_attr" => ["class" => "form-label"]]);
                yield "
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\">
                                        <i class=\"fas fa-lock\"></i>
                                    </span>
                                    ";
                // line 190
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "form-control password-input", "placeholder" => "Entrez votre mot de passe"]]);
                // line 193
                yield "
                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text toggle-password\">
                                            <i class=\"fas fa-eye-slash\"></i>
                                        </span>
                                    </div>
                                </div>
                                ";
                // line 200
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'errors');
                yield "
                                
                                ";
                // line 202
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 202) == 2)) {
                    // line 203
                    yield "                                    <div class=\"password-requirements mt-2\">
                                        <div class=\"password-requirement\" id=\"req-length\">
                                            <i class=\"fas fa-circle\"></i> Minimum 8 caractères
                                        </div>
                                        <div class=\"password-requirement\" id=\"req-uppercase\">
                                            <i class=\"fas fa-circle\"></i> Au moins une majuscule
                                        </div>
                                        <div class=\"password-requirement\" id=\"req-lowercase\">
                                            <i class=\"fas fa-circle\"></i> Au moins une minuscule
                                        </div>
                                        <div class=\"password-requirement\" id=\"req-number\">
                                            <i class=\"fas fa-circle\"></i> Au moins un chiffre
                                        </div>
                                        <div class=\"password-requirement\" id=\"req-special\">
                                            <i class=\"fas fa-circle\"></i> Au moins un caractère spécial
                                        </div>
                                    </div>
                                ";
                }
                // line 221
                yield "                            </div>
                        ";
            }
            // line 223
            yield "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        yield "                    
                    <div class=\"d-flex justify-content-end\">
                        ";
        // line 226
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "save", [], "any", true, true, false, 226)) {
            // line 227
            yield "                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 227, $this->source); })()), "save", [], "any", false, false, false, 227), 'widget');
            yield "
                        ";
        } else {
            // line 229
            yield "                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-save mr-2\"></i>Mettre à jour mon mot de passe
                            </button>
                        ";
        }
        // line 233
        yield "                    </div>
                    
                    ";
        // line 235
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), 'form_end');
        yield "
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

    // line 243
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

        // line 244
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle password visibility
        const toggleButtons = document.querySelectorAll('.toggle-password');
        toggleButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const passwordField = this.closest('.input-group').querySelector('.password-input');
                const icon = this.querySelector('i');
                
                if (passwordField.type === 'password') {
                    passwordField.type = 'text';
                    icon.classList.replace('fa-eye-slash', 'fa-eye');
                } else {
                    passwordField.type = 'password';
                    icon.classList.replace('fa-eye', 'fa-eye-slash');
                }
            });
        });
        
        // Password strength validation
        const passwordInputs = document.querySelectorAll('.password-input');
        if (passwordInputs.length >= 2) {
            // Assuming the second input is for the new password
            const newPassword = passwordInputs[1];
            
            newPassword.addEventListener('input', function() {
                const value = this.value;
                
                // Length check
                const reqLength = document.getElementById('req-length');
                if (reqLength) {
                    if (value.length >= 8) {
                        reqLength.classList.add('valid');
                        reqLength.classList.remove('invalid');
                        reqLength.querySelector('i').classList.replace('fa-circle', 'fa-check-circle');
                    } else {
                        reqLength.classList.add('invalid');
                        reqLength.classList.remove('valid');
                        reqLength.querySelector('i').classList.replace('fa-check-circle', 'fa-circle');
                    }
                }
                
                // Uppercase check
                const reqUppercase = document.getElementById('req-uppercase');
                if (reqUppercase) {
                    if (/[A-Z]/.test(value)) {
                        reqUppercase.classList.add('valid');
                        reqUppercase.classList.remove('invalid');
                        reqUppercase.querySelector('i').classList.replace('fa-circle', 'fa-check-circle');
                    } else {
                        reqUppercase.classList.add('invalid');
                        reqUppercase.classList.remove('valid');
                        reqUppercase.querySelector('i').classList.replace('fa-check-circle', 'fa-circle');
                    }
                }
                
                // Lowercase check
                const reqLowercase = document.getElementById('req-lowercase');
                if (reqLowercase) {
                    if (/[a-z]/.test(value)) {
                        reqLowercase.classList.add('valid');
                        reqLowercase.classList.remove('invalid');
                        reqLowercase.querySelector('i').classList.replace('fa-circle', 'fa-check-circle');
                    } else {
                        reqLowercase.classList.add('invalid');
                        reqLowercase.classList.remove('valid');
                        reqLowercase.querySelector('i').classList.replace('fa-check-circle', 'fa-circle');
                    }
                }
                
                // Number check
                const reqNumber = document.getElementById('req-number');
                if (reqNumber) {
                    if (/[0-9]/.test(value)) {
                        reqNumber.classList.add('valid');
                        reqNumber.classList.remove('invalid');
                        reqNumber.querySelector('i').classList.replace('fa-circle', 'fa-check-circle');
                    } else {
                        reqNumber.classList.add('invalid');
                        reqNumber.classList.remove('valid');
                        reqNumber.querySelector('i').classList.replace('fa-check-circle', 'fa-circle');
                    }
                }
                
                // Special character check
                const reqSpecial = document.getElementById('req-special');
                if (reqSpecial) {
                    if (/[!@#\$%^&*(),.?\":{}|<>]/.test(value)) {
                        reqSpecial.classList.add('valid');
                        reqSpecial.classList.remove('invalid');
                        reqSpecial.querySelector('i').classList.replace('fa-circle', 'fa-check-circle');
                    } else {
                        reqSpecial.classList.add('invalid');
                        reqSpecial.classList.remove('valid');
                        reqSpecial.querySelector('i').classList.replace('fa-check-circle', 'fa-circle');
                    }
                }
            });
            
            // Match passwords validation
            if (passwordInputs.length >= 3) {
                // Assuming the third input is for the password confirmation
                const confirmPassword = passwordInputs[2];
                
                const form = document.getElementById('password-form');
                form.addEventListener('submit', function(e) {
                    if (newPassword.value !== confirmPassword.value) {
                        confirmPassword.classList.add('is-invalid');
                        const errorDiv = document.createElement('div');
                        errorDiv.classList.add('invalid-feedback');
                        errorDiv.textContent = 'Les mots de passe ne correspondent pas';
                        confirmPassword.parentNode.appendChild(errorDiv);
                        e.preventDefault();
                    }
                });
            }
        }
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
        return "admin/parameter/update_password.html.twig";
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
        return array (  590 => 244,  577 => 243,  559 => 235,  555 => 233,  549 => 229,  543 => 227,  541 => 226,  537 => 224,  523 => 223,  519 => 221,  499 => 203,  497 => 202,  492 => 200,  483 => 193,  481 => 190,  473 => 185,  470 => 184,  467 => 183,  450 => 182,  445 => 180,  433 => 170,  420 => 169,  283 => 43,  270 => 42,  256 => 38,  251 => 37,  248 => 36,  235 => 35,  221 => 31,  217 => 30,  214 => 29,  201 => 28,  183 => 25,  180 => 24,  167 => 23,  153 => 18,  144 => 16,  140 => 15,  136 => 13,  133 => 12,  120 => 11,  97 => 5,  74 => 3,  63 => 1,  61 => 8,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"admin/layout.html.twig\" %}

{% block title \"Paramètre\" %}

{% block title_h1 \"Modifier mon mot de passe\" %}

{# Add form theme directive #}
{% form_theme form _self %}

{# Define blocks using proper prefixes #}
{% block form_errors %}
    {% if errors|length > 0 %}
    <div class=\"alert alert-danger\">
        <ul class=\"mb-0\">
            {% for error in errors %}
                <li>{{ error.message }}</li>
            {% endfor %}
        </ul>
    </div>
    {% endif %}
{% endblock %}

{% block button_widget %}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' btn btn-primary')|trim}) %}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ label|default('') }}</button>
{% endblock %}

{% block button_row %}
    <div class=\"form-group\">
        {{ form_widget(form) }}
        {{ form_errors(form) }}
    </div>
{% endblock %}

{% block submit_widget %}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' btn btn-primary')|trim}) %}
    <button type=\"submit\" {{ block('button_attributes') }}>
        <i class=\"fas fa-save mr-2\"></i>{{ label|default('Mettre à jour mon mot de passe') }}
    </button>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .password-update-card {
            border-radius: 0.5rem;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
            border: 0;
        }
        
        .password-update-card .card-header {
            background-color: #f8f9fc;
            border-bottom: 1px solid #e3e6f0;
            padding: 1rem 1.25rem;
        }
        
        .password-update-card .card-header h6 {
            margin-bottom: 0;
            font-weight: 700;
            color: #4e73df;
        }
        
        .password-update-card .card-body {
            padding: 1.5rem;
        }
        
        .form-group {
            margin-bottom: 1.25rem;
        }
        
        .form-control {
            display: block;
            width: 100%;
            padding: 0.5rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            color: #6e707e;
            background-color: #fff;
            border: 1px solid #d1d3e2;
            border-radius: 0.35rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
        
        .form-control:focus {
            color: #6e707e;
            background-color: #fff;
            border-color: #bac8f3;
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.25);
        }
        
        .input-group {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            width: 100%;
        }
        
        .input-group-text {
            display: flex;
            align-items: center;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #6e707e;
            text-align: center;
            white-space: nowrap;
            background-color: #f8f9fc;
            border: 1px solid #d1d3e2;
            border-radius: 0.35rem 0 0 0.35rem;
        }
        
        .input-group .form-control {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
        
        .input-group-append {
            margin-left: -1px;
        }
        
        .input-group > .input-group-append > .input-group-text {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            border-top-right-radius: 0.35rem;
            border-bottom-right-radius: 0.35rem;
            cursor: pointer;
        }
        
        .btn-primary {
            color: #fff;
            background-color: #4e73df;
            border-color: #4e73df;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            border-radius: 0.35rem;
            transition: all .15s ease-in-out;
        }
        
        .btn-primary:hover {
            background-color: #4262c5;
            border-color: #3d5cb8;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(78, 115, 223, 0.3);
        }
        
        .password-requirement {
            color: #858796;
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }
        
        .password-requirement i {
            margin-right: 0.25rem;
        }
        
        .password-requirement.valid {
            color: #1cc88a;
        }
        
        .password-requirement.invalid {
            color: #e74a3b;
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <div class=\"col-xl-6 col-lg-8 col-md-10\">
            <div class=\"password-update-card card shadow mb-4\">
                <div class=\"card-header py-3 d-flex flex-row align-items-center\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">
                        <i class=\"fas fa-key mr-2\"></i>Modification du mot de passe
                    </h6>
                </div>
                <div class=\"card-body\">
                    {{ form_start(form, {'attr': {'id': 'password-form', 'novalidate': 'novalidate'}}) }}
                    
                    {% for field in form %}
                        {% if field.vars.block_prefixes[1] != '_token' and field.vars.block_prefixes[1] != 'submit' %}
                            <div class=\"form-group\">
                                {{ form_label(field, null, {'label_attr': {'class': 'form-label'}}) }}
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\">
                                        <i class=\"fas fa-lock\"></i>
                                    </span>
                                    {{ form_widget(field, {'attr': {
                                        'class': 'form-control password-input',
                                        'placeholder': 'Entrez votre mot de passe'
                                    }}) }}
                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text toggle-password\">
                                            <i class=\"fas fa-eye-slash\"></i>
                                        </span>
                                    </div>
                                </div>
                                {{ form_errors(field) }}
                                
                                {% if loop.index == 2 %}
                                    <div class=\"password-requirements mt-2\">
                                        <div class=\"password-requirement\" id=\"req-length\">
                                            <i class=\"fas fa-circle\"></i> Minimum 8 caractères
                                        </div>
                                        <div class=\"password-requirement\" id=\"req-uppercase\">
                                            <i class=\"fas fa-circle\"></i> Au moins une majuscule
                                        </div>
                                        <div class=\"password-requirement\" id=\"req-lowercase\">
                                            <i class=\"fas fa-circle\"></i> Au moins une minuscule
                                        </div>
                                        <div class=\"password-requirement\" id=\"req-number\">
                                            <i class=\"fas fa-circle\"></i> Au moins un chiffre
                                        </div>
                                        <div class=\"password-requirement\" id=\"req-special\">
                                            <i class=\"fas fa-circle\"></i> Au moins un caractère spécial
                                        </div>
                                    </div>
                                {% endif %}
                            </div>
                        {% endif %}
                    {% endfor %}
                    
                    <div class=\"d-flex justify-content-end\">
                        {% if form.save is defined %}
                            {{ form_widget(form.save) }}
                        {% else %}
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-save mr-2\"></i>Mettre à jour mon mot de passe
                            </button>
                        {% endif %}
                    </div>
                    
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle password visibility
        const toggleButtons = document.querySelectorAll('.toggle-password');
        toggleButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const passwordField = this.closest('.input-group').querySelector('.password-input');
                const icon = this.querySelector('i');
                
                if (passwordField.type === 'password') {
                    passwordField.type = 'text';
                    icon.classList.replace('fa-eye-slash', 'fa-eye');
                } else {
                    passwordField.type = 'password';
                    icon.classList.replace('fa-eye', 'fa-eye-slash');
                }
            });
        });
        
        // Password strength validation
        const passwordInputs = document.querySelectorAll('.password-input');
        if (passwordInputs.length >= 2) {
            // Assuming the second input is for the new password
            const newPassword = passwordInputs[1];
            
            newPassword.addEventListener('input', function() {
                const value = this.value;
                
                // Length check
                const reqLength = document.getElementById('req-length');
                if (reqLength) {
                    if (value.length >= 8) {
                        reqLength.classList.add('valid');
                        reqLength.classList.remove('invalid');
                        reqLength.querySelector('i').classList.replace('fa-circle', 'fa-check-circle');
                    } else {
                        reqLength.classList.add('invalid');
                        reqLength.classList.remove('valid');
                        reqLength.querySelector('i').classList.replace('fa-check-circle', 'fa-circle');
                    }
                }
                
                // Uppercase check
                const reqUppercase = document.getElementById('req-uppercase');
                if (reqUppercase) {
                    if (/[A-Z]/.test(value)) {
                        reqUppercase.classList.add('valid');
                        reqUppercase.classList.remove('invalid');
                        reqUppercase.querySelector('i').classList.replace('fa-circle', 'fa-check-circle');
                    } else {
                        reqUppercase.classList.add('invalid');
                        reqUppercase.classList.remove('valid');
                        reqUppercase.querySelector('i').classList.replace('fa-check-circle', 'fa-circle');
                    }
                }
                
                // Lowercase check
                const reqLowercase = document.getElementById('req-lowercase');
                if (reqLowercase) {
                    if (/[a-z]/.test(value)) {
                        reqLowercase.classList.add('valid');
                        reqLowercase.classList.remove('invalid');
                        reqLowercase.querySelector('i').classList.replace('fa-circle', 'fa-check-circle');
                    } else {
                        reqLowercase.classList.add('invalid');
                        reqLowercase.classList.remove('valid');
                        reqLowercase.querySelector('i').classList.replace('fa-check-circle', 'fa-circle');
                    }
                }
                
                // Number check
                const reqNumber = document.getElementById('req-number');
                if (reqNumber) {
                    if (/[0-9]/.test(value)) {
                        reqNumber.classList.add('valid');
                        reqNumber.classList.remove('invalid');
                        reqNumber.querySelector('i').classList.replace('fa-circle', 'fa-check-circle');
                    } else {
                        reqNumber.classList.add('invalid');
                        reqNumber.classList.remove('valid');
                        reqNumber.querySelector('i').classList.replace('fa-check-circle', 'fa-circle');
                    }
                }
                
                // Special character check
                const reqSpecial = document.getElementById('req-special');
                if (reqSpecial) {
                    if (/[!@#\$%^&*(),.?\":{}|<>]/.test(value)) {
                        reqSpecial.classList.add('valid');
                        reqSpecial.classList.remove('invalid');
                        reqSpecial.querySelector('i').classList.replace('fa-circle', 'fa-check-circle');
                    } else {
                        reqSpecial.classList.add('invalid');
                        reqSpecial.classList.remove('valid');
                        reqSpecial.querySelector('i').classList.replace('fa-check-circle', 'fa-circle');
                    }
                }
            });
            
            // Match passwords validation
            if (passwordInputs.length >= 3) {
                // Assuming the third input is for the password confirmation
                const confirmPassword = passwordInputs[2];
                
                const form = document.getElementById('password-form');
                form.addEventListener('submit', function(e) {
                    if (newPassword.value !== confirmPassword.value) {
                        confirmPassword.classList.add('is-invalid');
                        const errorDiv = document.createElement('div');
                        errorDiv.classList.add('invalid-feedback');
                        errorDiv.textContent = 'Les mots de passe ne correspondent pas';
                        confirmPassword.parentNode.appendChild(errorDiv);
                        e.preventDefault();
                    }
                });
            }
        }
    });
    </script>
{% endblock %}", "admin/parameter/update_password.html.twig", "C:\\Users\\ASUS\\Desktop\\user symfony\\templates\\admin\\parameter\\update_password.html.twig");
    }
}
