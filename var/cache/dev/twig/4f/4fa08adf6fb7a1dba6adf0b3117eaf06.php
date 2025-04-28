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

/* Front/partials/footer.html.twig */
class __TwigTemplate_e4c51cd4016eee37c223018f27602adf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/partials/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/partials/footer.html.twig"));

        // line 1
        yield " <footer class=\"footer-wrapper footer-layout7\" data-bg-src=\"assets/img/bg/footer_bg_1.jpg\">
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
        // line 49
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Front/partials/footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  98 => 49,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source(" <footer class=\"footer-wrapper footer-layout7\" data-bg-src=\"assets/img/bg/footer_bg_1.jpg\">
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
", "Front/partials/footer.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\Front\\partials\\footer.html.twig");
    }
}
