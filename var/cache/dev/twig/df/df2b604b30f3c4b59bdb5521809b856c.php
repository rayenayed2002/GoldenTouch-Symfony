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

/* GestionEvent/Commande.html.twig */
class __TwigTemplate_db2528de92f4a48d85bf33f8eab5349d extends Template
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
            'inline_scripts' => [$this, 'block_inline_scripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionEvent/Commande.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionEvent/Commande.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "GestionEvent/Commande.html.twig", 5);
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

        yield "Custom Page Title";
        
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
/* Body background */
body {
    background-color: #f8f7fa;
}

/* Event Card Style */
.th-product {
    background-color: #ffffff;
    border: 2px solid gold;
    border-radius: 12px;
    transition: all 0.3s ease;
    margin: 10px;
    padding: 10px;
    height: 100%; /* Helps cards be uniform height */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    cursor: pointer;

}

/* Image wrapper to control sizing and spacing */
.product-img {
    overflow: hidden;
    border-radius: 8px;
    margin-bottom: 15px;
}

/* Image style - same height and zoom on hover */
.product-img img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    transition: transform 0.3s ease;
    border-radius: 8px;
    display: block;
}

/* Zoom effect on hover */
.th-product:hover .product-img img {
    transform: scale(1.05);
}

/* Card hover effect */
.th-product:hover {
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    transform: translateY(-5px);
}

  .th-product .product-img::before {
        content: none !important;
        background-color: transparent !important;
        opacity: 0 !important;
        transform: none !important;
        transition: none !important;
        visibility: visible !important;
    }
    
    /* Disable hover state */
    .th-product:hover .product-img::before {
        opacity: 0 !important;
        visibility: hidden !important;
    }
    
    /* Remove any other hover effects */
    .th-product:hover {
        transform: none !important;
        box-shadow: none !important;
    }
        #cartIcon.dragover {
        transform: scale(1.1);
        color: #4CAF50;
    }
    .event-card {
        cursor: grab;
        transition: transform 0.2s;
    }
    
    .event-card:active {
        cursor: grabbing;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 96
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

        // line 97
        yield "<div class=\"th-cart-wrapper space-top space-extra-bottom\">
    <div class=\"container\">
        <div class=\"card\">
            <h5 class=\"card-header\">My Orders</h5>
            
            <div class=\"card-datatable table-responsive\">
                <table class=\"cart_table\">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Date</th>
                            <th>Number of Events</th>
                            <th>Payment Method</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 115, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 116
            yield "                        <tr>
                            <td>#";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 117), "html", null, true);
            yield "</td>
                            <td>";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "createdAt", [], "any", false, false, false, 118), "Y-m-d"), "html", null, true);
            yield "</td>
                            <td>";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "details", [], "any", false, false, false, 119)), "html", null, true);
            yield "</td>
                            <td>";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 120)), "html", null, true);
            yield "</td>
                            <td>
                                <span class=\"amount text-warning\"><bdi>";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "amount", [], "any", false, false, false, 122), "html", null, true);
            yield " €</bdi></span>
                            </td>
                            <td>
                                <div class=\"d-flex gap-2\">
                                    <button class=\"btn btn-danger btn-sm delete-order\" 
                                            data-id=\"";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 127), "html", null, true);
            yield "\"
                                            title=\"Delete Order\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                    <button class=\"btn btn-warning btn-sm print-invoice\" 
                                            data-id=\"";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 132), "html", null, true);
            yield "\"
                                            title=\"Print Invoice\">
                                        <i class=\"fas fa-print\"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 139
        if (!$context['_iterated']) {
            // line 140
            yield "                        <tr>
                            <td colspan=\"6\" class=\"text-center py-4\">You have no orders yet</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['payment'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 152
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

        // line 153
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 158
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inline_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inline_scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inline_scripts"));

        // line 159
        yield from $this->yieldParentBlock("inline_scripts", $context, $blocks);
        yield "
<script>
\$(document).ready(function() {
    // Delete order button handler
    \$('.delete-order').click(function() {
        const orderId = \$(this).data('id');
        if (confirm('Are you sure you want to delete this order?')) {
            \$.ajax({
                url: '";
        // line 167
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_order");
        yield "',
                method: 'POST',
                data: { id: orderId },
                success: function(response) {
                    if (response.success) {
                        location.reload();
                    } else {
                        alert('Error: ' + response.error);
                    }
                }
            });
        }
    });
    
    // Print invoice button handler
    \$('.print-invoice').click(function() {
        const orderId = \$(this).data('id');
        window.open('";
        // line 184
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_print_invoice");
        yield "?id=' + orderId, '_blank');
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
        return "GestionEvent/Commande.html.twig";
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
        return array (  388 => 184,  368 => 167,  357 => 159,  344 => 158,  328 => 153,  315 => 152,  297 => 144,  288 => 140,  286 => 139,  274 => 132,  266 => 127,  258 => 122,  253 => 120,  249 => 119,  245 => 118,  241 => 117,  238 => 116,  233 => 115,  213 => 97,  200 => 96,  103 => 10,  90 => 9,  67 => 7,  44 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("



{% extends 'front.html.twig' %}

{% block title %}Custom Page Title{% endblock %}

{% block stylesheets %}
    {{ parent() }}
<style> 
/* Body background */
body {
    background-color: #f8f7fa;
}

/* Event Card Style */
.th-product {
    background-color: #ffffff;
    border: 2px solid gold;
    border-radius: 12px;
    transition: all 0.3s ease;
    margin: 10px;
    padding: 10px;
    height: 100%; /* Helps cards be uniform height */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    cursor: pointer;

}

/* Image wrapper to control sizing and spacing */
.product-img {
    overflow: hidden;
    border-radius: 8px;
    margin-bottom: 15px;
}

/* Image style - same height and zoom on hover */
.product-img img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    transition: transform 0.3s ease;
    border-radius: 8px;
    display: block;
}

/* Zoom effect on hover */
.th-product:hover .product-img img {
    transform: scale(1.05);
}

/* Card hover effect */
.th-product:hover {
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    transform: translateY(-5px);
}

  .th-product .product-img::before {
        content: none !important;
        background-color: transparent !important;
        opacity: 0 !important;
        transform: none !important;
        transition: none !important;
        visibility: visible !important;
    }
    
    /* Disable hover state */
    .th-product:hover .product-img::before {
        opacity: 0 !important;
        visibility: hidden !important;
    }
    
    /* Remove any other hover effects */
    .th-product:hover {
        transform: none !important;
        box-shadow: none !important;
    }
        #cartIcon.dragover {
        transform: scale(1.1);
        color: #4CAF50;
    }
    .event-card {
        cursor: grab;
        transition: transform 0.2s;
    }
    
    .event-card:active {
        cursor: grabbing;
    }
</style>
{% endblock %}

{% block content %}
<div class=\"th-cart-wrapper space-top space-extra-bottom\">
    <div class=\"container\">
        <div class=\"card\">
            <h5 class=\"card-header\">My Orders</h5>
            
            <div class=\"card-datatable table-responsive\">
                <table class=\"cart_table\">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Date</th>
                            <th>Number of Events</th>
                            <th>Payment Method</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for payment in payments %}
                        <tr>
                            <td>#{{ payment.id }}</td>
                            <td>{{ payment.createdAt|date('Y-m-d') }}</td>
                            <td>{{ payment.details|length }}</td>
                            <td>{{ payment.paymentMethod|capitalize }}</td>
                            <td>
                                <span class=\"amount text-warning\"><bdi>{{ payment.amount }} €</bdi></span>
                            </td>
                            <td>
                                <div class=\"d-flex gap-2\">
                                    <button class=\"btn btn-danger btn-sm delete-order\" 
                                            data-id=\"{{ payment.id }}\"
                                            title=\"Delete Order\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                    <button class=\"btn btn-warning btn-sm print-invoice\" 
                                            data-id=\"{{ payment.id }}\"
                                            title=\"Print Invoice\">
                                        <i class=\"fas fa-print\"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        {% else %}
                        <tr>
                            <td colspan=\"6\" class=\"text-center py-4\">You have no orders yet</td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{% endblock %}
   {% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js\"></script>
{% endblock %}

{% block inline_scripts %}
{{ parent() }}
<script>
\$(document).ready(function() {
    // Delete order button handler
    \$('.delete-order').click(function() {
        const orderId = \$(this).data('id');
        if (confirm('Are you sure you want to delete this order?')) {
            \$.ajax({
                url: '{{ path(\"app_delete_order\") }}',
                method: 'POST',
                data: { id: orderId },
                success: function(response) {
                    if (response.success) {
                        location.reload();
                    } else {
                        alert('Error: ' + response.error);
                    }
                }
            });
        }
    });
    
    // Print invoice button handler
    \$('.print-invoice').click(function() {
        const orderId = \$(this).data('id');
        window.open('{{ path(\"app_print_invoice\") }}?id=' + orderId, '_blank');
    });
});
</script>
{% endblock %}", "GestionEvent/Commande.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\GestionEvent\\Commande.html.twig");
    }
}
