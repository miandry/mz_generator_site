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

/* themes/custom/staydirect_template_1/templates/templating/block--review-user--full.html.twig */
class __TwigTemplate_41813bf66ce453d2cafd6e9d499348b1 extends \Twig\Template
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
        return $this->loadTemplate((Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::get_module_path("templating") . "/templates/misc/block.html.twig"), "themes/custom/staydirect_template_1/templates/templating/block--review-user--full.html.twig", 1);
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
        $context["item_name"] = "block--staydirect-template-1-review-user-full.html";
        echo " 
";
        // line 5
        $context["path_css"] = (("/themes/custom/staydirect_template_1/templates/templating/css/" . $this->sandbox->ensureToStringAllowed(($context["item_name"] ?? null), 5, $this->source)) . ".css");
        // line 6
        $context["css"] = twig_include($this->env, $context, $this->sandbox->ensureToStringAllowed(($context["path_css"] ?? null), 6, $this->source));
        echo " 
";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\templating\TwigExtension\DefaultTwigExtension::render_css_twig($this->sandbox->ensureToStringAllowed(($context["css"] ?? null), 7, $this->source), "block__staydirect_template_1_review_user_full"), "html", null, true);
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
<div class=\"section testimonial\" style=\"position: relative;\">
<div class=\"container\">
  <div class=\"content-testimonial\">
    <h2 class=\"display-5 fw-normal sub-title-spec\">";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "field_title", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "</h2>
    <h1 class=\"title\">";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "field_subtitle", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "</h1>

    <div class=\"btn-slider desk\">
      <div class=\"left i fa-solid fa-angle-left\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\">
          <path d=\"M14.1125 15.0001L18.5375 10.5751C18.7703 10.3409 18.901 10.0241 18.901 9.69387C18.901 9.36364 18.7703 9.04682 18.5375 8.81262C18.4213 8.69546 18.2831 8.60247 18.1307 8.539C17.9784 8.47554 17.815 8.44287 17.65 8.44287C17.485 8.44287 17.3216 8.47554 17.1693 8.539C17.017 8.60247 16.8787 8.69546 16.7625 8.81262L11.4625 14.1126C11.3454 14.2288 11.2524 14.3671 11.1889 14.5194C11.1254 14.6717 11.0928 14.8351 11.0928 15.0001C11.0928 15.1651 11.1254 15.3285 11.1889 15.4808C11.2524 15.6332 11.3454 15.7714 11.4625 15.8876L16.7625 21.2501C16.8793 21.366 17.0178 21.4576 17.1701 21.5198C17.3224 21.582 17.4855 21.6136 17.65 21.6126C17.8145 21.6136 17.9776 21.582 18.1299 21.5198C18.2822 21.4576 18.4207 21.366 18.5375 21.2501C18.7703 21.0159 18.901 20.6991 18.901 20.3689C18.901 20.0386 18.7703 19.7218 18.5375 19.4876L14.1125 15.0001Z\" fill=\"white\"/>
        </svg>
      </div>
      <div class=\"right i fa-solid fa-angle-right\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\">
          <path d=\"M15.8875 15.0001L11.4625 10.5751C11.2297 10.3409 11.099 10.0241 11.099 9.69387C11.099 9.36364 11.2297 9.04682 11.4625 8.81262C11.5787 8.69546 11.7169 8.60247 11.8693 8.539C12.0216 8.47554 12.185 8.44287 12.35 8.44287C12.515 8.44287 12.6784 8.47554 12.8307 8.539C12.983 8.60247 13.1213 8.69546 13.2375 8.81262L18.5375 14.1126C18.6546 14.2288 18.7476 14.3671 18.8111 14.5194C18.8746 14.6717 18.9072 14.8351 18.9072 15.0001C18.9072 15.1651 18.8746 15.3285 18.8111 15.4808C18.7476 15.6332 18.6546 15.7714 18.5375 15.8876L13.2375 21.2501C13.1207 21.366 12.9822 21.4576 12.8299 21.5198C12.6776 21.582 12.5145 21.6136 12.35 21.6126C12.1855 21.6136 12.0224 21.582 11.8701 21.5198C11.7178 21.4576 11.5793 21.366 11.4625 21.2501C11.2297 21.0159 11.099 20.6991 11.099 20.3689C11.099 20.0386 11.2297 19.7218 11.4625 19.4876L15.8875 15.0001Z\" fill=\"white\"/>
        </svg>
      </div>
    </div>  
    <div class=\"btn-slider tab\">
      <div class=\"left i fa-solid fa-angle-left\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\">
          <path d=\"M14.1125 15.0001L18.5375 10.5751C18.7703 10.3409 18.901 10.0241 18.901 9.69387C18.901 9.36364 18.7703 9.04682 18.5375 8.81262C18.4213 8.69546 18.2831 8.60247 18.1307 8.539C17.9784 8.47554 17.815 8.44287 17.65 8.44287C17.485 8.44287 17.3216 8.47554 17.1693 8.539C17.017 8.60247 16.8787 8.69546 16.7625 8.81262L11.4625 14.1126C11.3454 14.2288 11.2524 14.3671 11.1889 14.5194C11.1254 14.6717 11.0928 14.8351 11.0928 15.0001C11.0928 15.1651 11.1254 15.3285 11.1889 15.4808C11.2524 15.6332 11.3454 15.7714 11.4625 15.8876L16.7625 21.2501C16.8793 21.366 17.0178 21.4576 17.1701 21.5198C17.3224 21.582 17.4855 21.6136 17.65 21.6126C17.8145 21.6136 17.9776 21.582 18.1299 21.5198C18.2822 21.4576 18.4207 21.366 18.5375 21.2501C18.7703 21.0159 18.901 20.6991 18.901 20.3689C18.901 20.0386 18.7703 19.7218 18.5375 19.4876L14.1125 15.0001Z\" fill=\"white\"/>
        </svg>
      </div>
      <div class=\"right i fa-solid fa-angle-right\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\">
          <path d=\"M15.8875 15.0001L11.4625 10.5751C11.2297 10.3409 11.099 10.0241 11.099 9.69387C11.099 9.36364 11.2297 9.04682 11.4625 8.81262C11.5787 8.69546 11.7169 8.60247 11.8693 8.539C12.0216 8.47554 12.185 8.44287 12.35 8.44287C12.515 8.44287 12.6784 8.47554 12.8307 8.539C12.983 8.60247 13.1213 8.69546 13.2375 8.81262L18.5375 14.1126C18.6546 14.2288 18.7476 14.3671 18.8111 14.5194C18.8746 14.6717 18.9072 14.8351 18.9072 15.0001C18.9072 15.1651 18.8746 15.3285 18.8111 15.4808C18.7476 15.6332 18.6546 15.7714 18.5375 15.8876L13.2375 21.2501C13.1207 21.366 12.9822 21.4576 12.8299 21.5198C12.6776 21.582 12.5145 21.6136 12.35 21.6126C12.1855 21.6136 12.0224 21.582 11.8701 21.5198C11.7178 21.4576 11.5793 21.366 11.4625 21.2501C11.2297 21.0159 11.099 20.6991 11.099 20.3689C11.099 20.0386 11.2297 19.7218 11.4625 19.4876L15.8875 15.0001Z\" fill=\"white\"/>
        </svg>
      </div>
    </div>
    <div class=\"btn-slider mob\">
      <div class=\"left i fa-solid fa-angle-left\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\">
          <path d=\"M14.1125 15.0001L18.5375 10.5751C18.7703 10.3409 18.901 10.0241 18.901 9.69387C18.901 9.36364 18.7703 9.04682 18.5375 8.81262C18.4213 8.69546 18.2831 8.60247 18.1307 8.539C17.9784 8.47554 17.815 8.44287 17.65 8.44287C17.485 8.44287 17.3216 8.47554 17.1693 8.539C17.017 8.60247 16.8787 8.69546 16.7625 8.81262L11.4625 14.1126C11.3454 14.2288 11.2524 14.3671 11.1889 14.5194C11.1254 14.6717 11.0928 14.8351 11.0928 15.0001C11.0928 15.1651 11.1254 15.3285 11.1889 15.4808C11.2524 15.6332 11.3454 15.7714 11.4625 15.8876L16.7625 21.2501C16.8793 21.366 17.0178 21.4576 17.1701 21.5198C17.3224 21.582 17.4855 21.6136 17.65 21.6126C17.8145 21.6136 17.9776 21.582 18.1299 21.5198C18.2822 21.4576 18.4207 21.366 18.5375 21.2501C18.7703 21.0159 18.901 20.6991 18.901 20.3689C18.901 20.0386 18.7703 19.7218 18.5375 19.4876L14.1125 15.0001Z\" fill=\"white\"/>
        </svg>
      </div>
      <div class=\"right i fa-solid fa-angle-right\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\">
          <path d=\"M15.8875 15.0001L11.4625 10.5751C11.2297 10.3409 11.099 10.0241 11.099 9.69387C11.099 9.36364 11.2297 9.04682 11.4625 8.81262C11.5787 8.69546 11.7169 8.60247 11.8693 8.539C12.0216 8.47554 12.185 8.44287 12.35 8.44287C12.515 8.44287 12.6784 8.47554 12.8307 8.539C12.983 8.60247 13.1213 8.69546 13.2375 8.81262L18.5375 14.1126C18.6546 14.2288 18.7476 14.3671 18.8111 14.5194C18.8746 14.6717 18.9072 14.8351 18.9072 15.0001C18.9072 15.1651 18.8746 15.3285 18.8111 15.4808C18.7476 15.6332 18.6546 15.7714 18.5375 15.8876L13.2375 21.2501C13.1207 21.366 12.9822 21.4576 12.8299 21.5198C12.6776 21.582 12.5145 21.6136 12.35 21.6126C12.1855 21.6136 12.0224 21.582 11.8701 21.5198C11.7178 21.4576 11.5793 21.366 11.4625 21.2501C11.2297 21.0159 11.099 20.6991 11.099 20.3689C11.099 20.0386 11.2297 19.7218 11.4625 19.4876L15.8875 15.0001Z\" fill=\"white\"/>
        </svg>
      </div>
    </div>

    <div class=\"body-slider slider-desk\">
      <div class=\"swiper swiper-desk\">
        <div class=\"swiper-wrapper\">
          ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (($context["paragraphs_length"] ?? null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
            // line 60
            echo "            <div class=\"swiper-slide\">
              <div class=\"content-slider\">
                <p>
                  “  ";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["paragraphs"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["size"]] ?? null) : null), "field_description", [], "any", false, false, true, 63), 63, $this->source), ["<p>" => "", "</p>" => ""]), "html", null, true);
            echo " “ 
                </p>
                <div class=\"say\">
                  <div style=\"width: 70px; height: 70px; border-radius: 50%; background: #D9D9D9;\"></div>
                  <div style=\"margin-top: 8px;\">
                      <span class=\"name\">";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["paragraphs"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["size"]] ?? null) : null), "field_text1", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "</span><br>
                      <span class=\"addr\">";
            // line 69
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["paragraphs"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["size"]] ?? null) : null), "field_text", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
            echo "</span>
                  </div>
                </div>
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo " 
        </div>
      </div>
    </div>
    <div class=\"body-slider slider-tab\">
      <div class=\"swiper swiper-tab\">
        <div class=\"swiper-wrapper\">
          ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (($context["paragraphs_length"] ?? null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
            // line 82
            echo "          <div class=\"swiper-slide\">
            <div class=\"content-slider\">
              <p>
                “ ";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["paragraphs"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["size"]] ?? null) : null), "field_description", [], "any", false, false, true, 85), 85, $this->source), ["<p>" => "", "</p>" => ""]), "html", null, true);
            echo " “ 
              </p>
              <div class=\"say\">
                <div style=\"width: 70px; height: 70px; border-radius: 50%; background: #D9D9D9;\"></div>
                <div style=\"margin-top: 8px;\">
                    <span class=\"name\">";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["paragraphs"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["size"]] ?? null) : null), "field_text1", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
            echo "</span><br>
                    <span class=\"addr\">";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = ($context["paragraphs"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[$context["size"]] ?? null) : null), "field_text", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            echo "</span>
                </div>
              </div>
            </div>
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo " 
        </div>
      </div>
    </div>
    <div class=\"body-slider slider-mob\">
      <div class=\"swiper swiper-mob\">
        <div class=\"swiper-wrapper\">
          ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (($context["paragraphs_length"] ?? null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
            // line 104
            echo "          <div class=\"swiper-slide\">
            <div class=\"content-slider\">
              <p>
                “ ";
            // line 107
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["paragraphs"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[$context["size"]] ?? null) : null), "field_description", [], "any", false, false, true, 107), 107, $this->source), ["<p>" => "", "</p>" => ""]), "html", null, true);
            echo " “ 
              </p>
              <div class=\"say\">
                <div style=\"width: 70px; height: 70px; border-radius: 50%; background: #D9D9D9;\"></div>
                <div style=\"margin-top: 8px;\">
                    <span class=\"name\">";
            // line 112
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = ($context["paragraphs"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[$context["size"]] ?? null) : null), "field_text1", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo "</span><br>
                    <span class=\"addr\">";
            // line 113
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = ($context["paragraphs"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[$context["size"]] ?? null) : null), "field_text", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "</span>
                </div>
              </div>
            </div>
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo " 
        </div>
      </div>
    </div>
  </div>
</div>
<div class=\"dots dots-desk desk\"></div>
<div class=\"dots dots-tab tab\" style=\"height: 20px;  position: absolute; bottom: 0; left: 0; width: 100%;\"></div>
<div class=\"dots dots-mob mob\"></div>
</div> 


";
    }

    public function getTemplateName()
    {
        return "themes/custom/staydirect_template_1/templates/templating/block--review-user--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 118,  235 => 113,  231 => 112,  223 => 107,  218 => 104,  214 => 103,  205 => 96,  193 => 91,  189 => 90,  181 => 85,  176 => 82,  172 => 81,  163 => 74,  151 => 69,  147 => 68,  139 => 63,  134 => 60,  130 => 59,  85 => 17,  81 => 16,  75 => 12,  73 => 11,  71 => 10,  69 => 9,  64 => 7,  60 => 6,  58 => 5,  54 => 4,  51 => 3,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends get_module_path('templating') ~ \"/templates/misc/block.html.twig\" %}
{% block templating_content %}

{% set item_name = 'block--staydirect-template-1-review-user-full.html' %} 
{% set path_css = '/themes/custom/staydirect_template_1/templates/templating/css/'~ item_name ~'.css' %}
{% set css = include(path_css) %} 
{{render_css(css,'block__staydirect_template_1_review_user_full')}}

{% set c = block_parser(content) %}
{% set paragraphs = c['field_paragraphs'] %}
{% set paragraphs_length = paragraphs|length %}

<div class=\"section testimonial\" style=\"position: relative;\">
<div class=\"container\">
  <div class=\"content-testimonial\">
    <h2 class=\"display-5 fw-normal sub-title-spec\">{{c.field_title}}</h2>
    <h1 class=\"title\">{{c.field_subtitle}}</h1>

    <div class=\"btn-slider desk\">
      <div class=\"left i fa-solid fa-angle-left\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\">
          <path d=\"M14.1125 15.0001L18.5375 10.5751C18.7703 10.3409 18.901 10.0241 18.901 9.69387C18.901 9.36364 18.7703 9.04682 18.5375 8.81262C18.4213 8.69546 18.2831 8.60247 18.1307 8.539C17.9784 8.47554 17.815 8.44287 17.65 8.44287C17.485 8.44287 17.3216 8.47554 17.1693 8.539C17.017 8.60247 16.8787 8.69546 16.7625 8.81262L11.4625 14.1126C11.3454 14.2288 11.2524 14.3671 11.1889 14.5194C11.1254 14.6717 11.0928 14.8351 11.0928 15.0001C11.0928 15.1651 11.1254 15.3285 11.1889 15.4808C11.2524 15.6332 11.3454 15.7714 11.4625 15.8876L16.7625 21.2501C16.8793 21.366 17.0178 21.4576 17.1701 21.5198C17.3224 21.582 17.4855 21.6136 17.65 21.6126C17.8145 21.6136 17.9776 21.582 18.1299 21.5198C18.2822 21.4576 18.4207 21.366 18.5375 21.2501C18.7703 21.0159 18.901 20.6991 18.901 20.3689C18.901 20.0386 18.7703 19.7218 18.5375 19.4876L14.1125 15.0001Z\" fill=\"white\"/>
        </svg>
      </div>
      <div class=\"right i fa-solid fa-angle-right\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\">
          <path d=\"M15.8875 15.0001L11.4625 10.5751C11.2297 10.3409 11.099 10.0241 11.099 9.69387C11.099 9.36364 11.2297 9.04682 11.4625 8.81262C11.5787 8.69546 11.7169 8.60247 11.8693 8.539C12.0216 8.47554 12.185 8.44287 12.35 8.44287C12.515 8.44287 12.6784 8.47554 12.8307 8.539C12.983 8.60247 13.1213 8.69546 13.2375 8.81262L18.5375 14.1126C18.6546 14.2288 18.7476 14.3671 18.8111 14.5194C18.8746 14.6717 18.9072 14.8351 18.9072 15.0001C18.9072 15.1651 18.8746 15.3285 18.8111 15.4808C18.7476 15.6332 18.6546 15.7714 18.5375 15.8876L13.2375 21.2501C13.1207 21.366 12.9822 21.4576 12.8299 21.5198C12.6776 21.582 12.5145 21.6136 12.35 21.6126C12.1855 21.6136 12.0224 21.582 11.8701 21.5198C11.7178 21.4576 11.5793 21.366 11.4625 21.2501C11.2297 21.0159 11.099 20.6991 11.099 20.3689C11.099 20.0386 11.2297 19.7218 11.4625 19.4876L15.8875 15.0001Z\" fill=\"white\"/>
        </svg>
      </div>
    </div>  
    <div class=\"btn-slider tab\">
      <div class=\"left i fa-solid fa-angle-left\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\">
          <path d=\"M14.1125 15.0001L18.5375 10.5751C18.7703 10.3409 18.901 10.0241 18.901 9.69387C18.901 9.36364 18.7703 9.04682 18.5375 8.81262C18.4213 8.69546 18.2831 8.60247 18.1307 8.539C17.9784 8.47554 17.815 8.44287 17.65 8.44287C17.485 8.44287 17.3216 8.47554 17.1693 8.539C17.017 8.60247 16.8787 8.69546 16.7625 8.81262L11.4625 14.1126C11.3454 14.2288 11.2524 14.3671 11.1889 14.5194C11.1254 14.6717 11.0928 14.8351 11.0928 15.0001C11.0928 15.1651 11.1254 15.3285 11.1889 15.4808C11.2524 15.6332 11.3454 15.7714 11.4625 15.8876L16.7625 21.2501C16.8793 21.366 17.0178 21.4576 17.1701 21.5198C17.3224 21.582 17.4855 21.6136 17.65 21.6126C17.8145 21.6136 17.9776 21.582 18.1299 21.5198C18.2822 21.4576 18.4207 21.366 18.5375 21.2501C18.7703 21.0159 18.901 20.6991 18.901 20.3689C18.901 20.0386 18.7703 19.7218 18.5375 19.4876L14.1125 15.0001Z\" fill=\"white\"/>
        </svg>
      </div>
      <div class=\"right i fa-solid fa-angle-right\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\">
          <path d=\"M15.8875 15.0001L11.4625 10.5751C11.2297 10.3409 11.099 10.0241 11.099 9.69387C11.099 9.36364 11.2297 9.04682 11.4625 8.81262C11.5787 8.69546 11.7169 8.60247 11.8693 8.539C12.0216 8.47554 12.185 8.44287 12.35 8.44287C12.515 8.44287 12.6784 8.47554 12.8307 8.539C12.983 8.60247 13.1213 8.69546 13.2375 8.81262L18.5375 14.1126C18.6546 14.2288 18.7476 14.3671 18.8111 14.5194C18.8746 14.6717 18.9072 14.8351 18.9072 15.0001C18.9072 15.1651 18.8746 15.3285 18.8111 15.4808C18.7476 15.6332 18.6546 15.7714 18.5375 15.8876L13.2375 21.2501C13.1207 21.366 12.9822 21.4576 12.8299 21.5198C12.6776 21.582 12.5145 21.6136 12.35 21.6126C12.1855 21.6136 12.0224 21.582 11.8701 21.5198C11.7178 21.4576 11.5793 21.366 11.4625 21.2501C11.2297 21.0159 11.099 20.6991 11.099 20.3689C11.099 20.0386 11.2297 19.7218 11.4625 19.4876L15.8875 15.0001Z\" fill=\"white\"/>
        </svg>
      </div>
    </div>
    <div class=\"btn-slider mob\">
      <div class=\"left i fa-solid fa-angle-left\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\">
          <path d=\"M14.1125 15.0001L18.5375 10.5751C18.7703 10.3409 18.901 10.0241 18.901 9.69387C18.901 9.36364 18.7703 9.04682 18.5375 8.81262C18.4213 8.69546 18.2831 8.60247 18.1307 8.539C17.9784 8.47554 17.815 8.44287 17.65 8.44287C17.485 8.44287 17.3216 8.47554 17.1693 8.539C17.017 8.60247 16.8787 8.69546 16.7625 8.81262L11.4625 14.1126C11.3454 14.2288 11.2524 14.3671 11.1889 14.5194C11.1254 14.6717 11.0928 14.8351 11.0928 15.0001C11.0928 15.1651 11.1254 15.3285 11.1889 15.4808C11.2524 15.6332 11.3454 15.7714 11.4625 15.8876L16.7625 21.2501C16.8793 21.366 17.0178 21.4576 17.1701 21.5198C17.3224 21.582 17.4855 21.6136 17.65 21.6126C17.8145 21.6136 17.9776 21.582 18.1299 21.5198C18.2822 21.4576 18.4207 21.366 18.5375 21.2501C18.7703 21.0159 18.901 20.6991 18.901 20.3689C18.901 20.0386 18.7703 19.7218 18.5375 19.4876L14.1125 15.0001Z\" fill=\"white\"/>
        </svg>
      </div>
      <div class=\"right i fa-solid fa-angle-right\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\">
          <path d=\"M15.8875 15.0001L11.4625 10.5751C11.2297 10.3409 11.099 10.0241 11.099 9.69387C11.099 9.36364 11.2297 9.04682 11.4625 8.81262C11.5787 8.69546 11.7169 8.60247 11.8693 8.539C12.0216 8.47554 12.185 8.44287 12.35 8.44287C12.515 8.44287 12.6784 8.47554 12.8307 8.539C12.983 8.60247 13.1213 8.69546 13.2375 8.81262L18.5375 14.1126C18.6546 14.2288 18.7476 14.3671 18.8111 14.5194C18.8746 14.6717 18.9072 14.8351 18.9072 15.0001C18.9072 15.1651 18.8746 15.3285 18.8111 15.4808C18.7476 15.6332 18.6546 15.7714 18.5375 15.8876L13.2375 21.2501C13.1207 21.366 12.9822 21.4576 12.8299 21.5198C12.6776 21.582 12.5145 21.6136 12.35 21.6126C12.1855 21.6136 12.0224 21.582 11.8701 21.5198C11.7178 21.4576 11.5793 21.366 11.4625 21.2501C11.2297 21.0159 11.099 20.6991 11.099 20.3689C11.099 20.0386 11.2297 19.7218 11.4625 19.4876L15.8875 15.0001Z\" fill=\"white\"/>
        </svg>
      </div>
    </div>

    <div class=\"body-slider slider-desk\">
      <div class=\"swiper swiper-desk\">
        <div class=\"swiper-wrapper\">
          {% for size in 0 .. (paragraphs_length - 1) %}
            <div class=\"swiper-slide\">
              <div class=\"content-slider\">
                <p>
                  “  {{paragraphs[size].field_description|replace({\"<p>\": \"\", '</p>': \"\"})}} “ 
                </p>
                <div class=\"say\">
                  <div style=\"width: 70px; height: 70px; border-radius: 50%; background: #D9D9D9;\"></div>
                  <div style=\"margin-top: 8px;\">
                      <span class=\"name\">{{paragraphs[size].field_text1}}</span><br>
                      <span class=\"addr\">{{paragraphs[size].field_text}}</span>
                  </div>
                </div>
              </div>
            </div>
          {% endfor %} 
        </div>
      </div>
    </div>
    <div class=\"body-slider slider-tab\">
      <div class=\"swiper swiper-tab\">
        <div class=\"swiper-wrapper\">
          {% for size in 0 .. (paragraphs_length - 1) %}
          <div class=\"swiper-slide\">
            <div class=\"content-slider\">
              <p>
                “ {{paragraphs[size].field_description|replace({\"<p>\": \"\", '</p>': \"\"})}} “ 
              </p>
              <div class=\"say\">
                <div style=\"width: 70px; height: 70px; border-radius: 50%; background: #D9D9D9;\"></div>
                <div style=\"margin-top: 8px;\">
                    <span class=\"name\">{{paragraphs[size].field_text1}}</span><br>
                    <span class=\"addr\">{{paragraphs[size].field_text}}</span>
                </div>
              </div>
            </div>
          </div>
          {% endfor %} 
        </div>
      </div>
    </div>
    <div class=\"body-slider slider-mob\">
      <div class=\"swiper swiper-mob\">
        <div class=\"swiper-wrapper\">
          {% for size in 0 .. (paragraphs_length - 1) %}
          <div class=\"swiper-slide\">
            <div class=\"content-slider\">
              <p>
                “ {{paragraphs[size].field_description|replace({\"<p>\": \"\", '</p>': \"\"})}} “ 
              </p>
              <div class=\"say\">
                <div style=\"width: 70px; height: 70px; border-radius: 50%; background: #D9D9D9;\"></div>
                <div style=\"margin-top: 8px;\">
                    <span class=\"name\">{{paragraphs[size].field_text1}}</span><br>
                    <span class=\"addr\">{{paragraphs[size].field_text}}</span>
                </div>
              </div>
            </div>
          </div>
          {% endfor %} 
        </div>
      </div>
    </div>
  </div>
</div>
<div class=\"dots dots-desk desk\"></div>
<div class=\"dots dots-tab tab\" style=\"height: 20px;  position: absolute; bottom: 0; left: 0; width: 100%;\"></div>
<div class=\"dots dots-mob mob\"></div>
</div> 


{% endblock %}", "themes/custom/staydirect_template_1/templates/templating/block--review-user--full.html.twig", "/Applications/MAMP/htdocs/global_9/themes/custom/staydirect_template_1/templates/templating/block--review-user--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4, "for" => 59);
        static $filters = array("escape" => 7, "length" => 11, "replace" => 63);
        static $functions = array("include" => 6, "render_css" => 7, "block_parser" => 9, "range" => 59, "get_module_path" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'length', 'replace'],
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
