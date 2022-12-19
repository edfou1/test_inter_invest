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

/* societe_list/list_footer.html.twig */
class __TwigTemplate_e17882b274b6f4af5846b22c64a14144b2b26af93f583674e6f80ab548b226ab extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "societe_list/list_footer.html.twig"));

        // line 1
        echo "<div class=\"row justify-content-center\">
    <nav class=\"col-6 p-4\" aria-label=\"...\">
        <ul class=\"pagination justify-content-center\">
            ";
        // line 4
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), "page", [], "any", false, false, false, 4), 1))) {
            // line 5
            echo "                <li class=\"page-item disabled\">
                    <a class=\"page-link\" aria-label=\"Previous\" href=\"#\" tabindex=\"-1\"><span aria-hidden=\"true\">&laquo;</span></a>
                </li>
            ";
        } else {
            // line 9
            echo "                <li class=\"page-item\">
                    <a
                            class=\"page-link\"
                            aria-label=\"Previous\"
                            href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_list_societe", ["pageSize" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "pageSize", [], "any", false, false, false, 13), "page" => (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "page", [], "any", false, false, false, 13) - 1), "filterNom" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "filterNom", [], "any", false, false, false, 13), "filterSiren" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "filterSiren", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\"
                    >
                        <span aria-hidden=\"true\">&laquo;</span>
                    </a>
                </li>
            ";
        }
        // line 19
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "pageTotal", [], "any", false, false, false, 19)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 20
            echo "                ";
            if ((0 === twig_compare($context["i"], twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "page", [], "any", false, false, false, 20)))) {
                // line 21
                echo "                    <li class=\"page-item active\">
                        <a class=\"page-link\" href=\"#\">";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "page", [], "any", false, false, false, 22), "html", null, true);
                echo "</a>
                    </li>
                ";
            } else {
                // line 25
                echo "                    <li class=\"page-item\">
                        <a
                                class=\"page-link\"
                                href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_list_societe", ["pageSize" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 28, $this->source); })()), "pageSize", [], "any", false, false, false, 28), "page" => $context["i"], "filterNom" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 28, $this->source); })()), "filterNom", [], "any", false, false, false, 28), "filterSiren" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 28, $this->source); })()), "filterSiren", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\"
                        >
                            ";
                // line 30
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "
                        </a>
                    </li>
                ";
            }
            // line 34
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            ";
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 35, $this->source); })()), "page", [], "any", false, false, false, 35), twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 35, $this->source); })()), "pageTotal", [], "any", false, false, false, 35)))) {
            // line 36
            echo "                <li class=\"page-item\">
                    <a
                            class=\"page-link\"
                            aria-label=\"Next\"
                            href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_list_societe", ["pageSize" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 40, $this->source); })()), "pageSize", [], "any", false, false, false, 40), "page" => (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 40, $this->source); })()), "page", [], "any", false, false, false, 40) + 1), "filterNom" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 40, $this->source); })()), "filterNom", [], "any", false, false, false, 40), "filterSiren" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 40, $this->source); })()), "filterSiren", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\"
                    >
                        <span aria-hidden=\"true\">&raquo;</span>
                    </a>
                </li>
            ";
        } else {
            // line 46
            echo "                <li class=\"page-item disabled\">
                    <a class=\"page-link\" href=\"#\" tabindex=\"-1\" aria-label=\"Next\"><span aria-hidden=\"true\">&raquo;</span></a>
                </li>
            ";
        }
        // line 50
        echo "        </ul>
    </nav>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "societe_list/list_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 50,  126 => 46,  117 => 40,  111 => 36,  108 => 35,  102 => 34,  95 => 30,  90 => 28,  85 => 25,  79 => 22,  76 => 21,  73 => 20,  68 => 19,  59 => 13,  53 => 9,  47 => 5,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row justify-content-center\">
    <nav class=\"col-6 p-4\" aria-label=\"...\">
        <ul class=\"pagination justify-content-center\">
            {% if data.page == 1 %}
                <li class=\"page-item disabled\">
                    <a class=\"page-link\" aria-label=\"Previous\" href=\"#\" tabindex=\"-1\"><span aria-hidden=\"true\">&laquo;</span></a>
                </li>
            {% else %}
                <li class=\"page-item\">
                    <a
                            class=\"page-link\"
                            aria-label=\"Previous\"
                            href=\"{{ url('app_list_societe', { 'pageSize': data.pageSize, 'page': data.page-1, 'filterNom': data.filterNom, 'filterSiren': data.filterSiren }) }}\"
                    >
                        <span aria-hidden=\"true\">&laquo;</span>
                    </a>
                </li>
            {% endif %}
            {% for i in 1..data.pageTotal %}
                {% if i == data.page %}
                    <li class=\"page-item active\">
                        <a class=\"page-link\" href=\"#\">{{ data.page }}</a>
                    </li>
                {% else %}
                    <li class=\"page-item\">
                        <a
                                class=\"page-link\"
                                href=\"{{ url('app_list_societe', { 'pageSize': data.pageSize, 'page': i, 'filterNom': data.filterNom, 'filterSiren': data.filterSiren }) }}\"
                        >
                            {{ i }}
                        </a>
                    </li>
                {% endif %}
            {% endfor %}
            {% if data.page != data.pageTotal %}
                <li class=\"page-item\">
                    <a
                            class=\"page-link\"
                            aria-label=\"Next\"
                            href=\"{{ url('app_list_societe', { 'pageSize': data.pageSize, 'page': data.page+1, 'filterNom': data.filterNom, 'filterSiren': data.filterSiren }) }}\"
                    >
                        <span aria-hidden=\"true\">&raquo;</span>
                    </a>
                </li>
            {% else %}
                <li class=\"page-item disabled\">
                    <a class=\"page-link\" href=\"#\" tabindex=\"-1\" aria-label=\"Next\"><span aria-hidden=\"true\">&raquo;</span></a>
                </li>
            {% endif %}
        </ul>
    </nav>
</div>
", "societe_list/list_footer.html.twig", "/var/www/html/templates/societe_list/list_footer.html.twig");
    }
}
