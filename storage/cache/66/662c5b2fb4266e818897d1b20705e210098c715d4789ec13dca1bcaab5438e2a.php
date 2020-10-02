<?php

/* journal2/template/journal2/menu/main.twig */
class __TwigTemplate_0ce926af4fb4a8589953a29c2c102331f3b601433396da4af52204002f1bd467 extends Twig_Template
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
        // line 18
        echo "
<style>";
        // line 19
        echo twig_join_filter((isset($context["color_styles"]) ? $context["color_styles"] : null), " ");
        echo "</style>

<div class=\"mobile-trigger\">";
        // line 21
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_text"), "method");
        echo "</div>

<ul class=\"super-menu mobile-menu menu-";
        // line 23
        echo (isset($context["display"]) ? $context["display"] : null);
        echo "\" style=\"table-layout:";
        echo (isset($context["table_css_style"]) ? $context["table_css_style"] : null);
        echo "\">";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu_items"]) ? $context["menu_items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu_item"]) {
            // line 25
            echo "    <li id=\"";
            echo $this->getAttribute($context["menu_item"], "id", array());
            echo "\" class=\"";
            echo $this->getAttribute($context["menu_item"], "type", array());
            echo $this->getAttribute($context["menu_item"], "class", array());
            echo "\">";
            // line 26
            if ($this->getAttribute($context["menu_item"], "href", array())) {
                // line 27
                echo "        <a href=\"";
                echo $this->getAttribute($context["menu_item"], "href", array());
                echo "\"";
                echo $this->getAttribute($context["menu_item"], "target", array());
                echo ">";
                echo $this->getAttribute($context["menu_item"], "icon", array());
                if ( !$this->getAttribute($context["menu_item"], "hide_text", array())) {
                    echo "<span class=\"main-menu-text\">";
                    echo $this->getAttribute($context["menu_item"], "name", array());
                    echo "</span>";
                }
                echo "</a>";
            } else {
                // line 29
                echo "        <a>";
                echo $this->getAttribute($context["menu_item"], "icon", array());
                if ( !$this->getAttribute($context["menu_item"], "hide_text", array())) {
                    echo "<span class=\"main-menu-text\">";
                    echo $this->getAttribute($context["menu_item"], "name", array());
                    echo "</span>";
                }
                echo "</a>";
            }
            // line 32
            if ((($this->getAttribute($context["menu_item"], "type", array()) == "mega-menu-categories") && $this->getAttribute($context["menu_item"], "items", array()))) {
                // line 33
                echo "        <div class=\"mega-menu\">
          <div>";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_item"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["submenu_item"]) {
                    // line 36
                    echo "              <div class=\"mega-menu-item";
                    echo $this->getAttribute($context["menu_item"], "classes", array());
                    echo $this->getAttribute($context["menu_item"], "show_class", array());
                    echo "\">
                <div>
                  <h3><a href=\"";
                    // line 38
                    echo $this->getAttribute($context["submenu_item"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["submenu_item"], "name", array());
                    echo "</a></h3>
                  <div>";
                    // line 40
                    if (twig_in_filter($this->getAttribute($context["menu_item"], "show", array()), array(0 => "image", 1 => "both"))) {
                        // line 41
                        echo "                      <a href=\"";
                        echo $this->getAttribute($context["submenu_item"], "href", array());
                        echo "\"><img width=\"";
                        echo $this->getAttribute($context["submenu_item"], "image_width", array());
                        echo "\" height=\"";
                        echo $this->getAttribute($context["submenu_item"], "image_height", array());
                        echo "\" class=\"lazy\" src=\"";
                        echo $this->getAttribute($context["submenu_item"], "dummy", array());
                        echo "\" data-src=\"";
                        echo $this->getAttribute($context["submenu_item"], "image", array());
                        echo "\" data-default-src=\"";
                        echo $this->getAttribute($context["submenu_item"], "image", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["submenu_item"], "name", array());
                        echo "\"/></a>";
                    }
                    // line 43
                    if (twig_in_filter($this->getAttribute($context["menu_item"], "show", array()), array(0 => "links", 1 => "both"))) {
                        // line 44
                        echo "                      <ul>";
                        // line 45
                        $context["index"] = 0;
                        // line 46
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["submenu_item"], "items", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["sub2menu_item"]) {
                            // line 47
                            if (($this->getAttribute($context["menu_item"], "limit", array()) && ($this->getAttribute($context["menu_item"], "limit", array()) > (isset($context["index"]) ? $context["index"] : null)))) {
                                // line 48
                                $context["index"] = ((isset($context["index"]) ? $context["index"] : null) + 1);
                                // line 49
                                echo "                          <li data-image=\"";
                                echo $this->getAttribute($context["sub2menu_item"], "image", array());
                                echo "\"><a href=\"";
                                echo $this->getAttribute($context["sub2menu_item"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["sub2menu_item"], "name", array());
                                echo "</a></li>";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub2menu_item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 52
                        if (($this->getAttribute($context["menu_item"], "limit", array()) && ($this->getAttribute($context["menu_item"], "limit", array()) <= (isset($context["index"]) ? $context["index"] : null)))) {
                            // line 53
                            echo "                          <li class=\"view-more\"><a href=\"";
                            echo $this->getAttribute($context["submenu_item"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "view_more_text"), "method");
                            echo "</a></li>";
                        }
                        // line 55
                        echo "                      </ul>";
                    }
                    // line 57
                    echo "                  </div>
                </div>
              </div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "          </div>
          <span class=\"clearfix\"></span>
        </div>
        <span class=\"clearfix\"></span>";
            }
            // line 67
            if ((($this->getAttribute($context["menu_item"], "type", array()) == "mega-menu-products") && $this->getAttribute($context["menu_item"], "items", array()))) {
                // line 68
                echo "        <div class=\"mega-menu\">
          <div>";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_item"], "items", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 71
                    if ((($this->getAttribute($context["menu_item"], "limit", array()) == 0) || (($this->getAttribute($context["menu_item"], "limit", array()) > 0) && ($this->getAttribute($context["menu_item"], "limit", array()) >= $this->getAttribute($context["loop"], "index", array()))))) {
                        // line 72
                        echo "                <div class=\"mega-menu-item product-grid-item";
                        echo $this->getAttribute($context["menu_item"], "classes", array());
                        echo " display-";
                        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method");
                        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_block_button"), "method");
                        echo "\">
                  <div class=\"product-wrapper";
                        // line 73
                        if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                            echo " outofstock";
                        }
                        echo "\">
                    <div class=\"image\">
                      <a href=\"";
                        // line 75
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\">
                        <img class=\"lazy\" src=\"";
                        // line 76
                        echo $this->getAttribute($context["product"], "dummy", array());
                        echo "\" data-src=\"";
                        echo $this->getAttribute($context["product"], "image", array());
                        echo "\" width=\"";
                        echo $this->getAttribute($context["product"], "image_width", array());
                        echo "\" height=\"";
                        echo $this->getAttribute($context["product"], "image_height", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\"/>
                      </a>";
                        // line 78
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
                        foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                            // line 79
                            echo "                        <span class=\"label-";
                            echo $context["label"];
                            echo "\"><b>";
                            echo $context["name"];
                            echo "</b></span>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['label'], $context['name'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 81
                        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position"), "method") == "image") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method") == "icon"))) {
                            // line 82
                            echo "                        <div class=\"wishlist\"><a onclick=\"addToWishList('";
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "');\" class=\"hint--top\" data-hint=\"";
                            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                            echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                            echo "</span></a></div>
                        <div class=\"compare\"><a onclick=\"addToCompare('";
                            // line 83
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "');\" class=\"hint--top\" data-hint=\"";
                            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                            echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                            echo "</span></a></div>";
                        }
                        // line 85
                        echo "                    </div>
                    <div class=\"product-details\">
                      <div class=\"caption\">
                        <div class=\"name\"><a href=\"";
                        // line 88
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "</a></div>";
                        // line 89
                        if ($this->getAttribute($context["product"], "price", array())) {
                            // line 90
                            echo "                          <div class=\"price\">";
                            // line 91
                            if ( !$this->getAttribute($context["product"], "special", array())) {
                                // line 92
                                echo $this->getAttribute($context["product"], "price", array());
                            } else {
                                // line 94
                                echo "                              <span class=\"price-old\">";
                                echo $this->getAttribute($context["product"], "price", array());
                                echo "</span> <span class=\"price-new\">";
                                echo $this->getAttribute($context["product"], "special", array());
                                echo "</span>";
                            }
                            // line 96
                            echo "                          </div>";
                        }
                        // line 98
                        if ($this->getAttribute($context["product"], "rating", array())) {
                            // line 99
                            echo "                          <div class=\"rating\">";
                            // line 100
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(1, 5));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 101
                                if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                                    // line 102
                                    echo "                                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                                } else {
                                    // line 104
                                    echo "                                <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 107
                            echo "                          </div>";
                        }
                        // line 109
                        echo "                      </div>
                      <div class=\"button-group\">";
                        // line 111
                        if (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "isEnquiryProduct", array(0 => null, 1 => $context["product"])))) {
                            // line 112
                            echo "                          <div class=\"cart enquiry-button\">
                            <a href=\"javascript:Journal.openPopup('";
                            // line 113
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
                            // line 116
                            echo "                          <div class=\"cart";
                            if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                                echo " outofstock";
                            }
                            echo "\">
                            <a onclick=\"addToCart('";
                            // line 117
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "');\" class=\"button hint--top\" data-hint=\"";
                            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                            echo "\"><i class=\"button-left-icon\"></i><span class=\"button-cart-text\">";
                            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                            echo "</span><i class=\"button-right-icon\"></i></a>
                          </div>";
                        }
                        // line 120
                        echo "                        <div class=\"wishlist\"><a onclick=\"addToWishList('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\" class=\"hint--top\" data-hint=\"";
                        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                        echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                        echo "</span></a></div>
                        <div class=\"compare\"><a onclick=\"addToCompare('";
                        // line 121
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "          </div>
          <span class=\"clearfix\"></span>
        </div>
        <span class=\"clearfix\"></span>";
            }
            // line 134
            if ((($this->getAttribute($context["menu_item"], "type", array()) == "mega-menu-brands") && $this->getAttribute($context["menu_item"], "items", array()))) {
                // line 135
                echo "        <div class=\"mega-menu\">
          <div>";
                // line 137
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_item"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["submenu_item"]) {
                    // line 138
                    echo "              <div class=\"mega-menu-item";
                    echo $this->getAttribute($context["menu_item"], "classes", array());
                    echo "\">
                <div>";
                    // line 140
                    if ((($this->getAttribute($context["submenu_item"], "show", array()) != "image") && $this->getAttribute($context["submenu_item"], "name", array()))) {
                        // line 141
                        echo "                    <h3><a href=\"";
                        echo $this->getAttribute($context["submenu_item"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["submenu_item"], "name", array());
                        echo "</a></h3>";
                    }
                    // line 143
                    echo "                  <div>";
                    // line 144
                    if (($this->getAttribute($context["submenu_item"], "show", array()) != "text")) {
                        // line 145
                        echo "                      <a href=\"";
                        echo $this->getAttribute($context["submenu_item"], "href", array());
                        echo "\"> <img width=\"";
                        echo $this->getAttribute($context["submenu_item"], "image_width", array());
                        echo "\" height=\"";
                        echo $this->getAttribute($context["submenu_item"], "image_height", array());
                        echo "\" class=\"lazy\" src=\"";
                        echo $this->getAttribute($context["submenu_item"], "dummy", array());
                        echo "\" data-src=\"";
                        echo $this->getAttribute($context["submenu_item"], "image", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["submenu_item"], "name", array());
                        echo "\"/></a>";
                    }
                    // line 147
                    echo "                    <ul>";
                    // line 148
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["submenu_item"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub2menu_item"]) {
                        // line 149
                        echo "                        <li data-image=\"";
                        echo $this->getAttribute($context["sub2menu_item"], "image", array());
                        echo "\"><a href=\"";
                        echo $this->getAttribute($context["sub2menu_item"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["sub2menu_item"], "name", array());
                        echo "</a></li>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub2menu_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 151
                    echo "                    </ul>
                  </div>
                  <span class=\"clearfix\"></span>
                </div>
              </div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 157
                echo "          </div>
          <span class=\"clearfix\"></span>
        </div>";
            }
            // line 162
            if (((($this->getAttribute($context["menu_item"], "type", array()) == "drop-down") && $this->getAttribute($context["menu_item"], "subcategories", array())) && (twig_length_filter($this->env, $this->getAttribute($context["menu_item"], "subcategories", array())) > 0))) {
                // line 163
                echo "        <ul>";
                // line 164
                echo $this->getAttribute($this, "renderMultiLevelMenu", array(0 => $context["menu_item"]), "method");
                echo "
        </ul>";
            }
            // line 168
            if (($this->getAttribute($context["menu_item"], "type", array()) == "mega-menu-html")) {
                // line 169
                echo "        <div class=\"mega-menu\">
          <div>";
                // line 171
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_item"], "html_blocks", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                    // line 172
                    echo "              <div class=\"mega-menu-item";
                    echo $this->getAttribute($context["menu_item"], "classes", array());
                    echo "\">
                <div>";
                    // line 174
                    if ($this->getAttribute($context["block"], "title", array())) {
                        // line 175
                        if ($this->getAttribute($context["block"], "link", array())) {
                            // line 176
                            echo "                      <h3><a href=\"";
                            echo $this->getAttribute($context["block"], "link", array());
                            echo "\">";
                            echo $this->getAttribute($context["block"], "title", array());
                            echo "</a></h3>";
                        } else {
                            // line 178
                            echo "                      <h3>";
                            echo $this->getAttribute($context["block"], "title", array());
                            echo "</h3>";
                        }
                    }
                    // line 181
                    if ($this->getAttribute($context["block"], "text", array())) {
                        // line 182
                        echo "                    <div class=\"wrapper\">";
                        // line 183
                        echo $this->getAttribute($context["block"], "text", array());
                        echo "
                    </div>";
                    }
                    // line 186
                    echo "                </div>
              </div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 189
                echo "          </div>
          <span class=\"clearfix\"></span>
        </div>";
            }
            // line 194
            if ((($this->getAttribute($context["menu_item"], "type", array()) == "mega-menu-mixed") && $this->getAttribute($context["menu_item"], "mixed_columns", array()))) {
                // line 195
                echo "        <div class=\"mega-menu\">";
                // line 196
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_item"], "mixed_columns", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["menu_column"]) {
                    // line 197
                    if ((($this->getAttribute($context["menu_column"], "type", array()) == "mega-menu-categories") && $this->getAttribute($context["menu_column"], "items", array()))) {
                        // line 198
                        echo "
              <div class=\"mega-menu-column mega-menu-categories";
                        // line 199
                        echo $this->getAttribute($context["menu_column"], "class", array());
                        echo "\" style=\"width:";
                        echo $this->getAttribute($context["menu_column"], "width", array());
                        echo "\">";
                        // line 200
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "top_cms_blocks", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["cms_block"]) {
                            // line 201
                            echo "                  <div class=\"menu-cms-block\">";
                            echo $this->getAttribute($context["cms_block"], "content", array());
                            echo "</div>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cms_block'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 203
                        echo "                <div>";
                        // line 204
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "items", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["submenu_item"]) {
                            // line 205
                            echo "                    <div class=\"mega-menu-item";
                            echo $this->getAttribute($context["menu_column"], "classes", array());
                            echo $this->getAttribute($context["menu_column"], "show_class", array());
                            echo "\">
                      <div>
                        <h3><a href=\"";
                            // line 207
                            echo $this->getAttribute($context["submenu_item"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["submenu_item"], "name", array());
                            echo "</a></h3>
                        <div>";
                            // line 209
                            if (twig_in_filter($this->getAttribute($context["menu_column"], "show", array()), array(0 => "image", 1 => "both"))) {
                                // line 210
                                echo "                            <a href=\"";
                                echo $this->getAttribute($context["submenu_item"], "href", array());
                                echo "\"><img width=\"";
                                echo $this->getAttribute($context["submenu_item"], "image_width", array());
                                echo "\" height=\"";
                                echo $this->getAttribute($context["submenu_item"], "image_height", array());
                                echo "\" class=\"lazy\" src=\"";
                                echo $this->getAttribute($context["submenu_item"], "dummy", array());
                                echo "\" data-src=\"";
                                echo $this->getAttribute($context["submenu_item"], "image", array());
                                echo "\" data-default-src=\"";
                                echo $this->getAttribute($context["submenu_item"], "image", array());
                                echo "\" alt=\"";
                                echo $this->getAttribute($context["submenu_item"], "name", array());
                                echo "\"/></a>";
                            }
                            // line 212
                            if (twig_in_filter($this->getAttribute($context["menu_column"], "show", array()), array(0 => "links", 1 => "both"))) {
                                // line 213
                                echo "                            <ul>";
                                // line 214
                                $context["index"] = 0;
                                // line 215
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["submenu_item"], "items", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["sub2menu_item"]) {
                                    // line 216
                                    if (($this->getAttribute($context["menu_column"], "limit", array()) && ($this->getAttribute($context["menu_column"], "limit", array()) > (isset($context["index"]) ? $context["index"] : null)))) {
                                        // line 217
                                        $context["index"] = ((isset($context["index"]) ? $context["index"] : null) + 1);
                                        // line 218
                                        echo "                                  <li data-image=\"";
                                        echo $this->getAttribute($context["sub2menu_item"], "image", array());
                                        echo "\"><a href=\"";
                                        echo $this->getAttribute($context["sub2menu_item"], "href", array());
                                        echo "\">";
                                        echo $this->getAttribute($context["sub2menu_item"], "name", array());
                                        echo "</a></li>";
                                    }
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub2menu_item'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 221
                                if (($this->getAttribute($context["menu_column"], "limit", array()) && ($this->getAttribute($context["menu_column"], "limit", array()) <= (isset($context["index"]) ? $context["index"] : null)))) {
                                    // line 222
                                    echo "                                <li class=\"view-more\"><a href=\"";
                                    echo $this->getAttribute($context["submenu_item"], "href", array());
                                    echo "\">";
                                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "view_more_text"), "method");
                                    echo "</a></li>";
                                }
                                // line 224
                                echo "                            </ul>";
                            }
                            // line 226
                            echo "                        </div>
                        <span class=\"clearfix\"></span>
                      </div>
                    </div>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu_item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 231
                        echo "                </div>";
                        // line 232
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "bottom_cms_blocks", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["cms_block"]) {
                            // line 233
                            echo "                  <div class=\"menu-cms-block\">";
                            echo $this->getAttribute($context["cms_block"], "content", array());
                            echo "</div>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cms_block'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 235
                        echo "              </div>";
                    }
                    // line 238
                    if ((($this->getAttribute($context["menu_column"], "type", array()) == "mega-menu-products") && $this->getAttribute($context["menu_column"], "items", array()))) {
                        // line 239
                        echo "              <div class=\"mega-menu-column mega-menu-products";
                        echo $this->getAttribute($context["menu_column"], "class", array());
                        echo "\" style=\"width:";
                        echo $this->getAttribute($context["menu_column"], "width", array());
                        echo "\">";
                        // line 240
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "top_cms_blocks", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["cms_block"]) {
                            // line 241
                            echo "                  <div class=\"menu-cms-block\">";
                            echo $this->getAttribute($context["cms_block"], "content", array());
                            echo "</div>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cms_block'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 243
                        echo "                <div>";
                        // line 244
                        if ($this->getAttribute($context["menu_column"], "name", array())) {
                            // line 245
                            echo "                    <h3>";
                            echo $this->getAttribute($context["menu_column"], "name", array());
                            echo "</h3>";
                        }
                        // line 247
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "items", array()));
                        $context['loop'] = array(
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        );
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 248
                            if ((($this->getAttribute($context["menu_column"], "limit", array()) == 0) || (($this->getAttribute($context["menu_column"], "limit", array()) > 0) && ($this->getAttribute($context["menu_column"], "limit", array()) >= $this->getAttribute($context["loop"], "index", array()))))) {
                                // line 249
                                echo "                      <div class=\"mega-menu-item product-grid-item";
                                echo $this->getAttribute($context["menu_column"], "classes", array());
                                echo " display-";
                                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method");
                                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_block_button"), "method");
                                echo "\">
                        <div class=\"product-wrapper";
                                // line 250
                                if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                                    echo " outofstock";
                                }
                                echo "\">
                          <div class=\"image\">
                            <a href=\"";
                                // line 252
                                echo $this->getAttribute($context["product"], "href", array());
                                echo "\">
                              <img class=\"lazy\" src=\"";
                                // line 253
                                echo $this->getAttribute($context["product"], "dummy", array());
                                echo "\" data-src=\"";
                                echo $this->getAttribute($context["product"], "image", array());
                                echo "\" width=\"";
                                echo $this->getAttribute($context["product"], "image_width", array());
                                echo "\" height=\"";
                                echo $this->getAttribute($context["product"], "image_height", array());
                                echo "\" alt=\"";
                                echo $this->getAttribute($context["product"], "name", array());
                                echo "\"/>
                            </a>";
                                // line 255
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
                                foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                                    // line 256
                                    echo "                              <span class=\"label-";
                                    echo $context["label"];
                                    echo "\"><b>";
                                    echo $context["name"];
                                    echo "</b></span>";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['label'], $context['name'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 258
                                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position"), "method") == "image") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method") == "icon"))) {
                                    // line 259
                                    echo "                              <div class=\"wishlist\"><a onclick=\"addToWishList('";
                                    echo $this->getAttribute($context["product"], "product_id", array());
                                    echo "');\" class=\"hint--top\" data-hint=\"";
                                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                                    echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                                    echo "</span></a></div>
                              <div class=\"compare\"><a onclick=\"addToCompare('";
                                    // line 260
                                    echo $this->getAttribute($context["product"], "product_id", array());
                                    echo "');\" class=\"hint--top\" data-hint=\"";
                                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                                    echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                                    echo "</span></a></div>";
                                }
                                // line 262
                                echo "                          </div>
                          <div class=\"product-details\">
                            <div class=\"caption\">
                              <div class=\"name\"><a href=\"";
                                // line 265
                                echo $this->getAttribute($context["product"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["product"], "name", array());
                                echo "</a></div>";
                                // line 266
                                if ($this->getAttribute($context["product"], "price", array())) {
                                    // line 267
                                    echo "                                <div class=\"price\">";
                                    // line 268
                                    if ( !$this->getAttribute($context["product"], "special", array())) {
                                        // line 269
                                        echo $this->getAttribute($context["product"], "price", array());
                                    } else {
                                        // line 271
                                        echo "                                    <span class=\"price-old\">";
                                        echo $this->getAttribute($context["product"], "price", array());
                                        echo "</span> <span class=\"price-new\">";
                                        echo $this->getAttribute($context["product"], "special", array());
                                        echo "</span>";
                                    }
                                    // line 273
                                    echo "                                </div>";
                                }
                                // line 275
                                if ($this->getAttribute($context["product"], "rating", array())) {
                                    // line 276
                                    echo "                                <div class=\"rating\">";
                                    // line 277
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                        // line 278
                                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                                            // line 279
                                            echo "                                      <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                                        } else {
                                            // line 281
                                            echo "                                      <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                                        }
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 284
                                    echo "                                </div>";
                                }
                                // line 286
                                echo "                            </div>
                            <div class=\"button-group\">";
                                // line 288
                                if (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "isEnquiryProduct", array(0 => null, 1 => $context["product"])))) {
                                    // line 289
                                    echo "                                <div class=\"cart enquiry-button\">
                                  <a href=\"javascript:Journal.openPopup('";
                                    // line 290
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
                                    // line 293
                                    echo "                                <div class=\"cart";
                                    if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                                        echo " outofstock";
                                    }
                                    echo "\">
                                  <a onclick=\"addToCart('";
                                    // line 294
                                    echo $this->getAttribute($context["product"], "product_id", array());
                                    echo "');\" class=\"button hint--top\" data-hint=\"";
                                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                                    echo "\"><i class=\"button-left-icon\"></i><span class=\"button-cart-text\">";
                                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                                    echo "</span><i class=\"button-right-icon\"></i></a>
                                </div>";
                                }
                                // line 297
                                echo "                              <div class=\"wishlist\"><a onclick=\"addToWishList('";
                                echo $this->getAttribute($context["product"], "product_id", array());
                                echo "');\" class=\"hint--top\" data-hint=\"";
                                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                                echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                                echo "</span></a></div>
                              <div class=\"compare\"><a onclick=\"addToCompare('";
                                // line 298
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 305
                        echo "                </div>";
                        // line 306
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "bottom_cms_blocks", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["cms_block"]) {
                            // line 307
                            echo "                  <div class=\"menu-cms-block\">";
                            echo $this->getAttribute($context["cms_block"], "content", array());
                            echo "</div>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cms_block'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 309
                        echo "              </div>";
                    }
                    // line 311
                    if ((($this->getAttribute($context["menu_column"], "type", array()) == "mega-menu-brands") && $this->getAttribute($context["menu_column"], "items", array()))) {
                        // line 312
                        echo "              <div class=\"mega-menu-column mega-menu-brands";
                        echo $this->getAttribute($context["menu_column"], "class", array());
                        echo "\" style=\"width:";
                        echo $this->getAttribute($context["menu_column"], "width", array());
                        echo "\">";
                        // line 313
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "top_cms_blocks", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["cms_block"]) {
                            // line 314
                            echo "                  <div class=\"menu-cms-block\">";
                            echo $this->getAttribute($context["cms_block"], "content", array());
                            echo "</div>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cms_block'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 316
                        echo "                <div>";
                        // line 317
                        if ($this->getAttribute($context["menu_column"], "name", array())) {
                            // line 318
                            echo "                    <h3>";
                            echo $this->getAttribute($context["menu_column"], "name", array());
                            echo "</h3>";
                        }
                        // line 320
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "items", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["submenu_item"]) {
                            // line 321
                            echo "                    <div class=\"mega-menu-item";
                            echo $this->getAttribute($context["menu_column"], "classes", array());
                            echo "\">
                      <div>";
                            // line 323
                            if ((($this->getAttribute($context["submenu_item"], "show", array()) != "image") && $this->getAttribute($context["submenu_item"], "name", array()))) {
                                // line 324
                                echo "                          <h3><a href=\"";
                                echo $this->getAttribute($context["submenu_item"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["submenu_item"], "name", array());
                                echo "</a></h3>";
                            }
                            // line 326
                            echo "                        <div>";
                            // line 327
                            if (($this->getAttribute($context["submenu_item"], "show", array()) != "text")) {
                                // line 328
                                echo "                            <a href=\"";
                                echo $this->getAttribute($context["submenu_item"], "href", array());
                                echo "\"> <img width=\"";
                                echo $this->getAttribute($context["submenu_item"], "image_width", array());
                                echo "\" height=\"";
                                echo $this->getAttribute($context["submenu_item"], "image_height", array());
                                echo "\" class=\"lazy\" src=\"";
                                echo $this->getAttribute($context["submenu_item"], "dummy", array());
                                echo "\" data-src=\"";
                                echo $this->getAttribute($context["submenu_item"], "image", array());
                                echo "\" alt=\"";
                                echo $this->getAttribute($context["submenu_item"], "name", array());
                                echo "\"/></a>";
                            }
                            // line 330
                            echo "                          <ul>";
                            // line 331
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["submenu_item"], "items", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["sub2menu_item"]) {
                                // line 332
                                echo "                              <li data-image=\"";
                                echo $this->getAttribute($context["sub2menu_item"], "image", array());
                                echo "\"><a href=\"";
                                echo $this->getAttribute($context["sub2menu_item"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["sub2menu_item"], "name", array());
                                echo "</a></li>";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub2menu_item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 334
                            echo "                          </ul>
                        </div>
                        <span class=\"clearfix\"></span>
                      </div>
                    </div>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu_item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 340
                        echo "                </div>";
                        // line 341
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "bottom_cms_blocks", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["cms_block"]) {
                            // line 342
                            echo "                  <div class=\"menu-cms-block\">";
                            echo $this->getAttribute($context["cms_block"], "content", array());
                            echo "</div>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cms_block'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 344
                        echo "              </div>";
                    }
                    // line 347
                    if (($this->getAttribute($context["menu_column"], "type", array()) == "mega-menu-html-block")) {
                        // line 348
                        echo "              <div class=\"mega-menu-column mega-menu-html mega-menu-html-block";
                        echo $this->getAttribute($context["menu_column"], "class", array());
                        echo "\" style=\"width:";
                        echo $this->getAttribute($context["menu_column"], "width", array());
                        echo "\">";
                        // line 349
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "top_cms_blocks", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["cms_block"]) {
                            // line 350
                            echo "                  <div class=\"menu-cms-block\">";
                            echo $this->getAttribute($context["cms_block"], "content", array());
                            echo "</div>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cms_block'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 352
                        echo "                <div>";
                        // line 353
                        if ($this->getAttribute($context["menu_column"], "name", array())) {
                            // line 354
                            echo "                    <h3>";
                            echo $this->getAttribute($context["menu_column"], "name", array());
                            echo "</h3>";
                        }
                        // line 356
                        echo "                  <div class=\"wrapper\">";
                        // line 357
                        echo $this->getAttribute($context["menu_column"], "html_text", array());
                        echo "
                  </div>
                </div>";
                        // line 360
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu_column"], "bottom_cms_blocks", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["cms_block"]) {
                            // line 361
                            echo "                  <div class=\"menu-cms-block\">";
                            echo $this->getAttribute($context["cms_block"], "content", array());
                            echo "</div>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cms_block'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 363
                        echo "              </div>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 366
                echo "        </div>";
            }
            // line 368
            echo "
      <span class=\"mobile-plus\">+</span>
    </li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 372
        echo "</ul>
";
    }

    // line 1
    public function getrenderMultiLevelMenu($__menu__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "menu" => $__menu__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "subcategories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 3
                $context["submenu"] = $this->getAttribute($this, "renderMultiLevelMenu", array(0 => $context["item"]), "method");
                // line 4
                echo "    <li>
      <a";
                // line 5
                if ($this->getAttribute($context["item"], "href", array())) {
                    echo " href=\"";
                    echo $this->getAttribute($context["item"], "href", array());
                    echo "\"";
                    if ($this->getAttribute($context["item"], "target", array())) {
                        echo $this->getAttribute($context["item"], "target", array());
                    }
                }
                echo " class=\"";
                echo $this->getAttribute($context["item"], "class", array());
                echo "\">";
                // line 6
                echo $this->getAttribute($context["item"], "name", array());
                // line 7
                if (($this->getAttribute($context["item"], "subcategories", array()) && (twig_length_filter($this->env, $this->getAttribute($context["item"], "subcategories", array())) > 0))) {
                    // line 8
                    echo "          <i class=\"menu-plus\"></i>";
                }
                // line 10
                echo "      </a>";
                // line 11
                if (($this->getAttribute($context["item"], "subcategories", array()) && (twig_length_filter($this->env, $this->getAttribute($context["item"], "subcategories", array())) > 0))) {
                    // line 12
                    echo "        <span class=\"mobile-plus\">+</span>
        <ul>";
                    // line 13
                    echo (isset($context["submenu"]) ? $context["submenu"] : null);
                    echo "</ul>";
                }
                // line 15
                echo "    </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/menu/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1141 => 15,  1137 => 13,  1134 => 12,  1132 => 11,  1130 => 10,  1127 => 8,  1125 => 7,  1123 => 6,  1111 => 5,  1108 => 4,  1106 => 3,  1102 => 2,  1090 => 1,  1085 => 372,  1077 => 368,  1074 => 366,  1067 => 363,  1059 => 361,  1055 => 360,  1050 => 357,  1048 => 356,  1043 => 354,  1041 => 353,  1039 => 352,  1031 => 350,  1027 => 349,  1021 => 348,  1019 => 347,  1016 => 344,  1008 => 342,  1004 => 341,  1002 => 340,  992 => 334,  980 => 332,  976 => 331,  974 => 330,  959 => 328,  957 => 327,  955 => 326,  948 => 324,  946 => 323,  941 => 321,  937 => 320,  932 => 318,  930 => 317,  928 => 316,  920 => 314,  916 => 313,  910 => 312,  908 => 311,  905 => 309,  897 => 307,  893 => 306,  891 => 305,  867 => 298,  858 => 297,  849 => 294,  842 => 293,  827 => 290,  824 => 289,  822 => 288,  819 => 286,  816 => 284,  809 => 281,  806 => 279,  804 => 278,  800 => 277,  798 => 276,  796 => 275,  793 => 273,  786 => 271,  783 => 269,  781 => 268,  779 => 267,  777 => 266,  772 => 265,  767 => 262,  759 => 260,  750 => 259,  748 => 258,  738 => 256,  734 => 255,  722 => 253,  718 => 252,  711 => 250,  703 => 249,  701 => 248,  684 => 247,  679 => 245,  677 => 244,  675 => 243,  667 => 241,  663 => 240,  657 => 239,  655 => 238,  652 => 235,  644 => 233,  640 => 232,  638 => 231,  629 => 226,  626 => 224,  619 => 222,  617 => 221,  604 => 218,  602 => 217,  600 => 216,  596 => 215,  594 => 214,  592 => 213,  590 => 212,  573 => 210,  571 => 209,  565 => 207,  558 => 205,  554 => 204,  552 => 203,  544 => 201,  540 => 200,  535 => 199,  532 => 198,  530 => 197,  526 => 196,  524 => 195,  522 => 194,  517 => 189,  510 => 186,  505 => 183,  503 => 182,  501 => 181,  495 => 178,  488 => 176,  486 => 175,  484 => 174,  479 => 172,  475 => 171,  472 => 169,  470 => 168,  465 => 164,  463 => 163,  461 => 162,  456 => 157,  446 => 151,  434 => 149,  430 => 148,  428 => 147,  413 => 145,  411 => 144,  409 => 143,  402 => 141,  400 => 140,  395 => 138,  391 => 137,  388 => 135,  386 => 134,  380 => 128,  356 => 121,  347 => 120,  338 => 117,  331 => 116,  316 => 113,  313 => 112,  311 => 111,  308 => 109,  305 => 107,  298 => 104,  295 => 102,  293 => 101,  289 => 100,  287 => 99,  285 => 98,  282 => 96,  275 => 94,  272 => 92,  270 => 91,  268 => 90,  266 => 89,  261 => 88,  256 => 85,  248 => 83,  239 => 82,  237 => 81,  227 => 79,  223 => 78,  211 => 76,  207 => 75,  200 => 73,  192 => 72,  190 => 71,  173 => 70,  170 => 68,  168 => 67,  162 => 61,  154 => 57,  151 => 55,  144 => 53,  142 => 52,  129 => 49,  127 => 48,  125 => 47,  121 => 46,  119 => 45,  117 => 44,  115 => 43,  98 => 41,  96 => 40,  90 => 38,  83 => 36,  79 => 35,  76 => 33,  74 => 32,  64 => 29,  50 => 27,  48 => 26,  41 => 25,  37 => 24,  32 => 23,  27 => 21,  22 => 19,  19 => 18,);
    }
}
/* {% macro renderMultiLevelMenu(menu) %}*/
/*   {% for item in menu.subcategories %}*/
/*     {% set submenu = _self.renderMultiLevelMenu(item) %}*/
/*     <li>*/
/*       <a {% if item.href %} href="{{ item.href }}" {% if item.target %} {{ item.target }} {% endif %} {% endif %} class="{{ item.class }}">*/
/*         {{ item.name }}*/
/*         {% if item.subcategories and item.subcategories | length > 0 %}*/
/*           <i class="menu-plus"></i>*/
/*         {% endif %}*/
/*       </a>*/
/*       {% if item.subcategories and item.subcategories | length > 0 %}*/
/*         <span class="mobile-plus">+</span>*/
/*         <ul> {{ submenu }}</ul>*/
/*       {% endif %}*/
/*     </li>*/
/*   {% endfor %}*/
/* {% endmacro %}*/
/* */
/* <style>{{ color_styles | join(' ') }}</style>*/
/* */
/* <div class="mobile-trigger">{{ journal2.settings.get('mobile_menu_text') }}</div>*/
/* */
/* <ul class="super-menu mobile-menu menu-{{ display }}" style="table-layout: {{ table_css_style }}">*/
/*   {% for menu_item in menu_items %}*/
/*     <li id="{{ menu_item.id }}" class="{{ menu_item.type }} {{ menu_item.class }}">*/
/*       {% if menu_item.href %}*/
/*         <a href="{{ menu_item.href }}" {{ menu_item.target }}>{{ menu_item.icon }}{% if not menu_item.hide_text %}<span class="main-menu-text">{{ menu_item.name }}</span>{% endif %}</a>*/
/*       {% else %}*/
/*         <a>{{ menu_item.icon }}{% if not menu_item.hide_text %}<span class="main-menu-text">{{ menu_item.name }}</span>{% endif %}</a>*/
/*       {% endif %}*/
/* */
/*       {% if menu_item.type == 'mega-menu-categories' and menu_item.items %}*/
/*         <div class="mega-menu">*/
/*           <div>*/
/*             {% for submenu_item in menu_item.items %}*/
/*               <div class="mega-menu-item {{ menu_item.classes }} {{ menu_item.show_class }}">*/
/*                 <div>*/
/*                   <h3><a href="{{ submenu_item.href }}">{{ submenu_item.name }}</a></h3>*/
/*                   <div>*/
/*                     {% if menu_item.show in ['image', 'both'] %}*/
/*                       <a href="{{ submenu_item.href }}"><img width="{{ submenu_item.image_width }}" height="{{ submenu_item.image_height }}" class="lazy" src="{{ submenu_item.dummy }}" data-src="{{ submenu_item.image }}" data-default-src="{{ submenu_item.image }}" alt="{{ submenu_item.name }}"/></a>*/
/*                     {% endif %}*/
/*                     {% if menu_item.show in ['links', 'both'] %}*/
/*                       <ul>*/
/*                         {% set index = 0 %}*/
/*                         {% for sub2menu_item in submenu_item.items %}*/
/*                         {% if menu_item.limit and menu_item.limit > index %}*/
/*                           {% set index = index + 1 %}*/
/*                           <li data-image="{{ sub2menu_item.image }}"><a href="{{ sub2menu_item.href }}">{{ sub2menu_item.name }}</a></li>*/
/*                         {% endif %}*/
/*                         {% endfor %}*/
/*                         {% if menu_item.limit and menu_item.limit <= index %}*/
/*                           <li class="view-more"><a href="{{ submenu_item.href }}">{{ journal2.settings.get('view_more_text') }}</a></li>*/
/*                         {% endif %}*/
/*                       </ul>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             {% endfor %}*/
/*           </div>*/
/*           <span class="clearfix"></span>*/
/*         </div>*/
/*         <span class="clearfix"></span>*/
/*       {% endif %}*/
/* */
/*       {% if menu_item.type == 'mega-menu-products' and menu_item.items %}*/
/*         <div class="mega-menu">*/
/*           <div>*/
/*             {% for product in menu_item.items %}*/
/*               {% if menu_item.limit == 0 or (menu_item.limit > 0 and menu_item.limit >= loop.index) %}*/
/*                 <div class="mega-menu-item product-grid-item {{ menu_item.classes }} display-{{ journal2.settings.get('product_grid_wishlist_icon_display') }} {{ journal2.settings.get('product_grid_button_block_button') }}">*/
/*                   <div class="product-wrapper {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                     <div class="image">*/
/*                       <a href="{{ product.href }}">*/
/*                         <img class="lazy" src="{{ product.dummy }}" data-src="{{ product.image }}" width="{{ product.image_width }}" height="{{ product.image_height }}" alt="{{ product.name }}"/>*/
/*                       </a>*/
/*                       {% for label, name in product.labels %}*/
/*                         <span class="label-{{ label }}"><b>{{ name }}</b></span>*/
/*                       {% endfor %}*/
/*                       {% if journal2.settings.get('product_grid_wishlist_icon_position') == 'image' and journal2.settings.get('product_grid_wishlist_icon_display') == 'icon' %}*/
/*                         <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                         <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <div class="product-details">*/
/*                       <div class="caption">*/
/*                         <div class="name"><a href="{{ product.href }}">{{ product.name }}</a></div>*/
/*                         {% if product.price %}*/
/*                           <div class="price">*/
/*                             {% if not product.special %}*/
/*                               {{ product.price }}*/
/*                             {% else %}*/
/*                               <span class="price-old">{{ product.price }}</span> <span class="price-new">{{ product.special }}</span>*/
/*                             {% endif %}*/
/*                           </div>*/
/*                         {% endif %}*/
/*                         {% if product.rating %}*/
/*                           <div class="rating">*/
/*                             {% for i in 1..5 %}*/
/*                               {% if product.rating < i %}*/
/*                                 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                               {% else %}*/
/*                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                               {% endif %}*/
/*                             {% endfor %}*/
/*                           </div>*/
/*                         {% endif %}*/
/*                       </div>*/
/*                       <div class="button-group">*/
/*                         {% if staticCall('Journal2Utils', 'isEnquiryProduct', [null, product]) %}*/
/*                           <div class="cart enquiry-button">*/
/*                             <a href="javascript:Journal.openPopup('{{ journal2.settings.get('enquiry_popup_code') }}', '{{ product.product_id }}');" data-clk="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ journal2.settings.get('enquiry_button_text') }}">{{ journal2.settings.get('enquiry_button_icon') }}<span class="button-cart-text">{{ journal2.settings.get('enquiry_button_text') }}</span></a>*/
/*                           </div>*/
/*                         {% else %}*/
/*                           <div class="cart {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                             <a onclick="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ button_cart }}"><i class="button-left-icon"></i><span class="button-cart-text">{{ button_cart }}</span><i class="button-right-icon"></i></a>*/
/*                           </div>*/
/*                         {% endif %}*/
/*                         <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                         <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*             {% endfor %}*/
/*           </div>*/
/*           <span class="clearfix"></span>*/
/*         </div>*/
/*         <span class="clearfix"></span>*/
/*       {% endif %}*/
/* */
/*       {% if menu_item.type == 'mega-menu-brands' and menu_item.items %}*/
/*         <div class="mega-menu">*/
/*           <div>*/
/*             {% for submenu_item in menu_item.items %}*/
/*               <div class="mega-menu-item {{ menu_item.classes }}">*/
/*                 <div>*/
/*                   {% if submenu_item.show != 'image' and submenu_item.name %}*/
/*                     <h3><a href="{{ submenu_item.href }}">{{ submenu_item.name }}</a></h3>*/
/*                   {% endif %}*/
/*                   <div>*/
/*                     {% if submenu_item.show != 'text' %}*/
/*                       <a href="{{ submenu_item.href }}"> <img width="{{ submenu_item.image_width }}" height="{{ submenu_item.image_height }}" class="lazy" src="{{ submenu_item.dummy }}" data-src="{{ submenu_item.image }}" alt="{{ submenu_item.name }}"/></a>*/
/*                     {% endif %}*/
/*                     <ul>*/
/*                       {% for sub2menu_item in submenu_item.items %}*/
/*                         <li data-image="{{ sub2menu_item.image }}"><a href="{{ sub2menu_item.href }}">{{ sub2menu_item.name }}</a></li>*/
/*                       {% endfor %}*/
/*                     </ul>*/
/*                   </div>*/
/*                   <span class="clearfix"></span>*/
/*                 </div>*/
/*               </div>*/
/*             {% endfor %}*/
/*           </div>*/
/*           <span class="clearfix"></span>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if menu_item.type == 'drop-down' and menu_item.subcategories and menu_item.subcategories | length > 0 %}*/
/*         <ul>*/
/*           {{ _self.renderMultiLevelMenu(menu_item) }}*/
/*         </ul>*/
/*       {% endif %}*/
/* */
/*       {% if menu_item.type == 'mega-menu-html' %}*/
/*         <div class="mega-menu">*/
/*           <div>*/
/*             {% for block in menu_item.html_blocks %}*/
/*               <div class="mega-menu-item {{ menu_item.classes }}">*/
/*                 <div>*/
/*                   {% if block.title %}*/
/*                     {% if block.link %}*/
/*                       <h3><a href="{{ block.link }}">{{ block.title }}</a></h3>*/
/*                     {% else %}*/
/*                       <h3>{{ block.title }}</h3>*/
/*                     {% endif %}*/
/*                   {% endif %}*/
/*                   {% if block.text %}*/
/*                     <div class="wrapper">*/
/*                       {{ block.text }}*/
/*                     </div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*             {% endfor %}*/
/*           </div>*/
/*           <span class="clearfix"></span>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if menu_item.type == 'mega-menu-mixed' and menu_item.mixed_columns %}*/
/*         <div class="mega-menu">*/
/*           {% for menu_column in menu_item.mixed_columns %}*/
/*             {% if menu_column.type == 'mega-menu-categories' and menu_column.items %}*/
/* */
/*               <div class="mega-menu-column mega-menu-categories {{ menu_column.class }}" style="width: {{ menu_column.width }}">*/
/*                 {% for cms_block in menu_column.top_cms_blocks %}*/
/*                   <div class="menu-cms-block">{{ cms_block.content }}</div>*/
/*                 {% endfor %}*/
/*                 <div>*/
/*                   {% for submenu_item in menu_column.items %}*/
/*                     <div class="mega-menu-item {{ menu_column.classes }} {{ menu_column.show_class }}">*/
/*                       <div>*/
/*                         <h3><a href="{{ submenu_item.href }}">{{ submenu_item.name }}</a></h3>*/
/*                         <div>*/
/*                           {% if menu_column.show in ['image', 'both'] %}*/
/*                             <a href="{{ submenu_item.href }}"><img width="{{ submenu_item.image_width }}" height="{{ submenu_item.image_height }}" class="lazy" src="{{ submenu_item.dummy }}" data-src="{{ submenu_item.image }}" data-default-src="{{ submenu_item.image }}" alt="{{ submenu_item.name }}"/></a>*/
/*                           {% endif %}*/
/*                           {% if menu_column.show in ['links', 'both'] %}*/
/*                             <ul>*/
/*                               {% set index = 0 %}*/
/*                               {% for sub2menu_item in submenu_item.items %}*/
/*                                 {% if menu_column.limit and menu_column.limit > index %}*/
/*                                   {% set index = index + 1 %}*/
/*                                   <li data-image="{{ sub2menu_item.image }}"><a href="{{ sub2menu_item.href }}">{{ sub2menu_item.name }}</a></li>*/
/*                                 {% endif %}*/
/*                               {% endfor %}*/
/*                               {% if menu_column.limit and menu_column.limit <= index %}*/
/*                                 <li class="view-more"><a href="{{ submenu_item.href }}">{{ journal2.settings.get('view_more_text') }}</a></li>*/
/*                               {% endif %}*/
/*                             </ul>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                         <span class="clearfix"></span>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*                 {% for cms_block in menu_column.bottom_cms_blocks %}*/
/*                   <div class="menu-cms-block">{{ cms_block.content }}</div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             {% endif %}*/
/* */
/*             {% if menu_column.type == 'mega-menu-products' and menu_column.items %}*/
/*               <div class="mega-menu-column mega-menu-products {{ menu_column.class }}" style="width: {{ menu_column.width }}">*/
/*                 {% for cms_block in menu_column.top_cms_blocks %}*/
/*                   <div class="menu-cms-block">{{ cms_block.content }}</div>*/
/*                 {% endfor %}*/
/*                 <div>*/
/*                   {% if menu_column.name %}*/
/*                     <h3>{{ menu_column.name }}</h3>*/
/*                   {% endif %}*/
/*                   {% for product in menu_column.items %}*/
/*                     {% if menu_column.limit == 0 or (menu_column.limit > 0 and menu_column.limit >= loop.index) %}*/
/*                       <div class="mega-menu-item product-grid-item {{ menu_column.classes }} display-{{ journal2.settings.get('product_grid_wishlist_icon_display') }} {{ journal2.settings.get('product_grid_button_block_button') }}">*/
/*                         <div class="product-wrapper {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                           <div class="image">*/
/*                             <a href="{{ product.href }}">*/
/*                               <img class="lazy" src="{{ product.dummy }}" data-src="{{ product.image }}" width="{{ product.image_width }}" height="{{ product.image_height }}" alt="{{ product.name }}"/>*/
/*                             </a>*/
/*                             {% for label, name in product.labels %}*/
/*                               <span class="label-{{ label }}"><b>{{ name }}</b></span>*/
/*                             {% endfor %}*/
/*                             {% if journal2.settings.get('product_grid_wishlist_icon_position') == 'image' and journal2.settings.get('product_grid_wishlist_icon_display') == 'icon' %}*/
/*                               <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                               <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                             {% endif %}*/
/*                           </div>*/
/*                           <div class="product-details">*/
/*                             <div class="caption">*/
/*                               <div class="name"><a href="{{ product.href }}">{{ product.name }}</a></div>*/
/*                               {% if product.price %}*/
/*                                 <div class="price">*/
/*                                   {% if not product.special %}*/
/*                                     {{ product.price }}*/
/*                                   {% else %}*/
/*                                     <span class="price-old">{{ product.price }}</span> <span class="price-new">{{ product.special }}</span>*/
/*                                   {% endif %}*/
/*                                 </div>*/
/*                               {% endif %}*/
/*                               {% if product.rating %}*/
/*                                 <div class="rating">*/
/*                                   {% for i in 1..5 %}*/
/*                                     {% if product.rating < i %}*/
/*                                       <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                                     {% else %}*/
/*                                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                                     {% endif %}*/
/*                                   {% endfor %}*/
/*                                 </div>*/
/*                               {% endif %}*/
/*                             </div>*/
/*                             <div class="button-group">*/
/*                               {% if staticCall('Journal2Utils', 'isEnquiryProduct', [null, product]) %}*/
/*                                 <div class="cart enquiry-button">*/
/*                                   <a href="javascript:Journal.openPopup('{{ journal2.settings.get('enquiry_popup_code') }}', '{{ product.product_id }}');" data-clk="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ journal2.settings.get('enquiry_button_text') }}">{{ journal2.settings.get('enquiry_button_icon') }}<span class="button-cart-text">{{ journal2.settings.get('enquiry_button_text') }}</span></a>*/
/*                                 </div>*/
/*                               {% else %}*/
/*                                 <div class="cart {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                                   <a onclick="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ button_cart }}"><i class="button-left-icon"></i><span class="button-cart-text">{{ button_cart }}</span><i class="button-right-icon"></i></a>*/
/*                                 </div>*/
/*                               {% endif %}*/
/*                               <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                               <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                             </div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     {% endif %}*/
/*                   {% endfor %}*/
/*                 </div>*/
/*                 {% for cms_block in menu_column.bottom_cms_blocks %}*/
/*                   <div class="menu-cms-block">{{ cms_block.content }}</div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             {% endif %}*/
/*             {% if menu_column.type == 'mega-menu-brands' and menu_column.items %}*/
/*               <div class="mega-menu-column mega-menu-brands {{ menu_column.class }}" style="width: {{ menu_column.width }}">*/
/*                 {% for cms_block in menu_column.top_cms_blocks %}*/
/*                   <div class="menu-cms-block">{{ cms_block.content }}</div>*/
/*                 {% endfor %}*/
/*                 <div>*/
/*                   {% if menu_column.name %}*/
/*                     <h3>{{ menu_column.name }}</h3>*/
/*                   {% endif %}*/
/*                   {% for submenu_item in menu_column.items %}*/
/*                     <div class="mega-menu-item {{ menu_column.classes }}">*/
/*                       <div>*/
/*                         {% if submenu_item.show != 'image' and submenu_item.name %}*/
/*                           <h3><a href="{{ submenu_item.href }}">{{ submenu_item.name }}</a></h3>*/
/*                         {% endif %}*/
/*                         <div>*/
/*                           {% if submenu_item.show != 'text' %}*/
/*                             <a href="{{ submenu_item.href }}"> <img width="{{ submenu_item.image_width }}" height="{{ submenu_item.image_height }}" class="lazy" src="{{ submenu_item.dummy }}" data-src="{{ submenu_item.image }}" alt="{{ submenu_item.name }}"/></a>*/
/*                           {% endif %}*/
/*                           <ul>*/
/*                             {% for sub2menu_item in submenu_item.items %}*/
/*                               <li data-image="{{ sub2menu_item.image }}"><a href="{{ sub2menu_item.href }}">{{ sub2menu_item.name }}</a></li>*/
/*                             {% endfor %}*/
/*                           </ul>*/
/*                         </div>*/
/*                         <span class="clearfix"></span>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*                 {% for cms_block in menu_column.bottom_cms_blocks %}*/
/*                   <div class="menu-cms-block">{{ cms_block.content }}</div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             {% endif %}*/
/* */
/*             {% if menu_column.type == 'mega-menu-html-block' %}*/
/*               <div class="mega-menu-column mega-menu-html mega-menu-html-block {{ menu_column.class }}" style="width: {{ menu_column.width }}">*/
/*                 {% for cms_block in menu_column.top_cms_blocks %}*/
/*                   <div class="menu-cms-block">{{ cms_block.content }}</div>*/
/*                 {% endfor %}*/
/*                 <div>*/
/*                   {% if menu_column.name %}*/
/*                     <h3>{{ menu_column.name }}</h3>*/
/*                   {% endif %}*/
/*                   <div class="wrapper">*/
/*                     {{ menu_column.html_text }}*/
/*                   </div>*/
/*                 </div>*/
/*                 {% for cms_block in menu_column.bottom_cms_blocks %}*/
/*                   <div class="menu-cms-block">{{ cms_block.content }}</div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             {% endif %}*/
/*           {% endfor %}*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       <span class="mobile-plus">+</span>*/
/*     </li>*/
/*   {% endfor %}*/
/* </ul>*/
/* */
