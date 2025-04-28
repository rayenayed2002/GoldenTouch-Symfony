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

/* lieu/index.html.twig */
class __TwigTemplate_170f1ad2986b0793cd0cf87dc46348bd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieu/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieu/index.html.twig"));

        // line 1
        yield "<!doctype html>
<html class=\"no-js\" lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>GoldenTouch - Nos Lieux</title>

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
        .lieu-card {
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            margin-bottom: 30px;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }
        .lieu-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0,0,0,0.12);
            border-color: rgba(255, 255, 255, 0.3);
        }
        .lieu-image {
            height: 250px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
            width: 100%;
        }
        .lieu-content {
            padding: 25px;
        }
        .lieu-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #1C1C1C;
        }
        .lieu-description {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.6;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .lieu-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
        .lieu-capacity {
            background: #f8f9fa;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            color: #666;
        }
        .lieu-actions {
            display: flex;
            gap: 10px;
        }
        .search-section {
            margin-bottom: 50px;
            background: #f8f9fa;
            padding: 30px;
            border-radius: 15px;
        }
        .lieu-location {
            display: flex;
            align-items: center;
            gap: 5px;
            color: #666;
            margin-bottom: 10px;
        }
        .lieu-category {
            display: inline-block;
            background: #f0f7ff;
            color: #0066cc;
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            margin-bottom: 10px;
        }
        .pagination .page-item.active .page-link {
            background-color: var(--theme-color);
            border-color: var(--theme-color);
        }
        .pagination .page-link {
            color: var(--theme-color);
        }
        .search-results-dropdown {
            position: absolute;
            width: 100%;
            max-height: 300px;
            overflow-y: auto;
            background: white;
            border: 1px solid #ddd;
            border-radius: 0 0 8px 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            z-index: 1000;
            display: none;
        }
        .search-result-item {
            padding: 10px 15px;
            border-bottom: 1px solid #eee;
            cursor: pointer;
            display: flex;
            align-items: center;
        }
        .search-result-item:hover {
            background-color: #f8f9fa;
        }
        .search-result-item img {
            width: 40px;
            height: 40px;
            border-radius: 4px;
            margin-right: 10px;
            object-fit: cover;
        }
        .search-result-info {
            flex: 1;
        }
        .search-result-info h6 {
            margin-bottom: 2px;
            font-size: 0.9rem;
        }
        .search-result-info p {
            margin: 0;
            font-size: 0.8rem;
            color: #666;
        }
        .search-loading {
            padding: 10px;
            text-align: center;
            color: #666;
            font-size: 0.9rem;
        }
        .no-results {
            padding: 10px;
            text-align: center;
            color: #666;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    ";
        // line 164
        yield from $this->loadTemplate("Front/partials/header.html.twig", "lieu/index.html.twig", 164)->unwrap()->yield($context);
        // line 165
        yield "
    <!-- Page Title -->
    <div class=\"breadcumb-wrapper\" data-bg-src=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/breadcumb/breadcumb-bg.jpg"), "html", null, true);
        yield "\" style=\"padding: 15px 0;\">
        <div class=\"container\">
            <div class=\"breadcumb-content\" style=\"padding: 10px 0;\">
                <h1 class=\"breadcumb-title\" style=\"font-size: 1.5rem; margin-bottom: 5px;\">Nos Lieux</h1>
                <ul class=\"breadcumb-menu\" style=\"font-size: 0.9rem;\">
                    <li><a href=\"";
        // line 172
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_index");
        yield "\">Accueil</a></li>
                    <li>Lieux</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Lieu List Section -->
    <section class=\"space-top space-extra-bottom\">
        <div class=\"container\">
            <!-- Search Section -->
            <div class=\"search-section\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8 position-relative\">
                        <form class=\"search-form\" id=\"searchForm\" action=\"";
        // line 186
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_index");
        yield "\" method=\"get\">
                            <input type=\"hidden\" name=\"filter\" value=\"";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 187, $this->source); })()), "html", null, true);
        yield "\">
                            <div class=\"input-group\">
                                <input type=\"text\" 
                                       class=\"form-control\" 
                                       id=\"searchInput\"
                                       name=\"search\"
                                       value=\"";
        // line 193
        yield (((array_key_exists("searchTerm", $context) &&  !(null === $context["searchTerm"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["searchTerm"], "html", null, true)) : (""));
        yield "\"
                                       placeholder=\"Rechercher un lieu...\"
                                       autocomplete=\"off\">
                                <button class=\"th-btn style3\" type=\"submit\"><i class=\"fas fa-search\"></i></button>
                            </div>
                        </form>
                        <div class=\"search-results-dropdown\" id=\"searchResults\"></div>
                    </div>
                </div>
            </div>

            <!-- Lieu Grid -->
            <div class=\"row flex-row-reverse\">
                <div class=\"col-xl-9 col-lg-8\">
                    <div class=\"th-sort-bar\">
                        <div class=\"row justify-content-between align-items-center\">
                            <div class=\"col-md\">
                                <p class=\"woocommerce-result-count\">Affichage de ";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieux"]) || array_key_exists("lieux", $context) ? $context["lieux"] : (function () { throw new RuntimeError('Variable "lieux" does not exist.', 210, $this->source); })()), "results", [], "any", false, false, false, 210)), "html", null, true);
        yield " lieux</p>
                            </div>
                            <div class=\"col-md-auto\">
                                <form class=\"woocommerce-ordering\" method=\"get\">
                                    <select name=\"orderby\" class=\"orderby\" aria-label=\"Lieu order\">
                                        <option value=\"menu_order\" selected=\"selected\">Trier par défaut</option>
                                        <option value=\"popularity\">Trier par popularité</option>
                                        <option value=\"price\">Trier par prix: croissant</option>
                                        <option value=\"price-desc\">Trier par prix: décroissant</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 225
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieux"]) || array_key_exists("lieux", $context) ? $context["lieux"] : (function () { throw new RuntimeError('Variable "lieux" does not exist.', 225, $this->source); })()), "results", [], "any", false, false, false, 225)) > 0)) {
            // line 226
            yield "                        <div class=\"row gy-40\">
                            ";
            // line 227
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieux"]) || array_key_exists("lieux", $context) ? $context["lieux"] : (function () { throw new RuntimeError('Variable "lieux" does not exist.', 227, $this->source); })()), "results", [], "any", false, false, false, 227));
            foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
                // line 228
                yield "                            <div class=\"col-xl-4 col-sm-6\">
                                <div class=\"lieu-card\">
                                    <div class=\"product-img\">
                                        ";
                // line 231
                if (CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "imageUrl", [], "any", false, false, false, 231)) {
                    // line 232
                    yield "                                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/lieux/" . CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "imageUrl", [], "any", false, false, false, 232))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "name", [], "any", false, false, false, 232), "html", null, true);
                    yield "\" class=\"lieu-image\">
                                        ";
                } else {
                    // line 234
                    yield "                                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/placeholder.jpg"), "html", null, true);
                    yield "\" alt=\"Lieu Image\" class=\"lieu-image\">
                                        ";
                }
                // line 236
                yield "                                        <div class=\"actions\">
                                            <a href=\"";
                // line 237
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 237)]), "html", null, true);
                yield "\" class=\"icon-btn\" title=\"Voir les détails\"><i class=\"far fa-eye\"></i></a>
                                            <a href=\"";
                // line 238
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_qr_code", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 238)]), "html", null, true);
                yield "\"
                                            class=\"icon-btn\"
                                            title=\"Générer QR Code\"
                                            download=\"qr-code-";
                // line 241
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "name", [], "any", false, false, false, 241)), [" " => "-", "/" => "-", "\\" => "-", "_" => "-", "." => "-"]), "-"), "html", null, true);
                yield ".png\">
                                            <i class=\"fas fa-qrcode\"></i>
                                            </a>
                                            <a href=\"#\" class=\"icon-btn\" title=\"Ajouter aux favoris\"><i class=\"far fa-heart\"></i></a>
                                        </div>
                                    </div>
                                    <div class=\"lieu-content\">
                                        ";
                // line 248
                if (CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "category", [], "any", false, false, false, 248)) {
                    // line 249
                    yield "                                            <span class=\"lieu-category\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "category", [], "any", false, false, false, 249), "html", null, true);
                    yield "</span>
                                        ";
                }
                // line 251
                yield "                                        <h3 class=\"lieu-title\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 251)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "name", [], "any", false, false, false, 251), "html", null, true);
                yield "</a></h3>
                                        <div class=\"lieu-location\">
                                            <i class=\"fas fa-map-marker-alt\"></i>
                                            <span>";
                // line 254
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "location", [], "any", false, false, false, 254), "html", null, true);
                if (CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "ville", [], "any", false, false, false, 254)) {
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "ville", [], "any", false, false, false, 254), "html", null, true);
                }
                yield "</span>
                                        </div>
                                        <p class=\"lieu-description\">";
                // line 256
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "description", [], "any", true, true, false, 256)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "description", [], "any", false, false, false, 256), "Aucune description disponible")) : ("Aucune description disponible")), "html", null, true);
                yield "</p>
                                        <div class=\"lieu-meta\">
                                            <span class=\"price\">";
                // line 258
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "price", [], "any", false, false, false, 258), "html", null, true);
                yield " €</span>
                                            <span class=\"lieu-capacity\"><i class=\"fas fa-users\"></i> ";
                // line 259
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "capacity", [], "any", false, false, false, 259), "html", null, true);
                yield " personnes</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['lieu'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 265
            yield "                        </div>
                        
                        <!-- Pagination -->
                        <div class=\"th-pagination text-center pt-50\">
                            <nav aria-label=\"Page navigation\">
                                <ul class=\"pagination justify-content-center\">
                                    ";
            // line 271
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieux"]) || array_key_exists("lieux", $context) ? $context["lieux"] : (function () { throw new RuntimeError('Variable "lieux" does not exist.', 271, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 271)) {
                // line 272
                yield "                                        <li class=\"page-item\">
                                            <a class=\"page-link\" href=\"";
                // line 273
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieux"]) || array_key_exists("lieux", $context) ? $context["lieux"] : (function () { throw new RuntimeError('Variable "lieux" does not exist.', 273, $this->source); })()), "currentPage", [], "any", false, false, false, 273) - 1), "filter" => (isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 273, $this->source); })()), "search" => (((array_key_exists("searchTerm", $context) &&  !(null === $context["searchTerm"]))) ? ($context["searchTerm"]) : (""))]), "html", null, true);
                yield "\" aria-label=\"Previous\">
                                                <i class=\"fas fa-arrow-left\"></i>
                                            </a>
                                        </li>
                                    ";
            }
            // line 278
            yield "                                    
                                    ";
            // line 279
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieux"]) || array_key_exists("lieux", $context) ? $context["lieux"] : (function () { throw new RuntimeError('Variable "lieux" does not exist.', 279, $this->source); })()), "lastPage", [], "any", false, false, false, 279)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 280
                yield "                                        <li class=\"page-item ";
                if (($context["i"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieux"]) || array_key_exists("lieux", $context) ? $context["lieux"] : (function () { throw new RuntimeError('Variable "lieux" does not exist.', 280, $this->source); })()), "currentPage", [], "any", false, false, false, 280))) {
                    yield "active";
                }
                yield "\">
                                            <a class=\"page-link\" href=\"";
                // line 281
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_index", ["page" => $context["i"], "filter" => (isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 281, $this->source); })()), "search" => (((array_key_exists("searchTerm", $context) &&  !(null === $context["searchTerm"]))) ? ($context["searchTerm"]) : (""))]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            yield "                                    
                                    ";
            // line 285
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieux"]) || array_key_exists("lieux", $context) ? $context["lieux"] : (function () { throw new RuntimeError('Variable "lieux" does not exist.', 285, $this->source); })()), "hasNextPage", [], "any", false, false, false, 285)) {
                // line 286
                yield "                                        <li class=\"page-item\">
                                            <a class=\"page-link\" href=\"";
                // line 287
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieux"]) || array_key_exists("lieux", $context) ? $context["lieux"] : (function () { throw new RuntimeError('Variable "lieux" does not exist.', 287, $this->source); })()), "currentPage", [], "any", false, false, false, 287) + 1), "filter" => (isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 287, $this->source); })()), "search" => (((array_key_exists("searchTerm", $context) &&  !(null === $context["searchTerm"]))) ? ($context["searchTerm"]) : (""))]), "html", null, true);
                yield "\" aria-label=\"Next\">
                                                <i class=\"fas fa-arrow-right\"></i>
                                            </a>
                                        </li>
                                    ";
            }
            // line 292
            yield "                                </ul>
                            </nav>
                        </div>
                    ";
        } else {
            // line 296
            yield "                        <div class=\"alert alert-info\">Aucun lieu trouvé.</div>
                    ";
        }
        // line 298
        yield "                </div>
                
                <div class=\"col-xl-3 col-lg-4\">
                    <aside class=\"sidebar-area sidebar-shop\">
                        <div class=\"widget widget_search\">
                            <form class=\"search-form\">
                                <input type=\"text\" placeholder=\"Rechercher des lieux...\">
                                <button type=\"submit\"><i class=\"far fa-search\"></i></button>
                            </form>
                        </div>
                        
                        <div class=\"widget widget_categories\">
                            <h3 class=\"widget_title\">Catégories</h3>
                            <ul>
                                <li><a href=\"blog.html\">Salle de fête</a> <span>(8)</span></li>
                                <li><a href=\"blog.html\">Espace extérieur</a> <span>(6)</span></li>
                                <li><a href=\"blog.html\">Salle de conférence</a> <span>(5)</span></li>
                                <li><a href=\"blog.html\">Restaurant</a> <span>(2)</span></li>
                                <li><a href=\"blog.html\">Autre</a> <span>(7)</span></li>
                            </ul>
                        </div>
                        
                        <div class=\"widget widget_price_filter\">
                            <h4 class=\"widget_title\">Filtrer par prix</h4>
                            <div class=\"price_slider_wrapper\">
                                <div class=\"price_label\">
                                    Prix: <span class=\"from\">0 €</span> — <span class=\"to\">1000 €</span>
                                </div>
                                <div class=\"price_slider\"></div>
                                <button type=\"submit\" class=\"button\">Filtrer</button>
                            </div>
                        </div>
                        
                        <div class=\"widget widget_tag_cloud\">
                            <h3 class=\"widget_title\">Tags populaires</h3>
                            <div class=\"tagcloud\">
                                <a href=\"blog.html\">Luxe</a>
                                <a href=\"blog.html\">Économique</a>
                                <a href=\"blog.html\">Grande capacité</a>
                                <a href=\"blog.html\">Centre ville</a>
                                <a href=\"blog.html\">Piscine</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 347
        yield from $this->loadTemplate("Front/partials/footer.html.twig", "lieu/index.html.twig", 347)->unwrap()->yield($context);
        // line 348
        yield "
    <!-- Scroll Top -->
    <div class=\"scroll-top\">
        <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
            <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\"></path>
        </svg>
    </div>

    <!-- All JavaScript Files -->
    <script src=\"";
        // line 357
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery-3.6.0.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/slick.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/main.js"), "html", null, true);
        yield "\"></script>

    <!-- Script ajouté pour la recherche -->
    <script>
        \$(document).ready(function() {
            const searchInput = \$('#searchInput');
            const searchResults = \$('#searchResults');
            let searchTimeout;
            
            searchInput.on('input', function() {
                clearTimeout(searchTimeout);
                const term = \$(this).val().trim();
                
                if (term.length < 2) {
                    searchResults.hide().empty();
                    return;
                }
                
                searchResults.html('<div class=\"search-loading\">Recherche en cours...</div>').show();
                
                searchTimeout = setTimeout(() => {
                    \$.get('";
        // line 382
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_search_autocomplete");
        yield "', { term: term }, function(data) {
                        if (data.length > 0) {
                            let html = '';
                            data.forEach(item => {
                                html += `
                                    <a href=\"";
        // line 387
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_details", ["id" => "PLACEHOLDER"]);
        yield "\".replace('PLACEHOLDER', item.id) class=\"search-result-item\">
                                        <img src=\"/\${item.image}\" alt=\"\${item.name}\">
                                        <div class=\"search-result-info\">
                                            <h6>\${item.name}</h6>
                                            <p>\${item.location} • \${item.category}</p>
                                        </div>
                                    </a>
                                `;
                            });
                            searchResults.html(html);
                        } else {
                            searchResults.html('<div class=\"no-results\">Aucun résultat trouvé</div>');
                        }
                    });
                }, 300);
            });
            
            \$(document).on('click', function(e) {
                if (!\$(e.target).closest('#searchInput, #searchResults').length) {
                    searchResults.hide();
                }
            });
        });
    </script>
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
        return "lieu/index.html.twig";
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
        return array (  594 => 387,  586 => 382,  562 => 361,  558 => 360,  554 => 359,  550 => 358,  546 => 357,  535 => 348,  533 => 347,  482 => 298,  478 => 296,  472 => 292,  464 => 287,  461 => 286,  459 => 285,  456 => 284,  445 => 281,  438 => 280,  434 => 279,  431 => 278,  423 => 273,  420 => 272,  418 => 271,  410 => 265,  398 => 259,  394 => 258,  389 => 256,  380 => 254,  371 => 251,  365 => 249,  363 => 248,  353 => 241,  347 => 238,  343 => 237,  340 => 236,  334 => 234,  326 => 232,  324 => 231,  319 => 228,  315 => 227,  312 => 226,  310 => 225,  292 => 210,  272 => 193,  263 => 187,  259 => 186,  242 => 172,  234 => 167,  230 => 165,  228 => 164,  79 => 18,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>GoldenTouch - Nos Lieux</title>

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
        .lieu-card {
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            margin-bottom: 30px;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }
        .lieu-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0,0,0,0.12);
            border-color: rgba(255, 255, 255, 0.3);
        }
        .lieu-image {
            height: 250px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
            width: 100%;
        }
        .lieu-content {
            padding: 25px;
        }
        .lieu-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #1C1C1C;
        }
        .lieu-description {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.6;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .lieu-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
        .lieu-capacity {
            background: #f8f9fa;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            color: #666;
        }
        .lieu-actions {
            display: flex;
            gap: 10px;
        }
        .search-section {
            margin-bottom: 50px;
            background: #f8f9fa;
            padding: 30px;
            border-radius: 15px;
        }
        .lieu-location {
            display: flex;
            align-items: center;
            gap: 5px;
            color: #666;
            margin-bottom: 10px;
        }
        .lieu-category {
            display: inline-block;
            background: #f0f7ff;
            color: #0066cc;
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            margin-bottom: 10px;
        }
        .pagination .page-item.active .page-link {
            background-color: var(--theme-color);
            border-color: var(--theme-color);
        }
        .pagination .page-link {
            color: var(--theme-color);
        }
        .search-results-dropdown {
            position: absolute;
            width: 100%;
            max-height: 300px;
            overflow-y: auto;
            background: white;
            border: 1px solid #ddd;
            border-radius: 0 0 8px 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            z-index: 1000;
            display: none;
        }
        .search-result-item {
            padding: 10px 15px;
            border-bottom: 1px solid #eee;
            cursor: pointer;
            display: flex;
            align-items: center;
        }
        .search-result-item:hover {
            background-color: #f8f9fa;
        }
        .search-result-item img {
            width: 40px;
            height: 40px;
            border-radius: 4px;
            margin-right: 10px;
            object-fit: cover;
        }
        .search-result-info {
            flex: 1;
        }
        .search-result-info h6 {
            margin-bottom: 2px;
            font-size: 0.9rem;
        }
        .search-result-info p {
            margin: 0;
            font-size: 0.8rem;
            color: #666;
        }
        .search-loading {
            padding: 10px;
            text-align: center;
            color: #666;
            font-size: 0.9rem;
        }
        .no-results {
            padding: 10px;
            text-align: center;
            color: #666;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    {% include 'Front/partials/header.html.twig' %}

    <!-- Page Title -->
    <div class=\"breadcumb-wrapper\" data-bg-src=\"{{ asset('Front/img/breadcumb/breadcumb-bg.jpg') }}\" style=\"padding: 15px 0;\">
        <div class=\"container\">
            <div class=\"breadcumb-content\" style=\"padding: 10px 0;\">
                <h1 class=\"breadcumb-title\" style=\"font-size: 1.5rem; margin-bottom: 5px;\">Nos Lieux</h1>
                <ul class=\"breadcumb-menu\" style=\"font-size: 0.9rem;\">
                    <li><a href=\"{{ path('front_index') }}\">Accueil</a></li>
                    <li>Lieux</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Lieu List Section -->
    <section class=\"space-top space-extra-bottom\">
        <div class=\"container\">
            <!-- Search Section -->
            <div class=\"search-section\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8 position-relative\">
                        <form class=\"search-form\" id=\"searchForm\" action=\"{{ path('app_lieu_index') }}\" method=\"get\">
                            <input type=\"hidden\" name=\"filter\" value=\"{{ currentFilter }}\">
                            <div class=\"input-group\">
                                <input type=\"text\" 
                                       class=\"form-control\" 
                                       id=\"searchInput\"
                                       name=\"search\"
                                       value=\"{{ searchTerm ?? '' }}\"
                                       placeholder=\"Rechercher un lieu...\"
                                       autocomplete=\"off\">
                                <button class=\"th-btn style3\" type=\"submit\"><i class=\"fas fa-search\"></i></button>
                            </div>
                        </form>
                        <div class=\"search-results-dropdown\" id=\"searchResults\"></div>
                    </div>
                </div>
            </div>

            <!-- Lieu Grid -->
            <div class=\"row flex-row-reverse\">
                <div class=\"col-xl-9 col-lg-8\">
                    <div class=\"th-sort-bar\">
                        <div class=\"row justify-content-between align-items-center\">
                            <div class=\"col-md\">
                                <p class=\"woocommerce-result-count\">Affichage de {{ lieux.results|length }} lieux</p>
                            </div>
                            <div class=\"col-md-auto\">
                                <form class=\"woocommerce-ordering\" method=\"get\">
                                    <select name=\"orderby\" class=\"orderby\" aria-label=\"Lieu order\">
                                        <option value=\"menu_order\" selected=\"selected\">Trier par défaut</option>
                                        <option value=\"popularity\">Trier par popularité</option>
                                        <option value=\"price\">Trier par prix: croissant</option>
                                        <option value=\"price-desc\">Trier par prix: décroissant</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    {% if lieux.results|length > 0 %}
                        <div class=\"row gy-40\">
                            {% for lieu in lieux.results %}
                            <div class=\"col-xl-4 col-sm-6\">
                                <div class=\"lieu-card\">
                                    <div class=\"product-img\">
                                        {% if lieu.imageUrl %}
                                            <img src=\"{{ asset('uploads/lieux/' ~ lieu.imageUrl) }}\" alt=\"{{ lieu.name }}\" class=\"lieu-image\">
                                        {% else %}
                                            <img src=\"{{ asset('Front/img/placeholder.jpg') }}\" alt=\"Lieu Image\" class=\"lieu-image\">
                                        {% endif %}
                                        <div class=\"actions\">
                                            <a href=\"{{ path('app_lieu_details', {'id': lieu.id}) }}\" class=\"icon-btn\" title=\"Voir les détails\"><i class=\"far fa-eye\"></i></a>
                                            <a href=\"{{ path('app_lieu_qr_code', {'id': lieu.id}) }}\"
                                            class=\"icon-btn\"
                                            title=\"Générer QR Code\"
                                            download=\"qr-code-{{ lieu.name|lower|replace({' ': '-', '/': '-', '\\\\': '-', '_': '-', '.': '-'})|trim('-') }}.png\">
                                            <i class=\"fas fa-qrcode\"></i>
                                            </a>
                                            <a href=\"#\" class=\"icon-btn\" title=\"Ajouter aux favoris\"><i class=\"far fa-heart\"></i></a>
                                        </div>
                                    </div>
                                    <div class=\"lieu-content\">
                                        {% if lieu.category %}
                                            <span class=\"lieu-category\">{{ lieu.category }}</span>
                                        {% endif %}
                                        <h3 class=\"lieu-title\"><a href=\"{{ path('app_lieu_details', {'id': lieu.id}) }}\">{{ lieu.name }}</a></h3>
                                        <div class=\"lieu-location\">
                                            <i class=\"fas fa-map-marker-alt\"></i>
                                            <span>{{ lieu.location }}{% if lieu.ville %}, {{ lieu.ville }}{% endif %}</span>
                                        </div>
                                        <p class=\"lieu-description\">{{ lieu.description|default('Aucune description disponible') }}</p>
                                        <div class=\"lieu-meta\">
                                            <span class=\"price\">{{ lieu.price }} €</span>
                                            <span class=\"lieu-capacity\"><i class=\"fas fa-users\"></i> {{ lieu.capacity }} personnes</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {% endfor %}
                        </div>
                        
                        <!-- Pagination -->
                        <div class=\"th-pagination text-center pt-50\">
                            <nav aria-label=\"Page navigation\">
                                <ul class=\"pagination justify-content-center\">
                                    {% if lieux.hasPreviousPage %}
                                        <li class=\"page-item\">
                                            <a class=\"page-link\" href=\"{{ path('app_lieu_index', {'page': lieux.currentPage - 1, 'filter': currentFilter, 'search': searchTerm ?? ''}) }}\" aria-label=\"Previous\">
                                                <i class=\"fas fa-arrow-left\"></i>
                                            </a>
                                        </li>
                                    {% endif %}
                                    
                                    {% for i in 1..lieux.lastPage %}
                                        <li class=\"page-item {% if i == lieux.currentPage %}active{% endif %}\">
                                            <a class=\"page-link\" href=\"{{ path('app_lieu_index', {'page': i, 'filter': currentFilter, 'search': searchTerm ?? ''}) }}\">{{ i }}</a>
                                        </li>
                                    {% endfor %}
                                    
                                    {% if lieux.hasNextPage %}
                                        <li class=\"page-item\">
                                            <a class=\"page-link\" href=\"{{ path('app_lieu_index', {'page': lieux.currentPage + 1, 'filter': currentFilter, 'search': searchTerm ?? ''}) }}\" aria-label=\"Next\">
                                                <i class=\"fas fa-arrow-right\"></i>
                                            </a>
                                        </li>
                                    {% endif %}
                                </ul>
                            </nav>
                        </div>
                    {% else %}
                        <div class=\"alert alert-info\">Aucun lieu trouvé.</div>
                    {% endif %}
                </div>
                
                <div class=\"col-xl-3 col-lg-4\">
                    <aside class=\"sidebar-area sidebar-shop\">
                        <div class=\"widget widget_search\">
                            <form class=\"search-form\">
                                <input type=\"text\" placeholder=\"Rechercher des lieux...\">
                                <button type=\"submit\"><i class=\"far fa-search\"></i></button>
                            </form>
                        </div>
                        
                        <div class=\"widget widget_categories\">
                            <h3 class=\"widget_title\">Catégories</h3>
                            <ul>
                                <li><a href=\"blog.html\">Salle de fête</a> <span>(8)</span></li>
                                <li><a href=\"blog.html\">Espace extérieur</a> <span>(6)</span></li>
                                <li><a href=\"blog.html\">Salle de conférence</a> <span>(5)</span></li>
                                <li><a href=\"blog.html\">Restaurant</a> <span>(2)</span></li>
                                <li><a href=\"blog.html\">Autre</a> <span>(7)</span></li>
                            </ul>
                        </div>
                        
                        <div class=\"widget widget_price_filter\">
                            <h4 class=\"widget_title\">Filtrer par prix</h4>
                            <div class=\"price_slider_wrapper\">
                                <div class=\"price_label\">
                                    Prix: <span class=\"from\">0 €</span> — <span class=\"to\">1000 €</span>
                                </div>
                                <div class=\"price_slider\"></div>
                                <button type=\"submit\" class=\"button\">Filtrer</button>
                            </div>
                        </div>
                        
                        <div class=\"widget widget_tag_cloud\">
                            <h3 class=\"widget_title\">Tags populaires</h3>
                            <div class=\"tagcloud\">
                                <a href=\"blog.html\">Luxe</a>
                                <a href=\"blog.html\">Économique</a>
                                <a href=\"blog.html\">Grande capacité</a>
                                <a href=\"blog.html\">Centre ville</a>
                                <a href=\"blog.html\">Piscine</a>
                            </div>
                        </div>
                    </aside>
                </div>
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

    <!-- Script ajouté pour la recherche -->
    <script>
        \$(document).ready(function() {
            const searchInput = \$('#searchInput');
            const searchResults = \$('#searchResults');
            let searchTimeout;
            
            searchInput.on('input', function() {
                clearTimeout(searchTimeout);
                const term = \$(this).val().trim();
                
                if (term.length < 2) {
                    searchResults.hide().empty();
                    return;
                }
                
                searchResults.html('<div class=\"search-loading\">Recherche en cours...</div>').show();
                
                searchTimeout = setTimeout(() => {
                    \$.get('{{ path(\"app_lieu_search_autocomplete\") }}', { term: term }, function(data) {
                        if (data.length > 0) {
                            let html = '';
                            data.forEach(item => {
                                html += `
                                    <a href=\"{{ path('app_lieu_details', {'id': 'PLACEHOLDER'}) }}\".replace('PLACEHOLDER', item.id) class=\"search-result-item\">
                                        <img src=\"/\${item.image}\" alt=\"\${item.name}\">
                                        <div class=\"search-result-info\">
                                            <h6>\${item.name}</h6>
                                            <p>\${item.location} • \${item.category}</p>
                                        </div>
                                    </a>
                                `;
                            });
                            searchResults.html(html);
                        } else {
                            searchResults.html('<div class=\"no-results\">Aucun résultat trouvé</div>');
                        }
                    });
                }, 300);
            });
            
            \$(document).on('click', function(e) {
                if (!\$(e.target).closest('#searchInput, #searchResults').length) {
                    searchResults.hide();
                }
            });
        });
    </script>
</body>
</html>", "lieu/index.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\lieu\\index.html.twig");
    }
}
