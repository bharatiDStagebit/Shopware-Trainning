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

/* @Storefront/storefront/element/cms-element-form/form-components/cms-element-form-privacy.html.twig */
class __TwigTemplate_c8a7e07fcec5b0b8d5f87f8139a1d7a32dac8f419a7427c2471af65b312d4389 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'cms_form_privacy_opt_in' => [$this, 'block_cms_form_privacy_opt_in'],
            'cms_form_privacy_opt_in_title' => [$this, 'block_cms_form_privacy_opt_in_title'],
            'cms_form_privacy_opt_in_input' => [$this, 'block_cms_form_privacy_opt_in_input'],
            'cms_form_privacy_opt_in_label' => [$this, 'block_cms_form_privacy_opt_in_label'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-privacy.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-privacy.html.twig"));

        // line 1
        $this->displayBlock('cms_form_privacy_opt_in', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_cms_form_privacy_opt_in($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_privacy_opt_in"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_privacy_opt_in"));

        // line 2
        echo "    ";
        $context["identifierTemplate"] = "form-privacy-opt-in-%s";
        // line 3
        echo "
    ";
        // line 4
        $this->displayBlock('cms_form_privacy_opt_in_title', $context, $blocks);
        // line 7
        echo "
    <div class=\"form-text privacy-notice custom-control custom-checkbox\">
        ";
        // line 9
        $this->displayBlock('cms_form_privacy_opt_in_input', $context, $blocks);
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock('cms_form_privacy_opt_in_label', $context, $blocks);
        // line 24
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_cms_form_privacy_opt_in_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_privacy_opt_in_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_privacy_opt_in_title"));

        // line 5
        echo "        <div>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.privacyTitle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"), "html", null, true);
        echo "</div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_cms_form_privacy_opt_in_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_privacy_opt_in_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_privacy_opt_in_input"));

        // line 10
        echo "            <input name=\"privacy\"
                   type=\"checkbox\"
                   class=\"custom-control-input\"
                   id=\"";
        // line 13
        echo twig_escape_filter($this->env, sprintf(($context["identifierTemplate"] ?? null), ($context["_key"] ?? null)), "html", null, true);
        echo "\"
                   required>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_cms_form_privacy_opt_in_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_privacy_opt_in_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_privacy_opt_in_label"));

        // line 18
        echo "            <label for=\"";
        echo twig_escape_filter($this->env, sprintf(($context["identifierTemplate"] ?? null), ($context["_key"] ?? null)), "html", null, true);
        echo "\" class=\" custom-control-label\">
                ";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.privacyNotice", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.privacyPage")])]);
        // line 21
        echo "
            </label>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-privacy.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  166 => 21,  164 => 19,  159 => 18,  149 => 17,  136 => 13,  131 => 10,  121 => 9,  106 => 5,  96 => 4,  85 => 24,  83 => 17,  80 => 16,  78 => 9,  74 => 7,  72 => 4,  69 => 3,  66 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block cms_form_privacy_opt_in %}
    {% set identifierTemplate = 'form-privacy-opt-in-%s' %}

    {% block cms_form_privacy_opt_in_title %}
        <div>{{ \"general.privacyTitle\"|trans }} {{ \"general.required\"|trans }}</div>
    {% endblock %}

    <div class=\"form-text privacy-notice custom-control custom-checkbox\">
        {% block cms_form_privacy_opt_in_input %}
            <input name=\"privacy\"
                   type=\"checkbox\"
                   class=\"custom-control-input\"
                   id=\"{{ identifierTemplate|format(_key) }}\"
                   required>
        {% endblock %}

        {% block cms_form_privacy_opt_in_label %}
            <label for=\"{{ identifierTemplate|format(_key) }}\" class=\" custom-control-label\">
                {{ \"general.privacyNotice\"|trans({
                    '%url%': path('frontend.cms.page',{ id: config('core.basicInformation.privacyPage') })
                })|raw }}
            </label>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-privacy.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-form/form-components/cms-element-form-privacy.html.twig");
    }
}
