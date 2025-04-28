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

/* Front/partials/header.html.twig */
class __TwigTemplate_adb542a73b4a6e85ee5f5ec66d2ea7cc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/partials/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/partials/header.html.twig"));

        // line 1
        yield "
<div class=\"th-menu-wrapper\">
        <div class=\"th-menu-area text-center\">
            <button class=\"th-menu-toggle \"><i class=\"fal fa-times\"></i></button>
            <div class=\"mobile-logo\">
                <a href=\"index.html\"><img src=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo.svg"), "html", null, true);
        yield "\" alt=\"Taxiar\"></a>
            </div>
            <div class=\"th-mobile-menu\">
                <ul>
                    <li class=\"menu-item-has-children\">
                        <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index");
        yield "\">Packs</a>
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
        // line 73
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
        // line 82
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
        // line 91
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
        // line 100
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
        // line 109
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
        // line 149
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
        // line 163
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
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo44.png"), "html", null, true);
        yield "\" alt=\"GoldenTouch\" style=\"height: 130px;\">
                    </div>
                </div>
                <div class=\"col-auto me-xl-auto\">
                    <nav class=\"main-menu d-none d-lg-block\">
                        <ul>
                            <li>
                                <a href=\"";
        // line 254
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack_index");
        yield "\">Pack</a>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\">Event Planner</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"#\">Ajout Event</a></li>
                                    <li><a href=\"#\">Liste Event</a></li>
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
                                    <li><a href=\"#\">Commandes</a></li>
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
                        <a href=\"#\" class=\"icon-btn sideMenuToggler2\"><i class=\"fa-regular fa-bag-shopping\"></i>
                            <span class=\"badge\">5</span></a>
                        <a href=\"#\" class=\"icon-btn sideMenuToggler\"><i class=\"far fa-bars\"></i></a>
                        <a href=\"booking.html\" class=\"th-btn\">BOOK A TAXI<i class=\"fa-regular fa-arrow-right ms-2\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"logo-shape\"><img src=\"";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo-shape.svg"), "html", null, true);
        yield "\" alt=\"\"></div>
    </header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Front/partials/header.html.twig";
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
        return array (  390 => 308,  333 => 254,  323 => 247,  236 => 163,  219 => 149,  176 => 109,  164 => 100,  152 => 91,  140 => 82,  128 => 73,  63 => 11,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
<div class=\"th-menu-wrapper\">
        <div class=\"th-menu-area text-center\">
            <button class=\"th-menu-toggle \"><i class=\"fal fa-times\"></i></button>
            <div class=\"mobile-logo\">
                <a href=\"index.html\"><img src=\"{{ asset('Front/img/logo.svg') }}\" alt=\"Taxiar\"></a>
            </div>
            <div class=\"th-mobile-menu\">
                <ul>
                    <li class=\"menu-item-has-children\">
                        <a href=\"{{ path('app_pack_index') }}\">Packs</a>
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
                                <a href=\"{{ path('app_pack_index') }}\">Pack</a>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"#\">Event Planner</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"#\">Ajout Event</a></li>
                                    <li><a href=\"#\">Liste Event</a></li>
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
                                    <li><a href=\"#\">Commandes</a></li>
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
                        <a href=\"#\" class=\"icon-btn sideMenuToggler2\"><i class=\"fa-regular fa-bag-shopping\"></i>
                            <span class=\"badge\">5</span></a>
                        <a href=\"#\" class=\"icon-btn sideMenuToggler\"><i class=\"far fa-bars\"></i></a>
                        <a href=\"booking.html\" class=\"th-btn\">BOOK A TAXI<i class=\"fa-regular fa-arrow-right ms-2\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"logo-shape\"><img src=\"{{ asset('Front/img/logo-shape.svg') }}\" alt=\"\"></div>
    </header>", "Front/partials/header.html.twig", "C:\\Users\\Rayen\\Desktop\\Nouveau dossier (13)\\GoldenTouch-Symfony\\templates\\Front\\partials\\header.html.twig");
    }
}
