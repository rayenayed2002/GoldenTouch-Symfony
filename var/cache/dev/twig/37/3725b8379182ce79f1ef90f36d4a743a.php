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
class __TwigTemplate_edd7b15362346b00f3f33c79d0003652 extends Template
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
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/nouislider@14.6.3/distribute/nouislider.min.css\">

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
        // line 84
        yield from $this->loadTemplate("Front/partials/header.html.twig", "pack/pack.html.twig", 84)->unwrap()->yield($context);
        // line 85
        yield "
    <!-- Page Title -->
    <div class=\"breadcumb-wrapper\" data-bg-src=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/breadcumb/breadcumb-bg.jpg"), "html", null, true);
        yield "\" style=\"padding: 15px 0;\">
        <div class=\"container\">
            <div class=\"breadcumb-content\" style=\"padding: 10px 0;\">
                <h1 class=\"breadcumb-title\" style=\"font-size: 1.5rem; margin-bottom: 5px;\">Nos Packs</h1>
                <ul class=\"breadcumb-menu\" style=\"font-size: 0.9rem;\">
                    <li><a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_index");
        yield "\">Accueil</a></li>
                    <li><a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index");
        yield "\">Packs</a></li>
                    
                </ul>
            </div>
        </div>
    </div>

    <!-- Pack List Section -->
    <section class=\"space-top space-extra-bottom\">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-xl-9 col-lg-8\">
                    <div class=\"th-sort-bar\">
                        <div class=\"row justify-content-between align-items-center\">
                            <div class=\"col-md\">
                                <p class=\"woocommerce-result-count\">Affichage de ";
        // line 108
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 108, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 108)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 108, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 108), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 108, $this->source); })())), "html", null, true)));
        yield " packs</p>
                            </div>
                            <div class=\"col-md-auto\">
                                <form class=\"woocommerce-ordering\" method=\"get\">
                                    <select name=\"orderby\" class=\"orderby\" aria-label=\"Ordre des packs\">
                                        ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sortOptions"]) || array_key_exists("sortOptions", $context) ? $context["sortOptions"] : (function () { throw new RuntimeError('Variable "sortOptions" does not exist.', 113, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 114
            yield "    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 114), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 114) == (isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 114, $this->source); })()))) {
                yield "selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, false, 114), "html", null, true);
            yield "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        yield "                                    </select>
                                </form>
                                <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    const orderForm = document.querySelector('.woocommerce-ordering');
                                    if(orderForm) {
                                        const orderSelect = orderForm.querySelector('.orderby');
                                        if(orderSelect) {
                                            orderSelect.addEventListener('change', function(e) {
                                                e.preventDefault();
                                                loadFilteredPacks();
                                            });
                                        }
                                    }
                                });
                                </script>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pack list container for AJAX -->
                    <div id=\"pack-list-container\">
                        ";
        // line 138
        yield from $this->loadTemplate("pack/_pack_list.html.twig", "pack/pack.html.twig", 138)->unwrap()->yield(CoreExtension::merge($context, ["packs" =>         // line 139
(isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 139, $this->source); })()), "selectedCategory" =>         // line 140
(isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 140, $this->source); })()), "minPrice" =>         // line 141
(isset($context["minPrice"]) || array_key_exists("minPrice", $context) ? $context["minPrice"] : (function () { throw new RuntimeError('Variable "minPrice" does not exist.', 141, $this->source); })()), "maxPrice" =>         // line 142
(isset($context["maxPrice"]) || array_key_exists("maxPrice", $context) ? $context["maxPrice"] : (function () { throw new RuntimeError('Variable "maxPrice" does not exist.', 142, $this->source); })())]));
        // line 144
        yield "                    </div>
                </div>
                
                <div class=\"col-xl-3 col-lg-4\">
                    <aside class=\"sidebar-area sidebar-shop\">
                        ";
        // line 150
        yield "                        <div class=\"widget widget_search\" style=\"border: 2px solid #ffd700; border-radius: 10px; box-shadow: 0 2px 12px rgba(255,215,0,0.06); margin-bottom: 32px;\">
                            <h4 style=\"color: #bfa100; margin-bottom: 12px; text-align: center;\"> Rechercher un pack</h4>
                            <form class=\"search-form\" id=\"pack-search-form\" onsubmit=\"return false;\" style=\"display: flex; gap: 8px; align-items: center;\">
                                <input type=\"text\" name=\"q\" id=\"pack-search-input\" value=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "request", [], "any", false, false, false, 153), "get", ["q"], "method", false, false, false, 153), "html", null, true);
        yield "\" placeholder=\"Rechercher des packs...\" autocomplete=\"off\" style=\"flex: 1; padding: 8px 12px; border-radius: 6px; border: 1px solid #ccc; font-size: 1rem;\">
                                <button type=\"submit\" style=\"background: #ffd700; color: #222; border: none; border-radius: 6px; padding: 8px 14px; font-weight: bold;\">
                                    <i class=\"far fa-search\"></i>
                                </button>
                            </form>
                            <script>
                            (function() {
                                var input = document.getElementById('pack-search-input');
                                var form = document.getElementById('pack-search-form');
                                var debounce;
                                // Restore scroll and focus after reload
                                window.addEventListener('DOMContentLoaded', function() {
                                    if (window.sessionStorage.getItem('packSearchScroll')) {
                                        window.scrollTo(0, parseInt(window.sessionStorage.getItem('packSearchScroll'), 10));
                                        window.sessionStorage.removeItem('packSearchScroll');
                                    }
                                    if (input) {
                                        input.focus();
                                        // Move cursor to end
                                        var val = input.value;
                                        input.value = '';
                                        input.value = val;
                                    }
                                });
                                if (input && form) {
                                    input.addEventListener('input', function() {
                                        clearTimeout(debounce);
                                        debounce = setTimeout(function() {
                                            window.sessionStorage.setItem('packSearchScroll', window.scrollY);
                                            loadFilteredPacks();
                                        }, 300);
                                    });
                                }
                            })();
                            </script>
                        </div>
                        
                        <div class=\"widget widget_categories\">
                            <h3 class=\"widget_title\">Catégories</h3>
                            <ul>
                                ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 193, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 194
            yield "                                    ";
            $context["count"] = 0;
            // line 195
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["packs"]) || array_key_exists("packs", $context) ? $context["packs"] : (function () { throw new RuntimeError('Variable "packs" does not exist.', 195, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pack"]) {
                // line 196
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["pack"], "categorie", [], "any", false, false, false, 196) == CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "categorie", [], "any", false, false, false, 196))) {
                    // line 197
                    yield "                                            ";
                    $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 197, $this->source); })()) + 1);
                    // line 198
                    yield "                                        ";
                }
                // line 199
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['pack'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            yield "                                    <li>
                                        <a href=\"#\" class=\"category-filter\" data-category=\"";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "categorie", [], "any", false, false, false, 201), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "categorie", [], "any", false, false, false, 201), "html", null, true);
            yield "</a>
                                        <span>(";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 202, $this->source); })()), "html", null, true);
            yield ")</span>
                                    </li>
                                ";
            $context['_iterated'] = true;
        }
        // line 204
        if (!$context['_iterated']) {
            // line 205
            yield "                                    <li><span>Aucune catégorie trouvée</span></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        yield "                            </ul>
                        </div>
                        
                        <div class=\"widget widget_price_filter\">
                            <h4 class=\"widget_title\">Filtrer par prix</h4>
                            <div class=\"price_slider_wrapper\">
                                <div class=\"price_label\">
                                    Prix : <span class=\"from\">0 €</span> — <span class=\"to\">10000 €</span>
                                </div>
                                <div class=\"price_slider\"></div>
                                <button type=\"submit\" class=\"button\">Filtrer</button>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 226
        yield from $this->loadTemplate("Front/partials/footer.html.twig", "pack/pack.html.twig", 226)->unwrap()->yield($context);
        // line 227
        yield "
    <!-- Scroll Top -->
    <div class=\"scroll-top\">
        <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
            <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\"></path>
        </svg>
    </div>

    <!-- All JavaScript Files -->
    <script src=\"";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery-3.6.0.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/slick.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/main.js"), "html", null, true);
        yield "\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/nouislider@14.6.3/distribute/nouislider.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize price slider
            const priceSlider = document.querySelector('.price_slider');
            if (priceSlider) {
                noUiSlider.create(priceSlider, {
                    start: [0, 10000],
                    connect: true,
                    range: {
                        'min': 0,
                        'max': 10000
                    },
                    format: {
                        to: function(value) {
                            return Math.round(value);
                        },
                        from: function(value) {
                            return Number(value);
                        }
                    }
                });

                const fromSpan = document.querySelector('.price_label .from');
                const toSpan = document.querySelector('.price_label .to');

                priceSlider.noUiSlider.on('update', function(values, handle) {
                    const [min, max] = values.map(val => Math.round(val));
                    if (handle === 0) {
                        fromSpan.textContent = min + '€';
                    } else {
                        toSpan.textContent = max + '€';
                    }
                });
            }

            // Function to load filtered packs
            function loadFilteredPacks(page = 1) {
                const category = document.querySelector('.category-filter.active')?.dataset.category || 'all';
                const priceValues = priceSlider ? priceSlider.noUiSlider.get() : [0, 10000];
                const minPrice = parseFloat(priceValues[0]);
                const maxPrice = parseFloat(priceValues[1]);
                const searchTerm = document.getElementById('pack-search-input')?.value || '';
                // Show loading indicator
                const packsContainer = document.querySelector('#pack-list-container');
                packsContainer.innerHTML = '<div class=\"col-12 text-center py-5\"><div class=\"spinner-border text-primary\" role=\"status\"></div></div>';

                const orderby = document.querySelector('.orderby')?.value || 'menu_order';
                const params = new URLSearchParams({
                    page,
                    category,
                    minPrice,
                    maxPrice,
                    q: searchTerm,
                    orderby
                });

                fetch(`/pack?\${params.toString()}`, {
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                })
                    .then(response => response.text())
                    .then(html => {
                        packsContainer.innerHTML = html;
                        // Update URL without reloading
                        const newUrl = new URL(window.location);
                        newUrl.searchParams.set('category', category);
                        newUrl.searchParams.set('minPrice', minPrice);
                        newUrl.searchParams.set('maxPrice', maxPrice);
                        newUrl.searchParams.set('page', page);
                        newUrl.searchParams.set('q', searchTerm);
                        window.history.pushState({}, '', newUrl);
                    })
                    .catch(error => {
                        packsContainer.innerHTML = `<div class=\"col-12\"><div class=\"alert alert-danger\">Erreur lors du chargement des packs: \${error.message}</div></div>`;
                    });
            }

            // Event listeners for filters
            document.querySelector('.orderby')?.addEventListener('change', () => loadFilteredPacks());
            
            if (priceSlider) {
                priceSlider.noUiSlider.on('change', () => loadFilteredPacks());
            }
            
            document.querySelector('.widget_price_filter .button')?.addEventListener('click', function(e) {
                e.preventDefault();
                loadFilteredPacks();
            });

            // Category filter click handler
            document.addEventListener('click', function(e) {
                if (e.target.classList.contains('category-filter')) {
                    e.preventDefault();
                    document.querySelectorAll('.category-filter').forEach(link => link.classList.remove('active'));
                    e.target.classList.add('active');
                    loadFilteredPacks();
                }
            });

            // Handle pagination clicks (delegated event)
            document.addEventListener('click', function(e) {
                if (e.target.closest('.th-pagination a')) {
                    e.preventDefault();
                    const url = new URL(e.target.closest('a').href);
                    const page = url.searchParams.get('page');
                    loadFilteredPacks(page);
                }
            });

            // Search input instant filter
            const searchInput = document.getElementById('pack-search-input');
            if (searchInput) {
                let debounce;
                searchInput.addEventListener('input', function() {
                    clearTimeout(debounce);
                    debounce = setTimeout(() => {
                        loadFilteredPacks();
                    }, 400);
                });
            }

            // Initialize with first page
            loadFilteredPacks();
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
        return array (  399 => 240,  395 => 239,  391 => 238,  387 => 237,  383 => 236,  372 => 227,  370 => 226,  349 => 207,  342 => 205,  340 => 204,  333 => 202,  327 => 201,  324 => 200,  318 => 199,  315 => 198,  312 => 197,  309 => 196,  304 => 195,  301 => 194,  296 => 193,  253 => 153,  248 => 150,  241 => 144,  239 => 142,  238 => 141,  237 => 140,  236 => 139,  235 => 138,  211 => 116,  196 => 114,  192 => 113,  184 => 108,  166 => 93,  162 => 92,  154 => 87,  150 => 85,  148 => 84,  79 => 18,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  48 => 1,);
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
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/nouislider@14.6.3/distribute/nouislider.min.css\">

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
                    <li><a href=\"{{ path('app_pack_index') }}\">Packs</a></li>
                    
                </ul>
            </div>
        </div>
    </div>

    <!-- Pack List Section -->
    <section class=\"space-top space-extra-bottom\">
        <div class=\"container\">
            <div class=\"row flex-row-reverse\">
                <div class=\"col-xl-9 col-lg-8\">
                    <div class=\"th-sort-bar\">
                        <div class=\"row justify-content-between align-items-center\">
                            <div class=\"col-md\">
                                <p class=\"woocommerce-result-count\">Affichage de {{ packs.getTotalItemCount ? packs.getTotalItemCount : packs|length }} packs</p>
                            </div>
                            <div class=\"col-md-auto\">
                                <form class=\"woocommerce-ordering\" method=\"get\">
                                    <select name=\"orderby\" class=\"orderby\" aria-label=\"Ordre des packs\">
                                        {% for option in sortOptions %}
    <option value=\"{{ option.value }}\" {% if option.value == currentSort %}selected=\"selected\"{% endif %}>{{ option.label }}</option>
{% endfor %}
                                    </select>
                                </form>
                                <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    const orderForm = document.querySelector('.woocommerce-ordering');
                                    if(orderForm) {
                                        const orderSelect = orderForm.querySelector('.orderby');
                                        if(orderSelect) {
                                            orderSelect.addEventListener('change', function(e) {
                                                e.preventDefault();
                                                loadFilteredPacks();
                                            });
                                        }
                                    }
                                });
                                </script>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pack list container for AJAX -->
                    <div id=\"pack-list-container\">
                        {% include 'pack/_pack_list.html.twig' with {
                            packs: packs,
                            selectedCategory: selectedCategory,
                            minPrice: minPrice,
                            maxPrice: maxPrice
                        } %}
                    </div>
                </div>
                
                <div class=\"col-xl-3 col-lg-4\">
                    <aside class=\"sidebar-area sidebar-shop\">
                        {# --- Pack Search Filter --- #}
                        <div class=\"widget widget_search\" style=\"border: 2px solid #ffd700; border-radius: 10px; box-shadow: 0 2px 12px rgba(255,215,0,0.06); margin-bottom: 32px;\">
                            <h4 style=\"color: #bfa100; margin-bottom: 12px; text-align: center;\"> Rechercher un pack</h4>
                            <form class=\"search-form\" id=\"pack-search-form\" onsubmit=\"return false;\" style=\"display: flex; gap: 8px; align-items: center;\">
                                <input type=\"text\" name=\"q\" id=\"pack-search-input\" value=\"{{ app.request.get('q') }}\" placeholder=\"Rechercher des packs...\" autocomplete=\"off\" style=\"flex: 1; padding: 8px 12px; border-radius: 6px; border: 1px solid #ccc; font-size: 1rem;\">
                                <button type=\"submit\" style=\"background: #ffd700; color: #222; border: none; border-radius: 6px; padding: 8px 14px; font-weight: bold;\">
                                    <i class=\"far fa-search\"></i>
                                </button>
                            </form>
                            <script>
                            (function() {
                                var input = document.getElementById('pack-search-input');
                                var form = document.getElementById('pack-search-form');
                                var debounce;
                                // Restore scroll and focus after reload
                                window.addEventListener('DOMContentLoaded', function() {
                                    if (window.sessionStorage.getItem('packSearchScroll')) {
                                        window.scrollTo(0, parseInt(window.sessionStorage.getItem('packSearchScroll'), 10));
                                        window.sessionStorage.removeItem('packSearchScroll');
                                    }
                                    if (input) {
                                        input.focus();
                                        // Move cursor to end
                                        var val = input.value;
                                        input.value = '';
                                        input.value = val;
                                    }
                                });
                                if (input && form) {
                                    input.addEventListener('input', function() {
                                        clearTimeout(debounce);
                                        debounce = setTimeout(function() {
                                            window.sessionStorage.setItem('packSearchScroll', window.scrollY);
                                            loadFilteredPacks();
                                        }, 300);
                                    });
                                }
                            })();
                            </script>
                        </div>
                        
                        <div class=\"widget widget_categories\">
                            <h3 class=\"widget_title\">Catégories</h3>
                            <ul>
                                {% for cat in categories %}
                                    {% set count = 0 %}
                                    {% for pack in packs %}
                                        {% if pack.categorie == cat.categorie %}
                                            {% set count = count + 1 %}
                                        {% endif %}
                                    {% endfor %}
                                    <li>
                                        <a href=\"#\" class=\"category-filter\" data-category=\"{{ cat.categorie }}\">{{ cat.categorie }}</a>
                                        <span>({{ count }})</span>
                                    </li>
                                {% else %}
                                    <li><span>Aucune catégorie trouvée</span></li>
                                {% endfor %}
                            </ul>
                        </div>
                        
                        <div class=\"widget widget_price_filter\">
                            <h4 class=\"widget_title\">Filtrer par prix</h4>
                            <div class=\"price_slider_wrapper\">
                                <div class=\"price_label\">
                                    Prix : <span class=\"from\">0 €</span> — <span class=\"to\">10000 €</span>
                                </div>
                                <div class=\"price_slider\"></div>
                                <button type=\"submit\" class=\"button\">Filtrer</button>
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
    <script src=\"https://cdn.jsdelivr.net/npm/nouislider@14.6.3/distribute/nouislider.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize price slider
            const priceSlider = document.querySelector('.price_slider');
            if (priceSlider) {
                noUiSlider.create(priceSlider, {
                    start: [0, 10000],
                    connect: true,
                    range: {
                        'min': 0,
                        'max': 10000
                    },
                    format: {
                        to: function(value) {
                            return Math.round(value);
                        },
                        from: function(value) {
                            return Number(value);
                        }
                    }
                });

                const fromSpan = document.querySelector('.price_label .from');
                const toSpan = document.querySelector('.price_label .to');

                priceSlider.noUiSlider.on('update', function(values, handle) {
                    const [min, max] = values.map(val => Math.round(val));
                    if (handle === 0) {
                        fromSpan.textContent = min + '€';
                    } else {
                        toSpan.textContent = max + '€';
                    }
                });
            }

            // Function to load filtered packs
            function loadFilteredPacks(page = 1) {
                const category = document.querySelector('.category-filter.active')?.dataset.category || 'all';
                const priceValues = priceSlider ? priceSlider.noUiSlider.get() : [0, 10000];
                const minPrice = parseFloat(priceValues[0]);
                const maxPrice = parseFloat(priceValues[1]);
                const searchTerm = document.getElementById('pack-search-input')?.value || '';
                // Show loading indicator
                const packsContainer = document.querySelector('#pack-list-container');
                packsContainer.innerHTML = '<div class=\"col-12 text-center py-5\"><div class=\"spinner-border text-primary\" role=\"status\"></div></div>';

                const orderby = document.querySelector('.orderby')?.value || 'menu_order';
                const params = new URLSearchParams({
                    page,
                    category,
                    minPrice,
                    maxPrice,
                    q: searchTerm,
                    orderby
                });

                fetch(`/pack?\${params.toString()}`, {
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                })
                    .then(response => response.text())
                    .then(html => {
                        packsContainer.innerHTML = html;
                        // Update URL without reloading
                        const newUrl = new URL(window.location);
                        newUrl.searchParams.set('category', category);
                        newUrl.searchParams.set('minPrice', minPrice);
                        newUrl.searchParams.set('maxPrice', maxPrice);
                        newUrl.searchParams.set('page', page);
                        newUrl.searchParams.set('q', searchTerm);
                        window.history.pushState({}, '', newUrl);
                    })
                    .catch(error => {
                        packsContainer.innerHTML = `<div class=\"col-12\"><div class=\"alert alert-danger\">Erreur lors du chargement des packs: \${error.message}</div></div>`;
                    });
            }

            // Event listeners for filters
            document.querySelector('.orderby')?.addEventListener('change', () => loadFilteredPacks());
            
            if (priceSlider) {
                priceSlider.noUiSlider.on('change', () => loadFilteredPacks());
            }
            
            document.querySelector('.widget_price_filter .button')?.addEventListener('click', function(e) {
                e.preventDefault();
                loadFilteredPacks();
            });

            // Category filter click handler
            document.addEventListener('click', function(e) {
                if (e.target.classList.contains('category-filter')) {
                    e.preventDefault();
                    document.querySelectorAll('.category-filter').forEach(link => link.classList.remove('active'));
                    e.target.classList.add('active');
                    loadFilteredPacks();
                }
            });

            // Handle pagination clicks (delegated event)
            document.addEventListener('click', function(e) {
                if (e.target.closest('.th-pagination a')) {
                    e.preventDefault();
                    const url = new URL(e.target.closest('a').href);
                    const page = url.searchParams.get('page');
                    loadFilteredPacks(page);
                }
            });

            // Search input instant filter
            const searchInput = document.getElementById('pack-search-input');
            if (searchInput) {
                let debounce;
                searchInput.addEventListener('input', function() {
                    clearTimeout(debounce);
                    debounce = setTimeout(() => {
                        loadFilteredPacks();
                    }, 400);
                });
            }

            // Initialize with first page
            loadFilteredPacks();
        });
    </script>
</body>
</html>", "pack/pack.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\pack\\pack.html.twig");
    }
}
