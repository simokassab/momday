<?php

/* journal2/template/journal2/module/side_products.twig */
class __TwigTemplate_d24581c10756e4adce16e6a3a459b95c56ce53cd4c526c466750eb480914ebcd extends Twig_Template
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
        echo "<div class=\"side-products-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " box oc-module side-products\">";
        // line 2
        if ((isset($context["heading_title"]) ? $context["heading_title"] : null)) {
            // line 3
            echo "    <div class=\"box-heading\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</div>";
        }
        // line 5
        echo "  <div class=\"box-content\">
    <div class=\"box-product\">";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 8
            echo "        <div class=\"product-grid-item";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_classes"), "method");
            echo " display-";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method");
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_block_button"), "method");
            echo "\">
          <div class=\"product-wrapper\">";
            // line 10
            if ($this->getAttribute($context["product"], "thumb", array())) {
                // line 11
                echo "            <div class=\"image\">
              <a href=\"";
                // line 12
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
                <img width=\"";
                // line 13
                echo (isset($context["image_width"]) ? $context["image_width"] : null);
                echo "\" height=\"";
                echo (isset($context["image_height"]) ? $context["image_height"] : null);
                echo "\" src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"/>
              </a>
            </div>";
            }
            // line 17
            echo "            <div class=\"product-details\">
              <div class=\"name\"><a href=\"";
            // line 18
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></div>";
            // line 19
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 20
                echo "                <div class=\"price\">";
                // line 21
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 22
                    echo $this->getAttribute($context["product"], "price", array());
                } else {
                    // line 24
                    echo "                    <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span> <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span>";
                }
                // line 26
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 27
                    echo "                    <span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>";
                }
                // line 29
                echo "                </div>";
            }
            // line 31
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 32
                echo "                <div class=\"rating\">";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 34
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 35
                        echo "                      <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                    } else {
                        // line 37
                        echo "                      <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "                </div>";
            }
            // line 42
            echo "            </div>
          </div>
        </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/side_products.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 46,  126 => 42,  123 => 40,  116 => 37,  113 => 35,  111 => 34,  107 => 33,  105 => 32,  103 => 31,  100 => 29,  94 => 27,  92 => 26,  85 => 24,  82 => 22,  80 => 21,  78 => 20,  76 => 19,  71 => 18,  68 => 17,  54 => 13,  50 => 12,  47 => 11,  45 => 10,  37 => 8,  33 => 7,  30 => 5,  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* <div class="side-products-{{ module_id }} box oc-module side-products">*/
/*   {% if heading_title %}*/
/*     <div class="box-heading">{{ heading_title }}</div>*/
/*   {% endif %}*/
/*   <div class="box-content">*/
/*     <div class="box-product">*/
/*       {% for product in products %}*/
/*         <div class="product-grid-item {{ journal2.settings.get('product_grid_classes') }} display-{{ journal2.settings.get('product_grid_wishlist_icon_display') }} {{ journal2.settings.get('product_grid_button_block_button') }}">*/
/*           <div class="product-wrapper">*/
/*             {% if product.thumb %}*/
/*             <div class="image">*/
/*               <a href="{{ product.href }}">*/
/*                 <img width="{{ image_width }}" height="{{ image_height }}" src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}"/>*/
/*               </a>*/
/*             </div>*/
/*             {% endif %}*/
/*             <div class="product-details">*/
/*               <div class="name"><a href="{{ product.href }}">{{ product.name }}</a></div>*/
/*               {% if product.price %}*/
/*                 <div class="price">*/
/*                   {% if not product.special %}*/
/*                     {{ product.price }}*/
/*                   {% else %}*/
/*                     <span class="price-old">{{ product.price }}</span> <span class="price-new">{{ product.special }}</span>*/
/*                   {% endif %}*/
/*                   {% if product.tax %}*/
/*                     <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if product.rating %}*/
/*                 <div class="rating">*/
/*                   {% for i in 1..5 %}*/
/*                     {% if product.rating < i %}*/
/*                       <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                     {% else %}*/
/*                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                     {% endif %}*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       {% endfor %}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
