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

/* security/login.html.twig */
class __TwigTemplate_8a6840a6af481537b7156f18965cef5f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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

    <title>Connexion</title>

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
          <div class=\"auth-cover-bg  d-flex justify-content-center align-items-center\">
           
               <img src=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.jpeg"), "html", null, true);
        yield "\" alt=\"logo\" />
       
          </div>
        </div>

        <!-- Right Panel with Login Form -->
        <div class=\"d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4\">
          <div class=\"w-px-400 mx-auto\">
            <div class=\"app-brand mb-4\">
              <a href=\"#\" class=\"app-brand-link gap-2\">
                <span class=\"app-brand-logo demo\">
                  <!-- SVG Logo -->
                </span>
              </a>
            </div>
            
            <h3 class=\"mb-1 fw-bold\">Connexion</h3>
            <p class=\"mb-4\">Entrez vos identifiants pour continuer</p>

            <!-- Error Messages -->
            ";
        // line 124
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 124, $this->source); })())) {
            // line 125
            yield "            <div class=\"alert alert-danger alert-elevated fade show\" role=\"alert\">
                <div class=\"d-flex align-items-center\">
                    <i class=\"fas fa-exclamation-circle me-2\"></i>
                    <span>Identifiants incorrects. Veuillez réessayer.</span>
                </div>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
            ";
        }
        // line 133
        yield "
            ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "flashes", [], "any", false, false, false, 134));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 135
            yield "            <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield " alert-elevated fade show\" role=\"alert\">
                <div class=\"d-flex align-items-center\">
                    <i class=\"fas fa-";
            // line 137
            yield ((($context["label"] == "success")) ? ("check-circle") : ("info-circle"));
            yield " me-2\"></i>
                    <div>
                        ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 140
                yield "                        <p class=\"mb-0\">";
                yield $context["message"];
                yield "</p>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            yield "                    </div>
                </div>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        yield "
            <!-- Login Form -->
            <form class=\"mb-3\" action=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        yield "\" method=\"post\">
              <div class=\"mb-3\">
                <label for=\"inputEmail\" class=\"form-label\">Adresse email</label>
                <div class=\"input-group input-group-merge\">
                  <span class=\"input-group-text\"><i class=\"ti ti-mail\"></i></span>
                  <input type=\"text\" 
                         value=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 155, $this->source); })()), "html", null, true);
        yield "\" 
                         name=\"email\" 
                         id=\"inputEmail\" 
                         class=\"form-control\" 
                         placeholder=\"email@example.com\"
                         autocomplete=\"email\" 
                         autofocus>
                </div>
              </div>
              
              <div class=\"mb-3 form-password-toggle\">
                <div class=\"d-flex justify-content-between\">
                  <label class=\"form-label\" for=\"inputPassword\">Mot de passe</label>
                  <a href=\"";
        // line 168
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\">
                    <small>Mot de passe oublié ?</small>
                  </a>
                </div>
                <div class=\"input-group input-group-merge\">
                  <span class=\"input-group-text\"><i class=\"ti ti-lock\"></i></span>
                  <input type=\"password\" 
                         name=\"password\" 
                         id=\"inputPassword\" 
                         class=\"form-control\" 
                         placeholder=\"&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;\"
                         autocomplete=\"current-password\">
                  <span class=\"input-group-text cursor-pointer\"><i class=\"ti ti-eye-off\"></i></span>
                </div>
              </div>
              
              <div class=\"mb-3\">
                <div class=\"form-check\">
                  <input type=\"checkbox\" 
                         name=\"_remember_me\" 
                         class=\"form-check-input\" 
                         id=\"remember_me\" 
                         checked>
                  <label class=\"form-check-label\" for=\"remember_me\">Se souvenir de moi</label>
                </div>
              </div>

              <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

              <button type=\"submit\" class=\"btn btn-primary d-grid w-100 btn-arrow\">
                Se connecter
                <i class=\"fas fa-arrow-right ms-2\"></i>
              </button>
            </form>

            <p class=\"text-center\">
              <span>Pas encore de compte ?</span>
              <a href=\"";
        // line 205
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
        yield "\">
                <span>S'inscrire</span>
              </a>
            </p>

            <div class=\"divider my-4\">
              <div class=\"divider-text\">ou continuer avec</div>
            </div>

            <div class=\"d-flex justify-content-center\">
              <a href=\"";
        // line 215
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connect_google");
        yield "\" class=\"btn btn-icon btn-label-google-plus me-3\" style=\"width: auto; padding: 0.5rem 1.5rem;\">
                <i class=\"tf-icons fa-brands fa-google fs-5 me-2\"></i>
                Se connecter avec Google
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src=\"";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/node-waves/node-waves.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/menu.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/formvalidation/dist/js/FormValidation.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/pages-auth.js"), "html", null, true);
        yield "\"></script>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Password toggle
        const passwordToggle = document.querySelector('.form-password-toggle .cursor-pointer');
        if (passwordToggle) {
            passwordToggle.addEventListener('click', function() {
                const passwordInput = document.getElementById('inputPassword');
                const icon = this.querySelector('i');
                
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    icon.classList.replace('ti-eye-off', 'ti-eye');
                } else {
                    passwordInput.type = 'password';
                    icon.classList.replace('ti-eye', 'ti-eye-off');
                }
            });
        }
        
        // Form validation
        const form = document.querySelector('form');
        if (form) {
            form.setAttribute('novalidate', 'novalidate');
            
            form.addEventListener('submit', function(e) {
                let valid = true;
                
                // Custom validation without relying on HTML5 validation
                const email = document.getElementById('inputEmail');
                if (!email.value || !email.value.includes('@')) {
                    email.classList.add('is-invalid');
                    valid = false;
                } else {
                    email.classList.remove('is-invalid');
                }
                
                const password = document.getElementById('inputPassword');
                if (!password.value || password.value.length < 6) {
                    password.classList.add('is-invalid');
                    valid = false;
                } else {
                    password.classList.remove('is-invalid');
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
        return "security/login.html.twig";
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
        return array (  415 => 235,  411 => 234,  407 => 233,  403 => 232,  399 => 231,  395 => 230,  391 => 229,  387 => 228,  383 => 227,  379 => 226,  375 => 225,  362 => 215,  349 => 205,  336 => 195,  306 => 168,  290 => 155,  281 => 149,  277 => 147,  267 => 142,  258 => 140,  254 => 139,  249 => 137,  243 => 135,  239 => 134,  236 => 133,  226 => 125,  224 => 124,  201 => 104,  149 => 55,  142 => 51,  138 => 50,  134 => 49,  128 => 46,  122 => 43,  118 => 42,  114 => 41,  110 => 40,  104 => 37,  100 => 36,  96 => 35,  90 => 32,  86 => 31,  82 => 30,  69 => 20,  48 => 1,);
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

    <title>Connexion</title>

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
          <div class=\"auth-cover-bg  d-flex justify-content-center align-items-center\">
           
               <img src=\"{{ asset('logo.jpeg') }}\" alt=\"logo\" />
       
          </div>
        </div>

        <!-- Right Panel with Login Form -->
        <div class=\"d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4\">
          <div class=\"w-px-400 mx-auto\">
            <div class=\"app-brand mb-4\">
              <a href=\"#\" class=\"app-brand-link gap-2\">
                <span class=\"app-brand-logo demo\">
                  <!-- SVG Logo -->
                </span>
              </a>
            </div>
            
            <h3 class=\"mb-1 fw-bold\">Connexion</h3>
            <p class=\"mb-4\">Entrez vos identifiants pour continuer</p>

            <!-- Error Messages -->
            {% if error %}
            <div class=\"alert alert-danger alert-elevated fade show\" role=\"alert\">
                <div class=\"d-flex align-items-center\">
                    <i class=\"fas fa-exclamation-circle me-2\"></i>
                    <span>Identifiants incorrects. Veuillez réessayer.</span>
                </div>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
            {% endif %}

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

            <!-- Login Form -->
            <form class=\"mb-3\" action=\"{{ path('login') }}\" method=\"post\">
              <div class=\"mb-3\">
                <label for=\"inputEmail\" class=\"form-label\">Adresse email</label>
                <div class=\"input-group input-group-merge\">
                  <span class=\"input-group-text\"><i class=\"ti ti-mail\"></i></span>
                  <input type=\"text\" 
                         value=\"{{ last_username }}\" 
                         name=\"email\" 
                         id=\"inputEmail\" 
                         class=\"form-control\" 
                         placeholder=\"email@example.com\"
                         autocomplete=\"email\" 
                         autofocus>
                </div>
              </div>
              
              <div class=\"mb-3 form-password-toggle\">
                <div class=\"d-flex justify-content-between\">
                  <label class=\"form-label\" for=\"inputPassword\">Mot de passe</label>
                  <a href=\"{{ path('app_forgot_password_request') }}\">
                    <small>Mot de passe oublié ?</small>
                  </a>
                </div>
                <div class=\"input-group input-group-merge\">
                  <span class=\"input-group-text\"><i class=\"ti ti-lock\"></i></span>
                  <input type=\"password\" 
                         name=\"password\" 
                         id=\"inputPassword\" 
                         class=\"form-control\" 
                         placeholder=\"&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;\"
                         autocomplete=\"current-password\">
                  <span class=\"input-group-text cursor-pointer\"><i class=\"ti ti-eye-off\"></i></span>
                </div>
              </div>
              
              <div class=\"mb-3\">
                <div class=\"form-check\">
                  <input type=\"checkbox\" 
                         name=\"_remember_me\" 
                         class=\"form-check-input\" 
                         id=\"remember_me\" 
                         checked>
                  <label class=\"form-check-label\" for=\"remember_me\">Se souvenir de moi</label>
                </div>
              </div>

              <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

              <button type=\"submit\" class=\"btn btn-primary d-grid w-100 btn-arrow\">
                Se connecter
                <i class=\"fas fa-arrow-right ms-2\"></i>
              </button>
            </form>

            <p class=\"text-center\">
              <span>Pas encore de compte ?</span>
              <a href=\"{{ path('registration') }}\">
                <span>S'inscrire</span>
              </a>
            </p>

            <div class=\"divider my-4\">
              <div class=\"divider-text\">ou continuer avec</div>
            </div>

            <div class=\"d-flex justify-content-center\">
              <a href=\"{{ path('connect_google') }}\" class=\"btn btn-icon btn-label-google-plus me-3\" style=\"width: auto; padding: 0.5rem 1.5rem;\">
                <i class=\"tf-icons fa-brands fa-google fs-5 me-2\"></i>
                Se connecter avec Google
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
        // Password toggle
        const passwordToggle = document.querySelector('.form-password-toggle .cursor-pointer');
        if (passwordToggle) {
            passwordToggle.addEventListener('click', function() {
                const passwordInput = document.getElementById('inputPassword');
                const icon = this.querySelector('i');
                
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    icon.classList.replace('ti-eye-off', 'ti-eye');
                } else {
                    passwordInput.type = 'password';
                    icon.classList.replace('ti-eye', 'ti-eye-off');
                }
            });
        }
        
        // Form validation
        const form = document.querySelector('form');
        if (form) {
            form.setAttribute('novalidate', 'novalidate');
            
            form.addEventListener('submit', function(e) {
                let valid = true;
                
                // Custom validation without relying on HTML5 validation
                const email = document.getElementById('inputEmail');
                if (!email.value || !email.value.includes('@')) {
                    email.classList.add('is-invalid');
                    valid = false;
                } else {
                    email.classList.remove('is-invalid');
                }
                
                const password = document.getElementById('inputPassword');
                if (!password.value || password.value.length < 6) {
                    password.classList.add('is-invalid');
                    valid = false;
                } else {
                    password.classList.remove('is-invalid');
                }
                
                if (!valid) {
                    e.preventDefault();
                }
            });
        }
    });
    </script>
  </body>
</html>", "security/login.html.twig", "C:\\Users\\ASUS\\Desktop\\souha\\GoldenTouch-Symfony\\templates\\security\\login.html.twig");
    }
}
