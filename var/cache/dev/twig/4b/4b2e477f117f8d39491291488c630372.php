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

/* reset_password/check_email.html.twig */
class __TwigTemplate_f6abde9f9d61d3c1fe2efdd1a35d91bb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/check_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/check_email.html.twig"));

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

    <title>Email de réinitialisation envoyé</title>

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

            <h3 class=\"mb-1 fw-bold\">Email de réinitialisation envoyé</h3>
            <p class=\"mb-4\">Un email contenant un lien pour réinitialiser votre mot de passe a été envoyé à votre adresse email.</p>

            <div class=\"alert alert-info alert-elevated fade show mb-4\" role=\"alert\">
                <div class=\"d-flex align-items-center\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    <div>
                        <p class=\"mb-0\">Ce lien expirera dans ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 125, $this->source); })()), "expirationMessageKey", [], "any", false, false, false, 125), CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 125, $this->source); })()), "expirationMessageData", [], "any", false, false, false, 125), "ResetPasswordBundle"), "html", null, true);
        yield ".</p>
                    </div>
                </div>
            </div>

            <div class=\"text-center\">
                <i class=\"ti ti-mail text-primary\" style=\"font-size: 80px;\"></i>
            </div>

            <div class=\"divider my-4\">
              <div class=\"divider-text\">Que faire ensuite ?</div>
            </div>

            <div class=\"alert alert-secondary alert-elevated fade show mb-4\" role=\"alert\">
                <div class=\"d-flex align-items-start\">
                    <i class=\"fas fa-envelope-open-text me-2 mt-1\"></i>
                    <div>
                        <p class=\"mb-0\">Consultez votre boîte de réception et cliquez sur le lien de réinitialisation.</p>
                        <p class=\"mb-0 mt-2\">Si vous ne recevez pas d'email, vérifiez votre dossier spam ou essayez de nouveau.</p>
                    </div>
                </div>
            </div>

            <a href=\"";
        // line 148
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forgot_password");
        yield "\" class=\"btn btn-primary d-grid w-100 btn-arrow\">
              Renvoyer un email
              <i class=\"fas fa-redo ms-2\"></i>
            </a>
            
            <div class=\"text-center mt-3\">
              <a href=\"#\" id=\"force-reset-button\" class=\"btn btn-outline-primary btn-arrow\">
                Accéder directement à la réinitialisation
                <i class=\"fas fa-bolt ms-2\"></i>
              </a>
            </div>
            
            <script>
              document.addEventListener('DOMContentLoaded', function() {
                const forceResetButton = document.getElementById('force-reset-button');
                if (forceResetButton) {
                  forceResetButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Show prompt for email
                    const email = prompt(\"Veuillez saisir votre adresse email pour accéder directement à la page de réinitialisation :\", \"\");
                    if (email && email.includes('@')) {
                      forceResetButton.innerHTML = '<i class=\"fas fa-spinner fa-spin me-2\"></i> Redirection en cours...';
                      forceResetButton.style.pointerEvents = 'none';
                      
                      window.location.href = '";
        // line 173
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("force_reset_password");
        yield "?email=' + encodeURIComponent(email);
                    } else if (email !== null) {
                      alert('Adresse email invalide. Veuillez réessayer.');
                    }
                  });
                }
              });
            </script>
            
            <p class=\"text-center mt-4\">
              <a href=\"";
        // line 183
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
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/node-waves/node-waves.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/menu.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>
  </body>
</html> ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reset_password/check_email.html.twig";
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
        return array (  329 => 199,  325 => 198,  321 => 197,  317 => 196,  313 => 195,  309 => 194,  305 => 193,  292 => 183,  279 => 173,  251 => 148,  225 => 125,  200 => 103,  149 => 55,  142 => 51,  138 => 50,  134 => 49,  128 => 46,  122 => 43,  118 => 42,  114 => 41,  110 => 40,  104 => 37,  100 => 36,  96 => 35,  90 => 32,  86 => 31,  82 => 30,  69 => 20,  48 => 1,);
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

    <title>Email de réinitialisation envoyé</title>

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

            <h3 class=\"mb-1 fw-bold\">Email de réinitialisation envoyé</h3>
            <p class=\"mb-4\">Un email contenant un lien pour réinitialiser votre mot de passe a été envoyé à votre adresse email.</p>

            <div class=\"alert alert-info alert-elevated fade show mb-4\" role=\"alert\">
                <div class=\"d-flex align-items-center\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    <div>
                        <p class=\"mb-0\">Ce lien expirera dans {{ resetToken.expirationMessageKey|trans(resetToken.expirationMessageData, 'ResetPasswordBundle') }}.</p>
                    </div>
                </div>
            </div>

            <div class=\"text-center\">
                <i class=\"ti ti-mail text-primary\" style=\"font-size: 80px;\"></i>
            </div>

            <div class=\"divider my-4\">
              <div class=\"divider-text\">Que faire ensuite ?</div>
            </div>

            <div class=\"alert alert-secondary alert-elevated fade show mb-4\" role=\"alert\">
                <div class=\"d-flex align-items-start\">
                    <i class=\"fas fa-envelope-open-text me-2 mt-1\"></i>
                    <div>
                        <p class=\"mb-0\">Consultez votre boîte de réception et cliquez sur le lien de réinitialisation.</p>
                        <p class=\"mb-0 mt-2\">Si vous ne recevez pas d'email, vérifiez votre dossier spam ou essayez de nouveau.</p>
                    </div>
                </div>
            </div>

            <a href=\"{{ path('forgot_password') }}\" class=\"btn btn-primary d-grid w-100 btn-arrow\">
              Renvoyer un email
              <i class=\"fas fa-redo ms-2\"></i>
            </a>
            
            <div class=\"text-center mt-3\">
              <a href=\"#\" id=\"force-reset-button\" class=\"btn btn-outline-primary btn-arrow\">
                Accéder directement à la réinitialisation
                <i class=\"fas fa-bolt ms-2\"></i>
              </a>
            </div>
            
            <script>
              document.addEventListener('DOMContentLoaded', function() {
                const forceResetButton = document.getElementById('force-reset-button');
                if (forceResetButton) {
                  forceResetButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Show prompt for email
                    const email = prompt(\"Veuillez saisir votre adresse email pour accéder directement à la page de réinitialisation :\", \"\");
                    if (email && email.includes('@')) {
                      forceResetButton.innerHTML = '<i class=\"fas fa-spinner fa-spin me-2\"></i> Redirection en cours...';
                      forceResetButton.style.pointerEvents = 'none';
                      
                      window.location.href = '{{ path('force_reset_password') }}?email=' + encodeURIComponent(email);
                    } else if (email !== null) {
                      alert('Adresse email invalide. Veuillez réessayer.');
                    }
                  });
                }
              });
            </script>
            
            <p class=\"text-center mt-4\">
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
    <script src=\"{{ asset('js/main.js') }}\"></script>
  </body>
</html> ", "reset_password/check_email.html.twig", "C:\\Users\\ASUS\\Desktop\\user symfony\\templates\\reset_password\\check_email.html.twig");
    }
}
