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

/* societe/add_adresse_modal.html.twig */
class __TwigTemplate_a0f6d70fb23608a30837ed25e78540113d600dd5324371c9e0898826ed80b226 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'idModal' => [$this, 'block_idModal'],
            'action' => [$this, 'block_action'],
            'method' => [$this, 'block_method'],
            'data' => [$this, 'block_data'],
            'idForm' => [$this, 'block_idForm'],
            'classForm' => [$this, 'block_classForm'],
            'idNumero' => [$this, 'block_idNumero'],
            'valueNumero' => [$this, 'block_valueNumero'],
            'idTypeVoie' => [$this, 'block_idTypeVoie'],
            'valueTypeVoie' => [$this, 'block_valueTypeVoie'],
            'idNomVoie' => [$this, 'block_idNomVoie'],
            'valueNomVoie' => [$this, 'block_valueNomVoie'],
            'idCp' => [$this, 'block_idCp'],
            'valueCp' => [$this, 'block_valueCp'],
            'idVille' => [$this, 'block_idVille'],
            'valueVille' => [$this, 'block_valueVille'],
            'idError' => [$this, 'block_idError'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "societe/add_adresse_modal.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"";
        $this->displayBlock('idModal', $context, $blocks);
        echo "\" tabindex=\"-1\" aria-labelledby=\"";
        $this->displayBlock("idModal", $context, $blocks);
        echo "\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h1 class=\"modal-title fs-5\">Adresse</h1>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <form
                        ";
        // line 10
        $this->displayBlock('action', $context, $blocks);
        // line 11
        echo "                        ";
        $this->displayBlock('method', $context, $blocks);
        // line 12
        echo "                        ";
        $this->displayBlock('data', $context, $blocks);
        // line 13
        echo "                        id=\"";
        $this->displayBlock('idForm', $context, $blocks);
        echo "\"
                        name=\"adresseForm\"
                        ";
        // line 15
        $this->displayBlock('classForm', $context, $blocks);
        // line 16
        echo "                >
                    <label class=\"row\" for=\"";
        // line 17
        $this->displayBlock('idNumero', $context, $blocks);
        echo "\">Numéro:</label>
                    <input class=\"form-control\" type=\"text\" id=\"";
        // line 18
        $this->displayBlock("idNumero", $context, $blocks);
        echo "\" ";
        $this->displayBlock('valueNumero', $context, $blocks);
        echo " name=\"numero\" required>
                    <label class=\"row\" for=\"";
        // line 19
        $this->displayBlock('idTypeVoie', $context, $blocks);
        echo "\">Type de voie:</label>
                    <input class=\"form-control\" type=\"text\" id=\"";
        // line 20
        $this->displayBlock("idTypeVoie", $context, $blocks);
        echo "\" ";
        $this->displayBlock('valueTypeVoie', $context, $blocks);
        echo " name=\"typeVoie\" required>
                    <label class=\"row\" for=\"";
        // line 21
        $this->displayBlock('idNomVoie', $context, $blocks);
        echo "\">Nom de la voie:</label>
                    <input class=\"form-control\" type=\"text\" id=\"";
        // line 22
        $this->displayBlock("idNomVoie", $context, $blocks);
        echo "\" ";
        $this->displayBlock('valueNomVoie', $context, $blocks);
        echo " name=\"nomVoie\" required>
                    <label class=\"row\" for=\"";
        // line 23
        $this->displayBlock('idCp', $context, $blocks);
        echo "\">Code postal:</label>
                    <input class=\"form-control\" type=\"number\" id=\"";
        // line 24
        $this->displayBlock("idCp", $context, $blocks);
        echo "\" ";
        $this->displayBlock('valueCp', $context, $blocks);
        echo " name=\"cp\" required>
                    <label class=\"row\" for=\"";
        // line 25
        $this->displayBlock('idVille', $context, $blocks);
        echo "\">Ville:</label>
                    <input class=\"form-control\" type=\"text\" id=\"";
        // line 26
        $this->displayBlock("idVille", $context, $blocks);
        echo "\" ";
        $this->displayBlock('valueVille', $context, $blocks);
        echo " name=\"ville\" required>
                </form>
                <div class =\"row pt-1\" id=\"";
        // line 28
        $this->displayBlock('idError', $context, $blocks);
        echo "\">
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary col-2\" data-bs-dismiss=\"modal\">Annuler</button>
                <input type=\"submit\" form=\"";
        // line 33
        $this->displayBlock("idForm", $context, $blocks);
        echo "\" name=\"adresseSubmit\" class=\"btn btn-primary col-2\" value=\"Envoyer\">
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_idModal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "idModal"));

        echo "addAdresseModal";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "action"));

        echo "action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_add_adresse", ["idSocieteInfo" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "societeInfo", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\"";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_method($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "method"));

        echo "method=\"POST\"";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "data"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_idForm($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "idForm"));

        echo "addAdresseForm";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_classForm($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "classForm"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_idNumero($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "idNumero"));

        echo "addAdresseNumero";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_valueNumero($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "valueNumero"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_idTypeVoie($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "idTypeVoie"));

        echo "addAdresseTypeVoie";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_valueTypeVoie($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "valueTypeVoie"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_idNomVoie($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "idNomVoie"));

        echo "addAdresseNomVoie";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_valueNomVoie($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "valueNomVoie"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_idCp($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "idCp"));

        echo "addAdresseCp";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_valueCp($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "valueCp"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_idVille($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "idVille"));

        echo "addAdresseVille";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_valueVille($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "valueVille"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_idError($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "idError"));

        echo "addAdresseError";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "societe/add_adresse_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 28,  354 => 26,  341 => 25,  329 => 24,  316 => 23,  304 => 22,  291 => 21,  279 => 20,  266 => 19,  254 => 18,  241 => 17,  229 => 15,  216 => 13,  204 => 12,  191 => 11,  176 => 10,  163 => 1,  150 => 33,  142 => 28,  135 => 26,  131 => 25,  125 => 24,  121 => 23,  115 => 22,  111 => 21,  105 => 20,  101 => 19,  95 => 18,  91 => 17,  88 => 16,  86 => 15,  80 => 13,  77 => 12,  74 => 11,  72 => 10,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"{% block idModal %}addAdresseModal{% endblock %}\" tabindex=\"-1\" aria-labelledby=\"{{ block('idModal') }}\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h1 class=\"modal-title fs-5\">Adresse</h1>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <form
                        {% block action %}action=\"{{ url('app_add_adresse', { 'idSocieteInfo': data.societeInfo.id }) }}\"{% endblock %}
                        {% block method %}method=\"POST\"{% endblock %}
                        {% block data %}{% endblock %}
                        id=\"{% block idForm %}addAdresseForm{% endblock %}\"
                        name=\"adresseForm\"
                        {% block classForm %}{% endblock %}
                >
                    <label class=\"row\" for=\"{% block idNumero %}addAdresseNumero{% endblock %}\">Numéro:</label>
                    <input class=\"form-control\" type=\"text\" id=\"{{ block('idNumero') }}\" {% block valueNumero %}{% endblock %} name=\"numero\" required>
                    <label class=\"row\" for=\"{% block idTypeVoie %}addAdresseTypeVoie{% endblock %}\">Type de voie:</label>
                    <input class=\"form-control\" type=\"text\" id=\"{{ block('idTypeVoie') }}\" {% block valueTypeVoie %}{% endblock %} name=\"typeVoie\" required>
                    <label class=\"row\" for=\"{% block idNomVoie %}addAdresseNomVoie{% endblock %}\">Nom de la voie:</label>
                    <input class=\"form-control\" type=\"text\" id=\"{{ block('idNomVoie') }}\" {% block valueNomVoie %}{% endblock %} name=\"nomVoie\" required>
                    <label class=\"row\" for=\"{% block idCp %}addAdresseCp{% endblock %}\">Code postal:</label>
                    <input class=\"form-control\" type=\"number\" id=\"{{ block('idCp') }}\" {% block valueCp %}{% endblock %} name=\"cp\" required>
                    <label class=\"row\" for=\"{% block idVille %}addAdresseVille{% endblock %}\">Ville:</label>
                    <input class=\"form-control\" type=\"text\" id=\"{{ block('idVille') }}\" {% block valueVille %}{% endblock %} name=\"ville\" required>
                </form>
                <div class =\"row pt-1\" id=\"{% block idError %}addAdresseError{% endblock %}\">
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary col-2\" data-bs-dismiss=\"modal\">Annuler</button>
                <input type=\"submit\" form=\"{{ block('idForm') }}\" name=\"adresseSubmit\" class=\"btn btn-primary col-2\" value=\"Envoyer\">
            </div>
        </div>
    </div>
</div>
", "societe/add_adresse_modal.html.twig", "/var/www/html/templates/societe/add_adresse_modal.html.twig");
    }
}
