<?php

/* journal2/template/journal2/assets/js.twig */
class __TwigTemplate_8cd59dd86b914deae2d8ad62f568d435d67f6996d1ccd24a35eea482efe62fe8 extends Twig_Template
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
        echo "Journal.contactPrivacy = parseInt('";
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "popup_privacy_information.information_id", 1 => "0"), "method");
        echo "', 10);
Journal.contactPrivacyError = '";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "popup_privacy_information.information_error"), "method");
        echo "';

Journal.notificationTimer = parseInt('";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "notification_hide"), "method");
        echo "', 10);

Journal.quickviewText = '";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "quickview_button_text"), "method");
        echo "';

Journal.scrollToTop = parseInt('";
        // line 8
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "scroll_to_top", 1 => "1"), "method");
        echo "', 10);

Journal.searchInDescription =";
        // line 10
        echo ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_autocomplete_include_description", 1 => "1"), "method") == "1")) ? ("true") : ("false"));
        echo ";

Journal.galleryZoom =";
        // line 12
        echo ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_gallery_zoom", 1 => "on"), "method") == "on")) ? ("true") : ("false"));
        echo ";
Journal.galleryThumb =";
        // line 13
        echo ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_gallery_thumbs", 1 => "on"), "method") == "on")) ? ("true") : ("false"));
        echo ";
Journal.galleryThumbHide =";
        // line 14
        echo ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_gallery_thumbs_hide", 1 => "on"), "method") == "off")) ? ("true") : ("false"));
        echo ";
Journal.galleryThumbWidth = parseInt('";
        // line 15
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_gallery_thumbs_width", 1 => "100"), "method");
        echo "', 10);
Journal.galleryThumbHeight = parseInt('";
        // line 16
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_gallery_thumbs_height", 1 => "100"), "method");
        echo "', 10);
Journal.galleryThumbSpacing = parseInt('";
        // line 17
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "pp_gallery_thumbs_spacing", 1 => "7"), "method");
        echo "', 10);
Journal.galleryBarsDelay = parseInt('";
        // line 18
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "hide_gallery_bars_after", 1 => "5000"), "method");
        echo "', 10);

Journal.infiniteScrollStatus =";
        // line 20
        echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "infinite_scroll", 1 => "1"), "method")) ? ("true") : ("false"));
        echo ";
Journal.infiniteScrollLoadingText = '";
        // line 21
        echo twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "infinite_scroll_loading_text", 1 => "Loading"), "method"), "'", "\\'");
        echo "';
Journal.infiniteScrollNoMoreItemsText = '";
        // line 22
        echo twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "infinite_scroll_no_more_items_text", 1 => "No items left."), "method"), "'", "\\'");
        echo "';
Journal.infiniteScrollLoadMoreItemsText = '";
        // line 23
        echo twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "infinite_scroll_load_more_items_text", 1 => "Load more"), "method"), "'", "\\'");
        echo "';
Journal.infiniteScrollLoadMoreItemsOffset = parseInt('";
        // line 24
        echo twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "infinite_scroll_load_more_items_offset", 1 => "0"), "method"), "'", "\\'");
        echo "', 10);
Journal.hasCountdownEnabled =";
        // line 25
        echo ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") == "never")) ? ("false") : ("true"));
        echo ";
Journal.hasStickyScroll =";
        // line 26
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "sticky_header_hide", 1 => "1"), "method");
        echo ";


Journal.BASE_HREF = 'url(' + \$('base').attr('href') + ')';

\$(document).ready(function () {

\$(\".product-page .rating a\").click(function() {
    \$('html, body').animate({
        scrollTop: \$(\"#tabs\").offset().top - 50
    }, 600);
});

if (\$('html').hasClass('filter-on-mobile')) {
\$('.journal-sf').before(\$('<div class=\"open-filter\" style=\"display:none\">";
        // line 40
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "filter_mobile_text", 1 => "Product Filters"), "method");
        echo "</div>'));
\$('.open-filter').on('click', function () {
var \$filter = \$('.journal-sf .box').first();
if (\$filter.hasClass('is-visible')) {
\$('.side-column .journal-sf .box').slideUp(300);
\$('.sf-reset').fadeOut(200);
\$filter.removeClass('is-visible');
} else {
\$('.side-column .journal-sf .box').slideDown(300);
\$('.sf-reset').fadeIn(200);
\$filter.addClass('is-visible');
}
});
}

Journal.productPage();";
        // line 57
        if (( !$this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "html_classes", array()), "hasClass", array(0 => "mobile"), "method") && ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "sticky_header", 1 => "1"), "method") == "1") && (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getDevice")) == "desktop")) || (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "sticky_header_tablet", 1 => "1"), "method") == "1") && (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getDevice")) == "tablet"))))) {
            // line 58
            echo "  Journal.enableStickyHeader(";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "boxed_top_spacing", 1 => 0), "method");
            echo ");";
        }
        // line 61
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "mobile_menu_cart_display", 1 => "on"), "method") == "off")) {
            // line 62
            echo "  \$('header').addClass('menu-cart-off');";
        }
        // line 65
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "sticky_menu_phone_2", 1 => "on"), "method") == "on")) {
            // line 66
            echo "  \$(window).scroll( function() {
  if (\$(window).scrollTop() > \$('.journal-cart').offset().top){
  \$('header').addClass('phone-sticky-cart');
  }
  else{
  \$('header').removeClass('phone-sticky-cart');
  }

  if (\$(window).scrollTop() > \$('.journal-cart').offset().top + 40){
  \$('header').addClass('phone-sticky-menu');
  }
  else{
  \$('header').removeClass('phone-sticky-menu');
  }
  });";
        }
        // line 84
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_tabs_position", 1 => "on"), "method") == "off")) {
            // line 85
            echo "  \$('.product-tabs').insertAfter('.product-info');";
        }
        // line 88
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_auto_update_price", 1 => "1"), "method") == "1")) {
            // line 89
            echo "  Journal.enableProductOptions();
  Journal.updatePrice = true;";
        }
        // line 93
        if ((call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getDevice")) == "desktop")) {
            // line 94
            echo "  Journal.enableSideBlocks();";
        }
        // line 98
        if (((((call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getDevice")) == "desktop") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_autocomplete", 1 => "1"), "method") == "1")) || ((call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getDevice")) == "tablet") && ($this->getAttribute($this->getAttribute(        // line 99
(isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_autocomplete_tablet", 1 => "1"), "method") == "1"))) || ((call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getDevice")) == "phone") && ($this->getAttribute($this->getAttribute(        // line 100
(isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "search_autocomplete_phone", 1 => "1"), "method") == "1")))) {
            // line 101
            echo "  Journal.searchAutoComplete();";
        }
        // line 105
        if (((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "quickview_status"), "method") == "1") && (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getDevice")) == "desktop")) &&  !$this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "html_classes", array()), "hasClass", array(0 => "ie8"), "method"))) {
            // line 106
            echo "  Journal.enableQuickView();
  Journal.quickViewStatus = true;";
        } else {
            // line 109
            echo "  Journal.quickViewStatus = false;";
        }
        // line 113
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_cloud_zoom"), "method") == "1") && (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getDevice")) == "desktop"))) {
            // line 114
            echo "  if (\$('html').hasClass('product-page') || \$('html').hasClass('quickview')) {
  Journal.enableCloudZoom('";
            // line 115
            echo ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_cloud_zoom_inner", 1 => "0"), "method") == "0")) ? ("standard") : ("inner"));
            echo "');
  }";
        }
        // line 120
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery"), "method") == "1")) {
            // line 121
            echo "  Journal.productPageGallery();";
        } else {
            // line 123
            echo "  \$('.product-info .image a').css('cursor','default').click(function(){
  return false;
  });";
        }
        // line 129
        if (((((call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getDevice")) == "desktop") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "scroll_top", 1 => "1"), "method") == "1")) || ((call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getDevice")) == "tablet") && ($this->getAttribute($this->getAttribute(        // line 130
(isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "scroll_top_tablet", 1 => "1"), "method") == "1"))) || ((call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getDevice")) == "phone") && ($this->getAttribute($this->getAttribute(        // line 131
(isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "scroll_top_phone", 1 => "1"), "method") == "1")))) {
            // line 132
            echo "  \$(window).scroll(function () {
  if (\$(this).scrollTop() > 300) {
  \$('.scroll-top').fadeIn(200);
  } else {
  \$('.scroll-top').fadeOut(200);
  }
  });

  \$('.scroll-top').click(function () {
  \$('html, body').animate({scrollTop: 0}, 700);
  });";
        }
        // line 144
        echo "

\$('#top-modules > .hide-on-mobile').parent().addClass('hide-on-mobile');
\$('#bottom-modules > .hide-on-mobile').parent().addClass('hide-on-mobile');

\$('#top-modules .gutter-on').parent().addClass('gutter');
\$('#bottom-modules .gutter-on').parent().addClass('gutter');

if (Journal.infiniteScrollStatus && \$('.main-products').length) {
Journal.infiniteScroll();
}

\$(window).resize();

Journal.init();
});

/* Custom JS */";
        // line 162
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "custom_js"), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/assets/js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 162,  237 => 144,  224 => 132,  222 => 131,  221 => 130,  220 => 129,  215 => 123,  212 => 121,  210 => 120,  205 => 115,  202 => 114,  200 => 113,  197 => 109,  193 => 106,  191 => 105,  188 => 101,  186 => 100,  185 => 99,  184 => 98,  181 => 94,  179 => 93,  175 => 89,  173 => 88,  170 => 85,  168 => 84,  151 => 66,  149 => 65,  146 => 62,  144 => 61,  139 => 58,  137 => 57,  119 => 40,  102 => 26,  98 => 25,  94 => 24,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  73 => 18,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  53 => 13,  49 => 12,  44 => 10,  39 => 8,  34 => 6,  29 => 4,  24 => 2,  19 => 1,);
    }
}
/* Journal.contactPrivacy = parseInt('{{ journal2.settings.get('popup_privacy_information.information_id', '0') }}', 10);*/
/* Journal.contactPrivacyError = '{{ journal2.settings.get('popup_privacy_information.information_error') }}';*/
/* */
/* Journal.notificationTimer = parseInt('{{ journal2.settings.get('notification_hide') }}', 10);*/
/* */
/* Journal.quickviewText = '{{ journal2.settings.get('quickview_button_text') }}';*/
/* */
/* Journal.scrollToTop = parseInt('{{ journal2.settings.get('scroll_to_top', '1') }}', 10);*/
/* */
/* Journal.searchInDescription = {{ journal2.settings.get('search_autocomplete_include_description', '1') == '1' ? 'true' : 'false' }};*/
/* */
/* Journal.galleryZoom = {{ journal2.settings.get('pp_gallery_zoom', 'on') == 'on' ? 'true' : 'false' }};*/
/* Journal.galleryThumb = {{ journal2.settings.get('pp_gallery_thumbs', 'on') == 'on' ? 'true' : 'false' }};*/
/* Journal.galleryThumbHide = {{ journal2.settings.get('pp_gallery_thumbs_hide', 'on') == 'off' ? 'true' : 'false' }};*/
/* Journal.galleryThumbWidth = parseInt('{{ journal2.settings.get('pp_gallery_thumbs_width', '100') }}', 10);*/
/* Journal.galleryThumbHeight = parseInt('{{ journal2.settings.get('pp_gallery_thumbs_height', '100') }}', 10);*/
/* Journal.galleryThumbSpacing = parseInt('{{ journal2.settings.get('pp_gallery_thumbs_spacing', '7') }}', 10);*/
/* Journal.galleryBarsDelay = parseInt('{{ journal2.settings.get('hide_gallery_bars_after', '5000') }}', 10);*/
/* */
/* Journal.infiniteScrollStatus = {{ journal2.settings.get('infinite_scroll', '1') ? 'true' : 'false' }};*/
/* Journal.infiniteScrollLoadingText = '{{ journal2.settings.get('infinite_scroll_loading_text', 'Loading') | replace ("'","\\'") }}';*/
/* Journal.infiniteScrollNoMoreItemsText = '{{ journal2.settings.get('infinite_scroll_no_more_items_text', 'No items left.') | replace ("'","\\'") }}';*/
/* Journal.infiniteScrollLoadMoreItemsText = '{{ journal2.settings.get('infinite_scroll_load_more_items_text', 'Load more') | replace ("'","\\'") }}';*/
/* Journal.infiniteScrollLoadMoreItemsOffset = parseInt('{{ journal2.settings.get('infinite_scroll_load_more_items_offset', '0') | replace ("'","\\'") }}', 10);*/
/* Journal.hasCountdownEnabled = {{ journal2.settings.get('show_countdown', 'never') == 'never' ? 'false' : 'true' }};*/
/* Journal.hasStickyScroll = {{ journal2.settings.get('sticky_header_hide', '1')}};*/
/* */
/* */
/* Journal.BASE_HREF = 'url(' + $('base').attr('href') + ')';*/
/* */
/* $(document).ready(function () {*/
/* */
/* $(".product-page .rating a").click(function() {*/
/*     $('html, body').animate({*/
/*         scrollTop: $("#tabs").offset().top - 50*/
/*     }, 600);*/
/* });*/
/* */
/* if ($('html').hasClass('filter-on-mobile')) {*/
/* $('.journal-sf').before($('<div class="open-filter" style="display:none">{{ journal2.settings.get('filter_mobile_text', 'Product Filters') }}</div>'));*/
/* $('.open-filter').on('click', function () {*/
/* var $filter = $('.journal-sf .box').first();*/
/* if ($filter.hasClass('is-visible')) {*/
/* $('.side-column .journal-sf .box').slideUp(300);*/
/* $('.sf-reset').fadeOut(200);*/
/* $filter.removeClass('is-visible');*/
/* } else {*/
/* $('.side-column .journal-sf .box').slideDown(300);*/
/* $('.sf-reset').fadeIn(200);*/
/* $filter.addClass('is-visible');*/
/* }*/
/* });*/
/* }*/
/* */
/* Journal.productPage();*/
/* */
/* {% if not journal2.html_classes.hasClass('mobile') and ((journal2.settings.get('sticky_header', '1') == '1' and staticCall('Journal2Utils', 'getDevice') == 'desktop') or (journal2.settings.get('sticky_header_tablet', '1') == '1' and staticCall('Journal2Utils', 'getDevice') == 'tablet')) %}*/
/*   Journal.enableStickyHeader({{ journal2.settings.get('boxed_top_spacing', 0) }});*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('mobile_menu_cart_display', 'on') == 'off' %}*/
/*   $('header').addClass('menu-cart-off');*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('sticky_menu_phone_2', 'on') == 'on' %}*/
/*   $(window).scroll( function() {*/
/*   if ($(window).scrollTop() > $('.journal-cart').offset().top){*/
/*   $('header').addClass('phone-sticky-cart');*/
/*   }*/
/*   else{*/
/*   $('header').removeClass('phone-sticky-cart');*/
/*   }*/
/* */
/*   if ($(window).scrollTop() > $('.journal-cart').offset().top + 40){*/
/*   $('header').addClass('phone-sticky-menu');*/
/*   }*/
/*   else{*/
/*   $('header').removeClass('phone-sticky-menu');*/
/*   }*/
/*   });*/
/* {% endif %}*/
/* */
/* */
/* {% if journal2.settings.get('product_page_tabs_position', 'on') == 'off' %}*/
/*   $('.product-tabs').insertAfter('.product-info');*/
/* {% endif %}*/
/* */
/* {% if journal2.settings.get('product_page_auto_update_price', '1') == '1' %}*/
/*   Journal.enableProductOptions();*/
/*   Journal.updatePrice = true;*/
/* {% endif %}*/
/* */
/* {% if staticCall('Journal2Utils', 'getDevice') == 'desktop' %}*/
/*   Journal.enableSideBlocks();*/
/* {% endif %}*/
/* */
/* {# enable search autocomplete #}*/
/* {% if (staticCall('Journal2Utils', 'getDevice') == 'desktop' and journal2.settings.get('search_autocomplete', '1') == '1') or*/
/* (staticCall('Journal2Utils', 'getDevice') == 'tablet' and journal2.settings.get('search_autocomplete_tablet', '1') == '1') or*/
/* (staticCall('Journal2Utils', 'getDevice') == 'phone' and journal2.settings.get('search_autocomplete_phone', '1') == '1') %}*/
/*   Journal.searchAutoComplete();*/
/* {% endif %}*/
/* */
/* {# enable quickview #}*/
/* {% if journal2.settings.get('quickview_status') == '1' and staticCall('Journal2Utils', 'getDevice') == 'desktop' and not journal2.html_classes.hasClass("ie8") %}*/
/*   Journal.enableQuickView();*/
/*   Journal.quickViewStatus = true;*/
/* {% else %}*/
/*   Journal.quickViewStatus = false;*/
/* {% endif %}*/
/* */
/* {# enable cloudzoom #}*/
/* {% if journal2.settings.get('product_page_cloud_zoom') == '1' and staticCall('Journal2Utils', 'getDevice') == 'desktop' %}*/
/*   if ($('html').hasClass('product-page') || $('html').hasClass('quickview')) {*/
/*   Journal.enableCloudZoom('{{ journal2.settings.get('product_page_cloud_zoom_inner', '0') == '0' ? 'standard' : 'inner' }}');*/
/*   }*/
/* {% endif %}*/
/* */
/* {# enable product page gallery #}*/
/* {% if journal2.settings.get('product_page_gallery') == '1' %}*/
/*   Journal.productPageGallery();*/
/* {% else %}*/
/*   $('.product-info .image a').css('cursor','default').click(function(){*/
/*   return false;*/
/*   });*/
/* {% endif %}*/
/* */
/* */
/* {% if (staticCall('Journal2Utils', 'getDevice') == 'desktop' and journal2.settings.get('scroll_top', '1') == '1') or*/
/* (staticCall('Journal2Utils', 'getDevice') == 'tablet' and journal2.settings.get('scroll_top_tablet', '1') == '1') or*/
/* (staticCall('Journal2Utils', 'getDevice') == 'phone' and journal2.settings.get('scroll_top_phone', '1') == '1') %}*/
/*   $(window).scroll(function () {*/
/*   if ($(this).scrollTop() > 300) {*/
/*   $('.scroll-top').fadeIn(200);*/
/*   } else {*/
/*   $('.scroll-top').fadeOut(200);*/
/*   }*/
/*   });*/
/* */
/*   $('.scroll-top').click(function () {*/
/*   $('html, body').animate({scrollTop: 0}, 700);*/
/*   });*/
/* {% endif %}*/
/* */
/* */
/* $('#top-modules > .hide-on-mobile').parent().addClass('hide-on-mobile');*/
/* $('#bottom-modules > .hide-on-mobile').parent().addClass('hide-on-mobile');*/
/* */
/* $('#top-modules .gutter-on').parent().addClass('gutter');*/
/* $('#bottom-modules .gutter-on').parent().addClass('gutter');*/
/* */
/* if (Journal.infiniteScrollStatus && $('.main-products').length) {*/
/* Journal.infiniteScroll();*/
/* }*/
/* */
/* $(window).resize();*/
/* */
/* Journal.init();*/
/* });*/
/* */
/* /* Custom JS *//* */
/* {{ journal2.settings.get('custom_js') }}*/
/* */
