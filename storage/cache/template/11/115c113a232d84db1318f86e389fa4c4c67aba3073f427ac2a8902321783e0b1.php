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

/* journal3/template/common/header.twig */
class __TwigTemplate_db1c5b93e86f75ca4c627ed66905916b8cb30afbbb341616139fd2eb65c50318 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ( !(isset($context["j3"]) || array_key_exists("j3", $context))) {
            // line 2
            echo "  <style>
    body {
      display: none !important;
    }
  </style>
  <script>
    window.location = 'index.php?route=journal3/startup/error';
  </script>
";
        }
        // line 11
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 12
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"";
        echo twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 12), "getClasses", [], "method", false, false, false, 12), " ");
        echo "\" data-jv=\"";
        echo (((isset($context["j3"]) || array_key_exists("j3", $context))) ? (twig_constant("JOURNAL3_VERSION")) : (""));
        echo "\" data-ov=\"";
        echo twig_constant("VERSION");
        echo "\">
<head typeof=\"og:website\">
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 17
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 18
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 19
        if (($context["description"] ?? null)) {
            // line 20
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 22
        if (($context["keywords"] ?? null)) {
            // line 23
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 25
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 25), "isPopup", [], "method", false, false, false, 25)) {
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/meta_tags"], "method", false, false, false, 26));
            foreach ($context['_seq'] as $context["key"] => $context["tag"]) {
                // line 27
                echo "<meta ";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "type", [], "any", false, false, false, 27);
                echo "=\"";
                echo $context["key"];
                echo "\" content=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "content", [], "any", false, false, false, 27);
                echo "\"/>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 30
        echo "<script>window['Journal'] = ";
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 30), "getJs", [], "method", false, false, false, 30));
        echo ";</script>
";
        // line 31
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 31), "isPopup", [], "method", false, false, false, 31)) {
            // line 32
            echo "<script>";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/mql"], "method", false, false, false, 32);
            echo "</script>
";
        }
        // line 34
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 34), "hasFonts", [], "method", false, false, false, 34)) {
            // line 35
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 35), "get", [0 => "performanceAsyncFontsStatus"], "method", false, false, false, 35)) {
                // line 36
                echo "<script>WebFontConfig = { google: { families: ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 36), "getFonts", [0 => true], "method", false, false, false, 36);
                echo " } };</script>
";
            } else {
                // line 38
                echo "<link href=\"https://fonts.googleapis.com/css?family=";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 38), "getFonts", [0 => false], "method", false, false, false, 38);
                echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
            }
        }
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 41), "getStyles", [0 => ($context["styles"] ?? null)], "method", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 42
            if (twig_get_attribute($this->env, $this->source, $context["style"], "content", [], "any", false, false, false, 42)) {
                // line 43
                echo "<style>";
                echo twig_get_attribute($this->env, $this->source, $context["style"], "content", [], "any", false, false, false, 43);
                echo "</style>
";
            } else {
                // line 45
                echo "<link href=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 45), "staticUrl", [0 => twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 45), 1 => false], "method", false, false, false, 45);
                echo "\" type=\"text/css\" rel=\"";
                echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 45);
                echo "\" media=\"all\" />
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 49
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 49);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 49);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 52
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "<style>
";
        // line 55
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 55), "getCss", [], "method", false, false, false, 55);
        echo "
</style>
";
        // line 57
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 57), "get", [0 => "customCSS"], "method", false, false, false, 57)) {
            // line 58
            echo "<style>";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 58), "get", [0 => "customCSS"], "method", false, false, false, 58);
            echo "</style>
";
        }
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 60), "getScripts", [0 => "header", 1 => ($context["scripts"] ?? null)], "method", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 61
            echo "<script src=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 61), "staticUrl", [0 => $context["script"], 1 => false], "method", false, false, false, 61);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 61), "get", [0 => "performanceJSDefer"], "method", false, false, false, 61)) {
                echo " defer ";
            }
            echo "></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 63), "get", [0 => "customCodeHeader"], "method", false, false, false, 63)) {
            // line 64
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 64), "get", [0 => "customCodeHeader"], "method", false, false, false, 64);
            echo "
";
        }
        // line 66
        echo "</head>
<body class=\"";
        // line 67
        echo ($context["class"] ?? null);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 67), "isMobile", [], "method", false, false, false, 67)) {
            echo "ontouchstart";
        }
        echo ">

";
        // line 69
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 69), "get", [0 => "oldBrowserStatus"], "method", false, false, false, 69)) {
            // line 70
            echo "<div class=\"old-browser\">
  <div class=\"ob-content\">
    <h2 class=\"ob-title\">";
            // line 72
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 72), "get", [0 => "oldBrowserTitle"], "method", false, false, false, 72);
            echo "</h2>
    <span class=\"ob-text\">";
            // line 73
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 73), "get", [0 => "oldBrowserText"], "method", false, false, false, 73);
            echo "</span>
    <div class=\"ob-links\">
      <a href=\"https://www.google.com/chrome/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 76
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 76), "get", [0 => "oldBrowserChrome"], "method", false, false, false, 76);
            echo "\" alt=\"Chrome\" />
        <span class=\"ob-name\">Chrome</span>
      </a>
      <a href=\"https://www.mozilla.org/firefox/new/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 80
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 80), "get", [0 => "oldBrowserFirefox"], "method", false, false, false, 80);
            echo "\" alt=\"Firefox\" />
        <span class=\"ob-name\">Firefox</span>
      </a>
      <a href=\"https://www.microsoft.com/en-us/windows/microsoft-edge\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 84
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 84), "get", [0 => "oldBrowserEdge"], "method", false, false, false, 84);
            echo "\" alt=\"edge\" />
        <span class=\"ob-name\">Microsoft Edge</span>
      </a>
      <a href=\"https://www.opera.com/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 88
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 88), "get", [0 => "oldBrowserOpera"], "method", false, false, false, 88);
            echo "\" alt=\"opera\" />
        <span class=\"ob-name\">Opera</span>
      </a>
      <a href=\"https://www.apple.com/lae/safari/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 92
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 92), "get", [0 => "oldBrowserSafari"], "method", false, false, false, 92);
            echo "\" alt=\"safari\" />
        <span class=\"ob-name\">Safari on Mac</span>
      </a>
    </div>
  </div>
</div>
";
        }
        // line 99
        echo "
";
        // line 100
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 100), "isPopup", [], "method", false, false, false, 100)) {
            // line 101
            echo "<div class=\"mobile-container mobile-main-menu-container\">
  <div class=\"mobile-wrapper-header\">
    <span>";
            // line 103
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 103), "get", [0 => "headerMobileMenuTitle"], "method", false, false, false, 103);
            echo "</span>
    ";
            // line 104
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 104), "get", [0 => "mobileLangPosition"], "method", false, false, false, 104) == "menu")) {
                // line 105
                echo "      <div class=\"language-currency top-menu\">
        <div class=\"mobile-currency-wrapper\">
            ";
                // line 107
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 107), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 107)) ? (($context["currency"] ?? null)) : (""));
                echo "
        </div>
        <div class=\"mobile-language-wrapper\">
            ";
                // line 110
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 110), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 110)) ? (($context["language"] ?? null)) : (""));
                echo "
        </div>
      </div>
    ";
            }
            // line 114
            echo "    <a class=\"x\"></a>
  </div>
  <div class=\"mobile-main-menu-wrapper\">
    ";
            // line 117
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 117), "isPhone", [], "method", false, false, false, 117) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 117), "isTablet", [], "method", false, false, false, 117) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 117), "get", [0 => "mobileHeaderOn"], "method", false, false, false, 117) == "tablet")))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 117), "get", [0 => "mobile_main_menu"], "method", false, false, false, 117)) : (""));
            echo "
  </div>
</div>

<div class=\"mobile-container mobile-filter-container\">
  <div class=\"mobile-wrapper-header\"></div>
  <div class=\"mobile-filter-wrapper\"></div>
</div>

<div class=\"mobile-container mobile-cart-content-container\">
  <div class=\"mobile-wrapper-header\">
    <span>";
            // line 128
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 128), "get", [0 => "headerMobileCartTitle"], "method", false, false, false, 128);
            echo "</span>
    <a class=\"x\"></a>
  </div>
  <div class=\"mobile-cart-content-wrapper cart-content\"></div>
</div>
";
        }
        // line 134
        echo "
";
        // line 135
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "popup"], "method", false, false, false, 135);
        echo "

<div class=\"site-wrapper\">

  ";
        // line 139
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "header_notice"], "method", false, false, false, 139);
        echo "

  ";
        // line 141
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 141), "isPopup", [], "method", false, false, false, 141)) {
            // line 142
            echo "  <header class=\"header-";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 142), "get", [0 => "headerType"], "method", false, false, false, 142);
            echo "\">
    ";
            // line 143
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 143), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 143) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 143), "get", [0 => "headerType"], "method", false, false, false, 143))) {
                // line 144
                echo "      ";
                $this->loadTemplate((("journal3/template/journal3/headers/desktop/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 144), "get", [0 => "headerType"], "method", false, false, false, 144)) . ".twig"), "journal3/template/common/header.twig", 144)->display($context);
                // line 145
                echo "    ";
            }
            // line 146
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 146), "get", [0 => "mobileHeaderType"], "method", false, false, false, 146)) {
                // line 147
                echo "      ";
                $this->loadTemplate((("journal3/template/journal3/headers/mobile/header_mobile_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 147), "get", [0 => "mobileHeaderType"], "method", false, false, false, 147)) . ".twig"), "journal3/template/common/header.twig", 147)->display($context);
                // line 148
                echo "    ";
            }
            // line 149
            echo "  </header>
  ";
        }
        // line 151
        echo "
  ";
        // line 152
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "fullscreen_slider"], "method", false, false, false, 152);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 152,  403 => 151,  399 => 149,  396 => 148,  393 => 147,  390 => 146,  387 => 145,  384 => 144,  382 => 143,  377 => 142,  375 => 141,  370 => 139,  363 => 135,  360 => 134,  351 => 128,  337 => 117,  332 => 114,  325 => 110,  319 => 107,  315 => 105,  313 => 104,  309 => 103,  305 => 101,  303 => 100,  300 => 99,  290 => 92,  283 => 88,  276 => 84,  269 => 80,  262 => 76,  256 => 73,  252 => 72,  248 => 70,  246 => 69,  237 => 67,  234 => 66,  229 => 64,  227 => 63,  214 => 61,  210 => 60,  204 => 58,  202 => 57,  197 => 55,  194 => 54,  186 => 52,  182 => 51,  171 => 49,  167 => 48,  155 => 45,  149 => 43,  147 => 42,  143 => 41,  136 => 38,  130 => 36,  128 => 35,  126 => 34,  120 => 32,  118 => 31,  113 => 30,  99 => 27,  95 => 26,  93 => 25,  87 => 23,  85 => 22,  79 => 20,  77 => 19,  73 => 18,  69 => 17,  53 => 12,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/header.twig", "");
    }
}
