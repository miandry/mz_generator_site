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

/* modules/contrib/templating/templates/misc/html.html.twig */
class __TwigTemplate_0274bcdfa5b692cbf25687d14cf7fb09 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (($context["html_page"] ?? null)) {
            // line 2
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_page"] ?? null), 2, $this->source), "html", null, true);
            echo "
";
        } else {
            // line 30
            $context["body_classes"] = [0 => ((            // line 31
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !            // line 32
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 32, $this->source))))), 2 => ((            // line 33
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 33, $this->source)))) : ("")), 3 => ((            // line 34
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), 4 => "loading-overlay-showing"];
            // line 38
            echo "<!DOCTYPE html>
<html";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 39, $this->source), "html", null, true);
            echo ">
  <head>

    <title>";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 42, $this->source), " | "));
            echo "</title>
    <head-placeholder token=\"";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 43, $this->source), "html", null, true);
            echo "\">
    <css-placeholder token=\"";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 44, $this->source), "html", null, true);
            echo "\">
    <js-placeholder token=\"";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 45, $this->source), "html", null, true);
            echo "\">
    ";
            // line 46
            if ((($__internal_compile_0 = ($context["library_template"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["css_header"] ?? null) : null)) {
                // line 47
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_1 = ($context["library_template"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["css_header"] ?? null) : null), 47, $this->source));
                echo "
    ";
            }
            // line 49
            echo "    ";
            if ((($__internal_compile_2 = ($context["library_template"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["js_header"] ?? null) : null)) {
                // line 50
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_3 = ($context["library_template"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["js_header"] ?? null) : null), 50, $this->source));
                echo "
    ";
            }
            // line 52
            echo "    <style>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["css_template"] ?? null), 52, $this->source));
            echo "</style>
    </head>
    <body";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 54), 54, $this->source), "html", null, true);
            echo " >
    ";
            // line 59
            echo "    ";
            // line 60
            echo "      ";
            // line 61
            echo "    ";
            // line 62
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 62, $this->source), "html", null, true);
            echo "
    ";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 63, $this->source), "html", null, true);
            echo "
    ";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 64, $this->source), "html", null, true);
            echo "

    <js-bottom-placeholder token=\"";
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 66, $this->source), "html", null, true);
            echo "\">
    ";
            // line 67
            if ((($__internal_compile_4 = ($context["library_template"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["js_footer"] ?? null) : null)) {
                // line 68
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_5 = ($context["library_template"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["js_footer"] ?? null) : null), 68, $this->source));
                echo "
    ";
            }
            // line 70
            echo "    <script>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["js_template"] ?? null), 70, $this->source));
            echo "</script>

  </body>
</html>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/templating/templates/misc/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 70,  131 => 68,  129 => 67,  125 => 66,  120 => 64,  116 => 63,  111 => 62,  109 => 61,  107 => 60,  105 => 59,  101 => 54,  95 => 52,  89 => 50,  86 => 49,  80 => 47,  78 => 46,  74 => 45,  70 => 44,  66 => 43,  62 => 42,  56 => 39,  53 => 38,  51 => 34,  50 => 33,  49 => 32,  48 => 31,  47 => 30,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if html_page %}
  {{ html_page }}
{% else %}
{#
/**
 * @file
 * Theme override for the basic structure of a single Drupal page.
 *
 * Variables:
 * - logged_in: A flag indicating if user is logged in.
 * - root_path: The root path of the current page (e.g., node, admin, user).
 * - node_type: The content type for the current node, if the page is a node.
 * - head_title: List of text elements that make up the head_title variable.
 *   May contain one or more of the following:
 *   - title: The title of the page.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site.
 * - page_top: Initial rendered markup. This should be printed before 'page'.
 * - page: The rendered page markup.
 * - page_bottom: Closing rendered markup. This variable should be printed after
 *   'page'.
 * - db_offline: A flag indicating if the database is offline.
 * - placeholder_token: The token for generating head, css, js and js-bottom
 *   placeholders.
 *
 * @see template_preprocess_html()
 */
#}
{%
  set body_classes = [
    logged_in ? 'user-logged-in',
    not root_path ? 'path-frontpage' : 'path-' ~ root_path|clean_class,
    node_type ? 'page-node-type-' ~ node_type|clean_class,
    db_offline ? 'db-offline',
    'loading-overlay-showing'
  ]
%}
<!DOCTYPE html>
<html{{ html_attributes }}>
  <head>

    <title>{{ head_title|safe_join(' | ') }}</title>
    <head-placeholder token=\"{{ placeholder_token }}\">
    <css-placeholder token=\"{{ placeholder_token }}\">
    <js-placeholder token=\"{{ placeholder_token }}\">
    {% if  library_template[\"css_header\"] %}
        {{library_template[\"css_header\"]|raw}}
    {% endif %}
    {% if  library_template[\"js_header\"] %}
        {{library_template[\"js_header\"]|raw}}
    {% endif %}
    <style>{{ css_template|raw }}</style>
    </head>
    <body{{ attributes.addClass(body_classes) }} >
    {#
      Keyboard navigation/accessibility link to main content section in
      page.html.twig.
    #}
    {#<a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">#}
      {#{{ 'Skip to main content'|t }}#}
    {#</a>#}
    {{ page_top }}
    {{ page }}
    {{ page_bottom }}

    <js-bottom-placeholder token=\"{{ placeholder_token }}\">
    {% if library_template[\"js_footer\"] %}
        {{library_template[\"js_footer\"]|raw}}
    {% endif %}
    <script>{{js_template|raw}}</script>

  </body>
</html>
{% endif %}
", "modules/contrib/templating/templates/misc/html.html.twig", "/Applications/MAMP/htdocs/global_9/modules/contrib/templating/templates/misc/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 30);
        static $filters = array("escape" => 2, "clean_class" => 32, "safe_join" => 42, "raw" => 47);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'clean_class', 'safe_join', 'raw'],
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
