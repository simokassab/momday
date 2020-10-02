<?php

/* journal2/template/momday/celebrities.twig */
class __TwigTemplate_544163abb9065a5cc6cb47eb2c5cfb632e27a7cc2594014a1522bbeae10ba347 extends Twig_Template
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
        echo "<style type=\"text/css\" xmlns=\"http://www.w3.org/1999/html\">
    .full-width {
        width: 100%;
    }

    /*.cel-img {*/
    /*width: 40%;*/
    /*max-height: 10%;*/
    /*}*/
    .cel-img {
        width: 280px;
        height: 300px;
        border: 1px solid lightgrey;
    }
    .cel-img {
        width: 100%;
        height: auto;
    }

    .cel-img-border {
        border: 1px solid lightgrey;
        transition: 1s
    }

    .cel-text {
        color: #3a3a3a;
        text-align: center;
        font-size: 18px;
    }

    .caption-border {
        width: 280px;
        width: 100%;
        border: 1px solid black;
        border-top: 0px
    }

    .top-pad {
        padding: 20px 0 0 0;
    }
    .right-pad {
        padding: 0px 8px 0 0;
    }
    .bottom-pad {
        padding: 0 0 20px 0;
    }
    .left-pad {
        padding: 0 0 0 8px;
    }
    .bottom-left-right-pad {
        padding: 0 4px 20px 4px;
    }
    .bottom-left-mar1gin {
        margin-bottom: 20px;
        margin-left: 4px;
        margin-right: 4px;
    }
    .no-pad{
        padding: 0 0 0 0;
    }
    .top-bottom-pad{
        padding: 20px 0 20px 0;
    }
    .align-right{
        align: right;
    }

    .link-text {color: black;}
    .cel-text:hover {color: goldenrod;}

    .div-hover{}

    .cel-img-border:hover {
        box-shadow: 0px 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        transition: 1s;
    }

    .float_right_en_left_ar{
        float:right
    }
    html[dir=\"rtl\"] .float_right_en_left_ar{
        float:left
    }

    .float_left_en_right_ar{
        float:left
    }
    html[dir=\"rtl\"] .float_left_en_right_ar{
        float:right
    }

</style>";
        // line 96
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<link type=\"text/css\" href=\"catalog/view/theme/journal2/stylesheet/MP/journal2.css\" rel=\"stylesheet\"  />
<div id=\"container\" class=\"container j-container\">
    <ul class=\"breadcrumb\">";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 101
            echo "            <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "    </ul>";
        // line 105
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 106
            echo "        <div class=\"alert alert-danger warning\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>";
        }
        // line 108
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 109
            echo "        <div class=\"alert alert-success success\"><i class=\"fa fa-check-circle\"> </i>";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "</div>";
        }
        // line 111
        echo "
    <div class=\"row\">";
        // line 112
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        // line 113
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 114
            $context["class"] = "col-sm-6";
        } elseif ((        // line 115
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 116
            $context["class"] = "col-sm-9";
        } else {
            // line 118
            $context["class"] = "col-sm-12";
        }
        // line 120
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
        <div id=\"content\" class=\"";
        // line 121
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        // line 122
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
            <h1 class=\"heading-title\" style=\"    margin-bottom: 10px;\">";
        // line 123
        echo (isset($context["heading_title_celebrities"]) ? $context["heading_title_celebrities"] : null);
        echo "</h1>
            <form action=\"?route=momday/celebrities\" method=\"POST\" >
                <div class=\"secondary-title\" style=\"padding-bottom: 15px;\">
                    <div>
                        <h2 style=\"display: inline-block;margin-top: 6px;\"><a class=\"link-text\" href=\"?route=momday/celebrities\" style=\"\">";
        // line 127
        echo (isset($context["heading_title_all_celebrities"]) ? $context["heading_title_all_celebrities"] : null);
        echo "</a></h2>
                        <div class=\"float_right_en_left_ar\" style=\"display: inline-block;\">
                            <input required name=\"search_celeb\" type=\"text\" value=\"";
        // line 129
        echo (isset($context["search_celeb"]) ? $context["search_celeb"] : null);
        echo "\" class=\"float_left_en_right_ar\" style=\";width: 150px; height: 35px; padding-left: 5px;\"><button type=\"submit\" class=\"button fa fa-search class=\"float_right_en_left_ar\"\" style=\"width: 30px; height: 34px;  padding: 0;\"></button>
                        </div>

                    </div>
                </div>
            </form>
            <style>
                .secondary-title h2 {
                    font-weight: 400;
                    font-family: \"Playfair Display\";
                    font-style: normal;
                    font-size: 16px;
                    text-transform: none;
                    color: rgb(68, 67, 73);
                }
            </style>";
        // line 147
        echo "

            <ul id=\"tabs\" class=\"bottom-pad nav nav-tabs htabs full-width \">";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["language_chars"]) ? $context["language_chars"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["char"]) {
            // line 151
            echo "                    <li>
                        <a id=\"tab\" href=\"?route=momday/celebrities&char=";
            // line 152
            echo $context["char"];
            echo "\" >";
            echo $context["char"];
            echo "</a>
                    </li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['char'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "            </ul>

            <div class=\"top-pad container\">
                <div class=\"row\">";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["celebrities"]) ? $context["celebrities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["celebrity"]) {
            // line 160
            echo "                    <div class=\"xs-100 sm-50 md-50 lg-33 xl-25 float_left_en_right_ar\">
                        <div class=\" bottom-left-right-pad bottom-left-margin \">
                            <div class = \"cel-img-border\">
                                <a href = \"?route=momday/celebrity&celebrity_id=";
            // line 163
            echo $this->getAttribute($context["celebrity"], "celebrity_id", array(), "array");
            echo "\" >
                                    <img class = \"cel-img\" src=\"";
            // line 164
            echo (isset($context["celebrity_images_url"]) ? $context["celebrity_images_url"] : null);
            echo $this->getAttribute($context["celebrity"], "square_image", array(), "array");
            echo "\">
                                </a>
                                <div class=\"top-bottom-pad  cel-text\">
                                    <a href = \"?route=momday/celebrity&celebrity_id=";
            // line 167
            echo $this->getAttribute($context["celebrity"], "celebrity_id", array(), "array");
            echo "\">
                                        <p class=\"cel-text\">";
            // line 168
            echo $this->getAttribute($context["celebrity"], "first_name", array(), "array");
            echo $this->getAttribute($context["celebrity"], "last_name", array(), "array");
            echo "</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['celebrity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "
                </div>
            </div>";
        // line 179
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
        </div>

    </div>
</div>";
        // line 185
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "journal2/template/momday/celebrities.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 185,  273 => 179,  269 => 175,  256 => 168,  252 => 167,  245 => 164,  241 => 163,  236 => 160,  232 => 159,  227 => 155,  217 => 152,  214 => 151,  210 => 150,  206 => 147,  188 => 129,  183 => 127,  176 => 123,  172 => 122,  169 => 121,  165 => 120,  162 => 118,  159 => 116,  157 => 115,  155 => 114,  153 => 113,  151 => 112,  148 => 111,  143 => 109,  141 => 108,  136 => 106,  134 => 105,  132 => 103,  122 => 101,  118 => 100,  112 => 96,  19 => 1,);
    }
}
/* <style type="text/css" xmlns="http://www.w3.org/1999/html">*/
/*     .full-width {*/
/*         width: 100%;*/
/*     }*/
/* */
/*     /*.cel-img {*//* */
/*     /*width: 40%;*//* */
/*     /*max-height: 10%;*//* */
/*     /*}*//* */
/*     .cel-img {*/
/*         width: 280px;*/
/*         height: 300px;*/
/*         border: 1px solid lightgrey;*/
/*     }*/
/*     .cel-img {*/
/*         width: 100%;*/
/*         height: auto;*/
/*     }*/
/* */
/*     .cel-img-border {*/
/*         border: 1px solid lightgrey;*/
/*         transition: 1s*/
/*     }*/
/* */
/*     .cel-text {*/
/*         color: #3a3a3a;*/
/*         text-align: center;*/
/*         font-size: 18px;*/
/*     }*/
/* */
/*     .caption-border {*/
/*         width: 280px;*/
/*         width: 100%;*/
/*         border: 1px solid black;*/
/*         border-top: 0px*/
/*     }*/
/* */
/*     .top-pad {*/
/*         padding: 20px 0 0 0;*/
/*     }*/
/*     .right-pad {*/
/*         padding: 0px 8px 0 0;*/
/*     }*/
/*     .bottom-pad {*/
/*         padding: 0 0 20px 0;*/
/*     }*/
/*     .left-pad {*/
/*         padding: 0 0 0 8px;*/
/*     }*/
/*     .bottom-left-right-pad {*/
/*         padding: 0 4px 20px 4px;*/
/*     }*/
/*     .bottom-left-mar1gin {*/
/*         margin-bottom: 20px;*/
/*         margin-left: 4px;*/
/*         margin-right: 4px;*/
/*     }*/
/*     .no-pad{*/
/*         padding: 0 0 0 0;*/
/*     }*/
/*     .top-bottom-pad{*/
/*         padding: 20px 0 20px 0;*/
/*     }*/
/*     .align-right{*/
/*         align: right;*/
/*     }*/
/* */
/*     .link-text {color: black;}*/
/*     .cel-text:hover {color: goldenrod;}*/
/* */
/*     .div-hover{}*/
/* */
/*     .cel-img-border:hover {*/
/*         box-shadow: 0px 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
/*         transition: 1s;*/
/*     }*/
/* */
/*     .float_right_en_left_ar{*/
/*         float:right*/
/*     }*/
/*     html[dir="rtl"] .float_right_en_left_ar{*/
/*         float:left*/
/*     }*/
/* */
/*     .float_left_en_right_ar{*/
/*         float:left*/
/*     }*/
/*     html[dir="rtl"] .float_left_en_right_ar{*/
/*         float:right*/
/*     }*/
/* */
/* </style>*/
/* */
/* */
/* */
/* {{ header }}*/
/* <link type="text/css" href="catalog/view/theme/journal2/stylesheet/MP/journal2.css" rel="stylesheet"  />*/
/* <div id="container" class="container j-container">*/
/*     <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*             <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* */
/*     {% if error_warning %}*/
/*         <div class="alert alert-danger warning"><i class="fa fa-exclamation-circle"></i>{{ error_warning}}</div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*         <div class="alert alert-success success"><i class="fa fa-check-circle"> </i> {{ success}}</div>*/
/*     {% endif %}*/
/* */
/*     <div class="row">{{ column_left }}*/
/*         {% if column_left and column_right %}*/
/*             {% set class = 'col-sm-6' %}*/
/*         {% elseif column_left or column_right %}*/
/*             {% set class = 'col-sm-9' %}*/
/*         {% else %}*/
/*             {% set class = 'col-sm-12' %}*/
/*         {% endif %}*/
/*         {{ column_right}}*/
/*         <div id="content" class="{{ class}}">*/
/*             {{ content_top}}*/
/*             <h1 class="heading-title" style="    margin-bottom: 10px;">{{ heading_title_celebrities }}</h1>*/
/*             <form action="?route=momday/celebrities" method="POST" >*/
/*                 <div class="secondary-title" style="padding-bottom: 15px;">*/
/*                     <div>*/
/*                         <h2 style="display: inline-block;margin-top: 6px;"><a class="link-text" href="?route=momday/celebrities" style="">{{ heading_title_all_celebrities }}</a></h2>*/
/*                         <div class="float_right_en_left_ar" style="display: inline-block;">*/
/*                             <input required name="search_celeb" type="text" value="{{ search_celeb }}" class="float_left_en_right_ar" style=";width: 150px; height: 35px; padding-left: 5px;"><button type="submit" class="button fa fa-search class="float_right_en_left_ar"" style="width: 30px; height: 34px;  padding: 0;"></button>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </form>*/
/*             <style>*/
/*                 .secondary-title h2 {*/
/*                     font-weight: 400;*/
/*                     font-family: "Playfair Display";*/
/*                     font-style: normal;*/
/*                     font-size: 16px;*/
/*                     text-transform: none;*/
/*                     color: rgb(68, 67, 73);*/
/*                 }*/
/*             </style>*/
/* */
/*             {#<div></div>#}*/
/* */
/* */
/*             <ul id="tabs" class="bottom-pad nav nav-tabs htabs full-width ">*/
/*                 {% for char in language_chars %}*/
/*                     <li>*/
/*                         <a id="tab" href="?route=momday/celebrities&char={{ char }}" >{{ char }}</a>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/* */
/*             <div class="top-pad container">*/
/*                 <div class="row">*/
/*                     {% for celebrity in celebrities %}*/
/*                     <div class="xs-100 sm-50 md-50 lg-33 xl-25 float_left_en_right_ar">*/
/*                         <div class=" bottom-left-right-pad bottom-left-margin ">*/
/*                             <div class = "cel-img-border">*/
/*                                 <a href = "?route=momday/celebrity&celebrity_id={{ celebrity['celebrity_id']}}" >*/
/*                                     <img class = "cel-img" src="{{ celebrity_images_url }}{{ celebrity['square_image']}}">*/
/*                                 </a>*/
/*                                 <div class="top-bottom-pad  cel-text">*/
/*                                     <a href = "?route=momday/celebrity&celebrity_id={{ celebrity['celebrity_id']}}">*/
/*                                         <p class="cel-text">{{ celebrity['first_name']}} {{ celebrity['last_name']}}</p>*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     {% endfor %}*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/*             {{ content_bottom}}*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */
/* {{ footer}}*/
