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

/* themes/custom/staydirect_template_1/templates/templating/block--footer--full.html.twig */
class __TwigTemplate_bac1f328277bbe603a9a639c06089434 extends \Twig\Template
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
        return $this->loadTemplate((Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::get_module_path("templating") . "/templates/misc/block.html.twig"), "themes/custom/staydirect_template_1/templates/templating/block--footer--full.html.twig", 1);
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
        $context["item_name"] = "block--staydirect-template-1-footer-full.html";
        echo " 
";
        // line 5
        $context["path_css"] = (("/themes/custom/staydirect_template_1/templates/templating/css/" . $this->sandbox->ensureToStringAllowed(($context["item_name"] ?? null), 5, $this->source)) . ".css");
        // line 6
        $context["css"] = twig_include($this->env, $context, $this->sandbox->ensureToStringAllowed(($context["path_css"] ?? null), 6, $this->source));
        echo " 
";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\templating\TwigExtension\DefaultTwigExtension::render_css_twig($this->sandbox->ensureToStringAllowed(($context["css"] ?? null), 7, $this->source), "block__staydirect_template_1_footer_full"), "html", null, true);
        echo "

";
        // line 9
        $context["c"] = Drupal\entity_parser\TwigExtension\DefaultTwigExtension::block_parser_twig($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 9, $this->source));
        // line 10
        $context["paragraphs"] = (($__internal_compile_0 = ($context["c"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["field_paragraphs"] ?? null) : null);
        // line 11
        $context["paragraphs_length"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["paragraphs"] ?? null), 11, $this->source));
        // line 12
        echo "
<footer>
  <div class=\"footer-top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-4 footer-left\">
          <h3>
            ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "field_text", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "
          </h3  >
          <p>
            ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "field_textlong", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "
          </p>
        </div>
        <div class=\"col-md-4 col-sm-6 footer-center\">
          <div class=\"content-footer-center\">
            <h3>";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "field_title", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "</h3>
            <p>
              ";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "field_value_text1", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "
            </p>
          </div>
        </div>
        <div class=\"col-md-4 col-sm-6 footer-right\">
          <div class=\"content-footer-right\">
            <h3>Follow us.</h3>
            <p>
              ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (($context["paragraphs_length"] ?? null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
            // line 38
            echo "                  <a href=\" ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = (($__internal_compile_2 = ($context["paragraphs"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["size"]] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["field_link"] ?? null) : null), "url", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "\">
                    <i class=\"fab fa-instagram\">
                      <img src=\"";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = (($__internal_compile_4 = (($__internal_compile_5 = ($context["paragraphs"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["size"]] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["field_icon"] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["image"] ?? null) : null), "url", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "\" alt=\"\" style=\"width: 25px; height: 25px;\">
                    </i>
                    ";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = (($__internal_compile_7 = ($context["paragraphs"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[$context["size"]] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["field_link"] ?? null) : null), "title", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "
                  </a> 
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo " 
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"footer-bottom col-lg-12\">
    <div class=\"content-footer-bottom\">
      <div class=\"line\">

      </div>
      <p>
        ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "field_text1", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "
      </p>
    </div>
  </div>

</footer>

<div id=\"nav-to-top-ands\" class=\"nav-to-top-and nav-to-top-resp active\">
  <!-- 
  <svg width=\"20\" height=\"20\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\">
      <path d=\"M11 2.206l-6.235 7.528-.765-.645 7.521-9 7.479 9-.764.646-6.236-7.53v21.884h-1v-21.883z\"/>
  </svg>
  -->
  <svg width=\"20\" height=\"20\" viewBox=\"-8.5 0 32 32\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\">
    <title>angle-double-top</title>
    <path d=\"M13.72 17.68c-0.2 0-0.44-0.080-0.6-0.24l-5.84-5.84-5.84 5.84c-0.32 0.32-0.84 0.32-1.2 0-0.32-0.32-0.32-0.84 0-1.2l6.44-6.44c0.32-0.32 0.88-0.32 1.2 0l6.44 6.44c0.32 0.32 0.32 0.84 0 1.2-0.16 0.16-0.4 0.24-0.6 0.24zM13.72 22.44c-0.2 0-0.44-0.080-0.6-0.24l-5.84-5.88-5.84 5.88c-0.32 0.32-0.84 0.32-1.2 0-0.32-0.32-0.32-0.84 0-1.2l6.44-6.44c0.32-0.32 0.88-0.32 1.2 0l6.44 6.44c0.32 0.32 0.32 0.84 0 1.2-0.16 0.16-0.4 0.24-0.6 0.24z\"></path>
  </svg>
</div>

<script>
  if( document.body.contains(  document.getElementById(\"nav-to-top-ands\") ) ) {
      let nav_to_top =  document.querySelector(\"#nav-to-top-ands\");
      window.addEventListener('scroll', function() {
          if( window.pageYOffset >= 800 ) {
              nav_to_top.classList.add(\"active\");
          }else {
              nav_to_top.classList.remove(\"active\");
          }
      });
    nav_to_top.addEventListener(\"click\", function(){
        window.scrollTo(0, 0);
    })
  }
</script>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/staydirect_template_1/templates/templating/block--footer--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 57,  138 => 44,  129 => 42,  124 => 40,  118 => 38,  114 => 37,  103 => 29,  98 => 27,  90 => 22,  84 => 19,  75 => 12,  73 => 11,  71 => 10,  69 => 9,  64 => 7,  60 => 6,  58 => 5,  54 => 4,  51 => 3,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends get_module_path('templating') ~ \"/templates/misc/block.html.twig\" %}
{% block templating_content %}

{% set item_name = 'block--staydirect-template-1-footer-full.html' %} 
{% set path_css = '/themes/custom/staydirect_template_1/templates/templating/css/'~ item_name ~'.css' %}
{% set css = include(path_css) %} 
{{render_css(css,'block__staydirect_template_1_footer_full')}}

{% set c = block_parser(content) %}
{% set paragraphs = c['field_paragraphs'] %}
{% set paragraphs_length = paragraphs|length %}

<footer>
  <div class=\"footer-top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-4 footer-left\">
          <h3>
            {{c.field_text}}
          </h3  >
          <p>
            {{c.field_textlong}}
          </p>
        </div>
        <div class=\"col-md-4 col-sm-6 footer-center\">
          <div class=\"content-footer-center\">
            <h3>{{c.field_title}}</h3>
            <p>
              {{c.field_value_text1}}
            </p>
          </div>
        </div>
        <div class=\"col-md-4 col-sm-6 footer-right\">
          <div class=\"content-footer-right\">
            <h3>Follow us.</h3>
            <p>
              {% for size in 0 .. (paragraphs_length - 1) %}
                  <a href=\" {{paragraphs[size]['field_link'].url}}\">
                    <i class=\"fab fa-instagram\">
                      <img src=\"{{paragraphs[size]['field_icon']['image'].url}}\" alt=\"\" style=\"width: 25px; height: 25px;\">
                    </i>
                    {{paragraphs[size]['field_link'].title}}
                  </a> 
              {% endfor %} 
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"footer-bottom col-lg-12\">
    <div class=\"content-footer-bottom\">
      <div class=\"line\">

      </div>
      <p>
        {{c.field_text1}}
      </p>
    </div>
  </div>

</footer>

<div id=\"nav-to-top-ands\" class=\"nav-to-top-and nav-to-top-resp active\">
  <!-- 
  <svg width=\"20\" height=\"20\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\">
      <path d=\"M11 2.206l-6.235 7.528-.765-.645 7.521-9 7.479 9-.764.646-6.236-7.53v21.884h-1v-21.883z\"/>
  </svg>
  -->
  <svg width=\"20\" height=\"20\" viewBox=\"-8.5 0 32 32\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\">
    <title>angle-double-top</title>
    <path d=\"M13.72 17.68c-0.2 0-0.44-0.080-0.6-0.24l-5.84-5.84-5.84 5.84c-0.32 0.32-0.84 0.32-1.2 0-0.32-0.32-0.32-0.84 0-1.2l6.44-6.44c0.32-0.32 0.88-0.32 1.2 0l6.44 6.44c0.32 0.32 0.32 0.84 0 1.2-0.16 0.16-0.4 0.24-0.6 0.24zM13.72 22.44c-0.2 0-0.44-0.080-0.6-0.24l-5.84-5.88-5.84 5.88c-0.32 0.32-0.84 0.32-1.2 0-0.32-0.32-0.32-0.84 0-1.2l6.44-6.44c0.32-0.32 0.88-0.32 1.2 0l6.44 6.44c0.32 0.32 0.32 0.84 0 1.2-0.16 0.16-0.4 0.24-0.6 0.24z\"></path>
  </svg>
</div>

<script>
  if( document.body.contains(  document.getElementById(\"nav-to-top-ands\") ) ) {
      let nav_to_top =  document.querySelector(\"#nav-to-top-ands\");
      window.addEventListener('scroll', function() {
          if( window.pageYOffset >= 800 ) {
              nav_to_top.classList.add(\"active\");
          }else {
              nav_to_top.classList.remove(\"active\");
          }
      });
    nav_to_top.addEventListener(\"click\", function(){
        window.scrollTo(0, 0);
    })
  }
</script>

{% endblock %}", "themes/custom/staydirect_template_1/templates/templating/block--footer--full.html.twig", "/Applications/MAMP/htdocs/global_9/themes/custom/staydirect_template_1/templates/templating/block--footer--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4, "for" => 37);
        static $filters = array("escape" => 7, "length" => 11);
        static $functions = array("include" => 6, "render_css" => 7, "block_parser" => 9, "range" => 37, "get_module_path" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'length'],
                ['include', 'render_css', 'block_parser', 'range', 'get_module_path']
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
