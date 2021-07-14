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

/* @Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig */
class __TwigTemplate_feddd1c2eb8437659bbfc7711529c827843b296790707a0dcb8d5bea4ef3ea26 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'cms_form_newsletter' => [$this, 'block_cms_form_newsletter'],
            'cms_form_newsletter_select_action' => [$this, 'block_cms_form_newsletter_select_action'],
            'cms_form_newsletter_input_email' => [$this, 'block_cms_form_newsletter_input_email'],
            'cms_form_newsletter_additional_fields' => [$this, 'block_cms_form_newsletter_additional_fields'],
            'cms_form_newsletter_select_salutation' => [$this, 'block_cms_form_newsletter_select_salutation'],
            'cms_form_newsletter_input_first_name' => [$this, 'block_cms_form_newsletter_input_first_name'],
            'cms_form_newsletter_input_last_name' => [$this, 'block_cms_form_newsletter_input_last_name'],
            'cms_form_newsletter_captcha' => [$this, 'block_cms_form_newsletter_captcha'],
            'cms_form_newsletter_privacy' => [$this, 'block_cms_form_newsletter_privacy'],
            'cms_form_newsletter_required_fields_info' => [$this, 'block_cms_form_newsletter_required_fields_info'],
            'cms_form_newsletter_submit' => [$this, 'block_cms_form_newsletter_submit'],
            'cms_form_newsletter_hidden_fields' => [$this, 'block_cms_form_newsletter_hidden_fields'],
            'cms_form_newsletter_csrf' => [$this, 'block_cms_form_newsletter_csrf'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig"));

        // line 1
        $this->displayBlock('cms_form_newsletter', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_cms_form_newsletter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter"));

        // line 2
        echo "    <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["action"] ?? null));
        echo "\"
          method=\"post\"
          data-form-csrf-handler=\"true\"
          data-form-validation=\"true\">

        <div class=\"form-content\">
        <div class=\"form-row\">
            ";
        // line 9
        $this->displayBlock('cms_form_newsletter_select_action', $context, $blocks);
        // line 33
        echo "        </div>

        <div class=\"form-row\">
            ";
        // line 36
        $this->displayBlock('cms_form_newsletter_input_email', $context, $blocks);
        // line 48
        echo "        </div>

        ";
        // line 50
        $this->displayBlock('cms_form_newsletter_additional_fields', $context, $blocks);
        // line 83
        echo "
        ";
        // line 84
        $this->displayBlock('cms_form_newsletter_captcha', $context, $blocks);
        // line 97
        echo "
        ";
        // line 98
        $this->displayBlock('cms_form_newsletter_privacy', $context, $blocks);
        // line 101
        echo "
        ";
        // line 102
        $this->displayBlock('cms_form_newsletter_required_fields_info', $context, $blocks);
        // line 105
        echo "
        ";
        // line 106
        $this->displayBlock('cms_form_newsletter_submit', $context, $blocks);
        // line 109
        echo "        </div>

        ";
        // line 111
        $this->displayBlock('cms_form_newsletter_hidden_fields', $context, $blocks);
        // line 120
        echo "    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_cms_form_newsletter_select_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_select_action"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_select_action"));

        // line 10
        echo "                <div class=\"form-group col-12\">
                    <label class=\"form-label\" for=\"newsletterAction\">
                        ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.labelActionSelect"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"), "html", null, true);
        echo "
                    </label>

                    <select name=\"option\"
                            id=\"newsletterAction\"
                            required=\"required\"
                            class=\"custom-select\"
                            data-form-field-toggle=\"true\"
                            data-form-field-toggle-target=\".js-field-toggle-newsletter-additional\"
                            data-form-field-toggle-value=\"subscribe\">
                        <option selected=\"selected\"
                                value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_constant("Shopware\\Storefront\\Controller\\FormController::SUBSCRIBE"), "html", null, true);
        echo "\">
                            ";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.subscribeOption"), "html", null, true);
        echo "
                        </option>

                        <option value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_constant("Shopware\\Storefront\\Controller\\FormController::UNSUBSCRIBE"), "html", null, true);
        echo "\">
                            ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.unsubscribeOption"), "html", null, true);
        echo "
                        </option>
                    </select>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_cms_form_newsletter_input_email($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_input_email"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_input_email"));

        // line 37
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig", "@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig", 37)->display(twig_array_merge($context, ["fieldName" => "email", "type" => "email", "required" => true, "additionalClass" => "col-12", "label" => "newsletter.labelMail", "placeholder" => "newsletter.placeholderMail"]));
        // line 47
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_cms_form_newsletter_additional_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_additional_fields"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_additional_fields"));

        // line 51
        echo "            <div class=\"js-field-toggle-newsletter-additional d-none\">
                <div class=\"form-row\">
                    ";
        // line 53
        $this->displayBlock('cms_form_newsletter_select_salutation', $context, $blocks);
        // line 58
        echo "
                    ";
        // line 59
        $this->displayBlock('cms_form_newsletter_input_first_name', $context, $blocks);
        // line 69
        echo "
                    ";
        // line 70
        $this->displayBlock('cms_form_newsletter_input_last_name', $context, $blocks);
        // line 80
        echo "                </div>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_cms_form_newsletter_select_salutation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_select_salutation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_select_salutation"));

        // line 54
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-select-salutation.html.twig", "@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig", 54)->display(twig_array_merge($context, ["additionalClass" => "col-md-4"]));
        // line 57
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_cms_form_newsletter_input_first_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_input_first_name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_input_first_name"));

        // line 60
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig", "@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig", 60)->display(twig_array_merge($context, ["fieldName" => "firstName", "additionalClass" => "col-md-4", "label" => "newsletter.labelFirstName", "placeholder" => "newsletter.placeholderFirstName"]));
        // line 68
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_cms_form_newsletter_input_last_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_input_last_name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_input_last_name"));

        // line 71
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig", "@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig", 71)->display(twig_array_merge($context, ["fieldName" => "lastName", "additionalClass" => "col-md-4", "label" => "newsletter.labelLastName", "placeholder" => "newsletter.placeholderLastName"]));
        // line 79
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_cms_form_newsletter_captcha($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_captcha"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_captcha"));

        // line 85
        echo "            ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\FeatureFlagExtension']->feature("FEATURE_NEXT_12455")) {
            // line 86
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/component/captcha/base.html.twig", "@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig", 86)->display(twig_array_merge($context, ["captchas" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.activeCaptchasV2"), "additionalClass" => "col-md-4", "formId" => "newsletter-form"]));
            // line 93
            echo "            ";
        } else {
            // line 94
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/component/captcha/base.html.twig", "@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig", 94)->display(twig_array_merge($context, ["captchas" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.activeCaptchas")]));
            // line 95
            echo "            ";
        }
        // line 96
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 98
    public function block_cms_form_newsletter_privacy($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_privacy"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_privacy"));

        // line 99
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-privacy.html.twig", "@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig", 99)->display($context);
        // line 100
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_cms_form_newsletter_required_fields_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_required_fields_info"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_required_fields_info"));

        // line 103
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-info-required.html.twig", "@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig", 103)->display($context);
        // line 104
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 106
    public function block_cms_form_newsletter_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_submit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_submit"));

        // line 107
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-submit.html.twig", "@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig", 107)->display($context);
        // line 108
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_cms_form_newsletter_hidden_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_hidden_fields"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_hidden_fields"));

        // line 112
        echo "            <div class=\"form-hidden-fields\">
                ";
        // line 113
        $this->displayBlock('cms_form_newsletter_csrf', $context, $blocks);
        // line 116
        echo "
                <input type=\"submit\" class=\"submit--hidden d-none\" />
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 113
    public function block_cms_form_newsletter_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_csrf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_csrf"));

        // line 114
        echo "                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder(($context["action"] ?? null));
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  469 => 114,  459 => 113,  446 => 116,  444 => 113,  441 => 112,  431 => 111,  421 => 108,  418 => 107,  408 => 106,  398 => 104,  395 => 103,  385 => 102,  375 => 100,  372 => 99,  362 => 98,  352 => 96,  349 => 95,  346 => 94,  343 => 93,  340 => 86,  337 => 85,  327 => 84,  317 => 79,  314 => 71,  304 => 70,  294 => 68,  291 => 60,  281 => 59,  271 => 57,  268 => 54,  258 => 53,  246 => 80,  244 => 70,  241 => 69,  239 => 59,  236 => 58,  234 => 53,  230 => 51,  220 => 50,  210 => 47,  207 => 37,  197 => 36,  182 => 28,  178 => 27,  172 => 24,  168 => 23,  152 => 12,  148 => 10,  138 => 9,  127 => 120,  125 => 111,  121 => 109,  119 => 106,  116 => 105,  114 => 102,  111 => 101,  109 => 98,  106 => 97,  104 => 84,  101 => 83,  99 => 50,  95 => 48,  93 => 36,  88 => 33,  86 => 9,  75 => 2,  56 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block cms_form_newsletter %}
    <form action=\"{{ path(action) }}\"
          method=\"post\"
          data-form-csrf-handler=\"true\"
          data-form-validation=\"true\">

        <div class=\"form-content\">
        <div class=\"form-row\">
            {% block cms_form_newsletter_select_action %}
                <div class=\"form-group col-12\">
                    <label class=\"form-label\" for=\"newsletterAction\">
                        {{ \"newsletter.labelActionSelect\"|trans }} {{ \"general.required\"|trans }}
                    </label>

                    <select name=\"option\"
                            id=\"newsletterAction\"
                            required=\"required\"
                            class=\"custom-select\"
                            data-form-field-toggle=\"true\"
                            data-form-field-toggle-target=\".js-field-toggle-newsletter-additional\"
                            data-form-field-toggle-value=\"subscribe\">
                        <option selected=\"selected\"
                                value=\"{{ constant('Shopware\\\\Storefront\\\\Controller\\\\FormController::SUBSCRIBE') }}\">
                            {{ \"newsletter.subscribeOption\"|trans }}
                        </option>

                        <option value=\"{{ constant('Shopware\\\\Storefront\\\\Controller\\\\FormController::UNSUBSCRIBE') }}\">
                            {{ \"newsletter.unsubscribeOption\"|trans }}
                        </option>
                    </select>
                </div>
            {% endblock %}
        </div>

        <div class=\"form-row\">
            {% block cms_form_newsletter_input_email %}
                {% sw_include '@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig'
                    with {
                    fieldName: 'email',
                    type: 'email',
                    required: true,
                    additionalClass: 'col-12',
                    label: 'newsletter.labelMail',
                    placeholder: 'newsletter.placeholderMail'
                }
                %}
            {% endblock %}
        </div>

        {% block cms_form_newsletter_additional_fields %}
            <div class=\"js-field-toggle-newsletter-additional d-none\">
                <div class=\"form-row\">
                    {% block cms_form_newsletter_select_salutation %}
                        {% sw_include '@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-select-salutation.html.twig'
                            with { additionalClass: 'col-md-4' }
                        %}
                    {% endblock %}

                    {% block cms_form_newsletter_input_first_name %}
                        {% sw_include '@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig'
                            with {
                            fieldName: 'firstName',
                            additionalClass: 'col-md-4',
                            label: 'newsletter.labelFirstName',
                            placeholder: 'newsletter.placeholderFirstName'
                        }
                        %}
                    {% endblock %}

                    {% block cms_form_newsletter_input_last_name %}
                        {% sw_include '@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig'
                            with {
                            fieldName: 'lastName',
                            additionalClass: 'col-md-4',
                            label: 'newsletter.labelLastName',
                            placeholder: 'newsletter.placeholderLastName'
                        }
                        %}
                    {% endblock %}
                </div>
            </div>
        {% endblock %}

        {% block cms_form_newsletter_captcha %}
            {% if feature('FEATURE_NEXT_12455') %}
                {% sw_include '@Storefront/storefront/component/captcha/base.html.twig'
                    with {
                    'captchas': config('core.basicInformation.activeCaptchasV2'),
                    'additionalClass' : 'col-md-4',
                    'formId': 'newsletter-form'
                    }
                %}
            {% else %}
                {% sw_include '@Storefront/storefront/component/captcha/base.html.twig' with { 'captchas': config('core.basicInformation.activeCaptchas') } %}
            {% endif %}
        {% endblock %}

        {% block cms_form_newsletter_privacy %}
            {% sw_include '@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-privacy.html.twig' %}
        {% endblock %}

        {% block cms_form_newsletter_required_fields_info %}
            {% sw_include '@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-info-required.html.twig' %}
        {% endblock %}

        {% block cms_form_newsletter_submit %}
            {% sw_include '@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-submit.html.twig' %}
        {% endblock %}
        </div>

        {% block cms_form_newsletter_hidden_fields %}
            <div class=\"form-hidden-fields\">
                {% block cms_form_newsletter_csrf %}
                    {{ sw_csrf(action) }}
                {% endblock %}

                <input type=\"submit\" class=\"submit--hidden d-none\" />
            </div>
        {% endblock %}
    </form>
{% endblock %}
", "@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-form/form-types/newsletter-form.html.twig");
    }
}
