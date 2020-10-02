<?php

/* journal2/template/momday/celebrity.twig */
class __TwigTemplate_265c30874db88a8d4abbdcd88f46688f76d88a88a35a7686e30c09999e42ad09 extends Twig_Template
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
<style type=\"text/css\" xmlns=\"http://www.w3.org/1999/html\">
    .cel-img {
        max-height: 295px;
        max-width: 294px;
    }
    .logo-img {
        max-height: 295px;
        max-width: 294px;
        float:right;
    }
    html[dir=\"rtl\"] .logo-img {
        float:left
    }

    .cel-name-title {
        text-transform: uppercase;
        font-family: \"proxima nova-extrabold\";
        font-size: 24px;
    }
    .cel-bio {
        font-family: \"proxima nova-light\";
        font-size: 15px;
    }
    .img-div {
        max-height: 295px;
    }
    .img-container-div {
        display: block;
        overflow: auto;
        overflow: hidden;
        margin-bottom: 20px;
        box-shadow: 0px 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    html[dir=\"rtl\"] .img-div {
        float:right;
    }
    html[dir=\"rtl\"] .bio-div {
        float:right;
    }
    .bio-div-padding {
        padding-left:20px
    }
    html[dir=\"rtl\"] .bio-div-padding {
        padding-right:20px
    }
</style>
<div id=\"container\" class=\"container j-container\">
    <ul class=\"breadcrumb\">";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 53
            echo "            <li itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\"><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</span></a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    </ul>
    <div class=\"row\">";
        // line 56
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        // line 57
        $context["bio_div_class"] = "bio-div bio-div-padding";
        // line 58
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 59
            $context["class"] = "col-sm-6";
            // line 60
            $context["celebrity_image_class"] = "xs-100 sm-50 md-50 lg-33 xl-33";
            // line 61
            $context["celebrity_bio_class"] = "xs-100 sm-50 md-50 lg-33 xl-33";
            // line 62
            $context["bio_div_class"] = "bio-div";
        } elseif ((        // line 63
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 64
            $context["class"] = "col-sm-9";
            // line 65
            $context["celebrity_image_class"] = "xs-100 sm-50 md-50 lg-50 xl-33";
            // line 66
            $context["celebrity_bio_class"] = "xs-100 sm-50 md-50 lg-50 xl-33";
            // line 67
            $context["bio_div_class"] = "bio-div";
        } else {
            // line 69
            $context["class"] = "col-sm-12";
            // line 70
            $context["celebrity_image_class"] = "xs-100 sm-50 md-50 lg-33 xl-25";
            // line 71
            $context["celebrity_bio_class"] = "xs-100 sm-50 md-50 lg-33 xl-50";
        }
        // line 73
        echo "        <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        // line 75
        echo "
            <div class=\"row img-container-div\">
                <div class=\"";
        // line 77
        echo (isset($context["celebrity_image_class"]) ? $context["celebrity_image_class"] : null);
        echo " img-div\">
                    <img class = \"cel-img\"  src=\"";
        // line 78
        echo (isset($context["celebrity_images_url"]) ? $context["celebrity_images_url"] : null);
        echo (isset($context["celebrity_square_image"]) ? $context["celebrity_square_image"] : null);
        echo "\">
                </div>
                <div class=\"";
        // line 80
        echo (isset($context["celebrity_bio_class"]) ? $context["celebrity_bio_class"] : null);
        echo (isset($context["bio_div_class"]) ? $context["bio_div_class"] : null);
        echo "\">
                    <div class=\" \">
                        <h1 class = \"cel-name-title\">";
        // line 82
        echo (isset($context["celebrity_full_name"]) ? $context["celebrity_full_name"] : null);
        echo "</h1>
                        <p class=\"cel-bio\">";
        // line 83
        echo (isset($context["celebrity_bio"]) ? $context["celebrity_bio"] : null);
        echo "</p>
                    </div>
                </div>
                <div class=\"";
        // line 86
        echo (isset($context["celebrity_image_class"]) ? $context["celebrity_image_class"] : null);
        echo " img-div\">
                    <div class = \"cel-img-border\">
                        <img class = \"logo-img\" src=\"";
        // line 88
        echo (isset($context["logo_image_src"]) ? $context["logo_image_src"] : null);
        echo "\">
                    </div>
                </div>
            </div>";
        // line 93
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        // line 94
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 95
            echo "                <div class=\"product-filter\">
                    <div class=\"display\">
                        <a onclick=\"Journal.gridView()\" class=\"grid-view\">";
            // line 97
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "category_grid_view_icon", 1 => (isset($context["button_grid"]) ? $context["button_grid"] : null)), "method");
            echo "</a>
                        <a onclick=\"Journal.listView()\" class=\"list-view\">";
            // line 98
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "category_list_view_icon", 1 => (isset($context["button_list"]) ? $context["button_list"] : null)), "method");
            echo "</a>
                    </div>
                    <div class=\"product-compare\"><a href=\"";
            // line 100
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></div>
                    <div class=\"limit\"><b>";
            // line 101
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</b>
                        <select onchange=\"location = this.value;\">";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 104
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 105
                    echo "                                    <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>";
                } else {
                    // line 107
                    echo "                                    <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                        </select>
                    </div>
                    <div class=\"sort\"><b>";
            // line 112
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</b>
                        <select onchange=\"location = this.value;\">";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 115
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 116
                    echo "                                    <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>";
                } else {
                    // line 118
                    echo "                                    <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "                        </select>
                    </div>
                </div>
                <div class=\"row main-products product-grid\" data-grid-classes=\"";
            // line 124
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_classes"), "method");
            echo " display-";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method");
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_block_button"), "method");
            echo "\">";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 126
                echo "                        <div class=\"product-grid-item";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_classes"), "method");
                echo "\">
                            <div class=\"product-thumb product-wrapper";
                // line 127
                if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                    echo " outofstock";
                }
                echo "\">
                                <div class=\"image";
                // line 128
                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never") && $this->getAttribute($context["product"], "date_end", array()))) {
                    echo " has-countdown";
                }
                echo "\">
                                    <a href=\"";
                // line 129
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"";
                if ($this->getAttribute($context["product"], "thumb2", array())) {
                    echo " class=\"has-second-image\" style=\"background: url('";
                    echo $this->getAttribute($context["product"], "thumb2", array());
                    echo "') no-repeat\"";
                }
                echo ">
                                        <img class=\"lazy first-image\" width=\"";
                // line 130
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
                // line 132
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
                foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                    // line 133
                    echo "                                        <span class=\"label-";
                    echo $context["label"];
                    echo "\"><b>";
                    echo $context["name"];
                    echo "</b></span>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position"), "method") == "image") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method") == "icon"))) {
                    // line 136
                    echo "                                        <div class=\"wishlist\"><a onclick=\"addToWishList('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "</span></a></div>
                                        <div class=\"compare\"><a onclick=\"addToCompare('";
                    // line 137
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "</span></a></div>";
                }
                // line 139
                echo "                                </div>
                                <div class=\"product-details\">
                                    <div class=\"caption\">
                                        <h4 class=\"name\"><a href=\"";
                // line 142
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
                                        <p class=\"description\">";
                // line 143
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>";
                // line 144
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 145
                    echo "                                            <div class=\"price\">";
                    // line 146
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 147
                        echo $this->getAttribute($context["product"], "price", array());
                    } else {
                        // line 149
                        echo "                                                    <span class=\"price-old\">";
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
                    // line 151
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 152
                        echo "                                                    <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>";
                    }
                    // line 154
                    echo "                                            </div>";
                }
                // line 156
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 157
                    echo "                                            <div class=\"rating\">";
                    // line 158
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 159
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 160
                            echo "                                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                        } else {
                            // line 162
                            echo "                                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 165
                    echo "                                            </div>";
                }
                // line 167
                echo "                                    </div>
                                    <div class=\"button-group\">";
                // line 169
                if (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "isEnquiryProduct", array(0 => null, 1 => $context["product"])))) {
                    // line 170
                    echo "                                            <div class=\"cart enquiry-button\">
                                                <a href=\"javascript:Journal.openPopup('";
                    // line 171
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
                    // line 174
                    echo "                                            <div class=\"cart";
                    if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                        echo " outofstock";
                    }
                    echo "\" style = \"display: inline;\">
                                                <a onclick=\"addToCart('";
                    // line 175
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
                    // line 177
                    if ((isset($context["is_celebrity"]) ? $context["is_celebrity"] : null)) {
                        // line 178
                        echo "                                                <a onclick=\"addRemoveFromCelebrityStore(this, '";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "', '";
                        echo (isset($context["text_add_to_celebrity_store"]) ? $context["text_add_to_celebrity_store"] : null);
                        echo "', '";
                        echo (isset($context["text_in_celebrity_store"]) ? $context["text_in_celebrity_store"] : null);
                        echo "');\"";
                        // line 179
                        if (twig_in_filter($this->getAttribute($context["product"], "product_id", array()), (isset($context["celebrity_products"]) ? $context["celebrity_products"] : null))) {
                            echo "product-in-store=\"1\"";
                        } else {
                            echo "product-in-store=\"0\"";
                        }
                        // line 180
                        echo "                                                   class=\" instore";
                        if (twig_in_filter($this->getAttribute($context["product"], "product_id", array()), (isset($context["celebrity_products"]) ? $context["celebrity_products"] : null))) {
                            echo "button-celebrity-pressed";
                        }
                        echo " celebrity-store-button-identifier button hint--top button-celebrity-store-grid\"
                                                ><span class = \"celebrity-store-button-text-identifier button-celebrity-store-grid-text\">";
                        // line 181
                        if (twig_in_filter($this->getAttribute($context["product"], "product_id", array()), (isset($context["celebrity_products"]) ? $context["celebrity_products"] : null))) {
                            echo (isset($context["text_in_celebrity_store"]) ? $context["text_in_celebrity_store"] : null);
                        } else {
                            echo (isset($context["text_add_to_celebrity_store"]) ? $context["text_add_to_celebrity_store"] : null);
                        }
                        echo "</span></a>";
                    }
                }
                // line 184
                echo "                                        <br>
                                        <div class=\"wishlist\"><a onclick=\"addToWishList('";
                // line 185
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" class=\"hint--top\" data-hint=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span></a></div>
                                        <div class=\"compare\"><a onclick=\"addToCompare('";
                // line 186
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
            // line 192
            echo "                </div>
                <div class=\"row pagination\">
                    <div class=\"col-sm-6 text-left links\">";
            // line 194
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
                    <div class=\"col-sm-6 text-right results\">";
            // line 195
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
                </div>";
        } else {
            // line 198
            echo "                <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
                <div class=\"buttons\">
                    <div class=\"pull-right\"><a href=\"";
            // line 200
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"button btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
                </div>";
        }
        // line 203
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    </div>
    <script>Journal.applyView('";
        // line 205
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_view", 1 => "grid"), "method");
        echo "');</script>";
        // line 206
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never")) {
            // line 207
            echo "        <script>Journal.enableCountdown();</script>";
        }
        // line 209
        echo "</div>";
        // line 210
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/momday/celebrity.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  556 => 210,  554 => 209,  551 => 207,  549 => 206,  546 => 205,  541 => 203,  534 => 200,  528 => 198,  523 => 195,  519 => 194,  515 => 192,  500 => 186,  492 => 185,  489 => 184,  480 => 181,  473 => 180,  467 => 179,  459 => 178,  457 => 177,  439 => 175,  432 => 174,  417 => 171,  414 => 170,  412 => 169,  409 => 167,  406 => 165,  399 => 162,  396 => 160,  394 => 159,  390 => 158,  388 => 157,  386 => 156,  383 => 154,  377 => 152,  375 => 151,  362 => 149,  359 => 147,  357 => 146,  355 => 145,  353 => 144,  350 => 143,  344 => 142,  339 => 139,  331 => 137,  322 => 136,  320 => 135,  310 => 133,  306 => 132,  292 => 130,  282 => 129,  276 => 128,  270 => 127,  265 => 126,  261 => 125,  255 => 124,  250 => 121,  239 => 118,  232 => 116,  230 => 115,  226 => 114,  222 => 112,  218 => 110,  207 => 107,  200 => 105,  198 => 104,  194 => 103,  190 => 101,  184 => 100,  179 => 98,  175 => 97,  171 => 95,  169 => 94,  167 => 93,  161 => 88,  156 => 86,  150 => 83,  146 => 82,  140 => 80,  134 => 78,  130 => 77,  126 => 75,  122 => 73,  119 => 71,  117 => 70,  115 => 69,  112 => 67,  110 => 66,  108 => 65,  106 => 64,  104 => 63,  102 => 62,  100 => 61,  98 => 60,  96 => 59,  94 => 58,  92 => 57,  89 => 56,  86 => 55,  76 => 53,  72 => 52,  19 => 1,);
    }
}
/* {{ header }}*/
/* <link rel="stylesheet" href="catalog/view/theme/journal2/css/momday.css">*/
/* <script src="catalog/view/javascript/momday/celebrity.js"></script>*/
/* <style type="text/css" xmlns="http://www.w3.org/1999/html">*/
/*     .cel-img {*/
/*         max-height: 295px;*/
/*         max-width: 294px;*/
/*     }*/
/*     .logo-img {*/
/*         max-height: 295px;*/
/*         max-width: 294px;*/
/*         float:right;*/
/*     }*/
/*     html[dir="rtl"] .logo-img {*/
/*         float:left*/
/*     }*/
/* */
/*     .cel-name-title {*/
/*         text-transform: uppercase;*/
/*         font-family: "proxima nova-extrabold";*/
/*         font-size: 24px;*/
/*     }*/
/*     .cel-bio {*/
/*         font-family: "proxima nova-light";*/
/*         font-size: 15px;*/
/*     }*/
/*     .img-div {*/
/*         max-height: 295px;*/
/*     }*/
/*     .img-container-div {*/
/*         display: block;*/
/*         overflow: auto;*/
/*         overflow: hidden;*/
/*         margin-bottom: 20px;*/
/*         box-shadow: 0px 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
/*     }*/
/*     html[dir="rtl"] .img-div {*/
/*         float:right;*/
/*     }*/
/*     html[dir="rtl"] .bio-div {*/
/*         float:right;*/
/*     }*/
/*     .bio-div-padding {*/
/*         padding-left:20px*/
/*     }*/
/*     html[dir="rtl"] .bio-div-padding {*/
/*         padding-right:20px*/
/*     }*/
/* </style>*/
/* <div id="container" class="container j-container">*/
/*     <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*             <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*         {% endfor %}*/
/*     </ul>*/
/*     <div class="row">{{ column_left }}{{ column_right }}*/
/*         {% set bio_div_class = 'bio-div bio-div-padding' %}*/
/*         {% if column_left and column_right %}*/
/*             {% set class = 'col-sm-6' %}*/
/*             {% set celebrity_image_class = 'xs-100 sm-50 md-50 lg-33 xl-33' %}*/
/*             {% set celebrity_bio_class = 'xs-100 sm-50 md-50 lg-33 xl-33' %}*/
/*             {% set bio_div_class = 'bio-div' %}*/
/*         {% elseif column_left or column_right %}*/
/*             {% set class = 'col-sm-9' %}*/
/*             {% set celebrity_image_class = 'xs-100 sm-50 md-50 lg-50 xl-33' %}*/
/*             {% set celebrity_bio_class = 'xs-100 sm-50 md-50 lg-50 xl-33' %}*/
/*             {% set bio_div_class = 'bio-div' %}*/
/*         {% else %}*/
/*             {% set class = 'col-sm-12' %}*/
/*             {% set celebrity_image_class = 'xs-100 sm-50 md-50 lg-33 xl-25' %}*/
/*             {% set celebrity_bio_class = 'xs-100 sm-50 md-50 lg-33 xl-50' %}*/
/*         {% endif %}*/
/*         <div id="content" class="{{ class }}">*/
/*             {#<h1 class="heading-title">{{ heading_title }}</h1>#}*/
/* */
/*             <div class="row img-container-div">*/
/*                 <div class="{{ celebrity_image_class }} img-div">*/
/*                     <img class = "cel-img"  src="{{ celebrity_images_url }}{{ celebrity_square_image }}">*/
/*                 </div>*/
/*                 <div class="{{ celebrity_bio_class }} {{ bio_div_class }}">*/
/*                     <div class=" ">*/
/*                         <h1 class = "cel-name-title"> {{ celebrity_full_name }}</h1>*/
/*                         <p class="cel-bio"> {{ celebrity_bio }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="{{ celebrity_image_class }} img-div">*/
/*                     <div class = "cel-img-border">*/
/*                         <img class = "logo-img" src="{{ logo_image_src }}">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {{ content_top }}*/
/*             {% if products %}*/
/*                 <div class="product-filter">*/
/*                     <div class="display">*/
/*                         <a onclick="Journal.gridView()" class="grid-view">{{ journal2.settings.get('category_grid_view_icon', button_grid) }}</a>*/
/*                         <a onclick="Journal.listView()" class="list-view">{{ journal2.settings.get('category_list_view_icon', button_list) }}</a>*/
/*                     </div>*/
/*                     <div class="product-compare"><a href="{{ compare }}" id="compare-total">{{ text_compare }}</a></div>*/
/*                     <div class="limit"><b>{{ text_limit }}</b>*/
/*                         <select onchange="location = this.value;">*/
/*                             {% for limits in limits %}*/
/*                                 {% if limits.value == limit %}*/
/*                                     <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*                                 {% else %}*/
/*                                     <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         </select>*/
/*                     </div>*/
/*                     <div class="sort"><b>{{ text_sort }}</b>*/
/*                         <select onchange="location = this.value;">*/
/*                             {% for sorts in sorts %}*/
/*                                 {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*                                     <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*                                 {% else %}*/
/*                                     <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row main-products product-grid" data-grid-classes="{{ journal2.settings.get('product_grid_classes') }} display-{{ journal2.settings.get('product_grid_wishlist_icon_display') }} {{ journal2.settings.get('product_grid_button_block_button') }}">*/
/*                     {% for product in products %}*/
/*                         <div class="product-grid-item {{ journal2.settings.get('product_grid_classes') }}">*/
/*                             <div class="product-thumb product-wrapper {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                                 <div class="image {% if journal2.settings.get('show_countdown', 'never') != 'never' and product.date_end %} has-countdown {% endif %}">*/
/*                                     <a href="{{ product.href }}" {% if product.thumb2 %} class="has-second-image" style="background: url('{{ product.thumb2 }}') no-repeat" {% endif %}>*/
/*                                         <img class="lazy first-image" width="{{ journal2.settings.get('config_image_width') }}" height="{{ journal2.settings.get('config_image_height') }}" src="{{ journal2.settings.get('product_dummy_image') }}" data-src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}"/>*/
/*                                     </a>*/
/*                                     {% for label, name in product.labels %}*/
/*                                         <span class="label-{{ label }}"><b>{{ name }}</b></span>*/
/*                                     {% endfor %}*/
/*                                     {% if journal2.settings.get('product_grid_wishlist_icon_position') == 'image' and journal2.settings.get('product_grid_wishlist_icon_display') == 'icon' %}*/
/*                                         <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                                         <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                                 <div class="product-details">*/
/*                                     <div class="caption">*/
/*                                         <h4 class="name"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                                         <p class="description">{{ product.description }}</p>*/
/*                                         {% if product.price %}*/
/*                                             <div class="price">*/
/*                                                 {% if not product.special %}*/
/*                                                     {{ product.price }}*/
/*                                                 {% else %}*/
/*                                                     <span class="price-old">{{ product.price }}</span> <span class="price-new" {% if product.date_end %}data-end-date="{{ product.date_end }}"{% endif %}>{{ product.special }}</span>*/
/*                                                 {% endif %}*/
/*                                                 {% if product.tax %}*/
/*                                                     <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*                                                 {% endif %}*/
/*                                             </div>*/
/*                                         {% endif %}*/
/*                                         {% if product.rating %}*/
/*                                             <div class="rating">*/
/*                                                 {% for i in 1..5 %}*/
/*                                                     {% if product.rating < i %}*/
/*                                                         <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                                                     {% else %}*/
/*                                                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                                                     {% endif %}*/
/*                                                 {% endfor %}*/
/*                                             </div>*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                     <div class="button-group">*/
/*                                         {% if staticCall('Journal2Utils', 'isEnquiryProduct', [null, product]) %}*/
/*                                             <div class="cart enquiry-button">*/
/*                                                 <a href="javascript:Journal.openPopup('{{ journal2.settings.get('enquiry_popup_code') }}', '{{ product.product_id }}');" data-clk="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ journal2.settings.get('enquiry_button_text') }}">{{ journal2.settings.get('enquiry_button_icon') }}<span class="button-cart-text">{{ journal2.settings.get('enquiry_button_text') }}</span></a>*/
/*                                             </div>*/
/*                                         {% else %}*/
/*                                             <div class="cart {% if product.labels and product.labels.outofstock %} outofstock {% endif %}" style = "display: inline;">*/
/*                                                 <a onclick="addToCart('{{ product.product_id }}', '{{ product.minimum }}');" class="{% if is_celebrity %}celebrity-cart-button-identifier grid-button-cart-celebrity {% endif %}button hint--top" data-hint="{{ button_cart }}"><i class="button-left-icon"></i><span class="{% if is_celebrity %}celebrity-cart-text-identifier grid-button-cart-text-celebrity {% endif %}button-cart-text">{{ button_cart }}</span><i class="button-right-icon"></i></a>*/
/*                                             </div>*/
/*                                             {% if is_celebrity %}*/
/*                                                 <a onclick="addRemoveFromCelebrityStore(this, '{{ product.product_id }}', '{{ text_add_to_celebrity_store }}', '{{ text_in_celebrity_store }}');"*/
/*                                                    {% if product.product_id in celebrity_products %}product-in-store="1"{% else %}product-in-store="0"{% endif %}*/
/*                                                    class=" instore  {% if product.product_id in celebrity_products %}button-celebrity-pressed{% endif %} celebrity-store-button-identifier button hint--top button-celebrity-store-grid"*/
/*                                                 ><span class = "celebrity-store-button-text-identifier button-celebrity-store-grid-text">{% if product.product_id in celebrity_products %}{{ text_in_celebrity_store }}{% else %}{{ text_add_to_celebrity_store }}{% endif %}</span></a>*/
/*                                             {% endif %}*/
/*                                         {% endif %}*/
/*                                         <br>*/
/*                                         <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                                         <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*                 <div class="row pagination">*/
/*                     <div class="col-sm-6 text-left links">{{ pagination }}</div>*/
/*                     <div class="col-sm-6 text-right results">{{ results }}</div>*/
/*                 </div>*/
/*             {% else %}*/
/*                 <p>{{ text_empty }}</p>*/
/*                 <div class="buttons">*/
/*                     <div class="pull-right"><a href="{{ continue }}" class="button btn btn-primary">{{ button_continue }}</a></div>*/
/*                 </div>*/
/*             {% endif %}*/
/*             {{ content_bottom }}</div>*/
/*     </div>*/
/*     <script>Journal.applyView('{{ journal2.settings.get('product_view', 'grid') }}');</script>*/
/*     {% if journal2.settings.get('show_countdown', 'never') != 'never' %}*/
/*         <script>Journal.enableCountdown();</script>*/
/*     {% endif %}*/
/* </div>*/
/* {{ footer }}*/
/* */
