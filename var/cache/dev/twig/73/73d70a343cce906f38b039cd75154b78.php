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

/* back/login.html.twig */
class __TwigTemplate_a74d92148f8f21522396f74f4769e0cb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/login.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Se connecter</title>

    <!-- Custom fonts for this template-->
    <link href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/sb-admin-2.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

</head>

<body class=\"bg-gradient-primary\">

    <div class=\"container\">

        <!-- Outer Row -->
        <div class=\"row justify-content-center\">

            <div class=\"col-xl-10 col-lg-12 col-md-9\">

                <div class=\"card o-hidden border-0 shadow-lg my-5\">
                    <div class=\"card-body p-0\">
                        <!-- Nested Row within Card Body -->
                        <div class=\"row\">
                            <div class=\"col-lg-6 d-none d-lg-block bg-login-image\"></div>
                            <div class=\"col-lg-6\">
                                <div class=\"p-5\">
                                    <div class=\"text-center\">
                                        <h1 class=\"h4 text-gray-900 mb-4\">Vous êtes les bienvenus !</h1>
                                    </div>
                                    <form class=\"user\">
                                        <div class=\"form-group\">
                                            <input type=\"email\" class=\"form-control form-control-user\"
                                                id=\"exampleInputEmail\" aria-describedby=\"emailHelp\"
                                                placeholder=\"Entrer votre Adress E_mail...\">
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"password\" class=\"form-control form-control-user\"
                                                id=\"exampleInputPassword\" placeholder=\"Mot de passe\">
                                        </div>
                                        <div class=\"form-group\">
                                            
                                        </div>
                                        <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_front");
        yield "\" class=\"btn btn-primary btn-user btn-block\">
                                            Se connecter 
                                        </a>
                                        
                                    </form>
                                    <hr>
                                    <div class=\"text-center\">
                                        <a class=\"small\" href=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("forgot-password.html"), "html", null, true);
        yield "\">Mot de passe oublié ?</a>
                                    </div>
                                    <div class=\"text-center\">
                                        <a class=\"small\" href=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("register_front"), "html", null, true);
        yield "\">Créer un compte !</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src=\"back/vendor/jquery/jquery.min.js\"></script>
    <script src=\"back/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"back/vendor/jquery-easing/jquery.easing.min.js\"></script>

    <!-- Custom scripts for all pages-->
    <script src=\"back/js/sb-admin-2.min.js\"></script>

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
        return "back/login.html.twig";
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
        return array (  128 => 67,  122 => 64,  112 => 57,  73 => 21,  64 => 15,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Se connecter</title>

    <!-- Custom fonts for this template-->
    <link href=\"{{asset('back/vendor/fontawesome-free/css/all.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"{{asset('back/css/sb-admin-2.min.css')}}\" rel=\"stylesheet\">

</head>

<body class=\"bg-gradient-primary\">

    <div class=\"container\">

        <!-- Outer Row -->
        <div class=\"row justify-content-center\">

            <div class=\"col-xl-10 col-lg-12 col-md-9\">

                <div class=\"card o-hidden border-0 shadow-lg my-5\">
                    <div class=\"card-body p-0\">
                        <!-- Nested Row within Card Body -->
                        <div class=\"row\">
                            <div class=\"col-lg-6 d-none d-lg-block bg-login-image\"></div>
                            <div class=\"col-lg-6\">
                                <div class=\"p-5\">
                                    <div class=\"text-center\">
                                        <h1 class=\"h4 text-gray-900 mb-4\">Vous êtes les bienvenus !</h1>
                                    </div>
                                    <form class=\"user\">
                                        <div class=\"form-group\">
                                            <input type=\"email\" class=\"form-control form-control-user\"
                                                id=\"exampleInputEmail\" aria-describedby=\"emailHelp\"
                                                placeholder=\"Entrer votre Adress E_mail...\">
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"password\" class=\"form-control form-control-user\"
                                                id=\"exampleInputPassword\" placeholder=\"Mot de passe\">
                                        </div>
                                        <div class=\"form-group\">
                                            
                                        </div>
                                        <a href=\"{{path('login_front')}}\" class=\"btn btn-primary btn-user btn-block\">
                                            Se connecter 
                                        </a>
                                        
                                    </form>
                                    <hr>
                                    <div class=\"text-center\">
                                        <a class=\"small\" href=\"{{asset('forgot-password.html')}}\">Mot de passe oublié ?</a>
                                    </div>
                                    <div class=\"text-center\">
                                        <a class=\"small\" href=\"{{asset('register_front')}}\">Créer un compte !</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src=\"back/vendor/jquery/jquery.min.js\"></script>
    <script src=\"back/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"back/vendor/jquery-easing/jquery.easing.min.js\"></script>

    <!-- Custom scripts for all pages-->
    <script src=\"back/js/sb-admin-2.min.js\"></script>

</body>

</html>", "back/login.html.twig", "C:\\Users\\ASUS\\Desktop\\souha\\GoldenTouch-Symfony\\templates\\back\\login.html.twig");
    }
}
