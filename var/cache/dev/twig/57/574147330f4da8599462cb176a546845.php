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
class __TwigTemplate_75efc3927329f0b191657bd844b1a7c9 extends Template
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
            'content' => [$this, 'block_content'],
            'inline_scripts' => [$this, 'block_inline_scripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionEvent/test.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionEvent/test.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "GestionEvent/test.html.twig", 1);
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

        yield "Custom Page Title";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"custom-content\">
 <section class=\"space-top space-extra-bottom\">
    <div class=\"container\">
        <div class=\"row flex-row-reverse\">
            <!-- 🟦 MAIN CONTENT (EVENTS) -->
            <div class=\"col-xl-9 col-lg-8\">
                <div class=\"th-sort-bar\">
                    <div class=\"row justify-content-between align-items-center\">
                        <div class=\"col-md\">
                            <p class=\"woocommerce-result-count\">
                                Showing ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 16, $this->source); })())), "html", null, true);
        yield " results
                            </p>
                        </div>
                        <div class=\"col-md-auto\">
                            <form class=\"woocommerce-ordering\" method=\"get\">
                                <select name=\"orderby\" class=\"orderby\" aria-label=\"Shop order\">
                                    <option value=\"menu_order\" selected>Default Sorting</option>
                                    <option value=\"date\">Sort by latest</option>
                                    <option value=\"name\">Sort by name</option>
                                    <option value=\"category\">Sort by category</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>

                <div class=\"row gy-40\">
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 34
            yield "                        <div class=\"col-xl-4 col-sm-6\">
                            <a href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\" class=\"text-decoration-none\">

                             <div class=\"th-product event-card\" 
             data-event-id=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 38), "html", null, true);
            yield "\"
             data-categorie=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, false, false, 39), "value", [], "any", false, false, false, 39), "html", null, true);
            yield "\"
             data-date=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 40), "Y-m-d"), "html", null, true);
            yield "\">
                                <div class=\"product-img\">
                                    ";
            // line 42
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "photo", [], "any", false, false, false, 42)) {
                // line 43
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "photo", [], "any", false, false, false, 43))), "html", null, true);
                yield "\" class=\"img-fluid\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 43), "html", null, true);
                yield "\">
                                    ";
            } else {
                // line 45
                yield "                                        <img src=\"assets/img/placeholder.jpg\" class=\"img-fluid\" alt=\"No image\">
                                    ";
            }
            // line 47
            yield "                                </div>
                                <div class=\"product-content\">
                                    <h3 class=\"product-title\">
                                        ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 50), "html", null, true);
            yield "
                                    </h3>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <span class=\"price\">";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 53), "M d, Y"), "html", null, true);
            yield "</span>
                                        <span class=\"event-category\">
                                            ";
            // line 55
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["categoryLabels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, false, false, 55), "value", [], "any", false, false, false, 55), [], "array", true, true, false, 55) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["categoryLabels"]) || array_key_exists("categoryLabels", $context) ? $context["categoryLabels"] : (function () { throw new RuntimeError('Variable "categoryLabels" does not exist.', 55, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, false, false, 55), "value", [], "any", false, false, false, 55), [], "array", false, false, false, 55)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categoryLabels"]) || array_key_exists("categoryLabels", $context) ? $context["categoryLabels"] : (function () { throw new RuntimeError('Variable "categoryLabels" does not exist.', 55, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "categorie", [], "any", false, false, false, 55), "value", [], "any", false, false, false, 55), [], "array", false, false, false, 55), "html", null, true)) : ("General"));
            yield "
                                        </span>
                                    </div>
                                </div>
                            </div>
                                </a>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        // line 62
        if (!$context['_iterated']) {
            // line 63
            yield "                        <div class=\"col-12\">
                            <div class=\"alert alert-info\">No events found</div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "                </div>

                <div class=\"th-pagination text-center pt-50\">
                    <ul>
                        <li><a href=\"blog.html\">1</a></li>
                        <li><a href=\"blog.html\">2</a></li>
                        <li><a href=\"blog.html\">3</a></li>
                        <li><a href=\"blog.html\"><i class=\"far fa-arrow-right\"></i></a></li>
                    </ul>
                </div>
            </div>

            <!-- 🟨 SIDEBAR -->
            <div class=\"col-xl-3 col-lg-4\">
                <aside class=\"sidebar-area sidebar-shop\">
                    <div class=\"widget widget_search\">
                        <form class=\"search-form\">
                            <input type=\"text\" placeholder=\"Search...\">
                            <button type=\"submit\"><i class=\"far fa-search\"></i></button>
                        </form>
                    </div>

                    <div class=\"widget widget_categories\">
                        <h3 class=\"widget_title\">Categories</h3>
                        <ul>
                            <li><a href=\"blog.html\">Business Taxi</a> <span>(8)</span></li>
                            <li><a href=\"blog.html\">Corporate Events</a> <span>(6)</span></li>
                            <li><a href=\"blog.html\">Custom Booking</a> <span>(5)</span></li>
                            <li><a href=\"blog.html\">Traveling</a> <span>(2)</span></li>
                            <li><a href=\"blog.html\">Cab Booking Trips</a> <span>(7)</span></li>
                            <li><a href=\"blog.html\">Hybrid Taxi</a> <span>(9)</span></li>
                        </ul>
                    </div>

                    <div class=\"widget widget_price_filter\">
                        <h4 class=\"widget_title\">Filter By Price</h4>
                        <div class=\"price_slider_wrapper\">
                            <div class=\"price_label\">
                                Price: <span class=\"from\">\$0</span> — <span class=\"to\">\$70</span>
                            </div>
                            <div class=\"price_slider\"></div>
                            <button type=\"submit\" class=\"button\">Filter</button>
                        </div>
                    </div>

                    <div class=\"widget widget_tag_cloud\">
                        <h3 class=\"widget_title\">Popular Tags</h3>
                        <div class=\"tagcloud\">
                            <a href=\"blog.html\">Technology</a>
                            <a href=\"blog.html\">Advice</a>
                            <a href=\"blog.html\">Solution</a>
                            <a href=\"blog.html\">Consultion</a>
                            <a href=\"blog.html\">Business</a>
                            <a href=\"blog.html\">IT-Services</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 145
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

        // line 146
        yield from $this->yieldParentBlock("inline_scripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Function to update cart count from server
    async function updateCartCount() {
        try {
            const response = await fetch('";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_count");
        yield "');
            const data = await response.json();
            document.querySelector('.badge').textContent = data.count;
        } catch (error) {
            console.error('Error updating cart count:', error);
        }
    }

    // Initial cart count update
    updateCartCount();

    // Make event cards draggable
    document.querySelectorAll('.event-card').forEach(card => {
        card.draggable = true;
        
        card.addEventListener('dragstart', (e) => {
            const eventData = {
                idEvent: card.dataset.eventId,
                categorie: card.dataset.categorie,
                date: card.dataset.date
            };
            e.dataTransfer.setData('application/json', JSON.stringify(eventData));
        });
    });

    // Handle drop on shopping bag
    const shoppingBag = document.querySelector('#cartIcon');
    
    shoppingBag.addEventListener('dragover', (e) => {
        e.preventDefault();
    });

    shoppingBag.addEventListener('drop', async (e) => {
        e.preventDefault();
        const eventData = JSON.parse(e.dataTransfer.getData('application/json'));
        
        try {
            const response = await fetch('";
        // line 189
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_add");
        yield "', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(eventData)
            });

            // Handle non-JSON responses
            const responseText = await response.text();
            let result;
            try {
                result = JSON.parse(responseText);
            } catch {
                throw new Error('Invalid server response');
            }

            if (result.success) {
                // Update cart count immediately
                const countResponse = await fetch('";
        // line 208
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_count");
        yield "');
                const countData = await countResponse.json();
                document.querySelector('.badge').textContent = countData.count;

                // Find and remove the card
                const cardToRemove = document.querySelector(
                    `.event-card[data-event-id=\"\${eventData.idEvent}\"]`
                );
                
                if (cardToRemove) {
                    const columnParent = cardToRemove.closest('.col-xl-4');
                    columnParent.style.transition = 'all 0.3s ease';
                    columnParent.style.opacity = '0';
                    columnParent.style.transform = 'translateY(20px)';
                    
                    setTimeout(() => {
                        columnParent.remove();
                        // Update layout after removal
                        const row = document.querySelector('.row.gy-40');
                        if (row) {
                            row.style.display = 'none';
                            row.offsetHeight; // Trigger reflow
                            row.style.display = '';
                        }
                    }, 300);
                }
            } else {
                alert('Error: ' + (result.message || 'Failed to add to cart'));
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Failed to add to cart: ' + error.message);
        }
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
        return array (  370 => 208,  348 => 189,  308 => 152,  299 => 146,  286 => 145,  213 => 67,  204 => 63,  202 => 62,  190 => 55,  185 => 53,  179 => 50,  174 => 47,  170 => 45,  162 => 43,  160 => 42,  155 => 40,  151 => 39,  147 => 38,  141 => 35,  138 => 34,  133 => 33,  113 => 16,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front.html.twig' %}

{% block title %}Custom Page Title{% endblock %}

{% block content %}
<div class=\"custom-content\">
 <section class=\"space-top space-extra-bottom\">
    <div class=\"container\">
        <div class=\"row flex-row-reverse\">
            <!-- 🟦 MAIN CONTENT (EVENTS) -->
            <div class=\"col-xl-9 col-lg-8\">
                <div class=\"th-sort-bar\">
                    <div class=\"row justify-content-between align-items-center\">
                        <div class=\"col-md\">
                            <p class=\"woocommerce-result-count\">
                                Showing {{ events|length }} results
                            </p>
                        </div>
                        <div class=\"col-md-auto\">
                            <form class=\"woocommerce-ordering\" method=\"get\">
                                <select name=\"orderby\" class=\"orderby\" aria-label=\"Shop order\">
                                    <option value=\"menu_order\" selected>Default Sorting</option>
                                    <option value=\"date\">Sort by latest</option>
                                    <option value=\"name\">Sort by name</option>
                                    <option value=\"category\">Sort by category</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>

                <div class=\"row gy-40\">
                    {% for event in events %}
                        <div class=\"col-xl-4 col-sm-6\">
                            <a href=\"{{ path('event_show', {'id': event.id}) }}\" class=\"text-decoration-none\">

                             <div class=\"th-product event-card\" 
             data-event-id=\"{{ event.id }}\"
             data-categorie=\"{{ event.categorie.value }}\"
             data-date=\"{{ event.date|date('Y-m-d') }}\">
                                <div class=\"product-img\">
                                    {% if event.photo %}
                                        <img src=\"{{ asset('uploads/' ~ event.photo) }}\" class=\"img-fluid\" alt=\"{{ event.nom }}\">
                                    {% else %}
                                        <img src=\"assets/img/placeholder.jpg\" class=\"img-fluid\" alt=\"No image\">
                                    {% endif %}
                                </div>
                                <div class=\"product-content\">
                                    <h3 class=\"product-title\">
                                        {{ event.nom }}
                                    </h3>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <span class=\"price\">{{ event.date|date('M d, Y') }}</span>
                                        <span class=\"event-category\">
                                            {{ categoryLabels[event.categorie.value] ?? 'General' }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                                </a>
                        </div>
                    {% else %}
                        <div class=\"col-12\">
                            <div class=\"alert alert-info\">No events found</div>
                        </div>
                    {% endfor %}
                </div>

                <div class=\"th-pagination text-center pt-50\">
                    <ul>
                        <li><a href=\"blog.html\">1</a></li>
                        <li><a href=\"blog.html\">2</a></li>
                        <li><a href=\"blog.html\">3</a></li>
                        <li><a href=\"blog.html\"><i class=\"far fa-arrow-right\"></i></a></li>
                    </ul>
                </div>
            </div>

            <!-- 🟨 SIDEBAR -->
            <div class=\"col-xl-3 col-lg-4\">
                <aside class=\"sidebar-area sidebar-shop\">
                    <div class=\"widget widget_search\">
                        <form class=\"search-form\">
                            <input type=\"text\" placeholder=\"Search...\">
                            <button type=\"submit\"><i class=\"far fa-search\"></i></button>
                        </form>
                    </div>

                    <div class=\"widget widget_categories\">
                        <h3 class=\"widget_title\">Categories</h3>
                        <ul>
                            <li><a href=\"blog.html\">Business Taxi</a> <span>(8)</span></li>
                            <li><a href=\"blog.html\">Corporate Events</a> <span>(6)</span></li>
                            <li><a href=\"blog.html\">Custom Booking</a> <span>(5)</span></li>
                            <li><a href=\"blog.html\">Traveling</a> <span>(2)</span></li>
                            <li><a href=\"blog.html\">Cab Booking Trips</a> <span>(7)</span></li>
                            <li><a href=\"blog.html\">Hybrid Taxi</a> <span>(9)</span></li>
                        </ul>
                    </div>

                    <div class=\"widget widget_price_filter\">
                        <h4 class=\"widget_title\">Filter By Price</h4>
                        <div class=\"price_slider_wrapper\">
                            <div class=\"price_label\">
                                Price: <span class=\"from\">\$0</span> — <span class=\"to\">\$70</span>
                            </div>
                            <div class=\"price_slider\"></div>
                            <button type=\"submit\" class=\"button\">Filter</button>
                        </div>
                    </div>

                    <div class=\"widget widget_tag_cloud\">
                        <h3 class=\"widget_title\">Popular Tags</h3>
                        <div class=\"tagcloud\">
                            <a href=\"blog.html\">Technology</a>
                            <a href=\"blog.html\">Advice</a>
                            <a href=\"blog.html\">Solution</a>
                            <a href=\"blog.html\">Consultion</a>
                            <a href=\"blog.html\">Business</a>
                            <a href=\"blog.html\">IT-Services</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
</div>
{% endblock %}















{% block inline_scripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Function to update cart count from server
    async function updateCartCount() {
        try {
            const response = await fetch('{{ path('app_panier_count') }}');
            const data = await response.json();
            document.querySelector('.badge').textContent = data.count;
        } catch (error) {
            console.error('Error updating cart count:', error);
        }
    }

    // Initial cart count update
    updateCartCount();

    // Make event cards draggable
    document.querySelectorAll('.event-card').forEach(card => {
        card.draggable = true;
        
        card.addEventListener('dragstart', (e) => {
            const eventData = {
                idEvent: card.dataset.eventId,
                categorie: card.dataset.categorie,
                date: card.dataset.date
            };
            e.dataTransfer.setData('application/json', JSON.stringify(eventData));
        });
    });

    // Handle drop on shopping bag
    const shoppingBag = document.querySelector('#cartIcon');
    
    shoppingBag.addEventListener('dragover', (e) => {
        e.preventDefault();
    });

    shoppingBag.addEventListener('drop', async (e) => {
        e.preventDefault();
        const eventData = JSON.parse(e.dataTransfer.getData('application/json'));
        
        try {
            const response = await fetch('{{ path('app_panier_add') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(eventData)
            });

            // Handle non-JSON responses
            const responseText = await response.text();
            let result;
            try {
                result = JSON.parse(responseText);
            } catch {
                throw new Error('Invalid server response');
            }

            if (result.success) {
                // Update cart count immediately
                const countResponse = await fetch('{{ path('app_panier_count') }}');
                const countData = await countResponse.json();
                document.querySelector('.badge').textContent = countData.count;

                // Find and remove the card
                const cardToRemove = document.querySelector(
                    `.event-card[data-event-id=\"\${eventData.idEvent}\"]`
                );
                
                if (cardToRemove) {
                    const columnParent = cardToRemove.closest('.col-xl-4');
                    columnParent.style.transition = 'all 0.3s ease';
                    columnParent.style.opacity = '0';
                    columnParent.style.transform = 'translateY(20px)';
                    
                    setTimeout(() => {
                        columnParent.remove();
                        // Update layout after removal
                        const row = document.querySelector('.row.gy-40');
                        if (row) {
                            row.style.display = 'none';
                            row.offsetHeight; // Trigger reflow
                            row.style.display = '';
                        }
                    }, 300);
                }
            } else {
                alert('Error: ' + (result.message || 'Failed to add to cart'));
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Failed to add to cart: ' + error.message);
        }
    });
});
</script>
{% endblock %}", "GestionEvent/test.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\GestionEvent\\test.html.twig");
    }
}
