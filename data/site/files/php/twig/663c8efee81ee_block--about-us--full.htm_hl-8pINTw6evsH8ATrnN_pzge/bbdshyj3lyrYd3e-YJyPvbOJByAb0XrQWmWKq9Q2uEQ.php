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

/* themes/custom/staydirect_template_1/templates/templating/block--about-us--full.html.twig */
class __TwigTemplate_2d99eb968ad6d4fc77a8b8527af5cd8e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'templating_content' => [$this, 'block_templating_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::get_module_path("templating") . "/templates/misc/block.html.twig"), "themes/custom/staydirect_template_1/templates/templating/block--about-us--full.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_templating_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
    ";
        // line 4
        $context["item_name"] = "block--staydirect-template-1-about-us-full.html";
        echo " 
    ";
        // line 5
        $context["path_css"] = (("/themes/custom/staydirect_template_1/templates/templating/css/" . $this->sandbox->ensureToStringAllowed(($context["item_name"] ?? null), 5, $this->source)) . ".css");
        // line 6
        echo "    ";
        $context["css"] = twig_include($this->env, $context, $this->sandbox->ensureToStringAllowed(($context["path_css"] ?? null), 6, $this->source));
        echo " 
    ";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\templating\TwigExtension\DefaultTwigExtension::render_css_twig($this->sandbox->ensureToStringAllowed(($context["css"] ?? null), 7, $this->source), "block__staydirect_template_1_about_us_full"), "html", null, true);
        echo "

    ";
        // line 9
        $context["c"] = Drupal\entity_parser\TwigExtension\DefaultTwigExtension::block_parser_twig($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 9, $this->source));
        // line 10
        echo "    ";
        $context["links"] = (($__internal_compile_0 = ($context["c"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["field_link1"] ?? null) : null);
        // line 11
        echo "
    <div class=\"container confort\">
    <div class=\"row row-and row-confort\">
        <div class=\"col-md-6 confort-left\">
            <div class=\"content-confort-left\">
            <div class=\"bg-confort-right\" style=\"background: url(";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = (($__internal_compile_2 = ($context["c"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["field_image1"] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["image"] ?? null) : null), "url", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo ") no-repeat, url(";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = (($__internal_compile_4 = ($context["c"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["field_image"] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["image"] ?? null) : null), "url", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo ") no-repeat;height: 100%;background-position: right bottom, bottom left;\">
            </div>
            </div>
        </div>
        <div class=\"col-md-6 confort-right\">
        <div class=\"content-confort-right\">
            <h2 class=\"display-5 fw-normal sub-title\">";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "field_title", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "</h2>
            <h1 class=\"title\">";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "field_subtitle", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "</h1>
            <p>
            ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = (($__internal_compile_6 = ($context["c"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["body"] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null), "value", [], "any", false, false, true, 25), 25, $this->source), ["<p>" => "", "</p>" => ""]), "html", null, true);
        echo "
            </p>
            <p class=\"no-padding no-margin\" style=\"display:none\">
                <a class=\"btn night\" href=\"";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::base_url(), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["c"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["field_link1"] ?? null) : null), "url", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = ($context["c"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["field_link1"] ?? null) : null), "title", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "</a>
            </p>
        </div>
        </div>
    </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/staydirect_template_1/templates/templating/block--about-us--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 28,  102 => 25,  97 => 23,  93 => 22,  82 => 16,  75 => 11,  72 => 10,  70 => 9,  65 => 7,  60 => 6,  58 => 5,  54 => 4,  51 => 3,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends get_module_path('templating') ~ \"/templates/misc/block.html.twig\" %}
{% block templating_content %}

    {% set item_name = 'block--staydirect-template-1-about-us-full.html' %} 
    {% set path_css = '/themes/custom/staydirect_template_1/templates/templating/css/'~ item_name ~'.css' %}
    {% set css = include(path_css) %} 
    {{render_css(css,'block__staydirect_template_1_about_us_full')}}

    {% set c = block_parser(content) %}
    {% set links= c['field_link1'] %}

    <div class=\"container confort\">
    <div class=\"row row-and row-confort\">
        <div class=\"col-md-6 confort-left\">
            <div class=\"content-confort-left\">
            <div class=\"bg-confort-right\" style=\"background: url({{c['field_image1']['image'].url}}) no-repeat, url({{c['field_image']['image'].url}}) no-repeat;height: 100%;background-position: right bottom, bottom left;\">
            </div>
            </div>
        </div>
        <div class=\"col-md-6 confort-right\">
        <div class=\"content-confort-right\">
            <h2 class=\"display-5 fw-normal sub-title\">{{c.field_title}}</h2>
            <h1 class=\"title\">{{c.field_subtitle}}</h1>
            <p>
            {{c['body'][0].value|replace({\"<p>\": \"\", '</p>': \"\"})}}
            </p>
            <p class=\"no-padding no-margin\" style=\"display:none\">
                <a class=\"btn night\" href=\"{{base_url()}}{{c['field_link1'].url}}\">{{c['field_link1'].title}}</a>
            </p>
        </div>
        </div>
    </div>
    </div>

{% endblock %}", "themes/custom/staydirect_template_1/templates/templating/block--about-us--full.html.twig", "/Applications/MAMP/htdocs/global_9/themes/custom/staydirect_template_1/templates/templating/block--about-us--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4);
        static $filters = array("escape" => 7, "replace" => 25);
        static $functions = array("include" => 6, "render_css" => 7, "block_parser" => 9, "base_url" => 28, "get_module_path" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 'replace'],
                ['include', 'render_css', 'block_parser', 'base_url', 'get_module_path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
