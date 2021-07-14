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

/* @Storefront/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig */
class __TwigTemplate_711c8efefd4796a7bc4678f1829bac55e41b326080771debefb38abe214f91c2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'cms_element_form_input' => [$this, 'block_cms_element_form_input'],
            'cms_element_form_input_label' => [$this, 'block_cms_element_form_input_label'],
            'cms_element_form_input_input' => [$this, 'block_cms_element_form_input_input'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig"));

        // line 1
        $this->displayBlock('cms_element_form_input', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_cms_element_form_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_element_form_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_element_form_input"));

        // line 2
        echo "    <div class=\"form-group ";
        echo twig_escape_filter($this->env, ($context["additionalClass"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 3
        $this->displayBlock('cms_element_form_input_label', $context, $blocks);
        // line 8
        echo "
        ";
        // line 9
        $this->displayBlock('cms_element_form_input_input', $context, $blocks);
        // line 24
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_cms_element_form_input_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_element_form_input_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_element_form_input_label"));

        // line 4
        echo "            <label class=\"form-label\" for=\"form-";
        echo twig_escape_filter($this->env, ($context["fieldName"] ?? null), "html", null, true);
        echo "\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null)), "html", null, true);
        if (($context["required"] ?? null)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"), "html", null, true);
        }
        // line 6
        echo "            </label>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_cms_element_form_input_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_element_form_input_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_element_form_input_input"));

        // line 10
        echo "            <input name=\"";
        echo twig_escape_filter($this->env, ($context["fieldName"] ?? null), "html", null, true);
        echo "\"
                   ";
        // line 11
        if (($context["type"] ?? null)) {
            echo "type=\"";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 12
        echo "                   id=\"form-";
        echo twig_escape_filter($this->env, ($context["fieldName"] ?? null), "html", null, true);
        echo "\"
                   value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => ($context["fieldName"] ?? null)], "method", false, false, false, 13), "html", null, true);
        echo "\"
                   placeholder=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["placeholder"] ?? null)), "html", null, true);
        echo "\"
                   ";
        // line 15
        if (($context["required"] ?? null)) {
            echo "required=\"required\"";
        }
        // line 16
        echo "                   class=\"form-control";
        if (twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => ("/" . ($context["fieldName"] ?? null))], "method", false, false, false, 16)) {
            echo " is-invalid";
        }
        echo "\"/>

            ";
        // line 18
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => ("/" . ($context["fieldName"] ?? null))], "method", false, false, false, 18))) {
            // line 19
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig", 19)->display(twig_array_merge($context, ["violationPath" => ("/" .             // line 20
($context["fieldName"] ?? null))]));
            // line 22
            echo "            ";
        }
        // line 23
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  173 => 23,  170 => 22,  168 => 20,  166 => 19,  164 => 18,  156 => 16,  152 => 15,  148 => 14,  144 => 13,  139 => 12,  133 => 11,  128 => 10,  118 => 9,  107 => 6,  102 => 5,  98 => 4,  88 => 3,  77 => 24,  75 => 9,  72 => 8,  70 => 3,  65 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block cms_element_form_input %}
    <div class=\"form-group {{ additionalClass }}\">
        {% block cms_element_form_input_label %}
            <label class=\"form-label\" for=\"form-{{ fieldName }}\">
                {{- label|trans -}}{% if required %} {{- \"general.required\"|trans -}}{% endif %}
            </label>
        {% endblock %}

        {% block cms_element_form_input_input %}
            <input name=\"{{ fieldName }}\"
                   {% if type %}type=\"{{ type }}\"{% endif %}
                   id=\"form-{{ fieldName }}\"
                   value=\"{{ data.get( fieldName ) }}\"
                   placeholder=\"{{ placeholder|trans }}\"
                   {% if required %}required=\"required\"{% endif %}
                   class=\"form-control{% if formViolations.getViolations( '/' ~ fieldName ) %} is-invalid{% endif %}\"/>

            {% if formViolations.getViolations( '/' ~ fieldName ) is not empty %}
                {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                    violationPath: ('/' ~ fieldName)
                } %}
            {% endif %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig");
    }
}
