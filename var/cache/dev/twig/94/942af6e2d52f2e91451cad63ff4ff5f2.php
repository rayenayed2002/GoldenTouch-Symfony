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

/* base.html.twig */
class __TwigTemplate_38efbf99b10f5225709c45b29348c913 extends Template
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
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'keywords' => [$this, 'block_keywords'],
            'favicons' => [$this, 'block_favicons'],
            'fonts' => [$this, 'block_fonts'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'inline_styles' => [$this, 'block_inline_styles'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
            'inline_scripts' => [$this, 'block_inline_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "

<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>";
        // line 9
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <meta name=\"author\" content=\"Taxiar\">
    <meta name=\"description\" content=\"";
        // line 11
        yield from $this->unwrap()->yieldBlock('description', $context, $blocks);
        yield "\">
    <meta name=\"keywords\" content=\"";
        // line 12
        yield from $this->unwrap()->yieldBlock('keywords', $context, $blocks);
        yield "\">       <meta name=\"robots\" content=\"INDEX,FOLLOW\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    ";
        // line 15
        yield from $this->unwrap()->yieldBlock('favicons', $context, $blocks);
        // line 35
        yield "
    ";
        // line 36
        yield from $this->unwrap()->yieldBlock('fonts', $context, $blocks);
        // line 44
        yield "
    ";
        // line 45
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 54
        yield "    ";
        yield from $this->unwrap()->yieldBlock('inline_styles', $context, $blocks);
        // line 139
        yield "
</style>


</head>
    ";
        // line 144
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 579
        yield "    ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 602
        yield "
</body>

</html>

    ";
        // line 607
        yield from $this->unwrap()->yieldBlock('inline_scripts', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 9
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

        yield "Taxiar - Online Taxi Service HTML Template - Home 1";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        yield "Taxiar - Online Taxi Service HTML Template";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_keywords(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keywords"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keywords"));

        yield "Taxiar - Online Taxi Service HTML Template";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_favicons(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "favicons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "favicons"));

        // line 16
        yield "
<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-57x57.png"), "html", null, true);
        yield "\">
<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-60x60.png"), "html", null, true);
        yield "\">
<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-72x72.png"), "html", null, true);
        yield "\">
<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-76x76.png"), "html", null, true);
        yield "\">
<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-114x114.png"), "html", null, true);
        yield "\">
<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-120x120.png"), "html", null, true);
        yield "\">
<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-144x144.png"), "html", null, true);
        yield "\">
<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-152x152.png"), "html", null, true);
        yield "\">
<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-180x180.png"), "html", null, true);
        yield "\">
<link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/android-icon-192x192.png"), "html", null, true);
        yield "\">
<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/favicon-32x32.png"), "html", null, true);
        yield "\">
<link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/favicon-96x96.png"), "html", null, true);
        yield "\">
<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/favicon-16x16.png"), "html", null, true);
        yield "\">
<link rel=\"manifest\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/manifest.json"), "html", null, true);
        yield "\">
<meta name=\"msapplication-TileColor\" content=\"#ffffff\">
<meta name=\"msapplication-TileImage\" content=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/ms-icon-144x144.png"), "html", null, true);
        yield "\">
<meta name=\"theme-color\" content=\"#ffffff\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_fonts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fonts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fonts"));

        // line 37
        yield "
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link
        href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Radio+Canada:wght@300;400;500;600;700&display=swap\"
        rel=\"stylesheet\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 45
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

        // line 46
        yield "
<link rel=\"stylesheet\" href=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/bootstrap.min.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/fontawesome.min.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/magnific-popup.min.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/slick.min.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/jquery.datetimepicker.min.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/style.css"), "html", null, true);
        yield "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inline_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inline_styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inline_styles"));

        // line 55
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
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 144
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 145
        yield "
<body class=\"\">






    
<input type=\"hidden\" name=\"_token\" value=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add_to_cart"), "html", null, true);
        yield "\">


    <div class=\"th-menu-wrapper\">
        <div class=\"th-menu-area text-center\">
            <button class=\"th-menu-toggle \"><i class=\"fal fa-times\"></i></button>
            <div class=\"mobile-logo\">
                <a href=\"index.html\"><img src=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo.svg"), "html", null, true);
        yield "\" alt=\"Taxiar\"></a>
            </div>
            <div class=\"th-mobile-menu\">
                <ul>
                    <li class=\"menu-item-has-children\">
                        <a href=\"index.html\">Home</a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"index.html\">Home One </a></li>
                            <li><a href=\"index-2.html\">Home Two </a></li>
                            <li><a href=\"index-3.html\">Home Three </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"about.html\">About Us</a>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <a href=\"#\">Service</a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"service.html\">Service</a></li>
                            <li><a href=\"service-details.html\">Service Details</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <a href=\"#\">Blog</a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"blog.html\">Blog</a></li>
                            <li><a href=\"blog-details.html\">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <a href=\"#\">Pages</a>
                        <ul class=\"sub-menu\">
                            <li class=\"menu-item-has-children\"><a href=\"#\">Shop</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"shop.html\">Shop</a></li>
                                    <li><a href=\"shop-details.html\">Shop Details</a></li>
                                    <li><a href=\"cart.html\">Cart Page</a></li>
                                    <li><a href=\"checkout.html\">Checkout</a></li>
                                    <li><a href=\"wishlist.html\">Wishlist</a></li>
                                </ul>
                            </li>
                            <li><a href=\"team.html\">Driver</a></li>
                            <li><a href=\"team-details.html\">Driver Details</a></li>
                            <li><a href=\"taxi.html\">Taxi</a></li>
                            <li><a href=\"taxi-details.html\">Taxi Details</a></li>
                            <li><a href=\"booking.html\">Booking Ride</a></li>
                            <li><a href=\"faq.html\">Faq</a></li>
                            <li><a href=\"error.html\">Error</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"contact.html\">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class=\"sidemenu-wrapper shopping-cart d-none d-lg-block  \">
        <div class=\"sidemenu-content\">
            <button class=\"closeButton sideMenuCls\"><i class=\"far fa-times\"></i></button>
            <div class=\"widget woocommerce widget_shopping_cart\">
                <h3 class=\"widget_title\">Shopping cart</h3>
                <div class=\"widget_shopping_cart_content\">
                    <ul class=\"woocommerce-mini-cart cart_list product_list_widget\">
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/product/product_thumb_1_1.jpg"), "html", null, true);
        yield "\"
                                    alt=\"Cart Image\">Suspension-Coil</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>94</span>,
                            </span>
                        </li>
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/product/product_thumb_1_2.jpg"), "html", null, true);
        yield "\" alt=\"Cart Image\">absorbers
                                Brake</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>89</span>
                            </span>
                        </li>
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/product/product_thumb_1_3.jpg"), "html", null, true);
        yield "\"
                                    alt=\"Cart Image\">Motorcycle-Shock</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>75</span>
                            </span>
                        </li>
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/product/product_thumb_1_4.jpg"), "html", null, true);
        yield "\" alt=\"Cart Image\">Body
                                Spring</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>72</span>
                            </span>
                        </li>
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/product/product_thumb_1_5.jpg"), "html", null, true);
        yield "\" alt=\"Cart Image\">Body
                                Spring</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>81</span>
                            </span>
                        </li>
                    </ul>
                    <p class=\"woocommerce-mini-cart__total total\">
                        <strong>Subtotal:</strong>
                        <span class=\"woocommerce-Price-amount amount\">
                            <span class=\"woocommerce-Price-currencySymbol\">\$</span>318.00</span>
                    </p>
                    <p class=\"woocommerce-mini-cart__buttons buttons\">
                        <a href=\"cart.html\" class=\"th-btn style1 wc-forward\">View cart</a>
                        <a href=\"checkout.html\" class=\"th-btn style1 checkout wc-forward\">Checkout</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"sidemenu-wrapper d-none d-lg-block  \">
        <div class=\"sidemenu-content bg-title\">
            <button class=\"closeButton sideMenuCls\"><i class=\"far fa-times\"></i></button>
            <div class=\"widget footer-widget\">
                <h3 class=\"widget_title\">About Company</h3>
                <div class=\"th-widget-about\">
                    <p class=\"footer-text\">Centric aplications productize before front end vortals visualize front end
                        is results and value added</p>
                    <h4 class=\"footer-info-title\">WE ARE AVAILABLE</h4>
                    <p class=\"footer-text\">Mon-Sat: 09.00 am to 6.30 pm</p>
                    <a href=\"contact.html\" class=\"th-btn style3\"><span class=\"btn-text\">Contact Us</span></a>
                </div>
            </div>
            <div class=\"widget footer-widget\">
                <h3 class=\"widget_title\">Recent Posts</h3>
                <div class=\"recent-post-wrap\">
                    <div class=\"recent-post\">
                        <div class=\"media-img\">
                            <a href=\"blog-details.html\"><img src=\"";
        // line 304
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog/recent-post-1-2.jpg"), "html", null, true);
        yield "\"
                                    alt=\"Blog Image\"></a>
                        </div>
                        <div class=\"media-body\">
                            <div class=\"recent-post-meta\">
                                <a href=\"blog.html\"><i class=\"far fa-calendar-days\"></i>22th May, 2023</a>
                            </div>
                            <h4 class=\"post-title\"><a class=\"text-inherit\" href=\"blog-details.html\">How To Start Car
                                    Engine Faster</a></h4>
                            <a class=\"line-btn\" href=\"blog.html\">Read More<i class=\"fa-regular fa-arrow-right\"></i></a>
                        </div>
                    </div>
                    <div class=\"recent-post\">
                        <div class=\"media-img\">
                            <a href=\"blog-details.html\"><img src=\"";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog/recent-post-1-3.jpg"), "html", null, true);
        yield "\"
                                    alt=\"Blog Image\"></a>
                        </div>
                        <div class=\"media-body\">
                            <div class=\"recent-post-meta\">
                                <a href=\"blog.html\"><i class=\"far fa-calendar-days\"></i>25th May, 2023</a>
                            </div>
                            <h4 class=\"post-title\"><a class=\"text-inherit\" href=\"blog-details.html\">How to start car
                                    engine slowly</a></h4>
                            <a class=\"line-btn\" href=\"blog.html\">Read More<i class=\"fa-regular fa-arrow-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"widget footer-widget\">
                <h4 class=\"widget_title\">Get Newsletter</h4>
                <div class=\"newsletter-widget\">
                    <p class=\"md-20\">Sign up today for hints, tips & latest car overview and news</p>
                    <form class=\"newsletter-form\">
                        <input class=\"form-control\" type=\"email\" placeholder=\"Email Address\" required=\"\">
                        <button type=\"submit\" class=\"newsletter-btn\"><i class=\"fas fa-envelope\"></i></button>
                    </form>
                    <div class=\"th-social  style2\">
                        <a target=\"_blank\" href=\"https://facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                        <a target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                        <a target=\"_blank\" href=\"https://linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"popup-search-box d-none d-lg-block\">
        <button class=\"searchClose\"><i class=\"fal fa-times\"></i></button>
        <form action=\"#\">
            <input type=\"text\" placeholder=\"What are you looking for\">
            <button type=\"submit\"><i class=\"fal fa-search\"></i></button>
        </form>
    </div>


    <header class=\"th-header header-layout7\">
        <div class=\"header-top\">
            <div class=\"container\">
                <div class=\"row justify-content-center justify-content-md-between align-items-center gy-2\">
                    <div class=\"col-auto d-none d-md-block\">
                        <div class=\"header-links\">
                            <ul>
                                <li><i class=\"fa-thin fa-envelope\"></i><a
                                        href=\"mailto:GoldenTouch@gmail.com\">GoldenTouch@gmail.com</a>
                                </li>
                                <li><i class=\"fa-thin fa-phone\"></i><a href=\"tel:+468254762443\">(+468) 254 762 443</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-auto\">
                        <div class=\"header-right\">
                            <div class=\"langauge\">
                                <select class=\"form-select nice-select\">
                                    <option selected=\"\">English</option>
                                    <option>Hindi</option>
                                </select>
                            </div>
                            <div class=\"header-social\">
                                <span class=\"social-title\">Follow Us On:</span>
                                <a href=\"https://www.facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"https://www.twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"https://www.linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                <a href=\"https://www.instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                                <a href=\"https://www.youtube.com/\"><i class=\"fa-brands fa-youtube\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class=\"sticky-wrapper\">
    <div class=\"menu-area\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-between\">
                <div class=\"col-auto\">
                    <div class=\"header-logo\">
<img src=\"";
        // line 402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo44.png"), "html", null, true);
        yield "\" alt=\"GoldenTouch\" style=\"height: 130px;\">
                    </div>
                </div>
                <div class=\"col-auto me-xl-auto\">
                    <nav class=\"main-menu d-none d-lg-block\">
                        <ul>
                            <li>
                                <a href=\"index.html\">Pack</a>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\">Event Planner</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"";
        // line 414
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_event");
        yield "\">Ajout Event</a></li>
                                    <li><a href=\"";
        // line 415
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_draft_events");
        yield "\">Liste Event</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\">Materielles</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"#\">Ajout Materielles</a></li>
                                    <li><a href=\"#\">Liste Materielles</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\">Personnel</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"#\">Ajout Personnel</a></li>
                                    <li><a href=\"#\">Liste Personnel</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\">Lieu</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"#\">Ajout Lieu</a></li>
                                    <li><a href=\"#\">Liste Lieu</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\">Autre</a>
                                <ul class=\"sub-menu\">
                                       <li><a href=\"";
        // line 442
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_Commandes");
        yield "\">Commandes</a></li>
                                    <li><a href=\"#\">Reclamation</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <button class=\"th-menu-toggle d-inline-block d-lg-none\"><i class=\"far fa-bars\"></i></button>
                </div>
                <div class=\"col-auto d-none d-xl-block\">
                    <div class=\"header-button\">
                        <button type=\"button\" class=\"icon-btn searchBoxToggler\"><i class=\"far fa-search\"></i></button>
<a href=\"";
        // line 453
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier");
        yield "\" class=\"icon-btn \" id=\"cartIcon\">
    <i class=\"fa-regular fa-bag-shopping\"></i>
    <span class=\"badge\">0</span>
</a>

                        <a href=\"#\" class=\"icon-btn sideMenuToggler\"><i class=\"far fa-bars\"></i></a>
                        <a href=\"booking.html\" class=\"th-btn\">BOOK A TAXI<i class=\"fa-regular fa-arrow-right ms-2\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"logo-shape\"><img src=\"";
        // line 466
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo-shape.svg"), "html", null, true);
        yield "\" alt=\"\"></div>
    </header>

 <main>
        ";
        // line 470
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 471
        yield "    </main>











 <footer class=\"footer-wrapper footer-layout7\" data-bg-src=\"assets/img/bg/footer_bg_1.jpg\">
    <div class=\"widget-area\">
        <div class=\"container\">
            <div class=\"row justify-content-between\">
                <div class=\"col-md-6 col-xl-auto\">
                    <div class=\"widget footer-widget\">
                        <div class=\"th-widget-about\">
                            <div class=\"about-logo\">
                                <a href=\"index.html\"><img src=\"assets/img/logo-white3.svg\" alt=\"GoldenTouch\"></a>
                            </div>
                            <p class=\"about-text\">GoldenTouch révolutionne la planification d'événements avec des solutions tout-en-un pour des expériences inoubliables.</p>
                            <div class=\"working-time\">
                                <span class=\"title\">HORAIRES D'OUVERTURE</span>
                                <p class=\"desc\">Lun-Sam : 09h00 à 18h30</p>
                            </div>
                            <div class=\"th-social footer-social\">
                                <a href=\"https://www.facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"https://www.twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"https://www.linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                <a href=\"https://www.instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-2\">
                    <div class=\"widget widget_nav_menu footer-widget\">
                        <h3 class=\"widget_title\">Liens rapides</h3>
                        <div class=\"menu-all-pages-container\">
                            <ul class=\"menu\">
                                <li><a href=\"about.html\">À propos</a></li>
                                <li><a href=\"gallery.html\">Galerie</a></li>
                                <li><a href=\"testimonials.html\">Témoignages</a></li>
                                <li><a href=\"services.html\">Nos Services</a></li>
                                <li><a href=\"team.html\">Notre Équipe</a></li>
                                <li><a href=\"contact.html\">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-auto\">
                    <div class=\"widget footer-widget\">
                        <h3 class=\"widget_title\">Coordonnées</h3>
                        <div class=\"th-widget-about\">
                            <h4 class=\"footer-info-title\">Téléphone</h4>
                            <p class=\"footer-info\"><i class=\"fa-sharp fa-solid fa-phone\"></i><a class=\"text-inherit\"
                                    href=\"tel:+33123456789\">+33 1 23 45 67 89</a></p>
                            <h4 class=\"footer-info-title\">Email</h4>
                            <p class=\"footer-info\"><i class=\"fas fa-envelope\"></i><a class=\"text-inherit\"
                                    href=\"mailto:contact@goldentouch.com\">contact";
        // line 531
        yield "@";
        yield "goldentouch.com</a></p>
                            <h4 class=\"footer-info-title\">Adresse</h4>
                            <p class=\"footer-info\"><i class=\"fas fa-map-marker-alt\"></i>123 Rue des Événements, 75001 Paris, France</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-3\">
                    <div class=\"widget footer-widget\">
                        <h4 class=\"widget_title\">Newsletter</h4>
                        <div class=\"newsletter-widget\">
                            <p class=\"md-20\">Abonnez-vous pour recevoir nos actualités et offres exclusives. Soyez les premiers informés de nos dernières prestations.</p>
                            <div class=\"footer-search-contact mt-25\">
                                <form>
                                    <input class=\"form-control\" type=\"email\" placeholder=\"Votre email\">
                                </form>
                                <div class=\"footer-btn mt-10\">
                                    <button type=\"submit\" class=\"th-btn style3 fw-btn\">S'abonner <i
                                            class=\"fa-regular fa-arrow-right\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"copyright-wrap\">
        <div class=\"container\">
            <p class=\"copyright-text\">© 2023 <a href=\"#\">GoldenTouch</a>. Tous droits réservés.</p>
        </div>
    </div>
    <div class=\"footer-shape\"><img src=\"assets/img/shape/footer_shape.png\" alt=\"forme\">
    </div>
</footer>





    <div class=\"scroll-top\">
        <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
            <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\"
                style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\">
            </path>
        </svg>
    </div>

   ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 470
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 579
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

        // line 580
        yield "
  <script src=\"";
        // line 581
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/vendor/jquery-3.6.0.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 583
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/slick.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 585
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 587
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 589
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.counterup.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 591
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/imagesloaded.pkgd.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 592
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/isotope.pkgd.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 594
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/nice-select.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 596
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.datetimepicker.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 598
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/wow.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 600
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/main.js"), "html", null, true);
        yield "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 607
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

        // line 608
        yield "<script>


document.addEventListener('DOMContentLoaded', function() {
    // Function to update cart count from server
    async function updateCartCount() {
        try {
            const response = await fetch('";
        // line 615
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
        // line 652
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_add");
        yield "', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('input[name=\"_token\"]').value
                },
                body: JSON.stringify(eventData)
            });

            if (response.ok) {
                const result = await response.json();
                if (result.success) {
                    // Update cart count from server after successful add
                    await updateCartCount();

                    // Find and remove the card's parent column
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
                            document.querySelector('.row.gy-40').style.display = 'none';
                            document.querySelector('.row.gy-40').offsetHeight;
                            document.querySelector('.row.gy-40').style.display = '';
                        }, 300);
                    }
                } else {
                    alert('Failed to add to cart: ' + (result.message || 'Unknown error'));
                }
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Failed to add to cart');
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
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1141 => 652,  1101 => 615,  1092 => 608,  1079 => 607,  1066 => 600,  1061 => 598,  1056 => 596,  1051 => 594,  1046 => 592,  1042 => 591,  1037 => 589,  1032 => 587,  1027 => 585,  1022 => 583,  1017 => 581,  1014 => 580,  1001 => 579,  979 => 470,  920 => 531,  858 => 471,  856 => 470,  849 => 466,  833 => 453,  819 => 442,  789 => 415,  785 => 414,  770 => 402,  683 => 318,  666 => 304,  623 => 264,  611 => 255,  599 => 246,  587 => 237,  575 => 228,  505 => 161,  495 => 154,  484 => 145,  471 => 144,  377 => 55,  364 => 54,  351 => 52,  347 => 51,  343 => 50,  339 => 49,  335 => 48,  331 => 47,  328 => 46,  315 => 45,  298 => 37,  285 => 36,  271 => 32,  266 => 30,  262 => 29,  258 => 28,  254 => 27,  250 => 26,  246 => 25,  242 => 24,  238 => 23,  234 => 22,  230 => 21,  226 => 20,  222 => 19,  218 => 18,  214 => 17,  211 => 16,  198 => 15,  175 => 12,  152 => 11,  129 => 9,  118 => 607,  111 => 602,  108 => 579,  106 => 144,  99 => 139,  96 => 54,  94 => 45,  91 => 44,  89 => 36,  86 => 35,  84 => 15,  78 => 12,  74 => 11,  69 => 9,  59 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("

<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>{% block title %}Taxiar - Online Taxi Service HTML Template - Home 1{% endblock %}</title>
        <meta name=\"author\" content=\"Taxiar\">
    <meta name=\"description\" content=\"{% block description %}Taxiar - Online Taxi Service HTML Template{% endblock %}\">
    <meta name=\"keywords\" content=\"{% block keywords %}Taxiar - Online Taxi Service HTML Template{% endblock %}\">       <meta name=\"robots\" content=\"INDEX,FOLLOW\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    {% block favicons %}

<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"{{ asset('Front/img/favicons/apple-icon-57x57.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"{{ asset('Front/img/favicons/apple-icon-60x60.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{ asset('Front/img/favicons/apple-icon-72x72.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('Front/img/favicons/apple-icon-76x76.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{ asset('Front/img/favicons/apple-icon-114x114.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"{{ asset('Front/img/favicons/apple-icon-120x120.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"{{ asset('Front/img/favicons/apple-icon-144x144.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"{{ asset('Front/img/favicons/apple-icon-152x152.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('Front/img/favicons/apple-icon-180x180.png') }}\">
<link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"{{ asset('Front/img/favicons/android-icon-192x192.png') }}\">
<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('Front/img/favicons/favicon-32x32.png') }}\">
<link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"{{ asset('Front/img/favicons/favicon-96x96.png') }}\">
<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('Front/img/favicons/favicon-16x16.png') }}\">
<link rel=\"manifest\" href=\"{{ asset('Front/img/favicons/manifest.json') }}\">
<meta name=\"msapplication-TileColor\" content=\"#ffffff\">
<meta name=\"msapplication-TileImage\" content=\"{{ asset('Front/img/favicons/ms-icon-144x144.png') }}\">
<meta name=\"theme-color\" content=\"#ffffff\">
    {% endblock %}

    {% block fonts %}

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link
        href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Radio+Canada:wght@300;400;500;600;700&display=swap\"
        rel=\"stylesheet\">
    {% endblock %}

    {% block stylesheets %}

<link rel=\"stylesheet\" href=\"{{ asset('Front/css/bootstrap.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('Front/css/fontawesome.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('Front/css/magnific-popup.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('Front/css/slick.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('Front/css/jquery.datetimepicker.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('Front/css/style.css') }}\">
    {% endblock %}
    {% block inline_styles %}

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
        {% endblock %}

</style>


</head>
    {% block body %}

<body class=\"\">






    
<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('add_to_cart') }}\">


    <div class=\"th-menu-wrapper\">
        <div class=\"th-menu-area text-center\">
            <button class=\"th-menu-toggle \"><i class=\"fal fa-times\"></i></button>
            <div class=\"mobile-logo\">
                <a href=\"index.html\"><img src=\"{{ asset('Front/img/logo.svg') }}\" alt=\"Taxiar\"></a>
            </div>
            <div class=\"th-mobile-menu\">
                <ul>
                    <li class=\"menu-item-has-children\">
                        <a href=\"index.html\">Home</a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"index.html\">Home One </a></li>
                            <li><a href=\"index-2.html\">Home Two </a></li>
                            <li><a href=\"index-3.html\">Home Three </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"about.html\">About Us</a>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <a href=\"#\">Service</a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"service.html\">Service</a></li>
                            <li><a href=\"service-details.html\">Service Details</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <a href=\"#\">Blog</a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"blog.html\">Blog</a></li>
                            <li><a href=\"blog-details.html\">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children\">
                        <a href=\"#\">Pages</a>
                        <ul class=\"sub-menu\">
                            <li class=\"menu-item-has-children\"><a href=\"#\">Shop</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"shop.html\">Shop</a></li>
                                    <li><a href=\"shop-details.html\">Shop Details</a></li>
                                    <li><a href=\"cart.html\">Cart Page</a></li>
                                    <li><a href=\"checkout.html\">Checkout</a></li>
                                    <li><a href=\"wishlist.html\">Wishlist</a></li>
                                </ul>
                            </li>
                            <li><a href=\"team.html\">Driver</a></li>
                            <li><a href=\"team-details.html\">Driver Details</a></li>
                            <li><a href=\"taxi.html\">Taxi</a></li>
                            <li><a href=\"taxi-details.html\">Taxi Details</a></li>
                            <li><a href=\"booking.html\">Booking Ride</a></li>
                            <li><a href=\"faq.html\">Faq</a></li>
                            <li><a href=\"error.html\">Error</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"contact.html\">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class=\"sidemenu-wrapper shopping-cart d-none d-lg-block  \">
        <div class=\"sidemenu-content\">
            <button class=\"closeButton sideMenuCls\"><i class=\"far fa-times\"></i></button>
            <div class=\"widget woocommerce widget_shopping_cart\">
                <h3 class=\"widget_title\">Shopping cart</h3>
                <div class=\"widget_shopping_cart_content\">
                    <ul class=\"woocommerce-mini-cart cart_list product_list_widget\">
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"{{ asset('Front/img/product/product_thumb_1_1.jpg') }}\"
                                    alt=\"Cart Image\">Suspension-Coil</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>94</span>,
                            </span>
                        </li>
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"{{ asset('Front/img/product/product_thumb_1_2.jpg') }}\" alt=\"Cart Image\">absorbers
                                Brake</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>89</span>
                            </span>
                        </li>
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"{{ asset('Front/img/product/product_thumb_1_3.jpg') }}\"
                                    alt=\"Cart Image\">Motorcycle-Shock</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>75</span>
                            </span>
                        </li>
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"{{ asset('Front/img/product/product_thumb_1_4.jpg') }}\" alt=\"Cart Image\">Body
                                Spring</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>72</span>
                            </span>
                        </li>
                        <li class=\"woocommerce-mini-cart-item mini_cart_item\">
                            <a href=\"#\" class=\"remove remove_from_cart_button\"><i class=\"far fa-times\"></i></a>
                            <a href=\"#\"><img src=\"{{ asset('Front/img/product/product_thumb_1_5.jpg') }}\" alt=\"Cart Image\">Body
                                Spring</a>
                            <span class=\"quantity\">1 ×
                                <span class=\"woocommerce-Price-amount amount\">
                                    <span class=\"woocommerce-Price-currencySymbol\">\$</span>81</span>
                            </span>
                        </li>
                    </ul>
                    <p class=\"woocommerce-mini-cart__total total\">
                        <strong>Subtotal:</strong>
                        <span class=\"woocommerce-Price-amount amount\">
                            <span class=\"woocommerce-Price-currencySymbol\">\$</span>318.00</span>
                    </p>
                    <p class=\"woocommerce-mini-cart__buttons buttons\">
                        <a href=\"cart.html\" class=\"th-btn style1 wc-forward\">View cart</a>
                        <a href=\"checkout.html\" class=\"th-btn style1 checkout wc-forward\">Checkout</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"sidemenu-wrapper d-none d-lg-block  \">
        <div class=\"sidemenu-content bg-title\">
            <button class=\"closeButton sideMenuCls\"><i class=\"far fa-times\"></i></button>
            <div class=\"widget footer-widget\">
                <h3 class=\"widget_title\">About Company</h3>
                <div class=\"th-widget-about\">
                    <p class=\"footer-text\">Centric aplications productize before front end vortals visualize front end
                        is results and value added</p>
                    <h4 class=\"footer-info-title\">WE ARE AVAILABLE</h4>
                    <p class=\"footer-text\">Mon-Sat: 09.00 am to 6.30 pm</p>
                    <a href=\"contact.html\" class=\"th-btn style3\"><span class=\"btn-text\">Contact Us</span></a>
                </div>
            </div>
            <div class=\"widget footer-widget\">
                <h3 class=\"widget_title\">Recent Posts</h3>
                <div class=\"recent-post-wrap\">
                    <div class=\"recent-post\">
                        <div class=\"media-img\">
                            <a href=\"blog-details.html\"><img src=\"{{ asset('Front/img/blog/recent-post-1-2.jpg') }}\"
                                    alt=\"Blog Image\"></a>
                        </div>
                        <div class=\"media-body\">
                            <div class=\"recent-post-meta\">
                                <a href=\"blog.html\"><i class=\"far fa-calendar-days\"></i>22th May, 2023</a>
                            </div>
                            <h4 class=\"post-title\"><a class=\"text-inherit\" href=\"blog-details.html\">How To Start Car
                                    Engine Faster</a></h4>
                            <a class=\"line-btn\" href=\"blog.html\">Read More<i class=\"fa-regular fa-arrow-right\"></i></a>
                        </div>
                    </div>
                    <div class=\"recent-post\">
                        <div class=\"media-img\">
                            <a href=\"blog-details.html\"><img src=\"{{ asset('Front/img/blog/recent-post-1-3.jpg') }}\"
                                    alt=\"Blog Image\"></a>
                        </div>
                        <div class=\"media-body\">
                            <div class=\"recent-post-meta\">
                                <a href=\"blog.html\"><i class=\"far fa-calendar-days\"></i>25th May, 2023</a>
                            </div>
                            <h4 class=\"post-title\"><a class=\"text-inherit\" href=\"blog-details.html\">How to start car
                                    engine slowly</a></h4>
                            <a class=\"line-btn\" href=\"blog.html\">Read More<i class=\"fa-regular fa-arrow-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"widget footer-widget\">
                <h4 class=\"widget_title\">Get Newsletter</h4>
                <div class=\"newsletter-widget\">
                    <p class=\"md-20\">Sign up today for hints, tips & latest car overview and news</p>
                    <form class=\"newsletter-form\">
                        <input class=\"form-control\" type=\"email\" placeholder=\"Email Address\" required=\"\">
                        <button type=\"submit\" class=\"newsletter-btn\"><i class=\"fas fa-envelope\"></i></button>
                    </form>
                    <div class=\"th-social  style2\">
                        <a target=\"_blank\" href=\"https://facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                        <a target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                        <a target=\"_blank\" href=\"https://linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"popup-search-box d-none d-lg-block\">
        <button class=\"searchClose\"><i class=\"fal fa-times\"></i></button>
        <form action=\"#\">
            <input type=\"text\" placeholder=\"What are you looking for\">
            <button type=\"submit\"><i class=\"fal fa-search\"></i></button>
        </form>
    </div>


    <header class=\"th-header header-layout7\">
        <div class=\"header-top\">
            <div class=\"container\">
                <div class=\"row justify-content-center justify-content-md-between align-items-center gy-2\">
                    <div class=\"col-auto d-none d-md-block\">
                        <div class=\"header-links\">
                            <ul>
                                <li><i class=\"fa-thin fa-envelope\"></i><a
                                        href=\"mailto:GoldenTouch@gmail.com\">GoldenTouch@gmail.com</a>
                                </li>
                                <li><i class=\"fa-thin fa-phone\"></i><a href=\"tel:+468254762443\">(+468) 254 762 443</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-auto\">
                        <div class=\"header-right\">
                            <div class=\"langauge\">
                                <select class=\"form-select nice-select\">
                                    <option selected=\"\">English</option>
                                    <option>Hindi</option>
                                </select>
                            </div>
                            <div class=\"header-social\">
                                <span class=\"social-title\">Follow Us On:</span>
                                <a href=\"https://www.facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"https://www.twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"https://www.linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                <a href=\"https://www.instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                                <a href=\"https://www.youtube.com/\"><i class=\"fa-brands fa-youtube\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class=\"sticky-wrapper\">
    <div class=\"menu-area\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-between\">
                <div class=\"col-auto\">
                    <div class=\"header-logo\">
<img src=\"{{ asset('Front/img/logo44.png') }}\" alt=\"GoldenTouch\" style=\"height: 130px;\">
                    </div>
                </div>
                <div class=\"col-auto me-xl-auto\">
                    <nav class=\"main-menu d-none d-lg-block\">
                        <ul>
                            <li>
                                <a href=\"index.html\">Pack</a>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\">Event Planner</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"{{ path('app_add_event') }}\">Ajout Event</a></li>
                                    <li><a href=\"{{ path('app_draft_events') }}\">Liste Event</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\">Materielles</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"#\">Ajout Materielles</a></li>
                                    <li><a href=\"#\">Liste Materielles</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\">Personnel</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"#\">Ajout Personnel</a></li>
                                    <li><a href=\"#\">Liste Personnel</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\">Lieu</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"#\">Ajout Lieu</a></li>
                                    <li><a href=\"#\">Liste Lieu</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\">Autre</a>
                                <ul class=\"sub-menu\">
                                       <li><a href=\"{{ path('app_my_Commandes') }}\">Commandes</a></li>
                                    <li><a href=\"#\">Reclamation</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <button class=\"th-menu-toggle d-inline-block d-lg-none\"><i class=\"far fa-bars\"></i></button>
                </div>
                <div class=\"col-auto d-none d-xl-block\">
                    <div class=\"header-button\">
                        <button type=\"button\" class=\"icon-btn searchBoxToggler\"><i class=\"far fa-search\"></i></button>
<a href=\"{{ path('app_panier') }}\" class=\"icon-btn \" id=\"cartIcon\">
    <i class=\"fa-regular fa-bag-shopping\"></i>
    <span class=\"badge\">0</span>
</a>

                        <a href=\"#\" class=\"icon-btn sideMenuToggler\"><i class=\"far fa-bars\"></i></a>
                        <a href=\"booking.html\" class=\"th-btn\">BOOK A TAXI<i class=\"fa-regular fa-arrow-right ms-2\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"logo-shape\"><img src=\"{{ asset('Front/img/logo-shape.svg') }}\" alt=\"\"></div>
    </header>

 <main>
        {% block content %}{% endblock %}
    </main>











 <footer class=\"footer-wrapper footer-layout7\" data-bg-src=\"assets/img/bg/footer_bg_1.jpg\">
    <div class=\"widget-area\">
        <div class=\"container\">
            <div class=\"row justify-content-between\">
                <div class=\"col-md-6 col-xl-auto\">
                    <div class=\"widget footer-widget\">
                        <div class=\"th-widget-about\">
                            <div class=\"about-logo\">
                                <a href=\"index.html\"><img src=\"assets/img/logo-white3.svg\" alt=\"GoldenTouch\"></a>
                            </div>
                            <p class=\"about-text\">GoldenTouch révolutionne la planification d'événements avec des solutions tout-en-un pour des expériences inoubliables.</p>
                            <div class=\"working-time\">
                                <span class=\"title\">HORAIRES D'OUVERTURE</span>
                                <p class=\"desc\">Lun-Sam : 09h00 à 18h30</p>
                            </div>
                            <div class=\"th-social footer-social\">
                                <a href=\"https://www.facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"https://www.twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"https://www.linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                <a href=\"https://www.instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-2\">
                    <div class=\"widget widget_nav_menu footer-widget\">
                        <h3 class=\"widget_title\">Liens rapides</h3>
                        <div class=\"menu-all-pages-container\">
                            <ul class=\"menu\">
                                <li><a href=\"about.html\">À propos</a></li>
                                <li><a href=\"gallery.html\">Galerie</a></li>
                                <li><a href=\"testimonials.html\">Témoignages</a></li>
                                <li><a href=\"services.html\">Nos Services</a></li>
                                <li><a href=\"team.html\">Notre Équipe</a></li>
                                <li><a href=\"contact.html\">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-auto\">
                    <div class=\"widget footer-widget\">
                        <h3 class=\"widget_title\">Coordonnées</h3>
                        <div class=\"th-widget-about\">
                            <h4 class=\"footer-info-title\">Téléphone</h4>
                            <p class=\"footer-info\"><i class=\"fa-sharp fa-solid fa-phone\"></i><a class=\"text-inherit\"
                                    href=\"tel:+33123456789\">+33 1 23 45 67 89</a></p>
                            <h4 class=\"footer-info-title\">Email</h4>
                            <p class=\"footer-info\"><i class=\"fas fa-envelope\"></i><a class=\"text-inherit\"
                                    href=\"mailto:contact@goldentouch.com\">contact{{ '@' }}goldentouch.com</a></p>
                            <h4 class=\"footer-info-title\">Adresse</h4>
                            <p class=\"footer-info\"><i class=\"fas fa-map-marker-alt\"></i>123 Rue des Événements, 75001 Paris, France</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-3\">
                    <div class=\"widget footer-widget\">
                        <h4 class=\"widget_title\">Newsletter</h4>
                        <div class=\"newsletter-widget\">
                            <p class=\"md-20\">Abonnez-vous pour recevoir nos actualités et offres exclusives. Soyez les premiers informés de nos dernières prestations.</p>
                            <div class=\"footer-search-contact mt-25\">
                                <form>
                                    <input class=\"form-control\" type=\"email\" placeholder=\"Votre email\">
                                </form>
                                <div class=\"footer-btn mt-10\">
                                    <button type=\"submit\" class=\"th-btn style3 fw-btn\">S'abonner <i
                                            class=\"fa-regular fa-arrow-right\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"copyright-wrap\">
        <div class=\"container\">
            <p class=\"copyright-text\">© 2023 <a href=\"#\">GoldenTouch</a>. Tous droits réservés.</p>
        </div>
    </div>
    <div class=\"footer-shape\"><img src=\"assets/img/shape/footer_shape.png\" alt=\"forme\">
    </div>
</footer>





    <div class=\"scroll-top\">
        <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
            <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\"
                style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\">
            </path>
        </svg>
    </div>

   {% endblock %}
    {% block javascripts %}

  <script src=\"{{ asset('Front/js/vendor/jquery-3.6.0.min.js') }}\"></script>

<script src=\"{{ asset('Front/js/slick.min.js') }}\"></script>

<script src=\"{{ asset('Front/js/bootstrap.min.js') }}\"></script>

<script src=\"{{ asset('Front/js/jquery.magnific-popup.min.js') }}\"></script>

<script src=\"{{ asset('Front/js/jquery.counterup.min.js') }}\"></script>

<script src=\"{{ asset('Front/js/imagesloaded.pkgd.min.js') }}\"></script>
<script src=\"{{ asset('Front/js/isotope.pkgd.min.js') }}\"></script>

<script src=\"{{ asset('Front/js/nice-select.min.js') }}\"></script>

<script src=\"{{ asset('Front/js/jquery.datetimepicker.min.js') }}\"></script>

<script src=\"{{ asset('Front/js/wow.min.js') }}\"></script>

<script src=\"{{ asset('Front/js/main.js') }}\"></script>
    {% endblock %}

</body>

</html>

    {% block inline_scripts %}
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
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('input[name=\"_token\"]').value
                },
                body: JSON.stringify(eventData)
            });

            if (response.ok) {
                const result = await response.json();
                if (result.success) {
                    // Update cart count from server after successful add
                    await updateCartCount();

                    // Find and remove the card's parent column
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
                            document.querySelector('.row.gy-40').style.display = 'none';
                            document.querySelector('.row.gy-40').offsetHeight;
                            document.querySelector('.row.gy-40').style.display = '';
                        }, 300);
                    }
                } else {
                    alert('Failed to add to cart: ' + (result.message || 'Unknown error'));
                }
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Failed to add to cart');
        }
    });
});


    </script>

    {% endblock %}
", "base.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\base.html.twig");
    }
}
