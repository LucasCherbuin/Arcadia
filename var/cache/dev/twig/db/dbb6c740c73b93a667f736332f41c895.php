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

/* admin/avis/_form.html.twig */
class __TwigTemplate_644feb1400f1b5650e94cd758f851e71 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/avis/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/avis/_form.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

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

        // line 2
        yield "
<form id=\"animalTypeForm\" method=\"POST\">
    <div class=\"form-floating\">
        ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "prenom", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "prenom de l'animal", "id" => "floatingNom"]]);
        // line 11
        yield "
        ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "prenom", [], "any", false, false, false, 12), 'label', ["label_attr" => ["for" => "floatingNom"], "label" => "prenom de l'animal"]);
        yield "
        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "prenom", [], "any", false, false, false, 13), 'errors');
        yield "
    </div>


    <div class=\"form-floating\">
        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "race", [], "any", false, false, false, 18), "label", [], "any", false, false, false, 18), 'label', ["label_attr" => ["class" => "form-label"], "label" => "race"]);
        yield "
        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "race", [], "any", false, false, false, 19), "label", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control", "id" => "exampleFormControlFile1"]]);
        // line 24
        yield "
        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "race", [], "any", false, false, false, 25), "label", [], "any", false, false, false, 25), 'errors');
        yield "
    </div>


    <div class=\"form-floating\">
        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "habitat", [], "any", false, false, false, 30), "nom", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "form-label"], "label" => "habitat"]);
        yield "
        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "habitat", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control", "id" => "exampleFormControlFile1"]]);
        // line 36
        yield "
        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "habitat", [], "any", false, false, false, 37), 'errors');
        yield "
    </div>
</form>


<script>
    document.getElementById('animalTypeForm').addEventListener('submit', function(event) {
        event.preventDefault();  // Empêcher la soumission classique du formulaire

        const formData = new FormData(this);
        const data = {
            prenom: formData.get('animalType[prenom]') // Utilisez ici le nom du champ du formulaire
        };

        fetch('";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_animal_new");
        yield "', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(data => {
            if (data.message === 'Animal type added') {
                alert('Animal type ajouté avec succès');
            } else {
                alert('Erreur: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Une erreur s\\'est produite');
        });
    });
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
        return "admin/avis/_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  137 => 51,  120 => 37,  117 => 36,  115 => 31,  111 => 30,  103 => 25,  100 => 24,  98 => 19,  94 => 18,  86 => 13,  82 => 12,  79 => 11,  77 => 5,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}

<form id=\"animalTypeForm\" method=\"POST\">
    <div class=\"form-floating\">
        {{ form_widget(form.prenom, {
            'attr': {
                'class': 'form-control',
                'placeholder': 'prenom de l\\'animal',
                'id': 'floatingNom'
            }
        }) }}
        {{ form_label(form.prenom, 'prenom de l\\'animal', {'label_attr': {'for': 'floatingNom'}}) }}
        {{ form_errors(form.prenom) }}
    </div>


    <div class=\"form-floating\">
        {{ form_label(form.race.label, 'race', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.race.label, {
            'attr': {
                'class': 'form-control',
                'id': 'exampleFormControlFile1'
            }
        }) }}
        {{ form_errors(form.race.label) }}
    </div>


    <div class=\"form-floating\">
        {{ form_label(form.habitat.nom, 'habitat', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.habitat, {
            'attr': {
                'class': 'form-control',
                'id': 'exampleFormControlFile1'
            }
        }) }}
        {{ form_errors(form.habitat) }}
    </div>
</form>


<script>
    document.getElementById('animalTypeForm').addEventListener('submit', function(event) {
        event.preventDefault();  // Empêcher la soumission classique du formulaire

        const formData = new FormData(this);
        const data = {
            prenom: formData.get('animalType[prenom]') // Utilisez ici le nom du champ du formulaire
        };

        fetch('{{ path('api_animal_new') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(data => {
            if (data.message === 'Animal type added') {
                alert('Animal type ajouté avec succès');
            } else {
                alert('Erreur: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Une erreur s\\'est produite');
        });
    });
</script>
{% endblock %}
", "admin/avis/_form.html.twig", "C:\\Users\\Administrateur\\Arcadia\\templates\\admin\\avis\\_form.html.twig");
    }
}
