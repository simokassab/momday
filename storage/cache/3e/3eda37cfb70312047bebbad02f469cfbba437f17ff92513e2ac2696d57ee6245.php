<?php

/* journal2/template/default/template/extension/shipping/aramexcalculator.twig */
class __TwigTemplate_f6339af15c5b74afb16c629b4d6b89f4afcfae4e39a79a0938b4834f5f3b5dbb extends Twig_Template
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
        if (((isset($context["aramexcalculator"]) ? $context["aramexcalculator"] : null) == 1)) {
            // line 2
            echo "    <button data-popup-open=\"popup-1\" type=\"button\" style=\"margin-top:10px; margin-bottom:10px;\"
            title=\"Check Aramex Shipping Rate\"
            class=\"btn btn-primary btn-lg btn-block aramexcalculator\"
    >
        <span><span>Check Aramex Shipping Rate</span></span>
    </button>
    <div class=\"aramex_popup\" style=\"display:none;\" data-popup=\"popup-1\">
        <div class=\"aramex_popup-inner\">
            <form method=\"post\" class=\"form-horizontal\" action=\"\">
                <h2 style=\"color: #EA7601;\">Check Aramex Shipping Rate</h2>
                <h3>Shipment Destination</h3>
                <div class=\"form-group\"></div>
                <div class=\"form-group\">
                    <label for=\"destination_country\" class=\" col-sm-3 control-label\">Country</label>
                    <div class=\"col-sm-9\">
                        <select name=\"destination_country\" class=\"form-control\" id=\"destination_country\">";
            // line 18
            if ((twig_length_filter($this->env, (isset($context["countries"]) ? $context["countries"] : null)) > 0)) {
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
                foreach ($context['_seq'] as $context["key"] => $context["_country"]) {
                    // line 20
                    echo "                                    <option value=\"";
                    echo $context["key"];
                    echo "\"";
                    // line 21
                    if ((isset($context["customer_country"]) ? $context["customer_country"] : null)) {
                        // line 22
                        echo ((((isset($context["customer_country"]) ? $context["customer_country"] : null) == $context["key"])) ? ("selected=\"selected\"") : (""));
                    }
                    // line 24
                    echo "                                    >";
                    // line 25
                    echo $context["_country"];
                    echo "
                                    </option>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['_country'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 29
            echo "                        </select>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\">City</label>
                    <div class=\"col-sm-9\">
                        <input name=\"destination_city\" class=\"form-control\" autocomplete=\"off\" id=\"destination_city\"
                               value=\"";
            // line 36
            echo (((isset($context["customer_city"]) ? $context["customer_city"] : null)) ? ((isset($context["customer_city"]) ? $context["customer_city"] : null)) : (""));
            echo "\"/>
                        <div id=\"destination_city_loading_autocomplete\" class=\"loading_autocomplete\"
                             style=\"display:none;\">
                            <img style=\"height:30px;\"
                                 src=\"";
            // line 40
            echo (isset($context["aramex_loader"]) ? $context["aramex_loader"] : null);
            echo "\"
                                 alt=\"";
            // line 41
            echo "Loading cities...";
            echo "\"
                                 title=\"";
            // line 42
            echo "Loading cities...";
            echo "\"
                                 class=\"v-middle\"/>
                        </div>
                    </div>

                </div>
                <div class=\"form-group\">
                    <div class=\"field fl width-270\">
                        <label class=\"col-sm-3 control-label\">Zip code</label>
                        <div class=\"col-sm-9\">
                            <input name=\"destination_zipcode\" class=\"form-control\" id=\"destination_zipcode\"
                                   value=\"";
            // line 53
            echo (((isset($context["customer_postcode"]) ? $context["customer_postcode"] : null)) ? ((isset($context["customer_postcode"]) ? $context["customer_postcode"] : null)) : (""));
            echo "\"/>
                        </div>
                    </div>
                </div>
                <div class=\"aramex_field aramex_result_block\">
                    <h3 style=\"display:none; color: #EA7601;\">Result</h3>
                    <div class=\"aramex_result mar-10\">
                    </div>
                    <span class=\"aramex-please-wait\" id=\"payment-please-wait\" style=\"display:none;\">
                        <img src=\"";
            // line 62
            echo (isset($context["preloader"]) ? $context["preloader"] : null);
            echo "\"
                             alt=\"";
            // line 63
            echo "Please wait...";
            echo "\"
                             title=\"";
            // line 64
            echo "Please wait...";
            echo "\"
                             class=\"v-middle\"/>";
            // line 65
            echo "Please wait...";
            echo "
                    </span>
                </div>
                <div class=\"form-group\">
                    <button name=\"aramex_calc_rate_submit\" class=\"btn btn-primary btn-lg btn-block\" type=\"button\"
                            id=\"aramex_calc_rate_submit\"
                            onclick=\"sendAramexRequest('";
            // line 71
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "')\">Calculate
                    </button>
                </div>
            </form>
            <a class=\"aramex_popup-close\" data-popup-close=\"popup-1\" href=\"#\">x</a>
        </div>
    </div>
    <script>
        function sendAramexRequest() {
            var chk_city = jQuery('#destination_city').val();
            var chk_postcode = jQuery('#destination_zipcode').val();
            var country_code = jQuery(\"#destination_country\").val();
            var currency = \"";
            // line 83
            echo (isset($context["currency"]) ? $context["currency"] : null);
            echo "\";
            var product_id = \"";
            // line 84
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "\";
            jQuery('.aramex_result_block h3').css(\"display\", \"none\");
            jQuery('.aramex-please-wait').css(\"display\", \"block\");
            jQuery('.aramex_result').css(\"display\", \"none\");

            jQuery.ajax({
                url: \"";
            // line 90
            echo (isset($context["aramexcalculator_rate"]) ? $context["aramexcalculator_rate"] : null);
            echo "\",
                data: {
                    city: chk_city,
                    post_code: chk_postcode,
                    country_code: country_code,
                    product_id: product_id,
                    currency: currency
                },
                type: 'Post',
                success: function (result) {
                    var message = \"\";
                    var response = jQuery.parseJSON(result);
                    if (response.error) {
                        message = \"<p style='color:red;'>\" + response.error + \"</p>\";
                    } else {
                        var error = true;
                        jQuery.each(response, function (index, value) {
                            if (typeof value.label != 'undefined') {
                                message = message + \"<p style='color: rgb(234, 118, 1);'>\" + value.label + \": \" + value.amount + \" \" + value.currency + \"</p>\";
                                error = false;
                            }
                        });
                        if(error == true){
                            jQuery.each(response, function (index, value) {
                                message = \"<p style='color:red;'>\" + value + \"</p>\";
                            });
                        }
                    }
                    jQuery('.aramex_result_block h3').css(\"display\", \"block\");
                    jQuery('.aramex_result').css(\"display\", \"block\").html(message);
                    jQuery('.aramex-please-wait').css(\"display\", \"none\");

                }
            });
        }

        (function (\$) {
            \$(document).ready(function () {
                \$(function () {
                    //----- OPEN
                    \$('[data-popup-open]').on('click', function (e) {
                        var targeted_popup_class = \$(this).attr('data-popup-open');
                        \$('[data-popup=\"' + targeted_popup_class + '\"]').fadeIn(350);
                        e.preventDefault();
                    });

                    //----- CLOSE
                    \$('[data-popup-close]').on('click', function (e) {
                        var targeted_popup_class = \$(this).attr('data-popup-close');
                        \$('[data-popup=\"' + targeted_popup_class + '\"]').fadeOut(350);
                        e.preventDefault();
                    });
                });

                var type = '";
            // line 144
            echo (isset($context["type"]) ? $context["type"] : null);
            echo "';
                var shippingAramexCitiesObj;
                var shipping_aramex_cities = \"\";

                /* get Aramex sities */
                shippingAramexCitiesObj = AutoSearchControls(type, shipping_aramex_cities);
                jQuery( type  ).find(\"select[name^='destination_country']\").change(function () {
                    getAllCitiesJson( type , shippingAramexCitiesObj);
                });
                getAllCitiesJson(type, shippingAramexCitiesObj);

                function AutoSearchControls(type, search_city) {
                    return jQuery( type ).find(\"input[name^='destination_city']\")
                        .autocomplete({
                            /*source: search_city,*/
                            minLength: 3,
                            scroll: true,
                            source: function (req, responseFn) {
                                var re = \$.ui.autocomplete.escapeRegex(req.term);
                                var matcher = new RegExp(\"^\" + re, \"i\");
                                var a = jQuery.grep(search_city, function (item, index) {
                                    return matcher.test(item);
                                });
                                responseFn(a);
                            },
                            search: function (event, ui) {
                                /* open initializer */
                                jQuery('.checkout-index-index .ui-autocomplete').css('display', 'none');
                                jQuery(type + ' .loading_autocomplete').css('display', 'block');
                            },
                            response: function (event, ui) {
                                var temp_arr = [];
                                jQuery(ui.content).each(function (i, v) {
                                    temp_arr.push(v.value);
                                });

                                jQuery(type + ' .loading_autocomplete').css('display', 'none');
                                return temp_arr;
                            }
                        });
                }

                function getAllCitiesJson(type, aramexCitiesObj) {
                    var country_code = jQuery( type ).find(\"select[name^='destination_country']\").val();
                    var url_check = \"";
            // line 188
            echo (isset($context["aramex_searchautocities"]) ? $context["aramex_searchautocities"] : null);
            echo "&country_code=\" + country_code;
                    shipping_aramex_cities_temp = '';
                    aramexCitiesObj.autocomplete(\"option\", \"source\", url_check);
                }
            });
        })(jQuery);
    </script>


    <style>
        .ui-autocomplete {
            z-index: 99999999;
        }

        .content {
            max-width: 800px;
            width: 100%;
            margin: 0px auto;
            margin-bottom: 60px;
        }

        /* Outer */
        .aramex_popup {
            width: 100%;
            height: 100%;
            display: none;
            position: fixed;
            top: 0px;
            left: 0px;
            background: rgba(0, 0, 0, 0.75);
            z-index: 9999;
        }

        /* Inner */
        .aramex_popup-inner {
            padding: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 1);
            border-radius: 3px;
            background: #fff;
        }

        /* Close Button */
        .aramex_popup-close {
            width: 30px;
            height: 30px;
            padding-top: 4px;
            display: inline-block;
            position: absolute;
            top: 0px;
            right: 0px;
            -webkit-transform: translate(50%, -50%);
            transform: translate(50%, -50%);
            border-radius: 1000px;
            background: rgba(0, 0, 0, 0.8);
            font-family: Arial, Sans-Serif;
            font-size: 20px;
            text-align: center;
            line-height: 100%;
            color: #fff;
        }

        .aramex_popup-close:hover {
            -webkit-transform: translate(50%, -50%) rotate(180deg);
            transform: translate(50%, -50%) rotate(180deg);
            background: rgba(0, 0, 0, 1);
            text-decoration: none;
        }

        .aramex_popup .aramex_field {
            padding: 10px;
        }

        .aramex_popup select {
            padding: 5px;
        }

        .aramex_popup-inner button, .aramex_popup-inner input, .aramex_popup-inner select, .aramex_popup-inner table, .aramex_popup-inner textarea {
            font-family: Arial !important;
        }

    </style>";
        }
    }

    public function getTemplateName()
    {
        return "journal2/template/default/template/extension/shipping/aramexcalculator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 188,  220 => 144,  163 => 90,  154 => 84,  150 => 83,  135 => 71,  126 => 65,  122 => 64,  118 => 63,  114 => 62,  102 => 53,  88 => 42,  84 => 41,  80 => 40,  73 => 36,  64 => 29,  55 => 25,  53 => 24,  50 => 22,  48 => 21,  44 => 20,  40 => 19,  38 => 18,  21 => 2,  19 => 1,);
    }
}
/* {% if aramexcalculator  ==  1 %}*/
/*     <button data-popup-open="popup-1" type="button" style="margin-top:10px; margin-bottom:10px;"*/
/*             title="Check Aramex Shipping Rate"*/
/*             class="btn btn-primary btn-lg btn-block aramexcalculator"*/
/*     >*/
/*         <span><span>Check Aramex Shipping Rate</span></span>*/
/*     </button>*/
/*     <div class="aramex_popup" style="display:none;" data-popup="popup-1">*/
/*         <div class="aramex_popup-inner">*/
/*             <form method="post" class="form-horizontal" action="">*/
/*                 <h2 style="color: #EA7601;">Check Aramex Shipping Rate</h2>*/
/*                 <h3>Shipment Destination</h3>*/
/*                 <div class="form-group"></div>*/
/*                 <div class="form-group">*/
/*                     <label for="destination_country" class=" col-sm-3 control-label">Country</label>*/
/*                     <div class="col-sm-9">*/
/*                         <select name="destination_country" class="form-control" id="destination_country">*/
/*                             {% if countries|length > 0  %}*/
/*                                 {% for key, _country in countries %}*/
/*                                     <option value="{{ key }}"*/
/*                                     {% if customer_country %}*/
/*                                         {{ customer_country  ==  key ? 'selected="selected"' : "" }}*/
/*                                        {% endif %}*/
/*                                     >*/
/*                                     {{ _country}}*/
/*                                     </option>*/
/*                                 {% endfor %}*/
/*                             {% endif %}*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-3 control-label">City</label>*/
/*                     <div class="col-sm-9">*/
/*                         <input name="destination_city" class="form-control" autocomplete="off" id="destination_city"*/
/*                                value="{{ customer_city ? customer_city : '' }}"/>*/
/*                         <div id="destination_city_loading_autocomplete" class="loading_autocomplete"*/
/*                              style="display:none;">*/
/*                             <img style="height:30px;"*/
/*                                  src="{{ aramex_loader }}"*/
/*                                  alt="{{ 'Loading cities...' }}"*/
/*                                  title="{{ 'Loading cities...' }}"*/
/*                                  class="v-middle"/>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <div class="field fl width-270">*/
/*                         <label class="col-sm-3 control-label">Zip code</label>*/
/*                         <div class="col-sm-9">*/
/*                             <input name="destination_zipcode" class="form-control" id="destination_zipcode"*/
/*                                    value="{{ customer_postcode ? customer_postcode : '' }}"/>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="aramex_field aramex_result_block">*/
/*                     <h3 style="display:none; color: #EA7601;">Result</h3>*/
/*                     <div class="aramex_result mar-10">*/
/*                     </div>*/
/*                     <span class="aramex-please-wait" id="payment-please-wait" style="display:none;">*/
/*                         <img src="{{ preloader }}"*/
/*                              alt="{{'Please wait...' }}"*/
/*                              title="{{'Please wait...' }}"*/
/*                              class="v-middle"/> {{'Please wait...' }}*/
/*                     </span>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <button name="aramex_calc_rate_submit" class="btn btn-primary btn-lg btn-block" type="button"*/
/*                             id="aramex_calc_rate_submit"*/
/*                             onclick="sendAramexRequest('{{ product_id }}')">Calculate*/
/*                     </button>*/
/*                 </div>*/
/*             </form>*/
/*             <a class="aramex_popup-close" data-popup-close="popup-1" href="#">x</a>*/
/*         </div>*/
/*     </div>*/
/*     <script>*/
/*         function sendAramexRequest() {*/
/*             var chk_city = jQuery('#destination_city').val();*/
/*             var chk_postcode = jQuery('#destination_zipcode').val();*/
/*             var country_code = jQuery("#destination_country").val();*/
/*             var currency = "{{ currency }}";*/
/*             var product_id = "{{ product_id }}";*/
/*             jQuery('.aramex_result_block h3').css("display", "none");*/
/*             jQuery('.aramex-please-wait').css("display", "block");*/
/*             jQuery('.aramex_result').css("display", "none");*/
/* */
/*             jQuery.ajax({*/
/*                 url: "{{ aramexcalculator_rate }}",*/
/*                 data: {*/
/*                     city: chk_city,*/
/*                     post_code: chk_postcode,*/
/*                     country_code: country_code,*/
/*                     product_id: product_id,*/
/*                     currency: currency*/
/*                 },*/
/*                 type: 'Post',*/
/*                 success: function (result) {*/
/*                     var message = "";*/
/*                     var response = jQuery.parseJSON(result);*/
/*                     if (response.error) {*/
/*                         message = "<p style='color:red;'>" + response.error + "</p>";*/
/*                     } else {*/
/*                         var error = true;*/
/*                         jQuery.each(response, function (index, value) {*/
/*                             if (typeof value.label != 'undefined') {*/
/*                                 message = message + "<p style='color: rgb(234, 118, 1);'>" + value.label + ": " + value.amount + " " + value.currency + "</p>";*/
/*                                 error = false;*/
/*                             }*/
/*                         });*/
/*                         if(error == true){*/
/*                             jQuery.each(response, function (index, value) {*/
/*                                 message = "<p style='color:red;'>" + value + "</p>";*/
/*                             });*/
/*                         }*/
/*                     }*/
/*                     jQuery('.aramex_result_block h3').css("display", "block");*/
/*                     jQuery('.aramex_result').css("display", "block").html(message);*/
/*                     jQuery('.aramex-please-wait').css("display", "none");*/
/* */
/*                 }*/
/*             });*/
/*         }*/
/* */
/*         (function ($) {*/
/*             $(document).ready(function () {*/
/*                 $(function () {*/
/*                     //----- OPEN*/
/*                     $('[data-popup-open]').on('click', function (e) {*/
/*                         var targeted_popup_class = $(this).attr('data-popup-open');*/
/*                         $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);*/
/*                         e.preventDefault();*/
/*                     });*/
/* */
/*                     //----- CLOSE*/
/*                     $('[data-popup-close]').on('click', function (e) {*/
/*                         var targeted_popup_class = $(this).attr('data-popup-close');*/
/*                         $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);*/
/*                         e.preventDefault();*/
/*                     });*/
/*                 });*/
/* */
/*                 var type = '{{ type }}';*/
/*                 var shippingAramexCitiesObj;*/
/*                 var shipping_aramex_cities = "";*/
/* */
/*                 /* get Aramex sities *//* */
/*                 shippingAramexCitiesObj = AutoSearchControls(type, shipping_aramex_cities);*/
/*                 jQuery( type  ).find("select[name^='destination_country']").change(function () {*/
/*                     getAllCitiesJson( type , shippingAramexCitiesObj);*/
/*                 });*/
/*                 getAllCitiesJson(type, shippingAramexCitiesObj);*/
/* */
/*                 function AutoSearchControls(type, search_city) {*/
/*                     return jQuery( type ).find("input[name^='destination_city']")*/
/*                         .autocomplete({*/
/*                             /*source: search_city,*//* */
/*                             minLength: 3,*/
/*                             scroll: true,*/
/*                             source: function (req, responseFn) {*/
/*                                 var re = $.ui.autocomplete.escapeRegex(req.term);*/
/*                                 var matcher = new RegExp("^" + re, "i");*/
/*                                 var a = jQuery.grep(search_city, function (item, index) {*/
/*                                     return matcher.test(item);*/
/*                                 });*/
/*                                 responseFn(a);*/
/*                             },*/
/*                             search: function (event, ui) {*/
/*                                 /* open initializer *//* */
/*                                 jQuery('.checkout-index-index .ui-autocomplete').css('display', 'none');*/
/*                                 jQuery(type + ' .loading_autocomplete').css('display', 'block');*/
/*                             },*/
/*                             response: function (event, ui) {*/
/*                                 var temp_arr = [];*/
/*                                 jQuery(ui.content).each(function (i, v) {*/
/*                                     temp_arr.push(v.value);*/
/*                                 });*/
/* */
/*                                 jQuery(type + ' .loading_autocomplete').css('display', 'none');*/
/*                                 return temp_arr;*/
/*                             }*/
/*                         });*/
/*                 }*/
/* */
/*                 function getAllCitiesJson(type, aramexCitiesObj) {*/
/*                     var country_code = jQuery( type ).find("select[name^='destination_country']").val();*/
/*                     var url_check = "{{ aramex_searchautocities }}&country_code=" + country_code;*/
/*                     shipping_aramex_cities_temp = '';*/
/*                     aramexCitiesObj.autocomplete("option", "source", url_check);*/
/*                 }*/
/*             });*/
/*         })(jQuery);*/
/*     </script>*/
/* */
/* */
/*     <style>*/
/*         .ui-autocomplete {*/
/*             z-index: 99999999;*/
/*         }*/
/* */
/*         .content {*/
/*             max-width: 800px;*/
/*             width: 100%;*/
/*             margin: 0px auto;*/
/*             margin-bottom: 60px;*/
/*         }*/
/* */
/*         /* Outer *//* */
/*         .aramex_popup {*/
/*             width: 100%;*/
/*             height: 100%;*/
/*             display: none;*/
/*             position: fixed;*/
/*             top: 0px;*/
/*             left: 0px;*/
/*             background: rgba(0, 0, 0, 0.75);*/
/*             z-index: 9999;*/
/*         }*/
/* */
/*         /* Inner *//* */
/*         .aramex_popup-inner {*/
/*             padding: 40px;*/
/*             position: absolute;*/
/*             top: 50%;*/
/*             left: 50%;*/
/*             -webkit-transform: translate(-50%, -50%);*/
/*             transform: translate(-50%, -50%);*/
/*             box-shadow: 0px 2px 6px rgba(0, 0, 0, 1);*/
/*             border-radius: 3px;*/
/*             background: #fff;*/
/*         }*/
/* */
/*         /* Close Button *//* */
/*         .aramex_popup-close {*/
/*             width: 30px;*/
/*             height: 30px;*/
/*             padding-top: 4px;*/
/*             display: inline-block;*/
/*             position: absolute;*/
/*             top: 0px;*/
/*             right: 0px;*/
/*             -webkit-transform: translate(50%, -50%);*/
/*             transform: translate(50%, -50%);*/
/*             border-radius: 1000px;*/
/*             background: rgba(0, 0, 0, 0.8);*/
/*             font-family: Arial, Sans-Serif;*/
/*             font-size: 20px;*/
/*             text-align: center;*/
/*             line-height: 100%;*/
/*             color: #fff;*/
/*         }*/
/* */
/*         .aramex_popup-close:hover {*/
/*             -webkit-transform: translate(50%, -50%) rotate(180deg);*/
/*             transform: translate(50%, -50%) rotate(180deg);*/
/*             background: rgba(0, 0, 0, 1);*/
/*             text-decoration: none;*/
/*         }*/
/* */
/*         .aramex_popup .aramex_field {*/
/*             padding: 10px;*/
/*         }*/
/* */
/*         .aramex_popup select {*/
/*             padding: 5px;*/
/*         }*/
/* */
/*         .aramex_popup-inner button, .aramex_popup-inner input, .aramex_popup-inner select, .aramex_popup-inner table, .aramex_popup-inner textarea {*/
/*             font-family: Arial !important;*/
/*         }*/
/* */
/*     </style>*/
/* {% endif %}*/
