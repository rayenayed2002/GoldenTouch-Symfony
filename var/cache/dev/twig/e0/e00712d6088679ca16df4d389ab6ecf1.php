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

/* GestionEvent/test.html.twig */
class __TwigTemplate_879bcce1122f213ea09e36379e9aff50 extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 5
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionEvent/test.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionEvent/test.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "GestionEvent/test.html.twig", 5);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
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

        yield "Draft Events";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        // line 10
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        /* Improved Sorting Dropdown Styles */
        .sorting-container {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .sort-label {
            font-weight: 600;
            color: #555;
            margin-bottom: 0;
        }
        
        .custom-select-wrapper {
            position: relative;
            display: inline-block;
        }
        
        .custom-select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            padding: 8px 35px 8px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 6px;
            background-color: white;
            font-size: 14px;
            color: #333;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 180px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        
        .custom-select:hover {
            border-color: #FFD700;
        }
        
        .custom-select:focus {
            outline: none;
            border-color: #FFD700;
            box-shadow: 0 0 0 3px rgba(255, 215, 0, 0.2);
        }
        
        .custom-select-wrapper::after {
            content: \"▼\";
            font-size: 10px;
            color: #777;
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
        }
        
        /* Pagination Improvements */
        .th-pagination ul {
            display: flex;
            gap: 8px;
        }
        
        .th-pagination li a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border: 1px solid #e0e0e0;
            color: #555;
            transition: all 0.3s ease;
        }
        
        .th-pagination li a:hover {
            background-color: #FFD700;
            color: white;
            border-color: #FFD700;
        }
        
        .th-pagination li.active a {
            background-color: #FFD700;
            color: white;
            border-color: #FFD700;
            font-weight: bold;
        }
        
        /* Responsive adjustments */
        @media (max-width: 767px) {
            .th-sort-bar .row {
                flex-direction: column;
                gap: 15px;
            }
            
            .sorting-container {
                width: 100%;
                justify-content: space-between;
            }
            
            .custom-select {
                min-width: 160px;
            }
        }

        .product-img {
    position: relative;
    overflow: hidden;
}

.event-type-badge {
    position: absolute;
    top: 12px;
    right: 12px;
    background: rgba(255, 215, 0, 0.9);
    color: #000;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.event-card:hover .event-type-badge {
    background: rgba(255, 215, 0, 1);
    transform: translateY(-2px);
}
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 143
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

        // line 144
        yield "<div class=\"custom-content\">
 <section class=\"space-top space-extra-bottom\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add_to_cart"), "html", null, true);
        yield "\">

            <!-- Main Content -->
            <div class=\"col-lg-10 col-xl-8 mx-auto\">
                <div class=\"th-sort-bar mb-4\">
                    <div class=\"row justify-content-between align-items-center\">
                        <div class=\"col-md-auto mb-3 mb-md-0\">
                            <p class=\"woocommerce-result-count mb-0\">
                                Résultats ";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 156, $this->source); })()) - 1) * (isset($context["pageSize"]) || array_key_exists("pageSize", $context) ? $context["pageSize"] : (function () { throw new RuntimeError('Variable "pageSize" does not exist.', 156, $this->source); })())) + 1), "html", null, true);
        yield " à ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min(((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 156, $this->source); })()) * (isset($context["pageSize"]) || array_key_exists("pageSize", $context) ? $context["pageSize"] : (function () { throw new RuntimeError('Variable "pageSize" does not exist.', 156, $this->source); })())), (isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 156, $this->source); })())), "html", null, true);
        yield " sur ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 156, $this->source); })()), "html", null, true);
        yield " affichés
                            </p>
                        </div>
                       <div class=\"col-md-auto\">
    <div class=\"sorting-container\">
        <span class=\"sort-label\">Trier par:</span>
        <div class=\"custom-select-wrapper\">
            <form class=\"woocommerce-ordering\" method=\"get\">
                <input type=\"hidden\" name=\"page\" value=\"1\">
                <select name=\"orderby\" class=\"custom-select\" aria-label=\"Sort order\" onchange=\"this.form.submit()\">
                    <option value=\"date\" data-sort=\"desc\" ";
        // line 166
        yield ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 166, $this->source); })()), "request", [], "any", false, false, false, 166), "query", [], "any", false, false, false, 166), "get", ["orderby"], "method", false, false, false, 166) == "date") && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 166, $this->source); })()), "request", [], "any", false, false, false, 166), "query", [], "any", false, false, false, 166), "get", ["sort"], "method", false, false, false, 166) != "asc"))) ? ("selected") : (""));
        yield ">Date (Plus ancien)</option>
                    <option value=\"date\" data-sort=\"asc\" ";
        // line 167
        yield ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 167, $this->source); })()), "request", [], "any", false, false, false, 167), "query", [], "any", false, false, false, 167), "get", ["orderby"], "method", false, false, false, 167) == "date") && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 167, $this->source); })()), "request", [], "any", false, false, false, 167), "query", [], "any", false, false, false, 167), "get", ["sort"], "method", false, false, false, 167) == "asc"))) ? ("selected") : (""));
        yield ">Date (Plus récent)</option>
                    <option value=\"name\" data-sort=\"asc\" ";
        // line 168
        yield ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 168, $this->source); })()), "request", [], "any", false, false, false, 168), "query", [], "any", false, false, false, 168), "get", ["orderby"], "method", false, false, false, 168) == "name") && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 168, $this->source); })()), "request", [], "any", false, false, false, 168), "query", [], "any", false, false, false, 168), "get", ["sort"], "method", false, false, false, 168) == "asc"))) ? ("selected") : (""));
        yield ">Nom (A-Z)</option>
                    <option value=\"name\" data-sort=\"desc\" ";
        // line 169
        yield ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 169, $this->source); })()), "request", [], "any", false, false, false, 169), "query", [], "any", false, false, false, 169), "get", ["orderby"], "method", false, false, false, 169) == "name") && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 169, $this->source); })()), "request", [], "any", false, false, false, 169), "query", [], "any", false, false, false, 169), "get", ["sort"], "method", false, false, false, 169) == "desc"))) ? ("selected") : (""));
        yield ">Nom (Z-A)</option>
                    <option value=\"category\" data-sort=\"asc\" ";
        // line 170
        yield ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 170, $this->source); })()), "request", [], "any", false, false, false, 170), "query", [], "any", false, false, false, 170), "get", ["orderby"], "method", false, false, false, 170) == "category") && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 170, $this->source); })()), "request", [], "any", false, false, false, 170), "query", [], "any", false, false, false, 170), "get", ["sort"], "method", false, false, false, 170) == "asc"))) ? ("selected") : (""));
        yield ">Catégorie (Z-A)</option>
                    <option value=\"category\" data-sort=\"desc\" ";
        // line 171
        yield ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 171, $this->source); })()), "request", [], "any", false, false, false, 171), "query", [], "any", false, false, false, 171), "get", ["orderby"], "method", false, false, false, 171) == "category") && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 171, $this->source); })()), "request", [], "any", false, false, false, 171), "query", [], "any", false, false, false, 171), "get", ["sort"], "method", false, false, false, 171) == "desc"))) ? ("selected") : (""));
        yield ">Catégorie (A-Z)</option>
                </select>
                <input type=\"hidden\" name=\"sort\" id=\"sortDirection\" value=\"";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 173, $this->source); })()), "request", [], "any", false, false, false, 173), "query", [], "any", false, false, false, 173), "get", ["sort", "desc"], "method", false, false, false, 173), "html", null, true);
        yield "\">
                ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 174, $this->source); })()), "request", [], "any", false, false, false, 174), "query", [], "any", false, false, false, 174), "all", [], "any", false, false, false, 174));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 175
            yield "                    ";
            if (!CoreExtension::inFilter($context["key"], ["orderby", "page", "sort"])) {
                // line 176
                yield "                        <input type=\"hidden\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\">
                    ";
            }
            // line 178
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        yield "            </form>
        </div>
    </div>
</div>
                    </div>
                </div>

                <div class=\"row gy-40 justify-content-center\">
                ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 187, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 188
            yield "    <div class=\"col-md-6 col-lg-4\">
     <a href=\"
    ";
            // line 190
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 190) == "PACK") &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["event"], "pack", [], "any", false, false, false, 190)))) {
                // line 191
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "pack", [], "any", false, false, false, 191), "id", [], "any", false, false, false, 191)]), "html", null, true);
                yield "
    ";
            } else {
                // line 193
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 193)]), "html", null, true);
                yield "
    ";
            }
            // line 194
            yield "\" 
   class=\"text-decoration-none\">
            <div class=\"th-product event-card\" 
                 data-event-id=\"";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 197), "html", null, true);
            yield "\"
                 data-categorie=\"";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, false, false, 198), "value", [], "any", false, false, false, 198), "html", null, true);
            yield "\"
                 data-date=\"";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 199), "Y-m-d"), "html", null, true);
            yield "\">
                <div class=\"product-img\">
                    ";
            // line 201
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "photo", [], "any", false, false, false, 201)) {
                // line 202
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "photo", [], "any", false, false, false, 202))), "html", null, true);
                yield "\" class=\"img-fluid\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 202), "html", null, true);
                yield "\">
                    ";
            } else {
                // line 204
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/placeholder.jpg"), "html", null, true);
                yield "\" class=\"img-fluid\" alt=\"No image\">
                    ";
            }
            // line 206
            yield "                    <div class=\"event-type-badge\">
                        ";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 207)), "html", null, true);
            yield "
                    </div>
                </div>
                <div class=\"product-content\">
                    <h3 class=\"product-title\">";
            // line 211
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 211), "html", null, true);
            yield "</h3>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <span class=\"price\">";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 213), "d M Y"), "html", null, true);
            yield "</span>
                        <span class=\"event-category\">
                            ";
            // line 215
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["categoryLabels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, false, false, 215), "value", [], "any", false, false, false, 215), [], "array", true, true, false, 215) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["categoryLabels"]) || array_key_exists("categoryLabels", $context) ? $context["categoryLabels"] : (function () { throw new RuntimeError('Variable "categoryLabels" does not exist.', 215, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, false, false, 215), "value", [], "any", false, false, false, 215), [], "array", false, false, false, 215)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categoryLabels"]) || array_key_exists("categoryLabels", $context) ? $context["categoryLabels"] : (function () { throw new RuntimeError('Variable "categoryLabels" does not exist.', 215, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, false, false, 215), "value", [], "any", false, false, false, 215), [], "array", false, false, false, 215), "html", null, true)) : ("Général"));
            yield "
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        yield "                </div>

                ";
        // line 225
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 225, $this->source); })()) > 1)) {
            // line 226
            yield "                <div class=\"th-pagination text-center pt-50\">
                    <ul class=\"justify-content-center\">
                        ";
            // line 228
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 228, $this->source); })()) > 1)) {
                // line 229
                yield "                            <li>
                                <a href=\"";
                // line 230
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_draft_events", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 230, $this->source); })()), "request", [], "any", false, false, false, 230), "query", [], "any", false, false, false, 230), "all", [], "any", false, false, false, 230), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 230, $this->source); })()) - 1)])), "html", null, true);
                yield "\">
                                    <i class=\"far fa-arrow-left\"></i>
                                </a>
                            </li>
                        ";
            }
            // line 235
            yield "
                        ";
            // line 236
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 236, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 237
                yield "                            <li class=\"";
                yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 237, $this->source); })()) == $context["page"])) ? ("active") : (""));
                yield "\">
                                <a href=\"";
                // line 238
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_draft_events", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 238, $this->source); })()), "request", [], "any", false, false, false, 238), "query", [], "any", false, false, false, 238), "all", [], "any", false, false, false, 238), ["page" => $context["page"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 241
            yield "
                        ";
            // line 242
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 242, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 242, $this->source); })()))) {
                // line 243
                yield "                            <li>
                                <a href=\"";
                // line 244
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_draft_events", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 244, $this->source); })()), "request", [], "any", false, false, false, 244), "query", [], "any", false, false, false, 244), "all", [], "any", false, false, false, 244), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 244, $this->source); })()) + 1)])), "html", null, true);
                yield "\">
                                    <i class=\"far fa-arrow-right\"></i>
                                </a>
                            </li>
                        ";
            }
            // line 249
            yield "                    </ul>
                </div>
                ";
        }
        // line 252
        yield "            </div>
        </div>
    </div>
</section>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 258
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

        // line 259
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sortSelect = document.querySelector('select[name=\"orderby\"]');
            const sortDirectionInput = document.getElementById('sortDirection');
            
            sortSelect.addEventListener('change', function() {
                const selectedOption = this.options[this.selectedIndex];
                sortDirectionInput.value = selectedOption.dataset.sort;
                this.form.submit();
            });
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
        return "GestionEvent/test.html.twig";
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
        return array (  539 => 259,  526 => 258,  510 => 252,  505 => 249,  497 => 244,  494 => 243,  492 => 242,  489 => 241,  478 => 238,  473 => 237,  469 => 236,  466 => 235,  458 => 230,  455 => 229,  453 => 228,  449 => 226,  447 => 225,  443 => 223,  429 => 215,  424 => 213,  419 => 211,  412 => 207,  409 => 206,  403 => 204,  395 => 202,  393 => 201,  388 => 199,  384 => 198,  380 => 197,  375 => 194,  369 => 193,  363 => 191,  361 => 190,  357 => 188,  353 => 187,  343 => 179,  337 => 178,  329 => 176,  326 => 175,  322 => 174,  318 => 173,  313 => 171,  309 => 170,  305 => 169,  301 => 168,  297 => 167,  293 => 166,  276 => 156,  265 => 148,  259 => 144,  246 => 143,  102 => 10,  89 => 9,  66 => 7,  43 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("



{% extends 'front.html.twig' %}

{% block title %}Draft Events{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        /* Improved Sorting Dropdown Styles */
        .sorting-container {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .sort-label {
            font-weight: 600;
            color: #555;
            margin-bottom: 0;
        }
        
        .custom-select-wrapper {
            position: relative;
            display: inline-block;
        }
        
        .custom-select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            padding: 8px 35px 8px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 6px;
            background-color: white;
            font-size: 14px;
            color: #333;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 180px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        
        .custom-select:hover {
            border-color: #FFD700;
        }
        
        .custom-select:focus {
            outline: none;
            border-color: #FFD700;
            box-shadow: 0 0 0 3px rgba(255, 215, 0, 0.2);
        }
        
        .custom-select-wrapper::after {
            content: \"▼\";
            font-size: 10px;
            color: #777;
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
        }
        
        /* Pagination Improvements */
        .th-pagination ul {
            display: flex;
            gap: 8px;
        }
        
        .th-pagination li a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border: 1px solid #e0e0e0;
            color: #555;
            transition: all 0.3s ease;
        }
        
        .th-pagination li a:hover {
            background-color: #FFD700;
            color: white;
            border-color: #FFD700;
        }
        
        .th-pagination li.active a {
            background-color: #FFD700;
            color: white;
            border-color: #FFD700;
            font-weight: bold;
        }
        
        /* Responsive adjustments */
        @media (max-width: 767px) {
            .th-sort-bar .row {
                flex-direction: column;
                gap: 15px;
            }
            
            .sorting-container {
                width: 100%;
                justify-content: space-between;
            }
            
            .custom-select {
                min-width: 160px;
            }
        }

        .product-img {
    position: relative;
    overflow: hidden;
}

.event-type-badge {
    position: absolute;
    top: 12px;
    right: 12px;
    background: rgba(255, 215, 0, 0.9);
    color: #000;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.event-card:hover .event-type-badge {
    background: rgba(255, 215, 0, 1);
    transform: translateY(-2px);
}
    </style>
{% endblock %}

{% block content %}
<div class=\"custom-content\">
 <section class=\"space-top space-extra-bottom\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('add_to_cart') }}\">

            <!-- Main Content -->
            <div class=\"col-lg-10 col-xl-8 mx-auto\">
                <div class=\"th-sort-bar mb-4\">
                    <div class=\"row justify-content-between align-items-center\">
                        <div class=\"col-md-auto mb-3 mb-md-0\">
                            <p class=\"woocommerce-result-count mb-0\">
                                Résultats {{ ((currentPage - 1) * pageSize + 1 )}} à {{ min(currentPage * pageSize, totalItems) }} sur {{ totalItems }} affichés
                            </p>
                        </div>
                       <div class=\"col-md-auto\">
    <div class=\"sorting-container\">
        <span class=\"sort-label\">Trier par:</span>
        <div class=\"custom-select-wrapper\">
            <form class=\"woocommerce-ordering\" method=\"get\">
                <input type=\"hidden\" name=\"page\" value=\"1\">
                <select name=\"orderby\" class=\"custom-select\" aria-label=\"Sort order\" onchange=\"this.form.submit()\">
                    <option value=\"date\" data-sort=\"desc\" {{ app.request.query.get('orderby') == 'date' and app.request.query.get('sort') != 'asc' ? 'selected' }}>Date (Plus ancien)</option>
                    <option value=\"date\" data-sort=\"asc\" {{ app.request.query.get('orderby') == 'date' and app.request.query.get('sort') == 'asc' ? 'selected' }}>Date (Plus récent)</option>
                    <option value=\"name\" data-sort=\"asc\" {{ app.request.query.get('orderby') == 'name' and app.request.query.get('sort') == 'asc' ? 'selected' }}>Nom (A-Z)</option>
                    <option value=\"name\" data-sort=\"desc\" {{ app.request.query.get('orderby') == 'name' and app.request.query.get('sort') == 'desc' ? 'selected' }}>Nom (Z-A)</option>
                    <option value=\"category\" data-sort=\"asc\" {{ app.request.query.get('orderby') == 'category' and app.request.query.get('sort') == 'asc' ? 'selected' }}>Catégorie (Z-A)</option>
                    <option value=\"category\" data-sort=\"desc\" {{ app.request.query.get('orderby') == 'category' and app.request.query.get('sort') == 'desc' ? 'selected' }}>Catégorie (A-Z)</option>
                </select>
                <input type=\"hidden\" name=\"sort\" id=\"sortDirection\" value=\"{{ app.request.query.get('sort', 'desc') }}\">
                {% for key, value in app.request.query.all %}
                    {% if key not in ['orderby', 'page', 'sort'] %}
                        <input type=\"hidden\" name=\"{{ key }}\" value=\"{{ value }}\">
                    {% endif %}
                {% endfor %}
            </form>
        </div>
    </div>
</div>
                    </div>
                </div>

                <div class=\"row gy-40 justify-content-center\">
                {% for event in events %}
    <div class=\"col-md-6 col-lg-4\">
     <a href=\"
    {% if event.type == 'PACK' and event.pack is not null %}
        {{ path('app_pack_details', {'id': event.pack.id}) }}
    {% else %}
        {{ path('event_show', {'id': event.id}) }}
    {% endif %}\" 
   class=\"text-decoration-none\">
            <div class=\"th-product event-card\" 
                 data-event-id=\"{{ event.id }}\"
                 data-categorie=\"{{ event.categorie.value }}\"
                 data-date=\"{{ event.date|date('Y-m-d') }}\">
                <div class=\"product-img\">
                    {% if event.photo %}
                        <img src=\"{{ asset('uploads/packs/' ~ event.photo) }}\" class=\"img-fluid\" alt=\"{{ event.nom }}\">
                    {% else %}
                        <img src=\"{{ asset('assets/img/placeholder.jpg') }}\" class=\"img-fluid\" alt=\"No image\">
                    {% endif %}
                    <div class=\"event-type-badge\">
                        {{ event.type|capitalize }}
                    </div>
                </div>
                <div class=\"product-content\">
                    <h3 class=\"product-title\">{{ event.nom }}</h3>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <span class=\"price\">{{ event.date|date('d M Y') }}</span>
                        <span class=\"event-category\">
                            {{ categoryLabels[event.categorie.value] ?? 'Général' }}
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>
{% endfor %}
                </div>

                {% if totalPages > 1 %}
                <div class=\"th-pagination text-center pt-50\">
                    <ul class=\"justify-content-center\">
                        {% if currentPage > 1 %}
                            <li>
                                <a href=\"{{ path('app_draft_events', app.request.query.all|merge({'page': currentPage - 1})) }}\">
                                    <i class=\"far fa-arrow-left\"></i>
                                </a>
                            </li>
                        {% endif %}

                        {% for page in 1..totalPages %}
                            <li class=\"{{ currentPage == page ? 'active' }}\">
                                <a href=\"{{ path('app_draft_events', app.request.query.all|merge({'page': page})) }}\">{{ page }}</a>
                            </li>
                        {% endfor %}

                        {% if currentPage < totalPages %}
                            <li>
                                <a href=\"{{ path('app_draft_events', app.request.query.all|merge({'page': currentPage + 1})) }}\">
                                    <i class=\"far fa-arrow-right\"></i>
                                </a>
                            </li>
                        {% endif %}
                    </ul>
                </div>
                {% endif %}
            </div>
        </div>
    </div>
</section>
</div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sortSelect = document.querySelector('select[name=\"orderby\"]');
            const sortDirectionInput = document.getElementById('sortDirection');
            
            sortSelect.addEventListener('change', function() {
                const selectedOption = this.options[this.selectedIndex];
                sortDirectionInput.value = selectedOption.dataset.sort;
                this.form.submit();
            });
        });
    </script>
{% endblock %}", "GestionEvent/test.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\GestionEvent\\test.html.twig");
    }
}
