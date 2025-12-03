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

/* modules/contrib/templating/templates/misc/block.html.twig */
class __TwigTemplate_b928402bc76457ec4d5189cd18b4d590 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'templating_content' => [$this, 'block_templating_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 33
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 33), 33, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 34
($context["plugin_id"] ?? null), 34, $this->source)))];
        // line 37
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 37), 37, $this->source), "html", null, true);
        echo ">
  ";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 38, $this->source), "html", null, true);
        echo "
  ";
        // line 39
        if (($context["label"] ?? null)) {
            // line 40
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 40, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 40, $this->source), "html", null, true);
            echo "</h2>
  ";
        }
        // line 42
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 42, $this->source), "html", null, true);
        echo "
  ";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "</div>

";
    }

    // line 43
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "
    <div";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "content"], "method", false, false, true, 45), 45, $this->source), "html", null, true);
        echo ">

      ";
        // line 47
        $context["output"] = Drupal\templating\TwigExtension\DefaultTwigExtension::render_inline_template_twig($this->sandbox->ensureToStringAllowed(($context["var_template"] ?? null), 47, $this->source), "block");
        // line 48
        echo "      ";
        if (($context["output"] ?? null)) {
            // line 49
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["output"] ?? null), 49, $this->source), "html", null, true);
            echo "
      ";
        } else {
            // line 51
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, true, 51)) {
                // line 52
                echo "      ";
                $context["content"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, true, 52);
                // line 53
                echo "      ";
            }
            // line 54
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Drupal\templating\TwigExtension\DefaultTwigExtension::spacer_top_twig($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 54, $this->source)));
            $this->displayBlock('templating_content', $context, $blocks);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Drupal\templating\TwigExtension\DefaultTwigExtension::spacer_bottom_twig($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 54, $this->source)));
            echo "
      ";
        }
        // line 56
        echo "    </div>
  ";
    }

    // line 54
    public function block_templating_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 54, $this->source), "html", null, true);
    }

    public function getTemplateName()
    {
        return "modules/contrib/templating/templates/misc/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 54,  117 => 56,  109 => 54,  106 => 53,  103 => 52,  100 => 51,  94 => 49,  91 => 48,  89 => 47,  84 => 45,  81 => 44,  77 => 43,  71 => 58,  69 => 43,  64 => 42,  56 => 40,  54 => 39,  50 => 38,  45 => 37,  43 => 34,  42 => 33,  41 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
  'block',
  'block-' ~ configuration.provider|clean_class,
  'block-' ~ plugin_id|clean_class
]
%}
<div{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {% if label %}
    <h2{{ title_attributes }}>{{ label }}</h2>
  {% endif %}
  {{ title_suffix }}
  {% block content %}

    <div{{ content_attributes.addClass('content') }}>

      {% set output = render_inline_template(var_template,\"block\") %}
      {% if output %}
      {{output}}
      {% else %}
      {% if content.content %}
      {% set content  = content.content %}
      {% endif %}
      {{spacer_top(content)|raw}}{% block templating_content %}{{content}}{% endblock %}{{spacer_bottom(content)|raw}}
      {% endif %}
    </div>
  {% endblock %}
</div>

", "modules/contrib/templating/templates/misc/block.html.twig", "/Applications/MAMP/htdocs/global_9/modules/contrib/templating/templates/misc/block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 31, "if" => 39, "block" => 43);
        static $filters = array("clean_class" => 33, "escape" => 37, "raw" => 54);
        static $functions = array("render_inline_template" => 47, "spacer_top" => 54, "spacer_bottom" => 54);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 'raw'],
                ['render_inline_template', 'spacer_top', 'spacer_bottom']
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
