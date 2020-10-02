<?php

/* journal2/template/product/manufacturer_info.twig */
class __TwigTemplate_f37d96e84696d23335c0a7750de5ca315ea570080e5a5d753111061f4553c4c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<link rel=\"stylesheet\" href=\"catalog/view/theme/journal2/css/momday.css\">
<script src=\"catalog/view/javascript/momday/celebrity.js\"></script>
<div id=\"container\" class=\"container j-container\">
  <ul class=\"breadcrumb\">";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "      <li itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\"><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</span></a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "  </ul>
  <div class=\"row\">";
        // line 10
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        // line 11
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            $context["class"] = "col-sm-6";
        } elseif ((        // line 13
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 14
            $context["class"] = "col-sm-9";
        } else {
            // line 16
            $context["class"] = "col-sm-12";
        }
        // line 18
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
      <h1 class=\"heading-title\">";
        // line 19
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>";
        // line 20
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        // line 21
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 22
            echo "        <div class=\"product-filter\">
          <div class=\"display\">
            <a onclick=\"Journal.gridView()\" class=\"grid-view\">";
            // line 24
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "category_grid_view_icon", 1 => (isset($context["button_grid"]) ? $context["button_grid"] : null)), "method");
            echo "</a>
            <a onclick=\"Journal.listView()\" class=\"list-view\">";
            // line 25
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "category_list_view_icon", 1 => (isset($context["button_list"]) ? $context["button_list"] : null)), "method");
            echo "</a>
          </div>
          <div class=\"product-compare\"><a href=\"";
            // line 27
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></div>
          <div class=\"limit\"><b>";
            // line 28
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</b>
            <select onchange=\"location = this.value;\">";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 31
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 32
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>";
                } else {
                    // line 34
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            </select>
          </div>
          <div class=\"sort\"><b>";
            // line 39
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</b>
            <select onchange=\"location = this.value;\">";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 42
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 43
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>";
                } else {
                    // line 45
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            </select>
          </div>
        </div>
        <div class=\"row main-products product-grid\" data-grid-classes=\"";
            // line 51
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_classes"), "method");
            echo " display-";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method");
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_block_button"), "method");
            echo "\">";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 53
                echo "            <div class=\"product-grid-item";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_classes"), "method");
                echo "\">
              <div class=\"product-thumb product-wrapper";
                // line 54
                if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                    echo " outofstock";
                }
                echo "\">
                <div class=\"image";
                // line 55
                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never") && $this->getAttribute($context["product"], "date_end", array()))) {
                    echo " has-countdown";
                }
                echo "\">
                  <a href=\"";
                // line 56
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"";
                if ($this->getAttribute($context["product"], "thumb2", array())) {
                    echo " class=\"has-second-image\" style=\"background: url('";
                    echo $this->getAttribute($context["product"], "thumb2", array());
                    echo "') no-repeat\"";
                }
                echo ">
                    <img class=\"lazy first-image\" width=\"";
                // line 57
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_image_width"), "method");
                echo "\" height=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_image_height"), "method");
                echo "\" src=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_dummy_image"), "method");
                echo "\" data-src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"/>
                  </a>";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
                foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                    // line 60
                    echo "                    <span class=\"label-";
                    echo $context["label"];
                    echo "\"><b>";
                    echo $context["name"];
                    echo "</b></span>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position"), "method") == "image") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method") == "icon"))) {
                    // line 63
                    echo "                    <div class=\"wishlist\"><a onclick=\"addToWishList('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "</span></a></div>
                    <div class=\"compare\"><a onclick=\"addToCompare('";
                    // line 64
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "</span></a></div>";
                }
                // line 66
                echo "                </div>
                <div class=\"product-details\">
                  <div class=\"caption\">
                    <h4 class=\"name\"><a href=\"";
                // line 69
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
                    <p class=\"description\">";
                // line 70
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>";
                // line 71
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 72
                    echo "                      <div class=\"price\">";
                    // line 73
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 74
                        echo $this->getAttribute($context["product"], "price", array());
                    } else {
                        // line 76
                        echo "                          <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> <span class=\"price-new\"";
                        if ($this->getAttribute($context["product"], "date_end", array())) {
                            echo "data-end-date=\"";
                            echo $this->getAttribute($context["product"], "date_end", array());
                            echo "\"";
                        }
                        echo ">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>";
                    }
                    // line 78
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 79
                        echo "                          <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>";
                    }
                    // line 81
                    echo "                      </div>";
                }
                // line 83
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 84
                    echo "                      <div class=\"rating\">";
                    // line 85
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 86
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 87
                            echo "                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                        } else {
                            // line 89
                            echo "                            <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 92
                    echo "                      </div>";
                }
                // line 94
                echo "                  </div>
                  <div class=\"button-group\">";
                // line 96
                if (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "isEnquiryProduct", array(0 => null, 1 => $context["product"])))) {
                    // line 97
                    echo "                      <div class=\"cart enquiry-button\">
                        <a href=\"javascript:Journal.openPopup('";
                    // line 98
                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_popup_code"), "method");
                    echo "', '";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" data-clk=\"addToCart('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"button hint--top\" data-hint=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_text"), "method");
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_icon"), "method");
                    echo "<span class=\"button-cart-text\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_text"), "method");
                    echo "</span></a>
                      </div>";
                } else {
                    // line 101
                    echo "                      <div class=\"cart";
                    if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                        echo " outofstock";
                    }
                    echo "\" style = \"display: inline;\">
                        <a onclick=\"addToCart('";
                    // line 102
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "', '";
                    echo $this->getAttribute($context["product"], "minimum", array());
                    echo "');\" class=\"";
                    if ((isset($context["is_celebrity"]) ? $context["is_celebrity"] : null)) {
                        echo "celebrity-cart-button-identifier grid-button-cart-celebrity";
                    }
                    echo "button hint--top\" data-hint=\"";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "\"><i class=\"button-left-icon\"></i><span class=\"";
                    if ((isset($context["is_celebrity"]) ? $context["is_celebrity"] : null)) {
                        echo "celebrity-cart-text-identifier grid-button-cart-text-celebrity";
                    }
                    echo "button-cart-text\">";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "</span><i class=\"button-right-icon\"></i></a>
                      </div>";
                    // line 104
                    if ((isset($context["is_celebrity"]) ? $context["is_celebrity"] : null)) {
                        // line 105
                        echo "                          <a onclick=\"addRemoveFromCelebrityStore(this, '";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "', '";
                        echo (isset($context["text_add_to_celebrity_store"]) ? $context["text_add_to_celebrity_store"] : null);
                        echo "', '";
                        echo (isset($context["text_in_celebrity_store"]) ? $context["text_in_celebrity_store"] : null);
                        echo "');\"";
                        // line 106
                        if (twig_in_filter($this->getAttribute($context["product"], "product_id", array()), (isset($context["celebrity_products"]) ? $context["celebrity_products"] : null))) {
                            echo "product-in-store=\"1\"";
                        } else {
                            echo "product-in-store=\"0\"";
                        }
                        // line 107
                        echo "                             class=\" instore";
                        if (twig_in_filter($this->getAttribute($context["product"], "product_id", array()), (isset($context["celebrity_products"]) ? $context["celebrity_products"] : null))) {
                            echo "button-celebrity-pressed";
                        }
                        echo " celebrity-store-button-identifier button hint--top button-celebrity-store-grid\"
                          ><span class = \"celebrity-store-button-text-identifier button-celebrity-store-grid-text\">";
                        // line 108
                        if (twig_in_filter($this->getAttribute($context["product"], "product_id", array()), (isset($context["celebrity_products"]) ? $context["celebrity_products"] : null))) {
                            echo (isset($context["text_in_celebrity_store"]) ? $context["text_in_celebrity_store"] : null);
                        } else {
                            echo (isset($context["text_add_to_celebrity_store"]) ? $context["text_add_to_celebrity_store"] : null);
                        }
                        echo "</span></a>";
                    }
                }
                // line 111
                echo "                    <br>
                    <div class=\"wishlist\"><a onclick=\"addToWishList('";
                // line 112
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" class=\"hint--top\" data-hint=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span></a></div>
                    <div class=\"compare\"><a onclick=\"addToCompare('";
                // line 113
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" class=\"hint--top\" data-hint=\"";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "</span></a></div>
                  </div>
                </div>
              </div>
            </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "        </div>
        <div class=\"row pagination\">
          <div class=\"col-sm-6 text-left links\">";
            // line 121
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
          <div class=\"col-sm-6 text-right results\">";
            // line 122
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
        </div>";
        } else {
            // line 125
            echo "        <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
        <div class=\"buttons\">
          <div class=\"pull-right\"><a href=\"";
            // line 127
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"button btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
        </div>";
        }
        // line 130
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  </div>
  <script>Journal.applyView('";
        // line 132
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_view", 1 => "grid"), "method");
        echo "');</script>";
        // line 133
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never")) {
            // line 134
            echo "    <script>Journal.enableCountdown();</script>";
        }
        // line 136
        echo "</div>";
        // line 137
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/product/manufacturer_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 137,  453 => 136,  450 => 134,  448 => 133,  445 => 132,  440 => 130,  433 => 127,  427 => 125,  422 => 122,  418 => 121,  414 => 119,  399 => 113,  391 => 112,  388 => 111,  379 => 108,  372 => 107,  366 => 106,  358 => 105,  356 => 104,  338 => 102,  331 => 101,  316 => 98,  313 => 97,  311 => 96,  308 => 94,  305 => 92,  298 => 89,  295 => 87,  293 => 86,  289 => 85,  287 => 84,  285 => 83,  282 => 81,  276 => 79,  274 => 78,  261 => 76,  258 => 74,  256 => 73,  254 => 72,  252 => 71,  249 => 70,  243 => 69,  238 => 66,  230 => 64,  221 => 63,  219 => 62,  209 => 60,  205 => 59,  191 => 57,  181 => 56,  175 => 55,  169 => 54,  164 => 53,  160 => 52,  154 => 51,  149 => 48,  138 => 45,  131 => 43,  129 => 42,  125 => 41,  121 => 39,  117 => 37,  106 => 34,  99 => 32,  97 => 31,  93 => 30,  89 => 28,  83 => 27,  78 => 25,  74 => 24,  70 => 22,  68 => 21,  66 => 20,  63 => 19,  58 => 18,  55 => 16,  52 => 14,  50 => 13,  48 => 12,  46 => 11,  43 => 10,  40 => 9,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* {{ header }}*/
/* <link rel="stylesheet" href="catalog/view/theme/journal2/css/momday.css">*/
/* <script src="catalog/view/javascript/momday/celebrity.js"></script>*/
/* <div id="container" class="container j-container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}{{ column_right }}*/
/*     {% if column_left and column_right %}*/
/*       {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*       {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*       {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">*/
/*       <h1 class="heading-title">{{ heading_title }}</h1>*/
/*       {{ content_top }}*/
/*       {% if products %}*/
/*         <div class="product-filter">*/
/*           <div class="display">*/
/*             <a onclick="Journal.gridView()" class="grid-view">{{ journal2.settings.get('category_grid_view_icon', button_grid) }}</a>*/
/*             <a onclick="Journal.listView()" class="list-view">{{ journal2.settings.get('category_list_view_icon', button_list) }}</a>*/
/*           </div>*/
/*           <div class="product-compare"><a href="{{ compare }}" id="compare-total">{{ text_compare }}</a></div>*/
/*           <div class="limit"><b>{{ text_limit }}</b>*/
/*             <select onchange="location = this.value;">*/
/*               {% for limits in limits %}*/
/*                 {% if limits.value == limit %}*/
/*                   <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*                 {% else %}*/
/*                   <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*           <div class="sort"><b>{{ text_sort }}</b>*/
/*             <select onchange="location = this.value;">*/
/*               {% for sorts in sorts %}*/
/*                 {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*                   <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*                 {% else %}*/
/*                   <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*         <div class="row main-products product-grid" data-grid-classes="{{ journal2.settings.get('product_grid_classes') }} display-{{ journal2.settings.get('product_grid_wishlist_icon_display') }} {{ journal2.settings.get('product_grid_button_block_button') }}">*/
/*           {% for product in products %}*/
/*             <div class="product-grid-item {{ journal2.settings.get('product_grid_classes') }}">*/
/*               <div class="product-thumb product-wrapper {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                 <div class="image {% if journal2.settings.get('show_countdown', 'never') != 'never' and product.date_end %} has-countdown {% endif %}">*/
/*                   <a href="{{ product.href }}" {% if product.thumb2 %} class="has-second-image" style="background: url('{{ product.thumb2 }}') no-repeat" {% endif %}>*/
/*                     <img class="lazy first-image" width="{{ journal2.settings.get('config_image_width') }}" height="{{ journal2.settings.get('config_image_height') }}" src="{{ journal2.settings.get('product_dummy_image') }}" data-src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}"/>*/
/*                   </a>*/
/*                   {% for label, name in product.labels %}*/
/*                     <span class="label-{{ label }}"><b>{{ name }}</b></span>*/
/*                   {% endfor %}*/
/*                   {% if journal2.settings.get('product_grid_wishlist_icon_position') == 'image' and journal2.settings.get('product_grid_wishlist_icon_display') == 'icon' %}*/
/*                     <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                     <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*                 <div class="product-details">*/
/*                   <div class="caption">*/
/*                     <h4 class="name"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                     <p class="description">{{ product.description }}</p>*/
/*                     {% if product.price %}*/
/*                       <div class="price">*/
/*                         {% if not product.special %}*/
/*                           {{ product.price }}*/
/*                         {% else %}*/
/*                           <span class="price-old">{{ product.price }}</span> <span class="price-new" {% if product.date_end %}data-end-date="{{ product.date_end }}"{% endif %}>{{ product.special }}</span>*/
/*                         {% endif %}*/
/*                         {% if product.tax %}*/
/*                           <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*                         {% endif %}*/
/*                       </div>*/
/*                     {% endif %}*/
/*                     {% if product.rating %}*/
/*                       <div class="rating">*/
/*                         {% for i in 1..5 %}*/
/*                           {% if product.rating < i %}*/
/*                             <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                           {% else %}*/
/*                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                           {% endif %}*/
/*                         {% endfor %}*/
/*                       </div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                   <div class="button-group">*/
/*                     {% if staticCall('Journal2Utils', 'isEnquiryProduct', [null, product]) %}*/
/*                       <div class="cart enquiry-button">*/
/*                         <a href="javascript:Journal.openPopup('{{ journal2.settings.get('enquiry_popup_code') }}', '{{ product.product_id }}');" data-clk="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ journal2.settings.get('enquiry_button_text') }}">{{ journal2.settings.get('enquiry_button_icon') }}<span class="button-cart-text">{{ journal2.settings.get('enquiry_button_text') }}</span></a>*/
/*                       </div>*/
/*                     {% else %}*/
/*                       <div class="cart {% if product.labels and product.labels.outofstock %} outofstock {% endif %}" style = "display: inline;">*/
/*                         <a onclick="addToCart('{{ product.product_id }}', '{{ product.minimum }}');" class="{% if is_celebrity %}celebrity-cart-button-identifier grid-button-cart-celebrity {% endif %}button hint--top" data-hint="{{ button_cart }}"><i class="button-left-icon"></i><span class="{% if is_celebrity %}celebrity-cart-text-identifier grid-button-cart-text-celebrity {% endif %}button-cart-text">{{ button_cart }}</span><i class="button-right-icon"></i></a>*/
/*                       </div>*/
/*                         {% if is_celebrity %}*/
/*                           <a onclick="addRemoveFromCelebrityStore(this, '{{ product.product_id }}', '{{ text_add_to_celebrity_store }}', '{{ text_in_celebrity_store }}');"*/
/*                              {% if product.product_id in celebrity_products %}product-in-store="1"{% else %}product-in-store="0"{% endif %}*/
/*                              class=" instore  {% if product.product_id in celebrity_products %}button-celebrity-pressed{% endif %} celebrity-store-button-identifier button hint--top button-celebrity-store-grid"*/
/*                           ><span class = "celebrity-store-button-text-identifier button-celebrity-store-grid-text">{% if product.product_id in celebrity_products %}{{ text_in_celebrity_store }}{% else %}{{ text_add_to_celebrity_store }}{% endif %}</span></a>*/
/*                         {% endif %}*/
/*                     {% endif %}*/
/*                     <br>*/
/*                     <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                     <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           {% endfor %}*/
/*         </div>*/
/*         <div class="row pagination">*/
/*           <div class="col-sm-6 text-left links">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right results">{{ results }}</div>*/
/*         </div>*/
/*       {% else %}*/
/*         <p>{{ text_empty }}</p>*/
/*         <div class="buttons">*/
/*           <div class="pull-right"><a href="{{ continue }}" class="button btn btn-primary">{{ button_continue }}</a></div>*/
/*         </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*   </div>*/
/*   <script>Journal.applyView('{{ journal2.settings.get('product_view', 'grid') }}');</script>*/
/*   {% if journal2.settings.get('show_countdown', 'never') != 'never' %}*/
/*     <script>Journal.enableCountdown();</script>*/
/*   {% endif %}*/
/* </div>*/
/* {{ footer }}*/
/* */
