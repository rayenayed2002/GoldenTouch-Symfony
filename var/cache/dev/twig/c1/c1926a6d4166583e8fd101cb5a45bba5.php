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

/* security/forgot_password.html.twig */
class __TwigTemplate_9ed9d3c1e5240f0d4aab594f4a587fa7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/forgot_password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/forgot_password.html.twig"));

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

    <title>Mot de passe oublié</title>

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/login.jpg"), "html", null, true);
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
    
    .alert-elevated {
        border-left: 4px solid;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }
    </style>
  </head>

  <body>
    <div class=\"authentication-wrapper authentication-cover authentication-bg\">
      <div class=\"authentication-inner row\">
        <!-- Left Panel with Branding -->
        <div class=\"d-none d-lg-flex col-lg-7 p-0\">
          <div class=\"auth-cover-bg d-flex justify-content-center align-items-center\">
            <img src=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.jpeg"), "html", null, true);
        yield "\" alt=\"logo\" />
                                        </div>
                                    </div>

        <!-- Right Panel with Form -->
        <div class=\"d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4\">
          <div class=\"w-px-400 mx-auto\">
            <div class=\"app-brand mb-4\">
              <a href=\"#\" class=\"app-brand-link gap-2\">
                <span class=\"app-brand-logo demo\">
                  <!-- SVG Logo -->
                </span>
              </a>
                                    </div>                    

            <h3 class=\"mb-1 fw-bold\">Mot de passe oublié</h3>
            <p class=\"mb-4\">Entrez votre adresse email et nous vous enverrons un lien de réinitialisation</p>

            <!-- Debug information -->
            ";
        // line 122
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "request", [], "any", false, false, false, 122), "query", [], "any", false, false, false, 122), "get", ["error"], "method", false, false, false, 122)) {
            // line 123
            yield "                <div class=\"alert alert-danger alert-elevated fade show\" role=\"alert\">
                    <div class=\"d-flex align-items-center\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        <div>
                            <p class=\"mb-0\"><strong>Error:</strong> ";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "request", [], "any", false, false, false, 127), "query", [], "any", false, false, false, 127), "get", ["error"], "method", false, false, false, 127), "html", null, true);
            yield "</p>
                            ";
            // line 128
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "request", [], "any", false, false, false, 128), "query", [], "any", false, false, false, 128), "get", ["file"], "method", false, false, false, 128)) {
                // line 129
                yield "                                <p class=\"mb-0 mt-1\"><strong>File:</strong> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "request", [], "any", false, false, false, 129), "query", [], "any", false, false, false, 129), "get", ["file"], "method", false, false, false, 129), "html", null, true);
                yield "</p>
                            ";
            }
            // line 131
            yield "                            ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "request", [], "any", false, false, false, 131), "query", [], "any", false, false, false, 131), "get", ["line"], "method", false, false, false, 131)) {
                // line 132
                yield "                                <p class=\"mb-0 mt-1\"><strong>Line:</strong> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "request", [], "any", false, false, false, 132), "query", [], "any", false, false, false, 132), "get", ["line"], "method", false, false, false, 132), "html", null, true);
                yield "</p>
                            ";
            }
            // line 134
            yield "                        </div>
                    </div>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
        }
        // line 139
        yield "
            <!-- Flash Messages -->
            ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 141, $this->source); })()), "flashes", [], "any", false, false, false, 141));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 142
            yield "            <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield " alert-elevated fade show\" role=\"alert\">
                <div class=\"d-flex align-items-center\">
                    <i class=\"fas fa-";
            // line 144
            yield ((($context["label"] == "success")) ? ("check-circle") : ("info-circle"));
            yield " me-2\"></i>
                    <div>
                        ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 147
                yield "                        <p class=\"mb-0\">";
                yield $context["message"];
                yield "</p>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            yield "                    </div>
                </div>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        yield "
            <!-- Forgot Password Form -->
            ";
        // line 156
        if (array_key_exists("requestForm", $context)) {
            // line 157
            yield "              ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 157, $this->source); })()), 'form_start');
            yield "
                <div class=\"mb-3\">
                  <label for=\"forgot-password-email\" class=\"form-label\">Adresse email</label>
                  <div class=\"input-group input-group-merge\">
                    <span class=\"input-group-text\"><i class=\"ti ti-mail\"></i></span>
                    ";
            // line 162
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 162, $this->source); })()), "email", [], "any", false, false, false, 162), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "email@example.com", "id" => "forgot-password-email"]]);
            // line 168
            yield "
                  </div>
                  ";
            // line 170
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 170, $this->source); })()), "email", [], "any", false, false, false, 170), 'errors');
            yield "
                </div>

                <button type=\"submit\" class=\"btn btn-primary d-grid w-100 btn-arrow\">
                  Envoyer le lien de réinitialisation
                  <i class=\"fas fa-paper-plane ms-2\"></i>
                </button>
              ";
            // line 177
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 177, $this->source); })()), 'form_end');
            yield "
              
              <!-- Force Reset Option -->
              <div class=\"mt-3 text-center\">
                <p class=\"text-muted small\">Si vous ne recevez pas d'email, <a href=\"#\" id=\"force-reset-link\" class=\"text-primary\">cliquez ici</a> pour accéder directement à la page de réinitialisation.</p>
              </div>
              
              <script>
                document.addEventListener('DOMContentLoaded', function() {
                  const forceResetLink = document.getElementById('force-reset-link');
                  const emailInput = document.getElementById('forgot-password-email');
                  
                  if (forceResetLink && emailInput) {
                    forceResetLink.addEventListener('click', function(e) {
                      e.preventDefault();
                      const email = emailInput.value;
                      
                      if (!email || !email.includes('@')) {
                        alert('Veuillez entrer une adresse email valide.');
                        emailInput.focus();
                        return;
                      }
                      
                      forceResetLink.innerHTML = 'Redirection en cours...';
                      forceResetLink.style.pointerEvents = 'none';
                      
                      window.location.href = '";
            // line 203
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("force_reset_password");
            yield "?email=' + encodeURIComponent(email);
                    });
                  }
                });
              </script>
            ";
        } else {
            // line 209
            yield "              <form class=\"mb-3\" method=\"post\">
                <div class=\"mb-3\">
                  <label for=\"forgot-password-email\" class=\"form-label\">Adresse email</label>
                  <div class=\"input-group input-group-merge\">
                    <span class=\"input-group-text\"><i class=\"ti ti-mail\"></i></span>
                    <input type=\"email\" 
                           name=\"_email\" 
                           id=\"forgot-password-email\" 
                           class=\"form-control\" 
                           placeholder=\"email@example.com\"
                           autocomplete=\"email\" 
                           required 
                           autofocus>
                  </div>
                </div>

                <button type=\"submit\" class=\"btn btn-primary d-grid w-100 btn-arrow\">
                  Envoyer le lien de réinitialisation
                  <i class=\"fas fa-paper-plane ms-2\"></i>
                </button>
              </form>
              
              <!-- Force Reset Option -->
              <div class=\"mt-3 text-center\">
                <p class=\"text-muted small\">Si vous ne recevez pas d'email, <a href=\"#\" id=\"force-reset-link-alt\" class=\"text-primary\">cliquez ici</a> pour accéder directement à la page de réinitialisation.</p>
              </div>
              
              <script>
                document.addEventListener('DOMContentLoaded', function() {
                  const forceResetLink = document.getElementById('force-reset-link-alt');
                  const emailInput = document.getElementById('forgot-password-email');
                  
                  if (forceResetLink && emailInput) {
                    forceResetLink.addEventListener('click', function(e) {
                      e.preventDefault();
                      const email = emailInput.value;
                      
                      if (!email || !email.includes('@')) {
                        alert('Veuillez entrer une adresse email valide.');
                        emailInput.focus();
                        return;
                      }
                      
                      forceResetLink.innerHTML = 'Redirection en cours...';
                      forceResetLink.style.pointerEvents = 'none';
                      
                      window.location.href = '";
            // line 255
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("force_reset_password");
            yield "?email=' + encodeURIComponent(email);
                    });
                  }
                });
              </script>
            ";
        }
        // line 261
        yield "
            <div class=\"divider my-4\">
              <div class=\"divider-text\">ou</div>
            </div>

            <p class=\"text-center mt-2\">
              <a href=\"";
        // line 267
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        yield "\" class=\"d-flex align-items-center justify-content-center\">
                <i class=\"ti ti-chevron-left me-2\"></i>
                Retour à la connexion
              </a>
            </p>
            </div>
        </div>
    </div>
</div>

    <script src=\"";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/node-waves/node-waves.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/menu.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/formvalidation/dist/js/FormValidation.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/pages-auth.js"), "html", null, true);
        yield "\"></script>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Form validation
        const form = document.querySelector('form');
        if (form) {
            form.addEventListener('submit', function(e) {
                let valid = true;
                
                // Simple validation
                const email = document.getElementById('forgot-password-email');
                if (!email.value || !email.value.includes('@')) {
                    email.classList.add('is-invalid');
                    valid = false;
                } else {
                    email.classList.remove('is-invalid');
                }
                
                if (!valid) {
                    e.preventDefault();
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
        return "security/forgot_password.html.twig";
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
        return array (  487 => 287,  483 => 286,  479 => 285,  475 => 284,  471 => 283,  467 => 282,  463 => 281,  459 => 280,  455 => 279,  451 => 278,  447 => 277,  434 => 267,  426 => 261,  417 => 255,  369 => 209,  360 => 203,  331 => 177,  321 => 170,  317 => 168,  315 => 162,  306 => 157,  304 => 156,  300 => 154,  290 => 149,  281 => 147,  277 => 146,  272 => 144,  266 => 142,  262 => 141,  258 => 139,  251 => 134,  245 => 132,  242 => 131,  236 => 129,  234 => 128,  230 => 127,  224 => 123,  222 => 122,  200 => 103,  149 => 55,  142 => 51,  138 => 50,  134 => 49,  128 => 46,  122 => 43,  118 => 42,  114 => 41,  110 => 40,  104 => 37,  100 => 36,  96 => 35,  90 => 32,  86 => 31,  82 => 30,  69 => 20,  48 => 1,);
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

    <title>Mot de passe oublié</title>

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
        background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ asset('img/login.jpg') }}');
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
    
    .alert-elevated {
        border-left: 4px solid;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }
    </style>
  </head>

  <body>
    <div class=\"authentication-wrapper authentication-cover authentication-bg\">
      <div class=\"authentication-inner row\">
        <!-- Left Panel with Branding -->
        <div class=\"d-none d-lg-flex col-lg-7 p-0\">
          <div class=\"auth-cover-bg d-flex justify-content-center align-items-center\">
            <img src=\"{{ asset('logo.jpeg') }}\" alt=\"logo\" />
                                        </div>
                                    </div>

        <!-- Right Panel with Form -->
        <div class=\"d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4\">
          <div class=\"w-px-400 mx-auto\">
            <div class=\"app-brand mb-4\">
              <a href=\"#\" class=\"app-brand-link gap-2\">
                <span class=\"app-brand-logo demo\">
                  <!-- SVG Logo -->
                </span>
              </a>
                                    </div>                    

            <h3 class=\"mb-1 fw-bold\">Mot de passe oublié</h3>
            <p class=\"mb-4\">Entrez votre adresse email et nous vous enverrons un lien de réinitialisation</p>

            <!-- Debug information -->
            {% if app.request.query.get('error') %}
                <div class=\"alert alert-danger alert-elevated fade show\" role=\"alert\">
                    <div class=\"d-flex align-items-center\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        <div>
                            <p class=\"mb-0\"><strong>Error:</strong> {{ app.request.query.get('error') }}</p>
                            {% if app.request.query.get('file') %}
                                <p class=\"mb-0 mt-1\"><strong>File:</strong> {{ app.request.query.get('file') }}</p>
                            {% endif %}
                            {% if app.request.query.get('line') %}
                                <p class=\"mb-0 mt-1\"><strong>Line:</strong> {{ app.request.query.get('line') }}</p>
                            {% endif %}
                        </div>
                    </div>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endif %}

            <!-- Flash Messages -->
            {% for label, messages in app.flashes %}
            <div class=\"alert alert-{{ label }} alert-elevated fade show\" role=\"alert\">
                <div class=\"d-flex align-items-center\">
                    <i class=\"fas fa-{{ label == 'success' ? 'check-circle' : 'info-circle' }} me-2\"></i>
                    <div>
                        {% for message in messages %}
                        <p class=\"mb-0\">{{ message | raw }}</p>
                        {% endfor %}
                    </div>
                </div>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
            {% endfor %}

            <!-- Forgot Password Form -->
            {% if requestForm is defined %}
              {{ form_start(requestForm) }}
                <div class=\"mb-3\">
                  <label for=\"forgot-password-email\" class=\"form-label\">Adresse email</label>
                  <div class=\"input-group input-group-merge\">
                    <span class=\"input-group-text\"><i class=\"ti ti-mail\"></i></span>
                    {{ form_widget(requestForm.email, {
                      'attr': {
                        'class': 'form-control',
                        'placeholder': 'email@example.com',
                        'id': 'forgot-password-email'
                      }
                    }) }}
                  </div>
                  {{ form_errors(requestForm.email) }}
                </div>

                <button type=\"submit\" class=\"btn btn-primary d-grid w-100 btn-arrow\">
                  Envoyer le lien de réinitialisation
                  <i class=\"fas fa-paper-plane ms-2\"></i>
                </button>
              {{ form_end(requestForm) }}
              
              <!-- Force Reset Option -->
              <div class=\"mt-3 text-center\">
                <p class=\"text-muted small\">Si vous ne recevez pas d'email, <a href=\"#\" id=\"force-reset-link\" class=\"text-primary\">cliquez ici</a> pour accéder directement à la page de réinitialisation.</p>
              </div>
              
              <script>
                document.addEventListener('DOMContentLoaded', function() {
                  const forceResetLink = document.getElementById('force-reset-link');
                  const emailInput = document.getElementById('forgot-password-email');
                  
                  if (forceResetLink && emailInput) {
                    forceResetLink.addEventListener('click', function(e) {
                      e.preventDefault();
                      const email = emailInput.value;
                      
                      if (!email || !email.includes('@')) {
                        alert('Veuillez entrer une adresse email valide.');
                        emailInput.focus();
                        return;
                      }
                      
                      forceResetLink.innerHTML = 'Redirection en cours...';
                      forceResetLink.style.pointerEvents = 'none';
                      
                      window.location.href = '{{ path('force_reset_password') }}?email=' + encodeURIComponent(email);
                    });
                  }
                });
              </script>
            {% else %}
              <form class=\"mb-3\" method=\"post\">
                <div class=\"mb-3\">
                  <label for=\"forgot-password-email\" class=\"form-label\">Adresse email</label>
                  <div class=\"input-group input-group-merge\">
                    <span class=\"input-group-text\"><i class=\"ti ti-mail\"></i></span>
                    <input type=\"email\" 
                           name=\"_email\" 
                           id=\"forgot-password-email\" 
                           class=\"form-control\" 
                           placeholder=\"email@example.com\"
                           autocomplete=\"email\" 
                           required 
                           autofocus>
                  </div>
                </div>

                <button type=\"submit\" class=\"btn btn-primary d-grid w-100 btn-arrow\">
                  Envoyer le lien de réinitialisation
                  <i class=\"fas fa-paper-plane ms-2\"></i>
                </button>
              </form>
              
              <!-- Force Reset Option -->
              <div class=\"mt-3 text-center\">
                <p class=\"text-muted small\">Si vous ne recevez pas d'email, <a href=\"#\" id=\"force-reset-link-alt\" class=\"text-primary\">cliquez ici</a> pour accéder directement à la page de réinitialisation.</p>
              </div>
              
              <script>
                document.addEventListener('DOMContentLoaded', function() {
                  const forceResetLink = document.getElementById('force-reset-link-alt');
                  const emailInput = document.getElementById('forgot-password-email');
                  
                  if (forceResetLink && emailInput) {
                    forceResetLink.addEventListener('click', function(e) {
                      e.preventDefault();
                      const email = emailInput.value;
                      
                      if (!email || !email.includes('@')) {
                        alert('Veuillez entrer une adresse email valide.');
                        emailInput.focus();
                        return;
                      }
                      
                      forceResetLink.innerHTML = 'Redirection en cours...';
                      forceResetLink.style.pointerEvents = 'none';
                      
                      window.location.href = '{{ path('force_reset_password') }}?email=' + encodeURIComponent(email);
                    });
                  }
                });
              </script>
            {% endif %}

            <div class=\"divider my-4\">
              <div class=\"divider-text\">ou</div>
            </div>

            <p class=\"text-center mt-2\">
              <a href=\"{{ path('login') }}\" class=\"d-flex align-items-center justify-content-center\">
                <i class=\"ti ti-chevron-left me-2\"></i>
                Retour à la connexion
              </a>
            </p>
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
        // Form validation
        const form = document.querySelector('form');
        if (form) {
            form.addEventListener('submit', function(e) {
                let valid = true;
                
                // Simple validation
                const email = document.getElementById('forgot-password-email');
                if (!email.value || !email.value.includes('@')) {
                    email.classList.add('is-invalid');
                    valid = false;
                } else {
                    email.classList.remove('is-invalid');
                }
                
                if (!valid) {
                    e.preventDefault();
                }
            });
        }
    });
    </script>
  </body>
</html>", "security/forgot_password.html.twig", "C:\\Users\\ASUS\\Desktop\\user symfony\\templates\\security\\forgot_password.html.twig");
    }
}
