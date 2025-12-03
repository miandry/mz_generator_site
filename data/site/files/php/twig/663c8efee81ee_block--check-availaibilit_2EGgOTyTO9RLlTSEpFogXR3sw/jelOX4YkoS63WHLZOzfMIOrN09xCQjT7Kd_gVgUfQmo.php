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

/* themes/custom/staydirect_template_1/templates/templating/block--check-availaibility--full.html.twig */
class __TwigTemplate_1881ed8006e0083f6ebf459a801e0798 extends \Twig\Template
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
        return $this->loadTemplate((Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::get_module_path("templating") . "/templates/misc/block.html.twig"), "themes/custom/staydirect_template_1/templates/templating/block--check-availaibility--full.html.twig", 1);
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
        $context["item_name"] = "block--staydirect-template-1-check-availaibility-full.html";
        echo " 
  ";
        // line 5
        $context["path_css"] = (("/themes/custom/staydirect_template_1/templates/templating/css/" . $this->sandbox->ensureToStringAllowed(($context["item_name"] ?? null), 5, $this->source)) . ".css");
        // line 6
        echo "  ";
        $context["css"] = twig_include($this->env, $context, $this->sandbox->ensureToStringAllowed(($context["path_css"] ?? null), 6, $this->source));
        echo " 
  ";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\templating\TwigExtension\DefaultTwigExtension::render_css_twig($this->sandbox->ensureToStringAllowed(($context["css"] ?? null), 7, $this->source), "block__staydirect_template_1_check_availaibility_full"), "html", null, true);
        echo "
";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("staydirect_template_1/booking-details"), "html", null, true);
        echo "
";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("staydirect_template_1/spinner-form"), "html", null, true);
        echo "

";
        // line 11
        $context["c"] = Drupal\entity_parser\TwigExtension\DefaultTwigExtension::block_parser_twig($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 11, $this->source));
        // line 12
        echo "                

            <form action=\"/booking\" >
    <div class=\"container container-book-form\">
      <div class=\"row row-and\" >
        <div class=\"col-md-9 auto\">
          <div class=\"row row-and\">
            <div class=\"col-md-9 container-book-left\">
              <div class=\"row row-and\">
                <div class=\"col-sm-12 content-book-left\">
                   <input id=\"datepickerStart\" value=\"0\"  type=\"hidden\" name=\"start\" />
                   <input id=\"datepickerEnd\" value=\"0\"  type=\"hidden\" name=\"end\" />  
                   <input id=\"datepickerVal\" value=\"0\" class=\"Dym form-check-input\" type=\"hidden\" name=\"booking-range\" />
                   <input id=\"datepicker\" name=\"booking-range-date\"  required=\"\" placeholder=\"Select your dates   >\"  style=\"width: 100%\"/>
             
                </div>
              </div>
            </div>
    
            <div class=\"col-md-3 container-book-right\" >
              <button type=\"submit\"  style=\" 
              color: #fff !important;
              border: solid 1px #fff !important;
              padding: 15px 10px !important;
              border-radius: 13px !important;
              background-color: transparent;
            \">Book Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
                  <form>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/staydirect_template_1/templates/templating/block--check-availaibility--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 12,  78 => 11,  73 => 9,  69 => 8,  65 => 7,  60 => 6,  58 => 5,  54 => 4,  51 => 3,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends get_module_path('templating') ~ \"/templates/misc/block.html.twig\" %}
{% block templating_content %}

  {% set item_name = 'block--staydirect-template-1-check-availaibility-full.html' %} 
  {% set path_css = '/themes/custom/staydirect_template_1/templates/templating/css/'~ item_name ~'.css' %}
  {% set css = include(path_css) %} 
  {{render_css(css,'block__staydirect_template_1_check_availaibility_full')}}
{{ attach_library('staydirect_template_1/booking-details') }}
{{ attach_library('staydirect_template_1/spinner-form') }}

{% set c = block_parser(content) %}
                

            <form action=\"/booking\" >
    <div class=\"container container-book-form\">
      <div class=\"row row-and\" >
        <div class=\"col-md-9 auto\">
          <div class=\"row row-and\">
            <div class=\"col-md-9 container-book-left\">
              <div class=\"row row-and\">
                <div class=\"col-sm-12 content-book-left\">
                   <input id=\"datepickerStart\" value=\"0\"  type=\"hidden\" name=\"start\" />
                   <input id=\"datepickerEnd\" value=\"0\"  type=\"hidden\" name=\"end\" />  
                   <input id=\"datepickerVal\" value=\"0\" class=\"Dym form-check-input\" type=\"hidden\" name=\"booking-range\" />
                   <input id=\"datepicker\" name=\"booking-range-date\"  required=\"\" placeholder=\"Select your dates   >\"  style=\"width: 100%\"/>
             
                </div>
              </div>
            </div>
    
            <div class=\"col-md-3 container-book-right\" >
              <button type=\"submit\"  style=\" 
              color: #fff !important;
              border: solid 1px #fff !important;
              padding: 15px 10px !important;
              border-radius: 13px !important;
              background-color: transparent;
            \">Book Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
                  <form>

{% endblock %}
", "themes/custom/staydirect_template_1/templates/templating/block--check-availaibility--full.html.twig", "/Applications/MAMP/htdocs/global_9/themes/custom/staydirect_template_1/templates/templating/block--check-availaibility--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4);
        static $filters = array("escape" => 7);
        static $functions = array("include" => 6, "render_css" => 7, "attach_library" => 8, "block_parser" => 11, "get_module_path" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape'],
                ['include', 'render_css', 'attach_library', 'block_parser', 'get_module_path']
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
