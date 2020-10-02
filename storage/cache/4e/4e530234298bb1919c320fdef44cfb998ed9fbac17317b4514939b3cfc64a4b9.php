<?php

/* journal2/template/common/cart.twig */
class __TwigTemplate_96e387b6e1c7a4d56be509cc9021e958f51c6edfa9424aa796bce7c2b728f8a4 extends Twig_Template
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
        echo "<div id=\"cart\" class=\"btn-group btn-block\">
  <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-inverse btn-block btn-lg dropdown-toggle heading\"><a><span id=\"cart-total\" data-loading-text=\"";
        // line 2
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "&nbsp;&nbsp;\">";
        echo (isset($context["text_items"]) ? $context["text_items"] : null);
        echo "</span> <i></i></a></button>
  <div class=\"content\">
    <ul class=\"cart-wrapper\">";
        // line 5
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 6
            echo "        <li class=\"mini-cart-info\">
          <table class=\"table table-striped\">";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 9
                echo "              <tr>
                <td class=\"text-center image\">";
                // line 10
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-thumbnail\"/></a>";
                }
                echo "</td>
                <td class=\"text-left name\">";
                // line 12
                if ((((((array_key_exists("module_marketplace_status", $context) && (isset($context["module_marketplace_status"]) ? $context["module_marketplace_status"] : null)) && (isset($context["marketplace_seller_name_cart_status"]) ? $context["marketplace_seller_name_cart_status"] : null)) && $this->getAttribute($context["product"], "seller_name", array(), "array", true, true)) && $this->getAttribute($context["product"], "seller_name", array(), "array")) &&  !(isset($context["marketplace_seller_info_hide"]) ? $context["marketplace_seller_info_hide"] : null))) {
                    // line 13
                    echo "                              <a href=\"";
                    echo $this->getAttribute($context["product"], "href", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context["product"], "name", array(), "array");
                    echo "</a>";
                    echo (isset($context["text_bySeller"]) ? $context["text_bySeller"] : null);
                    echo " <a href=\"";
                    echo $this->getAttribute($context["product"], "seller_href", array());
                    echo "\" target=\"_blank\">";
                    echo $this->getAttribute($context["product"], "seller_name", array(), "array");
                    echo "</a>";
                } else {
                    // line 15
                    echo "                              <a href=\"";
                    echo $this->getAttribute($context["product"], "href", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context["product"], "name", array(), "array");
                    echo "</a>";
                }
                // line 17
                echo "                              
                  <div>";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 20
                    echo "                      <br/>
                      -
                      <small>";
                    // line 22
                    echo $this->getAttribute($context["option"], "name", array());
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                if ($this->getAttribute($context["product"], "recurring", array())) {
                    // line 25
                    echo "                      <br/>
                      -
                      <small>";
                    // line 27
                    echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
                    echo $this->getAttribute($context["product"], "recurring", array());
                    echo "></small>";
                }
                // line 29
                echo "                  </div>
                </td>
                <td class=\"text-right quantity\">x";
                // line 31
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "</td>
                <td class=\"text-right total\">";
                // line 32
                echo $this->getAttribute($context["product"], "total", array());
                echo "</td>
                <td class=\"text-center remove\">
                  <button type=\"button\" onclick=\"cart.remove('";
                // line 34
                echo $this->getAttribute($context["product"], "cart_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"\"><i class=\"\"></i></button>
                </td>
              </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 39
                echo "              <tr>
                <td class=\"text-center\"></td>
                <td class=\"text-left name\">";
                // line 41
                echo $this->getAttribute($context["voucher"], "decription", array());
                echo "</td>
                <td class=\"text-right quantity\">x&nbsp;1</td>
                <td class=\"text-right total\">";
                // line 43
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
                <td class=\"text-center remove\">
                  <button type=\"button\" onclick=\"voucher.remove('";
                // line 45
                echo $this->getAttribute($context["voucher"], "key", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"\"><i class=\"\"></i></button>
                </td>
              </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "          </table>
        </li>
        <li>
          <div class=\"mini-cart-total\">
            <table class=\"table table-bordered\">";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 55
                echo "                <tr>
                  <td class=\"text-right right\"><strong>";
                // line 56
                echo $this->getAttribute($context["total"], "title", array());
                echo "</strong></td>
                  <td class=\"text-right right\">";
                // line 57
                echo $this->getAttribute($context["total"], "text", array());
                echo "</td>
                </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "            </table>
            <p class=\"text-right checkout\"><a class=\"button\" href=\"";
            // line 61
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "\">";
            echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
            echo "</a>&nbsp;<a class=\"button\" href=\"";
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\">";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</a></p>
          </div>
        </li>";
        } else {
            // line 65
            echo "        <li>
          <p class=\"text-center empty\">";
            // line 66
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
        </li>";
        }
        // line 69
        echo "    </ul>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 69,  203 => 66,  200 => 65,  188 => 61,  185 => 60,  177 => 57,  173 => 56,  170 => 55,  166 => 54,  160 => 49,  149 => 45,  144 => 43,  139 => 41,  135 => 39,  131 => 38,  120 => 34,  115 => 32,  111 => 31,  107 => 29,  102 => 27,  98 => 25,  96 => 24,  88 => 22,  84 => 20,  80 => 19,  77 => 17,  70 => 15,  57 => 13,  55 => 12,  41 => 10,  38 => 9,  34 => 8,  31 => 6,  29 => 5,  22 => 2,  19 => 1,);
    }
}
/* <div id="cart" class="btn-group btn-block">*/
/*   <button type="button" data-toggle="dropdown" class="btn btn-inverse btn-block btn-lg dropdown-toggle heading"><a><span id="cart-total" data-loading-text="{{ text_loading }}&nbsp;&nbsp;">{{ text_items }}</span> <i></i></a></button>*/
/*   <div class="content">*/
/*     <ul class="cart-wrapper">*/
/*       {% if products or vouchers %}*/
/*         <li class="mini-cart-info">*/
/*           <table class="table table-striped">*/
/*             {% for product in products %}*/
/*               <tr>*/
/*                 <td class="text-center image">{% if product.thumb %}<a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail"/></a>{% endif %}</td>*/
/*                 <td class="text-left name">*/
/*                             {% if module_marketplace_status is defined and module_marketplace_status and marketplace_seller_name_cart_status and product['seller_name'] is defined and product['seller_name'] and not marketplace_seller_info_hide %}*/
/*                               <a href="{{ product['href'] }}">{{ product['name'] }}</a> {{ text_bySeller }} <a href="{{ product.seller_href }}" target="_blank">{{ product['seller_name'] }}</a>*/
/*                             {% else %}*/
/*                               <a href="{{ product['href'] }}">{{ product['name'] }}</a>*/
/*                             {% endif %}*/
/*                               */
/*                   <div>*/
/*                     {% for option in product.option %}*/
/*                       <br/>*/
/*                       -*/
/*                       <small>{{ option.name }} {{ option.value }}</small>*/
/*                     {% endfor %}*/
/*                     {% if product.recurring %}*/
/*                       <br/>*/
/*                       -*/
/*                       <small>{{ text_recurring }} {{ product.recurring }}></small>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </td>*/
/*                 <td class="text-right quantity">x {{ product.quantity }}</td>*/
/*                 <td class="text-right total">{{ product.total }}</td>*/
/*                 <td class="text-center remove">*/
/*                   <button type="button" onclick="cart.remove('{{ product.cart_id }}');" title="{{ button_remove }}" class=""><i class=""></i></button>*/
/*                 </td>*/
/*               </tr>*/
/*             {% endfor %}*/
/*             {% for voucher in vouchers %}*/
/*               <tr>*/
/*                 <td class="text-center"></td>*/
/*                 <td class="text-left name">{{ voucher.decription }}</td>*/
/*                 <td class="text-right quantity">x&nbsp;1</td>*/
/*                 <td class="text-right total">{{ voucher.amount }}</td>*/
/*                 <td class="text-center remove">*/
/*                   <button type="button" onclick="voucher.remove('{{ voucher.key }}');" title="{{ button_remove }}" class=""><i class=""></i></button>*/
/*                 </td>*/
/*               </tr>*/
/*             {% endfor %}*/
/*           </table>*/
/*         </li>*/
/*         <li>*/
/*           <div class="mini-cart-total">*/
/*             <table class="table table-bordered">*/
/*               {% for total in totals %}*/
/*                 <tr>*/
/*                   <td class="text-right right"><strong>{{ total.title }}</strong></td>*/
/*                   <td class="text-right right">{{ total.text }}</td>*/
/*                 </tr>*/
/*               {% endfor %}*/
/*             </table>*/
/*             <p class="text-right checkout"><a class="button" href="{{ cart }}">{{ text_cart }}</a>&nbsp;<a class="button" href="{{ checkout }}">{{ text_checkout }}</a></p>*/
/*           </div>*/
/*         </li>*/
/*       {% else %}*/
/*         <li>*/
/*           <p class="text-center empty">{{ text_empty }}</p>*/
/*         </li>*/
/*       {% endif %}*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* */
