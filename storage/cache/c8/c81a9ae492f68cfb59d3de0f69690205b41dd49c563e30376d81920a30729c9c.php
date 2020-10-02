<?php

/* journal2/template/customerpartner/sellmenu.twig */
class __TwigTemplate_4f38e597cf91d4813f227ce701ca437305671b05de682b7f7125b95199018f68 extends Twig_Template
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
ul.wk li a{
color : #000;
padding :5px;
}
.open>.dropdown-menu.wk{
right : auto;
}
header{
z-index : 99 !important;
}
header .links .wk a{
display:block;
text-align :left;
}
</style>";
        // line 17
        if ((array_key_exists("module_marketplace_status", $context) && (isset($context["module_marketplace_status"]) ? $context["module_marketplace_status"] : null))) {
            // line 18
            echo "<script>
\$('body').on('click',function(e) {
if(\$('.wk-dropdown').hasClass('open')) {
\$('.wk').hide()
}
})
</script>
    <div class=\"dropdown wk-dropdown\" style=\"cursor:pointer;\" onClick=\"\$('.wk').toggle();\"><a href=\"";
            // line 25
            echo (isset($context["menusell"]) ? $context["menusell"] : null);
            echo "\" title=\"";
            echo (isset($context["menusell"]) ? $context["menusell"] : null);
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-users\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo (isset($context["text_sell_header"]) ? $context["text_sell_header"] : null);
            echo "</span> <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu dropdown-menu-right wk\">";
            // line 27
            if (((((isset($context["logged"]) ? $context["logged"] : null) && (isset($context["chkIsPartner"]) ? $context["chkIsPartner"] : null)) && array_key_exists("marketplace_seller_mode", $context)) && (isset($context["marketplace_seller_mode"]) ? $context["marketplace_seller_mode"] : null))) {
                // line 28
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)) && twig_in_filter("profile", (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)))) {
                    // line 29
                    echo "                <li><a href=\"";
                    echo (isset($context["mp_profile"]) ? $context["mp_profile"] : null);
                    echo "\">";
                    echo (isset($context["text_my_profile"]) ? $context["text_my_profile"] : null);
                    echo "</a></li>";
                }
                // line 31
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)) && twig_in_filter("dashboard", (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)))) {
                    // line 32
                    echo "                <li><a href=\"";
                    echo (isset($context["mp_dashboard"]) ? $context["mp_dashboard"] : null);
                    echo "\">";
                    echo (isset($context["text_dashboard"]) ? $context["text_dashboard"] : null);
                    echo "</a></li>";
                }
                // line 34
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)) && twig_in_filter("orderhistory", (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)))) {
                    // line 35
                    echo "                <li><a href=\"";
                    echo (isset($context["mp_orderhistory"]) ? $context["mp_orderhistory"] : null);
                    echo "\">";
                    echo (isset($context["text_orderhistory"]) ? $context["text_orderhistory"] : null);
                    echo "</a></li>";
                }
                // line 37
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)) && twig_in_filter("transaction", (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)))) {
                    // line 38
                    echo "              <li><a href=\"";
                    echo (isset($context["mp_transaction"]) ? $context["mp_transaction"] : null);
                    echo "\">";
                    echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
                    echo "</a></li>";
                }
                // line 40
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)) && twig_in_filter("productlist", (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)))) {
                    // line 41
                    echo "                <li><a href=\"";
                    echo (isset($context["mp_productlist"]) ? $context["mp_productlist"] : null);
                    echo "\">";
                    echo (isset($context["text_productlist"]) ? $context["text_productlist"] : null);
                    echo "</a></li>";
                }
                // line 44
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)) && twig_in_filter("addproduct", (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)))) {
                    // line 45
                    echo "                <li><a href=\"";
                    echo (isset($context["mp_addproduct"]) ? $context["mp_addproduct"] : null);
                    echo "\">";
                    echo (isset($context["text_addproduct"]) ? $context["text_addproduct"] : null);
                    echo "</a></li>";
                }
                // line 48
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)) && twig_in_filter("downloads", (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)))) {
                    // line 49
                    echo "                <li><a href=\"";
                    echo (isset($context["mp_download"]) ? $context["mp_download"] : null);
                    echo "\">";
                    echo (isset($context["text_download"]) ? $context["text_download"] : null);
                    echo "</a></li>";
                }
                // line 51
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)) && twig_in_filter("manageshipping", (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)))) {
                    // line 52
                    echo "                <li><a href=\"";
                    echo (isset($context["mp_add_shipping_mod"]) ? $context["mp_add_shipping_mod"] : null);
                    echo "\">";
                    echo (isset($context["text_wkshipping"]) ? $context["text_wkshipping"] : null);
                    echo "</a></li>";
                }
                // line 54
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)) && twig_in_filter("category", (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)))) {
                    // line 55
                    echo "                <li><a href=\"";
                    echo (isset($context["mp_category"]) ? $context["mp_category"] : null);
                    echo "\">";
                    echo (isset($context["text_category"]) ? $context["text_category"] : null);
                    echo "</a></li>";
                }
                // line 57
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)) && twig_in_filter("review", (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)))) {
                    // line 58
                    echo "                <li><a href=\"";
                    echo (isset($context["mp_review"]) ? $context["mp_review"] : null);
                    echo "\">";
                    echo (isset($context["text_review"]) ? $context["text_review"] : null);
                    echo "</a></li>";
                }
                // line 60
                if (((array_key_exists("marketplace_allowed_account_menu", $context) && (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)) && twig_in_filter("information", (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)))) {
                    // line 61
                    echo "                <li><a href=\"";
                    echo (isset($context["mp_information"]) ? $context["mp_information"] : null);
                    echo "\">";
                    echo (isset($context["text_information"]) ? $context["text_information"] : null);
                    echo "</a></li>";
                }
                // line 63
                echo "            <li id=\"wk-notify\"><a id=\"notification\" style=\"position:relative;\" data-toggle=\"modal\" data-target=\"#myModal-notification\">";
                echo (isset($context["text_notifications"]) ? $context["text_notifications"] : null);
                if ((array_key_exists("notification_total", $context) && ((isset($context["notification_total"]) ? $context["notification_total"] : null) > 0))) {
                    echo "<span class=\"badge\">";
                    echo (isset($context["notification_total"]) ? $context["notification_total"] : null);
                    echo "</span>";
                }
                echo "</a></li>
            <li role=\"presentation\" class=\"divider\"></li>";
                // line 65
                if ((array_key_exists("separate_view", $context) && (isset($context["separate_view"]) ? $context["separate_view"] : null))) {
                    // line 66
                    echo "              <li class=\"top-menu-mp\"><a href=\"";
                    echo (isset($context["separate_view"]) ? $context["separate_view"] : null);
                    echo "\">";
                    echo (isset($context["text_separate_view"]) ? $context["text_separate_view"] : null);
                    echo "</a></li>";
                }
            }
            // line 69
            echo "            <li><a href=\"";
            echo (isset($context["menusell"]) ? $context["menusell"] : null);
            echo "\">";
            echo (isset($context["text_sell_header"]) ? $context["text_sell_header"] : null);
            echo "</a></li>
        </ul>
    </div>";
        }
    }

    public function getTemplateName()
    {
        return "journal2/template/customerpartner/sellmenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 69,  168 => 66,  166 => 65,  156 => 63,  149 => 61,  147 => 60,  140 => 58,  138 => 57,  131 => 55,  129 => 54,  122 => 52,  120 => 51,  113 => 49,  111 => 48,  104 => 45,  102 => 44,  95 => 41,  93 => 40,  86 => 38,  84 => 37,  77 => 35,  75 => 34,  68 => 32,  66 => 31,  59 => 29,  57 => 28,  55 => 27,  47 => 25,  38 => 18,  36 => 17,  19 => 1,);
    }
}
/* <style>*/
/* ul.wk li a{*/
/* color : #000;*/
/* padding :5px;*/
/* }*/
/* .open>.dropdown-menu.wk{*/
/* right : auto;*/
/* }*/
/* header{*/
/* z-index : 99 !important;*/
/* }*/
/* header .links .wk a{*/
/* display:block;*/
/* text-align :left;*/
/* }*/
/* </style>*/
/* {% if module_marketplace_status is defined and module_marketplace_status %}*/
/* <script>*/
/* $('body').on('click',function(e) {*/
/* if($('.wk-dropdown').hasClass('open')) {*/
/* $('.wk').hide()*/
/* }*/
/* })*/
/* </script>*/
/*     <div class="dropdown wk-dropdown" style="cursor:pointer;" onClick="$('.wk').toggle();"><a href="{{ menusell }}" title="{{ menusell }}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_sell_header }}</span> <span class="caret"></span></a>*/
/*         <ul class="dropdown-menu dropdown-menu-right wk">*/
/*           {% if logged and chkIsPartner and marketplace_seller_mode is defined and marketplace_seller_mode %}*/
/*             {% if marketplace_allowed_account_menu is defined and marketplace_allowed_account_menu and 'profile' in marketplace_allowed_account_menu %}*/
/*                 <li><a href="{{ mp_profile }}">{{ text_my_profile }}</a></li>*/
/*             {% endif %}*/
/*             {% if marketplace_allowed_account_menu is defined and marketplace_allowed_account_menu and 'dashboard' in marketplace_allowed_account_menu %}*/
/*                 <li><a href="{{ mp_dashboard }}">{{ text_dashboard }}</a></li>*/
/*             {% endif %}*/
/*             {% if marketplace_allowed_account_menu is defined and marketplace_allowed_account_menu and 'orderhistory' in marketplace_allowed_account_menu %}*/
/*                 <li><a href="{{ mp_orderhistory }}">{{ text_orderhistory }}</a></li>*/
/*             {% endif %}*/
/*             {% if marketplace_allowed_account_menu is defined and marketplace_allowed_account_menu and 'transaction' in marketplace_allowed_account_menu %}*/
/*               <li><a href="{{ mp_transaction }}">{{ text_transaction }}</a></li>*/
/*             {% endif %}*/
/*             {% if marketplace_allowed_account_menu is defined and marketplace_allowed_account_menu and 'productlist' in marketplace_allowed_account_menu %}*/
/*                 <li><a href="{{ mp_productlist }}">{{ text_productlist }}</a></li>*/
/*             {% endif %}*/
/* */
/*             {% if marketplace_allowed_account_menu is defined and marketplace_allowed_account_menu and 'addproduct' in marketplace_allowed_account_menu %}*/
/*                 <li><a href="{{ mp_addproduct }}">{{ text_addproduct }}</a></li>*/
/*             {% endif %}*/
/* */
/*             {% if marketplace_allowed_account_menu is defined and marketplace_allowed_account_menu and 'downloads' in marketplace_allowed_account_menu %}*/
/*                 <li><a href="{{ mp_download }}">{{ text_download }}</a></li>*/
/*             {% endif %}*/
/*             {% if marketplace_allowed_account_menu is defined and marketplace_allowed_account_menu and 'manageshipping' in marketplace_allowed_account_menu %}*/
/*                 <li><a href="{{ mp_add_shipping_mod }}">{{ text_wkshipping }}</a></li>*/
/*             {% endif %}*/
/*             {% if marketplace_allowed_account_menu is defined and marketplace_allowed_account_menu and 'category' in marketplace_allowed_account_menu %}*/
/*                 <li><a href="{{ mp_category }}">{{ text_category }}</a></li>*/
/*             {% endif %}*/
/*             {% if marketplace_allowed_account_menu is defined and marketplace_allowed_account_menu and 'review' in marketplace_allowed_account_menu %}*/
/*                 <li><a href="{{ mp_review }}">{{ text_review }}</a></li>*/
/*             {% endif %}*/
/*             {% if marketplace_allowed_account_menu is defined and marketplace_allowed_account_menu and 'information' in marketplace_allowed_account_menu %}*/
/*                 <li><a href="{{ mp_information }}">{{ text_information }}</a></li>*/
/*             {% endif %}*/
/*             <li id="wk-notify"><a id="notification" style="position:relative;" data-toggle="modal" data-target="#myModal-notification">{{ text_notifications }} {% if notification_total is defined and notification_total > 0 %}<span class="badge">{{ notification_total }}</span>{% endif %}</a></li>*/
/*             <li role="presentation" class="divider"></li>*/
/*             {% if separate_view is defined and separate_view %}*/
/*               <li class="top-menu-mp"><a href="{{ separate_view }}">{{ text_separate_view }}</a></li>*/
/*             {% endif %}*/
/*           {% endif %}*/
/*             <li><a href="{{ menusell }}">{{ text_sell_header }}</a></li>*/
/*         </ul>*/
/*     </div>*/
/* {% endif %}*/
/* */
