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

/* /themes/custom/staydirect_template_1/templates/templating/css/block--staydirect-template-1-main-slider-full.html.css */
class __TwigTemplate_2bdaece3bc136a351e60158f996b3d07 extends \Twig\Template
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
        echo ".container-slider--resp {
  width: 100%;
  position: relative;
  margin: auto;
} 
.ctrl--left, .ctrl--right {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  border: 1.6px solid var(--bleu-color);
  z-index: 3;
}
.ctrl--slider svg path
{
  fill: var(--bleu-color);
}
.ctrl--slider svg path
{
  fill: var(--bleu-color);
}

.container-slider--resp {
  max-width: 100% !important;
}
.container-slider--resp .swiper-slider--resp .swiper-slide {
  background: #882525;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
}
.container-slider--resp .swiper-slider--resp .swiper-slide img {
  object-fit: cover;
  width: 100%;
  height: 100%;
}
@media (max-width: 499.96px) {
  .container-slider--resp {
    max-width: 100% !important;
    padding-left: 48px;
    padding-right: 48px;
  }
  .container-slider--resp .slider {
    background: yellow;
    height: 288px;
  }
  .ctrl--left {
    left:0px;
  }
  .ctrl--right {
    right:0px;
  }
  .ctrl--left, .ctrl--right {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }
  .container-slider--resp  .swiper-slider--resp {
    width: 100%;
    height: 100%;
    background: #fff;
  }
  .container-slider--resp  .swiper-slider--resp .swiper-slide {
    border-radius: 20px;
    transition: scale .5s;
    transform: scale(0.8, .7587);
    
  }
  .container-slider--resp .swiper-slide-active, .container-slider--resp .swiper-slide-duplicate-active, .container-slider--resp .swiper-slide-fully-visible .swiper-slide-active {
      transition: scale .5s;
      z-index: 4;
      border-radius: 12px !important;
      transform: scale(2.10341, 1) !important;
  }
}
@media (min-width: 499.98px) {
  .container-slider--resp {
    max-width: 100% !important;
    padding-left: 48px;
    padding-right: 48px;
  }
  .container-slider--resp .slider {
    background: yellow;
    height: 373px;
  }
  .ctrl--left {
    left:0px;
  }
  .ctrl--right {
    right:0px;
  }
  .ctrl--left, .ctrl--right {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }
  .container-slider--resp  .swiper-slider--resp {
    width: 100%;
    height: 100%;
    background: #fff;
  }
  .container-slider--resp  .swiper-slider--resp .swiper-slide {
    border-radius: 20px;
    transition: scale .5s;
    transform: scale(0.8, .7587);
    
  }
  .container-slider--resp .swiper-slide-active, .container-slider--resp .swiper-slide-duplicate-active, .container-slider--resp .swiper-slide-fully-visible .swiper-slide-active {
      transition: scale .5s;
      z-index: 4;
      border-radius: 12px !important;
      transform: scale(2.10341, 1) !important;
  }
}
@media (min-width: 767.98px) {
  .container-slider--resp {
    max-width: 100% !important;
    padding-left: 65px;
    padding-right: 65px;
  }
  .container-slider--resp .slider {
    background: yellow;
    height: 339px;
  }
  .ctrl--left {
    left:0px;
  }
  .ctrl--right {
    right:0px;
  }
  .ctrl--left, .ctrl--right {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }
  .container-slider--resp  .swiper-slider--resp {
    width: 100%;
    height: 100%;
    background: #fff;
  }
  .container-slider--resp  .swiper-slider--resp .swiper-slide {
    height: 100%;
    border-radius: 20px;
    transition: scale .4s;
    transform: scale(.8265, .83481);
    z-index: 9 !important;
  }
  .container-slider--resp .swiper-slide-active, .container-slider--resp .swiper-slide-duplicate-active, .container-slider--resp .swiper-slide-fully-visible .swiper-slide-active {
      transition: scale .4s;
      transform: scale(1.19145, 1) !important;
      z-index: 10 !important;
     
  }
}
@media (min-width: 991.98px) {
  .container-slider--resp {
    max-width: 100%;
    padding-left: 65px;
    padding-right: 65px;
  }
  .container-slider--resp .slider {
    background: yellow;
    height: 339px;
  }
  .ctrl--left {
    left:0px;
  }
  .ctrl--right {
    right:0px;
  }
  .ctrl--left, .ctrl--right {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }
  .container-slider--resp .swiper-slider--resp {
    width: 100%;
    height: 100%;
    background: #fff;
  }
  .container-slider--resp .swiper-slider--resp .swiper-slide {
    height: 100%;
    border-radius: 20px;
    transition: scale .4s;
    transform: none;
  }
  .container-slider--resp .swiper-slider--resp .swiper-slide {
    height: 100%;
    border-radius: 20px;
   
  }
  .container-slider--resp .swiper-slide-active, .container-slider--resp .swiper-slide-duplicate-active, .container-slider--resp .swiper-slide-fully-visible .swiper-slide-active {
      transition: scale .4s;
      transform: none !important;
  }
}
@media (min-width: 1199.98px) {
  .container-slider--resp {
    max-width: 1200px !important;
    padding-left: 65px;
    padding-right: 65px;
  }
  .container-slider--resp .slider {
    background: yellow;
    height: 500px;
  }
  .ctrl--left {
    left:0px;
  }
  .ctrl--right {
    right:0px;
  }
  .ctrl--left, .ctrl--right {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }
  .container-slider--resp .swiper-slider--resp {
    width: 100%;
    height: 100%;
    background: #fff;
  }
  .container-slider--resp .swiper-slider--resp .swiper-slide {
    height: 100%;
    border-radius: 20px;
  }
}
@media (min-width: 1385.98px) {
  .container-slider--resp {
    max-width: 1200px !important;
    padding-left: 0;
    padding-right: 0;
  }
  .container-slider--resp .slider {
    background: yellow;
    height: 500px;
  }
  .ctrl--left {
    left:-70px;
  }
  .ctrl--right {
    right:-70px;
  }
  .ctrl--left, .ctrl--right {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }
  .container-slider--resp .swiper-slider--resp {
    width: 100%;
    height: 100%;
    background: #fff;
  }
  .container-slider--resp .swiper-slider--resp .swiper-slide {
    height: 100%;
    border-radius: 20px;
  }
}
@media (min-width: 1499.98px) {
  .container-slider--resp {
    max-width: 1200px !important;
    padding-left: 0;
    padding-right: 0;
  }
  .container-slider--resp .slider {
    background: yellow;
    height: 500px;
  }
  .ctrl--left {
    left:-95px;
  }
  .ctrl--right {
    right:-95px;
  }
  .ctrl--left, .ctrl--right {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }
  .container-slider--resp .swiper-slider--resp {
    width: 100%;
    height: 100%;
    background: #fff;
  }
  .container-slider--resp .swiper-slider--resp .swiper-slide {
    height: 100%;
    border-radius: 20px;
  }
}";
    }

    public function getTemplateName()
    {
        return "/themes/custom/staydirect_template_1/templates/templating/css/block--staydirect-template-1-main-slider-full.html.css";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".container-slider--resp {
  width: 100%;
  position: relative;
  margin: auto;
} 
.ctrl--left, .ctrl--right {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  border: 1.6px solid var(--bleu-color);
  z-index: 3;
}
.ctrl--slider svg path
{
  fill: var(--bleu-color);
}
.ctrl--slider svg path
{
  fill: var(--bleu-color);
}

.container-slider--resp {
  max-width: 100% !important;
}
.container-slider--resp .swiper-slider--resp .swiper-slide {
  background: #882525;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
}
.container-slider--resp .swiper-slider--resp .swiper-slide img {
  object-fit: cover;
  width: 100%;
  height: 100%;
}
@media (max-width: 499.96px) {
  .container-slider--resp {
    max-width: 100% !important;
    padding-left: 48px;
    padding-right: 48px;
  }
  .container-slider--resp .slider {
    background: yellow;
    height: 288px;
  }
  .ctrl--left {
    left:0px;
  }
  .ctrl--right {
    right:0px;
  }
  .ctrl--left, .ctrl--right {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }
  .container-slider--resp  .swiper-slider--resp {
    width: 100%;
    height: 100%;
    background: #fff;
  }
  .container-slider--resp  .swiper-slider--resp .swiper-slide {
    border-radius: 20px;
    transition: scale .5s;
    transform: scale(0.8, .7587);
    
  }
  .container-slider--resp .swiper-slide-active, .container-slider--resp .swiper-slide-duplicate-active, .container-slider--resp .swiper-slide-fully-visible .swiper-slide-active {
      transition: scale .5s;
      z-index: 4;
      border-radius: 12px !important;
      transform: scale(2.10341, 1) !important;
  }
}
@media (min-width: 499.98px) {
  .container-slider--resp {
    max-width: 100% !important;
    padding-left: 48px;
    padding-right: 48px;
  }
  .container-slider--resp .slider {
    background: yellow;
    height: 373px;
  }
  .ctrl--left {
    left:0px;
  }
  .ctrl--right {
    right:0px;
  }
  .ctrl--left, .ctrl--right {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }
  .container-slider--resp  .swiper-slider--resp {
    width: 100%;
    height: 100%;
    background: #fff;
  }
  .container-slider--resp  .swiper-slider--resp .swiper-slide {
    border-radius: 20px;
    transition: scale .5s;
    transform: scale(0.8, .7587);
    
  }
  .container-slider--resp .swiper-slide-active, .container-slider--resp .swiper-slide-duplicate-active, .container-slider--resp .swiper-slide-fully-visible .swiper-slide-active {
      transition: scale .5s;
      z-index: 4;
      border-radius: 12px !important;
      transform: scale(2.10341, 1) !important;
  }
}
@media (min-width: 767.98px) {
  .container-slider--resp {
    max-width: 100% !important;
    padding-left: 65px;
    padding-right: 65px;
  }
  .container-slider--resp .slider {
    background: yellow;
    height: 339px;
  }
  .ctrl--left {
    left:0px;
  }
  .ctrl--right {
    right:0px;
  }
  .ctrl--left, .ctrl--right {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }
  .container-slider--resp  .swiper-slider--resp {
    width: 100%;
    height: 100%;
    background: #fff;
  }
  .container-slider--resp  .swiper-slider--resp .swiper-slide {
    height: 100%;
    border-radius: 20px;
    transition: scale .4s;
    transform: scale(.8265, .83481);
    z-index: 9 !important;
  }
  .container-slider--resp .swiper-slide-active, .container-slider--resp .swiper-slide-duplicate-active, .container-slider--resp .swiper-slide-fully-visible .swiper-slide-active {
      transition: scale .4s;
      transform: scale(1.19145, 1) !important;
      z-index: 10 !important;
     
  }
}
@media (min-width: 991.98px) {
  .container-slider--resp {
    max-width: 100%;
    padding-left: 65px;
    padding-right: 65px;
  }
  .container-slider--resp .slider {
    background: yellow;
    height: 339px;
  }
  .ctrl--left {
    left:0px;
  }
  .ctrl--right {
    right:0px;
  }
  .ctrl--left, .ctrl--right {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }
  .container-slider--resp .swiper-slider--resp {
    width: 100%;
    height: 100%;
    background: #fff;
  }
  .container-slider--resp .swiper-slider--resp .swiper-slide {
    height: 100%;
    border-radius: 20px;
    transition: scale .4s;
    transform: none;
  }
  .container-slider--resp .swiper-slider--resp .swiper-slide {
    height: 100%;
    border-radius: 20px;
   
  }
  .container-slider--resp .swiper-slide-active, .container-slider--resp .swiper-slide-duplicate-active, .container-slider--resp .swiper-slide-fully-visible .swiper-slide-active {
      transition: scale .4s;
      transform: none !important;
  }
}
@media (min-width: 1199.98px) {
  .container-slider--resp {
    max-width: 1200px !important;
    padding-left: 65px;
    padding-right: 65px;
  }
  .container-slider--resp .slider {
    background: yellow;
    height: 500px;
  }
  .ctrl--left {
    left:0px;
  }
  .ctrl--right {
    right:0px;
  }
  .ctrl--left, .ctrl--right {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }
  .container-slider--resp .swiper-slider--resp {
    width: 100%;
    height: 100%;
    background: #fff;
  }
  .container-slider--resp .swiper-slider--resp .swiper-slide {
    height: 100%;
    border-radius: 20px;
  }
}
@media (min-width: 1385.98px) {
  .container-slider--resp {
    max-width: 1200px !important;
    padding-left: 0;
    padding-right: 0;
  }
  .container-slider--resp .slider {
    background: yellow;
    height: 500px;
  }
  .ctrl--left {
    left:-70px;
  }
  .ctrl--right {
    right:-70px;
  }
  .ctrl--left, .ctrl--right {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }
  .container-slider--resp .swiper-slider--resp {
    width: 100%;
    height: 100%;
    background: #fff;
  }
  .container-slider--resp .swiper-slider--resp .swiper-slide {
    height: 100%;
    border-radius: 20px;
  }
}
@media (min-width: 1499.98px) {
  .container-slider--resp {
    max-width: 1200px !important;
    padding-left: 0;
    padding-right: 0;
  }
  .container-slider--resp .slider {
    background: yellow;
    height: 500px;
  }
  .ctrl--left {
    left:-95px;
  }
  .ctrl--right {
    right:-95px;
  }
  .ctrl--left, .ctrl--right {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }
  .container-slider--resp .swiper-slider--resp {
    width: 100%;
    height: 100%;
    background: #fff;
  }
  .container-slider--resp .swiper-slider--resp .swiper-slide {
    height: 100%;
    border-radius: 20px;
  }
}", "/themes/custom/staydirect_template_1/templates/templating/css/block--staydirect-template-1-main-slider-full.html.css", "/Applications/MAMP/htdocs/global_9/themes/custom/staydirect_template_1/templates/templating/css/block--staydirect-template-1-main-slider-full.html.css");
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
