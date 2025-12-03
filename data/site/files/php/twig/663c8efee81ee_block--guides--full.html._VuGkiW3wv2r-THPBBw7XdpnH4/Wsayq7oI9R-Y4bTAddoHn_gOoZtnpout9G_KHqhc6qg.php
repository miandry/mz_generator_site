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

/* themes/custom/staydirect_template_1/templates/templating/block--guides--full.html.twig */
class __TwigTemplate_84887c17e8a5fddf3f21869739198fa5 extends \Twig\Template
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
        return $this->loadTemplate((Drupal\drupal_helper\TwigExtension\DrupalHelperTwigExtension::get_module_path("templating") . "/templates/misc/block.html.twig"), "themes/custom/staydirect_template_1/templates/templating/block--guides--full.html.twig", 1);
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
        $context["item_name"] = "block--staydirect-template-1-guides-full.html";
        echo " 
  ";
        // line 5
        $context["path_css"] = (("/themes/custom/staydirect_template_1/templates/templating/css/" . $this->sandbox->ensureToStringAllowed(($context["item_name"] ?? null), 5, $this->source)) . ".css");
        // line 6
        echo "  ";
        $context["css"] = twig_include($this->env, $context, $this->sandbox->ensureToStringAllowed(($context["path_css"] ?? null), 6, $this->source));
        echo " 
  ";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\templating\TwigExtension\DefaultTwigExtension::render_css_twig($this->sandbox->ensureToStringAllowed(($context["css"] ?? null), 7, $this->source), "block__staydirect_template_1_guides_full"), "html", null, true);
        echo "

  ";
        // line 9
        $context["c"] = Drupal\entity_parser\TwigExtension\DefaultTwigExtension::block_parser_twig($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 9, $this->source));
        // line 10
        echo "  ";
        $context["paragraphs"] = (($__internal_compile_0 = ($context["c"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["field_paragraphs"] ?? null) : null);
        // line 11
        echo "  ";
        $context["paragraphs_length"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["paragraphs"] ?? null), 11, $this->source));
        // line 12
        echo "  
  ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "field_image1", [], "array", false, true, true, 13), "image", [], "array", false, true, true, 13), "url", [], "any", true, true, true, 13)) {
            // line 14
            echo "    ";
            $context["img_bg"] = "https://template.staydirect.cloud/sites/template/files/2023-11/aminities.png";
            // line 15
            echo "  ";
        } else {
            // line 16
            echo "    ";
            $context["img_bg"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = (($__internal_compile_2 = ($context["c"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["field_image1"] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["image"] ?? null) : null), "url", [], "any", false, false, true, 16);
            // line 17
            echo "  ";
        }
        // line 18
        echo "  
  <div class=\"aminitie\" style=\"background: url(";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["img_bg"] ?? null), 19, $this->source), "html", null, true);
        echo ");\"></div>
  
  <div class=\"container\">
    <div class=\"container-aminitie\">
      <div class=\"col-md-12 auto\">
        <h2 class=\"text-body-emphasis\">";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "field_title", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "</h2>
        <p>";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = (($__internal_compile_4 = ($context["c"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["body"] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), "value", [], "any", false, false, true, 25), 25, $this->source), ["<p>" => "", "</p>" => ""]), "html", null, true);
        echo "</p>
        <div class=\"row\">
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (($context["paragraphs_length"] ?? null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
            // line 28
            echo "              
              ";
            // line 29
            if ((($context["size"] % 4) == 0)) {
                // line 30
                echo "              <div class=\"col-6\">
                <ul class=\"list-unstyled ps-0\">
                  <li>
                    <a class=\"icon-link\" href=\"/docs/5.3/getting-started/introduction/\">
                      ";
                // line 34
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraphs"] ?? null), $context["size"], [], "array", false, true, true, 34), "field_icon1", [], "array", false, true, true, 34), "image", [], "array", false, true, true, 34), "url", [], "any", true, true, true, 34)) {
                    // line 35
                    echo "                        <img src=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = (($__internal_compile_6 = (($__internal_compile_7 = ($context["paragraphs"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[$context["size"]] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["field_icon1"] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["image"] ?? null) : null), "url", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                    echo "\" alt=\"\" style=\"width: 25px; height: 25px;\">
                      ";
                } else {
                    // line 37
                    echo "                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" viewBox=\"0 0 25 25\" fill=\"none\">
                          <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.60942 2.86453C4.66879 2.86453 3.90629 3.62703 3.90629 4.56765V11.7187H22.9167C23.1239 11.7187 23.3226 11.801 23.4691 11.9475C23.6156 12.094 23.698 12.2927 23.698 12.4999C23.698 12.7071 23.6156 12.9059 23.4691 13.0524C23.3226 13.1989 23.1239 13.2812 22.9167 13.2812H22.6375C22.6448 13.3281 22.649 13.3749 22.6521 13.4229C22.6563 13.4833 22.6563 13.5479 22.6563 13.6104V13.651C22.6563 14.0416 22.6563 14.2708 22.6396 14.526C22.4917 16.8552 21.2334 19.0072 19.4094 20.4135C19.4238 20.4364 19.437 20.4601 19.449 20.4843L20.4907 22.5677C20.5374 22.6595 20.5656 22.7598 20.5734 22.8626C20.5813 22.9654 20.5687 23.0687 20.5364 23.1667C20.5041 23.2646 20.4528 23.3551 20.3853 23.4331C20.3179 23.5111 20.2356 23.575 20.1434 23.621C20.0511 23.6671 19.9507 23.6944 19.8478 23.7015C19.745 23.7085 19.6417 23.6951 19.544 23.6621C19.4464 23.629 19.3562 23.577 19.2788 23.5089C19.2013 23.4409 19.1381 23.3582 19.0927 23.2656L18.0844 21.2499C17.0423 21.7825 15.8921 22.0694 14.7219 22.0885H14.7146C13.9438 22.1177 13.1896 22.1354 12.5 22.1354C11.8105 22.1354 11.0563 22.1177 10.2855 22.0885H10.2782C9.10801 22.0694 7.95777 21.7825 6.91567 21.2499L5.90733 23.2656C5.862 23.3582 5.79878 23.4409 5.72132 23.5089C5.64386 23.577 5.5537 23.629 5.45603 23.6621C5.35837 23.6951 5.25512 23.7085 5.15226 23.7015C5.04939 23.6944 4.94894 23.6671 4.85669 23.621C4.76444 23.575 4.68222 23.5111 4.61477 23.4331C4.54732 23.3551 4.49598 23.2646 4.46369 23.1667C4.43141 23.0687 4.41883 22.9654 4.42668 22.8626C4.43452 22.7598 4.46264 22.6595 4.50942 22.5677L5.55108 20.4843C5.56305 20.46 5.57627 20.4364 5.59067 20.4135C3.76671 19.0072 2.50733 16.8552 2.36046 14.526C2.34543 14.2346 2.33987 13.9428 2.34379 13.651V13.2812H2.08337C1.87617 13.2812 1.67746 13.1989 1.53095 13.0524C1.38443 12.9059 1.30212 12.7071 1.30212 12.4999C1.30212 12.2927 1.38443 12.094 1.53095 11.9475C1.67746 11.801 1.87617 11.7187 2.08337 11.7187H2.34379V4.56765C2.34373 3.80864 2.60806 3.07331 3.09135 2.48804C3.57465 1.90278 4.24671 1.50415 4.99204 1.36065C5.73737 1.21716 6.5094 1.33777 7.17545 1.70176C7.8415 2.06574 8.35995 2.65037 8.64171 3.35515L8.75629 3.64161C9.61118 3.42337 10.5142 3.49368 11.325 3.84161C11.8297 4.05915 12.286 4.37502 12.6673 4.77081C13.0486 5.1666 13.3473 5.63437 13.5459 6.14682C13.62 6.33554 13.6179 6.54571 13.54 6.7329C13.462 6.92009 13.3144 7.06964 13.1282 7.14995L6.91983 9.82286C6.82374 9.86437 6.72028 9.88615 6.61561 9.8869C6.51094 9.88765 6.40718 9.86736 6.3105 9.82723C6.21383 9.78711 6.1262 9.72796 6.05282 9.6533C5.97945 9.57865 5.92182 9.49001 5.88337 9.39265C5.474 8.35127 5.48146 7.19222 5.90421 6.1562C6.20112 5.4182 6.69872 4.77807 7.34067 4.30828L7.19067 3.93536C7.06429 3.61929 6.8461 3.34834 6.56425 3.15747C6.2824 2.96659 5.94982 2.86456 5.60942 2.86453ZM4.25317 13.2812H4.149C4.08296 13.2854 4.02104 13.3148 3.97592 13.3632C3.9308 13.4116 3.90589 13.4754 3.90629 13.5416V13.6281C3.90629 14.0468 3.90629 14.226 3.91983 14.427C4.11254 17.4708 6.72712 20.1854 9.76046 20.4916C9.96358 20.5124 10.0761 20.5166 10.3438 20.527C11.1021 20.5552 11.8365 20.5729 12.5 20.5729C13.1636 20.5729 13.898 20.5552 14.6563 20.527C14.924 20.5166 15.0365 20.5124 15.2396 20.4916C18.273 20.1854 20.8875 17.4708 21.0802 14.427C21.0938 14.226 21.0938 14.0468 21.0938 13.6281V13.5249C21.0938 13.5229 21.0938 13.5229 21.0938 13.5249C21.0896 13.4618 21.0626 13.4023 21.0177 13.3576C20.9728 13.3129 20.9132 13.2862 20.85 13.2822C20.8511 13.2822 20.8521 13.2822 20.85 13.2822H20.8334L20.748 13.2812H4.25317ZM10.7115 5.27911C10.3848 5.13902 10.0316 5.0714 9.67628 5.08094C9.32094 5.09047 8.97188 5.17691 8.65317 5.33432C8.05941 5.62694 7.59541 6.12954 7.35108 6.74474C7.18643 7.14917 7.11865 7.58652 7.15317 8.02182L11.7157 6.05724C11.4524 5.71645 11.1064 5.4486 10.7105 5.27911H10.7115Z\" fill=\"white\"/>
                        </svg>
                      ";
                }
                // line 41
                echo "  
                      ";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = ($context["paragraphs"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[$context["size"]] ?? null) : null), "field_text1", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "
  
                    </a>
                  </li>
              ";
            } elseif (((            // line 46
$context["size"] % 4) == 3)) {
                // line 47
                echo "                  <li>
                    <a class=\"icon-link\" href=\"/docs/5.3/getting-started/introduction/\">
                      ";
                // line 49
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraphs"] ?? null), $context["size"], [], "array", false, true, true, 49), "field_icon1", [], "array", false, true, true, 49), "image", [], "array", false, true, true, 49), "url", [], "any", true, true, true, 49)) {
                    // line 50
                    echo "                        <img src=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = (($__internal_compile_10 = (($__internal_compile_11 = ($context["paragraphs"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[$context["size"]] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["field_icon1"] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["image"] ?? null) : null), "url", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                    echo "\" alt=\"\" style=\"width: 25px; height: 25px;\">
                      ";
                } else {
                    // line 52
                    echo "                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" viewBox=\"0 0 25 25\" fill=\"none\">
                          <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.60942 2.86453C4.66879 2.86453 3.90629 3.62703 3.90629 4.56765V11.7187H22.9167C23.1239 11.7187 23.3226 11.801 23.4691 11.9475C23.6156 12.094 23.698 12.2927 23.698 12.4999C23.698 12.7071 23.6156 12.9059 23.4691 13.0524C23.3226 13.1989 23.1239 13.2812 22.9167 13.2812H22.6375C22.6448 13.3281 22.649 13.3749 22.6521 13.4229C22.6563 13.4833 22.6563 13.5479 22.6563 13.6104V13.651C22.6563 14.0416 22.6563 14.2708 22.6396 14.526C22.4917 16.8552 21.2334 19.0072 19.4094 20.4135C19.4238 20.4364 19.437 20.4601 19.449 20.4843L20.4907 22.5677C20.5374 22.6595 20.5656 22.7598 20.5734 22.8626C20.5813 22.9654 20.5687 23.0687 20.5364 23.1667C20.5041 23.2646 20.4528 23.3551 20.3853 23.4331C20.3179 23.5111 20.2356 23.575 20.1434 23.621C20.0511 23.6671 19.9507 23.6944 19.8478 23.7015C19.745 23.7085 19.6417 23.6951 19.544 23.6621C19.4464 23.629 19.3562 23.577 19.2788 23.5089C19.2013 23.4409 19.1381 23.3582 19.0927 23.2656L18.0844 21.2499C17.0423 21.7825 15.8921 22.0694 14.7219 22.0885H14.7146C13.9438 22.1177 13.1896 22.1354 12.5 22.1354C11.8105 22.1354 11.0563 22.1177 10.2855 22.0885H10.2782C9.10801 22.0694 7.95777 21.7825 6.91567 21.2499L5.90733 23.2656C5.862 23.3582 5.79878 23.4409 5.72132 23.5089C5.64386 23.577 5.5537 23.629 5.45603 23.6621C5.35837 23.6951 5.25512 23.7085 5.15226 23.7015C5.04939 23.6944 4.94894 23.6671 4.85669 23.621C4.76444 23.575 4.68222 23.5111 4.61477 23.4331C4.54732 23.3551 4.49598 23.2646 4.46369 23.1667C4.43141 23.0687 4.41883 22.9654 4.42668 22.8626C4.43452 22.7598 4.46264 22.6595 4.50942 22.5677L5.55108 20.4843C5.56305 20.46 5.57627 20.4364 5.59067 20.4135C3.76671 19.0072 2.50733 16.8552 2.36046 14.526C2.34543 14.2346 2.33987 13.9428 2.34379 13.651V13.2812H2.08337C1.87617 13.2812 1.67746 13.1989 1.53095 13.0524C1.38443 12.9059 1.30212 12.7071 1.30212 12.4999C1.30212 12.2927 1.38443 12.094 1.53095 11.9475C1.67746 11.801 1.87617 11.7187 2.08337 11.7187H2.34379V4.56765C2.34373 3.80864 2.60806 3.07331 3.09135 2.48804C3.57465 1.90278 4.24671 1.50415 4.99204 1.36065C5.73737 1.21716 6.5094 1.33777 7.17545 1.70176C7.8415 2.06574 8.35995 2.65037 8.64171 3.35515L8.75629 3.64161C9.61118 3.42337 10.5142 3.49368 11.325 3.84161C11.8297 4.05915 12.286 4.37502 12.6673 4.77081C13.0486 5.1666 13.3473 5.63437 13.5459 6.14682C13.62 6.33554 13.6179 6.54571 13.54 6.7329C13.462 6.92009 13.3144 7.06964 13.1282 7.14995L6.91983 9.82286C6.82374 9.86437 6.72028 9.88615 6.61561 9.8869C6.51094 9.88765 6.40718 9.86736 6.3105 9.82723C6.21383 9.78711 6.1262 9.72796 6.05282 9.6533C5.97945 9.57865 5.92182 9.49001 5.88337 9.39265C5.474 8.35127 5.48146 7.19222 5.90421 6.1562C6.20112 5.4182 6.69872 4.77807 7.34067 4.30828L7.19067 3.93536C7.06429 3.61929 6.8461 3.34834 6.56425 3.15747C6.2824 2.96659 5.94982 2.86456 5.60942 2.86453ZM4.25317 13.2812H4.149C4.08296 13.2854 4.02104 13.3148 3.97592 13.3632C3.9308 13.4116 3.90589 13.4754 3.90629 13.5416V13.6281C3.90629 14.0468 3.90629 14.226 3.91983 14.427C4.11254 17.4708 6.72712 20.1854 9.76046 20.4916C9.96358 20.5124 10.0761 20.5166 10.3438 20.527C11.1021 20.5552 11.8365 20.5729 12.5 20.5729C13.1636 20.5729 13.898 20.5552 14.6563 20.527C14.924 20.5166 15.0365 20.5124 15.2396 20.4916C18.273 20.1854 20.8875 17.4708 21.0802 14.427C21.0938 14.226 21.0938 14.0468 21.0938 13.6281V13.5249C21.0938 13.5229 21.0938 13.5229 21.0938 13.5249C21.0896 13.4618 21.0626 13.4023 21.0177 13.3576C20.9728 13.3129 20.9132 13.2862 20.85 13.2822C20.8511 13.2822 20.8521 13.2822 20.85 13.2822H20.8334L20.748 13.2812H4.25317ZM10.7115 5.27911C10.3848 5.13902 10.0316 5.0714 9.67628 5.08094C9.32094 5.09047 8.97188 5.17691 8.65317 5.33432C8.05941 5.62694 7.59541 6.12954 7.35108 6.74474C7.18643 7.14917 7.11865 7.58652 7.15317 8.02182L11.7157 6.05724C11.4524 5.71645 11.1064 5.4486 10.7105 5.27911H10.7115Z\" fill=\"white\"/>
                        </svg>
                      ";
                }
                // line 56
                echo "                      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = ($context["paragraphs"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[$context["size"]] ?? null) : null), "field_text1", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                echo "
                    </a>
                  </li>
                </ul>
              </div>
              ";
            } else {
                // line 62
                echo "                <li>
                  <a class=\"icon-link\" href=\"/docs/5.3/getting-started/introduction/\">
                    ";
                // line 64
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraphs"] ?? null), $context["size"], [], "array", false, true, true, 64), "field_icon1", [], "array", false, true, true, 64), "image", [], "array", false, true, true, 64), "url", [], "any", true, true, true, 64)) {
                    // line 65
                    echo "                      <img src=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = (($__internal_compile_14 = (($__internal_compile_15 = ($context["paragraphs"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[$context["size"]] ?? null) : null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["field_icon1"] ?? null) : null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["image"] ?? null) : null), "url", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                    echo "\" alt=\"\" style=\"width: 25px; height: 25px;\">
                    ";
                } else {
                    // line 67
                    echo "                      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" viewBox=\"0 0 25 25\" fill=\"none\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.60942 2.86453C4.66879 2.86453 3.90629 3.62703 3.90629 4.56765V11.7187H22.9167C23.1239 11.7187 23.3226 11.801 23.4691 11.9475C23.6156 12.094 23.698 12.2927 23.698 12.4999C23.698 12.7071 23.6156 12.9059 23.4691 13.0524C23.3226 13.1989 23.1239 13.2812 22.9167 13.2812H22.6375C22.6448 13.3281 22.649 13.3749 22.6521 13.4229C22.6563 13.4833 22.6563 13.5479 22.6563 13.6104V13.651C22.6563 14.0416 22.6563 14.2708 22.6396 14.526C22.4917 16.8552 21.2334 19.0072 19.4094 20.4135C19.4238 20.4364 19.437 20.4601 19.449 20.4843L20.4907 22.5677C20.5374 22.6595 20.5656 22.7598 20.5734 22.8626C20.5813 22.9654 20.5687 23.0687 20.5364 23.1667C20.5041 23.2646 20.4528 23.3551 20.3853 23.4331C20.3179 23.5111 20.2356 23.575 20.1434 23.621C20.0511 23.6671 19.9507 23.6944 19.8478 23.7015C19.745 23.7085 19.6417 23.6951 19.544 23.6621C19.4464 23.629 19.3562 23.577 19.2788 23.5089C19.2013 23.4409 19.1381 23.3582 19.0927 23.2656L18.0844 21.2499C17.0423 21.7825 15.8921 22.0694 14.7219 22.0885H14.7146C13.9438 22.1177 13.1896 22.1354 12.5 22.1354C11.8105 22.1354 11.0563 22.1177 10.2855 22.0885H10.2782C9.10801 22.0694 7.95777 21.7825 6.91567 21.2499L5.90733 23.2656C5.862 23.3582 5.79878 23.4409 5.72132 23.5089C5.64386 23.577 5.5537 23.629 5.45603 23.6621C5.35837 23.6951 5.25512 23.7085 5.15226 23.7015C5.04939 23.6944 4.94894 23.6671 4.85669 23.621C4.76444 23.575 4.68222 23.5111 4.61477 23.4331C4.54732 23.3551 4.49598 23.2646 4.46369 23.1667C4.43141 23.0687 4.41883 22.9654 4.42668 22.8626C4.43452 22.7598 4.46264 22.6595 4.50942 22.5677L5.55108 20.4843C5.56305 20.46 5.57627 20.4364 5.59067 20.4135C3.76671 19.0072 2.50733 16.8552 2.36046 14.526C2.34543 14.2346 2.33987 13.9428 2.34379 13.651V13.2812H2.08337C1.87617 13.2812 1.67746 13.1989 1.53095 13.0524C1.38443 12.9059 1.30212 12.7071 1.30212 12.4999C1.30212 12.2927 1.38443 12.094 1.53095 11.9475C1.67746 11.801 1.87617 11.7187 2.08337 11.7187H2.34379V4.56765C2.34373 3.80864 2.60806 3.07331 3.09135 2.48804C3.57465 1.90278 4.24671 1.50415 4.99204 1.36065C5.73737 1.21716 6.5094 1.33777 7.17545 1.70176C7.8415 2.06574 8.35995 2.65037 8.64171 3.35515L8.75629 3.64161C9.61118 3.42337 10.5142 3.49368 11.325 3.84161C11.8297 4.05915 12.286 4.37502 12.6673 4.77081C13.0486 5.1666 13.3473 5.63437 13.5459 6.14682C13.62 6.33554 13.6179 6.54571 13.54 6.7329C13.462 6.92009 13.3144 7.06964 13.1282 7.14995L6.91983 9.82286C6.82374 9.86437 6.72028 9.88615 6.61561 9.8869C6.51094 9.88765 6.40718 9.86736 6.3105 9.82723C6.21383 9.78711 6.1262 9.72796 6.05282 9.6533C5.97945 9.57865 5.92182 9.49001 5.88337 9.39265C5.474 8.35127 5.48146 7.19222 5.90421 6.1562C6.20112 5.4182 6.69872 4.77807 7.34067 4.30828L7.19067 3.93536C7.06429 3.61929 6.8461 3.34834 6.56425 3.15747C6.2824 2.96659 5.94982 2.86456 5.60942 2.86453ZM4.25317 13.2812H4.149C4.08296 13.2854 4.02104 13.3148 3.97592 13.3632C3.9308 13.4116 3.90589 13.4754 3.90629 13.5416V13.6281C3.90629 14.0468 3.90629 14.226 3.91983 14.427C4.11254 17.4708 6.72712 20.1854 9.76046 20.4916C9.96358 20.5124 10.0761 20.5166 10.3438 20.527C11.1021 20.5552 11.8365 20.5729 12.5 20.5729C13.1636 20.5729 13.898 20.5552 14.6563 20.527C14.924 20.5166 15.0365 20.5124 15.2396 20.4916C18.273 20.1854 20.8875 17.4708 21.0802 14.427C21.0938 14.226 21.0938 14.0468 21.0938 13.6281V13.5249C21.0938 13.5229 21.0938 13.5229 21.0938 13.5249C21.0896 13.4618 21.0626 13.4023 21.0177 13.3576C20.9728 13.3129 20.9132 13.2862 20.85 13.2822C20.8511 13.2822 20.8521 13.2822 20.85 13.2822H20.8334L20.748 13.2812H4.25317ZM10.7115 5.27911C10.3848 5.13902 10.0316 5.0714 9.67628 5.08094C9.32094 5.09047 8.97188 5.17691 8.65317 5.33432C8.05941 5.62694 7.59541 6.12954 7.35108 6.74474C7.18643 7.14917 7.11865 7.58652 7.15317 8.02182L11.7157 6.05724C11.4524 5.71645 11.1064 5.4486 10.7105 5.27911H10.7115Z\" fill=\"white\"/>
                      </svg>
                    ";
                }
                // line 71
                echo "                    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_16 = ($context["paragraphs"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[$context["size"]] ?? null) : null), "field_text1", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                echo "
                  </a>
                </li>
              ";
            }
            // line 75
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        </div>
      </div>
    </div>
  </div>
        
";
    }

    public function getTemplateName()
    {
        return "themes/custom/staydirect_template_1/templates/templating/block--guides--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 76,  210 => 75,  202 => 71,  196 => 67,  190 => 65,  188 => 64,  184 => 62,  174 => 56,  168 => 52,  162 => 50,  160 => 49,  156 => 47,  154 => 46,  147 => 42,  144 => 41,  138 => 37,  132 => 35,  130 => 34,  124 => 30,  122 => 29,  119 => 28,  115 => 27,  110 => 25,  106 => 24,  98 => 19,  95 => 18,  92 => 17,  89 => 16,  86 => 15,  83 => 14,  81 => 13,  78 => 12,  75 => 11,  72 => 10,  70 => 9,  65 => 7,  60 => 6,  58 => 5,  54 => 4,  51 => 3,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends get_module_path('templating') ~ \"/templates/misc/block.html.twig\" %}
{% block templating_content %}

  {% set item_name = 'block--staydirect-template-1-guides-full.html' %} 
  {% set path_css = '/themes/custom/staydirect_template_1/templates/templating/css/'~ item_name ~'.css' %}
  {% set css = include(path_css) %} 
  {{render_css(css,'block__staydirect_template_1_guides_full')}}

  {% set c = block_parser(content) %}
  {% set paragraphs = c['field_paragraphs'] %}
  {% set paragraphs_length = paragraphs|length %}
  
  {% if  c['field_image1']['image'].url is defined %}
    {% set img_bg = \"https://template.staydirect.cloud/sites/template/files/2023-11/aminities.png\" %}
  {% else %}
    {% set img_bg = c['field_image1']['image'].url %}
  {% endif %}
  
  <div class=\"aminitie\" style=\"background: url({{img_bg}});\"></div>
  
  <div class=\"container\">
    <div class=\"container-aminitie\">
      <div class=\"col-md-12 auto\">
        <h2 class=\"text-body-emphasis\">{{c.field_title}}</h2>
        <p>{{c['body'][0].value|replace({\"<p>\": \"\", '</p>': \"\"})}}</p>
        <div class=\"row\">
            {% for size in 0 .. (paragraphs_length - 1) %}
              
              {% if size%4 == 0 %}
              <div class=\"col-6\">
                <ul class=\"list-unstyled ps-0\">
                  <li>
                    <a class=\"icon-link\" href=\"/docs/5.3/getting-started/introduction/\">
                      {% if paragraphs[size]['field_icon1']['image'].url is defined %}
                        <img src=\"{{paragraphs[size]['field_icon1']['image'].url}}\" alt=\"\" style=\"width: 25px; height: 25px;\">
                      {% else %}
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" viewBox=\"0 0 25 25\" fill=\"none\">
                          <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.60942 2.86453C4.66879 2.86453 3.90629 3.62703 3.90629 4.56765V11.7187H22.9167C23.1239 11.7187 23.3226 11.801 23.4691 11.9475C23.6156 12.094 23.698 12.2927 23.698 12.4999C23.698 12.7071 23.6156 12.9059 23.4691 13.0524C23.3226 13.1989 23.1239 13.2812 22.9167 13.2812H22.6375C22.6448 13.3281 22.649 13.3749 22.6521 13.4229C22.6563 13.4833 22.6563 13.5479 22.6563 13.6104V13.651C22.6563 14.0416 22.6563 14.2708 22.6396 14.526C22.4917 16.8552 21.2334 19.0072 19.4094 20.4135C19.4238 20.4364 19.437 20.4601 19.449 20.4843L20.4907 22.5677C20.5374 22.6595 20.5656 22.7598 20.5734 22.8626C20.5813 22.9654 20.5687 23.0687 20.5364 23.1667C20.5041 23.2646 20.4528 23.3551 20.3853 23.4331C20.3179 23.5111 20.2356 23.575 20.1434 23.621C20.0511 23.6671 19.9507 23.6944 19.8478 23.7015C19.745 23.7085 19.6417 23.6951 19.544 23.6621C19.4464 23.629 19.3562 23.577 19.2788 23.5089C19.2013 23.4409 19.1381 23.3582 19.0927 23.2656L18.0844 21.2499C17.0423 21.7825 15.8921 22.0694 14.7219 22.0885H14.7146C13.9438 22.1177 13.1896 22.1354 12.5 22.1354C11.8105 22.1354 11.0563 22.1177 10.2855 22.0885H10.2782C9.10801 22.0694 7.95777 21.7825 6.91567 21.2499L5.90733 23.2656C5.862 23.3582 5.79878 23.4409 5.72132 23.5089C5.64386 23.577 5.5537 23.629 5.45603 23.6621C5.35837 23.6951 5.25512 23.7085 5.15226 23.7015C5.04939 23.6944 4.94894 23.6671 4.85669 23.621C4.76444 23.575 4.68222 23.5111 4.61477 23.4331C4.54732 23.3551 4.49598 23.2646 4.46369 23.1667C4.43141 23.0687 4.41883 22.9654 4.42668 22.8626C4.43452 22.7598 4.46264 22.6595 4.50942 22.5677L5.55108 20.4843C5.56305 20.46 5.57627 20.4364 5.59067 20.4135C3.76671 19.0072 2.50733 16.8552 2.36046 14.526C2.34543 14.2346 2.33987 13.9428 2.34379 13.651V13.2812H2.08337C1.87617 13.2812 1.67746 13.1989 1.53095 13.0524C1.38443 12.9059 1.30212 12.7071 1.30212 12.4999C1.30212 12.2927 1.38443 12.094 1.53095 11.9475C1.67746 11.801 1.87617 11.7187 2.08337 11.7187H2.34379V4.56765C2.34373 3.80864 2.60806 3.07331 3.09135 2.48804C3.57465 1.90278 4.24671 1.50415 4.99204 1.36065C5.73737 1.21716 6.5094 1.33777 7.17545 1.70176C7.8415 2.06574 8.35995 2.65037 8.64171 3.35515L8.75629 3.64161C9.61118 3.42337 10.5142 3.49368 11.325 3.84161C11.8297 4.05915 12.286 4.37502 12.6673 4.77081C13.0486 5.1666 13.3473 5.63437 13.5459 6.14682C13.62 6.33554 13.6179 6.54571 13.54 6.7329C13.462 6.92009 13.3144 7.06964 13.1282 7.14995L6.91983 9.82286C6.82374 9.86437 6.72028 9.88615 6.61561 9.8869C6.51094 9.88765 6.40718 9.86736 6.3105 9.82723C6.21383 9.78711 6.1262 9.72796 6.05282 9.6533C5.97945 9.57865 5.92182 9.49001 5.88337 9.39265C5.474 8.35127 5.48146 7.19222 5.90421 6.1562C6.20112 5.4182 6.69872 4.77807 7.34067 4.30828L7.19067 3.93536C7.06429 3.61929 6.8461 3.34834 6.56425 3.15747C6.2824 2.96659 5.94982 2.86456 5.60942 2.86453ZM4.25317 13.2812H4.149C4.08296 13.2854 4.02104 13.3148 3.97592 13.3632C3.9308 13.4116 3.90589 13.4754 3.90629 13.5416V13.6281C3.90629 14.0468 3.90629 14.226 3.91983 14.427C4.11254 17.4708 6.72712 20.1854 9.76046 20.4916C9.96358 20.5124 10.0761 20.5166 10.3438 20.527C11.1021 20.5552 11.8365 20.5729 12.5 20.5729C13.1636 20.5729 13.898 20.5552 14.6563 20.527C14.924 20.5166 15.0365 20.5124 15.2396 20.4916C18.273 20.1854 20.8875 17.4708 21.0802 14.427C21.0938 14.226 21.0938 14.0468 21.0938 13.6281V13.5249C21.0938 13.5229 21.0938 13.5229 21.0938 13.5249C21.0896 13.4618 21.0626 13.4023 21.0177 13.3576C20.9728 13.3129 20.9132 13.2862 20.85 13.2822C20.8511 13.2822 20.8521 13.2822 20.85 13.2822H20.8334L20.748 13.2812H4.25317ZM10.7115 5.27911C10.3848 5.13902 10.0316 5.0714 9.67628 5.08094C9.32094 5.09047 8.97188 5.17691 8.65317 5.33432C8.05941 5.62694 7.59541 6.12954 7.35108 6.74474C7.18643 7.14917 7.11865 7.58652 7.15317 8.02182L11.7157 6.05724C11.4524 5.71645 11.1064 5.4486 10.7105 5.27911H10.7115Z\" fill=\"white\"/>
                        </svg>
                      {% endif %}
  
                      {{paragraphs[size].field_text1}}
  
                    </a>
                  </li>
              {% elseif size%4== 3%}
                  <li>
                    <a class=\"icon-link\" href=\"/docs/5.3/getting-started/introduction/\">
                      {% if paragraphs[size]['field_icon1']['image'].url is defined %}
                        <img src=\"{{paragraphs[size]['field_icon1']['image'].url}}\" alt=\"\" style=\"width: 25px; height: 25px;\">
                      {% else %}
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" viewBox=\"0 0 25 25\" fill=\"none\">
                          <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.60942 2.86453C4.66879 2.86453 3.90629 3.62703 3.90629 4.56765V11.7187H22.9167C23.1239 11.7187 23.3226 11.801 23.4691 11.9475C23.6156 12.094 23.698 12.2927 23.698 12.4999C23.698 12.7071 23.6156 12.9059 23.4691 13.0524C23.3226 13.1989 23.1239 13.2812 22.9167 13.2812H22.6375C22.6448 13.3281 22.649 13.3749 22.6521 13.4229C22.6563 13.4833 22.6563 13.5479 22.6563 13.6104V13.651C22.6563 14.0416 22.6563 14.2708 22.6396 14.526C22.4917 16.8552 21.2334 19.0072 19.4094 20.4135C19.4238 20.4364 19.437 20.4601 19.449 20.4843L20.4907 22.5677C20.5374 22.6595 20.5656 22.7598 20.5734 22.8626C20.5813 22.9654 20.5687 23.0687 20.5364 23.1667C20.5041 23.2646 20.4528 23.3551 20.3853 23.4331C20.3179 23.5111 20.2356 23.575 20.1434 23.621C20.0511 23.6671 19.9507 23.6944 19.8478 23.7015C19.745 23.7085 19.6417 23.6951 19.544 23.6621C19.4464 23.629 19.3562 23.577 19.2788 23.5089C19.2013 23.4409 19.1381 23.3582 19.0927 23.2656L18.0844 21.2499C17.0423 21.7825 15.8921 22.0694 14.7219 22.0885H14.7146C13.9438 22.1177 13.1896 22.1354 12.5 22.1354C11.8105 22.1354 11.0563 22.1177 10.2855 22.0885H10.2782C9.10801 22.0694 7.95777 21.7825 6.91567 21.2499L5.90733 23.2656C5.862 23.3582 5.79878 23.4409 5.72132 23.5089C5.64386 23.577 5.5537 23.629 5.45603 23.6621C5.35837 23.6951 5.25512 23.7085 5.15226 23.7015C5.04939 23.6944 4.94894 23.6671 4.85669 23.621C4.76444 23.575 4.68222 23.5111 4.61477 23.4331C4.54732 23.3551 4.49598 23.2646 4.46369 23.1667C4.43141 23.0687 4.41883 22.9654 4.42668 22.8626C4.43452 22.7598 4.46264 22.6595 4.50942 22.5677L5.55108 20.4843C5.56305 20.46 5.57627 20.4364 5.59067 20.4135C3.76671 19.0072 2.50733 16.8552 2.36046 14.526C2.34543 14.2346 2.33987 13.9428 2.34379 13.651V13.2812H2.08337C1.87617 13.2812 1.67746 13.1989 1.53095 13.0524C1.38443 12.9059 1.30212 12.7071 1.30212 12.4999C1.30212 12.2927 1.38443 12.094 1.53095 11.9475C1.67746 11.801 1.87617 11.7187 2.08337 11.7187H2.34379V4.56765C2.34373 3.80864 2.60806 3.07331 3.09135 2.48804C3.57465 1.90278 4.24671 1.50415 4.99204 1.36065C5.73737 1.21716 6.5094 1.33777 7.17545 1.70176C7.8415 2.06574 8.35995 2.65037 8.64171 3.35515L8.75629 3.64161C9.61118 3.42337 10.5142 3.49368 11.325 3.84161C11.8297 4.05915 12.286 4.37502 12.6673 4.77081C13.0486 5.1666 13.3473 5.63437 13.5459 6.14682C13.62 6.33554 13.6179 6.54571 13.54 6.7329C13.462 6.92009 13.3144 7.06964 13.1282 7.14995L6.91983 9.82286C6.82374 9.86437 6.72028 9.88615 6.61561 9.8869C6.51094 9.88765 6.40718 9.86736 6.3105 9.82723C6.21383 9.78711 6.1262 9.72796 6.05282 9.6533C5.97945 9.57865 5.92182 9.49001 5.88337 9.39265C5.474 8.35127 5.48146 7.19222 5.90421 6.1562C6.20112 5.4182 6.69872 4.77807 7.34067 4.30828L7.19067 3.93536C7.06429 3.61929 6.8461 3.34834 6.56425 3.15747C6.2824 2.96659 5.94982 2.86456 5.60942 2.86453ZM4.25317 13.2812H4.149C4.08296 13.2854 4.02104 13.3148 3.97592 13.3632C3.9308 13.4116 3.90589 13.4754 3.90629 13.5416V13.6281C3.90629 14.0468 3.90629 14.226 3.91983 14.427C4.11254 17.4708 6.72712 20.1854 9.76046 20.4916C9.96358 20.5124 10.0761 20.5166 10.3438 20.527C11.1021 20.5552 11.8365 20.5729 12.5 20.5729C13.1636 20.5729 13.898 20.5552 14.6563 20.527C14.924 20.5166 15.0365 20.5124 15.2396 20.4916C18.273 20.1854 20.8875 17.4708 21.0802 14.427C21.0938 14.226 21.0938 14.0468 21.0938 13.6281V13.5249C21.0938 13.5229 21.0938 13.5229 21.0938 13.5249C21.0896 13.4618 21.0626 13.4023 21.0177 13.3576C20.9728 13.3129 20.9132 13.2862 20.85 13.2822C20.8511 13.2822 20.8521 13.2822 20.85 13.2822H20.8334L20.748 13.2812H4.25317ZM10.7115 5.27911C10.3848 5.13902 10.0316 5.0714 9.67628 5.08094C9.32094 5.09047 8.97188 5.17691 8.65317 5.33432C8.05941 5.62694 7.59541 6.12954 7.35108 6.74474C7.18643 7.14917 7.11865 7.58652 7.15317 8.02182L11.7157 6.05724C11.4524 5.71645 11.1064 5.4486 10.7105 5.27911H10.7115Z\" fill=\"white\"/>
                        </svg>
                      {% endif %}
                      {{paragraphs[size].field_text1}}
                    </a>
                  </li>
                </ul>
              </div>
              {% else %}
                <li>
                  <a class=\"icon-link\" href=\"/docs/5.3/getting-started/introduction/\">
                    {% if paragraphs[size]['field_icon1']['image'].url is defined %}
                      <img src=\"{{paragraphs[size]['field_icon1']['image'].url}}\" alt=\"\" style=\"width: 25px; height: 25px;\">
                    {% else %}
                      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" viewBox=\"0 0 25 25\" fill=\"none\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.60942 2.86453C4.66879 2.86453 3.90629 3.62703 3.90629 4.56765V11.7187H22.9167C23.1239 11.7187 23.3226 11.801 23.4691 11.9475C23.6156 12.094 23.698 12.2927 23.698 12.4999C23.698 12.7071 23.6156 12.9059 23.4691 13.0524C23.3226 13.1989 23.1239 13.2812 22.9167 13.2812H22.6375C22.6448 13.3281 22.649 13.3749 22.6521 13.4229C22.6563 13.4833 22.6563 13.5479 22.6563 13.6104V13.651C22.6563 14.0416 22.6563 14.2708 22.6396 14.526C22.4917 16.8552 21.2334 19.0072 19.4094 20.4135C19.4238 20.4364 19.437 20.4601 19.449 20.4843L20.4907 22.5677C20.5374 22.6595 20.5656 22.7598 20.5734 22.8626C20.5813 22.9654 20.5687 23.0687 20.5364 23.1667C20.5041 23.2646 20.4528 23.3551 20.3853 23.4331C20.3179 23.5111 20.2356 23.575 20.1434 23.621C20.0511 23.6671 19.9507 23.6944 19.8478 23.7015C19.745 23.7085 19.6417 23.6951 19.544 23.6621C19.4464 23.629 19.3562 23.577 19.2788 23.5089C19.2013 23.4409 19.1381 23.3582 19.0927 23.2656L18.0844 21.2499C17.0423 21.7825 15.8921 22.0694 14.7219 22.0885H14.7146C13.9438 22.1177 13.1896 22.1354 12.5 22.1354C11.8105 22.1354 11.0563 22.1177 10.2855 22.0885H10.2782C9.10801 22.0694 7.95777 21.7825 6.91567 21.2499L5.90733 23.2656C5.862 23.3582 5.79878 23.4409 5.72132 23.5089C5.64386 23.577 5.5537 23.629 5.45603 23.6621C5.35837 23.6951 5.25512 23.7085 5.15226 23.7015C5.04939 23.6944 4.94894 23.6671 4.85669 23.621C4.76444 23.575 4.68222 23.5111 4.61477 23.4331C4.54732 23.3551 4.49598 23.2646 4.46369 23.1667C4.43141 23.0687 4.41883 22.9654 4.42668 22.8626C4.43452 22.7598 4.46264 22.6595 4.50942 22.5677L5.55108 20.4843C5.56305 20.46 5.57627 20.4364 5.59067 20.4135C3.76671 19.0072 2.50733 16.8552 2.36046 14.526C2.34543 14.2346 2.33987 13.9428 2.34379 13.651V13.2812H2.08337C1.87617 13.2812 1.67746 13.1989 1.53095 13.0524C1.38443 12.9059 1.30212 12.7071 1.30212 12.4999C1.30212 12.2927 1.38443 12.094 1.53095 11.9475C1.67746 11.801 1.87617 11.7187 2.08337 11.7187H2.34379V4.56765C2.34373 3.80864 2.60806 3.07331 3.09135 2.48804C3.57465 1.90278 4.24671 1.50415 4.99204 1.36065C5.73737 1.21716 6.5094 1.33777 7.17545 1.70176C7.8415 2.06574 8.35995 2.65037 8.64171 3.35515L8.75629 3.64161C9.61118 3.42337 10.5142 3.49368 11.325 3.84161C11.8297 4.05915 12.286 4.37502 12.6673 4.77081C13.0486 5.1666 13.3473 5.63437 13.5459 6.14682C13.62 6.33554 13.6179 6.54571 13.54 6.7329C13.462 6.92009 13.3144 7.06964 13.1282 7.14995L6.91983 9.82286C6.82374 9.86437 6.72028 9.88615 6.61561 9.8869C6.51094 9.88765 6.40718 9.86736 6.3105 9.82723C6.21383 9.78711 6.1262 9.72796 6.05282 9.6533C5.97945 9.57865 5.92182 9.49001 5.88337 9.39265C5.474 8.35127 5.48146 7.19222 5.90421 6.1562C6.20112 5.4182 6.69872 4.77807 7.34067 4.30828L7.19067 3.93536C7.06429 3.61929 6.8461 3.34834 6.56425 3.15747C6.2824 2.96659 5.94982 2.86456 5.60942 2.86453ZM4.25317 13.2812H4.149C4.08296 13.2854 4.02104 13.3148 3.97592 13.3632C3.9308 13.4116 3.90589 13.4754 3.90629 13.5416V13.6281C3.90629 14.0468 3.90629 14.226 3.91983 14.427C4.11254 17.4708 6.72712 20.1854 9.76046 20.4916C9.96358 20.5124 10.0761 20.5166 10.3438 20.527C11.1021 20.5552 11.8365 20.5729 12.5 20.5729C13.1636 20.5729 13.898 20.5552 14.6563 20.527C14.924 20.5166 15.0365 20.5124 15.2396 20.4916C18.273 20.1854 20.8875 17.4708 21.0802 14.427C21.0938 14.226 21.0938 14.0468 21.0938 13.6281V13.5249C21.0938 13.5229 21.0938 13.5229 21.0938 13.5249C21.0896 13.4618 21.0626 13.4023 21.0177 13.3576C20.9728 13.3129 20.9132 13.2862 20.85 13.2822C20.8511 13.2822 20.8521 13.2822 20.85 13.2822H20.8334L20.748 13.2812H4.25317ZM10.7115 5.27911C10.3848 5.13902 10.0316 5.0714 9.67628 5.08094C9.32094 5.09047 8.97188 5.17691 8.65317 5.33432C8.05941 5.62694 7.59541 6.12954 7.35108 6.74474C7.18643 7.14917 7.11865 7.58652 7.15317 8.02182L11.7157 6.05724C11.4524 5.71645 11.1064 5.4486 10.7105 5.27911H10.7115Z\" fill=\"white\"/>
                      </svg>
                    {% endif %}
                    {{paragraphs[size].field_text1}}
                  </a>
                </li>
              {% endif %}
            {% endfor %}
        </div>
      </div>
    </div>
  </div>
        
{% endblock %}", "themes/custom/staydirect_template_1/templates/templating/block--guides--full.html.twig", "/Applications/MAMP/htdocs/global_9/themes/custom/staydirect_template_1/templates/templating/block--guides--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4, "if" => 13, "for" => 27);
        static $filters = array("escape" => 7, "length" => 11, "replace" => 25);
        static $functions = array("include" => 6, "render_css" => 7, "block_parser" => 9, "range" => 27, "get_module_path" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
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
