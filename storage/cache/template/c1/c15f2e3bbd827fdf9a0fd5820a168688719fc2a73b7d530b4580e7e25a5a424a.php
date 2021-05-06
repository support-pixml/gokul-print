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

/* journal3/template/product/category.twig */
class __TwigTemplate_56966d271b46d3ede997161989c810bf76665b939638419c9465f710fd261a91 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<ul class=\"breadcrumb\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 4
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 4);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 4);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>
";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 7), "get", [0 => "pageTitlePosition"], "method", false, false, false, 7) == "top")) {
            // line 8
            echo "  <h1 class=\"title page-title\"><span>";
            echo ($context["heading_title"] ?? null);
            echo "</span></h1>
";
        }
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 10);
        echo "
<div class=\"container\">
  <div class=\"row\">";
        // line 12
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\">
      ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 14), "get", [0 => "pageTitlePosition"], "method", false, false, false, 14) == "default")) {
            // line 15
            echo "        <h1 class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 17
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 17), "get", [0 => "categoryPageDescStatus"], "method", false, false, false, 17)) {
            // line 18
            echo "      ";
            if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
                // line 19
                echo "        <div class=\"category-description\">
          ";
                // line 20
                if ((($context["thumb"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 20), "get", [0 => "categoryPageCategoryImageStatus"], "method", false, false, false, 20))) {
                    // line 21
                    echo "          <img src=\"";
                    echo ($context["thumb"] ?? null);
                    echo "\" ";
                    if (($context["thumb2x"] ?? null)) {
                        echo "srcset=\"";
                        echo ($context["thumb"] ?? null);
                        echo " 1x, ";
                        echo ($context["thumb2x"] ?? null);
                        echo " 2x\"";
                    }
                    echo " alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" class=\"category-image\"/>
          ";
                }
                // line 23
                echo "          ";
                if ((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 23), "get", [0 => "categoryPageCategoryDescriptionStatus"], "method", false, false, false, 23))) {
                    // line 24
                    echo "            <div class=\"category-text\">";
                    echo ($context["description"] ?? null);
                    echo "</div>
          ";
                }
                // line 26
                echo "        </div>
      ";
            }
            // line 28
            echo "      ";
        }
        // line 29
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 30), "get", [0 => "subcategoriesStatus"], "method", false, false, false, 30)) {
            // line 31
            echo "        ";
            if (($context["categories"] ?? null)) {
                // line 32
                echo "          <div class=\"refine-categories refine-";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 32), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 32);
                echo "\">
            ";
                // line 33
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 33), "get", [0 => "refineTitle"], "method", false, false, false, 33)) {
                    // line 34
                    echo "              <h3 class=\"refine-title title\">";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 34), "get", [0 => "refineTitleText"], "method", false, false, false, 34);
                    echo "</h3>
            ";
                }
                // line 36
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 36), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 36) == "carousel")) {
                    // line 37
                    echo "            <div class=\"swiper\" data-items-per-row='";
                    echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 37), "get", [0 => "subcategoriesItemsPerRow"], "method", false, false, false, 37), twig_constant("JSON_FORCE_OBJECT"));
                    echo "' data-options='";
                    echo json_encode(twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "carousel", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 37), "getJs", [], "method", false, false, false, 37), 1 => "subcategoriesCarouselStyle"], "method", false, false, false, 37), twig_constant("JSON_FORCE_OBJECT"));
                    echo "'>
              <div class=\"swiper-container\" ";
                    // line 38
                    if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 38)) {
                        echo "dir=\"rtl\"";
                    }
                    echo ">
                <div class=\"swiper-wrapper\">
                  ";
                } else {
                    // line 41
                    echo "                  <div class=\"refine-items\">
                    ";
                }
                // line 43
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 44
                    echo "                      <div class=\"refine-item ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 44), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 44) == "carousel")) {
                        echo "swiper-slide";
                    }
                    echo "\">
                        <a href=\"";
                    // line 45
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 45);
                    echo "\">
                          ";
                    // line 46
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 46), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 46) != "links")) {
                        // line 47
                        echo "                            <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 47);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 47)) {
                            echo "data-srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 47);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 47);
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "alt", [], "any", false, false, false, 47);
                        echo "\"/>
                          ";
                    }
                    // line 49
                    echo "                          <span class=\"refine-name\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 49);
                    echo "</span>
                        </a>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 53), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 53) != "carousel")) {
                    // line 54
                    echo "                  </div>
                  ";
                } else {
                    // line 56
                    echo "                </div>
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
                echo "          </div>
        ";
            }
            // line 67
            echo "      ";
        }
        // line 68
        echo "      <div class=\"main-products-wrapper\">
      ";
        // line 69
        if (($context["products"] ?? null)) {
            // line 70
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 70), "get", [0 => "sortBarStatus"], "method", false, false, false, 70)) {
                // line 71
                echo "        <div class=\"products-filter\">
          <div class=\"grid-list\">
            <button id=\"btn-grid-view\" class=\"view-btn ";
                // line 73
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 73), "get", [0 => "globalProductView"], "method", false, false, false, 73) == "grid")) {
                    echo "active";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_grid"] ?? null);
                echo "\" data-view=\"grid\"></button>
            <button id=\"btn-list-view\" class=\"view-btn ";
                // line 74
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 74), "get", [0 => "globalProductView"], "method", false, false, false, 74) == "list")) {
                    echo "active";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_list"] ?? null);
                echo "\" data-view=\"list\"></button>
            <a href=\"";
                // line 75
                echo ($context["compare"] ?? null);
                echo "\" id=\"compare-total\" class=\"compare-btn\">";
                echo ($context["text_compare"] ?? null);
                echo "</a>
            <a class=\"template-filter btn\">Filter</a>
          </div>
          <div class=\"select-group\">
            <div class=\"input-group input-group-sm sort-by\">
              <label class=\"input-group-addon\" for=\"input-sort\">";
                // line 80
                echo ($context["text_sort"] ?? null);
                echo "</label>
              <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                ";
                // line 82
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sorts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 83
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 83) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                        // line 84
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 84);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 84);
                        echo "</option>
                  ";
                    } else {
                        // line 86
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 86);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 86);
                        echo "</option>
                  ";
                    }
                    // line 88
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "              </select>
            </div>
            <div class=\"input-group input-group-sm per-page\">
              <label class=\"input-group-addon\" for=\"input-limit\">";
                // line 92
                echo ($context["text_limit"] ?? null);
                echo "</label>
              <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                ";
                // line 94
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["limits"]);
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 95
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 95) == ($context["limit"] ?? null))) {
                        // line 96
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 96);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 96);
                        echo "</option>
                  ";
                    } else {
                        // line 98
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 98);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 98);
                        echo "</option>
                  ";
                    }
                    // line 100
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "              </select>
            </div>
          </div>
        </div>
        ";
            }
            // line 106
            echo "        <div class=\"main-products product-";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 106), "get", [0 => "globalProductView"], "method", false, false, false, 106);
            echo "\">
          ";
            // line 107
            $context["display"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 107), "get", [0 => "globalProductView"], "method", false, false, false, 107);
            // line 108
            echo "          ";
            $this->loadTemplate("journal3/template/journal3/product_card.twig", "journal3/template/product/category.twig", 108)->display($context);
            // line 109
            echo "        </div>
        <div class=\"row pagination-results\">
          <div class=\"col-sm-6 text-left\">";
            // line 111
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 112
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
      ";
        }
        // line 115
        echo "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 116
            echo "        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
        <div class=\"buttons\">
          <div class=\"pull-right\"><a href=\"";
            // line 118
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
        </div>
      ";
        }
        // line 121
        echo "      </div>
      ";
        // line 122
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 123
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 125
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets", 1 => ($context["breadcrumbs"] ?? null)], "method", false, false, false, 125);
        echo "
";
        // line 126
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 126,  417 => 125,  412 => 123,  408 => 122,  405 => 121,  397 => 118,  391 => 116,  388 => 115,  382 => 112,  378 => 111,  374 => 109,  371 => 108,  369 => 107,  364 => 106,  357 => 101,  351 => 100,  343 => 98,  335 => 96,  332 => 95,  328 => 94,  323 => 92,  318 => 89,  312 => 88,  304 => 86,  296 => 84,  293 => 83,  289 => 82,  284 => 80,  274 => 75,  266 => 74,  258 => 73,  254 => 71,  251 => 70,  249 => 69,  246 => 68,  243 => 67,  239 => 65,  228 => 56,  224 => 54,  221 => 53,  210 => 49,  194 => 47,  192 => 46,  188 => 45,  181 => 44,  176 => 43,  172 => 41,  164 => 38,  157 => 37,  154 => 36,  148 => 34,  146 => 33,  141 => 32,  138 => 31,  136 => 30,  131 => 29,  128 => 28,  124 => 26,  118 => 24,  115 => 23,  97 => 21,  95 => 20,  92 => 19,  89 => 18,  86 => 17,  80 => 15,  78 => 14,  73 => 12,  68 => 10,  62 => 8,  60 => 7,  57 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/product/category.twig", "");
    }
}
