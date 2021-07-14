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

/* @SwagQuickstartTheme/storefront/page/product-detail/tabs.html.twig */
class __TwigTemplate_36aca86647ed25923dbc196d591b59da4a2c0490bad090fcc83650178509b2ef extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_product_detail_tabs_navigation_description' => [$this, 'block_page_product_detail_tabs_navigation_description'],
            'page_product_detail_tabs_content_description' => [$this, 'block_page_product_detail_tabs_content_description'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/page/product-detail/tabs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SwagQuickstartTheme/storefront/page/product-detail/tabs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SwagQuickstartTheme/storefront/page/product-detail/tabs.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/page/product-detail/tabs.html.twig", "@SwagQuickstartTheme/storefront/page/product-detail/tabs.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_product_detail_tabs_navigation_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs_navigation_description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs_navigation_description"));

        // line 3
        echo " ";
        $this->displayParentBlock("page_product_detail_tabs_navigation_description", $context, $blocks);
        echo "
                            <li class=\"nav-item\">
                                <a class=\"nav-link\"
                                   id=\"quickstart-tab\"
                                   data-toggle=\"tab\"
                                   data-offcanvas-tabs=\"true\"
                                   href=\"#quickstart-tab-pane\"
                                   role=\"tab\"
                                   aria-controls=\"quickstart-tab-pane\"
                                   aria-selected=\"true\">
                                   
                                    <span class=\"product-detail-tab-navigation-icon\">
                                        ";
        // line 15
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@SwagQuickstartTheme/storefront/page/product-detail/tabs.html.twig", 15);
        })())->display(twig_array_merge($context, ["pack" => "solid", "name" => "arrow-medium-right"]));
        // line 16
        echo "                                    </span>
                                    Quickstart
                     
                                </a>
                            </li>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_page_product_detail_tabs_content_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs_content_description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs_content_description"));

        // line 25
        echo "  ";
        $this->displayParentBlock("page_product_detail_tabs_content_description", $context, $blocks);
        echo "
<div class=\"tab-pane fade show\"
 id=\"quickstart-tab-pane\"
  role=\"tabpanel\"
 aria-labelledby=\"quickstart-tab\">
 <p>Hello This is the description tab</p>
   </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SwagQuickstartTheme/storefront/page/product-detail/tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 25,  107 => 24,  92 => 16,  84 => 15,  68 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/page/product-detail/tabs.html.twig' %}
 {% block page_product_detail_tabs_navigation_description %}
 {{parent()}}
                            <li class=\"nav-item\">
                                <a class=\"nav-link\"
                                   id=\"quickstart-tab\"
                                   data-toggle=\"tab\"
                                   data-offcanvas-tabs=\"true\"
                                   href=\"#quickstart-tab-pane\"
                                   role=\"tab\"
                                   aria-controls=\"quickstart-tab-pane\"
                                   aria-selected=\"true\">
                                   
                                    <span class=\"product-detail-tab-navigation-icon\">
                                        {% sw_icon 'arrow-medium-right' style {'pack':'solid'} %}
                                    </span>
                                    Quickstart
                     
                                </a>
                            </li>
                        {% endblock %}


 {% block page_product_detail_tabs_content_description %}
  {{parent()}}
<div class=\"tab-pane fade show\"
 id=\"quickstart-tab-pane\"
  role=\"tabpanel\"
 aria-labelledby=\"quickstart-tab\">
 <p>Hello This is the description tab</p>
   </div>
{% endblock %}", "@SwagQuickstartTheme/storefront/page/product-detail/tabs.html.twig", "/var/www/html/custom/plugins/SwagQuickstartTheme/src/Resources/views/storefront/page/product-detail/tabs.html.twig");
    }
}
