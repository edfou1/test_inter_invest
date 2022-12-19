<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* societe/update_modal.html.twig */
class __TwigTemplate_40558d673c3ea894a05106a65dd076e0c3d21b3ecc1df392cc4164136e6418c8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "societe/update_modal.html.twig"));

        // line 1
        echo "<div class=\"row justify-content-center\">
    <button
            id=\"updateModalButton\"
            data-get-url=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_get_formes_juridiques");
        echo "\"
            data-forme-id=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 5, $this->source); })()), "societeInfo", [], "any", false, false, false, 5), "forme_juridique", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5), "html", null, true);
        echo "\"
            type=\"button\" class=\"btn btn-primary col-3\"
            data-bs-toggle=\"modal\"
            data-bs-target=\"#updateModal\"
    >
        Modifier la société
    </button>
    <div class=\"modal fade\" id=\"updateModal\" tabindex=\"-1\" aria-labelledby=\"updateModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h1 class=\"modal-title fs-5\" id=\"updateModalLabel\">Société</h1>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <form action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_update_societe", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\" method=\"PUT\" id=\"updateSocieteForm\">
                        <label for=\"updateFormeJuridique\">Forme juridique:</label>
                        <select id=\"updateFormeJuridique\" name=\"formeJuridique\" class=\"form-select\" form=\"updateSocieteForm\">
                        </select>
                        <label class=\"row\" for=\"updateNom\">Nom:</label>
                        <input class=\"form-control\" type=\"text\" id=\"updateNom\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "societeInfo", [], "any", false, false, false, 25), "nom", [], "any", false, false, false, 25), "html", null, true);
        echo "\" name=\"nom\" required>
                        <label class=\"row\" for=\"updateSiren\">Siren:</label>
                        <input class=\"form-control\" type=\"number\" id=\"updateSiren\" name=\"siren\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "societeInfo", [], "any", false, false, false, 27), "siren", [], "any", false, false, false, 27), "html", null, true);
        echo "\" required>
                        <label class=\"row\" for=\"updateVilleImmat\">Ville d'immatriculation:</label>
                        <input class=\"form-control\" type=\"text\" id=\"updateVilleImmat\" name=\"villeImmat\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "societeInfo", [], "any", false, false, false, 29), "ville_immatriculation", [], "any", false, false, false, 29), "html", null, true);
        echo "\" required>
                        <label class=\"row\" for=\"updateDateImmat\">Date d'immatriculation:</label>
                        <input class=\"form-control\" type=\"date\" id=\"updateDateImmat\" name=\"dateImmat\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "societeInfo", [], "any", false, false, false, 31), "date_immatriculation", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true);
        echo "\" required>
                        <label class=\"row\" for=\"updateCapital\">Capital:</label>
                        <input class=\"form-control\" type=\"number\" id=\"updateCapital\" name=\"capital\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 33, $this->source); })()), "societeInfo", [], "any", false, false, false, 33), "capital", [], "any", false, false, false, 33), "html", null, true);
        echo "\" required>
                    </form>
                    <div class =\"row pt-1\" id=\"updateError\">
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary col-2\" data-bs-dismiss=\"modal\">Annuler</button>
                    <input type=\"submit\" form=\"updateSocieteForm\" id=\"updateSubmit\" class=\"btn btn-primary col-2\" value=\"Envoyer\">
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "societe/update_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 33,  90 => 31,  85 => 29,  80 => 27,  75 => 25,  67 => 20,  49 => 5,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row justify-content-center\">
    <button
            id=\"updateModalButton\"
            data-get-url=\"{{ url('app_get_formes_juridiques') }}\"
            data-forme-id=\"{{ data.societeInfo.forme_juridique.id }}\"
            type=\"button\" class=\"btn btn-primary col-3\"
            data-bs-toggle=\"modal\"
            data-bs-target=\"#updateModal\"
    >
        Modifier la société
    </button>
    <div class=\"modal fade\" id=\"updateModal\" tabindex=\"-1\" aria-labelledby=\"updateModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h1 class=\"modal-title fs-5\" id=\"updateModalLabel\">Société</h1>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <form action=\"{{ url('app_update_societe', { 'id': data.id}) }}\" method=\"PUT\" id=\"updateSocieteForm\">
                        <label for=\"updateFormeJuridique\">Forme juridique:</label>
                        <select id=\"updateFormeJuridique\" name=\"formeJuridique\" class=\"form-select\" form=\"updateSocieteForm\">
                        </select>
                        <label class=\"row\" for=\"updateNom\">Nom:</label>
                        <input class=\"form-control\" type=\"text\" id=\"updateNom\" value=\"{{ data.societeInfo.nom }}\" name=\"nom\" required>
                        <label class=\"row\" for=\"updateSiren\">Siren:</label>
                        <input class=\"form-control\" type=\"number\" id=\"updateSiren\" name=\"siren\" value=\"{{ data.societeInfo.siren }}\" required>
                        <label class=\"row\" for=\"updateVilleImmat\">Ville d'immatriculation:</label>
                        <input class=\"form-control\" type=\"text\" id=\"updateVilleImmat\" name=\"villeImmat\" value=\"{{ data.societeInfo.ville_immatriculation}}\" required>
                        <label class=\"row\" for=\"updateDateImmat\">Date d'immatriculation:</label>
                        <input class=\"form-control\" type=\"date\" id=\"updateDateImmat\" name=\"dateImmat\" value=\"{{ data.societeInfo.date_immatriculation | date('Y-m-d') }}\" required>
                        <label class=\"row\" for=\"updateCapital\">Capital:</label>
                        <input class=\"form-control\" type=\"number\" id=\"updateCapital\" name=\"capital\" value=\"{{ data.societeInfo.capital }}\" required>
                    </form>
                    <div class =\"row pt-1\" id=\"updateError\">
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary col-2\" data-bs-dismiss=\"modal\">Annuler</button>
                    <input type=\"submit\" form=\"updateSocieteForm\" id=\"updateSubmit\" class=\"btn btn-primary col-2\" value=\"Envoyer\">
                </div>
            </div>
        </div>
    </div>
</div>
", "societe/update_modal.html.twig", "/var/www/html/templates/societe/update_modal.html.twig");
    }
}
