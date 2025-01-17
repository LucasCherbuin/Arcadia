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

/* pages_visiteurs/animal.html.twig */
class __TwigTemplate_113e3719367fd7b7c2386faf2a34f28a extends Template
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
        // line 1
        return "headerFooter.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages_visiteurs/animal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages_visiteurs/animal.html.twig"));

        $this->parent = $this->loadTemplate("headerFooter.html.twig", "pages_visiteurs/animal.html.twig", 1);
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
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/headerFooter.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/accordion.css"), "html", null, true);
        yield "\">
    <script src=\"https://unpkg.com/@phosphor-icons/web\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <script crossorigin src=\"https://unpkg.com/react@18/umd/react.development.js\"></script>
    <script crossorigin src=\"https://unpkg.com/react-dom@18/umd/react-dom.development.js\"></script>
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
        yield "  
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["animals"]) || array_key_exists("animals", $context) ? $context["animals"] : (function () { throw new RuntimeError('Variable "animals" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 19
            yield "    <div class=\"accordion-item closed\" id=\"animal-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 19), "html", null, true);
            yield "\" 
         data-bg=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/animaux/" . CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "image", [], "any", false, false, false, 20))), "html", null, true);
            yield "\">
        <div class=\"accordion-header\" onclick=\"toggleAnimalAccordion(";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 21), "html", null, true);
            yield ")\">
            <span>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "prenom", [], "any", false, false, false, 22), "html", null, true);
            yield "</span>
        </div>
        <div class=\"accordion-body\">
            <div class=\"description \">
            <p><strong>Prénom :</strong> <br>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "prenom", [], "any", false, false, false, 26), "html", null, true);
            yield "</p>
            <p><strong>Race :</strong> <br>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "race", [], "any", false, false, false, 27), "html", null, true);
            yield "</p>
            <p><strong>Habitat :</strong> <br>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "habitat", [], "any", false, false, false, 28), "html", null, true);
            yield "</p>
            <p><strong>Vétérinaire :</strong></p>
            
                ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "veterinaires", [], "any", false, false, false, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["veterinaire"]) {
                // line 32
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["veterinaire"], "email", [], "any", false, false, false, 32), "@"), 0, [], "array", false, false, false, 32), ["_" => " ", "." => " "])), "html", null, true);
                yield "<br>
                    <br><strong>Détail :</strong> <br>";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["veterinaire"], "details", [], "any", false, false, false, 33), "html", null, true);
                yield " 
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['veterinaire'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['animal'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "
        </div>
    </div>

    <script>
    function toggleAnimalAccordion(id) {
        const item = document.getElementById(`animal-\${id}`);
        const body = item.querySelector('.accordion-body');
        const isOpen = item.classList.contains('open');
        const bgUrl = item.getAttribute('data-bg');

        // Fermer tous les autres items
        document.querySelectorAll('.accordion-item').forEach(el => {
            el.classList.remove('open');
            el.classList.add('closed');
            el.querySelector('.accordion-body').style.display = 'none';
        });

        if (!isOpen) {
            item.classList.remove('closed');
            item.classList.add('open');
            item.style.backgroundImage = `url(\${bgUrl})`; // Appliquer le background
            body.style.display = 'block';

            // Envoi de la requête POST pour incrémenter les clics
            fetch(`/animal/click/\${id}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
            })
                .then((response) => response.json())
                .then((data) => {
                    console.log('Réponse:', data);
                    if (data.clicks !== undefined) {
                        document.getElementById(`click-count-\${id}`).textContent = data.clicks;
                    }
                })
                .catch((error) => console.error('Erreur:', error));

        }
    }
    </script>
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
        return "pages_visiteurs/animal.html.twig";
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
        return array (  182 => 38,  174 => 35,  166 => 33,  161 => 32,  157 => 31,  151 => 28,  147 => 27,  143 => 26,  136 => 22,  132 => 21,  128 => 20,  123 => 19,  119 => 18,  116 => 17,  103 => 16,  82 => 5,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'headerFooter.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('styles/headerFooter.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('styles/accordion.css') }}\">
    <script src=\"https://unpkg.com/@phosphor-icons/web\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <script crossorigin src=\"https://unpkg.com/react@18/umd/react.development.js\"></script>
    <script crossorigin src=\"https://unpkg.com/react-dom@18/umd/react-dom.development.js\"></script>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Jersey+10&display=swap\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
  
            {% for animal in animals %}
    <div class=\"accordion-item closed\" id=\"animal-{{ animal.id }}\" 
         data-bg=\"{{ asset('uploads/animaux/' ~ animal.image) }}\">
        <div class=\"accordion-header\" onclick=\"toggleAnimalAccordion({{ animal.id }})\">
            <span>{{ animal.prenom }}</span>
        </div>
        <div class=\"accordion-body\">
            <div class=\"description \">
            <p><strong>Prénom :</strong> <br>{{ animal.prenom }}</p>
            <p><strong>Race :</strong> <br>{{ animal.race }}</p>
            <p><strong>Habitat :</strong> <br>{{ animal.habitat }}</p>
            <p><strong>Vétérinaire :</strong></p>
            
                {% for veterinaire in animal.veterinaires %}
                    {{ veterinaire.email|split('@')[0]|replace({'_': ' ', '.': ' '})|capitalize }}<br>
                    <br><strong>Détail :</strong> <br>{{ veterinaire.details }} 
                {% endfor %}
        </div>
    </div>
{% endfor %}

        </div>
    </div>

    <script>
    function toggleAnimalAccordion(id) {
        const item = document.getElementById(`animal-\${id}`);
        const body = item.querySelector('.accordion-body');
        const isOpen = item.classList.contains('open');
        const bgUrl = item.getAttribute('data-bg');

        // Fermer tous les autres items
        document.querySelectorAll('.accordion-item').forEach(el => {
            el.classList.remove('open');
            el.classList.add('closed');
            el.querySelector('.accordion-body').style.display = 'none';
        });

        if (!isOpen) {
            item.classList.remove('closed');
            item.classList.add('open');
            item.style.backgroundImage = `url(\${bgUrl})`; // Appliquer le background
            body.style.display = 'block';

            // Envoi de la requête POST pour incrémenter les clics
            fetch(`/animal/click/\${id}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
            })
                .then((response) => response.json())
                .then((data) => {
                    console.log('Réponse:', data);
                    if (data.clicks !== undefined) {
                        document.getElementById(`click-count-\${id}`).textContent = data.clicks;
                    }
                })
                .catch((error) => console.error('Erreur:', error));

        }
    }
    </script>
{% endblock %}
", "pages_visiteurs/animal.html.twig", "C:\\Users\\Administrateur\\Arcadia\\templates\\pages_visiteurs\\animal.html.twig");
    }
}
