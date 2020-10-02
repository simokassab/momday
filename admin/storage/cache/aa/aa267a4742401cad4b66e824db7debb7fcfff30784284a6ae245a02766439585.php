<?php

/* customerpartner/notification_header.twig */
class __TwigTemplate_47909a5f633bc05951cd626fed6fefb9c77eea673a68f368866af1444d97ed86 extends Twig_Template
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
        echo "<style>
  .li_padding{
    padding: 4px;
    //font-family: monospace;
  }
  .span_height{
    height: 15px;
    margin: 5px;
  }
</style>
<a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"label label-danger pull-left\" style=\"top:10px;left:18px;position: absolute;\">";
        // line 11
        if ((array_key_exists("alerts", $context) && (isset($context["alerts"]) ? $context["alerts"] : null))) {
            echo (isset($context["alerts"]) ? $context["alerts"] : null);
        }
        echo "</span> <img src=\"view/image/notify.png\" title=\"Notifications\"></a>
  <ul class=\"dropdown-menu dropdown-menu-right\" style=\"min-width:470px;\">";
        // line 13
        if ((array_key_exists("seller_notifications", $context) && (isset($context["seller_notifications"]) ? $context["seller_notifications"] : null))) {
            // line 14
            echo "      <li class=\"li_padding\">
        <ul style=\"display:inline-flex;margin-left:-8%;\">
          <li class=\"dropdown-header li_padding\" style=\"font-size:15px;min-width:60px;\"><b>";
            // line 16
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</b></li>
          <a href=\"";
            // line 17
            echo (isset($context["view_all"]) ? $context["view_all"] : null);
            echo "\" style=\"margin:5px 0px;\"><span class=\"label label-warning span_height\">";
            echo (isset($context["processing_status_total"]) ? $context["processing_status_total"] : null);
            echo "</span>";
            echo (isset($context["text_processing_status"]) ? $context["text_processing_status"] : null);
            echo "</a>
          <a href=\"";
            // line 18
            echo (isset($context["view_all"]) ? $context["view_all"] : null);
            echo "\" style=\"margin:5px 5px;\"><span class=\"label label-success span_height\" style=\"margin-left:2%;\">";
            echo (isset($context["complete_status_total"]) ? $context["complete_status_total"] : null);
            echo "</span>";
            echo (isset($context["text_complete_status"]) ? $context["text_complete_status"] : null);
            echo "</a>
          <a href=\"";
            // line 19
            echo (isset($context["view_all"]) ? $context["view_all"] : null);
            echo "\" style=\"margin:5px 0px;\"><span class=\"label label-danger span_height\" style=\"margin-left:2%;\">";
            echo (isset($context["return_total"]) ? $context["return_total"] : null);
            echo "</span>";
            echo (isset($context["text_return"]) ? $context["text_return"] : null);
            echo "</a>
        </ul>";
            // line 21
            if ((array_key_exists("seller_notifications", $context) && (isset($context["seller_notifications"]) ? $context["seller_notifications"] : null))) {
                // line 22
                echo "          <ul>";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["seller_notifications"]) ? $context["seller_notifications"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["seller_notification"]) {
                    // line 24
                    echo "              <li class=\"li_padding\">";
                    echo $context["seller_notification"];
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_notification'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "            <li class=\"li_padding\" style=\"display: block; overflow: auto;\"><a href=\"";
                echo (isset($context["view_all"]) ? $context["view_all"] : null);
                echo "\">";
                echo (isset($context["text_view_all"]) ? $context["text_view_all"] : null);
                echo "</a></li>
          </ul>";
            }
            // line 29
            echo "      </li>";
            // line 30
            if (((array_key_exists("seller_product_reviews", $context) && (isset($context["seller_product_reviews"]) ? $context["seller_product_reviews"] : null)) || (array_key_exists("seller_reviews", $context) && (isset($context["seller_reviews"]) ? $context["seller_reviews"] : null)))) {
                // line 31
                echo "        <li class=\"divider li_padding\"></li>";
            }
        }
        // line 34
        if ((array_key_exists("seller_product_reviews", $context) && (isset($context["seller_product_reviews"]) ? $context["seller_product_reviews"] : null))) {
            // line 35
            echo "      <li class=\"li_padding\">";
            // line 36
            if ((isset($context["journal_page"]) ? $context["journal_page"] : null)) {
                // line 37
                echo "          <ul style=\"display:inline-flex\">";
            } else {
                // line 39
                echo "          <ul style=\"display:inline-flex;margin-left:-8%;\">";
            }
            // line 41
            echo "          <li class=\"dropdown-header li_padding\" style=\"font-size:15px;min-width:60px;\"><b>";
            echo (isset($context["text_product"]) ? $context["text_product"] : null);
            echo "</b></li>
          <a href=\"";
            // line 42
            echo ((isset($context["view_all"]) ? $context["view_all"] : null) . "&tab=product");
            echo "\" style=\"margin:5px 0px;\"><span class=\"label label-warning span_height\">";
            echo (isset($context["product_stock_total"]) ? $context["product_stock_total"] : null);
            echo "</span>";
            echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
            echo "</a>
          <a href=\"";
            // line 43
            echo ((isset($context["view_all"]) ? $context["view_all"] : null) . "&tab=product");
            echo "\" style=\"margin:5px 5px;\"><span class=\"label label-success span_height\" style=\"margin-left:2%;\">";
            echo (isset($context["review_total"]) ? $context["review_total"] : null);
            echo "</span>";
            echo (isset($context["text_entry_review"]) ? $context["text_entry_review"] : null);
            echo "</a>
          <a href=\"";
            // line 44
            echo ((isset($context["view_all"]) ? $context["view_all"] : null) . "&tab=product");
            echo "\" style=\"margin:5px 0px;\"><span class=\"label label-danger span_height\" style=\"margin-left:2%;\">";
            echo (isset($context["approval_total"]) ? $context["approval_total"] : null);
            echo "</span>";
            echo (isset($context["text_approval"]) ? $context["text_approval"] : null);
            echo "</a>
        </ul>";
            // line 46
            if ((array_key_exists("seller_product_reviews", $context) && (isset($context["seller_product_reviews"]) ? $context["seller_product_reviews"] : null))) {
                // line 47
                echo "          <ul>";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["seller_product_reviews"]) ? $context["seller_product_reviews"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["seller_product_review"]) {
                    // line 49
                    echo "              <li class=\"li_padding\">";
                    echo $context["seller_product_review"];
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_product_review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "            <li class=\"li_padding\" style=\"display: block; overflow: auto;\"><a href=\"";
                echo ((isset($context["view_all"]) ? $context["view_all"] : null) . "&tab=product");
                echo "\">";
                echo (isset($context["text_view_all"]) ? $context["text_view_all"] : null);
                echo "</a></li>
          </ul>";
            }
            // line 54
            echo "      </li>";
            // line 55
            if ((array_key_exists("seller_reviews", $context) && (isset($context["seller_reviews"]) ? $context["seller_reviews"] : null))) {
                // line 56
                echo "        <li class=\"divider li_padding\"></li>";
            }
        }
        // line 59
        if ((array_key_exists("seller_reviews", $context) && (isset($context["seller_reviews"]) ? $context["seller_reviews"] : null))) {
            // line 60
            echo "      <li class=\"li_padding\">";
            // line 61
            if ((isset($context["journal_page"]) ? $context["journal_page"] : null)) {
                // line 62
                echo "          <ul style=\"display:inline-flex\">";
            } else {
                // line 64
                echo "          <ul style=\"display:inline-flex;margin-left:-8%;\">";
            }
            // line 66
            echo "          <li class=\"dropdown-header li_padding\" style=\"font-size:15px;min-width:60px;\"><b>";
            echo (isset($context["text_entry_seller"]) ? $context["text_entry_seller"] : null);
            echo "</b></li>
          <a href=\"";
            // line 67
            echo ((isset($context["view_all"]) ? $context["view_all"] : null) . "&tab=seller");
            echo "\" style=\"margin:5px 0px;\"><span class=\"label label-success span_height\">";
            echo (isset($context["seller_review_total"]) ? $context["seller_review_total"] : null);
            echo "</span>";
            echo (isset($context["text_entry_review"]) ? $context["text_entry_review"] : null);
            echo "</a>
        </ul>";
            // line 69
            if ((array_key_exists("seller_reviews", $context) && (isset($context["seller_reviews"]) ? $context["seller_reviews"] : null))) {
                // line 70
                echo "          <ul>";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["seller_reviews"]) ? $context["seller_reviews"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["seller_review"]) {
                    // line 72
                    echo "              <li class=\"li_padding\">";
                    echo $context["seller_review"];
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "            <li class=\"li_padding\" style=\"display: block; overflow: auto;\"><a href=\"";
                echo ((isset($context["view_all"]) ? $context["view_all"] : null) . "&tab=seller");
                echo "\">";
                echo (isset($context["text_view_all"]) ? $context["text_view_all"] : null);
                echo "</a></li>
          </ul>";
            }
            // line 77
            echo "      </li>";
        }
        // line 79
        if (((( !array_key_exists("seller_notifications", $context) &&  !array_key_exists("seller_product_reviews", $context)) &&  !array_key_exists("seller_reviews", $context)) || (( !(isset($context["seller_notifications"]) ? $context["seller_notifications"] : null) &&  !(isset($context["seller_product_reviews"]) ? $context["seller_product_reviews"] : null)) &&  !(isset($context["seller_reviews"]) ? $context["seller_reviews"] : null)))) {
            // line 80
            echo "      <center><h4>";
            echo (isset($context["text_no_notification"]) ? $context["text_no_notification"] : null);
            echo "</h4></center>";
        }
        // line 82
        echo "  </ul>
";
    }

    public function getTemplateName()
    {
        return "customerpartner/notification_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 82,  230 => 80,  228 => 79,  225 => 77,  217 => 74,  209 => 72,  205 => 71,  203 => 70,  201 => 69,  193 => 67,  188 => 66,  185 => 64,  182 => 62,  180 => 61,  178 => 60,  176 => 59,  172 => 56,  170 => 55,  168 => 54,  160 => 51,  152 => 49,  148 => 48,  146 => 47,  144 => 46,  136 => 44,  128 => 43,  120 => 42,  115 => 41,  112 => 39,  109 => 37,  107 => 36,  105 => 35,  103 => 34,  99 => 31,  97 => 30,  95 => 29,  87 => 26,  79 => 24,  75 => 23,  73 => 22,  71 => 21,  63 => 19,  55 => 18,  47 => 17,  43 => 16,  39 => 14,  37 => 13,  31 => 11,  19 => 1,);
    }
}
/* <style>*/
/*   .li_padding{*/
/*     padding: 4px;*/
/*     //font-family: monospace;*/
/*   }*/
/*   .span_height{*/
/*     height: 15px;*/
/*     margin: 5px;*/
/*   }*/
/* </style>*/
/* <a class="dropdown-toggle" data-toggle="dropdown"><span class="label label-danger pull-left" style="top:10px;left:18px;position: absolute;">{% if alerts is defined and alerts %}{{ alerts }}{%endif %}</span> <img src="view/image/notify.png" title="Notifications"></a>*/
/*   <ul class="dropdown-menu dropdown-menu-right" style="min-width:470px;">*/
/*     {% if seller_notifications is defined and seller_notifications %}*/
/*       <li class="li_padding">*/
/*         <ul style="display:inline-flex;margin-left:-8%;">*/
/*           <li class="dropdown-header li_padding" style="font-size:15px;min-width:60px;"><b>{{ text_order}}</b></li>*/
/*           <a href="{{ view_all}}" style="margin:5px 0px;"><span class="label label-warning span_height">{{ processing_status_total}}</span>{{ text_processing_status}}</a>*/
/*           <a href="{{ view_all}}" style="margin:5px 5px;"><span class="label label-success span_height" style="margin-left:2%;">{{ complete_status_total}}</span>{{ text_complete_status}}</a>*/
/*           <a href="{{ view_all}}" style="margin:5px 0px;"><span class="label label-danger span_height" style="margin-left:2%;">{{ return_total}}</span>{{ text_return}}</a>*/
/*         </ul>*/
/*         {% if seller_notifications is defined and seller_notifications %}*/
/*           <ul>*/
/*             {% for seller_notification in seller_notifications %}*/
/*               <li class="li_padding">{{ seller_notification}}</li>*/
/*             {% endfor %}*/
/*             <li class="li_padding" style="display: block; overflow: auto;"><a href="{{ view_all}}">{{ text_view_all}}</a></li>*/
/*           </ul>*/
/*         {% endif %}*/
/*       </li>*/
/*       {% if (seller_product_reviews is defined and seller_product_reviews) or (seller_reviews is defined and seller_reviews) %}*/
/*         <li class="divider li_padding"></li>*/
/*       {% endif %}*/
/*     {% endif %}*/
/*     {% if seller_product_reviews is defined and seller_product_reviews %}*/
/*       <li class="li_padding">*/
/*         {% if journal_page %}*/
/*           <ul style="display:inline-flex">*/
/*           {% else %}*/
/*           <ul style="display:inline-flex;margin-left:-8%;">*/
/*         {% endif %}*/
/*           <li class="dropdown-header li_padding" style="font-size:15px;min-width:60px;"><b>{{ text_product}}</b></li>*/
/*           <a href="{{ view_all ~ '&tab=product'}}" style="margin:5px 0px;"><span class="label label-warning span_height">{{ product_stock_total}}</span>{{ text_stock}}</a>*/
/*           <a href="{{ view_all ~ '&tab=product'}}" style="margin:5px 5px;"><span class="label label-success span_height" style="margin-left:2%;">{{ review_total}}</span>{{ text_entry_review}}</a>*/
/*           <a href="{{ view_all ~ '&tab=product'}}" style="margin:5px 0px;"><span class="label label-danger span_height" style="margin-left:2%;">{{ approval_total}}</span>{{ text_approval}}</a>*/
/*         </ul>*/
/*         {% if seller_product_reviews is defined and seller_product_reviews %}*/
/*           <ul>*/
/*             {% for seller_product_review in seller_product_reviews %}*/
/*               <li class="li_padding">{{ seller_product_review}}</li>*/
/*             {% endfor %}*/
/*             <li class="li_padding" style="display: block; overflow: auto;"><a href="{{ view_all ~ '&tab=product'}}">{{ text_view_all}}</a></li>*/
/*           </ul>*/
/*         {% endif %}*/
/*       </li>*/
/*       {% if seller_reviews is defined and seller_reviews %}*/
/*         <li class="divider li_padding"></li>*/
/*       {% endif %}*/
/*     {% endif %}*/
/*     {% if seller_reviews is defined and seller_reviews %}*/
/*       <li class="li_padding">*/
/*         {% if journal_page %}*/
/*           <ul style="display:inline-flex">*/
/*           {% else %}*/
/*           <ul style="display:inline-flex;margin-left:-8%;">*/
/*         {% endif %}*/
/*           <li class="dropdown-header li_padding" style="font-size:15px;min-width:60px;"><b>{{ text_entry_seller}}</b></li>*/
/*           <a href="{{ view_all ~ '&tab=seller'}}" style="margin:5px 0px;"><span class="label label-success span_height">{{ seller_review_total}}</span>{{ text_entry_review}}</a>*/
/*         </ul>*/
/*         {% if seller_reviews is defined and seller_reviews %}*/
/*           <ul>*/
/*             {% for seller_review in seller_reviews %}*/
/*               <li class="li_padding">{{ seller_review}}</li>*/
/*             {% endfor %}*/
/*             <li class="li_padding" style="display: block; overflow: auto;"><a href="{{ view_all ~ '&tab=seller'}}">{{ text_view_all}}</a></li>*/
/*           </ul>*/
/*         {% endif %}*/
/*       </li>*/
/*     {% endif %}*/
/*     {% if (seller_notifications is not defined and seller_product_reviews is not defined and seller_reviews is not defined) or ( not seller_notifications and not seller_product_reviews and not seller_reviews)  %}*/
/*       <center><h4>{{ text_no_notification}}</h4></center>*/
/*     {% endif %}*/
/*   </ul>*/
/* */
