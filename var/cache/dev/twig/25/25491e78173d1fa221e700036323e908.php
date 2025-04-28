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

/* admin/user/index.html.twig */
class __TwigTemplate_598607aa898cdf7e96d09c66bb86344b extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'title_h1' => [$this, 'block_title_h1'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/user/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Utilisateurs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title_h1(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_h1"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_h1"));

        yield "Gestion des utilisateurs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "  ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
  <link href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <style>
    .user-card {
      height: 100%;
      transition: transform 0.3s;
    }
    .user-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }
    .user-photo {
      max-width: 100%;
      height: 150px;
      object-fit: cover;
    }
    .user-card .card-body {
      flex: 1 1 auto;
    }
    .export-pdf-btn {
      background: #4e73df;
      color: white;
      border: none;
      border-radius: 4px;
      padding: 0.375rem 0.75rem;
      margin: 10px;
    }
    #myInput {
      margin: 10px;
      max-width: 300px;
    }
    .card-footer .btn {
      padding: 0.25rem 0.5rem;
      font-size: 0.75rem;
      margin: 0.1rem;
    }
    .action-buttons {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 5px;
    }
    .btn-elegant {
      background-color: #6c757d;
      color: white;
      border: none;
      background-image: linear-gradient(to bottom, #6c757d, #5a6268);
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }
    .btn-elegant:hover {
      background-image: linear-gradient(to bottom, #5a6268, #4a5056);
      transform: translateY(-1px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    }
    .btn-elegant:active {
      transform: translateY(0);
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .card-header h6,
    .card-body p {
      color: black !important;
    }
    @media (max-width: 576px) {
      .action-buttons {
        flex-direction: column;
      }
      .action-buttons .btn {
        width: 100%;
      }
    }
    /* Pagination styles */
    .pagination {
        justify-content: center;
        margin-top: 20px;
        display: flex;
        gap: 10px;
    }
    .page-item.active .page-link {
        background-color: #4e73df;
        border-color: #4e73df;
    }
    .page-link {
        color: #4e73df;
        padding: 8px 16px;
        border: 1px solid #dee2e6;
        text-decoration: none;
        border-radius: 4px;
    }
    .page-link:hover {
        color: #2a56c6;
        background-color: #f8f9fa;
    }
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 104
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

        // line 105
        yield "<div class=\"card shadow my-4\">
    <div class=\"card-header py-2 d-flex align-items-center\">
        <h6 class=\"m-0 font-weight-bold text-primary\" style=\"color: black !important;\">Liste des Utilisateurs</h6>
        <div class=\"ml-auto\" style=\"margin-left: 20px !important;\">
            <a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_add");
        yield "\" class=\"btn btn-success btn-icon-split\">
                <span class=\"icon text-white-50\">
                    <i class=\"fas fa-plus\"></i>
                </span>
                <span class=\"text\">Ajouter un utilisateur</span>
            </a>
        </div>
    </div>
    <div class=\"d-flex\">
        <button id=\"btPrintUsers\" class=\"export-pdf-btn\">
            <i class=\"fas fa-file-pdf\"></i> Export PDF
        </button>
        <input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Recherche...\" class=\"form-control\" id=\"search-input\">
    </div>
    <div class=\"card-body\">
        <div class=\"row\" id=\"userCards\">
            ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 125, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 126
            yield "                <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
                    <div class=\"card user-card h-100 border-left-primary\">
                        <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                            <h6 class=\"m-0 font-weight-bold text-primary\" style=\"color: black !important;\">";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 129), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 129), "html", null, true);
            yield "</h6>
                        </div>
                        <img class=\"user-photo\" src=\"";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 131))), "html", null, true);
            yield "\" alt=\"Profile photo\">
                        <div class=\"card-body\">
                            <p style=\"color: black !important;\"><strong>Email:</strong> ";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 133), "html", null, true);
            yield "</p>
                            <p style=\"color: black !important;\"><strong>Nom d'utilisateur:</strong> ";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 134), "html", null, true);
            yield "</p>
                            <p style=\"color: black !important;\"><strong>Type:</strong> ";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roleTitle", [], "any", false, false, false, 135), "html", null, true);
            yield "</p>
                        </div>
                        <div class=\"card-footer\">
                            <div class=\"d-flex flex-column\">
                                <div class=\"mb-2 text-center\">
                                    <img src=\"";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "qrCode", [], "any", false, false, false, 140), "html", null, true);
            yield "\" width=\"100\" height=\"100\" class=\"img-fluid\" />
                                </div>
                                <div class=\"action-buttons\">
                                    <a href=\"";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 143)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm mb-1\">
                                        <i class=\"fas fa-eye fa-sm\"></i> Voir
                                    </a>
                                    <a href=\"";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 146)]), "html", null, true);
            yield "\" class=\"btn btn-elegant btn-sm mb-1\">
                                        <i class=\"fas fa-edit fa-sm\"></i> Modifier
                                    </a>
                                    <form action=\"";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_toggle_verify", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 149)]), "html", null, true);
            yield "\" method=\"post\" class=\"d-inline mb-1\">
                                        <button type=\"submit\" class=\"btn ";
            // line 150
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 150)) ? ("btn-warning") : ("btn-secondary"));
            yield " btn-sm\">
                                            <i class=\"fas fa-";
            // line 151
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 151)) ? ("ban") : ("check"));
            yield " fa-sm\"></i> ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 151)) ? ("Ban") : ("Unban"));
            yield "
                                        </button>
                                    </form>
                                    ";
            // line 154
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roleTitle", [], "any", false, false, false, 154) != "Administrateur")) {
                // line 155
                yield "                                        <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 155)]), "html", null, true);
                yield "\" method=\"post\" class=\"d-inline mb-1\">
                                            <button type=\"submit\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')\">
                                                <i class=\"fas fa-trash fa-sm\"></i> Supprimer
                                            </button>
                                        </form>
                                    ";
            }
            // line 161
            yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 166
        if (!$context['_iterated']) {
            // line 167
            yield "                <div class=\"col-12\">
                    <div class=\"alert alert-info\">Aucun utilisateur trouvé</div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        yield "        </div>
        
        ";
        // line 174
        yield "        <div class=\"navigation d-flex justify-content-center\">
            <ul class=\"pagination\">
                ";
        // line 176
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 176, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 176) > 1)) {
            // line 177
            yield "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 178, $this->source); })()), "request", [], "any", false, false, false, 178), "attributes", [], "any", false, false, false, 178), "get", ["_route"], "method", false, false, false, 178), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 178, $this->source); })()), "request", [], "any", false, false, false, 178), "query", [], "any", false, false, false, 178), "all", [], "any", false, false, false, 178), ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 178, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 178) - 1)])), "html", null, true);
            yield "\" rel=\"prev\">
                            Page précédente
                        </a>
                    </li>
                ";
        }
        // line 183
        yield "                
                ";
        // line 184
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 184, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 184) < CoreExtension::getAttribute($this->env, $this->source, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 184, $this->source); })()), "getPageCount", [], "method", false, false, false, 184))) {
            // line 185
            yield "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 186, $this->source); })()), "request", [], "any", false, false, false, 186), "attributes", [], "any", false, false, false, 186), "get", ["_route"], "method", false, false, false, 186), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 186, $this->source); })()), "request", [], "any", false, false, false, 186), "query", [], "any", false, false, false, 186), "all", [], "any", false, false, false, 186), ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 186, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 186) + 1)])), "html", null, true);
            yield "\" rel=\"next\">
                            Page suivante
                        </a>
                    </li>
                ";
        }
        // line 191
        yield "            </ul>
        </div>
    </div>
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js\"></script>
<script>
window.myFunction = function() {
  var input, filter, cards, cardContainer, title, i, email, username;
  input = document.getElementById(\"myInput\");
  filter = input.value.toUpperCase();
  cardContainer = document.getElementById(\"userCards\");
  cards = cardContainer.getElementsByClassName(\"col-xl-3\");
  
  for (i = 0; i < cards.length; i++) {
    title = cards[i].querySelector(\".card-header h6\");
    var cardBody = cards[i].querySelector(\".card-body\");
    if (cardBody) {
      email = cardBody.querySelector(\"p:nth-child(1)\");
      username = cardBody.querySelector(\"p:nth-child(2)\");
    }
    
    var titleText = title ? title.innerText.toUpperCase() : \"\";
    var emailText = email ? email.innerText.toUpperCase() : \"\";
    var usernameText = username ? username.innerText.toUpperCase() : \"\";
    
    if (titleText.indexOf(filter) > -1 || 
        emailText.indexOf(filter) > -1 || 
        usernameText.indexOf(filter) > -1) {
      cards[i].style.display = \"\";
    } else {
      cards[i].style.display = \"none\";
    }
  }
};

document.addEventListener('DOMContentLoaded', function() {
  var pdfButton = document.getElementById('btPrintUsers');
  if (pdfButton) {
    pdfButton.addEventListener('click', function() {
      try {
        if (!window.jspdf || !window.jspdf.jsPDF) {
          alert('Erreur: La bibliothèque jsPDF n\\'est pas chargée correctement.');
          return;
        }
        
        if (!window.html2canvas) {
          alert('Erreur: La bibliothèque html2canvas n\\'est pas chargée correctement.');
          return;
        }
        
        window.jsPDF = window.jspdf.jsPDF;
        var doc = new jsPDF('p', 'mm', 'a4');
        
        var cardsContainer = document.getElementById('userCards');
        if (!cardsContainer) {
          alert('Erreur: Conteneur de cartes utilisateur non trouvé.');
          return;
        }
        
        var visibleCards = [];
        var cardElements = cardsContainer.querySelectorAll('.col-xl-3');
        
        if (cardElements.length === 0) {
          alert('Erreur: Aucune carte utilisateur trouvée.');
          return;
        }
        
        Array.from(cardElements).forEach(function(card) {
          if (window.getComputedStyle(card).display !== 'none') {
            visibleCards.push(card.cloneNode(true));
          }
        });
        
        if (visibleCards.length === 0) {
          alert('Erreur: Aucune carte utilisateur visible trouvée.');
          return;
        }
        
        var tempContainer = document.createElement('div');
        tempContainer.classList.add('temp-container');
        tempContainer.style.position = 'absolute';
        tempContainer.style.top = '-9999px';
        tempContainer.style.width = '210mm';
        tempContainer.style.backgroundColor = 'white';
        tempContainer.style.padding = '10mm';
        
        var gridContainer = document.createElement('div');
        gridContainer.style.display = 'grid';
        gridContainer.style.gridTemplateColumns = 'repeat(2, 1fr)';
        gridContainer.style.gap = '10mm';
        tempContainer.appendChild(gridContainer);
        
        document.body.appendChild(tempContainer);
        
        visibleCards.forEach(function(card, index) {
          try {
            var cardWrapper = document.createElement('div');
            cardWrapper.style.pageBreakInside = 'avoid';
            
            var userCard = card.querySelector('.user-card');
            if (userCard) {
              var smallCard = userCard.cloneNode(true);
              smallCard.style.border = '1px solid #ddd';
              smallCard.style.borderRadius = '5px';
              smallCard.style.boxShadow = '0 2px 5px rgba(0, 0, 0, 0.1)';
              smallCard.style.overflow = 'hidden';
              smallCard.style.height = 'auto';
              
              var cardHeader = smallCard.querySelector('.card-header');
              if (cardHeader) {
                cardHeader.style.padding = '5mm 3mm';
                cardHeader.style.fontSize = '12px';
              }
              
              var cardImage = smallCard.querySelector('.user-photo');
              if (cardImage) {
                cardImage.style.height = '25mm';
                cardImage.style.width = '25mm';
                cardImage.style.objectFit = 'cover';
              }
              
              var cardBody = smallCard.querySelector('.card-body');
              if (cardBody) {
                cardBody.style.padding = '3mm';
                cardBody.style.fontSize = '10px';
              }
              
              var cardFooter = smallCard.querySelector('.card-footer');
              if (cardFooter) {
                var qrCodeContainer = cardFooter.querySelector('.mb-2');
                if (qrCodeContainer) {
                  qrCodeContainer.style.marginBottom = '2mm';
                  
                  var qrCode = qrCodeContainer.querySelector('img');
                  if (qrCode) {
                    qrCode.style.width = '15mm';
                    qrCode.style.height = '15mm';
                  }
                }
                
                var actionButtons = cardFooter.querySelector('.action-buttons');
                if (actionButtons) {
                  actionButtons.remove();
                }
                
                cardFooter.style.padding = '3mm';
                cardFooter.style.fontSize = '10px';
              }
              
              cardWrapper.appendChild(smallCard);
              gridContainer.appendChild(cardWrapper);
            }
          } catch (cardError) {
            console.error('Error processing card:', cardError);
          }
        });
        
        html2canvas(tempContainer, {
          scale: 2,
          backgroundColor: 'white',
        }).then(function(canvas) {
          var imgData = canvas.toDataURL('image/png');
          var imgWidth = 190;
          var pageHeight = 297;
          var imgHeight = canvas.height * imgWidth / canvas.width;
          var heightLeft = imgHeight;
          var position = 30;
          
          doc.addImage(imgData, 'PNG', 10, position, imgWidth, imgHeight);
          heightLeft -= (pageHeight - position);
          
          var pageCount = 1;
          while (heightLeft >= 0) {
            position = 0;
            doc.addPage();
            pageCount++;
            doc.addImage(imgData, 'PNG', 10, position, imgWidth, imgHeight);
            heightLeft -= pageHeight;
          }
          
          doc.save('liste-utilisateurs.pdf');
          document.body.removeChild(tempContainer);
        }).catch(function(canvasError) {
          alert('Erreur lors de la création du PDF: ' + canvasError.message);
          if (document.body.contains(tempContainer)) {
            document.body.removeChild(tempContainer);
          }
        });
      } catch (error) {
        alert('Erreur lors de la génération du PDF: ' + error.message);
      }
    });
  }
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 390
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

        // line 391
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <script src=\"";
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sbadmin2/vendor/datatables/jquery.dataTables.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>
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
        return "admin/user/index.html.twig";
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
        return array (  645 => 393,  641 => 392,  636 => 391,  623 => 390,  415 => 191,  407 => 186,  404 => 185,  402 => 184,  399 => 183,  391 => 178,  388 => 177,  386 => 176,  382 => 174,  378 => 171,  369 => 167,  367 => 166,  358 => 161,  348 => 155,  346 => 154,  338 => 151,  334 => 150,  330 => 149,  324 => 146,  318 => 143,  312 => 140,  304 => 135,  300 => 134,  296 => 133,  291 => 131,  284 => 129,  279 => 126,  274 => 125,  255 => 109,  249 => 105,  236 => 104,  131 => 9,  126 => 8,  113 => 7,  90 => 5,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"admin/layout.html.twig\" %}

{% block title \"Utilisateurs\" %}

{% block title_h1 \"Gestion des utilisateurs\" %}

{% block stylesheets %}
  {{ parent() }}
  <link href=\"{{ asset(\"sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css\") }}\" rel=\"stylesheet\">
  <style>
    .user-card {
      height: 100%;
      transition: transform 0.3s;
    }
    .user-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }
    .user-photo {
      max-width: 100%;
      height: 150px;
      object-fit: cover;
    }
    .user-card .card-body {
      flex: 1 1 auto;
    }
    .export-pdf-btn {
      background: #4e73df;
      color: white;
      border: none;
      border-radius: 4px;
      padding: 0.375rem 0.75rem;
      margin: 10px;
    }
    #myInput {
      margin: 10px;
      max-width: 300px;
    }
    .card-footer .btn {
      padding: 0.25rem 0.5rem;
      font-size: 0.75rem;
      margin: 0.1rem;
    }
    .action-buttons {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 5px;
    }
    .btn-elegant {
      background-color: #6c757d;
      color: white;
      border: none;
      background-image: linear-gradient(to bottom, #6c757d, #5a6268);
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }
    .btn-elegant:hover {
      background-image: linear-gradient(to bottom, #5a6268, #4a5056);
      transform: translateY(-1px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    }
    .btn-elegant:active {
      transform: translateY(0);
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .card-header h6,
    .card-body p {
      color: black !important;
    }
    @media (max-width: 576px) {
      .action-buttons {
        flex-direction: column;
      }
      .action-buttons .btn {
        width: 100%;
      }
    }
    /* Pagination styles */
    .pagination {
        justify-content: center;
        margin-top: 20px;
        display: flex;
        gap: 10px;
    }
    .page-item.active .page-link {
        background-color: #4e73df;
        border-color: #4e73df;
    }
    .page-link {
        color: #4e73df;
        padding: 8px 16px;
        border: 1px solid #dee2e6;
        text-decoration: none;
        border-radius: 4px;
    }
    .page-link:hover {
        color: #2a56c6;
        background-color: #f8f9fa;
    }
  </style>
{% endblock %}

{% block body %}
<div class=\"card shadow my-4\">
    <div class=\"card-header py-2 d-flex align-items-center\">
        <h6 class=\"m-0 font-weight-bold text-primary\" style=\"color: black !important;\">Liste des Utilisateurs</h6>
        <div class=\"ml-auto\" style=\"margin-left: 20px !important;\">
            <a href=\"{{ path(\"admin_user_add\") }}\" class=\"btn btn-success btn-icon-split\">
                <span class=\"icon text-white-50\">
                    <i class=\"fas fa-plus\"></i>
                </span>
                <span class=\"text\">Ajouter un utilisateur</span>
            </a>
        </div>
    </div>
    <div class=\"d-flex\">
        <button id=\"btPrintUsers\" class=\"export-pdf-btn\">
            <i class=\"fas fa-file-pdf\"></i> Export PDF
        </button>
        <input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Recherche...\" class=\"form-control\" id=\"search-input\">
    </div>
    <div class=\"card-body\">
        <div class=\"row\" id=\"userCards\">
            {% for user in users %}
                <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
                    <div class=\"card user-card h-100 border-left-primary\">
                        <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                            <h6 class=\"m-0 font-weight-bold text-primary\" style=\"color: black !important;\">{{ user.firstName }} {{ user.lastName }}</h6>
                        </div>
                        <img class=\"user-photo\" src=\"{{ asset('uploads/photos/' ~ user.photo) }}\" alt=\"Profile photo\">
                        <div class=\"card-body\">
                            <p style=\"color: black !important;\"><strong>Email:</strong> {{ user.email }}</p>
                            <p style=\"color: black !important;\"><strong>Nom d'utilisateur:</strong> {{ user.username }}</p>
                            <p style=\"color: black !important;\"><strong>Type:</strong> {{ user.roleTitle }}</p>
                        </div>
                        <div class=\"card-footer\">
                            <div class=\"d-flex flex-column\">
                                <div class=\"mb-2 text-center\">
                                    <img src=\"{{ user.qrCode }}\" width=\"100\" height=\"100\" class=\"img-fluid\" />
                                </div>
                                <div class=\"action-buttons\">
                                    <a href=\"{{ path(\"admin_user_show\", {\"id\": user.id}) }}\" class=\"btn btn-info btn-sm mb-1\">
                                        <i class=\"fas fa-eye fa-sm\"></i> Voir
                                    </a>
                                    <a href=\"{{ path(\"admin_user_edit\", {\"id\": user.id}) }}\" class=\"btn btn-elegant btn-sm mb-1\">
                                        <i class=\"fas fa-edit fa-sm\"></i> Modifier
                                    </a>
                                    <form action=\"{{ path('admin_user_toggle_verify', {'id': user.id}) }}\" method=\"post\" class=\"d-inline mb-1\">
                                        <button type=\"submit\" class=\"btn {{ user.isVerified ? 'btn-warning' : 'btn-secondary' }} btn-sm\">
                                            <i class=\"fas fa-{{ user.isVerified ? 'ban' : 'check' }} fa-sm\"></i> {{ user.isVerified ? 'Ban' : 'Unban' }}
                                        </button>
                                    </form>
                                    {% if user.roleTitle != 'Administrateur' %}
                                        <form action=\"{{ path(\"admin_user_delete\", {\"id\": user.id}) }}\" method=\"post\" class=\"d-inline mb-1\">
                                            <button type=\"submit\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')\">
                                                <i class=\"fas fa-trash fa-sm\"></i> Supprimer
                                            </button>
                                        </form>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"col-12\">
                    <div class=\"alert alert-info\">Aucun utilisateur trouvé</div>
                </div>
            {% endfor %}
        </div>
        
        {# Centered Pagination #}
        <div class=\"navigation d-flex justify-content-center\">
            <ul class=\"pagination\">
                {% if users.getCurrentPageNumber() > 1 %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path(app.request.attributes.get('_route'), app.request.query.all|merge({'page': users.getCurrentPageNumber() - 1})) }}\" rel=\"prev\">
                            Page précédente
                        </a>
                    </li>
                {% endif %}
                
                {% if users.getCurrentPageNumber() < users.getPageCount() %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path(app.request.attributes.get('_route'), app.request.query.all|merge({'page': users.getCurrentPageNumber() + 1})) }}\" rel=\"next\">
                            Page suivante
                        </a>
                    </li>
                {% endif %}
            </ul>
        </div>
    </div>
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js\"></script>
<script>
window.myFunction = function() {
  var input, filter, cards, cardContainer, title, i, email, username;
  input = document.getElementById(\"myInput\");
  filter = input.value.toUpperCase();
  cardContainer = document.getElementById(\"userCards\");
  cards = cardContainer.getElementsByClassName(\"col-xl-3\");
  
  for (i = 0; i < cards.length; i++) {
    title = cards[i].querySelector(\".card-header h6\");
    var cardBody = cards[i].querySelector(\".card-body\");
    if (cardBody) {
      email = cardBody.querySelector(\"p:nth-child(1)\");
      username = cardBody.querySelector(\"p:nth-child(2)\");
    }
    
    var titleText = title ? title.innerText.toUpperCase() : \"\";
    var emailText = email ? email.innerText.toUpperCase() : \"\";
    var usernameText = username ? username.innerText.toUpperCase() : \"\";
    
    if (titleText.indexOf(filter) > -1 || 
        emailText.indexOf(filter) > -1 || 
        usernameText.indexOf(filter) > -1) {
      cards[i].style.display = \"\";
    } else {
      cards[i].style.display = \"none\";
    }
  }
};

document.addEventListener('DOMContentLoaded', function() {
  var pdfButton = document.getElementById('btPrintUsers');
  if (pdfButton) {
    pdfButton.addEventListener('click', function() {
      try {
        if (!window.jspdf || !window.jspdf.jsPDF) {
          alert('Erreur: La bibliothèque jsPDF n\\'est pas chargée correctement.');
          return;
        }
        
        if (!window.html2canvas) {
          alert('Erreur: La bibliothèque html2canvas n\\'est pas chargée correctement.');
          return;
        }
        
        window.jsPDF = window.jspdf.jsPDF;
        var doc = new jsPDF('p', 'mm', 'a4');
        
        var cardsContainer = document.getElementById('userCards');
        if (!cardsContainer) {
          alert('Erreur: Conteneur de cartes utilisateur non trouvé.');
          return;
        }
        
        var visibleCards = [];
        var cardElements = cardsContainer.querySelectorAll('.col-xl-3');
        
        if (cardElements.length === 0) {
          alert('Erreur: Aucune carte utilisateur trouvée.');
          return;
        }
        
        Array.from(cardElements).forEach(function(card) {
          if (window.getComputedStyle(card).display !== 'none') {
            visibleCards.push(card.cloneNode(true));
          }
        });
        
        if (visibleCards.length === 0) {
          alert('Erreur: Aucune carte utilisateur visible trouvée.');
          return;
        }
        
        var tempContainer = document.createElement('div');
        tempContainer.classList.add('temp-container');
        tempContainer.style.position = 'absolute';
        tempContainer.style.top = '-9999px';
        tempContainer.style.width = '210mm';
        tempContainer.style.backgroundColor = 'white';
        tempContainer.style.padding = '10mm';
        
        var gridContainer = document.createElement('div');
        gridContainer.style.display = 'grid';
        gridContainer.style.gridTemplateColumns = 'repeat(2, 1fr)';
        gridContainer.style.gap = '10mm';
        tempContainer.appendChild(gridContainer);
        
        document.body.appendChild(tempContainer);
        
        visibleCards.forEach(function(card, index) {
          try {
            var cardWrapper = document.createElement('div');
            cardWrapper.style.pageBreakInside = 'avoid';
            
            var userCard = card.querySelector('.user-card');
            if (userCard) {
              var smallCard = userCard.cloneNode(true);
              smallCard.style.border = '1px solid #ddd';
              smallCard.style.borderRadius = '5px';
              smallCard.style.boxShadow = '0 2px 5px rgba(0, 0, 0, 0.1)';
              smallCard.style.overflow = 'hidden';
              smallCard.style.height = 'auto';
              
              var cardHeader = smallCard.querySelector('.card-header');
              if (cardHeader) {
                cardHeader.style.padding = '5mm 3mm';
                cardHeader.style.fontSize = '12px';
              }
              
              var cardImage = smallCard.querySelector('.user-photo');
              if (cardImage) {
                cardImage.style.height = '25mm';
                cardImage.style.width = '25mm';
                cardImage.style.objectFit = 'cover';
              }
              
              var cardBody = smallCard.querySelector('.card-body');
              if (cardBody) {
                cardBody.style.padding = '3mm';
                cardBody.style.fontSize = '10px';
              }
              
              var cardFooter = smallCard.querySelector('.card-footer');
              if (cardFooter) {
                var qrCodeContainer = cardFooter.querySelector('.mb-2');
                if (qrCodeContainer) {
                  qrCodeContainer.style.marginBottom = '2mm';
                  
                  var qrCode = qrCodeContainer.querySelector('img');
                  if (qrCode) {
                    qrCode.style.width = '15mm';
                    qrCode.style.height = '15mm';
                  }
                }
                
                var actionButtons = cardFooter.querySelector('.action-buttons');
                if (actionButtons) {
                  actionButtons.remove();
                }
                
                cardFooter.style.padding = '3mm';
                cardFooter.style.fontSize = '10px';
              }
              
              cardWrapper.appendChild(smallCard);
              gridContainer.appendChild(cardWrapper);
            }
          } catch (cardError) {
            console.error('Error processing card:', cardError);
          }
        });
        
        html2canvas(tempContainer, {
          scale: 2,
          backgroundColor: 'white',
        }).then(function(canvas) {
          var imgData = canvas.toDataURL('image/png');
          var imgWidth = 190;
          var pageHeight = 297;
          var imgHeight = canvas.height * imgWidth / canvas.width;
          var heightLeft = imgHeight;
          var position = 30;
          
          doc.addImage(imgData, 'PNG', 10, position, imgWidth, imgHeight);
          heightLeft -= (pageHeight - position);
          
          var pageCount = 1;
          while (heightLeft >= 0) {
            position = 0;
            doc.addPage();
            pageCount++;
            doc.addImage(imgData, 'PNG', 10, position, imgWidth, imgHeight);
            heightLeft -= pageHeight;
          }
          
          doc.save('liste-utilisateurs.pdf');
          document.body.removeChild(tempContainer);
        }).catch(function(canvasError) {
          alert('Erreur lors de la création du PDF: ' + canvasError.message);
          if (document.body.contains(tempContainer)) {
            document.body.removeChild(tempContainer);
          }
        });
      } catch (error) {
        alert('Erreur lors de la génération du PDF: ' + error.message);
      }
    });
  }
});
</script>
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset(\"sbadmin2/vendor/datatables/jquery.dataTables.min.js\") }}\"></script>
  <script src=\"{{ asset(\"sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js\") }}\"></script>
{% endblock %}", "admin/user/index.html.twig", "C:\\Users\\ASUS\\Desktop\\user symfony\\templates\\admin\\user\\index.html.twig");
    }
}
