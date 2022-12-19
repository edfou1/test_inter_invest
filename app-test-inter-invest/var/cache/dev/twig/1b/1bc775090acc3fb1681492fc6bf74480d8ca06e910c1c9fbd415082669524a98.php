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

/* societe/archivage_modal.html.twig */
class __TwigTemplate_502449d07315a0ee6272c0eb9fc55e15f1d71726cc4798eccc977cb7b5ad87e0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "societe/archivage_modal.html.twig"));

        // line 1
        echo "<button
        id=\"archivageModalButton\"
        type=\"button\"
        class=\"btn btn-primary col-3 m-1 align-self-start\"
        data-bs-toggle=\"modal\"
        data-bs-target=\"#archivageModal\"
>
    Archivage
</button>
<div class=\"modal fade\" id=\"archivageModal\" tabindex=\"-1\" aria-labelledby=\"archivageModal\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h1 class=\"modal-title fs-5\" id=\"archivageModalLabel\">Archivage d'une version de la société</h1>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <form action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_add_societe_version", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\" method=\"POST\" id=\"archivageForm\">
                    <label class=\"row\" for=\"archivageDate\">Date d'archivage:</label>
                    <input class=\"form-control\" type=\"datetime-local\" id=\"archivageDate\" name=\"date\" step=\"1\" required>
                </form>
                <div class =\"row pt-1\" id=\"archivageError\">
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary col-2\" data-bs-dismiss=\"modal\">Annuler</button>
                <input type=\"submit\" form=\"archivageForm\" id=\"archivageSubmit\" class=\"btn btn-primary col-2\" value=\"Envoyer\">
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "societe/archivage_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 18,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<button
        id=\"archivageModalButton\"
        type=\"button\"
        class=\"btn btn-primary col-3 m-1 align-self-start\"
        data-bs-toggle=\"modal\"
        data-bs-target=\"#archivageModal\"
>
    Archivage
</button>
<div class=\"modal fade\" id=\"archivageModal\" tabindex=\"-1\" aria-labelledby=\"archivageModal\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h1 class=\"modal-title fs-5\" id=\"archivageModalLabel\">Archivage d'une version de la société</h1>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <form action=\"{{ url('app_add_societe_version', {'id': data.id}) }}\" method=\"POST\" id=\"archivageForm\">
                    <label class=\"row\" for=\"archivageDate\">Date d'archivage:</label>
                    <input class=\"form-control\" type=\"datetime-local\" id=\"archivageDate\" name=\"date\" step=\"1\" required>
                </form>
                <div class =\"row pt-1\" id=\"archivageError\">
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary col-2\" data-bs-dismiss=\"modal\">Annuler</button>
                <input type=\"submit\" form=\"archivageForm\" id=\"archivageSubmit\" class=\"btn btn-primary col-2\" value=\"Envoyer\">
            </div>
        </div>
    </div>
</div>
", "societe/archivage_modal.html.twig", "/var/www/html/templates/societe/archivage_modal.html.twig");
    }
}
