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

/* modules/contrib/status_messages/templates/misc/status-messages.html.twig */
class __TwigTemplate_9d8501a90c26188def5ef6e2026a46b3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "
<div class=\"simple-status-messages\">
  ";
        // line 24
        $this->displayBlock('messages', $context, $blocks);
        // line 59
        echo "</div>
";
    }

    // line 24
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 26
            echo "      ";
            $context["classes"] = [0 => "status-messages", 1 => ("messages--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 28
$context["type"], 28, $this->source)))];
            // line 30
            echo "      <div role=\"contentinfo\"
           aria-label=\"";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? null) : null), 31, $this->source), "html", null, true);
            echo "\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 31), 31, $this->source), "role", "aria-label"), "html", null, true);
            echo ">
        ";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["enabled"] ?? null), 32, $this->source), "html", null, true);
            echo "
        ";
            // line 33
            if (($context["type"] == "error")) {
                // line 34
                echo "        <div role=\"alert\">
          ";
            }
            // line 36
            echo "          ";
            if ((($__internal_compile_1 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["type"]] ?? null) : null)) {
                // line 37
                echo "            <h2 class=\"visually-hidden\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["type"]] ?? null) : null), 37, $this->source), "html", null, true);
                echo "</h2>
          ";
            }
            // line 39
            echo "          ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 40
                echo "            <ul class=\"messages__list\">
              ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 42
                    echo "                <li class=\"messages__item\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 42, $this->source), "html", null, true);
                    echo "</li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "            </ul>
          ";
            } else {
                // line 46
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"], 46, $this->source)), "html", null, true);
                echo "
          ";
            }
            // line 48
            echo "          ";
            if (($context["type"] == "error")) {
                // line 49
                echo "        </div>
        ";
            }
            // line 51
            echo "        <button class=\"status-message-close\" type=\"button\" title=\"Close\">
          <span aria-hidden=\"true\">x</span>
        </button>
      </div>
      ";
            // line 56
            echo "      ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 56);
            // line 57
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "  ";
    }

    public function getTemplateName()
    {
        return "modules/contrib/status_messages/templates/misc/status-messages.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  143 => 58,  137 => 57,  134 => 56,  128 => 51,  124 => 49,  121 => 48,  115 => 46,  111 => 44,  102 => 42,  98 => 41,  95 => 40,  92 => 39,  86 => 37,  83 => 36,  79 => 34,  77 => 33,  73 => 32,  67 => 31,  64 => 30,  62 => 28,  60 => 26,  55 => 25,  51 => 24,  46 => 59,  44 => 24,  40 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for status messages.
 *
 * Displays status, error, and warning messages, grouped by type.
 *
 * An invisible heading identifies the messages for assistive technology.
 * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html
 * for info.
 *
 * Add an ARIA label to the contentinfo area so that assistive technology
 * user agents will better describe this landmark.
 *
 * Available variables:
 * - message_list: List of messages to be displayed, grouped by type.
 * - status_headings: List of all status types.
 * - attributes: HTML attributes for the element, including:
 *   - class: HTML classes.
 */
#}

<div class=\"simple-status-messages\">
  {% block messages %}
    {% for type, messages in message_list %}
      {% set classes = [
        'status-messages',
        'messages--' ~ type|clean_class,
      ] %}
      <div role=\"contentinfo\"
           aria-label=\"{{ status_headings[type] }}\"{{ attributes.addClass(classes)|without('role', 'aria-label') }}>
        {{ enabled }}
        {% if type == 'error' %}
        <div role=\"alert\">
          {% endif %}
          {% if status_headings[type] %}
            <h2 class=\"visually-hidden\">{{ status_headings[type] }}</h2>
          {% endif %}
          {% if messages|length > 1 %}
            <ul class=\"messages__list\">
              {% for message in messages %}
                <li class=\"messages__item\">{{ message }}</li>
              {% endfor %}
            </ul>
          {% else %}
            {{ messages|first }}
          {% endif %}
          {% if type == 'error' %}
        </div>
        {% endif %}
        <button class=\"status-message-close\" type=\"button\" title=\"Close\">
          <span aria-hidden=\"true\">x</span>
        </button>
      </div>
      {# Remove type specific classes. #}
      {% set attributes = attributes.removeClass(classes) %}
    {% endfor %}
  {% endblock messages %}
</div>
", "modules/contrib/status_messages/templates/misc/status-messages.html.twig", "/Applications/MAMP/htdocs/global_9/modules/contrib/status_messages/templates/misc/status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 24, "for" => 25, "set" => 26, "if" => 33);
        static $filters = array("clean_class" => 28, "escape" => 31, "without" => 31, "length" => 39, "first" => 46);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'for', 'set', 'if'],
                ['clean_class', 'escape', 'without', 'length', 'first'],
                []
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
