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

/* /themes/custom/staydirect_template_1/templates/templating/css/block--staydirect-template-1-check-availaibility-full.html.css */
class __TwigTemplate_e9012b022798d197eddb3cf328cf7a99 extends \Twig\Template
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
        echo "*::after,
*::before {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

* {
    scroll-behavior: smooth;
}
.btn--resp {
  padding: 20px 35px;
  justify-content: center;
  align-items: center;
  gap: 10px;
  border-radius: 38px;
  background: var(--bleu-color);
  color: #FFF;
  font-family: \"Montserrat\";
  font-size: 18px;
  font-style: normal;
  font-weight: 800;
  line-height: normal;
}
ul {
  margin-bottom: 0;
  padding-left: 0;
  padding-right: 0;
}
ul li {
  list-style-type: none;
}
.wrapper--resp {
margin: auto;
} 
header .menu-main--resp ul {
display: flex;
flex-direction: row;
gap: 39px;
}  
header .menu-main--resp ul li a{
color: var(--bleumarine-color);
font-family: \"Montserrat\";
font-size: 23px;
font-style: normal;
font-weight: 500;
line-height: normal;
} 
header .menu-main--resp ul li.active a {
color: var(--bleu-color);
} 
header .menu-main--resp ul li.active::after {
content: \"\";
width: 29px;
height: 3px;
background: var(--bleu-color);
margin-top: 10px !important;
display: block ;
margin: auto;
}
@media (max-width: 499.96px) {
.wrapper--resp {
  width: 100%;
  max-width: none !important;
  padding-left: 20px;
  padding-right:20px
}
.none-mob {
  display: none !important;
}
}
@media (min-width: 499.98px) {
.wrapper--resp {
  width: 100%;
  max-width: none;
  padding-left: 20px;
  padding-right:20px;
}
.none-mob {
  display: none !important;
}
}
@media (min-width: 767.98px) {
.wrapper--resp {
  width: 100%;
  max-width: none !important;
  padding-left: 40px;
  padding-right:40px
}
.none-tab {
  display: none !important;
}
}
@media (min-width: 991.98px) {
.wrapper--resp {
  width: 100%;
  max-width: none !important;
  padding-left: 60px;
  padding-right:60px;
}
.none-desk, .menu-mobile-effet {
  display: none !important;
}

}
@media (min-width: 1199.98px) {
.wrapper--resp {
  width: 100%;
  max-width: none !important;
  padding-left: 60px;
  padding-right:60px;
}
}
@media (min-width: 1385.98px) {
  .wrapper--resp {
    max-width: 1200px !important;
    padding-left: 0px;
    padding-right:0px;
  }
}
@media (min-width: 1499.98px) {
.wrapper--resp {
  max-width: 1500px;
  padding-left: 0px;
  padding-right:0px;
}
}
.container-book-form #datepicker {
  height: 40px;
  padding: 15px;
  margin-bottom: 10px;
}";
    }

    public function getTemplateName()
    {
        return "/themes/custom/staydirect_template_1/templates/templating/css/block--staydirect-template-1-check-availaibility-full.html.css";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("*::after,
*::before {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

* {
    scroll-behavior: smooth;
}
.btn--resp {
  padding: 20px 35px;
  justify-content: center;
  align-items: center;
  gap: 10px;
  border-radius: 38px;
  background: var(--bleu-color);
  color: #FFF;
  font-family: \"Montserrat\";
  font-size: 18px;
  font-style: normal;
  font-weight: 800;
  line-height: normal;
}
ul {
  margin-bottom: 0;
  padding-left: 0;
  padding-right: 0;
}
ul li {
  list-style-type: none;
}
.wrapper--resp {
margin: auto;
} 
header .menu-main--resp ul {
display: flex;
flex-direction: row;
gap: 39px;
}  
header .menu-main--resp ul li a{
color: var(--bleumarine-color);
font-family: \"Montserrat\";
font-size: 23px;
font-style: normal;
font-weight: 500;
line-height: normal;
} 
header .menu-main--resp ul li.active a {
color: var(--bleu-color);
} 
header .menu-main--resp ul li.active::after {
content: \"\";
width: 29px;
height: 3px;
background: var(--bleu-color);
margin-top: 10px !important;
display: block ;
margin: auto;
}
@media (max-width: 499.96px) {
.wrapper--resp {
  width: 100%;
  max-width: none !important;
  padding-left: 20px;
  padding-right:20px
}
.none-mob {
  display: none !important;
}
}
@media (min-width: 499.98px) {
.wrapper--resp {
  width: 100%;
  max-width: none;
  padding-left: 20px;
  padding-right:20px;
}
.none-mob {
  display: none !important;
}
}
@media (min-width: 767.98px) {
.wrapper--resp {
  width: 100%;
  max-width: none !important;
  padding-left: 40px;
  padding-right:40px
}
.none-tab {
  display: none !important;
}
}
@media (min-width: 991.98px) {
.wrapper--resp {
  width: 100%;
  max-width: none !important;
  padding-left: 60px;
  padding-right:60px;
}
.none-desk, .menu-mobile-effet {
  display: none !important;
}

}
@media (min-width: 1199.98px) {
.wrapper--resp {
  width: 100%;
  max-width: none !important;
  padding-left: 60px;
  padding-right:60px;
}
}
@media (min-width: 1385.98px) {
  .wrapper--resp {
    max-width: 1200px !important;
    padding-left: 0px;
    padding-right:0px;
  }
}
@media (min-width: 1499.98px) {
.wrapper--resp {
  max-width: 1500px;
  padding-left: 0px;
  padding-right:0px;
}
}
.container-book-form #datepicker {
  height: 40px;
  padding: 15px;
  margin-bottom: 10px;
}", "/themes/custom/staydirect_template_1/templates/templating/css/block--staydirect-template-1-check-availaibility-full.html.css", "/Applications/MAMP/htdocs/global_9/themes/custom/staydirect_template_1/templates/templating/css/block--staydirect-template-1-check-availaibility-full.html.css");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
