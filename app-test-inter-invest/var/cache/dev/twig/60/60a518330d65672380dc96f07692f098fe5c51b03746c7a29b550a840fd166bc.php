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

/* societe_list/list.html.twig */
class __TwigTemplate_1e4c9947b2b1e85326a7b59113a5e61cb5c8ea7539cffc5568743433d97e8418 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "societe_list/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "societe_list/list.html.twig", 1);
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
            <h1 class=\"text-center p-4\">Liste des societes</h1>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-6\">
                ";
        // line 10
        $this->loadTemplate("societe_list/add_modal.html.twig", "societe_list/list.html.twig", 10)->display($context);
        // line 11
        echo "                ";
        $this->loadTemplate("societe_list/list_header.html.twig", "societe_list/list.html.twig", 11)->display($context);
        // line 12
        echo "                <div class=\"row\">
                    <ul class=\"list-group\">
                        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "societes", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["societe"]) {
            // line 15
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_get_societe", ["id" => twig_get_attribute($this->env, $this->source, $context["societe"], "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\" class=\"list-group-item\">
                                <button class=\"float-end btn btn-outline-danger btn-sm delete-societe\" data-delete-url=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_delete_societe", ["id" => twig_get_attribute($this->env, $this->source, $context["societe"], "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash3\" viewBox=\"0 0 16 16\">
                                        <path d=\"M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z\"/>
                                    </svg>
                                </button>
                                <div class=\"row\">
                                    <div class=\"text-center\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["societe"], "nom", [], "any", false, false, false, 22), "html", null, true);
            echo "</div>
                                </div>
                                <div class=\"row justify-content-between\">
                                    <div class=\"col text-center\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["societe"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</div>
                                    <div class=\"col text-center\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["societe"], "siren", [], "any", false, false, false, 26), "html", null, true);
            echo "</div>
                                </div>
                            </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['societe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                    </ul>
                </div>
            </div>
        </div>
        ";
        // line 34
        $this->loadTemplate("societe_list/list_footer.html.twig", "societe_list/list.html.twig", 34)->display($context);
        // line 35
        echo "    </div>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/list.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "societe_list/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 36,  122 => 35,  120 => 34,  114 => 30,  104 => 26,  100 => 25,  94 => 22,  85 => 16,  80 => 15,  76 => 14,  72 => 12,  69 => 11,  67 => 10,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div>
        <div class=\"row\">
            <h1 class=\"text-center p-4\">Liste des societes</h1>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-6\">
                {% include 'societe_list/add_modal.html.twig' %}
                {% include 'societe_list/list_header.html.twig' %}
                <div class=\"row\">
                    <ul class=\"list-group\">
                        {% for societe in data.societes %}
                            <a href=\"{{ url('app_get_societe', { 'id': societe.id}) }}\" class=\"list-group-item\">
                                <button class=\"float-end btn btn-outline-danger btn-sm delete-societe\" data-delete-url=\"{{ url('app_delete_societe', { 'id': societe.id}) }}\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash3\" viewBox=\"0 0 16 16\">
                                        <path d=\"M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z\"/>
                                    </svg>
                                </button>
                                <div class=\"row\">
                                    <div class=\"text-center\">{{ societe.nom }}</div>
                                </div>
                                <div class=\"row justify-content-between\">
                                    <div class=\"col text-center\">{{ societe.id }}</div>
                                    <div class=\"col text-center\">{{ societe.siren }}</div>
                                </div>
                            </a>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
        {% include 'societe_list/list_footer.html.twig' %}
    </div>
    <script src=\"{{ asset('JS/list.js') }}\"></script>
{% endblock %}
", "societe_list/list.html.twig", "/var/www/html/templates/societe_list/list.html.twig");
    }
}
