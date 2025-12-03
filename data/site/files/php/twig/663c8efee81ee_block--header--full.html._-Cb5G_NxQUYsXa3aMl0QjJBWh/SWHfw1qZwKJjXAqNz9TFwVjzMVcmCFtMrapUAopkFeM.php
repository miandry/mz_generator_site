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

/* themes/custom/staydirect_template_1/templates/templating/block--header--full.html.twig */
class __TwigTemplate_b70925283d84d91aa443d37912eff45a extends \Twig\Template
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
        return $this->loadTemplate((Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::get_module_path("templating") . "/templates/misc/block.html.twig"), "themes/custom/staydirect_template_1/templates/templating/block--header--full.html.twig", 1);
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
        $context["item_name"] = "block--staydirect-template-1-header-full.html";
        echo " 
";
        // line 5
        $context["path_css"] = (("/themes/custom/staydirect_template_1/templates/templating/css/" . $this->sandbox->ensureToStringAllowed(($context["item_name"] ?? null), 5, $this->source)) . ".css");
        // line 6
        $context["css"] = twig_include($this->env, $context, $this->sandbox->ensureToStringAllowed(($context["path_css"] ?? null), 6, $this->source));
        echo " 
";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\templating\TwigExtension\DefaultTwigExtension::render_css_twig($this->sandbox->ensureToStringAllowed(($context["css"] ?? null), 7, $this->source), "block__staydirect_template_1_header_full"), "html", null, true);
        echo "

";
        // line 9
        $context["c"] = Drupal\entity_parser\TwigExtension\DefaultTwigExtension::block_parser_twig($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 9, $this->source));
        // line 10
        $context["menu1"] = $this->env->getFunction('simplify_menu')->getCallable()($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "field_menu1", [], "any", false, false, true, 10), 10, $this->source));
        // line 11
        $context["menu1_length"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu1"] ?? null), 11, $this->source));
        // line 12
        $context["links"] = (($__internal_compile_0 = ($context["c"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["field_link"] ?? null) : null);
        // line 13
        $context["c"] = Drupal\entity_parser\TwigExtension\DefaultTwigExtension::block_parser_twig($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 13, $this->source));
        // line 14
        $context["menu1"] = $this->env->getFunction('simplify_menu')->getCallable()($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "field_menu1", [], "any", false, false, true, 14), 14, $this->source));
        // line 15
        $context["menu1_length"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu1"] ?? null), 15, $this->source));
        // line 16
        $context["links"] = (($__internal_compile_1 = ($context["c"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["field_link"] ?? null) : null);
        // line 17
        echo "
<style>
    @import url('https://fonts.cdnfonts.com/css/valentine-2');
    .header-sticky.shawdow {
        margin-top: 53px !important;
    }
    .navbar--fixed--top {
      height: 53px;
      color: #fff;
      font-size: 1.25rem;
    }
    .navbar--fixed--top .navbar--fixed-container {
      padding-left: 25px !important;
      padding-right: 25px !important;
      display: flex !important;
      flex-direction: row;
      justify-content: space-between;
      align-items: center !important;
      width: 100%;
    }
    .navbar--fixed--top .navbar--fixed-container .navbar--fixed-right .btn--3d {
      -webkit-box-shadow: 0 2px 0 #6f9a37;
      box-shadow: 0 2px 0 #6f9a37;
      position: relative;
      background: var(--Dgrad-bleu, linear-gradient(138deg, rgba(98, 146, 158, 0.80) -15.04%, #62929E 104.44%)) !important;
      font-size: 14px;
      padding: 5px 20px;
      line-height: 1.5;
      color: white;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      display: inline-block;
      margin: 0;
      border: none;
      border-radius: 4px;
      font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      font-style: normal !important;
    } 
    .navbar--fixed--top .navbar--fixed-container .navbar--fixed-center {
      color: #fff;
      border: none;
      display: inline-flex;
      align-items: center;
      height: 60px;
      padding: 0 80px;
      border-radius: 8px;
      font-size: 18px;
      text-align: center;
      white-space: nowrap;
      transition: all .3s;
    }
    .navbar--fixed--top .navbar--fixed-container .navbar--fixed-left .link--staydirect-logo {
        color: #fff !important;
        font-family: \"vastine\" !important;
        font-size: 20px !important;
        font-style: normal !important;
        font-weight: 400 !important;
        line-height: 150% !important;
        text-align: center !important;
        text-transform: uppercase;
    } 

  </style>
  ";
        // line 85
        $context["status"] = Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::twig_config("mz_payement.status", "status");
        // line 86
        $context["sites"] = Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::twig_config("mz_payement.status", "site_variables");
        // line 87
        echo "
  ";
        // line 88
        $context["site_id"] = (($__internal_compile_2 = ($context["site_variables"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["site_id"] ?? null) : null);
        echo " 
 ";
        // line 89
        $context["parent_site"] = (($__internal_compile_3 = ($context["site_variables"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["parent_site"] ?? null) : null);
        echo " 
 ";
        // line 90
        if ((($context["status"] ?? null) == "confirmed")) {
            // line 91
            echo "   <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark navbar--fixed--top\">
      <div class=\"navbar--fixed-container\">
        <div class=\"navbar--fixed-left\">
          <div class=\"preview--staydirect-logo\">
            <a class=\"link--staydirect-logo\" href=\"#\">StayDirect</a>
          </div>
        </div>
        <div class=\"navbar--fixed-left\">
            Please setup your bank account for payment process
        </div>
        <div class=\"navbar--fixed-right\">
          <div class=\"preview--action--buy\">
            <a class=\"header-buy-now btn--3d color--primary\" href=\"/user/login?destination=/admin/bank/setup\">Start Setup</a>
          </div>
        </div>
      </div>
  </nav>
 ";
        } else {
            // line 109
            echo "  <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark navbar--fixed--top\">
      <div class=\"navbar--fixed-container\">
        <div class=\"navbar--fixed-left\">
          <div class=\"preview--staydirect-logo\">
            <a class=\"link--staydirect-logo\" href=\"#\">StayDirect</a>
          </div>
        </div>
        <div class=\"navbar--fixed-left\">
            Please this site still demo version
        </div>
        <div class=\"navbar--fixed-right\">
          <div class=\"preview--action--buy\">
            <a class=\"header-buy-now btn--3d color--primary\" href=\"/parent-action?action=start_payment&site_id=";
            // line 121
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_id"] ?? null), 121, $this->source), "html", null, true);
            echo "&parent=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["parent_site"] ?? null), 121, $this->source), "html", null, true);
            echo "\">Buy now</a>
          </div>
        </div>
      </div>
  </nav>
";
        }
        // line 126
        echo "  
<style>
    *,
    *::after,
    *::before {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    * {
        scroll-behavior: smooth;
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
    form.user-pass input[type=\"submit\"] {
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
        border: none !important;
        margin-top: 25px;
    }
    form.user-pass {
        max-width: 54%;
        margin: auto;
        margin-top: 75px;
        margin-bottom: 75px;
        /* margin: auto; */
        text-align: center;
    }

    .header--sticky-htl .menu-mobile-effet1.show li a
    {
        font-family: \"Montserrat\";
        font-style: normal;
        line-height: normal;
        font-size: 15px !important;
        font-weight: 400 !important;
        color: rgb(255, 255, 255) !important;
    }
    .container-book-right a {
        color: #fff !important;
        border: solid 1px #fff !important;
        padding: 15px 10px !important;
        border-radius: 13px !important;
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

    header .menu-main--resp ul {
        display: flex;
        flex-direction: row;
        gap: 39px;
    }  
    header .menu-main--resp ul li a{
        color: var(--bleumarine-color);
        font-family: \"Montserrat\";
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    } 
    header .menu-main--resp ul.list-header li a{ 
        font-size:  23px !important;
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
    header {
        padding-top: 38px;
        padding-bottom: 38px;
        background: #fff;
        z-index: 5;
        margin-top: 39px;
    }
    header .container-header--resp {
        height: 62px;
        display: flex;
        justify-content: space-between;
        flex-direction: row;
        flex-wrap: nowrap;
        align-items: center;
    }
    header .content-header-left--resp {
        margin-right: auto;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    header .content-header-right--resp {
        margin-left: auto;
        display: flex;
        justify-content: space-between;
        gap: 93px;
        margin-top: 15px;
    }
    .logo--resp h1 {
        margin-bottom: 0;
    }
    .logo--resp h1 a {
        color: var(--bleumarine-color) !important;
        font-family: \"Playfair Display\";
        font-style: normal;
        font-weight: 800;
        line-height: normal;
        font-size: 30px !important;
    }
    .humberger-menu {
        width: 62px;
        height: 62px;
        flex-shrink: 0;
        border-radius: 14.286px;
        border: 1.429px solid var(--bleumarine-color);
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }
    .humberger-menu svg {
        width: 45px;
        height: 45px;
    }
    .humberger-menu svg path {
        stroke: var(--bleumarine-color);
    }
    .shawdow {
        background: #fff;
        -webkit-box-shadow: 0 0 20px rgba(0,0,0,0.35);
        box-shadow: 0 0 20px rgba(0,0,0,0.35);
    }
    /* star */
    .rating--resp {
        display: inline-block;
        padding-left: 40px;
    }
    .rating--resp svg {
        width: 21px;
        height: 21px;
    }
    /* end star */

    .btn--resp {  
        justify-content: center;
        align-items: center; 
        border-radius: 38px;
        background: var(--bleu-color);
        color: #FFF;
        font-family: \"Montserrat\";
        font-style: normal;
        font-weight: 800;
        line-height: normal;
    }
    .container-menu-resp {
        position: absolute;
        z-index: 5;
        left: 0;
        right: 0;
        width: 100%;
        background: #fff;
    }
    .content-menu-mobile {
        background: rgb(201 212 245 / 13%) !important;
    }
    .menu-mobile-effet {
        transition: all .3s linear !important ;
        overflow: hidden !important ;
        height: 0 !important ;
    }
    .menu-mobile-effet.show {
        height: 100vh !important
    }
    .content-menu-mobile li {
        padding: 20px 10px !important;
        text-align: center !important;
        line-height: 150% !important;
        list-style-type: none; 
    }
    .content-menu-mobile li a {
        font-family: \"Montserrat\";
        font-size: 18px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        margin-right: 39px !important;
        color: rgba(51, 51, 51, 0.60) !important
    }
        /*user*/
    .menu-mobile-effet1 {
        height: 100px;
        background: var(--bleu-color);
        position: absolute;
        width: 234px;
        transition: all .3s linear !important;
        overflow: hidden !important;
        height: 0 !important;
        top: 76px;
        color: #fff;
        z-index: 2;
    }
    .menu-mobile-effet1 ul {
        display: block !important;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .menu-mobile-effet1 ul.list-dropdwn li a {
        font-size: 15px !important;
        font-weight: 400 !important;
        color: rgb(255, 255, 255) !important;
    }
    .menu-mobile-effet1.show {
        height: auto !important
    }
    .menu-mobile-effet1 ul {

    }
    .menu-mobile-effet1 li {
        padding-left: 30px;
        padding-right: 30px;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    /*user */
    @media (max-width: 499.96px) {
        .logo--resp h1 a {
            font-size: 20px !important;
        }
        .humberger-menu {
            width: 50px;
            height: 50px; 
            justify-content: center;
            align-items: center;
            display: flex !important;
        }
        .humberger-menu svg {
            width: 32.153px;
            height: 32.143px;
        }
        header .content-header-right--resp {
            display: none;
        }
        .rating--resp {
            display: inline-block;
            padding-left: 15px;
        }
        .rating--resp svg {
            width: 18px;
            height: 18px;
        }
        header .menu-main--resp ul.list-header ul.list-dropdwn li a {
            font-size: 15px !important;
        }
    }
    @media (min-width: 499.98px) {
        .logo--resp h1 a {
            font-size: 25px !important;
        }
        .humberger-menu {
            width: 50px;
            height: 50px; 
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .humberger-menu svg {
            width: 32.153px;
            height: 32.143px;
        }
        header .content-header-right--resp {
            display: none;
        }
        header .menu-main--resp ul.list-header ul.list-dropdwn li a {
            font-size: 15px !important;
        }
    }
    @media (min-width: 767.98px) {
        .drop-down {
            display: flex;
        }
        .humberger-menu {
            width: 62px;
            height: 62px; 
        }
        .humberger-menu svg {
            width: 45px;
            height: 45px;
        }
        header .menu-main--resp ul.list-header ul.list-dropdwn li a {
            font-size: 15px !important;
        }
    }
    @media (min-width: 991.98px) {
        .logo--resp h1 a {
            font-size: 30px !important;
        }
        .btn--resp.plrfsz {
            padding: 20px 15px;
            gap: 10px;
            font-size: 15px;
            font-weight: 800;
        }
        .humberger-menu {
            display: none;
        }
        header .content-header-right--resp {
            display: flex;
        }
        .rating--resp {
            padding-left: 10px;
        }
        .rating--resp svg {
            width: 18px;
            height: 18px;
        }
        header .content-header-right--resp {
            gap: 15px;
        }
        header .menu-main--resp ul {
            gap: 25px;
        }
        header .menu-main--resp ul {
            gap: 20px;
        }
        .logo--resp h1 a {
            font-size: 25px !important;
        }
        header .menu-main--resp ul li a {
            font-weight: 500;
        }
        header .menu-main--resp ul.list-header li a{ 
            font-size:  19px !important;
        }
        header .menu-main--resp ul.list-header ul.list-dropdwn li a {
            font-size: 15px !important;
        }
        .menu-mobile-effet1 {
            top: 74px;
        }
    }
    @media (min-width: 1199.98px) {
        .btn--resp.plrfsz {
            padding: 20px 30px;
            gap: 10px;
            font-size: 18px;
            font-weight: 800;
        }
        .rating--resp {
            padding-left: 20px;
        }
        .rating--resp svg {
            width: 21px;
            height: 21px;
        }
        header .content-header-right--resp {
            gap: 55px;
        }
        header .menu-main--resp ul {
            gap: 39px;
        }
        header .menu-main--resp ul {
            gap: 39px;
        }
        .logo--resp h1 a {
            font-size: 30px !important;
        }
        header .menu-main--resp ul li a {
            font-weight: 500;
        }
        header .menu-main--resp ul.list-header li a{ 
            font-size:  23px !important;
        }
        header .menu-main--resp ul.list-header ul.list-dropdwn li a {
            font-size: 15px !important;
        }
        .menu-mobile-effet1 {
            top: 76px;
        }
        .menu-mobile-effet1 {
            width: 227px;
        }
    }
    @media (min-width: 1385.98px) {
        .btn--resp {
            padding: 20px 35px;
            gap: 10px;
            border-radius: 38px;
            font-size: 18px;    
        }
        .rating--resp svg {
            width: 21px;
            height: 21px;
        }
        header .content-header-right--resp {
            gap: 55px;
        }
        header .menu-main--resp ul {
            gap: 39px;
        }
    }
    @media (min-width: 1499.98px) {
        .btn--resp {
            padding: 20px 35px;
            gap: 10px;
            border-radius: 38px;
            font-size: 18px;    
        }
        .rating--resp svg {
            width: 21px;
            height: 21px;
        }
        header .content-header-right--resp {
            gap: 93px;
        }
        header .menu-main--resp ul {
            gap: 39px;
        }
    }
</style>
<header class=\"header-sticky header--sticky-htl\">
    <div class=\"wrapper--resp\">
    <div class=\"container-header--resp\">
        <div class=\"content-header-left--resp\">
        <div class=\"logo--resp\">
            <h1>
            <a href=\"";
        // line 640
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::base_url(), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "field_text", [], "any", false, false, true, 640), 640, $this->source), "html", null, true);
        echo "</a>
            <div class=\"rating--resp\" style=\"display: none;\">
                <div class=\"stars\">
                <i class=\"fa fa-star\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-star\" viewBox=\"0 0 16 16\"> <path d=\"M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z\"/> </svg>
                </i>
            
                <i class=\"fa fa-star\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-star\" viewBox=\"0 0 16 16\"> <path d=\"M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z\"/> </svg>
                </i>
                
                <i class=\"fa fa-star\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-star\" viewBox=\"0 0 16 16\"> <path d=\"M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z\"/> </svg>
                </i>

                <i class=\"fa fa-star\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-star\" viewBox=\"0 0 16 16\"> <path d=\"M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z\"/> </svg>
                </i>

                <i class=\"fa fa-star\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-star\" viewBox=\"0 0 16 16\"> <path d=\"M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z\"/> </svg>
                </i>

                </div>
            </div>
            </h1>
            
        </div>
        </div>
        <div class=\"content-header-right--resp\">
            <div class=\"menu-main--resp\">
                <ul class=\"list-header\">
                    ";
        // line 672
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["menu1"] ?? null), "menu_tree", [], "any", false, false, true, 672));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 673
            echo "                        <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::base_url(), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 673), 673, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 673), 673, $this->source), "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 675
        echo "                    ";
        if ( !Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::isLoginTwig()) {
            // line 676
            echo "                        <li style=\"position: relative;\" class=\"humberger-menu1\">
                            <a href=\"#\">
                                Login
                            </a>
                            <div class=\"menu-mobile-effet1\" style=\"\">
                                <ul>
                                    <li>
                                        <a href=\"";
            // line 683
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::base_url(), "html", null, true);
            echo "/login\">Login</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 686
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::base_url(), "html", null, true);
            echo "/register\">Register</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    ";
        } else {
            // line 691
            echo " 
                        <li style=\"position: relative;z-index: 99;\" class=\"humberger-menu1\">
                            <a href=\"#\">
                                My account
                            </a>
                            <div class=\"menu-mobile-effet1\">
                                <ul class=\"list-dropdwn\" style=\"color:#fff\">
                                    <li><a href=\"";
            // line 698
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::base_url(), "html", null, true);
            echo "/user\">User profil</a></li>
                                    ";
            // line 699
            $context["current_user"] = Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::twig_current_user();
            // line 700
            echo "                                    ";
            $context["uid"] = twig_get_attribute($this->env, $this->source, ($context["current_user"] ?? null), "uid", [], "any", false, false, true, 700);
            // line 701
            echo "                                    ";
            if (Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::has_role_twig("webmaster", ($context["uid"] ?? null))) {
                // line 702
                echo "                                    <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::base_url(), "html", null, true);
                echo "/admin\">Dashboard</a></li>
                                    ";
            }
            // line 704
            echo "
                                    <li><a href=\"";
            // line 705
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::base_url(), "html", null, true);
            echo "/user/logout\">Logout</a></li>
                                </ul>
                            </div>
                        </li>  
                    ";
        }
        // line 710
        echo "                </ul>
                </div>
                <div class=\"menu-btn--resp\">
                <ul>
                    <li>
                        <a href=\"";
        // line 715
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::base_url(), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["c"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["field_link"] ?? null) : null), "url", [], "any", false, false, true, 715), 715, $this->source), "html", null, true);
        echo "\" class=\"btn--resp night plrfsz\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["c"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["field_link"] ?? null) : null), "title", [], "any", false, false, true, 715), 715, $this->source), "html", null, true);
        echo "</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"humberger-menu icon-menu-mobile\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 45 45\" fill=\"none\">
            <path d=\"M11.25 15H33.75M11.25 22.5H33.75M11.25 30H33.75\"  stroke-width=\"3.75\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
        </svg>
        </div>
    </div>

    <div class=\"container-menu-resp  menu-mobile-effet\">
        <ul class=\"content-menu-mobile\">
            ";
        // line 729
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["menu1"] ?? null), "menu_tree", [], "any", false, false, true, 729));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 730
            echo "                <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::base_url(), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 730), 730, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 730), 730, $this->source), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 732
        echo "            ";
        if ( !Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::isLoginTwig()) {
            // line 733
            echo "                <li>
                    <a href=\"";
            // line 734
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::base_url(), "html", null, true);
            echo "/login\">Login</a>
                </li>
                <li>
                    <a href=\"";
            // line 737
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::base_url(), "html", null, true);
            echo "/register\">Register</a>
                </li>
            ";
        } else {
            // line 739
            echo " 
                <li><a href=\"";
            // line 740
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::base_url(), "html", null, true);
            echo "/user\">My account</a></li>
                <li><a href=\"";
            // line 741
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::base_url(), "html", null, true);
            echo "/booking\">My Booking</a></li> 
                <li><a href=\"";
            // line 742
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::base_url(), "html", null, true);
            echo "/admin\">Dashboard</a></li>
                <li><a href=\"";
            // line 743
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::base_url(), "html", null, true);
            echo "/user\">Logout</a></li>
            ";
        }
        // line 745
        echo "        </ul>
    </div>
    </div>
</header>
<script>
    if( document.body.contains(  document.querySelector(\".humberger-menu\") ) ) {
        document.querySelector(\".humberger-menu \").onclick = () => {
            document.querySelector(\".menu-mobile-effet\").classList.toggle(\"show\");
        }
    }
</script>
<script>
    /* header */
    if( document.body.contains(  document.querySelector(\".header-sticky\") ) ) {
        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            if(currentScroll >= \"300\") {
                document.querySelector(\".header-sticky\").style.cssText =  `
                    display: block; 
                    position: fixed;
                    top: 35px;
                    left: 0;
                    right: 0;
                    transform: translate(0px, -35px);
                    transition: all 300ms ease-in;
                    z-index: 100
                `;
                document.querySelector(\".header-sticky\").classList.add(\"shawdow\")
            }else {
                document.querySelector(\".header-sticky\").style.cssText = `
                    position: relative;
                    transform: translate(0px, 1px);
                    transition: all 500ms ease-in;
                `;
                document.querySelector(\".header-sticky\").classList.remove(\"shawdow\")
            }
        })
        document.querySelector(\".icon-menu-mobile\").onclick = () => {
            document.querySelector(\".menu-mobile-effet\").classList.toggle(\"show\");
        }
    }

    /*end header*/
</script>
<script>
    if( document.body.contains(  document.querySelector(\".humberger-menu1\") ) ) {
        document.querySelector(\".humberger-menu1\").onclick = () => {
            document.querySelector(\".menu-mobile-effet1\").classList.toggle(\"show\");
        }
    }
</script>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/staydirect_template_1/templates/templating/block--header--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  932 => 745,  927 => 743,  923 => 742,  919 => 741,  915 => 740,  912 => 739,  906 => 737,  900 => 734,  897 => 733,  894 => 732,  882 => 730,  878 => 729,  858 => 715,  851 => 710,  843 => 705,  840 => 704,  834 => 702,  831 => 701,  828 => 700,  826 => 699,  822 => 698,  813 => 691,  804 => 686,  798 => 683,  789 => 676,  786 => 675,  774 => 673,  770 => 672,  733 => 640,  217 => 126,  206 => 121,  192 => 109,  172 => 91,  170 => 90,  166 => 89,  162 => 88,  159 => 87,  157 => 86,  155 => 85,  85 => 17,  83 => 16,  81 => 15,  79 => 14,  77 => 13,  75 => 12,  73 => 11,  71 => 10,  69 => 9,  64 => 7,  60 => 6,  58 => 5,  54 => 4,  51 => 3,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends get_module_path('templating') ~ \"/templates/misc/block.html.twig\" %}
{% block templating_content %}

{% set item_name = 'block--staydirect-template-1-header-full.html' %} 
{% set path_css = '/themes/custom/staydirect_template_1/templates/templating/css/'~ item_name ~'.css' %}
{% set css = include(path_css) %} 
{{render_css(css,'block__staydirect_template_1_header_full')}}

{% set c = block_parser(content) %}
{% set menu1 = simplify_menu(c.field_menu1) %}
{% set menu1_length = menu1|length %}
{% set links= c['field_link'] %}
{% set c = block_parser(content) %}
{% set menu1 = simplify_menu(c.field_menu1) %}
{% set menu1_length = menu1|length %}
{% set links= c['field_link'] %}

<style>
    @import url('https://fonts.cdnfonts.com/css/valentine-2');
    .header-sticky.shawdow {
        margin-top: 53px !important;
    }
    .navbar--fixed--top {
      height: 53px;
      color: #fff;
      font-size: 1.25rem;
    }
    .navbar--fixed--top .navbar--fixed-container {
      padding-left: 25px !important;
      padding-right: 25px !important;
      display: flex !important;
      flex-direction: row;
      justify-content: space-between;
      align-items: center !important;
      width: 100%;
    }
    .navbar--fixed--top .navbar--fixed-container .navbar--fixed-right .btn--3d {
      -webkit-box-shadow: 0 2px 0 #6f9a37;
      box-shadow: 0 2px 0 #6f9a37;
      position: relative;
      background: var(--Dgrad-bleu, linear-gradient(138deg, rgba(98, 146, 158, 0.80) -15.04%, #62929E 104.44%)) !important;
      font-size: 14px;
      padding: 5px 20px;
      line-height: 1.5;
      color: white;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      display: inline-block;
      margin: 0;
      border: none;
      border-radius: 4px;
      font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      font-style: normal !important;
    } 
    .navbar--fixed--top .navbar--fixed-container .navbar--fixed-center {
      color: #fff;
      border: none;
      display: inline-flex;
      align-items: center;
      height: 60px;
      padding: 0 80px;
      border-radius: 8px;
      font-size: 18px;
      text-align: center;
      white-space: nowrap;
      transition: all .3s;
    }
    .navbar--fixed--top .navbar--fixed-container .navbar--fixed-left .link--staydirect-logo {
        color: #fff !important;
        font-family: \"vastine\" !important;
        font-size: 20px !important;
        font-style: normal !important;
        font-weight: 400 !important;
        line-height: 150% !important;
        text-align: center !important;
        text-transform: uppercase;
    } 

  </style>
  {% set status = config(\"mz_payement.status\",\"status\") %}
{% set sites = config(\"mz_payement.status\",\"site_variables\") %}

  {% set site_id = site_variables[\"site_id\"] %} 
 {% set parent_site = site_variables[\"parent_site\"] %} 
 {% if status== 'confirmed' %}
   <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark navbar--fixed--top\">
      <div class=\"navbar--fixed-container\">
        <div class=\"navbar--fixed-left\">
          <div class=\"preview--staydirect-logo\">
            <a class=\"link--staydirect-logo\" href=\"#\">StayDirect</a>
          </div>
        </div>
        <div class=\"navbar--fixed-left\">
            Please setup your bank account for payment process
        </div>
        <div class=\"navbar--fixed-right\">
          <div class=\"preview--action--buy\">
            <a class=\"header-buy-now btn--3d color--primary\" href=\"/user/login?destination=/admin/bank/setup\">Start Setup</a>
          </div>
        </div>
      </div>
  </nav>
 {% else %}
  <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark navbar--fixed--top\">
      <div class=\"navbar--fixed-container\">
        <div class=\"navbar--fixed-left\">
          <div class=\"preview--staydirect-logo\">
            <a class=\"link--staydirect-logo\" href=\"#\">StayDirect</a>
          </div>
        </div>
        <div class=\"navbar--fixed-left\">
            Please this site still demo version
        </div>
        <div class=\"navbar--fixed-right\">
          <div class=\"preview--action--buy\">
            <a class=\"header-buy-now btn--3d color--primary\" href=\"/parent-action?action=start_payment&site_id={{site_id}}&parent={{parent_site }}\">Buy now</a>
          </div>
        </div>
      </div>
  </nav>
{% endif %}  
<style>
    *,
    *::after,
    *::before {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    * {
        scroll-behavior: smooth;
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
    form.user-pass input[type=\"submit\"] {
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
        border: none !important;
        margin-top: 25px;
    }
    form.user-pass {
        max-width: 54%;
        margin: auto;
        margin-top: 75px;
        margin-bottom: 75px;
        /* margin: auto; */
        text-align: center;
    }

    .header--sticky-htl .menu-mobile-effet1.show li a
    {
        font-family: \"Montserrat\";
        font-style: normal;
        line-height: normal;
        font-size: 15px !important;
        font-weight: 400 !important;
        color: rgb(255, 255, 255) !important;
    }
    .container-book-right a {
        color: #fff !important;
        border: solid 1px #fff !important;
        padding: 15px 10px !important;
        border-radius: 13px !important;
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

    header .menu-main--resp ul {
        display: flex;
        flex-direction: row;
        gap: 39px;
    }  
    header .menu-main--resp ul li a{
        color: var(--bleumarine-color);
        font-family: \"Montserrat\";
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    } 
    header .menu-main--resp ul.list-header li a{ 
        font-size:  23px !important;
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
    header {
        padding-top: 38px;
        padding-bottom: 38px;
        background: #fff;
        z-index: 5;
        margin-top: 39px;
    }
    header .container-header--resp {
        height: 62px;
        display: flex;
        justify-content: space-between;
        flex-direction: row;
        flex-wrap: nowrap;
        align-items: center;
    }
    header .content-header-left--resp {
        margin-right: auto;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    header .content-header-right--resp {
        margin-left: auto;
        display: flex;
        justify-content: space-between;
        gap: 93px;
        margin-top: 15px;
    }
    .logo--resp h1 {
        margin-bottom: 0;
    }
    .logo--resp h1 a {
        color: var(--bleumarine-color) !important;
        font-family: \"Playfair Display\";
        font-style: normal;
        font-weight: 800;
        line-height: normal;
        font-size: 30px !important;
    }
    .humberger-menu {
        width: 62px;
        height: 62px;
        flex-shrink: 0;
        border-radius: 14.286px;
        border: 1.429px solid var(--bleumarine-color);
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }
    .humberger-menu svg {
        width: 45px;
        height: 45px;
    }
    .humberger-menu svg path {
        stroke: var(--bleumarine-color);
    }
    .shawdow {
        background: #fff;
        -webkit-box-shadow: 0 0 20px rgba(0,0,0,0.35);
        box-shadow: 0 0 20px rgba(0,0,0,0.35);
    }
    /* star */
    .rating--resp {
        display: inline-block;
        padding-left: 40px;
    }
    .rating--resp svg {
        width: 21px;
        height: 21px;
    }
    /* end star */

    .btn--resp {  
        justify-content: center;
        align-items: center; 
        border-radius: 38px;
        background: var(--bleu-color);
        color: #FFF;
        font-family: \"Montserrat\";
        font-style: normal;
        font-weight: 800;
        line-height: normal;
    }
    .container-menu-resp {
        position: absolute;
        z-index: 5;
        left: 0;
        right: 0;
        width: 100%;
        background: #fff;
    }
    .content-menu-mobile {
        background: rgb(201 212 245 / 13%) !important;
    }
    .menu-mobile-effet {
        transition: all .3s linear !important ;
        overflow: hidden !important ;
        height: 0 !important ;
    }
    .menu-mobile-effet.show {
        height: 100vh !important
    }
    .content-menu-mobile li {
        padding: 20px 10px !important;
        text-align: center !important;
        line-height: 150% !important;
        list-style-type: none; 
    }
    .content-menu-mobile li a {
        font-family: \"Montserrat\";
        font-size: 18px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        margin-right: 39px !important;
        color: rgba(51, 51, 51, 0.60) !important
    }
        /*user*/
    .menu-mobile-effet1 {
        height: 100px;
        background: var(--bleu-color);
        position: absolute;
        width: 234px;
        transition: all .3s linear !important;
        overflow: hidden !important;
        height: 0 !important;
        top: 76px;
        color: #fff;
        z-index: 2;
    }
    .menu-mobile-effet1 ul {
        display: block !important;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .menu-mobile-effet1 ul.list-dropdwn li a {
        font-size: 15px !important;
        font-weight: 400 !important;
        color: rgb(255, 255, 255) !important;
    }
    .menu-mobile-effet1.show {
        height: auto !important
    }
    .menu-mobile-effet1 ul {

    }
    .menu-mobile-effet1 li {
        padding-left: 30px;
        padding-right: 30px;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    /*user */
    @media (max-width: 499.96px) {
        .logo--resp h1 a {
            font-size: 20px !important;
        }
        .humberger-menu {
            width: 50px;
            height: 50px; 
            justify-content: center;
            align-items: center;
            display: flex !important;
        }
        .humberger-menu svg {
            width: 32.153px;
            height: 32.143px;
        }
        header .content-header-right--resp {
            display: none;
        }
        .rating--resp {
            display: inline-block;
            padding-left: 15px;
        }
        .rating--resp svg {
            width: 18px;
            height: 18px;
        }
        header .menu-main--resp ul.list-header ul.list-dropdwn li a {
            font-size: 15px !important;
        }
    }
    @media (min-width: 499.98px) {
        .logo--resp h1 a {
            font-size: 25px !important;
        }
        .humberger-menu {
            width: 50px;
            height: 50px; 
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .humberger-menu svg {
            width: 32.153px;
            height: 32.143px;
        }
        header .content-header-right--resp {
            display: none;
        }
        header .menu-main--resp ul.list-header ul.list-dropdwn li a {
            font-size: 15px !important;
        }
    }
    @media (min-width: 767.98px) {
        .drop-down {
            display: flex;
        }
        .humberger-menu {
            width: 62px;
            height: 62px; 
        }
        .humberger-menu svg {
            width: 45px;
            height: 45px;
        }
        header .menu-main--resp ul.list-header ul.list-dropdwn li a {
            font-size: 15px !important;
        }
    }
    @media (min-width: 991.98px) {
        .logo--resp h1 a {
            font-size: 30px !important;
        }
        .btn--resp.plrfsz {
            padding: 20px 15px;
            gap: 10px;
            font-size: 15px;
            font-weight: 800;
        }
        .humberger-menu {
            display: none;
        }
        header .content-header-right--resp {
            display: flex;
        }
        .rating--resp {
            padding-left: 10px;
        }
        .rating--resp svg {
            width: 18px;
            height: 18px;
        }
        header .content-header-right--resp {
            gap: 15px;
        }
        header .menu-main--resp ul {
            gap: 25px;
        }
        header .menu-main--resp ul {
            gap: 20px;
        }
        .logo--resp h1 a {
            font-size: 25px !important;
        }
        header .menu-main--resp ul li a {
            font-weight: 500;
        }
        header .menu-main--resp ul.list-header li a{ 
            font-size:  19px !important;
        }
        header .menu-main--resp ul.list-header ul.list-dropdwn li a {
            font-size: 15px !important;
        }
        .menu-mobile-effet1 {
            top: 74px;
        }
    }
    @media (min-width: 1199.98px) {
        .btn--resp.plrfsz {
            padding: 20px 30px;
            gap: 10px;
            font-size: 18px;
            font-weight: 800;
        }
        .rating--resp {
            padding-left: 20px;
        }
        .rating--resp svg {
            width: 21px;
            height: 21px;
        }
        header .content-header-right--resp {
            gap: 55px;
        }
        header .menu-main--resp ul {
            gap: 39px;
        }
        header .menu-main--resp ul {
            gap: 39px;
        }
        .logo--resp h1 a {
            font-size: 30px !important;
        }
        header .menu-main--resp ul li a {
            font-weight: 500;
        }
        header .menu-main--resp ul.list-header li a{ 
            font-size:  23px !important;
        }
        header .menu-main--resp ul.list-header ul.list-dropdwn li a {
            font-size: 15px !important;
        }
        .menu-mobile-effet1 {
            top: 76px;
        }
        .menu-mobile-effet1 {
            width: 227px;
        }
    }
    @media (min-width: 1385.98px) {
        .btn--resp {
            padding: 20px 35px;
            gap: 10px;
            border-radius: 38px;
            font-size: 18px;    
        }
        .rating--resp svg {
            width: 21px;
            height: 21px;
        }
        header .content-header-right--resp {
            gap: 55px;
        }
        header .menu-main--resp ul {
            gap: 39px;
        }
    }
    @media (min-width: 1499.98px) {
        .btn--resp {
            padding: 20px 35px;
            gap: 10px;
            border-radius: 38px;
            font-size: 18px;    
        }
        .rating--resp svg {
            width: 21px;
            height: 21px;
        }
        header .content-header-right--resp {
            gap: 93px;
        }
        header .menu-main--resp ul {
            gap: 39px;
        }
    }
</style>
<header class=\"header-sticky header--sticky-htl\">
    <div class=\"wrapper--resp\">
    <div class=\"container-header--resp\">
        <div class=\"content-header-left--resp\">
        <div class=\"logo--resp\">
            <h1>
            <a href=\"{{base_url()}}\">{{c.field_text}}</a>
            <div class=\"rating--resp\" style=\"display: none;\">
                <div class=\"stars\">
                <i class=\"fa fa-star\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-star\" viewBox=\"0 0 16 16\"> <path d=\"M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z\"/> </svg>
                </i>
            
                <i class=\"fa fa-star\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-star\" viewBox=\"0 0 16 16\"> <path d=\"M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z\"/> </svg>
                </i>
                
                <i class=\"fa fa-star\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-star\" viewBox=\"0 0 16 16\"> <path d=\"M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z\"/> </svg>
                </i>

                <i class=\"fa fa-star\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-star\" viewBox=\"0 0 16 16\"> <path d=\"M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z\"/> </svg>
                </i>

                <i class=\"fa fa-star\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-star\" viewBox=\"0 0 16 16\"> <path d=\"M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z\"/> </svg>
                </i>

                </div>
            </div>
            </h1>
            
        </div>
        </div>
        <div class=\"content-header-right--resp\">
            <div class=\"menu-main--resp\">
                <ul class=\"list-header\">
                    {% for item in menu1.menu_tree %}
                        <li><a href=\"{{base_url()}}{{ item.url }}\">{{ item.text }}</a></li>
                    {% endfor %}
                    {% if not is_login() %}
                        <li style=\"position: relative;\" class=\"humberger-menu1\">
                            <a href=\"#\">
                                Login
                            </a>
                            <div class=\"menu-mobile-effet1\" style=\"\">
                                <ul>
                                    <li>
                                        <a href=\"{{base_url()}}/login\">Login</a>
                                    </li>
                                    <li>
                                        <a href=\"{{base_url()}}/register\">Register</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    {% else %} 
                        <li style=\"position: relative;z-index: 99;\" class=\"humberger-menu1\">
                            <a href=\"#\">
                                My account
                            </a>
                            <div class=\"menu-mobile-effet1\">
                                <ul class=\"list-dropdwn\" style=\"color:#fff\">
                                    <li><a href=\"{{base_url()}}/user\">User profil</a></li>
                                    {% set current_user = current_user() %}
                                    {% set uid = (current_user.uid) %}
                                    {% if hasRole('webmaster',uid) %}
                                    <li><a href=\"{{base_url()}}/admin\">Dashboard</a></li>
                                    {% endif%}

                                    <li><a href=\"{{base_url()}}/user/logout\">Logout</a></li>
                                </ul>
                            </div>
                        </li>  
                    {% endif %}
                </ul>
                </div>
                <div class=\"menu-btn--resp\">
                <ul>
                    <li>
                        <a href=\"{{base_url()}}{{c['field_link'].url}}\" class=\"btn--resp night plrfsz\">{{c['field_link'].title}}</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"humberger-menu icon-menu-mobile\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 45 45\" fill=\"none\">
            <path d=\"M11.25 15H33.75M11.25 22.5H33.75M11.25 30H33.75\"  stroke-width=\"3.75\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
        </svg>
        </div>
    </div>

    <div class=\"container-menu-resp  menu-mobile-effet\">
        <ul class=\"content-menu-mobile\">
            {% for item in menu1.menu_tree %}
                <li><a href=\"{{base_url()}}{{ item.url }}\">{{ item.text }}</a></li>
            {% endfor %}
            {% if not is_login() %}
                <li>
                    <a href=\"{{base_url()}}/login\">Login</a>
                </li>
                <li>
                    <a href=\"{{base_url()}}/register\">Register</a>
                </li>
            {% else %} 
                <li><a href=\"{{base_url()}}/user\">My account</a></li>
                <li><a href=\"{{base_url()}}/booking\">My Booking</a></li> 
                <li><a href=\"{{base_url()}}/admin\">Dashboard</a></li>
                <li><a href=\"{{base_url()}}/user\">Logout</a></li>
            {% endif %}
        </ul>
    </div>
    </div>
</header>
<script>
    if( document.body.contains(  document.querySelector(\".humberger-menu\") ) ) {
        document.querySelector(\".humberger-menu \").onclick = () => {
            document.querySelector(\".menu-mobile-effet\").classList.toggle(\"show\");
        }
    }
</script>
<script>
    /* header */
    if( document.body.contains(  document.querySelector(\".header-sticky\") ) ) {
        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            if(currentScroll >= \"300\") {
                document.querySelector(\".header-sticky\").style.cssText =  `
                    display: block; 
                    position: fixed;
                    top: 35px;
                    left: 0;
                    right: 0;
                    transform: translate(0px, -35px);
                    transition: all 300ms ease-in;
                    z-index: 100
                `;
                document.querySelector(\".header-sticky\").classList.add(\"shawdow\")
            }else {
                document.querySelector(\".header-sticky\").style.cssText = `
                    position: relative;
                    transform: translate(0px, 1px);
                    transition: all 500ms ease-in;
                `;
                document.querySelector(\".header-sticky\").classList.remove(\"shawdow\")
            }
        })
        document.querySelector(\".icon-menu-mobile\").onclick = () => {
            document.querySelector(\".menu-mobile-effet\").classList.toggle(\"show\");
        }
    }

    /*end header*/
</script>
<script>
    if( document.body.contains(  document.querySelector(\".humberger-menu1\") ) ) {
        document.querySelector(\".humberger-menu1\").onclick = () => {
            document.querySelector(\".menu-mobile-effet1\").classList.toggle(\"show\");
        }
    }
</script>

{% endblock %}
", "themes/custom/staydirect_template_1/templates/templating/block--header--full.html.twig", "/Applications/MAMP/htdocs/global_9/themes/custom/staydirect_template_1/templates/templating/block--header--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4, "if" => 90, "for" => 672);
        static $filters = array("escape" => 7, "length" => 11);
        static $functions = array("include" => 6, "render_css" => 7, "block_parser" => 9, "simplify_menu" => 10, "config" => 85, "base_url" => 640, "is_login" => 675, "current_user" => 699, "hasRole" => 701, "get_module_path" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'length'],
                ['include', 'render_css', 'block_parser', 'simplify_menu', 'config', 'base_url', 'is_login', 'current_user', 'hasRole', 'get_module_path']
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
