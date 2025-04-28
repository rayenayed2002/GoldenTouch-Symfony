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
class __TwigTemplate_e9ccec824c4515bc7079161d2cca7cb7 extends Template
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
    @media (max-width: 576px) {
      .action-buttons {
        flex-direction: column;
      }
      .action-buttons .btn {
        width: 100%;
      }
    }
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 61
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

        // line 62
        yield "<div class=\"card shadow my-4\">
    <div class=\"card-header py-2 d-flex align-items-center\">
        <h6 class=\"m-0 font-weight-bold text-primary\">Utilisateurs</h6>
        <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_add");
        yield "\" class=\"btn btn-success btn-icon-split ml-auto\">
            <span class=\"icon text-white-50\">
                <i class=\"fas fa-plus\"></i>
            </span>
            <span class=\"text\">Ajouter un utilisateur</span>
        </a>
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
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 80, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 81
            yield "                <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
                    <div class=\"card user-card h-100 border-left-primary\">
                        <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 84), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 84), "html", null, true);
            yield "</h6>
                        </div>
                        <img class=\"user-photo\" src=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 86))), "html", null, true);
            yield "\" alt=\"Profile photo\">
                        <div class=\"card-body\">
                            <p><strong>Email:</strong> ";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 88), "html", null, true);
            yield "</p>
                            <p><strong>Nom d'utilisateur:</strong> ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 89), "html", null, true);
            yield "</p>
                            <p><strong>Type:</strong> ";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roleTitle", [], "any", false, false, false, 90), "html", null, true);
            yield "</p>
                        </div>
                        <div class=\"card-footer\">
                            <div class=\"d-flex flex-column\">
                                <div class=\"mb-2 text-center\">
                                    <img src=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "qrCode", [], "any", false, false, false, 95), "html", null, true);
            yield "\" width=\"100\" height=\"100\" class=\"img-fluid\" />
                                </div>
                                <div class=\"action-buttons\">
                                    <a href=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm mb-1\">
                                        <i class=\"fas fa-eye fa-sm\"></i> Voir
                                    </a>
                                    <a href=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 101)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm mb-1\">
                                        <i class=\"fas fa-edit fa-sm\"></i> Modifier
                                    </a>
                                    <form action=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_toggle_verify", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 104)]), "html", null, true);
            yield "\" method=\"post\" class=\"d-inline mb-1\">
                                        <button type=\"submit\" class=\"btn ";
            // line 105
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 105)) ? ("btn-warning") : ("btn-secondary"));
            yield " btn-sm\">
                                            <i class=\"fas fa-";
            // line 106
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 106)) ? ("ban") : ("check"));
            yield " fa-sm\"></i> ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 106)) ? ("Ban") : ("Unban"));
            yield "
                                        </button>
                                    </form>
                                    ";
            // line 109
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roleTitle", [], "any", false, false, false, 109) != "Administrateur")) {
                // line 110
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 110)]), "html", null, true);
                yield "\" class=\"btn btn-danger btn-sm mb-1\">
                                            <i class=\"fas fa-trash fa-sm\"></i> Supprimer
                                        </a>
                                    ";
            }
            // line 114
            yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        yield "        </div>
    </div>
</div>

<!-- Direct script tag before the end of body to ensure global availability -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js\"></script>
<script>
// Define global functions
window.myFunction = function() {
  var input, filter, cards, cardContainer, title, i, email, username;
  input = document.getElementById(\"myInput\");
  filter = input.value.toUpperCase();
  cardContainer = document.getElementById(\"userCards\");
  cards = cardContainer.getElementsByClassName(\"col-xl-3\");
  
  for (i = 0; i < cards.length; i++) {
    // Search by name
    title = cards[i].querySelector(\".card-header h6\");
    // Search by email and username
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

// Set up PDF export function
document.addEventListener('DOMContentLoaded', function() {
  var pdfButton = document.getElementById('btPrintUsers');
  if (pdfButton) {
    pdfButton.addEventListener('click', function() {
      try {
        // Check if jsPDF is available
        if (!window.jspdf || !window.jspdf.jsPDF) {
          alert('Erreur: La bibliothèque jsPDF n\\'est pas chargée correctement.');
          return;
        }
        
        // Check if html2canvas is available
        if (!window.html2canvas) {
          alert('Erreur: La bibliothèque html2canvas n\\'est pas chargée correctement.');
          return;
        }
        
        // Set up the PDF document
        window.jsPDF = window.jspdf.jsPDF;
        var doc = new jsPDF('p', 'mm', 'a4');
        
        // Get the container with all user cards
        var cardsContainer = document.getElementById('userCards');
        if (!cardsContainer) {
          alert('Erreur: Conteneur de cartes utilisateur non trouvé.');
          return;
        }
        
        // Title
        doc.setFontSize(22);
        doc.setTextColor(40, 40, 40);
        doc.text('Liste des Utilisateurs', 20, 20);
        
        // Display only visible cards (in case search is active)
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
        
        // Create a temporary container for the visible cards
        var tempContainer = document.createElement('div');
        tempContainer.classList.add('temp-container');
        tempContainer.style.position = 'absolute';
        tempContainer.style.top = '-9999px';
        tempContainer.style.width = '210mm'; // A4 width
        tempContainer.style.backgroundColor = 'white';
        tempContainer.style.padding = '10mm';
        
        // Create grid layout for cards
        var gridContainer = document.createElement('div');
        gridContainer.style.display = 'grid';
        gridContainer.style.gridTemplateColumns = 'repeat(2, 1fr)'; // 2 cards per row
        gridContainer.style.gap = '10mm';
        tempContainer.appendChild(gridContainer);
        
        document.body.appendChild(tempContainer);
        
        // Add each visible card to the temp container with optimized layout for PDF
        visibleCards.forEach(function(card, index) {
          try {
            // Create a new wrapper for each card
            var cardWrapper = document.createElement('div');
            cardWrapper.style.pageBreakInside = 'avoid';
            
            // Get the user-card element from the cloned card
            var userCard = card.querySelector('.user-card');
            if (userCard) {
              // Create a smaller version of the card
              var smallCard = userCard.cloneNode(true);
              smallCard.style.border = '1px solid #ddd';
              smallCard.style.borderRadius = '5px';
              smallCard.style.boxShadow = '0 2px 5px rgba(0, 0, 0, 0.1)';
              smallCard.style.overflow = 'hidden';
              smallCard.style.height = 'auto';
              
              // Make the card header smaller
              var cardHeader = smallCard.querySelector('.card-header');
              if (cardHeader) {
                cardHeader.style.padding = '5mm 3mm';
                cardHeader.style.fontSize = '12px';
              }
              
              // Make the image smaller
              var cardImage = smallCard.querySelector('.user-photo');
              if (cardImage) {
                cardImage.style.height = '25mm';
                cardImage.style.width = '25mm';
                cardImage.style.objectFit = 'cover';
              }
              
              // Simplify card body content
              var cardBody = smallCard.querySelector('.card-body');
              if (cardBody) {
                cardBody.style.padding = '3mm';
                cardBody.style.fontSize = '10px';
              }
              
              // Handle the card footer
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
                
                // Remove action buttons for the PDF to save space
                var actionButtons = cardFooter.querySelector('.action-buttons');
                if (actionButtons) {
                  actionButtons.remove();
                }
                
                cardFooter.style.padding = '3mm';
                cardFooter.style.fontSize = '10px';
              }
              
              // Add the modified card to the wrapper
              cardWrapper.appendChild(smallCard);
              // Add the wrapper to the grid
              gridContainer.appendChild(cardWrapper);
            }
          } catch (cardError) {
            console.error('Error processing card:', cardError);
          }
        });
        
        // Use html2canvas to capture the temp container
        html2canvas(tempContainer, {
          scale: 2, // Higher quality
          backgroundColor: 'white',
          onclone: function(clonedDoc) {
            // Apply any additional styles needed for PDF rendering
          }
        }).then(function(canvas) {
          // Calculate the number of pages needed
          var imgData = canvas.toDataURL('image/png');
          var imgWidth = 190; // mm
          var pageHeight = 297; // mm (A4)
          var imgHeight = canvas.height * imgWidth / canvas.width;
          var heightLeft = imgHeight;
          var position = 30; // starting at 30mm from top
          
          // Add the first page image
          doc.addImage(imgData, 'PNG', 10, position, imgWidth, imgHeight);
          heightLeft -= (pageHeight - position);
          
          // Add new pages if needed
          var pageCount = 1;
          while (heightLeft >= 0) {
            position = 0;
            doc.addPage();
            pageCount++;
            doc.addImage(imgData, 'PNG', 10, position, imgWidth, imgHeight);
            heightLeft -= pageHeight;
          }
          
          // Save the PDF
          doc.save('liste-utilisateurs.pdf');
          
          // Remove the temporary container
          document.body.removeChild(tempContainer);
        }).catch(function(canvasError) {
          alert('Erreur lors de la création du PDF: ' + canvasError.message);
          // Clean up
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

    // line 357
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

        // line 358
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <script src=\"";
        // line 359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sbadmin2/vendor/datatables/jquery.dataTables.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 360
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
        return array (  589 => 360,  585 => 359,  580 => 358,  567 => 357,  321 => 120,  310 => 114,  302 => 110,  300 => 109,  292 => 106,  288 => 105,  284 => 104,  278 => 101,  272 => 98,  266 => 95,  258 => 90,  254 => 89,  250 => 88,  245 => 86,  238 => 84,  233 => 81,  229 => 80,  211 => 65,  206 => 62,  193 => 61,  131 => 9,  126 => 8,  113 => 7,  90 => 5,  67 => 3,  44 => 1,);
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
    @media (max-width: 576px) {
      .action-buttons {
        flex-direction: column;
      }
      .action-buttons .btn {
        width: 100%;
      }
    }
  </style>
{% endblock %}

{% block body %}
<div class=\"card shadow my-4\">
    <div class=\"card-header py-2 d-flex align-items-center\">
        <h6 class=\"m-0 font-weight-bold text-primary\">Utilisateurs</h6>
        <a href=\"{{ path(\"admin_user_add\") }}\" class=\"btn btn-success btn-icon-split ml-auto\">
            <span class=\"icon text-white-50\">
                <i class=\"fas fa-plus\"></i>
            </span>
            <span class=\"text\">Ajouter un utilisateur</span>
        </a>
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
                            <h6 class=\"m-0 font-weight-bold text-primary\">{{ user.firstName }} {{ user.lastName }}</h6>
                        </div>
                        <img class=\"user-photo\" src=\"{{ asset('uploads/photos/' ~ user.photo) }}\" alt=\"Profile photo\">
                        <div class=\"card-body\">
                            <p><strong>Email:</strong> {{ user.email }}</p>
                            <p><strong>Nom d'utilisateur:</strong> {{ user.username }}</p>
                            <p><strong>Type:</strong> {{ user.roleTitle }}</p>
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
                                    <a href=\"{{ path(\"admin_user_edit\", {\"id\": user.id}) }}\" class=\"btn btn-primary btn-sm mb-1\">
                                        <i class=\"fas fa-edit fa-sm\"></i> Modifier
                                    </a>
                                    <form action=\"{{ path('admin_user_toggle_verify', {'id': user.id}) }}\" method=\"post\" class=\"d-inline mb-1\">
                                        <button type=\"submit\" class=\"btn {{ user.isVerified ? 'btn-warning' : 'btn-secondary' }} btn-sm\">
                                            <i class=\"fas fa-{{ user.isVerified ? 'ban' : 'check' }} fa-sm\"></i> {{ user.isVerified ? 'Ban' : 'Unban' }}
                                        </button>
                                    </form>
                                    {% if user.roleTitle != 'Administrateur' %}
                                        <a href=\"{{ path(\"admin_user_delete\", {\"id\": user.id}) }}\" class=\"btn btn-danger btn-sm mb-1\">
                                            <i class=\"fas fa-trash fa-sm\"></i> Supprimer
                                        </a>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</div>

<!-- Direct script tag before the end of body to ensure global availability -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js\"></script>
<script>
// Define global functions
window.myFunction = function() {
  var input, filter, cards, cardContainer, title, i, email, username;
  input = document.getElementById(\"myInput\");
  filter = input.value.toUpperCase();
  cardContainer = document.getElementById(\"userCards\");
  cards = cardContainer.getElementsByClassName(\"col-xl-3\");
  
  for (i = 0; i < cards.length; i++) {
    // Search by name
    title = cards[i].querySelector(\".card-header h6\");
    // Search by email and username
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

// Set up PDF export function
document.addEventListener('DOMContentLoaded', function() {
  var pdfButton = document.getElementById('btPrintUsers');
  if (pdfButton) {
    pdfButton.addEventListener('click', function() {
      try {
        // Check if jsPDF is available
        if (!window.jspdf || !window.jspdf.jsPDF) {
          alert('Erreur: La bibliothèque jsPDF n\\'est pas chargée correctement.');
          return;
        }
        
        // Check if html2canvas is available
        if (!window.html2canvas) {
          alert('Erreur: La bibliothèque html2canvas n\\'est pas chargée correctement.');
          return;
        }
        
        // Set up the PDF document
        window.jsPDF = window.jspdf.jsPDF;
        var doc = new jsPDF('p', 'mm', 'a4');
        
        // Get the container with all user cards
        var cardsContainer = document.getElementById('userCards');
        if (!cardsContainer) {
          alert('Erreur: Conteneur de cartes utilisateur non trouvé.');
          return;
        }
        
        // Title
        doc.setFontSize(22);
        doc.setTextColor(40, 40, 40);
        doc.text('Liste des Utilisateurs', 20, 20);
        
        // Display only visible cards (in case search is active)
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
        
        // Create a temporary container for the visible cards
        var tempContainer = document.createElement('div');
        tempContainer.classList.add('temp-container');
        tempContainer.style.position = 'absolute';
        tempContainer.style.top = '-9999px';
        tempContainer.style.width = '210mm'; // A4 width
        tempContainer.style.backgroundColor = 'white';
        tempContainer.style.padding = '10mm';
        
        // Create grid layout for cards
        var gridContainer = document.createElement('div');
        gridContainer.style.display = 'grid';
        gridContainer.style.gridTemplateColumns = 'repeat(2, 1fr)'; // 2 cards per row
        gridContainer.style.gap = '10mm';
        tempContainer.appendChild(gridContainer);
        
        document.body.appendChild(tempContainer);
        
        // Add each visible card to the temp container with optimized layout for PDF
        visibleCards.forEach(function(card, index) {
          try {
            // Create a new wrapper for each card
            var cardWrapper = document.createElement('div');
            cardWrapper.style.pageBreakInside = 'avoid';
            
            // Get the user-card element from the cloned card
            var userCard = card.querySelector('.user-card');
            if (userCard) {
              // Create a smaller version of the card
              var smallCard = userCard.cloneNode(true);
              smallCard.style.border = '1px solid #ddd';
              smallCard.style.borderRadius = '5px';
              smallCard.style.boxShadow = '0 2px 5px rgba(0, 0, 0, 0.1)';
              smallCard.style.overflow = 'hidden';
              smallCard.style.height = 'auto';
              
              // Make the card header smaller
              var cardHeader = smallCard.querySelector('.card-header');
              if (cardHeader) {
                cardHeader.style.padding = '5mm 3mm';
                cardHeader.style.fontSize = '12px';
              }
              
              // Make the image smaller
              var cardImage = smallCard.querySelector('.user-photo');
              if (cardImage) {
                cardImage.style.height = '25mm';
                cardImage.style.width = '25mm';
                cardImage.style.objectFit = 'cover';
              }
              
              // Simplify card body content
              var cardBody = smallCard.querySelector('.card-body');
              if (cardBody) {
                cardBody.style.padding = '3mm';
                cardBody.style.fontSize = '10px';
              }
              
              // Handle the card footer
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
                
                // Remove action buttons for the PDF to save space
                var actionButtons = cardFooter.querySelector('.action-buttons');
                if (actionButtons) {
                  actionButtons.remove();
                }
                
                cardFooter.style.padding = '3mm';
                cardFooter.style.fontSize = '10px';
              }
              
              // Add the modified card to the wrapper
              cardWrapper.appendChild(smallCard);
              // Add the wrapper to the grid
              gridContainer.appendChild(cardWrapper);
            }
          } catch (cardError) {
            console.error('Error processing card:', cardError);
          }
        });
        
        // Use html2canvas to capture the temp container
        html2canvas(tempContainer, {
          scale: 2, // Higher quality
          backgroundColor: 'white',
          onclone: function(clonedDoc) {
            // Apply any additional styles needed for PDF rendering
          }
        }).then(function(canvas) {
          // Calculate the number of pages needed
          var imgData = canvas.toDataURL('image/png');
          var imgWidth = 190; // mm
          var pageHeight = 297; // mm (A4)
          var imgHeight = canvas.height * imgWidth / canvas.width;
          var heightLeft = imgHeight;
          var position = 30; // starting at 30mm from top
          
          // Add the first page image
          doc.addImage(imgData, 'PNG', 10, position, imgWidth, imgHeight);
          heightLeft -= (pageHeight - position);
          
          // Add new pages if needed
          var pageCount = 1;
          while (heightLeft >= 0) {
            position = 0;
            doc.addPage();
            pageCount++;
            doc.addImage(imgData, 'PNG', 10, position, imgWidth, imgHeight);
            heightLeft -= pageHeight;
          }
          
          // Save the PDF
          doc.save('liste-utilisateurs.pdf');
          
          // Remove the temporary container
          document.body.removeChild(tempContainer);
        }).catch(function(canvasError) {
          alert('Erreur lors de la création du PDF: ' + canvasError.message);
          // Clean up
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
