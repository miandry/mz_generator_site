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

/* themes/custom/staydirect_template_1/templates/templating/block--main-slider--full.html.twig */
class __TwigTemplate_02a26a897895747c76117c71a1145c73 extends \Twig\Template
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
        return $this->loadTemplate((Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::get_module_path("templating") . "/templates/misc/block.html.twig"), "themes/custom/staydirect_template_1/templates/templating/block--main-slider--full.html.twig", 1);
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
        $context["item_name"] = "block--staydirect-template-1-main-slider-full.html";
        echo " 
";
        // line 5
        $context["path_css"] = (("/themes/custom/staydirect_template_1/templates/templating/css/" . $this->sandbox->ensureToStringAllowed(($context["item_name"] ?? null), 5, $this->source)) . ".css");
        // line 6
        $context["css"] = twig_include($this->env, $context, $this->sandbox->ensureToStringAllowed(($context["path_css"] ?? null), 6, $this->source));
        echo " 
";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\templating\TwigExtension\DefaultTwigExtension::render_css_twig($this->sandbox->ensureToStringAllowed(($context["css"] ?? null), 7, $this->source), "block__staydirect_template_1_main_slider_full"), "html", null, true);
        echo "

";
        // line 9
        $context["c"] = Drupal\entity_parser\TwigExtension\DefaultTwigExtension::block_parser_twig($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 9, $this->source));
        // line 10
        $context["imgs"] = (($__internal_compile_0 = ($context["c"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["field_images"] ?? null) : null);
        // line 11
        $context["imgs_length"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["imgs"] ?? null), 11, $this->source));
        // line 12
        echo "
<div id=\"section--slider\" class=\"banniere section--slider\">
  <div class=\"wrapper--resp\">
    <div class=\"settings\" style=\"display: none;\">
      <div class=\"content-settings\">
        <div class=\"setting-color version-bleu active\">
          <svg width=\"16\" height=\"16\" fill=\"#3498DB\" xmlns=\"http://www.w3.org/2000/svg\" svg-inline=\"\" role=\"presentation\" focusable=\"false\"><path d=\"M10.74 2c2.349 0 3.927 2.235 3.927 4.32C14.667 10.543 8.119 14 8 14c-.118 0-6.667-3.457-6.667-7.68C1.333 4.235 2.911 2 5.26 2 6.607 2 7.49 2.683 8 3.283 8.511 2.683 9.393 2 10.74 2z\"></path></svg>
        </div>
        <div class=\"setting-color version-vert\">
            <svg width=\"16\" height=\"16\"  fill=\"#1ECC71\" xmlns=\"http://www.w3.org/2000/svg\" svg-inline=\"\" role=\"presentation\" focusable=\"false\"><path d=\"M10.74 2c2.349 0 3.927 2.235 3.927 4.32C14.667 10.543 8.119 14 8 14c-.118 0-6.667-3.457-6.667-7.68C1.333 4.235 2.911 2 5.26 2 6.607 2 7.49 2.683 8 3.283 8.511 2.683 9.393 2 10.74 2z\"></path></svg>
        </div>
        <div class=\"setting-color version-gris\">
            <svg width=\"16\" height=\"16\" fill=\"#333\" xmlns=\"http://www.w3.org/2000/svg\" svg-inline=\"\" role=\"presentation\" focusable=\"false\"><path d=\"M10.74 2c2.349 0 3.927 2.235 3.927 4.32C14.667 10.543 8.119 14 8 14c-.118 0-6.667-3.457-6.667-7.68C1.333 4.235 2.911 2 5.26 2 6.607 2 7.49 2.683 8 3.283 8.511 2.683 9.393 2 10.74 2z\"></path></svg>
        </div>
    </div>
    </div>

    <div class=\"container-slider--resp\">
        <div class=\"ctrl--slider\">
            <div class=\"ctrl--left\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                <path d=\"M11.2901 12L14.8301 8.46001C15.0163 8.27265 15.1209 8.0192 15.1209 7.75501C15.1209 7.49082 15.0163 7.23737 14.8301 7.05001C14.7371 6.95628 14.6265 6.88189 14.5046 6.83112C14.3828 6.78035 14.2521 6.75421 14.1201 6.75421C13.9881 6.75421 13.8573 6.78035 13.7355 6.83112C13.6136 6.88189 13.503 6.95628 13.4101 7.05001L9.17007 11.29C9.07634 11.383 9.00194 11.4936 8.95117 11.6154C8.90041 11.7373 8.87427 11.868 8.87427 12C8.87427 12.132 8.90041 12.2627 8.95117 12.3846C9.00194 12.5064 9.07634 12.617 9.17007 12.71L13.4101 17C13.5035 17.0927 13.6143 17.166 13.7362 17.2158C13.858 17.2655 13.9885 17.2908 14.1201 17.29C14.2517 17.2908 14.3821 17.2655 14.504 17.2158C14.6258 17.166 14.7366 17.0927 14.8301 17C15.0163 16.8126 15.1209 16.5592 15.1209 16.295C15.1209 16.0308 15.0163 15.7774 14.8301 15.59L11.2901 12Z\"/>
              </svg>
            </div>
            <div class=\"ctrl--right\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                <path d=\"M12.7099 12L9.16993 8.46001C8.98368 8.27265 8.87914 8.0192 8.87914 7.75501C8.87914 7.49082 8.98368 7.23737 9.16993 7.05001C9.2629 6.95628 9.3735 6.88189 9.49536 6.83112C9.61722 6.78035 9.74792 6.75421 9.87993 6.75421C10.0119 6.75421 10.1427 6.78035 10.2645 6.83112C10.3864 6.88189 10.497 6.95628 10.5899 7.05001L14.8299 11.29C14.9237 11.383 14.9981 11.4936 15.0488 11.6154C15.0996 11.7373 15.1257 11.868 15.1257 12C15.1257 12.132 15.0996 12.2627 15.0488 12.3846C14.9981 12.5064 14.9237 12.617 14.8299 12.71L10.5899 17C10.4965 17.0927 10.3857 17.166 10.2638 17.2158C10.142 17.2655 10.0115 17.2908 9.87993 17.29C9.74833 17.2908 9.61787 17.2655 9.49603 17.2158C9.37419 17.166 9.26337 17.0927 9.16993 17C8.98368 16.8126 8.87914 16.5592 8.87914 16.295C8.87914 16.0308 8.98368 15.7774 9.16993 15.59L12.7099 12Z\"/>
              </svg>
            </div>
        </div>
        <div class=\"slider\">
           <div class=\"swiper swiper-slider--resp swiper-slider--and\">
              <div class=\"swiper-wrapper\">
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (($context["imgs_length"] ?? null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
            // line 46
            echo "                <div class=\"swiper-slide swiper-slide2 swippe--item\" style=\"background: url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = (($__internal_compile_2 = ($context["imgs"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["size"]] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["image"] ?? null) : null), "url", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "); background-repeat: no-repeat; background-size: cover; background-position: center center;\">
                  <img src=\"";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = (($__internal_compile_4 = ($context["imgs"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["size"]] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["image"] ?? null) : null), "url", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "\" alt=\"\" style=\"object-fit: cover;\">
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "              </div>
            </div>
        </div>
    </div>

  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/staydirect_template_1/templates/templating/block--main-slider--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 50,  119 => 47,  114 => 46,  110 => 45,  75 => 12,  73 => 11,  71 => 10,  69 => 9,  64 => 7,  60 => 6,  58 => 5,  54 => 4,  51 => 3,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends get_module_path('templating') ~ \"/templates/misc/block.html.twig\" %}
{% block templating_content %}

{% set item_name = 'block--staydirect-template-1-main-slider-full.html' %} 
{% set path_css = '/themes/custom/staydirect_template_1/templates/templating/css/'~ item_name ~'.css' %}
{% set css = include(path_css) %} 
{{render_css(css,'block__staydirect_template_1_main_slider_full')}}

{% set c = block_parser(content) %}
{% set imgs = c['field_images'] %}
{% set imgs_length = imgs|length %}

<div id=\"section--slider\" class=\"banniere section--slider\">
  <div class=\"wrapper--resp\">
    <div class=\"settings\" style=\"display: none;\">
      <div class=\"content-settings\">
        <div class=\"setting-color version-bleu active\">
          <svg width=\"16\" height=\"16\" fill=\"#3498DB\" xmlns=\"http://www.w3.org/2000/svg\" svg-inline=\"\" role=\"presentation\" focusable=\"false\"><path d=\"M10.74 2c2.349 0 3.927 2.235 3.927 4.32C14.667 10.543 8.119 14 8 14c-.118 0-6.667-3.457-6.667-7.68C1.333 4.235 2.911 2 5.26 2 6.607 2 7.49 2.683 8 3.283 8.511 2.683 9.393 2 10.74 2z\"></path></svg>
        </div>
        <div class=\"setting-color version-vert\">
            <svg width=\"16\" height=\"16\"  fill=\"#1ECC71\" xmlns=\"http://www.w3.org/2000/svg\" svg-inline=\"\" role=\"presentation\" focusable=\"false\"><path d=\"M10.74 2c2.349 0 3.927 2.235 3.927 4.32C14.667 10.543 8.119 14 8 14c-.118 0-6.667-3.457-6.667-7.68C1.333 4.235 2.911 2 5.26 2 6.607 2 7.49 2.683 8 3.283 8.511 2.683 9.393 2 10.74 2z\"></path></svg>
        </div>
        <div class=\"setting-color version-gris\">
            <svg width=\"16\" height=\"16\" fill=\"#333\" xmlns=\"http://www.w3.org/2000/svg\" svg-inline=\"\" role=\"presentation\" focusable=\"false\"><path d=\"M10.74 2c2.349 0 3.927 2.235 3.927 4.32C14.667 10.543 8.119 14 8 14c-.118 0-6.667-3.457-6.667-7.68C1.333 4.235 2.911 2 5.26 2 6.607 2 7.49 2.683 8 3.283 8.511 2.683 9.393 2 10.74 2z\"></path></svg>
        </div>
    </div>
    </div>

    <div class=\"container-slider--resp\">
        <div class=\"ctrl--slider\">
            <div class=\"ctrl--left\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                <path d=\"M11.2901 12L14.8301 8.46001C15.0163 8.27265 15.1209 8.0192 15.1209 7.75501C15.1209 7.49082 15.0163 7.23737 14.8301 7.05001C14.7371 6.95628 14.6265 6.88189 14.5046 6.83112C14.3828 6.78035 14.2521 6.75421 14.1201 6.75421C13.9881 6.75421 13.8573 6.78035 13.7355 6.83112C13.6136 6.88189 13.503 6.95628 13.4101 7.05001L9.17007 11.29C9.07634 11.383 9.00194 11.4936 8.95117 11.6154C8.90041 11.7373 8.87427 11.868 8.87427 12C8.87427 12.132 8.90041 12.2627 8.95117 12.3846C9.00194 12.5064 9.07634 12.617 9.17007 12.71L13.4101 17C13.5035 17.0927 13.6143 17.166 13.7362 17.2158C13.858 17.2655 13.9885 17.2908 14.1201 17.29C14.2517 17.2908 14.3821 17.2655 14.504 17.2158C14.6258 17.166 14.7366 17.0927 14.8301 17C15.0163 16.8126 15.1209 16.5592 15.1209 16.295C15.1209 16.0308 15.0163 15.7774 14.8301 15.59L11.2901 12Z\"/>
              </svg>
            </div>
            <div class=\"ctrl--right\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                <path d=\"M12.7099 12L9.16993 8.46001C8.98368 8.27265 8.87914 8.0192 8.87914 7.75501C8.87914 7.49082 8.98368 7.23737 9.16993 7.05001C9.2629 6.95628 9.3735 6.88189 9.49536 6.83112C9.61722 6.78035 9.74792 6.75421 9.87993 6.75421C10.0119 6.75421 10.1427 6.78035 10.2645 6.83112C10.3864 6.88189 10.497 6.95628 10.5899 7.05001L14.8299 11.29C14.9237 11.383 14.9981 11.4936 15.0488 11.6154C15.0996 11.7373 15.1257 11.868 15.1257 12C15.1257 12.132 15.0996 12.2627 15.0488 12.3846C14.9981 12.5064 14.9237 12.617 14.8299 12.71L10.5899 17C10.4965 17.0927 10.3857 17.166 10.2638 17.2158C10.142 17.2655 10.0115 17.2908 9.87993 17.29C9.74833 17.2908 9.61787 17.2655 9.49603 17.2158C9.37419 17.166 9.26337 17.0927 9.16993 17C8.98368 16.8126 8.87914 16.5592 8.87914 16.295C8.87914 16.0308 8.98368 15.7774 9.16993 15.59L12.7099 12Z\"/>
              </svg>
            </div>
        </div>
        <div class=\"slider\">
           <div class=\"swiper swiper-slider--resp swiper-slider--and\">
              <div class=\"swiper-wrapper\">
                {% for size in 0 .. (imgs_length - 1) %}
                <div class=\"swiper-slide swiper-slide2 swippe--item\" style=\"background: url({{ imgs[size]['image'].url}}); background-repeat: no-repeat; background-size: cover; background-position: center center;\">
                  <img src=\"{{ imgs[size]['image'].url }}\" alt=\"\" style=\"object-fit: cover;\">
                </div>
                {% endfor %}
              </div>
            </div>
        </div>
    </div>

  </div>
</div>

{% endblock %}", "themes/custom/staydirect_template_1/templates/templating/block--main-slider--full.html.twig", "/Applications/MAMP/htdocs/global_9/themes/custom/staydirect_template_1/templates/templating/block--main-slider--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4, "for" => 45);
        static $filters = array("escape" => 7, "length" => 11);
        static $functions = array("include" => 6, "render_css" => 7, "block_parser" => 9, "range" => 45, "get_module_path" => 1);

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
