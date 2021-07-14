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

/* @Storefront/storefront/element/cms-element-form/form-components/cms-element-form-select-salutation.html.twig */
class __TwigTemplate_c34c2ab566e9e8b047a30ceb7c3436675866d7a9f11e74a2c921b7056aa19de9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'cms_form_select_salutation_content' => [$this, 'block_cms_form_select_salutation_content'],
            'cms_form_select_salutation_content_label' => [$this, 'block_cms_form_select_salutation_content_label'],
            'cms_form_select_salutation_content_select' => [$this, 'block_cms_form_select_salutation_content_select'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-select-salutation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-select-salutation.html.twig"));

        // line 1
        $this->displayBlock('cms_form_select_salutation_content', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_cms_form_select_salutation_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_select_salutation_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_select_salutation_content"));

        // line 2
        echo "    <div class=\"form-group ";
        echo twig_escape_filter($this->env, ($context["additionalClass"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 3
        $this->displayBlock('cms_form_select_salutation_content_label', $context, $blocks);
        // line 8
        echo "
        ";
        // line 9
        $this->displayBlock('cms_form_select_salutation_content_select', $context, $blocks);
        // line 33
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_cms_form_select_salutation_content_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_select_salutation_content_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_select_salutation_content_label"));

        // line 4
        echo "            <label class=\"form-label\" for=\"form-Salutation\">
                ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalSalutationLabel"), "html", null, true);
        if (($context["required"] ?? null)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"), "html", null, true);
        }
        // line 6
        echo "            </label>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_cms_form_select_salutation_content_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_select_salutation_content_select"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_select_salutation_content_select"));

        // line 10
        echo "            <select name=\"salutationId\"
                    id=\"form-Salutation\"
                    ";
        // line 12
        if (($context["required"] ?? null)) {
            echo "required=\"required\"";
        }
        // line 13
        echo "                    class=\"custom-select contact-select";
        if (twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/salutationId"], "method", false, false, false, 13)) {
            echo " is-invalid";
        }
        echo "\">
                ";
        // line 14
        if ( !twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "salutationId"], "method", false, false, false, 14)) {
            // line 15
            echo "                    <option disabled=\"disabled\" selected=\"selected\" value=\"\">
                        ";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalSalutationPlaceholder"), "html", null, true);
            echo "
                    </option>
                ";
        }
        // line 19
        echo "
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["salutation"]) {
            // line 21
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salutation"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\">
                        ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salutation"], "displayName", [], "any", false, false, false, 22), "html", null, true);
            echo "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salutation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            </select>

            ";
        // line 27
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/salutationId"], "method", false, false, false, 27))) {
            // line 28
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-select-salutation.html.twig", 28)->display(twig_array_merge($context, ["violationPath" => "/salutationId"]));
            // line 31
            echo "            ";
        }
        // line 32
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-select-salutation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  187 => 32,  184 => 31,  181 => 28,  179 => 27,  175 => 25,  166 => 22,  161 => 21,  157 => 20,  154 => 19,  148 => 16,  145 => 15,  143 => 14,  136 => 13,  132 => 12,  128 => 10,  118 => 9,  107 => 6,  101 => 5,  98 => 4,  88 => 3,  77 => 33,  75 => 9,  72 => 8,  70 => 3,  65 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block cms_form_select_salutation_content %}
    <div class=\"form-group {{ additionalClass }}\">
        {% block cms_form_select_salutation_content_label %}
            <label class=\"form-label\" for=\"form-Salutation\">
                {{ \"account.personalSalutationLabel\"|trans }}{% if required %} {{ \"general.required\"|trans }}{% endif %}
            </label>
        {% endblock %}

        {% block cms_form_select_salutation_content_select %}
            <select name=\"salutationId\"
                    id=\"form-Salutation\"
                    {% if required %}required=\"required\"{% endif %}
                    class=\"custom-select contact-select{% if formViolations.getViolations('/salutationId') %} is-invalid{% endif %}\">
                {% if not data.get('salutationId') %}
                    <option disabled=\"disabled\" selected=\"selected\" value=\"\">
                        {{ \"account.personalSalutationPlaceholder\"|trans }}
                    </option>
                {% endif %}

                {% for salutation in element.data %}
                    <option value=\"{{ salutation.id }}\">
                        {{ salutation.displayName }}
                    </option>
                {% endfor %}
            </select>

            {% if formViolations.getViolations('/salutationId') is not empty %}
                {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig'
                    with { violationPath: '/salutationId' }
                %}
            {% endif %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-select-salutation.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-form/form-components/cms-element-form-select-salutation.html.twig");
    }
}
