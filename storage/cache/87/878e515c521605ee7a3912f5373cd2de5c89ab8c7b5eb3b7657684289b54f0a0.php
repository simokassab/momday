<?php

/* journal2/template/checkout/cart.twig */
class __TwigTemplate_9eed6695ad786f143c203fa21b33ed3b3da999d49e43187be30ae21423851c4d extends Twig_Template
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
<div id=\"container\" class=\"container j-container\">
  <ul class=\"breadcrumb\">";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\"><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</span></a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>";
        // line 8
        if ((isset($context["attention"]) ? $context["attention"] : null)) {
            // line 9
            echo "    <div class=\"alert alert-info information\"><i class=\"fa fa-info-circle\"></i>";
            echo (isset($context["attention"]) ? $context["attention"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>";
        }
        // line 13
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 14
            echo "    <div class=\"alert alert-success alert-dismissible success\"><i class=\"fa fa-check-circle\"></i>";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>";
        }
        // line 19
        if ((array_key_exists("module_marketplace_status", $context) && (isset($context["module_marketplace_status"]) ? $context["module_marketplace_status"] : null))) {
            // line 20
            if ((isset($context["error_warning_seller_product"]) ? $context["error_warning_seller_product"] : null)) {
                // line 21
                echo "                              <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
                echo (isset($context["error_warning_seller_product"]) ? $context["error_warning_seller_product"] : null);
                echo "
                                  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                </div>";
            }
        }
        // line 29
        if ((array_key_exists("module_marketplace_status", $context) && (isset($context["module_marketplace_status"]) ? $context["module_marketplace_status"] : null))) {
            // line 30
            if ((isset($context["error_warning_seller_product"]) ? $context["error_warning_seller_product"] : null)) {
                // line 31
                echo "                              <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
                echo (isset($context["error_warning_seller_product"]) ? $context["error_warning_seller_product"] : null);
                echo "
                                  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                </div>";
            }
        }
        // line 38
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 39
            echo "    <div class=\"alert alert-danger alert-dismissible warning\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>";
        }
        // line 43
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        // line 44
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 45
            $context["class"] = "col-sm-6";
        } elseif ((        // line 46
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 47
            $context["class"] = "col-sm-9";
        } else {
            // line 49
            $context["class"] = "col-sm-12";
        }
        // line 51
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " sc-page\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1 class=\"heading-title\">";
        // line 52
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        // line 53
        if ((isset($context["weight"]) ? $context["weight"] : null)) {
            // line 54
            echo "          &nbsp;(";
            echo (isset($context["weight"]) ? $context["weight"] : null);
            echo ")";
        }
        // line 55
        echo " </h1>
      <form action=\"";
        // line 56
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"table-responsive cart-info\">
          <table class=\"table table-bordered\">
            <thead>
            <tr>
              <td class=\"text-center image\">";
        // line 61
        echo (isset($context["column_image"]) ? $context["column_image"] : null);
        echo "</td>
              <td class=\"text-left name\">";
        // line 62
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
              <td class=\"text-left model\">";
        // line 63
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</td>
              <td class=\"text-left quantity\">";
        // line 64
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>
              <td class=\"text-right price\">";
        // line 65
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo "</td>
              <td class=\"text-right total\">";
        // line 66
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
            </tr>
            </thead>
            <tbody>";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 72
            echo "              <tr>
                <td class=\"text-center image\">";
            // line 73
            if ($this->getAttribute($context["product"], "thumb", array())) {
                echo " <a href=\"";
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
                <td class=\"text-left name\"><a href=\"";
            // line 74
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a>";
            if ( !$this->getAttribute($context["product"], "stock", array())) {
                echo " <span class=\"text-danger\">***</span>";
            }
            // line 75
            if ($this->getAttribute($context["product"], "option", array())) {
                // line 76
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br/>
                      <small>";
                    // line 77
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ":";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 79
            if ($this->getAttribute($context["product"], "reward", array())) {
                echo " <br/>
                    <small>";
                // line 80
                echo $this->getAttribute($context["product"], "reward", array());
                echo "</small>";
            }
            // line 81
            if ($this->getAttribute($context["product"], "recurring", array())) {
                echo " <br/>
                    <span class=\"label label-info\">";
                // line 82
                echo (isset($context["text_recurring_item"]) ? $context["text_recurring_item"] : null);
                echo "</span>
                    <small>";
                // line 83
                echo $this->getAttribute($context["product"], "recurring", array());
                echo "</small>";
            }
            echo "</td>
                <td class=\"text-left model\">";
            // line 84
            echo $this->getAttribute($context["product"], "model", array());
            echo "</td>
                <td class=\"text-left quantity\">
                  <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                    <input type=\"text\" name=\"quantity[";
            // line 87
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "\" size=\"1\" class=\"form-control\"/>
                    <span class=\"input-group-btn\">
                  <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 89
            echo (isset($context["button_update"]) ? $context["button_update"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-refresh\"></i></button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 90
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div>
                </td>
                <td class=\"text-right price\">";
            // line 93
            echo $this->getAttribute($context["product"], "price", array());
            echo "</td>
                <td class=\"text-right total\">";
            // line 94
            echo $this->getAttribute($context["product"], "total", array());
            echo "</td>
              </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 98
            echo "              <tr>
                <td></td>
                <td class=\"text-left name\">";
            // line 100
            echo $this->getAttribute($context["voucher"], "description", array());
            echo "</td>
                <td class=\"text-left\"></td>
                <td class=\"text-left quantity\">
                  <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                    <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\"/>
                    <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 106
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger button\" onclick=\"voucher.remove('";
            echo $this->getAttribute($context["voucher"], "key", array());
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div>
                </td>
                <td class=\"text-right price\">";
            // line 109
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
                <td class=\"text-right total\">";
            // line 110
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
              </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "            </tbody>

          </table>
        </div>
      </form>
      <div class=\"action-area\">";
        // line 119
        if ((isset($context["modules"]) ? $context["modules"] : null)) {
            // line 120
            echo "          <h2 class=\"secondary-title\">";
            echo (isset($context["text_next"]) ? $context["text_next"] : null);
            echo "</h2>
          <p>";
            // line 121
            echo (isset($context["text_next_choice"]) ? $context["text_next_choice"] : null);
            echo "</p>
          <div class=\"panel-group\" id=\"accordion\">";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 123
                echo $context["module"];
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo " </div>";
        }
        // line 126
        echo "        <div class=\"row\">
          <div class=\"col-sm-4 col-sm-offset-8 cart-total\">
            <table class=\"table table-bordered\" id=\"total\">";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 130
            echo "                <tr>
                  <td class=\"text-right right\"><strong>";
            // line 131
            echo $this->getAttribute($context["total"], "title", array());
            echo ":</strong></td>
                  <td class=\"text-right right\">";
            // line 132
            echo $this->getAttribute($context["total"], "text", array());
            echo "</td>
                </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "            </table>
          </div>
        </div>
        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
        // line 139
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-default button\">";
        echo (isset($context["button_shopping"]) ? $context["button_shopping"] : null);
        echo "</a></div>
          <div class=\"pull-right\"><a href=\"";
        // line 140
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" class=\"btn btn-primary button\">";
        echo (isset($context["button_checkout"]) ? $context["button_checkout"] : null);
        echo "</a></div>
        </div>
      </div>";
        // line 143
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  </div>
</div>";
        // line 146
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "journal2/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 146,  376 => 143,  369 => 140,  363 => 139,  357 => 135,  349 => 132,  345 => 131,  342 => 130,  338 => 129,  334 => 126,  331 => 124,  325 => 123,  321 => 122,  317 => 121,  312 => 120,  310 => 119,  303 => 113,  295 => 110,  291 => 109,  283 => 106,  274 => 100,  270 => 98,  266 => 97,  258 => 94,  254 => 93,  246 => 90,  242 => 89,  235 => 87,  229 => 84,  223 => 83,  219 => 82,  215 => 81,  211 => 80,  207 => 79,  197 => 77,  191 => 76,  189 => 75,  181 => 74,  167 => 73,  164 => 72,  160 => 71,  154 => 66,  150 => 65,  146 => 64,  142 => 63,  138 => 62,  134 => 61,  126 => 56,  123 => 55,  118 => 54,  116 => 53,  114 => 52,  107 => 51,  104 => 49,  101 => 47,  99 => 46,  97 => 45,  95 => 44,  91 => 43,  84 => 39,  82 => 38,  74 => 31,  72 => 30,  70 => 29,  62 => 21,  60 => 20,  58 => 19,  51 => 14,  49 => 13,  42 => 9,  40 => 8,  38 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="container" class="container j-container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if attention %}*/
/*     <div class="alert alert-info information"><i class="fa fa-info-circle"></i> {{ attention }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if success %}*/
/*     <div class="alert alert-success alert-dismissible success"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*                            {% if module_marketplace_status is defined and module_marketplace_status %}*/
/*                             {% if error_warning_seller_product %}*/
/*                               <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning_seller_product }}*/
/*                                   <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                           {% endif %}*/
/* */
/*                               */
/* */
/*                            {% if module_marketplace_status is defined and module_marketplace_status %}*/
/*                             {% if error_warning_seller_product %}*/
/*                               <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning_seller_product }}*/
/*                                   <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                           {% endif %}*/
/* */
/*                               */
/*   {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible warning"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}{{ column_right }}*/
/*     {% if column_left and column_right %}*/
/*       {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*       {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*       {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }} sc-page">{{ content_top }}*/
/*       <h1 class="heading-title">{{ heading_title }}*/
/*         {% if weight %}*/
/*           &nbsp;({{ weight }})*/
/*         {% endif %} </h1>*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*         <div class="table-responsive cart-info">*/
/*           <table class="table table-bordered">*/
/*             <thead>*/
/*             <tr>*/
/*               <td class="text-center image">{{ column_image }}</td>*/
/*               <td class="text-left name">{{ column_name }}</td>*/
/*               <td class="text-left model">{{ column_model }}</td>*/
/*               <td class="text-left quantity">{{ column_quantity }}</td>*/
/*               <td class="text-right price">{{ column_price }}</td>*/
/*               <td class="text-right total">{{ column_total }}</td>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*             {% for product in products %}*/
/*               <tr>*/
/*                 <td class="text-center image">{% if product.thumb %} <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail"/></a> {% endif %}</td>*/
/*                 <td class="text-left name"><a href="{{ product.href }}">{{ product.name }}</a> {% if not product.stock %} <span class="text-danger">***</span> {% endif %}*/
/*                   {% if product.option %}*/
/*                     {% for option in product.option %} <br/>*/
/*                       <small>{{ option.name }}: {{ option.value }}</small> {% endfor %}*/
/*                   {% endif %}*/
/*                   {% if product.reward %} <br/>*/
/*                     <small>{{ product.reward }}</small> {% endif %}*/
/*                   {% if product.recurring %} <br/>*/
/*                     <span class="label label-info">{{ text_recurring_item }}</span>*/
/*                     <small>{{ product.recurring }}</small> {% endif %}</td>*/
/*                 <td class="text-left model">{{ product.model }}</td>*/
/*                 <td class="text-left quantity">*/
/*                   <div class="input-group btn-block" style="max-width: 200px;">*/
/*                     <input type="text" name="quantity[{{ product.cart_id }}]" value="{{ product.quantity }}" size="1" class="form-control"/>*/
/*                     <span class="input-group-btn">*/
/*                   <button type="submit" data-toggle="tooltip" title="{{ button_update }}" class="btn btn-primary"><i class="fa fa-refresh"></i></button>*/
/*                   <button type="button" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger" onclick="cart.remove('{{ product.cart_id }}');"><i class="fa fa-times-circle"></i></button>*/
/*                   </span></div>*/
/*                 </td>*/
/*                 <td class="text-right price">{{ product.price }}</td>*/
/*                 <td class="text-right total">{{ product.total }}</td>*/
/*               </tr>*/
/*             {% endfor %}*/
/*             {% for voucher in vouchers %}*/
/*               <tr>*/
/*                 <td></td>*/
/*                 <td class="text-left name">{{ voucher.description }}</td>*/
/*                 <td class="text-left"></td>*/
/*                 <td class="text-left quantity">*/
/*                   <div class="input-group btn-block" style="max-width: 200px;">*/
/*                     <input type="text" name="" value="1" size="1" disabled="disabled" class="form-control"/>*/
/*                     <span class="input-group-btn">*/
/*                   <button type="button" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger button" onclick="voucher.remove('{{ voucher.key }}');"><i class="fa fa-times-circle"></i></button>*/
/*                   </span></div>*/
/*                 </td>*/
/*                 <td class="text-right price">{{ voucher.amount }}</td>*/
/*                 <td class="text-right total">{{ voucher.amount }}</td>*/
/*               </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/* */
/*           </table>*/
/*         </div>*/
/*       </form>*/
/*       <div class="action-area">*/
/*         {% if modules %}*/
/*           <h2 class="secondary-title">{{ text_next }}</h2>*/
/*           <p>{{ text_next_choice }}</p>*/
/*           <div class="panel-group" id="accordion"> {% for module in modules %}*/
/*               {{ module }}*/
/*             {% endfor %} </div>*/
/*         {% endif %}*/
/*         <div class="row">*/
/*           <div class="col-sm-4 col-sm-offset-8 cart-total">*/
/*             <table class="table table-bordered" id="total">*/
/*               {% for total in totals %}*/
/*                 <tr>*/
/*                   <td class="text-right right"><strong>{{ total.title }}:</strong></td>*/
/*                   <td class="text-right right">{{ total.text }}</td>*/
/*                 </tr>*/
/*               {% endfor %}*/
/*             </table>*/
/*           </div>*/
/*         </div>*/
/*         <div class="buttons clearfix">*/
/*           <div class="pull-left"><a href="{{ continue }}" class="btn btn-default button">{{ button_shopping }}</a></div>*/
/*           <div class="pull-right"><a href="{{ checkout }}" class="btn btn-primary button">{{ button_checkout }}</a></div>*/
/*         </div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }} */
/* */
