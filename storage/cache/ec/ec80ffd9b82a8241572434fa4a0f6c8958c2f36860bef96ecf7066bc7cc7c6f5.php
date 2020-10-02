<?php

/* journal2/template/product/search.twig */
class __TwigTemplate_d8dc8a834020561d1efce3e416158e0178736ab6f470d7de1e681c5635c4ba5e extends Twig_Template
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
        echo " search-page\">
      <h1 class=\"heading-title\">";
        // line 19
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>";
        // line 20
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h2>";
        // line 21
        echo (isset($context["entry_search"]) ? $context["entry_search"] : null);
        echo "</h2>
      <div class=\"row content\">
        <div class=\"col-sm-4\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 24
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "\" id=\"input-search\" class=\"form-control\"/>
        </div>
        <div class=\"col-sm-3 s-cat\">
          <select name=\"category_id\" class=\"form-control\">
            <option value=\"0\">";
        // line 28
        echo (isset($context["text_category"]) ? $context["text_category"] : null);
        echo "</option>";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 30
            if (($this->getAttribute($context["category_1"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                // line 31
                echo "                <option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>";
            } else {
                // line 33
                echo "                <option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>";
            }
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_1"], "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 36
                if (($this->getAttribute($context["category_2"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                    // line 37
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>";
                } else {
                    // line 39
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>";
                }
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_2"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 42
                    if (($this->getAttribute($context["category_3"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                        // line 43
                        echo "                    <option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>";
                    } else {
                        // line 45
                        echo "                    <option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "          </select>
        </div>
        <div class=\"col-sm-3 s-check\">
          <label class=\"checkbox-inline\">";
        // line 54
        if ((isset($context["sub_category"]) ? $context["sub_category"] : null)) {
            // line 55
            echo "              <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\"/>";
        } else {
            // line 57
            echo "              <input type=\"checkbox\" name=\"sub_category\" value=\"1\"/>";
        }
        // line 59
        echo (isset($context["text_sub_category"]) ? $context["text_sub_category"] : null);
        echo "</label>
        </div>
        <div class=\"col-sm-3 s-check\">
          <label class=\"checkbox-inline\">";
        // line 63
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 64
            echo "              <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\"/>";
        } else {
            // line 66
            echo "              <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\"/>";
        }
        // line 68
        echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
        echo "</label>
        </div>
      </div>
      <div class=\"buttons\">
        <div class=\"right\">
          <input type=\"button\" value=\"";
        // line 73
        echo (isset($context["button_search"]) ? $context["button_search"] : null);
        echo "\" id=\"button-search\" class=\"btn btn-primary button\"/>
        </div>
      </div>
      <h2>";
        // line 76
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "</h2>";
        // line 77
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 78
            echo "        <div class=\"product-filter\">
          <div class=\"display\">
            <a onclick=\"Journal.gridView()\" class=\"grid-view\">";
            // line 80
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "category_grid_view_icon", 1 => (isset($context["button_grid"]) ? $context["button_grid"] : null)), "method");
            echo "</a>
            <a onclick=\"Journal.listView()\" class=\"list-view\">";
            // line 81
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "category_list_view_icon", 1 => (isset($context["button_list"]) ? $context["button_list"] : null)), "method");
            echo "</a>
          </div>
          <div class=\"product-compare\"><a href=\"";
            // line 83
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></div>
          <div class=\"limit\"><b>";
            // line 84
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</b>
            <select onchange=\"location = this.value;\">";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 87
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 88
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>";
                } else {
                    // line 90
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
            // line 93
            echo "            </select>
          </div>
          <div class=\"sort\"><b>";
            // line 95
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</b>
            <select onchange=\"location = this.value;\">";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 98
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 99
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>";
                } else {
                    // line 101
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
            // line 104
            echo "            </select>
          </div>
        </div>
        <div class=\"row main-products product-grid\" data-grid-classes=\"";
            // line 107
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_classes"), "method");
            echo " display-";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method");
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_block_button"), "method");
            echo "\">";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 109
                echo "            <div class=\"product-grid-item";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_classes"), "method");
                echo "\">
              <div class=\"product-thumb product-wrapper";
                // line 110
                if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                    echo " outofstock";
                }
                echo "\">
                <div class=\"image";
                // line 111
                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never") && $this->getAttribute($context["product"], "date_end", array()))) {
                    echo " has-countdown";
                }
                echo "\">
                  <a href=\"";
                // line 112
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"";
                if ($this->getAttribute($context["product"], "thumb2", array())) {
                    echo " class=\"has-second-image\" style=\"background: url('";
                    echo $this->getAttribute($context["product"], "thumb2", array());
                    echo "') no-repeat\"";
                }
                echo ">
                    <img class=\"lazy first-image\" width=\"";
                // line 113
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
                // line 115
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
                foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                    // line 116
                    echo "                    <span class=\"label-";
                    echo $context["label"];
                    echo "\"><b>";
                    echo $context["name"];
                    echo "</b></span>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position"), "method") == "image") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method") == "icon"))) {
                    // line 119
                    echo "                    <div class=\"wishlist\"><a onclick=\"addToWishList('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "</span></a></div>
                    <div class=\"compare\"><a onclick=\"addToCompare('";
                    // line 120
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "</span></a></div>";
                }
                // line 122
                echo "                </div>
                <div class=\"product-details\">
                  <div class=\"caption\">
                    <h4 class=\"name\"><a href=\"";
                // line 125
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
                    <p class=\"description\">";
                // line 126
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>";
                // line 127
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 128
                    echo "                      <div class=\"price\">";
                    // line 129
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 130
                        echo $this->getAttribute($context["product"], "price", array());
                    } else {
                        // line 132
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
                    // line 134
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 135
                        echo "                          <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>";
                    }
                    // line 137
                    echo "                      </div>";
                }
                // line 139
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 140
                    echo "                      <div class=\"rating\">";
                    // line 141
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 142
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 143
                            echo "                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                        } else {
                            // line 145
                            echo "                            <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 148
                    echo "                      </div>";
                }
                // line 150
                echo "                  </div>
                  <div class=\"button-group\">";
                // line 152
                if (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "isEnquiryProduct", array(0 => null, 1 => $context["product"])))) {
                    // line 153
                    echo "                      <div class=\"cart enquiry-button\">
                        <a href=\"javascript:Journal.openPopup('";
                    // line 154
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
                    // line 157
                    echo "                      <div class=\"cart";
                    if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                        echo " outofstock";
                    }
                    echo "\" style = \"display: inline;\">
                        <a onclick=\"addToCart('";
                    // line 158
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
                    // line 160
                    if ((isset($context["is_celebrity"]) ? $context["is_celebrity"] : null)) {
                        // line 161
                        echo "                          <a onclick=\"addRemoveFromCelebrityStore(this, '";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "', '";
                        echo (isset($context["text_add_to_celebrity_store"]) ? $context["text_add_to_celebrity_store"] : null);
                        echo "', '";
                        echo (isset($context["text_in_celebrity_store"]) ? $context["text_in_celebrity_store"] : null);
                        echo "');\"";
                        // line 162
                        if (twig_in_filter($this->getAttribute($context["product"], "product_id", array()), (isset($context["celebrity_products"]) ? $context["celebrity_products"] : null))) {
                            echo "product-in-store=\"1\"";
                        } else {
                            echo "product-in-store=\"0\"";
                        }
                        // line 163
                        echo "                             class=\" instore";
                        if (twig_in_filter($this->getAttribute($context["product"], "product_id", array()), (isset($context["celebrity_products"]) ? $context["celebrity_products"] : null))) {
                            echo "button-celebrity-pressed";
                        }
                        echo " celebrity-store-button-identifier button hint--top button-celebrity-store-grid\"
                          ><span class = \"celebrity-store-button-text-identifier button-celebrity-store-grid-text\">";
                        // line 164
                        if (twig_in_filter($this->getAttribute($context["product"], "product_id", array()), (isset($context["celebrity_products"]) ? $context["celebrity_products"] : null))) {
                            echo (isset($context["text_in_celebrity_store"]) ? $context["text_in_celebrity_store"] : null);
                        } else {
                            echo (isset($context["text_add_to_celebrity_store"]) ? $context["text_add_to_celebrity_store"] : null);
                        }
                        echo "</span></a>";
                    }
                }
                // line 167
                echo "                    <br>
                    <div class=\"wishlist\"><a onclick=\"addToWishList('";
                // line 168
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" class=\"hint--top\" data-hint=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span></a></div>
                    <div class=\"compare\"><a onclick=\"addToCompare('";
                // line 169
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
            // line 175
            echo "        </div>
        <div class=\"row pagination\">
          <div class=\"col-sm-6 text-left links\">";
            // line 177
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
          <div class=\"col-sm-6 text-right results\">";
            // line 178
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
        </div>";
        } else {
            // line 181
            echo "        <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>";
        }
        // line 183
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  </div>
  <script>Journal.applyView('";
        // line 185
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_view", 1 => "grid"), "method");
        echo "');</script>";
        // line 186
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never")) {
            // line 187
            echo "    <script>Journal.enableCountdown();</script>";
        }
        // line 189
        echo "</div>
<script type=\"text/javascript\"><!--
  \$('#button-search').bind('click', function () {
    url = 'index.php?route=product/search';

    var search = \$('#content input[name=\\'search\\']').prop('value');

    if (search) {
      url += '&search=' + encodeURIComponent(search);
    }

    var category_id = \$('#content select[name=\\'category_id\\']').prop('value');

    if (category_id > 0) {
      url += '&category_id=' + encodeURIComponent(category_id);
    }

    var sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

    if (sub_category) {
      url += '&sub_category=true';
    }

    var filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

    if (filter_description) {
      url += '&description=true';
    }

    location = url;
  });

  \$('#content input[name=\\'search\\']').bind('keydown', function (e) {
    if (e.keyCode == 13) {
      \$('#button-search').trigger('click');
    }
  });

  \$('select[name=\\'category_id\\']').on('change', function () {
    if (this.value == '0') {
      \$('input[name=\\'sub_category\\']').prop('disabled', true);
    } else {
      \$('input[name=\\'sub_category\\']').prop('disabled', false);
    }
  });

  \$('select[name=\\'category_id\\']').trigger('change');
  --></script>";
        // line 237
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  630 => 237,  581 => 189,  578 => 187,  576 => 186,  573 => 185,  568 => 183,  563 => 181,  558 => 178,  554 => 177,  550 => 175,  535 => 169,  527 => 168,  524 => 167,  515 => 164,  508 => 163,  502 => 162,  494 => 161,  492 => 160,  474 => 158,  467 => 157,  452 => 154,  449 => 153,  447 => 152,  444 => 150,  441 => 148,  434 => 145,  431 => 143,  429 => 142,  425 => 141,  423 => 140,  421 => 139,  418 => 137,  412 => 135,  410 => 134,  397 => 132,  394 => 130,  392 => 129,  390 => 128,  388 => 127,  385 => 126,  379 => 125,  374 => 122,  366 => 120,  357 => 119,  355 => 118,  345 => 116,  341 => 115,  327 => 113,  317 => 112,  311 => 111,  305 => 110,  300 => 109,  296 => 108,  290 => 107,  285 => 104,  274 => 101,  267 => 99,  265 => 98,  261 => 97,  257 => 95,  253 => 93,  242 => 90,  235 => 88,  233 => 87,  229 => 86,  225 => 84,  219 => 83,  214 => 81,  210 => 80,  206 => 78,  204 => 77,  201 => 76,  195 => 73,  187 => 68,  184 => 66,  181 => 64,  179 => 63,  173 => 59,  170 => 57,  167 => 55,  165 => 54,  160 => 50,  141 => 45,  134 => 43,  132 => 42,  128 => 41,  121 => 39,  114 => 37,  112 => 36,  108 => 35,  101 => 33,  94 => 31,  92 => 30,  88 => 29,  85 => 28,  76 => 24,  70 => 21,  66 => 20,  63 => 19,  58 => 18,  55 => 16,  52 => 14,  50 => 13,  48 => 12,  46 => 11,  43 => 10,  40 => 9,  30 => 7,  26 => 6,  19 => 1,);
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
/*     <div id="content" class="{{ class }} search-page">*/
/*       <h1 class="heading-title">{{ heading_title }}</h1>*/
/*       {{ content_top }}*/
/*       <h2>{{ entry_search }}</h2>*/
/*       <div class="row content">*/
/*         <div class="col-sm-4">*/
/*           <input type="text" name="search" value="{{ search }}" placeholder="{{ text_keyword }}" id="input-search" class="form-control"/>*/
/*         </div>*/
/*         <div class="col-sm-3 s-cat">*/
/*           <select name="category_id" class="form-control">*/
/*             <option value="0">{{ text_category }}</option>*/
/*             {% for category_1 in categories %}*/
/*               {% if category_1.category_id == category_id %}*/
/*                 <option value="{{ category_1.category_id }}" selected="selected">{{ category_1.name }}</option>*/
/*               {% else %}*/
/*                 <option value="{{ category_1.category_id }}">{{ category_1.name }}</option>*/
/*               {% endif %}*/
/*               {% for category_2 in category_1.children %}*/
/*                 {% if category_2.category_id == category_id %}*/
/*                   <option value="{{ category_2.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/*                 {% else %}*/
/*                   <option value="{{ category_2.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/*                 {% endif %}*/
/*                 {% for category_3 in category_2.children %}*/
/*                   {% if category_3.category_id == category_id %}*/
/*                     <option value="{{ category_3.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/*                   {% else %}*/
/*                     <option value="{{ category_3.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/*                   {% endif %}*/
/*                 {% endfor %}*/
/*               {% endfor %}*/
/*             {% endfor %}*/
/*           </select>*/
/*         </div>*/
/*         <div class="col-sm-3 s-check">*/
/*           <label class="checkbox-inline">*/
/*             {% if sub_category %}*/
/*               <input type="checkbox" name="sub_category" value="1" checked="checked"/>*/
/*             {% else %}*/
/*               <input type="checkbox" name="sub_category" value="1"/>*/
/*             {% endif %}*/
/*             {{ text_sub_category }}</label>*/
/*         </div>*/
/*         <div class="col-sm-3 s-check">*/
/*           <label class="checkbox-inline">*/
/*             {% if description %}*/
/*               <input type="checkbox" name="description" value="1" id="description" checked="checked"/>*/
/*             {% else %}*/
/*               <input type="checkbox" name="description" value="1" id="description"/>*/
/*             {% endif %}*/
/*             {{ entry_description }}</label>*/
/*         </div>*/
/*       </div>*/
/*       <div class="buttons">*/
/*         <div class="right">*/
/*           <input type="button" value="{{ button_search }}" id="button-search" class="btn btn-primary button"/>*/
/*         </div>*/
/*       </div>*/
/*       <h2>{{ text_search }}</h2>*/
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
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*   </div>*/
/*   <script>Journal.applyView('{{ journal2.settings.get('product_view', 'grid') }}');</script>*/
/*   {% if journal2.settings.get('show_countdown', 'never') != 'never' %}*/
/*     <script>Journal.enableCountdown();</script>*/
/*   {% endif %}*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/*   $('#button-search').bind('click', function () {*/
/*     url = 'index.php?route=product/search';*/
/* */
/*     var search = $('#content input[name=\'search\']').prop('value');*/
/* */
/*     if (search) {*/
/*       url += '&search=' + encodeURIComponent(search);*/
/*     }*/
/* */
/*     var category_id = $('#content select[name=\'category_id\']').prop('value');*/
/* */
/*     if (category_id > 0) {*/
/*       url += '&category_id=' + encodeURIComponent(category_id);*/
/*     }*/
/* */
/*     var sub_category = $('#content input[name=\'sub_category\']:checked').prop('value');*/
/* */
/*     if (sub_category) {*/
/*       url += '&sub_category=true';*/
/*     }*/
/* */
/*     var filter_description = $('#content input[name=\'description\']:checked').prop('value');*/
/* */
/*     if (filter_description) {*/
/*       url += '&description=true';*/
/*     }*/
/* */
/*     location = url;*/
/*   });*/
/* */
/*   $('#content input[name=\'search\']').bind('keydown', function (e) {*/
/*     if (e.keyCode == 13) {*/
/*       $('#button-search').trigger('click');*/
/*     }*/
/*   });*/
/* */
/*   $('select[name=\'category_id\']').on('change', function () {*/
/*     if (this.value == '0') {*/
/*       $('input[name=\'sub_category\']').prop('disabled', true);*/
/*     } else {*/
/*       $('input[name=\'sub_category\']').prop('disabled', false);*/
/*     }*/
/*   });*/
/* */
/*   $('select[name=\'category_id\']').trigger('change');*/
/*   --></script>*/
/* {{ footer }}*/
/* */
