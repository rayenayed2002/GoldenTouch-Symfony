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
class __TwigTemplate_b5f972815911fe95b5fe03c7532beff7 extends Template
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
            <div class=\"row\">
                ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 117, $this->source); })()), "results", [], "any", false, false, false, 117));
        foreach ($context['_seq'] as $context["_key"] => $context["pack"]) {
            // line 118
            yield "                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"pack-card\">
                        <div class=\"pack-image-wrapper\">
                            ";
            // line 121
            if (CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "getPhoto", [], "method", false, false, false, 121)) {
                // line 122
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "getPhoto", [], "method", false, false, false, 122))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "getNom", [], "method", false, false, false, 122), "html", null, true);
                yield "\" class=\"pack-image\">
                            ";
            } else {
                // line 124
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/placeholder.jpg"), "html", null, true);
                yield "\" alt=\"Pack Image\" class=\"pack-image\">
                            ";
            }
            // line 126
            yield "                        </div>
                        <div class=\"pack-content p-6\">
                            <div class=\"flex items-center justify-between mb-4\">
                                <h3 class=\"pack-title !text-2xl !font-bold !mb-0\">";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "nom", [], "any", false, false, false, 129), "html", null, true);
            yield "</h3>
                            </div>
                            <p class=\"pack-description !text-gray-600 !mb-6\">";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "description", [], "any", false, false, false, 131), 0, 150), "html", null, true);
            yield "...</p>
image.png                            
                            <div class=\"pack-meta !mt-auto\">
                                <div class=\"flex items-center gap-2\">
                                    <span class=\"pack-capacity !bg-gray-100 !text-gray-700 !px-4 !py-2 !rounded-full\">
                                        <i class=\"fas fa-users mr-1\"></i> ";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "capacite", [], "any", false, false, false, 136), "html", null, true);
            yield " personnes
                                    </span>
                                    <span class=\"price-badge bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium\">
                                        ";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "prix", [], "any", false, false, false, 139), "html", null, true);
            yield " €
                                    </span>
                                </div>
                                <div class=\"pack-actions\">
                                    <a href=\"";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 143)]), "html", null, true);
            yield "\" class=\"th-btn style2\">Voir détails</a>
                                    ";
            // line 144
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 145
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 145)]), "html", null, true);
                yield "\" class=\"th-btn style3\"><i class=\"fas fa-edit\"></i></a>
                                        <form method=\"post\" action=\"";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 146)]), "html", null, true);
                yield "\" style=\"display: inline-block;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce pack ?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "id", [], "any", false, false, false, 147))), "html", null, true);
                yield "\">
                                            <button class=\"th-btn style4\"><i class=\"fas fa-trash-alt\"></i></button>
                                        </form>
                                    ";
            }
            // line 151
            yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pack'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        yield "            </div>

            <!-- Pagination -->
            <div class=\"th-pagination text-center\">
                <ul>
                    ";
        // line 162
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 162, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 162)) {
            // line 163
            yield "                        <li><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 163, $this->source); })()), "currentPage", [], "any", false, false, false, 163) - 1)]), "html", null, true);
            yield "\"><i class=\"fas fa-arrow-left\"></i></a></li>
                    ";
        }
        // line 165
        yield "                    
                    ";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 166, $this->source); })()), "lastPage", [], "any", false, false, false, 166)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 167
            yield "                        <li><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index", ["page" => $context["i"]]), "html", null, true);
            yield "\" ";
            if (($context["i"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 167, $this->source); })()), "currentPage", [], "any", false, false, false, 167))) {
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
        // line 169
        yield "                    
                    ";
        // line 170
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 170, $this->source); })()), "hasNextPage", [], "any", false, false, false, 170)) {
            // line 171
            yield "                        <li><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 171, $this->source); })()), "currentPage", [], "any", false, false, false, 171) + 1)]), "html", null, true);
            yield "\"><i class=\"fas fa-arrow-right\"></i></a></li>
                    ";
        }
        // line 173
        yield "                </ul>
            </div>
        </div>
    </section>

    ";
        // line 178
        yield from $this->loadTemplate("Front/partials/footer.html.twig", "pack/pack.html.twig", 178)->unwrap()->yield($context);
        // line 179
        yield "
    <!-- Scroll Top -->
    <div class=\"scroll-top\">
        <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
            <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\"></path>
        </svg>
    </div>

    <!-- All JavaScript Files -->
    <script src=\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery-3.6.0.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/slick.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 192
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
        return array (  363 => 192,  359 => 191,  355 => 190,  351 => 189,  347 => 188,  336 => 179,  334 => 178,  327 => 173,  321 => 171,  319 => 170,  316 => 169,  301 => 167,  297 => 166,  294 => 165,  288 => 163,  286 => 162,  279 => 157,  268 => 151,  261 => 147,  257 => 146,  252 => 145,  250 => 144,  246 => 143,  239 => 139,  233 => 136,  225 => 131,  220 => 129,  215 => 126,  209 => 124,  201 => 122,  199 => 121,  194 => 118,  190 => 117,  161 => 91,  153 => 86,  149 => 84,  147 => 83,  79 => 18,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  48 => 1,);
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
            <div class=\"row\">
                {% for pack in packs.results %}
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"pack-card\">
                        <div class=\"pack-image-wrapper\">
                            {% if pack.getPhoto() %}
                                <img src=\"{{ asset('uploads/packs/' ~ pack.getPhoto()) }}\" alt=\"{{ pack.getNom() }}\" class=\"pack-image\">
                            {% else %}
                                <img src=\"{{ asset('Front/img/placeholder.jpg') }}\" alt=\"Pack Image\" class=\"pack-image\">
                            {% endif %}
                        </div>
                        <div class=\"pack-content p-6\">
                            <div class=\"flex items-center justify-between mb-4\">
                                <h3 class=\"pack-title !text-2xl !font-bold !mb-0\">{{ pack.nom }}</h3>
                            </div>
                            <p class=\"pack-description !text-gray-600 !mb-6\">{{ pack.description|slice(0, 150) }}...</p>
image.png                            
                            <div class=\"pack-meta !mt-auto\">
                                <div class=\"flex items-center gap-2\">
                                    <span class=\"pack-capacity !bg-gray-100 !text-gray-700 !px-4 !py-2 !rounded-full\">
                                        <i class=\"fas fa-users mr-1\"></i> {{ pack.capacite }} personnes
                                    </span>
                                    <span class=\"price-badge bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium\">
                                        {{ pack.prix }} €
                                    </span>
                                </div>
                                <div class=\"pack-actions\">
                                    <a href=\"{{ path('app_pack_show', {'id': pack.id}) }}\" class=\"th-btn style2\">Voir détails</a>
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <a href=\"{{ path('app_pack_edit', {'id': pack.id}) }}\" class=\"th-btn style3\"><i class=\"fas fa-edit\"></i></a>
                                        <form method=\"post\" action=\"{{ path('app_pack_delete', {'id': pack.id}) }}\" style=\"display: inline-block;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce pack ?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ pack.id) }}\">
                                            <button class=\"th-btn style4\"><i class=\"fas fa-trash-alt\"></i></button>
                                        </form>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>

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
