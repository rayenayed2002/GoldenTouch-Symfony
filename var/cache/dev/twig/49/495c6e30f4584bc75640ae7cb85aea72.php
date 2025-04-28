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

/* security/registration.html.twig */
class __TwigTemplate_7d9dc2d5133758eea2b7bf9916a8b385 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html
  lang=\"en\"
  class=\"light-style customizer-hide\"
  dir=\"ltr\"
  data-theme=\"theme-default\"
  data-assets-path=\"\"
  data-template=\"vertical-menu-template\">
  <head>
    <meta charset=\"utf-8\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />

    <title>Inscription</title>

    <meta name=\"description\" content=\"\" />

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/favicon.ico"), "html", null, true);
        yield "\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link
      href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\"
      rel=\"stylesheet\" />

    <!-- Icons -->
    <link rel=\"stylesheet\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fonts/fontawesome.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fonts/tabler-icons.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fonts/flag-icons.css"), "html", null, true);
        yield "\" />

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/core.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/theme-default.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/demo.css"), "html", null, true);
        yield "\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/node-waves/node-waves.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/typeahead-js/typeahead.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/formvalidation/dist/css/formValidation.min.css"), "html", null, true);
        yield "\" />

    <!-- Page CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/css/pages/page-auth.css"), "html", null, true);
        yield "\" />

    <!-- Helpers -->
    <script src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/template-customizer.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/config.js"), "html", null, true);
        yield "\"></script>
    
    <style>
    .auth-cover-bg-color {
        background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/register.jpg"), "html", null, true);
        yield "');
        background-size: cover;
        background-position: center;
    }
    
    .brand-content {
        max-width: 500px;
        color: white;
        z-index: 2;
        padding: 2rem;
    }
    
    .brand-logo {
        margin-bottom: 1.5rem;
    }
    
    .btn-arrow {
        position: relative;
        overflow: hidden;
        transition: all 0.3s;
    }
    
    .btn-arrow i {
        transition: transform 0.3s;
    }
    
    .btn-arrow:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(78, 115, 223, 0.3);
    }
    
    .btn-arrow:hover i {
        transform: translateX(3px);
    }
    
    .form-password-toggle .input-group-text {
        cursor: pointer;
    }
    </style>
  </head>

  <body>
    <div class=\"authentication-wrapper authentication-cover authentication-bg\">
      <div class=\"authentication-inner row\">
        <!-- Left Panel with Branding -->
        <div class=\"d-none d-lg-flex col-lg-7 p-0\">
          <div class=\"auth-cover-bg d-flex justify-content-center align-items-center\">
            <div class=\"brand-content text-center\">
                <div class=\"brand-logo mb-4\">
                    <svg width=\"48\" height=\"48\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z\" stroke=\"white\" stroke-width=\"2\"/>
                        <path d=\"M16 8H8M16 16H8M12 12H8\" stroke=\"white\" stroke-width=\"2\" stroke-linecap=\"round\"/>
                    </svg>
                </div>
                            <img src=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.jpeg"), "html", null, true);
        yield "\" alt=\"logo\" />
                <p class=\"lead text-light\">Créez votre compte pour commencer</p>
            </div>
          </div>
        </div>

        <!-- Right Panel with Registration Form -->
        <div class=\"d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4\">
          <div class=\"w-px-400 mx-auto\">
            <div class=\"app-brand mb-4\">
              <a href=\"#\" class=\"app-brand-link gap-2\">
                <span class=\"app-brand-logo demo\">
                  <!-- SVG Logo -->
                </span>
              </a>
            </div>
            
            <h3 class=\"mb-1 fw-bold\">Créer un compte</h3>
            <p class=\"mb-4\">Remplissez les informations requises</p>

            ";
        // line 129
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), 'form_start', ["attr" => ["class" => "mb-3", "novalidate" => "novalidate"]]);
        yield "

              <!-- Name Fields -->
              <div class=\"row mb-3\">
                <div class=\"col-md-6 mb-3 mb-md-0\">
                  <div class=\"form-floating form-floating-outline\">
                    ";
        // line 135
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "firstName", [], "any", false, false, false, 135), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 136
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "firstName", [], "any", false, false, false, 136), "vars", [], "any", false, false, false, 136), "errors", [], "any", false, false, false, 136))) ? (" is-invalid") : (""))), "placeholder" => "Prénom"]]);
        // line 138
        yield "
                    <label for=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "firstName", [], "any", false, false, false, 139), "vars", [], "any", false, false, false, 139), "id", [], "any", false, false, false, 139), "html", null, true);
        yield "\">Prénom</label>
                    <div class=\"invalid-feedback\">
                      ";
        // line 141
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "firstName", [], "any", false, false, false, 141), 'errors');
        yield "
                    </div>
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-floating form-floating-outline\">
                    ";
        // line 147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "lastName", [], "any", false, false, false, 147), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 148
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "lastName", [], "any", false, false, false, 148), "vars", [], "any", false, false, false, 148), "errors", [], "any", false, false, false, 148))) ? (" is-invalid") : (""))), "placeholder" => "Nom"]]);
        // line 150
        yield "
                    <label for=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "lastName", [], "any", false, false, false, 151), "vars", [], "any", false, false, false, 151), "id", [], "any", false, false, false, 151), "html", null, true);
        yield "\">Nom</label>
                    <div class=\"invalid-feedback\">
                      ";
        // line 153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "lastName", [], "any", false, false, false, 153), 'errors');
        yield "
                    </div>
                  </div>
                </div>
              </div>

              <!-- Email Field -->
              <div class=\"mb-3\">
                <div class=\"form-floating form-floating-outline\">
                  ";
        // line 162
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "email", [], "any", false, false, false, 162), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 163
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "email", [], "any", false, false, false, 163), "vars", [], "any", false, false, false, 163), "errors", [], "any", false, false, false, 163))) ? (" is-invalid") : (""))), "placeholder" => "Adresse email"]]);
        // line 165
        yield "
                  <label for=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "email", [], "any", false, false, false, 166), "vars", [], "any", false, false, false, 166), "id", [], "any", false, false, false, 166), "html", null, true);
        yield "\">Adresse email</label>
                  <div class=\"invalid-feedback\">
                    ";
        // line 168
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "email", [], "any", false, false, false, 168), 'errors');
        yield "
                  </div>
                </div>
              </div>

              <!-- Username Field -->
              <div class=\"mb-3\">
                <div class=\"form-floating form-floating-outline\">
                  ";
        // line 176
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "username", [], "any", false, false, false, 176), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 177
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "username", [], "any", false, false, false, 177), "vars", [], "any", false, false, false, 177), "errors", [], "any", false, false, false, 177))) ? (" is-invalid") : (""))), "placeholder" => "Nom d'utilisateur"]]);
        // line 179
        yield "
                  <label for=\"";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "username", [], "any", false, false, false, 180), "vars", [], "any", false, false, false, 180), "id", [], "any", false, false, false, 180), "html", null, true);
        yield "\">Nom d'utilisateur</label>
                  <div class=\"invalid-feedback\">
                    ";
        // line 182
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "username", [], "any", false, false, false, 182), 'errors');
        yield "
                  </div>
                </div>
              </div>

              <!-- Password Fields -->
              <div class=\"row mb-3\">
                <div class=\"col-md-6 mb-3 mb-md-0\">
                  <div class=\"form-password-toggle\">
                    <div class=\"form-floating form-floating-outline\">
                      ";
        // line 192
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "password", [], "any", false, false, false, 192), "password", [], "any", false, false, false, 192), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 193
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "password", [], "any", false, false, false, 193), "password", [], "any", false, false, false, 193), "vars", [], "any", false, false, false, 193), "errors", [], "any", false, false, false, 193))) ? (" is-invalid") : (""))), "placeholder" => "Mot de passe"]]);
        // line 195
        yield "
                      <label for=\"";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "password", [], "any", false, false, false, 196), "password", [], "any", false, false, false, 196), "vars", [], "any", false, false, false, 196), "id", [], "any", false, false, false, 196), "html", null, true);
        yield "\">Mot de passe</label>
                      <div class=\"invalid-feedback\">
                        ";
        // line 198
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "password", [], "any", false, false, false, 198), "password", [], "any", false, false, false, 198), 'errors');
        yield "
                      </div>
                    </div>
                    <span class=\"input-group-text cursor-pointer\">
                      <i class=\"ti ti-eye-off\"></i>
                    </span>
                  </div>
                  <small class=\"form-text text-muted\">8 caractères minimum</small>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-floating form-floating-outline\">
                    ";
        // line 209
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "password", [], "any", false, false, false, 209), "passwordRepeat", [], "any", false, false, false, 209), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 210
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "password", [], "any", false, false, false, 210), "passwordRepeat", [], "any", false, false, false, 210), "vars", [], "any", false, false, false, 210), "errors", [], "any", false, false, false, 210))) ? (" is-invalid") : (""))), "placeholder" => "Confirmation"]]);
        // line 212
        yield "
                    <label for=\"";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), "password", [], "any", false, false, false, 213), "passwordRepeat", [], "any", false, false, false, 213), "vars", [], "any", false, false, false, 213), "id", [], "any", false, false, false, 213), "html", null, true);
        yield "\">Confirmation</label>
                    <div class=\"invalid-feedback\">
                      ";
        // line 215
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "password", [], "any", false, false, false, 215), "passwordRepeat", [], "any", false, false, false, 215), 'errors');
        yield "
                    </div>
                  </div>
                </div>
              </div>

             
            ";
        // line 222
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 222, $this->source); })()), 'form_end');
        yield "

            <p class=\"text-center mt-3\">
              <span>Déjà membre ?</span>
              <a href=\"";
        // line 226
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        yield "\">
                <span>Connectez-vous</span>
              </a>
            </p>

            <div class=\"divider my-4\">
              <div class=\"divider-text\">ou</div>
            </div>

            <div class=\"d-flex justify-content-center\">
              <a href=\"javascript:;\" class=\"btn btn-icon btn-label-facebook me-3\">
                <i class=\"tf-icons fa-brands fa-facebook-f fs-5\"></i>
              </a>
              <a href=\"javascript:;\" class=\"btn btn-icon btn-label-google-plus me-3\">
                <i class=\"tf-icons fa-brands fa-google fs-5\"></i>
              </a>
              <a href=\"javascript:;\" class=\"btn btn-icon btn-label-twitter\">
                <i class=\"tf-icons fa-brands fa-twitter fs-5\"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src=\"";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/node-waves/node-waves.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/menu.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/formvalidation/dist/js/FormValidation.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/pages-auth.js"), "html", null, true);
        yield "\"></script>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Password toggle functionality
        document.querySelectorAll('.form-password-toggle .cursor-pointer').forEach(toggle => {
            toggle.addEventListener('click', function() {
                const passwordInput = this.closest('.form-password-toggle').querySelector('input');
                const icon = this.querySelector('i');
                
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    icon.classList.replace('ti-eye-off', 'ti-eye');
                } else {
                    passwordInput.type = 'password';
                    icon.classList.replace('ti-eye', 'ti-eye-off');
                }
            });
        });
        
        // Form validation
        const form = document.querySelector('form');
        if (form) {
            form.addEventListener('submit', function(e) {
                let isValid = true;
                
                // Validate required fields
                document.querySelectorAll('.form-control').forEach(input => {
                    if (!input.value && input.required) {
                        input.classList.add('is-invalid');
                        isValid = false;
                    } else {
                        input.classList.remove('is-invalid');
                    }
                });
                
                // Password validation
                const password = document.getElementById('";
        // line 298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 298, $this->source); })()), "password", [], "any", false, false, false, 298), "password", [], "any", false, false, false, 298), "vars", [], "any", false, false, false, 298), "id", [], "any", false, false, false, 298), "html", null, true);
        yield "');
                const passwordRepeat = document.getElementById('";
        // line 299
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 299, $this->source); })()), "password", [], "any", false, false, false, 299), "passwordRepeat", [], "any", false, false, false, 299), "vars", [], "any", false, false, false, 299), "id", [], "any", false, false, false, 299), "html", null, true);
        yield "');
                
                if (password.value.length < 8) {
                    password.classList.add('is-invalid');
                    isValid = false;
                }
                
                if (password.value !== passwordRepeat.value) {
                    passwordRepeat.classList.add('is-invalid');
                    isValid = false;
                }
                
                if (!isValid) {
                    e.preventDefault();
                    
                    // Scroll to first invalid field
                    const firstInvalid = document.querySelector('.is-invalid');
                    if (firstInvalid) {
                        firstInvalid.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                    }
                }
            });
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
        return "security/registration.html.twig";
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
        return array (  492 => 299,  488 => 298,  448 => 261,  444 => 260,  440 => 259,  436 => 258,  432 => 257,  428 => 256,  424 => 255,  420 => 254,  416 => 253,  412 => 252,  408 => 251,  380 => 226,  373 => 222,  363 => 215,  358 => 213,  355 => 212,  353 => 210,  352 => 209,  338 => 198,  333 => 196,  330 => 195,  328 => 193,  327 => 192,  314 => 182,  309 => 180,  306 => 179,  304 => 177,  303 => 176,  292 => 168,  287 => 166,  284 => 165,  282 => 163,  281 => 162,  269 => 153,  264 => 151,  261 => 150,  259 => 148,  258 => 147,  249 => 141,  244 => 139,  241 => 138,  239 => 136,  238 => 135,  229 => 129,  206 => 109,  149 => 55,  142 => 51,  138 => 50,  134 => 49,  128 => 46,  122 => 43,  118 => 42,  114 => 41,  110 => 40,  104 => 37,  100 => 36,  96 => 35,  90 => 32,  86 => 31,  82 => 30,  69 => 20,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html
  lang=\"en\"
  class=\"light-style customizer-hide\"
  dir=\"ltr\"
  data-theme=\"theme-default\"
  data-assets-path=\"\"
  data-template=\"vertical-menu-template\">
  <head>
    <meta charset=\"utf-8\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />

    <title>Inscription</title>

    <meta name=\"description\" content=\"\" />

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/favicon/favicon.ico') }}\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link
      href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\"
      rel=\"stylesheet\" />

    <!-- Icons -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/fonts/fontawesome.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/fonts/tabler-icons.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/fonts/flag-icons.css') }}\" />

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/core.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/theme-default.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/demo.css') }}\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/node-waves/node-waves.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/typeahead-js/typeahead.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/libs/formvalidation/dist/css/formValidation.min.css') }}\" />

    <!-- Page CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/css/pages/page-auth.css') }}\" />

    <!-- Helpers -->
    <script src=\"{{ asset('vendor/js/helpers.js') }}\"></script>
    <script src=\"{{ asset('vendor/js/template-customizer.js') }}\"></script>
    <script src=\"{{ asset('js/config.js') }}\"></script>
    
    <style>
    .auth-cover-bg-color {
        background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ asset('img/register.jpg') }}');
        background-size: cover;
        background-position: center;
    }
    
    .brand-content {
        max-width: 500px;
        color: white;
        z-index: 2;
        padding: 2rem;
    }
    
    .brand-logo {
        margin-bottom: 1.5rem;
    }
    
    .btn-arrow {
        position: relative;
        overflow: hidden;
        transition: all 0.3s;
    }
    
    .btn-arrow i {
        transition: transform 0.3s;
    }
    
    .btn-arrow:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(78, 115, 223, 0.3);
    }
    
    .btn-arrow:hover i {
        transform: translateX(3px);
    }
    
    .form-password-toggle .input-group-text {
        cursor: pointer;
    }
    </style>
  </head>

  <body>
    <div class=\"authentication-wrapper authentication-cover authentication-bg\">
      <div class=\"authentication-inner row\">
        <!-- Left Panel with Branding -->
        <div class=\"d-none d-lg-flex col-lg-7 p-0\">
          <div class=\"auth-cover-bg d-flex justify-content-center align-items-center\">
            <div class=\"brand-content text-center\">
                <div class=\"brand-logo mb-4\">
                    <svg width=\"48\" height=\"48\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z\" stroke=\"white\" stroke-width=\"2\"/>
                        <path d=\"M16 8H8M16 16H8M12 12H8\" stroke=\"white\" stroke-width=\"2\" stroke-linecap=\"round\"/>
                    </svg>
                </div>
                            <img src=\"{{ asset('logo.jpeg') }}\" alt=\"logo\" />
                <p class=\"lead text-light\">Créez votre compte pour commencer</p>
            </div>
          </div>
        </div>

        <!-- Right Panel with Registration Form -->
        <div class=\"d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4\">
          <div class=\"w-px-400 mx-auto\">
            <div class=\"app-brand mb-4\">
              <a href=\"#\" class=\"app-brand-link gap-2\">
                <span class=\"app-brand-logo demo\">
                  <!-- SVG Logo -->
                </span>
              </a>
            </div>
            
            <h3 class=\"mb-1 fw-bold\">Créer un compte</h3>
            <p class=\"mb-4\">Remplissez les informations requises</p>

            {{ form_start(form, {'attr': {'class': \"mb-3\", 'novalidate': 'novalidate'} }) }}

              <!-- Name Fields -->
              <div class=\"row mb-3\">
                <div class=\"col-md-6 mb-3 mb-md-0\">
                  <div class=\"form-floating form-floating-outline\">
                    {{ form_widget(form.firstName, {'attr': {
                      'class': 'form-control' ~ (form.firstName.vars.errors|length ? ' is-invalid' : ''),
                      'placeholder': 'Prénom'
                    }}) }}
                    <label for=\"{{ form.firstName.vars.id }}\">Prénom</label>
                    <div class=\"invalid-feedback\">
                      {{ form_errors(form.firstName) }}
                    </div>
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-floating form-floating-outline\">
                    {{ form_widget(form.lastName, {'attr': {
                      'class': 'form-control' ~ (form.lastName.vars.errors|length ? ' is-invalid' : ''),
                      'placeholder': 'Nom'
                    }}) }}
                    <label for=\"{{ form.lastName.vars.id }}\">Nom</label>
                    <div class=\"invalid-feedback\">
                      {{ form_errors(form.lastName) }}
                    </div>
                  </div>
                </div>
              </div>

              <!-- Email Field -->
              <div class=\"mb-3\">
                <div class=\"form-floating form-floating-outline\">
                  {{ form_widget(form.email, {'attr': {
                    'class': 'form-control' ~ (form.email.vars.errors|length ? ' is-invalid' : ''),
                    'placeholder': 'Adresse email'
                  }}) }}
                  <label for=\"{{ form.email.vars.id }}\">Adresse email</label>
                  <div class=\"invalid-feedback\">
                    {{ form_errors(form.email) }}
                  </div>
                </div>
              </div>

              <!-- Username Field -->
              <div class=\"mb-3\">
                <div class=\"form-floating form-floating-outline\">
                  {{ form_widget(form.username, {'attr': {
                    'class': 'form-control' ~ (form.username.vars.errors|length ? ' is-invalid' : ''),
                    'placeholder': 'Nom d\\'utilisateur'
                  }}) }}
                  <label for=\"{{ form.username.vars.id }}\">Nom d'utilisateur</label>
                  <div class=\"invalid-feedback\">
                    {{ form_errors(form.username) }}
                  </div>
                </div>
              </div>

              <!-- Password Fields -->
              <div class=\"row mb-3\">
                <div class=\"col-md-6 mb-3 mb-md-0\">
                  <div class=\"form-password-toggle\">
                    <div class=\"form-floating form-floating-outline\">
                      {{ form_widget(form.password.password, {'attr': {
                        'class': 'form-control' ~ (form.password.password.vars.errors|length ? ' is-invalid' : ''),
                        'placeholder': 'Mot de passe'
                      }}) }}
                      <label for=\"{{ form.password.password.vars.id }}\">Mot de passe</label>
                      <div class=\"invalid-feedback\">
                        {{ form_errors(form.password.password) }}
                      </div>
                    </div>
                    <span class=\"input-group-text cursor-pointer\">
                      <i class=\"ti ti-eye-off\"></i>
                    </span>
                  </div>
                  <small class=\"form-text text-muted\">8 caractères minimum</small>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-floating form-floating-outline\">
                    {{ form_widget(form.password.passwordRepeat, {'attr': {
                      'class': 'form-control' ~ (form.password.passwordRepeat.vars.errors|length ? ' is-invalid' : ''),
                      'placeholder': 'Confirmation'
                    }}) }}
                    <label for=\"{{ form.password.passwordRepeat.vars.id }}\">Confirmation</label>
                    <div class=\"invalid-feedback\">
                      {{ form_errors(form.password.passwordRepeat) }}
                    </div>
                  </div>
                </div>
              </div>

             
            {{ form_end(form) }}

            <p class=\"text-center mt-3\">
              <span>Déjà membre ?</span>
              <a href=\"{{ path('login') }}\">
                <span>Connectez-vous</span>
              </a>
            </p>

            <div class=\"divider my-4\">
              <div class=\"divider-text\">ou</div>
            </div>

            <div class=\"d-flex justify-content-center\">
              <a href=\"javascript:;\" class=\"btn btn-icon btn-label-facebook me-3\">
                <i class=\"tf-icons fa-brands fa-facebook-f fs-5\"></i>
              </a>
              <a href=\"javascript:;\" class=\"btn btn-icon btn-label-google-plus me-3\">
                <i class=\"tf-icons fa-brands fa-google fs-5\"></i>
              </a>
              <a href=\"javascript:;\" class=\"btn btn-icon btn-label-twitter\">
                <i class=\"tf-icons fa-brands fa-twitter fs-5\"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src=\"{{ asset('vendor/libs/jquery/jquery.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/popper/popper.js') }}\"></script>
    <script src=\"{{ asset('vendor/js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/node-waves/node-waves.js') }}\"></script>
    <script src=\"{{ asset('vendor/js/menu.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}\"></script>
    <script src=\"{{ asset('js/main.js') }}\"></script>
    <script src=\"{{ asset('js/pages-auth.js') }}\"></script>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Password toggle functionality
        document.querySelectorAll('.form-password-toggle .cursor-pointer').forEach(toggle => {
            toggle.addEventListener('click', function() {
                const passwordInput = this.closest('.form-password-toggle').querySelector('input');
                const icon = this.querySelector('i');
                
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    icon.classList.replace('ti-eye-off', 'ti-eye');
                } else {
                    passwordInput.type = 'password';
                    icon.classList.replace('ti-eye', 'ti-eye-off');
                }
            });
        });
        
        // Form validation
        const form = document.querySelector('form');
        if (form) {
            form.addEventListener('submit', function(e) {
                let isValid = true;
                
                // Validate required fields
                document.querySelectorAll('.form-control').forEach(input => {
                    if (!input.value && input.required) {
                        input.classList.add('is-invalid');
                        isValid = false;
                    } else {
                        input.classList.remove('is-invalid');
                    }
                });
                
                // Password validation
                const password = document.getElementById('{{ form.password.password.vars.id }}');
                const passwordRepeat = document.getElementById('{{ form.password.passwordRepeat.vars.id }}');
                
                if (password.value.length < 8) {
                    password.classList.add('is-invalid');
                    isValid = false;
                }
                
                if (password.value !== passwordRepeat.value) {
                    passwordRepeat.classList.add('is-invalid');
                    isValid = false;
                }
                
                if (!isValid) {
                    e.preventDefault();
                    
                    // Scroll to first invalid field
                    const firstInvalid = document.querySelector('.is-invalid');
                    if (firstInvalid) {
                        firstInvalid.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                    }
                }
            });
        }
    });
    </script>
  </body>
</html>", "security/registration.html.twig", "C:\\Users\\ASUS\\Desktop\\user symfony\\templates\\security\\registration.html.twig");
    }
}
