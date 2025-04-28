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

/* pack/show.html.twig */
class __TwigTemplate_417ca9e95ba1b4552a234dad1ce01f5c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pack/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pack/show.html.twig"));

        // line 1
        yield "<!doctype html>
<html class=\"no-js\" lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>GoldenTouch - ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), "html", null, true);
        yield "</title>

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
</head>

<body>
    ";
        // line 22
        yield from $this->loadTemplate("Front/partials/header.html.twig", "pack/show.html.twig", 22)->unwrap()->yield($context);
        // line 23
        yield "
    <!-- Page Title -->
    <div class=\"breadcumb-wrapper\" data-bg-src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/breadcumb/breadcumb-bg.jpg"), "html", null, true);
        yield "\" style=\"padding: 15px 0;\">
        <div class=\"container\">
            <div class=\"breadcumb-content\" style=\"padding: 10px 0;\">
                <h1 class=\"breadcumb-title\" style=\"font-size: 1.5rem; margin-bottom: 5px;\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), "html", null, true);
        yield "</h1>
                <ul class=\"breadcumb-menu\" style=\"font-size: 0.9rem;\">
                    <li><a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_index");
        yield "\">Accueil</a></li>
                    <li><a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index");
        yield "\">Packs</a></li>
                    <li>Détails</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Pack Details Section -->
    <section class=\"space-top space-extra-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"pack-card\">
                        ";
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 44, $this->source); })()), "getPhoto", [], "method", false, false, false, 44)) {
            // line 45
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 45, $this->source); })()), "getPhoto", [], "method", false, false, false, 45))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 45, $this->source); })()), "getNom", [], "method", false, false, false, 45), "html", null, true);
            yield "\" class=\"pack-image\">
                        ";
        } else {
            // line 47
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/placeholder.jpg"), "html", null, true);
            yield "\" alt=\"Pack Image\" class=\"pack-image\">
                        ";
        }
        // line 49
        yield "                        
                        <div class=\"pack-content\">
                            <h2 class=\"pack-title\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 51, $this->source); })()), "nom", [], "any", false, false, false, 51), "html", null, true);
        yield "</h2>
                            <p class=\"pack-description\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 52, $this->source); })()), "description", [], "any", false, false, false, 52), "html", null, true);
        yield "</p>
                            
                            <div class=\"pack-meta\">
                                <span class=\"pack-capacity\">
                                    <i class=\"fas fa-users mr-1\"></i> ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 56, $this->source); })()), "capacite", [], "any", false, false, false, 56), "html", null, true);
        yield " personnes
                                </span>
                                <span class=\"price-badge\">
                                    ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 59, $this->source); })()), "prix", [], "any", false, false, false, 59), "html", null, true);
        yield " €
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h3 class=\"card-title\">Réservation</h3>
                            <a href=\"#\" class=\"th-btn style2 btn-block\">Réserver ce pack</a>
                            
                            ";
        // line 72
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 73
            yield "                                <div class=\"mt-3\">
                                    <a href=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74)]), "html", null, true);
            yield "\" class=\"th-btn style3\">
                                        <i class=\"fas fa-edit\"></i> Modifier
                                    </a>
                                    <form method=\"post\" action=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77)]), "html", null, true);
            yield "\" class=\"d-inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce pack ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 78, $this->source); })()), "id", [], "any", false, false, false, 78))), "html", null, true);
            yield "\">
                                        <button class=\"th-btn style4\">
                                            <i class=\"fas fa-trash-alt\"></i> Supprimer
                                        </button>
                                    </form>
                                </div>
                            ";
        }
        // line 85
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 92
        yield from $this->loadTemplate("Front/partials/footer.html.twig", "pack/show.html.twig", 92)->unwrap()->yield($context);
        // line 93
        yield "
    <!-- All JavaScript Files -->
    <script src=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery-3.6.0.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/slick.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 99
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
        return "pack/show.html.twig";
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
        return array (  235 => 99,  231 => 98,  227 => 97,  223 => 96,  219 => 95,  215 => 93,  213 => 92,  204 => 85,  194 => 78,  190 => 77,  184 => 74,  181 => 73,  179 => 72,  163 => 59,  157 => 56,  150 => 52,  146 => 51,  142 => 49,  136 => 47,  128 => 45,  126 => 44,  110 => 31,  106 => 30,  101 => 28,  95 => 25,  91 => 23,  89 => 22,  82 => 18,  78 => 17,  74 => 16,  70 => 15,  66 => 14,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>GoldenTouch - {{ pack.nom }}</title>

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
</head>

<body>
    {% include 'Front/partials/header.html.twig' %}

    <!-- Page Title -->
    <div class=\"breadcumb-wrapper\" data-bg-src=\"{{ asset('Front/img/breadcumb/breadcumb-bg.jpg') }}\" style=\"padding: 15px 0;\">
        <div class=\"container\">
            <div class=\"breadcumb-content\" style=\"padding: 10px 0;\">
                <h1 class=\"breadcumb-title\" style=\"font-size: 1.5rem; margin-bottom: 5px;\">{{ pack.nom }}</h1>
                <ul class=\"breadcumb-menu\" style=\"font-size: 0.9rem;\">
                    <li><a href=\"{{ path('front_index') }}\">Accueil</a></li>
                    <li><a href=\"{{ path('app_pack_index') }}\">Packs</a></li>
                    <li>Détails</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Pack Details Section -->
    <section class=\"space-top space-extra-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"pack-card\">
                        {% if pack.getPhoto() %}
                            <img src=\"{{ asset('uploads/packs/' ~ pack.getPhoto()) }}\" alt=\"{{ pack.getNom() }}\" class=\"pack-image\">
                        {% else %}
                            <img src=\"{{ asset('Front/img/placeholder.jpg') }}\" alt=\"Pack Image\" class=\"pack-image\">
                        {% endif %}
                        
                        <div class=\"pack-content\">
                            <h2 class=\"pack-title\">{{ pack.nom }}</h2>
                            <p class=\"pack-description\">{{ pack.description }}</p>
                            
                            <div class=\"pack-meta\">
                                <span class=\"pack-capacity\">
                                    <i class=\"fas fa-users mr-1\"></i> {{ pack.capacite }} personnes
                                </span>
                                <span class=\"price-badge\">
                                    {{ pack.prix }} €
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h3 class=\"card-title\">Réservation</h3>
                            <a href=\"#\" class=\"th-btn style2 btn-block\">Réserver ce pack</a>
                            
                            {% if is_granted('ROLE_ADMIN') %}
                                <div class=\"mt-3\">
                                    <a href=\"{{ path('app_pack_edit', {'id': pack.id}) }}\" class=\"th-btn style3\">
                                        <i class=\"fas fa-edit\"></i> Modifier
                                    </a>
                                    <form method=\"post\" action=\"{{ path('app_pack_delete', {'id': pack.id}) }}\" class=\"d-inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce pack ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ pack.id) }}\">
                                        <button class=\"th-btn style4\">
                                            <i class=\"fas fa-trash-alt\"></i> Supprimer
                                        </button>
                                    </form>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {% include 'Front/partials/footer.html.twig' %}

    <!-- All JavaScript Files -->
    <script src=\"{{ asset('Front/js/jquery-3.6.0.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/jquery.magnific-popup.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/slick.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/main.js') }}\"></script>
</body>
</html>", "pack/show.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\pack\\show.html.twig");
    }
}
