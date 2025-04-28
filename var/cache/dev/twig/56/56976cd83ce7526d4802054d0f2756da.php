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

/* GestionEvent/Panier.html.twig */
class __TwigTemplate_5335a535a5f5c0721ba0e6a754708366 extends Template
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
        // line 3
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionEvent/Panier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionEvent/Panier.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "GestionEvent/Panier.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

    // line 7
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

        // line 8
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
    .stripe-element {
    transition: border-color 0.3s ease;
    height: 48px;
    padding: 12px 16px;
}

.stripe-element--focus {
    border-color: #0d6efd !important;
    box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.25);
}

.stripe-element--invalid {
    border-color: #dc3545 !important;
}

.invalid-feedback {
    display: block;
    margin-top: 4px;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 113
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

        // line 114
        yield "

<div class=\"th-cart-wrapper space-top space-extra-bottom\">
    <div class=\"container\">
        <div class=\"woocommerce-notices-wrapper\"></div>
        
        <div class=\"card\">
            <h5 class=\"card-header\">Your Shopping Cart</h5>
            
            <div class=\"card-datatable table-responsive\">
                <table class=\"cart_table\">
                    <thead>
                        <tr>
                            <th class=\"cart-col-image\">Event</th>
                            <th class=\"cart-col-productname\">Category</th>
                            <th class=\"cart-col-price\">Type</th>
                            <th class=\"cart-col-quantity\">Date</th>
                            <th class=\"cart-col-total\">Price</th>
                            <th class=\"cart-col-remove\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["panierItems"]) || array_key_exists("panierItems", $context) ? $context["panierItems"] : (function () { throw new RuntimeError('Variable "panierItems" does not exist.', 136, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 137
            yield "                        <tr class=\"cart_item\">
                            <td data-title=\"Event\">
                                <div class=\"d-flex align-items-center\">
                                    ";
            // line 140
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 140), "photo", [], "any", false, false, false, 140)) {
                // line 141
                yield "       <a class=\"cart-productimage me-3\" href=\"#\" style=\"
            width: 100px;
            height: 100px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        \">                       
                 <img style=\"
                max-width: 100%;
                max-height: 100%;
                object-fit: cover;
            \" src=\"";
                // line 154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 154), "photo", [], "any", false, false, false, 154))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 154), "nom", [], "any", false, false, false, 154), "html", null, true);
                yield "\">
        </a>
                                    ";
            }
            // line 157
            yield "                                    <a class=\"cart-productname\" href=\"#\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "event", [], "any", false, false, false, 157), "nom", [], "any", false, false, false, 157), "html", null, true);
            yield "</a>
                                </div>
                            </td>
                            <td data-title=\"Category\">";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "categorie", [], "any", false, false, false, 160), "html", null, true);
            yield "</td>
                            <td data-title=\"Type\">";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "typeEvent", [], "any", false, false, false, 161), "html", null, true);
            yield "</td>
                            <td data-title=\"Date\">";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "date", [], "any", false, false, false, 162), "Y-m-d"), "html", null, true);
            yield "</td>
                            <td data-title=\"Price\">
                                <span class=\"amount text-warning\"><bdi>";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 164), "html", null, true);
            yield " TND</bdi></span>
                            </td>
                            <td data-title=\"Actions\">
                                <button class=\"btn btn-danger btn-sm remove-from-cart\" 
                                        data-id=\"";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 168), "html", null, true);
            yield "\">
                                    <i class=\"fas fa-trash\"></i> Remove
                                </button>
                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 173
        if (!$context['_iterated']) {
            // line 174
            yield "                        <tr>
                            <td colspan=\"6\" class=\"text-center py-4\">Your cart is empty</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        yield "                    </tbody>
                    <tfoot>
                        <tr class=\"order-total\">
                            <td colspan=\"4\" class=\"text-end\"><strong>Total:</strong></td>
                            <td colspan=\"2\">
                                <strong>
                                    <span class=\"amount text-warning\"><bdi>";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 184, $this->source); })()), "html", null, true);
        yield " TND</bdi></span>
                                </strong>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=\"6\" class=\"text-end\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <button class=\"btn btn-outline-danger\" id=\"clear-cart\">
                                        <i class=\"fas fa-broom\"></i> Clear Cart
                                    </button>
                                    <div class=\"d-flex gap-2\">
                                        <a href=\"";
        // line 195
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_draft_events");
        yield "\" class=\"th-btn\">
                                            Continue Shopping
                                        </a>
                                        <button class=\"th-btn btn-warning\" 
                                                data-bs-toggle=\"modal\" 
                                                data-bs-target=\"#checkoutModal\">
                                            <i class=\"fas fa-shopping-bag\"></i> Checkout
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

   <!-- Checkout Modal -->
<div class=\"modal fade\" id=\"checkoutModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <!-- Modal Header -->
        <div class=\"modal-header bg-warning text-white\">
    <h5 class=\"modal-title fs-4\">Passerelle de Paiement Sécurisée</h5>
    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
</div>

            <!-- Modal Body -->
            <div class=\"modal-body p-5\">
    <!-- Payment Summary -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h5 class=\"mb-0\">Montant total :</h5>
        <h3 class=\"mb-0 text-warning\">";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 227, $this->source); })()), "html", null, true);
        yield " TND</h3>
    </div>

    <!-- Payment Form -->
    <form id=\"payment-form\" class=\"needs-validation\" novalidate>
    <!-- Card Number -->
    <div class=\"mb-4\">
        <label for=\"card-number\" class=\"form-label fw-medium\">Numéro de carte</label>
        <div id=\"card-number\" class=\"stripe-element form-control p-3 border-2\"></div>
        <div class=\"invalid-feedback d-none\" id=\"card-number-error\"></div>
    </div>

    <!-- Card Details Row -->
    <div class=\"row g-4 mb-4\">
        <!-- Expiry Date -->
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                <label for=\"card-expiry\" class=\"form-label fw-medium\">Date d'expiration</label>
                <div id=\"card-expiry\" class=\"stripe-element form-control p-3 border-2\"></div>
                <div class=\"invalid-feedback d-none\" id=\"card-expiry-error\"></div>
            </div>
        </div>

        <!-- CVC -->
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                <label for=\"card-cvc\" class=\"form-label fw-medium\">Cryptogramme (CVC/CVV)</label>
                <div id=\"card-cvc\" class=\"stripe-element form-control p-3 border-2\"></div>
                <div class=\"invalid-feedback d-none\" id=\"card-cvc-error\"></div>
            </div>
        </div>
    </div>

        <!-- Payment Button -->
        <div class=\"d-grid gap-3 mt-5\">
            <button type=\"submit\" class=\"btn btn-warning btn-lg py-3 fw-bold\" id=\"submit\">
                <span id=\"button-text\">Confirmer le paiement</span>
                <div id=\"spinner\" class=\"spinner-border spinner-border-sm d-none ms-2\"></div>
            </button>
            <div id=\"card-errors\" class=\"text-danger small text-center\"></div>
        </div>
    </form>

    <!-- Security Assurance -->
    <div class=\"mt-4 text-center\">
        <p class=\"text-muted small mb-2\">
            <i class=\"bi bi-lock-fill text-success\"></i> Votre paiement est sécurisé et chiffré
        </p>
    </div>
</div>
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

    // line 287
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

        // line 288
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

    // line 293
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

        // line 294
        yield from $this->yieldParentBlock("inline_scripts", $context, $blocks);
        yield "
<script>

document.addEventListener('DOMContentLoaded', function() {
    // Remove item from cart
    document.querySelectorAll('.remove-from-cart').forEach(button => {
        button.addEventListener('click', function() {
            const itemId = this.getAttribute('data-id');
            
            fetch('/panier/remove/' + itemId, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.reload();
                }
            });
        });
    });
    
    // Clear cart
    document.getElementById('clear-cart').addEventListener('click', function() {
        if (confirm('Are you sure you want to clear your cart?')) {
            fetch('/panier/clear', {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.reload();
                }
            });
        }
    });
    
    // Checkout
    document.getElementById('checkout').addEventListener('click', function() {
        window.location.href = '/checkout';
    });
});






// Initialize Stripe
const stripe = Stripe('pk_test_51QvjqJKNitkaIcyAlpIsRTNgLfBCjUiuYOiSMDcA5CH4JKv3hLHmLdRch010MMUgFxfNN2I5SiVfo6aQjlpvFjgO00ccWNwlhS');
const elements = stripe.elements();

// Create card elements with minimal styling
const cardOptions = {
  style: {
    base: {
      fontSize: '16px',
      color: '#32325d',
      '::placeholder': {
        color: '#aab7c4'
      }
    },
    invalid: {
      color: '#fa755a'
    }
  }
};

const cardNumber = elements.create('cardNumber', cardOptions);
const cardExpiry = elements.create('cardExpiry', cardOptions);
const cardCvc = elements.create('cardCvc', cardOptions);

// Mount elements to the respective divs
cardNumber.mount('#card-number');
cardExpiry.mount('#card-expiry');
cardCvc.mount('#card-cvc');
const errorMessages = {
    cardNumber: 'Veuillez entrer un numéro de carte valide',
    cardExpiry: 'Veuillez entrer la date d\\'expiration',
    cardCvc: 'Code de sécurité requis'
};

// Add event listeners to clear errors when fixing
[cardNumber, cardExpiry, cardCvc].forEach(element => {
    element.on('change', (event) => {
        const errorDiv = document.getElementById(`\${event.elementType}-error`);
        if (event.complete || !event.empty) {
            errorDiv.classList.add('d-none');
            document.getElementById('card-errors').textContent = '';
        }
    });
});
// Handle form submission
document.getElementById('payment-form').addEventListener('submit', async (e) => {
    e.preventDefault();
    
    // Clear previous errors
    document.querySelectorAll('.invalid-feedback').forEach(el => {
        el.classList.add('d-none');
        el.textContent = '';
    });
    document.getElementById('card-errors').textContent = '';

    // Show processing state
    document.getElementById('spinner').classList.remove('d-none');
    document.getElementById('button-text').textContent = 'Traitement en cours...';

    // Use Stripe's validation instead of manual checks
    const {error, paymentMethod} = await stripe.createPaymentMethod({
        type: 'card',
        card: cardNumber,
    });

    if (error) {
        // Handle Stripe validation errors
        const errorMessages = {
            'incomplete_number': 'Numéro de carte incomplet',
            'invalid_number': 'Numéro de carte invalide',
            'incomplete_expiry': 'Date d\\'expiration incomplète',
            'invalid_expiry_year': 'Année d\\'expiration invalide',
            'incomplete_cvc': 'Code de sécurité incomplet',
            'incorrect_cvc': 'Code de sécurité incorrect'
        };

        const errorDiv = document.getElementById(`\${error.elementType}-error`);
        if (errorDiv) {
            errorDiv.textContent = errorMessages[error.code] || error.message;
            errorDiv.classList.remove('d-none');
        } else {
            document.getElementById('card-errors').textContent = error.message;
        }

        document.getElementById('spinner').classList.add('d-none');
        document.getElementById('button-text').textContent = 'Confirmer le paiement';
    } else {
        // Process payment with server
        fetch('/process-payment', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                paymentMethodId: paymentMethod.id,
                amount: Math.round(parseFloat('";
        // line 443
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 443, $this->source); })()), "html", null, true);
        yield "') * 100),
            }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
    window.location.href = '/MyCommandes'; // Refresh the cart page
            } else {
                document.getElementById('card-errors').textContent = data.error || 'Erreur de paiement';
            }
        })
        .catch(error => {
            document.getElementById('card-errors').textContent = 'Erreur de connexion au serveur';
        })
        .finally(() => {
            document.getElementById('spinner').classList.add('d-none');
            document.getElementById('button-text').textContent = 'Confirmer le paiement';
        });
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
        return "GestionEvent/Panier.html.twig";
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
        return array (  661 => 443,  509 => 294,  496 => 293,  480 => 288,  467 => 287,  396 => 227,  361 => 195,  347 => 184,  339 => 178,  330 => 174,  328 => 173,  318 => 168,  311 => 164,  306 => 162,  302 => 161,  298 => 160,  291 => 157,  283 => 154,  268 => 141,  266 => 140,  261 => 137,  256 => 136,  232 => 114,  219 => 113,  103 => 8,  90 => 7,  67 => 5,  44 => 3,);
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
    .stripe-element {
    transition: border-color 0.3s ease;
    height: 48px;
    padding: 12px 16px;
}

.stripe-element--focus {
    border-color: #0d6efd !important;
    box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.25);
}

.stripe-element--invalid {
    border-color: #dc3545 !important;
}

.invalid-feedback {
    display: block;
    margin-top: 4px;
}
</style>
{% endblock %}

{% block content %}


<div class=\"th-cart-wrapper space-top space-extra-bottom\">
    <div class=\"container\">
        <div class=\"woocommerce-notices-wrapper\"></div>
        
        <div class=\"card\">
            <h5 class=\"card-header\">Your Shopping Cart</h5>
            
            <div class=\"card-datatable table-responsive\">
                <table class=\"cart_table\">
                    <thead>
                        <tr>
                            <th class=\"cart-col-image\">Event</th>
                            <th class=\"cart-col-productname\">Category</th>
                            <th class=\"cart-col-price\">Type</th>
                            <th class=\"cart-col-quantity\">Date</th>
                            <th class=\"cart-col-total\">Price</th>
                            <th class=\"cart-col-remove\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in panierItems %}
                        <tr class=\"cart_item\">
                            <td data-title=\"Event\">
                                <div class=\"d-flex align-items-center\">
                                    {% if item.event.photo %}
       <a class=\"cart-productimage me-3\" href=\"#\" style=\"
            width: 100px;
            height: 100px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        \">                       
                 <img style=\"
                max-width: 100%;
                max-height: 100%;
                object-fit: cover;
            \" src=\"{{ asset('uploads/packs/' ~ item.event.photo) }}\" alt=\"{{ item.event.nom }}\">
        </a>
                                    {% endif %}
                                    <a class=\"cart-productname\" href=\"#\">{{ item.event.nom }}</a>
                                </div>
                            </td>
                            <td data-title=\"Category\">{{ item.categorie }}</td>
                            <td data-title=\"Type\">{{ item.typeEvent }}</td>
                            <td data-title=\"Date\">{{ item.date|date('Y-m-d') }}</td>
                            <td data-title=\"Price\">
                                <span class=\"amount text-warning\"><bdi>{{ item.price }} TND</bdi></span>
                            </td>
                            <td data-title=\"Actions\">
                                <button class=\"btn btn-danger btn-sm remove-from-cart\" 
                                        data-id=\"{{ item.id }}\">
                                    <i class=\"fas fa-trash\"></i> Remove
                                </button>
                            </td>
                        </tr>
                        {% else %}
                        <tr>
                            <td colspan=\"6\" class=\"text-center py-4\">Your cart is empty</td>
                        </tr>
                        {% endfor %}
                    </tbody>
                    <tfoot>
                        <tr class=\"order-total\">
                            <td colspan=\"4\" class=\"text-end\"><strong>Total:</strong></td>
                            <td colspan=\"2\">
                                <strong>
                                    <span class=\"amount text-warning\"><bdi>{{ total }} TND</bdi></span>
                                </strong>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=\"6\" class=\"text-end\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <button class=\"btn btn-outline-danger\" id=\"clear-cart\">
                                        <i class=\"fas fa-broom\"></i> Clear Cart
                                    </button>
                                    <div class=\"d-flex gap-2\">
                                        <a href=\"{{ path('app_draft_events') }}\" class=\"th-btn\">
                                            Continue Shopping
                                        </a>
                                        <button class=\"th-btn btn-warning\" 
                                                data-bs-toggle=\"modal\" 
                                                data-bs-target=\"#checkoutModal\">
                                            <i class=\"fas fa-shopping-bag\"></i> Checkout
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

   <!-- Checkout Modal -->
<div class=\"modal fade\" id=\"checkoutModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <!-- Modal Header -->
        <div class=\"modal-header bg-warning text-white\">
    <h5 class=\"modal-title fs-4\">Passerelle de Paiement Sécurisée</h5>
    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
</div>

            <!-- Modal Body -->
            <div class=\"modal-body p-5\">
    <!-- Payment Summary -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h5 class=\"mb-0\">Montant total :</h5>
        <h3 class=\"mb-0 text-warning\">{{ total }} TND</h3>
    </div>

    <!-- Payment Form -->
    <form id=\"payment-form\" class=\"needs-validation\" novalidate>
    <!-- Card Number -->
    <div class=\"mb-4\">
        <label for=\"card-number\" class=\"form-label fw-medium\">Numéro de carte</label>
        <div id=\"card-number\" class=\"stripe-element form-control p-3 border-2\"></div>
        <div class=\"invalid-feedback d-none\" id=\"card-number-error\"></div>
    </div>

    <!-- Card Details Row -->
    <div class=\"row g-4 mb-4\">
        <!-- Expiry Date -->
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                <label for=\"card-expiry\" class=\"form-label fw-medium\">Date d'expiration</label>
                <div id=\"card-expiry\" class=\"stripe-element form-control p-3 border-2\"></div>
                <div class=\"invalid-feedback d-none\" id=\"card-expiry-error\"></div>
            </div>
        </div>

        <!-- CVC -->
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                <label for=\"card-cvc\" class=\"form-label fw-medium\">Cryptogramme (CVC/CVV)</label>
                <div id=\"card-cvc\" class=\"stripe-element form-control p-3 border-2\"></div>
                <div class=\"invalid-feedback d-none\" id=\"card-cvc-error\"></div>
            </div>
        </div>
    </div>

        <!-- Payment Button -->
        <div class=\"d-grid gap-3 mt-5\">
            <button type=\"submit\" class=\"btn btn-warning btn-lg py-3 fw-bold\" id=\"submit\">
                <span id=\"button-text\">Confirmer le paiement</span>
                <div id=\"spinner\" class=\"spinner-border spinner-border-sm d-none ms-2\"></div>
            </button>
            <div id=\"card-errors\" class=\"text-danger small text-center\"></div>
        </div>
    </form>

    <!-- Security Assurance -->
    <div class=\"mt-4 text-center\">
        <p class=\"text-muted small mb-2\">
            <i class=\"bi bi-lock-fill text-success\"></i> Votre paiement est sécurisé et chiffré
        </p>
    </div>
</div>
</div>
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

document.addEventListener('DOMContentLoaded', function() {
    // Remove item from cart
    document.querySelectorAll('.remove-from-cart').forEach(button => {
        button.addEventListener('click', function() {
            const itemId = this.getAttribute('data-id');
            
            fetch('/panier/remove/' + itemId, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.reload();
                }
            });
        });
    });
    
    // Clear cart
    document.getElementById('clear-cart').addEventListener('click', function() {
        if (confirm('Are you sure you want to clear your cart?')) {
            fetch('/panier/clear', {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.reload();
                }
            });
        }
    });
    
    // Checkout
    document.getElementById('checkout').addEventListener('click', function() {
        window.location.href = '/checkout';
    });
});






// Initialize Stripe
const stripe = Stripe('pk_test_51QvjqJKNitkaIcyAlpIsRTNgLfBCjUiuYOiSMDcA5CH4JKv3hLHmLdRch010MMUgFxfNN2I5SiVfo6aQjlpvFjgO00ccWNwlhS');
const elements = stripe.elements();

// Create card elements with minimal styling
const cardOptions = {
  style: {
    base: {
      fontSize: '16px',
      color: '#32325d',
      '::placeholder': {
        color: '#aab7c4'
      }
    },
    invalid: {
      color: '#fa755a'
    }
  }
};

const cardNumber = elements.create('cardNumber', cardOptions);
const cardExpiry = elements.create('cardExpiry', cardOptions);
const cardCvc = elements.create('cardCvc', cardOptions);

// Mount elements to the respective divs
cardNumber.mount('#card-number');
cardExpiry.mount('#card-expiry');
cardCvc.mount('#card-cvc');
const errorMessages = {
    cardNumber: 'Veuillez entrer un numéro de carte valide',
    cardExpiry: 'Veuillez entrer la date d\\'expiration',
    cardCvc: 'Code de sécurité requis'
};

// Add event listeners to clear errors when fixing
[cardNumber, cardExpiry, cardCvc].forEach(element => {
    element.on('change', (event) => {
        const errorDiv = document.getElementById(`\${event.elementType}-error`);
        if (event.complete || !event.empty) {
            errorDiv.classList.add('d-none');
            document.getElementById('card-errors').textContent = '';
        }
    });
});
// Handle form submission
document.getElementById('payment-form').addEventListener('submit', async (e) => {
    e.preventDefault();
    
    // Clear previous errors
    document.querySelectorAll('.invalid-feedback').forEach(el => {
        el.classList.add('d-none');
        el.textContent = '';
    });
    document.getElementById('card-errors').textContent = '';

    // Show processing state
    document.getElementById('spinner').classList.remove('d-none');
    document.getElementById('button-text').textContent = 'Traitement en cours...';

    // Use Stripe's validation instead of manual checks
    const {error, paymentMethod} = await stripe.createPaymentMethod({
        type: 'card',
        card: cardNumber,
    });

    if (error) {
        // Handle Stripe validation errors
        const errorMessages = {
            'incomplete_number': 'Numéro de carte incomplet',
            'invalid_number': 'Numéro de carte invalide',
            'incomplete_expiry': 'Date d\\'expiration incomplète',
            'invalid_expiry_year': 'Année d\\'expiration invalide',
            'incomplete_cvc': 'Code de sécurité incomplet',
            'incorrect_cvc': 'Code de sécurité incorrect'
        };

        const errorDiv = document.getElementById(`\${error.elementType}-error`);
        if (errorDiv) {
            errorDiv.textContent = errorMessages[error.code] || error.message;
            errorDiv.classList.remove('d-none');
        } else {
            document.getElementById('card-errors').textContent = error.message;
        }

        document.getElementById('spinner').classList.add('d-none');
        document.getElementById('button-text').textContent = 'Confirmer le paiement';
    } else {
        // Process payment with server
        fetch('/process-payment', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                paymentMethodId: paymentMethod.id,
                amount: Math.round(parseFloat('{{ total }}') * 100),
            }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
    window.location.href = '/MyCommandes'; // Refresh the cart page
            } else {
                document.getElementById('card-errors').textContent = data.error || 'Erreur de paiement';
            }
        })
        .catch(error => {
            document.getElementById('card-errors').textContent = 'Erreur de connexion au serveur';
        })
        .finally(() => {
            document.getElementById('spinner').classList.add('d-none');
            document.getElementById('button-text').textContent = 'Confirmer le paiement';
        });
    }
});
</script>
{% endblock %}", "GestionEvent/Panier.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\GestionEvent\\Panier.html.twig");
    }
}
