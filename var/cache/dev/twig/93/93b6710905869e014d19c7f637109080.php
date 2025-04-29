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

/* back/register.html.twig */
class __TwigTemplate_87b95e990555577b7974ba716b890179 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/register.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Inscription</title>

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

        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">
                <!-- Nested Row within Card Body -->
                <div class=\"row\">
                    <div class=\"col-lg-7\">
                        <div class=\"p-5\">
                            <div class=\"text-center\">
                                <h1 class=\"h4 text-gray-900 mb-4\">Créer un compte!</h1>
                            </div>
                            <form class=\"user\">
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"exampleFirstName\"
                                            placeholder=\"Prénom\">
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"exampleLastName\"
                                            placeholder=\"Nom\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"email\" class=\"form-control form-control-user\" id=\"exampleInputEmail\"
                                        placeholder=\"Adresse E_mail\">
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input type=\"password\" class=\"form-control form-control-user\"
                                            id=\"exampleInputPassword\" placeholder=\"Mot de passe\">
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"password\" class=\"form-control form-control-user\"
                                            id=\"exampleRepeatPassword\" placeholder=\"Confirmer mot de passe\">
                                    </div>
                                </div>
                                <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_front");
        yield "\" class=\"btn btn-primary btn-user btn-block\">
                                    S'inscrire
                                </a>
                                
                            </form>
                            <hr>
                            <div class=\"text-center\">
                                <a class=\"small\" href=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("forgot-password.html"), "html", null, true);
        yield "\">Mot de passe oublié?</a>
                            </div>
                            <div class=\"text-center\">
                                <a class=\"small\" href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_front");
        yield "\">Vous avez déja un compte ? Se connecter!</a>
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
        return "back/register.html.twig";
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
        return array (  134 => 73,  128 => 70,  118 => 63,  73 => 21,  64 => 15,  48 => 1,);
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

    <title>Inscription</title>

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

        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">
                <!-- Nested Row within Card Body -->
                <div class=\"row\">
                    <div class=\"col-lg-7\">
                        <div class=\"p-5\">
                            <div class=\"text-center\">
                                <h1 class=\"h4 text-gray-900 mb-4\">Créer un compte!</h1>
                            </div>
                            <form class=\"user\">
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"exampleFirstName\"
                                            placeholder=\"Prénom\">
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"exampleLastName\"
                                            placeholder=\"Nom\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"email\" class=\"form-control form-control-user\" id=\"exampleInputEmail\"
                                        placeholder=\"Adresse E_mail\">
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input type=\"password\" class=\"form-control form-control-user\"
                                            id=\"exampleInputPassword\" placeholder=\"Mot de passe\">
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"password\" class=\"form-control form-control-user\"
                                            id=\"exampleRepeatPassword\" placeholder=\"Confirmer mot de passe\">
                                    </div>
                                </div>
                                <a href=\"{{path('register_front')}}\" class=\"btn btn-primary btn-user btn-block\">
                                    S'inscrire
                                </a>
                                
                            </form>
                            <hr>
                            <div class=\"text-center\">
                                <a class=\"small\" href=\"{{asset('forgot-password.html')}}\">Mot de passe oublié?</a>
                            </div>
                            <div class=\"text-center\">
                                <a class=\"small\" href=\"{{path('login_front')}}\">Vous avez déja un compte ? Se connecter!</a>
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

</html>", "back/register.html.twig", "C:\\Users\\ASUS\\Desktop\\souha\\GoldenTouch-Symfony\\templates\\back\\register.html.twig");
    }
}
