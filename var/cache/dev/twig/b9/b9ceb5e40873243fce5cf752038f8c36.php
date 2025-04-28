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
class __TwigTemplate_e1bf5e866b58a90c46a3d01ffaed81ad extends Template
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
    <link rel=\"stylesheet\" href=\"https://unpkg.com/aos@next/dist/aos.css\" />
</head>

<body>
    ";
        // line 23
        yield from $this->loadTemplate("Front/partials/header.html.twig", "pack/show.html.twig", 23)->unwrap()->yield($context);
        // line 24
        yield "
    <!-- Hero Section -->
    <div class=\"hero-wrapper position-relative overflow-hidden mb-5\">
        <div class=\"hero-bg\" style=\"background: url('";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/packs/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 27, $this->source); })()), "getPhoto", [], "method", false, false, false, 27))), "html", null, true);
        yield "') center/cover no-repeat; height: 70vh; position: relative;\">
            <div class=\"dark-overlay\" style=\"position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.5);\"></div>
        </div>
        <div class=\"container position-relative\" style=\"height: 70vh; margin-top: -70vh;\">
            <div class=\"row h-100 align-items-center\">
                <div class=\"col-xl-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                    <div class=\"hero-content text-white p-4\">
                        <h1 class=\"hero-title display-4 fw-bold mb-4\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 34, $this->source); })()), "nom", [], "any", false, false, false, 34), "html", null, true);
        yield "</h1>
                        <p class=\"hero-text fs-5 mb-4\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), 0, 150), "html", null, true);
        yield "...</p>
                        <div class=\"hero-btns d-flex gap-3\">
                            <a href=\"#booking\" class=\"th-btn\">Réserver maintenant<i class=\"fas fa-arrow-right ms-2\"></i></a>
                            <a href=\"#details\" class=\"th-btn style2\">Découvrir plus<i class=\"fas fa-info-circle ms-2\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pack Details Section -->
    <section class=\"space\" id=\"details\">
        <div class=\"container\">
            <div class=\"row gx-5\">
                <!-- Main Content -->
                <div class=\"col-lg-8\" data-aos=\"fade-up\">
                    <!-- Tabs Navigation -->
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#description\" type=\"button\">Description</button>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#services\" type=\"button\">Services inclus</button>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#reviews\" type=\"button\">Avis clients</button>
                        </li>
                    </ul>

                    <!-- Tabs Content -->
                    <div class=\"tab-content\" id=\"myTabContent\">
                        <div class=\"tab-pane fade show active\" id=\"description\">
                            <div class=\"content-box\">
                                <h3 class=\"h4 mb-4\">À propos de ce pack</h3>
                                <p class=\"mb-4\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 70, $this->source); })()), "description", [], "any", false, false, false, 70), "html", null, true);
        yield "</p>
                                <div class=\"feature-list\">
                                    <div class=\"row g-4\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"feature-box d-flex align-items-center\">
                                                <i class=\"fas fa-users fs-3 text-theme me-3\"></i>
                                                <div>
                                                    <h6 class=\"mb-1\">Capacité</h6>
                                                    <p class=\"mb-0\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 78, $this->source); })()), "capacite", [], "any", false, false, false, 78), "html", null, true);
        yield " personnes</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <div class=\"feature-box d-flex align-items-center\">
                                                <i class=\"fas fa-clock fs-3 text-theme me-3\"></i>
                                                <div>
                                                    <h6 class=\"mb-1\">Durée</h6>
                                                    <p class=\"mb-0\">Personnalisable</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"services\">
                            <div class=\"content-box\">
                                <h3 class=\"h4 mb-4\">Services inclus dans ce pack</h3>
                                <div class=\"row g-4\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"service-card p-4 rounded-3 bg-light\">
                                            <i class=\"fas fa-utensils fs-2 text-theme mb-3\"></i>
                                            <h5>Service traiteur</h5>
                                            <p>Menu personnalisé selon vos préférences</p>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"service-card p-4 rounded-3 bg-light\">
                                            <i class=\"fas fa-music fs-2 text-theme mb-3\"></i>
                                            <h5>Animation musicale</h5>
                                            <p>DJ professionnel et équipement sonore</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"reviews\">
                            <div class=\"content-box\">
                                <h3 class=\"h4 mb-4\">Avis de nos clients</h3>
                                <div class=\"review-card p-4 rounded-3 bg-light mb-4\">
                                    <div class=\"d-flex align-items-center mb-3\">
                                        <img src=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/testimonial/testi_1_1.jpg"), "html", null, true);
        yield "\" alt=\"User\" class=\"rounded-circle\" width=\"50\">
                                        <div class=\"ms-3\">
                                            <h6 class=\"mb-1\">Sophie Martin</h6>
                                            <div class=\"rating text-warning\">
                                                <i class=\"fas fa-star\"></i>
                                                <i class=\"fas fa-star\"></i>
                                                <i class=\"fas fa-star\"></i>
                                                <i class=\"fas fa-star\"></i>
                                                <i class=\"fas fa-star\"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class=\"mb-0\">\"Une organisation parfaite ! L'équipe de GoldenTouch a su répondre à toutes nos attentes.\"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class=\"col-lg-4\" data-aos=\"fade-left\">
                    <div class=\"sticky-top\" style=\"top: 100px;\">
                        <div class=\"booking-card bg-white rounded-3 overflow-hidden\" id=\"booking\">
                            <div class=\"card-header bg-theme text-white p-4\">
                                <h3 class=\"h4 mb-0\">";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 145, $this->source); })()), "prix", [], "any", false, false, false, 145), "html", null, true);
        yield "€</h3>
                                <p class=\"mb-0\">Prix par pack</p>
                            </div>
                            <div class=\"card-body p-4\">
                                <form action=\"#\" method=\"post\" class=\"booking-form\">
                                    <div class=\"mb-4\">
                                        <label class=\"form-label\">Date de l'événement</label>
                                        <input type=\"date\" class=\"form-control\" required>
                                    </div>
                                    <div class=\"mb-4\">
                                        <label class=\"form-label\">Nombre de personnes</label>
                                        <input type=\"number\" class=\"form-control\" min=\"1\" max=\"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 156, $this->source); })()), "capacite", [], "any", false, false, false, 156), "html", null, true);
        yield "\" required>
                                    </div>
                                    <button type=\"submit\" class=\"th-btn w-100\">Réserver maintenant</button>
                                </form>
                            </div>
                        </div>

                        ";
        // line 163
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 164
            yield "                            <div class=\"admin-actions mt-4 d-flex gap-2\">
                                <a href=\"";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 165, $this->source); })()), "id", [], "any", false, false, false, 165)]), "html", null, true);
            yield "\" class=\"th-btn style3 flex-grow-1\">
                                    <i class=\"fas fa-edit\"></i> Modifier
                                </a>
                                <form method=\"post\" action=\"";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 168, $this->source); })()), "id", [], "any", false, false, false, 168)]), "html", null, true);
            yield "\" class=\"flex-grow-1\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce pack ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 169, $this->source); })()), "id", [], "any", false, false, false, 169))), "html", null, true);
            yield "\">
                                    <button class=\"th-btn style4 w-100\">
                                        <i class=\"fas fa-trash-alt\"></i> Supprimer
                                    </button>
                                </form>
                            </div>
                        ";
        }
        // line 176
        yield "                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Similar Packs Section -->
    <section class=\"space-bottom\">
        <div class=\"container\">
            <div class=\"title-area text-center\" data-aos=\"fade-up\">
                <span class=\"sub-title\">Découvrez plus</span>
                <h2 class=\"sec-title\">Packs similaires</h2>
            </div>
            <div class=\"row slider-shadow th-carousel\" data-slide-show=\"3\" data-lg-slide-show=\"2\" data-md-slide-show=\"2\" data-sm-slide-show=\"1\">
                <div class=\"col-md-6 col-xl-4\">
                    <div class=\"taxi-box\">
                        <div class=\"taxi-img\">
                            <img src=\"";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/taxi/taxi_1_1.jpg"), "html", null, true);
        yield "\" alt=\"taxi image\">
                        </div>
                        <div class=\"taxi-content\">
                            <h3 class=\"box-title\">Pack Standard</h3>
                            <p class=\"taxi-price\">À partir de 500€</p>
                            <a href=\"#\" class=\"th-btn\">Voir les détails<i class=\"fas fa-arrow-right ms-2\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 206
        yield from $this->loadTemplate("Front/partials/footer.html.twig", "pack/show.html.twig", 206)->unwrap()->yield($context);
        // line 207
        yield "
    <!-- Scroll To Top -->
    <div class=\"scroll-top\">
        <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
            <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\"></path>
        </svg>
    </div>

    <!-- All JavaScript Files -->
    <script src=\"";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery-3.6.0.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/slick.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"https://unpkg.com/aos@next/dist/aos.js\"></script>
    <script src=\"";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/main.js"), "html", null, true);
        yield "\"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true
        });

        // Sticky Header
        \$(window).on('scroll', function() {
            if (\$(window).scrollTop() > 50) {
                \$('.sticky-wrapper').addClass('sticky');
            } else {
                \$('.sticky-wrapper').removeClass('sticky');
            }
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
        return array (  347 => 221,  342 => 219,  338 => 218,  334 => 217,  330 => 216,  319 => 207,  317 => 206,  301 => 193,  282 => 176,  272 => 169,  268 => 168,  262 => 165,  259 => 164,  257 => 163,  247 => 156,  233 => 145,  206 => 121,  160 => 78,  149 => 70,  111 => 35,  107 => 34,  97 => 27,  92 => 24,  90 => 23,  82 => 18,  78 => 17,  74 => 16,  70 => 15,  66 => 14,  55 => 6,  48 => 1,);
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
    <link rel=\"stylesheet\" href=\"https://unpkg.com/aos@next/dist/aos.css\" />
</head>

<body>
    {% include 'Front/partials/header.html.twig' %}

    <!-- Hero Section -->
    <div class=\"hero-wrapper position-relative overflow-hidden mb-5\">
        <div class=\"hero-bg\" style=\"background: url('{{ asset('uploads/packs/' ~ pack.getPhoto()) }}') center/cover no-repeat; height: 70vh; position: relative;\">
            <div class=\"dark-overlay\" style=\"position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.5);\"></div>
        </div>
        <div class=\"container position-relative\" style=\"height: 70vh; margin-top: -70vh;\">
            <div class=\"row h-100 align-items-center\">
                <div class=\"col-xl-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                    <div class=\"hero-content text-white p-4\">
                        <h1 class=\"hero-title display-4 fw-bold mb-4\">{{ pack.nom }}</h1>
                        <p class=\"hero-text fs-5 mb-4\">{{ pack.description|slice(0, 150) }}...</p>
                        <div class=\"hero-btns d-flex gap-3\">
                            <a href=\"#booking\" class=\"th-btn\">Réserver maintenant<i class=\"fas fa-arrow-right ms-2\"></i></a>
                            <a href=\"#details\" class=\"th-btn style2\">Découvrir plus<i class=\"fas fa-info-circle ms-2\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pack Details Section -->
    <section class=\"space\" id=\"details\">
        <div class=\"container\">
            <div class=\"row gx-5\">
                <!-- Main Content -->
                <div class=\"col-lg-8\" data-aos=\"fade-up\">
                    <!-- Tabs Navigation -->
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#description\" type=\"button\">Description</button>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#services\" type=\"button\">Services inclus</button>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#reviews\" type=\"button\">Avis clients</button>
                        </li>
                    </ul>

                    <!-- Tabs Content -->
                    <div class=\"tab-content\" id=\"myTabContent\">
                        <div class=\"tab-pane fade show active\" id=\"description\">
                            <div class=\"content-box\">
                                <h3 class=\"h4 mb-4\">À propos de ce pack</h3>
                                <p class=\"mb-4\">{{ pack.description }}</p>
                                <div class=\"feature-list\">
                                    <div class=\"row g-4\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"feature-box d-flex align-items-center\">
                                                <i class=\"fas fa-users fs-3 text-theme me-3\"></i>
                                                <div>
                                                    <h6 class=\"mb-1\">Capacité</h6>
                                                    <p class=\"mb-0\">{{ pack.capacite }} personnes</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <div class=\"feature-box d-flex align-items-center\">
                                                <i class=\"fas fa-clock fs-3 text-theme me-3\"></i>
                                                <div>
                                                    <h6 class=\"mb-1\">Durée</h6>
                                                    <p class=\"mb-0\">Personnalisable</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"services\">
                            <div class=\"content-box\">
                                <h3 class=\"h4 mb-4\">Services inclus dans ce pack</h3>
                                <div class=\"row g-4\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"service-card p-4 rounded-3 bg-light\">
                                            <i class=\"fas fa-utensils fs-2 text-theme mb-3\"></i>
                                            <h5>Service traiteur</h5>
                                            <p>Menu personnalisé selon vos préférences</p>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"service-card p-4 rounded-3 bg-light\">
                                            <i class=\"fas fa-music fs-2 text-theme mb-3\"></i>
                                            <h5>Animation musicale</h5>
                                            <p>DJ professionnel et équipement sonore</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"reviews\">
                            <div class=\"content-box\">
                                <h3 class=\"h4 mb-4\">Avis de nos clients</h3>
                                <div class=\"review-card p-4 rounded-3 bg-light mb-4\">
                                    <div class=\"d-flex align-items-center mb-3\">
                                        <img src=\"{{ asset('Front/img/testimonial/testi_1_1.jpg') }}\" alt=\"User\" class=\"rounded-circle\" width=\"50\">
                                        <div class=\"ms-3\">
                                            <h6 class=\"mb-1\">Sophie Martin</h6>
                                            <div class=\"rating text-warning\">
                                                <i class=\"fas fa-star\"></i>
                                                <i class=\"fas fa-star\"></i>
                                                <i class=\"fas fa-star\"></i>
                                                <i class=\"fas fa-star\"></i>
                                                <i class=\"fas fa-star\"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class=\"mb-0\">\"Une organisation parfaite ! L'équipe de GoldenTouch a su répondre à toutes nos attentes.\"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class=\"col-lg-4\" data-aos=\"fade-left\">
                    <div class=\"sticky-top\" style=\"top: 100px;\">
                        <div class=\"booking-card bg-white rounded-3 overflow-hidden\" id=\"booking\">
                            <div class=\"card-header bg-theme text-white p-4\">
                                <h3 class=\"h4 mb-0\">{{ pack.prix }}€</h3>
                                <p class=\"mb-0\">Prix par pack</p>
                            </div>
                            <div class=\"card-body p-4\">
                                <form action=\"#\" method=\"post\" class=\"booking-form\">
                                    <div class=\"mb-4\">
                                        <label class=\"form-label\">Date de l'événement</label>
                                        <input type=\"date\" class=\"form-control\" required>
                                    </div>
                                    <div class=\"mb-4\">
                                        <label class=\"form-label\">Nombre de personnes</label>
                                        <input type=\"number\" class=\"form-control\" min=\"1\" max=\"{{ pack.capacite }}\" required>
                                    </div>
                                    <button type=\"submit\" class=\"th-btn w-100\">Réserver maintenant</button>
                                </form>
                            </div>
                        </div>

                        {% if is_granted('ROLE_ADMIN') %}
                            <div class=\"admin-actions mt-4 d-flex gap-2\">
                                <a href=\"{{ path('app_pack_edit', {'id': pack.id}) }}\" class=\"th-btn style3 flex-grow-1\">
                                    <i class=\"fas fa-edit\"></i> Modifier
                                </a>
                                <form method=\"post\" action=\"{{ path('app_pack_delete', {'id': pack.id}) }}\" class=\"flex-grow-1\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce pack ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ pack.id) }}\">
                                    <button class=\"th-btn style4 w-100\">
                                        <i class=\"fas fa-trash-alt\"></i> Supprimer
                                    </button>
                                </form>
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Similar Packs Section -->
    <section class=\"space-bottom\">
        <div class=\"container\">
            <div class=\"title-area text-center\" data-aos=\"fade-up\">
                <span class=\"sub-title\">Découvrez plus</span>
                <h2 class=\"sec-title\">Packs similaires</h2>
            </div>
            <div class=\"row slider-shadow th-carousel\" data-slide-show=\"3\" data-lg-slide-show=\"2\" data-md-slide-show=\"2\" data-sm-slide-show=\"1\">
                <div class=\"col-md-6 col-xl-4\">
                    <div class=\"taxi-box\">
                        <div class=\"taxi-img\">
                            <img src=\"{{ asset('Front/img/taxi/taxi_1_1.jpg') }}\" alt=\"taxi image\">
                        </div>
                        <div class=\"taxi-content\">
                            <h3 class=\"box-title\">Pack Standard</h3>
                            <p class=\"taxi-price\">À partir de 500€</p>
                            <a href=\"#\" class=\"th-btn\">Voir les détails<i class=\"fas fa-arrow-right ms-2\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {% include 'Front/partials/footer.html.twig' %}

    <!-- Scroll To Top -->
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
    <script src=\"https://unpkg.com/aos@next/dist/aos.js\"></script>
    <script src=\"{{ asset('Front/js/main.js') }}\"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true
        });

        // Sticky Header
        \$(window).on('scroll', function() {
            if (\$(window).scrollTop() > 50) {
                \$('.sticky-wrapper').addClass('sticky');
            } else {
                \$('.sticky-wrapper').removeClass('sticky');
            }
        });
    </script>
</body>
</html>", "pack/show.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\pack\\show.html.twig");
    }
}
