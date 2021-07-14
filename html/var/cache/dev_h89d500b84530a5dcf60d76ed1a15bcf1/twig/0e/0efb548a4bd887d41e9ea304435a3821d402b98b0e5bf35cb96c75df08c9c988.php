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

/* @Storefront/storefront/page/product-detail/review/review-item.html.twig */
class __TwigTemplate_fd163fcb60458e0c08afe17892cff0ec1ad19ac95e1e2de472b1ececdeee224c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_review_item' => [$this, 'block_page_product_detail_review_item'],
            'page_product_detail_review_item_meta_published' => [$this, 'block_page_product_detail_review_item_meta_published'],
            'page_product_detail_review_item_meta_title' => [$this, 'block_page_product_detail_review_item_meta_title'],
            'page_product_detail_review_item_meta_author' => [$this, 'block_page_product_detail_review_item_meta_author'],
            'page_product_detail_review_item_info' => [$this, 'block_page_product_detail_review_item_info'],
            'page_product_detail_review_item_info_alert' => [$this, 'block_page_product_detail_review_item_info_alert'],
            'page_product_detail_review_item_info_date' => [$this, 'block_page_product_detail_review_item_info_date'],
            'page_product_detail_review_item_info_points' => [$this, 'block_page_product_detail_review_item_info_points'],
            'page_product_detail_review_item_title' => [$this, 'block_page_product_detail_review_item_title'],
            'page_product_detail_review_item_info_verify' => [$this, 'block_page_product_detail_review_item_info_verify'],
            'page_product_detail_review_item_content' => [$this, 'block_page_product_detail_review_item_content'],
            'page_product_detail_review_item_comment' => [$this, 'block_page_product_detail_review_item_comment'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/review/review-item.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/review/review-item.html.twig"));

        // line 1
        $this->displayBlock('page_product_detail_review_item', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_product_detail_review_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_item"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_item"));

        // line 2
        echo "    ";
        // line 3
        echo "    ";
        $context["reviewVerifcation"] = 0;
        // line 4
        echo "
    <div class=\"product-detail-review-item\"
         itemprop=\"review\"
         itemscope
         itemtype=\"https://schema.org/Review\">
        ";
        // line 9
        $this->displayBlock('page_product_detail_review_item_meta_published', $context, $blocks);
        // line 12
        echo "
        ";
        // line 13
        $this->displayBlock('page_product_detail_review_item_meta_title', $context, $blocks);
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock('page_product_detail_review_item_meta_author', $context, $blocks);
        // line 20
        echo "
        ";
        // line 21
        $this->displayBlock('page_product_detail_review_item_info', $context, $blocks);
        // line 72
        echo "
        ";
        // line 73
        $this->displayBlock('page_product_detail_review_item_content', $context, $blocks);
        // line 78
        echo "
        ";
        // line 79
        $this->displayBlock('page_product_detail_review_item_comment', $context, $blocks);
        // line 90
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_page_product_detail_review_item_meta_published($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_item_meta_published"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_item_meta_published"));

        // line 10
        echo "            <meta itemprop=\"datePublished\" content=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "createdAt", [], "any", false, false, false, 10)), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_page_product_detail_review_item_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_item_meta_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_item_meta_title"));

        // line 14
        echo "            <meta itemprop=\"name\" content=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_page_product_detail_review_item_meta_author($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_item_meta_author"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_item_meta_author"));

        // line 18
        echo "            <meta itemprop=\"author\" content=\"hidden\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_page_product_detail_review_item_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_item_info"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_item_info"));

        // line 22
        echo "            <div class=\"row product-detail-review-item-info\">
                ";
        // line 23
        $this->displayBlock('page_product_detail_review_item_info_alert', $context, $blocks);
        // line 33
        echo "
                ";
        // line 34
        $this->displayBlock('page_product_detail_review_item_info_date', $context, $blocks);
        // line 39
        echo "
                ";
        // line 40
        $this->displayBlock('page_product_detail_review_item_info_points', $context, $blocks);
        // line 47
        echo "
                ";
        // line 48
        $this->displayBlock('page_product_detail_review_item_title', $context, $blocks);
        // line 55
        echo "
                ";
        // line 56
        $this->displayBlock('page_product_detail_review_item_info_verify', $context, $blocks);
        // line 70
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_page_product_detail_review_item_info_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_item_info_alert"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_item_info_alert"));

        // line 24
        echo "                    ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "status", [], "any", false, false, false, 24), false))) {
            // line 25
            echo "                        <div class=\"col-12 product-detail-review-item-hint\">
                            ";
            // line 26
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/product-detail/review/review-item.html.twig", 26)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewNotPublicYetAlert"))]));
            // line 30
            echo "                        </div>
                    ";
        }
        // line 32
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_page_product_detail_review_item_info_date($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_item_info_date"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_item_info_date"));

        // line 35
        echo "                    <div class=\"col-12 product-detail-review-item-date\">
                        <p><small>";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "createdAt", [], "any", false, false, false, 36)), "html", null, true);
        echo "</small></p>
                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_page_product_detail_review_item_info_points($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_item_info_points"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_item_info_points"));

        // line 41
        echo "                    <div class=\"col-md-auto product-detail-review-item-points\">
                        ";
        // line 42
        $this->loadTemplate("@Storefront/storefront/component/review/rating.html.twig", "@Storefront/storefront/page/product-detail/review/review-item.html.twig", 42)->display(twig_array_merge($context, ["points" => twig_get_attribute($this->env, $this->source,         // line 43
($context["review"] ?? null), "points", [], "any", false, false, false, 43)]));
        // line 45
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_page_product_detail_review_item_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_item_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_item_title"));

        // line 49
        echo "                    <div class=\"col-md-auto product-detail-review-item-title\">
                        <p class=\"h5\">
                            ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "title", [], "any", false, false, false, 51), "html", null, true);
        echo "
                        </p>
                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_page_product_detail_review_item_info_verify($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_item_info_verify"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_item_info_verify"));

        // line 57
        echo "                    <div class=\"col product-detail-review-item-verify\">
                        ";
        // line 58
        if ((0 === twig_compare(($context["reviewVerifcation"] ?? null), 1))) {
            // line 59
            echo "                            <a data-toggle=\"tooltip\"
                               data-placement=\"bottom\"
                               title=\"";
            // line 61
            echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewVerifiedItemTooltip")), "html", null, true);
            echo "\">
                                ";
            // line 62
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/product-detail/review/review-item.html.twig", 62);
            })())->display(twig_array_merge($context, ["color" => "primary", "size" => "sm", "name" => "checkmark-circle"]));
            // line 66
            echo "                            </a>
                        ";
        }
        // line 68
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_page_product_detail_review_item_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_item_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_item_content"));

        // line 74
        echo "            <p class=\"product-detail-review-item-content\" itemprop=\"description\">
                ";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "content", [], "any", false, false, false, 75), "html", null, true);
        echo "
            </p>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_page_product_detail_review_item_comment($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_item_comment"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_item_comment"));

        // line 80
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "comment", [], "any", false, false, false, 80)) {
            // line 81
            echo "                <div class=\"product-detail-review-item-comment\">
                    <blockquote class=\"blockquote\">
                        <footer class=\"blockquote-footer\">
                            ";
            // line 84
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewCommentLabel"));
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "comment", [], "any", false, false, false, 84), "html", null, true);
            echo "
                        </footer>
                    </blockquote>
                </div>
            ";
        }
        // line 89
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/review/review-item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  449 => 89,  440 => 84,  435 => 81,  432 => 80,  422 => 79,  409 => 75,  406 => 74,  396 => 73,  385 => 68,  381 => 66,  373 => 62,  369 => 61,  365 => 59,  363 => 58,  360 => 57,  350 => 56,  336 => 51,  332 => 49,  322 => 48,  311 => 45,  309 => 43,  308 => 42,  305 => 41,  295 => 40,  282 => 36,  279 => 35,  269 => 34,  259 => 32,  255 => 30,  253 => 26,  250 => 25,  247 => 24,  237 => 23,  226 => 70,  224 => 56,  221 => 55,  219 => 48,  216 => 47,  214 => 40,  211 => 39,  209 => 34,  206 => 33,  204 => 23,  201 => 22,  191 => 21,  180 => 18,  170 => 17,  157 => 14,  147 => 13,  134 => 10,  124 => 9,  113 => 90,  111 => 79,  108 => 78,  106 => 73,  103 => 72,  101 => 21,  98 => 20,  96 => 17,  93 => 16,  91 => 13,  88 => 12,  86 => 9,  79 => 4,  76 => 3,  74 => 2,  55 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_product_detail_review_item %}
    {# TODO: replace verification badge #}
    {% set reviewVerifcation = 0 %}

    <div class=\"product-detail-review-item\"
         itemprop=\"review\"
         itemscope
         itemtype=\"https://schema.org/Review\">
        {% block page_product_detail_review_item_meta_published %}
            <meta itemprop=\"datePublished\" content=\"{{ review.createdAt|date }}\">
        {% endblock %}

        {% block page_product_detail_review_item_meta_title %}
            <meta itemprop=\"name\" content=\"{{ review.title }}\">
        {% endblock %}

        {% block page_product_detail_review_item_meta_author %}
            <meta itemprop=\"author\" content=\"hidden\">
        {% endblock %}

        {% block page_product_detail_review_item_info %}
            <div class=\"row product-detail-review-item-info\">
                {% block page_product_detail_review_item_info_alert %}
                    {% if review.status == false %}
                        <div class=\"col-12 product-detail-review-item-hint\">
                            {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                                type: \"info\",
                                content: \"detail.reviewNotPublicYetAlert\"|trans|sw_sanitize
                                } %}
                        </div>
                    {% endif %}
                {% endblock %}

                {% block page_product_detail_review_item_info_date %}
                    <div class=\"col-12 product-detail-review-item-date\">
                        <p><small>{{ review.createdAt|date }}</small></p>
                    </div>
                {% endblock %}

                {% block page_product_detail_review_item_info_points %}
                    <div class=\"col-md-auto product-detail-review-item-points\">
                        {% sw_include '@Storefront/storefront/component/review/rating.html.twig' with {
                            points: review.points
                        } %}
                    </div>
                {% endblock %}

                {% block page_product_detail_review_item_title %}
                    <div class=\"col-md-auto product-detail-review-item-title\">
                        <p class=\"h5\">
                            {{ review.title }}
                        </p>
                    </div>
                {% endblock %}

                {% block page_product_detail_review_item_info_verify %}
                    <div class=\"col product-detail-review-item-verify\">
                        {% if reviewVerifcation == 1 %}
                            <a data-toggle=\"tooltip\"
                               data-placement=\"bottom\"
                               title=\"{{ \"detail.reviewVerifiedItemTooltip\"|trans|striptags }}\">
                                {% sw_icon 'checkmark-circle' style {
                                    'color': 'primary',
                                    'size': 'sm'
                                } %}
                            </a>
                        {% endif %}
                    </div>
                {% endblock %}
            </div>
        {% endblock %}

        {% block page_product_detail_review_item_content %}
            <p class=\"product-detail-review-item-content\" itemprop=\"description\">
                {{ review.content }}
            </p>
        {% endblock %}

        {% block page_product_detail_review_item_comment %}
            {% if review.comment %}
                <div class=\"product-detail-review-item-comment\">
                    <blockquote class=\"blockquote\">
                        <footer class=\"blockquote-footer\">
                            {{ \"detail.reviewCommentLabel\"|trans|sw_sanitize }}{{ review.comment }}
                        </footer>
                    </blockquote>
                </div>
            {% endif %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/page/product-detail/review/review-item.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/review/review-item.html.twig");
    }
}
