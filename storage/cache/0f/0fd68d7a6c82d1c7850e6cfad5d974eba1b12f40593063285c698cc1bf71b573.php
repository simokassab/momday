<?php

/* default/template/customerpartner/sellerprofile.twig */
class __TwigTemplate_326e772043f79ea86a4ffa55a1c3b1b68799fb1ea186f2d7d2d787f8ad3fcf1c extends Twig_Template
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
        if ((array_key_exists("showSellerInfo", $context) && (isset($context["showSellerInfo"]) ? $context["showSellerInfo"] : null))) {
            // line 2
            echo "<style>
  #wk_seller_info_container{
    width: 100%;
    margin: 10px 0;
    /*padding: 20px;*/
    /*background-color: #eee;*/
  }

  #wk_seller_info_profpic{
    margin-right: 20px;
    display: inline-block;
    width: 80px;
    height: 80px;
  }

  #wk_seller_info_box{
    display: inline-block;
  }

  #wk_seller_info_rating{
    position: relative;
    cursor: pointer;
  }

  #wk_seller_info_rating > .fa{
    font-size: 10px;
  }

  #wk_seller_info_rating > .fa > .fa-stack-1x {
      color:#3B9911;
  }

  #wk_seller_info_rating_details{
    position: absolute;
    min-width: 250px;
    height: auto;
    background: #FFFFFF;
    top: 23px;
    padding: 20px;
    box-shadow: 0 2px 8px 2px #868282;
    display: none;
    z-index: 100000;
  }

  .wk_rating_details_box > .wk_rating_details > .fa{
    font-size: 10px;
  }

  .wk_rating_details_box > .wk_rating_details > .fa > .fa-stack-1x {
      color:#3B9911;
  }

  .wk_rating_details{
    padding-left: 5px;
  }

  @media only screen and (max-width: 700px) {

      #wk_seller_info_rating_details{

          min-width: 200px;
          /*height: 100px;*/
      }
  }

</style>

<div id=\"wk_seller_info_container\">
  <div style=\"padding: 10px;background-color: #EFEFEF;border-left: 8px solid;\">
    <div id=\"wk_seller_info_profpic\">
      <img src=\"";
            // line 72
            echo (isset($context["info_image"]) ? $context["info_image"] : null);
            echo "\" width=\"100%\" height=\"100%\" style=\"vertical-align:baseline;\">
    </div>
    <div id=\"wk_seller_info_box\">
      <h4 style=\"margin-bottom: 20px;margin-top: 0px;font-size: 13px;\"><b>";
            // line 75
            echo (isset($context["info_heading_text"]) ? $context["info_heading_text"] : null);
            echo "</b></h4>
      <a href=\"";
            // line 76
            echo (isset($context["loadProfile"]) ? $context["loadProfile"] : null);
            echo "\"><p style=\"margin:0; line-height: 15px;\">";
            echo (isset($context["info_name"]) ? $context["info_name"] : null);
            echo "</p></a>";
            // line 78
            if ((array_key_exists("informations", $context) && (isset($context["informations"]) ? $context["informations"] : null))) {
                // line 79
                echo "        <h4 style=\"margin-bottom: 0px;margin-top: 5px;font-size: 13px;\"><b>";
                echo (isset($context["text_seller_information"]) ? $context["text_seller_information"] : null);
                echo "</b></h4>";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                    // line 81
                    echo "          <div class=\"text-container\">
            <a href=\"";
                    // line 82
                    echo $this->getAttribute($context["information"], "href", array(), "array");
                    echo "\" target=\"_blank\">";
                    echo $this->getAttribute($context["information"], "title", array(), "array");
                    echo "</a>
          </div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 86
            echo "
      <div id=\"wk_seller_info_rating\">";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 89
                if (((isset($context["info_feedback_total"]) ? $context["info_feedback_total"] : null) < $context["i"])) {
                    // line 90
                    echo "        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    // line 92
                    echo "        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            if ((array_key_exists("review_fields", $context) && (isset($context["review_fields"]) ? $context["review_fields"] : null))) {
                // line 97
                echo "        <div id=\"wk_seller_info_rating_details\">
          <i class=\"fa fa-caret-up\" aria-hidden=\"true\" style=\"color: #FFFFFF;position: absolute;top: -14px;font-size: 25px;\"></i>";
                // line 99
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["review_fields"]) ? $context["review_fields"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["review_field"]) {
                    // line 100
                    echo "              <div class=\"wk_rating_details_box\">
                <div style=\"display: inline-block;width: 25%;\">";
                    // line 101
                    echo $this->getAttribute($context["review_field"], "field_name", array(), "array");
                    echo "</div>
                <div class=\"wk_rating_details\" style=\"display: inline-block;font-size: 10px;\">";
                    // line 103
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 104
                        if (($this->getAttribute($context["review_field"], "field_value", array(), "array") < $context["i"])) {
                            // line 105
                            echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                        } else {
                            // line 107
                            echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 110
                    echo "                  <span>(";
                    echo ((($this->getAttribute($context["review_field"], "field_value", array(), "array")) ? ($this->getAttribute($context["review_field"], "field_value", array(), "array")) : (0)) . "/5");
                    echo ")</span>
                </div>
              </div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review_field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "              </div>";
            }
            // line 116
            echo "      </div>
      <p style=\"margin:0;line-height: 15px;\">";
            // line 117
            echo (isset($context["info_product_text"]) ? $context["info_product_text"] : null);
            echo "<span>";
            echo (isset($context["info_total_products"]) ? $context["info_total_products"] : null);
            echo "</span></p>
    </div>
  </div>
</div>

<script>
  \$(\"#wk_seller_info_rating, #wk_seller_info_rating_details\").on('mouseover', function(){
      \$(\"#wk_seller_info_rating_details\").show();
  });

  \$(\"#wk_seller_info_rating, #wk_seller_info_rating_details\").on('mouseout', function(){
      \$(\"#wk_seller_info_rating_details\").hide();
  });
</script>";
        }
    }

    public function getTemplateName()
    {
        return "default/template/customerpartner/sellerprofile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 117,  196 => 116,  193 => 114,  183 => 110,  176 => 107,  173 => 105,  171 => 104,  167 => 103,  163 => 101,  160 => 100,  156 => 99,  153 => 97,  151 => 96,  144 => 92,  141 => 90,  139 => 89,  135 => 88,  132 => 86,  121 => 82,  118 => 81,  114 => 80,  110 => 79,  108 => 78,  103 => 76,  99 => 75,  93 => 72,  21 => 2,  19 => 1,);
    }
}
/* {% if showSellerInfo is defined and showSellerInfo %}*/
/* <style>*/
/*   #wk_seller_info_container{*/
/*     width: 100%;*/
/*     margin: 10px 0;*/
/*     /*padding: 20px;*//* */
/*     /*background-color: #eee;*//* */
/*   }*/
/* */
/*   #wk_seller_info_profpic{*/
/*     margin-right: 20px;*/
/*     display: inline-block;*/
/*     width: 80px;*/
/*     height: 80px;*/
/*   }*/
/* */
/*   #wk_seller_info_box{*/
/*     display: inline-block;*/
/*   }*/
/* */
/*   #wk_seller_info_rating{*/
/*     position: relative;*/
/*     cursor: pointer;*/
/*   }*/
/* */
/*   #wk_seller_info_rating > .fa{*/
/*     font-size: 10px;*/
/*   }*/
/* */
/*   #wk_seller_info_rating > .fa > .fa-stack-1x {*/
/*       color:#3B9911;*/
/*   }*/
/* */
/*   #wk_seller_info_rating_details{*/
/*     position: absolute;*/
/*     min-width: 250px;*/
/*     height: auto;*/
/*     background: #FFFFFF;*/
/*     top: 23px;*/
/*     padding: 20px;*/
/*     box-shadow: 0 2px 8px 2px #868282;*/
/*     display: none;*/
/*     z-index: 100000;*/
/*   }*/
/* */
/*   .wk_rating_details_box > .wk_rating_details > .fa{*/
/*     font-size: 10px;*/
/*   }*/
/* */
/*   .wk_rating_details_box > .wk_rating_details > .fa > .fa-stack-1x {*/
/*       color:#3B9911;*/
/*   }*/
/* */
/*   .wk_rating_details{*/
/*     padding-left: 5px;*/
/*   }*/
/* */
/*   @media only screen and (max-width: 700px) {*/
/* */
/*       #wk_seller_info_rating_details{*/
/* */
/*           min-width: 200px;*/
/*           /*height: 100px;*//* */
/*       }*/
/*   }*/
/* */
/* </style>*/
/* */
/* <div id="wk_seller_info_container">*/
/*   <div style="padding: 10px;background-color: #EFEFEF;border-left: 8px solid;">*/
/*     <div id="wk_seller_info_profpic">*/
/*       <img src="{{ info_image }}" width="100%" height="100%" style="vertical-align:baseline;">*/
/*     </div>*/
/*     <div id="wk_seller_info_box">*/
/*       <h4 style="margin-bottom: 20px;margin-top: 0px;font-size: 13px;"><b>{{ info_heading_text }}</b></h4>*/
/*       <a href="{{ loadProfile }}"><p style="margin:0; line-height: 15px;">{{ info_name }}</p></a>*/
/* */
/*       {% if informations is defined and informations %}*/
/*         <h4 style="margin-bottom: 0px;margin-top: 5px;font-size: 13px;"><b>{{ text_seller_information }}</b></h4>*/
/*         {% for information in informations %}*/
/*           <div class="text-container">*/
/*             <a href="{{ information['href'] }}" target="_blank">{{ information['title'] }}</a>*/
/*           </div>*/
/*         {% endfor %}*/
/*       {% endif %}*/
/* */
/*       <div id="wk_seller_info_rating">*/
/*         {% for i in 1..5 %}*/
/*         {% if info_feedback_total < i %}*/
/*         <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/*         {% else %}*/
/*         <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/*         {% endif %}*/
/*         {% endfor %}*/
/* */
/*         {% if review_fields is defined and review_fields %}*/
/*         <div id="wk_seller_info_rating_details">*/
/*           <i class="fa fa-caret-up" aria-hidden="true" style="color: #FFFFFF;position: absolute;top: -14px;font-size: 25px;"></i>*/
/*             {% for review_field in review_fields %}*/
/*               <div class="wk_rating_details_box">*/
/*                 <div style="display: inline-block;width: 25%;">{{ review_field['field_name'] }}</div>*/
/*                 <div class="wk_rating_details" style="display: inline-block;font-size: 10px;">*/
/*                   {% for i in 1..5 %}*/
/*                   {% if review_field['field_value'] < i %}*/
/*                   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/*                   {% else %}*/
/*                   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/*                   {% endif %}*/
/*                   {% endfor %}*/
/*                   <span>({{ (review_field['field_value'] ? review_field['field_value'] : 0) ~ '/5' }})</span>*/
/*                 </div>*/
/*               </div>*/
/*               {% endfor %}*/
/*               </div>*/
/*               {% endif %}*/
/*       </div>*/
/*       <p style="margin:0;line-height: 15px;">{{ info_product_text }}<span>{{ info_total_products }}</span></p>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <script>*/
/*   $("#wk_seller_info_rating, #wk_seller_info_rating_details").on('mouseover', function(){*/
/*       $("#wk_seller_info_rating_details").show();*/
/*   });*/
/* */
/*   $("#wk_seller_info_rating, #wk_seller_info_rating_details").on('mouseout', function(){*/
/*       $("#wk_seller_info_rating_details").hide();*/
/*   });*/
/* </script>*/
/* {% endif %}*/
/* */
