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

/* admin/horaire/_form.html.twig */
class __TwigTemplate_87cc50d84d038113690a4a66889f4950 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/horaire/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/horaire/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "form-group"]]);
        yield "

    <!-- Champs gérés automatiquement -->
    ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'errors');
        yield "

    <!-- Jour de la semaine -->
    <div class=\"mb-3\">
        ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "jour", [], "any", false, false, false, 8), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Jour de la semaine"]);
        yield "
        ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "jour", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
        ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "jour", [], "any", false, false, false, 10), 'errors');
        yield "
    </div>

    <!-- Heure d'ouverture -->
    <div class=\"mb-3\">
        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "ouverture", [], "any", false, false, false, 15), "Y-m-d H:i"), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Heure d'ouverture"]);
        yield "
        ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "ouverture", [], "any", false, false, false, 16), "Y-m-d H:i"), 'widget', ["attr" => ["class" => "form-control", "id" => "heure-ouverture"]]);
        yield "
        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "ouverture", [], "any", false, false, false, 17), "Y-m-d H:i"), 'errors');
        yield "
    </div>

    <!-- Heure de fermeture -->
    <div class=\"mb-3\">
        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "fermeture", [], "any", false, false, false, 22), "Y-m-d H:i"), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Heure de fermeture"]);
        yield "
        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "fermeture", [], "any", false, false, false, 23), "Y-m-d H:i"), 'widget', ["attr" => ["class" => "form-control", "id" => "heure-fermeture"]]);
        yield "
        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "fermeture", [], "any", false, false, false, 24), "Y-m-d H:i"), 'errors');
        yield "
    </div>

    <!-- Bouton de soumission -->
    <div class=\"mb-3\">
        <button type=\"submit\" class=\"btn btn-primary\">
            ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 30, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
        </button>
    </div>

";
        // line 34
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_end');
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
        return "admin/horaire/_form.html.twig";
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
        return array (  117 => 34,  110 => 30,  101 => 24,  97 => 23,  93 => 22,  85 => 17,  81 => 16,  77 => 15,  69 => 10,  65 => 9,  61 => 8,  54 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'form-group'}}) }}

    <!-- Champs gérés automatiquement -->
    {{ form_errors(form) }}

    <!-- Jour de la semaine -->
    <div class=\"mb-3\">
        {{ form_label(form.jour, 'Jour de la semaine', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.jour, {'attr': {'class': 'form-select'}}) }}
        {{ form_errors(form.jour) }}
    </div>

    <!-- Heure d'ouverture -->
    <div class=\"mb-3\">
        {{ form_label(form.ouverture|date('Y-m-d H:i'), 'Heure d\\'ouverture', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.ouverture|date('Y-m-d H:i'), {'attr': {'class': 'form-control', 'id': 'heure-ouverture'}}) }}
        {{ form_errors(form.ouverture|date('Y-m-d H:i')) }}
    </div>

    <!-- Heure de fermeture -->
    <div class=\"mb-3\">
        {{ form_label(form.fermeture|date('Y-m-d H:i'), 'Heure de fermeture', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.fermeture|date('Y-m-d H:i'), {'attr': {'class': 'form-control', 'id': 'heure-fermeture'}}) }}
        {{ form_errors(form.fermeture|date('Y-m-d H:i')) }}
    </div>

    <!-- Bouton de soumission -->
    <div class=\"mb-3\">
        <button type=\"submit\" class=\"btn btn-primary\">
            {{ button_label|default('Enregistrer') }}
        </button>
    </div>

{{ form_end(form) }}
", "admin/horaire/_form.html.twig", "C:\\Users\\Administrateur\\Arcadia\\templates\\admin\\horaire\\_form.html.twig");
    }
}
