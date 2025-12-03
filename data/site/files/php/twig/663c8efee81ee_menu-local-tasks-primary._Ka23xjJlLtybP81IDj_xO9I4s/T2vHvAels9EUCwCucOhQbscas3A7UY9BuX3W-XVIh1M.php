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

/* modules/custom/layout/mz_layout/templates/menu-local-tasks-primary.html.twig */
class __TwigTemplate_5cd2dee3fd019f7ee7a560c8da2a834b extends \Twig\Template
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
        echo "
";
        // line 2
        if ((Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::current_node_type_twig() == "landing_page")) {
            // line 3
            if (($context["primary"] ?? null)) {
                // line 4
                echo "    <style>

        ";
                // line 6
                $context["size"] = 50;
                // line 7
                echo "        ";
                $context["step"] = 3;
                // line 8
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["primary"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                    // line 9
                    echo "            .menu-mizara-open:checked ~ .menu-mizara-item:nth-child(";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["step"] ?? null), 9, $this->source), "html", null, true);
                    echo ") {
                transition-duration: 290ms;
                transform: translate3d(0,-";
                    // line 11
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["size"] ?? null), 11, $this->source), "html", null, true);
                    echo "px,0);
            }
            ";
                    // line 13
                    $context["size"] = (50 + ($context["size"] ?? null));
                    // line 14
                    echo "        ";
                    $context["step"] = (($context["step"] ?? null) + 1);
                    // line 15
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "
    </style>
    ";
                // line 18
                $context["icons"] = ["layout_builder_ui:layout_builder.overrides.node.view" => "/core/misc/icons/000000/puzzlepiece.svg", "entity.node.edit_form" => "/core/misc/icons/bebebe/pencil.svg", "entity.node.delete_form" => "/core/misc/icons/ee0000/ex.svg", "entity.node.canonical" => "/core/misc/icons/505050/loupe.svg"];
                // line 25
                echo "
    <div class=\"menu-float-mizara\">
        <nav class=\"menu-mizara\">
            <input type=\"checkbox\" href=\"#\" class=\"menu-mizara-open\" name=\"menu-mizara-open\" id=\"menu-mizara-open\"/>
            <label class=\"menu-mizara-open-button\" for=\"menu-mizara-open\">
                
            <?xml version=\"1.0\" ?><svg class=\"feather feather-edit\" fill=\"none\" height=\"24\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" viewBox=\"0 0 24 24\" width=\"24\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"/><path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"/></svg>
            </label>
            ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["primary"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                    // line 34
                    echo "                 ";
                    if (((($__internal_compile_0 = (($__internal_compile_1 = $context["item"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#link"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["title"] ?? null) : null) == "Layout")) {
                        // line 35
                        echo "                      <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = (($__internal_compile_3 = $context["item"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#link"] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["url"] ?? null) : null), "toString", [], "method", false, false, true, 35), 35, $this->source), "html", null, true);
                        echo "\" class=\"menu-mizara-item\"> <span class=\"mzlabel\">Edit your page</span> </a>       
                ";
                    }
                    // line 36
                    echo " 
           ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "        </nav>

        <!-- filters -->
        <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\">
            <defs>
                <filter id=\"shadowed-goo\">

                    <feGaussianBlur in=\"SourceGraphic\" result=\"blur\" stdDeviation=\"10\" />
                    <feColorMatrix in=\"blur\" mode=\"matrix\" values=\"1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7\" result=\"goo\" />
                    <feGaussianBlur in=\"goo\" stdDeviation=\"3\" result=\"shadow\" />
                    <feColorMatrix in=\"shadow\" mode=\"matrix\" values=\"0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 1 -0.2\" result=\"shadow\" />
                    <feOffset in=\"shadow\" dx=\"1\" dy=\"1\" result=\"shadow\" />
                    <feComposite in2=\"shadow\" in=\"goo\" result=\"goo\" />
                    <feComposite in2=\"goo\" in=\"SourceGraphic\" result=\"mix\" />
                </filter>
                <filter id=\"goo\">
                    <feGaussianBlur in=\"SourceGraphic\" result=\"blur\" stdDeviation=\"10\" />
                    <feColorMatrix in=\"blur\" mode=\"matrix\" values=\"1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7\" result=\"goo\" />
                    <feComposite in2=\"goo\" in=\"SourceGraphic\" result=\"mix\" />
                </filter>
            </defs>
        </svg>
    </div>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "modules/custom/layout/mz_layout/templates/menu-local-tasks-primary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 38,  111 => 36,  105 => 35,  102 => 34,  98 => 33,  88 => 25,  86 => 18,  82 => 16,  76 => 15,  73 => 14,  71 => 13,  66 => 11,  60 => 9,  55 => 8,  52 => 7,  50 => 6,  46 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% if current_node_type() == 'landing_page' %}
{% if primary %}
    <style>

        {% set size = 50  %}
        {% set step = 3  %}
        {% for key, item in primary %}
            .menu-mizara-open:checked ~ .menu-mizara-item:nth-child({{ step }}) {
                transition-duration: 290ms;
                transform: translate3d(0,-{{ size }}px,0);
            }
            {% set size = 50 + size   %}
        {% set step = step + 1   %}
        {% endfor %}

    </style>
    {% set icons = {
    'layout_builder_ui:layout_builder.overrides.node.view': '/core/misc/icons/000000/puzzlepiece.svg',
    'entity.node.edit_form': '/core/misc/icons/bebebe/pencil.svg',
    'entity.node.delete_form': '/core/misc/icons/ee0000/ex.svg' ,
    'entity.node.canonical': '/core/misc/icons/505050/loupe.svg'
    }
    %}

    <div class=\"menu-float-mizara\">
        <nav class=\"menu-mizara\">
            <input type=\"checkbox\" href=\"#\" class=\"menu-mizara-open\" name=\"menu-mizara-open\" id=\"menu-mizara-open\"/>
            <label class=\"menu-mizara-open-button\" for=\"menu-mizara-open\">
                
            <?xml version=\"1.0\" ?><svg class=\"feather feather-edit\" fill=\"none\" height=\"24\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" viewBox=\"0 0 24 24\" width=\"24\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"/><path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"/></svg>
            </label>
            {% for key, item in primary %}
                 {% if item['#link']['title'] ==\"Layout\" %}
                      <a href=\"{{ item['#link']['url'].toString() }}\" class=\"menu-mizara-item\"> <span class=\"mzlabel\">Edit your page</span> </a>       
                {% endif %} 
           {% endfor %}
        </nav>

        <!-- filters -->
        <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\">
            <defs>
                <filter id=\"shadowed-goo\">

                    <feGaussianBlur in=\"SourceGraphic\" result=\"blur\" stdDeviation=\"10\" />
                    <feColorMatrix in=\"blur\" mode=\"matrix\" values=\"1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7\" result=\"goo\" />
                    <feGaussianBlur in=\"goo\" stdDeviation=\"3\" result=\"shadow\" />
                    <feColorMatrix in=\"shadow\" mode=\"matrix\" values=\"0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 1 -0.2\" result=\"shadow\" />
                    <feOffset in=\"shadow\" dx=\"1\" dy=\"1\" result=\"shadow\" />
                    <feComposite in2=\"shadow\" in=\"goo\" result=\"goo\" />
                    <feComposite in2=\"goo\" in=\"SourceGraphic\" result=\"mix\" />
                </filter>
                <filter id=\"goo\">
                    <feGaussianBlur in=\"SourceGraphic\" result=\"blur\" stdDeviation=\"10\" />
                    <feColorMatrix in=\"blur\" mode=\"matrix\" values=\"1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7\" result=\"goo\" />
                    <feComposite in2=\"goo\" in=\"SourceGraphic\" result=\"mix\" />
                </filter>
            </defs>
        </svg>
    </div>
{% endif %}
{% endif %}
", "modules/custom/layout/mz_layout/templates/menu-local-tasks-primary.html.twig", "/Applications/MAMP/htdocs/global_9/modules/custom/layout/mz_layout/templates/menu-local-tasks-primary.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "set" => 6, "for" => 8);
        static $filters = array("escape" => 9);
        static $functions = array("current_node_type" => 2);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape'],
                ['current_node_type']
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
