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

/* employee/employeeRepas/_form.html.twig */
class __TwigTemplate_8af33f2ca99b45ad1c938c47cb84e66b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/employeeRepas/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/employeeRepas/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "form-group"]]);
        yield "

    <!-- Champs générés automatiquement par Symfony -->
    ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'errors');
        yield " ";
        // line 5
        yield "
    <!-- Choix de l'animal -->
    <div class=\"mb-3\">
        ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "animal", [], "any", false, false, false, 8), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Animal"]);
        yield "
        ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "animal", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-select", "id" => "choix-animal", "aria-label" => "Choix animal"]]);
        // line 15
        yield "
        ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "animal", [], "any", false, false, false, 16), 'errors');
        yield "
    </div>

    <!-- Champ Nourriture -->
    <div class=\"form-floating mb-3\">
        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nourriture", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Type de nourriture", "id" => "floatingTextarea"]]);
        // line 27
        yield "
        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nourriture", [], "any", false, false, false, 28), 'label', ["label_attr" => ["for" => "floatingTextarea"], "label" => "Type de nourriture"]);
        yield "
        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "nourriture", [], "any", false, false, false, 29), 'errors');
        yield "
    </div>

    <!-- Champ Date -->
    <div class=\"mb-3\">
        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "date", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "form-label", "for" => "nourriture-date"], "label" => "Date"]);
        yield "
        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "date", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control", "id" => "nourriture-date"]]);
        // line 40
        yield "
        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "date", [], "any", false, false, false, 41), 'errors');
        yield "
    </div>

    <!-- Bouton de soumission -->
    <div class=\"mb-3\">
        <button type=\"submit\" class=\"btn btn-primary\">
            ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 47, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "
        </button>
    </div>

";
        // line 51
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_end');
        yield "
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
        return "employee/employeeRepas/_form.html.twig";
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
        return array (  121 => 51,  114 => 47,  105 => 41,  102 => 40,  100 => 35,  96 => 34,  88 => 29,  84 => 28,  81 => 27,  79 => 21,  71 => 16,  68 => 15,  66 => 9,  62 => 8,  57 => 5,  54 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'form-group'}}) }}

    <!-- Champs générés automatiquement par Symfony -->
    {{ form_errors(form) }} {# Affiche les erreurs globales du formulaire #}

    <!-- Choix de l'animal -->
    <div class=\"mb-3\">
        {{ form_label(form.animal, 'Animal', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.animal, {
            'attr': {
                'class': 'form-select',
                'id': 'choix-animal',
                'aria-label': 'Choix animal'
            }
        }) }}
        {{ form_errors(form.animal) }}
    </div>

    <!-- Champ Nourriture -->
    <div class=\"form-floating mb-3\">
        {{ form_widget(form.nourriture, {
            'attr': {
                'class': 'form-control',
                'placeholder': 'Type de nourriture',
                'id': 'floatingTextarea'
            }
        }) }}
        {{ form_label(form.nourriture, 'Type de nourriture', {'label_attr': {'for': 'floatingTextarea'}}) }}
        {{ form_errors(form.nourriture) }}
    </div>

    <!-- Champ Date -->
    <div class=\"mb-3\">
        {{ form_label(form.date, 'Date', {'label_attr': {'class': 'form-label', 'for': 'nourriture-date'}}) }}
        {{ form_widget(form.date, {
            'attr': {
                'class': 'form-control',
                'id': 'nourriture-date'
            }
        }) }}
        {{ form_errors(form.date) }}
    </div>

    <!-- Bouton de soumission -->
    <div class=\"mb-3\">
        <button type=\"submit\" class=\"btn btn-primary\">
            {{ button_label|default('Save') }}
        </button>
    </div>

{{ form_end(form) }}
", "employee/employeeRepas/_form.html.twig", "C:\\Users\\Administrateur\\Arcadia\\templates\\employee\\employeeRepas\\_form.html.twig");
    }
}
