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

/* admin/user/add.html.twig */
class __TwigTemplate_8b0909d45ca867b5f85274d63251eb42 extends Template
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
            'form_row' => [$this, 'block_form_row'],
            'password_widget' => [$this, 'block_password_widget'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'file_widget' => [$this, 'block_file_widget'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'form_actions' => [$this, 'block_form_actions'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/add.html.twig"));

        // line 7
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), [$this->getTemplateName()], true);
        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/user/add.html.twig", 1);
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

        yield "Création d'un utilisateur";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 11
        yield "    <div class=\"form-group\">
        ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'errors');
        yield "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_password_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "password_widget"));

        // line 19
        yield "    <div class=\"input-group input-group-merge form-password-toggle\">
        <input 
            type=\"password\"
            ";
        // line 22
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield "
            class=\"form-control password-field\"
            autocomplete=\"new-password\"
        />
        <span class=\"input-group-text cursor-pointer\">
            <i class=\"ti ti-eye-off\"></i>
        </span>
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
    public function block_choice_widget_expanded(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 36
        yield "    <div class=\"mt-2\">
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 38
            yield "            <div class=\"form-check\">
                ";
            // line 39
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "form-check-input"]]);
            yield "
                ";
            // line 40
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["label_attr" => ["class" => "form-check-label"]]);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_file_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_widget"));

        // line 47
        yield "    <div class=\"custom-file\">
        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 52
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

        // line 53
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .user-form-card {
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.08);
            border: none;
            border-radius: 0.5rem;
            background-color: #fff;
            overflow: hidden;
        }
        
        .user-form-card .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-bottom: none;
            padding: 1.5rem;
            color: white;
        }
        
        .user-form-card .card-header h6 {
            margin: 0;
            font-weight: 600;
            font-size: 1.25rem;
        }
        
        .user-form-card .card-body {
            padding: 2rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-control {
            display: block;
            width: 100%;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            font-weight: 400;
            color: #495057;
            background-color: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 0.375rem;
            transition: all 0.2s ease;
        }
        
        .form-control:focus {
            border-color: #a0a0ff;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
        }
        
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #4a4a4a;
            font-size: 0.9375rem;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 0.375rem;
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(102, 126, 234, 0.3);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }
        
        .btn-outline-secondary {
            padding: 0.75rem 1.5rem;
            border: 1px solid #e0e0e0;
            color: #6c757d;
            transition: all 0.3s ease;
        }
        
        .btn-outline-secondary:hover {
            background-color: #f8f9fa;
            border-color: #d1d7dc;
        }
        
        .form-error-message {
            color: #ff4757;
            font-size: 0.875rem;
            margin-top: 0.5rem;
            display: block;
        }
        
        .form-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid #f0f0f0;
        }
        
        .form-check-input {
            margin-right: 0.5rem;
        }
        
        /* Input group styling for password fields */
        .input-group {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            width: 100%;
        }
        
        .input-group-append {
            margin-left: -1px;
            display: flex;
        }
        
        .input-group > .form-control {
            position: relative;
            flex: 1 1 auto;
            width: 1%;
            min-width: 0;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
        
        .toggle-password {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            border-color: #e0e0e0;
            background-color: #f8f9fa;
            color: #6c757d;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .toggle-password:hover {
            background-color: #e9ecef;
            color: #495057;
        }
        
        /* Form row styling to create a two-column layout */
        @media (min-width: 768px) {
            .user-form .form-group {
                width: 48%;
                display: inline-block;
                vertical-align: top;
                margin-right: 4%;
            }
            
            .user-form .form-group:nth-child(even) {
                margin-right: 0;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 211
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

        // line 212
        yield "<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <div class=\"col-xl-8 col-lg-10\">
            <div class=\"user-form-card\">
                <div class=\"card-header\">
                    <h6>
                        <i class=\"fas fa-user-plus mr-2\"></i>Informations utilisateur
                    </h6>
                </div>
                <div class=\"card-body\">
                    ";
        // line 222
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 222, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "user-form"]]);
        // line 227
        yield "
                    
                    ";
        // line 230
        yield "                    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 230, $this->source); })()), 'widget');
        yield "
                    
                    ";
        // line 232
        yield from         $this->unwrap()->yieldBlock("form_actions", $context, $blocks);
        yield "
                    
                    ";
        // line 234
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), 'form_end');
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

    // line 242
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

        // line 243
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
   document.addEventListener('DOMContentLoaded', function() {
    // For password visibility toggle
    var toggles = document.querySelectorAll('.form-password-toggle');

    toggles.forEach(function(toggle) {
        var input = toggle.querySelector('.password-field');
        var icon = toggle.querySelector('.input-group-text i');

        toggle.querySelector('.input-group-text').addEventListener('click', function() {
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('ti-eye-off');
                icon.classList.add('ti-eye');
            } else {
                input.type = 'password';
                icon.classList.remove('ti-eye');
                icon.classList.add('ti-eye-off');
            }
        });
    });
});

    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 270
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_actions"));

        // line 271
        yield "    <div class=\"form-actions\">
        <a href=\"";
        // line 272
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        yield "\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-arrow-left mr-2\"></i> Retour
        </a>
    
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
        return "admin/user/add.html.twig";
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
        return array (  584 => 272,  581 => 271,  568 => 270,  530 => 243,  517 => 242,  499 => 234,  494 => 232,  488 => 230,  484 => 227,  482 => 222,  470 => 212,  457 => 211,  288 => 53,  275 => 52,  261 => 48,  258 => 47,  245 => 46,  233 => 43,  224 => 40,  220 => 39,  217 => 38,  213 => 37,  210 => 36,  197 => 35,  177 => 22,  172 => 19,  159 => 18,  145 => 14,  141 => 13,  137 => 12,  134 => 11,  121 => 10,  98 => 5,  75 => 3,  64 => 1,  62 => 7,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"admin/layout.html.twig\" %}

{% block title \"Utilisateurs\" %}

{% block title_h1 \"Création d'un utilisateur\" %}

{% form_theme form _self %}

{# Define custom form theme to style form elements #}
{% block form_row %}
    <div class=\"form-group\">
        {{ form_label(form, null, {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form, {'attr': {'class': 'form-control'}}) }}
        {{ form_errors(form) }}
    </div>
{% endblock %}

{% block password_widget %}
    <div class=\"input-group input-group-merge form-password-toggle\">
        <input 
            type=\"password\"
            {{ block('widget_attributes') }}
            class=\"form-control password-field\"
            autocomplete=\"new-password\"
        />
        <span class=\"input-group-text cursor-pointer\">
            <i class=\"ti ti-eye-off\"></i>
        </span>
    </div>
{% endblock %}




{% block choice_widget_expanded %}
    <div class=\"mt-2\">
        {% for child in form %}
            <div class=\"form-check\">
                {{ form_widget(child, {'attr': {'class': 'form-check-input'}}) }}
                {{ form_label(child, null, {'label_attr': {'class': 'form-check-label'}}) }}
            </div>
        {% endfor %}
    </div>
{% endblock %}

{% block file_widget %}
    <div class=\"custom-file\">
        {{ form_widget(form, {'attr': {'class': 'form-control'}}) }}
    </div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .user-form-card {
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.08);
            border: none;
            border-radius: 0.5rem;
            background-color: #fff;
            overflow: hidden;
        }
        
        .user-form-card .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-bottom: none;
            padding: 1.5rem;
            color: white;
        }
        
        .user-form-card .card-header h6 {
            margin: 0;
            font-weight: 600;
            font-size: 1.25rem;
        }
        
        .user-form-card .card-body {
            padding: 2rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-control {
            display: block;
            width: 100%;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            font-weight: 400;
            color: #495057;
            background-color: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 0.375rem;
            transition: all 0.2s ease;
        }
        
        .form-control:focus {
            border-color: #a0a0ff;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
        }
        
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #4a4a4a;
            font-size: 0.9375rem;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 0.375rem;
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(102, 126, 234, 0.3);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }
        
        .btn-outline-secondary {
            padding: 0.75rem 1.5rem;
            border: 1px solid #e0e0e0;
            color: #6c757d;
            transition: all 0.3s ease;
        }
        
        .btn-outline-secondary:hover {
            background-color: #f8f9fa;
            border-color: #d1d7dc;
        }
        
        .form-error-message {
            color: #ff4757;
            font-size: 0.875rem;
            margin-top: 0.5rem;
            display: block;
        }
        
        .form-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid #f0f0f0;
        }
        
        .form-check-input {
            margin-right: 0.5rem;
        }
        
        /* Input group styling for password fields */
        .input-group {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            width: 100%;
        }
        
        .input-group-append {
            margin-left: -1px;
            display: flex;
        }
        
        .input-group > .form-control {
            position: relative;
            flex: 1 1 auto;
            width: 1%;
            min-width: 0;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
        
        .toggle-password {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            border-color: #e0e0e0;
            background-color: #f8f9fa;
            color: #6c757d;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .toggle-password:hover {
            background-color: #e9ecef;
            color: #495057;
        }
        
        /* Form row styling to create a two-column layout */
        @media (min-width: 768px) {
            .user-form .form-group {
                width: 48%;
                display: inline-block;
                vertical-align: top;
                margin-right: 4%;
            }
            
            .user-form .form-group:nth-child(even) {
                margin-right: 0;
            }
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <div class=\"col-xl-8 col-lg-10\">
            <div class=\"user-form-card\">
                <div class=\"card-header\">
                    <h6>
                        <i class=\"fas fa-user-plus mr-2\"></i>Informations utilisateur
                    </h6>
                </div>
                <div class=\"card-body\">
                    {{ form_start(form, { 
                        attr: { 
                            novalidate: 'novalidate',
                            class: 'user-form' 
                        } 
                    }) }}
                    
                    {# Form fields will be rendered with the custom theme defined above #}
                    {{ form_widget(form) }}
                    
                    {{ block('form_actions') }}
                    
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
    // For password visibility toggle
    var toggles = document.querySelectorAll('.form-password-toggle');

    toggles.forEach(function(toggle) {
        var input = toggle.querySelector('.password-field');
        var icon = toggle.querySelector('.input-group-text i');

        toggle.querySelector('.input-group-text').addEventListener('click', function() {
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('ti-eye-off');
                icon.classList.add('ti-eye');
            } else {
                input.type = 'password';
                icon.classList.remove('ti-eye');
                icon.classList.add('ti-eye-off');
            }
        });
    });
});

    </script>
{% endblock %}

{% block form_actions %}
    <div class=\"form-actions\">
        <a href=\"{{ path('admin_user_index') }}\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-arrow-left mr-2\"></i> Retour
        </a>
    
    </div>
{% endblock %}", "admin/user/add.html.twig", "C:\\Users\\ASUS\\Desktop\\user symfony\\templates\\admin\\user\\add.html.twig");
    }
}
