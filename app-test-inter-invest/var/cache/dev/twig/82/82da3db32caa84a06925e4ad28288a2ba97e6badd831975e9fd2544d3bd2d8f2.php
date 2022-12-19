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

/* societe/info.html.twig */
class __TwigTemplate_6bbad1d0e1ab64225d7d9134ab6081b584873ae4b3d6a4d6503679d353b8f4e7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "societe/info.html.twig"));

        // line 1
        echo "<div class=\"row row-cols-2 p-1\">
    <div class=\"card \">
        <div class=\"card-body\">
            <h5 class=\"card-title\">Siren</h5>
            <p class=\"card-text\"> ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 5, $this->source); })()), "siren", [], "any", false, false, false, 5), "html", null, true);
        echo "</p>
        </div>
    </div>
    <div class=\"card p-1\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">Capital</h5>
            <p class=\"card-text\"> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 11, $this->source); })()), "capital", [], "any", false, false, false, 11), "html", null, true);
        echo " €</p>
        </div>
    </div>
    <div class=\"card p-1\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">Ville d'immatriculation</h5>
            <p class=\"card-text\"> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 17, $this->source); })()), "ville_immatriculation", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
        </div>
    </div>
    <div class=\"card p-1\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">Date d'immatriculation</h5>
            <p class=\"card-text\"> ";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 23, $this->source); })()), "date_immatriculation", [], "any", false, false, false, 23), "d/m/Y"), "html", null, true);
        echo "</p>
        </div>
    </div>
    <div class=\"card p-1\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">Forme juridique</h5>
            <p class=\"card-text\"> ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 29, $this->source); })()), "forme_juridique", [], "any", false, false, false, 29), "libelle", [], "any", false, false, false, 29), "html", null, true);
        echo "</p>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "societe/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  73 => 23,  64 => 17,  55 => 11,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row row-cols-2 p-1\">
    <div class=\"card \">
        <div class=\"card-body\">
            <h5 class=\"card-title\">Siren</h5>
            <p class=\"card-text\"> {{ info.siren }}</p>
        </div>
    </div>
    <div class=\"card p-1\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">Capital</h5>
            <p class=\"card-text\"> {{ info.capital }} €</p>
        </div>
    </div>
    <div class=\"card p-1\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">Ville d'immatriculation</h5>
            <p class=\"card-text\"> {{ info.ville_immatriculation }}</p>
        </div>
    </div>
    <div class=\"card p-1\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">Date d'immatriculation</h5>
            <p class=\"card-text\"> {{ info.date_immatriculation | date('d/m/Y') }}</p>
        </div>
    </div>
    <div class=\"card p-1\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">Forme juridique</h5>
            <p class=\"card-text\"> {{ info.forme_juridique.libelle }}</p>
        </div>
    </div>
</div>
", "societe/info.html.twig", "/var/www/html/templates/societe/info.html.twig");
    }
}
