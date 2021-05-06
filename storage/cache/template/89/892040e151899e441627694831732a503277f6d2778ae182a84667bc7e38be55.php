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

/* journal3/template/journal3/module/filter.twig */
class __TwigTemplate_73592793b460b7f78aabfb37456ead929e636f2958f0c39e4e3a4ffdb9958369 extends \Twig\Template
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
        echo "<div class=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ($context["classes"] ?? null)], "method", false, false, false, 1);
        echo "\">
  <h3 class=\"title module-title\">
    <span>";
        // line 3
        echo ($context["title"] ?? null);
        echo "</span>
    <button class=\"reset-filter btn\">";
        // line 4
        echo ($context["resetText"] ?? null);
        echo "</button>
    <a class=\"x\"></a>
  </h3>
  <div class=\"module-body\">
    <div class=\"panel-group\">
      ";
        // line 9
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
            // line 10
            echo "        ";
            $context["item_input"] = ((twig_get_attribute($this->env, $this->source, $context["item"], "input", [], "any", false, false, false, 10)) ? (twig_get_attribute($this->env, $this->source, $context["item"], "input", [], "any", false, false, false, 10)) : (($context["input"] ?? null)));
            // line 11
            echo "        <div class=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 11)], "method", false, false, false, 11);
            echo "\">
          <div class=\"panel-heading\">
            <div class=\"panel-title\">
              <a href=\"#";
            // line 14
            echo ($context["id"] ?? null);
            echo "-collapse-";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 14);
            echo "\" class=\"accordion-toggle ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "collapsed", [], "any", false, false, false, 14)) {
                echo "collapsed";
            }
            echo "\" data-toggle=\"collapse\" aria-expanded=\"";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "collapsed", [], "any", false, false, false, 14)) {
                echo "false";
            } else {
                echo "true";
            }
            echo "\" data-filter=\"";
            echo twig_get_attribute($this->env, $this->source, $context["item"], "key", [], "any", false, false, false, 14);
            echo "\">
                ";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 15);
            echo "
                <i class=\"fa fa-caret-down\"></i>
              </a>
            </div>
          </div>
          <div class=\"";
            // line 20
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "panel_classes", [], "any", false, false, false, 20)], "method", false, false, false, 20);
            echo "\" id=\"";
            echo ($context["id"] ?? null);
            echo "-collapse-";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 20);
            echo "\">
            <div class=\"panel-body\">
              ";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 22) == "p")) {
                // line 23
                echo "                <div class=\"filter-price\" id=\"filter-";
                echo ($context["id"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 23);
                echo "\">
                  <div class=\"range-slider\">
                    <input type=\"text\" class=\"js-range-slider\" value=\"\"/>
                  </div>
                  <div class=\"extra-controls\">
                    ";
                // line 28
                if (($context["currency_left"] ?? null)) {
                    // line 29
                    echo "                      <span class=\"currency-symbol currency-left\">";
                    echo ($context["currency_left"] ?? null);
                    echo "</span>
                    ";
                }
                // line 31
                echo "
                    <input type=\"text\" class=\"filter-price-min\" name=\"min\" data-min=\"";
                // line 32
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "price_range", [], "any", false, false, false, 32), "min", [], "any", false, false, false, 32);
                echo "\" value=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "current_price_range", [], "any", false, false, false, 32), "min", [], "any", false, false, false, 32);
                echo "\"/>

                    ";
                // line 34
                if (($context["currency_right"] ?? null)) {
                    // line 35
                    echo "                      <span class=\"currency-symbol currency-right\">";
                    echo ($context["currency_right"] ?? null);
                    echo "</span>
                    ";
                }
                // line 37
                echo "
                    ";
                // line 38
                if (($context["currency_left"] ?? null)) {
                    // line 39
                    echo "                      <span class=\"currency-symbol currency-left\">";
                    echo ($context["currency_left"] ?? null);
                    echo "</span>
                    ";
                }
                // line 41
                echo "
                    <input type=\"text\" class=\"filter-price-max\" name=\"max\" data-max=\"";
                // line 42
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "price_range", [], "any", false, false, false, 42), "max", [], "any", false, false, false, 42);
                echo "\" value=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "current_price_range", [], "any", false, false, false, 42), "max", [], "any", false, false, false, 42);
                echo "\"/>

                    ";
                // line 44
                if (($context["currency_right"] ?? null)) {
                    // line 45
                    echo "                      <span class=\"currency-symbol currency-right\">";
                    echo ($context["currency_right"] ?? null);
                    echo "</span>
                    ";
                }
                // line 47
                echo "                  </div>
                </div>
              ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 49
$context["item"], "type", [], "any", false, false, false, 49) == "r")) {
                // line 50
                echo "                <div class=\"filter-rating\" id=\"filter-";
                echo ($context["id"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 50);
                echo "\">
                  ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 51));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 52
                    echo "                    <label>
                      <input type=\"";
                    // line 53
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "input", [], "any", false, false, false, 53);
                    echo "\" data-filter-trigger name=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "key", [], "any", false, false, false, 53);
                    echo "\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "id", [], "any", false, false, false, 53);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["subitem"], "checked", [], "any", false, false, false, 53)) {
                        echo "checked";
                    }
                    echo ">
                      <span class=\"links-text rating-stars\">
                        ";
                    // line 55
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 56
                        echo "                          ";
                        if ((twig_get_attribute($this->env, $this->source, $context["subitem"], "id", [], "any", false, false, false, 56) < $context["i"])) {
                            // line 57
                            echo "                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                          ";
                        } else {
                            // line 59
                            echo "                            <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                          ";
                        }
                        // line 61
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 62
                    echo "                      </span>
                      <span class=\"count-badge\">";
                    // line 63
                    echo twig_get_attribute($this->env, $this->source, $context["subitem"], "total", [], "any", false, false, false, 63);
                    echo "</span>
                    </label>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "                </div>
              ";
            } else {
                // line 68
                echo "                ";
                if (((($context["item_input"] ?? null) == "checkbox") || (($context["item_input"] ?? null) == "radio"))) {
                    // line 69
                    echo "                <div class=\"filter-";
                    echo ($context["item_input"] ?? null);
                    echo "\">
                  ";
                    // line 70
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 70));
                    foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                        // line 71
                        echo "                      <label>
                        <input type=\"";
                        // line 72
                        echo ($context["item_input"] ?? null);
                        echo "\" data-filter-trigger name=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "key", [], "any", false, false, false, 72);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["subitem"], "id", [], "any", false, false, false, 72);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["subitem"], "checked", [], "any", false, false, false, 72)) {
                            echo "checked";
                        }
                        echo ">
                        ";
                        // line 73
                        if (twig_get_attribute($this->env, $this->source, $context["subitem"], "image", [], "any", false, false, false, 73)) {
                            // line 74
                            echo "                          <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["subitem"], "image", [], "any", false, false, false, 74);
                            echo "\" ";
                            if (twig_get_attribute($this->env, $this->source, $context["subitem"], "image2x", [], "any", false, false, false, 74)) {
                                echo " srcset=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["subitem"], "image", [], "any", false, false, false, 74);
                                echo " 1x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["subitem"], "image2x", [], "any", false, false, false, 74);
                                echo " 2x\" ";
                            }
                            echo " width=\"";
                            echo ($context["image_width"] ?? null);
                            echo "\" height=\"";
                            echo ($context["image_height"] ?? null);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["subitem"], "value", [], "any", false, false, false, 74);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["subitem"], "value", [], "any", false, false, false, 74);
                            echo "\" class=\"img-responsive\" ";
                            if (twig_get_attribute($this->env, $this->source, $context["item"], "image_only", [], "any", false, false, false, 74)) {
                                echo "data-toggle=\"tooltip\" data-tooltip-class=\"filter-tooltip-";
                                echo ($context["module_id"] ?? null);
                                echo "\" data-placement=\"top\"";
                            }
                            echo "/>
                        ";
                        }
                        // line 76
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "countBadge", [0 => twig_get_attribute($this->env, $this->source, $context["subitem"], "value", [], "any", false, false, false, 76), 1 => twig_get_attribute($this->env, $this->source, $context["subitem"], "total", [], "any", false, false, false, 76)], "method", false, false, false, 76);
                        echo "
                      </label>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 79
                    echo "                </div>
                ";
                } elseif ((                // line 80
($context["item_input"] ?? null) == "select")) {
                    // line 81
                    echo "                  <div class=\"";
                    echo ($context["item_input"] ?? null);
                    echo "\">
                    <label>
                      <select name=\"";
                    // line 83
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "key", [], "any", false, false, false, 83);
                    echo "\" data-filter-trigger>
                        <option value=\"\"></option>
                        ";
                    // line 85
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 85));
                    foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                        // line 86
                        echo "                          <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["subitem"], "id", [], "any", false, false, false, 86);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["subitem"], "checked", [], "any", false, false, false, 86)) {
                            echo "selected";
                        }
                        echo ">";
                        echo ((twig_get_attribute($this->env, $this->source, $context["subitem"], "total", [], "any", false, false, false, 86)) ? ((((twig_get_attribute($this->env, $this->source, $context["subitem"], "value", [], "any", false, false, false, 86) . " (") . twig_get_attribute($this->env, $this->source, $context["subitem"], "total", [], "any", false, false, false, 86)) . ")")) : (twig_get_attribute($this->env, $this->source, $context["subitem"], "value", [], "any", false, false, false, 86)));
                        echo "</option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 88
                    echo "                      </select>
                    </label>
                  </div>
                ";
                }
                // line 92
                echo "              ";
            }
            // line 93
            echo "            </div>
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
        // line 97
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 97,  366 => 93,  363 => 92,  357 => 88,  342 => 86,  338 => 85,  333 => 83,  327 => 81,  325 => 80,  322 => 79,  312 => 76,  284 => 74,  282 => 73,  270 => 72,  267 => 71,  263 => 70,  258 => 69,  255 => 68,  251 => 66,  242 => 63,  239 => 62,  233 => 61,  229 => 59,  225 => 57,  222 => 56,  218 => 55,  205 => 53,  202 => 52,  198 => 51,  191 => 50,  189 => 49,  185 => 47,  179 => 45,  177 => 44,  170 => 42,  167 => 41,  161 => 39,  159 => 38,  156 => 37,  150 => 35,  148 => 34,  141 => 32,  138 => 31,  132 => 29,  130 => 28,  119 => 23,  117 => 22,  108 => 20,  100 => 15,  82 => 14,  75 => 11,  72 => 10,  55 => 9,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/filter.twig", "");
    }
}
