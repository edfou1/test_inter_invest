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

/* societe/index.html.twig */
class __TwigTemplate_59b7c0a7ab0665269f3d6dd18fb783490a7c2a7878d53d76ed889e06e4a0286e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "societe/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "societe/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>
        <div class=\"row\">
            <a role=\"button\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_list_societe", ["page" => 1, "pageSize" => 10]), "html", null, true);
        echo "\" class=\"text-center btn btn-primary col-1 mt-2 ms-4\">Retour</a>
            <h1 class=\"text-center p-4 \">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })()), "societeInfo", [], "any", false, false, false, 7), "nom", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-6\">
                ";
        // line 11
        $this->loadTemplate("societe/update_modal.html.twig", "societe/index.html.twig", 11)->display($context);
        // line 12
        echo "                ";
        $this->loadTemplate("societe/info.html.twig", "societe/index.html.twig", 12)->display(twig_array_merge($context, ["info" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "societeInfo", [], "any", false, false, false, 12)]));
        // line 13
        echo "                <div class=\"row\">
                    ";
        // line 14
        $this->loadTemplate("societe/list_adresses_crud.html.twig", "societe/index.html.twig", 14)->display(twig_array_merge($context, ["adresses" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "societeInfo", [], "any", false, false, false, 14), "adresses", [], "any", false, false, false, 14)]));
        // line 15
        echo "                </div>
                <div class=\"row\">
                    ";
        // line 17
        $this->loadTemplate("societe/list_versions.html.twig", "societe/index.html.twig", 17)->display($context);
        // line 18
        echo "                </div>
            </div>
        </div>
    </div>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/societe.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "societe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 22,  90 => 18,  88 => 17,  84 => 15,  82 => 14,  79 => 13,  76 => 12,  74 => 11,  67 => 7,  63 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div>
        <div class=\"row\">
            <a role=\"button\" href=\"{{ url('app_list_societe', {'page': 1, 'pageSize': 10}) }}\" class=\"text-center btn btn-primary col-1 mt-2 ms-4\">Retour</a>
            <h1 class=\"text-center p-4 \">{{ data.societeInfo.nom }}</h1>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-6\">
                {% include 'societe/update_modal.html.twig' %}
                {% include 'societe/info.html.twig' with { 'info': data.societeInfo } %}
                <div class=\"row\">
                    {% include 'societe/list_adresses_crud.html.twig' with { 'adresses': data.societeInfo.adresses } %}
                </div>
                <div class=\"row\">
                    {% include 'societe/list_versions.html.twig' %}
                </div>
            </div>
        </div>
    </div>
    <script src=\"{{ asset('JS/societe.js') }}\"></script>
{% endblock %}
", "societe/index.html.twig", "/var/www/html/templates/societe/index.html.twig");
    }
}
