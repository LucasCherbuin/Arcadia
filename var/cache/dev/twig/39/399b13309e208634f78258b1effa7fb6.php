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

/* headerFooter.html.twig */
class __TwigTemplate_96a43fc0d34ea7a67498495aaa0b1cf6 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "headerFooter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "headerFooter.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    
    ";
        // line 8
        yield "    ";
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 19
        yield "</head>
<body>
    <header>
        <div class=\"wrapper d-flex\"> 
            <!-- Sidebar -->
            <nav id=\"sidenav\">
                <div class=\"sidebar-header p-3 d-flex justify-content-between align-items-center\">
                    <button id=\"close-button\" class=\"btn btn-outline-light\" onclick=\"toggleNav()\" style=\"display: none;\">
                        <i class=\"ph ph-list\"></i>
                    </button>
                </div>
                <ul class=\"list-unstyled components mt-3\">
                    <li><a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        yield "\" class=\"text-light\">Accueil</a></li>
                    <li><a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_visiteur");
        yield "\" class=\"text-light\">Service</a></li>
                    <li><a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitat_visiteur");
        yield "\" class=\"text-light\">Habitats</a></li>
                    <li>
                        ";
        // line 35
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35)) {
            // line 36
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" style=\"color: red;\" class=\"text-light\">Déconnexion</a>
                        ";
        } else {
            // line 38
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" style=\"color: blue;\" class=\"text-light\">Connexion</a>
                        ";
        }
        // line 40
        yield "                    </li>
                    <li><a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"text-light\">Contact</a></li>
                </ul>
            </nav>
            <!-- Page Content -->
            <div id=\"content\" class=\"w-100\">
                <!-- Navbar -->
                <nav class=\"header-container d-flex align-items-center\">
                    <div class=\"container-fluid d-flex justify-content-between align-items-center\">
                        <button id=\"open-button\" class=\"btn me-3\" onclick=\"toggleNav()\">
                            <i class=\"ph ph-list\"></i>
                        </button>
                        <h1 class=\"zoo-title\">Arcadia</h1>
                    </div>
                </nav>
            </div>
        </div>
    </header>


    ";
        // line 61
        yield "    <main>
        ";
        // line 62
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 63
        yield "    </main>

    ";
        // line 66
        yield "    <footer>
        <div class=\"container\">
            <div class=\"footer-section\">
                <ul class=\"social-links vertical\">
                    <li><a href=\"#!\" class=\"text-body\"><i class=\"ph ph-facebook-logo\"></i></a></li>
                    <li><a href=\"#!\" class=\"text-body\"><i class=\"ph ph-youtube-logo\"></i></a></li>
                    <li><a href=\"#!\" class=\"text-body\"><i class=\"ph ph-instagram-logo\"></i></a></li>
                    <li><a href=\"#!\" class=\"text-body\"><i class=\"ph ph-twitter-logo\"></i></a></li>
                </ul>
            </div>
            <div class=\"footer-section\">
                <h5 class=\"text-uppercase\">Horaires</h5>
                <ul>
                    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['App\Twig\HeaderFooterExtension']->getHoraires());
        foreach ($context['_seq'] as $context["_key"] => $context["horaire"]) {
            // line 80
            yield "                        <li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["horaire"], "jour", [], "any", false, false, false, 80), "html", null, true);
            yield " : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["horaire"], "ouverture", [], "any", false, false, false, 80), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["horaire"], "fermeture", [], "any", false, false, false, 80), "html", null, true);
            yield "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['horaire'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "                </ul>
            </div>
            <div class=\"footer-section\">
                <ul class=\"footer-links\">
                    <li><a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        yield "\">Accueil</a></li>
                    <li><a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_visiteur");
        yield "\">Service</a></li>
                    <li><a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitat_visiteur");
        yield "\">Habitats</a></li>
                    <li><a href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">Contact</a></li>
                </ul>
            </div>
        </div>
    </footer>

    ";
        // line 96
        yield "    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\"></script>
    <script>
        function toggleNav() {
            const sidenav = document.getElementById(\"sidenav\");
            const openButton = document.getElementById(\"open-button\");
            const closeButton = document.getElementById(\"close-button\");

            if (sidenav.classList.contains(\"open\")) {
                sidenav.classList.remove(\"open\");
                closeButton.style.display = \"none\";
                openButton.style.display = \"block\";
            } else {
                sidenav.classList.add(\"open\");
                closeButton.style.display = \"block\";
                openButton.style.display = \"none\";
            }
        }
    </script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Jersey+10&display=swap\" rel=\"stylesheet\">
        <script src=\"https://unpkg.com/@phosphor-icons/web@2.1.1\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/headerFooter.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 62
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "headerFooter.html.twig";
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
        return array (  263 => 62,  249 => 16,  240 => 9,  227 => 8,  195 => 96,  186 => 89,  182 => 88,  178 => 87,  174 => 86,  168 => 82,  155 => 80,  151 => 79,  136 => 66,  132 => 63,  130 => 62,  127 => 61,  105 => 41,  102 => 40,  96 => 38,  90 => 36,  88 => 35,  83 => 33,  79 => 32,  75 => 31,  61 => 19,  58 => 8,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    
    {# Fichiers CSS nécessaires #}
    {% block stylesheets %}
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Jersey+10&display=swap\" rel=\"stylesheet\">
        <script src=\"https://unpkg.com/@phosphor-icons/web@2.1.1\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"{{ asset('styles/headerFooter.css') }}\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    {% endblock %}
</head>
<body>
    <header>
        <div class=\"wrapper d-flex\"> 
            <!-- Sidebar -->
            <nav id=\"sidenav\">
                <div class=\"sidebar-header p-3 d-flex justify-content-between align-items-center\">
                    <button id=\"close-button\" class=\"btn btn-outline-light\" onclick=\"toggleNav()\" style=\"display: none;\">
                        <i class=\"ph ph-list\"></i>
                    </button>
                </div>
                <ul class=\"list-unstyled components mt-3\">
                    <li><a href=\"{{ path('app_accueil') }}\" class=\"text-light\">Accueil</a></li>
                    <li><a href=\"{{ path('app_service_visiteur') }}\" class=\"text-light\">Service</a></li>
                    <li><a href=\"{{ path('app_habitat_visiteur') }}\" class=\"text-light\">Habitats</a></li>
                    <li>
                        {% if app.user %}
                            <a href=\"{{ path('app_logout') }}\" style=\"color: red;\" class=\"text-light\">Déconnexion</a>
                        {% else %}
                            <a href=\"{{ path('app_login') }}\" style=\"color: blue;\" class=\"text-light\">Connexion</a>
                        {% endif %}
                    </li>
                    <li><a href=\"{{ path('app_contact') }}\" class=\"text-light\">Contact</a></li>
                </ul>
            </nav>
            <!-- Page Content -->
            <div id=\"content\" class=\"w-100\">
                <!-- Navbar -->
                <nav class=\"header-container d-flex align-items-center\">
                    <div class=\"container-fluid d-flex justify-content-between align-items-center\">
                        <button id=\"open-button\" class=\"btn me-3\" onclick=\"toggleNav()\">
                            <i class=\"ph ph-list\"></i>
                        </button>
                        <h1 class=\"zoo-title\">Arcadia</h1>
                    </div>
                </nav>
            </div>
        </div>
    </header>


    {# Contenu principal #}
    <main>
        {% block body %}{% endblock %}
    </main>

    {# Footer #}
    <footer>
        <div class=\"container\">
            <div class=\"footer-section\">
                <ul class=\"social-links vertical\">
                    <li><a href=\"#!\" class=\"text-body\"><i class=\"ph ph-facebook-logo\"></i></a></li>
                    <li><a href=\"#!\" class=\"text-body\"><i class=\"ph ph-youtube-logo\"></i></a></li>
                    <li><a href=\"#!\" class=\"text-body\"><i class=\"ph ph-instagram-logo\"></i></a></li>
                    <li><a href=\"#!\" class=\"text-body\"><i class=\"ph ph-twitter-logo\"></i></a></li>
                </ul>
            </div>
            <div class=\"footer-section\">
                <h5 class=\"text-uppercase\">Horaires</h5>
                <ul>
                    {% for horaire in get_horaires() %}
                        <li>{{ horaire.jour }} : {{ horaire.ouverture }} - {{ horaire.fermeture }}</li>
                    {% endfor %}
                </ul>
            </div>
            <div class=\"footer-section\">
                <ul class=\"footer-links\">
                    <li><a href=\"{{ path('app_accueil') }}\">Accueil</a></li>
                    <li><a href=\"{{ path('app_service_visiteur') }}\">Service</a></li>
                    <li><a href=\"{{ path('app_habitat_visiteur') }}\">Habitats</a></li>
                    <li><a href=\"{{ path('app_contact') }}\">Contact</a></li>
                </ul>
            </div>
        </div>
    </footer>

    {# Scripts JS nécessaires #}
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\"></script>
    <script>
        function toggleNav() {
            const sidenav = document.getElementById(\"sidenav\");
            const openButton = document.getElementById(\"open-button\");
            const closeButton = document.getElementById(\"close-button\");

            if (sidenav.classList.contains(\"open\")) {
                sidenav.classList.remove(\"open\");
                closeButton.style.display = \"none\";
                openButton.style.display = \"block\";
            } else {
                sidenav.classList.add(\"open\");
                closeButton.style.display = \"block\";
                openButton.style.display = \"none\";
            }
        }
    </script>
</body>
</html>
", "headerFooter.html.twig", "C:\\Users\\Administrateur\\Arcadia\\templates\\headerFooter.html.twig");
    }
}
