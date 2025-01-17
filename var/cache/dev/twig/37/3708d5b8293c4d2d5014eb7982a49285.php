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

/* pages_visiteurs/accueil.html.twig */
class __TwigTemplate_22ea9204a81f0c663a488add45ff65ef extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "headerFooter.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages_visiteurs/accueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages_visiteurs/accueil.html.twig"));

        $this->parent = $this->loadTemplate("headerFooter.html.twig", "pages_visiteurs/accueil.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    <script src=\"https://unpkg.com/@phosphor-icons/web@2.1.1\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/accueil.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/Form.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/headerFooter.css"), "html", null, true);
        yield "\">
    <script src=\"https://unpkg.com/@phosphor-icons/web\"></script>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Jersey+10&display=swap\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
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

        // line 17
        yield "    <div class=\"zoo-home-page\">

                <p class=\"text-block\">
                    Bienvenue sur le site du zoo Arcadia, un lieu où la nature et la modernité se rencontrent. 
                    Découvrez nos animaux du monde entier dans des habitats conçus pour leur bien-être, tout en sachant que notre parc fonctionne entièrement grâce à des énergies renouvelables. 
                    Le parc propose de nombreuses activités, comme une visite en petit train électrique ou en compagnie d’un guide. 
                    Nous offrons également un restaurant écoresponsable avec des options adaptées à tous les régimes alimentaires. <br/>
                    Vous avez un avis ou une suggestion ? Partagez-le avec nous via les formulaires en ligne. Nous sommes à l’écoute !
                </p>

            <!-- Carrousel des animaux -->
            <div id=\"animalCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\" aria-label=\"Carrousel des animaux\">
                <div class=\"carousel-inner\">
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["animals"]) || array_key_exists("animals", $context) ? $context["animals"] : (function () { throw new RuntimeError('Variable "animals" does not exist.', 30, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 31
            yield "                        <div class=\"carousel-item ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 31)) {
                yield "active";
            }
            yield "\">
                            ";
            // line 32
            if (CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "image", [], "any", false, false, false, 32)) {
                // line 33
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/animaux/" . CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "image", [], "any", false, false, false, 33))), "html", null, true);
                yield "\" alt=\"Image de ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "prenom", [], "any", false, false, false, 33), "html", null, true);
                yield "\" class=\"d-block w-100\">
                            ";
            }
            // line 35
            yield "                            <div class=\"carousel-caption\">
                            </div>
                        </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['animal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "                </div>
                <!-- Contrôles -->
                <a class=\"carousel-control-prev\" href=\"#animalCarousel\" role=\"button\" data-bs-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\"><i class=\"ph ph-caret-left\"></i></span>
                </a>
                <a class=\"carousel-control-next\" href=\"#animalCarousel\" role=\"button\" data-bs-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\"><i class=\"ph ph-caret-right\"></i></span>
                </a>
            </div>

            <p class=\"text-block\">
                Le parc abrite une incroyable diversité d’animaux venus des quatre coins du monde, chacun vivant dans un environnement soigneusement adapté à ses besoins naturels.
            </p>


            <!-- Carrousel des habitats -->
            <div id=\"habitatCarousel\" class=\"carousel slide mt-4\" data-bs-ride=\"carousel\" aria-label=\"Carrousel des habitats\">
                <div class=\"carousel-inner\">
                    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["habitats"]) || array_key_exists("habitats", $context) ? $context["habitats"] : (function () { throw new RuntimeError('Variable "habitats" does not exist.', 59, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["habitat"]) {
            // line 60
            yield "                        <div class=\"carousel-item ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 60)) {
                yield "active";
            }
            yield "\">
                            ";
            // line 61
            if (CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "image", [], "any", false, false, false, 61)) {
                // line 62
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/habitats/" . CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "image", [], "any", false, false, false, 62))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "nom", [], "any", false, false, false, 62), "html", null, true);
                yield "\" class=\"d-block w-100\">
                            ";
            }
            // line 64
            yield "                            <div class=\"carousel-caption\">
                            </div>
                        </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['habitat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "                </div>
                <!-- Contrôles -->
                <a class=\"carousel-control-prev\" href=\"#habitatCarousel\" role=\"button\" data-bs-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\"><i class=\"ph ph-caret-left\"></i></span>
                </a>
                <a class=\"carousel-control-next\" href=\"#habitatCarousel\" role=\"button\" data-bs-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\"><i class=\"ph ph-caret-right\"></i></span>
                </a>
            </div>

            
            <p class=\"text-block\">
                Plongez dans les différents habitats où vivent nos animaux et découvrez leurs histoires fascinantes, leurs comportements uniques et leurs secrets surprenants. 
                Le parc s'engage pour la planète : son fonctionnement est alimenté par l'énergie propre des barrages hydroélectriques.
            </p>



            <!-- Carrousel des services -->
            <div id=\"serviceCarousel\" class=\"carousel slide mt-4\" data-bs-ride=\"carousel\" aria-label=\"Carrousel des services\">
                <div class=\"carousel-inner\">
                    ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 91, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 92
            yield "                        <div class=\"carousel-item ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 92)) {
                yield "active";
            }
            yield "\">
                            ";
            // line 93
            if (CoreExtension::getAttribute($this->env, $this->source, $context["service"], "image", [], "any", false, false, false, 93)) {
                // line 94
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/services/" . CoreExtension::getAttribute($this->env, $this->source, $context["service"], "image", [], "any", false, false, false, 94))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "nom", [], "any", false, false, false, 94), "html", null, true);
                yield "\" class=\"d-block w-100\">
                            ";
            }
            // line 96
            yield "                            <div class=\"carousel-caption\">
                        </div>
                        </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        yield "                </div>
                <!-- Contrôles -->
                <a class=\"carousel-control-prev\" href=\"#serviceCarousel\" role=\"button\" data-bs-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\"><i class=\"ph ph-caret-left\"></i></span>
                </a>
                <a class=\"carousel-control-next\" href=\"#serviceCarousel\" role=\"button\" data-bs-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\"><i class=\"ph ph-caret-right\"></i></span>
                </a>
            </div>
            <div class=\"text-block\">
                <p>
                    Une petite faim ? Besoin de conseils ou envie de découvrir le parc de façon originale ? 
                    Profitez de nos services adaptés à tous vos besoins. 
                    Notre restaurant propose des plats pour tous les goûts et régimes alimentaires, 
                    préparés avec des produits locaux et respectueux de l'environnement.
                </p>
            </div>


            <!-- Liste des avis -->
            <div class=\"avis-section\">
            <h3 class=\"mt-5\">Avis des visiteurs</h3>
            <div id=\"avisCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["avis"]);
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
            // line 127
            yield "                        <div class=\"carousel-item ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 127)) {
                yield "active";
            }
            yield "\">
                            <div class=\"avisCarrousel\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                    ";
            // line 131
            if (CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "is_visible", [], "any", false, false, false, 131)) {
                // line 132
                yield "                                        <h5 class=\"card-title\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "pseudo", [], "any", false, false, false, 132), "html", null, true);
                yield "</h5>
                                        <p class=\"card-text\">";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "commentaire", [], "any", false, false, false, 133), "html", null, true);
                yield "</p>
                                    ";
            }
            // line 135
            yield "                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['avis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        yield "                </div>
                <a class=\"carousel-control-prev\" href=\"#avisCarousel\" role=\"button\" data-bs-slide=\"prev\">
                    <i class=\"ph ph-caret-left\"></i>
                </a>
                <a class=\"carousel-control-next\" href=\"#avisCarousel\" role=\"button\" data-bs-slide=\"next\">
                    <i class=\"ph ph-caret-right\"></i>
                </a>
            </div>
        </div>

            
        <!-- Formulaire d'avis -->
        ";
        // line 152
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), 'form_start');
        yield "
        <div class=\"container d-flex justify-content-center align-items-center vh-100\">
            <div class=\"w-50\" style=\"max-width: 500px;\">
                <form method=\"POST\" action=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        yield "\">
                    <div class=\"form-floating mb-3\">
                        ";
        // line 157
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "pseudo", [], "any", false, false, false, 157), 'row');
        yield "
                    </div>
                    <div class=\"form-floating mb-3\">
                        ";
        // line 160
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "commentaire", [], "any", false, false, false, 160), 'row');
        yield "
                    </div>
                    ";
        // line 162
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), 'rest');
        yield "
                    <button type=\"submit\" class=\"btn btn-primary w-100\">Envoyer</button>
                </form>
        </div>
        ";
        // line 166
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), 'form_end');
        yield "

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
        return "pages_visiteurs/accueil.html.twig";
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
        return array (  463 => 166,  456 => 162,  451 => 160,  445 => 157,  440 => 155,  434 => 152,  420 => 140,  402 => 135,  397 => 133,  392 => 132,  390 => 131,  380 => 127,  363 => 126,  335 => 100,  318 => 96,  310 => 94,  308 => 93,  301 => 92,  284 => 91,  259 => 68,  242 => 64,  234 => 62,  232 => 61,  225 => 60,  208 => 59,  186 => 39,  169 => 35,  161 => 33,  159 => 32,  152 => 31,  135 => 30,  120 => 17,  107 => 16,  90 => 9,  86 => 8,  82 => 7,  77 => 4,  64 => 3,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends 'headerFooter.html.twig' %}
{% block stylesheets %}
    <script src=\"https://unpkg.com/@phosphor-icons/web@2.1.1\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"{{ asset('styles/accueil.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('styles/Form.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('styles/headerFooter.css') }}\">
    <script src=\"https://unpkg.com/@phosphor-icons/web\"></script>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Jersey+10&display=swap\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
    <div class=\"zoo-home-page\">

                <p class=\"text-block\">
                    Bienvenue sur le site du zoo Arcadia, un lieu où la nature et la modernité se rencontrent. 
                    Découvrez nos animaux du monde entier dans des habitats conçus pour leur bien-être, tout en sachant que notre parc fonctionne entièrement grâce à des énergies renouvelables. 
                    Le parc propose de nombreuses activités, comme une visite en petit train électrique ou en compagnie d’un guide. 
                    Nous offrons également un restaurant écoresponsable avec des options adaptées à tous les régimes alimentaires. <br/>
                    Vous avez un avis ou une suggestion ? Partagez-le avec nous via les formulaires en ligne. Nous sommes à l’écoute !
                </p>

            <!-- Carrousel des animaux -->
            <div id=\"animalCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\" aria-label=\"Carrousel des animaux\">
                <div class=\"carousel-inner\">
                    {% for animal in animals %}
                        <div class=\"carousel-item {% if loop.first %}active{% endif %}\">
                            {% if animal.image %}
                                <img src=\"{{ asset('uploads/animaux/' ~ animal.image) }}\" alt=\"Image de {{ animal.prenom }}\" class=\"d-block w-100\">
                            {% endif %}
                            <div class=\"carousel-caption\">
                            </div>
                        </div>
                    {% endfor %}
                </div>
                <!-- Contrôles -->
                <a class=\"carousel-control-prev\" href=\"#animalCarousel\" role=\"button\" data-bs-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\"><i class=\"ph ph-caret-left\"></i></span>
                </a>
                <a class=\"carousel-control-next\" href=\"#animalCarousel\" role=\"button\" data-bs-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\"><i class=\"ph ph-caret-right\"></i></span>
                </a>
            </div>

            <p class=\"text-block\">
                Le parc abrite une incroyable diversité d’animaux venus des quatre coins du monde, chacun vivant dans un environnement soigneusement adapté à ses besoins naturels.
            </p>


            <!-- Carrousel des habitats -->
            <div id=\"habitatCarousel\" class=\"carousel slide mt-4\" data-bs-ride=\"carousel\" aria-label=\"Carrousel des habitats\">
                <div class=\"carousel-inner\">
                    {% for habitat in habitats %}
                        <div class=\"carousel-item {% if loop.first %}active{% endif %}\">
                            {% if habitat.image %}
                                <img src=\"{{ asset('uploads/habitats/' ~ habitat.image) }}\" alt=\"{{ habitat.nom }}\" class=\"d-block w-100\">
                            {% endif %}
                            <div class=\"carousel-caption\">
                            </div>
                        </div>
                    {% endfor %}
                </div>
                <!-- Contrôles -->
                <a class=\"carousel-control-prev\" href=\"#habitatCarousel\" role=\"button\" data-bs-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\"><i class=\"ph ph-caret-left\"></i></span>
                </a>
                <a class=\"carousel-control-next\" href=\"#habitatCarousel\" role=\"button\" data-bs-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\"><i class=\"ph ph-caret-right\"></i></span>
                </a>
            </div>

            
            <p class=\"text-block\">
                Plongez dans les différents habitats où vivent nos animaux et découvrez leurs histoires fascinantes, leurs comportements uniques et leurs secrets surprenants. 
                Le parc s'engage pour la planète : son fonctionnement est alimenté par l'énergie propre des barrages hydroélectriques.
            </p>



            <!-- Carrousel des services -->
            <div id=\"serviceCarousel\" class=\"carousel slide mt-4\" data-bs-ride=\"carousel\" aria-label=\"Carrousel des services\">
                <div class=\"carousel-inner\">
                    {% for service in services %}
                        <div class=\"carousel-item {% if loop.first %}active{% endif %}\">
                            {% if service.image %}
                                <img src=\"{{ asset('uploads/services/' ~ service.image) }}\" alt=\"{{ service.nom }}\" class=\"d-block w-100\">
                            {% endif %}
                            <div class=\"carousel-caption\">
                        </div>
                        </div>
                    {% endfor %}
                </div>
                <!-- Contrôles -->
                <a class=\"carousel-control-prev\" href=\"#serviceCarousel\" role=\"button\" data-bs-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\"><i class=\"ph ph-caret-left\"></i></span>
                </a>
                <a class=\"carousel-control-next\" href=\"#serviceCarousel\" role=\"button\" data-bs-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\"><i class=\"ph ph-caret-right\"></i></span>
                </a>
            </div>
            <div class=\"text-block\">
                <p>
                    Une petite faim ? Besoin de conseils ou envie de découvrir le parc de façon originale ? 
                    Profitez de nos services adaptés à tous vos besoins. 
                    Notre restaurant propose des plats pour tous les goûts et régimes alimentaires, 
                    préparés avec des produits locaux et respectueux de l'environnement.
                </p>
            </div>


            <!-- Liste des avis -->
            <div class=\"avis-section\">
            <h3 class=\"mt-5\">Avis des visiteurs</h3>
            <div id=\"avisCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    {% for avis in avis %}
                        <div class=\"carousel-item {% if loop.first %}active{% endif %}\">
                            <div class=\"avisCarrousel\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                    {% if avis.is_visible %}
                                        <h5 class=\"card-title\">{{ avis.pseudo }}</h5>
                                        <p class=\"card-text\">{{ avis.commentaire }}</p>
                                    {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
                <a class=\"carousel-control-prev\" href=\"#avisCarousel\" role=\"button\" data-bs-slide=\"prev\">
                    <i class=\"ph ph-caret-left\"></i>
                </a>
                <a class=\"carousel-control-next\" href=\"#avisCarousel\" role=\"button\" data-bs-slide=\"next\">
                    <i class=\"ph ph-caret-right\"></i>
                </a>
            </div>
        </div>

            
        <!-- Formulaire d'avis -->
        {{ form_start(form) }}
        <div class=\"container d-flex justify-content-center align-items-center vh-100\">
            <div class=\"w-50\" style=\"max-width: 500px;\">
                <form method=\"POST\" action=\"{{ path('app_accueil') }}\">
                    <div class=\"form-floating mb-3\">
                        {{ form_row(form.pseudo) }}
                    </div>
                    <div class=\"form-floating mb-3\">
                        {{ form_row(form.commentaire) }}
                    </div>
                    {{ form_rest(form) }}
                    <button type=\"submit\" class=\"btn btn-primary w-100\">Envoyer</button>
                </form>
        </div>
        {{ form_end(form) }}

{% endblock %}
", "pages_visiteurs/accueil.html.twig", "C:\\Users\\Administrateur\\Arcadia\\templates\\pages_visiteurs\\accueil.html.twig");
    }
}
