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

/* pack/pack.html.twig */
class __TwigTemplate_add3e21cc7669d59e396e97cbbf63df0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pack/pack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pack/pack.html.twig"));

        // line 1
        yield "<!doctype html>
<html class=\"no-js\" lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>GoldenTouch - Nos Packs</title>

    <!-- Google Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Radio+Canada:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

    <!-- All CSS Files -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/bootstrap.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/fontawesome.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/magnific-popup.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/slick.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/style.css"), "html", null, true);
        yield "\">

    <style>
        .pack-card {
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            margin-bottom: 30px;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }
        .pack-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0,0,0,0.12);
            border-color: rgba(255, 255, 255, 0.3);
        }
        .pack-image {
            height: 250px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }
        .pack-content {
            padding: 25px;
        }
        .pack-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #1C1C1C;
        }
        .pack-description {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        .pack-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
        .pack-capacity {
            background: #f8f9fa;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            color: #666;
        }
        .pack-actions {
            display: flex;
            gap: 10px;
        }
        .search-section {
            margin-bottom: 50px;
            background: #f8f9fa;
            padding: 30px;
            border-radius: 15px;
        }
    </style>
</head>

<body>
    ";
        // line 83
        yield from $this->loadTemplate("Front/partials/header.html.twig", "pack/pack.html.twig", 83)->unwrap()->yield($context);
        // line 84
        yield "
    <!-- Page Title -->
    <div class=\"breadcumb-wrapper\" data-bg-src=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/breadcumb/breadcumb-bg.jpg"), "html", null, true);
        yield "\" style=\"padding: 15px 0;\">
        <div class=\"container\">
            <div class=\"breadcumb-content\" style=\"padding: 10px 0;\">
                <h1 class=\"breadcumb-title\" style=\"font-size: 1.5rem; margin-bottom: 5px;\">Nos Packs</h1>
                <ul class=\"breadcumb-menu\" style=\"font-size: 0.9rem;\">
                    <li><a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_index");
        yield "\">Accueil</a></li>
                    <li>Packs</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Pack List Section -->
    <section class=\"space-top space-extra-bottom\">
        <div class=\"container\">
            <!-- Search Section -->
            <div class=\"search-section\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <form class=\"search-form\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher un pack...\">
                                <button class=\"th-btn style3\"><i class=\"fas fa-search\"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Pack Grid -->
           <!--==============================
Breadcrumb Area  
==============================-->
<!--==============================
    Breadcumb
============================== -->
<div class=\"breadcumb-wrapper\" data-bg-src=\"assets/img/breadcumb/breadcumb-bg.jpg\">
    <div class=\"container z-index-common\">
        <h1 class=\"breadcumb-title\">Our Packs</h1>
        <ul class=\"breadcumb-menu\">
            <li><a href=\"index.html\">Home</a></li>
            <li>Packs</li>
        </ul>
    </div>
</div>

<!--==============================
Pack Area  
==============================-->
<section class=\"space-top space-extra-bottom\">
    <div class=\"container\">
        <div class=\"row flex-row-reverse\">
            <div class=\"col-xl-9 col-lg-8\">
                <div class=\"th-sort-bar\">
                    <div class=\"row justify-content-between align-items-center\">
                        <div class=\"col-md\">
                            <p class=\"woocommerce-result-count\">Showing ";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 142, $this->source); })()), "results", [], "any", false, false, false, 142)), "html", null, true);
        yield " packs</p>
                        </div>
                        <div class=\"col-md-auto\">
                            <form class=\"woocommerce-ordering\" method=\"get\">
                                <select name=\"orderby\" class=\"orderby\" aria-label=\"Pack order\">
                                    <option value=\"menu_order\" selected=\"selected\">Default Sorting</option>
                                    <option value=\"popularity\">Sort by popularity</option>
                                    <option value=\"price\">Sort by price: low to high</option>
                                    <option value=\"price-desc\">Sort by price: high to low</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class=\"row gy-40\">
                    ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 158, $this->source); })()), "results", [], "any", false, false, false, 158));
        foreach ($context['_seq'] as $context["_key"] => $context["pack"]) {
            // line 159
            yield "                    <div class=\"col-xl-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                ";
            // line 162
            if (CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "getPhoto", [], "method", false, false, false, 162)) {
                // line 163
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "getPhoto", [], "method", false, false, false, 163))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "getNom", [], "method", false, false, false, 163), "html", null, true);
                yield "\">
                                ";
            } else {
                // line 165
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/placeholder.jpg"), "html", null, true);
                yield "\" alt=\"Pack Image\">
                                ";
            }
            // line 167
            yield "                                <div class=\"actions\">
                                    <a href=\"";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_shop_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 168)]), "html", null, true);
            yield "\" class=\"icon-btn\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"#\" class=\"icon-btn\"><i class=\"far fa-cart-plus\"></i></a>
                                    <a href=\"#\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\">
                                    <span>Rated <strong class=\"rating\">5.00</strong> out of 5</span>
                                </div>
                                <h3 class=\"product-title\"><a href=\"";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_shop_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 177)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "nom", [], "any", false, false, false, 177), "html", null, true);
            yield "</a></h3>
                                <div class=\"pack-meta\">
                                    <span class=\"price\">";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "prix", [], "any", false, false, false, 179), "html", null, true);
            yield " €</span>
                                    <span class=\"pack-capacity\"><i class=\"fas fa-users\"></i> ";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "capacite", [], "any", false, false, false, 180), "html", null, true);
            yield " persons</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pack'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
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
            
            <div class=\"col-xl-3 col-lg-4\">
                <aside class=\"sidebar-area sidebar-shop\">
                    <div class=\"widget widget_search\">
                        <form class=\"search-form\">
                            <input type=\"text\" placeholder=\"Search packs...\">
                            <button type=\"submit\"><i class=\"far fa-search\"></i></button>
                        </form>
                    </div>
                    
                    <div class=\"widget widget_categories\">
                        <h3 class=\"widget_title\">Categories</h3>
                        <ul>
                            <li><a href=\"blog.html\">Adventure</a> <span>(8)</span></li>
                            <li><a href=\"blog.html\">Family</a> <span>(6)</span></li>
                            <li><a href=\"blog.html\">Luxury</a> <span>(5)</span></li>
                            <li><a href=\"blog.html\">Weekend</a> <span>(2)</span></li>
                            <li><a href=\"blog.html\">Custom</a> <span>(7)</span></li>
                        </ul>
                    </div>
                    
                    <div class=\"widget widget_price_filter\">
                        <h4 class=\"widget_title\">Filter By Price</h4>
                        <div class=\"price_slider_wrapper\">
                            <div class=\"price_label\">
                                Price: <span class=\"from\">\$0</span> — <span class=\"to\">\$1000</span>
                            </div>
                            <div class=\"price_slider\"></div>
                            <button type=\"submit\" class=\"button\">Filter</button>
                        </div>
                    </div>
                    
                    <div class=\"widget widget_tag_cloud\">
                        <h3 class=\"widget_title\">Popular Tags</h3>
                        <div class=\"tagcloud\">
                            <a href=\"blog.html\">Adventure</a>
                            <a href=\"blog.html\">Family</a>
                            <a href=\"blog.html\">Luxury</a>
                            <a href=\"blog.html\">Weekend</a>
                            <a href=\"blog.html\">Custom</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
            <!-- Pagination -->
            <div class=\"th-pagination text-center\">
                <ul>
                    ";
        // line 247
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 247, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 247)) {
            // line 248
            yield "                        <li><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 248, $this->source); })()), "currentPage", [], "any", false, false, false, 248) - 1)]), "html", null, true);
            yield "\"><i class=\"fas fa-arrow-left\"></i></a></li>
                    ";
        }
        // line 250
        yield "                    
                    ";
        // line 251
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 251, $this->source); })()), "lastPage", [], "any", false, false, false, 251)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 252
            yield "                        <li><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index", ["page" => $context["i"]]), "html", null, true);
            yield "\" ";
            if (($context["i"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 252, $this->source); })()), "currentPage", [], "any", false, false, false, 252))) {
                yield "class=\"active\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        yield "                    
                    ";
        // line 255
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 255, $this->source); })()), "hasNextPage", [], "any", false, false, false, 255)) {
            // line 256
            yield "                        <li><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 256, $this->source); })()), "currentPage", [], "any", false, false, false, 256) + 1)]), "html", null, true);
            yield "\"><i class=\"fas fa-arrow-right\"></i></a></li>
                    ";
        }
        // line 258
        yield "                </ul>
            </div>
        </div>
    </section>

    ";
        // line 263
        yield from $this->loadTemplate("Front/partials/footer.html.twig", "pack/pack.html.twig", 263)->unwrap()->yield($context);
        // line 264
        yield "
    <!-- Scroll Top -->
    <div class=\"scroll-top\">
        <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
            <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\"></path>
        </svg>
    </div>

    <!-- All JavaScript Files -->
    <script src=\"";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery-3.6.0.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/slick.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/main.js"), "html", null, true);
        yield "\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pack/pack.html.twig";
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
        return array (  437 => 277,  433 => 276,  429 => 275,  425 => 274,  421 => 273,  410 => 264,  408 => 263,  401 => 258,  395 => 256,  393 => 255,  390 => 254,  375 => 252,  371 => 251,  368 => 250,  362 => 248,  360 => 247,  297 => 186,  285 => 180,  281 => 179,  274 => 177,  262 => 168,  259 => 167,  253 => 165,  245 => 163,  243 => 162,  238 => 159,  234 => 158,  215 => 142,  161 => 91,  153 => 86,  149 => 84,  147 => 83,  79 => 18,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>GoldenTouch - Nos Packs</title>

    <!-- Google Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Radio+Canada:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

    <!-- All CSS Files -->
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/fontawesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/magnific-popup.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/slick.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/style.css') }}\">

    <style>
        .pack-card {
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            margin-bottom: 30px;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }
        .pack-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0,0,0,0.12);
            border-color: rgba(255, 255, 255, 0.3);
        }
        .pack-image {
            height: 250px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }
        .pack-content {
            padding: 25px;
        }
        .pack-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #1C1C1C;
        }
        .pack-description {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        .pack-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
        .pack-capacity {
            background: #f8f9fa;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            color: #666;
        }
        .pack-actions {
            display: flex;
            gap: 10px;
        }
        .search-section {
            margin-bottom: 50px;
            background: #f8f9fa;
            padding: 30px;
            border-radius: 15px;
        }
    </style>
</head>

<body>
    {% include 'Front/partials/header.html.twig' %}

    <!-- Page Title -->
    <div class=\"breadcumb-wrapper\" data-bg-src=\"{{ asset('Front/img/breadcumb/breadcumb-bg.jpg') }}\" style=\"padding: 15px 0;\">
        <div class=\"container\">
            <div class=\"breadcumb-content\" style=\"padding: 10px 0;\">
                <h1 class=\"breadcumb-title\" style=\"font-size: 1.5rem; margin-bottom: 5px;\">Nos Packs</h1>
                <ul class=\"breadcumb-menu\" style=\"font-size: 0.9rem;\">
                    <li><a href=\"{{ path('front_index') }}\">Accueil</a></li>
                    <li>Packs</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Pack List Section -->
    <section class=\"space-top space-extra-bottom\">
        <div class=\"container\">
            <!-- Search Section -->
            <div class=\"search-section\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <form class=\"search-form\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher un pack...\">
                                <button class=\"th-btn style3\"><i class=\"fas fa-search\"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Pack Grid -->
           <!--==============================
Breadcrumb Area  
==============================-->
<!--==============================
    Breadcumb
============================== -->
<div class=\"breadcumb-wrapper\" data-bg-src=\"assets/img/breadcumb/breadcumb-bg.jpg\">
    <div class=\"container z-index-common\">
        <h1 class=\"breadcumb-title\">Our Packs</h1>
        <ul class=\"breadcumb-menu\">
            <li><a href=\"index.html\">Home</a></li>
            <li>Packs</li>
        </ul>
    </div>
</div>

<!--==============================
Pack Area  
==============================-->
<section class=\"space-top space-extra-bottom\">
    <div class=\"container\">
        <div class=\"row flex-row-reverse\">
            <div class=\"col-xl-9 col-lg-8\">
                <div class=\"th-sort-bar\">
                    <div class=\"row justify-content-between align-items-center\">
                        <div class=\"col-md\">
                            <p class=\"woocommerce-result-count\">Showing {{ packs.results|length }} packs</p>
                        </div>
                        <div class=\"col-md-auto\">
                            <form class=\"woocommerce-ordering\" method=\"get\">
                                <select name=\"orderby\" class=\"orderby\" aria-label=\"Pack order\">
                                    <option value=\"menu_order\" selected=\"selected\">Default Sorting</option>
                                    <option value=\"popularity\">Sort by popularity</option>
                                    <option value=\"price\">Sort by price: low to high</option>
                                    <option value=\"price-desc\">Sort by price: high to low</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class=\"row gy-40\">
                    {% for pack in packs.results %}
                    <div class=\"col-xl-4 col-sm-6\">
                        <div class=\"th-product\">
                            <div class=\"product-img\">
                                {% if pack.getPhoto() %}
                                    <img src=\"{{ asset('uploads/packs/' ~ pack.getPhoto()) }}\" alt=\"{{ pack.getNom() }}\">
                                {% else %}
                                    <img src=\"{{ asset('Front/img/placeholder.jpg') }}\" alt=\"Pack Image\">
                                {% endif %}
                                <div class=\"actions\">
                                    <a href=\"{{ path('app_pack_shop_details', {'id': pack.id}) }}\" class=\"icon-btn\"><i class=\"far fa-eye\"></i></a>
                                    <a href=\"#\" class=\"icon-btn\"><i class=\"far fa-cart-plus\"></i></a>
                                    <a href=\"#\" class=\"icon-btn\"><i class=\"far fa-heart\"></i></a>
                                </div>
                            </div>
                            <div class=\"product-content\">
                                <div class=\"star-rating\" role=\"img\" aria-label=\"Rated 5.00 out of 5\">
                                    <span>Rated <strong class=\"rating\">5.00</strong> out of 5</span>
                                </div>
                                <h3 class=\"product-title\"><a href=\"{{ path('app_pack_shop_details', {'id': pack.id}) }}\">{{ pack.nom }}</a></h3>
                                <div class=\"pack-meta\">
                                    <span class=\"price\">{{ pack.prix }} €</span>
                                    <span class=\"pack-capacity\"><i class=\"fas fa-users\"></i> {{ pack.capacite }} persons</span>
                                </div>
                            </div>
                        </div>
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
            
            <div class=\"col-xl-3 col-lg-4\">
                <aside class=\"sidebar-area sidebar-shop\">
                    <div class=\"widget widget_search\">
                        <form class=\"search-form\">
                            <input type=\"text\" placeholder=\"Search packs...\">
                            <button type=\"submit\"><i class=\"far fa-search\"></i></button>
                        </form>
                    </div>
                    
                    <div class=\"widget widget_categories\">
                        <h3 class=\"widget_title\">Categories</h3>
                        <ul>
                            <li><a href=\"blog.html\">Adventure</a> <span>(8)</span></li>
                            <li><a href=\"blog.html\">Family</a> <span>(6)</span></li>
                            <li><a href=\"blog.html\">Luxury</a> <span>(5)</span></li>
                            <li><a href=\"blog.html\">Weekend</a> <span>(2)</span></li>
                            <li><a href=\"blog.html\">Custom</a> <span>(7)</span></li>
                        </ul>
                    </div>
                    
                    <div class=\"widget widget_price_filter\">
                        <h4 class=\"widget_title\">Filter By Price</h4>
                        <div class=\"price_slider_wrapper\">
                            <div class=\"price_label\">
                                Price: <span class=\"from\">\$0</span> — <span class=\"to\">\$1000</span>
                            </div>
                            <div class=\"price_slider\"></div>
                            <button type=\"submit\" class=\"button\">Filter</button>
                        </div>
                    </div>
                    
                    <div class=\"widget widget_tag_cloud\">
                        <h3 class=\"widget_title\">Popular Tags</h3>
                        <div class=\"tagcloud\">
                            <a href=\"blog.html\">Adventure</a>
                            <a href=\"blog.html\">Family</a>
                            <a href=\"blog.html\">Luxury</a>
                            <a href=\"blog.html\">Weekend</a>
                            <a href=\"blog.html\">Custom</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
            <!-- Pagination -->
            <div class=\"th-pagination text-center\">
                <ul>
                    {% if packs.hasPreviousPage %}
                        <li><a href=\"{{ path('app_pack_index', {'page': packs.currentPage - 1}) }}\"><i class=\"fas fa-arrow-left\"></i></a></li>
                    {% endif %}
                    
                    {% for i in 1..packs.lastPage %}
                        <li><a href=\"{{ path('app_pack_index', {'page': i}) }}\" {% if i == packs.currentPage %}class=\"active\"{% endif %}>{{ i }}</a></li>
                    {% endfor %}
                    
                    {% if packs.hasNextPage %}
                        <li><a href=\"{{ path('app_pack_index', {'page': packs.currentPage + 1}) }}\"><i class=\"fas fa-arrow-right\"></i></a></li>
                    {% endif %}
                </ul>
            </div>
        </div>
    </section>

    {% include 'Front/partials/footer.html.twig' %}

    <!-- Scroll Top -->
    <div class=\"scroll-top\">
        <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
            <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\"></path>
        </svg>
    </div>

    <!-- All JavaScript Files -->
    <script src=\"{{ asset('Front/js/jquery-3.6.0.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/jquery.magnific-popup.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/slick.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/main.js') }}\"></script>
</body>
</html>", "pack/pack.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\pack\\pack.html.twig");
    }
}
