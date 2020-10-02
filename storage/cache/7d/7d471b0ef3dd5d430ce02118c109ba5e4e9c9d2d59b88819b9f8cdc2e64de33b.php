<?php

/* journal2/template/extension/module/featured.twig */
class __TwigTemplate_aa988da395401d5e7134583e783f56cd3f6ee9591d0f431a32c1c97326ef36f6 extends Twig_Template
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
        echo "<div class=\"box oc-module\">
  <h3 class=\"box-heading\">";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
  <div class=\"box-content row\">
    <div class=\"box-product\">";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 6
            echo "        <div class=\"product-grid-item";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_classes"), "method");
            echo "\">
          <div class=\"product-thumb product-wrapper";
            // line 7
            if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                echo " outofstock";
            }
            echo "\">
            <div class=\"image";
            // line 8
            if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never") && $this->getAttribute($context["product"], "date_end", array()))) {
                echo " has-countdown";
            }
            echo "\">
              <a href=\"";
            // line 9
            echo $this->getAttribute($context["product"], "href", array());
            echo "\"";
            if ($this->getAttribute($context["product"], "thumb2", array())) {
                echo " class=\"has-second-image\" style=\"background: url('";
                echo $this->getAttribute($context["product"], "thumb2", array());
                echo "') no-repeat\"";
            }
            echo ">
                <img class=\"lazy first-image\" width=\"";
            // line 10
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
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
            foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                // line 13
                echo "                <span class=\"label-";
                echo $context["label"];
                echo "\"><b>";
                echo $context["name"];
                echo "</b></span>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position"), "method") == "image") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method") == "icon"))) {
                // line 16
                echo "                <div class=\"wishlist\"><a onclick=\"addToWishList('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" class=\"hint--top\" data-hint=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span></a></div>
                <div class=\"compare\"><a onclick=\"addToCompare('";
                // line 17
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" class=\"hint--top\" data-hint=\"";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "</span></a></div>";
            }
            // line 19
            echo "            </div>
            <div class=\"product-details\">
              <div class=\"caption\">
                <h4 class=\"name\"><a href=\"";
            // line 22
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
                <p class=\"description\">";
            // line 23
            echo $this->getAttribute($context["product"], "description", array());
            echo "</p>";
            // line 24
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 25
                echo "                  <div class=\"price\">";
                // line 26
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 27
                    echo $this->getAttribute($context["product"], "price", array());
                } else {
                    // line 29
                    echo "                      <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span> <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span>";
                }
                // line 31
                echo "                  </div>";
            }
            // line 33
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 34
                echo "                  <div class=\"rating\">";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 36
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 37
                        echo "                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                    } else {
                        // line 39
                        echo "                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "                  </div>";
            }
            // line 44
            echo "              </div>
              <div class=\"button-group\">";
            // line 46
            if (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "isEnquiryProduct", array(0 => null, 1 => $context["product"])))) {
                // line 47
                echo "                  <div class=\"cart enquiry-button\">
                    <a href=\"javascript:Journal.openPopup('";
                // line 48
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
                // line 51
                echo "                  <div class=\"cart";
                if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                    echo " outofstock";
                }
                echo "\">
                    <a onclick=\"addToCart('";
                // line 52
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo "');\" class=\"button hint--top\" data-hint=\"";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\"><i class=\"button-left-icon\"></i><span class=\"button-cart-text\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span><i class=\"button-right-icon\"></i></a>
                  </div>";
            }
            // line 55
            echo "                <div class=\"wishlist\"><a onclick=\"addToWishList('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\" class=\"hint--top\" data-hint=\"";
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "</span></a></div>
                <div class=\"compare\"><a onclick=\"addToCompare('";
            // line 56
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
        // line 62
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 62,  211 => 56,  202 => 55,  191 => 52,  184 => 51,  169 => 48,  166 => 47,  164 => 46,  161 => 44,  158 => 42,  151 => 39,  148 => 37,  146 => 36,  142 => 35,  140 => 34,  138 => 33,  135 => 31,  128 => 29,  125 => 27,  123 => 26,  121 => 25,  119 => 24,  116 => 23,  110 => 22,  105 => 19,  97 => 17,  88 => 16,  86 => 15,  76 => 13,  72 => 12,  58 => 10,  48 => 9,  42 => 8,  36 => 7,  31 => 6,  27 => 5,  22 => 2,  19 => 1,);
    }
}
/* <div class="box oc-module">*/
/*   <h3 class="box-heading">{{ heading_title }}</h3>*/
/*   <div class="box-content row">*/
/*     <div class="box-product">*/
/*       {% for product in products %}*/
/*         <div class="product-grid-item {{ journal2.settings.get('product_grid_classes') }}">*/
/*           <div class="product-thumb product-wrapper {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*             <div class="image {% if journal2.settings.get('show_countdown', 'never') != 'never' and product.date_end %} has-countdown {% endif %}">*/
/*               <a href="{{ product.href }}" {% if product.thumb2 %} class="has-second-image" style="background: url('{{ product.thumb2 }}') no-repeat" {% endif %}>*/
/*                 <img class="lazy first-image" width="{{ journal2.settings.get('config_image_width') }}" height="{{ journal2.settings.get('config_image_height') }}" src="{{ journal2.settings.get('product_dummy_image') }}" data-src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}"/>*/
/*               </a>*/
/*               {% for label, name in product.labels %}*/
/*                 <span class="label-{{ label }}"><b>{{ name }}</b></span>*/
/*               {% endfor %}*/
/*               {% if journal2.settings.get('product_grid_wishlist_icon_position') == 'image' and journal2.settings.get('product_grid_wishlist_icon_display') == 'icon' %}*/
/*                 <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                 <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*               {% endif %}*/
/*             </div>*/
/*             <div class="product-details">*/
/*               <div class="caption">*/
/*                 <h4 class="name"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                 <p class="description">{{ product.description }}</p>*/
/*                 {% if product.price %}*/
/*                   <div class="price">*/
/*                     {% if not product.special %}*/
/*                       {{ product.price }}*/
/*                     {% else %}*/
/*                       <span class="price-old">{{ product.price }}</span> <span class="price-new">{{ product.special }}</span>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if product.rating %}*/
/*                   <div class="rating">*/
/*                     {% for i in 1..5 %}*/
/*                       {% if product.rating < i %}*/
/*                         <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                       {% else %}*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 {% endif %}*/
/*               </div>*/
/*               <div class="button-group">*/
/*                 {% if staticCall('Journal2Utils', 'isEnquiryProduct', [null, product]) %}*/
/*                   <div class="cart enquiry-button">*/
/*                     <a href="javascript:Journal.openPopup('{{ journal2.settings.get('enquiry_popup_code') }}', '{{ product.product_id }}');" data-clk="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ journal2.settings.get('enquiry_button_text') }}">{{ journal2.settings.get('enquiry_button_icon') }}<span class="button-cart-text">{{ journal2.settings.get('enquiry_button_text') }}</span></a>*/
/*                   </div>*/
/*                 {% else %}*/
/*                   <div class="cart {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                     <a onclick="addToCart('{{ product.product_id }}', '{{ product.minimum }}');" class="button hint--top" data-hint="{{ button_cart }}"><i class="button-left-icon"></i><span class="button-cart-text">{{ button_cart }}</span><i class="button-right-icon"></i></a>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                 <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       {% endfor %}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
