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

/* societe_list/list_header.html.twig */
class __TwigTemplate_e3255efabf94c96d4f15562924dfda69d0ccdb17538fa174fe26ecd39ebcb238 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "societe_list/list_header.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_list_societe");
        echo "\" method=\"get\" id=\"filterForm\">
    <div class=\"row justify-content-around p-2\">
        <div class=\"col-3\">
            <label for=\"pageSize\">Nombre de résultats:</label>
            <select id=\"pageSize\" name=\"pageSize\" class=\"form-select\" form=\"filterForm\">
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => 2, 1 => 5, 2 => 10]);
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 7
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })()), "pageSize", [], "any", false, false, false, 7), $context["i"]))) {
                // line 8
                echo "                        <option selected value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                    ";
            } else {
                // line 10
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                    ";
            }
            // line 12
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </select>
        </div>
        <div class=\"col-3\">
            <label for=\"filterNom\">Nom:</label>
            <input type=\"text\" id=\"filterNom\" style=\"width:100%\" name=\"filterNom\">
        </div>
        <div class=\"col-3\">
            <label for=\"filterSiren\">Siren:</label>
            <input type=\"text\" id=\"filterSiren\" style=\"width:100%\" name=\"filterSiren\">
        </div>
        <input type=\"hidden\" id=\"page\" name=\"page\" value=\"1\">
        <div class=\"col-2 text-center align-self-center\">
            <input type=\"submit\" value=\"afficher\">
        </div>
    </div>
</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "societe_list/list_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 13,  72 => 12,  64 => 10,  56 => 8,  53 => 7,  49 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"{{ url('app_list_societe') }}\" method=\"get\" id=\"filterForm\">
    <div class=\"row justify-content-around p-2\">
        <div class=\"col-3\">
            <label for=\"pageSize\">Nombre de résultats:</label>
            <select id=\"pageSize\" name=\"pageSize\" class=\"form-select\" form=\"filterForm\">
                {% for i in [2, 5, 10] %}
                    {% if data.pageSize == i %}
                        <option selected value=\"{{ i }}\">{{ i }}</option>
                    {% else %}
                        <option value=\"{{ i }}\">{{ i }}</option>
                    {% endif %}
                {% endfor %}
            </select>
        </div>
        <div class=\"col-3\">
            <label for=\"filterNom\">Nom:</label>
            <input type=\"text\" id=\"filterNom\" style=\"width:100%\" name=\"filterNom\">
        </div>
        <div class=\"col-3\">
            <label for=\"filterSiren\">Siren:</label>
            <input type=\"text\" id=\"filterSiren\" style=\"width:100%\" name=\"filterSiren\">
        </div>
        <input type=\"hidden\" id=\"page\" name=\"page\" value=\"1\">
        <div class=\"col-2 text-center align-self-center\">
            <input type=\"submit\" value=\"afficher\">
        </div>
    </div>
</form>
", "societe_list/list_header.html.twig", "/var/www/html/templates/societe_list/list_header.html.twig");
    }
}
