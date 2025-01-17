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

/* admin/compteRendu.html.twig */
class __TwigTemplate_cfdd7fa78ffea600b58ff547227667d4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/compteRendu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/compteRendu.html.twig"));

        $this->parent = $this->loadTemplate("headerFooter.html.twig", "admin/compteRendu.html.twig", 1);
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
        yield "    <script src=\"https://unpkg.com/@phosphor-icons/web\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/compteRendu.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/headerFooter.css"), "html", null, true);
        yield "\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Jersey+10&display=swap\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 14
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

        // line 15
        yield "
        <div class=\"button-switch mb-3\">
            <button class=\"btn btn-primary selected\" onclick=\"sortTable('name')\">Nom</button>
            <button class=\"btn btn-secondary\" onclick=\"sortTable('date')\">Date</button>
        </div>

        <table class=\"compte-rendu-table\" id=\"compteRenduTable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Date</th>
                    <th>Rapport</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["veterinaires"]) || array_key_exists("veterinaires", $context) ? $context["veterinaires"] : (function () { throw new RuntimeError('Variable "veterinaires" does not exist.', 30, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["veterinaire"]) {
            // line 31
            yield "                    <tr>
                        <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["veterinaire"], "animal", [], "any", false, false, false, 32), "prenom", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                        <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["veterinaire"], "date", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                        <td>
                            <button class=\"rapport-button\" data-target=\"#veterinaire-rapport-";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 35), "html", null, true);
            yield "\" onclick=\"toggleReport(this)\">
                                Rapport ▼
                            </button>
                            <div class=\"rapport-content d-none\" id=\"veterinaire-rapport-";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 38), "html", null, true);
            yield "\">
                                <p>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["veterinaire"], "detail", [], "any", false, false, false, 39), "html", null, true);
            yield "</p>
                                <span>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["veterinaire"], "utilisateur", [], "any", false, false, false, 40), "email", [], "any", false, false, false, 40), "html", null, true);
            yield "</span>
                            </div>
                        </td>
                    </tr>
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
        unset($context['_seq'], $context['_key'], $context['veterinaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "            </tbody>
        </table>

        <table class=\"compte-rendu-table\" id=\"compteRenduTable2\">
            <thead>
                <tr>
                    <th>Habitat</th>
                    <th>Utilisateur</th>
                    <th>Rapport</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 57, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 58
            yield "                    <tr>
                        <td>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "habitat", [], "any", false, false, false, 59), "nom", [], "any", false, false, false, 59), "html", null, true);
            yield "</td>
                        <td><span>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "utilisateur", [], "any", false, false, false, 60), "email", [], "any", false, false, false, 60), "html", null, true);
            yield "</span></td>
                        <td>
                            <button class=\"rapport-button\" data-target=\"#commentaire-rapport-";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 62), "html", null, true);
            yield "\" onclick=\"toggleReport(this)\">
                                Rapport ▼
                            </button>
                            <div class=\"rapport-content d-none\" id=\"commentaire-rapport-";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 65), "html", null, true);
            yield "\">
                                <p>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "commentaire", [], "any", false, false, false, 66), "html", null, true);
            yield "</p>
                                <span>";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "utilisateur", [], "any", false, false, false, 67), "email", [], "any", false, false, false, 67), "html", null, true);
            yield "</span>
                            </div>

                        </td>
                    </tr>
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
        unset($context['_seq'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "            </tbody>
        </table>
    </div>
</div>



    <script>
    function toggleReport(button) {
    // Récupère l'élément cible à partir de l'attribut \"data-target\"
    const targetId = button.getAttribute('data-target');
    const content = document.querySelector(targetId);

    if (content) {
        // Ajoute ou enlève la classe \"d-none\" pour afficher ou cacher le rapport
        if (content.classList.contains('d-none')) {
            content.classList.remove('d-none'); // Montre le contenu
            button.textContent = \"Rapport ▲\";  // Change le texte du bouton
        } else {
            content.classList.add('d-none');  // Cache le contenu
            button.textContent = \"Rapport ▼\"; // Change le texte du bouton
        }
    }
}

    let sortOrder = 'asc'; // Par défaut, tri croissant

    // Fonction de tri pour la table
    function sortTable(criteria) {
        const table = document.getElementById('compteRenduTable');
        const rows = Array.from(table.getElementsByTagName('tr')).slice(1); // Exclure l'entête de la table

        let comparator;

        if (criteria === 'name') {
            comparator = (rowA, rowB) => {
                const nameA = rowA.getElementsByTagName('td')[0].innerText.toLowerCase();
                const nameB = rowB.getElementsByTagName('td')[0].innerText.toLowerCase();
                return nameA.localeCompare(nameB);
            };
        } else if (criteria === 'date') {
            comparator = (rowA, rowB) => {
                const dateA = new Date(rowA.getElementsByTagName('td')[1].innerText);
                const dateB = new Date(rowB.getElementsByTagName('td')[1].innerText);
                return dateA - dateB;
            };
        }

        // Trier les lignes en fonction du critère et de l'ordre
        rows.sort(comparator);

        if (sortOrder === 'desc') {
            rows.reverse();
        }

        // Réafficher les lignes triées
        rows.forEach(row => table.appendChild(row));

        // Changer l'ordre pour la prochaine fois
        sortOrder = sortOrder === 'asc' ? 'desc' : 'asc';

        // Mettre à jour la classe 'selected' sur les boutons
        updateButtonSelection(criteria);
    }

    // Fonction pour mettre à jour la sélection du bouton
    function updateButtonSelection(selectedCriteria) {
        const buttonGroup = document.querySelector('.button-switch');
        const buttons = buttonGroup.getElementsByTagName('button');
        Array.from(buttons).forEach(button => button.classList.remove('selected'));

        if (selectedCriteria === 'name') {
            buttons[0].classList.add('selected');
        } else if (selectedCriteria === 'date') {
            buttons[1].classList.add('selected');
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
        return "admin/compteRendu.html.twig";
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
        return array (  271 => 73,  251 => 67,  247 => 66,  243 => 65,  237 => 62,  232 => 60,  228 => 59,  225 => 58,  208 => 57,  194 => 45,  175 => 40,  171 => 39,  167 => 38,  161 => 35,  156 => 33,  152 => 32,  149 => 31,  132 => 30,  115 => 15,  102 => 14,  84 => 6,  80 => 5,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'headerFooter.html.twig' %}

{% block stylesheets %}
    <script src=\"https://unpkg.com/@phosphor-icons/web\"></script>
    <link rel=\"stylesheet\" href=\"{{ asset('styles/compteRendu.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('styles/headerFooter.css') }}\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Jersey+10&display=swap\" rel=\"stylesheet\">
{% endblock %}

{% block body %}

        <div class=\"button-switch mb-3\">
            <button class=\"btn btn-primary selected\" onclick=\"sortTable('name')\">Nom</button>
            <button class=\"btn btn-secondary\" onclick=\"sortTable('date')\">Date</button>
        </div>

        <table class=\"compte-rendu-table\" id=\"compteRenduTable\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Date</th>
                    <th>Rapport</th>
                </tr>
            </thead>
            <tbody>
                {% for veterinaire in veterinaires %}
                    <tr>
                        <td>{{ veterinaire.animal.prenom }}</td>
                        <td>{{ veterinaire.date }}</td>
                        <td>
                            <button class=\"rapport-button\" data-target=\"#veterinaire-rapport-{{ loop.index }}\" onclick=\"toggleReport(this)\">
                                Rapport ▼
                            </button>
                            <div class=\"rapport-content d-none\" id=\"veterinaire-rapport-{{ loop.index }}\">
                                <p>{{ veterinaire.detail }}</p>
                                <span>{{ veterinaire.utilisateur.email }}</span>
                            </div>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        <table class=\"compte-rendu-table\" id=\"compteRenduTable2\">
            <thead>
                <tr>
                    <th>Habitat</th>
                    <th>Utilisateur</th>
                    <th>Rapport</th>
                </tr>
            </thead>
            <tbody>
                {% for commentaire in commentaires %}
                    <tr>
                        <td>{{ commentaire.habitat.nom }}</td>
                        <td><span>{{ commentaire.utilisateur.email }}</span></td>
                        <td>
                            <button class=\"rapport-button\" data-target=\"#commentaire-rapport-{{ loop.index }}\" onclick=\"toggleReport(this)\">
                                Rapport ▼
                            </button>
                            <div class=\"rapport-content d-none\" id=\"commentaire-rapport-{{ loop.index }}\">
                                <p>{{ commentaire.commentaire }}</p>
                                <span>{{ commentaire.utilisateur.email }}</span>
                            </div>

                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>



    <script>
    function toggleReport(button) {
    // Récupère l'élément cible à partir de l'attribut \"data-target\"
    const targetId = button.getAttribute('data-target');
    const content = document.querySelector(targetId);

    if (content) {
        // Ajoute ou enlève la classe \"d-none\" pour afficher ou cacher le rapport
        if (content.classList.contains('d-none')) {
            content.classList.remove('d-none'); // Montre le contenu
            button.textContent = \"Rapport ▲\";  // Change le texte du bouton
        } else {
            content.classList.add('d-none');  // Cache le contenu
            button.textContent = \"Rapport ▼\"; // Change le texte du bouton
        }
    }
}

    let sortOrder = 'asc'; // Par défaut, tri croissant

    // Fonction de tri pour la table
    function sortTable(criteria) {
        const table = document.getElementById('compteRenduTable');
        const rows = Array.from(table.getElementsByTagName('tr')).slice(1); // Exclure l'entête de la table

        let comparator;

        if (criteria === 'name') {
            comparator = (rowA, rowB) => {
                const nameA = rowA.getElementsByTagName('td')[0].innerText.toLowerCase();
                const nameB = rowB.getElementsByTagName('td')[0].innerText.toLowerCase();
                return nameA.localeCompare(nameB);
            };
        } else if (criteria === 'date') {
            comparator = (rowA, rowB) => {
                const dateA = new Date(rowA.getElementsByTagName('td')[1].innerText);
                const dateB = new Date(rowB.getElementsByTagName('td')[1].innerText);
                return dateA - dateB;
            };
        }

        // Trier les lignes en fonction du critère et de l'ordre
        rows.sort(comparator);

        if (sortOrder === 'desc') {
            rows.reverse();
        }

        // Réafficher les lignes triées
        rows.forEach(row => table.appendChild(row));

        // Changer l'ordre pour la prochaine fois
        sortOrder = sortOrder === 'asc' ? 'desc' : 'asc';

        // Mettre à jour la classe 'selected' sur les boutons
        updateButtonSelection(criteria);
    }

    // Fonction pour mettre à jour la sélection du bouton
    function updateButtonSelection(selectedCriteria) {
        const buttonGroup = document.querySelector('.button-switch');
        const buttons = buttonGroup.getElementsByTagName('button');
        Array.from(buttons).forEach(button => button.classList.remove('selected'));

        if (selectedCriteria === 'name') {
            buttons[0].classList.add('selected');
        } else if (selectedCriteria === 'date') {
            buttons[1].classList.add('selected');
        }
    }
</script>
{% endblock %}
", "admin/compteRendu.html.twig", "C:\\Users\\Administrateur\\Arcadia\\templates\\admin\\CompteRendu.html.twig");
    }
}
