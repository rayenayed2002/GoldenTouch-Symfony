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

/* pack/_pack_list.html.twig */
class __TwigTemplate_e11ca0af273f69308f7de6aa5820a4bf extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pack/_pack_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pack/_pack_list.html.twig"));

        // line 1
        yield "<div class=\"row gy-40\">
    ";
        // line 2
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 2, $this->source); })())) == 0)) {
            // line 3
            yield "        <div class=\"col-12\">
            <div class=\"alert alert-warning\">Aucun pack trouvé pour votre recherche.</div>
        </div>
    ";
        } else {
            // line 7
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pack"]) {
                // line 8
                yield "        <div class=\"col-xl-4 col-sm-6\">
            <div class=\"th-product\">
                <div class=\"product-img\">
                    ";
                // line 11
                if (CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "getPhoto", [], "method", false, false, false, 11)) {
                    // line 12
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "getPhoto", [], "method", false, false, false, 12))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "getNom", [], "method", false, false, false, 12), "html", null, true);
                    yield "\">
                    ";
                } else {
                    // line 14
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/placeholder.jpg"), "html", null, true);
                    yield "\" alt=\"Image du pack\">
                    ";
                }
                // line 16
                yield "                    <div class=\"actions\">
                        <a href=\"";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_shop_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 17)]), "html", null, true);
                yield "\" class=\"icon-btn\"><i class=\"far fa-eye\"></i></a>
                        <a href=\"";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_booking", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 18)]), "html", null, true);
                yield "\" class=\"icon-btn\"><i class=\"far fa-cart-plus\"></i></a>
                        <a href=\"#\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                    </div>
                </div>
                <div class=\"product-content\">
                    <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5.00 sur 5\">
                        <span>Note : <strong class=\"rating\">5.00</strong>/5</span>
                    </div>
                    <h3 class=\"product-title\"><a href=\"";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_shop_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "nom", [], "any", false, false, false, 26), "html", null, true);
                yield "</a></h3>
                    <div class=\"pack-meta\">
                        <span class=\"price\">";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "getPrix", [], "method", false, false, false, 28), 2, ".", ""), "html", null, true);
                yield "&nbsp;€</span>
                        <span class=\"pack-capacity\"><i class=\"fas fa-users\"></i> ";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "capacite", [], "any", false, false, false, 29), "html", null, true);
                yield " personnes</span>
                    </div>
                </div>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['pack'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "    ";
        }
        // line 36
        yield "</div>

<div class=\"th-pagination text-center pt-50\">
    <ul>
        ";
        // line 40
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["packs"] ?? null), "pageCount", [], "any", true, true, false, 40) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 40, $this->source); })()), "pageCount", [], "any", false, false, false, 40) > 1))) {
            // line 41
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["packs"] ?? null), "currentPageNumber", [], "any", true, true, false, 41) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 41, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 41) != 1))) {
                // line 42
                yield "                <li>
                    <a href=\"";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source,                 // line 44
(isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 44, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 44) - 1), "category" =>                 // line 45
(isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 45, $this->source); })()), "minPrice" =>                 // line 46
(isset($context["minPrice"]) || array_key_exists("minPrice", $context) ? $context["minPrice"] : (function () { throw new RuntimeError('Variable "minPrice" does not exist.', 46, $this->source); })()), "maxPrice" =>                 // line 47
(isset($context["maxPrice"]) || array_key_exists("maxPrice", $context) ? $context["maxPrice"] : (function () { throw new RuntimeError('Variable "maxPrice" does not exist.', 47, $this->source); })())]), "html", null, true);
                // line 48
                yield "\">
                        <i class=\"far fa-arrow-left\"></i>
                    </a>
                </li>
            ";
            }
            // line 53
            yield "
            ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 54, $this->source); })()), "pageCount", [], "any", false, false, false, 54)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 55
                yield "                <li";
                if (($context["i"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 55, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 55))) {
                    yield " class=\"active\"";
                }
                yield ">
                    <a href=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index", ["page" =>                 // line 57
$context["i"], "category" =>                 // line 58
(isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 58, $this->source); })()), "minPrice" =>                 // line 59
(isset($context["minPrice"]) || array_key_exists("minPrice", $context) ? $context["minPrice"] : (function () { throw new RuntimeError('Variable "minPrice" does not exist.', 59, $this->source); })()), "maxPrice" =>                 // line 60
(isset($context["maxPrice"]) || array_key_exists("maxPrice", $context) ? $context["maxPrice"] : (function () { throw new RuntimeError('Variable "maxPrice" does not exist.', 60, $this->source); })())]), "html", null, true);
                // line 61
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            yield "
            ";
            // line 65
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["packs"] ?? null), "currentPageNumber", [], "any", true, true, false, 65) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 65, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 65) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 65, $this->source); })()), "pageCount", [], "any", false, false, false, 65)))) {
                // line 66
                yield "                <li>
                    <a href=\"";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source,                 // line 68
(isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 68, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 68) + 1), "category" =>                 // line 69
(isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 69, $this->source); })()), "minPrice" =>                 // line 70
(isset($context["minPrice"]) || array_key_exists("minPrice", $context) ? $context["minPrice"] : (function () { throw new RuntimeError('Variable "minPrice" does not exist.', 70, $this->source); })()), "maxPrice" =>                 // line 71
(isset($context["maxPrice"]) || array_key_exists("maxPrice", $context) ? $context["maxPrice"] : (function () { throw new RuntimeError('Variable "maxPrice" does not exist.', 71, $this->source); })())]), "html", null, true);
                // line 72
                yield "\">
                        <i class=\"far fa-arrow-right\"></i>
                    </a>
                </li>
            ";
            }
            // line 77
            yield "        ";
        }
        // line 78
        yield "    </ul>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pack/_pack_list.html.twig";
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
        return array (  210 => 78,  207 => 77,  200 => 72,  198 => 71,  197 => 70,  196 => 69,  195 => 68,  194 => 67,  191 => 66,  189 => 65,  186 => 64,  176 => 61,  174 => 60,  173 => 59,  172 => 58,  171 => 57,  170 => 56,  163 => 55,  159 => 54,  156 => 53,  149 => 48,  147 => 47,  146 => 46,  145 => 45,  144 => 44,  143 => 43,  140 => 42,  137 => 41,  135 => 40,  129 => 36,  126 => 35,  114 => 29,  110 => 28,  103 => 26,  92 => 18,  88 => 17,  85 => 16,  79 => 14,  71 => 12,  69 => 11,  64 => 8,  59 => 7,  53 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"row gy-40\">
    {% if packs|length == 0 %}
        <div class=\"col-12\">
            <div class=\"alert alert-warning\">Aucun pack trouvé pour votre recherche.</div>
        </div>
    {% else %}
        {% for pack in packs %}
        <div class=\"col-xl-4 col-sm-6\">
            <div class=\"th-product\">
                <div class=\"product-img\">
                    {% if pack.getPhoto() %}
                        <img src=\"{{ asset('uploads/packs/' ~ pack.getPhoto()) }}\" alt=\"{{ pack.getNom() }}\">
                    {% else %}
                        <img src=\"{{ asset('Front/img/placeholder.jpg') }}\" alt=\"Image du pack\">
                    {% endif %}
                    <div class=\"actions\">
                        <a href=\"{{ path('app_pack_shop_details', {'id': pack.id}) }}\" class=\"icon-btn\"><i class=\"far fa-eye\"></i></a>
                        <a href=\"{{ path('app_pack_booking', {'id': pack.id}) }}\" class=\"icon-btn\"><i class=\"far fa-cart-plus\"></i></a>
                        <a href=\"#\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                    </div>
                </div>
                <div class=\"product-content\">
                    <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5.00 sur 5\">
                        <span>Note : <strong class=\"rating\">5.00</strong>/5</span>
                    </div>
                    <h3 class=\"product-title\"><a href=\"{{ path('app_pack_shop_details', {'id': pack.id}) }}\">{{ pack.nom }}</a></h3>
                    <div class=\"pack-meta\">
                        <span class=\"price\">{{ pack.getPrix()|number_format(2, '.', '') }}&nbsp;€</span>
                        <span class=\"pack-capacity\"><i class=\"fas fa-users\"></i> {{ pack.capacite }} personnes</span>
                    </div>
                </div>
            </div>
        </div>
        {% endfor %}
    {% endif %}
</div>

<div class=\"th-pagination text-center pt-50\">
    <ul>
        {% if packs.pageCount is defined and packs.pageCount > 1 %}
            {% if packs.currentPageNumber is defined and packs.currentPageNumber != 1 %}
                <li>
                    <a href=\"{{ path('app_pack_index', {
                        'page': packs.currentPageNumber - 1,
                        'category': selectedCategory,
                        'minPrice': minPrice,
                        'maxPrice': maxPrice
                    }) }}\">
                        <i class=\"far fa-arrow-left\"></i>
                    </a>
                </li>
            {% endif %}

            {% for i in 1..packs.pageCount %}
                <li{% if i == packs.currentPageNumber %} class=\"active\"{% endif %}>
                    <a href=\"{{ path('app_pack_index', {
                        'page': i,
                        'category': selectedCategory,
                        'minPrice': minPrice,
                        'maxPrice': maxPrice
                    }) }}\">{{ i }}</a>
                </li>
            {% endfor %}

            {% if packs.currentPageNumber is defined and packs.currentPageNumber != packs.pageCount %}
                <li>
                    <a href=\"{{ path('app_pack_index', {
                        'page': packs.currentPageNumber + 1,
                        'category': selectedCategory,
                        'minPrice': minPrice,
                        'maxPrice': maxPrice
                    }) }}\">
                        <i class=\"far fa-arrow-right\"></i>
                    </a>
                </li>
            {% endif %}
        {% endif %}
    </ul>
</div>
", "pack/_pack_list.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\pack\\_pack_list.html.twig");
    }
}
