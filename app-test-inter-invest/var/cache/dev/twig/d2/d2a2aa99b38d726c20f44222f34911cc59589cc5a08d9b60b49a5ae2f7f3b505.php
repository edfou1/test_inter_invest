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

/* societe_list/add_modal.html.twig */
class __TwigTemplate_0c0aa875490aa997fd8d980d410a4b4b301c53e14f0907ae2755fa1778d9ee21 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "societe_list/add_modal.html.twig"));

        // line 1
        echo "<div class=\"row justify-content-center\">
    <button id=\"addModalButton\" data-get-url=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_get_formes_juridiques");
        echo "\" type=\"button\" class=\"btn btn-primary col-3\" data-bs-toggle=\"modal\" data-bs-target=\"#addModal\">
        Ajouter une société
    </button>
    <div class=\"modal fade\" id=\"addModal\" tabindex=\"-1\" aria-labelledby=\"addModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h1 class=\"modal-title fs-5\" id=\"addModalLabel\">Société</h1>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <form action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_add_societe");
        echo "\" method=\"POST\" id=\"addSocieteForm\">
                        <label for=\"addFormeJuridique\">Forme juridique:</label>
                        <select id=\"addFormeJuridique\" name=\"formeJuridique\" class=\"form-select\" form=\"addSocieteForm\">
                        </select>
                        <label class=\"row\" for=\"addNom\">Nom:</label>
                        <input class=\"form-control\" type=\"text\" id=\"addNom\" name=\"nom\" required>
                        <label class=\"row\" for=\"addSiren\">Siren:</label>
                        <input class=\"form-control\" type=\"number\" id=\"addSiren\" name=\"siren\" required>
                        <label class=\"row\" for=\"addVilleImmat\">Ville d'immatriculation:</label>
                        <input class=\"form-control\" type=\"text\" id=\"addVilleImmat\" name=\"villeImmat\" required>
                        <label class=\"row\" for=\"addDateImmat\">Date d'immatriculation:</label>
                        <input class=\"form-control\" type=\"date\" id=\"addDateImmat\" name=\"dateImmat\" required>
                        <label class=\"row\" for=\"addCapital\">Capital:</label>
                        <div class=\"input-group mb-3\">
                            <input class=\"form-control\" type=\"number\" id=\"addCapital\" name=\"capital\" required>
                            <div class=\"input-group-append\">
                                <span class=\"input-group-text\">€</span>
                            </div>
                        </div>
                    </form>
                    <div class =\"row pt-1\" id=\"addError\">
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary col-2\" data-bs-dismiss=\"modal\">Annuler</button>
                    <input type=\"submit\" form=\"addSocieteForm\" id=\"addSubmit\" class=\"btn btn-primary col-2\" value=\"Envoyer\">
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
        return "societe_list/add_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row justify-content-center\">
    <button id=\"addModalButton\" data-get-url=\"{{ url('app_get_formes_juridiques') }}\" type=\"button\" class=\"btn btn-primary col-3\" data-bs-toggle=\"modal\" data-bs-target=\"#addModal\">
        Ajouter une société
    </button>
    <div class=\"modal fade\" id=\"addModal\" tabindex=\"-1\" aria-labelledby=\"addModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h1 class=\"modal-title fs-5\" id=\"addModalLabel\">Société</h1>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <form action=\"{{ url('app_add_societe') }}\" method=\"POST\" id=\"addSocieteForm\">
                        <label for=\"addFormeJuridique\">Forme juridique:</label>
                        <select id=\"addFormeJuridique\" name=\"formeJuridique\" class=\"form-select\" form=\"addSocieteForm\">
                        </select>
                        <label class=\"row\" for=\"addNom\">Nom:</label>
                        <input class=\"form-control\" type=\"text\" id=\"addNom\" name=\"nom\" required>
                        <label class=\"row\" for=\"addSiren\">Siren:</label>
                        <input class=\"form-control\" type=\"number\" id=\"addSiren\" name=\"siren\" required>
                        <label class=\"row\" for=\"addVilleImmat\">Ville d'immatriculation:</label>
                        <input class=\"form-control\" type=\"text\" id=\"addVilleImmat\" name=\"villeImmat\" required>
                        <label class=\"row\" for=\"addDateImmat\">Date d'immatriculation:</label>
                        <input class=\"form-control\" type=\"date\" id=\"addDateImmat\" name=\"dateImmat\" required>
                        <label class=\"row\" for=\"addCapital\">Capital:</label>
                        <div class=\"input-group mb-3\">
                            <input class=\"form-control\" type=\"number\" id=\"addCapital\" name=\"capital\" required>
                            <div class=\"input-group-append\">
                                <span class=\"input-group-text\">€</span>
                            </div>
                        </div>
                    </form>
                    <div class =\"row pt-1\" id=\"addError\">
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary col-2\" data-bs-dismiss=\"modal\">Annuler</button>
                    <input type=\"submit\" form=\"addSocieteForm\" id=\"addSubmit\" class=\"btn btn-primary col-2\" value=\"Envoyer\">
                </div>
            </div>
        </div>
    </div>
</div>
", "societe_list/add_modal.html.twig", "/var/www/html/templates/societe_list/add_modal.html.twig");
    }
}
