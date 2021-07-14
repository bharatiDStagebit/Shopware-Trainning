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

/* @Storefront/storefront/element/cms-element-form.html.twig */
class __TwigTemplate_99dbaf9869f3b655beeccf085d9c437309c18c5defd6e5f51ad1579db68743ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'element_form' => [$this, 'block_element_form'],
            'element_form_wrapper' => [$this, 'block_element_form_wrapper'],
            'element_form_contact_form_title' => [$this, 'block_element_form_contact_form_title'],
            'element_form_contact_form_form' => [$this, 'block_element_form_contact_form_form'],
            'element_form_newsletter_form_title' => [$this, 'block_element_form_newsletter_form_title'],
            'element_form_newsletter_form_form' => [$this, 'block_element_form_newsletter_form_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-form.html.twig"));

        // line 1
        $this->displayBlock('element_form', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_element_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_form"));

        // line 2
        echo "    ";
        $context["config"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "fieldConfig", [], "any", false, false, false, 2), "elements", [], "any", false, false, false, 2);
        // line 3
        echo "
    <div class=\"cms-element-";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-12\">

                ";
        // line 8
        $context["formViolations"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 8), "get", [0 => "errors"], "method", false, false, false, 8);
        // line 9
        echo "
                <div class=\"card\">
                    <div class=\"card-body\">
                        ";
        // line 12
        $this->displayBlock('element_form_wrapper', $context, $blocks);
        // line 53
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_element_form_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_form_wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_form_wrapper"));

        // line 13
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "config", [], "any", false, false, false, 13), "type", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13) === "contact")) {
            // line 14
            echo "                                ";
            $this->displayBlock('element_form_contact_form_title', $context, $blocks);
            // line 23
            echo "
                                ";
            // line 24
            $this->displayBlock('element_form_contact_form_form', $context, $blocks);
            // line 32
            echo "                            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "config", [], "any", false, false, false, 32), "type", [], "any", false, false, false, 32), "value", [], "any", false, false, false, 32) === "newsletter")) {
            // line 33
            echo "                                ";
            $this->displayBlock('element_form_newsletter_form_title', $context, $blocks);
            // line 42
            echo "
                                ";
            // line 43
            $this->displayBlock('element_form_newsletter_form_form', $context, $blocks);
            // line 51
            echo "                            ";
        }
        // line 52
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_element_form_contact_form_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_form_contact_form_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_form_contact_form_title"));

        // line 15
        echo "                                    <div class=\"card-title mb-4\">
                                        ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "config", [], "any", false, false, false, 16), "title", [], "any", false, false, false, 16), "value", [], "any", false, false, false, 16)) {
            // line 17
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "config", [], "any", false, false, false, 17), "title", [], "any", false, false, false, 17), "value", [], "any", false, false, false, 17), "html", null, true);
            echo "
                                        ";
        } else {
            // line 19
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("contact.headline"), "html", null, true);
            echo "
                                        ";
        }
        // line 21
        echo "                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_element_form_contact_form_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_form_contact_form_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_form_contact_form_form"));

        // line 25
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/element/cms-element-form/form-types/contact-form.html.twig", "@Storefront/storefront/element/cms-element-form.html.twig", 25)->display(twig_array_merge($context, ["action" => "frontend.form.contact.send", "submitText" => "contact.formSubmit"]));
        // line 31
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_element_form_newsletter_form_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_form_newsletter_form_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_form_newsletter_form_title"));

        // line 34
        echo "                                    <div class=\"card-title mb-4\">
                                        ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "config", [], "any", false, false, false, 35), "title", [], "any", false, false, false, 35), "value", [], "any", false, false, false, 35)) {
            // line 36
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "config", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36), "value", [], "any", false, false, false, 36), "html", null, true);
            echo "
                                        ";
        } else {
            // line 38
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.headline"), "html", null, true);
            echo "
                                        ";
        }
        // line 40
        echo "                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_element_form_newsletter_form_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_form_newsletter_form_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_form_newsletter_form_form"));

        // line 44
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig", "@Storefront/storefront/element/cms-element-form.html.twig", 44)->display(twig_array_merge($context, ["action" => "frontend.form.newsletter.register.handle", "submitText" => "newsletter.formSubmit"]));
        // line 50
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  262 => 50,  259 => 44,  249 => 43,  238 => 40,  232 => 38,  226 => 36,  224 => 35,  221 => 34,  211 => 33,  201 => 31,  198 => 25,  188 => 24,  177 => 21,  171 => 19,  165 => 17,  163 => 16,  160 => 15,  150 => 14,  140 => 52,  137 => 51,  135 => 43,  132 => 42,  129 => 33,  126 => 32,  124 => 24,  121 => 23,  118 => 14,  115 => 13,  105 => 12,  90 => 53,  88 => 12,  83 => 9,  81 => 8,  74 => 4,  71 => 3,  68 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block element_form %}
    {%  set config = element.fieldConfig.elements %}

    <div class=\"cms-element-{{ element.type }}\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-12\">

                {% set formViolations = app.request.get('errors') %}

                <div class=\"card\">
                    <div class=\"card-body\">
                        {% block element_form_wrapper %}
                            {% if element.config.type.value is same as('contact') %}
                                {% block element_form_contact_form_title %}
                                    <div class=\"card-title mb-4\">
                                        {% if element.config.title.value %}
                                            {{ element.config.title.value }}
                                        {%  else %}
                                            {{ \"contact.headline\"|trans }}
                                        {% endif %}
                                    </div>
                                {% endblock %}

                                {% block element_form_contact_form_form %}
                                    {% sw_include '@Storefront/storefront/element/cms-element-form/form-types/contact-form.html.twig'
                                        with {
                                            action: 'frontend.form.contact.send',
                                            submitText: 'contact.formSubmit'
                                        }
                                    %}
                                {% endblock %}
                            {% elseif element.config.type.value is same as('newsletter') %}
                                {% block element_form_newsletter_form_title %}
                                    <div class=\"card-title mb-4\">
                                        {% if element.config.title.value %}
                                            {{ element.config.title.value }}
                                        {%  else %}
                                            {{ \"newsletter.headline\"|trans }}
                                        {% endif %}
                                    </div>
                                {% endblock %}

                                {% block element_form_newsletter_form_form %}
                                    {% sw_include '@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig'
                                        with {
                                            action: 'frontend.form.newsletter.register.handle',
                                            submitText: 'newsletter.formSubmit'
                                        }
                                    %}
                                {% endblock %}
                            {% endif %}
                        {% endblock %}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@Storefront/storefront/element/cms-element-form.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-form.html.twig");
    }
}
