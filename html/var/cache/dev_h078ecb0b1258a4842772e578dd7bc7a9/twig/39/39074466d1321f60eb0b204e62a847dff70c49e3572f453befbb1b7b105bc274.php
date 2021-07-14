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

/* @Storefront/storefront/component/captcha/base.html.twig */
class __TwigTemplate_7cb9a4d3f8633320f030b8d09da47893980eae729b4592382761b4d527e75a81 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_captcha_base' => [$this, 'block_component_captcha_base'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/captcha/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/captcha/base.html.twig"));

        // line 1
        $this->displayBlock('component_captcha_base', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_captcha_base($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_captcha_base"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_captcha_base"));

        // line 2
        echo "    ";
        if ((array_key_exists("captchas", $context) &&  !twig_test_empty(($context["captchas"] ?? null)))) {
            // line 3
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
                // line 4
                echo "            ";
                if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\FeatureFlagExtension']->feature("FEATURE_NEXT_12455")) {
                    // line 5
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, $context["captcha"], "isActive", [], "any", false, false, false, 5)) {
                        // line 6
                        echo "                    ";
                        ((function () use ($context, $blocks) {
                            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                            $includeTemplate = $finder->find($finder->getTemplateName(sprintf("@Storefront/storefront/component/captcha/%s.html.twig", twig_get_attribute($this->env, $this->source, $context["captcha"], "name", [], "any", false, false, false, 6))));

                            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/captcha/base.html.twig", 6);
                        })())->display(twig_array_merge($context, ["additionalClass" =>                         // line 8
($context["additionalClass"] ?? null), "formId" =>                         // line 9
($context["formId"] ?? null)]));
                        // line 12
                        echo "                ";
                    }
                    // line 13
                    echo "            ";
                } else {
                    // line 14
                    echo "                ";
                    ((function () use ($context, $blocks) {
                        $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                        $includeTemplate = $finder->find($finder->getTemplateName(sprintf("@Storefront/storefront/component/captcha/%s.html.twig", $context["captcha"])));

                        return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/captcha/base.html.twig", 14);
                    })())->display($context);
                    // line 15
                    echo "            ";
                }
                // line 16
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/captcha/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  133 => 17,  119 => 16,  116 => 15,  107 => 14,  104 => 13,  101 => 12,  99 => 9,  98 => 8,  90 => 6,  87 => 5,  84 => 4,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_captcha_base %}
    {% if captchas is defined and captchas is not empty %}
        {% for captcha in captchas %}
            {% if feature('FEATURE_NEXT_12455') %}
                {% if captcha.isActive %}
                    {% sw_include '@Storefront/storefront/component/captcha/%s.html.twig'|format(captcha.name)
                        with {
                        'additionalClass': additionalClass,
                        'formId': formId
                        }
                    %}
                {% endif %}
            {% else %}
                {% sw_include '@Storefront/storefront/component/captcha/%s.html.twig'|format(captcha) %}
            {% endif %}
        {% endfor %}
    {% endif %}
{% endblock %}
", "@Storefront/storefront/component/captcha/base.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/captcha/base.html.twig");
    }
}
