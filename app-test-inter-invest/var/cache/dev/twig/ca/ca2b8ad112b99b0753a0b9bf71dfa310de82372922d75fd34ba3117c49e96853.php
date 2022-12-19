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

/* societe/list_versions.html.twig */
class __TwigTemplate_7bf466cb9af1bf0a247fb052675ebf74c4beab60114adb362703a0586864ddea extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "societe/list_versions.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <h4 class=\"col align-self-start\">Versions</h4>
    ";
        // line 3
        $this->loadTemplate("societe/archivage_modal.html.twig", "societe/list_versions.html.twig", 3)->display($context);
        // line 4
        echo "</div>
<ul class=\"list-group\" style=\"padding-right: 0;\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "societeVersion", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["societe"]) {
            // line 7
            echo "        <li class=\"list-group-item\">
            <div class=\"row\">
                <h5 class=\"text-center\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["societe"], "societe_info", [], "any", false, false, false, 9), "nom", [], "any", false, false, false, 9), "html", null, true);
            echo "</h5>
                <p>Date d'archivage : ";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["societe"], "date_archivage", [], "any", false, false, false, 10), "d/m/Y H:i:s"), "html", null, true);
            echo "</p>
            </div>
            <div class=\"row justify-content-center\">
                ";
            // line 13
            $this->loadTemplate("societe/info.html.twig", "societe/list_versions.html.twig", 13)->display(twig_to_array(["info" => twig_get_attribute($this->env, $this->source, $context["societe"], "societe_info", [], "any", false, false, false, 13)]));
            // line 14
            echo "            </div>
            <div class=\"row\">
                ";
            // line 16
            $this->loadTemplate("societe/list_adresses.html.twig", "societe/list_versions.html.twig", 16)->display(twig_to_array(["adresses" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["societe"], "societe_info", [], "any", false, false, false, 16), "adresses", [], "any", false, false, false, 16)]));
            // line 17
            echo "            </div>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['societe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "societe/list_versions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  76 => 17,  74 => 16,  70 => 14,  68 => 13,  62 => 10,  58 => 9,  54 => 7,  50 => 6,  46 => 4,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <h4 class=\"col align-self-start\">Versions</h4>
    {% include 'societe/archivage_modal.html.twig' %}
</div>
<ul class=\"list-group\" style=\"padding-right: 0;\">
    {% for societe in data.societeVersion %}
        <li class=\"list-group-item\">
            <div class=\"row\">
                <h5 class=\"text-center\">{{ societe.societe_info.nom }}</h5>
                <p>Date d'archivage : {{ societe.date_archivage | date('d/m/Y H:i:s') }}</p>
            </div>
            <div class=\"row justify-content-center\">
                {% include 'societe/info.html.twig' with { 'info': societe.societe_info } only %}
            </div>
            <div class=\"row\">
                {% include 'societe/list_adresses.html.twig' with { 'adresses': societe.societe_info.adresses } only %}
            </div>
        </li>
    {% endfor %}
</ul>
", "societe/list_versions.html.twig", "/var/www/html/templates/societe/list_versions.html.twig");
    }
}
