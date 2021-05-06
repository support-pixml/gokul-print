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

/* journal3/template/journal3/module/blocks.twig */
class __TwigTemplate_9da66dfda7ad9d6efac3ea4ecc57c14ed7825edfd771af64df6a9676e8217029 extends \Twig\Template
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
        // line 32
        $macros["self"] = $this->macros["self"] = $this;
        // line 33
        echo "<div class=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ($context["classes"] ?? null)], "method", false, false, false, 33);
        echo "\">
  ";
        // line 34
        if (($context["title"] ?? null)) {
            // line 35
            echo "    <h3 class=\"title module-title\">";
            echo ($context["title"] ?? null);
            echo "</h3>
  ";
        }
        // line 37
        echo "  <div class=\"module-body\">
  ";
        // line 39
        echo "  ";
        if (((($context["display"] ?? null) == "grid") &&  !($context["carousel"] ?? null))) {
            // line 40
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 41
                echo "      <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 41)], "method", false, false, false, 41);
                echo "\">
        ";
                // line 42
                echo twig_call_macro($macros["self"], "macro_renderBlocksItem", [$context["item"], $context], 42, $context, $this->getSourceContext());
                echo "
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "  ";
        }
        // line 46
        echo "  ";
        // line 47
        echo "  ";
        if (((($context["display"] ?? null) == "grid") && ($context["carousel"] ?? null))) {
            // line 48
            echo "    <div class=\"swiper\" data-items-per-row='";
            echo json_encode(($context["itemsPerRow"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
            echo "' data-options='";
            echo json_encode(($context["carouselOptions"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
            echo "'>
      <div class=\"swiper-container\" ";
            // line 49
            if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 49)) {
                echo "dir=\"rtl\"";
            }
            echo ">
        <div class=\"swiper-wrapper\">
          ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 52
                echo "            <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 52)], "method", false, false, false, 52);
                echo "\">
              ";
                // line 53
                echo twig_call_macro($macros["self"], "macro_renderBlocksItem", [$context["item"], $context], 53, $context, $this->getSourceContext());
                echo "
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        </div>
      </div>
      <div class=\"swiper-buttons\">
        <div class=\"swiper-button-prev\"></div>
        <div class=\"swiper-button-next\"></div>
      </div>
      <div class=\"swiper-pagination\"></div>
    </div>
  ";
        }
        // line 65
        echo "  ";
        // line 66
        echo "  ";
        if ((($context["display"] ?? null) == "tabs")) {
            // line 67
            echo "    <div class=\"tabs-container\">
      <ul class=\"nav nav-tabs\">
        ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 70
                echo "          <li class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "tab_classes", [], "any", false, false, false, 70)], "method", false, false, false, 70);
                echo "\">
            ";
                // line 71
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 71), "href", [], "any", false, false, false, 71)) {
                    // line 72
                    echo "              <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 72), "href", [], "any", false, false, false, 72);
                    echo "\" ";
                    echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 72)], "method", false, false, false, 72);
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 72);
                    echo "</a>
            ";
                } else {
                    // line 74
                    echo "              <a href=\"#";
                    echo ($context["id"] ?? null);
                    echo "-tab-";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 74);
                    echo "\" data-toggle=\"tab\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 74);
                    echo "</a>
            ";
                }
                // line 76
                echo "          </li>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "      </ul>
      <div class=\"tab-content\">
        ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 81
                echo "          ";
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 81), "href", [], "any", false, false, false, 81)) {
                    // line 82
                    echo "            <div class=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 82)], "method", false, false, false, 82);
                    echo "\" id=\"";
                    echo ($context["id"] ?? null);
                    echo "-tab-";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 82);
                    echo "\">
              ";
                    // line 83
                    echo twig_call_macro($macros["self"], "macro_renderBlocksItem", [$context["item"], $context], 83, $context, $this->getSourceContext());
                    echo "
            </div>
          ";
                }
                // line 86
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "      </div>
    </div>
  ";
        }
        // line 90
        echo "  ";
        // line 91
        echo "  ";
        if ((($context["display"] ?? null) == "accordion")) {
            // line 92
            echo "    <div class=\"panel-group\" id=\"";
            echo ($context["id"] ?? null);
            echo "-collapse\">
      ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 94
                echo "        <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 94)], "method", false, false, false, 94);
                echo "\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
              <a href=\"#";
                // line 97
                echo ($context["id"] ?? null);
                echo "-collapse-";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 97);
                echo "\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#";
                echo ($context["id"] ?? null);
                echo "-collapse\" aria-expanded=\"false\">
                ";
                // line 98
                echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 98);
                echo "
                <i class=\"fa fa-caret-down\"></i>
              </a>
            </h4>
          </div>
          <div class=\"";
                // line 103
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "panel_classes", [], "any", false, false, false, 103)], "method", false, false, false, 103);
                echo "\" id=\"";
                echo ($context["id"] ?? null);
                echo "-collapse-";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 103);
                echo "\">
            <div class=\"panel-body\">
              ";
                // line 105
                echo twig_call_macro($macros["self"], "macro_renderBlocksItem", [$context["item"], $context], 105, $context, $this->getSourceContext());
                echo "
            </div>
          </div>
        </div>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "    </div>
  ";
        }
        // line 112
        echo "  </div>
</div>
";
    }

    // line 1
    public function macro_renderBlocksItem($__item__ = null, $__context__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "context" => $__context__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "  ";
            $macros["self"] = $this;
            // line 3
            echo "  <div class=\"block-body expand-block\">
    ";
            // line 4
            if (((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "display", [], "any", false, false, false, 4) == "grid") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 4))) {
                // line 5
                echo "      <h3 class=\"title module-title block-title\">";
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 5);
                echo "</h3>
    ";
            }
            // line 7
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "header", [], "any", false, false, false, 7) == "image")) {
                // line 8
                echo "      <div class=\"block-header\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 8);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image2x", [], "any", false, false, false, 8)) {
                    echo " srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 8);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image2x", [], "any", false, false, false, 8);
                    echo " 2x\" ";
                }
                echo " alt=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "alt", [], "any", false, false, false, 8);
                echo "\" class=\"block-image\" width=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 8), "width", [], "any", false, false, false, 8);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 8), "height", [], "any", false, false, false, 8);
                echo "\"/></div>
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 9
($context["item"] ?? null), "header", [], "any", false, false, false, 9) == "icon")) {
                // line 10
                echo "      <div class=\"block-header\"><i class=\"icon icon-block\"></i></div>
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 11
($context["item"] ?? null), "header", [], "any", false, false, false, 11) == "text")) {
                // line 12
                echo "      <div class=\"block-header\"><span class=\"block-header-text\">";
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "text", [], "any", false, false, false, 12);
                echo "</span></div>
    ";
            }
            // line 14
            echo "    <div class=\"block-wrapper\">
      <div class=\"block-content ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "expandButton", [], "any", false, false, false, 15)) {
                echo "expand-content";
            }
            echo " block-";
            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "contentType", [], "any", false, false, false, 15);
            echo "\">
        ";
            // line 16
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "contentType", [], "any", false, false, false, 16) == "map")) {
                // line 17
                echo "        <div class=\"journal-loading\"><i class=\"fa fa-spinner fa-spin\"></i></div>
        ";
            }
            // line 19
            echo "        ";
            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 19);
            echo "
        ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "expandButton", [], "any", false, false, false, 20)) {
                // line 21
                echo "          <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
        ";
            }
            // line 23
            echo "      </div>
      ";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "footer", [], "any", false, false, false, 24) == "text")) {
                // line 25
                echo "        <div class=\"block-footer\">";
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "footerText", [], "any", false, false, false, 25);
                echo "</div>
      ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 26
($context["item"] ?? null), "footer", [], "any", false, false, false, 26) == "button")) {
                // line 27
                echo "        <div class=\"block-footer\"><a class=\"btn\" href=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "footerButtonLink", [], "any", false, false, false, 27), "href", [], "any", false, false, false, 27);
                echo "\" ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "j3", [], "any", false, false, false, 27), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "footerButtonLink", [], "any", false, false, false, 27)], "method", false, false, false, 27);
                echo ">";
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "footerButton", [], "any", false, false, false, 27);
                echo "</a></div>
      ";
            }
            // line 29
            echo "    </div>
  </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/blocks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 29,  445 => 27,  443 => 26,  438 => 25,  436 => 24,  433 => 23,  429 => 21,  427 => 20,  422 => 19,  418 => 17,  416 => 16,  408 => 15,  405 => 14,  399 => 12,  397 => 11,  394 => 10,  392 => 9,  373 => 8,  370 => 7,  364 => 5,  362 => 4,  359 => 3,  356 => 2,  342 => 1,  336 => 112,  332 => 110,  313 => 105,  304 => 103,  296 => 98,  288 => 97,  281 => 94,  264 => 93,  259 => 92,  256 => 91,  254 => 90,  249 => 87,  235 => 86,  229 => 83,  220 => 82,  217 => 81,  200 => 80,  196 => 78,  181 => 76,  171 => 74,  161 => 72,  159 => 71,  154 => 70,  137 => 69,  133 => 67,  130 => 66,  128 => 65,  117 => 56,  108 => 53,  103 => 52,  99 => 51,  92 => 49,  85 => 48,  82 => 47,  80 => 46,  77 => 45,  68 => 42,  63 => 41,  58 => 40,  55 => 39,  52 => 37,  46 => 35,  44 => 34,  39 => 33,  37 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/blocks.twig", "");
    }
}
